<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-7">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Lupa password?</h1>
                                    <img class="img-responsive display-block pb-3" src="<?= base_url('assets/img/banksampah.JPG'); ?>" alt="responsive-image" width="35%">
                                </div>

                                <?= $this->session->flashdata('message'); ?>

                                <form class="user" method="post" action="<?= base_url('auth/forgot'); ?>">
                                    <div class="form-group">
                                        <input type="number" class="form-control form-control-user" id="nik" placeholder="NIK" name="nik">
                                        <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="email" placeholder="Email" name="email">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">Ganti Password </button>

                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="medium" href="<?= base_url('auth'); ?>">Kembali kehalaman login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>