-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2018 at 05:33 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bike_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `pass`, `email`, `status`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 0),
(2, 'user', '1234', 'usr@email.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bike`
--

CREATE TABLE `bike` (
  `id` int(11) NOT NULL,
  `model` varchar(50) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `price` float(12,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `imgurl` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bike`
--

INSERT INTO `bike` (`id`, `model`, `brand_id`, `price`, `quantity`, `status`, `imgurl`) VALUES
(111, 'Yamaha FZS', 2004, 220000.00, 20, 0, 'bike/download (2).jpg'),
(112, 'Hero Hunk', 2005, 180000.00, 8, 0, 'bike/download (3).jpg'),
(113, 'AMR Bike', 2006, 120000.00, 6, 0, 'bike/images (2).jpg'),
(114, 'Pulser GHS', 2006, 120000.00, 8, 0, 'bike/download (5).jpg'),
(115, 'Hero Honda-SSK', 2005, 120000.00, 6, 0, 'bike/honda-livo-side-blue.jpg'),
(116, 'Bajaj-S01', 2007, 220000.00, 6, 0, 'bike/bajaj-pulsar-rs-200-racing-blue.png'),
(117, 'Honda FZS', 2006, 180000.00, 20, 0, 'bike/v_glamour-2017-drum_600x300.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `imgurl` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `name`, `status`, `imgurl`) VALUES
(2004, 'Yamaha', 0, 'brand/download (1).png'),
(2005, 'Hero Honda', 0, 'brand/download (2).png'),
(2006, 'Honda', 0, 'brand/download (7).jpg'),
(2007, 'Bajaj', 0, 'brand/logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

CREATE TABLE `parts` (
  `id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `model` varchar(50) NOT NULL,
  `price` float(6,2) NOT NULL,
  `quantity` int(4) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `imgurl` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parts`
--

INSERT INTO `parts` (`id`, `type_id`, `model`, `price`, `quantity`, `status`, `imgurl`) VALUES
(1, 1, 'HRZ HELMET', 9000.00, 20, 1, 'parts/51uuxBaUBrL.png'),
(202, 32, 'Air Filter-S08', 6000.00, 15, 0, 'parts/AIRfilter.jpg'),
(203, 35, 'Haque Battery-FF9', 8590.00, 10, 0, 'parts/download (5).jpg'),
(204, 34, 'Hero Helmet', 1900.00, 14, 0, 'parts/download (2).jpg'),
(205, 36, 'Omera Engine Oil', 6000.00, 10, 0, 'parts/download (4).jpg'),
(206, 33, 'Brake-XX0S', 1900.00, 14, 0, 'parts/images (1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `parts_type`
--

CREATE TABLE `parts_type` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `imgurl` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parts_type`
--

INSERT INTO `parts_type` (`id`, `name`, `status`, `imgurl`) VALUES
(1, 'AUTO GEAR', 1, 'type/20170105_233733.jpg'),
(2, 'RUNNER AUTO ENGINE', 1, 'type/20170106_113757.jpg'),
(32, 'Air Filter', 0, 'aType/air_filter.jpg'),
(33, 'Brake', 0, 'aType/brake.jpg'),
(34, 'Helmet', 0, 'aType/helmet.jpg'),
(35, 'Battery', 0, 'aType/battery.jpg'),
(36, 'Engine Oil', 0, 'aType/engineoil.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uname` varchar(25) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `city` varchar(12) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bike`
--
ALTER TABLE `bike`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parts`
--
ALTER TABLE `parts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parts_type`
--
ALTER TABLE `parts_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bike`
--
ALTER TABLE `bike`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2008;

--
-- AUTO_INCREMENT for table `parts`
--
ALTER TABLE `parts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=207;

--
-- AUTO_INCREMENT for table `parts_type`
--
ALTER TABLE `parts_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
