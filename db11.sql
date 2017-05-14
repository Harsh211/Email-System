-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2017 at 06:52 AM
-- Server version: 5.5.50
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db11`
--

-- --------------------------------------------------------

--
-- Table structure for table `elogin`
--

CREATE TABLE `elogin` (
  `uid` varchar(100) NOT NULL,
  `pwd` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `elogin`
--

INSERT INTO `elogin` (`uid`, `pwd`) VALUES
('amit', '987'),
('sumit', '987'),
('harsh', '211'),
('gaurav', 'fgfgfg'),
('parth007@mailcircle.com', 'fuckoff'),
('mansi', '123'),
('dtuli20', 'qwertyuiop'),
('15BIT0097', 'sahaj789'),
('15BIT0342', 'apoorv123'),
('15BCE0112', 'ayushi112'),
('bathlaparth', 'parth123'),
('lakshay@mailcircle.com', '123456'),
('rishabh12@mailcircle.com', '789654'),
('vinit@mailcircle.com', 'vinit123'),
('krishna@mailcircle.com', 'Krisha.fifa14'),
('yashraj@mailcircle.com', 'yashraj'),
('sahaj@mailcircle.com', 'sahaj123'),
('harsh@mailcircle.com', 'harsh123'),
('Rahul@mailcircle.com', 'Terabyte@1234');

-- --------------------------------------------------------

--
-- Table structure for table `emsg`
--

CREATE TABLE `emsg` (
  `sn` int(11) NOT NULL,
  `rid` varchar(100) NOT NULL,
  `sid` varchar(100) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  `date1` varchar(50) NOT NULL,
  `attach` varchar(50000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emsg`
--

INSERT INTO `emsg` (`sn`, `rid`, `sid`, `sub`, `msg`, `date1`, `attach`) VALUES
(3, 'sumit', 'amit', 'hi', 'hello sumit\r\nhow are you\r\nwhere are you now a day', '26/04/17', ''),
(2, 'sumit', 'amit', 'hellloo', 'helllllllllooooooooo sumit\r\nplz reply', '26/04/17', ''),
(4, 'amit', 'sumit', 'request', 'plz mera kaam karde', '27/04/17', ''),
(6, 'harsh', 'bathlaparth', 'hi', 'heyyy', '29/04/17', ''),
(98, '15BCE0112', '15BIT0342', 'Honoured', 'Thankyou Ayushi, really happy for getting selected for 2nd round.', '01/05/17', ''),
(119, 'parth007@mailcircle.com', 'lakshay', 'HELLO', 'asdghbihaJSNUIWYVDWYISN ', '03/05/17', ''),
(118, 'vinit@mailcircle.com', 'lakshay', 'Hello vinot', '?hii bro how r u', '02/05/17', 'IMG_9587.JPG'),
(5, 'amit', 'sumit', 'yipee', 'bol ke bta', '28/04/17', ''),
(116, 'vinit@mailcircle.com', 'lakshay', 'attachment file', 'hi hello', '02/05/17', 'C:/xampp/htdocs/11-12/email/pp.jpg'),
(99, '15BIT0342', '15BIT0097', 'Party', 'Bro, heard that you have been selected for the next round of CodeMasters. \nReally happy for you.\nNow this makes a reason for party.', '01/05/17', ''),
(115, 'lakshay@mailcircle.com', 'parth007', 'hii', 'attachment', '02/05/17', 'C:/xampp/htdocs/11-12/email/files/a.jpg'),
(97, '15BIT0342', '15BCE0112', 'Cleared Round 1', 'Hey, Apoorv.\r\n\r\nI am Ayushi Sharma. You have been selected for the next round (interview round) of CodeMasters Club. You have to reach SJT-G05. And your timing for interview would be 4pm. Contact - 7010970167.\r\n\r\nGet a chance to work with something big.', '01/05/17', ''),
(103, 'vinit@mailcircle.com', 'lakshay', 'Thankyou', 'Thankyou very much bhai.\r\nWe will go to Vellore Kitchen tommorrow.\r\nWas missing u these days.', '01/05/17', ''),
(100, '15BIT0097', '15BIT0342', 'Thankyou', 'Sure bro.\r\nWe will go to Vellore Kitchen in morning and then Darling Barbeque in evening on 5 July.\r\nBe ready.', '01/05/17', ''),
(101, 'lakshay@mailcircle.com', 'vinit', 'Congratulations', 'Bro, heard that you have been placed in IBM. \r\nReally happy for you.\r\nYou made your teachers, parents, friends everyone proud.\r\nNow this makes a reason for party.', '01/05/17', ''),
(102, 'rishabh12@mailcircle.com', 'lakshay', 'Party', 'Bro, we are going to Vellore Kitchen tommorrow Please be on time.', '01/05/17', ''),
(104, 'lakshay@mailcircle.com', 'parth007', 'congrats', 'Hi Lakshay hope you are in good health and i m glad to know that you are placed in IBM .\nSo all the best for your future.\nPARTY is DUE bro \n#PartyTime.', '01/05/17', ''),
(105, 'vinit@mailcircle.com', 'parth007', 'rrw fwe', '', '01/05/17', ''),
(106, 'vinit@mailcircle.com', 'lakshay', 'hello', 'youa re', '02/05/17', ''),
(109, 'parth007@mailcircle.com', 'vinit', 'hi bhai', 'hello', '02/05/17', ''),
(110, 'lakshay@mailcircle.com', 'vinit', 'Yipeee', 'Woud be there on time', '02/05/17', ''),
(111, 'harsh', 'vinit', 'mobile', 'give me a new handset', '02/05/17', ''),
(112, 'vinit@mailcircle.com', 'parth007', 'ok buddy', 'will come', '02/05/17', ''),
(113, 'amit', 'parth007', 'dkbfk', 'kbjnl', '02/05/17', ''),
(114, 'harsh', 'parth007', 'attachment', 'akggdhl', '02/05/17', 'C:/xampp/htdocs/11-12/email/files/0.jpg'),
(117, 'parth007@mailcircle.com', 'vinit', 'bhai', 'kaisa hai', '02/05/17', 'HarshGupta.jpg'),
(120, 'parth007@mailcircle.com', 'krishn', 'ad', 'bhadwaaa saala', '03/05/17', ''),
(121, 'yashraj@mailcircle.com', 'sahaj', 'yo beyatch', 'bhai you rock!!!', '03/05/17', ''),
(122, 'sahaj@mailcircle.com', 'yashraj', 'Congratulations', 'you rock too ', '03/05/17', ''),
(123, 'harsh@mailcircle.com', 'lakshay', 'Hi bro', 'Waiting eagerly for you at Nehru Nagar.', '04/05/17', ''),
(124, 'harsh@mailcircle.com', 'vinit', 'Congratulations', 'Hi Harsh hope you are in good health and i m glad to know that you are placed in IBM .\r\nSo all the best for your future.\r\nPARTY is DUE bro \r\n#PartyTime.', '04/05/17', ''),
(125, 'vinit@mailcircle.com', 'harsh', 'Thankyou', 'Thankyou Bro, for your warm wishes.\r\n\r\nWill meet you soon and then celebrate it.\r\nBye!!!!!', '04/05/17', 'HarshGupta.jpg'),
(126, 'harsh@mailcircle.com', 'rahu', 'Hey', 'asadsads', '04/05/17', '');

-- --------------------------------------------------------

--
-- Table structure for table `eusers`
--

CREATE TABLE `eusers` (
  `uid` varchar(100) NOT NULL,
  `fnam` varchar(20) NOT NULL,
  `lnam` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `mob` char(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eusers`
--

INSERT INTO `eusers` (`uid`, `fnam`, `lnam`, `gender`, `mob`) VALUES
('amit', 'Amit', 'Kumar', 'Male', '8795462132'),
('sumit', 'Sumit', 'Singh', 'Male', '1313212312'),
('harsh', 'Harsh', 'Gupta', 'Male', '7599200046'),
('gaurav', 'gaurav', 'mishra', 'Male', '969696969'),
('mayur@gmail.com', 'Mayur', 'Bnasal', 'Male', '9444680051'),
('mansi', 'mansi', 'sharma', 'Female', '983933982'),
('dtuli20', 'Deepanshu', 'Tuli', 'Male', '9888889155'),
('vinit@mailcircle.com', 'Vinit', 'Shahdeo', 'Male', '8056921923'),
('15BIT0097', 'Sahaj', 'Maheshwari', 'Male', '7412589630'),
('15BIT0342', 'Apoorv', 'Kshirsagar', 'Male', '9585381481'),
('15BCE0112', 'Ayushi', 'Sharma', 'Female', '7010970167'),
('bathlaparth', 'parth', 'bathla', 'Male', '7060504066'),
('lakshay@mailcircle.com', 'Lakshay', 'Shukla', 'Male', '9874563210'),
('rishabh12@mailcircle.com', 'rishabh', 'sharma', 'Male', '7142341214'),
('parth007@mailcircle.com', 'parth', 'bathla', 'Male', '7060504066'),
('krishna@mailcircle.com', 'krishna', 'yadav', 'Male', '7014298904'),
('yashraj@mailcircle.com', 'yash raj', 'jain', 'Male', '7986451232'),
('sahaj@mailcircle.com', 'sahaj', 'Maheshwari', 'Male', '7599200046'),
('harsh@mailcircle.com', 'Harsh', 'Gupta', 'Male', '9585381481'),
('Rahul@mailcircle.com', 'Rahul Rishav', 'Mohanti', 'Male', '9790002398');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emsg`
--
ALTER TABLE `emsg`
  ADD PRIMARY KEY (`sn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emsg`
--
ALTER TABLE `emsg`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
