<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Client extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != 4) {
            redirect('auth/cek_session');
        }
        $this->load->model('ModelNasabah');
        $this->load->model('ModelSetor');
    }


    public function index()
    {

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = 'My Profile';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('client/index', $data);
        $this->load->view('templates/footer');
    }

    public function tabungan()
    {

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->model('ModelSetor');
        // $data['subtotal'] = $this->ModelSetor->saldoNasabah($this->session->userdata('id_user'))->row();
        $data['saldo'] = $this->ModelSetor->saldoNasabah($this->session->userdata('id'))->row();
        // $data['saldo'] = array_sum($data['subtotal']->sub_total);
        // print_r($this->session->userdata('id'));
        // die;

        $data['setor'] = $this->ModelSetor->tampilSetoranNasabah($this->session->userdata('id'))->result();
        // print_r($data['setor']);
        // die;
        $data['penarikan'] = $this->ModelSetor->tampilPenarikanNasabah($this->session->userdata('id'))->result();
        $data['penarikan'] = $this->ModelSetor->tampilPenarikan($this->session->userdata('id'))->result();
        $data['title'] = '';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('client/tabungan', $data);
        $this->load->view('templates/footer');
    }
}