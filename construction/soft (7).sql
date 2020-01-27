-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2017 at 06:50 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `softy`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE IF NOT EXISTS `bill` (
  `bill_id` int(11) NOT NULL AUTO_INCREMENT,
  `q` double(10,0) NOT NULL,
  `pr` double(10,0) NOT NULL,
  `date` datetime NOT NULL,
  `p` varchar(50) NOT NULL,
  `bno` longtext NOT NULL,
  `cust` varchar(2000) NOT NULL,
  PRIMARY KEY (`bill_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=253 ;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_id`, `q`, `pr`, `date`, `p`, `bno`, `cust`) VALUES
(119, 12, 12, '2017-08-19 20:52:00', 'sas', '1', ''),
(120, 12, 12, '2017-08-19 21:00:21', 'ere', '2', ''),
(121, 4, 100, '2017-08-19 22:28:55', 'd313 kit', '3', ''),
(122, 12, 180, '2017-08-19 22:28:55', 'tr 3ah', '3', ''),
(123, 15, 10, '2017-08-19 22:28:55', 'vol grari', '3', ''),
(124, 4, 10, '2017-08-19 22:51:26', 'ST VOL', '4', ''),
(125, 4, 180, '2017-08-19 22:51:26', 'TR 3AH', '4', ''),
(126, 180, 12, '2017-08-19 22:55:14', 'TR 3AH', '5', ''),
(127, 0, 0, '2017-08-19 22:55:14', '', '5', ''),
(128, 4, 12, '2017-08-20 18:07:21', 'rrtt', '6', ''),
(129, 4, 12, '2017-08-20 18:16:33', 'rrtt', '7', ''),
(130, 4, 12, '2017-08-20 18:18:57', 'rrtt', '8', ''),
(131, 4, 12, '2017-08-20 18:23:48', 'rrtt', '9', ''),
(132, 2, 1, '2017-08-20 18:28:18', 'ww', '10', ''),
(133, 2, 1, '2017-08-20 18:33:35', 'ww', '11', ''),
(134, 1, 2, '2017-08-20 18:34:15', 'e', '12', ''),
(135, 1, 2, '2017-08-20 18:53:46', 'e', '13', ''),
(136, 1, 2, '2017-08-20 19:00:44', 'e', '14', ''),
(137, 1, 2, '2017-08-20 19:01:49', 'e', '15', ''),
(138, 1, 2, '2017-08-20 19:02:57', 'e', '16', ''),
(139, 12, 12, '2017-08-20 19:57:17', 'qqq', '17', ''),
(140, 1, 1, '2017-08-20 19:59:30', 'ss', '18', ''),
(141, 1, 1, '2017-08-20 20:27:50', 'gg', '19', ''),
(142, 4, 180, '2017-08-21 00:02:46', '3ah', '20', ''),
(143, 7, 100, '2017-08-21 00:02:46', 'd313 kit', '20', ''),
(144, 100, 10, '2017-08-21 00:02:46', 'st vol', '20', ''),
(168, 3, 100, '2017-08-22 18:51:24', 'd313 kit', '21', ''),
(169, 4, 2, '2017-08-22 20:01:05', 'www', '22', ''),
(170, 5, 6, '2017-08-22 20:11:25', 'cdcd', '23', ''),
(171, 6, 160, '2017-08-23 22:45:02', 'TR 2AH', '24', ''),
(172, 0, 0, '2017-08-23 23:10:24', 'st', '25', ''),
(173, 4, 6, '2017-08-23 23:12:47', 'frfr', '26', ''),
(174, 3, 0, '2017-08-23 23:12:47', 'BULB 5W', '26', ''),
(175, 0, 10, '2017-08-23 23:12:47', 'st vol', '26', ''),
(176, 5, 10, '2017-08-23 23:16:47', 'sunora vol', '27', ''),
(177, 5, 0, '2017-08-23 23:16:47', 'sunara vol', '27', ''),
(178, 7, 180, '2017-08-23 23:16:48', '3ah', '27', ''),
(179, 76, 0, '2017-08-23 23:16:48', 'BULB 5W', '27', ''),
(180, 3, 12, '2017-08-23 23:26:17', 'dada', '28', ''),
(181, 2, 34, '2017-08-23 23:26:17', 'qqq', '28', ''),
(182, 41, 45, '2017-08-23 23:26:17', 'a3', '28', ''),
(183, 3, 5, '2017-09-03 15:37:13', 'sabun', '29', ''),
(184, 3, 18, '2017-09-03 16:29:22', 'togle 2 pin sw', '30', ''),
(185, 6, 6, '2017-09-03 16:29:22', 'm sw', '30', ''),
(186, 3, 0, '2017-09-03 16:29:22', 'togle 2pin', '30', ''),
(187, 6, 3, '2017-09-03 16:33:00', 'hole sw', '31', ''),
(188, 10, 2, '2017-09-03 16:33:00', 'simple sw', '31', ''),
(189, 6, 6, '2017-09-03 16:33:00', 'm sw', '31', ''),
(190, 5, 0, '2017-09-03 16:33:00', 'dp nut soc', '31', ''),
(191, 0, 0, '2017-09-03 16:33:00', '', '31', ''),
(192, 6, 6, '2017-09-03 16:35:14', 'dc nut sock', '32', ''),
(193, 6, 6, '2017-09-03 16:37:29', 'dc nut sock', '33', ''),
(194, 4, 5, '2017-09-03 16:37:29', 'dc pin', '33', ''),
(195, 7, 3, '2017-09-03 16:37:29', 'dc sock', '33', ''),
(196, 7, 5, '2017-09-03 16:37:29', 'dp sw', '33', ''),
(197, 49, 6, '2017-09-03 16:54:26', 'dc nut sock', '34', ''),
(198, 20, 0, '2017-09-03 16:54:26', 'd313 kit', '34', ''),
(199, 50, 5, '2017-09-03 16:54:26', 'dp sw', '34', ''),
(200, 4, 6, '2017-09-03 16:54:26', 'm sw', '34', ''),
(201, 6, 0, '2017-09-03 16:54:26', 'BULB 5W', '34', ''),
(202, 0, 0, '2017-09-03 16:54:26', '', '34', ''),
(203, 5, 2, '2017-09-03 22:13:01', 'simple sw', '35', ''),
(204, 4, 3, '2017-09-03 22:13:01', 'hole sw', '35', ''),
(205, 4, 6, '2017-09-03 22:13:01', '3+3 big sw', '35', ''),
(206, 5, 5, '2017-09-03 22:13:01', '3+3 medium sw', '35', ''),
(207, 5, 2, '2017-09-03 22:13:01', '3+3 small 4sw', '35', ''),
(208, 4, 9, '2017-09-03 22:13:01', 'banana sho', '35', ''),
(209, 0, 0, '2017-09-03 22:13:01', '', '35', ''),
(210, 8, 80, '2017-09-04 18:42:57', '800mah tr', '36', ''),
(211, 7, 2, '2017-09-04 18:42:57', '5mm rgb', '36', ''),
(212, 7, 3, '2017-09-04 18:42:57', 'codo sw', '36', ''),
(213, 0, 3, '2017-09-04 18:49:13', 'hole sw', '37', ''),
(214, 0, 50, '2017-09-04 18:49:13', 'sacker', '37', ''),
(215, 0, 2, '2017-09-04 18:49:13', 'simple sw', '37', ''),
(216, 0, 4, '2017-09-04 18:49:13', 'sogo sw', '37', ''),
(217, 0, 60, '2017-09-04 18:49:13', 'solder packet', '37', ''),
(218, 0, 5, '2017-09-04 18:49:13', 'sony pin ', '37', ''),
(219, 0, 3, '2017-09-04 18:49:13', 'ac dc sw', '37', ''),
(220, 0, 40, '2017-09-04 18:49:13', 'antina', '37', ''),
(221, 0, 3, '2017-09-04 19:51:16', 'hole sw', '38', ''),
(222, 0, 2, '2017-09-04 19:52:42', 'simple sw', '39', ''),
(223, 0, 0, '2017-09-04 19:52:42', '', '39', ''),
(224, 1, 60, '2017-09-04 19:52:42', '5w metal bulb', '39', ''),
(225, 4, 60, '2017-09-04 19:57:09', '5w metal bulb', '40', ''),
(226, 6, 3, '2017-09-04 19:57:09', 'hole sw', '40', ''),
(227, 5, 6, '2017-09-04 19:57:09', '3+3 big sw', '40', ''),
(228, 6, 32, '2017-09-04 19:57:09', '3+3 boss', '40', ''),
(229, 6, 5, '2017-09-04 19:57:09', '3+3 medium sw', '40', ''),
(230, 7, 2, '2017-09-04 19:57:09', '3+3 small 4sw', '40', ''),
(231, 6, 6, '2017-09-04 20:06:57', '30ah clip', '41', ''),
(232, 0, 0, '2017-09-04 20:06:57', '', '41', ''),
(233, 0, 0, '2017-09-04 20:11:50', '', '42', ''),
(234, 7, 0, '2017-09-04 20:19:42', 'asa', '43', ''),
(235, 0, 0, '2017-09-04 20:19:42', '', '43', ''),
(236, 7, 0, '2017-09-04 20:20:17', 'asa', '44', ''),
(237, 4, 7, '2017-09-04 20:20:17', 'rtt', '44', ''),
(238, 5, 33, '2017-09-04 20:20:17', '345', '44', ''),
(239, 7, 0, '2017-09-04 20:20:56', 'asa', '45', ''),
(240, 1, 5, '2017-09-11 08:13:50', 'dp sock', '46', ''),
(241, 3, 3, '2017-09-11 08:13:50', 'dc sock', '46', ''),
(242, 1, 3, '2017-09-11 09:03:19', 'hole sw', '47', ''),
(243, 1, 7, '2017-09-11 09:03:19', 'fuse holder small', '47', ''),
(244, 1, 8, '2017-09-11 09:03:19', 'fast lead ', '47', ''),
(245, 1, 15, '2017-09-11 09:03:19', 'sunora vol', '47', ''),
(246, 4, 5, '2017-09-11 09:03:19', 'dp sock', '47', ''),
(247, 3, 133, '2017-09-11 09:16:11', 'wwww', '48', ''),
(248, 4, 5, '2017-09-11 09:16:11', 'dp sw', '48', ''),
(249, 2, 12, '2017-09-11 09:16:12', 'ddd', '48', ''),
(250, 1, 0, '2017-09-11 09:18:49', 'qqqqqz', '49', ''),
(251, 11, 151, '2017-09-11 09:41:02', '1.5gm patta elfy', '50', ''),
(252, 1, 150, '2017-09-11 09:41:03', '1.5gm patta elfy', '50', '');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(4, 'general'),
(5, 'u6yt');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'general');

-- --------------------------------------------------------

--
-- Table structure for table `medi`
--

CREATE TABLE IF NOT EXISTS `medi` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) NOT NULL,
  `file_type` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE IF NOT EXISTS `media` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) NOT NULL,
  `file_type` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `quantity` varchar(50) DEFAULT NULL,
  `buy_price` double(25,2) DEFAULT NULL,
  `sale_price` double(25,2) NOT NULL,
  `categorie_id` int(11) unsigned NOT NULL,
  `media_id` int(11) DEFAULT '0',
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `categorie_id` (`categorie_id`),
  KEY `media_id` (`media_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=347 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `quantity`, `buy_price`, `sale_price`, `categorie_id`, `media_id`, `date`) VALUES
(84, 'hole sw', '-4', 2.00, 3.00, 1, 0, '2017-09-03 13:00:03'),
(85, 'simple sw', '-7', 1.00, 2.00, 1, 0, '2017-09-03 13:00:56'),
(86, '3+3 small 4sw', '-8', 1.00, 2.00, 1, 0, '2017-09-03 13:02:45'),
(87, '3+3 medium sw', '-6', 4.00, 5.00, 1, 0, '2017-09-03 13:03:23'),
(88, '3+3 big sw', '-4', 5.00, 6.00, 1, 0, '2017-09-03 13:03:50'),
(89, 'ac dc sw', '5', 2.00, 3.00, 1, 0, '2017-09-03 13:05:43'),
(90, '3way sw', '6', 2.00, 3.00, 1, 0, '2017-09-03 13:06:01'),
(91, 'dp sw', '-54', 2.00, 5.00, 1, 0, '2017-09-03 13:07:36'),
(92, 'm sw', '-9', 5.00, 6.00, 1, 0, '2017-09-03 13:07:59'),
(93, '16 pin sw', '6', 6.00, 10.00, 1, 0, '2017-09-03 13:08:30'),
(94, '8 pin big sw', '5', 7.00, 8.00, 1, 0, '2017-09-03 13:09:03'),
(95, 'togle 6pin 2way sw', '5', 25.00, 30.00, 1, 0, '2017-09-03 13:10:18'),
(96, 'togle 2 pin sw', '2', 17.00, 18.00, 1, 0, '2017-09-03 13:10:47'),
(97, 'togle small sw', '4', 13.00, 15.00, 1, 0, '2017-09-03 13:11:17'),
(98, 'togle 3way sw', '25', 25.00, 35.00, 1, 0, '2017-09-03 13:13:09'),
(99, 'trali sw', '4', 5.00, 6.00, 1, 0, '2017-09-03 13:13:33'),
(100, 'mp3 sw', '6', 1.00, 3.00, 1, 0, '2017-09-03 13:13:55'),
(101, '4pin sw', '2', 2.00, 3.00, 1, 0, '2017-09-03 13:14:24'),
(102, 'sogo sw ', '4', 3.00, 4.00, 1, 0, '2017-09-03 13:15:05'),
(103, 'dp sock', '0', 4.00, 5.00, 1, 0, '2017-09-03 13:15:49'),
(104, 'mic sock', '3', 3.00, 4.00, 1, 0, '2017-09-03 13:16:10'),
(105, 'dc sock', '-6', 2.00, 3.00, 1, 0, '2017-09-03 13:16:48'),
(106, 'dc nut sock', '-57', 5.00, 6.00, 1, 0, '2017-09-03 13:17:17'),
(107, '2pin rc sock', '4', 4.00, 5.00, 1, 0, '2017-09-03 13:17:58'),
(108, '4pin rc sock', '4', 7.00, 8.00, 1, 0, '2017-09-03 13:18:50'),
(109, '6pin rc sock', '6', 8.00, 10.00, 1, 0, '2017-09-03 13:19:08'),
(110, 'st pin ', '5', 3.00, 4.00, 1, 0, '2017-09-03 13:19:39'),
(111, 'dc pin', '2', 4.00, 5.00, 1, 0, '2017-09-03 13:20:02'),
(112, 'mono pin', '4', 3.00, 4.00, 1, 0, '2017-09-03 13:20:29'),
(113, 'mic pin big', '5', 7.00, 8.00, 1, 0, '2017-09-03 13:20:59'),
(114, 'rc pin', '7', 2.00, 3.00, 1, 0, '2017-09-03 13:21:23'),
(115, 'sony pin', '5', 4.00, 5.00, 1, 0, '2017-09-03 13:21:43'),
(116, 'fuse holder small', '4', 6.00, 7.00, 1, 0, '2017-09-03 13:22:26'),
(117, 'fuse holder big', '6', 7.00, 8.00, 1, 0, '2017-09-03 13:22:52'),
(118, 'banana sho', '2', 8.00, 9.00, 1, 0, '2017-09-03 13:23:39'),
(119, 'n70 sock', '6', 1.00, 1.00, 1, 0, '2017-09-03 13:26:48'),
(120, '8600 sock', '6', 4.00, 5.00, 1, 0, '2017-09-03 13:27:30'),
(121, 'togle 2pin', '3', 0.00, 0.00, 1, 0, '2017-09-03 16:29:22'),
(122, 'dp nut soc', '5', 0.00, 0.00, 1, 0, '2017-09-03 16:33:00'),
(123, '', '', 0.00, 0.00, 1, 0, '2017-09-03 16:33:00'),
(124, '7210 sock', '1', 1.00, 1.00, 1, 0, '2017-09-03 13:38:27'),
(125, 'wire sock', '5', 4.00, 5.00, 1, 0, '2017-09-03 13:38:59'),
(126, '110 sock', '4', 5.00, 6.00, 1, 0, '2017-09-03 13:39:28'),
(127, 'terminal s', '6', 42.00, 45.00, 1, 0, '2017-09-03 13:40:24'),
(128, 'terminal b', '40', 40.00, 45.00, 1, 0, '2017-09-03 13:40:47'),
(129, 'cng sw', '4', 6.00, 7.00, 1, 0, '2017-09-03 13:41:10'),
(130, 'codo sw', '-4', 2.00, 3.00, 1, 0, '2017-09-03 13:41:28'),
(131, '3pin ups sw', '4', 11.00, 12.00, 1, 0, '2017-09-03 13:44:47'),
(132, '4pin ups sw', '11', 11.00, 15.00, 1, 0, '2017-09-03 13:45:55'),
(133, '6 pin ups sw', '4', 18.00, 20.00, 1, 0, '2017-09-03 13:46:41'),
(134, '6pin ups 3 way sw', '30', 30.00, 40.00, 1, 0, '2017-09-03 13:47:26'),
(135, 'st vol', '4', 7.00, 8.00, 1, 0, '2017-09-03 13:48:31'),
(136, 'mono vol', '4', 6.00, 7.00, 1, 0, '2017-09-03 13:48:59'),
(137, 'garari vol', '4', 9.00, 10.00, 1, 0, '2017-09-03 13:49:23'),
(138, 'vol antic', '4', 20.00, 20.00, 1, 0, '2017-09-03 13:50:06'),
(139, 'sunora vol', '3', 11.00, 15.00, 1, 0, '2017-09-03 13:50:32'),
(140, 'touch vol ', '5', 35.00, 40.00, 1, 0, '2017-09-03 13:51:05'),
(141, 'can vol ', '11', 8.00, 10.00, 1, 0, '2017-09-03 13:51:36'),
(142, 'antina', '40', 35.00, 40.00, 1, 0, '2017-09-03 13:51:58'),
(143, 'd313 kit', '20', 0.00, 0.00, 1, 0, '2017-09-03 16:54:26'),
(144, 'BULB 5W', '6', 0.00, 0.00, 1, 0, '2017-09-03 16:54:26'),
(146, '1000/16', '5', 1.00, 2.00, 1, 0, '2017-09-03 19:16:48'),
(147, '1000/25', '4', 2.00, 3.00, 1, 0, '2017-09-03 19:17:12'),
(148, '1000/35', '4', 3.00, 4.00, 1, 0, '2017-09-03 19:18:06'),
(149, '1000/50', '3', 5.00, 6.00, 1, 0, '2017-09-03 19:18:40'),
(150, '2200/16', '4', 3.00, 4.00, 1, 0, '2017-09-03 19:19:01'),
(151, '2200/25', '5', 7.00, 8.00, 1, 0, '2017-09-03 19:19:17'),
(152, '2200/35', '4', 7.00, 8.00, 1, 0, '2017-09-03 19:19:35'),
(153, '2200/50', '4', 11.00, 12.00, 1, 0, '2017-09-03 19:20:10'),
(154, '3300/50', '5', 13.00, 15.00, 1, 0, '2017-09-03 19:20:44'),
(155, '4700/25', '5', 11.00, 12.00, 1, 0, '2017-09-03 19:21:06'),
(156, '4700/35', '4', 15.00, 16.00, 1, 0, '2017-09-03 19:21:54'),
(157, '4700/50', '4', 19.00, 20.00, 1, 0, '2017-09-03 19:22:18'),
(158, '6800/50 big', '5', 28.00, 30.00, 1, 0, '2017-09-03 19:22:45'),
(159, '6800/50 small', '5', 22.00, 25.00, 1, 0, '2017-09-03 19:23:20'),
(160, '100/16', '6', 1.00, 1.00, 1, 0, '2017-09-03 19:23:51'),
(161, '3300/35', '7', 11.00, 12.00, 1, 0, '2017-09-03 19:24:14'),
(162, '100/50', '5', 1.00, 1.00, 1, 0, '2017-09-03 19:24:58'),
(163, '220/16', '5', 1.00, 1.00, 1, 0, '2017-09-03 19:25:46'),
(164, '.47/50', '5', 1.00, 1.00, 1, 0, '2017-09-03 19:26:16'),
(165, '5w registon', '3', 2.00, 3.00, 1, 0, '2017-09-03 19:27:23'),
(166, '10w registon', '4', 4.00, 4.00, 1, 0, '2017-09-03 19:27:44'),
(167, '1k registon 1k pack', '4', 90.00, 100.00, 1, 0, '2017-09-03 19:28:50'),
(168, '105/250', '5', 2.00, 3.00, 1, 0, '2017-09-03 19:29:21'),
(169, '155/400', '6', 3.00, 4.00, 1, 0, '2017-09-03 19:29:40'),
(170, 'diode 1am 100pcs', '5', 40.00, 50.00, 1, 0, '2017-09-04 11:41:58'),
(171, 'diode 2am ', '5', 1.00, 1.00, 1, 0, '2017-09-04 11:42:32'),
(172, 'diode 3am ', '6', 2.00, 2.00, 1, 0, '2017-09-04 11:42:51'),
(173, 'diode 6am', '5', 2.00, 3.00, 1, 0, '2017-09-04 11:43:12'),
(174, 'diode 10am ', '6', 3.00, 4.00, 1, 0, '2017-09-04 11:43:36'),
(175, 'bridge 35am mic', '28', 28.00, 30.00, 1, 0, '2017-09-04 11:44:25'),
(176, 'bridge 50am mic', '5', 35.00, 40.00, 1, 0, '2017-09-04 11:44:58'),
(177, 'bridge 50am mda', '6', 40.00, 50.00, 1, 0, '2017-09-04 11:45:31'),
(178, 'bridge 10am ', '6', 6.00, 7.00, 1, 0, '2017-09-04 11:46:01'),
(179, 'iron 30w', '1', 100.00, 100.00, 1, 0, '2017-09-04 11:46:38'),
(180, 'iron 40w ', '6', 110.00, 115.00, 1, 0, '2017-09-04 11:47:02'),
(181, 'iron 60w', '5', 120.00, 125.00, 1, 0, '2017-09-04 11:47:39'),
(182, 'iron 45w china', '5', 100.00, 110.00, 1, 0, '2017-09-04 11:48:13'),
(183, 'iron 30w lamp', '6', 130.00, 140.00, 1, 0, '2017-09-04 11:48:46'),
(184, 'iron 40w lamp', '6', 140.00, 150.00, 1, 0, '2017-09-04 11:49:54'),
(185, 'iron 60w lamp', '6', 140.00, 160.00, 1, 0, '2017-09-04 11:50:36'),
(186, 'bit 30w ', '5', 27.00, 28.00, 1, 0, '2017-09-04 11:51:01'),
(187, 'bit 40w', '5', 33.00, 35.00, 1, 0, '2017-09-04 11:52:03'),
(188, 'bit 60w', '56', 35.00, 40.00, 1, 0, '2017-09-04 11:52:29'),
(189, 'element 30w no2', '5', 11.00, 12.00, 1, 0, '2017-09-04 11:54:17'),
(190, 'element 40w no2', '54', 13.00, 13.00, 1, 0, '2017-09-04 11:54:52'),
(191, 'element 60w no2', '5', 13.00, 14.00, 1, 0, '2017-09-04 11:55:23'),
(192, 'element 30w orignal', '4', 18.00, 20.00, 1, 0, '2017-09-04 11:56:51'),
(193, 'element 40w orignal ', '6', 22.00, 25.00, 1, 0, '2017-09-04 11:57:35'),
(194, 'element 60w orignal', '6', 28.00, 30.00, 1, 0, '2017-09-04 11:59:26'),
(195, 'sacker', '5', 40.00, 50.00, 1, 0, '2017-09-04 11:59:49'),
(196, '18d 4v (2835)', '5', 9.00, 10.00, 1, 0, '2017-09-04 12:01:17'),
(197, '18d 4v (5630)', '5', 14.00, 15.00, 1, 0, '2017-09-04 12:01:51'),
(198, '18d 12v ', '5', 17.00, 18.00, 1, 0, '2017-09-04 12:03:42'),
(199, '24d 12v', '6', 22.00, 25.00, 1, 0, '2017-09-04 12:04:18'),
(200, '48d 12v', '4', 37.00, 38.00, 1, 0, '2017-09-04 12:05:03'),
(201, '60d 12v', '3', 40.00, 45.00, 1, 0, '2017-09-04 12:11:51'),
(202, '90d 12v ', '6', 50.00, 55.00, 1, 0, '2017-09-04 12:12:24'),
(203, '120d 12v ', '6', 60.00, 65.00, 1, 0, '2017-09-04 12:12:54'),
(204, '150d 12v small ', '6', 90.00, 100.00, 1, 0, '2017-09-04 12:13:52'),
(205, '150d 12v big', '6', 120.00, 130.00, 1, 0, '2017-09-04 12:14:11'),
(206, '180d 12v small ', '6', 90.00, 100.00, 1, 0, '2017-09-04 12:14:43'),
(207, '180d 12v big', '6', 120.00, 130.00, 1, 0, '2017-09-04 12:15:15'),
(208, '210', '4', 140.00, 140.00, 1, 0, '2017-09-04 12:16:36'),
(209, '30d 12v ', '34', 50.00, 60.00, 1, 0, '2017-09-04 12:17:32'),
(210, '18d 12v circle pcb', '5', 14.00, 15.00, 1, 0, '2017-09-04 12:18:15'),
(211, '3mm led 100pcs', '5', 40.00, 40.00, 1, 0, '2017-09-04 12:18:58'),
(212, '4mm led 100pcs', '4', 70.00, 80.00, 1, 0, '2017-09-04 12:19:46'),
(213, '5mm led', '5', 1.00, 1.00, 1, 0, '2017-09-04 12:20:22'),
(214, '8mm led ', '5', 1.00, 2.00, 1, 0, '2017-09-04 12:20:40'),
(215, '5mm rgb ', '-2', 1.00, 2.00, 1, 0, '2017-09-04 12:21:11'),
(216, '20w led ', '5', 35.00, 40.00, 1, 0, '2017-09-04 12:21:47'),
(217, '13cm milky', '6', 28.00, 30.00, 1, 0, '2017-09-04 12:22:38'),
(218, '13cm crystal', '5', 30.00, 35.00, 1, 0, '2017-09-04 12:23:08'),
(219, '13cm double', '5', 30.00, 35.00, 1, 0, '2017-09-04 12:23:34'),
(220, '13cm single', '28', 28.00, 30.00, 1, 0, '2017-09-04 12:24:02'),
(221, '26cm milky ', '5', 50.00, 60.00, 1, 0, '2017-09-04 12:27:18'),
(222, '26cm crystal ', '5', 50.00, 60.00, 1, 0, '2017-09-04 12:27:40'),
(223, '26cm double', '4', 50.00, 60.00, 1, 0, '2017-09-04 12:28:28'),
(224, '20cm ', '5', 40.00, 50.00, 1, 0, '2017-09-04 12:28:46'),
(225, '39cm micky ', '6', 75.00, 75.00, 1, 0, '2017-09-04 12:29:24'),
(226, '52cm milky', '6', 80.00, 90.00, 1, 0, '2017-09-04 12:29:57'),
(227, '39cm crystal ', '5', 70.00, 75.00, 1, 0, '2017-09-04 12:30:32'),
(228, '39cm double', '5', 70.00, 75.00, 1, 0, '2017-09-04 12:30:49'),
(229, '52cm crystal ', '6', 85.00, 90.00, 1, 0, '2017-09-04 12:31:16'),
(230, '52cm double ', '5', 85.00, 90.00, 1, 0, '2017-09-04 12:31:44'),
(231, '1m milky', '5', 140.00, 150.00, 1, 0, '2017-09-04 12:33:23'),
(232, '1m crystal ', '5', 140.00, 150.00, 1, 0, '2017-09-04 12:33:45'),
(233, '1m double ', '6', 140.00, 150.00, 1, 0, '2017-09-04 12:34:05'),
(234, '1+2 boss', '5', 21.00, 22.00, 1, 0, '2017-09-04 12:35:07'),
(235, '2+2 boss', '5', 21.00, 22.00, 1, 0, '2017-09-04 12:35:23'),
(236, '3+3 boss ', '0', 31.00, 32.00, 1, 0, '2017-09-04 12:35:47'),
(237, '1+1 boss', '54', 18.00, 20.00, 1, 0, '2017-09-04 12:36:18'),
(238, '1+1 black', '6', 17.00, 18.00, 1, 0, '2017-09-04 12:36:42'),
(239, '1+2 3m ', '5', 32.00, 35.00, 1, 0, '2017-09-04 12:37:13'),
(240, '1+2 5m ', '6', 40.00, 45.00, 1, 0, '2017-09-04 12:37:35'),
(241, '2+2 5m ', '5', 40.00, 45.00, 1, 0, '2017-09-04 12:38:09'),
(242, '1+1 crystal ', '5', 35.00, 40.00, 1, 0, '2017-09-04 12:39:13'),
(243, '1+1 cotton ', '5', 18.00, 20.00, 1, 0, '2017-09-04 12:39:54'),
(244, 'n70 lead ', '4', 7.00, 8.00, 1, 0, '2017-09-04 12:40:21'),
(245, '8600 lead', '5', 9.00, 10.00, 1, 0, '2017-09-04 12:40:44'),
(246, 'n70 usb lead', '4', 14.00, 15.00, 1, 0, '2017-09-04 12:41:21'),
(247, '8600 usb lead', '4', 14.00, 15.00, 1, 0, '2017-09-04 12:41:43'),
(248, '195 usb lead', '5', 14.00, 15.00, 1, 0, '2017-09-04 12:42:08'),
(249, 'note cable', '4', 20.00, 25.00, 1, 0, '2017-09-04 12:42:53'),
(250, '8600 lamp cable', '6', 30.00, 35.00, 1, 0, '2017-09-04 12:43:24'),
(251, '5no tape lead ', '5', 22.00, 25.00, 1, 0, '2017-09-04 12:43:54'),
(252, '5no cut lead', '22', 22.00, 25.00, 1, 0, '2017-09-04 12:44:30'),
(253, 'fast lead ', '3', 7.00, 8.00, 1, 0, '2017-09-04 12:45:17'),
(254, '5no local lead', '5', 9.00, 10.00, 1, 0, '2017-09-04 12:45:42'),
(255, 'g4 led', '4', 2.00, 3.00, 1, 0, '2017-09-04 12:46:44'),
(256, '1w led no1 ', '2', 5.00, 6.00, 1, 0, '2017-09-04 12:47:14'),
(257, '1w led trey', '4', 8.00, 9.00, 1, 0, '2017-09-04 12:47:40'),
(258, '10w led ', '45', 18.00, 20.00, 1, 0, '2017-09-04 12:47:59'),
(259, '10w led only', '5', 10.00, 10.00, 1, 0, '2017-09-04 12:48:43'),
(260, '20w led only', '4', 20.00, 25.00, 1, 0, '2017-09-04 12:49:16'),
(261, '1w pcb', '4', 1.00, 1.00, 1, 0, '2017-09-04 12:49:46'),
(262, '6v 4.5 ah battery ', '5', 390.00, 400.00, 1, 0, '2017-09-04 12:51:31'),
(263, '12v 7ah battery', '5', 900.00, 950.00, 1, 0, '2017-09-04 12:52:14'),
(264, '1.2 4v  battery ', '5', 50.00, 52.00, 1, 0, '2017-09-04 12:53:36'),
(265, '0.7 4v battery ', '38', 38.00, 40.00, 1, 0, '2017-09-04 12:54:11'),
(266, 'motor 12v ', '11', 110.00, 120.00, 1, 0, '2017-09-04 12:54:35'),
(267, '0.3 4v battery ', '4', 28.00, 30.00, 1, 0, '2017-09-04 12:55:18'),
(268, '0.4 4v battery', '5', 33.00, 35.00, 1, 0, '2017-09-04 12:55:37'),
(269, 'n70 charger ', '5', 55.00, 60.00, 1, 0, '2017-09-04 12:56:28'),
(270, '7210 charger', '4', 60.00, 60.00, 1, 0, '2017-09-04 12:56:46'),
(271, '8600 charger', '5', 60.00, 65.00, 1, 0, '2017-09-04 12:57:12'),
(272, '2ah samsung charger', '5', 140.00, 150.00, 1, 0, '2017-09-04 12:57:49'),
(273, 'usb dabbi ', '5', 35.00, 40.00, 1, 0, '2017-09-04 12:58:31'),
(274, 'cctv car charger', '5', 45.00, 50.00, 1, 0, '2017-09-04 12:59:00'),
(275, 'd/s clamb charger', '5', 60.00, 65.00, 1, 0, '2017-09-04 12:59:32'),
(276, '6in1 charger', '5', 70.00, 75.00, 1, 0, '2017-09-04 12:59:58'),
(277, '5v 2ah supply', '4', 90.00, 100.00, 1, 0, '2017-09-04 13:00:30'),
(278, '9V 1.5 SUPPLY', '5', 80.00, 80.00, 1, 0, '2017-09-04 13:01:05'),
(279, '9v 2ah supply', '54', 11.00, 120.00, 1, 0, '2017-09-04 13:01:47'),
(280, '12v 2ah supply', '5', 110.00, 120.00, 1, 0, '2017-09-04 13:02:08'),
(281, '9v 1ah adapter', '4', 120.00, 130.00, 1, 0, '2017-09-04 13:02:59'),
(282, '12v 1ah adapter', '5', 130.00, 140.00, 1, 0, '2017-09-04 13:03:30'),
(283, '12v 3.5 ah supply', '220', 220.00, 240.00, 1, 0, '2017-09-04 13:04:15'),
(284, '3w bulb metal', '4', 45.00, 50.00, 1, 0, '2017-09-04 13:06:06'),
(285, '5w metal bulb', '-1', 50.00, 60.00, 1, 0, '2017-09-04 13:06:31'),
(286, '7w metal bulb ', '5', 70.00, 80.00, 1, 0, '2017-09-04 13:06:56'),
(287, 'mp3 decoder', '4', 115.00, 120.00, 1, 0, '2017-09-04 13:07:51'),
(288, 'mp3 remote', '4', 17.00, 20.00, 1, 0, '2017-09-04 13:08:12'),
(289, 'card reader', '2', 13.00, 15.00, 1, 0, '2017-09-04 13:08:38'),
(290, '025 ah clip', '5', 1.00, 2.00, 1, 0, '2017-09-04 13:30:17'),
(291, '127ah clip', '5', 2.00, 3.00, 1, 0, '2017-09-04 13:30:32'),
(292, '30ah clip', '-3', 3.00, 4.00, 1, 0, '2017-09-04 13:31:34'),
(293, '50ah clip', '6', 5.00, 6.00, 1, 0, '2017-09-04 13:31:47'),
(294, '60ah clip', '5', 8.00, 10.00, 1, 0, '2017-09-04 13:32:03'),
(295, '100ah clip', '4', 15.00, 15.00, 1, 0, '2017-09-04 13:32:26'),
(296, '200ah clip', '5', 35.00, 35.00, 1, 0, '2017-09-04 13:32:42'),
(297, '20gm elfy zonex', '6', 37.00, 40.00, 1, 0, '2017-09-04 13:33:29'),
(298, '1.5gm patta elfy', '-7', 140.00, 150.00, 1, 0, '2017-09-04 13:34:02'),
(299, '100gm elfy', '6', 100.00, 100.00, 1, 0, '2017-09-04 13:34:22'),
(300, 'broza metal', '4', 40.00, 45.00, 1, 0, '2017-09-04 13:34:39'),
(301, 'broza china', '6', 70.00, 80.00, 1, 0, '2017-09-04 13:35:02'),
(302, '50gm solder', '60', 60.00, 70.00, 1, 0, '2017-09-04 13:35:40'),
(303, '100gm solder', '4', 120.00, 130.00, 1, 0, '2017-09-04 13:36:02'),
(304, 'solder packet ', '5', 60.00, 60.00, 1, 0, '2017-09-04 13:36:35'),
(305, '300mah tr', '5', 50.00, 55.00, 1, 0, '2017-09-04 13:38:12'),
(306, '400mah tr ', '4', 55.00, 55.00, 1, 0, '2017-09-04 13:38:25'),
(307, '600mah tr', '5', 65.00, 65.00, 1, 0, '2017-09-04 13:38:36'),
(308, '800mah tr', '-3', 80.00, 80.00, 1, 0, '2017-09-04 13:38:59'),
(309, '1000mah tr', '5', 90.00, 90.00, 1, 0, '2017-09-04 13:39:16'),
(310, '2ah tr', '5', 135.00, 135.00, 1, 0, '2017-09-04 13:39:47'),
(311, '2.5ah tr', '5', 150.00, 150.00, 1, 0, '2017-09-04 13:40:02'),
(312, '3ah tr', '4', 175.00, 175.00, 1, 0, '2017-09-04 13:40:18'),
(313, '4ah tr', '6', 190.00, 190.00, 1, 0, '2017-09-04 13:40:48'),
(314, '5ah tr', '4', 200.00, 220.00, 1, 0, '2017-09-04 13:41:15'),
(315, '6ah', '4', 300.00, 300.00, 1, 0, '2017-09-04 13:41:25'),
(316, '8ah tr', '5', 400.00, 400.00, 1, 0, '2017-09-04 13:42:03'),
(317, '10ah tr', '5', 550.00, 550.00, 1, 0, '2017-09-04 13:42:22'),
(318, '12ah tr', '4', 700.00, 700.00, 1, 0, '2017-09-04 13:42:40'),
(319, '800mah cp', '5', 90.00, 90.00, 1, 0, '2017-09-04 15:33:58'),
(320, '2ah cp ', '7', 180.00, 180.00, 1, 0, '2017-09-04 15:34:32'),
(321, '2.5ah cp', '6', 220.00, 220.00, 1, 0, '2017-09-04 15:34:52'),
(322, '3ah cp', '6', 250.00, 250.00, 1, 0, '2017-09-04 15:35:09'),
(323, '5ah cp', '5', 330.00, 330.00, 1, 0, '2017-09-04 15:35:35'),
(324, '6ah cp', '5', 400.00, 400.00, 1, 0, '2017-09-04 15:35:53'),
(325, '8ah cp', '600', 600.00, 600.00, 1, 0, '2017-09-04 15:36:13'),
(326, '10ah cp', '5', 700.00, 700.00, 1, 0, '2017-09-04 15:36:29'),
(327, '12 cp', '900', 900.00, 900.00, 1, 0, '2017-09-04 15:36:41'),
(328, '4w pcb ', '5', 6.00, 6.00, 1, 0, '2017-09-04 15:37:33'),
(329, '2w pcb', '4', 4.00, 4.00, 1, 0, '2017-09-04 15:37:45'),
(330, '3w circle pcb', '5', 5.00, 5.00, 1, 0, '2017-09-04 15:38:22'),
(331, '6w pcb', '25', 25.00, 25.00, 1, 0, '2017-09-04 15:38:42'),
(332, '9w pcb', '40', 40.00, 40.00, 1, 0, '2017-09-04 15:39:02'),
(333, '12w pcb', '100', 100.00, 100.00, 1, 0, '2017-09-04 15:39:16'),
(336, 'asa', '-7', 0.00, 0.00, 1, 0, '2017-09-04 20:19:42'),
(338, 'rtt', '4', 0.00, 7.00, 1, 0, '2017-09-04 20:20:17'),
(339, '345', '5', 0.00, 33.00, 1, 0, '2017-09-04 20:20:17'),
(340, 'wewe', '2', 34.00, 222.00, 1, 0, '2017-09-11 09:09:02'),
(341, 'jjjj', '4', 4.00, 22.00, 1, 0, '2017-09-11 09:09:02'),
(342, 'www', '1', 3.00, 4.00, 1, 0, '2017-09-11 09:12:08'),
(343, 'wwww', '1', 12.00, 133.00, 1, 0, '2017-09-11 09:12:08'),
(344, 'ss', '2', 111.00, 1111.00, 1, 0, '2017-09-11 09:12:08'),
(345, 'ddd', '2', 0.00, 12.00, 1, 0, '2017-09-11 09:16:12'),
(346, 'qqqqqz', '1', 0.00, 0.00, 1, 0, '2017-09-11 09:18:49');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `quantity` varchar(50) DEFAULT NULL,
  `buy_price` double(25,2) DEFAULT NULL,
  `sale_price` double(25,2) NOT NULL,
  `categorie_id` int(11) unsigned NOT NULL,
  `media_id` int(11) DEFAULT '0',
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `categorie_id` (`categorie_id`),
  KEY `media_id` (`media_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `quantity`, `buy_price`, `sale_price`, `categorie_id`, `media_id`, `date`) VALUES
(10, 'hole sw', '59996', 2.00, 3.00, 4, 0, '2017-09-04 15:45:58'),
(11, 'wewe', '1', 54.00, 222.00, 4, 0, '2017-09-11 09:05:31'),
(12, 'jjjj', '-1', 4.00, 22.00, 4, 0, '2017-09-11 09:05:31'),
(13, 'voren', '12', 2.45, 3.45, 4, 0, '2017-09-11 09:36:27'),
(14, 'next', '14', 2.44, 3.44, 4, 0, '2017-09-11 09:36:59'),
(17, 'vor', '14', 2.46, 3.45, 4, 0, '2017-09-11 09:48:23');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) unsigned NOT NULL,
  `qty` int(11) NOT NULL,
  `price` double(25,2) NOT NULL,
  `date` date NOT NULL,
  `p_name` varchar(500) NOT NULL,
  `bno` int(11) NOT NULL,
  `cust` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `product_id`, `qty`, `price`, `date`, `p_name`, `bno`, `cust`) VALUES
(1, 10, 2, 10.00, '2017-09-11', '', 1, 'uzair'),
(3, 10, 2, 3.00, '2017-09-11', '', 2, 'uzair'),
(4, 11, 2, 222.00, '2017-09-11', '', 3, ''),
(5, 12, 4, 22.00, '2017-09-11', '', 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `temp_sale`
--

CREATE TABLE IF NOT EXISTS `temp_sale` (
  `temp_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(2000) NOT NULL,
  `pric` double NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`temp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

-- --------------------------------------------------------

--
-- Table structure for table `temp_sales`
--

CREATE TABLE IF NOT EXISTS `temp_sales` (
  `temp_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(2000) NOT NULL,
  `pric` double NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`temp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `temp_sales`
--

INSERT INTO `temp_sales` (`temp_id`, `name`, `pric`, `quantity`) VALUES
(5, 'hole sw', 3.5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_level` int(11) NOT NULL,
  `image` varchar(255) DEFAULT 'no_image.jpg',
  `status` int(1) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_level` (`user_level`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `user_level`, `image`, `status`, `last_login`) VALUES
(1, ' Admin User', 'Admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 'no_image.jpg', 1, '2017-09-04 17:25:24'),
(2, 'Special User', 'special', 'ba36b97a41e7faf742ab09bf88405ac04f99599a', 2, 'no_image.jpg', 1, '2017-08-22 17:12:13'),
(3, 'Default User', 'user', '12dea96fec20593566ab75692c9949596833adc9', 3, 'no_image.jpg', 1, '2015-09-27 22:00:15');

-- --------------------------------------------------------

--
-- Table structure for table `user_groups`
--

CREATE TABLE IF NOT EXISTS `user_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(150) NOT NULL,
  `group_level` int(11) NOT NULL,
  `group_status` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `group_level` (`group_level`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user_groups`
--

INSERT INTO `user_groups` (`id`, `group_name`, `group_level`, `group_status`) VALUES
(1, 'Admin', 1, 1),
(2, 'special', 2, 1),
(3, 'User', 3, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `FK_products` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `SK` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_user` FOREIGN KEY (`user_level`) REFERENCES `user_groups` (`group_level`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
