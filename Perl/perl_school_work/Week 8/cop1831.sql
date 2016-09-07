-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2014 at 01:03 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cop1831`
--
CREATE DATABASE IF NOT EXISTS `cop1831` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cop1831`;

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE IF NOT EXISTS `grades` (
  `name` varchar(10) NOT NULL,
  `id` char(5) NOT NULL,
  `test1` int(11) NOT NULL,
  `test2` int(11) NOT NULL,
  `test3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`name`, `id`, `test1`, `test2`, `test3`) VALUES
('Danny', '88911', 88, 76, 90),
('Fanny', '72782', 82, 65, 90),
('James', '32165', 99, 80, 83),
('Lanny', '12345', 86, 92, 75),
('Manny', '25666', 68, 84, 95),
('Nanny', '88991', 88, 92, 65);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
 ADD PRIMARY KEY (`name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
