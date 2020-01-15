<?php

class Konfirmasi extends CI_Controller
{
    public function index()
    {

        $data['judul'] = 'Konfirmasi Checkout';
        $this->load->model('Konfirmasi_model');
        $data['checkout'] = $this->Konfirmasi_model->getAllKonfirmasi();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('backend/templates/header', $data);
        $this->load->view('backend/templates/sidebar', $data);
        $this->load->view('backend/templates/topbar', $data);
        $this->load->view('backend/checkout/index', $data);
        $this->load->view('backend/templates/footer');
    }
    public function detail($id)
    {
        $data['judul'] = 'Detail Konfirmasi Checkout';
        $this->load->model('Konfirmasi_model');
        $data['checkout'] = $this->Konfirmasi_model->getKonfirmasiById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('backend/templates/header', $data);
        $this->load->view('backend/templates/sidebar', $data);
        $this->load->view('backend/templates/topbar', $data);
        $this->load->view('backend/checkout/detail', $data);
        $this->load->view('backend/templates/footer');
    }
}