<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h3><?= $title; ?></h3>
    <div class="row mt-3">
        <div class="col-sm-6 justify-content-start">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

    <div class="row-mt-3">
        <div class="table-responsive">
            <a href="<?= base_url('C_excel/cetakNasabah'); ?>" type="button" class="btn btn-md btn-info mb-4"><i class="fas fa-print"> Cetak Data</i></a>
            <table class="table table-hover" id="datatable">
                <thead class="thead-light">
                    <!-- Button trigger modal -->
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">No Telpon</th>
                    <th scope="col">Email</th>
                    <th scope="col">Alamat</th>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($data_nasabah as $nasabah) { ?>
                        <?php if ($nasabah->status_akun == 1) { ?>
                            <tr>
                                <th scope="row"><?= $no++; ?></th>
                                <td><?= $nasabah->nama ?></td>
                                <td><?= $nasabah->no_telpon ?></td>
                                <td><?= $nasabah->email ?></td>
                                <td><?= $nasabah->alamat ?></td>
                            </tr>
                        <?php } ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>