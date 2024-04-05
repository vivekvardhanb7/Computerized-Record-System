-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2022 at 09:38 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ffs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindetails`
--

CREATE TABLE `admindetails` (
  `Username` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `dob` date NOT NULL DEFAULT '2001-01-01',
  `Password` varchar(30) NOT NULL,
  `Phonenumber` bigint(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admindetails`
--

INSERT INTO `admindetails` (`Username`, `Email`, `dob`, `Password`, `Phonenumber`) VALUES
('teja', 's170280@rguktsklm.ac.in', '2001-01-09', '12345678', 6300302255),
('Jeswaanth', 's170313@rguktsklm.ac.in', '2001-05-21', '12345678', 9951934384);

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `Username` varchar(20) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Phone` bigint(20) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`Username`, `Email`, `Password`, `Phone`, `dob`) VALUES
('A Aravind', 'aravindvamsee106@gmail.com', 'Aravind@106', 9398797029, '2002-08-30'),
('siva', 's170608@rguktsklm.ac.in', '12345678', 9347235849, '2001-11-11'),
('Gagan teja', 's170610@rguktsklm.ac.in', '12345678', 9390270030, '2001-11-19'),
('fahim', 's170667@rguktsklm.ac.in', '1234', 1231231234, '2000-05-23'),
('A Aravind', 's170756@rguktsklm.ac.in', '123456789', 1234567890, '2002-08-30');

-- --------------------------------------------------------

--
-- Table structure for table `recorddetails`
--

CREATE TABLE `recorddetails` (
  `subjectname` varchar(20) NOT NULL,
  `subjectcode` varchar(20) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `mail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recorddetails`
--

INSERT INTO `recorddetails` (`subjectname`, `subjectcode`, `content`, `date`, `mail`) VALUES
('Operating system', 'CS3103', '<p>this is an example word document in the given time period to save the wolrd.</p>', '2022-09-21', 's170610@rguktsklm.ac.in'),
('Operating system', 'CS3103', '<p>This is an exmaple record&nbsp;</p>', '2022-09-21', 'aravindvamsee106@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admindetails`
--
ALTER TABLE `admindetails`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
