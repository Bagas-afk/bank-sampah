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
        <a href="<?= base_url('user/tambahnasabah'); ?>" type="button" class="btn btn-primary mb-4"><i class="fas fa-plus"> Tambah Nasabah</i></a>
        <div class="table-responsive">
            <table class="table table-hover" id="datatable">
                <thead class="thead-light">
                    <!-- Button trigger modal -->
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">No Telpon</th>
                    <th scope="col">Email</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($data_nasabah as $nasabah) { ?>
                        <tr>
                            <th scope="row"><?= $no++; ?></th>
                            <td><?= $nasabah->nama ?></td>
                            <td><?= $nasabah->no_telpon ?></td>
                            <td><?= $nasabah->email ?></td>
                            <td><?= $nasabah->alamat ?></td>
                            <?php if ($nasabah->status_akun == 0) { ?>
                                <td class="bg-warning text-dark">
                                    <a data-toggle="modal" data-target="#verifModal<?= $nasabah->id ?>">Belum Aktif</a>
                                </td>
                            <?php } else { ?>
                                <td class="bg-success text-dark">
                                    Aktif
                                </td>
                            <?php } ?>
                            <td>
                                <?php if ($nasabah->status_akun == 0) { ?>

                                    <button type=" button" class="btn btn-danger" data-toggle="modal" data-target="#hapusModal<?= $nasabah->id ?>"><i class="fas fa-trash"> Hapus</i></button>
                                <?php } else { ?>
                                    <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#infoModal<?= $nasabah->id ?>"><i class="fas fas-fw fa-eye"></i></button>
                                    <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#editModal<?= $nasabah->id ?>"><i class="fas fas-fw fa-edit"></i></button>
                                    <button type=" button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#hapusModal<?= $nasabah->id ?>"><i class="fas fas-fw fa-trash"></i></button>
                                <?php } ?>
                            </td>
                        </tr>
                        <!-- Modal Verif-->
                        <div class=" modal fade" id="verifModal<?= $nasabah->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel" title="Popover title">Verif nasabah <?= $nasabah->nama ?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-6 col-sm-6">
                                                        <label for="exampleFormControlInput1">Nama</label>
                                                        <input type="text" class="form-control mb-3" value="<?= $nasabah->nama ?>" required name="nama" readonly>
                                                        <input type="hidden" class="form-control mb-3" readonly value="<?= $nasabah->id ?>" name="id">
                                                    </div>
                                                    <div class="col-6 col-sm-6">
                                                        <label for="exampleFormControlInput1">No Telpon</label>
                                                        <input type="number" class="form-control mb-3" value="<?= $nasabah->no_telpon ?>" readonly name="no_telpon">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6 col-sm-6">
                                                        <label for="exampleFormControlInput1">Email</label>
                                                        <input type="text" class="form-control mb-3" readonly value="<?= $nasabah->email ?>" readonly>
                                                    </div>
                                                    <div class="col-6 col-sm-6">
                                                        <label for="exampleFormControlInput1">NIK</label>
                                                        <input type="number" class="form-control mb-3" readonly value="<?= $nasabah->nik ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6 col-sm-6">
                                                        <label for="exampleFormControlInput1">Alamat</label>
                                                        <input name="alamat" class="form-control mb-3" value="<?= $nasabah->alamat ?>" name="alamat" readonly></input>
                                                    </div>
                                                    <div class="col-6 col-sm-6">
                                                        <label for="exampleFormControlInput1">Status</label>
                                                        <input type="text" class="form-control mb-3" value="<?= $nasabah->status ?>" name="status" readonly>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6 col-sm-6">
                                                        <label for="exampleFormControlInput1">Kecamatan</label>
                                                        <input type="text" class="form-control mb-3" value="<?= $nasabah->kecamatan ?>" name="kecamatan" readonly>
                                                    </div>
                                                    <div class="col-6 col-sm-6">
                                                        <label for="exampleFormControlInput1">Kelurahan</label>
                                                        <input type="text" class="form-control mb-3" value="<?= $nasabah->kelurahan ?>" name="kelurahan" readonly>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-sm-12 d-flex justify-content-center">
                                                        <img src="<?= base_url('assets/file/') . $nasabah->file ?>" alt="" width="70%">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="<?= base_url('user/verifAkun/') . $nasabah->id ?>" class="btn btn-success"><i class="fas fa-check-square"> Verifikasi</i></a>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Info-->
                        <div class=" modal fade" id="infoModal<?= $nasabah->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel" title="Popover title">Info nasabah <?= $nasabah->nama ?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-6 col-sm-6">
                                                        <label for="exampleFormControlInput1">Nama</label>
                                                        <input type="text" class="form-control mb-3" value="<?= $nasabah->nama ?>" required name="nama" readonly>
                                                        <input type="hidden" class="form-control mb-3" readonly value="<?= $nasabah->id ?>" name="id">
                                                    </div>
                                                    <div class="col-6 col-sm-6">
                                                        <label for="exampleFormControlInput1">No Telpon</label>
                                                        <input type="number" class="form-control mb-3" value="<?= $nasabah->no_telpon ?>" readonly name="no_telpon">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6 col-sm-6">
                                                        <label for="exampleFormControlInput1">Email</label>
                                                        <input type="text" class="form-control mb-3" readonly value="<?= $nasabah->email ?>" readonly>
                                                    </div>
                                                    <div class="col-6 col-sm-6">
                                                        <label for="exampleFormControlInput1">Alamat</label>
                                                        <input name="alamat" class="form-control mb-3" value="<?= $nasabah->alamat ?>" name="alamat" readonly></input>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-sm-12 d-flex justify-content-center">
                                                        <img src="<?= base_url('assets/file/') . $nasabah->file ?>" alt="" width="70%">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Modal Edit-->
                        <div class="modal fade" id="editModal<?= $nasabah->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit nasabah <?= $nasabah->nama ?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?= base_url('user/editNasabah'); ?>" method="POST">
                                            <div class="form">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-6 col-sm-6">
                                                            <label for="exampleFormControlInput1">Nama</label>
                                                            <input type="text" class="form-control mb-3" readonly value="<?= $nasabah->nama ?>" required name="nama">
                                                            <input type="hidden" class="form-control mb-3" readonly value="<?= $nasabah->id ?>" name="id">
                                                        </div>
                                                        <div class="col-6 col-sm-6">
                                                            <label for="exampleFormControlInput1">No Telpon</label>
                                                            <input type="number" class="form-control mb-3" value="<?= $nasabah->no_telpon ?>" required name="no_telpon">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6 col-sm-6">
                                                            <label for="exampleFormControlInput1">Email</label>
                                                            <input type="text" class="form-control mb-3" readonly value="<?= $nasabah->email ?>">
                                                        </div>
                                                        <div class="col-6 col-sm-6">
                                                            <label for="exampleFormControlInput1">Alamat</label>
                                                            <input name="alamat" class="form-control mb-3" value="<?= $nasabah->alamat ?>" name="alamat" readonly></input>
                                                        </div>
                                                    </div>
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


                        <!-- Modal Hapus-->
                        <div class="modal fade" id="hapusModal<?= $nasabah->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Hapus nasabah</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah anda ingin menghapus data <?= $nasabah->nama; ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <a href="<?= base_url('user/hapusNasabah/') . $nasabah->id ?>" class="btn btn-primary">Hapus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>