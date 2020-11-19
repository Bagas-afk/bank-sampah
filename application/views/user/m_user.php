<!-- Begin Page Content -->
<div class="container-fluid">
    <h3><?= $title; ?></h3>
    <div class="col-sm-6 justify-content-start">
        <?= $this->session->flashdata('message'); ?>
    </div>
    <div class="row">
        <div class="col-lg">
            <div class="table-responsive">

                <table class="table table-hover" id="datatable">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Role_id</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($tampilUser as $T) { ?>
                            <tr>
                                <th scope="row"><?= $no++; ?></th>
                                <td><?= $T->nama ?></td>
                                <td><?= $T->role_id ?></td>
                                <td>
                                    <button class="btn badge-warning" data-toggle="modal" data-target="#staticBackdrop<?= $T->id ?>">edit role</button>
                                </td>
                            </tr>
                            <!-- Modal Edit Role -->
                            <div class="modal fade" id="staticBackdrop<?= $T->id ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Edit role user</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?= base_url('user/editRole') ?>" method="POST">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <label for="exampleFormControlInput1">Role_id</label>
                                                    </div>
                                                    <div class="col-6">
                                                        <input class="form-control" value="<?= $T->role_id ?>" name="role_id"></input>
                                                        <input name="id" class="form-control" value="<?= $T->id ?>" hidden></input>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Page Heading -->
<!-- /.container-fluid -->

<!-- End of Main Content -->