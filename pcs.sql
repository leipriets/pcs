-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2018 at 09:00 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pcs`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clearance_online`
--

CREATE TABLE `tbl_clearance_online` (
  `id` int(150) UNSIGNED NOT NULL,
  `clearanceID` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `extname` varchar(20) NOT NULL,
  `alias` varchar(20) NOT NULL,
  `brgy` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `houseno` varchar(10) NOT NULL,
  `street` varchar(20) NOT NULL,
  `city` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `civilstatus` varchar(20) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `occupation` varchar(20) NOT NULL,
  `restcertno` varchar(20) NOT NULL,
  `dateissued` date NOT NULL,
  `issuedat` varchar(50) NOT NULL,
  `purpose` varchar(200) NOT NULL,
  `status` enum('PENDING','APPROVED','DECLINE','') NOT NULL DEFAULT 'PENDING',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `useracct`
--

CREATE TABLE `useracct` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(150) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `middlename` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isactive` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useracct`
--

INSERT INTO `useracct` (`id`, `username`, `password`, `firstname`, `middlename`, `lastname`, `email`, `created_at`, `isactive`) VALUES
(8, 'leonardo', '5ce9c8f109546fda3a6ab32ed4c2059af8d69af6', '', '', '', 'leipriets@gmail.com', '2018-06-07 13:37:20', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_clearance_online`
--
ALTER TABLE `tbl_clearance_online`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useracct`
--
ALTER TABLE `useracct`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_clearance_online`
--
ALTER TABLE `tbl_clearance_online`
  MODIFY `id` int(150) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `useracct`
--
ALTER TABLE `useracct`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
