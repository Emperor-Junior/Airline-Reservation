-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2015 at 11:28 PM
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
-- Table structure for table `flight_leg`
--

CREATE TABLE IF NOT EXISTS `flight_leg` (
  `flight_number` varchar(10) NOT NULL,
  `leg_number` varchar(3) NOT NULL DEFAULT '',
  `departure_airport_code` varchar(15) DEFAULT NULL,
  `scheduled_departure_time` time DEFAULT NULL,
  `arrival_airport_code` varchar(15) DEFAULT NULL,
  `scheduled_arrival_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flight_leg`
--

INSERT INTO `flight_leg` (`flight_number`, `leg_number`, `departure_airport_code`, `scheduled_departure_time`, `arrival_airport_code`, `scheduled_arrival_time`) VALUES
('A113', 'L5', '0573-0174', '16:25:00', '0573-0174', '07:21:00'),
('A122', 'L3', '16590-313', '22:27:00', '16590-313', '08:38:00'),
('A123', 'L5', '23155-160', '03:02:00', '23155-160', '22:10:00'),
('B133', 'L5', '49884-122', '16:11:00', '49884-122', '14:02:00'),
('B223', 'L2', '54569-0898', '12:31:00', '54569-0898', '03:53:00'),
('B311', 'L5', '54575-187', '06:13:00', '54575-187', '22:06:00'),
('B312', 'L5', '54748-302', '19:27:00', '54748-302', '07:31:00'),
('D131', 'L4', '57955-5028', '21:38:00', '57955-5028', '10:27:00'),
('D132', 'L5', '58668-5061', '22:03:00', '58668-5061', '01:00:00'),
('D211', 'L5', '59779-064', '20:57:00', '59779-064', '01:17:00'),
('E112', 'L5', '63629-4588', '07:59:00', '63629-4588', '11:20:00'),
('E113', 'L5', '66915-611', '04:33:00', '66915-611', '09:51:00'),
('E131', 'L3', '76218-0405', '02:37:00', '76218-0405', '06:47:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flight_leg`
--
ALTER TABLE `flight_leg`
 ADD PRIMARY KEY (`flight_number`,`leg_number`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
