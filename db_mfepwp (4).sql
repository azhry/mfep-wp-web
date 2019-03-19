-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19 Mar 2019 pada 04.40
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mfepwp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon`
--

CREATE TABLE `calon` (
  `id_calon` int(11) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `calon`
--

INSERT INTO `calon` (`id_calon`, `Nama`, `created_at`, `updated_at`) VALUES
(45, 'Hasbullah', '2019-03-13 13:27:36', '2019-03-13 13:27:36'),
(46, 'Aspian', '2019-03-13 13:28:37', '2019-03-13 13:28:37'),
(48, 'Amir Hamzah', '2019-03-13 13:44:37', '2019-03-13 13:44:37'),
(50, 'Paizal Aziz', '2019-03-13 13:50:29', '2019-03-13 13:50:29'),
(51, 'Ahmad nelni', '2019-03-18 09:41:15', '2019-03-18 09:41:15'),
(52, 'Bahroni', '2019-03-18 09:42:24', '2019-03-18 09:42:24'),
(55, 'Mad nali', '2019-03-18 09:47:35', '2019-03-18 09:47:35'),
(56, 'Ahmad rifani', '2019-03-18 09:48:51', '2019-03-18 09:48:51'),
(57, 'Saironi', '2019-03-18 09:49:42', '2019-03-18 09:49:42'),
(58, 'Muhamad nasri', '2019-03-18 09:50:41', '2019-03-18 09:50:41'),
(59, 'Mursalin', '2019-03-18 09:51:37', '2019-03-18 09:51:37'),
(60, 'Ahmadin', '2019-03-18 09:52:33', '2019-03-18 09:52:33'),
(61, 'M jamil mk', '2019-03-18 09:53:28', '2019-03-18 09:53:28'),
(62, 'Rusmalina', '2019-03-18 09:54:19', '2019-03-18 09:54:19'),
(63, 'Sarmadiam', '2019-03-18 09:55:14', '2019-03-18 09:55:14'),
(64, 'Mad sete''i', '2019-03-18 09:56:02', '2019-03-18 09:56:02'),
(65, 'Surimna', '2019-03-18 09:56:55', '2019-03-18 09:56:55'),
(66, 'Yudin', '2019-03-18 09:57:42', '2019-03-18 09:57:42'),
(67, 'Hoirul', '2019-03-18 09:58:39', '2019-03-18 09:58:39'),
(68, 'Raga', '2019-03-18 09:59:24', '2019-03-18 09:59:24'),
(69, 'Raisen', '2019-03-18 10:00:07', '2019-03-18 10:00:07'),
(70, 'Amer', '2019-03-18 10:00:59', '2019-03-18 10:00:59'),
(71, 'Azmar Ar', '2019-03-18 10:01:48', '2019-03-18 10:01:48'),
(72, 'Beben tacesha', '2019-03-18 10:02:37', '2019-03-18 10:02:37'),
(73, 'Ayopin jansens', '2019-03-18 10:03:24', '2019-03-18 10:03:24'),
(74, 'Taklano', '2019-03-18 10:06:06', '2019-03-18 10:06:06'),
(75, 'Mat suhai', '2019-03-18 10:09:05', '2019-03-18 10:09:05'),
(76, 'Siti noriyam', '2019-03-18 10:10:04', '2019-03-18 10:10:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_calon`
--

CREATE TABLE `data_calon` (
  `id_data_calon` int(11) NOT NULL,
  `id_calon` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `id_faktor` int(11) NOT NULL,
  `real_value` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_calon`
--

INSERT INTO `data_calon` (`id_data_calon`, `id_calon`, `id_kriteria`, `id_faktor`, `real_value`, `created_at`, `updated_at`) VALUES
(110, 45, 14, 22, ' Petani ', '2019-03-13 13:27:36', '0000-00-00 00:00:00'),
(111, 45, 15, 21, 'Papan', '2019-03-13 13:27:36', '0000-00-00 00:00:00'),
(112, 45, 17, 27, 'Milik sendiri (tanpa subsidi)', '2019-03-13 13:27:36', '0000-00-00 00:00:00'),
(113, 45, 19, 36, '4', '2019-03-13 13:27:36', '0000-00-00 00:00:00'),
(114, 45, 20, 40, 'Milik Sendiri', '2019-03-13 13:27:36', '0000-00-00 00:00:00'),
(115, 45, 21, 32, '1500000', '2019-03-13 13:27:36', '0000-00-00 00:00:00'),
(116, 45, 22, 47, 'Panggung', '2019-03-13 13:27:36', '0000-00-00 00:00:00'),
(117, 46, 14, 26, 'Buruh', '2019-03-13 13:28:37', '0000-00-00 00:00:00'),
(118, 46, 15, 21, 'Papan', '2019-03-13 13:28:37', '0000-00-00 00:00:00'),
(119, 46, 17, 24, ' Milik Sendiri (subsidi) ', '2019-03-13 13:28:37', '0000-00-00 00:00:00'),
(120, 46, 19, 36, '3', '2019-03-13 13:28:37', '0000-00-00 00:00:00'),
(121, 46, 20, 40, 'Milik Sendiri', '2019-03-13 13:28:37', '0000-00-00 00:00:00'),
(122, 46, 21, 33, '800000', '2019-03-13 13:28:37', '0000-00-00 00:00:00'),
(123, 46, 22, 47, 'Panggung', '2019-03-13 13:28:37', '0000-00-00 00:00:00'),
(131, 48, 14, 16, 'Wirausaha', '2019-03-13 13:44:37', '0000-00-00 00:00:00'),
(132, 48, 15, 21, 'Papan', '2019-03-13 13:44:37', '0000-00-00 00:00:00'),
(133, 48, 17, 27, 'Milik sendiri (tanpa subsidi)', '2019-03-13 13:44:37', '0000-00-00 00:00:00'),
(134, 48, 19, 36, '3', '2019-03-13 13:44:37', '0000-00-00 00:00:00'),
(135, 48, 20, 40, 'Milik Sendiri', '2019-03-13 13:44:37', '0000-00-00 00:00:00'),
(136, 48, 21, 32, '1400000', '2019-03-13 13:44:37', '0000-00-00 00:00:00'),
(137, 48, 22, 47, 'Panggung', '2019-03-13 13:44:37', '0000-00-00 00:00:00'),
(145, 50, 14, 16, 'Wirausaha', '2019-03-13 13:50:29', '0000-00-00 00:00:00'),
(146, 50, 15, 25, 'Beton', '2019-03-13 13:50:29', '0000-00-00 00:00:00'),
(147, 50, 17, 27, 'Milik sendiri (tanpa subsidi)', '2019-03-13 13:50:29', '0000-00-00 00:00:00'),
(148, 50, 19, 30, '8', '2019-03-13 13:50:29', '0000-00-00 00:00:00'),
(149, 50, 20, 40, 'Milik Sendiri', '2019-03-13 13:50:29', '0000-00-00 00:00:00'),
(150, 50, 21, 33, '1300000', '2019-03-13 13:50:29', '0000-00-00 00:00:00'),
(151, 50, 22, 45, 'Permanen', '2019-03-13 13:50:29', '0000-00-00 00:00:00'),
(152, 51, 14, 16, 'Wirausaha', '2019-03-18 09:41:15', '0000-00-00 00:00:00'),
(153, 51, 15, 21, 'Papan', '2019-03-18 09:41:15', '0000-00-00 00:00:00'),
(154, 51, 17, 27, 'Milik sendiri (tanpa subsidi)', '2019-03-18 09:41:15', '0000-00-00 00:00:00'),
(155, 51, 19, 30, '6', '2019-03-18 09:41:15', '0000-00-00 00:00:00'),
(156, 51, 20, 40, 'Milik Sendiri', '2019-03-18 09:41:15', '0000-00-00 00:00:00'),
(157, 51, 21, 31, '2500000', '2019-03-18 09:41:15', '0000-00-00 00:00:00'),
(158, 51, 22, 47, 'Panggung', '2019-03-18 09:41:15', '0000-00-00 00:00:00'),
(159, 52, 14, 26, 'Buruh', '2019-03-18 09:42:24', '0000-00-00 00:00:00'),
(160, 52, 15, 39, 'Bambu', '2019-03-18 09:42:24', '0000-00-00 00:00:00'),
(161, 52, 17, 43, 'Numpang (tanpa subsidi)', '2019-03-18 09:42:24', '0000-00-00 00:00:00'),
(162, 52, 19, 30, '6', '2019-03-18 09:42:24', '0000-00-00 00:00:00'),
(163, 52, 20, 41, 'Ngontrak', '2019-03-18 09:42:24', '0000-00-00 00:00:00'),
(164, 52, 21, 33, '900000', '2019-03-18 09:42:24', '0000-00-00 00:00:00'),
(165, 52, 22, 47, 'Panggung', '2019-03-18 09:42:24', '0000-00-00 00:00:00'),
(180, 55, 14, 26, 'Buruh', '2019-03-18 09:47:35', '0000-00-00 00:00:00'),
(181, 55, 15, 21, 'Papan', '2019-03-18 09:47:35', '0000-00-00 00:00:00'),
(182, 55, 17, 43, 'Numpang (tanpa subsidi)', '2019-03-18 09:47:35', '0000-00-00 00:00:00'),
(183, 55, 19, 30, '7', '2019-03-18 09:47:35', '0000-00-00 00:00:00'),
(184, 55, 20, 41, 'Ngontrak', '2019-03-18 09:47:35', '0000-00-00 00:00:00'),
(185, 55, 21, 33, '900000', '2019-03-18 09:47:35', '0000-00-00 00:00:00'),
(186, 55, 22, 47, 'Panggung', '2019-03-18 09:47:35', '0000-00-00 00:00:00'),
(187, 56, 14, 22, ' Petani ', '2019-03-18 09:48:51', '0000-00-00 00:00:00'),
(188, 56, 15, 21, 'Papan', '2019-03-18 09:48:51', '0000-00-00 00:00:00'),
(189, 56, 17, 43, 'Numpang (tanpa subsidi)', '2019-03-18 09:48:51', '0000-00-00 00:00:00'),
(190, 56, 19, 36, '3', '2019-03-18 09:48:51', '0000-00-00 00:00:00'),
(191, 56, 20, 42, 'Menumpang', '2019-03-18 09:48:51', '0000-00-00 00:00:00'),
(192, 56, 21, 31, '1600000', '2019-03-18 09:48:51', '0000-00-00 00:00:00'),
(193, 56, 22, 47, 'Panggung', '2019-03-18 09:48:51', '0000-00-00 00:00:00'),
(194, 57, 14, 26, 'Buruh', '2019-03-18 09:49:42', '0000-00-00 00:00:00'),
(195, 57, 15, 25, 'Beton', '2019-03-18 09:49:42', '0000-00-00 00:00:00'),
(196, 57, 17, 27, 'Milik sendiri (tanpa subsidi)', '2019-03-18 09:49:42', '0000-00-00 00:00:00'),
(197, 57, 19, 36, '5', '2019-03-18 09:49:42', '0000-00-00 00:00:00'),
(198, 57, 20, 40, 'Milik Sendiri', '2019-03-18 09:49:42', '0000-00-00 00:00:00'),
(199, 57, 21, 31, '2000000', '2019-03-18 09:49:42', '0000-00-00 00:00:00'),
(200, 57, 22, 46, 'Semi Permanen', '2019-03-18 09:49:42', '0000-00-00 00:00:00'),
(201, 58, 14, 22, ' Petani ', '2019-03-18 09:50:41', '0000-00-00 00:00:00'),
(202, 58, 15, 21, 'Papan', '2019-03-18 09:50:41', '0000-00-00 00:00:00'),
(203, 58, 17, 27, 'Milik sendiri (tanpa subsidi)', '2019-03-18 09:50:41', '0000-00-00 00:00:00'),
(204, 58, 19, 36, '4', '2019-03-18 09:50:41', '0000-00-00 00:00:00'),
(205, 58, 20, 40, 'Milik Sendiri', '2019-03-18 09:50:41', '0000-00-00 00:00:00'),
(206, 58, 21, 33, '800000', '2019-03-18 09:50:41', '0000-00-00 00:00:00'),
(207, 58, 22, 47, 'Panggung', '2019-03-18 09:50:41', '0000-00-00 00:00:00'),
(208, 59, 14, 16, 'Wirausaha', '2019-03-18 09:51:37', '0000-00-00 00:00:00'),
(209, 59, 15, 25, 'Beton', '2019-03-18 09:51:37', '0000-00-00 00:00:00'),
(210, 59, 17, 27, 'Milik sendiri (tanpa subsidi)', '2019-03-18 09:51:37', '0000-00-00 00:00:00'),
(211, 59, 19, 36, '4', '2019-03-18 09:51:37', '0000-00-00 00:00:00'),
(212, 59, 20, 40, 'Milik Sendiri', '2019-03-18 09:51:37', '0000-00-00 00:00:00'),
(213, 59, 21, 31, '2700000', '2019-03-18 09:51:37', '0000-00-00 00:00:00'),
(214, 59, 22, 45, 'Permanen', '2019-03-18 09:51:37', '0000-00-00 00:00:00'),
(215, 60, 14, 22, ' Petani ', '2019-03-18 09:52:33', '0000-00-00 00:00:00'),
(216, 60, 15, 25, 'Beton', '2019-03-18 09:52:33', '0000-00-00 00:00:00'),
(217, 60, 17, 27, 'Milik sendiri (tanpa subsidi)', '2019-03-18 09:52:33', '0000-00-00 00:00:00'),
(218, 60, 19, 36, '3', '2019-03-18 09:52:33', '0000-00-00 00:00:00'),
(219, 60, 20, 40, 'Milik Sendiri', '2019-03-18 09:52:33', '0000-00-00 00:00:00'),
(220, 60, 21, 33, '800000', '2019-03-18 09:52:33', '0000-00-00 00:00:00'),
(221, 60, 22, 45, 'Permanen', '2019-03-18 09:52:33', '0000-00-00 00:00:00'),
(222, 61, 14, 22, ' Petani ', '2019-03-18 09:53:28', '0000-00-00 00:00:00'),
(223, 61, 15, 21, 'Papan', '2019-03-18 09:53:28', '0000-00-00 00:00:00'),
(224, 61, 17, 27, 'Milik sendiri (tanpa subsidi)', '2019-03-18 09:53:28', '0000-00-00 00:00:00'),
(225, 61, 19, 36, '4', '2019-03-18 09:53:28', '0000-00-00 00:00:00'),
(226, 61, 20, 40, 'Milik Sendiri', '2019-03-18 09:53:28', '0000-00-00 00:00:00'),
(227, 61, 21, 34, '500000', '2019-03-18 09:53:28', '0000-00-00 00:00:00'),
(228, 61, 22, 47, 'Panggung', '2019-03-18 09:53:28', '0000-00-00 00:00:00'),
(229, 62, 14, 26, 'Buruh', '2019-03-18 09:54:19', '0000-00-00 00:00:00'),
(230, 62, 15, 39, 'Bambu', '2019-03-18 09:54:19', '0000-00-00 00:00:00'),
(231, 62, 17, 18, ' Numpang (subsidi) ', '2019-03-18 09:54:19', '0000-00-00 00:00:00'),
(232, 62, 19, 36, '5', '2019-03-18 09:54:19', '0000-00-00 00:00:00'),
(233, 62, 20, 42, 'Menumpang', '2019-03-18 09:54:19', '0000-00-00 00:00:00'),
(234, 62, 21, 34, '700000', '2019-03-18 09:54:19', '0000-00-00 00:00:00'),
(235, 62, 22, 47, 'Panggung', '2019-03-18 09:54:19', '0000-00-00 00:00:00'),
(236, 63, 14, 16, 'Wirausaha', '2019-03-18 09:55:14', '0000-00-00 00:00:00'),
(237, 63, 15, 21, 'Papan', '2019-03-18 09:55:14', '0000-00-00 00:00:00'),
(238, 63, 17, 27, 'Milik sendiri (tanpa subsidi)', '2019-03-18 09:55:14', '0000-00-00 00:00:00'),
(239, 63, 19, 30, '7', '2019-03-18 09:55:14', '0000-00-00 00:00:00'),
(240, 63, 20, 40, 'Milik Sendiri', '2019-03-18 09:55:14', '0000-00-00 00:00:00'),
(241, 63, 21, 33, '1000000', '2019-03-18 09:55:14', '0000-00-00 00:00:00'),
(242, 63, 22, 47, 'Panggung', '2019-03-18 09:55:14', '0000-00-00 00:00:00'),
(243, 64, 14, 26, 'Buruh', '2019-03-18 09:56:02', '0000-00-00 00:00:00'),
(244, 64, 15, 25, 'Beton', '2019-03-18 09:56:02', '0000-00-00 00:00:00'),
(245, 64, 17, 27, 'Milik sendiri (tanpa subsidi)', '2019-03-18 09:56:02', '0000-00-00 00:00:00'),
(246, 64, 19, 36, '3', '2019-03-18 09:56:02', '0000-00-00 00:00:00'),
(247, 64, 20, 40, 'Milik Sendiri', '2019-03-18 09:56:02', '0000-00-00 00:00:00'),
(248, 64, 21, 33, '1000000', '2019-03-18 09:56:02', '0000-00-00 00:00:00'),
(249, 64, 22, 45, 'Permanen', '2019-03-18 09:56:02', '0000-00-00 00:00:00'),
(250, 65, 14, 26, 'Buruh', '2019-03-18 09:56:55', '0000-00-00 00:00:00'),
(251, 65, 15, 17, 'Triplek', '2019-03-18 09:56:55', '0000-00-00 00:00:00'),
(252, 65, 17, 43, 'Numpang (tanpa subsidi)', '2019-03-18 09:56:55', '0000-00-00 00:00:00'),
(253, 65, 19, 37, '2', '2019-03-18 09:56:55', '0000-00-00 00:00:00'),
(254, 65, 20, 41, 'Ngontrak', '2019-03-18 09:56:55', '0000-00-00 00:00:00'),
(255, 65, 21, 34, '400000', '2019-03-18 09:56:55', '0000-00-00 00:00:00'),
(256, 65, 22, 47, 'Panggung', '2019-03-18 09:56:55', '0000-00-00 00:00:00'),
(257, 66, 14, 26, 'Buruh', '2019-03-18 09:57:42', '0000-00-00 00:00:00'),
(258, 66, 15, 21, 'Papan', '2019-03-18 09:57:42', '0000-00-00 00:00:00'),
(259, 66, 17, 18, ' Numpang (subsidi) ', '2019-03-18 09:57:42', '0000-00-00 00:00:00'),
(260, 66, 19, 30, '7', '2019-03-18 09:57:42', '0000-00-00 00:00:00'),
(261, 66, 20, 42, 'Menumpang', '2019-03-18 09:57:42', '0000-00-00 00:00:00'),
(262, 66, 21, 33, '800000', '2019-03-18 09:57:42', '0000-00-00 00:00:00'),
(263, 66, 22, 47, 'Panggung', '2019-03-18 09:57:42', '0000-00-00 00:00:00'),
(264, 67, 14, 22, ' Petani ', '2019-03-18 09:58:39', '0000-00-00 00:00:00'),
(265, 67, 15, 21, 'Papan', '2019-03-18 09:58:39', '0000-00-00 00:00:00'),
(266, 67, 17, 24, ' Milik Sendiri (subsidi) ', '2019-03-18 09:58:39', '0000-00-00 00:00:00'),
(267, 67, 19, 36, '4', '2019-03-18 09:58:39', '0000-00-00 00:00:00'),
(268, 67, 20, 40, 'Milik Sendiri', '2019-03-18 09:58:39', '0000-00-00 00:00:00'),
(269, 67, 21, 33, '900000', '2019-03-18 09:58:39', '0000-00-00 00:00:00'),
(270, 67, 22, 47, 'Panggung', '2019-03-18 09:58:39', '0000-00-00 00:00:00'),
(271, 68, 14, 26, 'Buruh', '2019-03-18 09:59:24', '0000-00-00 00:00:00'),
(272, 68, 15, 17, 'Triplek', '2019-03-18 09:59:24', '0000-00-00 00:00:00'),
(273, 68, 17, 27, 'Milik sendiri (tanpa subsidi)', '2019-03-18 09:59:24', '0000-00-00 00:00:00'),
(274, 68, 19, 37, '2', '2019-03-18 09:59:24', '0000-00-00 00:00:00'),
(275, 68, 20, 41, 'Ngontrak', '2019-03-18 09:59:24', '0000-00-00 00:00:00'),
(276, 68, 21, 34, '500000', '2019-03-18 09:59:24', '0000-00-00 00:00:00'),
(277, 68, 22, 47, 'Panggung', '2019-03-18 09:59:24', '0000-00-00 00:00:00'),
(278, 69, 14, 26, 'Buruh', '2019-03-18 10:00:07', '0000-00-00 00:00:00'),
(279, 69, 15, 21, 'Papan', '2019-03-18 10:00:07', '0000-00-00 00:00:00'),
(280, 69, 17, 24, ' Milik Sendiri (subsidi) ', '2019-03-18 10:00:07', '0000-00-00 00:00:00'),
(281, 69, 19, 36, '3', '2019-03-18 10:00:07', '0000-00-00 00:00:00'),
(282, 69, 20, 40, 'Milik Sendiri', '2019-03-18 10:00:07', '0000-00-00 00:00:00'),
(283, 69, 21, 34, '500000', '2019-03-18 10:00:07', '0000-00-00 00:00:00'),
(284, 69, 22, 47, 'Panggung', '2019-03-18 10:00:07', '0000-00-00 00:00:00'),
(285, 70, 14, 26, 'Buruh', '2019-03-18 10:00:59', '0000-00-00 00:00:00'),
(286, 70, 15, 21, 'Papan', '2019-03-18 10:00:59', '0000-00-00 00:00:00'),
(287, 70, 17, 27, 'Milik sendiri (tanpa subsidi)', '2019-03-18 10:00:59', '0000-00-00 00:00:00'),
(288, 70, 19, 37, '2', '2019-03-18 10:00:59', '0000-00-00 00:00:00'),
(289, 70, 20, 40, 'Milik Sendiri', '2019-03-18 10:00:59', '0000-00-00 00:00:00'),
(290, 70, 21, 34, '400000', '2019-03-18 10:00:59', '0000-00-00 00:00:00'),
(291, 70, 22, 45, 'Permanen', '2019-03-18 10:00:59', '0000-00-00 00:00:00'),
(292, 71, 14, 26, 'Buruh', '2019-03-18 10:01:48', '0000-00-00 00:00:00'),
(293, 71, 15, 25, 'Beton', '2019-03-18 10:01:48', '0000-00-00 00:00:00'),
(294, 71, 17, 43, 'Numpang (tanpa subsidi)', '2019-03-18 10:01:48', '0000-00-00 00:00:00'),
(295, 71, 19, 37, '2', '2019-03-18 10:01:48', '0000-00-00 00:00:00'),
(296, 71, 20, 42, 'Menumpang', '2019-03-18 10:01:48', '0000-00-00 00:00:00'),
(297, 71, 21, 31, '2000000', '2019-03-18 10:01:48', '0000-00-00 00:00:00'),
(298, 71, 22, 46, 'Semi Permanen', '2019-03-18 10:01:48', '0000-00-00 00:00:00'),
(299, 72, 14, 26, 'Buruh', '2019-03-18 10:02:37', '0000-00-00 00:00:00'),
(300, 72, 15, 21, 'Papan', '2019-03-18 10:02:37', '0000-00-00 00:00:00'),
(301, 72, 17, 43, 'Numpang (tanpa subsidi)', '2019-03-18 10:02:37', '0000-00-00 00:00:00'),
(302, 72, 19, 37, '2', '2019-03-18 10:02:37', '0000-00-00 00:00:00'),
(303, 72, 20, 42, 'Menumpang', '2019-03-18 10:02:37', '0000-00-00 00:00:00'),
(304, 72, 21, 34, '700000', '2019-03-18 10:02:37', '0000-00-00 00:00:00'),
(305, 72, 22, 47, 'Panggung', '2019-03-18 10:02:37', '0000-00-00 00:00:00'),
(306, 73, 14, 26, 'Buruh', '2019-03-18 10:03:24', '0000-00-00 00:00:00'),
(307, 73, 15, 21, 'Papan', '2019-03-18 10:03:24', '0000-00-00 00:00:00'),
(308, 73, 17, 43, 'Numpang (tanpa subsidi)', '2019-03-18 10:03:24', '0000-00-00 00:00:00'),
(309, 73, 19, 37, '2', '2019-03-18 10:03:24', '0000-00-00 00:00:00'),
(310, 73, 20, 42, 'Menumpang', '2019-03-18 10:03:24', '0000-00-00 00:00:00'),
(311, 73, 21, 33, '800000', '2019-03-18 10:03:24', '0000-00-00 00:00:00'),
(312, 73, 22, 47, 'Panggung', '2019-03-18 10:03:24', '0000-00-00 00:00:00'),
(313, 74, 14, 26, 'Buruh', '2019-03-18 10:06:06', '0000-00-00 00:00:00'),
(314, 74, 15, 21, 'Papan', '2019-03-18 10:06:06', '0000-00-00 00:00:00'),
(315, 74, 17, 43, 'Numpang (tanpa subsidi)', '2019-03-18 10:06:06', '0000-00-00 00:00:00'),
(316, 74, 19, 38, '1', '2019-03-18 10:06:06', '0000-00-00 00:00:00'),
(317, 74, 20, 42, 'Menumpang', '2019-03-18 10:06:06', '0000-00-00 00:00:00'),
(318, 74, 21, 34, '500000', '2019-03-18 10:06:06', '0000-00-00 00:00:00'),
(319, 74, 22, 47, 'Panggung', '2019-03-18 10:06:06', '0000-00-00 00:00:00'),
(320, 75, 14, 22, ' Petani ', '2019-03-18 10:09:05', '0000-00-00 00:00:00'),
(321, 75, 15, 39, 'Bambu', '2019-03-18 10:09:05', '0000-00-00 00:00:00'),
(322, 75, 17, 43, 'Numpang (tanpa subsidi)', '2019-03-18 10:09:05', '0000-00-00 00:00:00'),
(323, 75, 19, 38, '0', '2019-03-18 10:09:05', '0000-00-00 00:00:00'),
(324, 75, 20, 42, 'Menumpang', '2019-03-18 10:09:05', '0000-00-00 00:00:00'),
(325, 75, 21, 34, '300000', '2019-03-18 10:09:05', '0000-00-00 00:00:00'),
(326, 75, 22, 47, 'Panggung', '2019-03-18 10:09:05', '0000-00-00 00:00:00'),
(327, 76, 14, 26, 'Buruh', '2019-03-18 10:10:04', '0000-00-00 00:00:00'),
(328, 76, 15, 39, 'Bambu', '2019-03-18 10:10:04', '0000-00-00 00:00:00'),
(329, 76, 17, 44, 'Tidak Ada', '2019-03-18 10:10:04', '0000-00-00 00:00:00'),
(330, 76, 19, 38, '0', '2019-03-18 10:10:04', '0000-00-00 00:00:00'),
(331, 76, 20, 42, 'Menumpang', '2019-03-18 10:10:04', '0000-00-00 00:00:00'),
(332, 76, 21, 35, '200000', '2019-03-18 10:10:04', '0000-00-00 00:00:00'),
(333, 76, 22, 47, 'Panggung', '2019-03-18 10:10:04', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `faktor`
--

CREATE TABLE `faktor` (
  `Id_faktor` int(11) NOT NULL,
  `nama_faktor` varchar(100) NOT NULL,
  `bobot_faktor` double NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `faktor`
--

INSERT INTO `faktor` (`Id_faktor`, `nama_faktor`, `bobot_faktor`, `id_kriteria`, `created_at`, `updated_at`) VALUES
(16, 'Wirausaha', 5, 14, '2019-01-28 10:27:58', '2019-01-28 10:27:58'),
(17, 'Triplek', 2, 15, '2019-01-28 10:33:10', '2019-01-28 10:33:10'),
(18, ' Numpang (subsidi) ', 4, 17, '2019-01-28 10:35:12', '2019-01-28 10:35:12'),
(21, 'Papan', 4, 15, '2019-01-28 10:32:58', '2019-01-28 10:32:58'),
(22, ' Petani ', 3, 14, '2019-01-28 10:28:15', '2019-01-28 10:28:15'),
(24, ' Milik Sendiri (subsidi) ', 5, 17, '2019-01-28 10:35:18', '2019-01-28 10:35:18'),
(25, 'Beton', 5, 15, '2019-01-28 10:32:47', '2019-01-28 10:32:47'),
(26, 'Buruh', 1, 14, '2019-01-28 10:28:27', '2019-01-28 10:28:27'),
(27, 'Milik sendiri (tanpa subsidi)', 3, 17, '2019-01-28 10:35:34', '2019-01-28 10:35:34'),
(29, '>8 ', 5, 19, '2019-01-28 10:31:24', '2019-01-28 10:31:24'),
(30, '6 s/d 8', 4, 19, '2019-01-28 10:31:44', '2019-01-28 10:31:44'),
(31, ' >1500000 ', 5, 21, '2019-01-28 10:30:47', '2019-01-28 10:30:47'),
(32, '1300001-1500000', 4, 21, '2019-01-28 10:29:39', '2019-01-28 10:29:39'),
(33, '800001-1300000', 3, 21, '2019-01-28 10:29:58', '2019-01-28 10:29:58'),
(34, '300000-800000', 2, 21, '2019-01-28 10:30:24', '2019-01-28 10:30:24'),
(35, '<300000', 1, 21, '2019-01-28 10:30:38', '2019-01-28 10:30:38'),
(36, '3 s/d 5', 3, 19, '2019-01-28 10:31:58', '2019-01-28 10:31:58'),
(37, '1 s/d 2', 2, 19, '2019-01-28 10:32:10', '2019-01-28 10:32:10'),
(38, 'sendiri', 1, 19, '2019-01-28 10:32:21', '2019-01-28 10:32:21'),
(39, 'Bambu', 1, 15, '2019-01-28 10:33:18', '2019-01-28 10:33:18'),
(40, 'Milik Sendiri', 4, 20, '2019-01-28 10:33:50', '2019-01-28 10:33:50'),
(41, 'Ngontrak', 2, 20, '2019-01-28 10:34:05', '2019-01-28 10:34:05'),
(42, 'Menumpang', 1, 20, '2019-01-28 10:34:14', '2019-01-28 10:34:14'),
(43, 'Numpang (tanpa subsidi)', 2, 17, '2019-01-28 10:35:50', '2019-01-28 10:35:50'),
(44, 'Tidak Ada', 1, 17, '2019-01-28 10:35:59', '2019-01-28 10:35:59'),
(45, 'Permanen', 5, 22, '2019-01-28 10:36:26', '2019-01-28 10:36:26'),
(46, 'Semi Permanen', 3, 22, '2019-01-28 10:36:38', '2019-01-28 10:36:38'),
(47, 'Panggung', 1, 22, '2019-01-28 10:36:47', '2019-01-28 10:36:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(100) NOT NULL,
  `bobot_kriteria` double NOT NULL,
  `kondisi` enum('Cost(-)','Benefit(+)') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `bobot_kriteria`, `kondisi`, `created_at`, `updated_at`) VALUES
(14, 'Pekerjaan', 3, 'Cost(-)', '2019-01-28 10:26:35', '2019-01-28 10:26:35'),
(15, 'Kondisi Rumah', 1, 'Cost(-)', '2019-01-28 10:27:04', '2019-01-28 10:27:04'),
(17, 'Jaringan Listrik', 2, 'Cost(-)', '2019-01-28 10:27:20', '2019-01-28 10:27:20'),
(19, 'Jumlah Tanggungan', 5, 'Benefit(+)', '2019-03-12 13:05:30', '2019-03-12 13:05:30'),
(20, 'Kepemilikan Rumah', 3, 'Cost(-)', '2019-01-28 10:27:13', '2019-01-28 10:27:13'),
(21, 'Penghasilan', 5, 'Cost(-)', '2019-01-28 10:26:46', '2019-01-28 10:26:46'),
(22, 'Jenis Rumah', 4, 'Cost(-)', '2019-01-28 10:27:31', '2019-01-28 10:27:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` char(32) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `id_role`, `username`, `password`, `nama`, `email`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 2, 'jack', '827ccb0eea8a706c4c34a16891f84e7b', 'Jacka Sembunk', 'jack@gmail.com', 'Palmeiras', '2019-01-09', 'Jln. Jalan jauh-jau, no.01', '2019-01-19 12:47:36', '2019-01-19 12:47:36'),
(2, 1, 'azhry', '985fabf8f96dc1c4c306341031569937', 'Azhary Arliansyah', 'arliansyah_azhary@yahoo.com', 'Palembang', '1996-08-05', '', '2019-01-29 11:04:42', '2019-01-29 11:04:42'),
(3, 1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'Admin', 'admin@admin.com', 'admin', '2019-01-02', 'admin', '2019-01-29 13:51:48', '2019-01-29 13:51:48'),
(4, 2, 'kades', '01cfcd4f6b8770febfb40cb906715822', 'Kades', 'kades@kades.com', 'kades', '2019-01-01', 'kades', '2019-01-29 13:51:48', '2019-01-29 13:51:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id_role`, `role`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'ini  admin', '2019-01-19 12:45:42', '2019-01-19 12:45:42'),
(2, 'kades', 'ini kades', '2019-01-19 12:45:58', '2019-01-19 12:45:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `warga`
--

CREATE TABLE `warga` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `penghasilan` bigint(20) NOT NULL,
  `jumlah_tanggungan` int(11) NOT NULL,
  `kondisi_rumah` varchar(255) NOT NULL,
  `kepemilikan_rumah` varchar(255) NOT NULL,
  `jaringan_listrik` varchar(255) NOT NULL,
  `jenis_rumah` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `warga`
--

INSERT INTO `warga` (`id`, `nama`, `pekerjaan`, `penghasilan`, `jumlah_tanggungan`, `kondisi_rumah`, `kepemilikan_rumah`, `jaringan_listrik`, `jenis_rumah`, `created_at`, `updated_at`) VALUES
(2, 'Aspian ', 'Buruh', 800000, 3, 'Papan', 'Milik sendiri', 'Milik sendiri (subsidi)', 'Panggung', '2019-01-17 11:10:41', '2019-01-17 11:10:41'),
(3, 'Paizal aziz', 'Wirausaha', 1300000, 8, 'Beton', 'Milik sendiri', 'Milik sendiri ( tanpa subsidi)', 'Permanen', '2019-01-17 11:10:41', '2019-01-17 11:10:41'),
(4, 'Amir hamza', 'Wirausaha', 1400000, 3, 'Papan', 'Milik sendiri', 'Milik sendiri (tanpa subsidi)', 'Panggung', '2019-01-17 11:10:41', '2019-01-17 11:10:41'),
(5, 'Kunan', 'Petani', 1500000, 3, 'Papan', 'Milik sendiri', 'Milik sendiri (tanpa subsidi)', 'Panggung', '2019-01-17 11:10:41', '2019-01-17 11:10:41'),
(6, 'Samsir alam', 'Petani', 1700000, 6, 'Beton', 'Milik sendiri', 'Milik sendiri (tanpa subsidi)', 'Permanen', '2019-01-17 11:10:41', '2019-01-17 11:10:41'),
(7, 'Muhammad eban ', 'Buruh', 900000, 6, 'Bambu', 'Menumpang', 'Menumpang (subsidi)', 'Panggung', '2019-01-17 11:10:41', '2019-01-17 11:10:41'),
(8, 'Yunani', 'Buruh', 1200000, 2, 'Papan', 'Milik sendiri', 'Milik sendiri (tanpa subsidi)', 'Panggung', '2019-01-17 11:10:41', '2019-01-17 11:10:41'),
(9, 'Ahmad sobki', 'Petani', 750000, 6, 'Papan', 'Menumpang', 'Menumpang (tanpa subsidi)', 'Panggung', '2019-01-17 11:10:41', '2019-01-17 11:10:41'),
(10, 'Dede yusri', 'Wirausaha', 3000000, 6, 'Beton', 'Milik sendiri', 'Milik sendiri (tanpa subsidi)', 'Permanen', '2019-01-17 11:10:41', '2019-01-17 11:10:41'),
(11, 'Muhammad Suhai', 'Petani', 800000, 5, 'Papan', 'Menumpang', 'Menumpang  (tanpa subsidi)', 'Panggung', '2019-01-17 11:10:41', '2019-01-17 11:10:41'),
(12, 'Muhammad kumpi', 'Petani', 600000, 6, 'Papan', 'Milik sendiri', 'Milik sendiri (tanpa subsidi)', 'Panggung', '2019-01-17 11:10:41', '2019-01-17 11:10:41'),
(13, 'Hoiri mz', 'Buruh', 950000, 2, 'Beton', 'Menumpang', 'Menumpang (subsidi)', 'Semi permanen', '2019-01-17 11:10:41', '2019-01-17 11:10:41'),
(14, 'Mat bujangan', 'Wirausaha', 2000000, 4, 'Beton', 'Milik sendiri', 'Milik sendiri(tanpa subsidi)', 'Semi permanen', '2019-01-17 11:10:41', '2019-01-17 11:10:41'),
(15, 'Husin p', 'Buruh', 900000, 9, 'Bambu', 'Menumpang', 'Menumpang (tanpa subsidi)', 'Panggung', '2019-01-17 11:10:41', '2019-01-17 11:10:41'),
(16, 'Mat ripan s', 'Buruh', 800000, 8, 'Papan', 'Milik sendiri', 'Milik sendiri (tanpa subsidi)', 'Panggung', '2019-01-17 11:10:41', '2019-01-17 11:10:41'),
(17, 'Baharudin', 'Petani', 900000, 6, 'Papan', 'Menumpang', 'Menumpang (tanpa subsidi)', 'Panggung ', '2019-01-17 11:10:41', '2019-01-17 11:10:41'),
(18, 'Asbianto', 'Petani', 1300000, 5, 'Beton', 'Milik sendiri', 'Milik sendiri (subsidi)', 'Permanen', '2019-01-17 11:10:41', '2019-01-17 11:10:41'),
(19, 'Ahmad saihoni', 'Buruh', 950000, 8, 'Triplek', 'Mengontrak', 'Menumpang ( tanpa subsidi)', 'Panggung', '2019-01-17 11:10:41', '2019-01-17 11:10:41'),
(20, 'Amaludin', 'Petani', 1000000, 4, 'Papan', 'Milik sendiri', 'Milik sendiri (tanpa subsidi)', 'Panggung', '2019-01-17 11:10:41', '2019-01-17 11:10:41'),
(21, 'Nawaludin', 'Petani', 700000, 3, 'Papan', 'Milik sendiri', 'Milik sendiri (tanpa subsidi)', 'Panggung', '2019-01-17 11:10:41', '2019-01-17 11:10:41'),
(22, 'Ahmad nelni', 'Wirausaha', 2500000, 6, 'Papan', 'Milik sendiri', 'Milik sendiri (tanpa subsidi)', 'Panggung', '2019-01-17 11:10:41', '2019-01-17 11:10:41'),
(23, 'Bahroni', 'Buruh', 900000, 6, 'Bambu', 'Mengontrak', 'Menumpang(tanpa subsidi)', 'Panggung', '2019-01-17 11:10:41', '2019-01-17 11:10:41'),
(24, 'Mat suhai', 'Petani', 300000, 0, 'Bambu', 'Menumpang', 'Menumpang (tanpa subsidi)', 'Panggung', '2019-01-17 11:10:41', '2019-01-17 11:10:41'),
(25, 'Mad nali', 'Buruh', 900000, 7, 'Papan', 'Mengontrak', 'Menumpang (tanpa subsidi)', 'Panggung', '2019-01-17 11:10:41', '2019-01-17 11:10:41'),
(26, 'Ahmad rifani', 'Petani', 1600000, 3, 'Papan', 'Menumpang', 'Menumpang (tanpa subsidi)', 'Panggung', '2019-01-17 11:10:41', '2019-01-17 11:10:41'),
(27, 'Saironi', 'Buruh', 2000000, 5, 'Beton', 'Milik sendiri', 'Milik sendiri (tanpa subsidi)', 'Semi permanen', '2019-01-17 11:10:41', '2019-01-17 11:10:41'),
(28, 'Muhamad nasri', 'Petani', 800000, 4, 'Papan', 'Milik sendiri', 'Milik sendiri (tanpa subsidi)', 'Panggung', '2019-01-17 11:10:41', '2019-01-17 11:10:41'),
(29, 'Mursalin', 'Wirausaha', 2700000, 4, 'Beton', 'Milik sendiri', 'Milik sendiri (tanpa subsidi)', 'Permanen', '2019-01-17 11:10:41', '2019-01-17 11:10:41'),
(30, 'Ahmadin', 'Petani', 800000, 3, 'Beton', 'Milik sendiri', 'Milik sendiri (tanpa subsidi)', 'Permanen', '2019-01-17 11:10:41', '2019-01-17 11:10:41'),
(31, 'M jamil mk', 'Petani', 500000, 4, 'Papan', 'Milik sendiri', 'Milik sendiri (tanpa subsidi)', 'Panggung', '2019-01-17 11:10:41', '2019-01-17 11:10:41'),
(32, 'Rusmalina', 'Buruh', 700000, 5, 'Bambu', 'Menumpang', 'Menumpang(subsidi)', 'Panggung', '2019-01-17 11:10:41', '2019-01-17 11:10:41'),
(33, 'Sarmadi am', 'Wirausaha', 1000000, 7, 'Papan', 'Milik sendiri', 'Milik sendiri (tanpa subsidi)', 'Panggung', '2019-01-17 11:10:41', '2019-01-17 11:10:41'),
(34, 'Mad sete’i', 'Buruh', 1000000, 3, 'Beton', 'Milik sendiri', 'Milik sendiri (tanpa subsidi)', 'Permanen', '2019-01-17 11:10:41', '2019-01-17 11:10:41'),
(35, 'Surimna', 'Buruh', 400000, 2, 'Triplek', 'Mengontrak', 'Menumpang (tanpa subsidi)', 'Panggung', '2019-01-17 11:10:41', '2019-01-17 11:10:41'),
(36, 'Yudin', 'Buruh', 800000, 7, 'Papan', 'Menumpang', 'Menumpang (subsidi)', 'Panggung', '2019-01-17 11:10:41', '2019-01-17 11:10:41'),
(37, 'Siti noriyam', 'Buruh', 200000, 0, 'Bambu', 'Menumpang', 'Tidak ada', 'Panggung', '2019-01-17 11:10:41', '2019-01-17 11:10:41'),
(38, 'Hoirul', 'Petani', 900000, 4, 'Papan', 'Milik sendiri', 'Milik sendiri (subsidi)', 'Panggung', '2019-01-17 11:10:41', '2019-01-17 11:10:41'),
(39, 'Raga', 'Buruh', 500000, 2, 'Triplek', 'Mengontrak', 'Milik sendiri (tanpa subsidi)', 'Panggung', '2019-01-17 11:10:41', '2019-01-17 11:10:41'),
(40, 'Raisen', 'Buruh', 500000, 3, 'Papan', 'Milik sendiri', 'Milik sendiri (subsidi)', 'Panggung', '2019-01-17 11:10:41', '2019-01-17 11:10:41'),
(41, 'Amer', 'Buruh', 400000, 2, 'Papan', 'Milik sendiri', 'Milik sendiri (tanpa subsidi)', 'Permanen', '2019-01-17 11:10:41', '2019-01-17 11:10:41'),
(42, 'Azmar Ar', 'Buruh', 2000000, 2, 'Beton', 'Menumpang', 'Menumpang (tanpa subsidi)', 'Semi permanen', '2019-01-17 11:10:41', '2019-01-17 11:10:41'),
(43, 'Beben ta cesha ', 'Buruh', 700000, 2, 'Papan', 'Menumpang', 'Menumpang (tanpa subsidi)', 'Panggung', '2019-01-17 11:10:41', '2019-01-17 11:10:41'),
(44, 'Ayopin jansens', 'Buruh', 800000, 2, 'Papan', 'Menumpang', 'Menumpang (tanpa subsidi)', 'Panggung', '2019-01-17 11:10:41', '2019-01-17 11:10:41'),
(45, 'Taklano', 'Buruh', 500000, 1, 'Papan', 'Menumpang', 'Menumpang (tanpa subsidi)', 'Panggung', '2019-01-17 11:10:41', '2019-01-17 11:10:41'),
(46, 'Azhary Arliansyah', 'Programmer', 5000000, 0, 'Papan', 'Milik sendiri', 'Milik sendiri (tanpa subsidi)', 'Panggung', '2019-01-17 12:00:19', '2019-01-17 12:00:19'),
(47, 'Azhary Arliansyah', '16', 32, 36, '21', '42', '43', '46', '2019-01-29 13:48:08', '2019-01-29 13:48:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon`
--
ALTER TABLE `calon`
  ADD PRIMARY KEY (`id_calon`);

--
-- Indexes for table `data_calon`
--
ALTER TABLE `data_calon`
  ADD PRIMARY KEY (`id_data_calon`),
  ADD KEY `id_calon` (`id_calon`),
  ADD KEY `id_kriteria` (`id_kriteria`),
  ADD KEY `id_faktor` (`id_faktor`);

--
-- Indexes for table `faktor`
--
ALTER TABLE `faktor`
  ADD PRIMARY KEY (`Id_faktor`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`),
  ADD UNIQUE KEY `nama_kriteria` (`nama_kriteria`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD KEY `id_role` (`id_role`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calon`
--
ALTER TABLE `calon`
  MODIFY `id_calon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `data_calon`
--
ALTER TABLE `data_calon`
  MODIFY `id_data_calon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=334;
--
-- AUTO_INCREMENT for table `faktor`
--
ALTER TABLE `faktor`
  MODIFY `Id_faktor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `warga`
--
ALTER TABLE `warga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_calon`
--
ALTER TABLE `data_calon`
  ADD CONSTRAINT `relasi_2` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relasi_3` FOREIGN KEY (`id_faktor`) REFERENCES `faktor` (`Id_faktor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relasi_4` FOREIGN KEY (`id_calon`) REFERENCES `calon` (`id_calon`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `faktor`
--
ALTER TABLE `faktor`
  ADD CONSTRAINT `relasi_1` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `pengguna_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
