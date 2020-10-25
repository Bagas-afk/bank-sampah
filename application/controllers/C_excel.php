<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_excel extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelSetor');
    }

    public function cetak()
    {
        $data['title'] = 'Export to excel';
        $tanggal = date('Y-m-d');
        $data['setor'] = $this->ModelSetor->exportSetor($tanggal)->result();
        // print_r($data);
        // die;
        $this->load->view('user/export', $data);
    }
}
