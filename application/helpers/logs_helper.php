<?php

function userLog($aksi, $id)
{
    $CI = &get_instance();
    date_default_timezone_set('Asia/Jakarta');
    $data = [
        'id' => '',
        'keterangan' => $aksi,
        'datetime' => date('Y-m-d H:i:s'),
        'id_user' => $id
    ];
    $CI->db->insert('tb_logs', $data);
}
