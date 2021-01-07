<!-- Begin Page Content -->
<div class="container-fluid">
    <h3><?= $title; ?></h3>

    <!-- Earnings (Monthly) Card Example -->
    <div class="row mt-3">
        <div class="col-4">
            <div class="card bg-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-lg text-gray-300">Data Nasabah</div>
                            <div class="h5 mb-0  text-gray-300"><span><?= $query ?></span>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-4 ">
            <div class="card bg-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-lg text-gray-300">Jenis Sampah</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-300"><span><?= $query1 ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-trash fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-4">
            <div class="card bg-warning shadow h-100 py-2">
                <div class="card-body ">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-lg text-gray-300">Jumlah Transaksi</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-300"><span><?= $query2 ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Heading -->
    <div class="row mt-5">
        <div class="col-xl">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Transaksi</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie pt-4 pb-2">
                        <canvas id="myPieChart1">
                        </canvas>
                    </div>
                    <div class="mt-4 text-center large">
                        <span class="mr-2">
                            <i class="fas fa-circle text-primary"></i> Withdraw
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-success"></i> Setoran
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- you need to include the shieldui css and js assets in order for the grids to work -->





</div>
<!-- /.container-fluid -->

<!-- End of Main Content -->