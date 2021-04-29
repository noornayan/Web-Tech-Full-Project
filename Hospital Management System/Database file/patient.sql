-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2021 at 09:30 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `patient`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointmentlist`
--

CREATE TABLE `appointmentlist` (
  `sl` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `drname` varchar(100) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointmentlist`
--

INSERT INTO `appointmentlist` (`sl`, `username`, `drname`, `datetime`, `status`) VALUES
(2, 'noor230', 'Shuvo Khan', '2021-04-24 11:19:34', 'Active'),
(3, 'noor232', 'Maria khan', '2021-04-25 12:45:11', 'Inactive'),
(5, 'noor232', 'Maria khan', '2021-04-26 12:45:11', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `drinfo`
--

CREATE TABLE `drinfo` (
  `sl` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `nid` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `specialty` varchar(200) NOT NULL,
  `address` varchar(300) NOT NULL,
  `roomno` varchar(50) NOT NULL,
  `appointment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drinfo`
--

INSERT INTO `drinfo` (`sl`, `username`, `fullname`, `phone`, `nid`, `password`, `specialty`, `address`, `roomno`, `appointment`) VALUES
(12, 'ayshik', 'Ayshik Khan', '01775503498', '123456788543256', 'A1234', 'Heart', 'Northern Ireland,Ballycarry', 'Special-112', 'Active'),
(13, 'shuvo', 'Shuvo Khan', '01775503498', '123456788543256', 'A1234', 'Heart', 'Northern Ireland,Ballycarry', 'Special-112', 'Active'),
(14, 'Nadia', 'Nadia Khan', '01775503498', '123456788543256', 'A1234', 'Heart', 'Northern Ireland,Ballycarry', 'Special-112', 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `medinfo`
--

CREATE TABLE `medinfo` (
  `sl` int(11) NOT NULL,
  `patientid` varchar(100) NOT NULL,
  `roomno` varchar(100) NOT NULL,
  `medecine` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `under` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medinfo`
--

INSERT INTO `medinfo` (`sl`, `patientid`, `roomno`, `medecine`, `time`, `quantity`, `under`) VALUES
(1, 'noor232', 'xxxxx', 'napa extra', 'Day & night', '2', 'Dr Sabrina'),
(2, 'noor232', 'xxxxx', 'Histasin', 'Day', '1', 'Dr Sabrina'),
(3, 'noor232', 'xxxxx', 'periton', 'Mid', '1', 'Dr Sabrina'),
(4, 'noor232', 'xxxxx', 'civite', 'Day', '2', 'Dr Sabrina'),
(5, 'afsana334', 'xxxxx', 'periton', 'civite', '2', 'Dr Sabrina');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `sl` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `Problem` varchar(200) NOT NULL,
  `address` varchar(300) NOT NULL,
  `roomno` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`sl`, `username`, `fullname`, `phone`, `age`, `password`, `gender`, `Problem`, `address`, `roomno`) VALUES
(11, 'noor232', 'noor nayan sekh', '01775503498', '25', 'noor12', 'Male', 'Covid', 'Dhaka', 'xxxxx');

-- --------------------------------------------------------

--
-- Table structure for table `patientreq`
--

CREATE TABLE `patientreq` (
  `sl` int(11) NOT NULL,
  `patientid` varchar(100) NOT NULL,
  `need` varchar(100) NOT NULL,
  `roomno` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientreq`
--

INSERT INTO `patientreq` (`sl`, `patientid`, `need`, `roomno`, `date`) VALUES
(1, 'afsana112', 'food', '1223', '2021-04-17 18:00:00'),
(2, 'noor45', 'oxigen', '3444', '2021-04-18 14:06:44'),
(3, 'noor232', 'i need oxizen.', 'xxxxx', '2021-04-18 23:37:43');

-- --------------------------------------------------------

--
-- Table structure for table `patienttest`
--

CREATE TABLE `patienttest` (
  `sl` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `test` varchar(500) NOT NULL,
  `cost` varchar(100) NOT NULL,
  `recomend` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patienttest`
--

INSERT INTO `patienttest` (`sl`, `username`, `test`, `cost`, `recomend`) VALUES
(1, 'noor232', 'blood', '300', 'Dr Alif'),
(2, 'noor232', 'urine', '400', 'Dr Alif'),
(3, 'noor232', 'pressure', '100', 'Dr sabrina'),
(4, 'noor232', 'ECG', '350', 'Dr sabrina'),
(5, 'noor232', 'IGE', '1000', 'Dr Mostofa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointmentlist`
--
ALTER TABLE `appointmentlist`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `drinfo`
--
ALTER TABLE `drinfo`
  ADD PRIMARY KEY (`sl`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `medinfo`
--
ALTER TABLE `medinfo`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`sl`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `patientreq`
--
ALTER TABLE `patientreq`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `patienttest`
--
ALTER TABLE `patienttest`
  ADD PRIMARY KEY (`sl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointmentlist`
--
ALTER TABLE `appointmentlist`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `drinfo`
--
ALTER TABLE `drinfo`
  MODIFY `sl` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `medinfo`
--
ALTER TABLE `medinfo`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `sl` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `patientreq`
--
ALTER TABLE `patientreq`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patienttest`
--
ALTER TABLE `patienttest`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
