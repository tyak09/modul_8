-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2023 at 03:55 PM
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
-- Database: `modul_8`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mhs2`
--

CREATE TABLE `tbl_mhs2` (
  `id_mahasiswa` int(11) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `nama_mhs` varchar(30) NOT NULL,
  `nama_dosen` varchar(30) NOT NULL,
  `st` varchar(20) NOT NULL,
  `ket` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_mhs2`
--

INSERT INTO `tbl_mhs2` (`id_mahasiswa`, `nim`, `nama_mhs`, `nama_dosen`, `st`, `ket`) VALUES
(1, '200441100052', 'Affan Maulana Zulkarnain', 'Sri Herawati', 'Asprak', 'Hadir'),
(2, '200441100111', 'Muhammad Irham', 'Sri Herawati', 'Asprak', 'Hadir'),
(8, '220441100138', 'samsul hadi pratama 1', 'Sri Herawati', 'Praktikan', 'Hadir'),
(9, '220441100088', 'rayhanza nadhif athala', 'Sri Herawati', 'Praktikan', 'Tidak Hadir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_mhs2`
--
ALTER TABLE `tbl_mhs2`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_mhs2`
--
ALTER TABLE `tbl_mhs2`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
