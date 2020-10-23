<!-- Begin Page Content -->
<div class="container-fluid">
    <h3><?= $title; ?></h3>

    <!-- Earnings (Monthly) Card Example -->
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Data Nasabah</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><span><?= $query ?></span>
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
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jenis Sampah</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><span><?= $query1 ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Penyetoran Sampah</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><span><?= $query2 ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-trash fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Page Heading -->

        <div class="row">
            <div class="jumbotron">
                <link rel="stylesheet" href="<?= base_url('assets/style.css'); ?>">
                <p class="display-4 pb-2">Sistem Informasi Bank Sampah Jawara</p>
                <hr class="my-4">
                <p class="paragraf">
                    Bank Sampah disini mengelola sampah yang berjenis (non-organik) seperti plastik, kertas, botol dsb. Sebelum sampah yang disetor warga, warga diberikan rincian daftar harga sampah per barang. Sampah lalu dikumpulkan digudang penyimpanan dan ditabung sehingga dapat menghasilkan nilai ekonomis untuk nasabah. Untuk mendaftar menjadi nasabah, masyarakat hanya perlu KTP dan No Telpon yang bisa dihubungi, Penabung pun disebut dengan nasabah mereka memiliki buku tabungan yang nantinya dapat diambil. Nama tempat itu adalah Bank Sampah JAWARA (Jalan Cendrawasih Raya) yang terletak di Sawah Baru, Ciputat, Tangerang Selatan.
                    Dari segi keseimbangan lingkungan, kesehatan dan kebersihan apabila sampah tidak dikelola dengan baik dapat menimbulkan berbagai gangguan-gangguan antara lain pencemaran udara, pencemaran air dan pencemaran tanah.
                </p>
                <p class="paragraf">Berdirinya bank sampah di Sawah Baru, Ciputat, Tangerang Selatan, karena adanya permasalahan lingkungan tersebut. Bank Sampah tersebut mengumpulkan sampah dari masyarakat (nasabah) maupun warga luar yang ingin menabung sampah nya di bank sampah yang nantinya akan di timbang (tempat gudang) ataupun di jemput kerumah nasabah dengan harga yang berbeda.</p>
            </div>
        </div>


    </div>
    <!-- /.container-fluid -->

    <!-- End of Main Content -->