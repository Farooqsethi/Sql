-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2024 at 11:30 AM
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
-- Database: `farooq`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Id` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Age` int(11) NOT NULL,
  `Gender` enum('m','f') NOT NULL,
  `Contact` varchar(200) NOT NULL,
  `Salary` int(11) NOT NULL,
  `Department` varchar(250) NOT NULL,
  `date_of_join` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Id`, `Name`, `Age`, `Gender`, `Contact`, `Salary`, `Department`, `date_of_join`) VALUES
(1, 'Monis', 35, 'm', '0147856321', 55000, 'Production', '2015-04-01'),
(2, 'Farooq', 32, 'm', '0921456789', 48000, 'Production', '2016-07-01'),
(3, 'Siddiq', 40, 'm', '0268539421', 62000, 'Production', '2013-02-01'),
(4, 'Anwar', 38, 'm', '0546271389', 58000, 'Production', '2014-09-01'),
(5, 'Jawed', 36, 'm', '0734219856', 52000, 'Production', '2017-11-01'),
(6, 'Moiz', 30, 'm', '0859637421', 45000, 'Production', '2018-06-01'),
(7, 'Faizan', 42, 'm', '0914785623', 65000, 'Production', '2012-05-01'),
(8, 'Jawwad', 34, 'm', '0219478563', 50000, 'Production', '2019-03-01'),
(9, 'Haider', 39, 'm', '0632581479', 59000, 'Production', '2011-08-01'),
(10, 'Irtiza', 37, 'm', '0826395478', 57000, 'Production', '2010-12-01'),
(11, 'Usman', 33, 'm', '0456231789', 49000, 'Production', '2016-02-01'),
(12, 'Nasir', 41, 'm', '0765948231', 63000, 'Production', '2014-01-01'),
(13, 'Shakir', 35, 'm', '0139428562', 56000, 'Production', '2017-09-01'),
(14, 'Sajid', 38, 'm', '0598236471', 58000, 'Production', '2015-11-01'),
(15, 'Sajjad', 36, 'm', '0864219537', 52000, 'Production', '2018-04-01'),
(16, 'Shaheed', 40, 'm', '0278956341', 62000, 'Production', '2013-06-01'),
(17, 'Shaheen', 34, 'm', '0516278394', 50000, 'Production', '2019-05-01'),
(18, 'Sumaiya', 35, 'f', '0189537421', 66000, 'Production', '2012-09-01'),
(19, 'Fariha', 29, 'f', '0934756281', 60000, 'Production', '2011-03-01'),
(20, 'Faiza', 25, 'f', '0251639742', 61000, 'Production', '2010-06-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
