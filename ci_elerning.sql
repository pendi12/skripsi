-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2018 at 08:02 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_elerning`
--

-- --------------------------------------------------------

--
-- Table structure for table `elerning`
--

CREATE TABLE `elerning` (
  `id_elerning` int(11) NOT NULL,
  `nama_mapel` varchar(10) NOT NULL,
  `kd_guru` varchar(50) NOT NULL,
  `kd_kelas` varchar(10) NOT NULL,
  `judul` text NOT NULL,
  `soal` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `elerning`
--

INSERT INTO `elerning` (`id_elerning`, `nama_mapel`, `kd_guru`, `kd_kelas`, `judul`, `soal`, `foto`) VALUES
(9, 'Matematika', '1234', '1XB', 'Pertemuan 1 Bahasa Indonesia', '1. apa yang dimaksud 2+2?', ''),
(10, 'Bahasa Ing', '1234', '1XA', 'Pert 2', 'balalalal', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

CREATE TABLE `tb_guru` (
  `kd_guru` int(11) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `alamat_guru` text NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_guru`
--

INSERT INTO `tb_guru` (`kd_guru`, `nama_guru`, `alamat_guru`, `no_hp`, `email`) VALUES
(1234, 'Nunun Sef', 'entah tah n06', '0893843434', 'mm@mm.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mapel`
--

CREATE TABLE `tb_mapel` (
  `kd_mapel` varchar(50) NOT NULL,
  `nama_mapel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mapel`
--

INSERT INTO `tb_mapel` (`kd_mapel`, `nama_mapel`) VALUES
('1pa', 'Ilmu Pengetahuan Alam'),
('Mtk1', 'Matematika'),
('pe1', 'Penjaskes');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `nis` varchar(50) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `kd_kelas` varchar(50) NOT NULL,
  `tgl_lahir` varchar(50) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`nis`, `nama_siswa`, `kd_kelas`, `tgl_lahir`, `nama_ayah`, `nama_ibu`, `alamat`) VALUES
('1060', 'Muhammad Rifai', '1XB', '28 April 2006', 'Yakun', 'Yamin', 'Cikareo'),
('1214', 'Endan Sunari', '1XA', '12-01-1999', 'Entong', 'Entin', 'eeee'),
('1234', 'Pendi Setiyog', '1XA', '12-08-2002', 'Ariel3', 'Pevita Pearce', 'jl. kasur no.7 serpongtangerang');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('admin','siswa','guru') NOT NULL,
  `nama` varchar(50) NOT NULL,
  `active` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `level`, `nama`, `active`) VALUES
('1234', '81dc9bdb52d04dc20036dbd8313ed055', 'admin', 'pepen', '1'),
('20141', '94a63c28036769847b9597e0dd7abb1c', 'admin', 'iksan', '1'),
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'Pendi Setiyo', '1'),
('guru', '77e69c137812518e359196bb2f5e9bb9', 'guru', 'Wulandari S.pd', '1'),
('siswa', 'bcd724d15cde8c47650fda962968f102', 'siswa', 'Maudi Ayunda Dina', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `elerning`
--
ALTER TABLE `elerning`
  ADD PRIMARY KEY (`id_elerning`);

--
-- Indexes for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD PRIMARY KEY (`kd_mapel`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `elerning`
--
ALTER TABLE `elerning`
  MODIFY `id_elerning` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
