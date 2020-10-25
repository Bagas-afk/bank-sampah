<!-- Begin Page Content -->
<div class="container-fluid">

    <link rel="stylesheet" href="<?= base_url('assets/style.css') ?>">

    <!-- Page Heading -->
    <h3><?= $title; ?></h3>
    <div class="row pb-4 mt-3">
        <div class="col-sm-6 justify-content-start">
            <?= $this->session->flashdata('message'); ?>
        </div>
        <div class="col pb-3">
            <table class="table">
                <form action="<?= base_url('user/tambahSetor') ?>" method="post">
                    <div class="form-group row">
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Nasabah</label>
                        <div class="col-sm-4">
                            <select name="namanasabah" class="form-control" required onchange="tampilRekening()" id="namaNasabah">
                                <option value="">-- Pilih Nasabah --</option>
                                <?php foreach ($nasabah as $nasabah) { ?>
                                    <option value="<?= $nasabah->id ?>"><?= $nasabah->nama ?></option>
                                <?php  } ?>
                            </select>
                        </div>
                    </div>
            </table>

            <table class="table">
                <thead>
                    <th style="width: 250px;">Jenis sampah</th>
                    <th>Satuan</th>
                    <th>Harga Sampah</th>
                    <th>Berat Sampah</th>
                    <th>Sub Total</th>
                </thead>
                <tr>
                    <td>
                        <select id="namaSampah" name="jenis_sampah" class="form-control" onchange="tampilSampah()" required>
                            <option value="">-- Pilih Sampah --</option>
                            <?php foreach ($sampah as $sampah) { ?>
                                <option value="<?= $sampah->id ?>"><?= $sampah->jenis_sampah ?></option>
                            <?php  } ?>
                        </select>
                    </td>
                    <td>
                        <input type="text" id="st_sampah" readonly name="satuan" class="form-control">
                    </td>
                    <td>
                        <input type="text" id="hrg_sampah" readonly name="hargasampah" class="form-control">
                    </td>
                    <td>
                        <input type="text" name="jumlah_kg" class="form-control" id="jumlahSampah" required>
                    </td>
                    <td>
                        <input type="text" id="hasil" readonly name="subtotal" class="form-control">
                    </td>
                </tr>
            </table>
            <div class="col-md mb-3 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>

            </form>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable">
                    <thead>
                        <th>No</th>
                        <th>Nama Nasabah</th>
                        <th>Jenis Sampah</th>
                        <th>Harga Sampah</th>
                        <th>Berat Sampah</th>
                        <th>Satuan</th>
                        <th>Sub Total</th>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($setor as $tampil) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $tampil->nama ?></td>
                                <td><?= $tampil->jenis_sampah ?></td>
                                <td><?= $tampil->harga ?></td>
                                <td><?= $tampil->banyak_sampah ?></td>
                                <td><?= $tampil->satuan ?></td>
                                <td><?= $tampil->jumlah_subtotal ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md justify-content-start">
            <a href="<?= base_url('C_excel/cetak') ?>" type="button" class="btn btn-md btn-info mb-4"> <i class="fas fa-print"> Export data setor </i></a>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<!-- End of Main Content -->