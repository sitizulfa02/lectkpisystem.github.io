-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2023 at 09:22 AM
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
-- Database: `kpi system`
--

-- --------------------------------------------------------

--
-- Table structure for table `lectform`
--

CREATE TABLE `lectform` (
  `Lectname` text NOT NULL,
  `department` text NOT NULL,
  `StaffNum` varchar(10) NOT NULL,
  `Position` varchar(30) NOT NULL,
  `Email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lectform`
--

INSERT INTO `lectform` (`Lectname`, `department`, `StaffNum`, `Position`, `Email`) VALUES
('', '', '', '', ''),
('ASSOCIATE PROFESSOR DR. LIM VUANGHAO', 'TOXICOLOGY', '0561/11', 'UNIVERSITY LECTURER DS54', 'vlim@usm.my'),
('ASSOCIATE PROFESSOR DR. MD AZMAN BIN PKM SEENI MOHAMED', 'TOXICOLOGY', '0416/08', 'UNIVERSITY LECTURER DS54', 'azmanseeni@usm.my');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lectform`
--
ALTER TABLE `lectform`
  ADD PRIMARY KEY (`Lectname`(50));
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
