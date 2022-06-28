-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2022 at 11:27 AM
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
(1, 'BACLARAN', 18, 45, 0, 0, 0, 0),
(2, 'EDSA', 19, 0, 0, 0, 0, 0),
(3, 'LIBERTAD', 18, 45, 0, 0, 0, 0),
(4, 'GIL PUYAT', 18, 45, 0, 0, 0, 0),
(5, 'VITO CRUZ', 18, 45, 0, 0, 0, 0),
(6, 'QUIRINO', 18, 45, 0, 0, 0, 0),
(7, 'PEDRO GIL', 18, 45, 0, 0, 0, 0),
(8, 'UNITED NATIONS', 18, 45, 0, 0, 0, 0),
(9, 'CENTRAL', 18, 45, 0, 0, 0, 0),
(10, 'CARRIEDO', 18, 45, 0, 0, 0, 0),
(11, 'DOROTEO JOSE', 18, 45, 0, 0, 0, 0),
(12, 'BAMBANG', 18, 45, 0, 0, 0, 0),
(13, 'TAYUMAN', 18, 45, 0, 0, 0, 0),
(14, 'BLUMENTRITT', 18, 45, 0, 0, 0, 0),
(15, 'ABAD SANTOS', 18, 45, 0, 0, 0, 0),
(16, 'R.PAPA', 18, 45, 0, 0, 0, 0),
(17, '5TH AVENUE', 18, 45, 0, 0, 0, 0),
(18, 'MONUMENTO', 18, 45, 0, 0, 0, 0),
(19, 'BALINTAWAK', 18, 45, 0, 0, 0, 0),
(20, 'ROOSEVELT', 0, 0, 0, 5, 0, 0);

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
