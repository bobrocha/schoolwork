-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 22, 2015 at 10:20 PM
-- Server version: 5.6.12
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `retailing`
--
CREATE DATABASE IF NOT EXISTS `retailing` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `retailing`;

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `show_invoice`( in inv_num int )
BEGIN
select invoice.invoice_date, items.description, items.cost
from invoice, items
where items.invoice_num = inv_num
and invoice.invoice_num = items.invoice_num;
END$$

--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `invoice_total`(inv int) RETURNS float
BEGIN
declare subtotal float default 0.00;

select sum(cost) into subtotal
from items
where invoice_num = inv;
return subtotal;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
  `invoice_num` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`invoice_num`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoice_num`, `invoice_date`) VALUES
(1, '2013-03-07 19:36:23'),
(2, '2013-03-07 19:36:23'),
(3, '2013-03-07 19:36:34');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `invoice_num` int(11) NOT NULL,
  `description` varchar(15) NOT NULL,
  `cost` decimal(7,2) NOT NULL,
  PRIMARY KEY (`description`),
  KEY `invoice_num` (`invoice_num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`invoice_num`, `description`, `cost`) VALUES
(3, 'blouse', '30.00'),
(2, 'dress', '79.00'),
(1, 'purse', '89.00'),
(2, 'skirt', '25.00'),
(1, 'umbrella', '22.00'),
(2, 'watch', '129.00');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_2` FOREIGN KEY (`invoice_num`) REFERENCES `invoice` (`invoice_num`),
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`invoice_num`) REFERENCES `invoice` (`invoice_num`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
