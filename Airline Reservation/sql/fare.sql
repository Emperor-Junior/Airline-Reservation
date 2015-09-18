-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2015 at 12:26 AM
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
-- Table structure for table `fare`
--

CREATE TABLE IF NOT EXISTS `fare` (
  `flight_number` varchar(10) NOT NULL,
  `FARE_CODE` varchar(10) NOT NULL,
  `AMOUNT` varchar(15) DEFAULT NULL,
  `RESTRICTIONS` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fare`
--

INSERT INTO `fare` (`flight_number`, `FARE_CODE`, `AMOUNT`, `RESTRICTIONS`) VALUES
('A113', 'f3', '1150.00', 'NONE'),
('A122', 'f5', '1899.99', 'NONE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fare`
--
ALTER TABLE `fare`
 ADD PRIMARY KEY (`flight_number`,`FARE_CODE`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
