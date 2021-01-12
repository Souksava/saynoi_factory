-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 12, 2020 at 02:57 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `factory`
--

-- --------------------------------------------------------

--
-- Table structure for table `auther`
--

CREATE TABLE `auther` (
  `auther_id` int(11) NOT NULL,
  `auther_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auther`
--

INSERT INTO `auther` (`auther_id`, `auther_name`) VALUES
(1, 'ເຈົ້າຂອງໂຮງງານ'),
(2, 'ພະນັກງານ'),
(3, 'ປິດການໃຊ້ງານ');

-- --------------------------------------------------------

--
-- Table structure for table `listexportdetail`
--

CREATE TABLE `listexportdetail` (
  `ExpNo` int(11) NOT NULL,
  `Pro_ID` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Qty` int(11) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `emp_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `listmakedetail`
--

CREATE TABLE `listmakedetail` (
  `M_No` int(11) NOT NULL,
  `Pro_ID` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Qty` int(11) DEFAULT NULL,
  `emp_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbcustomers`
--

CREATE TABLE `tbcustomers` (
  `Cus_ID` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Cus_Name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Cus_Surname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Gender` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Tel` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbcustomers`
--

INSERT INTO `tbcustomers` (`Cus_ID`, `Cus_Name`, `Cus_Surname`, `Gender`, `Address`, `Tel`, `Email`) VALUES
('002', 'ສົມຈິດ', 'ງາມດີ', 'ຊາຍ', 'ບ້ານທາດຫຼວງ ເມືອງໄຊເສດຖາ ນະຄອນຫຼວງ\r\n', '020-5555-6633', 'Somchit@hotmail.com'),
('003', 'ສົມຈິດAAA', 'ສົມຈິດAAA', 'ຍິງ', '-AA', '+856 20 5795 9555AA', 'AAsouksavath@mangkone.com'),
('C001', 'ລູກຄ້າທົ່ວໄປ', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbemployees`
--

CREATE TABLE `tbemployees` (
  `Emp_ID` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Emp_Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Emp_Surname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Gender` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Tel` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `auther_id` int(11) NOT NULL,
  `img_path` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbemployees`
--

INSERT INTO `tbemployees` (`Emp_ID`, `Emp_Name`, `Emp_Surname`, `Gender`, `Address`, `Tel`, `Email`, `Password`, `auther_id`, `img_path`) VALUES
('E001', 'ໂຣເບີດ', 'ມະນີຄຳ', 'ຍິງ', 'ທ່າແຂກ', '020-2132-3344', 'robert@gmail.com', '12345', 1, ''),
('E002', 'ໄຊນ້ອຍ', '', 'ຊາຍ', 'ໂພນຕ້ອງ', '', 'sai@hotmail.com', '123', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbexportdetail`
--

CREATE TABLE `tbexportdetail` (
  `ExpNo` int(11) NOT NULL,
  `BillNo` int(11) DEFAULT NULL,
  `Pro_ID` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Qty` int(11) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbexportdetail`
--

INSERT INTO `tbexportdetail` (`ExpNo`, `BillNo`, `Pro_ID`, `Qty`, `Price`) VALUES
(1, 1, '001', 42, 3000),
(2, 1, '002', 30, 3000),
(4, 2, '001', 192, 3000),
(5, 3, '002', 60, 3000),
(6, 3, '004', 80, 24000),
(7, 3, '003', 90, 5000),
(8, 4, '003', 29, 5000),
(9, 4, '004', 30, 24000),
(11, 6, '001', 2, 35000),
(12, 6, '003', 1, 25000),
(14, 7, '001', 1, 35000),
(15, 7, '003', 1, 25000);

-- --------------------------------------------------------

--
-- Table structure for table `tbexports`
--

CREATE TABLE `tbexports` (
  `BillNo` int(11) NOT NULL,
  `DateExp` date DEFAULT NULL,
  `TimeExp` time DEFAULT NULL,
  `Amount` int(11) DEFAULT NULL,
  `Cus_ID` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Emp_ID` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Status` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbexports`
--

INSERT INTO `tbexports` (`BillNo`, `DateExp`, `TimeExp`, `Amount`, `Cus_ID`, `Emp_ID`, `Status`) VALUES
(1, '2019-08-20', '17:05:22', 216000, '002', 'E001', 'ຈ່າຍແລ້ວ'),
(2, '2019-08-21', '22:39:46', 576000, 'C001', 'E001', 'ຈ່າຍແລ້ວ'),
(3, '2019-08-21', '20:09:25', 2550000, 'C001', 'E001', 'ຄ້າງຈ່າຍ'),
(4, '2019-08-21', '20:16:34', 865000, '002', 'E001', 'ຄ້າງຈ່າຍ'),
(6, '2020-08-10', '21:16:40', 95000, '002', 'E001', 'ຈ່າຍແລ້ວ'),
(7, '2020-08-10', '21:48:58', 60000, '002', 'E001', 'ຈ່າຍແລ້ວ');

-- --------------------------------------------------------

--
-- Table structure for table `tbmakedetail`
--

CREATE TABLE `tbmakedetail` (
  `M_No` int(11) NOT NULL,
  `MaKe_No` int(11) DEFAULT NULL,
  `Pro_ID` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbmakedetail`
--

INSERT INTO `tbmakedetail` (`M_No`, `MaKe_No`, `Pro_ID`, `Qty`) VALUES
(10, 1, '001', 2),
(11, 1, '002', 2),
(13, 2, '001', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbmaking`
--

CREATE TABLE `tbmaking` (
  `Make_No` int(11) NOT NULL,
  `DateOFMake` date DEFAULT NULL,
  `TimeOFMake` time DEFAULT NULL,
  `QtyAmount` int(11) DEFAULT NULL,
  `Emp_ID` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `seen1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `seen2` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbmaking`
--

INSERT INTO `tbmaking` (`Make_No`, `DateOFMake`, `TimeOFMake`, `QtyAmount`, `Emp_ID`, `status`, `seen1`, `seen2`) VALUES
(1, '2020-08-04', '21:31:12', 4, 'E001', 'ອະນຸມັດ', 'SEEN', 'SEEN'),
(2, '2020-08-12', '17:49:21', 1, 'E001', 'ຍັງບໍ່ອະນຸມັດ', 'SEEN', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbproducts`
--

CREATE TABLE `tbproducts` (
  `Pro_ID` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Pro_Name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Unit_ID` int(11) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Qty` int(11) DEFAULT NULL,
  `QtyAlert` int(11) DEFAULT NULL,
  `img_path` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbproducts`
--

INSERT INTO `tbproducts` (`Pro_ID`, `Pro_Name`, `Unit_ID`, `Price`, `Qty`, `QtyAlert`, `img_path`) VALUES
('001', 'ນ້ຳດື່ມຫົງສະຫວັນ 250 ມລ', 3, 35000, 102, 100, 'img_5f294af15a84e.jpg'),
('002', 'ນ້ຳດື່ມຫົງສະຫວັນ 600 ມລ', 3, 45000, 152, 100, 'img_5f294aa062dca.jpg'),
('003', ' ນ້ຳດື່ມຫົງສະຫວັນ 1500 ມລ', 2, 25000, 100, 200, 'img_5f2949e6d139e.jpg'),
('004', 'ນ້ຳດື່ມວິນເທີ້  ນ້ອຍ', 3, 24000, 100, 50, 'img_5f29499facbff.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbunit`
--

CREATE TABLE `tbunit` (
  `Unit_ID` int(11) NOT NULL,
  `Unit_Name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbunit`
--

INSERT INTO `tbunit` (`Unit_ID`, `Unit_Name`) VALUES
(1, 'ຕຸກ'),
(2, 'ແພັກ'),
(3, 'ແກັດ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auther`
--
ALTER TABLE `auther`
  ADD PRIMARY KEY (`auther_id`);

--
-- Indexes for table `listexportdetail`
--
ALTER TABLE `listexportdetail`
  ADD PRIMARY KEY (`ExpNo`),
  ADD KEY `Pro_ID` (`Pro_ID`),
  ADD KEY `emp_id` (`emp_id`);

--
-- Indexes for table `listmakedetail`
--
ALTER TABLE `listmakedetail`
  ADD PRIMARY KEY (`M_No`),
  ADD KEY `Pro_ID` (`Pro_ID`),
  ADD KEY `emp_id` (`emp_id`);

--
-- Indexes for table `tbcustomers`
--
ALTER TABLE `tbcustomers`
  ADD PRIMARY KEY (`Cus_ID`);

--
-- Indexes for table `tbemployees`
--
ALTER TABLE `tbemployees`
  ADD PRIMARY KEY (`Emp_ID`),
  ADD KEY `auther_id` (`auther_id`);

--
-- Indexes for table `tbexportdetail`
--
ALTER TABLE `tbexportdetail`
  ADD PRIMARY KEY (`ExpNo`),
  ADD KEY `BillNo` (`BillNo`),
  ADD KEY `Pro_ID` (`Pro_ID`);

--
-- Indexes for table `tbexports`
--
ALTER TABLE `tbexports`
  ADD PRIMARY KEY (`BillNo`),
  ADD KEY `Cus_ID` (`Cus_ID`),
  ADD KEY `Emp_ID` (`Emp_ID`);

--
-- Indexes for table `tbmakedetail`
--
ALTER TABLE `tbmakedetail`
  ADD PRIMARY KEY (`M_No`),
  ADD KEY `Mate_No` (`MaKe_No`),
  ADD KEY `Pro_ID` (`Pro_ID`);

--
-- Indexes for table `tbmaking`
--
ALTER TABLE `tbmaking`
  ADD PRIMARY KEY (`Make_No`),
  ADD KEY `Emp_ID` (`Emp_ID`);

--
-- Indexes for table `tbproducts`
--
ALTER TABLE `tbproducts`
  ADD PRIMARY KEY (`Pro_ID`),
  ADD KEY `Unit_ID` (`Unit_ID`);

--
-- Indexes for table `tbunit`
--
ALTER TABLE `tbunit`
  ADD PRIMARY KEY (`Unit_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `listexportdetail`
--
ALTER TABLE `listexportdetail`
  MODIFY `ExpNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `listmakedetail`
--
ALTER TABLE `listmakedetail`
  MODIFY `M_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbexportdetail`
--
ALTER TABLE `tbexportdetail`
  MODIFY `ExpNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbmakedetail`
--
ALTER TABLE `tbmakedetail`
  MODIFY `M_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbunit`
--
ALTER TABLE `tbunit`
  MODIFY `Unit_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `listexportdetail`
--
ALTER TABLE `listexportdetail`
  ADD CONSTRAINT `listexportdetail_ibfk_1` FOREIGN KEY (`Pro_ID`) REFERENCES `tbproducts` (`Pro_ID`),
  ADD CONSTRAINT `listexportdetail_ibfk_2` FOREIGN KEY (`emp_id`) REFERENCES `tbemployees` (`Emp_ID`);

--
-- Constraints for table `listmakedetail`
--
ALTER TABLE `listmakedetail`
  ADD CONSTRAINT `listmakedetail_ibfk_1` FOREIGN KEY (`Pro_ID`) REFERENCES `tbproducts` (`Pro_ID`),
  ADD CONSTRAINT `listmakedetail_ibfk_2` FOREIGN KEY (`emp_id`) REFERENCES `tbemployees` (`Emp_ID`);

--
-- Constraints for table `tbemployees`
--
ALTER TABLE `tbemployees`
  ADD CONSTRAINT `tbemployees_ibfk_1` FOREIGN KEY (`auther_id`) REFERENCES `auther` (`auther_id`);

--
-- Constraints for table `tbexportdetail`
--
ALTER TABLE `tbexportdetail`
  ADD CONSTRAINT `tbexportdetail_ibfk_1` FOREIGN KEY (`BillNo`) REFERENCES `tbexports` (`BillNo`),
  ADD CONSTRAINT `tbexportdetail_ibfk_2` FOREIGN KEY (`Pro_ID`) REFERENCES `tbproducts` (`Pro_ID`);

--
-- Constraints for table `tbexports`
--
ALTER TABLE `tbexports`
  ADD CONSTRAINT `tbexports_ibfk_1` FOREIGN KEY (`Cus_ID`) REFERENCES `tbcustomers` (`Cus_ID`),
  ADD CONSTRAINT `tbexports_ibfk_2` FOREIGN KEY (`Emp_ID`) REFERENCES `tbemployees` (`Emp_ID`);

--
-- Constraints for table `tbmakedetail`
--
ALTER TABLE `tbmakedetail`
  ADD CONSTRAINT `tbmakedetail_ibfk_1` FOREIGN KEY (`MaKe_No`) REFERENCES `tbmaking` (`Make_No`),
  ADD CONSTRAINT `tbmakedetail_ibfk_2` FOREIGN KEY (`Pro_ID`) REFERENCES `tbproducts` (`Pro_ID`);

--
-- Constraints for table `tbmaking`
--
ALTER TABLE `tbmaking`
  ADD CONSTRAINT `tbmaking_ibfk_1` FOREIGN KEY (`Emp_ID`) REFERENCES `tbemployees` (`Emp_ID`);

--
-- Constraints for table `tbproducts`
--
ALTER TABLE `tbproducts`
  ADD CONSTRAINT `tbproducts_ibfk_1` FOREIGN KEY (`Unit_ID`) REFERENCES `tbunit` (`Unit_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
