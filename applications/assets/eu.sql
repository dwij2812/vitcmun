-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2018 at 10:53 AM
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
-- Table structure for table `eu`
--

CREATE TABLE `eu` (
  `country` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eu`
--

INSERT INTO `eu` (`country`) VALUES
('Sebastian Kurz, Federal Chancellor, Austria'),
('Charles Michel, Prime Minister, Belgium'),
('Boyko Borisov, Minister-President, Bulgaria'),
('Andrej Plenkovic, President, Croatia'),
('Nicos Anastasiades, President, Cyprus'),
('Andrej Babi?, Chairman of the Govt., Czech Republic'),
('Lars L?kke Rasmussen, Minister of State, Denmark'),
('Juri Ratas, Head Minister, Estonia'),
('Juha Sipila, Minister of State, Finland'),
('Emmanuel Macron, President, France'),
('Angela Merkel, Federal Chancellor, Germany'),
('Alexis Tsipras, President, Greece'),
('Viktor Orb?n, Minister-President, Hungary'),
('Leo Varadkar, Prime Minister, Ireland'),
('Giuseppe Conte, President, Italy'),
('Maris Kucinskis, Minister-President, Latvia '),
('Dalia Grybauskaite, President, Lithuania'),
('Xavier Bettel , Prime Minister, Luxembourg'),
('Joseph Muscat, Prime Minister, Malta'),
('Mark Rutte, Minister-President, Netherlands'),
('Mateusz Morawiecki, President, Poland'),
('Ant?nio Costa, Prime Minister, Portugal'),
('Klaus Iohannis, President, Romania'),
('Peter Pellegrini, Chairman of the Govt., Slovakia'),
('Marjan ?arec, President, Slovenia'),
('Pedro S?nchez, President, Spain'),
('Stefan L?fven, Minister of State, Sweden'),
('Theresa May, Prime Minister, United Kingdom'),
('Organisation, Observer, European Central Bank');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
