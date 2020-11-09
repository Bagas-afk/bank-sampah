-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2020 at 10:52 AM
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
(35, 'Gelas Bersih', '5000', 'Kg', '2020-11-06'),
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
(102, 'login', '2020-10-19 19:41:37', 1),
(103, 'login', '2020-10-19 23:09:37', 1),
(104, 'login', '2020-10-19 23:10:10', 1),
(105, 'login', '2020-10-20 15:51:11', 8),
(106, 'logout', '2020-10-20 16:26:15', 8),
(107, 'login', '2020-10-20 16:26:21', 1),
(108, 'logout', '2020-10-20 16:30:06', 1),
(109, 'login', '2020-10-20 16:30:13', 8),
(110, 'logout', '2020-10-20 16:30:23', 8),
(111, 'login', '2020-10-20 16:30:29', 1),
(112, 'logout', '2020-10-20 16:30:57', 1),
(113, 'login', '2020-10-20 16:31:03', 8),
(114, 'logout', '2020-10-20 16:39:58', 8),
(115, 'login', '2020-10-20 16:40:04', 1),
(116, 'logout', '2020-10-20 16:44:44', 1),
(117, 'login', '2020-10-20 16:44:50', 8),
(118, 'logout', '2020-10-20 16:55:32', 8),
(119, 'login', '2020-10-20 16:55:37', 1),
(120, 'logout', '2020-10-20 16:57:49', 1),
(121, 'login', '2020-10-20 16:57:59', 8),
(122, 'login', '2020-10-21 14:14:11', 1),
(123, 'logout', '2020-10-21 15:04:44', 1),
(124, 'login', '2020-10-21 15:12:41', 8),
(125, 'logout', '2020-10-21 16:25:46', 8),
(126, 'login', '2020-10-21 16:25:54', 1),
(127, 'logout', '2020-10-21 16:27:44', 1),
(128, 'login', '2020-10-21 16:27:51', 8),
(129, 'logout', '2020-10-21 18:51:21', 8),
(130, 'login', '2020-10-21 18:52:04', 1),
(131, 'logout', '2020-10-21 18:52:15', 1),
(132, 'login', '2020-10-21 18:52:22', 33),
(133, 'logout', '2020-10-21 18:56:46', 33),
(134, 'login', '2020-10-21 18:57:09', 8),
(135, 'logout', '2020-10-21 18:59:03', 8),
(136, 'login', '2020-10-21 19:09:39', 8),
(137, 'login', '2020-10-22 17:33:43', 8),
(138, 'login', '2020-10-23 20:57:10', 1),
(139, 'logout', '2020-10-23 21:20:41', 1),
(140, 'login', '2020-10-23 21:21:02', 8),
(141, 'logout', '2020-10-23 21:37:24', 8),
(142, 'login', '2020-10-23 21:37:31', 1),
(143, 'login', '2020-10-24 14:12:35', 1),
(144, 'logout', '2020-10-24 14:30:21', 1),
(145, 'login', '2020-10-24 14:30:25', 8),
(146, 'logout', '2020-10-24 14:31:13', 8),
(147, 'login', '2020-10-24 14:31:19', 1),
(148, 'logout', '2020-10-24 16:13:05', 1),
(149, 'login', '2020-10-24 16:13:49', 8),
(150, 'login', '2020-10-25 13:50:01', 8),
(151, 'logout', '2020-10-25 14:15:52', 8),
(152, 'login', '2020-10-25 14:16:14', 1),
(153, 'login', '2020-10-25 15:23:04', 8),
(154, 'logout', '2020-10-25 15:24:05', 8),
(155, 'login', '2020-10-25 15:24:10', 1),
(156, 'logout', '2020-10-25 15:25:32', 1),
(157, 'login', '2020-10-25 15:25:39', 8),
(158, 'logout', '2020-10-25 15:28:08', 8),
(159, 'login', '2020-10-25 15:28:15', 1),
(160, 'logout', '2020-10-25 15:30:38', 1),
(161, 'login', '2020-10-25 15:30:44', 8),
(162, 'logout', '2020-10-25 15:35:45', 8),
(163, 'login', '2020-10-25 15:35:53', 1),
(164, 'logout', '2020-10-25 15:37:08', 1),
(165, 'login', '2020-10-25 15:37:13', 8),
(166, 'logout', '2020-10-25 15:39:25', 8),
(167, 'login', '2020-10-25 15:39:35', 1),
(168, 'logout', '2020-10-25 16:00:04', 1),
(169, 'login', '2020-10-25 16:00:10', 8),
(170, 'logout', '2020-10-25 17:52:58', 8),
(171, 'login', '2020-10-25 19:42:47', 8),
(172, 'logout', '2020-10-25 22:06:23', 8),
(173, 'login', '2020-10-25 22:10:18', 8),
(174, 'logout', '2020-10-25 22:11:50', 8),
(175, 'login', '2020-10-25 22:11:56', 1),
(176, 'logout', '2020-10-25 22:12:17', 1),
(177, 'login', '2020-10-25 22:12:28', 8),
(178, 'login', '2020-10-25 22:25:35', 8),
(179, 'logout', '2020-10-25 22:27:16', 8),
(180, 'login', '2020-10-25 22:27:23', 1),
(181, 'logout', '2020-10-25 22:28:47', 1),
(182, 'login', '2020-10-25 22:28:54', 8),
(183, 'logout', '2020-10-25 22:33:42', 8),
(184, 'login', '2020-10-25 22:33:50', 1),
(185, 'login', '2020-10-26 04:03:43', 8),
(186, 'logout', '2020-10-26 04:36:25', 8),
(187, 'login', '2020-10-26 04:36:56', 1),
(188, 'login', '2020-10-26 13:57:22', 1),
(189, 'login', '2020-10-27 19:29:52', 1),
(190, 'logout', '2020-10-27 19:35:48', 1),
(191, 'login', '2020-10-27 19:35:57', 8),
(192, 'logout', '2020-10-27 19:48:27', 8),
(193, 'login', '2020-10-27 19:48:33', 1),
(194, 'logout', '2020-10-27 20:25:31', 1),
(195, 'login', '2020-10-27 20:25:38', 8),
(196, 'logout', '2020-10-27 22:19:54', 8),
(197, 'login', '2020-10-27 22:20:01', 1),
(198, 'login', '2020-10-28 01:56:53', 8),
(199, 'login', '2020-10-28 17:30:12', 8),
(200, 'logout', '2020-10-28 17:36:09', 8),
(201, 'login', '2020-10-29 17:27:26', 8),
(202, 'login', '2020-10-29 17:27:35', 8),
(203, 'logout', '2020-10-29 17:28:36', 8),
(204, 'login', '2020-10-29 17:29:05', 8),
(205, 'logout', '2020-10-29 17:29:15', 8),
(206, 'login', '2020-10-29 17:29:30', 1),
(207, 'logout', '2020-10-29 17:30:29', 1),
(208, 'login', '2020-10-29 17:30:35', 8),
(209, 'logout', '2020-10-29 17:30:38', 8),
(210, 'login', '2020-10-29 17:31:10', 1),
(211, 'logout', '2020-10-29 17:31:13', 1),
(212, 'login', '2020-10-29 17:31:29', 8),
(213, 'logout', '2020-10-29 17:31:51', 8),
(214, 'login', '2020-10-31 02:15:02', 41),
(215, 'logout', '2020-10-31 02:25:03', 41),
(216, 'login', '2020-10-31 02:27:24', 1),
(217, 'logout', '2020-10-31 02:42:37', 1),
(218, 'login', '2020-10-31 02:57:47', 41),
(219, 'logout', '2020-10-31 02:57:59', 41),
(220, 'login', '2020-10-31 04:14:26', 41),
(221, 'logout', '2020-10-31 04:16:56', 41),
(222, 'login', '2020-10-31 04:29:08', 41),
(223, 'logout', '2020-10-31 04:29:10', 41),
(224, 'login', '2020-10-31 14:08:19', 1),
(225, 'logout', '2020-10-31 14:08:42', 1),
(226, 'login', '2020-11-02 17:00:56', 41),
(227, 'logout', '2020-11-02 17:00:58', 41),
(228, 'login', '2020-11-02 17:09:38', 41),
(229, 'logout', '2020-11-02 17:10:45', 41),
(230, 'login', '2020-11-02 17:13:31', 41),
(231, 'logout', '2020-11-02 17:14:06', 41),
(232, 'login', '2020-11-04 03:15:29', 8),
(233, 'login', '2020-11-05 13:38:11', 8),
(234, 'logout', '2020-11-05 13:44:12', 8),
(235, 'login', '2020-11-05 13:45:04', 1),
(236, 'logout', '2020-11-05 13:53:04', 1),
(237, 'login', '2020-11-05 13:53:10', 8),
(238, 'login', '2020-11-06 12:45:22', 8),
(239, 'logout', '2020-11-06 12:56:13', 8),
(240, 'login', '2020-11-06 13:00:52', 8),
(241, 'logout', '2020-11-06 13:03:07', 8),
(242, 'login', '2020-11-06 13:19:53', 8),
(243, 'logout', '2020-11-06 13:51:02', 8),
(244, 'login', '2020-11-06 13:51:24', 8),
(245, 'logout', '2020-11-06 13:57:33', 8),
(246, 'login', '2020-11-06 13:57:38', 1),
(247, 'logout', '2020-11-06 13:58:25', 1),
(248, 'login', '2020-11-06 13:58:31', 8),
(249, 'logout', '2020-11-06 14:31:05', 8);

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
(8, '2147483647', 'Anonymose', '1982-05-03', 'perempuan', '2147483647', 'hildauser@gmail.com', '$2y$10$Vui7//eSMKa18K1nODJ7GOu20SjknRMRFm6ihwpOZau/Uzj3QvTT6', 'Islam', 'Jalanin aja yang ada', '', '0', 'kawin', 'Pengangguran', 1, '0000-00-00', 'default.png', 0, '', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `tb_logs`
--
ALTER TABLE `tb_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
