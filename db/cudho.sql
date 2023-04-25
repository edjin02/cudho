-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2023 at 10:42 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cudho`
--

-- --------------------------------------------------------

--
-- Table structure for table `sample`
--

CREATE TABLE `sample` (
  `name` varchar(4) DEFAULT NULL,
  `samahan` varchar(3) DEFAULT NULL,
  `barangay` varchar(3) DEFAULT NULL,
  `MONTHLY` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sample`
--

INSERT INTO `sample` (`name`, `samahan`, `barangay`, `MONTHLY`) VALUES
('juan', 'kkk', 'bao', 0),
('cruz', 'bbb', 'bau', 100);

-- --------------------------------------------------------

--
-- Table structure for table `table_verification`
--

CREATE TABLE `table_verification` (
  `id` int(12) NOT NULL,
  `tag` varchar(150) NOT NULL,
  `household_head` varchar(150) NOT NULL,
  `samahan` varchar(150) NOT NULL,
  `barangay` varchar(150) NOT NULL,
  `monthly_income` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_verification`
--

INSERT INTO `table_verification` (`id`, `tag`, `household_head`, `samahan`, `barangay`, `monthly_income`) VALUES
(1, 'T1', 'Boni Rizal', 'Kalbo Kinis Kintab', 'Calamba', 0),
(2, 'K!', 'Juan Cruz', 'Kapitan ', 'Bario', 0),
(3, 'T31', 'Jonathan Casimiro', 'Kasamahang walang Katulad', 'Aplaya', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(12) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_verification`
--
ALTER TABLE `table_verification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_verification`
--
ALTER TABLE `table_verification`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
