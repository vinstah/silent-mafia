-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 18, 2013 at 08:39 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `silentmafia`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE IF NOT EXISTS `bank` (
  `trans_id` int(11) NOT NULL AUTO_INCREMENT,
  `charID` int(11) NOT NULL,
  `trans_type` text NOT NULL COMMENT 'can sort last transaction',
  `trans_time` time NOT NULL,
  `money_trans` smallint(10) NOT NULL,
  PRIMARY KEY (`trans_id`),
  KEY `player_ID` (`charID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`trans_id`, `charID`, `trans_type`, `trans_time`, `money_trans`) VALUES
(1, 1, 'you got mugged', '12:30:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `characters`
--

CREATE TABLE IF NOT EXISTS `characters` (
  `charID` int(4) NOT NULL,
  `userID` int(4) NOT NULL,
  `username` varchar(20) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `online` int(1) NOT NULL COMMENT '0=offline, 1=online',
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `characters`
--

INSERT INTO `characters` (`charID`, `userID`, `username`, `date_created`, `online`) VALUES
(2, 1, 'vinnie', '2012-10-18 01:02:48', 0),
(1, 2, 'vinstah', '2012-10-18 01:02:55', 0);

-- --------------------------------------------------------

--
-- Table structure for table `crime`
--

CREATE TABLE IF NOT EXISTS `crime` (
  `crime_ID` int(2) NOT NULL AUTO_INCREMENT,
  `crime` varchar(20) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`crime_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `crime`
--

INSERT INTO `crime` (`crime_ID`, `crime`) VALUES
(1, 'clothes line shoppin'),
(2, 'steal from market st'),
(3, 'shoplift at 9/11'),
(4, 'drag race'),
(5, 'streetfight');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `jobID` int(2) NOT NULL AUTO_INCREMENT,
  `jName` varchar(50) CHARACTER SET utf8 NOT NULL,
  `max_money` float NOT NULL,
  `max_xp` int(10) NOT NULL,
  PRIMARY KEY (`jobID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`jobID`, `jName`, `max_money`, `max_xp`) VALUES
(1, 'firefighter', 20000, 15),
(2, 'Contruction', 40000, 30);

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE IF NOT EXISTS `stats` (
  `charID` int(2) NOT NULL,
  `level` int(2) NOT NULL COMMENT 'level of char',
  `XP` int(4) NOT NULL COMMENT 'XP of char, reset at each level',
  `status` int(11) NOT NULL COMMENT 'for checking if hurt, dead',
  `home_city` varchar(10) NOT NULL,
  `current_city` varchar(10) NOT NULL,
  `jobID` int(2) NOT NULL,
  UNIQUE KEY `charID_2` (`charID`),
  KEY `charID` (`charID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stats`
--

INSERT INTO `stats` (`charID`, `level`, `XP`, `status`, `home_city`, `current_city`, `jobID`) VALUES
(1, 1, 30, 1, 'wellington', 'ocean', 1),
(2, 2, 24, 1, 'wellington', 'Crater', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userID` int(4) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `charID` int(4) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `first_name`, `last_name`, `email`, `password`, `charID`) VALUES
(1, 'vinnie', 'watson', 'vinnie_watson@hotmail.com', 'vinnies1', 2),
(2, 'vinnie', 'watson', 'vinstah@gmail.com', 'vinnies1', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
