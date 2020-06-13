-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2020 at 07:06 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dufma`
--

-- --------------------------------------------------------

--
-- Table structure for table `dufma_investment`
--

CREATE TABLE `dufma_investment` (
  `s/n` int(10) NOT NULL,
  `name_investor` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `dura_invest` int(255) NOT NULL,
  `unit` int(10) NOT NULL,
  `v_unit` int(255) NOT NULL,
  `roi` int(255) NOT NULL,
  `roi_starts` varchar(255) NOT NULL,
  `m_uic` varchar(255) NOT NULL,
  `adv_ticket` varchar(255) NOT NULL,
  `erp` varchar(255) NOT NULL,
  `investor_feature` varchar(255) NOT NULL,
  `live_training` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dufma_investment`
--

INSERT INTO `dufma_investment` (`s/n`, `name_investor`, `email`, `phone`, `category`, `dura_invest`, `unit`, `v_unit`, `roi`, `roi_starts`, `m_uic`, `adv_ticket`, `erp`, `investor_feature`, `live_training`, `password`, `confirm_password`) VALUES
(45, 'gbenda', 'adex@gmail.com', '09022233344', 'Silver', 1, 1, 25000, 20, '20%', '25, 000', '2', '2', 'Investor feature', '', '', ''),
(46, 'sulaimon ogundimu', 'abolajic@gmail.com', '08039412009', 'Silver', 1, 1, 25000, 20, '20%', '25, 000', '2', '2', 'Investor feature', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dufma_investment`
--
ALTER TABLE `dufma_investment`
  ADD PRIMARY KEY (`s/n`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dufma_investment`
--
ALTER TABLE `dufma_investment`
  MODIFY `s/n` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
