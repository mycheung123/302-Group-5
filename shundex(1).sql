-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 13, 2018 at 11:35 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shundex`
--

-- --------------------------------------------------------

--
-- Table structure for table `compensation`
--

CREATE TABLE `compensation` (
  `compenNum` int(11) NOT NULL,
  `invoiceNumber` int(11) NOT NULL,
  `description` text NOT NULL,
  `compenAmount` int(11) NOT NULL,
  `reason` char(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `compensation`
--

INSERT INTO `compensation` (`compenNum`, `invoiceNumber`, `description`, `compenAmount`, `reason`) VALUES
(1, 1, '456', 2, '3'),
(2, 4444444, '6567456', 0, ''),
(3, 4444444, '6567456', 0, ''),
(4, 123, '6546', 777, 'idk'),
(5, 43652346, '2456456', 0, ''),
(6, 43652346, '2456456', 111111111, 'hdr'),
(7, 43545, '567456', 0, ''),
(8, 43545, '567456', 555, 'fhyesy'),
(9, 35435, '345345', 0, ''),
(10, 23523, '2342134', 8964, '66666666'),
(11, 12323, '3123', 0, ''),
(12, 13423, '4234', 0, ''),
(13, 234, '34534', 0, ''),
(14, 132, 'i am teemo', 999, 'fdgert'),
(15, 0, '', 0, ''),
(16, 0, '', 0, ''),
(17, 456, 'ngivjwatwet', 0, ''),
(18, 353245, 'hgrsfgbsfbyabher', 0, ''),
(19, 8964, 'guioehrtgouhto', 99, 'hihihihihih'),
(20, 1, 'hihihi', 100, 'no damage'),
(21, 2, 'hihihi', 0, ''),
(22, 1, 'your things broken', 689, 'no damage'),
(23, 2, 'broken', 100, 'successful'),
(24, 2, 'my things is broken', 100, 'it is our mistakes'),
(25, 1, 'my things are broken', 1000, 'sorry it is our mistake');

-- --------------------------------------------------------

--
-- Table structure for table `internal`
--

CREATE TABLE `internal` (
  `invoiceNumber` int(11) NOT NULL,
  `recipientCode` char(8) NOT NULL,
  `proDes` varchar(80) NOT NULL,
  `recipientName` varchar(50) NOT NULL,
  `recipientPH` varchar(16) NOT NULL,
  `recipientEmail` varchar(50) NOT NULL,
  `orderDate` date NOT NULL,
  `wareHouseAdd` varchar(50) NOT NULL,
  `shippingAdd1` varchar(50) NOT NULL,
  `shippingAdd2` varchar(50) NOT NULL,
  `shippingAdd3` varchar(50) NOT NULL,
  `shippingAdd4` varchar(20) NOT NULL,
  `productWeight` varchar(6) NOT NULL,
  `productSize` varchar(21) NOT NULL,
  `shippingPrice` int(6) NOT NULL,
  `shippingCost` int(6) NOT NULL,
  `deliveryCompletion` tinyint(1) NOT NULL,
  `shippingStatus` char(20) NOT NULL,
  `shippingDate` date NOT NULL,
  `expectedArrDate` date NOT NULL,
  `batch` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internal`
--

INSERT INTO `internal` (`invoiceNumber`, `recipientCode`, `proDes`, `recipientName`, `recipientPH`, `recipientEmail`, `orderDate`, `wareHouseAdd`, `shippingAdd1`, `shippingAdd2`, `shippingAdd3`, `shippingAdd4`, `productWeight`, `productSize`, `shippingPrice`, `shippingCost`, `deliveryCompletion`, `shippingStatus`, `shippingDate`, `expectedArrDate`, `batch`) VALUES
(1, 'RC000001', 'testing one two three', '689', '23800000', 'abc@123.com', '2018-03-06', 'HK', 'xxx building', 'Tat chee Avenue', 'Central', 'Hong Kong', '777', '100x150x80', 39, 20, 1, 'pending', '2018-03-06', '2018-03-10', '2'),
(2, 'RC000002', 'testing one two three', '689', '23800000', 'abc@123.com', '2018-03-06', 'HK', 'Laguna City', 'Lam Tin', 'Kowloon', 'Hong Kong', '777', '100x150x80', 39, 20, 1, 'delivering', '2018-03-06', '2018-03-10', '2'),
(3, 'RC000003', 'testing one two three', '689', '23800000', 'abc@123.com', '2018-03-06', 'HK', 'ChinaChem', 'TST', 'Kowloon', 'Hong Kong', '777', '100x150x80', 39, 20, 0, 'end', '2018-03-06', '2018-03-10', '2'),
(4, 'RC000004', 'testing one two three', '689', '23800000', 'abc@123.com', '2018-03-06', 'HK', 'IFC', 'Central', 'Hong Kong Island', 'Hong Kong', '777', '100x150x80', 39, 20, 1, '', '2018-03-06', '2018-03-10', '2'),
(5, 'RC000005', 'testing one two three', '689', '23800000', 'abc@123.com', '2018-03-06', 'UK', 'Aon Training Complex', 'Carrington', 'Manchester', 'UK', '777', '100x150x80', 39, 20, 0, 'end', '2018-03-06', '2018-03-10', '3'),
(6, 'RC000006', 'testing one two three', '689', '23800000', 'abc@123.com', '2018-03-06', 'UK', 'Old Trafford', 'Streford', 'Manchester', 'UK', '777', '100x150x80', 39, 20, 1, '', '2018-03-06', '2018-03-10', '3'),
(7, 'RC000001', 'testing one two three', '689', '23800000', 'abc@123.com', '2018-03-06', 'UK', 'Cobham Training Centre', 'Surrey', 'London', 'UK', '777', '100x150x80', 39, 20, 0, 'end', '2018-03-06', '2018-03-10', '3'),
(8, 'RC000002', 'testing one two three', '689', '23800000', 'abc@123.com', '2018-03-06', 'UK', 'Stamford bridge', 'Fulham Road', 'London', 'UK', '777', '100x150x80', 39, 20, 1, '', '2018-03-06', '2018-03-10', '3'),
(9, 'RC000001', 'testing one two three', '689', '23800000', 'abc@123.com', '2018-03-06', 'UK', 'Arsenal Training Centre', 'Hertfordshire', 'London', 'UK', '777', '100x150x80', 39, 20, 0, 'end', '2018-03-06', '2018-03-10', '3'),
(10, 'RC000002', 'testing one two three', '689', '23800000', 'abc@123.com', '2018-03-06', 'UK', 'Emirates Stadium', 'Hornsey Road', 'London', 'UK', '777', '100x150x80', 39, 20, 1, 'finished', '2018-03-06', '2018-03-10', '3'),
(11, 'RC000003', 'testing one two three', '689', '23800000', 'abc@123.com', '2018-03-06', 'UK', 'White Heart Lane', 'Tottenham', 'London', 'UK', '777', '100x150x80', 39, 20, 0, 'end', '2018-03-06', '2018-03-10', '3'),
(12, 'RC000005', 'testing one two three', '689', '23800000', 'abc@123.com', '2018-03-06', 'HK', 'add1', 'add2', 'add3', 'add4', '777', '100x150x80', 39, 20, 1, '', '2018-03-06', '2018-03-10', '4'),
(13, 'RC000007', 'testing one two three', '689', '23800000', 'abc@123.com', '2018-03-06', 'HK', 'add1', 'add2', 'add3', 'add4', '777', '100x150x80', 39, 20, 0, 'end', '2018-03-06', '2018-03-10', '4'),
(14, 'RC000008', 'testing one two three', '689', '23800000', 'abc@123.com', '2018-03-06', 'HK', 'add1', 'add2', 'add3', 'add4', '777', '100x150x80', 39, 20, 1, '', '2018-03-06', '2018-03-10', '4'),
(15, 'RC000010', 'testing one two three', '689', '23800000', 'abc@123.com', '2018-03-06', 'HK', 'add1', 'add2', 'add3', 'add4', '777', '100x150x80', 39, 20, 0, 'end', '2018-03-06', '2018-03-10', '4'),
(16, 'RC000004', 'testing one two three', '689', '23800000', 'abc@123.com', '2018-03-06', 'HK', 'add1', 'add2', 'add3', 'add4', '777', '100x150x80', 39, 20, 1, '', '2018-03-06', '2018-03-10', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `compensation`
--
ALTER TABLE `compensation`
  ADD PRIMARY KEY (`compenNum`);

--
-- Indexes for table `internal`
--
ALTER TABLE `internal`
  ADD PRIMARY KEY (`invoiceNumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `compensation`
--
ALTER TABLE `compensation`
  MODIFY `compenNum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `internal`
--
ALTER TABLE `internal`
  MODIFY `invoiceNumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
