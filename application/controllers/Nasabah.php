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
        $this->load->model('ModelSetor');
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
        // print_r($data['setor']);
        // die;
        $data['penarikan'] = $this->ModelSetor->tampilPenarikanNasabah($this->session->userdata('id'))->result();
        $data['penarikan'] = $this->ModelSetor->tampilPenarikan($this->session->userdata('id'))->result();
        $data['title'] = 'Cek Saldo';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('nasabah/cek_saldo', $data);
        $this->load->view('templates/footer');
    }

    public function tarikSaldo()
    {
        $sub_total = $this->input->post('jumlah_penarikan');
        $saldoNasabah = $this->ModelSetor->saldoNasabah($this->session->userdata('id'))->row();
        // print_r($saldoNasabah);
        // die;
        $last_balance = intval($saldoNasabah->saldo - $sub_total);
        if ($last_balance < 0) {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger" role="alert">Saldo anda tidak cukup </div>'
            );
            redirect('nasabah/cek_saldo');
        }

        if ($sub_total >= 1000) {
            $data = [
                'id' => '',
                'id_user' => $this->session->userdata('id'),
                'sebelum_transaksi' => $saldoNasabah->saldo,
                'sesudah_transaksi' => $last_balance,
                'jumlah_subtotal' => $sub_total,
                'tanggal_transaksi' => $this->input->post('tanggal'),
                'detail_transaksi' => 'Pending',
                'tipe_transaksi' => 'Withdraw',
            ];
            $this->ModelNasabah->tarikSaldo($data);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-primary" role="alert"> Silahkan datang ke Bank sampah untuk pengambilan uang! </div>'
            );
            redirect('nasabah/cek_saldo');
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger" role="alert"> Minimal withdraw Rp.1000 </div>'
            );
            redirect('nasabah/cek_saldo');
        }
    }
}
