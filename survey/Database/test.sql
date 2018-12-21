-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2018 at 07:46 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `response`
--

CREATE TABLE `response` (
  `agenda_1ec` int(10) DEFAULT NULL,
  `agenda_2ec` int(10) DEFAULT NULL,
  `agenda_3ec` int(10) DEFAULT NULL,
  `agenda_1unscw` int(10) DEFAULT NULL,
  `agenda_2unscw` int(10) DEFAULT NULL,
  `agenda_3unscw` int(10) DEFAULT NULL,
  `agenda_1aippm` int(10) DEFAULT NULL,
  `agenda_2aippm` int(10) DEFAULT NULL,
  `agenda_3aippm` int(10) DEFAULT NULL,
  `agenda_1disec` int(10) DEFAULT NULL,
  `agenda_2disec` int(10) DEFAULT NULL,
  `agenda_3disec` int(10) DEFAULT NULL,
  `agenda_1whsw` int(10) DEFAULT NULL,
  `agenda_2whsw` int(10) DEFAULT NULL,
  `agenda_3whsw` int(10) DEFAULT NULL,
  `agenda_1sc` int(10) DEFAULT NULL,
  `agenda_2sc` int(10) DEFAULT NULL,
  `agenda_3sc` int(10) DEFAULT NULL,
  `agenda_1ip` int(10) DEFAULT NULL,
  `agenda_2ip` int(10) DEFAULT NULL,
  `agenda_3ip` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `testresponse`
--

CREATE TABLE `testresponse` (
  `email` varchar(30) NOT NULL,
  `council1` varchar(30) NOT NULL,
  `council2` varchar(30) NOT NULL,
  `council3` varchar(30) NOT NULL,
  `council4` varchar(30) NOT NULL,
  `council5` varchar(30) NOT NULL,
  `council6` varchar(30) NOT NULL,
  `council7` varchar(30) NOT NULL,
  `response` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
