<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Page';
            $this->load->view('auth/login');
            $this->load->view('templates/footer');
            $this->load->view('templates/header', $data);
        } else {
            //validation success
            $this->_login();
        }
    }


    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        // if ($this->session->userdata('email')) {
        //     redirect('user');
        // }
        // jika usernya ada
        if ($user) {
            // jika usernya aktif
            if ($user['status_akun'] == 1) {
                // cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'id' => $user['id'],
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    userLog('login', $this->session->userdata('id'));
                    if ($user['role_id'] == 1) {
                        redirect('user');
                    } else {
                        redirect('nasabah/index_nasabah');
                    }
                } else {
                    $this->session->set_flashdata(
                        'message',
                        '<div class="alert alert-danger" role="alert"> Wrong password! </div>'
                    );
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger" role="alert"> This email has been not activated</div>'
                );
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger" role="alert"> Email is not registred</div>'
            );
            redirect('auth');
        }
    }

    public function registration()
    {
        // if ($this->session->userdata('email')) {
        //     redirect('user');
        // }
        $this->form_validation->set_rules('nik', 'nik', 'required|trim|numeric|max_length[16]|min_length[16]|is_unique[user.nik]', [
            'numeric' => 'Harus dengan angka!', 'max_length' => 'Harus 16 digit!', 'min_length' => 'Harus 16 digit!', 'is_unique' => 'This KTP has already registred!'
        ]);
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registred!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');



        if ($this->form_validation->run() == false) {
            $data['title'] = 'User Registration';
            $this->load->view('auth/registration');
            $this->load->view('templates/footer');
            $this->load->view('templates/header', $data);
        } else {
            if ($_FILES['file']['name']) {
                $data = [
                    'nik' => htmlspecialchars($this->input->post('nik', true)),
                    'nama' => htmlspecialchars($this->input->post('nama', true)),
                    'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir', true)),
                    'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin', true)),
                    'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                    'kecamatan' => htmlspecialchars($this->input->post('kecamatan', true)),
                    'kelurahan' => htmlspecialchars($this->input->post('kelurahan', true)),
                    'agama' => htmlspecialchars($this->input->post('agama', true)),
                    'status' => htmlspecialchars($this->input->post('status', true)),
                    'pekerjaan' => htmlspecialchars($this->input->post('pekerjaan', true)),
                    'no_telpon' => htmlspecialchars($this->input->post('no_telpon', true)),
                    'email' => htmlspecialchars($this->input->post('email', true)),
                    'image' => 'default.png',
                    'file' => $this->upload_gambar_profile($this->input->post('file', true)),
                    'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                    'role_id' => 2,
                    'date_created' => date('Y-m-d H:i:s'),
                    'status_akun' => 0
                ];
            }
            // print_r($data);
            // die;
            $this->db->insert('user', $data);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert"> Congratulations! your account is created.</div>'
            );
            redirect('auth');
        }
    }

    function upload_gambar_profile($nama)
    {
        $config['upload_path']          = './assets/file/';
        $config['allowed_types']        = 'jpg|png|jpeg|pdf';
        $config['file_name']            = $nama;
        $config['max_size']             = 5120;
        $config['encrypt_name']         = TRUE;
        $config['overwrite']            = TRUE;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file')) {
            $config['image_library'] = 'gd2';
            // $config['width'] = "150";
            // $config['height'] = "150";
            $config['maintain_ratio'] = FALSE;
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            return $this->upload->data('file_name');
        } else {
            return $this->upload->display_errors();
        }
    }

    public function cek_session()
    {
        if ($this->session->userdata('role_id') == 1) {
            redirect('user');
        } elseif ($this->session->userdata('role_id') == 2) {
            redirect('nasabah/index_nasabah');
        } else {
            echo "Tidak Ada Role";
            redirect('home');
        }
    }


    public function logout()
    {
        userLog('logout', $this->session->userdata('id'));
        // print_r($this->session->userdata('id_user'));
        // die;
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert"> You have been logged out!</div>'
        );
        redirect('home');
    }
}
