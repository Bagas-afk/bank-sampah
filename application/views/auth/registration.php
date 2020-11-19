<div class="container">
  <div class="card border-0 shadow-lg my-5 col-lg-7 mx-auto">
    <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">
        <div class="col-lg">
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">Pendaftaran Nasabah Bank Sampah</h1>
            </div>
            <form class="user" method="post" action="<?= base_url('auth/registration'); ?>" enctype="multipart/form-data">
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-4 col-form-label">NIK</label>
                <div class="col-sm-8">
                  <input type="number" class="form-control" id="nik" placeholder="No KTP" name="nik" value="<?= set_value('nik') ?>">
                  <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Nama Lengkap</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="nama" placeholder="Full Name" name="nama" value="<?= set_value('nama') ?>">
                  <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>
              <div class="form-group row">
                <label for="tanggal_lahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-8">
                  <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= set_value('tanggal_lahir') ?>">
                </div>
              </div>

              <fieldset class="form-group">
                <div class="row">
                  <legend class="col-form-label col-sm-4 pt-0">Jenis Kelamin</legend>
                  <div class="col-sm-8">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios1" value="laki-laki" checked>
                      <label class="form-check-label" for="gridRadios1">
                        Laki-laki
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios2" value="Perempuan">
                      <label class="form-check-label" for="gridRadios2">
                        Perempuan
                      </label>
                    </div>
                  </div>
                </div>
              </fieldset>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Alamat</label>
                <div class="col-sm-8">
                  <textarea type="text" class="form-control" id="alamat" name="alamat" value="<?= set_value('alamat') ?>"></textarea>
                  <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Kecamatan</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?= set_value('kecamatan') ?>">
                  <?= form_error('kecamatan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Kelurahan</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="kelurahan" name="kelurahan" value="<?= set_value('kelurahan') ?>">
                  <?= form_error('kelurahan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>
              <div class="form-group row">
                <label for="agama" class="col-sm-4 col-form-label">Agama</label>
                <div class="col-sm-8">
                  <select name="agama" class="form-control">
                    <option selected>Choose...</option>
                    <option value="islam">Islam</option>
                    <option value="kristen">Kristen</option>
                    <option value="hindu">Hindu</option>
                    <option value="budha">Budha</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="status" class="col-sm-4 col-form-label">Status</label>
                <div class="col-sm-8">
                  <select id="inputState" name="status" class="form-control">
                    <option selected>Choose...</option>
                    <option value="belum_kawin">Belum Kawin</option>
                    <option value="kawin">Kawin</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="pekerjaan" class="col-sm-4 col-form-label">Pekerjaan</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?= set_value('pekerjaan') ?>">
                  <?= form_error('pekerjaan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>
              <div class="form-group row">
                <label for="pekerjaan" class="col-sm-4 col-form-label">Nomor Telpon</label>
                <div class="col-sm-8">
                  <input type="number" class="form-control" id="no_telpon" name="no_telpon" value="<?= set_value('no_telpon') ?>">
                  <?= form_error('no_telpon', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>
              <div class="form-group row">
                <label for="pekerjaan" class="col-sm-4 col-form-label">Email</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="email" placeholder="Email Address" name="email" value="<?= set_value('email') ?>">
                  <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>
              <div class="form-group row">
                <label for="pekerjaan" class="col-sm-4 col-form-label">Password</label>
                <div class="col-sm-8">
                  <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
                  <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>
              <div class="form-group row">
                <label for="pekerjaan" class="col-sm-4 col-form-label">Konfirmasi Password</label>
                <div class="col-sm-8">
                  <input type="password" class="form-control" id="password2" name="password2" placeholder="Repeat Password">
                </div>
              </div>
              <div class="form-group row">
                <label for="file" class="col-sm-4 col-form-label">Upload File KTP</label>
                <div class="col-sm-8">
                  <input class="form-control-file" type="file" id="image" name="file">
                </div>
              </div>
              <button type="submit" class="btn btn-primary btn-user btn-block">
                Registrasi Akun
              </button>
              <hr>
              <div class="text-center">
                <label for="">Sudah mempunyai akun?</label><a class="medium" href="<?= base_url('auth'); ?>"> Login!</a>
              </div>
              <div class="text-center">
                <a class="medium" href="<?= base_url('auth/forgot'); ?>">Lupa Password!</a>
              </div>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>