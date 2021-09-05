-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 23, 2019 at 06:14 PM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `practice`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

DROP TABLE IF EXISTS `admin_login`;
CREATE TABLE IF NOT EXISTS `admin_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(225) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `email`, `password`) VALUES
(1, 'ranabiswas02@gmail.com', 'rana');

-- --------------------------------------------------------

--
-- Table structure for table `ahotelupld`
--

DROP TABLE IF EXISTS `ahotelupld`;
CREATE TABLE IF NOT EXISTS `ahotelupld` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `hotel_name` varchar(255) NOT NULL,
  `loc` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `price` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ahotelupld`
--

INSERT INTO `ahotelupld` (`id`, `hotel_name`, `loc`, `city`, `price`, `image`, `image1`, `image2`) VALUES
(41, 'Le Meridien', 'Airport', 'Dhaka', '3500', 'le_meridien.jpg', '', ''),
(42, 'Radisson Blu', 'Mes', 'Dhaka', '2000', 'radisson.jpg', '', ''),
(51, 'Rose View', 'Law College', 'Sylhet', '5000 BDT', 'rose-view.jpg', '', ''),
(46, 'Westin', 'Gulshan', 'Dhaka', '3000', 'ocean.jpg', '', ''),
(43, 'The Westin', 'Gulshan', 'Dhaka', '4000', 'Westin_hostel.jpg', '', ''),
(44, 'Inter Continental', 'Shahbag', 'Dhaka', '3000', 'int_conti.jpg', '', ''),
(47, 'Radisson ', 'Mes', 'Dhaka', '2000', 'Radissan1.jpg', '', ''),
(49, 'City Inn', 'Shib Bari', 'Khulna', '2500 BDT', 'City-Inn-Khulna.jpg', '', ''),
(50, 'Hotel Royal International', 'Royal Mor', 'Khulna', '3000', 'Royal.jpg', '', ''),
(78, '', '', '', '', 'images (18).jpg', 'images (3).jpg', 'images (4).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `n_id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `division` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `hotel_name` varchar(50) NOT NULL,
  `c_in` varchar(30) NOT NULL,
  `c_out` varchar(30) NOT NULL,
  `members` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name`, `n_id`, `email`, `division`, `city`, `hotel_name`, `c_in`, `c_out`, `members`) VALUES
(1, 'SUMANA BISWAS', '123', 'sumanatumpa7@gmail.com', 'Dhaka', 'Dhaka', 'Pan P. Sonargon', '17/12/2018', '20/12/2018', '1'),
(5, 'Ashiqur Rahman', '123', 'arnobbiswas02@gmail.com', 'Chittagong', 'Rajshahi', 'Radisson', '17/12/2018', '20/12/2018', '1'),
(9, 'Arnab', '86544', 'ranabiswas01@yahoo.com', 'Chittagong', 'Khulna', 'Radisson', '17/12/2020', '20/12/20220', '1'),
(10, 'Arnab biswas', '1997', 'arnabbiswas01@yahoo.com', 'Khulna', 'Khulna', 'Westin', '17/12/2019', '20/12/2019', '1');

-- --------------------------------------------------------

--
-- Table structure for table `log_in`
--

DROP TABLE IF EXISTS `log_in`;
CREATE TABLE IF NOT EXISTS `log_in` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_in`
--

INSERT INTO `log_in` (`id`, `name`, `phone`, `email`, `password`) VALUES
(5, 'SUMANA BISWAS', '01401444569', 'sumanatumpa7@gmail.com', 'tumpa'),
(6, 'Rana', '01401444569', 'ranabiswas1@yahoo.com', 'rana'),
(7, 'Rana', '01401444569', 'ranabiswas01@yahoo.com', 'rana');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
