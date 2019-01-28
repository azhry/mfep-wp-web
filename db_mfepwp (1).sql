-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29 Jan 2019 pada 00.04
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
(32, 'Hasbullah', '2019-01-28 11:05:21', '2019-01-28 11:05:21'),
(33, 'Aspian', '2019-01-28 11:06:54', '2019-01-28 11:06:54'),
(34, 'Paizal Aziz', '2019-01-28 11:08:13', '2019-01-28 11:08:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_calon`
--

CREATE TABLE `data_calon` (
  `id_data_calon` int(11) NOT NULL,
  `id_calon` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `id_faktor` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_calon`
--

INSERT INTO `data_calon` (`id_data_calon`, `id_calon`, `id_kriteria`, `id_faktor`, `created_at`, `updated_at`) VALUES
(40, 32, 14, 22, '2019-01-28 11:05:21', '2019-01-28 11:05:21'),
(41, 32, 15, 21, '2019-01-28 11:05:21', '2019-01-28 11:05:21'),
(42, 32, 17, 27, '2019-01-28 11:05:21', '2019-01-28 11:05:21'),
(43, 32, 19, 36, '2019-01-28 11:05:21', '2019-01-28 11:05:21'),
(44, 32, 20, 40, '2019-01-28 11:05:21', '2019-01-28 11:05:21'),
(45, 32, 21, 32, '2019-01-28 11:05:21', '2019-01-28 11:05:21'),
(46, 32, 22, 47, '2019-01-28 11:05:21', '2019-01-28 11:05:21'),
(47, 33, 14, 26, '2019-01-28 11:06:54', '2019-01-28 11:06:54'),
(48, 33, 15, 21, '2019-01-28 11:06:54', '2019-01-28 11:06:54'),
(49, 33, 17, 24, '2019-01-28 11:06:54', '2019-01-28 11:06:54'),
(50, 33, 19, 36, '2019-01-28 11:06:54', '2019-01-28 11:06:54'),
(51, 33, 20, 40, '2019-01-28 11:06:54', '2019-01-28 11:06:54'),
(52, 33, 21, 34, '2019-01-28 11:06:54', '2019-01-28 11:06:54'),
(53, 33, 22, 47, '2019-01-28 11:06:54', '2019-01-28 11:06:54'),
(54, 34, 14, 16, '2019-01-28 11:08:13', '2019-01-28 11:08:13'),
(55, 34, 15, 25, '2019-01-28 14:19:12', '2019-01-28 14:19:12'),
(56, 34, 17, 27, '2019-01-28 11:08:13', '2019-01-28 11:08:13'),
(57, 34, 19, 30, '2019-01-28 11:08:13', '2019-01-28 11:08:13'),
(58, 34, 20, 40, '2019-01-28 11:08:13', '2019-01-28 11:08:13'),
(59, 34, 21, 33, '2019-01-28 11:08:13', '2019-01-28 11:08:13'),
(60, 34, 22, 45, '2019-01-28 11:08:13', '2019-01-28 11:08:13');

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
(19, 'Jumlah Tanggungan', 5, 'Benefit(+)', '2019-01-28 14:07:03', '2019-01-28 14:07:03'),
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
(1, 2, 'jack', '827ccb0eea8a706c4c34a16891f84e7b', 'Jacka Sembunk', 'jack@gmail.com', 'Palmeiras', '2019-01-09', 'Jln. Jalan jauh-jau, no.01', '2019-01-19 12:47:36', '2019-01-19 12:47:36');

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
(46, 'Azhary Arliansyah', 'Programmer', 5000000, 0, 'Papan', 'Milik sendiri', 'Milik sendiri (tanpa subsidi)', 'Panggung', '2019-01-17 12:00:19', '2019-01-17 12:00:19');

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
  MODIFY `id_calon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `data_calon`
--
ALTER TABLE `data_calon`
  MODIFY `id_data_calon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
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
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `warga`
--
ALTER TABLE `warga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
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
