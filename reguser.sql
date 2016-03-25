-- phpMyAdmin SQL Dump
-- version 4.0.10.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 24, 2016 at 11:01 PM
-- Server version: 5.1.73-14.12-log
-- PHP Version: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hoksoftrpd`
--

-- --------------------------------------------------------

--
-- Table structure for table `reguser`
--

CREATE TABLE IF NOT EXISTS `reguser` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(25) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_city` varchar(50) NOT NULL,
  `user_addres` varchar(50) NOT NULL,
  `user_birthdate` varchar(10) NOT NULL,
  `joining_date` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `reguser`
--

INSERT INTO `reguser` (`user_id`, `user_name`, `user_email`, `user_password`, `user_city`, `user_addres`, `user_birthdate`, `joining_date`) VALUES
(1, 'Chudy Milan (Frodo Rapid)', 'mail@frodo6857.eu', '0604fb888cd2d36df4bdc7730c5db297', 'Komárno', 'Rákócziho 2/31', '1995-03-30', '2016-03-24 20:37:42'),
(2, 'szerbusz', 'frodo6857@azet.sk', '25d55ad283aa400af464c76d713c07ad', '', '', '', '2016-03-24 22:24:22'),
(3, 'mimko', 'milankochudy1995@azet.sk', 'dd4b21e9ef71e1291183a46b913ae6f2', 'kn', 'rak21/31', '1995-03-30', '2016-03-24 22:41:39');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
