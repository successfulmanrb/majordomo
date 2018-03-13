-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 12, 2018 at 03:25 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `majordomo_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `application_component_tbl`
--

DROP TABLE IF EXISTS `application_component_tbl`;
CREATE TABLE IF NOT EXISTS `application_component_tbl` (
  `application_id` int(5) NOT NULL,
  `component_id` int(5) NOT NULL AUTO_INCREMENT,
  `component_name` varchar(25) NOT NULL,
  PRIMARY KEY (`component_id`),
  KEY `application_id` (`application_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application_component_tbl`
--

INSERT INTO `application_component_tbl` (`application_id`, `component_id`, `component_name`) VALUES
(3, 1, 'OptiCash'),
(3, 2, 'OptiNet');

-- --------------------------------------------------------

--
-- Table structure for table `application_tbl`
--

DROP TABLE IF EXISTS `application_tbl`;
CREATE TABLE IF NOT EXISTS `application_tbl` (
  `application_id` int(5) NOT NULL AUTO_INCREMENT,
  `application_name` varchar(25) NOT NULL,
  `application_its` varchar(25) NOT NULL,
  `application_business` varchar(25) NOT NULL,
  PRIMARY KEY (`application_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application_tbl`
--

INSERT INTO `application_tbl` (`application_id`, `application_name`, `application_its`, `application_business`) VALUES
(1, '1TCCOE', 'ps250465', 'rb250491'),
(2, '4Tell', 'ps250465', 'rb250491'),
(3, 'Currency Management- AMER', 'ps250465', 'rb250491');

-- --------------------------------------------------------

--
-- Table structure for table `notification_function_tbl`
--

DROP TABLE IF EXISTS `notification_function_tbl`;
CREATE TABLE IF NOT EXISTS `notification_function_tbl` (
  `notification_id` int(5) NOT NULL,
  `function_id` int(5) NOT NULL AUTO_INCREMENT,
  `function_name` varchar(25) NOT NULL,
  PRIMARY KEY (`function_id`),
  KEY `notification_id` (`notification_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification_function_tbl`
--

INSERT INTO `notification_function_tbl` (`notification_id`, `function_id`, `function_name`) VALUES
(1, 1, 'DOWN'),
(1, 2, 'UP'),
(1, 3, 'Degraded'),
(1, 4, 'Resolved'),
(1, 5, 'Update'),
(2, 6, '1'),
(2, 7, 'Planned Maintenance'),
(2, 8, 'Emergency Maintenance'),
(2, 9, 'Completed'),
(2, 10, 'Maintenance Extended'),
(2, 11, 'Update'),
(2, 12, 'Started'),
(2, 13, 'Planned Maintenance'),
(2, 14, 'Emergency Maintenance');

-- --------------------------------------------------------

--
-- Table structure for table `notification_tbl`
--

DROP TABLE IF EXISTS `notification_tbl`;
CREATE TABLE IF NOT EXISTS `notification_tbl` (
  `notification_id` int(5) NOT NULL AUTO_INCREMENT,
  `notification_type` varchar(25) NOT NULL,
  PRIMARY KEY (`notification_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification_tbl`
--

INSERT INTO `notification_tbl` (`notification_id`, `notification_type`) VALUES
(1, 'System Outage'),
(2, 'Maintenance'),
(3, 'Disaster Recovery');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
