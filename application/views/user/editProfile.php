<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class=""><?= $title; ?></h1>
    <!-- Page Heading -->

    <div class="row">
        <div class="col-md-8">

            <?= form_open_multipart('user/editProfile'); ?>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" value="<?= $user['email']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Full Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" id="nama" value="<?= $user['nama']; ?>">
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2">Picture</div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail" alt="">
                        </div>
                        <div class="col-sm-9">
                            <input class="form-control-file" type="file" id="image" name="image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary"> Edit</button>
                </div>
            </div>
            </form>

        </div>
    </div>
</div>
<!-- /.container-fluid -->

<!-- End of Main Content -->