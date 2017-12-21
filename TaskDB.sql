-- phpMyAdmin SQL Dump
-- version 4.4.15.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2017 at 02:43 PM
-- Server version: 5.6.25
-- PHP Version: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `TaskDB`
--
CREATE DATABASE IF NOT EXISTS `TaskDB` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `TaskDB`;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `ID` int(125) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `isActive` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `email`, `password`, `isActive`) VALUES
(1, 'abc@gmail.com', 'welcome', 1),
(2, 'nengkhoiba@gmail.com', 'welcome@1', 1),
(3, 'suresh@gmail.com', 'welcome', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Task`
--

DROP TABLE IF EXISTS `Task`;
CREATE TABLE IF NOT EXISTS `Task` (
  `ID` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `details` varchar(200) NOT NULL,
  `summary` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Task`
--

INSERT INTO `Task` (`ID`, `title`, `details`, `summary`) VALUES
(14, 'hello', 'world', 'this is a task'),
(15, 'hello', 'world', 'this is a task');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Task`
--
ALTER TABLE `Task`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(125) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `Task`
--
ALTER TABLE `Task`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
