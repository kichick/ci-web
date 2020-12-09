<?php

class Konfirmasi extends CI_Controller
{
    public function index()
    {

        $data['judul'] = 'Konfirmasi Checkout';
        $this->load->model('Konfirmasi_model');
        $data['checkout'] = $this->Konfirmasi_model->tampil_data();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('backend/templates/header', $data);
        $this->load->view('backend/templates/sidebar', $data);
        $this->load->view('backend/templates/topbar', $data);
        $this->load->view('backend/checkout/index', $data);
        $this->load->view('backend/templates/footer');
    }

    public function detail($id_checkout)
    {
        $data['judul'] = 'Detail Konfirmasi Checkout';
        $data['checkout'] = $this->Konfirmasi_model->tampil_data();

        $data['konfirmasi'] = $this->Konfirmasi_model->ambil_id_konfirmasi($id_checkout);
        $data['pesanan'] = $this->Konfirmasi_model->ambil_id_pesanan($id_checkout);

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('backend/templates/header', $data);
        $this->load->view('backend/templates/sidebar', $data);
        $this->load->view('backend/templates/topbar', $data);
        $this->load->view('backend/checkout/detail', $data);
        $this->load->view('backend/templates/footer');
    }

    public function update_pembayaran()
    {
        $data['judul'] = 'Daftar Transaksi';
        $this->load->model('Konfirmasi_model');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['checkout'] = $this->Konfirmasi_model->tampil_data();

        $this->form_validation->set_rules('id_checkout', 'Id_checkout', 'required');
        $this->form_validation->set_rules('name_buy', 'Name_buy', 'required');
        $this->form_validation->set_rules('status_pembayaran', 'Status_pembayaran', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('backend/templates/header', $data);
            $this->load->view('backend/templates/sidebar', $data);
            $this->load->view('backend/templates/topbar', $data);
            $this->load->view('backend/checkout/index', $data);
            $this->load->view('backend/templates/footer');
        } else {
            $data = [
                'id_checkout' => $this->input->post('id_checkout'),
                'name_buy' => $this->input->post('name_buy'),
                'status_pembayaran' => $this->input->post('status_pembayaran')
            ];

            $this->db->where('id_checkout', $this->input->post('id_checkout'));
            $this->db->update('checkout', $data);
            $this->session->set_flashdata('update', '<div class="alert alert-success" role="alert">Data berhasil di Update</div>');
            redirect('konfirmasi');
        }
    }
}
