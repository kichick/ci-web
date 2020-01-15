<?php

class Laporan extends CI_Controller
{
    public function index()
    {

        $data['judul'] = 'Laporan Transaksi';
        $this->load->model('Laporan_model');
        $data['laporan'] = $this->Laporan_model->getAllLaporan();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->db->get('product')->result_array();

        $this->load->view('backend/templates/header', $data);
        $this->load->view('backend/templates/sidebar', $data);
        $this->load->view('backend/templates/topbar', $data);
        $this->load->view('backend/laporan/index', $data);
        $this->load->view('backend/templates/footer');
    }
}
