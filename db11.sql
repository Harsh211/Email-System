-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 04, 2017 at 11:17 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db11`
--

-- --------------------------------------------------------

--
-- Table structure for table `elogin`
--

CREATE TABLE IF NOT EXISTS `elogin` (
  `uid` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `elogin`
--

INSERT INTO `elogin` (`uid`, `pwd`) VALUES
('amit', '987'),
('sumit', '987');

-- --------------------------------------------------------

--
-- Table structure for table `emsg`
--

CREATE TABLE IF NOT EXISTS `emsg` (
  `sn` int(11) NOT NULL AUTO_INCREMENT,
  `rid` varchar(20) NOT NULL,
  `sid` varchar(20) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `msg` varchar(500) NOT NULL,
  PRIMARY KEY (`sn`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `emsg`
--

INSERT INTO `emsg` (`sn`, `rid`, `sid`, `sub`, `msg`) VALUES
(1, 'sumit', 'amit', 'hi', 'hello sumit\r\nhow are you\r\nwhere are you now a day'),
(2, 'sumit', 'amit', 'hellloo', 'helllllllllooooooooo sumit\r\nplz reply');

-- --------------------------------------------------------

--
-- Table structure for table `eusers`
--

CREATE TABLE IF NOT EXISTS `eusers` (
  `uid` varchar(20) NOT NULL,
  `fnam` varchar(20) NOT NULL,
  `lnam` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `mob` char(10) NOT NULL,
  `pin` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eusers`
--

INSERT INTO `eusers` (`uid`, `fnam`, `lnam`, `gender`, `mob`, `pin`) VALUES
('amit', 'Amit', 'Kumar', 'Male', '8795462132', 879546),
('sumit', 'Sumit', 'Singh', 'Male', '1313212312', 656565);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `uid` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uid`, `pwd`) VALUES
('amit', '12345'),
('sumit', 'amit12345');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `fnam` varchar(20) NOT NULL,
  `lnam` varchar(20) NOT NULL,
  `uid` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `mob` char(10) NOT NULL,
  `country` varchar(20) NOT NULL,
  `pin` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`fnam`, `lnam`, `uid`, `pwd`, `gender`, `mob`, `country`, `pin`) VALUES
('Raj', 'singh', 'raj', '98765', 'Male', '5245645645', 'Russia', 645645),
('Amit', 'Kumar', 'amit', '987', 'Male', '1478523695', 'America', 112233),
('Sumit', 'singh', 'sumit', '98765', 'Male', '1321321321', 'Russia', 789978),
('Reena', 'sharma', 'reena', '147', 'Female', '3216549877', 'America', 112244),
('ajay', 'shankar', 'ajay', '99999', 'Male', '9999999999', 'Russia', 555555),
('ravi', 'ravi', 'ravi', '123', 'Male', '5465456464', 'India', 798789),
('neelu', 'singh', 'neelu', '987', 'Female', '1471477411', 'America', 987987);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
