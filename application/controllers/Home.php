<?php

class Home extends CI_Controller
{

    public function index()
    {
        $data['judul'] = 'Lowak';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['jual'] = $this->Jual_model->getAllJual();
        $data['gender'] = $this->db->get('kategori_gender')->result_array();
        $data['item'] = $this->db->get('kategori_item')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('frontend/home/index');
        $this->load->view('templates/footer');
    }

    public function kontak()
    {
        $data['judul'] = 'Lowak';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['gender'] = $this->db->get('kategori_gender')->result_array();
        $data['item'] = $this->db->get('kategori_item')->result_array();
        $data['judul'] = 'Kontak';
        $this->load->view('templates/header_kontak', $data);
        $this->load->view('frontend/home/kontak');
        $this->load->view('templates/footer_kontak');
    }

    public function jual()
    {
        $data['judul'] = 'Titip Jual';
        $data['jual'] = $this->Jual_model->getAllJual();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['gender'] = $this->db->get('kategori_gender')->result_array();
        $data['item'] = $this->db->get('kategori_item')->result_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nama_pemilik_rek', 'Nama Pemilik Rekening', 'required');
        $this->form_validation->set_rules('nama_bank', 'Nama Bank', 'required');
        $this->form_validation->set_rules('no_rek', 'No Rekening', 'required');
        $this->form_validation->set_rules('no_telepon', 'No Telepon', 'required');
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('harga_barang', 'Harga Barang', 'required');
        $this->form_validation->set_rules('id_kategori_gender', 'Kategori Gender', 'required');
        $this->form_validation->set_rules('id_kategori_item', 'Kategori Item', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('frontend/home/jual');
            $this->load->view('templates/footer');
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
                'status' => 'proses',
                'author' => $data['user']['email']
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
            redirect('home/jual');
        }
    }

    public function shop()
    {
        $data['judul'] = 'Lowak';

        $data['judul'] = 'Shop';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['jual'] = $this->db->get_where('jual', ['status' => 'aktif'])->result_array();

        $data['gender'] = $this->db->get('kategori_gender')->result_array();
        $data['item'] = $this->db->get('kategori_item')->result_array();


        $this->load->view('templates/header', $data);
        $this->load->view('frontend/home/shop');
        $this->load->view('templates/footer');
    }

    public function detail($id_jual)
    {
        $data['judul'] = 'Detail Produk';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['jual'] = $this->db->get_where('jual', ['status' => 'aktif'])->result_array();
        $data['gender'] = $this->db->get('kategori_gender')->result_array();
        $data['item'] = $this->db->get('kategori_item')->result_array();
        $data['jual'] = $this->db->get_where('jual', ['id_jual' => $id_jual])->result_array();

        $this->load->view('templates/header_single', $data);
        $this->load->view('frontend/home/single');
        $this->load->view('templates/footer_single');
    }

    public function profil()
    {
        $data['judul'] = 'Profil';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_kontak', $data);
            $this->load->view('frontend/home/profil');
            $this->load->view('templates/footer_kontak');
        } else {
            $nama = $this->input->post('nama');
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');

            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert 
                alert-danger" role="alert">Wrong Password </div>');
                redirect('home/profil');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert 
                    alert-danger" role="alert">New password cannot be the same as current password </div>');
                    redirect('home/profil');
                } else {
                    //password ok
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('nama', $nama);
                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert 
                    alert-success" role="alert">Personal information has been change </div>');
                    redirect('home/profil');
                }
            }
        }
    }

    public function dashboard()
    {
        $data['judul'] = 'Titip Jual';

        $this->load->model('jual_model');
        $this->load->model('Konfirmasi_model');

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['checkout'] = $this->Konfirmasi_model->getAllKonfirmasi();
        $data['jual'] = $this->jual_model->getAllJual();

        $data['gender'] = $this->db->get('kategori_gender')->result_array();
        $data['item'] = $this->db->get('kategori_item')->result_array(); {
            $this->load->view('templates/header_kontak', $data);
            $this->load->view('frontend/home/dashboard');
            $this->load->view('templates/footer_kontak');
        }
    }

    public function detailpesanan($id_checkout)
    {
        $data['judul'] = 'Detail Pesanan';
        $data['checkout'] = $this->Konfirmasi_model->tampil_data();

        $data['konfirmasi'] = $this->Konfirmasi_model->ambil_id_konfirmasi($id_checkout);
        $data['pesanan'] = $this->Konfirmasi_model->ambil_id_pesanan($id_checkout);

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header_kontak', $data);
        $this->load->view('frontend/home/detailpesanan');
        $this->load->view('templates/footer_kontak');
    }
}
