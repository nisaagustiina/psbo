-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2021 at 10:33 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psbo`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE `daftar` (
  `idDaftar` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempatLahir` varchar(20) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `namaIbu` varchar(50) NOT NULL,
  `namaAyah` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `asalSekolah` varchar(50) NOT NULL,
  `nilaiIjazah` varchar(30) NOT NULL,
  `file` mediumtext NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`idDaftar`, `id`, `nama`, `tempatLahir`, `tanggalLahir`, `namaIbu`, `namaAyah`, `alamat`, `asalSekolah`, `nilaiIjazah`, `file`, `status`) VALUES
(1, 11, 'Cita Lestrari', 'Bandung', '2010-05-04', 'Sintia', 'Raka', 'Pasirjambu', 'SDN Cukanggenteng 1', '80', '1610113053100.jpg', 'diterima'),
(2, 13, 'Doni K', 'Bandung', '2009-08-01', 'Desi', 'Kurnia', 'Pasirjambu', 'SDN Cisondari 1', '90', '1610113053136.jpg', 'diterima'),
(3, 14, 'Zenal Rian', 'Bandung', '2009-02-02', 'Riri', 'Riansyah', 'Pasirjambu', 'SDN Cukanggenteng 2', '68', '1610113053148.jpg', 'ditolak'),
(4, 15, 'Risky ', 'Bandung', '2009-11-07', 'Fatma', 'Nurdin', 'Pasirjambu', 'SDN Pasirjambu 3', '75', '1610113053160.jpg', 'ditolak'),
(9, 12, 'Reffan R', 'Bandung', '2009-04-23', 'Yanti', 'Riski', 'Ciwidey', 'SD Ciwidey', '90', '1610113615393.jpg', 'diterima'),
(11, 17, 'Sintiani', 'Katapang', '2009-03-03', 'rena', 'agus', 'Ciwidey', 'sd katapang', '65', '1610113615402.jpg', 'ditolak'),
(12, 16, 'Rino', 'Cilegon', '2009-02-02', 'Ca', 'Dani', 'Pasirjambu', 'SD Cilegon', '87', '1610113615410.jpg', 'diterima'),
(13, 21, 'Lela', 'pasirjambu', '2009-05-06', 'Jeha', 'Lintang', 'pasirjambu', 'sd pasirjambu', '78', '1610113615417.jpg', 'ditolak'),
(14, 22, 'Siti Nur', 'Bandung', '2010-05-24', 'Nyi', 'Akang', 'Pasirjambu', 'SDN Pasirjambu', '78', 'Screenshot (1160).png', 'cadangan'),
(15, 23, 'Dani', 'Bandung', '2009-02-03', 'Neng', 'Ade', 'Pasirjambu', 'SDN Cukanggenteng 1', '98', 'Screenshot (1299).png', 'diterima');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', '123', 1),
(11, 'citra', 'citra', 2),
(12, 'reffan', 'reffan', 2),
(13, 'doni', 'doni', 2),
(14, 'zenal', 'zenal', 2),
(15, 'risky', 'risky', 2),
(16, 'rino', 'rino', 2),
(17, 'sintia', 'sintia', 2),
(18, 'cucu', 'cucu', 2),
(19, 'yadi', 'yadi', 2),
(20, 'andi', 'andi', 2),
(21, 'laela', 'laela', 2),
(22, 'siti', 'siti', 2),
(23, 'dani', 'dani', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`idDaftar`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
  MODIFY `idDaftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
