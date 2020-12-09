<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jual extends CI_Controller
{


    public function index()
    {
        $data['judul'] = 'Titip Jual';
        $data['jual'] = $this->Jual_model->getAllJual();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['gender'] = $this->db->get('kategori_gender')->result_array();
        $data['item'] = $this->db->get('kategori_item')->result_array();

        $this->load->view('backend/templates/header', $data);
        $this->load->view('backend/templates/sidebar', $data);
        $this->load->view('backend/templates/topbar', $data);
        $this->load->view('backend/jual/index', $data);
        $this->load->view('backend/templates/footer');
    }


    public function tambah()
    {
        $data['judul'] = 'Titip Jual';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['gender'] = $this->db->get('kategori_gender')->result_array();
        $data['item'] = $this->db->get('kategori_item')->result_array();

        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('harga_barang', 'Harga Barang', 'required');
        $this->form_validation->set_rules('id_kategori_gender', 'Kategori Gender', 'required');
        $this->form_validation->set_rules('id_kategori_item', 'Kategori Item', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('backend/templates/header', $data);
            $this->load->view('backend/templates/sidebar', $data);
            $this->load->view('backend/templates/topbar', $data);
            $this->load->view('backend/jual/tambah', $data);
            $this->load->view('backend/templates/footer');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nama_pemilik_rek' => $this->input->post('nama_pemilik_rek'),
                'nama_bank' => $this->input->post('nama_bank'),
                'no_rek' => $this->input->post('no_rek'),
                'no_telepon' => $this->input->post('no_telepon'),
                'nama_barang' => $this->input->post('nama_barang'),
                'harga_barang' => $this->input->post('harga_barang'),
                'id_kategori_gender' => $this->input->post('id_kategori_gender'),
                'id_kategori_item' => $this->input->post('id_kategori_item'),
                'deskripsi' => $this->input->post('deskripsi'),
                'status' => 'aktif'
            ];
            $upload_image = $_FILES['image']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '204000';
                $config['upload_path'] = './assets/images/jual/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->db->insert('jual', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Item Sended, Wait Confirmation !</div>');
            redirect('jual');
        }
    }


    public function editdata($id)
    {
        $data['judul'] = 'Jual';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['jual'] = $this->db->get_where('jual', ['id_jual' => $id])->row_array();

        $data['gender'] = $this->db->get('kategori_gender')->result_array();
        $data['item'] = $this->db->get('kategori_item')->result_array();

        $this->form_validation->set_rules('nama_barang', 'Nama', 'required');
        $this->form_validation->set_rules('harga_barang', 'Harga', 'required');
        $this->form_validation->set_rules('id_kategori_gender', 'Gender', 'required');
        $this->form_validation->set_rules('id_kategori_item', 'Item', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('backend/templates/header', $data);
            $this->load->view('backend/templates/sidebar', $data);
            $this->load->view('backend/templates/topbar', $data);
            $this->load->view('backend/jual/edit', $data);
            $this->load->view('backend/templates/footer');
        } else {
            $data = [
                'nama_barang' => $this->input->post('nama_barang'),
                'harga_barang' => $this->input->post('harga_barang'),
                'id_kategori_gender' => $this->input->post('id_kategori_gender'),
                'id_kategori_item' => $this->input->post('id_kategori_item'),
                'deskripsi' => $this->input->post('deskripsi'),
                'status' => $this->input->post('status')
            ];

            $this->db->where('id_jual', $this->input->post('id_jual'));
            $this->db->update('jual', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Produk Berhasil Diedit</div>');
            redirect('jual');
        }
    }

    public function deleteJual($id)
    {
        $this->db->delete('jual', ['id_jual' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Produk Berhasil Dihapus</div>');
        redirect('jual');
    }
}
