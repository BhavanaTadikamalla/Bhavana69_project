-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2018 at 05:18 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freshoo`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `email` varchar(100) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `panno` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phnno` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`email`, `firstname`, `lastname`, `pwd`, `panno`, `address`, `phnno`) VALUES
('ekta@gmail.com', 'ekta', 'gonuguntla', 'Ekta@123', 'DSXCF3214F', 'banglore', 2147483647),
('nishi@gmail.com', 'nishmai', 'cheprolu', 'Nishmai@123', 'GFDHJ6789H', 'Goa', 2147483647),
('rachana@gmail.com', 'rachana', 'meda', 'Rachana@123', 'VCFGH4532E', 'township', 2147483647),
('reshma@gmail.com', 'reshma', 'narra', 'Reshma@123', 'BNHG6789R', 'autonagar', 2147483647),
('srujana@gmail.com', 'srujana', 'sharma', 'Sru@123', 'SDCFG4578R', 'Hyderabad', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `retailer`
--

CREATE TABLE `retailer` (
  `email` varchar(40) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `panno` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `shop_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `retailer`
--

INSERT INTO `retailer` (`email`, `firstname`, `lastname`, `pwd`, `panno`, `address`, `shop_name`) VALUES
('bhav@gmail.com', 'Bhavana', 'Tadika', 'Bhavana@12345', '12345abcd6', '1-Town', 'fruit mart'),
('giri@gmail.com', 'girija', 'rajanala', 'Girija@123', 'qwerty234h', 'goa', 'fruit heaven'),
('tlsnikhila@gmail.com', 'nikhila', 'talla', 'Nikhila@123', 'asdfg4567r', 'autonagar', 'fruit panda'),
('srilu@gmail.com', 'Sreelekha', 'pampana', 'Srilu@123', 'CVFGH7890H', 'dtriig', 'fruit portal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
