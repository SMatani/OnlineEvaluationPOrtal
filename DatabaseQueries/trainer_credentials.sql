-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2021 at 06:46 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE IF NOT EXISTS online_eval ;
USE online_eval;

--
-- Database: `online_eval`
--

-- --------------------------------------------------------

--
-- Table structure for table `trainer_credentials`
--

CREATE TABLE `trainer_credentials` (
  `ID` int(11) NOT NULL,
  `Username` varchar(20) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainer_credentials`
--

INSERT INTO `trainer_credentials` (`ID`, `Username`, `Password`) VALUES
(1, 'trainer1', 'trainer'),
(2, 'trainer2', 'trainer'),
(3, 'trainer3', 'trainer'),
(4, 'trainer4', 'trainer'),
(5, 'trainer5', 'trainer'),
(6, 'trainer6', 'trainer'),
(7, 'trainer7', 'trainer'),
(8, 'trainer8', 'trainer'),
(9, 'trainer9', 'trainer'),
(10, 'trainer10', 'trainer'),
(11, 'trainer11', 'trainer'),
(12, 'trainer12', 'trainer'),
(13, 'trainer13', 'trainer'),
(14, 'trainer14', 'trainer'),
(15, 'trainer15', 'trainer'),
(16, 'trainer16', 'trainer'),
(17, 'trainer17', 'trainer'),
(18, 'trainer18', 'trainer'),
(19, 'trainer19', 'trainer'),
(20, 'trainer20', 'trainer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trainer_credentials`
--
ALTER TABLE `trainer_credentials`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
