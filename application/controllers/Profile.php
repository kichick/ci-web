<?php

class Profile extends CI_Controller
{
    public function index()
    {

        $data['judul'] = 'Profile';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('backend/templates/header', $data);
        $this->load->view('backend/templates/sidebar', $data);
        $this->load->view('backend/templates/topbar', $data);
        $this->load->view('backend/user/index', $data);
        $this->load->view('backend/templates/footer');
    }

    public function edit()
    {
        $data['judul'] = 'Edit Profile';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');

        $this->form_validation->set_rules('nama', 'Full Name', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('backend/templates/header', $data);
            $this->load->view('backend/templates/sidebar', $data);
            $this->load->view('backend/templates/topbar', $data);
            $this->load->view('backend/user/edit', $data);
            $this->load->view('backend/templates/footer');
        } else {
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');

            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');

            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert 
                alert-danger" role="alert">Wrong Current Password </div>');
                redirect('profile/edit');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert 
                    alert-danger" role="alert">New password cannot be the same as current password </div>');
                    redirect('profile/edit');
                } else {
                    //password ok
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);
                    //cek gambar diupload
                    $upload_image = $_FILES['image']['name'];

                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->set('password', $password_hash);


                    if ($upload_image) {
                        $config['allowed_types'] = 'gif|jpg|png|jpeg';
                        $config['max_size']     = '9048';
                        $config['upload_path'] = './assets/images/profile/';

                        $this->load->library('upload', $config);


                        if ($this->upload->do_upload('image')) {

                            $old_image = $data['user']['image'];
                            if ($old_image != 'default.jpg') {

                                unlink(FCPATH . 'assets/images/profile/' . $old_image);
                            }
                            $new_image = $this->upload->data('file_name');
                            $this->db->set('image', $new_image);
                        } else {
                            echo $this->upload->display_errors();
                        }
                    }

                    $this->db->set('nama', $nama);
                    $this->db->where('email', $email);
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has been update </div>');
                    redirect('profile');
                }
            }
        }
    }
 }
