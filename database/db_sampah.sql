-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2020 at 03:14 PM
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
(14, 'Kardus', '1000', 'Kg', '0000-00-00'),
(15, 'Gelas Bersih', '5000', 'Kg', '0000-00-00'),
(16, 'Besi', '2500', 'Kg', '0000-00-00'),
(17, 'Alumunium', '9000', 'Kg', '0000-00-00'),
(18, 'Ac', '90000', 'Item', '0000-00-00'),
(26, 'Kertas apasi', '3000', 'Kg', '0000-00-00');

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
(1, 'login', '2020-10-11 00:00:00', 8),
(2, 'login', '2020-10-11 00:00:00', 8),
(3, 'login', '2020-10-11 13:34:04', 8),
(4, 'login', '2020-10-11 13:34:39', 8),
(5, 'login', '2020-10-11 13:36:00', 8),
(6, 'logout', '2020-10-11 13:37:20', 8),
(7, 'login', '2020-10-11 13:38:07', 8),
(8, 'logout', '2020-10-11 13:41:03', 8),
(9, 'login', '2020-10-11 13:42:08', 8),
(10, 'login', '2020-10-12 15:17:32', 8),
(11, 'logout', '2020-10-12 17:25:24', 8),
(12, 'login', '2020-10-12 17:25:32', 1),
(13, 'logout', '2020-10-12 17:27:35', 1),
(14, 'login', '2020-10-12 18:29:15', 27),
(15, 'logout', '2020-10-12 18:29:38', 27),
(16, 'login', '2020-10-12 21:49:40', 1),
(17, 'logout', '2020-10-12 21:57:16', 1),
(18, 'login', '2020-10-12 21:57:23', 8),
(19, 'login', '2020-10-13 20:33:11', 8),
(20, 'logout', '2020-10-13 21:19:56', 8),
(21, 'login', '2020-10-14 18:54:02', 8),
(22, 'login', '2020-10-15 03:50:52', 1),
(23, 'logout', '2020-10-15 04:00:24', 1),
(24, 'login', '2020-10-15 04:00:31', 8),
(25, 'login', '2020-10-15 23:03:45', 8),
(26, 'logout', '2020-10-16 00:01:57', 8),
(27, 'login', '2020-10-16 00:40:49', 8),
(28, 'logout', '2020-10-16 00:48:21', 8),
(29, 'login', '2020-10-16 15:00:45', 8),
(30, 'logout', '2020-10-16 15:15:14', 8),
(31, 'login', '2020-10-16 15:15:21', 1),
(32, 'logout', '2020-10-16 15:18:31', 1),
(33, 'login', '2020-10-17 15:18:03', 8),
(34, 'logout', '2020-10-17 15:21:55', 8),
(35, 'login', '2020-10-17 15:22:03', 1),
(36, 'logout', '2020-10-17 15:35:14', 1),
(37, 'login', '2020-10-17 15:35:20', 8),
(38, 'login', '2020-10-17 19:25:47', 8),
(39, 'logout', '2020-10-17 20:45:41', 8),
(40, 'login', '2020-10-17 20:45:48', 1),
(41, 'logout', '2020-10-17 20:52:17', 1),
(42, 'login', '2020-10-17 20:52:23', 8),
(43, 'logout', '2020-10-17 21:31:23', 8),
(44, 'login', '2020-10-17 21:31:31', 1),
(45, 'logout', '2020-10-17 21:39:55', 1),
(46, 'login', '2020-10-17 21:40:00', 8),
(47, 'logout', '2020-10-17 21:41:06', 8),
(48, 'login', '2020-10-17 21:41:12', 1),
(49, 'logout', '2020-10-17 21:52:37', 1),
(50, 'login', '2020-10-17 21:52:44', 8),
(51, 'logout', '2020-10-17 22:27:36', 8),
(52, 'login', '2020-10-17 22:27:42', 8),
(53, 'logout', '2020-10-17 22:33:48', 8),
(54, 'login', '2020-10-17 22:33:54', 1),
(55, 'logout', '2020-10-17 22:37:22', 1),
(56, 'login', '2020-10-17 22:37:28', 8),
(57, 'logout', '2020-10-17 22:52:06', 8),
(58, 'login', '2020-10-17 22:52:11', 1),
(59, 'logout', '2020-10-18 01:35:30', 1),
(60, 'login', '2020-10-18 01:38:52', 8),
(61, 'logout', '2020-10-18 01:40:38', 8),
(62, 'login', '2020-10-18 01:46:31', 8),
(63, 'logout', '2020-10-18 01:47:45', 8),
(64, 'login', '2020-10-18 01:47:50', 1),
(65, 'logout', '2020-10-18 02:24:27', 1),
(66, 'login', '2020-10-18 02:24:33', 8),
(67, 'logout', '2020-10-18 04:11:53', 8),
(68, 'login', '2020-10-18 04:14:19', 1),
(69, 'login', '2020-10-18 04:18:13', 1),
(70, 'logout', '2020-10-18 04:27:21', 1),
(71, 'login', '2020-10-18 04:27:26', 8),
(72, 'logout', '2020-10-18 04:31:59', 8),
(73, 'login', '2020-10-18 04:32:04', 1),
(74, 'login', '2020-10-18 04:32:39', 1),
(75, 'login', '2020-10-18 04:33:44', 8),
(76, 'logout', '2020-10-18 04:34:04', 8),
(77, 'logout', '2020-10-18 04:34:10', 8),
(78, 'login', '2020-10-18 04:34:16', 1),
(79, 'logout', '2020-10-18 04:36:11', 1),
(80, 'login', '2020-10-18 04:36:16', 8),
(81, 'logout', '2020-10-18 04:36:25', 8),
(82, 'login', '2020-10-18 04:36:29', 1),
(83, 'logout', '2020-10-18 04:43:59', 1),
(84, 'login', '2020-10-18 04:44:05', 8),
(85, 'login', '2020-10-19 13:35:42', 8),
(86, 'login', '2020-10-19 15:52:24', 8),
(87, 'logout', '2020-10-19 16:47:50', 8),
(88, 'login', '2020-10-19 16:47:56', 1),
(89, 'login', '2020-10-19 16:48:46', 8),
(90, 'logout', '2020-10-19 16:49:16', 8),
(91, 'login', '2020-10-19 16:49:21', 1),
(92, 'logout', '2020-10-19 16:50:07', 1),
(93, 'login', '2020-10-19 16:50:15', 8),
(94, 'logout', '2020-10-19 16:50:39', 8),
(95, 'login', '2020-10-19 16:50:46', 1),
(96, 'logout', '2020-10-19 17:30:40', 1),
(97, 'logout', '2020-10-19 17:30:40', 1),
(98, 'login', '2020-10-19 17:30:49', 8),
(99, 'logout', '2020-10-19 17:38:22', 8),
(100, 'login', '2020-10-19 17:38:37', 1),
(101, 'login', '2020-10-19 19:41:17', 1),
(102, 'login', '2020-10-19 19:41:37', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_setor`
--

CREATE TABLE `tb_setor` (
  `id` int(11) NOT NULL,
  `tanggal_setor` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_sampah` int(11) NOT NULL,
  `jumlah_kg` int(11) NOT NULL,
  `sub_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_setor`
--

INSERT INTO `tb_setor` (`id`, `tanggal_setor`, `id_user`, `id_sampah`, `jumlah_kg`, `sub_total`) VALUES
(1, '2020-09-09', 10, 10, 5, 150000),
(7, '2020-09-05', 10, 9, 10, 3700070),
(11, '2020-09-04', 10, 10, 12, 360000),
(12, '2020-09-24', 11, 9, 10, 3700070),
(13, '2020-09-19', 13, 9, 2, 7400),
(14, '2020-09-26', 16, 10, 2, 6000),
(15, '2020-09-30', 1, 9, 4, 12000),
(16, '2020-09-26', 18, 10, 5, 12500),
(17, '2020-09-12', 0, 10, 2, 5000),
(18, '2020-10-16', 1, 9, 5, 16000),
(19, '2020-10-09', 1, 10, 3, 7500),
(20, '2020-10-09', 1, 9, 4, 12800),
(21, '2020-10-09', 1, 10, 1, 2500),
(22, '2020-10-14', 27, 9, 2, 6400),
(23, '2020-10-16', 1, 18, 1, 90000),
(24, '2020-10-18', 1, 11, 2, 8000),
(25, '2020-10-18', 29, 9, 2, 6400),
(26, '2020-10-19', 1, 10, 2, 5000),
(27, '2020-10-19', 1, 13, 2, 5000),
(28, '2020-10-19', 29, 14, 5, 5000),
(29, '2020-10-19', 29, 15, 2, 10000),
(30, '2020-10-19', 1, 14, 5, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jumlah_penarikan` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal` date NOT NULL,
  `verifikasi_penarikan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id`, `id_user`, `jumlah_penarikan`, `keterangan`, `tanggal`, `verifikasi_penarikan`) VALUES
(6, 1, 6100, 'Penarikan', '2020-10-19', 'Berhasil'),
(7, 1, 2222, '', '2020-10-20', 'Pending'),
(22, 29, 6400, 'setoran', '2020-10-18', ''),
(23, 1, 5000, 'setoran', '2020-10-19', ''),
(24, 1, 5000, 'setoran', '2020-10-19', ''),
(25, 29, 5000, 'setoran', '2020-10-19', ''),
(26, 29, 10000, 'setoran', '2020-10-19', ''),
(27, 1, 5000, 'setoran', '2020-10-19', ''),
(28, 1, 100000, 'Penarikan', '2020-10-20', 'Pending');

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
  `date_created` int(11) NOT NULL,
  `image` varchar(13) NOT NULL,
  `saldo` int(11) NOT NULL,
  `file` varchar(128) NOT NULL,
  `status_akun` int(1) NOT NULL,
  `tanggal_register_nasabah` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nik`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `no_telpon`, `email`, `password`, `agama`, `alamat`, `kecamatan`, `kelurahan`, `status`, `pekerjaan`, `role_id`, `date_created`, `image`, `saldo`, `file`, `status_akun`, `tanggal_register_nasabah`) VALUES
(1, '2147483647', 'Bagas Kurniawan', '0000-00-00', '', '0821131636212', 'bagasaci@gmail.com', '$2y$10$f/z1uv8k38oOc7liDxnAeOKUEqJp8nB5gu3g9i/xIu2ORgdAiZ89W', '', 'Jalaninnn', 'Ciputat', 'Sawah Baru', 'kawin', '', 2, 0, 'default.png', 143000, 'd65bad91aecd4d6fec0246c0e81e96ee.png', 1, '0000-00-00'),
(8, '2147483647', 'Anonymose', '1982-05-03', 'perempuan', '2147483647', 'hildauser@gmail.com', '$2y$10$Vui7//eSMKa18K1nODJ7GOu20SjknRMRFm6ihwpOZau/Uzj3QvTT6', 'Islam', 'Jalanin aja yang ada', '', '0', 'kawin', 'Pengangguran', 1, 0, 'default.png', 0, '', 1, '0000-00-00'),
(27, '1234567890123411', 'aduh', '2020-10-15', 'laki-laki', '23163242342', 'wanwan@gmail.com', '$2y$10$Vui7//eSMKa18K1nODJ7GOu20SjknRMRFm6ihwpOZau/Uzj3QvTT6', 'Choose...', 'jalanin banget', 'Ciputat', 'Sawah Baru', 'Choose...', 'Pengangguran', 2, 1602393051, 'default.png', 6400, 'd65bad91aecd4d6fec0246c0e81e96ee.png', 0, '0000-00-00'),
(28, '999999999999999', 'Rian hadi dwi', '2008-02-12', 'laki-laki', '082113221231', 'rian@gmail.com', '', 'Islam', 'Kalimantan selatan', 'Pamulang', 'Pamulang', 'belum_kawin', 'Pengangguran', 2, 0, '', 0, '<p>The filetype you are attempting to upload is not allowed.</p>', 0, '0000-00-00'),
(29, '361726378182632', 'Gustri', '0000-00-00', 'laki-laki', '322323', 'hilda1user@gmail.com', 'ss', 'Islam', 'sd', 'Pamulang', 'Sawah Baru', 'kawin', 'Pengangguran', 2, 0, '', 53400, '511565f343999dc3348326087b994dcd.jpg', 1, '0000-00-00'),
(30, '1234567890987654', 'bagasaa', '2020-10-07', 'laki-laki', '12312312', 'kurniawan@gmail.com', 'admin', 'Islam', 'adasdadas', 'Ciputat', 'Sawah Baru', 'belum_kawin', 'Pengangguran', 2, 0, '', 0, '<p>The filetype you are attempting to upload is not allowed.</p>', 1, '0000-00-00');

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
-- Indexes for table `tb_setor`
--
ALTER TABLE `tb_setor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tb_logs`
--
ALTER TABLE `tb_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `tb_setor`
--
ALTER TABLE `tb_setor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_logs`
--
ALTER TABLE `tb_logs`
  ADD CONSTRAINT `id_user_fk` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
