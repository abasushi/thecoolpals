-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2022 at 11:35 AM
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
-- Database: `softeng`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminId` int(11) NOT NULL,
  `adminusername` varchar(20) NOT NULL,
  `adminpassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `adminusername`, `adminpassword`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE `station` (
  `stationId` int(12) NOT NULL,
  `stationName` text NOT NULL,
  `stationHours` int(23) NOT NULL,
  `stationMinutes` int(59) NOT NULL,
  `stationSeconds` int(59) NOT NULL,
  `stationHours2` int(23) NOT NULL,
  `stationMinutes2` int(59) NOT NULL,
  `stationSeconds2` int(59) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`stationId`, `stationName`, `stationHours`, `stationMinutes`, `stationSeconds`, `stationHours2`, `stationMinutes2`, `stationSeconds2`) VALUES
(1, 'BACLARAN', 5, 1, 0, 5, 52, 0),
(2, 'EDSA', 5, 3, 0, 5, 50, 0),
(3, 'LIBERTAD', 5, 7, 0, 5, 46, 0),
(4, 'GIL PUYAT', 5, 9, 0, 5, 44, 0),
(5, 'VITO CRUZ', 5, 11, 0, 5, 42, 0),
(6, 'QUIRINO', 5, 13, 0, 5, 40, 0),
(7, 'PEDRO GIL', 5, 15, 0, 5, 38, 0),
(8, 'UNITED NATIONS', 5, 17, 0, 5, 36, 0),
(9, 'CENTRAL', 5, 20, 0, 5, 33, 0),
(10, 'CARRIEDO', 5, 23, 0, 5, 30, 0),
(11, 'DOROTEO JOSE', 5, 25, 0, 5, 28, 0),
(12, 'BAMBANG', 5, 27, 0, 5, 26, 0),
(13, 'TAYUMAN', 5, 29, 0, 5, 24, 0),
(14, 'BLUMENTRITT', 5, 32, 0, 5, 21, 0),
(15, 'ABAD SANTOS', 5, 35, 0, 5, 18, 0),
(16, 'R.PAPA', 5, 37, 0, 5, 16, 0),
(17, '5TH AVENUE', 5, 39, 0, 5, 14, 0),
(18, 'MONUMENTO', 5, 42, 0, 5, 11, 0),
(19, 'BALINTAWAK', 5, 46, 0, 5, 7, 0),
(20, 'ROOSEVELT', 5, 52, 0, 5, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `station`
--
ALTER TABLE `station`
  ADD PRIMARY KEY (`stationId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `station`
--
ALTER TABLE `station`
  MODIFY `stationId` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
