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
-- Table structure for table `academic`
--

CREATE TABLE `academic` (
  `LecturerId` int(11) NOT NULL,
  `Name` varchar(90) NOT NULL,
  `Mark` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academic`
--

INSERT INTO `academic` (`LecturerId`, `Name`, `Mark`) VALUES
(1, 'DR. BADRUL HISHAM', 10),
(2, 'DR. BAKIAH', 35.5),
(3, 'DR. TAN JUN JIE', 5.3),
(4, 'DR. TANG THEAN HOCK', 7.2),
(5, 'DR. SITI SALMAH', 30.7),
(6, 'DR. ZARINA THASNEEM', 14),
(7, 'DR. MD AZMAN', 11.6),
(8, 'DR. LIM VUANGHAO', 18.5),
(9, 'DR. FATANAH', 15),
(10, 'DR. NOREHAN', 25.1),
(11, 'DR. FAZLIAH', 18.3),
(12, 'DR. FARRIS', 18.8),
(13, 'DR. AHMAD MUNIR', 17.8),
(14, 'DR. KHAIRIAH', 3.7),
(15, 'DR. RAFIDAH', 27.7);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
