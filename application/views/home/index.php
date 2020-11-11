<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>datatables/datatables.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/style.css'); ?>">
    <link rel="icon" type="image/jpg" href="<?= base_url('assets/img/'); ?>banksampah.jpg">

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="<?= base_url('home') ?>">Home</a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <a href="<?= base_url('auth') ?>" class="btn btn-outline-primary my-2 my-sm-0">Login</a>
                </form>
            </div>
        </nav>
        <table>
            <div class="jumbotron">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-4">
                            <img src="banksampah.JPG" alt="responsive-image" class="d-block">
                        </div>
                        <div class="col-7">
                            <h3 class="display-4">Sistem Informasi Bank Sampah</h3>
                            <p class="lead">Selamatkan Jiwa, Selamatkan Bumi.</p>
                        </div>
                    </div>
                </div>
                <hr class="my-4">
                <p class="paragraf">
                    Bank Sampah disini mengelola sampah yang berjenis (non-organik) seperti plastik, kertas, botol dsb. Sebelum sampah yang disetor warga, warga diberikan rincian daftar harga sampah per barang. Sampah lalu dikumpulkan digudang penyimpanan dan ditabung sehingga dapat menghasilkan nilai ekonomis untuk nasabah. Untuk mendaftar menjadi nasabah, masyarakat hanya perlu KTP dan No Telpon yang bisa dihubungi, Penabung pun disebut dengan nasabah mereka memiliki buku tabungan yang nantinya dapat diambil. Nama tempat itu adalah Bank Sampah JAWARA (Jalan Cendrawasih Raya) yang terletak di Sawah Baru, Ciputat, Tangerang Selatan.
                    Dari segi keseimbangan lingkungan, kesehatan dan kebersihan apabila sampah tidak dikelola dengan baik dapat menimbulkan berbagai gangguan-gangguan antara lain pencemaran udara, pencemaran air dan pencemaran tanah.
                </p>
                <p class="paragraf">Berdirinya bank sampah di Sawah Baru, Ciputat, Tangerang Selatan, karena adanya permasalahan lingkungan tersebut. Bank Sampah tersebut mengumpulkan sampah dari masyarakat (nasabah) maupun warga luar yang ingin menabung sampah nya di bank sampah yang nantinya akan di timbang (tempat gudang) ataupun di jemput kerumah nasabah dengan harga yang berbeda.</p>
                <p class="text-right"><a href="<?= base_url('mpdfcontroller/printPDF') ?>" type="button" class="btn btn-info mb-4">Daftar harga sampah</a></p>
            </div>
    </div>
    </table>
    </div>
    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Bank Sampah 2019</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?= base_url('assets/'); ?>datatables/datatables.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/my_script.js"></script>

</body>

</html>