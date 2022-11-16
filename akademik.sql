-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2022 at 07:03 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_buku`
--

CREATE TABLE `daftar_buku` (
  `id_buku` int(8) NOT NULL,
  `kode_buku` char(8) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `penulis_buku` varchar(50) NOT NULL,
  `penerbit_buku` varchar(50) NOT NULL,
  `tahun_penerbit` char(4) NOT NULL,
  `stok` char(8) NOT NULL,
  `keadaan_buku` enum('baik','kurang baik') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_buku`
--

INSERT INTO `daftar_buku` (`id_buku`, `kode_buku`, `judul_buku`, `penulis_buku`, `penerbit_buku`, `tahun_penerbit`, `stok`, `keadaan_buku`) VALUES
(124, '978', 'Politik Hukum Di Indonesia', 'Moh, Mahfud MD	', 'Rajawali Pers ', '2011', '5', 'baik'),
(125, '979', 'Laut Bercerita', ' Leila Salikha Chudori', 'Gramedia', '2017', '10', 'baik'),
(128, '980', 'Laskar Pelangi', 'Andrea Hirata', ' Bentang Pustaka', '2005', '2', 'kurang baik');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_buku_perpustakaan`
--

CREATE TABLE `daftar_buku_perpustakaan` (
  `id_buku` int(5) NOT NULL,
  `kode_buku` char(8) NOT NULL,
  `judul_buku` varchar(40) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `tahun_terbit` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_buku_perpustakaan`
--

INSERT INTO `daftar_buku_perpustakaan` (`id_buku`, `kode_buku`, `judul_buku`, `pengarang`, `tahun_terbit`) VALUES
(1, '0001', 'sicantik', 'sijelek', '1200');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `mahasiswa_id` int(5) NOT NULL,
  `nim` char(8) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`mahasiswa_id`, `nim`, `nama`, `jenis_kelamin`, `alamat`) VALUES
(1, '0000001', 'Putra', 'laki-laki', 'Medan'),
(2, '0000002', 'Husna Juli', 'perempuan', 'Stabat'),
(3, '0000007', 'Delima cantik', 'perempuan', 'Pkl.Brandan'),
(5, '0000003', 'Dwi Anggita', 'perempuan', 'Tj. Pura'),
(6, '0000004', 'Putri', 'perempuan', 'Medan'),
(7, '0000005', 'Sofyan', 'laki-laki', 'Binjai'),
(8, '0000006', 'Ilham', 'laki-laki', 'Stabat'),
(9, '0000008', 'Hasan', 'laki-laki', 'Medan'),
(10, '0000009', 'Bastian', 'laki-laki', 'Medan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(35) NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', 'e00cf25ad42683b3df678c61f42c6bda', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_buku`
--
ALTER TABLE `daftar_buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD UNIQUE KEY `kode_buku` (`kode_buku`);

--
-- Indexes for table `daftar_buku_perpustakaan`
--
ALTER TABLE `daftar_buku_perpustakaan`
  ADD PRIMARY KEY (`id_buku`),
  ADD UNIQUE KEY `id_buku` (`id_buku`,`kode_buku`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`mahasiswa_id`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_buku`
--
ALTER TABLE `daftar_buku`
  MODIFY `id_buku` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `daftar_buku_perpustakaan`
--
ALTER TABLE `daftar_buku_perpustakaan`
  MODIFY `id_buku` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `mahasiswa_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
