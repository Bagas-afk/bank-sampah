<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h3 class="pb-3"><?= $title; ?></h3>
    <div class="ro pb-3">
        <form action="<?= base_url('user/tambahNasabah') ?>" method="POST" enctype="multipart/form-data">

            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">NIK</label>
                <div class="col-sm-4">
                    <input type="text" name="nik" class="form-control" id="inputEmail3" maxlength="16" value="<?= set_value('nik') ?>">
                    <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-4">
                    <input type="text" name="nama" class="form-control" id="inputPassword3" value="<?= set_value('nama') ?>">
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-4">
                    <input type="date" name="tanggal_lahir" class="form-control" id="inputPassword3" value="<?= set_value('tanggal_lahir') ?>">
                </div>
            </div>
            <fieldset class="form-group">
                <div class="row">
                    <label class="col-form-label col-sm-2 pt-0">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios1" value="laki-laki" checked>
                            <label class="form-check-label" for="gridRadios1">
                                Laki-laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios2" value="perempuan">
                            <label class="form-check-label" for="gridRadios2">
                                Perempuan
                            </label>
                        </div>
                    </div>
                </div>
            </fieldset>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nomor Telpon</label>
                <div class="col-sm-4">
                    <input type="number" name="no_telpon" class="form-control" value="<?= set_value('no_telpon') ?>">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Agama</label>
                <div class="col-sm-6">
                    <select id="inputState" name="agama" class="form-control col-md-6">
                        <option>Choose...</option>
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-md-4">
                    <textarea rows="6" type="text" name="alamat" class="form-control" value="<?= set_value('alamat') ?>"></textarea>
                </div>
            </div>
            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="gridRadios1" value="belum_kawin" checked>
                            <label class="form-check-label" for="gridRadios1">
                                Belum Kawin
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="gridRadios2" value="kawin">
                            <label class="form-check-label" for="gridRadios2">
                                Kawin
                            </label>
                        </div>
                    </div>
                </div>
            </fieldset>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Kecamatan</label>
                <div class="col-sm-4">
                    <input type="text" name="kecamatan" class="form-control" value="<?= set_value('kecamatan') ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Kelurahan</label>
                <div class="col-sm-4">
                    <input type="text" name="kelurahan" class="form-control" value="<?= set_value('kelurahan') ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Pekerjaan</label>
                <div class="col-sm-4">
                    <input type="text" name="pekerjaan" class="form-control" value="<?= set_value('pekerjaan') ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-4">
                    <input type="text" name="email" class="form-control" id="email" placeholder="user@example.com">
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-4">
                    <input type="password" name="password" id="password" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="file" class="col-sm-2 col-form-label">Upload File KTP</label>
                <div class="col-sm-4">
                    <input class="form-control-file" type="file" id="image" name="file">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= base_url('user/nasabah') ?>" class="btn btn-secondary">Batal</a>
        </form>
    </div>
    <!-- /.container-fluid -->
</div>

<!-- End of Main Content -->