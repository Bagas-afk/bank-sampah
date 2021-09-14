<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != '1') {
            redirect('auth/cek_session');
        }
        $this->load->library('form_validation');
        $this->load->model('ModelNasabah');
        $this->load->model('ModelSampah');
        $this->load->model('ModelSetor');
    }

    public function index()
    {

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title']  = 'Dashboard Admin';
        $data['query']  = $this->ModelNasabah->countUser();
        $data['query1'] = $this->ModelSampah->countSampah();
        $data['query2'] = $this->ModelSetor->countSetor();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function verifAkun($id_user)
    {
        $data    = ['status_akun' => 1];
        $id_user = $this->uri->segment(3);
        $this->ModelNasabah->verifAkun($data, $id_user);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">Berhasil verifikasi data nasabah!</div>'
        );
        redirect('user/nasabah');
    }

    public function nasabah()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title']        = 'Form Data Nasabah';
        $data['data_nasabah'] = $this->ModelNasabah->tampilNasabah()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/nasabah', $data);
        $this->load->view('templates/footer');
    }

    public function tambahSetor()
    {
        $id_user      = $this->input->post('namanasabah');
        $id_sampah    = $this->input->post('jenis_sampah');
        $sub_total    = $this->input->post('subtotal');
        $jenis_setoran = $this->input->post('jenis_setoran');
        $saldoNasabah = $this->ModelSetor->saldoNasabah($id_user)->row();
        $last_balance = intval($saldoNasabah->saldo + $sub_total);

        $transaksi = [
            'id'                => '',
            'id_user'           => $id_user,
            'id_sampah'         => $id_sampah,
            'sebelum_transaksi' => $saldoNasabah->saldo,
            'jenis_setoran' => $jenis_setoran,
            'sesudah_transaksi' => $last_balance,
            'banyak_sampah'     => $this->input->post('jumlah_kg'),
            'jumlah_subtotal'   => $sub_total,
            'tipe_transaksi'    => 'Setoran sampah',
            'tanggal_transaksi' => date('Y-m-d'),
            'detail_transaksi'  => 'Berhasil setor',
        ];
        // print_r($transaksi);
        // die;

        $this->ModelSetor->updateSaldo($last_balance, $id_user);
        $this->ModelSetor->tambahTransaksi($transaksi);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">Berhasil menambahkan data setor sampah!</div>'
        );
        redirect('user/setor');
    }

    public function setor()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['nasabah'] = $this->ModelNasabah->tampilNasabahAktif()->result();
        $data['sampah']  = $this->ModelSampah->tampilSampah()->result();
        $data['setor']   = $this->ModelSetor->tampilDataSetor()->result();
        // print_r($data['nasabah']);
        // die;
        $data['title'] = 'Form Pengangkutan Sampah Dari Rumah';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/setor', $data);
        $this->load->view('templates/footer');
    }

    public function tampilDataNasabah($id_nasabah)
    {
        $id_nasabah = $this->uri->segment(3);
        $data       = $this->ModelNasabah->cari_data_nasabah($id_nasabah)->row();
        echo json_encode($data);
    }

    public function tampilDataSampah($id)
    {
        $id   = $this->uri->segment(3);
        $data = $this->ModelSampah->cari_data_sampah($id)->row();
        echo json_encode($data);
    }

    public function tampilDiagram()
    {
        $setor = $this->ModelSetor->dataTransaksi(["tipe_transaksi" => "Setoran sampah"])->num_rows();
        $wd    = $this->ModelSetor->dataTransaksi(["tipe_transaksi" => "Withdraw"])->num_rows();
        echo json_encode($setor . $wd);
    }

    public function sampah()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title']       = 'Form Data Sampah';
        $data['data_sampah'] = $this->ModelSampah->tampilSampah()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/sampah', $data);
        $this->load->view('templates/footer');
    }

    public function verifikasi()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['tampilPenarikan'] = $this->ModelNasabah->tampilPenarikan()->result();
        $data['title']           = 'Verifikasi Penarikan';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/verifikasi', $data);
        $this->load->view('templates/footer');
    }

    public function verifPenarikan($id)
    {
        $id = $this->uri->segment(3);
        // tampil data transaksi tarik (id_transksi, id_user)
        $data_penarikan = $this->ModelNasabah->tampilTarik($id)->row();
        $data_user      = $this->ModelNasabah->cari_nasabah($data_penarikan->id_user)->row();
        // print_r($data_user);
        // die;
        // hitung saldo - jumlah_penarikan
        $saldoAkhir = $data_user->saldo - $data_penarikan->jumlah_subtotal;

        // update user saldo dan verifikasi penarikan menjadi Berhasil
        if ($saldoAkhir >= 0) {
            $data  = ['detail_transaksi' => 'Berhasil'];
            $saldo = ['saldo' => $saldoAkhir];
            // print_r($saldo);
            // die;
            $this->ModelNasabah->updatePenarikan($data, $id);
            $this->ModelNasabah->updateSaldo($saldo, $data_user->id);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert">Berhasil verifikasi penarikan!</div>'
            );
            redirect('user/verifikasi');
        } else {
            redirect('user/verifikasi');
        }
    }

    public function tambahnasabah()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nik', 'nik', 'required|trim|numeric|max_length[16]|min_length[16]|is_unique[user.nik]', [
            'numeric' => 'Harus dengan angka!', 'max_length' => 'Harus 16 digit!', 'min_length' => 'Harus 16 digit!', 'is_unique' => 'This KTP has already registred!',
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registred!',
        ]);
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('tanggal_lahir', 'tanggal_lahir', 'required|trim');
        $this->form_validation->set_rules('no_telpon', 'no_telpon', 'required|trim');
        $this->form_validation->set_rules('pekerjaan', 'pekerjaan', 'required|trim');
        $this->form_validation->set_rules('alamat', 'alamat', 'required|trim');
        $this->form_validation->set_rules('kecamatan', 'kecamatan', 'required|trim');
        $this->form_validation->set_rules('kelurahan', 'kelurahan', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Tambah Nasabah';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/tambahnasabah', $data);
            $this->load->view('templates/footer');
        } else {
            //validation success
            $this->tambahAksi();
        }
    }

    public function tambahSampah()
    {
        $jenis_sampah = $this->input->post('jenis_sampah');
        $harga        = $this->input->post('harga');
        $satuan       = $this->input->post('satuan');
        $data         = [
            'jenis_sampah' => $jenis_sampah,
            'harga'        => $harga,
            'tanggal'      => date('Y-m-d H:i:s'),
            'satuan'       => $satuan,
        ];
        if ($this->ModelSampah->tambahSampah($data)) {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert">Berhasil menambahkan data sampah!</div>'
            );
            redirect('user/sampah');
        } else {
            echo 'gagal';
        }
    }

    public function editSampah()
    {
        $id     = ($this->input->post('id'));
        $harga  = $this->input->post('harga');
        $satuan = $this->input->post('satuan');
        $data   = [
            'harga'  => $harga,
            'satuan' => $satuan,
        ];
        // print_r($data);
        // die;
        if ($this->ModelSampah->editSampah($data, $id)) {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert">Berhasil update data sampah!</div>'
            );
            redirect('user/sampah');
        } else {
            echo "gagal";
        }
    }

    public function hapusSampah($id)
    {
        $id = $this->uri->segment(3);
        if ($this->ModelSampah->hapusSampah($id)) {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert">Berhasil menghapus data sampah!</div>'
            );
            redirect('user/sampah');
        } else {
            echo 'gagal';
        }
    }

    public function tambahAksi()
    {

        // $this->form_validation->set_rules('nik', 'nik', 'required|trim|numeric|max_length[16]|min_length[16]|is_unique[user.nik]', [
        //     'numeric' => 'Harus dengan angka!', 'max_length' => 'Harus 16 digit!', 'min_length' => 'Harus 16 digit!', 'is_unique' => 'This KTP has already registred!'
        // ]);
        // $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
        //     'is_unique' => 'This email has already registred!'
        // ]);
        $nama          = $this->input->post('nama');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $no_telpon     = $this->input->post('no_telpon');
        $password      = $this->input->post('password');
        $agama         = $this->input->post('agama');
        $alamat        = $this->input->post('alamat');
        $kecamatan     = $this->input->post('kecamatan');
        $kelurahan     = $this->input->post('kelurahan');
        $status        = $this->input->post('status');
        $pekerjaan     = $this->input->post('pekerjaan');

        if ($_FILES['file']['name']) {
            $data = [
                'id'            => '',
                'nik'           => htmlspecialchars($this->input->post('nik', true)),
                'nama'          => $nama,
                'tanggal_lahir' => $tanggal_lahir,
                'jenis_kelamin' => $jenis_kelamin,
                'no_telpon'     => $no_telpon,
                'email'         => htmlspecialchars($this->input->post('email', true)),
                'password'      => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'agama'         => $agama,
                'alamat'        => $alamat,
                'kecamatan'     => $kecamatan,
                'kelurahan'     => $kelurahan,
                'status'        => $status,
                'pekerjaan'     => $pekerjaan,
                'role_id'       => '2',
                'image'         => 'default.png',
                'file'          => $this->upload_gambar_profile($this->input->post('file', true)),
                'status_akun'   => 1,
                'date_created'  => date('Y-m-d H:i:s'),

            ];
        }
        if ($this->ModelNasabah->tambahNasabah($data)) {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert">Berhasil menambahkan data nasabah!</div>'
            );
            redirect('user/nasabah');
        } else {
            echo 'gagal';
        }
    }

    public function upload_gambar_profile($nama)
    {
        $config['upload_path']   = './assets/file/';
        $config['allowed_types'] = 'jpg|png|jpeg|pdf';
        $config['file_name']     = $nama;
        $config['max_size']      = 5120;
        $config['encrypt_name']  = true;
        $config['overwrite']     = true;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file')) {
            $config['image_library'] = 'gd2';
            // $config['width'] = "150";
            // $config['height'] = "150";
            $config['maintain_ratio'] = false;
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            return $this->upload->data('file_name');
        } else {
            return $this->upload->display_errors();
        }
    }

    public function editNasabah()
    {
        $id        = $this->input->post('id');
        $nama      = $this->input->post('nama');
        $no_telpon = $this->input->post('no_telpon');
        $alamat    = $this->input->post('alamat');
        $data      = [
            'nama'      => $nama,
            'no_telpon' => $no_telpon,
            'alamat'    => $alamat,
        ];
        if ($this->ModelNasabah->editNasabah($data, $id)) {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert">Berhasil update data nasabah!</div>'
            );
            redirect('user/nasabah');
        } else {
            echo 'gagal';
        }
    }

    public function hapusNasabah($id_user)
    {
        $id_user = $this->uri->segment(3);
        if ($this->ModelNasabah->hapusNasabah($id_user)) {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert">Berhasil menghapus data nasabah!</div>'
            );
            redirect('user/nasabah');
        } else {
            echo 'gagal';
        }
    }

    public function editProfile()
    {
        $data['title'] = 'Edit Profile';
        $data['user']  = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nama', 'nama', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/editProfile', $data);
            $this->load->view('templates/footer');
        } else {

            $nama  = $this->input->post('nama');
            $email = $this->input->post('email');
            $this->db->set('nama', $nama);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert"> Profile berhasil di update</div>'
            );
            redirect('user/index_nasabah');
        }
    }


    public function tampilCetak($tanggal)
    {
        $data = $this->ModelSetor->cetakTransaksi($tanggal)->result();
        echo json_encode($data);
    }
}
