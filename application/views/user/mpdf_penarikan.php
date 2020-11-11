<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Daftar Harga Sampah</title>
    <link rel="stylesheet" href="<?= base_url('/assets/vendor') ?>/css/bootstrap.css">
</head>

<body>

    <div class="container">
        <div class="row">
            <table class="w-100 ml-1">
                <tr>
                    <td style="width: 151px;" valign="center" align="center">
                        <img src="<?= base_url('/') ?>assets/img/banksampah.jpg" width="100px" alt="">
                    </td>
                    <td valign="center">
                        <div class="text-center">
                            <p class="mt-n3 font-weight-bolder" style="font-size: 20pt; line-height: 1.2em;">Bank Sampah</p>
                            <p class="mt-n3" style="font-size: 10pt; line-height: 2em;">Jl. Cendrawasih Raya RT.004/RW.02 No. 16 Kel. Sawah Baru</p>
                            <p class="mt-n3 p" style="font-size: 10pt; line-height: 1em;">Kec. Ciputat - Kota Tangerang Selatan - Banten 15413 Hp. 0877 7336 3785</p>
                        </div>
                    </td>
                </tr>
            </table>

            <table class="center" align="center" border="1" cellspacing="0" cellpadding="10" style="margin:20px 2px 5px 3px">
                <thead>
                    <tr>
                        <th scope=" col">No</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Tipe Transaksi</th>
                        <th scope="col">Verifikasi Penarikan</th>
                        <th scope="col">Tanggal</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($withdraw as $wd) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td style="width: 151px;" align="center"><?= $wd->jumlah_subtotal ?></td>
                            <td style="width: 151px;" align="center"><?= $wd->tipe_transaksi ?></td>
                            <td style="width: 151px;" align="center"><?= $wd->detail_transaksi ?></td>
                            <td style="width: 151px;" align="center"><?= $wd->tanggal_transaksi ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

            <table class="w-100 ml-1" class="center" align="center">
                <tr>
                    <td valign="center">
                        <div class="text-center">

                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <script src="<?= base_url('/') ?>assets/vendor/bootstrap/js/jquery-3.5.1.js"></script>
    <script src="<?= base_url('/') ?>assets/vendor/bootstrap/js/bootstrap.js"></script>
</body>

</html>