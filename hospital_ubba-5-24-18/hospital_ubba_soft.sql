-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2018 at 09:15 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital_ubba_soft`
--

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `id` int(11) NOT NULL,
  `coupon_num` int(11) NOT NULL,
  `date_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`id`, `coupon_num`, `date_time`) VALUES
(1, 1, '18-05-23/12:07:05'),
(2, 2, '18-05-23/10:46:05');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `datee` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `datee`) VALUES
(1, '0', 2018),
(2, '0', 2018),
(3, '0', 2018),
(4, '0', 2018),
(5, 'io', 2018),
(6, 'yu', 2018);

-- --------------------------------------------------------

--
-- Table structure for table `p_data_entry`
--

CREATE TABLE `p_data_entry` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `disease` varchar(50) NOT NULL,
  `p_num` int(11) NOT NULL,
  `c_type` varchar(50) NOT NULL,
  `datee` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_data_entry`
--

INSERT INTO `p_data_entry` (`id`, `name`, `disease`, `p_num`, `c_type`, `datee`) VALUES
(1, '23', 'ui', 8, 'New', '2018-05-09'),
(2, 'ioooo', 'ui', 8, 'New', '2018-05-09'),
(3, '89', '8989', 8, 'New', '2018-05-10'),
(4, '23', 'io`', 90, 'Classified', '2018-05-09'),
(5, 'ioooo', '90', 90, 'New', '2018-05-16'),
(6, 'majid', 'yuy', 67, 'Old', '2018-05-20'),
(7, 'io', 'io', 90, 'Old', '2018-05-03');

-- --------------------------------------------------------

--
-- Table structure for table `p_events`
--

CREATE TABLE `p_events` (
  `id` int(11) NOT NULL,
  `events` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `disease` varchar(50) NOT NULL,
  `p_num` int(11) NOT NULL,
  `c_type` varchar(50) NOT NULL,
  `datee` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_events`
--

INSERT INTO `p_events` (`id`, `events`, `name`, `disease`, `p_num`, `c_type`, `datee`) VALUES
(1, '0', '23', '66', 66, 'New', '2018-05-21'),
(2, '0', 'majid', '787', 7878, 'Old', '2018-05-21'),
(3, 'io', '90', '9', 9, 'New', '2018-05-01'),
(4, 'io', 'ui', 'u', 89, 'Old', '2018-05-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_data_entry`
--
ALTER TABLE `p_data_entry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_events`
--
ALTER TABLE `p_events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `p_data_entry`
--
ALTER TABLE `p_data_entry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `p_events`
--
ALTER TABLE `p_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
