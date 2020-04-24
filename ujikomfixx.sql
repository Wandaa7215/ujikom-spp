-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2020 at 12:43 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ujikomfixx`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL,
  `kompetensi_keahlian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `kompetensi_keahlian`) VALUES
(1, 'X', 'Rekayasa Perangkat Lunak '),
(2, 'XI', 'Rekayasa Perangkat Lunak '),
(3, 'XII', 'Rekayasa Perangkat Lunak '),
(4, 'X', 'Teknik Komputer dan Jaringan'),
(5, 'XI', 'Teknik Komputer dan Jaringan'),
(6, 'XII', 'Teknik Komputer dan Jaringan'),
(7, 'X', 'Akuntansi dan Keuangan Lembaga'),
(8, 'XI', 'Akuntansi dan Keuangan Lembaga'),
(9, 'XII', 'Akuntansi dan Keuangan Lembaga'),
(10, 'X', 'Bisnis Daring dan Pemasaran'),
(11, 'XI', 'Bisnis Daring dan Pemasaran'),
(12, 'XII', 'Bisnis Daring dan Pemasaran'),
(13, 'X', 'Otomatisasi dan Tata Kelola Perkantoran'),
(14, 'XI', 'Otomatisasi dan Tata Kelola Perkantoran'),
(15, 'XII', 'Otomatisasi dan Tata Kelola Perkantoran');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `bulan_bayar` varchar(8) NOT NULL,
  `tahun_bayar` varchar(4) NOT NULL,
  `id_spp` int(11) NOT NULL,
  `jumlah_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_petugas`, `nisn`, `tgl_bayar`, `bulan_bayar`, `tahun_bayar`, `id_spp`, `jumlah_bayar`) VALUES
(1, 7, '0017902905', '2020-04-13', '1', '1', 3, 300000),
(2, 7, '0017902905', '2020-04-13', '2', '1', 3, 300000),
(3, 7, '0017902905', '2020-04-13', '3', '1', 3, 300000),
(4, 7, '0017902905', '2020-04-13', '4', '1', 3, 300000),
(5, 7, '0017902905', '2020-04-13', '5', '1', 3, 300000),
(6, 7, '0017902905', '2020-04-13', '6', '1', 3, 300000),
(7, 7, '0017902905', '2020-04-13', '7', '1', 3, 300000),
(8, 7, '0017902905', '2020-04-13', '8', '1', 3, 300000),
(9, 7, '0017902905', '2020-04-13', '9', '1', 3, 300000),
(10, 7, '0017902905', '2020-04-13', '10', '1', 3, 300000),
(11, 7, '0017902905', '2020-04-13', '11', '1', 3, 300000),
(12, 7, '0017902905', '2020-04-13', '12', '1', 3, 300000),
(13, 7, '0017902905', '2020-04-13', '1', '2', 3, 300000),
(14, 7, '0017902905', '2020-04-13', '2', '2', 3, 300000),
(15, 7, '0017902905', '2020-04-13', '3', '2', 3, 300000),
(16, 7, '0017902905', '2020-04-13', '4', '2', 3, 300000),
(17, 7, '0017902905', '2020-04-13', '5', '2', 3, 300000),
(18, 7, '0017902905', '2020-04-13', '6', '2', 3, 300000),
(19, 7, '0017902905', '2020-04-13', '7', '2', 3, 300000),
(20, 7, '0017902905', '2020-04-13', '8', '2', 3, 300000),
(21, 7, '0017902905', '2020-04-13', '9', '2', 3, 300000),
(22, 7, '0017902905', '2020-04-13', '10', '2', 3, 300000),
(23, 7, '0017902905', '2020-04-13', '11', '2', 3, 300000),
(24, 7, '0017902905', '2020-04-13', '12', '2', 3, 300000),
(25, 7, '0017902905', '2020-04-13', '1', '3', 3, 300000),
(26, 7, '0017902905', '2020-04-13', '2', '3', 3, 300000),
(27, 7, '0017902905', '2020-04-13', '3', '3', 3, 300000),
(28, 7, '0017902905', '2020-04-13', '4', '3', 3, 300000),
(29, 7, '0017902905', '2020-04-13', '5', '3', 3, 300000),
(30, 7, '0017902905', '2020-04-13', '6', '3', 3, 300000),
(31, 7, '0017902905', '2020-04-13', '7', '3', 3, 300000),
(32, 7, '0017902905', '2020-04-13', '8', '3', 3, 300000),
(33, 7, '0017902905', '2020-04-13', '9', '3', 3, 300000),
(34, 7, '0017902905', '2020-04-13', '10', '3', 3, 300000),
(35, 7, '0017902905', '2020-04-13', '11', '3', 3, 300000),
(36, 7, '0017902905', '2020-04-13', '12', '3', 3, 300000),
(37, 7, '8u8488288', '2020-04-24', '1', '1', 1, 300000),
(38, 7, '8u8488288', '2020-04-24', '2', '1', 1, 300000),
(39, 7, '8u8488288', '2020-04-24', '3', '1', 1, 300000),
(40, 7, '8u8488288', '2020-04-24', '4', '1', 1, 300000),
(41, 7, '8u8488288', '2020-04-24', '5', '1', 1, 300000),
(42, 8, '8u8488288', '2020-04-24', '6', '1', 1, 300000);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama_petugas` varchar(35) NOT NULL,
  `level` enum('admin','petugas','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `username`, `password`, `nama_petugas`, `level`) VALUES
(7, 'admin', 'admin', 'Udin', 'admin'),
(8, 'petugas', 'petugas', 'Jajang', 'petugas');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nisn` char(10) NOT NULL,
  `nis` char(8) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `id_spp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nisn`, `nis`, `nama`, `password`, `id_kelas`, `alamat`, `no_telp`, `id_spp`) VALUES
('0017902905', '11707140', 'Wanda Selamet Merdeka Putri', 'wey', 1, 'Hamburg', '085723982209', 3),
('8u8488288', '888', 'Udin', '8', 3, 'jalan mawar', '09875432', 1);

-- --------------------------------------------------------

--
-- Table structure for table `spp`
--

CREATE TABLE `spp` (
  `id_spp` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `nominal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spp`
--

INSERT INTO `spp` (`id_spp`, `tahun`, `nominal`) VALUES
(1, 1, 3600000),
(2, 2, 3600000),
(3, 3, 3600000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_petugas` (`id_petugas`),
  ADD KEY `id_spp` (`id_spp`),
  ADD KEY `jumlah_bayar` (`jumlah_bayar`),
  ADD KEY `nisn` (`nisn`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_spp` (`id_spp`);

--
-- Indexes for table `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`id_spp`),
  ADD KEY `tahun` (`tahun`),
  ADD KEY `nominal` (`nominal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `spp`
--
ALTER TABLE `spp`
  MODIFY `id_spp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_2` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`),
  ADD CONSTRAINT `pembayaran_ibfk_4` FOREIGN KEY (`id_spp`) REFERENCES `siswa` (`id_spp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembayaran_ibfk_5` FOREIGN KEY (`nisn`) REFERENCES `siswa` (`nisn`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_2` FOREIGN KEY (`id_spp`) REFERENCES `spp` (`id_spp`),
  ADD CONSTRAINT `siswa_ibfk_3` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
