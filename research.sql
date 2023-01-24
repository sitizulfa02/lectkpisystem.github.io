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
-- Table structure for table `research`
--

CREATE TABLE `research` (
  `LecturerId` int(11) NOT NULL,
  `Name` varchar(90) NOT NULL,
  `Mark` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `research`
--

INSERT INTO `research` (`LecturerId`, `Name`, `Mark`) VALUES
(1, 'DR. BADRUL HISHAM', 19.6),
(2, 'DR. BAKIAH', 17.3),
(3, 'DR. TAN JUN JIE', 25.4),
(4, 'DR. TANG THEAN HOCK', 20.7),
(5, 'DR. SITI SALMAH', 9.7),
(6, 'DR. ZARINA THASNEEM', 9.6),
(7, 'DR. MD AZMAN', 30.1),
(8, 'DR. LIM VUANGHAO', 66.4),
(9, 'DR. FATANAH', 27.5),
(10, 'DR. NOREHAN', 40.9),
(11, 'DR. FAZLIAH', 24.2),
(12, 'DR. FARRIS', 48.1),
(13, 'DR. AHMAD MUNIR', 24),
(14, 'DR. KHAIRIAH', 17.4),
(15, 'DR. RAFIDAH', 30.7);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
