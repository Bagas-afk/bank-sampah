-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2020 at 02:25 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sampah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_harga`
--

CREATE TABLE `tb_harga` (
  `id` int(11) NOT NULL,
  `jenis_sampah` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `satuan` varchar(16) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_harga`
--

INSERT INTO `tb_harga` (`id`, `jenis_sampah`, `harga`, `satuan`, `tanggal`) VALUES
(32, 'Botol Bersih', '4000', 'Kg', '2020-11-06'),
(33, 'Botol Kotor', '2000', 'Kg', '2020-11-06'),
(34, 'Botol Warna', '1500', 'Kg', '2020-11-06'),
(35, 'Gelas Bersih', '500', 'Kg', '2020-11-06'),
(36, 'Gelas Kotor', '2000', 'Kg', '2020-11-06'),
(37, 'Gelas Warna', '1000', 'Kg', '2020-11-06'),
(38, 'Kardus', '1000', 'Kg', '2020-11-06'),
(39, 'Buku Campur', '1000', 'Kg', '2020-11-06'),
(40, 'Kertas Semen', '1000', 'Kg', '2020-11-06'),
(41, 'Kaleng/Seng', '1000', 'Kg', '2020-11-06'),
(42, 'Impact', '300', 'Kg', '2020-11-06'),
(43, 'Emberan', '2000', 'Kg', '2020-11-06'),
(44, 'Beling', '200', 'Kg', '2020-11-06'),
(45, 'Botol Bir', '600', 'Kg', '2020-11-06'),
(46, 'Tutup Aqua', '2500', 'Kg', '2020-11-06'),
(47, 'Tutup Galon', '4500', 'Kg', '2020-11-06'),
(48, 'Besi', '2500', 'Kg', '2020-11-06'),
(49, 'Kabin', '2000', 'Kg', '2020-11-06'),
(50, 'Alumunium', '9000', 'Kg', '2020-11-06'),
(51, 'Aki', '9000', 'Item', '2020-11-06');

-- --------------------------------------------------------

--
-- Table structure for table `tb_logs`
--

CREATE TABLE `tb_logs` (
  `id` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `datetime` datetime NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_logs`
--

INSERT INTO `tb_logs` (`id`, `keterangan`, `datetime`, `id_user`) VALUES
(412, 'login', '2020-11-25 19:22:26', 8),
(413, 'login', '2020-11-28 03:01:41', 8),
(414, 'logout', '2020-11-28 03:04:18', 8),
(415, 'login', '2020-11-29 20:59:12', 8),
(416, 'logout', '2020-11-29 21:14:57', 8),
(417, 'login', '2020-11-29 21:15:16', 42),
(418, 'logout', '2020-11-29 21:16:21', 42),
(419, 'login', '2020-11-29 21:16:34', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `sebelum_transaksi` int(11) NOT NULL,
  `sesudah_transaksi` int(11) NOT NULL,
  `jumlah_subtotal` int(11) NOT NULL,
  `tipe_transaksi` text NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `detail_transaksi` varchar(50) NOT NULL,
  `banyak_sampah` varchar(50) NOT NULL,
  `id_sampah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id`, `id_user`, `sebelum_transaksi`, `sesudah_transaksi`, `jumlah_subtotal`, `tipe_transaksi`, `tanggal_transaksi`, `detail_transaksi`, `banyak_sampah`, `id_sampah`) VALUES
(122, 44, 0, 2150, 2150, 'Setoran sampah', '2020-09-13', 'Berhasil setor', '4.30', 35),
(123, 44, 2150, 16830, 14680, 'Setoran sampah', '2020-09-13', 'Berhasil setor', '14.68', 38),
(124, 44, 16830, 46030, 29200, 'Setoran sampah', '2020-09-13', 'Berhasil setor', '7.3', 32),
(125, 42, 0, 2900, 2900, 'Setoran sampah', '2020-09-13', 'Berhasil setor', '2.90', 41),
(126, 42, 2900, 12580, 9680, 'Setoran sampah', '2020-09-13', 'Berhasil setor', '9.68', 38),
(127, 42, 12580, 14230, 1650, 'Setoran sampah', '2020-09-13', 'Berhasil setor', '3.3', 35),
(128, 42, 14230, 26950, 12720, 'Setoran sampah', '2020-09-13', 'Berhasil setor', '3.18', 32),
(129, 42, 26950, 28510, 1560, 'Setoran sampah', '2020-09-13', 'Berhasil setor', '1.56', 37),
(130, 42, 28510, 40510, 12000, 'Setoran sampah', '2020-11-29', 'Berhasil setor', '8', 34);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `no_telpon` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `role_id` int(1) NOT NULL,
  `date_created` date NOT NULL,
  `image` varchar(13) NOT NULL,
  `saldo` int(11) NOT NULL,
  `file` varchar(128) NOT NULL,
  `status_akun` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nik`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `no_telpon`, `email`, `password`, `agama`, `alamat`, `kecamatan`, `kelurahan`, `status`, `pekerjaan`, `role_id`, `date_created`, `image`, `saldo`, `file`, `status_akun`) VALUES
(8, '2147483647', 'ADMIN', '1982-05-03', 'perempuan', '2147483647', 'hildauser@gmail.com', '$2y$10$Vui7//eSMKa18K1nODJ7GOu20SjknRMRFm6ihwpOZau/Uzj3QvTT6', 'Islam', 'Jalanin aja yang ada', '', '0', 'kawin', 'Pengangguran', 1, '0000-00-00', 'default.png', 0, '', 1),
(42, '3674045304840008', 'ARSIH', '1984-04-13', 'Perempuan', '089656352615', 'arsih@gmail.com', '$2y$10$sHFCimFNFuZslmRtHktg.OuETq.RTQLNCXx64X5xcHwuYSFlRk9Fi', 'islam', 'Jl. Cendrawasih V', 'Ciputat', 'Sawah Baru', 'kawin', 'Mengurus Rumah Tangga', 2, '2020-11-06', 'default.png', 40510, '32aa35150ac3b0db49a7251ec1972a80.jpeg', 1),
(43, '3674045112680003', 'LILIS SURYANI', '1969-12-11', 'Perempuan', '082114567265', 'lilis@gmail.com', '$2y$10$mwDSVEZA7DpHFYzFjDQeK.V1VD5hW2RskVrw9qmb8cArDgizhDleS', 'islam', 'JL. CENDRAWASIH 1 NO. 68', 'CIPUTAT', 'SAWAH BARU', 'kawin', 'MENGURUS RUMAH TANGGA', 2, '2020-11-09', 'default.png', 0, '7eb9a446b24f76378bfdd65e68d913dd.jpeg', 1),
(44, '3674040807740006', 'MUKIN', '1974-07-08', 'laki-laki', '082128762678', 'mukin@gmail.com', '$2y$10$luOD5F5OdR76StD1aE0vmuMFnqfCFToRJpAUjGiafcp7ipqho/nWu', 'islam', 'JL. CENDRAWASIH', 'CIPUTAT', 'SAWAH BARU', 'kawin', 'WIRASWASTA', 2, '2020-11-09', 'default.png', 46030, '5606bde9aa0a201d586bdd0b2feed82b.jpeg', 1),
(45, '3674041006700014', 'AKIM NISAD', '1970-06-10', 'laki-laki', '087771542772', 'akimnisad@gmail.com', '$2y$10$6RIQGssidmh4xm5ps6DuyefzI9nWfuslvWbn.6ZKd5RaQJ7Ul1gJe', 'Islam', 'KP SERUA', 'CIPUTAT', 'SAWAH BARU', 'kawin', 'KARYAWAN SWASTA', 2, '2020-11-29', 'default.png', 0, '5231eaff2580d7122a96d71e22683fe7.jpeg', 0),
(46, '3674046504830013', 'PRISILLIA KARTINI DEVI', '1983-04-25', 'perempuan', '082178879021', 'pkartinide@gmail.com', '$2y$10$6hw524XrRY2RqpI2j35h1OX3kqURbM4I43H4YYP2rvmKup4Koyaci', 'Islam', 'BINTARO GARDEN RESIDENCE 2 BLOK A NO.8', 'CIPUTAT', 'JOMBANG', 'kawin', 'KARYAWAN SWASTA', 2, '2020-11-29', 'default.png', 0, '80778580e3e7df8df8ce30c33cd0376d.jpeg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_harga`
--
ALTER TABLE `tb_harga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_logs`
--
ALTER TABLE `tb_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user_fk` (`id_user`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_harga`
--
ALTER TABLE `tb_harga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tb_logs`
--
ALTER TABLE `tb_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=420;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
