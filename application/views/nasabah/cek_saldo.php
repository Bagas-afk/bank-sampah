<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class=""><?= $title; ?></h1>
    <!-- Page Heading -->
    <div class="row">
        <div class="col-sm-6 justify-content-end">
            <?= $this->session->flashdata('message'); ?>
        </div>

    </div>

    <div class="card" style="max-width: 25rem;">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <label class="card-title">Nama Lengkap</label>
                </div>
                <div class="col-sm-6">
                    <label class="card-title"><?= $user['nama']; ?></label>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 justify">
                    <label class="card-title">Saldo</label>
                </div>
                <div class="col-sm-6">
                    <label class="card-title">Rp. <?= $saldo->saldo; ?></label>
                </div>
            </div>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                <div class="col-sm">
                    Tarik Saldo
                </div>
            </button>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tarik uang</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form">

                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <i class="fas fa-fw fa-money-check-alt"></i>
                                <span>Saldo</span></a>
                            </div>
                            <div class="col-sm-3">
                                <label class="card-title">Rp. <?= $saldo->saldo; ?></label>
                            </div>
                        </div>

                        <hr class="sidebar-divider">


                        <form action="<?= base_url('nasabah/tarikSaldo') ?>" method="POST">
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-4 col-form-label">Masukan Jumlah</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control-plaintext" required name="jumlah_penarikan" id="staticEmail" placeholder="Rp. 0">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-4 col-form-label">Tanggal</label>
                                <div class="col-sm-8">
                                    <input type="date" name="tanggal" required class="form-control-plaintext" min="<?= date('Y-m-d') ?>">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Tarik</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>
    <h3>Setoran Sampah</h3>
    <div class="table-responsive">
        <table class="table table-bordered mb-3" id="datatable">
            <thead>
                <th>No</th>
                <th>Nama Sampah</th>
                <th>Satuan</th>
                <th>Harga Sampah</th>
                <th>Jumlah</th>
                <th>Sub Total</th>
                <th>Tanggal</th>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($setor as $setor) { ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $setor->jenis_sampah ?></td>
                        <td><?= $setor->satuan ?></td>
                        <td><?= $setor->harga ?></td>
                        <td><?= $setor->banyak_sampah ?></td>
                        <td><?= $setor->jumlah_subtotal ?></td>
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