-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2021 at 05:08 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agrodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(120) CHARACTER SET latin1 DEFAULT NULL,
  `UserName` varchar(120) CHARACTER SET latin1 DEFAULT NULL,
  `Images` varchar(120) NOT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(120) CHARACTER SET latin1 DEFAULT NULL,
  `Password` varchar(120) CHARACTER SET latin1 DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `Images`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Sarbani', 'sarbani', 'bean.jpg', 9873216548, 'sarbani@gmail.com', 'Test123', '2020-07-25 18:44:02'),
(2, 'Alok', 'avik', 'a0c66c9e5580cd2f4ee28c1f72e924411595782676.jpg', 9873216548, 'avik@gmail.com', 'Test@123', '2020-07-26 16:57:56');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `ID` int(10) NOT NULL,
  `CategoryName` varchar(120) DEFAULT NULL,
  `CategoryId` varchar(50) DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`ID`, `CategoryName`, `CategoryId`, `PostingDate`) VALUES
(5, 'Fruits', '990', '2020-07-22 18:53:42'),
(6, 'Nuts', '201', '2020-07-23 18:24:03'),
(7, 'Grains', 'g707', '2020-07-25 05:37:13'),
(10, 'Vegetables', '4', '2020-07-26 06:41:10');

-- --------------------------------------------------------

--
-- Table structure for table `tblcustomer`
--

CREATE TABLE `tblcustomer` (
  `ID` int(10) NOT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `CustomerId` varchar(120) DEFAULT NULL,
  `Gender` varchar(120) DEFAULT NULL,
  `Address` mediumtext DEFAULT NULL,
  `City` varchar(120) DEFAULT NULL,
  `Pincode` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `Images` varchar(200) DEFAULT NULL,
  `CustomerRegdate` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcustomer`
--

INSERT INTO `tblcustomer` (`ID`, `FullName`, `Email`, `MobileNumber`, `CustomerId`, `Gender`, `Address`, `City`, `Pincode`, `Password`, `Images`, `CustomerRegdate`) VALUES
(2, 'kaberi', 'kaberi@gmail.com', 7063020299, 'kab123', 'Female', '20/21 Newton', 'Asansol', '713205', 'e10adc3949ba59abbe56e057f20f883e', 'ba46c2ed78d7a2172b704aeb7564ef7a1595617236.jpg', '2020-07-24 19:00:57'),
(3, 'Payel', 'payel@gmail.com', 12345678, '303', 'Female', 'Newtown', 'Kolkata', '70001', '827ccb0eea8a706c4c34a16891f84e7b', 'ba46c2ed78d7a2172b704aeb7564ef7a1595656281.jpg', '2020-08-06 18:31:26'),
(4, 'Anupam', 'anupam@gmail.com', 9874563210, '333', 'Male', 'Salt Lake', 'Kolkata', '70001', 'e10adc3949ba59abbe56e057f20f883e', '30454685056e7153dce912ab719521201596739107.jpg', '2020-08-06 18:41:19');

-- --------------------------------------------------------

--
-- Table structure for table `tblfarmer`
--

CREATE TABLE `tblfarmer` (
  `ID` int(10) NOT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `FarmerId` varchar(120) DEFAULT NULL,
  `Gender` varchar(120) NOT NULL,
  `Address` mediumtext NOT NULL,
  `Pincode` int(10) NOT NULL,
  `City` varchar(120) NOT NULL,
  `District` varchar(120) NOT NULL,
  `State` varchar(120) NOT NULL,
  `DOB` date NOT NULL,
  `Images` varchar(200) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `FarmerRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblfarmer`
--

INSERT INTO `tblfarmer` (`ID`, `FullName`, `Email`, `MobileNumber`, `FarmerId`, `Gender`, `Address`, `Pincode`, `City`, `District`, `State`, `DOB`, `Images`, `Password`, `FarmerRegdate`) VALUES
(102, 'Sarbani Chatterjee', 'abcd@gmail.com', 9876543214, '', 'Female', '', 0, '', '', '', '0000-00-00', '', '827ccb0eea8a706c4c34a16891f84e7b', '2020-07-20 17:28:40'),
(103, 'sayoni', 'qwer@gmail.com', 3698521478, '', 'Female', '', 0, '', '', '', '0000-00-00', '', '827ccb0eea8a706c4c34a16891f84e7b', '2020-07-20 17:30:37'),
(104, 'Pintu', 'pintu@gmail.com', 1239874562, '', 'Male', '', 0, '', '', '', '0000-00-00', '', '5d93ceb70e2bf5daa84ec3d0cd2c731a', '2020-07-20 18:47:40'),
(105, 'Pintu', 'zzzz@gmail.com', 9999666632, '', 'Male', '', 0, '', '', '', '0000-00-00', '', 'e8dc4081b13434b45189a720b77b6818', '2020-07-20 18:49:33'),
(106, 'kaberi', 'kaberi@gmail.com', 7063020299, 'kaberi123', 'Female', 'addr', 0, 'city', 'district', 'state', '0000-00-00', '', 'ec270cdff833ac0459f6362f93a802af', '2020-07-21 14:50:32'),
(107, 'avik', 'avik@gmail.com', 9966332255, 'avik123', 'Male', '20/21 Newton', 713205, 'durgapur', 'Burdwan', 'West Bengal', '2012-02-08', '5105e1a92a4644b09bdfbe9c24e81e4d1595359169.png', 'e10adc3949ba59abbe56e057f20f883e', '2020-07-21 19:19:29'),
(108, 'avik', 'avikpp@gmail.com', 9966332299, 'avik123', 'Male', '20/21 Newton', 713205, 'durgapur', 'Burdwan', 'West Bengal', '2003-08-14', 'dfc01e9ca114924c21f8984f454b914b1595359247.jpg', '082d4dbe51f10cf8eafc5dc4d1480bd8', '2020-07-21 19:20:47'),
(109, 'Sarbani', 'bani@gmail.com', 9922884411, 'bani123', 'Female', '21/22 Ashok Avenue', 713206, 'Durgapur', 'Burdwan', 'West Bengal', '1999-08-04', 'dfc01e9ca114924c21f8984f454b914b1595429346.jpg', 'e10adc3949ba59abbe56e057f20f883e', '2020-07-22 14:49:06'),
(110, 'Rita', 'rita@gmail.com', 9988774455, 'rita123', 'Female', 'City centre', 713216, 'Durgapur', 'Burdwan', 'West Bengal', '1999-02-04', '8a12f59d64831c376ef692189986d7f41595430516jpeg', 'e10adc3949ba59abbe56e057f20f883e', '2020-07-22 15:08:36'),
(111, 'Sarbani', 'saru@gmail.com', 3691234567, 'saru123', 'Female', 'Newton Avenue', 713205, 'durgapur', 'Burdwan', 'West Bengal', '1998-01-28', 'dfc01e9ca114924c21f8984f454b914b1595430623.jpg', 'e10adc3949ba59abbe56e057f20f883e', '2020-07-22 15:10:23'),
(112, 'Sarbani', 'saru33@gmail.com', 3691234599, 'bani123', 'Female', 'Newton Avenue', 713205, 'durgapur', 'Burdwan', 'West Bengal', '1999-02-03', 'dfc01e9ca114924c21f8984f454b914b1595430712.jpg', 'e10adc3949ba59abbe56e057f20f883e', '2020-07-22 15:11:52'),
(113, 'Sarbani', 'saru99@gmail.com', 3691234588, 'saru123', 'Female', 'Newton Avenue', 713205, 'durgapur', 'Burdwan', 'West Bengal', '2002-06-05', '8a12f59d64831c376ef692189986d7f41595430794jpeg', 'e10adc3949ba59abbe56e057f20f883e', '2020-07-22 15:13:14'),
(114, 'Prasenjit', 'prasan@gmail.com', 6543219874, 'p101', 'Male', 'Behala', 700008, 'Kolkata', 'Burdwan', 'West Bengal', '1971-02-04', 'a0c66c9e5580cd2f4ee28c1f72e924411595443596.jpg', 'e10adc3949ba59abbe56e057f20f883e', '2020-07-22 15:17:40'),
(115, 'Pintu', 'pintu33@gmail.com', 1239874599, 'p109', 'Male', '20/21 Newton', 713205, 'durgapur', 'Burdwan', 'West Bengal', '1996-02-02', '8d8981a607a185b73d27306640aaa5491595484614jpeg', '827ccb0eea8a706c4c34a16891f84e7b', '2020-07-23 06:10:14'),
(116, 'Avik', 'avi00@gmail.com', 1472356897, 'avi992', 'Male', 'Birati', 700051, 'Kolkata', 'Burdwan', 'West Bengal', '1995-05-09', '4f8490bbdddf6ca2cd95779057e7796d1595488318.jpg', '827ccb0eea8a706c4c34a16891f84e7b', '2020-07-23 07:07:07'),
(117, 'Rintu', 'rintu@gmail.com', 23568920, 'r111', 'Male', '20/21 Newton', 713205, 'durgapur', 'Burdwan', 'West Bengal', '1999-02-03', '661e2c86240782eb2fcb017f2b16d1d11595517429.jpg', '827ccb0eea8a706c4c34a16891f84e7b', '2020-07-23 15:17:09'),
(118, 'Anik', 'anu@gmail.com', 3692581235, 'anu123', 'Male', 'MAMC', 713206, 'Durgapur', 'Burdwan', 'West Bengal', '1999-03-05', '946b04e99fc35f30920862dc1e2732cd1595528577.jpg', 'e10adc3949ba59abbe56e057f20f883e', '2020-07-23 18:21:08'),
(119, 'Pijus', 'paresh@gmail.com', 3322114569, 'p101', 'Male', 'Behala', 700001, 'Kolkata', 'Burdwan', 'West Bengal', '1997-03-08', '93e34dd6c16992810f7268ea60d91f001595655258.jpg', '827ccb0eea8a706c4c34a16891f84e7b', '2020-07-25 05:32:19'),
(120, 'lalalala', 'avik99@gmail.com', 47777777, 'alu', 'Male', 'ali', 2147483647, 'alu', 'alu', 'alu', '0001-01-01', 'dd980f341f542df3dee50b17ebd716861595874856.jpg', '81dc9bdb52d04dc20036dbd8313ed055', '2020-07-26 06:12:30'),
(121, 'Mousumi', 'mou123@gmail.com', 3691234000, '999', 'Female', 'Jadavpur', 700001, 'Kolkata', 'Burdwan', 'West Bengal', '1998-03-06', '6ee112f6e6544ddd1e3c8a2534cf7afc1596732715.jpg', 'e10adc3949ba59abbe56e057f20f883e', '2020-08-06 16:51:55'),
(122, 'Anindita', 'ani@gmail.com', 3210546987, 'A@777', 'Female', 'Newton Avenue', 713205, 'durgapur', 'Burdwan', 'West Bengal', '2006-02-02', '8a12f59d64831c376ef692189986d7f41596897434jpeg', '25f9e794323b453885f5181f1b624d0b', '2020-08-08 14:37:14'),
(123, 'Dibyajyoti', 'dibya@gmail.com', 123459789, 'D@999', 'Male', 'Newton Avenue', 713205, 'durgapur', 'Burdwan', 'West Bengal', '2003-08-09', '717797c75ec943543c433351def42ab41596899275.jpg', '25f9e794323b453885f5181f1b624d0b', '2020-08-08 15:07:55'),
(124, 'Sujan', 'sujan@gmail.com', 213542688, 'S@202', 'Male', '20/21 Newton', 713205, 'durgapur', 'Burdwan', 'West Bengal', '1994-03-04', '40b7d1bd699f9d407df45c21c389aac91596901115.jpg', '25f9e794323b453885f5181f1b624d0b', '2020-08-08 15:38:35');

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(120) DEFAULT NULL,
  `PageTitle` varchar(120) DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(20) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`) VALUES
(1, 'aboutus', 'About Us', '        We are Pleased to introduce ourselves as focus,a professional organization. We are here to prominent the connection and relationships between a farmer, a vendor and customers. With a vision to explore and harness the farming talents of farmers and how the vendor as well the customers can buy the required items, we have come up with a new concept of KRISHAN BAZAR Websites. <div><br></div>', 'qwer@gmail.com', 9876543215, '2020-07-27 18:04:59'),
(2, 'contactus', 'Contact Us', 'City Center, near Aquapolis<div>Durgapur, India</div>', 'qwer@gmail.com', 98765473215, '2020-07-02 16:54:12');

-- --------------------------------------------------------

--
-- Table structure for table `tblproducts`
--

CREATE TABLE `tblproducts` (
  `ID` int(10) NOT NULL,
  `CategoryName` varchar(120) DEFAULT NULL,
  `ProductName` varchar(120) DEFAULT NULL,
  `ProductQuantity` varchar(120) DEFAULT NULL,
  `ProductPrice` decimal(10,0) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblproducts`
--

INSERT INTO `tblproducts` (`ID`, `CategoryName`, `ProductName`, `ProductQuantity`, `ProductPrice`, `PostingDate`, `UpdationDate`) VALUES
(1, 'Vegetables', 'Brinjal', '1kg', '60', '2020-07-22 06:41:28', '2020-07-23 18:25:59'),
(2, 'Vegetables', 'Onion', '500gm', '25', '2020-07-22 06:47:14', '2020-07-22 06:47:14'),
(3, 'Vegetables', 'Onion', '500gm', '25', '2020-07-22 06:47:14', '2020-07-22 06:47:14'),
(4, 'Vegetables', 'Carrot', '200gm', '30', '2020-07-22 06:48:17', '2020-07-22 06:48:17'),
(5, 'Fruits', 'Apple', '1 kg', '20', '2020-07-22 18:54:08', '2020-07-22 18:54:08'),
(6, 'Nuts', 'Walnuts', '200gm', '50', '2020-07-23 18:25:27', '2020-07-25 05:39:34'),
(7, 'Grains', 'Rice', '1 kg', '20', '2020-07-25 05:38:44', '2020-07-25 05:38:44'),
(8, 'Vegetables', 'alu', '0kg', '0', '2020-07-26 06:41:35', '2020-07-26 06:41:35'),
(9, 'Vegetables', 'Potato', '10 kg', '30', '2020-07-27 17:23:04', '2020-07-27 17:23:04');

-- --------------------------------------------------------

--
-- Table structure for table `tblvendor`
--

CREATE TABLE `tblvendor` (
  `ID` int(10) NOT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `CompanyName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(20) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `VendorId` varchar(120) DEFAULT NULL,
  `Gender` varchar(10) NOT NULL,
  `Address` mediumtext NOT NULL,
  `Pincode` int(10) NOT NULL,
  `City` varchar(120) NOT NULL,
  `District` varchar(120) NOT NULL,
  `State` varchar(120) NOT NULL,
  `Images` varchar(120) NOT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `VendorRegdate` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblvendor`
--

INSERT INTO `tblvendor` (`ID`, `FullName`, `CompanyName`, `MobileNumber`, `Email`, `VendorId`, `Gender`, `Address`, `Pincode`, `City`, `District`, `State`, `Images`, `Password`, `VendorRegdate`) VALUES
(6, 'Pintu', 'Dutta Grocery Pvt Ltd.', 1239874562, 'pintu@gmail.com', '333', 'Male', '20/21 Newton', 713205, 'durgapur', 'Burdwan', 'West Bengal', '0e6c23ec367a64248d8c2f05a4257bec1595877067.jpg', '827ccb0eea8a706c4c34a16891f84e7b', '2020-08-06 18:35:49'),
(7, 'Alok', 'Chatterjee & sons ltd.', 3216540123, 'sss@gmail.com', 'sa36', 'Male', 'Newton', 713205, 'durgapur', 'Burdwan', 'West Bengal', 'a0c66c9e5580cd2f4ee28c1f72e924411595528978.jpg', 'e10adc3949ba59abbe56e057f20f883e', '2020-07-23 18:29:59'),
(8, 'Alok', 'Sayoni Pvt Ltd.', 12003600, 'alok@gmail.com', 'alok5455', 'Male', '20/21 Newton', 713205, 'durgapur', 'Burdwan', 'West Bengal', '7bdb481af5ca0085e060b64adcc4dc591595611135.jpg', '827ccb0eea8a706c4c34a16891f84e7b', '2020-07-24 17:18:55'),
(9, 'Ram', 'Pal Grocery stores', 12345689, 'ram@gmail.com', 'r123', 'Male', 'MAMC', 713205, 'Durgapur', 'Burdwan', 'West Bengal', '40b7d1bd699f9d407df45c21c389aac91595655897.jpg', '827ccb0eea8a706c4c34a16891f84e7b', '2020-07-25 05:44:57'),
(10, 'alu', 'alu', 1111111111, 'alu@gmail.com', '666', 'Male', 'alu', 1234, 'alu', 'alu', 'alu', '571e32a9497bc9ce85a05dda04543fd61595745884.jpg', '81dc9bdb52d04dc20036dbd8313ed055', '2020-08-06 18:35:32'),
(11, 'Amartya', 'Amartya pvt ltd.', 3690258741, 'amartya@gmail.com', NULL, 'Male', 'Rajarhat', 70002, 'Kolkata', 'Burdwan', 'West Bengal', 'dd980f341f542df3dee50b17ebd716861596739863.jpg', 'e10adc3949ba59abbe56e057f20f883e', '2020-08-06 18:51:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcustomer`
--
ALTER TABLE `tblcustomer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblfarmer`
--
ALTER TABLE `tblfarmer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblproducts`
--
ALTER TABLE `tblproducts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblvendor`
--
ALTER TABLE `tblvendor`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tblcustomer`
--
ALTER TABLE `tblcustomer`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblfarmer`
--
ALTER TABLE `tblfarmer`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblproducts`
--
ALTER TABLE `tblproducts`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblvendor`
--
ALTER TABLE `tblvendor`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
