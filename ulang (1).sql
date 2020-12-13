-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2020 at 03:56 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ulang`
--

-- --------------------------------------------------------

--
-- Table structure for table `c_tabel`
--

CREATE TABLE `c_tabel` (
  `id_61` int(11) NOT NULL,
  `kolom_jurusan` varchar(50) NOT NULL,
  `kolom_kelas` varchar(10) NOT NULL,
  `kolom_isi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `c_tabel`
--

INSERT INTO `c_tabel` (`id_61`, `kolom_jurusan`, `kolom_kelas`, `kolom_isi`) VALUES
(1, 'Rpl Aplikasi', 'B', '312'),
(8, 'Sistem Informasi', 'D3 V', 'Rangkaian Kabel LAN'),
(9, 'Kewirausahaan', 'D3 VI', 'Dagang'),
(10, 'Bahasa', 'XII', 'Sastra');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `c_tabel`
--
ALTER TABLE `c_tabel`
  ADD PRIMARY KEY (`id_61`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `c_tabel`
--
ALTER TABLE `c_tabel`
  MODIFY `id_61` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
