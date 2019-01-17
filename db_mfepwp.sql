-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17 Jan 2019 pada 13.04
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `warga`
--
ALTER TABLE `warga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `pengguna_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
