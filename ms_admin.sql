-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 23, 2022 at 04:36 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas200063`
--

-- --------------------------------------------------------

--
-- Table structure for table `ms_admin`
--

DROP TABLE IF EXISTS `ms_admin`;
CREATE TABLE `ms_admin` (
  `kode_pengguna` char(11) NOT NULL,
  `nama_pengguna` varchar(30) NOT NULL,
  `pswd_pengguna` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_admin`
--

INSERT INTO `ms_admin` (`kode_pengguna`, `nama_pengguna`, `pswd_pengguna`) VALUES
('adm001', 'mukhlis', '34cefd67a188a767177bad81e72bc2b2'),
('adm01', 'dontol', '94e59bf4bfd3a97abe5d53e46cb08737');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ms_admin`
--
ALTER TABLE `ms_admin`
  ADD PRIMARY KEY (`kode_pengguna`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
