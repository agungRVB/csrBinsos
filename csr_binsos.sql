-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2017 at 09:27 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csr_binsos`
--

-- --------------------------------------------------------

--
-- Table structure for table `bidang`
--

CREATE TABLE `bidang` (
  `kd_bidang` int(2) NOT NULL,
  `bidang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bidang`
--

INSERT INTO `bidang` (`kd_bidang`, `bidang`) VALUES
(1, 'Infrastruktur'),
(2, 'Ekonomi'),
(3, 'Lingkungan');

-- --------------------------------------------------------

--
-- Table structure for table `dinas`
--

CREATE TABLE `dinas` (
  `kd_dinas` int(11) NOT NULL,
  `nm_dinas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dinas`
--

INSERT INTO `dinas` (`kd_dinas`, `nm_dinas`) VALUES
(1, 'DINAS ESDM'),
(2, 'BAPERMADES'),
(3, 'DINAS KEHUTANAN'),
(4, 'DISNAKENTRANDUK'),
(5, 'DINAS PSDA'),
(6, 'DINAS SOSIAL'),
(7, 'BLH'),
(8, 'DINAS KESEHATAN'),
(9, 'DISPERTAN DAN TPH');

-- --------------------------------------------------------

--
-- Table structure for table `instansi`
--

CREATE TABLE `instansi` (
  `kd_dinas` int(4) NOT NULL,
  `kota` int(2) NOT NULL,
  `nm_dinas` int(2) NOT NULL,
  `stts` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instansi`
--

INSERT INTO `instansi` (`kd_dinas`, `kota`, `nm_dinas`, `stts`) VALUES
(1, 26, 1, 0),
(2, 27, 1, 0),
(3, 26, 4, 1),
(4, 26, 6, 1),
(5, 26, 3, 1),
(6, 21, 9, 1),
(7, 2, 2, 1),
(8, 5, 2, 1),
(9, 28, 1, 1),
(10, 4, 3, 1),
(11, 28, 3, 1),
(12, 26, 1, 1),
(13, 9, 6, 1),
(14, 7, 7, 1),
(15, 28, 2, 1),
(16, 9, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `kd_kegiatan` int(5) NOT NULL,
  `dinas` int(2) NOT NULL,
  `bidang` int(2) NOT NULL,
  `kota` int(2) NOT NULL,
  `nm_kegiatan` varchar(50) NOT NULL,
  `volume` varchar(50) NOT NULL,
  `jumlah` int(15) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`kd_kegiatan`, `dinas`, `bidang`, `kota`, `nm_kegiatan`, `volume`, `jumlah`, `keterangan`) VALUES
(3, 1, 3, 14, 'xxx', 'sas', 200, 'lancar bae\r\n'),
(4, 1, 2, 26, 'pembangunan kilang minyak purwodadi', '10 ha', 100000000, '<p>okokok</p>'),
(5, 1, 3, 27, 'perminyakan', '30 hektar', 10000000, '<p>komenku</p>'),
(6, 1, 2, 27, 'asldasld', 'sadas', 9898989, '<p>jhj</p>'),
(7, 1, 1, 28, 'pelatihan budidaya jamur', '3 ha', 100000, ''),
(8, 7, 1, 7, 'bangun pagi', '12.00', 1000, '<p>adkadkakdkfld</p>'),
(9, 1, 1, 28, 'gawe masjid', '2', 1000, ''),
(10, 1, 2, 26, 'okoko', '8', 3000000, '<p>asdkasjdlaskâ€ƒ</p>');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `kd_kota` int(2) NOT NULL,
  `nm_kota` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`kd_kota`, `nm_kota`) VALUES
(1, 'Kab Blora'),
(2, 'Kab Rembang'),
(3, 'Kab Pati'),
(4, 'Kab Jepara'),
(5, 'Kab Kudus'),
(6, 'Kab Demak'),
(7, 'Kab Grobogan'),
(8, 'Kab Semarang'),
(9, 'Kab Batang'),
(10, 'Kab Pemalang'),
(11, 'Kab Pekalongan'),
(12, 'Kab Brebes'),
(13, 'Kab Tegal'),
(14, 'Kab Banyumas'),
(15, 'Kab Purbalingga'),
(16, 'Kab Banjarnegara'),
(17, 'Kab Cilacap'),
(18, 'Kab Wonosobo'),
(19, 'Kab Temanggung'),
(20, 'Kab Purworejo'),
(21, 'Kab Kebumen'),
(22, 'Kab Magelang'),
(23, 'Kab '),
(24, 'Kab Boyolali'),
(25, 'Kab Wonogiri'),
(26, 'Kab Karanganyar'),
(27, 'Kab Sragen'),
(28, 'Kota Semarang'),
(29, 'Kota Tegal'),
(30, 'Kota Magelang'),
(31, 'Kota Pekalongan'),
(32, 'Kota Surakarta');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `namauser` varchar(30) NOT NULL,
  `passwd` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `namauser`, `passwd`) VALUES
(3, 'wisnu', 'a'),
(9, 'a', 'a'),
(10, 'agung', 'agung'),
(11, 'iki', 'iki');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bidang`
--
ALTER TABLE `bidang`
  ADD PRIMARY KEY (`kd_bidang`);

--
-- Indexes for table `dinas`
--
ALTER TABLE `dinas`
  ADD PRIMARY KEY (`kd_dinas`);

--
-- Indexes for table `instansi`
--
ALTER TABLE `instansi`
  ADD PRIMARY KEY (`kd_dinas`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`kd_kegiatan`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`kd_kota`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bidang`
--
ALTER TABLE `bidang`
  MODIFY `kd_bidang` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `dinas`
--
ALTER TABLE `dinas`
  MODIFY `kd_dinas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `instansi`
--
ALTER TABLE `instansi`
  MODIFY `kd_dinas` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `kd_kegiatan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `kd_kota` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
