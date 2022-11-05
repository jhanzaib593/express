-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2022 at 08:45 AM
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
-- Database: `zaini`
--

-- --------------------------------------------------------

--
-- Table structure for table `invoice_bill`
--

CREATE TABLE `invoice_bill` (
  `optradio` varchar(11) NOT NULL,
  `serailnunber1` int(100) NOT NULL,
  `date` varchar(20) NOT NULL,
  `dispatchdate` varchar(20) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `receivedname` varchar(30) NOT NULL,
  `phonenum` varchar(15) NOT NULL,
  `receivednum` varchar(15) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `receivednum2` varchar(15) NOT NULL,
  `price` varchar(100) NOT NULL,
  `province` varchar(55) NOT NULL,
  `qty` int(100) NOT NULL,
  `district` varchar(30) NOT NULL,
  `place` varchar(1) NOT NULL,
  `city` varchar(30) NOT NULL,
  `totaltransport` varchar(20) NOT NULL,
  `packing` varchar(20) NOT NULL,
  `custom` varchar(30) NOT NULL,
  `totalweight` varchar(100) NOT NULL,
  `totalprice` varchar(100) NOT NULL,
  `discount` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice_bill`
--

INSERT INTO `invoice_bill` (`optradio`, `serailnunber1`, `date`, `dispatchdate`, `sname`, `receivedname`, `phonenum`, `receivednum`, `weight`, `receivednum2`, `price`, `province`, `qty`, `district`, `place`, `city`, `totaltransport`, `packing`, `custom`, `totalweight`, `totalprice`, `discount`) VALUES
('سمندری', 1, '', '', 'ع؛یع؛ن', '', '03362132881', '', '', '', '', 'سندھ', 0, '', '', 'Karachi', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(11) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `password`) VALUES
(1, 'admin', '7859');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invoice_bill`
--
ALTER TABLE `invoice_bill`
  ADD PRIMARY KEY (`serailnunber1`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invoice_bill`
--
ALTER TABLE `invoice_bill`
  MODIFY `serailnunber1` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
