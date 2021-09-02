
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MpdfController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelSampah');
        $this->load->model('ModelNasabah');
        $this->load->model('ModelSetor');
    }

    public function printPDF()
    {
        require_once APPPATH . 'vendor/autoload.php';

        $data['jenis_sampah'] = $this->ModelSampah->tampilSampah()->result();
        // print_r($data['jenis_sampah']);
        // die;
        $data = $this->load->view('mpdf_v', $data, true);
        $payStub = new \Mpdf\Mpdf([]);
        // $mpdf->WriteHTML($data);
        // $mpdf->Output();
        $payStub->SetTitle('My title');
        $payStub->WriteHTML($data);
        $payStub->Output(("Daftar harga ") . date("Y-m-d.") . '.pdf', 'I');
    }


    public function penarikan($id)
    {
        require_once APPPATH . 'vendor/autoload.php';

        // $data['jenis_sampah'] = $this->ModelSampah->tampilSampah()->result();
        // print_r($data['jenis_sampah']);
        // die;
        $data['withdraw'] = $this->ModelNasabah->tampilTransaksi($id)->result();
        // print_r($data['withdraw']);
        // die;
        $data = $this->load->view('user/mpdf_penarikan', $data, true);
        $payStub = new \Mpdf\Mpdf([
            'debug' => true,
            'allow_output_buffering' => true,
            'format' => 'A6',
            'orientation' => 'L'
        ]);
        $payStub->SetTitle('My title');
        $payStub->WriteHTML($data);
        $payStub->Output(microtime(true) . '.pdf', 'I');
    }
}
