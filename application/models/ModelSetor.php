<?php class ModelSetor extends CI_Model
{
    public function tampilDataSetor()
    {
        return $this->db->query("SELECT * FROM `tb_setor`
                                INNER JOIN user ON user.id=tb_setor.id_user
                                INNER JOIN tb_harga ON tb_harga.id=tb_setor.id_sampah");
    }

    public function simpanSetor($data)
    {
        return $this->db->insert('tb_setor', $data);
    }

    function countSetor()
    {
        return $this->db->get('tb_setor')->num_rows();
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
        return $this->db->query("SELECT * FROM `tb_setor`
                                INNER JOIN user ON user.id=tb_setor.id_user
                                INNER JOIN tb_harga ON tb_harga.id=tb_setor.id_sampah
                                WHERE user.id = '$id'");
    }

    public function tampilPenarikanNasabah($id)
    {
        $this->db->where('tipe_transaksi', 'withdraw');
        return $this->db->get('tb_transaksi');
    }
}
