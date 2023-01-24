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
-- Table structure for table `sort_research`
--

CREATE TABLE `sort_research` (
  `Lecturerid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `department` varchar(100) NOT NULL,
  `percentage` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sort_research`
--

INSERT INTO `sort_research` (`Lecturerid`, `name`, `department`, `percentage`) VALUES
(1, 'DR. BADRUL HISHAM', 'BIOMEDICAL SCIENCE', 19.60),
(2, 'DR. BAKIAH', 'BIOMEDICAL SCIENCE', 17.30),
(3, 'DR. TAN JUN JIE', 'BIOMEDICAL SCIENCE', 25.40),
(4, 'DR. TANG THEAN HOCK', 'BIOMEDICAL SCIENCE', 20.70),
(5, 'DR. SITI SALMAH', 'CLINICAL MEDICINE', 9.70),
(6, 'DR. ZARINA THASNEEM', 'CLINICAL MEDICINE', 9.60),
(7, 'DR. MD AZMAN', 'TOXICOLOGY', 30.10),
(8, 'DR. LIM VUANGHAO', 'TOXICOLOGY', 66.40),
(9, 'DR. FATANAH', 'DENTAL SCIENCE', 27.50),
(10, 'DR. NOREHAN', 'DENTAL SCIENCE', 40.90),
(11, 'DR. FAZLIAH', 'DENTAL SCIENCE', 24.20),
(12, 'DR. FARRIS', 'COMMUNITY HEALTH', 48.10),
(13, 'DR. AHMAD MUNIR', 'COMMUNITY HEALTH', 24.00),
(14, 'DR. KHAIRIAH', 'BIOMEDICAL IMAGING', 17.40),
(15, 'DR. RAFIDAH', 'BIOMEDICAL IMAGING', 30.70);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
