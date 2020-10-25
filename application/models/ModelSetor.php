<?php class ModelSetor extends CI_Model
{
    public function tampilDataSetor()
    {
        return $this->db->query("SELECT * FROM `tb_transaksi`
                                INNER JOIN user ON user.id=tb_transaksi.id_user
                                INNER JOIN tb_harga ON tb_harga.id=tb_transaksi.id_sampah");
    }

    public function exportSetor($tanggal)
    {
        $this->db->where('tanggal_transaksi', $tanggal);
        return $this->db->query("SELECT * FROM `tb_transaksi`
                                INNER JOIN user ON user.id=tb_transaksi.id_user
                                INNER JOIN tb_harga ON tb_harga.id=tb_transaksi.id_sampah");
    }


    public function simpanSetor($data)
    {
        return $this->db->insert('tb_transaksi', $data);
    }

    function countSetor()
    {
        return $this->db->get('tb_transaksi')->num_rows();
    }

    public function saldoNasabah($data)
    {
        $this->db->select('saldo');
        $this->db->where('id', $data);
        return $this->db->get('user');
    }

    public function updateSaldo($last_balance, $id)
    {
        $this->db->where('id', $id);
        $this->db->set('saldo', $last_balance);
        return $this->db->update('user');
    }

    public function tambahTransaksi($transaksi)
    {
        return $this->db->insert('tb_transaksi', $transaksi);
    }

    public function tampilSetoranNasabah($id)
    {
        return $this->db->query("SELECT * FROM user
                                INNER JOIN tb_transaksi ON user.id=tb_transaksi.id_user
                                INNER JOIN tb_harga ON tb_harga.id=tb_transaksi.id_sampah
                                WHERE user.id = '$id' AND tipe_transaksi = 'Setoran sampah'");
        $this->db->where('tanggal');
        return $this->db->get('tb_transaksi');
    }

    public function tampilPenarikanNasabah($id)
    {
        $this->db->where('tipe_transaksi', 'withdraw');
        return $this->db->get('tb_transaksi');
    }
}
