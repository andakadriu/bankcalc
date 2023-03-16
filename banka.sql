-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 15, 2023 at 09:08 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bankcalc`
--

-- --------------------------------------------------------

--
-- Table structure for table `banka`
--

CREATE TABLE `banka` (
  `id` int(11) NOT NULL,
  `dataB` date NOT NULL,
  `emriBankes` varchar(10) NOT NULL,
  `vlera` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banka`
--

INSERT INTO `banka` (`id`, `dataB`, `emriBankes`, `vlera`) VALUES
(28, '2022-12-19', 'PRO', '989'),
(29, '2022-12-19', 'NLB', '3333'),
(30, '2022-12-19', 'TEB', '9986'),
(31, '2022-12-19', 'RAI', '324'),
(32, '2022-12-19', 'DE', '998'),
(33, '2023-03-24', 'NLB', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banka`
--
ALTER TABLE `banka`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banka`
--
ALTER TABLE `banka`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
