-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2014 at 01:06 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cars`
--
CREATE DATABASE IF NOT EXISTS `cars` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cars`;

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE IF NOT EXISTS `cars` (
`id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `make` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `color` varchar(30) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `year`, `make`, `model`, `color`, `price`) VALUES
(1, 1996, 'Nissan', 'Sentra', 'Grey', 10000),
(2, 2007, 'Toyota', 'Camry', 'Grey', 20000),
(3, 2006, 'Bugatti', 'Veyron', 'Red', 1500000),
(4, 1986, 'Toyota', 'Corola', 'Black', 1000),
(5, 2003, 'Infinity', 'G35', 'Blue', 35000),
(6, 1968, 'Ford', 'Shelby GT Eleanor', 'Silver', 666000),
(7, 2000, 'Chevrolette', 'Suburban', 'Brown', 40000),
(8, 1992, 'Plymouth', 'Voyager', 'White', 5000),
(9, 2001, 'Chevy', 'Camaro', 'Yellow', 15000),
(10, 1993, 'Nissan', 'Altima', 'Pink', 20000),
(11, 1996, 'Izuzu', 'Rodeo', 'Green', 25000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
