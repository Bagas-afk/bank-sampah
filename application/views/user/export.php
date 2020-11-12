<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $title; ?>
    </title>

    <?php
    header("Content-type: application/vnd-ms-excel");
    $date = date('d-m-Y');
    header("Content-Disposition: attachment; filename=DataSetoran-$date.xls");
    ?>

</head>

<body>
    <div class="container" align="center">
        <div class="row">
            <table cellspacing="0" cellpadding="10px" style="width: 100%;">
                <tr>
                    <td valign="center" colspan="8" style="border:none;">
                        <div class="text-center">
                            <p class="mt-n3 font-weight-bolder" align="center" style="font-size: 20pt;">Bank Sampah</p>
                            <p class="mt-n3" align="center" style="font-size: 15pt;">Jl. Cendrawasih Raya RT.004/RW.02 No. 16 Kel. Sawah Baru</p>
                            <p class="mt-n3 p" align="center" style="font-size: 12pt;">Kec. Ciputat - Kota Tangerang Selatan - Banten 15413 Hp. 0877 7336 3785</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="5"></td>
                </tr>
            </table>
            <table border="1" cellspacing="0" cellpadding="10px" style="width: 100%;">
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Nama Nasabah</th>
                    <th>Jenis Sampah</th>
                    <th>Harga Sampah</th>
                    <th>Berat Sampah</th>
                    <th>Satuan</th>
                    <th>Subtotal</th>
                </tr>
                <?php
                $no = 1;
                foreach ($setor as $data) { ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $data->tanggal_transaksi ?></td>
                        <td><?= $data->nama ?></td>
                        <td><?= $data->jenis_sampah ?></td>
                        <td>Rp. <?= $data->harga ?></td>
                        <td><?= $data->banyak_sampah ?></td>
                        <td>/<?= $data->satuan ?></td>
                        <td>Rp. <?= $data->jumlah_subtotal ?></td>
                    </tr>
                <?php  } ?>
                <tr>
                    <td colspan="7" align="right">Jumlah</td>
                    <td>Rp. <?= $total ?></td>
                </tr>
            </table>
        </div>
    </div>

</body>

</html>