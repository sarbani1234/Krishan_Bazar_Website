-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2021 at 07:48 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transport`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Sno` int(10) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `DateTime` datetime NOT NULL DEFAULT current_timestamp(),
  `File` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Sno`, `Username`, `Password`, `DateTime`, `File`) VALUES
(1, 'priya@email', '987', '2021-01-30 09:32:15', 'image/IMG_20200329_210248.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cab`
--

CREATE TABLE `cab` (
  `Sno` int(10) NOT NULL,
  `Id` varchar(50) NOT NULL,
  `Model` varchar(50) NOT NULL,
  `Company` text NOT NULL,
  `Description` text NOT NULL,
  `File` varchar(255) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `DateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tipper`
--

CREATE TABLE `tipper` (
  `Sno` int(10) NOT NULL,
  `Id` varchar(10) NOT NULL,
  `Model` varchar(50) NOT NULL,
  `Company` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `File` varchar(255) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `DateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `trailer`
--

CREATE TABLE `trailer` (
  `Sno` int(10) NOT NULL,
  `Model` varchar(50) NOT NULL,
  `Company` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `File` varchar(255) NOT NULL,
  `Id` varchar(10) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `DateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `trailercab`
--

CREATE TABLE `trailercab` (
  `Sno` int(10) NOT NULL,
  `Id` varchar(10) NOT NULL,
  `Model` varchar(50) NOT NULL,
  `Company` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `File` varchar(255) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `DateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vsignup`
--

CREATE TABLE `vsignup` (
  `Sno` int(10) NOT NULL,
  `Fname` text NOT NULL,
  `Lname` text NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile` bigint(10) NOT NULL,
  `Address` text NOT NULL,
  `City` text NOT NULL,
  `State` text NOT NULL,
  `Pin` int(6) NOT NULL,
  `Dob` date NOT NULL,
  `Viewid` varchar(10) NOT NULL,
  `Gender` text NOT NULL,
  `File` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vtypes`
--

CREATE TABLE `vtypes` (
  `Sno` int(10) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `File` varchar(255) NOT NULL,
  `DateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vtypes`
--

INSERT INTO `vtypes` (`Sno`, `Type`, `File`, `DateTime`) VALUES
(1, 'cab', 'image/cabcard.png', '2021-01-06 09:45:39'),
(2, 'trailer', 'image/trailercard.jpg', '2021-01-06 09:45:39'),
(3, 'trailercab', 'image/trailercabcard.jpg', '2021-01-06 09:46:39'),
(4, 'tipper', 'image/tippercard.jpg', '2021-01-06 09:46:39');

-- --------------------------------------------------------

--
-- Table structure for table `waiting`
--

CREATE TABLE `waiting` (
  `Sno` int(10) NOT NULL,
  `Id` varchar(50) NOT NULL,
  `Model` varchar(50) NOT NULL,
  `Company` text NOT NULL,
  `Description` text NOT NULL,
  `File` varchar(255) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `vehicle` text NOT NULL,
  `Email` varchar(50) NOT NULL,
  `DateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Sno`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `cab`
--
ALTER TABLE `cab`
  ADD PRIMARY KEY (`Sno`),
  ADD UNIQUE KEY `Id` (`Id`);

--
-- Indexes for table `tipper`
--
ALTER TABLE `tipper`
  ADD PRIMARY KEY (`Sno`),
  ADD UNIQUE KEY `Id` (`Id`);

--
-- Indexes for table `trailer`
--
ALTER TABLE `trailer`
  ADD PRIMARY KEY (`Sno`),
  ADD UNIQUE KEY `Id` (`Id`);

--
-- Indexes for table `trailercab`
--
ALTER TABLE `trailercab`
  ADD PRIMARY KEY (`Sno`),
  ADD UNIQUE KEY `Id` (`Id`);

--
-- Indexes for table `vsignup`
--
ALTER TABLE `vsignup`
  ADD PRIMARY KEY (`Sno`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `vtypes`
--
ALTER TABLE `vtypes`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `waiting`
--
ALTER TABLE `waiting`
  ADD PRIMARY KEY (`Sno`),
  ADD UNIQUE KEY `Id` (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cab`
--
ALTER TABLE `cab`
  MODIFY `Sno` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipper`
--
ALTER TABLE `tipper`
  MODIFY `Sno` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trailer`
--
ALTER TABLE `trailer`
  MODIFY `Sno` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trailercab`
--
ALTER TABLE `trailercab`
  MODIFY `Sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vsignup`
--
ALTER TABLE `vsignup`
  MODIFY `Sno` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vtypes`
--
ALTER TABLE `vtypes`
  MODIFY `Sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `waiting`
--
ALTER TABLE `waiting`
  MODIFY `Sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
