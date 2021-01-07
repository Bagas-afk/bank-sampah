<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h3><?= $title; ?></h3>
    <div class="row mt-3">
        <div class="col-sm-6 justify-content-start">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>
    <div>
        <form action="" method="post">
            <input type="number" class="form-control" id="nik_nasabah" name="nik_nasabah" placeholder="Masukan NIK">
            <button type="submit" class="btn btn-block btn-primary mt-3">Cari nasabah</button>
        </form>
    </div>
    <div class="card mt-3">
        <div class="card-body table-responsive">
            <table class="table table-hover mt-3" id="myTable" data-searching="false" data-paging="false" data-info="false">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Nasabah</th>
                        <th scope="col">Tipe Transaksi</th>
                        <th scope="col">Jumlah Transaksi</th>
                        <th scope="col">Detail Transaksi</th>
                        <th scope="col">Tanggal Transaksi</th>
                    </tr>
                </thead>
                <tbody id="transaksi">
                    <?php if (isset($rekap)) {
                        $no = 1;
                        foreach ($rekap as $data) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $data->nama ?></td>
                                <td><?= $data->tipe_transaksi ?></td>
                                <td>Rp. <?= number_format($data->jumlah_subtotal, '0', ',', '.') ?></td>
                                <td><?= $data->detail_transaksi ?></td>
                                <td><?= $data->tanggal_transaksi ?></td>
                            </tr>
                    <?php }
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>