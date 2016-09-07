-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 11, 2015 at 02:55 AM
-- Server version: 5.6.12
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pcparts`
--
CREATE DATABASE IF NOT EXISTS `pcparts` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pcparts`;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `custid` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(16) NOT NULL,
  `city` varchar(16) NOT NULL,
  `state` char(2) NOT NULL,
  `zip` int(5) NOT NULL,
  PRIMARY KEY (`custid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`custid`, `name`, `email`, `address`, `city`, `state`, `zip`) VALUES
(1, 'Matti, Otto', 'otto@geek.net', '22 Elm St', 'Tampa', 'FL', 33445),
(2, 'Mander, Sally', 'sallyman@gmail.com', '104 Oak St', 'Dunedin', 'FL', 34567),
(3, 'Ball, Krystal', 'krys@aol.com', '55 Ash Dr', 'Clearwater', 'FL', 33543),
(4, 'Pott, Jack', 'jacko@gmail.com', '52 Fir Crt', 'Tampa', 'FL', 35422),
(5, 'Ester, Polly', 'polly@hotmail.com', '77 Yew Ave', 'Dunedin', 'FL', 37252);

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE IF NOT EXISTS `orderitems` (
  `orderid` int(6) NOT NULL,
  `sku` char(5) NOT NULL,
  `qty` int(3) NOT NULL,
  KEY `orderid` (`orderid`),
  KEY `sku` (`sku`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderitems`
--

INSERT INTO `orderitems` (`orderid`, `sku`, `qty`) VALUES
(1, 'A6543', 2),
(1, 'C7654', 1),
(2, 'D1234', 1),
(3, 'A6543', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `orderid` int(6) NOT NULL AUTO_INCREMENT,
  `custid` int(6) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`orderid`),
  KEY `custid` (`custid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `custid`, `date`) VALUES
(1, 2, '2015-02-11 01:46:02'),
(2, 3, '2015-02-11 01:46:02'),
(3, 5, '2015-02-11 01:46:51');

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

CREATE TABLE IF NOT EXISTS `parts` (
  `sku` char(5) NOT NULL,
  `description` varchar(20) NOT NULL,
  `manuf` varchar(16) NOT NULL,
  `price` decimal(7,2) NOT NULL,
  PRIMARY KEY (`sku`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parts`
--

INSERT INTO `parts` (`sku`, `description`, `manuf`, `price`) VALUES
('A1234', 'Mouse', 'Logitech', '39.99'),
('A6543', 'Wireless Keyboard', 'Logitech', '64.95'),
('B5678', '16 GB Flash Drive', 'Sandisk', '15.99'),
('C7654', '4 Port USB Hub', 'Acer', '11.99'),
('C9862', '2 YB SATA Drive', 'Seagate', '79.99'),
('D1234', 'USB Headphones', 'Sony', '34.95');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD CONSTRAINT `orderitems_ibfk_2` FOREIGN KEY (`sku`) REFERENCES `parts` (`sku`),
  ADD CONSTRAINT `orderitems_ibfk_1` FOREIGN KEY (`orderid`) REFERENCES `orders` (`orderid`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`custid`) REFERENCES `customers` (`custid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
