-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 16, 2016 at 09:58 PM
-- Server version: 5.5.42-37.1-log
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bikedese_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `productName` varchar(255) NOT NULL,
  `productType` int(30) NOT NULL,
  `productPrice` int(30) NOT NULL,
  `productID` int(33) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productName`, `productType`, `productPrice`, `productID`) VALUES
('Bike tube 700C', 3, 46, 25),
('Pro Azalco', 1, 5999, 3),
('Team Jersey', 2, 125, 4),
('Club Jersey', 2, 89, 5),
('Race Jersey', 2, 200, 6),
('Jacket', 1, 200, 10),
('Tube', 3, 15, 8),
('Light Kit', 3, 80, 9),
('Fuji Gran Fondo 2.5', 1, 1889, 12),
('Castelli Short Sleeve ', 1, 100, 13),
('Pearl Izumi Elite', 2, 90, 14),
('Pearl Izumi  Road Shoes ', 2, 130, 15),
('omen''s MTB Shoes ', 2, 60, 16),
('Focus Race Evo', 1, 3693, 17),
('focus', 1, 5252, 19),
('t-shirt', 2, 25, 23),
('Race Jersey', 3, 50, 24);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `userName` int(11) NOT NULL,
  `userEmail` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`userName`, `userEmail`, `password`) VALUES
(1, 'agh15001@byui.edu', 'pa55word'),
(2, 'woodsb@byui.edu', 'pa55word');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`userName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(33) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `userName` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
