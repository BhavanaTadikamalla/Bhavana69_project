-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2018 at 05:30 PM
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
-- Database: `foodadda`
--

-- --------------------------------------------------------

--
-- Table structure for table `fruit_store`
--

CREATE TABLE `fruit_store` (
  `seller_email` varchar(40) NOT NULL,
  `fruit_name` varchar(40) NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fruit_store`
--

INSERT INTO `fruit_store` (`seller_email`, `fruit_name`, `quantity`, `price`) VALUES
('ram@gmail.coma', 'sapota', 1000, 10),
('abv@gmail.com', 'gh', 54, 66),
('ram@gmail.com', 'mango', 10, 10),
('', 'mango', 10, 10),
('', 'sapota', 10, 10),
('', 'orangeeeeeeeeeeeee', 666, 1000),
('', 'custard', 100, 100),
('bb@gmail.com', 'grapeeeee', 10, 100),
('bidisha@gmail.com', 'strawberry', 10, 10),
('bhav@gmail.com', 'pineapple', 2, 20),
('bhav@gmail.com', 'orange', 5, 50),
('giri@gmail.com', 'apple', 5, 90),
('giri@gmail.com', 'orange', 5, 70),
('tlsnikhila@gmail.com', 'mango', 2, 30);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
