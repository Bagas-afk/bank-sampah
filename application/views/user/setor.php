<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h3><?= $title; ?></h3>

    <div class="col-sm-6 justify-content-start">
        <?= $this->session->flashdata('message'); ?>
    </div>
    <div class="mt-3">
        <table class="table">
            <form action="<?= base_url('user/tambahSetor') ?>" method="post">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Nasabah</label>
                    <div class="col-sm-4">
                        <select name="namanasabah" class="form-control" required onchange="tampilRekening()" id="namaNasabah">
                            <option value="">-- Pilih Nasabah --</option>
                            <?php foreach ($nasabah as $nasabah) { ?>
                                <option value="<?= $nasabah->id ?>"><?= $nasabah->nama ?></option>
                            <?php  } ?>
                        </select>
                    </div>
                    <label class="col-sm-2 col-form-label">Pilih Data Setoran</label>
                    <div class="col-sm-4">
                        <select name="jenis_setoran" class="form-control" required onchange="" id="">
                            <option value="">-- Pilih Data --</option>
                                <option value="tabungan">Tabungan</option>
                                <option value="donasi">Donasi</option>
                                <option value="psdr">PSDR</option>
                        </select>
                    </div>
                </div>
        </table>

        <table class="table table-border">
            <thead class="thead-light">
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

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-light">
                    <th>No</th>
                    <th>Nama Nasabah</th>
                    <th>Jenis Sampah</th>
                    <th>Harga Sampah</th>
                    <th>Berat Sampah</th>
                    <th>Satuan</th>
                    <th>Sub Total</th>
                </thead>
                <tbody id="isi_transaksi"></tbody>
            </table>
        </div>
        <form action="<?= base_url('user/tambahSetor') ?>" method="post" class="mt-5">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Pilih Tanggal</label>
                <div class="col-sm-4">
                    <input type="date" value="<?= date('Y-m-d') ?>" id="tgl_cetak" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-4">
                    <a href="" id="tombol_cetak" class="btn btn-md btn-info mb-4"> <i class="fas fa-print"> Export data setor </i></a>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- /.container-fluid -->
<!-- End of Main Content -->