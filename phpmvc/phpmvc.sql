-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2023 at 09:20 AM
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
-- Database: `phpmvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `pelajaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nama`, `jenis_kelamin`, `pelajaran`) VALUES
(11, 'ERVI RAHMAWATI, S.T', 'perempuan', 'Desain Gafis'),
(12, 'IVAN ZUWANTA, S.Kom', 'perempuan', 'DATABASE'),
(13, 'ESTRI HANDAYANI, S.Pd', 'perempuan', 'PBO'),
(14, 'WAHYU TRI WULANDARI, S,Pd', 'perempuan', 'PKWU'),
(15, 'NOVI DYAH PUSPITASARI, S.pd', 'perempuan', 'PPL'),
(16, 'FIKROTU DWI F., S.Pd', 'perempuan', 'Pemograman web '),
(17, 'LABIB FAYUMI, S.Kom', 'laki-laki', 'PKWU'),
(18, 'SAFIRA MAYA SHOVIE, S.Pd', 'perempuan', 'PBO'),
(19, 'Puad Nue Iskandar', 'laki-laki', 'Toolman');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(15) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `nama`) VALUES
(10, 'Rekayasa perangkat Lunak (RPL)'),
(11, 'Akutansi'),
(13, 'Tehnik Pengelasan (TP)'),
(14, 'Tehnik Konstruksi Dan Perumahan (TKP)'),
(15, 'Kuliner'),
(17, 'Tehnik Pemanasan Tata Udara dan Pendingin (TPTUP)'),
(18, 'Desain Permodelan Dan Informasi Bangunan (DPIB)');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `jenis_kelamin`, `alamat`) VALUES
(23, 'Aan Fathurrohman', 'laki-laki', 'Pule, Trenggalek'),
(24, 'Abella Nindia Eka Pradana', 'perempuan', 'Pule, Trenggalke'),
(25, 'Ahcmad  Rozaki', 'laki-laki', 'pogalan, Trenggalek'),
(26, 'Adek Tata Subekti', 'laki-laki', 'Ngantru,Trenggalek'),
(27, 'Aditiya Fajar Nur Arifin', 'laki-laki', 'Mlinjon,Trenggalek'),
(28, 'Aditiya Dwi Purnomo', 'laki-laki', 'pule, Trenggalek');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
