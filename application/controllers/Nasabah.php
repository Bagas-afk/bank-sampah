<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nasabah extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != 2) {
            redirect('auth/cek_session');
        }

        $this->load->model('ModelNasabah');
    }


    public function index_nasabah()
    {

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = 'My Profile';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('nasabah/index_nasabah', $data);
        $this->load->view('templates/footer');
    }

    public function cek_saldo()
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
        $data['penarikan'] = $this->ModelSetor->tampilPenarikanNasabah($this->session->userdata('id'))->result();
        $data['title'] = 'Cek Saldo';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('nasabah/cek_saldo', $data);
        $this->load->view('templates/footer');
    }

    public function tarikSaldo()
    {
        $data = [
            'id' => '',
            'id_user' => $this->session->userdata('id'),
            'jumlah_penarikan' => $this->input->post('jumlah_penarikan'),
            'tanggal' => $this->input->post('tanggal'),
            'detail_transaksi' => 'Pending',
            'tipe_transaksi' => 'Withdraw',
        ];
        // print_r($data);
        // die;
        $this->ModelNasabah->tarikSaldo($data);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-primary" role="alert"> Silahkan datang ke Bank sampah untuk pengambilan uang! </div>'
        );
        redirect('nasabah/cek_saldo');
    }
}
