-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2018 at 02:20 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `richdates`
--

-- --------------------------------------------------------

--
-- Table structure for table `boy_tb`
--

CREATE TABLE `boy_tb` (
  `name` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `imageName` varchar(500) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `girl_tb`
--

CREATE TABLE `girl_tb` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `imageName` varchar(500) NOT NULL,
  `interests` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `like_tb`
--

CREATE TABLE `like_tb` (
  `email` varchar(200) NOT NULL,
  `girls_email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notification_boy_tb`
--

CREATE TABLE `notification_boy_tb` (
  `myEmail` varchar(200) NOT NULL,
  `yourEmail` varchar(200) NOT NULL,
  `myName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notification_girl_tb`
--

CREATE TABLE `notification_girl_tb` (
  `myEmail` varchar(200) NOT NULL,
  `yourEmail` varchar(200) NOT NULL,
  `myName` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `req_not`
--

CREATE TABLE `req_not` (
  `g_email` varchar(50) NOT NULL,
  `b_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userregistration_tb`
--

CREATE TABLE `userregistration_tb` (
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `intrests` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userregistration_tb`
--

INSERT INTO `userregistration_tb` (`name`, `email`, `dob`, `contact`, `password`, `gender`, `image`, `intrests`) VALUES
('shubham Gulhane', 'sgulhane84@gmail.com', '3/4/2000', '9028087090', '123', 'Male', 'qxYSBYmz2E.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userregistration_tb`
--
ALTER TABLE `userregistration_tb`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
