-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2018 at 03:21 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CustomerData_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `CustomerData_Table_2`
--

CREATE TABLE `customerdata_table_2` (
  `First Name` varchar(50) COLLATE ascii_bin NOT NULL,
  `Last Name` varchar(50) COLLATE ascii_bin NOT NULL,
  `Email` varchar(100) COLLATE ascii_bin NOT NULL,
  `Password` varchar(50) COLLATE ascii_bin NOT NULL,
  `Address` varchar(100) COLLATE ascii_bin NOT NULL,
  `City` varchar(30) COLLATE ascii_bin NOT NULL,
  `State` varchar(30) COLLATE ascii_bin NOT NULL,
  `Zip` varchar(5) COLLATE ascii_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
