-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2021 at 06:47 PM
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
-- Table structure for table `trainee_credentials`
--

CREATE TABLE `trainee_credentials` (
  `ID` int(11) NOT NULL,
  `USERNAME` varchar(40) DEFAULT NULL,
  `PASSWORD` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainee_credentials`
--

INSERT INTO `trainee_credentials` (`ID`, `USERNAME`, `PASSWORD`) VALUES
(1, 'trainee1', 'trainee'),
(2, 'trainee2', 'trainee'),
(3, 'trainee3', 'trainee'),
(4, 'trainee4', 'trainee'),
(5, 'trainee5', 'trainee'),
(6, 'trainee6', 'trainee'),
(7, 'trainee7', 'trainee'),
(8, 'trainee8', 'trainee'),
(9, 'trainee9', 'trainee'),
(10, 'trainee10', 'trainee'),
(11, 'trainee11', 'trainee'),
(12, 'trainee12', 'trainee'),
(13, 'trainee13', 'trainee'),
(14, 'trainee14', 'trainee'),
(15, ' trainee15', 'trainee'),
(16, ' trainee16', 'trainee'),
(17, ' trainee17', 'trainee'),
(18, ' trainee18', 'trainee'),
(19, ' trainee19', 'trainee'),
(20, 'trainee20', 'trainee'),
(21, 'trainee21', 'trainee'),
(22, 'trainee22', 'trainee'),
(23, 'trainee23', 'trainee'),
(24, 'trainee24', 'trainee'),
(25, 'trainee25', 'trainee'),
(26, 'trainee26', 'trainee'),
(27, 'trainee27', 'trainee'),
(28, 'trainee28', 'trainee'),
(29, 'trainee29', 'trainee'),
(30, 'trainee30', 'trainee'),
(31, 'trainee31', 'trainee'),
(32, 'trainee32', 'trainee'),
(33, 'trainee33', 'trainee'),
(34, 'trainee34', 'trainee'),
(35, 'trainee35', 'trainee'),
(36, 'trainee36', 'trainee'),
(37, 'trainee37', 'trainee'),
(38, 'trainee38', 'trainee'),
(39, 'trainee39', 'trainee'),
(40, 'trainee40', 'trainee'),
(41, 'trainee41', 'trainee'),
(42, 'trainee42', 'trainee'),
(43, 'trainee43', 'trainee'),
(44, 'trainee44', 'trainee'),
(45, 'trainee45', 'trainee'),
(46, 'trainee46', 'trainee'),
(47, 'trainee47', 'trainee'),
(48, 'trainee48', 'trainee'),
(49, 'trainee49', 'trainee'),
(50, 'trainee50', 'trainee'),
(51, ' trainee51', 'trainee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trainee_credentials`
--
ALTER TABLE `trainee_credentials`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
