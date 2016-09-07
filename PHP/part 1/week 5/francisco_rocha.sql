-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 12, 2015 at 02:32 AM
-- Server version: 5.6.12
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `francisco_rocha`
--
CREATE DATABASE IF NOT EXISTS `francisco_rocha` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `francisco_rocha`;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `vin` int(8) NOT NULL AUTO_INCREMENT,
  `make` varchar(16) NOT NULL,
  `model` varchar(16) NOT NULL,
  `year` int(4) NOT NULL,
  `color` varchar(12) NOT NULL,
  `price` decimal(9,2) NOT NULL,
  PRIMARY KEY (`vin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`vin`, `make`, `model`, `year`, `color`, `price`) VALUES
(1, 'Chevrolet', 'Volt', 2013, 'silver', '34000.00'),
(2, 'Chevrolet', 'Malibu', 2013, 'red', '24000.00'),
(3, 'Cadillac', 'Escalade', 2012, 'black', '72000.00'),
(4, 'Buick', 'Lacrosse', 2013, 'white', '38000.00'),
(5, 'Chevrolet', 'Camaro SS', 2012, 'yellow', '33000.00'),
(6, 'Buick', 'Enclave', 2013, 'silver', '42000.00'),
(7, 'Cadillac', 'CTS-V Coupe', 2013, 'blue', '44000.00'),
(8, 'GMC', 'Terrain', 2012, 'red', '31000.00'),
(9, 'Chevrolet', 'Spark', 2013, 'green', '14000.00');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE IF NOT EXISTS `sellers` (
  `sellerid` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `payoption` char(1) NOT NULL,
  PRIMARY KEY (`sellerid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`sellerid`, `name`, `payoption`) VALUES
(1, 'Fleecem, Dewey', 'C'),
(2, 'Slick, Nick', 'D'),
(3, 'Munny, Eddie', 'C'),
(4, 'Rhodes, Dusty', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `sold`
--

CREATE TABLE IF NOT EXISTS `sold` (
  `transnum` int(8) NOT NULL AUTO_INCREMENT,
  `vin` int(8) NOT NULL,
  `sellerid` int(6) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`transnum`),
  KEY `vin` (`vin`),
  KEY `sellerid` (`sellerid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `sold`
--

INSERT INTO `sold` (`transnum`, `vin`, `sellerid`, `date`) VALUES
(1, 3, 2, '2015-02-12 01:13:22'),
(2, 2, 1, '2015-02-12 01:13:22'),
(3, 5, 2, '2015-02-12 01:13:22'),
(4, 8, 3, '2015-02-12 01:13:22'),
(5, 4, 1, '2015-02-12 01:13:22'),
(6, 7, 2, '2015-02-12 01:13:47');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sold`
--
ALTER TABLE `sold`
  ADD CONSTRAINT `sold_ibfk_2` FOREIGN KEY (`sellerid`) REFERENCES `sellers` (`sellerid`),
  ADD CONSTRAINT `sold_ibfk_1` FOREIGN KEY (`vin`) REFERENCES `product` (`vin`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
