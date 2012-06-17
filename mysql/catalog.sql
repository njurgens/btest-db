-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 17, 2012 at 09:56 PM
-- Server version: 5.5.24
-- PHP Version: 5.3.10-1ubuntu3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `catalog`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_cell_profiles`
--

CREATE TABLE IF NOT EXISTS `db_cell_profiles` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `manufacturer` varchar(36) NOT NULL,
  `model` varchar(16) NOT NULL,
  `serial` varchar(64) NOT NULL,
  `barcode` varchar(16) NOT NULL,
  `service_date` int(8) NOT NULL,
  `nominal_voltage` float NOT NULL,
  `nominal_capacity` float NOT NULL,
  `voltage_1` float NOT NULL,
  `voltage_2` float NOT NULL,
  `voltage_3` float NOT NULL,
  `resistance_1` float NOT NULL,
  `resistance_2` float NOT NULL,
  `resistance_3` float NOT NULL,
  `length_with_terminals` float NOT NULL,
  `length_without_terminals` float NOT NULL,
  `width_with_terminals` float NOT NULL,
  `width_without_terminals` float NOT NULL,
  `diameter_with_terminals` float NOT NULL,
  `diameter_without_terminals` float NOT NULL,
  `thickness_with_terminals` float NOT NULL,
  `thickness_without_terminals` float NOT NULL,
  `mass` float NOT NULL,
  `volume` float NOT NULL,
  `cathode` varchar(32) NOT NULL,
  `anode` varchar(32) NOT NULL,
  `electrolyte` varchar(32) NOT NULL,
  `separator` varchar(32) NOT NULL,
  `shape` varchar(32) NOT NULL,
  `casing` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `db_cell_profiles`
--

INSERT INTO `db_cell_profiles` (`id`, `manufacturer`, `model`, `serial`, `barcode`, `service_date`, `nominal_voltage`, `nominal_capacity`, `voltage_1`, `voltage_2`, `voltage_3`, `resistance_1`, `resistance_2`, `resistance_3`, `length_with_terminals`, `length_without_terminals`, `width_with_terminals`, `width_without_terminals`, `diameter_with_terminals`, `diameter_without_terminals`, `thickness_with_terminals`, `thickness_without_terminals`, `mass`, `volume`, `cathode`, `anode`, `electrolyte`, `separator`, `shape`, `casing`) VALUES
(1, 'LG', 'V4.1', 'abcdefg1234567', '1111111111111', 20120610, 4, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `db_cell_records`
--

CREATE TABLE IF NOT EXISTS `db_cell_records` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `barcode` varchar(16) NOT NULL,
  `date` int(8) NOT NULL,
  `action` varchar(64) NOT NULL,
  `description` varchar(4096) NOT NULL,
  `start_date` int(8) NOT NULL,
  `end_date` int(8) NOT NULL,
  `start_time` int(10) NOT NULL,
  `end_time` int(10) NOT NULL,
  `duration` int(10) NOT NULL,
  `amphr` int(8) NOT NULL,
  `results_status` varchar(64) NOT NULL,
  `location` varchar(64) NOT NULL,
  `engineer` varchar(64) NOT NULL,
  `channel` varchar(8) NOT NULL,
  `raw_data` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `db_cell_records`
--

INSERT INTO `db_cell_records` (`id`, `barcode`, `date`, `action`, `description`, `start_date`, `end_date`, `start_time`, `end_time`, `duration`, `amphr`, `results_status`, `location`, `engineer`, `channel`, `raw_data`) VALUES
(1, '1111111111111', 20120601, 'Storage', 'Placed in storage', 20120322, 20120422, 1339331743, 1339924327, 101010101, 5, 'Success!!', 'Stroage 5', 'Nick Jurgens', '', 1),
(2, '1111111111111', 20120602, 'Testing', 'Some random test', 20120601, 20120602, 1339331743, 1339924327, 2, 10, 'It went ok', 'In a chamber', 'Nick Jurgens', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `db_people`
--

CREATE TABLE IF NOT EXISTS `db_people` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `email` varchar(32) NOT NULL,
  `department` varchar(32) NOT NULL,
  `phone` int(16) NOT NULL,
  `barcode` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `db_people`
--

INSERT INTO `db_people` (`id`, `name`, `email`, `department`, `phone`, `barcode`) VALUES
(1, 'Nick Jurgens', 'nick.jurgens@gm.com', 'Engineering', 2128987313, '0787496702716'),
(2, 'Gavin Gao', 'gavin.gao@gm.com', 'Engineering', 0, '0717196703584'),
(3, 'Sandy', 'sandy.shang@gm.com', 'Engineering', 12345678, ''),
(6, '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `db_raw_cell_data`
--

CREATE TABLE IF NOT EXISTS `db_raw_cell_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(128) NOT NULL,
  `barcode` varchar(16) NOT NULL,
  `test` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `db_raw_cell_data`
--

INSERT INTO `db_raw_cell_data` (`id`, `filename`, `barcode`, `test`) VALUES
(1, '', '2147483647', 0),
(2, 'upload.xlsx', '1111111111111', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
