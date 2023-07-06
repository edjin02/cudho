-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2023 at 02:48 AM
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
-- Database: `cudhonew`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_childminor`
--

CREATE TABLE `tbl_childminor` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `head_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `extension` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `birthdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_childminor`
--

INSERT INTO `tbl_childminor` (`id`, `user_id`, `head_id`, `firstname`, `middlename`, `lastname`, `extension`, `gender`, `birthdate`) VALUES
(1, 1, 1, 'IAN', 'BAUAN', 'PASCUAL', '', 'MALE', '2011-12-29'),
(15, 1, 1, 'HADID', '', 'GG', '', 'FEMALE', '2021-01-22'),
(25, 1, 54, 'ARRISTOPHER', 'CARANZA', 'CASIMIRO', 'JR', 'MALE', '2000-12-29'),
(26, 1, 54, 'RAICEN JUSTIN', 'CARANZA', 'CASIMIRO', '', 'MALE', '2004-11-19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_childwork`
--

CREATE TABLE `tbl_childwork` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `head_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `extension` varchar(50) NOT NULL,
  `maidenname` varchar(50) NOT NULL,
  `monthIncome` int(11) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `birthdate` date NOT NULL,
  `civilStatus` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `pagIbig` int(1) NOT NULL,
  `sss` int(1) NOT NULL,
  `other` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_childwork`
--

INSERT INTO `tbl_childwork` (`id`, `user_id`, `head_id`, `firstname`, `middlename`, `lastname`, `extension`, `maidenname`, `monthIncome`, `gender`, `birthdate`, `civilStatus`, `occupation`, `pagIbig`, `sss`, `other`) VALUES
(1, 1, 1, 'ALAN', 'BAUAN', 'PASQUAL', 'JUNIOR', '', 3000, 'MALE', '1998-01-01', 'SINGLE', 'BOUNCER', 0, 0, ''),
(5, 1, 1, 'VIKTOR', 'MAG', 'TANGOL', '', '', 2000, 'FEMALE', '2001-12-11', 'MARRIED', 'SUPERHERO', 0, 0, ''),
(11, 1, 54, 'CHRISTOPHER', 'CARANZA', 'CASIMIRO', '', '', 17000, 'MALE', '1999-11-18', 'SINGLE', 'PROGRAMMER', 1, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_facility`
--

CREATE TABLE `tbl_facility` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `head_id` int(11) NOT NULL,
  `electricity` varchar(20) NOT NULL,
  `water` varchar(20) NOT NULL,
  `toilet` varchar(20) NOT NULL,
  `kitchen` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_facility`
--

INSERT INTO `tbl_facility` (`id`, `user_id`, `head_id`, `electricity`, `water`, `toilet`, `kitchen`) VALUES
(1, 1, 1, 'NONE', 'DEEPWELL', 'SHARED', 'SHARED'),
(2, 1, 2, 'NONE', 'DEEPWELL', 'OWN', 'OWN'),
(5, 1, 54, 'OWN', 'DEEPWELL', 'OWN', 'OWN');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_headinfo`
--

CREATE TABLE `tbl_headinfo` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `maidenname` varchar(50) NOT NULL,
  `extension` varchar(50) NOT NULL,
  `barangay` varchar(50) NOT NULL,
  `community` varchar(50) NOT NULL,
  `basicHouse` varchar(50) NOT NULL,
  `tag` varchar(20) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `civilStatus` varchar(20) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `monthIncome` int(11) NOT NULL,
  `pagIbig` int(1) NOT NULL,
  `sss` int(1) NOT NULL,
  `other` varchar(100) NOT NULL,
  `tenurStatus` varchar(50) NOT NULL,
  `origOwner` varchar(100) NOT NULL,
  `structure` varchar(50) NOT NULL,
  `yearStay` date NOT NULL,
  `relocUnavailable` varchar(50) NOT NULL,
  `relocated` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_headinfo`
--

INSERT INTO `tbl_headinfo` (`id`, `user_id`, `firstname`, `lastname`, `middlename`, `maidenname`, `extension`, `barangay`, `community`, `basicHouse`, `tag`, `birthdate`, `gender`, `civilStatus`, `occupation`, `monthIncome`, `pagIbig`, `sss`, `other`, `tenurStatus`, `origOwner`, `structure`, `yearStay`, `relocUnavailable`, `relocated`) VALUES
(1, 1, 'DOMINIC', 'PASCUAL', 'BAUAN', 'MAIDEN', 'EXTEND', 'TAGAPO', 'JORDAN1', '', '1A', '1111-12-11', 'MALE', 'MARRIED', 'DANCER', 1000000, 0, 0, '', 'OWNER', '', 'CONCRETE', '0000-00-00', 'BALIK PROBISNYA PROGRAM', 'SUVB. MERCEDES SINALHAN'),
(2, 1, 'JONATHAN', 'EVANGELIO', 'UTANE', 'GIRL', 'JR', 'TAGAPO', 'JORDAN1', '', '1A', '1985-11-11', 'MALE', 'SINGLE', 'PUSHER', 1000000, 0, 0, '', 'OWNER', '', 'CONCRETE', '0000-00-00', 'FINANCIAL ASSISTANCE', 'SUVB. MERCEDES SINALHAN'),
(5, 1, 'JONATS', 'EVANGELIO', 'UTANE', 'GIRL', 'JR', 'TAGAPO', 'JORDAN1', '', '1A', '1985-11-11', 'MALE', 'SINGLE', 'PUSHER', 1000000, 0, 0, '', 'OWNER', '', 'CONCRETE', '0000-00-00', 'BALIK PROBISNYA PROGRAM', 'SUVB. MERCEDES SINALHAN'),
(6, 1, 'JOANA', 'EVANGELIO', 'UTANE', 'GIRL', 'JR', 'TAGAPO', 'JORDAN1', '', '1A', '1985-11-11', 'MALE', 'SINGLE', 'PUSHER', 1000000, 0, 0, '', 'OWNER', '', 'CONCRETE', '0000-00-00', 'FINANCIAL ASSISTANCE', 'SUVB. MERCEDES SINALHAN'),
(54, 1, 'OLIVIA', 'CASIMIRO', 'TUMABACAL', 'CARANZA', '', 'SINALHAN', 'COMMUNITY3', 'FLOOD', '1A', '1970-12-12', 'FEMALE', 'MARRIED', 'HOUSEWIFE', 0, 1, 1, 'PALENGKE', 'OWNER', 'OLIVIA TUMABACAL CASIMIRO', 'CONCRETE', '2000-12-12', 'FINANCIAL ASSISTANCE', 'SUVB. MERCEDESS');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_image`
--

CREATE TABLE `tbl_image` (
  `id` int(11) NOT NULL,
  `user_id` int(12) NOT NULL,
  `head_id` int(12) NOT NULL,
  `imagePath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_image`
--

INSERT INTO `tbl_image` (`id`, `user_id`, `head_id`, `imagePath`) VALUES
(7, 1, 1, 'uploads/newd.png'),
(8, 1, 1, 'uploads/Untitled.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_interinfo`
--

CREATE TABLE `tbl_interinfo` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `head_id` int(11) NOT NULL,
  `res_Fname` varchar(50) NOT NULL,
  `res_Mname` varchar(50) NOT NULL,
  `res_Lname` varchar(50) NOT NULL,
  `relationship` varchar(50) NOT NULL,
  `int_Fname` varchar(50) NOT NULL,
  `int_Mname` varchar(50) NOT NULL,
  `int_Lname` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `remarks` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_interinfo`
--

INSERT INTO `tbl_interinfo` (`id`, `user_id`, `head_id`, `res_Fname`, `res_Mname`, `res_Lname`, `relationship`, `int_Fname`, `int_Mname`, `int_Lname`, `date`, `remarks`) VALUES
(1, 1, 1, 'DOMINIC', 'BAUAN', 'PASCUAL', 'CHILD', 'JOMARI', 'ALBIONS', 'GALANGS', '2007-01-24', 'SI DOMINIC MAHILIG SA IMMERSIONS'),
(5, 1, 54, 'OLIVIA', 'CARANZA', 'CASIMIRO', 'PERSON LISTED IN MASTERLIST', 'JOMARI', 'ALBION', 'GALANG', '2010-12-12', 'MOVE IN');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seniorpwd`
--

CREATE TABLE `tbl_seniorpwd` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `head_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `extension` varchar(20) NOT NULL,
  `maidenname` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `birthdate` date NOT NULL,
  `senior` int(1) NOT NULL,
  `pwd` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_seniorpwd`
--

INSERT INTO `tbl_seniorpwd` (`id`, `user_id`, `head_id`, `firstname`, `middlename`, `lastname`, `extension`, `maidenname`, `gender`, `birthdate`, `senior`, `pwd`) VALUES
(1, 1, 1, 'LOLONG', 'BAUAN', 'PASCUAL', 'SR', '', 'MALE', '1965-09-01', 1, 0),
(2, 1, 1, 'LALANG', 'BAUAN', 'PASCUAL', '', 'BAUAN', 'FEMALE', '1985-11-21', 1, 1),
(3, 1, 1, 'LELENG', 'BAUAN', 'PASCUAL', 'JR', '', 'MALE', '1999-12-03', 0, 1),
(4, 1, 1, 'MORPH', 'POMMY', 'POLLY', '', '', 'MALE', '1950-12-12', 0, 1),
(18, 1, 54, 'LOLU', 'LOLE', 'LOLO', 'LOLA', '', 'MALE', '1970-01-01', 1, 1),
(20, 1, 54, 'ANDENG', 'BAE', 'TUMABACAL', '', 'LOL', 'FEMALE', '1960-12-29', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_spouseinfo`
--

CREATE TABLE `tbl_spouseinfo` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `head_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `maidenname` varchar(50) NOT NULL,
  `extension` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `civilStatus` varchar(20) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `monthIncome` int(11) NOT NULL,
  `pagIbig` int(1) NOT NULL,
  `sss` int(1) NOT NULL,
  `other` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_spouseinfo`
--

INSERT INTO `tbl_spouseinfo` (`id`, `user_id`, `head_id`, `firstname`, `middlename`, `lastname`, `maidenname`, `extension`, `birthdate`, `gender`, `civilStatus`, `occupation`, `monthIncome`, `pagIbig`, `sss`, `other`) VALUES
(1, 1, 1, 'ALYANA', 'CRUZ', 'PASQUAL', 'CASTRILLO', '', '2000-12-29', 'FEMALE', 'MARRIED', 'CASHIER', 100, 0, 0, ''),
(2, 1, 2, 'BABA', 'JACQUI', 'POLY', 'CRUZ', '', '1999-02-16', 'FEMALE', 'MARRIED', 'TEACHER', 20, 0, 0, ''),
(9, 1, 54, 'ARRISTOPHER', 'CACAO', 'CASIMIRO', '', 'SR', '1985-08-01', 'MALE', 'SINGLE', 'GRAB DRIVER', 50000, 1, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(12) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `contactno` varchar(50) NOT NULL,
  `memberof` varchar(50) NOT NULL,
  `isactive` varchar(20) NOT NULL,
  `ar_dashboard` int(2) NOT NULL,
  `ar_record` int(2) NOT NULL,
  `ar_report` int(2) NOT NULL,
  `ar_systman` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `firstname`, `middlename`, `lastname`, `contactno`, `memberof`, `isactive`, `ar_dashboard`, `ar_record`, `ar_report`, `ar_systman`) VALUES
(1, 'admin', '$2y$10$axCcPt4zrwt6NSq./gDG/uDb2lFkjO5Bjq.1t6SlZTRA.rhYQx5XS', '12', '21', '12', '21', 'ADMINISTRATOR', 'ACTIVE', 1, 1, 1, 1),
(10, 't', '$2y$10$Al7Lq4aKODMb4rGDy.uS/.loRqByLWFlr5iLaV.7eFuZusZ.WFf0q', 'dsfd', 'dsfds', 'dsds', '12', 'ADMINISTRATOR', 'ACTIVE', 1, 1, 1, 1),
(11, 'admintttt', '$2y$10$88Vw3ZQN6WSl/mz11iZH/ONPMBq9BuKul1LrNd08StGMMZBDgvC3S', 'dsffd', 'sdffsd', 'dsfdf', '34', 'ADMINISTRATOR', 'ACTIVE', 1, 1, 1, 1),
(12, 'AMBATUKAN', '$2y$10$Xd9i/HFXaXGNo5PFKmjXDe/ewcb30kgbCSeqVGEREzdJg5alAbbZW', 'early', 'lately', 'bauan', '123', 'ENCODER', 'ACTIVE', 0, 0, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_childminor`
--
ALTER TABLE `tbl_childminor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_childwork`
--
ALTER TABLE `tbl_childwork`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_facility`
--
ALTER TABLE `tbl_facility`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_headinfo`
--
ALTER TABLE `tbl_headinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_image`
--
ALTER TABLE `tbl_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_interinfo`
--
ALTER TABLE `tbl_interinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_seniorpwd`
--
ALTER TABLE `tbl_seniorpwd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_spouseinfo`
--
ALTER TABLE `tbl_spouseinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_childminor`
--
ALTER TABLE `tbl_childminor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_childwork`
--
ALTER TABLE `tbl_childwork`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_facility`
--
ALTER TABLE `tbl_facility`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_headinfo`
--
ALTER TABLE `tbl_headinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `tbl_image`
--
ALTER TABLE `tbl_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_interinfo`
--
ALTER TABLE `tbl_interinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_seniorpwd`
--
ALTER TABLE `tbl_seniorpwd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_spouseinfo`
--
ALTER TABLE `tbl_spouseinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
