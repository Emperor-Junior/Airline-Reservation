-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2015 at 12:14 AM
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
-- Table structure for table `leg_instance`
--

CREATE TABLE IF NOT EXISTS `leg_instance` (
  `flight_number` varchar(10) NOT NULL,
  `leg_number` varchar(3) NOT NULL,
  `date` date NOT NULL DEFAULT '0000-00-00',
  `total_number_of_seats` int(3) NOT NULL,
  `aircraftTypeID` varchar(30) NOT NULL,
  `departure_airport_code` varchar(15) NOT NULL,
  `departure_time` time DEFAULT NULL,
  `arrival_airport_code` varchar(15) NOT NULL,
  `arrival_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leg_instance`
--

INSERT INTO `leg_instance` (`flight_number`, `leg_number`, `date`, `total_number_of_seats`, `aircraftTypeID`, `departure_airport_code`, `departure_time`, `arrival_airport_code`, `arrival_time`) VALUES
('A113', 'L5', '2015-02-16', 110, 'PH075', '0573-0174', '16:25:00', '0577-0174', '07:21:00'),
('A122', 'L3', '2015-02-18', 200, 'PH090', '16590-313', '22:27:00', '16592-313', '08:38:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `leg_instance`
--
ALTER TABLE `leg_instance`
 ADD PRIMARY KEY (`flight_number`,`leg_number`,`date`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
