-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2015 at 12:32 AM
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
-- Table structure for table `airplane_type`
--

CREATE TABLE IF NOT EXISTS `airplane_type` (
  `AIRPLANE_TYPE_NAME` varchar(50) NOT NULL,
  `MAX_SEATS` int(4) NOT NULL,
  `COMPANY` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `airplane_type`
--

INSERT INTO `airplane_type` (`AIRPLANE_TYPE_NAME`, `MAX_SEATS`, `COMPANY`) VALUES
('PHP AIRBUS 075', 110, 'AMERICAN AIRLINES'),
('PHP AIRBUS 090', 200, 'EMIRATES');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airplane_type`
--
ALTER TABLE `airplane_type`
 ADD PRIMARY KEY (`AIRPLANE_TYPE_NAME`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
