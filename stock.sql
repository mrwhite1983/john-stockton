-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 20, 2011 at 03:58 PM
-- Server version: 5.5.8
-- PHP Version: 5.2.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `stock`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE IF NOT EXISTS `inventory` (
  `barcode` text NOT NULL,
  `item` text NOT NULL,
  `cost` decimal(10,2) NOT NULL,
  `count` int(100) NOT NULL,
  `increment` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`increment`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`barcode`, `item`, `cost`, `count`, `increment`) VALUES
('213r234fw3', 'dell', '10.00', 0, 1),
('5646ge466g', 'hp', '20.00', 0, 2),
('54twvwe45te5g', 'ibm', '30.00', 0, 3),
('234t5w5g456g', 'toshiba', '0.99', 0, 4),
('54tyw4hgwe6r4gh', 'ac adapter', '10.00', 50, 5);
