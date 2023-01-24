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
-- Table structure for table `ippt`
--

CREATE TABLE `ippt` (
  `LecturerId` int(11) NOT NULL,
  `Name` varchar(90) NOT NULL,
  `Mark` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ippt`
--

INSERT INTO `ippt` (`LecturerId`, `Name`, `Mark`) VALUES
(1, 'DR. BADRUL HISHAM', 29.5),
(2, 'DR. BAKIAH', 90.7),
(3, 'DR. TAN JUN JIE', 30.7),
(4, 'DR. TANG THEAN HOCK', 27.9),
(5, 'DR. SITI SALMAH', 46.2),
(6, 'DR. ZARINA THASNEEM', 23.6),
(7, 'DR. MD AZMAN', 43.4),
(8, 'DR. LIM VUANGHAO', 84.9),
(9, 'DR. FATANAH', 64.6),
(10, 'DR. NOREHAN', 119.2),
(11, 'DR. FAZLIAH', 103.1),
(12, 'DR. FARRIS', 126.3),
(13, 'DR. AHMAD MUNIR', 41.8),
(14, 'DR. KHAIRIAH', 111.7),
(15, 'DR. RAFIDAH', 98.3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
