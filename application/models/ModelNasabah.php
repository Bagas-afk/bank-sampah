<?php class ModelNasabah extends CI_Model
{

    function tampilNasabah()
    {
        $this->db->order_by('status_akun', 'ASC');
        $this->db->where('role_id', 2);
        return $this->db->get('user');
    }

    function tarikSaldo($data)
    {
        return $this->db->insert('tb_transaksi', $data);
    }

    function tampilTransaksi($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('tb_transaksi');
    }

    function tampilTarik($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('tb_transaksi');
    }

    function updatePenarikan($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update('tb_transaksi', $data);
    }

    function updateSaldo($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update('user', $data);
    }

    function tampilPenarikan()
    {
        $this->db->select('*, tb_transaksi.id as id_transaksi');
        $this->db->join('user', 'tb_transaksi.id_user = user.id', 'INNER');
        $this->db->where('tipe_transaksi', 'Withdraw');
        $this->db->where('detail_transaksi', 'Pending');
        return $this->db->get('tb_transaksi');
    }

    function tampilNasabahAktif()
    {
        $this->db->where('status_akun', '1');
        $this->db->where('role_id', 2);
        return $this->db->get('user');
    }

    function tampilSemuaUser()
    {
        $this->db->where('status_akun', '1');
        return $this->db->get('user');
    }

    function cari_data_nasabah($id_nasabah, $email)
    {
        $this->db->where('id', $id_nasabah);
        $this->db->where('email', $email);
        $this->db->where('role_id', 2);
        return $this->db->get('user');
    }

    function cari_nasabah($id_nasabah)
    {
        $this->db->where('id', $id_nasabah);
        $this->db->where('role_id', 2);
        return $this->db->get('user');
    }


    function tambahNasabah($data)
    {
        return $this->db->insert('user', $data);
    }

    function editNasabah($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update('user', $data);
    }

    function editRole($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update('user', $data);
    }

    function hapusNasabah($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('user');
    }

    function countUser()
    {
        $this->db->where('role_id', 2);
        return $this->db->get('user')->num_rows();
    }

    function verifAkun($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update('user', $data);
    }

    function cari_data_user($nik)
    {
        $this->db->where('nik', $nik);
        return $this->db->get('user');
    }

    function ganti_password($password, $email, $nik)
    {
        $this->db->set('password', $password);
        $this->db->where('nik', $nik);
        $this->db->where('email', $email);
        return $this->db->update('user');
    }
}
