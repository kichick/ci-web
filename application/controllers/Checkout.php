<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Checkout extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Checkout';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['jual'] = $this->Jual_model->getAllJual();


        $data['gender'] = $this->db->get('kategori_gender')->result_array();
        $data['item'] = $this->db->get('kategori_item')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('frontend/home/checkout');
        $this->load->view('templates/footer');
    }

    public function proses()
    {


        $data['judul'] = 'Checkout';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['jual'] = $this->Jual_model->getAllJual();
        $data['gender'] = $this->db->get('kategori_gender')->result_array();
        $data['item'] = $this->db->get('kategori_item')->result_array();



        $is_processed = $this->Konfirmasi_model->index();

        if ($is_processed) {
            $this->cart->destroy();
            $this->load->view('templates/header', $data);
            $this->load->view('frontend/home/index');
            $this->load->view('templates/footer');
        } else {
            echo "Maaf, Pesanan gagal diproses";
        }
    }
}
