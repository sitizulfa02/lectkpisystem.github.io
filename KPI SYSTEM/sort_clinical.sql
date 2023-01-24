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
-- Table structure for table `sort_clinical`
--

CREATE TABLE `sort_clinical` (
  `Lecturerid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `department` varchar(100) NOT NULL,
  `percentage` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sort_clinical`
--

INSERT INTO `sort_clinical` (`Lecturerid`, `name`, `department`, `percentage`) VALUES
(1, 'DR. BADRUL HISHAM', 'BIOMEDICAL SCIENCE', 0.00),
(2, 'DR. BAKIAH', 'BIOMEDICAL SCIENCE', 38.00),
(3, 'DR. TAN JUN JIE', 'BIOMEDICAL SCIENCE', 0.00),
(4, 'DR. TANG THEAN HOCK', 'BIOMEDICAL SCIENCE', 0.00),
(5, 'DR. SITI SALMAH', 'CLINICAL MEDICINE', 5.80),
(6, 'DR. ZARINA THASNEEM', 'CLINICAL MEDICINE', 0.00),
(7, 'DR. MD AZMAN', 'TOXICOLOGY', 1.70),
(8, 'DR. LIM VUANGHAO', 'TOXICOLOGY', 0.00),
(9, 'DR. FATANAH', 'DENTAL SCIENCE', 8.70),
(10, 'DR. NOREHAN', 'DENTAL SCIENCE', 33.20),
(11, 'DR. FAZLIAH', 'DENTAL SCIENCE', 20.60),
(12, 'DR. FARRIS', 'COMMUNITY HEALTH', 59.40),
(13, 'DR. AHMAD MUNIR', 'COMMUNITY HEALTH', 0.00),
(14, 'DR. KHAIRIAH', 'BIOMEDICAL IMAGING', 10.60),
(15, 'DR. RAFIDAH', 'BIOMEDICAL IMAGING', 0.00);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
