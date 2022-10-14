-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 17, 2021 at 06:12 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `package-tour`
--

-- --------------------------------------------------------

--
-- Table structure for table `CallCS`
--

CREATE TABLE `CallCS` (
  `CusID` char(30) NOT NULL,
  `CSID` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `CallCS`
--

INSERT INTO `CallCS` (`CusID`, `CSID`) VALUES
('abide', 'CS01'),
('cdddd', 'CS02'),
('dfdad', 'CS04'),
('dfdsfd', 'CS05'),
('klgddg', 'CS03');

-- --------------------------------------------------------

--
-- Table structure for table `Create_Reservation`
--

CREATE TABLE `Create_Reservation` (
  `ResID` char(20) NOT NULL,
  `Res_Date` date DEFAULT NULL,
  `Res_Number` int(11) DEFAULT NULL,
  `CusID` char(30) DEFAULT NULL,
  `DisID` int(11) DEFAULT NULL,
  `PayID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Create_Reservation`
--

INSERT INTO `Create_Reservation` (`ResID`, `Res_Date`, `Res_Number`, `CusID`, `DisID`, `PayID`) VALUES
('add', '2020-01-02', 4232232, 'abide', 1212131, 12344),
('adfdfd', '2020-02-01', 9876543, 'dfdad', 123344, 53433),
('dddddd', '2020-02-02', 9888777, 'klgddg', 87866, 66544),
('hjgfff', '2020-01-19', 1357894, 'dfdad', 53433, 34333),
('ssssss', '2020-01-03', 1234567, 'cdddd', 34343, 34342332);

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `CusID` char(30) NOT NULL,
  `Name` char(30) DEFAULT NULL,
  `Email` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`CusID`, `Name`, `Email`) VALUES
('abide', 'Harry', 'harry12@gmail.com'),
('cdddd', 'Jenny', 'jenny34@gmail.com'),
('dfd', 'dfd', 'dfdfd'),
('dfdad', 'Katie', 'katie43@gmail.com'),
('dfdsfd', 'Bennie', 'bennie55@gmail.com'),
('klgddg', 'Ali', 'ali44@gmail.com'),
('test', 'test', 'test'),
('trr', 'dddddd', 'ddddd');

-- --------------------------------------------------------

--
-- Table structure for table `Customer_Service`
--

CREATE TABLE `Customer_Service` (
  `CSID` char(30) NOT NULL,
  `CSName` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Customer_Service`
--

INSERT INTO `Customer_Service` (`CSID`, `CSName`) VALUES
('CS01', 'Ashley'),
('CS02', 'Bentley'),
('CS03', 'Carly'),
('CS04', 'Dominic'),
('CS05', 'Elizabelle');

-- --------------------------------------------------------

--
-- Table structure for table `Discount1`
--

CREATE TABLE `Discount1` (
  `DisID` int(11) NOT NULL,
  `TAID` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Discount1`
--

INSERT INTO `Discount1` (`DisID`, `TAID`) VALUES
(87866, 'moon'),
(53433, 'ocean'),
(123344, 'star'),
(34343, 'sun'),
(1212131, 'super1');

-- --------------------------------------------------------

--
-- Table structure for table `Discount2`
--

CREATE TABLE `Discount2` (
  `DisRate` double DEFAULT NULL,
  `TAID` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Discount2`
--

INSERT INTO `Discount2` (`DisRate`, `TAID`) VALUES
(0.3, 'moon'),
(0.5, 'ocean'),
(0.4, 'star'),
(0.2, 'sun'),
(0.1, 'super1');

-- --------------------------------------------------------

--
-- Table structure for table `Is_Provided_By`
--

CREATE TABLE `Is_Provided_By` (
  `TAID` char(30) NOT NULL,
  `CSID` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Is_Provided_By`
--

INSERT INTO `Is_Provided_By` (`TAID`, `CSID`) VALUES
('star', 'CS04');

-- --------------------------------------------------------

--
-- Table structure for table `Make_Comment`
--

CREATE TABLE `Make_Comment` (
  `CommID` int(11) NOT NULL,
  `CommDate` date DEFAULT NULL,
  `StarRating` double(11,0) DEFAULT NULL,
  `Text` char(200) DEFAULT NULL,
  `CusID` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Make_Comment`
--

INSERT INTO `Make_Comment` (`CommID`, `CommDate`, `StarRating`, `Text`, `CusID`) VALUES
(1, '2020-12-25', 5, 'Extremely satisfying travel experience!', 'abide'),
(2, '2020-03-17', 5, 'Very good, will go again next time', 'cdddd'),
(3, '2021-08-25', 4, 'Recommend it to everyone', 'klgddg'),
(4, '2020-09-03', 1, 'Terrible travel plans!!!!!!', 'dfdad'),
(5, '2021-01-01', 4, 'Great travel to celebrate new year', 'dfdsfd');

-- --------------------------------------------------------

--
-- Table structure for table `Make_Payment`
--

CREATE TABLE `Make_Payment` (
  `PayID` int(11) NOT NULL,
  `PayType` char(10) DEFAULT NULL,
  `PayPrice` double DEFAULT NULL,
  `PayDate` date DEFAULT NULL,
  `CusID` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Make_Payment`
--

INSERT INTO `Make_Payment` (`PayID`, `PayType`, `PayPrice`, `PayDate`, `CusID`) VALUES
(12344, 'card', 100, '2001-01-09', 'abide'),
(34333, 'card', 400, '2001-01-09', 'dfdsfd'),
(53433, 'card', 300, '2001-01-09', 'dfdad'),
(66544, 'card', 200, '2001-01-09', 'klgddg'),
(34342332, 'cash', 200, '2001-01-09', 'cdddd');

-- --------------------------------------------------------

--
-- Table structure for table `Manage_PackageTour1`
--

CREATE TABLE `Manage_PackageTour1` (
  `PTID` char(30) NOT NULL,
  `PTLocation` char(30) DEFAULT NULL,
  `PTPrice` int(11) DEFAULT NULL,
  `TAID` char(30) NOT NULL,
  `ResID` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Manage_PackageTour1`
--

INSERT INTO `Manage_PackageTour1` (`PTID`, `PTLocation`, `PTPrice`, `TAID`, `ResID`) VALUES
('PTID2', 'Vancouver', 120, 'sun', 'ssssss'),
('PTID3', 'BeiJing', 130, 'sun', 'dddddd'),
('PTID4', 'BeiJing', 80, 'sun', 'adfdfd'),
('PTID5', 'NewYork', 115, 'star', 'adfdfd');

-- --------------------------------------------------------

--
-- Table structure for table `Manage_PackageTour2`
--

CREATE TABLE `Manage_PackageTour2` (
  `PTLocation` char(30) NOT NULL,
  `PTTraffic` char(30) DEFAULT NULL,
  `PTHotel` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Manage_PackageTour2`
--

INSERT INTO `Manage_PackageTour2` (`PTLocation`, `PTTraffic`, `PTHotel`) VALUES
('BeiJing', 'plane', 'hilton'),
('London', 'plane', 'hilton'),
('NewYork', 'plane', 'wanda'),
('Toronto', 'bus', 'wanda'),
('Vancouver', 'ferry', 'wanda');

-- --------------------------------------------------------

--
-- Table structure for table `ReceiveDis`
--

CREATE TABLE `ReceiveDis` (
  `CusID` char(30) NOT NULL,
  `DisID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ReceiveDis`
--

INSERT INTO `ReceiveDis` (`CusID`, `DisID`) VALUES
('cdddd', 34343),
('klgddg', 87866),
('dfdad', 123344),
('abide', 1212131);

-- --------------------------------------------------------

--
-- Table structure for table `Refund`
--

CREATE TABLE `Refund` (
  `RefID` int(11) NOT NULL,
  `PayID` int(11) NOT NULL,
  `RefPrice` double DEFAULT NULL,
  `RefDate` date DEFAULT NULL,
  `RefType` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Refund`
--

INSERT INTO `Refund` (`RefID`, `PayID`, `RefPrice`, `RefDate`, `RefType`) VALUES
(12345, 12344, 100, '2001-05-09', 'card'),
(21344, 34342332, 200, '2001-01-09', 'cash'),
(23232, 53433, 300, '2001-03-09', 'card'),
(23333, 34333, 400, '2001-04-09', 'card'),
(32442, 66544, 300, '2001-02-09', 'card');

-- --------------------------------------------------------

--
-- Table structure for table `TravelAgency`
--

CREATE TABLE `TravelAgency` (
  `TAID` char(30) NOT NULL,
  `Email` char(40) DEFAULT NULL,
  `Address` char(40) DEFAULT NULL,
  `PhoneNum` int(20) DEFAULT NULL,
  `Name` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `TravelAgency`
--

INSERT INTO `TravelAgency` (`TAID`, `Email`, `Address`, `PhoneNum`, `Name`) VALUES
('ocean', '3344@gmail.com', 'Main5', 5555555, 'Ethan'),
('star', '12345@gmail.com', '3338 webber lane', 44444444, 'Danny'),
('sun', '23456@gmail.com', 'Main2', 2222222, 'Ben');

-- --------------------------------------------------------

--
-- Table structure for table `VIPCus`
--

CREATE TABLE `VIPCus` (
  `CusID` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `VIPCus`
--

INSERT INTO `VIPCus` (`CusID`) VALUES
('abide'),
('cdddd'),
('dfdad'),
('dfdsfd'),
('klgddg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CallCS`
--
ALTER TABLE `CallCS`
  ADD PRIMARY KEY (`CusID`,`CSID`),
  ADD KEY `CSID` (`CSID`);

--
-- Indexes for table `Create_Reservation`
--
ALTER TABLE `Create_Reservation`
  ADD PRIMARY KEY (`ResID`),
  ADD UNIQUE KEY `DisID` (`DisID`,`PayID`),
  ADD KEY `CusID` (`CusID`),
  ADD KEY `PayID` (`PayID`);

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`CusID`);

--
-- Indexes for table `Customer_Service`
--
ALTER TABLE `Customer_Service`
  ADD PRIMARY KEY (`CSID`);

--
-- Indexes for table `Discount1`
--
ALTER TABLE `Discount1`
  ADD PRIMARY KEY (`DisID`),
  ADD KEY `TAID` (`TAID`);

--
-- Indexes for table `Discount2`
--
ALTER TABLE `Discount2`
  ADD PRIMARY KEY (`TAID`);

--
-- Indexes for table `Is_Provided_By`
--
ALTER TABLE `Is_Provided_By`
  ADD PRIMARY KEY (`TAID`,`CSID`),
  ADD KEY `CSID` (`CSID`);

--
-- Indexes for table `Make_Comment`
--
ALTER TABLE `Make_Comment`
  ADD PRIMARY KEY (`CommID`),
  ADD KEY `CusID` (`CusID`);

--
-- Indexes for table `Make_Payment`
--
ALTER TABLE `Make_Payment`
  ADD PRIMARY KEY (`PayID`),
  ADD KEY `make_payment_ibfk_1` (`CusID`);

--
-- Indexes for table `Manage_PackageTour1`
--
ALTER TABLE `Manage_PackageTour1`
  ADD PRIMARY KEY (`PTID`),
  ADD KEY `PTLocation` (`PTLocation`),
  ADD KEY `TAID` (`TAID`),
  ADD KEY `ResID` (`ResID`);

--
-- Indexes for table `Manage_PackageTour2`
--
ALTER TABLE `Manage_PackageTour2`
  ADD PRIMARY KEY (`PTLocation`);

--
-- Indexes for table `ReceiveDis`
--
ALTER TABLE `ReceiveDis`
  ADD PRIMARY KEY (`CusID`),
  ADD KEY `DisID` (`DisID`);

--
-- Indexes for table `Refund`
--
ALTER TABLE `Refund`
  ADD PRIMARY KEY (`RefID`),
  ADD KEY `PayID` (`PayID`);

--
-- Indexes for table `TravelAgency`
--
ALTER TABLE `TravelAgency`
  ADD PRIMARY KEY (`TAID`);

--
-- Indexes for table `VIPCus`
--
ALTER TABLE `VIPCus`
  ADD PRIMARY KEY (`CusID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `CallCS`
--
ALTER TABLE `CallCS`
  ADD CONSTRAINT `callcs_ibfk_1` FOREIGN KEY (`CusID`) REFERENCES `Customer` (`CusID`),
  ADD CONSTRAINT `callcs_ibfk_2` FOREIGN KEY (`CSID`) REFERENCES `Customer_Service` (`CSID`);

--
-- Constraints for table `Create_Reservation`
--
ALTER TABLE `Create_Reservation`
  ADD CONSTRAINT `create_reservation_ibfk_1` FOREIGN KEY (`CusID`) REFERENCES `Customer` (`CusID`),
  ADD CONSTRAINT `create_reservation_ibfk_2` FOREIGN KEY (`DisID`) REFERENCES `Discount1` (`DisID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `create_reservation_ibfk_3` FOREIGN KEY (`PayID`) REFERENCES `Make_Payment` (`PayID`);

--
-- Constraints for table `Discount1`
--
ALTER TABLE `Discount1`
  ADD CONSTRAINT `discount1_ibfk_1` FOREIGN KEY (`TAID`) REFERENCES `Discount2` (`TAID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Is_Provided_By`
--
ALTER TABLE `Is_Provided_By`
  ADD CONSTRAINT `is_provided_by_ibfk_1` FOREIGN KEY (`TAID`) REFERENCES `TravelAgency` (`TAID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `is_provided_by_ibfk_2` FOREIGN KEY (`CSID`) REFERENCES `Customer_Service` (`CSID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Make_Comment`
--
ALTER TABLE `Make_Comment`
  ADD CONSTRAINT `make_comment_ibfk_1` FOREIGN KEY (`CusID`) REFERENCES `Customer` (`CusID`) ON DELETE NO ACTION;

--
-- Constraints for table `Make_Payment`
--
ALTER TABLE `Make_Payment`
  ADD CONSTRAINT `make_payment_ibfk_1` FOREIGN KEY (`CusID`) REFERENCES `Customer` (`CusID`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `Manage_PackageTour1`
--
ALTER TABLE `Manage_PackageTour1`
  ADD CONSTRAINT `manage_packagetour1_ibfk_1` FOREIGN KEY (`PTLocation`) REFERENCES `Manage_PackageTour2` (`PTLocation`),
  ADD CONSTRAINT `manage_packagetour1_ibfk_2` FOREIGN KEY (`TAID`) REFERENCES `TravelAgency` (`TAID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `manage_packagetour1_ibfk_3` FOREIGN KEY (`ResID`) REFERENCES `Create_Reservation` (`ResID`);

--
-- Constraints for table `ReceiveDis`
--
ALTER TABLE `ReceiveDis`
  ADD CONSTRAINT `receivedis_ibfk_1` FOREIGN KEY (`CusID`) REFERENCES `VIPCus` (`CusID`),
  ADD CONSTRAINT `receivedis_ibfk_2` FOREIGN KEY (`DisID`) REFERENCES `Discount1` (`DisID`);

--
-- Constraints for table `Refund`
--
ALTER TABLE `Refund`
  ADD CONSTRAINT `refund_ibfk_1` FOREIGN KEY (`PayID`) REFERENCES `Make_Payment` (`PayID`) ON DELETE CASCADE;

--
-- Constraints for table `VIPCus`
--
ALTER TABLE `VIPCus`
  ADD CONSTRAINT `vipcus_ibfk_1` FOREIGN KEY (`CusID`) REFERENCES `Customer` (`CusID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
