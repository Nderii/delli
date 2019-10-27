-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 19, 2019 at 08:58 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alan`
--

-- --------------------------------------------------------

--
-- Table structure for table `rec`
--

CREATE TABLE `rec` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `SecondName` varchar(20) DEFAULT NULL,
  `OtherNames` varchar(20) DEFAULT NULL,
  `Filled` varchar(200) NOT NULL,
  `Ipass` varchar(200) NOT NULL,
  `Race` varchar(200) NOT NULL,
  `Dob` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Pass` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rec`
--

INSERT INTO `rec` (`ID`, `FirstName`, `SecondName`, `OtherNames`, `Filled`, `Ipass`, `Race`, `Dob`, `Email`, `Pass`) VALUES
(1, 'allan', 'nderi', 'test', 'test', '24234', 'test', '2/90/178', 'nderiwagura@gmail.com', '$2y$10$0/8senTpm3n8n02qGIe4B.dcInKT.J58tpZSq98DPHMIkSHo4CSWa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rec`
--
ALTER TABLE `rec`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rec`
--
ALTER TABLE `rec`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
