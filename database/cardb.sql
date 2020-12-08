-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2020 at 06:53 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cardb`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `brname` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `managerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `empID` int(11) NOT NULL,
  `empname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `mgname` varchar(100) NOT NULL,
  `managerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productno` int(11) NOT NULL,
  `cartype` varchar(100) NOT NULL,
  `rate` int(11) NOT NULL,
  `availability` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `productname` varchar(100) NOT NULL,
  `images` varchar(100) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productno`, `cartype`, `rate`, `availability`, `description`, `branch`, `productname`, `images`) VALUES
(5, 'sdc', 1, 1, 'zdvf', 'it', 'sdv', NULL),
(6, 'sdc', 1, 1, 'zdvf', 'it', 'sdv', NULL),
(7, 'sdc', 1, 1233, 'esdf', 'it', 'sdv', NULL),
(8, 'sdc', 1, 1233, 'esdf', 'it', 'sdv', NULL),
(9, 'sdc', 1233, 1, 'qedsfv', 'it', 'sdv', NULL),
(10, 'sdc', 1233, 1, 'qedsfv', 'it', 'sdv', NULL),
(11, 'efwf', 1, 1, 'asdcvsdv', '1', 'abc', NULL),
(12, 'efwf', 1, 1, 'asdcvsdv', '1', 'abc', NULL),
(13, 'ds', 0, 1, 'dsacve', 'cd', 'x ', ''),
(14, 'ds', 0, 1, 'dsacve', 'cd', 'x ', ''),
(15, 'Mark', 1, 11, 'Descriptionxdczv', '1', 'Mark', NULL),
(16, 'Mark', 1, 11, 'Descriptionxdczv', '1', 'Mark', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `password`) VALUES
(1, 'abcd', 'abc'),
(2, 'abcd', 'lsaxwcjd'),
(3, 'abcd', 'zsxc'),
(4, 'abcd', 'zsxc'),
(6, 'abcd', 'sd'),
(7, 'abcd', 'xcv'),
(8, 'abcd', 'xcv'),
(9, 'abcd', 'asd'),
(10, 'abcd', 'asd'),
(12, 'asd', 'as'),
(14, 'asdas', 'sd'),
(16, 'krishna', 'parth'),
(17, 'krishnaa', 'hii'),
(18, 'krishnaaaa', 'parth'),
(19, 'krish', 'part'),
(20, 'yousha', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`brname`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`empID`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`managerID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productno`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
