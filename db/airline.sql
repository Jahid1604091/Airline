-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2019 at 01:20 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airline`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`) VALUES
(1, 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `clientcode`
--

CREATE TABLE `clientcode` (
  `licence_no` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clientcode`
--

INSERT INTO `clientcode` (`licence_no`, `password`) VALUES
('airlineProject14072019', 'H2SO42019');

-- --------------------------------------------------------

--
-- Table structure for table `flight_section`
--

CREATE TABLE `flight_section` (
  `flight_no` varchar(20) NOT NULL,
  `DC` varchar(20) DEFAULT NULL,
  `AC` varchar(20) DEFAULT NULL,
  `takeOff` time DEFAULT NULL,
  `landing` time DEFAULT NULL,
  `route` varchar(20) DEFAULT NULL,
  `fare` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flight_section`
--

INSERT INTO `flight_section` (`flight_no`, `DC`, `AC`, `takeOff`, `landing`, `route`, `fare`) VALUES
('BC-1', 'Barishal', 'Chittagong', '10:20:00', '12:50:00', 'Dhaka', 4000),
('BD-1', 'Barishal', 'Dhaka', '15:30:00', '16:20:00', 'Non Stop', 2600),
('CB-1', 'Chittagong', 'Barishal', '22:10:00', '22:50:00', 'Non Stop', 3000),
('CB-2', 'Chittagong', 'Barishal', '00:00:00', '00:45:00', 'Non Stop', 3000),
('CD-1', 'Chittagong', 'Dhaka', '08:30:00', '09:15:00', 'Non Stop', 3000),
('CD-2', 'Chittagong', 'Dhaka', '15:30:00', '16:15:00', 'Non Stop', 2800),
('CS-1', 'Chittagong', 'Sylhet', '09:10:00', '10:20:00', 'Non Stop', 3000),
('CS-2', 'Chittagong', 'Sylhet', '22:10:00', '22:50:00', 'Non Stop', 3000),
('DB-1', 'Dhaka', 'Barishal', '17:30:00', '18:20:00', 'Non Stop', 2600),
('DC-2', 'Dhaka', 'Chittagong', '12:20:00', '13:00:00', 'Non Stop', 3000),
('DC-3', 'Dhaka', 'Chittagong', '20:30:00', '21:15:00', 'Non Stop', 3000),
('DK-1', 'Dhaka', 'Khulna', '19:30:00', '20:20:00', 'Non Stop', 2600),
('DK-2', 'Dhaka', 'Khulna', '23:30:00', '00:20:00', 'Non Stop', 2600),
('DS-1', 'Dhaka', 'Sylhet', '15:30:00', '16:15:00', 'Non Stop', 2800),
('DS-2', 'Dhaka', 'Sylhet', '22:30:00', '23:20:00', 'Non Stop', 2900),
('KB-1', 'Khulna', 'Barishal', '00:00:00', '00:45:00', 'Non Stop', 3000),
('KD-1', 'Khulna', 'Dhaka', '23:30:00', '00:20:00', 'Non Stop', 2600),
('KD-2', 'Khulna', 'Dhaka', '17:30:00', '18:20:00', 'Non Stop', 2600),
('SC-1', 'Sylhet', 'Chittagong', '22:10:00', '22:50:00', 'Non Stop', 3000),
('SD-1', 'Sylhet', 'Dhaka', '10:30:00', '11:20:00', 'Non Stop', 2900),
('SD-2', 'Sylhet', 'Dhaka', '19:30:00', '20:20:00', 'Non Stop', 2600),
('xAB-11', 'Abu Dhabi', 'Barishal', '08:10:00', '14:20:00', 'Non Stop', 6800),
('xAC-11', 'Abu Dhabi', 'Chittagong', '03:10:00', '08:20:00', 'Non Stop', 6500),
('xAD-11', 'Abu Dhabi', 'Dhaka', '19:10:00', '00:20:00', 'Non Stop', 7000),
('xAD-12', 'Abu Dhabi', 'Dhaka', '14:10:00', '18:20:00', 'Non Stop', 7000),
('xAK-11', 'Abu Dhabi', 'Khulna', '03:10:00', '08:20:00', 'Non Stop', 6500),
('xAS-11', 'Abu Dhabi', 'Sylhet', '08:10:00', '14:20:00', 'Non Stop', 6800),
('xBA-11', 'Barishal', 'Abu Dhabi', '03:10:00', '20:20:00', 'Non Stop', 6800),
('xCA-11', 'Chittagong', 'Abu Dhabi', '10:10:00', '14:20:00', 'Non Stop', 6500),
('xCA-12', 'Chittagong', 'Abu Dhabi', '03:10:00', '08:20:00', 'Non Stop', 6500),
('xDA-11', 'Dhaka', 'Abu Dhabi', '10:10:00', '14:20:00', 'Non Stop', 7000),
('xDA-12', 'Dhaka', 'Abu Dhabi', '14:10:00', '18:20:00', 'Non Stop', 7000),
('xKA-11', 'Khulna', 'Abu Dhabi', '05:10:00', '10:20:00', 'Non Stop', 6800),
('xSA-11', 'Sylhet', 'Abu Dhabi', '05:10:00', '10:20:00', 'Non Stop', 6800),
('yAB-111', 'Abu Dhabi', 'Bangkok', '16:10:00', '22:20:00', 'Non Stop', 6800),
('yBA-111', 'Bangkok', 'Abu Dhabi', '03:10:00', '20:20:00', 'Non Stop', 6800);

-- --------------------------------------------------------

--
-- Table structure for table `pass_info`
--

CREATE TABLE `pass_info` (
  `name` varchar(20) NOT NULL,
  `bdate` varchar(30) DEFAULT NULL,
  `cell` varchar(12) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pass_info`
--

INSERT INTO `pass_info` (`name`, `bdate`, `cell`, `email`, `pass`) VALUES
('Mr Golam  Sarwar', '--------', '01915263482', 'golam@yahoo.com', '62358'),
('Mr Jakir Hossain', '1-1-1952', '0171523659', 'jakir@yahoo.com', '12345'),
('Mr Jahid Hasan', '1-8-1997', '01715150941', 'jh409780@gmail.com', '123456'),
('Mr Rajon Chowdhry', '1-2-1920', '018125697', 'rajon@gmail.com', '12345'),
('Mr Rakesh Chowdhury', '1-3-1998', '0171236548', 'rakesh@yahoo.com', '123456'),
('Mr Jahid  jami', '4-3-1999', '015646', 'something@gmail.com', '62358');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Username` varchar(20) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Username`, `Password`) VALUES
('Jahid', '123'),
('hasan', '123'),
('Jahid', '1234'),
('asmj', '123'),
('ghf', '57458458');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `flight_section`
--
ALTER TABLE `flight_section`
  ADD PRIMARY KEY (`flight_no`);

--
-- Indexes for table `pass_info`
--
ALTER TABLE `pass_info`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `cell` (`cell`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
