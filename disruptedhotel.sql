-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 03, 2019 at 08:29 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `disruptedhotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activity`
--

DROP TABLE IF EXISTS `tbl_activity`;
CREATE TABLE IF NOT EXISTS `tbl_activity` (
  `activity_id` int(100) NOT NULL AUTO_INCREMENT,
  `typ_weather` varchar(100) NOT NULL,
  `activity_name` varchar(100) NOT NULL,
  PRIMARY KEY (`activity_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_activity`
--

INSERT INTO `tbl_activity` (`activity_id`, `typ_weather`, `activity_name`) VALUES
(1, 'Sunny', 'Beach Chair'),
(2, 'Sunny', 'Rental Bike'),
(3, 'Sunny', 'Snorkeling'),
(4, 'Any Weather', 'Lobby Entertainment'),
(5, 'Sunny', 'Beach Games'),
(6, 'Any Weather', 'Retail Store'),
(7, 'Any Weather', 'Massage'),
(8, 'Sunny', 'Table Tennis'),
(9, 'Sunny', 'Tennis'),
(10, 'Sunny', 'Basketball'),
(11, 'Sunny', 'Volleyball'),
(12, 'Sunny', 'Water Polo'),
(13, 'Any Weather', 'Indoor Pool '),
(14, 'Any Weather', 'Fitness Center'),
(15, 'Any Weather', 'Internet Cafe'),
(16, 'Any Weather', 'Video Game'),
(17, 'Any Weather', 'Billiard'),
(18, 'Sunny', 'City Tours'),
(19, 'Any Weather', 'Spa'),
(20, 'Any Weather', 'Karaoke'),
(21, 'Any Weather', 'Local Cuisine Tasting ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hotel_details`
--

DROP TABLE IF EXISTS `tbl_hotel_details`;
CREATE TABLE IF NOT EXISTS `tbl_hotel_details` (
  `h_id` int(100) NOT NULL AUTO_INCREMENT,
  `org_name` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `activity_offered` varchar(100) NOT NULL,
  `weather` varchar(100) NOT NULL,
  `enviroment` varchar(100) NOT NULL,
  `images` varchar(100) NOT NULL,
  PRIMARY KEY (`h_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hotel_details`
--

INSERT INTO `tbl_hotel_details` (`h_id`, `org_name`, `state`, `activity_offered`, `weather`, `enviroment`, `images`) VALUES
(1, 'Hotel Bayview', 'Kedah', 'Rental Bike,Beach Games,Table Tennis', 'Sunny', 'Sea', 'https://d2ile4x3f22snf.cloudfront.net/wp-content/uploads/sites/219/2017/11/02014135/Reception1.jpg'),
(2, 'Hotel Hilton', 'Kuala Lumpur', 'Karaoke, Massage, Spa', 'Any Weather', 'Urban', 'https://images.oyster.com/photos/adult-pool--v3063298-w902.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_details`
--

DROP TABLE IF EXISTS `tbl_user_details`;
CREATE TABLE IF NOT EXISTS `tbl_user_details` (
  `details_id` int(100) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) NOT NULL,
  `org_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`details_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_details`
--

INSERT INTO `tbl_user_details` (`details_id`, `full_name`, `org_name`, `email`, `password`) VALUES
(1, 'Abdul Alim Abdul Muttalib', 'Hotel Sri Malaysia', 'alim.muttalib@gmail.com', '123'),
(2, 'Testing 1', 'hotel concode', 'alim@genaxis.com.my', '123'),
(3, 'test2', 'test2', 'test2@gmail.com', '123'),
(4, 'joe doe', 'Hotel Bayview', 'joedoe@gmail.com', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
