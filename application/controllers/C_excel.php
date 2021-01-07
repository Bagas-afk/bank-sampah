<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_excel extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelSetor');
    }

    public function cetak($tanggal)
    {
        $data['title'] = 'Export to excel';
        $data['setor'] = $this->ModelSetor->exportSetor($tanggal)->result();
        // $data['jumlah'] = array_sum($data['setor']->jumlah_subtotal);
        $jumlah = [];
        foreach ($data['setor'] as $setor) {
            $jumlah[] = $setor->jumlah_subtotal;
        }
        $data['total'] = array_sum($jumlah);

        $this->load->view('user/export', $data);
    }

    public function cetakNasabah()
    {
        $data['title'] = 'Export to excel';
        $this->load->model('ModelNasabah');
        $data['setor'] = $this->ModelNasabah->tampilNasabah()->result();

        $this->load->view('admin/exportNasabah', $data);
    }
}
