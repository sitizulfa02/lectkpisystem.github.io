-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2023 at 09:36 PM
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
-- Table structure for table `clinical`
--

CREATE TABLE `clinical` (
  `LecturerId` int(11) NOT NULL,
  `Name` varchar(90) NOT NULL,
  `Mark` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clinical`
--

INSERT INTO `clinical` (`LecturerId`, `Name`, `Mark`) VALUES
(1, 'DR. BADRUL HISHAM', 0),
(2, 'DR. BAKIAH', 38),
(3, 'DR. TAN JUN JIE', 0),
(4, 'DR. TANG THEAN HOCK', 0),
(5, 'DR. SITI SALMAH', 5.8),
(6, 'DR. ZARINA THASNEEM', 0),
(7, 'DR. MD AZMAN', 1.7),
(8, 'DR. LIM VUANGHAO', 0),
(9, 'DR. FATANAH', 8.7),
(10, 'DR. NOREHAN', 33.2),
(11, 'DR. FAZLIAH', 20.6),
(12, 'DR. FARRIS', 59.4),
(13, 'DR. AHMAD MUNIR', 0),
(14, 'DR. KHAIRIAH', 10.6),
(15, 'DR. RAFIDAH', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
