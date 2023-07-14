-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2023 at 11:15 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_inferensi`
--

CREATE TABLE `tabel_inferensi` (
  `id` int(6) NOT NULL,
  `game` varchar(9) DEFAULT NULL,
  `edit` varchar(9) DEFAULT NULL,
  `office` varchar(9) DEFAULT NULL,
  `programming` varchar(9) DEFAULT NULL,
  `then` varchar(8) DEFAULT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tabel_inferensi`
--

INSERT INTO `tabel_inferensi` (`id`, `game`, `edit`, `office`, `programming`, `then`, `nilai`) VALUES
(1, 'xsebentar', 'xsebentar', 'xsebentar', 'xsebentar', 'low', 0),
(2, 'xsebentar', 'xsebentar', 'xsebentar', 'xsedang', 'low_mid', 0),
(3, 'xsebentar', 'xsebentar', 'xsebentar', 'xlama', 'low_mid', 0),
(4, 'xsebentar', 'xsebentar', 'xsedang', 'xsebentar', 'low', 0),
(5, 'xsebentar', 'xsebentar', 'xsedang', 'xsedang', 'low_mid', 0.25),
(6, 'xsebentar', 'xsebentar', 'xsedang', 'xlama', 'low_mid', 0.25),
(7, 'xsebentar', 'xsebentar', 'xlama', 'xsebentar', 'low', 0),
(8, 'xsebentar', 'xsebentar', 'xlama', 'xsedang', 'low_mid', 0.25),
(9, 'xsebentar', 'xsebentar', 'xlama', 'xlama', 'low_mid', 0.25),
(10, 'xsebentar', 'xsedang', 'xsebentar', 'xsebentar', 'mid', 0),
(11, 'xsebentar', 'xsedang', 'xsebentar', 'xsedang', 'mid', 0),
(12, 'xsebentar', 'xsedang', 'xsebentar', 'xlama', 'low_mid', 0),
(13, 'xsebentar', 'xsedang', 'xsedang', 'xsebentar', 'low_mid', 0),
(14, 'xsebentar', 'xsedang', 'xsedang', 'xsedang', 'mid', 0.2),
(15, 'xsebentar', 'xsedang', 'xsedang', 'xlama', 'mid', 0.2),
(16, 'xsebentar', 'xsedang', 'xlama', 'xsebentar', 'mid', 0),
(17, 'xsebentar', 'xsedang', 'xlama', 'xsedang', 'mid', 0.2),
(18, 'xsebentar', 'xsedang', 'xlama', 'xlama', 'mid', 0.2),
(19, 'xsebentar', 'xlama', 'xsebentar', 'xsebentar', 'high', 0),
(20, 'xsebentar', 'xlama', 'xsebentar', 'xsedang', 'high', 0),
(21, 'xsebentar', 'xlama', 'xsebentar', 'xlama', 'high', 0),
(22, 'xsebentar', 'xlama', 'xsedang', 'xsebentar', 'high', 0),
(23, 'xsebentar', 'xlama', 'xsedang', 'xsedang', 'high', 0),
(24, 'xsebentar', 'xlama', 'xsedang', 'xlama', 'high', 0),
(25, 'xsebentar', 'xlama', 'xlama', 'xsebentar', 'high', 0),
(26, 'xsebentar', 'xlama', 'xlama', 'xsedang', 'high', 0),
(27, 'xsebentar', 'xlama', 'xlama', 'xlama', 'high', 0),
(28, 'xsedang', 'xsebentar', 'xsebentar', 'xsebentar', 'mid', 0),
(29, 'xsedang', 'xsebentar', 'xsebentar', 'xsedang', 'mid', 0),
(30, 'xsedang', 'xsebentar', 'xsebentar', 'xlama', 'mid', 0),
(31, 'xsedang', 'xsebentar', 'xsedang', 'xsebentar', 'mid', 0),
(32, 'xsedang', 'xsebentar', 'xsedang', 'xsedang', 'mid', 0.44),
(33, 'xsedang', 'xsebentar', 'xsedang', 'xlama', 'mid', 0.33),
(34, 'xsedang', 'xsebentar', 'xlama', 'xsebentar', 'mid', 0),
(35, 'xsedang', 'xsebentar', 'xlama', 'xsedang', 'mid', 0.56),
(36, 'xsedang', 'xsebentar', 'xlama', 'xlama', 'mid', 0.33),
(37, 'xsedang', 'xsedang', 'xsebentar', 'xsebentar', 'mid_high', 0),
(38, 'xsedang', 'xsedang', 'xsebentar', 'xsedang', 'mid_high', 0),
(39, 'xsedang', 'xsedang', 'xsebentar', 'xlama', 'mid_high', 0),
(40, 'xsedang', 'xsedang', 'xsedang', 'xsebentar', 'mid_high', 0),
(41, 'xsedang', 'xsedang', 'xsedang', 'xsedang', 'mid_high', 0.2),
(42, 'xsedang', 'xsedang', 'xsedang', 'xlama', 'mid_high', 0.2),
(43, 'xsedang', 'xsedang', 'xlama', 'xsebentar', 'mid_high', 0),
(44, 'xsedang', 'xsedang', 'xlama', 'xsedang', 'mid_high', 0.2),
(45, 'xsedang', 'xsedang', 'xlama', 'xlama', 'mid_high', 0.2),
(46, 'xsedang', 'xlama', 'xsebentar', 'xsebentar', 'high', 0),
(47, 'xsedang', 'xlama', 'xsebentar', 'xsedang', 'high', 0),
(48, 'xsedang', 'xlama', 'xsebentar', 'xlama', 'high', 0),
(49, 'xsedang', 'xlama', 'xsedang', 'xsebentar', 'high', 0),
(50, 'xsedang', 'xlama', 'xsedang', 'xsedang', 'high', 0),
(51, 'xsedang', 'xlama', 'xsedang', 'xlama', 'high', 0),
(52, 'xsedang', 'xlama', 'xlama', 'xsebentar', 'high', 0),
(53, 'xsedang', 'xlama', 'xlama', 'xsedang', 'high', 0),
(54, 'xsedang', 'xlama', 'xlama', 'xlama', 'high', 0),
(55, 'xlama', 'xsebentar', 'xsebentar', 'xsebentar', 'high', 0),
(56, 'xlama', 'xsebentar', 'xsebentar', 'xsedang', 'high', 0),
(57, 'xlama', 'xsebentar', 'xsebentar', 'xlama', 'high', 0),
(58, 'xlama', 'xsebentar', 'xsedang', 'xsebentar', 'high', 0),
(59, 'xlama', 'xsebentar', 'xsedang', 'xsedang', 'high', 0),
(60, 'xlama', 'xsebentar', 'xsedang', 'xlama', 'high', 0),
(61, 'xlama', 'xsebentar', 'xlama', 'xsebentar', 'high', 0),
(62, 'xlama', 'xsebentar', 'xlama', 'xsedang', 'high', 0),
(63, 'xlama', 'xsebentar', 'xlama', 'xlama', 'high', 0),
(64, 'xlama', 'xsedang', 'xsebentar', 'xsebentar', 'high', 0),
(65, 'xlama', 'xsedang', 'xsebentar', 'xsedang', 'high', 0),
(66, 'xlama', 'xsedang', 'xsebentar', 'xlama', 'high', 0),
(67, 'xlama', 'xsedang', 'xsedang', 'xsebentar', 'high', 0),
(68, 'xlama', 'xsedang', 'xsedang', 'xsedang', 'high', 0),
(69, 'xlama', 'xsedang', 'xsedang', 'xlama', 'high', 0),
(70, 'xlama', 'xsedang', 'xlama', 'xsebentar', 'high', 0),
(71, 'xlama', 'xsedang', 'xlama', 'xsedang', 'high', 0),
(72, 'xlama', 'xsedang', 'xlama', 'xlama', 'high', 0),
(73, 'xlama', 'xlama', 'xsebentar', 'xsebentar', 'high', 0),
(74, 'xlama', 'xlama', 'xsebentar', 'xsedang', 'high', 0),
(75, 'xlama', 'xlama', 'xsebentar', 'xlama', 'high', 0),
(76, 'xlama', 'xlama', 'xsedang', 'xsebentar', 'high', 0),
(77, 'xlama', 'xlama', 'xsedang', 'xsedang', 'high', 0),
(78, 'xlama', 'xlama', 'xsedang', 'xlama', 'high', 0),
(79, 'xlama', 'xlama', 'xlama', 'xsebentar', 'high', 0),
(80, 'xlama', 'xlama', 'xlama', 'xsedang', 'high', 0),
(81, 'xlama', 'xlama', 'xlama', 'xlama', 'high', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_inferensi`
--
ALTER TABLE `tabel_inferensi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_inferensi`
--
ALTER TABLE `tabel_inferensi`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
