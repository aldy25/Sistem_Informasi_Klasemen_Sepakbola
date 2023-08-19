-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2023 at 01:53 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sepakbola`
--

-- --------------------------------------------------------

--
-- Table structure for table `klasemen`
--

CREATE TABLE `klasemen` (
  `id_klasemen` int(10) NOT NULL,
  `klub` int(10) NOT NULL,
  `ma` int(10) NOT NULL,
  `me` int(10) NOT NULL,
  `s` int(10) NOT NULL,
  `k` int(10) NOT NULL,
  `gm` int(10) NOT NULL,
  `gk` int(10) NOT NULL,
  `point` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `klasemen`
--

INSERT INTO `klasemen` (`id_klasemen`, `klub`, `ma`, `me`, `s`, `k`, `gm`, `gk`, `point`) VALUES
(9, 16, 0, 0, 0, 0, 0, 0, 0),
(10, 17, 1, 0, 0, 1, 0, 3, 0),
(11, 18, 1, 1, 0, 0, 3, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `klub`
--

CREATE TABLE `klub` (
  `id_klub` int(10) NOT NULL,
  `nama_klub` varchar(70) NOT NULL,
  `kota_klub` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `klub`
--

INSERT INTO `klub` (`id_klub`, `nama_klub`, `kota_klub`) VALUES
(16, 'arema', 'bandung'),
(17, 'sriwijaya fc', 'palembang'),
(18, 'persita', 'tanggerang');

-- --------------------------------------------------------

--
-- Table structure for table `pertandingan`
--

CREATE TABLE `pertandingan` (
  `id_pertandingan` int(10) NOT NULL,
  `klub1` int(10) NOT NULL,
  `klub2` int(10) NOT NULL,
  `score1` int(10) NOT NULL,
  `score2` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pertandingan`
--

INSERT INTO `pertandingan` (`id_pertandingan`, `klub1`, `klub2`, `score1`, `score2`) VALUES
(9, 18, 17, 3, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `klasemen`
--
ALTER TABLE `klasemen`
  ADD PRIMARY KEY (`id_klasemen`),
  ADD KEY `klub` (`klub`);

--
-- Indexes for table `klub`
--
ALTER TABLE `klub`
  ADD PRIMARY KEY (`id_klub`);

--
-- Indexes for table `pertandingan`
--
ALTER TABLE `pertandingan`
  ADD PRIMARY KEY (`id_pertandingan`),
  ADD KEY `klub1` (`klub1`),
  ADD KEY `klub2` (`klub2`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `klasemen`
--
ALTER TABLE `klasemen`
  MODIFY `id_klasemen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `klub`
--
ALTER TABLE `klub`
  MODIFY `id_klub` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pertandingan`
--
ALTER TABLE `pertandingan`
  MODIFY `id_pertandingan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `klasemen`
--
ALTER TABLE `klasemen`
  ADD CONSTRAINT `klasemen_ibfk_1` FOREIGN KEY (`klub`) REFERENCES `klub` (`id_klub`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pertandingan`
--
ALTER TABLE `pertandingan`
  ADD CONSTRAINT `pertandingan_ibfk_1` FOREIGN KEY (`klub1`) REFERENCES `klub` (`id_klub`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pertandingan_ibfk_2` FOREIGN KEY (`klub2`) REFERENCES `klub` (`id_klub`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
