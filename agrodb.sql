-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2021 at 05:03 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

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
-- Table structure for table `customer_bill`
--

CREATE TABLE `customer_bill` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `ProductId` int(10) NOT NULL,
  `Quantity` int(10) NOT NULL,
  `Invoice_No` int(11) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `email` varchar(120) NOT NULL,
  `mobile_no` bigint(12) DEFAULT NULL,
  `address` mediumtext NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` int(10) NOT NULL,
  `cardname` varchar(255) NOT NULL,
  `cardnumber` varchar(20) NOT NULL,
  `expdate` varchar(255) NOT NULL,
  `cvv` int(5) NOT NULL,
  `InvoiceGenDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_bill`
--

INSERT INTO `customer_bill` (`order_id`, `customer_id`, `ProductId`, `Quantity`, `Invoice_No`, `name`, `email`, `mobile_no`, `address`, `city`, `state`, `zip`, `cardname`, `cardnumber`, `expdate`, `cvv`, `InvoiceGenDate`) VALUES
(1, 10, 0, 0, 758957676, 'Chetan Bhagat', 'chetan@gmail.com', 9447208440, 'Belghoria', 'Kolkata', 'West Bengal', 700001, '_\nF.\n??2F}??L?V???B??j?v?+?X???', 't????}/򨽛!Fʷ??B??j?', '8?P?N??#r?R??]6', 0, '2021-03-13 18:02:14'),
(2, 10, 0, 0, 958847803, 'Chetan Bhagat', 'chetan@gmail.com', 9447208440, 'Belghoria', 'Kolkata', 'West Bengal', 700001, '9r}[??~H?P?2??o?', '#?{?????_??????B', '[????s??a?]?4??', 0, '2021-03-17 17:36:51'),
(3, 10, 0, 0, 675454842, 'Chetan Bhagat', 'chetan@gmail.com', 9447208440, 'Belghoria', 'Kolkata', 'West Bengal', 700001, '9r}[??~H?P?2??o?', 'C???j??kZ!y??,???B', '????????X?.??', 0, '2021-03-20 18:52:31'),
(4, 10, 4, 1, 614666499, 'Chetan Bhagat', 'chetan@gmail.com', 9447208440, 'Belghoria', 'Kolkata', 'West Bengal', 700001, '9r}[??~H?P?2??o?', '??????$N?J?w????B', '????????X?.??', 0, '2021-03-20 19:30:29'),
(5, 10, 1, 1, 249349979, 'Chetan Bhagat', 'chetan@gmail.com', 9447208440, 'Belghoria', 'Kolkata', 'West Bengal', 700001, '9r}[??~H?P?2??o?', 't????}/򨽛!Fʷ??B??j?', '8?P?N??#r?R??]6', 0, '2021-03-20 19:37:08'),
(6, 10, 4, 1, 833297958, 'Chetan Bhagat', 'chetan@gmail.com', 9447208440, 'Belghoria', 'Kolkata', 'West Bengal', 700001, '9r}[??~H?P?2??o?', '?U/??\0????_?v?????B', '8?P?N??#r?R??]6', 0, '2021-03-20 19:39:13'),
(7, 10, 3, 1, 521572412, 'Chetan Bhagat', 'chetan@gmail.com', 9447208440, 'Belghoria', 'Kolkata', 'West Bengal', 700001, '9r}[??~H?P?2??o?', '\Z?6?j????7}???\0???B', '??n???????\'???', 0, '2021-03-20 19:45:31'),
(8, 10, 1, 198, 521572412, 'Chetan Bhagat', 'chetan@gmail.com', 9447208440, 'Belghoria', 'Kolkata', 'West Bengal', 700001, '9r}[??~H?P?2??o?', '\Z?6?j????7}???\0???B', '??n???????\'???', 0, '2021-03-20 19:45:31'),
(9, 10, 1, 1, 148651918, 'Chetan Bhagat', 'chetan@gmail.com', 9447208440, 'Belghoria', 'Kolkata', 'West Bengal', 700001, '9r}[??~H?P?2??o?', '??i\0i?&?\'?Kp{??&???B', '8?P?N??#r?R??]6', 0, '2021-03-20 19:51:38'),
(10, 10, 4, 1, 148651918, 'Chetan Bhagat', 'chetan@gmail.com', 9447208440, 'Belghoria', 'Kolkata', 'West Bengal', 700001, '9r}[??~H?P?2??o?', '??i\0i?&?\'?Kp{??&???B', '8?P?N??#r?R??]6', 0, '2021-03-20 19:51:38'),
(11, 10, 1, 1, 495562799, 'Chetan Bhagat', 'chetan@gmail.com', 9447208440, 'Belghoria', 'Kolkata', 'West Bengal', 700001, '9r}[??~H?P?2??o?', '??i\0i?&?\'?Kp{??&???B', '8?P?N??#r?R??]6', 0, '2021-03-20 19:52:50'),
(12, 10, 4, 198, 495562799, 'Chetan Bhagat', 'chetan@gmail.com', 9447208440, 'Belghoria', 'Kolkata', 'West Bengal', 700001, '9r}[??~H?P?2??o?', '??i\0i?&?\'?Kp{??&???B', '8?P?N??#r?R??]6', 0, '2021-03-20 19:52:50'),
(13, 10, 1, 1, 276959222, 'Chetan Bhagat', 'chetan@gmail.com', 9447208440, 'Belghoria', 'Kolkata', 'West Bengal', 700001, 'p?.?\\??J?_&???I', '??i\0i?&?\'?Kp{??&???B', '8?P?N??#r?R??]6', 0, '2021-03-20 19:59:39'),
(14, 10, 4, 198, 276959222, 'Chetan Bhagat', 'chetan@gmail.com', 9447208440, 'Belghoria', 'Kolkata', 'West Bengal', 700001, 'p?.?\\??J?_&???I', '??i\0i?&?\'?Kp{??&???B', '8?P?N??#r?R??]6', 0, '2021-03-20 19:59:39');

-- --------------------------------------------------------

--
-- Table structure for table `customer_cart`
--

CREATE TABLE `customer_cart` (
  `cart_id` int(10) NOT NULL,
  `CustomerName` varchar(120) NOT NULL,
  `Product_Id` int(11) NOT NULL,
  `Product_name` varchar(120) NOT NULL,
  `Product_quantity` int(11) NOT NULL,
  `Category` varchar(120) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Unit_price` decimal(10,2) NOT NULL,
  `Total_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_cart`
--

INSERT INTO `customer_cart` (`cart_id`, `CustomerName`, `Product_Id`, `Product_name`, `Product_quantity`, `Category`, `Quantity`, `Unit_price`, `Total_price`) VALUES
(1, 'Rahul', 15, 'rice', 1, 'Grains', 1, '20.00', '20.00'),
(2, 'Rahul', 18, 'rice', 1, 'Grains', 1, '20.00', '20.00'),
(3, 'Rahul', 16, 'walnuts', 14, 'Nuts', 1, '20.00', '20.00'),
(4, 'Chetan Bhagat', 13, 'Pineapple', 2, 'Fruits', 1, '20.00', '20.00'),
(5, 'Chetan Bhagat', 15, 'rice', 1, 'Grains', 1, '20.00', '20.00'),
(6, 'Chetan Bhagat', 4, 'carrot', 1, 'Vegetables', 1, '100.00', '100.00'),
(7, 'Chetan Bhagat', 1, 'rice', 1, 'Grains', 6, '20.00', '120.00'),
(8, 'Chetan Bhagat', 1, 'rice', 1, 'Grains', 2, '20.00', '40.00'),
(9, 'Chetan Bhagat', 1, 'rice', 1, 'Grains', 1, '20.00', '20.00'),
(10, 'Chetan Bhagat', 1, 'rice', 1, 'Grains', 1, '20.00', '20.00'),
(11, 'Chetan Bhagat', 4, 'carrot', 1, 'Vegetables', 1, '100.00', '100.00'),
(12, 'Chetan Bhagat', 1, 'rice', 1, 'Grains', 1, '20.00', '20.00'),
(13, 'Chetan Bhagat', 4, 'carrot', 1, 'Vegetables', 1, '100.00', '100.00'),
(14, 'Chetan Bhagat', 3, 'walnuts', 14, 'Nuts', 1, '20.00', '20.00'),
(15, 'Chetan Bhagat', 1, 'rice', 1, 'Grains', 198, '20.00', '3.00'),
(16, 'Chetan Bhagat', 1, 'rice', 1, 'Grains', 1, '20.00', '20.00'),
(17, 'Chetan Bhagat', 4, 'carrot', 1, 'Vegetables', 1, '100.00', '100.00'),
(18, 'Chetan Bhagat', 1, 'rice', 1, 'Grains', 1, '20.00', '20.00'),
(19, 'Chetan Bhagat', 4, 'carrot', 1, 'Vegetables', 198, '100.00', '19.00'),
(20, 'Chetan Bhagat', 1, 'rice', 1, 'Grains', 1, '20.00', '20.00'),
(21, 'Chetan Bhagat', 4, 'carrot', 1, 'Vegetables', 198, '100.00', '19.00');

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
-- Table structure for table `tblapprove`
--

CREATE TABLE `tblapprove` (
  `ID` int(10) NOT NULL,
  `FarmerName` varchar(120) NOT NULL,
  `CategoryName` varchar(120) NOT NULL,
  `ProductName` varchar(120) NOT NULL,
  `ProductQuantity` varchar(120) NOT NULL,
  `ProductPrice` decimal(10,2) NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblapprove`
--

INSERT INTO `tblapprove` (`ID`, `FarmerName`, `CategoryName`, `ProductName`, `ProductQuantity`, `ProductPrice`, `PostingDate`, `UpdationDate`) VALUES
(6, 'Monami Paul', 'Grains', 'rice', '1', '20.00', '2021-03-13 17:06:24', '2021-03-13 17:06:24'),
(7, 'Monami Paul', 'Nuts', 'walnuts', '14g', '20.00', '2021-03-13 17:06:39', '2021-03-13 17:06:39'),
(8, 'Monami Paul', 'Vegetables', 'carrot', '1kg', '100.00', '2021-03-13 18:14:37', '2021-03-13 18:14:37'),
(9, 'Udai', 'Fruits', 'Banana', '1kg', '30.00', '2021-03-22 04:43:22', '2021-03-22 04:43:22'),
(10, 'Udai', 'Nuts', 'Almonds', '3gm', '20.00', '2021-03-22 04:43:42', '2021-03-22 04:43:42'),
(11, 'Udai', 'abcd', 'abcde', '2', '100.00', '2021-03-24 15:53:29', '2021-03-24 15:53:29');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `ID` int(10) NOT NULL,
  `FarmerName` varchar(120) NOT NULL,
  `CategoryName` varchar(120) DEFAULT NULL,
  `CategoryId` varchar(50) DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`ID`, `FarmerName`, `CategoryName`, `CategoryId`, `PostingDate`) VALUES
(5, '', 'Fruits', '990', '2020-07-22 18:53:42'),
(6, '', 'Nuts', '201', '2020-07-23 18:24:03'),
(7, '', 'Grains', 'g707', '2020-07-25 05:37:13'),
(10, '', 'Vegetables', '4', '2020-07-26 06:41:10'),
(11, '', 'Spices', 'c121', '2021-03-19 18:46:32'),
(12, 'Chinta', 'Fruits', 'f101', '2021-03-23 05:50:08'),
(13, 'Udai', 'abcd', '1234', '2021-03-24 15:51:52');

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
  `State` varchar(50) NOT NULL,
  `Pincode` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `Images` varchar(200) DEFAULT NULL,
  `CustomerRegdate` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcustomer`
--

INSERT INTO `tblcustomer` (`ID`, `FullName`, `Email`, `MobileNumber`, `CustomerId`, `Gender`, `Address`, `City`, `State`, `Pincode`, `Password`, `Images`, `CustomerRegdate`) VALUES
(2, 'kaberi', 'kaberi@gmail.com', 7063020299, 'kab123', 'Female', '20/21 Newton', 'Asansol', '', '713205', 'e10adc3949ba59abbe56e057f20f883e', 'ba46c2ed78d7a2172b704aeb7564ef7a1595617236.jpg', '2020-07-24 19:00:57'),
(3, 'Payel', 'payel@gmail.com', 12345678, '303', 'Female', 'Newtown', 'Kolkata', '', '70001', '827ccb0eea8a706c4c34a16891f84e7b', 'ba46c2ed78d7a2172b704aeb7564ef7a1595656281.jpg', '2020-08-06 18:31:26'),
(4, 'Anupam', 'anupam@gmail.com', 9874563210, '333', 'Male', 'Salt Lake', 'Kolkata', '', '70001', 'e10adc3949ba59abbe56e057f20f883e', '30454685056e7153dce912ab719521201596739107.jpg', '2020-08-06 18:41:19'),
(5, 'Rahul', 'saru@gmail.com', 3698521478, NULL, 'Male', 'Newtown', 'Kolkata', '', '71320005', '25f9e794323b453885f5181f1b624d0b', 'a8a5b41b79656d8075e3a21dcf5cfc5d1614790069.jpg', '2021-03-03 16:47:49'),
(6, 'Alo', 'alu@gmail.com', 1239874562, NULL, '', '20/21 Newton', 'durgapur', '', '713205', '81dc9bdb52d04dc20036dbd8313ed055', '2a4aed4c724cd799f870a74a0552da4a1614802636.jpg', '2021-03-03 20:17:16'),
(7, 'balu', 'balu@gmail.com', 1111111111, NULL, 'Female', 'alu', 'alu', '', '1234', '827ccb0eea8a706c4c34a16891f84e7b', 'ec3483473e123698ca909cbaee52b20a1614959962.jpg', '2021-03-05 15:59:22'),
(8, 'Kiva Itarahb', 'kiva@gmail.com', 9874563214, NULL, 'Male', 'Rajarhat', 'Kolkata', 'West Bengal', '71001', '40c2ef3cad0e1c042463b67f592f8c14', 'f4d19bfd4986f41fe51f8a2984bdb68c1615127047.jpg', '2021-03-07 14:24:07'),
(9, 'Kiva Itarahb', 'avisaru@gmail.com', 9874563217, NULL, 'Female', 'Rajarhat', 'Kolkata', 'West Bengal', '71001', 'e10adc3949ba59abbe56e057f20f883e', '2eaa0c240b4b1a82d07bae77f2ef45781615127301.jpg', '2021-03-07 14:28:21'),
(10, 'Chetan Bhagat', 'chetan@gmail.com', 9447208440, NULL, 'Male', 'Belghoria', 'Kolkata', 'West Bengal', '700001', 'ba0e1dfea8a44a98e755c036338277dc', '1d1965a85e5e3e00c3c12f255a7737d61615286604.png', '2021-03-09 10:43:24'),
(11, 'Saheli', 'saheli@gmail.com', 9475398607, NULL, 'Female', 'Newtown', 'Kolkata', 'West Bengal', '71320005', 'e40f01afbb1b9ae3dd6747ced5bca532', 'afa682ac15a440fb2dcaa6c1742198af1615294207.jpg', '2021-03-09 12:50:07'),
(12, 'Poulami Das', 'pou@gmail.com', 9880147227, NULL, 'Female', 'Baguihati', 'Kolkata', 'West Bengal', '700051', 'd1a340ccb32a016e46e71428be3c0810', '9a4701389a060c742f220818f1d700e11615355948.jpg', '2021-03-10 05:59:08'),
(13, 'Kalyani', 'kal@gmail.com', 8877445874, NULL, 'Female', 'Birati', 'Kolkata', 'West Bengal', '700051', '827ccb0eea8a706c4c34a16891f84e7b', 'c972b671387d0b288857996d43d7ead51616479679.jpg', '2021-03-23 06:07:59'),
(14, 'Tithi', 'tithi@gmail.com', 9947568740, NULL, 'Female', '20/01 Newton Avenue', 'Durgapur', 'West Bengal', '713205', '827ccb0eea8a706c4c34a16891f84e7b', '70d2c0f1ef3935f03a0c45c3ccf179c41616480117.jpg', '2021-03-23 06:15:17');

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
(124, 'Sujan', 'sujan@gmail.com', 213542688, 'S@202', 'Male', '20/21 Newton', 713205, 'durgapur', 'Burdwan', 'West Bengal', '1994-03-04', '40b7d1bd699f9d407df45c21c389aac91596901115.jpg', '25f9e794323b453885f5181f1b624d0b', '2020-08-08 15:38:35'),
(125, 'Monami Paul', 'monami@gmail.com', 9887441154, NULL, 'Female', 'Lataguri', 147854, 'Dooars', 'Burdwan', 'West Bengal', '1996-02-06', 'b4ea98d1e48981f04296093c84f201d91615371804.jpg', '6ebe76c9fb411be97b3b0d48b791a7c9', '2021-03-10 10:23:24'),
(126, 'Udai', 'udai@gmail.com', 9988775541, NULL, 'Male', 'Lemon grass', 713216, 'Durgapur', 'Burdwan', 'West Bengal', '1996-06-11', 'de041060d2dd7e05a5a6dbf89974ea341616177151.jpg', '25f9e794323b453885f5181f1b624d0b', '2021-03-19 18:05:51'),
(127, 'Chinta', 'chinta@gmail.com', 7700145598, NULL, 'Female', 'Newton Avenue', 713205, 'durgapur', 'Burdwan', 'West Bengal', '2002-02-23', '0b095ecb11d0b6b0277e3edf9dddf61a1616477503.jpg', '49df450d9c13a46c57adb7792e4b946a', '2021-03-23 05:31:43');

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
  `FarmerName` varchar(120) NOT NULL,
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

INSERT INTO `tblproducts` (`ID`, `FarmerName`, `CategoryName`, `ProductName`, `ProductQuantity`, `ProductPrice`, `PostingDate`, `UpdationDate`) VALUES
(1, 'Monami Paul', 'Grains', 'rice', '1', '20', '2021-03-17 17:23:12', '2021-03-17 17:23:12'),
(2, 'Monami Paul', 'Grains', 'rice', '1', '20', '2021-03-17 17:23:23', '2021-03-17 17:23:23'),
(3, 'Monami Paul', 'Nuts', 'walnuts', '14g', '20', '2021-03-17 17:23:46', '2021-03-17 17:23:46'),
(4, 'Monami Paul', 'Vegetables', 'carrot', '1kg', '100', '2021-03-17 17:23:51', '2021-03-17 17:23:51'),
(5, 'Udai', 'Fruits', 'Banana', '1kg', '30', '2021-03-22 04:44:09', '2021-03-22 04:44:09'),
(6, 'Udai', 'Nuts', 'Almonds', '3gm', '20', '2021-03-22 04:44:15', '2021-03-22 04:44:15'),
(7, 'Udai', 'abcd', 'abcde', '2', '100', '2021-03-24 15:56:45', '2021-03-24 15:56:45');

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
(11, 'Amartya', 'Amartya pvt ltd.', 3690258741, 'amartya@gmail.com', NULL, 'Male', 'Rajarhat', 70002, 'Kolkata', 'Burdwan', 'West Bengal', 'dd980f341f542df3dee50b17ebd716861596739863.jpg', 'e10adc3949ba59abbe56e057f20f883e', '2020-08-06 18:51:03'),
(12, 'Pinki', 'Pinki grp pvt ltd', 9901477330, 'pinki@gmail.com', NULL, 'Female', 'A Zone Avenue', 713206, 'Durgapur', 'Burdwan', 'West Bengal', 'a4a5a9453ece3d030a4da4414d4837761616173185.jpg', '25f9e794323b453885f5181f1b624d0b', '2021-03-19 16:59:45');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_bill`
--

CREATE TABLE `vendor_bill` (
  `order_id` int(10) NOT NULL,
  `vendor_id` int(10) NOT NULL,
  `ProductId` int(10) NOT NULL,
  `Quantity` int(10) NOT NULL,
  `Invoice_No` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mobile_no` bigint(12) NOT NULL,
  `address` mediumtext NOT NULL,
  `city` varchar(120) NOT NULL,
  `state` varchar(120) NOT NULL,
  `zip` int(10) NOT NULL,
  `cardname` varchar(255) NOT NULL,
  `cardnumber` varchar(20) NOT NULL,
  `expdate` varchar(120) NOT NULL,
  `cvv` int(5) NOT NULL,
  `InvoiceGenDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor_bill`
--

INSERT INTO `vendor_bill` (`order_id`, `vendor_id`, `ProductId`, `Quantity`, `Invoice_No`, `name`, `email`, `mobile_no`, `address`, `city`, `state`, `zip`, `cardname`, `cardnumber`, `expdate`, `cvv`, `InvoiceGenDate`) VALUES
(1, 12, 0, 0, 679081345, 'Pinki', 'pinki@gmail.com', 9901477330, 'A Zone Avenue', 'Durgapur', 'West Bengal', 713206, 'p?.?\\??J?_&???I', '#8?[???x?P???Y???B', '8?P?N??#r?R??]6', 0, '2021-03-19 17:16:12'),
(2, 12, 1, 1, 842044441, 'Pinki', 'pinki@gmail.com', 9901477330, 'A Zone Avenue', 'Durgapur', 'West Bengal', 713206, '9r}[??~H?P?2??o?', '??i\0i?&?\'?Kp{??&???B', '?ɇ??coq?h????', 0, '2021-03-20 20:10:42'),
(3, 12, 3, 198, 842044441, 'Pinki', 'pinki@gmail.com', 9901477330, 'A Zone Avenue', 'Durgapur', 'West Bengal', 713206, '9r}[??~H?P?2??o?', '??i\0i?&?\'?Kp{??&???B', '?ɇ??coq?h????', 0, '2021-03-20 20:10:42');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_cart`
--

CREATE TABLE `vendor_cart` (
  `cart_id` int(10) NOT NULL,
  `VendorName` varchar(120) NOT NULL,
  `Product_Id` int(11) NOT NULL,
  `Product_name` varchar(120) NOT NULL,
  `Product_quantity` int(11) NOT NULL,
  `Category` varchar(120) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Unit_price` decimal(10,2) NOT NULL,
  `Total_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor_cart`
--

INSERT INTO `vendor_cart` (`cart_id`, `VendorName`, `Product_Id`, `Product_name`, `Product_quantity`, `Category`, `Quantity`, `Unit_price`, `Total_price`) VALUES
(1, 'Pinki', 1, 'rice', 1, 'Grains', 1, '20.00', '20.00'),
(2, 'Pinki', 1, 'rice', 1, 'Grains', 1, '20.00', '20.00'),
(3, 'Pinki', 1, 'rice', 1, 'Grains', 1, '20.00', '20.00'),
(4, 'Pinki', 3, 'walnuts', 14, 'Nuts', 198, '20.00', '3.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_bill`
--
ALTER TABLE `customer_bill`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `customer_cart`
--
ALTER TABLE `customer_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblapprove`
--
ALTER TABLE `tblapprove`
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
-- Indexes for table `vendor_bill`
--
ALTER TABLE `vendor_bill`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `vendor_cart`
--
ALTER TABLE `vendor_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_bill`
--
ALTER TABLE `customer_bill`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `customer_cart`
--
ALTER TABLE `customer_cart`
  MODIFY `cart_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblapprove`
--
ALTER TABLE `tblapprove`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tblcustomer`
--
ALTER TABLE `tblcustomer`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tblfarmer`
--
ALTER TABLE `tblfarmer`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblproducts`
--
ALTER TABLE `tblproducts`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tblvendor`
--
ALTER TABLE `tblvendor`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `vendor_bill`
--
ALTER TABLE `vendor_bill`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vendor_cart`
--
ALTER TABLE `vendor_cart`
  MODIFY `cart_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
