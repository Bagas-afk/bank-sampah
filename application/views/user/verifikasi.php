<!-- Begin Page Content -->
<div class="container-fluid">
    <h3><?= $title; ?></h3>
    <div class="col-sm-6 justify-content-start">
        <?= $this->session->flashdata('message'); ?>
    </div>


    <div class="row">
        <div class="col-md mt-3">
            <div class="table-responsive">
                <table class="table table-houver" id="datatable">
                    <thead class="thead-light">
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jumlah Penarikan</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Action</th>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($tampilPenarikan as $tp) { ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $tp->nama ?></td>
                                <td><?= $tp->jumlah_subtotal ?></td>
                                <td> <?= $tp->tanggal_transaksi ?></td>
                                <td>
                                    <a href="<?= base_url('user/verifPenarikan/') . $tp->id_transaksi ?>" class="btn btn-success"><i class="fas fa-check-square"> Verifikasi</i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- Page Heading -->



</div>
<!-- /.container-fluid -->

<!-- End of Main Content -->