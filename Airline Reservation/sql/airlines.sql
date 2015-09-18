-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2015 at 10:10 PM
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
-- Table structure for table `airlines`
--TABLE AIRPLANE

CREATE TABLE IF NOT EXISTS `airlines` (
  `aircraftTypeID` varchar(6) NOT NULL,
  `airplane_type` varchar(30) NOT NULL,
  `total_number_of_seats` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `airlines`
--

INSERT INTO `airlines` (`aircraftTypeID`, `airplane_type`, `total_number_of_seats`) VALUES
('PH075', 'PHP AIRBUS 075', 110),
('PH085', 'PHP AIRBUS 085', 110),
('PH090', 'PHP AIRBUS 090', 200),
('PH092', 'PHP AIRBUS 092', 80),
('PH191', 'PHP AIRBUS 191', 200),
('PH192', 'PHP AIRBUS 192', 90),
('PH253', 'PHP AIRBUS 253', 80),
('PH273', 'PHP AIRBUS 273', 100),
('PH331', 'PHP AIRBUS 331', 50),
('PH332', 'PHP AIRBUS 332', 50),
('PH491', 'PHP AIRBUS 491', 200),
('PH927', 'PHP AIRBUS 927', 80),
('PH928', 'PHP AIRBUS 928', 130),
('PH930', 'PHP AIRBUS 930', 200),
('PH991', 'PHP AIRBUS 991', 120),
('PH992', 'PHP AIRBUS 992', 120);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airlines`
--
ALTER TABLE `airlines`
 ADD PRIMARY KEY (`aircraftTypeID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
