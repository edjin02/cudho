-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2023 at 01:03 PM
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
-- Table structure for table `family_info`
--

CREATE TABLE `family_info` (
  `id` int(12) NOT NULL,
  `for_id` int(12) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `extension` varchar(20) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `birthday` date NOT NULL,
  `civil_status` varchar(50) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `relationship` varchar(50) NOT NULL,
  `monthly_income` float NOT NULL,
  `membership` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `family_info`
--

INSERT INTO `family_info` (`id`, `for_id`, `firstname`, `lastname`, `extension`, `middlename`, `gender`, `birthday`, `civil_status`, `occupation`, `relationship`, `monthly_income`, `membership`) VALUES
(1, 1, 'Maria', 'Rizal', '', 'Clara', '', '0000-00-00', '', '', 'spouse', 1000, 'PAG-ASA'),
(2, 1, 'Junior', 'Rizal', '', 'Clara', '', '0000-00-00', '', '', 'child', 15000, 'PAG-TALON'),
(3, 2, 'July', 'Cruz', '', 'Mamaia', '', '0000-00-00', '', '', 'spouse', 500, 'PAG-IBIG');

-- --------------------------------------------------------

--
-- Table structure for table `response_info`
--

CREATE TABLE `response_info` (
  `id` int(12) NOT NULL,
  `for_id` int(11) NOT NULL,
  `year_stay` int(11) NOT NULL,
  `length_stay` int(11) NOT NULL,
  `electricity` int(11) NOT NULL,
  `waterservices` int(11) NOT NULL,
  `toilet` int(11) NOT NULL,
  `kitchen` int(11) NOT NULL,
  `incase_relocation` varchar(100) NOT NULL,
  `respondent` varchar(50) NOT NULL,
  `relationship_head` varchar(50) NOT NULL,
  `total_mon_inc` float NOT NULL,
  `interviewer` varchar(50) NOT NULL,
  `remarks` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `response_info`
--

INSERT INTO `response_info` (`id`, `for_id`, `year_stay`, `length_stay`, `electricity`, `waterservices`, `toilet`, `kitchen`, `incase_relocation`, `respondent`, `relationship_head`, `total_mon_inc`, `interviewer`, `remarks`) VALUES
(1, 1, 0, 0, 0, 0, 0, 0, '0', 'Boni Rizal', 'Mismo', 0, 'Mike Enrile', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.');

-- --------------------------------------------------------

--
-- Table structure for table `table_verification`
--

CREATE TABLE `table_verification` (
  `id` int(12) NOT NULL,
  `tag` varchar(150) NOT NULL,
  `firstname` varchar(150) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `extension` varchar(20) NOT NULL,
  `samahan` varchar(150) NOT NULL,
  `barangay` varchar(150) NOT NULL,
  `monthly_income` float NOT NULL,
  `gender` varchar(20) NOT NULL,
  `birthday` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `civil_status` varchar(20) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `marketlist` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_verification`
--

INSERT INTO `table_verification` (`id`, `tag`, `firstname`, `middlename`, `lastname`, `extension`, `samahan`, `barangay`, `monthly_income`, `gender`, `birthday`, `age`, `civil_status`, `occupation`, `marketlist`) VALUES
(1, 'T11', 'Boni Onib', 'Andres', 'Rizal', 'III', 'Kalbo Kinis Kintabs', 'Sinalhan', 0, 'Male', '2023-04-05', 50, 'MARRIED', 'KATIPUNAN', 'Listed'),
(2, 'K!', 'Juan ', 'Dela', 'Cruz', '', 'Kapitan ', 'Caingin', 0, 'Male', '2023-04-05', 70, 'MARRIED', 'ALBULARYO', 'Listed'),
(3, 'T31', 'Jonathan ', 'Evangs', 'Utane', '', 'Kasamahang walang Katulad kagaya ni dominic na walang tulog', 'Aplaya', 1, 'Male', '2023-04-05', 60, 'DIVORCED', 'TAMBAY', 'Listed'),
(4, '34', 'Boy', 'Buy', 'Man', '', 'KKKs', 'Caingin', 1000, 'Male', '2023-04-05', 70, 'Single', 'kipot', 'Listed'),
(6, 'Z', 'Jonathan', 'Olorvida', 'Evangelio', 'Jr.', 'Lopi', 'Ibaba', 0, 'Male', '2000-02-03', 1, 'Married', 'Wala', 'Listed'),
(16, 'B12', 'Neko', 'Poly', 'Kelo', 'Sr.', 'League of Legends', 'Caingin', 0, 'Male', '1999-07-20', 1, 'Single', 'None', 'Listed');

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
-- Indexes for table `family_info`
--
ALTER TABLE `family_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `response_info`
--
ALTER TABLE `response_info`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `family_info`
--
ALTER TABLE `family_info`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `response_info`
--
ALTER TABLE `response_info`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `table_verification`
--
ALTER TABLE `table_verification`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
