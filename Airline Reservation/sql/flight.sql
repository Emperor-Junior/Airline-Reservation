-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2015 at 10:08 PM
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
-- Table structure for table `flight`
--

CREATE TABLE IF NOT EXISTS `flight` (
  `flight_number` varchar(50) NOT NULL,
  `airline` varchar(50) DEFAULT NULL,
  `weekdays` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`flight_number`, `airline`, `weekdays`) VALUES
('A113', 'American Airlines', 'Sunday'),
('A122', 'American Airlines', 'Saturday'),
('A123', 'American Airlines', 'Friday'),
('A133', 'American Airlines', 'Sunday'),
('A222', 'American Airlines', 'Sunday'),
('A232', 'American Airlines', 'Friday'),
('A313', 'American Airlines', 'Saturday'),
('A322', 'American Airlines', 'Thursday'),
('A323', 'American Airlines', 'Friday'),
('A331', 'American Airlines', 'Friday'),
('A332', 'American Airlines', 'Sunday'),
('B111', 'British Airlines', 'Saturday'),
('B133', 'British Airlines', 'Sunday'),
('B223', 'British Airlines', 'Thursday'),
('B311', 'British Airlines', 'Saturday'),
('B312', 'British Airlines', 'Sunday'),
('B322', 'British Airlines', 'Sunday'),
('B323', 'British Airlines', 'Friday'),
('B331', 'British Airlines', 'Sunday'),
('B332', 'British Airlines', 'Saturday'),
('B333', 'British Airlines', 'Wednesday'),
('D131', 'Delta', 'Sunday'),
('D132', 'Delta', 'Wednesday'),
('D211', 'Delta', 'Sunday'),
('D221', 'Delta', 'Saturday'),
('D233', 'Delta', 'Saturday'),
('D311', 'Delta', 'Thursday'),
('D312', 'Delta', 'Sunday'),
('D332', 'Delta', 'Friday'),
('D333', 'Delta', 'Sunday'),
('E112', 'Emirates', 'Sunday'),
('E113', 'Emirates', 'Saturday'),
('E131', 'Emirates', 'Sunday'),
('E211', 'Emirates', 'Saturday'),
('E213', 'Emirates', 'Thursday'),
('E313', 'Emirates', 'Sunday'),
('E323', 'Emirates', 'Saturday'),
('E331', 'Emirates', 'Thursday');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
 ADD PRIMARY KEY (`flight_number`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
