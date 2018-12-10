-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2018 at 12:06 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vitcmun`
--

-- --------------------------------------------------------

--
-- Table structure for table `eb`
--

CREATE TABLE `eb` (
  `name` varchar(150) NOT NULL,
  `DOB` date NOT NULL,
  `City` varchar(100) NOT NULL,
  `Mobileno` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `College` varchar(200) NOT NULL,
  `Delegate-experience` varchar(2500) NOT NULL,
  `eb-experience` varchar(2500) NOT NULL,
  `council-preference-1` varchar(100) NOT NULL,
  `position-preference-1` varchar(100) NOT NULL,
  `sa11` varchar(1000) NOT NULL,
  `sa12` varchar(1000) NOT NULL,
  `council-preference-2` varchar(100) NOT NULL,
  `position-preference-2` varchar(100) NOT NULL,
  `sa21` varchar(1000) NOT NULL,
  `sa22` varchar(1000) NOT NULL,
  `Q1` varchar(5000) NOT NULL,
  `Q2` varchar(5000) NOT NULL,
  `checkbox` varchar(50) NOT NULL,
  `consent_for_position_downgrade` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
