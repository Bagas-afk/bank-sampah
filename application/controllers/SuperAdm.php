<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SuperAdm extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != '3') {
            redirect('auth/cek_session');
        }
        $this->load->model('ModelNasabah');
        $this->load->model('ModelSampah');
        $this->load->model('ModelSetor');
    }

    public function index()
    {

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['query']  = $this->ModelNasabah->countUser();
        $data['query1'] = $this->ModelSampah->countSampah();
        $data['query2'] = $this->ModelSetor->countSetor();

        $data['title']  = 'Dashboard Super Admin';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function nasabah()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['data_nasabah'] = $this->ModelNasabah->tampilNasabah()->result();
        $data['title']  = 'Data Nasabah';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/nasabah', $data);
        $this->load->view('templates/footer');
    }

    public function sampah()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['data_sampah']  = $this->ModelSampah->tampilSampah()->result();
        $data['title']  = 'Data Sampah';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/sampah', $data);
        $this->load->view('templates/footer');
    }

    public function m_user()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['tampilUser'] = $this->ModelNasabah->tampilSemuaUser()->result();
        $data['title']  = 'Management User';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/m_user', $data);
        $this->load->view('templates/footer');
    }

    public function transaksi()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['tampilUser'] = $this->ModelNasabah->tampilNasabahAktif()->result();
        $data['title']  = 'Rekap data Nasabah';
        if (isset($_POST['nik_nasabah'])) {
            $this->db->join('user', 'user.id = user');
            $data['rekap'] = $this->db->query("SELECT * FROM `tb_transaksi` INNER JOIN user ON user.id = tb_transaksi.id_user WHERE nik = '" . $_POST['nik_nasabah'] . "'")->result();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/transaksi', $data);
        $this->load->view('templates/footer');
    }

    function rekap_data($nik)
    {
        $this->db->join('user', 'user.id = user');
        $data['rekap'] = $this->db->query("SELECT * FROM `tb_transaksi` INNER JOIN user ON user.id = tb_transaksi.id_user WHERE nik = '" . $nik . "'")->result();
        echo json_encode($data);
    }

    public function editRole()
    {
        $id      = $this->input->post('id');
        $role_id = $this->input->post('role_id');
        $data    = [
            'role_id' => $role_id,
        ];

        if ($this->ModelNasabah->editRole($data, $id)) {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert"> Role id berhasil di update</div>'
            );
            redirect('superadm/m_user');
        } else {
            echo 'gagal';
        }
    }
}
