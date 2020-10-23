<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h3><?= $title; ?></h3>
    <form action="">
        <div class="row">
            <div class="col-md-8 pr-5">
                <table class="table">
                    <thead>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#exampleModal">Tambah Rekening</button>
                        <tr>
                            <th scope=" col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">No Telpon</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>
                                <span class="badge badge-pill badge-info">Info</span>
                                <span class="badge badge-pill badge-warning">Edit</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </form>

</div>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>