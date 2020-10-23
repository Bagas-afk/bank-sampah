<?php class ModelSampah extends CI_Model
{
    function tampilSampah()
    {
        return $this->db->get('tb_harga');
    }

    function cari_data_sampah($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('tb_harga');
    }

    function tambahSampah($data)
    {
        return $this->db->insert('tb_harga', $data);
    }

    function editSampah($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update('tb_harga', $data);
    }

    function hapusSampah($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('tb_harga');
    }

    function countSampah()
    {
        return $this->db->get('tb_harga')->num_rows();
    }
}
