-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2018 at 12:40 PM
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
-- Database: `thesis`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `repass` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` int(11) NOT NULL,
  `gender` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `fname`, `mname`, `lname`, `password`, `repass`, `email`, `contact`, `gender`) VALUES
(1, 'Josephina', 'Gading', 'Gongon', '123456789', '123456789', 'josephgonz@gmail.com', 917254852, 'F'),
(2, 'Heintjie', 'V', 'Vicente', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'vicente@gmail.com', 917254852, 'M'),
(3, 'Ish', 'V', 'Juanatas', '123456789', '123456789', 'irish@gmail.com', 123456789, 'F'),
(4, 'Roman', 'De', 'Angel', '123456789', '123456789', 'romandeang@gmail.com', 123456789, 'M'),
(5, 'Ace', 'Lag', 'Mans', '123456789', '123456789', 'acelagman@yahoo.com', 123456789, 'M'),
(6, 'Ace', 'Lag', 'Man', '123456789', '123456789', 'acelagman@yahoo.com', 123456789, 'F'),
(7, 'Ma', 'Vicky', 'Solomo', '123456789', '123456789', 'vicksol@yahoo.com', 231456789, 'M'),
(8, 'Madam', 'Rosanna', 'Adao', '123456789', '123456789', 'rosadao@yahoo.com', 231456789, 'F'),
(9, 'Maria', 'Emil', 'Jacobo', '123', '123', 'mariaemil@hotmail.com', 2147483647, 'F'),
(10, 'Moira', 'Dela', 'Torre', '123', '123', 'moira@yahoo.com', 123456789, 'F');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `id` int(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `repass` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` int(25) NOT NULL,
  `gender` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`id`, `fname`, `mname`, `lname`, `password`, `repass`, `email`, `contact`, `gender`) VALUES
(1, 'Julia', 'B', 'Barretto', '123', '123', 'julbar@gmail.com', 123456789, 'F'),
(2, 'Nadine', 'Alexis', 'Lustre', '123', '123', 'nadzlustre@gmail.com', 987654321, 'F');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mname` varchar(50) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `repass` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` int(25) NOT NULL,
  `gender` char(1) NOT NULL,
  `status` int(1) NOT NULL,
  `usertype` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `fname`, `lname`, `mname`, `password`, `repass`, `email`, `contact`, `gender`, `status`, `usertype`) VALUES
(2, 'Anthony Jarl', 'Ane', 'L.', 'd9b1d7db4cd6e70935368a1efb10e377', '', 'anthony_ane@icloud.com', 2147483647, 'M', 0, 0),
(3, 'Lance', 'Manalo', 'Orquia', '123456789', '123456789', 'ljomanalo@gmail.com', 917425812, 'M', 0, 0),
(4, 'Darleneski', 'Teves', 'Fayeski', '123456789', '123456789', 'darleneteves@gmail.com', 906258879, 'F', 0, 0),
(6, 'Aina ', 'Sales', 'Daniella', '123456789', '123456789', 'ainadrsales@gmail.com', 917123456, 'F', 0, 0),
(7, 'Diana', 'Yatar', 'Arianne', '123456789', '123456789', 'arianne@gmail.com', 917258478, 'F', 0, 0),
(8, 'MK', 'Campo', 'Torre', '123456789', '123456789', 'mk@gmail.com', 925874569, 'F', 0, 0),
(9, 'Queen', 'Pan', 'Abegail', '1234', '1234', 'abipan@gmail.com', 917123456, 'F', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
