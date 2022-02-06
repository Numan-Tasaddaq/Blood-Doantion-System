-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2022 at 12:31 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donate`
--

-- --------------------------------------------------------

--
-- Table structure for table `dform`
--

CREATE TABLE `dform` (
  `id` int(11) NOT NULL,
  `Fname` varchar(30) NOT NULL,
  `Lname` varchar(30) NOT NULL,
  `Contact No` varchar(12) NOT NULL,
  `address` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Blood Type` varchar(50) NOT NULL,
  `DonatedBefore` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dform`
--

INSERT INTO `dform` (`id`, `Fname`, `Lname`, `Contact No`, `address`, `City`, `Blood Type`, `DonatedBefore`) VALUES
(1, 'Numan Tasaddaq', '', '03494852399', 'st#17 Mazharabad Scheme 7', 'Rawalpindi', 'A+', 0),
(2, 'xyz', '', '1000', 'Rawalpind, pakistan', 'Rawalpindi', 'A+', 0),
(3, 'Numan Tasaddaq', '', '03494852399', 'st#17 Mazharabad Scheme 7', 'Rawalpindi', 'O+', 0),
(4, 'ali', 'abbas', '434242424343', 'street 6', 'jhang', 'o+', 0),
(5, 'Numan', 'Tasaddaq', '03494852399', 'st#17 Mazharabad Scheme 7', 'Rawalpindi', '', 1),
(6, 'Numan', 'Tasaddaq', '03494852399', 'st#17 Mazharabad Scheme 7', 'Rawalpindi', '', 1),
(7, 'zeeshan', 'Tasaddaq', '423442423424', 'st#17 Mazharabad Scheme 7', 'Rawalpindi', 'B+', 0);

-- --------------------------------------------------------

--
-- Table structure for table `receivers`
--

CREATE TABLE `receivers` (
  `id` int(11) NOT NULL,
  `Fname` varchar(30) NOT NULL,
  `Lname` varchar(30) NOT NULL,
  `Contact No` int(12) NOT NULL,
  `address` text NOT NULL,
  `City` varchar(25) NOT NULL,
  `Blood Type` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dform`
--
ALTER TABLE `dform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receivers`
--
ALTER TABLE `receivers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dform`
--
ALTER TABLE `dform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `receivers`
--
ALTER TABLE `receivers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
