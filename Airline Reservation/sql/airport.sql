-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2015 at 10:09 PM
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
-- Table structure for table `airport`
--

CREATE TABLE IF NOT EXISTS `airport` (
  `airport_code` varchar(50) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `a_state` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `airport`
--

INSERT INTO `airport` (`airport_code`, `name`, `city`, `a_state`) VALUES
('0573-0174', 'Jackson Road Heliport', 'Houston', 'Texas'),
('16590-313', 'Rutten Dusting Strip Airport', 'Cincinnati', 'Ohio'),
('23155-160', 'Shure Airport', 'Orlando', 'Florida'),
('49884-122', 'North Willis Airport', 'Portland', 'Oregon'),
('54569-0898', 'Newberry County Memorial Hospital Heliport', 'El Paso', 'Texas'),
('54575-187', 'Maple Cave Park Airport', 'Fredericksburg', 'Virginia'),
('54748-302', 'Ferguson Airport', 'Oakland', 'California'),
('57955-5028', 'Hunterdon Medical Center Heliport', 'Montgomery', 'Alabama'),
('58668-5061', 'Webb Lake Airport', 'Clearwater', 'Florida'),
('59779-064', 'Marina Municipal Airport', 'Alhambra', 'California'),
('63629-4588', 'Sky Lodge Landing Strip', 'Fort Lauderdale', 'Florida'),
('66915-611', 'Waterford 3 Heliport', 'Buffalo', 'New York'),
('76218-0405', 'Hellinger Airport', 'Springfield', 'Massachusetts');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airport`
--
ALTER TABLE `airport`
 ADD PRIMARY KEY (`airport_code`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
