-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2023 at 06:16 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasisampel1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabelbuku`
--

CREATE TABLE `tabelbuku` (
  `kodebuku` char(10) NOT NULL,
  `judulbuku` char(50) NOT NULL,
  `pengarang` varchar(30) NOT NULL,
  `tahunterbit` date NOT NULL,
  `penerbit` varchar(30) NOT NULL,
  `kodekategoribuku` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kodekategori`
--

CREATE TABLE `kodekategori` (
  `kodekategoribuku` char(5) NOT NULL,
  `jenisbuku` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kodekategori`
--

INSERT INTO `kodekategori` (`kodekategoribuku`,`jenisbuku`) VALUES

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabelbuku`
--
ALTER TABLE `tabelbuku`
  ADD PRIMARY KEY (`kodebuku`),
  ADD KEY `kodekategoribuku` (`kodekategoribuku`);

--
-- Indexes for table `kodekategori`
--
ALTER TABLE `kodekategori`
  ADD PRIMARY KEY (`kodekategoribuku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
