<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Cart extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Cart';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header_kontak', $data);
        $this->load->view('frontend/home/cart');
        $this->load->view('templates/footer_kontak');
    }

    public function tambah($id)
    {

        $jual = $this->Cart_model->totalCart($id);

        $data = [
            'id' => $jual->id_jual,
            'name' => $jual->nama_barang,
            'price' => $jual->harga_barang,
            'qty' => 1,
            'image' => $jual->image
        ];


        $this->cart->insert($data);
        redirect('home/shop');
    }

    public function hapus()
    {
        $this->cart->destroy();
        redirect();
    }
}
