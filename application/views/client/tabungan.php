<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class=""><?= $title; ?></h1>
    <!-- Page Heading -->
    <div class="row">
        <div class="col-sm-6 justify-content-end">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

    <h3>Setoran Sampah</h3>
    <div class="table-responsive">
        <table class="table table-bordered mb-3" id="datatable">
            <thead>
                <th>No</th>
                <th>Nama Sampah</th>
                <th>Jumlah</th>
                <th>Satuan</th>
                <th>Tanggal</th>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($setor as $setor) { ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $setor->jenis_sampah ?></td>
                        <td><?= $setor->banyak_sampah ?></td>
                        <td><?= $setor->satuan ?></td>
                        <td><?= $setor->tanggal_transaksi ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <h3 class="mt-5">History Withdraw</h3>
    <div class="table-responsive">
        <table class="table table-bordered mt-3" id="datatable">
            <thead>
                <th>No</th>
                <th>Jumlah Penarikan</th>
                <th>Tanggal</th>
                <th>Verifikasi Penarikan</th>
                <th>Cetak Bukti</th>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($penarikan as $penarikan) { ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $penarikan->jumlah_subtotal ?></td>
                        <td><?= $penarikan->tanggal_transaksi ?></td>
                        <td><?= $penarikan->detail_transaksi ?></td>
                        <td> <a href="<?= base_url('mpdfcontroller/penarikan/') . $penarikan->id ?>" type="button" class="btn btn-sm btn-danger">Cetak Bukti</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<!-- container-fluid -->

<!-- End of Main Content -->