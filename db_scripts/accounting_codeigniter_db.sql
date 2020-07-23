-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2020 at 10:04 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `accounting_codeigniter_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banks`
--

CREATE TABLE `tbl_banks` (
  `bank_id` int(11) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `bank_code` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_banks`
--

INSERT INTO `tbl_banks` (`bank_id`, `bank_name`, `bank_code`) VALUES
(2, 'Bank of ceylon', 5678),
(3, 'Seylan Bank', 5863),
(1, 'Sampath Bank', 7850),
(4, 'Hatton National Bank', 8945);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bank_branches`
--

CREATE TABLE `tbl_bank_branches` (
  `bank_branch_id` int(11) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `bank_branch_name` varchar(100) NOT NULL,
  `bank_branch_code` int(3) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bank_branches`
--

INSERT INTO `tbl_bank_branches` (`bank_branch_id`, `bank_name`, `bank_branch_name`, `bank_branch_code`, `date_created`) VALUES
(1, 'Seylan Bank', 'Kalutara Branch', 102, '2020-07-23'),
(2, 'NDB Bank', 'Kalutara Branch', 114, '2020-07-23'),
(3, 'Sampath bank', 'Kalutara Branch', 122, '2020-07-23'),
(4, 'NDB Bank', 'Colombo Branch', 145, '2020-07-23'),
(5, 'Seylan Bank', 'Galle branch', 200, '2020-07-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_banks`
--
ALTER TABLE `tbl_banks`
  ADD PRIMARY KEY (`bank_code`),
  ADD UNIQUE KEY `bank_code` (`bank_code`);

--
-- Indexes for table `tbl_bank_branches`
--
ALTER TABLE `tbl_bank_branches`
  ADD PRIMARY KEY (`bank_branch_code`),
  ADD UNIQUE KEY `bank_branch_code` (`bank_branch_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
