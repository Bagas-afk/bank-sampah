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

    function tampilTransaksi()
    {
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
    function cari_data_nasabah($id_nasabah)
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
        return $this->db->get('user')->num_rows();
    }

    function verifAkun($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update('user', $data);
    }
}
