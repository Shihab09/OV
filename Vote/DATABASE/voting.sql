-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 31, 2014 at 10:38 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `voting`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `member_id` int(11) unsigned NOT NULL auto_increment,
  `admin` varchar(24) NOT NULL,
  PRIMARY KEY  (`member_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`member_id`, `admin`) VALUES
(1, 'lokesh');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL auto_increment,
  `admin_email` varchar(50) NOT NULL,
  `psw` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `email` (`admin_email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `admin_email`, `psw`) VALUES
(1, 'admin@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `auditor`
--

CREATE TABLE `auditor` (
  `auditor` varchar(30) NOT NULL,
  PRIMARY KEY  (`auditor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auditor`
--

INSERT INTO `auditor` (`auditor`) VALUES
('Kamlesh'),
('Sweta'),
('Toshan');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL auto_increment,
  `city_name` varchar(50) NOT NULL,
  PRIMARY KEY  (`city_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`) VALUES
(5, 'EEE'),
(4, 'MECHNICAL'),
(3, 'CIVIL'),
(2, 'ET&T'),
(1, 'CSE'),
(6, 'MCA'),
(7, 'BCA'),
(8, 'BSC');

-- --------------------------------------------------------

--
-- Table structure for table `forget`
--

CREATE TABLE `forget` (
  `email` varchar(50) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `psw` varchar(30) NOT NULL,
  PRIMARY KEY  (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forget`
--

INSERT INTO `forget` (`email`, `fname`, `psw`) VALUES
('buntysahu13@gmail.com', 'bunty', 'ban'),
('poojasahu13@gmail.com', 'pooja', 'sahu'),
('raju12@gmail.com', 'raju', 'sahu');

-- --------------------------------------------------------

--
-- Table structure for table `fyr`
--

CREATE TABLE `fyr` (
  `fyr` varchar(30) NOT NULL,
  PRIMARY KEY  (`fyr`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fyr`
--

INSERT INTO `fyr` (`fyr`) VALUES
('Deepa'),
('Kamal'),
('Riya');

-- --------------------------------------------------------

--
-- Table structure for table `fyre`
--

CREATE TABLE `fyre` (
  `fyre` varchar(30) NOT NULL,
  PRIMARY KEY  (`fyre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fyre`
--

INSERT INTO `fyre` (`fyre`) VALUES
('Bhushan'),
('Chetan'),
('Sharad');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL auto_increment,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `psw` text NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `hobby` varchar(50) NOT NULL,
  `city_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `fname`, `lname`, `email`, `psw`, `gender`, `hobby`, `city_id`, `image`, `status`) VALUES
(27, 'raju', 'verma', 'raju12@gmail.com', 'sahu', 'Male', 'Eigth', 1, '', 'Active'),
(25, 'bunty', 'sahu', 'buntysahu13@gmail.com', 'ban', 'Male', 'Third', 3, '', 'Active'),
(26, 'pooja', 'sahu', 'poojasahu13@gmail.com', 'sahu', 'Female', 'Third', 2, '', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `president`
--

CREATE TABLE `president` (
  `pres` varchar(30) NOT NULL,
  PRIMARY KEY  (`pres`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `president`
--

INSERT INTO `president` (`pres`) VALUES
('Aashtha'),
('Arjun'),
('Domendra'),
('Priya'),
('raju');

-- --------------------------------------------------------

--
-- Table structure for table `registered`
--

CREATE TABLE `registered` (
  `id` int(11) NOT NULL auto_increment,
  `voters` varchar(24) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `registered`
--

INSERT INTO `registered` (`id`, `voters`) VALUES
(1, 'QxDMYZt1dK3gN7G'),
(2, 'CF3r7YR2phwmVWB'),
(3, 'DLpJ8m7kRjzwQHg'),
(4, 'cbM6n9NzZqgwB8Q'),
(5, 'dC6ZVHwB32zDKWk'),
(6, 'Q7w3Y9NDHhkCzGb'),
(7, 'fDRdMvH12bFgkCN'),
(8, 'LHbgp8KN6vJxFQM'),
(9, '4bdg2JFCDYyp6zv'),
(10, 'G3nVDxQJYPgH2cC'),
(11, 'm9QZxk1C68pbfn3'),
(12, 'PqZDMnRHCB6TX8x'),
(13, 'd8NCwnqvMcZLRxJ'),
(14, 'fRHLyxj7C4ZDGvg'),
(15, 'hKYqX7Z82Nz6Rk3'),
(16, 'Q4r7LWjzXfbGmp1'),
(17, '8j2GwHYNx6Q1Dmq'),
(18, 'bx86NnWczvhmM2G'),
(19, 'dx4ch6CHtNVQKgZ'),
(20, 'cz8kWh1wZYQyfN6'),
(21, '2dW61ZQTBXk4RMf'),
(22, 'RBvxjPmLVWNnGqJ'),
(23, 'wRYCfZPJhKXmvbH'),
(24, 'hM7jX2WdNxnTzKC'),
(25, 'wVnjrNgZ9TtJv7D'),
(26, '3tH1jYdgvP6Dbxy');

-- --------------------------------------------------------

--
-- Table structure for table `secretary`
--

CREATE TABLE `secretary` (
  `secretary` varchar(30) NOT NULL,
  PRIMARY KEY  (`secretary`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `secretary`
--

INSERT INTO `secretary` (`secretary`) VALUES
('Bhupendra'),
('Harish'),
('Pooja');

-- --------------------------------------------------------

--
-- Table structure for table `syr`
--

CREATE TABLE `syr` (
  `syr` varchar(30) NOT NULL,
  PRIMARY KEY  (`syr`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `syr`
--

INSERT INTO `syr` (`syr`) VALUES
('Mayank'),
('Nitesh'),
('Rakesh');

-- --------------------------------------------------------

--
-- Table structure for table `syre`
--

CREATE TABLE `syre` (
  `syre` varchar(30) NOT NULL,
  PRIMARY KEY  (`syre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `syre`
--

INSERT INTO `syre` (`syre`) VALUES
('Arjun'),
('Human'),
('Kirti');

-- --------------------------------------------------------

--
-- Table structure for table `treasurer`
--

CREATE TABLE `treasurer` (
  `treasu` varchar(30) NOT NULL,
  PRIMARY KEY  (`treasu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treasurer`
--

INSERT INTO `treasurer` (`treasu`) VALUES
('Anuj'),
('Nidhi'),
('Raja'),
('Umesh');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `voters` varchar(24) NOT NULL,
  `president` varchar(64) NOT NULL,
  `invp` varchar(64) NOT NULL,
  `exvp` varchar(64) NOT NULL,
  `secretary` varchar(64) NOT NULL,
  `treasurer` varchar(64) NOT NULL,
  `auditor` varchar(64) NOT NULL,
  `fone` varchar(64) NOT NULL,
  `ftwo` varchar(64) NOT NULL,
  `sone` varchar(64) NOT NULL,
  `stwo` varchar(64) NOT NULL,
  PRIMARY KEY  (`voters`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`voters`, `president`, `invp`, `exvp`, `secretary`, `treasurer`, `auditor`, `fone`, `ftwo`, `sone`, `stwo`) VALUES
('arunyadav12@gmail.com', 'Aashtha', 'Karan', 'Aman', 'Bhupendra', 'Anuj', 'Kamlesh', 'Deepa', 'Bhushan', 'Mayank', 'Arjun'),
('poojasahu13@gmail.com', 'Arjun', 'Lokesh', 'Raja', 'Harish', 'Nidhi', 'Sweta', 'Riya', 'Sharad', 'Rakesh', 'Human');

-- --------------------------------------------------------

--
-- Table structure for table `vp_external`
--

CREATE TABLE `vp_external` (
  `vp_external` varchar(30) NOT NULL,
  PRIMARY KEY  (`vp_external`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vp_external`
--

INSERT INTO `vp_external` (`vp_external`) VALUES
('Aman'),
('Neha'),
('Raja');

-- --------------------------------------------------------

--
-- Table structure for table `vp_internal`
--

CREATE TABLE `vp_internal` (
  `vp_internal` varchar(30) NOT NULL,
  PRIMARY KEY  (`vp_internal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vp_internal`
--

INSERT INTO `vp_internal` (`vp_internal`) VALUES
('Karan'),
('Lokesh'),
('Manoj');
