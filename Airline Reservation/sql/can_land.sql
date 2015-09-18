-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2015 at 12:47 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `airlines_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `can_land`
--

CREATE TABLE IF NOT EXISTS `can_land` (
  `AIRPLANE_TYPE_NAME` varchar(50) NOT NULL,
  `AIRPORT_CODE` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `can_land`
--

INSERT INTO `can_land` (`AIRPLANE_TYPE_NAME`, `AIRPORT_CODE`) VALUES
('PHP AIRBUS 075', '0573-0174'),
('PHP AIRBUS 090', '16590-313');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `can_land`
--
ALTER TABLE `can_land`
 ADD PRIMARY KEY (`AIRPLANE_TYPE_NAME`,`AIRPORT_CODE`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
