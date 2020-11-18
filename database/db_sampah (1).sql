-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2020 at 05:26 PM
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
(255, 'login', '2020-11-07 01:05:03', 8),
(256, 'logout', '2020-11-07 01:21:44', 8),
(257, 'login', '2020-11-07 01:22:23', 8),
(258, 'login', '2020-11-09 12:29:20', 8),
(259, 'logout', '2020-11-09 13:12:28', 8),
(260, 'login', '2020-11-09 13:12:38', 43),
(261, 'logout', '2020-11-09 13:17:53', 43),
(262, 'login', '2020-11-09 13:18:29', 8),
(263, 'login', '2020-11-09 13:21:29', 43),
(264, 'logout', '2020-11-09 14:16:46', 43),
(265, 'login', '2020-11-09 15:12:04', 8),
(266, 'logout', '2020-11-09 17:25:48', 8),
(267, 'logout', '2020-11-09 17:25:48', 8),
(268, 'login', '2020-11-11 16:50:06', 8),
(269, 'logout', '2020-11-11 17:12:18', 8),
(270, 'login', '2020-11-11 17:12:28', 43),
(271, 'logout', '2020-11-11 17:17:26', 43),
(272, 'login', '2020-11-11 17:17:35', 8),
(273, 'logout', '2020-11-11 18:56:53', 8),
(274, 'login', '2020-11-11 19:19:22', 43),
(275, 'logout', '2020-11-11 19:20:05', 43),
(276, 'login', '2020-11-11 19:26:39', 8),
(277, 'logout', '2020-11-11 19:26:42', 8),
(278, 'login', '2020-11-11 19:41:41', 8),
(279, 'logout', '2020-11-11 19:45:23', 8),
(280, 'login', '2020-11-11 19:56:22', 43),
(281, 'login', '2020-11-11 20:00:19', 43),
(282, 'logout', '2020-11-11 20:15:58', 43),
(283, 'login', '2020-11-11 20:17:31', 43),
(284, 'logout', '2020-11-11 20:22:09', 43),
(285, 'login', '2020-11-12 01:14:21', 8),
(286, 'login', '2020-11-12 12:11:18', 8),
(287, 'login', '2020-11-12 12:51:52', 8),
(288, 'login', '2020-11-12 12:53:26', 44),
(289, 'logout', '2020-11-12 12:54:19', 8),
(290, 'login', '2020-11-12 12:54:29', 44),
(291, 'login', '2020-11-12 12:56:04', 44),
(292, 'logout', '2020-11-12 13:01:30', 44),
(293, 'logout', '2020-11-12 13:01:35', 8),
(294, 'login', '2020-11-12 13:01:57', 44),
(295, 'logout', '2020-11-12 13:22:06', 44),
(296, 'login', '2020-11-12 13:22:13', 43),
(297, 'login', '2020-11-12 20:42:15', 8),
(298, 'logout', '2020-11-12 20:58:34', 8),
(299, 'login', '2020-11-16 11:27:34', 8),
(300, 'logout', '2020-11-16 11:30:48', 8),
(301, 'login', '2020-11-16 11:30:56', 43),
(302, 'logout', '2020-11-16 11:32:56', 43),
(303, 'login', '2020-11-16 11:49:52', 8),
(304, 'login', '2020-11-17 17:28:45', 8),
(305, 'logout', '2020-11-17 17:31:16', 8),
(306, 'login', '2020-11-17 18:06:21', 8),
(307, 'logout', '2020-11-17 18:24:13', 8),
(308, 'login', '2020-11-18 00:45:31', 8),
(309, 'logout', '2020-11-18 01:24:47', 8),
(310, 'login', '2020-11-18 01:27:33', 8),
(311, 'logout', '2020-11-18 01:54:05', 8),
(312, 'login', '2020-11-18 03:07:09', 8),
(313, 'logout', '2020-11-18 03:13:19', 8),
(314, 'login', '2020-11-18 04:08:43', 8),
(315, 'logout', '2020-11-18 04:09:25', 8),
(316, 'login', '2020-11-18 04:33:52', 8),
(317, 'logout', '2020-11-18 04:35:00', 8),
(318, 'login', '2020-11-18 04:43:47', 8),
(319, 'logout', '2020-11-18 04:46:43', 8),
(320, 'login', '2020-11-18 04:51:07', 43),
(321, 'logout', '2020-11-18 04:51:46', 43),
(322, 'login', '2020-11-18 04:51:54', 44),
(323, 'logout', '2020-11-18 05:07:21', 44),
(324, 'login', '2020-11-18 15:14:11', 8),
(325, 'logout', '2020-11-18 15:30:35', 8),
(326, 'login', '2020-11-18 15:30:48', 8),
(327, 'logout', '2020-11-18 17:30:07', 8),
(328, 'login', '2020-11-18 17:30:15', 8),
(329, 'logout', '2020-11-18 17:31:32', 8),
(330, 'login', '2020-11-18 18:15:43', 8),
(331, 'logout', '2020-11-18 21:11:09', 8),
(332, 'login', '2020-11-18 23:24:46', 8);

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
(77, 43, 0, 9500, 9500, 'Setoran sampah', '2020-02-09', 'Berhasil setor', '9.5', 38),
(78, 43, 9500, 25000, 15500, 'Setoran sampah', '2020-02-09', 'Berhasil setor', '3.1', 35),
(79, 43, 25000, 59400, 34400, 'Setoran sampah', '2020-02-09', 'Berhasil setor', '8.6', 32),
(81, 43, 59400, 60075, 675, 'Setoran sampah', '2020-02-09', 'Berhasil setor', '0.15', 47),
(82, 43, 60075, 60795, 720, 'Setoran sampah', '2020-02-09', 'Berhasil setor', '3.6', 44),
(90, 43, 68295, 72295, 4000, 'Setoran sampah', '2020-11-18', 'Berhasil setor', '2', 33);

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
(42, '3674045304840008', 'ARSIH', '1984-04-13', 'Perempuan', '089656352615', 'arsih@gmail.com', '$2y$10$sHFCimFNFuZslmRtHktg.OuETq.RTQLNCXx64X5xcHwuYSFlRk9Fi', 'islam', 'Jl. Cendrawasih V', 'Ciputat', 'Sawah Baru', 'kawin', 'Mengurus Rumah Tangga', 2, '2020-11-06', 'default.png', 675, '32aa35150ac3b0db49a7251ec1972a80.jpeg', 1),
(43, '3674045112680003', 'LILIS SURYANI', '1969-12-11', 'Perempuan', '082114567265', 'lilis@gmail.com', '$2y$10$mwDSVEZA7DpHFYzFjDQeK.V1VD5hW2RskVrw9qmb8cArDgizhDleS', 'islam', 'JL. CENDRAWASIH 1 NO. 68', 'CIPUTAT', 'SAWAH BARU', 'kawin', 'MENGURUS RUMAH TANGGA', 2, '2020-11-09', 'default.png', 72295, '7eb9a446b24f76378bfdd65e68d913dd.jpeg', 1),
(44, '3674040807740006', 'MUKIN', '1974-07-08', 'laki-laki', '082128762678', 'mukin@gmail.com', '$2y$10$luOD5F5OdR76StD1aE0vmuMFnqfCFToRJpAUjGiafcp7ipqho/nWu', 'islam', 'JL. CENDRAWASIH', 'CIPUTAT', 'SAWAH BARU', 'kawin', 'WIRASWASTA', 2, '2020-11-09', 'default.png', 0, '5606bde9aa0a201d586bdd0b2feed82b.jpeg', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=333;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
