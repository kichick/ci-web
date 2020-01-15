<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Kategori';
        $this->load->model('Kategori_model');

        $data['kategori_item'] = $this->Kategori_model->getAllKategori_item();
        
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['item'] = $this->db->get('kategori_item')->result_array();
       
        $this->form_validation->set_rules('nama_kategori_item', 'Nama', 'required');
        if ($this->form_validation->run() == false) {

            $this->load->view('backend/templates/header', $data);
            $this->load->view('backend/templates/sidebar', $data);
            $this->load->view('backend/templates/topbar', $data);
            $this->load->view('backend/kategori/index', $data);
            $this->load->view('backend/templates/footer');
        } else {
            $data = [
                'nama_kategori_item' => $this->input->post('nama_kategori_item'),
            ];
            $this->db->insert('kategori_item', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            New Kategori Added</div>');
            redirect('kategori');
            }
        }
    public function deleteKategori_i($id)
    {
        $this->db->delete('kategori_item', ['id_kategori_item' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Kategori Berhasil Dihapus</div>');
        redirect('kategori');
    }
    }