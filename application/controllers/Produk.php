<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Produk_model');
        // is_logged_in();
    }

    public function index()
    {
        $data['judul'] = 'Produk';
        $data['product'] = $this->Produk_model->getAllProduk();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['gender'] = $this->db->get('kategori_gender')->result_array();
        $data['item'] = $this->db->get('kategori_item')->result_array();

            $this->load->view('backend/templates/header', $data);
            $this->load->view('backend/templates/sidebar', $data);
            $this->load->view('backend/templates/topbar', $data);
            $this->load->view('backend/produk/index', $data);
            $this->load->view('backend/templates/footer');
    }

    public function tambah()
    {
        $data ['judul'] = 'Produk';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['gender'] = $this->db->get('kategori_gender')->result_array();
        $data['item'] = $this->db->get('kategori_item')->result_array();

            $this->form_validation->set_rules('name', 'Nama', 'required');
            $this->form_validation->set_rules('harga', 'Harga', 'required');
            $this->form_validation->set_rules('id_kategori_gender', 'Gender', 'required');
            $this->form_validation->set_rules('id_kategori_item', 'Item', 'required');
            $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if ($this->form_validation->run() == false){
            $this->load->view('backend/templates/header', $data);
            $this->load->view('backend/templates/sidebar', $data);
            $this->load->view('backend/templates/topbar', $data);
            $this->load->view('backend/produk/tambah', $data);
            $this->load->view('backend/templates/footer');

        }else {
             $data = [
            'name' => $this->input->post('name'),
            'harga' => $this->input->post('harga'),
            'id_kategori_gender' => $this->input->post('id_kategori_gender'),
            'id_kategori_item' => $this->input->post('id_kategori_item'),
            'deskripsi' => $this->input->post('deskripsi')
        ];
            $upload_image = $_FILES['image_produk']['name'];  
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '204000';
                $config['upload_path'] = './assets/images/produk/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image_produk')) {

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image_produk', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
    
            $this->db->insert('product', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Produk Berhasil Dihapus</div>');
            redirect('produk');
        }
    }

    public function editdata($id){
        $data['judul'] = 'Produk';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['product'] = $this->db->get_where('product', ['id_produk' => $id])->row_array();
        
        $data['gender'] = $this->db->get('kategori_gender')->result_array();
        $data['item'] = $this->db->get('kategori_item')->result_array();

        $this->form_validation->set_rules('name', 'Nama', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        $this->form_validation->set_rules('id_kategori_gender', 'Gender', 'required');
        $this->form_validation->set_rules('id_kategori_item', 'Item', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('backend/templates/header', $data);
            $this->load->view('backend/templates/sidebar', $data);
            $this->load->view('backend/templates/topbar', $data);
            $this->load->view('backend/produk/edit', $data);
            $this->load->view('backend/templates/footer');
        } else {
            $data = [
                'name' => $this->input->post('name'),
                'harga' => $this->input->post('harga'),
                'id_kategori_gender' => $this->input->post('id_kategori_gender'),
                'id_kategori_item' => $this->input->post('id_kategori_item'),
                'deskripsi' => $this->input->post('deskripsi')
            ];
            $upload_image = $_FILES['image_produk']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '204000';
                $config['upload_path'] = './assets/images/produk/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image_produk')) {

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image_produk', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->where('id_produk', $this->input->post('id_produk'));
            $this->db->update('product', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Produk Berhasil Diedit</div>');
            redirect('produk');
        }
    }

    public function deleteProduct($id)
    {
        $this->db->delete('product', ['id_produk' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Produk Berhasil Dihapus</div>');
        redirect('produk');
    }
    }
