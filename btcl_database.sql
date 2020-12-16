-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2020 at 04:42 PM
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
-- Database: `btcl_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Pass` varchar(100) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `Area_Code` int(11) NOT NULL,
  `Date_of_Birth` date NOT NULL,
  `Connection_Type` varchar(50) NOT NULL,
  `City_and_Zip_Code` varchar(100) NOT NULL,
  `Connection_Error` int(11) NOT NULL,
  `Mobile_Number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID`, `Name`, `Email`, `Pass`, `Address`, `Area_Code`, `Date_of_Birth`, `Connection_Type`, `City_and_Zip_Code`, `Connection_Error`, `Mobile_Number`) VALUES
(11111, 'Dipta', 'Dipta@gmail.com', '111111', 'Kandir par', 1, '1998-03-01', 'Permanent', 'Cumilla - 3500', 0, '01755999999'),
(22222, 'Prome', NULL, '444444', 'Ranir Digir par', 2, '1998-12-11', 'Permanent ', 'Cumilla - 3500', 0, '01522256988'),
(33333, 'Maria', 'Maria@baiust.edu.be', '777777', 'Rajgong Cumilla', 3, '1997-09-29', 'Permanent', 'Cumilla - 3500', 0, '01758977998');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `User_Name` varchar(100) NOT NULL,
  `Phone_Number` varchar(20) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `aria_no` int(11) NOT NULL,
  `Connection_Number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lineman`
--

CREATE TABLE `lineman` (
  `Name` varchar(50) NOT NULL,
  `Phone Number` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `Aria` int(11) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lineman`
--

INSERT INTO `lineman` (`Name`, `Phone Number`, `Email`, `Address`, `Aria`, `password`) VALUES
('Miraz', '01963254471', 'Miraz@yahoo.com', 'Gazipur', 1, '111111'),
('Tushar', '01765447485', 'tushar@gmail.com', 'kandirpar 1', 2, '222222'),
('Dhrubo', '01863254471', 'dhrubo@yahoo.com', 'Tomson Brize', 3, '333333');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`Connection_Number`);

--
-- Indexes for table `lineman`
--
ALTER TABLE `lineman`
  ADD PRIMARY KEY (`Aria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
