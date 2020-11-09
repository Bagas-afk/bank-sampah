<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h3><?= $title; ?></h3>
    <div class="row mt-3">
        <div class="col-sm-6 justify-content-start">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <button type="button" class="btn btn-md btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"> Tambah Jenis Sampah</i></button>
        </div>
        <div class="col-md-3">
            <a href="<?= base_url('mpdfcontroller/printPDF') ?>" type="button" class="btn btn-md btn-info mb-4"> <i class="fas fa-print"> Cetak daftar sampah </i></a>
        </div>
    </div>


    <div class="row mt-3">
        <div class="col">
            <div class="table-responsive">
                <table class="table" id="datatable" data-info="false" data-paging="false">
                    <thead class="">
                        <!-- Button trigger modal -->
                        <tr>
                            <th scope=" col">No</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Satuan</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data_sampah as $sampah) { ?>
                            <tr>
                                <th scope="row"><?= $no++; ?></th>
                                <td><?= $sampah->jenis_sampah ?></td>

                                <td>Rp. <?= $sampah->harga ?></td>
                                <td>/ <?= $sampah->satuan ?></td>
                                <td>
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal<?= $sampah->id ?>"><i class="fas fa-edit"></i></button>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusModal<?= $sampah->id ?>"><i class="fas fa-trash"></i></button>
                                </td>

                            </tr>
                            <!-- Modal Edit -->
                            <div class="modal fade" id="editModal<?= $sampah->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit sampah <?= $sampah->jenis_sampah ?></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?= base_url('user/editSampah') ?>" method="post">
                                                <div class="form-group">
                                                    <label for="inputEmail4">Jenis Sampah</label>
                                                    <input name="jenis_sampah" type="text" class="form-control" readonly id="inputEmail4" value="<?= $sampah->jenis_sampah ?>">
                                                    <input type="hidden" class="form-control mb-3" readonly id="exampleFormControlInput1" value="<?= $sampah->id ?>" name="id">
                                                </div>
                                                <label for="inputEmail4">Harga</label>
                                                <input name="harga" type="number" class="form-control" id="harga" value="<?= $sampah->harga ?>">
                                                <label for="inputEmail4">Satuan</label>
                                                <input name="satuan" type="text" class="form-control" id="inputEmail4" readonly value="<?= $sampah->satuan ?>">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal Hapus-->
                            <div class="modal fade" id="hapusModal<?= $sampah->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Hapus sampah</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah anda ingin menghapus <?= $sampah->jenis_sampah; ?>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                            <a href="<?= base_url('user/hapusSampah/') . $sampah->id ?>" class="btn btn-primary">Hapus</a>
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
    <!-- Modal Tambah -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah data barang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="<?= base_url('user/tambahSampah') ?>" method="post">
                    <div class="modal-body">
                        <label for="inputEmail4">Nama Barang</label>
                        <input name="jenis_sampah" type="text" class="form-control" required>
                        <label for="inputEmail4">Harga</label>
                        <input name="harga" type="text" class="form-control" required>
                        <div class="form-group">
                            <label for="inputEmail4">Satuan</label>
                            <select name="satuan" type="text" class="form-control" required>
                                <option selected>Choose...</option>
                                <option>Kg</option>
                                <option>Item</option>
                            </select>
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
</div>