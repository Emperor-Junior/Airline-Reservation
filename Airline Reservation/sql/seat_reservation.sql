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
-- Table structure for table `seat_reservation`
--

CREATE TABLE IF NOT EXISTS `seat_reservation` (
  `flight_number` varchar(10) NOT NULL,
  `leg_number` varchar(3) NOT NULL,
  `DATE` date NOT NULL DEFAULT '0000-00-00',
  `SEAT_NUMBER` varchar(3) NOT NULL,
  `CUSTOMER_NAME` varchar(50) NOT NULL,
  `CUSTOMER_PHONE` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seat_reservation`
--

INSERT INTO `seat_reservation` (`flight_number`, `leg_number`, `DATE`, `SEAT_NUMBER`, `CUSTOMER_NAME`, `CUSTOMER_PHONE`) VALUES
('A113', 'L5', '2015-02-16', '15', 'SATHYA', '469-688-5511'),
('A122', 'L3', '2015-02-18', '35', 'SAINATHAN', '469-688-5522');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `seat_reservation`
--
ALTER TABLE `seat_reservation`
 ADD PRIMARY KEY (`flight_number`,`leg_number`,`DATE`,`SEAT_NUMBER`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
