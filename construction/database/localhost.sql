-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 08, 2018 at 06:08 PM
-- Server version: 10.2.16-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ubbasoft_soft`
--
CREATE DATABASE IF NOT EXISTS `ubbasoft_soft` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ubbasoft_soft`;

-- --------------------------------------------------------

--
-- Table structure for table `7_addproj1`
--

CREATE TABLE `7_addproj1` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `cost` int(11) NOT NULL,
  `advance` int(11) NOT NULL,
  `due` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `7_addproj1`
--

INSERT INTO `7_addproj1` (`id`, `name`, `start_date`, `end_date`, `cost`, `advance`, `due`) VALUES
(41, 'qwe', '2018-04-03', '2018-04-10', 4000, 700, 3300),
(42, 'Gor-e-Mar-Canal', '2018-04-01', '2019-04-01', 31, 0, 0),
(43, 'Biadak-Canal', '2017-07-05', '2018-07-05', 16, 10, 6),
(44, 'khalii', '2018-05-14', '2018-05-08', 89, 88, 1),
(45, 'wire', '2018-08-07', '2018-08-23', 500, 100, 400);

-- --------------------------------------------------------

--
-- Table structure for table `7_departments`
--

CREATE TABLE `7_departments` (
  `dept_id` int(11) NOT NULL,
  `dept_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `7_departments`
--

INSERT INTO `7_departments` (`dept_id`, `dept_name`) VALUES
(1, 'Admin'),
(2, 'IT'),
(3, 'Civil');

-- --------------------------------------------------------

--
-- Table structure for table `7_newpayroll`
--

CREATE TABLE `7_newpayroll` (
  `payroll_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `basic_salary` int(11) NOT NULL,
  `house_rent` decimal(10,0) NOT NULL,
  `petrol` int(11) NOT NULL,
  `medical` int(11) NOT NULL,
  `overtime` int(11) NOT NULL,
  `others` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `7_newpayroll`
--

INSERT INTO `7_newpayroll` (`payroll_id`, `emp_id`, `basic_salary`, `house_rent`, `petrol`, `medical`, `overtime`, `others`, `status`) VALUES
(1, 0, 0, '0', 0, 0, 0, 0, 0),
(2, 9, 700, '89', 998, 98, 98, 98, 2);

-- --------------------------------------------------------

--
-- Table structure for table `7_newuser`
--

CREATE TABLE `7_newuser` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `proj_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `7_newuser`
--

INSERT INTO `7_newuser` (`id`, `username`, `password`, `proj_id`, `role_id`, `contact`, `email`) VALUES
(1, 'careem', 'ea3304423d2ba83892b93841c46683', 0, 0, '5565665', 'muneeb@gmail.com'),
(2, 'majid', '3ad2c9c1bfbe4ae78a2288093549af', 0, 0, '55151', 'majid@yahoo.com'),
(1, 'careem', 'ea3304423d2ba83892b93841c46683', 0, 0, '5565665', 'muneeb@gmail.com'),
(2, 'majid', '3ad2c9c1bfbe4ae78a2288093549af', 0, 0, '55151', 'majid@yahoo.com'),
(3, '', 'da39a3ee5e6b4b0d3255bfef956018', 0, 0, '', ''),
(4, '', 'da39a3ee5e6b4b0d3255bfef956018', 0, 0, '', ''),
(0, '', 'da39a3ee5e6b4b0d3255bfef956018', 1, 2, '', ''),
(0, 'inventory', 'inventory', 0, 2, '', ''),
(0, 'crm', 'crm', 0, 3, '', ''),
(0, 'account', 'account', 0, 4, '', ''),
(0, 'project', 'project', 0, 5, '', ''),
(0, 'procurment', 'procurment', 0, 6, '', ''),
(0, 'hrm', 'hrm', 0, 7, '', ''),
(0, 'csac', 'cascsa', 0, 2, '', ''),
(0, 'gfdf', 'fdsfds', 0, 3, '', ''),
(0, 'qqqqq', 'qqqqqq', 0, 4, '', ''),
(0, 'sub', 'sub', 0, 8, '', ''),
(0, 'sub', 'sub', 0, 8, '', ''),
(0, 'sattar', 'sattar', 0, 8, '', ''),
(0, 'majid', 'majid', 0, 1, '', ''),
(0, 'qw', 'qw', 0, 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `7_openingstock`
--

CREATE TABLE `7_openingstock` (
  `id` int(11) NOT NULL,
  `proj_id` int(11) NOT NULL,
  `loc_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `7_openingstock`
--

INSERT INTO `7_openingstock` (`id`, `proj_id`, `loc_id`, `item_id`, `qty`) VALUES
(1, 0, 0, 0, 0),
(2, 0, 0, 0, 0),
(1, 0, 0, 0, 0),
(2, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `7_vendoraccount`
--

CREATE TABLE `7_vendoraccount` (
  `id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `7_vendoraccount`
--

INSERT INTO `7_vendoraccount` (`id`, `vendor_id`, `amount`) VALUES
(1, 13, 50000),
(2, 14, 7878787),
(3, 14, 890);

-- --------------------------------------------------------

--
-- Table structure for table `addaccount`
--

CREATE TABLE `addaccount` (
  `account_id` int(3) UNSIGNED ZEROFILL NOT NULL,
  `bank_id` int(3) NOT NULL,
  `account_no` varchar(20) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addaccount`
--

INSERT INTO `addaccount` (`account_id`, `bank_id`, `account_no`, `amount`) VALUES
(001, 1, '000000255', 23584),
(002, 3, '25555002', 13000),
(004, 2, '65665220', -31036),
(005, 3, '54656200', -1200),
(006, 1, '282828828282', 5000),
(007, 4, '989989898', 43400),
(008, 2, '7890', 0),
(009, 3, '4433434', 0),
(010, 1, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `addbank`
--

CREATE TABLE `addbank` (
  `bank_id` int(3) NOT NULL,
  `bank_name` varchar(30) NOT NULL,
  `branch_code` varchar(6) NOT NULL,
  `branch_name` varchar(30) NOT NULL,
  `bank_address` varchar(36) NOT NULL,
  `bank_contact` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addbank`
--

INSERT INTO `addbank` (`bank_id`, `bank_name`, `branch_code`, `branch_name`, `bank_address`, `bank_contact`) VALUES
(1, 'Allied Bank', '0230', 'M.A. jinnah road', 'c-6, 92/C', '02133488844'),
(2, 'Meezan Bank', '57966', 'Abul Hassan Isphani Road', 'c-6, 92/C', '02133488844'),
(3, 'Sindh Bank', '215125', 'Abul Hassan Isphani Road', 'AHSANABAD', '02133488844'),
(4, 'islami', '34342', 'shahrahe faisal', 'jndkjndc', '929929292'),
(5, 'soneri', '898', 'daba', 'ikmjii', '78779'),
(6, 'ffdsfds', 'ddsc', 'dscds', 'dsfcds', 'cdscds'),
(7, 'scsca', 'csacsa', 'csacas', 'csacsa', 'csacas'),
(8, 'gfgfd', 'gfgf', 'gfgfdgfd', 'gfdgf', 'gfgfgfg'),
(9, 'habib', '1', 'karachi', 'karachi', '1');

-- --------------------------------------------------------

--
-- Table structure for table `add_cashamount`
--

CREATE TABLE `add_cashamount` (
  `amount_id` int(3) NOT NULL,
  `account_id` int(20) NOT NULL,
  `bank_id` int(3) NOT NULL,
  `cash_amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_cashamount`
--

INSERT INTO `add_cashamount` (`amount_id`, `account_id`, `bank_id`, `cash_amount`) VALUES
(1, 255, 1, 2000),
(2, 25555002, 1, 2200);

-- --------------------------------------------------------

--
-- Table structure for table `add_chequeamount`
--

CREATE TABLE `add_chequeamount` (
  `amount_id` int(3) UNSIGNED ZEROFILL NOT NULL,
  `account_id` int(3) NOT NULL,
  `cheque_no` varchar(20) NOT NULL,
  `amount` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_chequeamount`
--

INSERT INTO `add_chequeamount` (`amount_id`, `account_id`, `cheque_no`, `amount`) VALUES
(001, 1, '454552', 12000),
(002, 25555002, '4555512', 2020),
(003, 25555002, '46464464', 5000),
(004, 65665220, '0000021', 1000),
(005, 25555002, '4555512', 500),
(006, 54656200, '8383838', 1000),
(007, 255, '125126515', 7000),
(008, 255, '55445455', 70000),
(009, 25555002, '51515', 2000),
(010, 255, '2125151', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `add_employee`
--

CREATE TABLE `add_employee` (
  `emp_id` int(3) UNSIGNED ZEROFILL NOT NULL,
  `name` varchar(20) NOT NULL,
  `dept_id` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `city` varchar(20) NOT NULL,
  `cell` varchar(20) NOT NULL,
  `cnic` varchar(20) NOT NULL,
  `salary` varchar(20) NOT NULL,
  `join_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_employee`
--

INSERT INTO `add_employee` (`emp_id`, `name`, `dept_id`, `designation`, `city`, `cell`, `cnic`, `salary`, `join_date`) VALUES
(008, 'awan', '3', 'manager', 'karachi', '87987897', '87987897', '3000', '2018-02-15'),
(009, 'iu', '', 'iuui', 'i', 'i', 'ui', 'ui', '2018-03-08'),
(011, 'hammad', '1', '1', 'w', '1', '1', '11', '1111-11-11'),
(012, 'gfrgfd', '2', 'gdf', 'gfdgfd', 'gdfgf', 'gdfg', 'gfd', '2018-04-13'),
(013, 'khan', '1', 'khkhkh', 'khkh', '989898', '98989', '30000', '2018-04-20');

-- --------------------------------------------------------

--
-- Table structure for table `add_employee1`
--

CREATE TABLE `add_employee1` (
  `emp_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `dept_id` int(20) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `cell` int(20) NOT NULL,
  `cnic` int(20) NOT NULL,
  `salary` int(20) NOT NULL,
  `join_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_employee1`
--

INSERT INTO `add_employee1` (`emp_id`, `name`, `dept_id`, `designation`, `city`, `cell`, `cnic`, `salary`, `join_date`) VALUES
(2, 'khan', 1, 'khkhkh', 'khkh', 989898, 98989, 30000, '2018-04-20');

-- --------------------------------------------------------

--
-- Table structure for table `add_flat_shop`
--

CREATE TABLE `add_flat_shop` (
  `id` int(11) NOT NULL,
  `Project` varchar(255) NOT NULL,
  `numbers` int(11) NOT NULL,
  `dimensions` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `possesion_charges` int(11) NOT NULL,
  `parking_include` int(11) NOT NULL,
  `block` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_flat_shop`
--

INSERT INTO `add_flat_shop` (`id`, `Project`, `numbers`, `dimensions`, `area`, `price`, `possesion_charges`, `parking_include`, `block`, `category`, `address`) VALUES
(1, 'new', 0, '89', '89', 0, 8, 98, '90', '09', ' qwij'),
(3, 'National Highway', 0, '', '898', 0, 89, 89, '', '', '898'),
(4, 'uuu', 5, '898989', '898989898989', 0, 89, 89, '89', 'Category', '8lji\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `advance_paymt`
--

CREATE TABLE `advance_paymt` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `city` varchar(20) NOT NULL,
  `company` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `date_r` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bank_pymt_voucher`
--

CREATE TABLE `bank_pymt_voucher` (
  `id` int(11) NOT NULL,
  `B_name` varchar(20) NOT NULL,
  `Account_no` varchar(20) NOT NULL,
  `cuurency` varchar(20) NOT NULL,
  `date_r` date NOT NULL,
  `amount` int(20) NOT NULL,
  `check_no` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank_pymt_voucher`
--

INSERT INTO `bank_pymt_voucher` (`id`, `B_name`, `Account_no`, `cuurency`, `date_r`, `amount`, `check_no`) VALUES
(1, 'alhabib', '8989', '', '0098-09-26', 9090, 98),
(2, 'gfdgf', 'gfd', '', '2018-04-10', 0, 0),
(3, 'vdvs', 'vdsv', '', '2018-04-03', 0, 0),
(4, 'Contractor 1', '9898989', '', '2018-04-05', 30000, 34534534),
(5, 'abc', '0000', '', '2018-05-21', 4000, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `bank_reg`
--

CREATE TABLE `bank_reg` (
  `Bank_Code` int(15) NOT NULL,
  `A_C` int(20) NOT NULL,
  `Bank_Name` varchar(20) NOT NULL,
  `Account_Tittle` varchar(20) NOT NULL,
  `Bank_Address` varchar(25) NOT NULL,
  `Manager_Name` varchar(20) NOT NULL,
  `Phone_Mobile` int(15) NOT NULL,
  `Phone_Mob` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank_reg`
--

INSERT INTO `bank_reg` (`Bank_Code`, `A_C`, `Bank_Name`, `Account_Tittle`, `Bank_Address`, `Manager_Name`, `Phone_Mobile`, `Phone_Mob`) VALUES
(123, 2147483647, 'ss', 'ws', 'ss', 'ww', 22, 22),
(1, 22, 's', 's', 's', 's', 2, 2),
(121, 1234567, 'ABC', 'ABC', 'XYZ', 'ABC', 21, 345),
(123, 2147483647, 'ss', 'ws', 'ss', 'ww', 22, 22),
(1, 22, 's', 's', 's', 's', 2, 2),
(121, 1234567, 'ABC', 'ABC', 'XYZ', 'ABC', 21, 345),
(123, 2147483647, 'ss', 'ws', 'ss', 'ww', 22, 22),
(1, 22, 's', 's', 's', 's', 2, 2),
(121, 1234567, 'ABC', 'ABC', 'XYZ', 'ABC', 21, 345);

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_id` int(11) NOT NULL,
  `q` double(10,0) NOT NULL,
  `pr` double(10,0) NOT NULL,
  `date` datetime NOT NULL,
  `p` varchar(50) NOT NULL,
  `bno` longtext NOT NULL,
  `cust` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `cah_pay_voucher`
--

CREATE TABLE `cah_pay_voucher` (
  `id` int(11) NOT NULL,
  `pay_to_name` varchar(20) NOT NULL,
  `account_no` int(20) NOT NULL,
  `amount` int(20) NOT NULL,
  `date_r` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cah_pay_voucher`
--

INSERT INTO `cah_pay_voucher` (`id`, `pay_to_name`, `account_no`, `amount`, `date_r`) VALUES
(1, 'asim', 2147483647, 4000, '2018-03-02'),
(2, 'majid', 9, 787, '2018-04-12'),
(3, 'grsgfvd', 0, 0, '2018-04-10'),
(4, 'Contractor 1', 9898989, 300000, '2018-04-13');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(9, 'abc'),
(7, 'Electronic'),
(4, 'general'),
(6, 'Medical');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'general');

-- --------------------------------------------------------

--
-- Table structure for table `cheque_in_hand`
--

CREATE TABLE `cheque_in_hand` (
  `id` int(11) NOT NULL,
  `Bank` varchar(20) NOT NULL,
  `Account_no` int(30) NOT NULL,
  `p_name` varchar(30) NOT NULL,
  `company_name` varchar(30) NOT NULL,
  `contractor` varchar(20) NOT NULL,
  `dates` date NOT NULL,
  `amount` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `city_reg`
--

CREATE TABLE `city_reg` (
  `id` int(3) NOT NULL,
  `city_title` varchar(35) NOT NULL,
  `province_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city_reg`
--

INSERT INTO `city_reg` (`id`, `city_title`, `province_id`) VALUES
(2, 'islamabad', 1),
(3, 'bahawalpur', 2),
(4, 'hyderabadw', 2),
(5, 'karachi', 2);

-- --------------------------------------------------------

--
-- Table structure for table `cm_addcheque`
--

CREATE TABLE `cm_addcheque` (
  `cheque_id` int(3) NOT NULL,
  `account_id` int(3) NOT NULL,
  `bank_id` int(3) NOT NULL,
  `cheque_no` varchar(15) NOT NULL,
  `amount` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` varchar(35) NOT NULL,
  `created_on` date NOT NULL,
  `withdrawal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cm_addcheque`
--

INSERT INTO `cm_addcheque` (`cheque_id`, `account_id`, `bank_id`, `cheque_no`, `amount`, `name`, `contact`, `address`, `created_on`, `withdrawal`) VALUES
(1, 25555002, 1, '655550', 5000, 'Muneeb', '03463554666', 'Landhi Karachi', '0000-00-00', ''),
(2, 25555002, 1, '1000653', 2000, 'Asim', '03412626262', 'Drigh Road', '0000-00-00', ''),
(3, 65665220, 1, '4555556', 2000, 'Abdul Moiz', '031444654666', 'Drigh Road', '0000-00-00', ''),
(4, 989989898, 1, '9962000', 10000, 'asim', '0346466646', 'drigh road', '0000-00-00', ''),
(13, 2147483647, 1, '898', 50, 'ali', '909', 'hb                  Enter Address\r\n', '2018-03-15', ''),
(14, 255, 1, 'f4', 89, '', '', '                  Enter Address\r\n  ', '2018-03-11', ''),
(15, 255, 1, '898', 1, '', '', '                  Enter Address\r\n  ', '2018-03-11', ''),
(16, 65665220, 2, '88', 9, '', '', '                  Enter Address\r\n  ', '2018-03-11', ''),
(17, 65665220, 2, 'ioi', 9, '', '', '                  Enter Address\r\n  ', '2018-03-11', ''),
(18, 54656200, 1, '9090', 800, '', '', '                  Enter Address\r\n  ', '2018-03-11', ''),
(19, 54656200, 1, '900', 900, '', '', '                  Enter Address\r\n  ', '2018-03-11', ''),
(20, 65665220, 2, '600', 6000, '', '', '                  Enter Address\r\n  ', '2018-03-11', ''),
(21, 255, 1, '889', 88, '88', '88', '898                  Enter Address\r', '2018-03-11', ''),
(22, 65665220, 2, 'uu', 0, '', '', '                  Enter Address\r\n  ', '2018-03-11', ''),
(23, 255, 1, '8988', 80, 'uuy', '09089', '9u9                  Enter Address\r', '2018-03-11', ''),
(24, 65665220, 2, '8989', 10000, 'Majid', '9898', '                  Enter Address\r\n  ', '2018-03-17', '2018-03-30'),
(25, 54656200, 3, '898', 600, 'khan', '787', '878                  Enter Address\r', '2018-03-17', '2018-03-22');

-- --------------------------------------------------------

--
-- Table structure for table `company_reg`
--

CREATE TABLE `company_reg` (
  `Company_Code` int(15) NOT NULL,
  `Company_Name` varchar(25) DEFAULT NULL,
  `Company_Address` varchar(35) NOT NULL,
  `Phone_1` int(12) DEFAULT NULL,
  `Phone_2` int(12) DEFAULT NULL,
  `Fax` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_reg`
--

INSERT INTO `company_reg` (`Company_Code`, `Company_Name`, `Company_Address`, `Phone_1`, `Phone_2`, `Fax`) VALUES
(0, '', '', 0, 0, 0),
(0, '', '', 0, 0, 0),
(0, '', '', 0, 0, 0),
(0, '', '', 0, 0, 0),
(0, '', '', 0, 0, 0),
(0, '', '', 0, 0, 0),
(0, '', '', 0, 0, 0),
(0, '', '', 0, 0, 0),
(1, 'w', 'w', 1, 2, 2),
(0, '', '', 0, 0, 0),
(333, 'w', 's', 2, 2, 11),
(998, 'ABC', 'XYZ', 1, 3, 1),
(546, 'ABC', 'XYZ', 23, 123, 987),
(3, 'Q', 'E', 33, 2, 2),
(12, 'g', 'gg', 2, 33, 2),
(9877616, 'ABC', 'XYZ', 21, 213, 112233),
(8916, 'ABC', 'XYZ', 21, 213, 123),
(12, 'qqq', 'qqqqq', 12, 111, 111111),
(1, 'kar', '1', 0, NULL, NULL),
(0, '', '', 0, 0, 0),
(0, '', '', 0, 0, 0),
(0, '', '', 0, 0, 0),
(0, '', '', 0, 0, 0),
(0, '', '', 0, 0, 0),
(0, '', '', 0, 0, 0),
(0, '', '', 0, 0, 0),
(0, '', '', 0, 0, 0),
(1, 'w', 'w', 1, 2, 2),
(0, '', '', 0, 0, 0),
(333, 'w', 's', 2, 2, 11),
(998, 'ABC', 'XYZ', 1, 3, 1),
(546, 'ABC', 'XYZ', 23, 123, 987),
(3, 'Q', 'E', 33, 2, 2),
(12, 'g', 'gg', 2, 33, 2),
(9877616, 'ABC', 'XYZ', 21, 213, 112233),
(8916, 'ABC', 'XYZ', 21, 213, 123),
(12, 'qqq', 'qqqqq', 12, 111, 111111),
(1, 'kar', '1', 0, NULL, NULL),
(0, '', '', 0, 0, 0),
(0, '', '', 0, 0, 0),
(0, '', '', 0, 0, 0),
(0, '', '', 0, 0, 0),
(0, '', '', 0, 0, 0),
(0, '', '', 0, 0, 0),
(0, '', '', 0, 0, 0),
(0, '', '', 0, 0, 0),
(1, 'w', 'w', 1, 2, 2),
(0, '', '', 0, 0, 0),
(333, 'w', 's', 2, 2, 11),
(998, 'ABC', 'XYZ', 1, 3, 1),
(546, 'ABC', 'XYZ', 23, 123, 987),
(3, 'Q', 'E', 33, 2, 2),
(12, 'g', 'gg', 2, 33, 2),
(9877616, 'ABC', 'XYZ', 21, 213, 112233),
(8916, 'ABC', 'XYZ', 21, 213, 123),
(12, 'qqq', 'qqqqq', 12, 111, 111111),
(1, 'kar', '1', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `complete_pro`
--

CREATE TABLE `complete_pro` (
  `id` int(11) NOT NULL,
  `pro_id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `cost` int(20) NOT NULL,
  `advance` int(20) NOT NULL,
  `due` int(20) NOT NULL,
  `inventory_expense` int(255) NOT NULL,
  `profit` int(255) NOT NULL,
  `one_expense` int(30) NOT NULL,
  `extra_expense` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complete_pro`
--

INSERT INTO `complete_pro` (`id`, `pro_id`, `name`, `start_date`, `end_date`, `cost`, `advance`, `due`, `inventory_expense`, `profit`, `one_expense`, `extra_expense`) VALUES
(1, 5, 'Asa', '2018-03-10', '2018-03-19', 100, 100, 0, 0, 0, 0, 0),
(2, 4, 'PAF', '2018-03-02', '2018-03-30', 400000, 400000, 0, 0, 0, 0, 0),
(3, 9, 'iu', '0000-00-00', '0000-00-00', 0, 0, 0, 0, 0, 0, 0),
(4, 3, 'KIET', '2018-03-01', '0000-00-00', 200000, 100000, 100000, 0, 0, 0, 0),
(5, 9, 'iu', '0000-00-00', '0000-00-00', 0, 0, 0, 0, 0, 0, 0),
(6, 6, 'share', '2018-03-01', '2018-03-30', 10000, 5000, 5000, 0, 0, 0, 0),
(7, 2, 'Kasim', '2018-03-01', '2018-03-04', 500000, 400000, 100000, 0, 0, 0, 0),
(8, 8, 'bhb', '2018-04-01', '2018-04-01', 9898, 89, 9809, 0, 0, 0, 0),
(9, 7, 'kmc', '2018-04-01', '2018-04-30', 11000, 8000, 2000, 0, 0, 0, 0),
(10, 9, 'dmc', '2018-04-01', '2018-04-30', 10000, 5000, 5000, 0, 10000, 0, 0),
(11, 10, 'yyy', '2018-04-01', '2018-04-30', 80000, 10000, 70000, 29500, 50500, 0, 0),
(12, 11, 'ttt', '2018-04-01', '2018-04-30', 100000, 20000, 80000, 13900, 86100, 0, 0),
(13, 14, 'karan', '2013-02-12', '2014-02-03', 5000, 2500, 2500, 3000, 2000, 0, 0),
(14, 15, 'last', '2022-02-12', '2023-02-12', 2000, 1000, 1000, 1200, 800, 300, 900),
(15, 13, 'Pawan2', '2002-02-12', '2003-02-12', 5000, 2500, 2500, 17204, -17004, 16000, 1204),
(16, 12, 'pawan2', '2018-02-12', '2019-03-12', 200, 200, 0, 36871, -36671, 35667, 1204),
(17, 17, 'stadium', '2018-04-01', '2018-04-30', 10000, 10000, 0, 1800, 8200, 1200, 600),
(18, 16, 'kmc', '2018-04-01', '2018-04-30', 10000, 5000, 5000, 3957872, -3947872, 3805271, 152601),
(19, 20, 'geo_tv', '2018-04-03', '2018-04-30', 100000, 100000, 0, 28933, 71067, 10833, 18100),
(20, 21, 'Crash', '2017-11-15', '2018-02-07', 30000, 30000, 0, 38916, -8916, -1084, 40000),
(21, 24, 'BDA', '2018-04-02', '2018-04-28', 500000, 500000, 0, 871675, -371675, 400, 871275),
(22, 18, 'Asim', '2018-04-06', '2018-04-14', 790, 340, 450, -58511, 59301, -104275, 45764),
(23, 19, 'bilal', '2018-04-04', '2018-04-12', 1000, 5000, -4000, 2543989, -2542989, -1033, 2545022),
(24, 27, 'GoreMar', '2018-04-26', '2018-04-26', 300000, 100000, 200000, -20931, 320931, -20931, 0),
(25, 25, 'majid', '2018-04-24', '2018-04-30', 3000, 2000, 1000, -2448, 5448, -10617, 8169);

-- --------------------------------------------------------

--
-- Table structure for table `contractor`
--

CREATE TABLE `contractor` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `city` varchar(30) NOT NULL,
  `company_name` varchar(30) NOT NULL,
  `contact_no` int(14) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `date_r` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contractor`
--

INSERT INTO `contractor` (`id`, `name`, `type`, `city`, `company_name`, `contact_no`, `Address`, `date_r`) VALUES
(1, 'y', 'uyuy', 'yuy', 'nokiaa', 4, 'dirgh', '2018-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `customer_reg`
--

CREATE TABLE `customer_reg` (
  `id` int(3) NOT NULL,
  `Customer_Name` varchar(20) NOT NULL,
  `City_ID` varchar(15) NOT NULL,
  `Contact_Person` varchar(25) NOT NULL,
  `Designation` varchar(20) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Phone_No` varchar(15) NOT NULL,
  `Fax` int(15) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Sales_Tax` varchar(50) NOT NULL,
  `NTN` varchar(50) NOT NULL,
  `op_bal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_reg`
--

INSERT INTO `customer_reg` (`id`, `Customer_Name`, `City_ID`, `Contact_Person`, `Designation`, `Address`, `Phone_No`, `Fax`, `Email`, `Sales_Tax`, `NTN`, `op_bal`) VALUES
(2, 'MUNEEB AHMED', '200', 'ASIM', 'CEO', 'DRIGHROAD', '02135033993', 221350339, 'KARACHI', '05455553de', '54545452', '500000'),
(3, 'ALI ABDULLAH', '2', 'SAIM', 'CEO', 'KORANGI CREEK', '02135033933', 2147483647, 'muneeb.ahmed2008@gmail.com', '0254866', '2222555', '3000'),
(6, 'Majid', '2', 'SAIM', 'CEO', 'DRIGHROAD', '02135033993', 221350339, 'muneeb.ahmedd1', '0545555', '54545452', '50000'),
(7, 'Bilal', '1', 'Muneeb', 'CEO', 'DRIGHROAD', '02135005050', 221350339, 'rameezrkr', '0254866', '2222555', '5230'),
(12, 'Majid', '2', '238e67', 'manager', 'edef			 Adresss\r\n			 ', '45545', 7878, '@gmail.com', '56', '89', '600');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `cnic` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_on` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`id`, `email`, `c_name`, `cnic`, `subject`, `message`, `created_on`) VALUES
(1, 'nnjknjnjn	                    		\r\n		                    	', 'ew', '9898', '', '', '18-03-18'),
(2, 'm@gamil.com', 'majid', '676', 'ij', 'ijpijiji', '18-03-22'),
(3, 'asim7861@gmail.com', 'majid', '676', '78', '45', '18-03-24'),
(4, 'unun@gmail.com', 'majid', '676', 'iim', 'imim', '18-04-02'),
(5, 'vdV@fng.hgtfbf', 'majid', '676', 'gsdfdsfdsf', 'gfdsgfsdgfds', '18-04-04'),
(6, 'm.bilaldsu@gmail.com', '', 'fsdfdsfd', 'bilal', 'bilal', '18-04-06'),
(7, '89@gmail.com', '', 'fsdfdsfd', '8', '98', '18-04-07'),
(8, 'r@gmail.com', 'majid', '676', 'ty', 'sdcjscn', '18-04-07'),
(9, 'muhammad.noman9977@gmail.com', 'majid', '676', 'majid', 'oiipowcpowi', '18-04-07'),
(10, 'muhammad.noman9977@gmail.com', 'majid', '676', 'asim', 'euofuifhi3huifhiuhquifh3uidh23ifhyifh34igy4', '18-04-07'),
(11, 'muhammad.noman9977@gmail.com', 'q', 'qw', 'abi wla', 'jwdbcuwdcqwucwu', '18-04-07'),
(12, '', 'majid', '676', 'iji', 'iijij', '18-03-22'),
(13, '', 'majid', '676', 'tu chal ', '', '18-04-07'),
(14, 'asadchris19@gmail.com', 'majid', '676', 'mjjjj', '7y666eded', '18-04-07'),
(15, '		                    		\r\n		                    qmxmxkkxmqwkxmqklxmqkxmqkwmxkqwxm', 'we', '9898', '', '', '18-03-18');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `exp_id` int(3) UNSIGNED ZEROFILL NOT NULL,
  `exp_type` varchar(30) NOT NULL,
  `exp_desc` varchar(60) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `exp_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`exp_id`, `exp_type`, `exp_desc`, `amount`, `exp_date`) VALUES
(001, 'misc. expense', 'wall paint and glass door', '20000', '0000-00-00'),
(004, 'TExpense', 'printer', '5000', '0000-00-00'),
(005, 'Marketing Expense', 'marketing at KIET', '10000', '2018-02-01'),
(006, 'schoolexp', 'school fees', '9000', '2018-02-15'),
(007, 'abc', 'jkkjjkkjkl', '676', '2018-02-07'),
(008, 'schoolexp112', 'wall paint and glass door', '5000', '2018-02-10'),
(009, 'schoolexp222', 'wall paint and glass door', '2000', '2018-02-09'),
(010, 'tea', 'meeting', '100', '2018-02-02');

-- --------------------------------------------------------

--
-- Table structure for table `finish_goods`
--

CREATE TABLE `finish_goods` (
  `trans_no` int(10) NOT NULL,
  `trans_date` date NOT NULL,
  `ref_no` varchar(10) NOT NULL,
  `remarks` varchar(40) NOT NULL,
  `prod_id` int(10) NOT NULL,
  `pack_size` varchar(10) NOT NULL,
  `batch_no` varchar(20) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finish_goods`
--

INSERT INTO `finish_goods` (`trans_no`, `trans_date`, `ref_no`, `remarks`, `prod_id`, `pack_size`, `batch_no`, `qty`) VALUES
(1, '2017-02-15', '302', 'good transportation', 2, '65', '2155', 2050),
(2, '0000-00-00', '', '', 1, '', '', 0),
(3, '2018-03-14', '78', '78', 1, '878', '787', 8787),
(4, '0000-00-00', '', '', 1, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `genrate_salary`
--

CREATE TABLE `genrate_salary` (
  `id` int(11) NOT NULL,
  `emp_id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `dept_id` varchar(20) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `cell` int(20) NOT NULL,
  `cnic` int(20) NOT NULL,
  `salary` int(20) NOT NULL,
  `join_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genrate_salary`
--

INSERT INTO `genrate_salary` (`id`, `emp_id`, `name`, `dept_id`, `designation`, `city`, `cell`, `cnic`, `salary`, `join_date`) VALUES
(1, 0, '009', 'iu', '', 'i', 0, 0, 0, '0000-00-00'),
(2, 0, '009', 'iu', '', 'i', 0, 0, 0, '0000-00-00'),
(3, 0, '009', 'iu', '', 'i', 0, 0, 0, '0000-00-00'),
(4, 8, 'awan', '3', 'manager', 'karachi', 87987897, 87987897, 3000, '2018-02-15'),
(5, 9, 'iu', '', 'iuui', 'i', 0, 0, 0, '2018-03-08'),
(6, 9, 'iu', '', 'iuui', 'i', 0, 0, 0, '2018-03-08'),
(7, 9, 'iu', '', 'iuui', 'i', 0, 0, 0, '2018-03-08'),
(8, 8, 'awan', '3', 'manager', 'karachi', 87987897, 87987897, 3000, '2018-02-15'),
(9, 8, 'awan', '3', 'manager', 'karachi', 87987897, 87987897, 3000, '2018-02-15'),
(10, 1, 'as', '2', '8', 'yyy', 89, 6666, 55, '2018-03-12'),
(11, 1, 'as', '2', '8', 'yyy', 89, 6666, 55, '2018-03-12'),
(12, 1, 'gfrgfd', '2', 'gdf', 'gfdgfd', 0, 0, 0, '2018-04-13');

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `ig_id` int(4) NOT NULL,
  `fg_id` int(4) NOT NULL,
  `prod_id` int(4) NOT NULL,
  `unit` int(4) NOT NULL,
  `req_qty` decimal(10,0) NOT NULL,
  `tp` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_no` int(6) NOT NULL,
  `dc_date` date NOT NULL,
  `customer_id` int(3) NOT NULL,
  `ref_no` varchar(6) NOT NULL,
  `sale_person_id` int(3) NOT NULL,
  `remarks` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoice_no`, `dc_date`, `customer_id`, `ref_no`, `sale_person_id`, `remarks`) VALUES
(1, '2018-02-17', 3, '302', 5, 'good transportation'),
(2, '2018-02-13', 3, '564', 4, 'asd'),
(3, '2018-02-16', 3, '554', 5, 'j.'),
(4, '2018-02-16', 3, '855', 4, '25'),
(5, '2018-02-19', 3, '350', 7, 'Good product'),
(6, '2018-02-21', 3, '515', 7, 'full transaction'),
(7, '2018-02-19', 2, '21', 8, 'asd'),
(8, '0000-00-00', 2, '0', 6, ''),
(9, '0000-00-00', 2, '0', 6, ''),
(10, '0000-00-00', 2, '0', 6, ''),
(11, '2018-02-16', 2, '0', 7, 'not for sale'),
(12, '2018-02-17', 3, '0', 8, 'Good product'),
(13, '2018-02-17', 6, '0', 8, 'good transportation'),
(14, '2018-02-17', 3, '0', 8, 'Good product'),
(15, '2017-02-16', 6, '0', 6, 'good transportation'),
(16, '2018-02-10', 6, '0', 7, 'Good product'),
(17, '2018-02-10', 3, '0', 8, 'oppo q mobile'),
(18, '0000-00-00', 6, '  asas', 6, 'zxzx'),
(19, '0000-00-00', 0, '  ', 0, ''),
(20, '0000-00-00', 0, '   ', 0, ''),
(21, '2018-03-16', 2, '    77', 8, 'issi'),
(22, '0000-00-00', 0, ' ', 0, ''),
(23, '0000-00-00', 0, '   ', 0, ''),
(24, '0000-00-00', 0, '  ', 0, ''),
(25, '0000-00-00', 0, '    ', 0, ''),
(26, '2018-03-28', 0, '  78', 0, 'good'),
(27, '0000-00-00', 0, '  ', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_detail`
--

CREATE TABLE `invoice_detail` (
  `invoice_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `pack_size` varchar(30) NOT NULL,
  `batch_no` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_detail`
--

INSERT INTO `invoice_detail` (`invoice_id`, `prod_id`, `pack_size`, `batch_no`, `price`, `qty`) VALUES
(8, 1, '', '', 200, 2),
(8, 3, '', '', 220, 3),
(8, 1, '20', '', 200, 2),
(8, 3, '220x21', '', 220, 3),
(8, 1, '20', '20', 200, 2),
(8, 3, '220x21', '220x21', 220, 3),
(8, 1, '20', '20', 200, 2),
(8, 3, '220x21', '220x21', 220, 3),
(9, 1, '20', '20', 200, 2),
(9, 3, '220x21', '220x21', 220, 3),
(10, 4, '122', '122', 632, 3),
(10, 1, '20', '20', 200, 3),
(10, 3, '220x21', '220x21', 220, 2),
(11, 4, '122', '122', 632, 8),
(11, 1, '20', '20', 200, 8),
(12, 4, '122', '122', 632, 10),
(13, 2, '20', '20', 3200, 10),
(14, 4, '122', '122', 632, 5),
(15, 4, '122', '122', 632, 2),
(17, 1, '20', '20', 200, 4),
(18, 4, '122', '122', 632, 0),
(19, 4, '122', '122', 632, 2),
(20, 4, '122', '122', 632, 67),
(21, 4, '122', '122', 632, 3),
(21, 1, '20', '20', 200, 4),
(23, 2, '20', '20', 3200, 22),
(24, 1, '20', '20', 200, 67),
(24, 7, 'pack_size', 'pack_size', 0, 0),
(25, 2, '20', '20', 3200, 222),
(25, 4, '122', '122', 632, 0),
(26, 7, 'pack_size', 'pack_size', 0, 0),
(26, 81, '40', '40', 500, 0),
(27, 81, '40', '40', 500, 3),
(8, 1, '', '', 200, 2),
(8, 3, '', '', 220, 3),
(8, 1, '20', '', 200, 2),
(8, 3, '220x21', '', 220, 3),
(8, 1, '20', '20', 200, 2),
(8, 3, '220x21', '220x21', 220, 3),
(8, 1, '20', '20', 200, 2),
(8, 3, '220x21', '220x21', 220, 3),
(9, 1, '20', '20', 200, 2),
(9, 3, '220x21', '220x21', 220, 3),
(10, 4, '122', '122', 632, 3),
(10, 1, '20', '20', 200, 3),
(10, 3, '220x21', '220x21', 220, 2),
(11, 4, '122', '122', 632, 8),
(11, 1, '20', '20', 200, 8),
(12, 4, '122', '122', 632, 10),
(13, 2, '20', '20', 3200, 10),
(14, 4, '122', '122', 632, 5),
(15, 4, '122', '122', 632, 2),
(17, 1, '20', '20', 200, 4),
(18, 4, '122', '122', 632, 0),
(19, 4, '122', '122', 632, 2),
(20, 4, '122', '122', 632, 3),
(20, 0, 'pack_size', 'pack_size', 0, 2),
(21, 1, '20', '20', 200, 2),
(21, 4, '122', '122', 632, 2),
(21, 3, '220x21', '220x21', 220, 2),
(21, 5, '32321', '32321', 632, 2),
(22, 4, '122', '122', 632, 2),
(22, 1, '20', '20', 200, 3),
(22, 3, '220x21', '220x21', 220, 4),
(23, 4, '122', '122', 632, 2),
(23, 1, '20', '20', 200, 3),
(24, 4, '122', '122', 632, 10),
(25, 4, '122', '122', 632, 12),
(25, 4, '122', '122', 632, 12),
(25, 4, '122', '122', 632, 12),
(25, 4, '122', '122', 632, 12),
(25, 4, '122', '122', 632, 12),
(25, 4, '122', '122', 632, 12),
(25, 4, '122', '122', 632, 12),
(25, 4, '122', '122', 632, 12),
(25, 4, '122', '122', 632, 12),
(25, 4, '122', '122', 632, 12),
(25, 4, '122', '122', 632, 12),
(25, 4, '122', '122', 632, 12),
(25, 4, '122', '122', 632, 12),
(25, 4, '122', '122', 632, 12),
(25, 3, '220x21', '220x21', 220, 5),
(26, 1, '20', '20', 200, 3),
(26, 1, '20', '20', 200, 2),
(26, 1, '20', '20', 200, 2),
(26, 1, '20', '20', 200, 6),
(26, 1, '20', '20', 200, 5),
(26, 1, '20', '20', 200, 3),
(26, 4, '122', '122', 632, 5),
(27, 1, '20', '20', 200, 2),
(27, 1, '20', '20', 200, 3),
(27, 1, '20', '20', 200, 3),
(27, 1, '20', '20', 200, 2),
(27, 1, '20', '20', 200, 2),
(27, 1, '20', '20', 200, 5),
(27, 1, '20', '20', 200, 3),
(27, 1, '20', '20', 200, 5),
(27, 1, '20', '20', 200, 5),
(27, 4, '122', '122', 632, 6),
(28, 1, '20', '20', 200, 5),
(29, 4, '122', '122', 632, 5),
(29, 2, '20', '20', 3200, 5),
(30, 4, '122', '122', 632, 10),
(31, 4, '122', '122', 632, 10),
(32, 1, '20', '20', 200, 25),
(33, 4, '122', '122', 632, 50),
(34, 4, '122', '122', 632, 3),
(35, 4, '122', '122', 632, 5),
(36, 4, '122', '122', 632, 50),
(37, 4, '122', '122', 632, 3),
(37, 4, '122', '122', 632, 3),
(37, 4, '122', '122', 632, 3),
(37, 4, '122', '122', 632, 3),
(37, 4, '122', '122', 632, 3),
(37, 4, '122', '122', 632, 3),
(37, 4, '122', '122', 632, 3),
(37, 4, '122', '122', 632, 3),
(37, 4, '122', '122', 632, 3),
(8, 1, '', '', 200, 2),
(8, 3, '', '', 220, 3),
(8, 1, '20', '', 200, 2),
(8, 3, '220x21', '', 220, 3),
(8, 1, '20', '20', 200, 2),
(8, 3, '220x21', '220x21', 220, 3),
(8, 1, '20', '20', 200, 2),
(8, 3, '220x21', '220x21', 220, 3),
(9, 1, '20', '20', 200, 2),
(9, 3, '220x21', '220x21', 220, 3),
(10, 4, '122', '122', 632, 3),
(10, 1, '20', '20', 200, 3),
(10, 3, '220x21', '220x21', 220, 2),
(11, 4, '122', '122', 632, 8),
(11, 1, '20', '20', 200, 8),
(12, 4, '122', '122', 632, 10),
(13, 2, '20', '20', 3200, 10),
(14, 4, '122', '122', 632, 5),
(15, 4, '122', '122', 632, 2),
(17, 1, '20', '20', 200, 4),
(18, 4, '122', '122', 632, 0),
(19, 4, '122', '122', 632, 2),
(20, 4, '122', '122', 632, 3),
(20, 0, 'pack_size', 'pack_size', 0, 2),
(21, 1, '20', '20', 200, 2),
(21, 4, '122', '122', 632, 2),
(21, 3, '220x21', '220x21', 220, 2),
(21, 5, '32321', '32321', 632, 2),
(22, 4, '122', '122', 632, 2),
(22, 1, '20', '20', 200, 3),
(22, 3, '220x21', '220x21', 220, 4),
(23, 4, '122', '122', 632, 2),
(23, 1, '20', '20', 200, 3),
(24, 4, '122', '122', 632, 10),
(25, 4, '122', '122', 632, 12),
(25, 4, '122', '122', 632, 12),
(25, 4, '122', '122', 632, 12),
(25, 4, '122', '122', 632, 12),
(25, 4, '122', '122', 632, 12),
(25, 4, '122', '122', 632, 12),
(25, 4, '122', '122', 632, 12),
(25, 4, '122', '122', 632, 12),
(25, 4, '122', '122', 632, 12),
(25, 4, '122', '122', 632, 12),
(25, 4, '122', '122', 632, 12),
(25, 4, '122', '122', 632, 12),
(25, 4, '122', '122', 632, 12),
(25, 4, '122', '122', 632, 12),
(25, 3, '220x21', '220x21', 220, 5),
(26, 1, '20', '20', 200, 3),
(26, 1, '20', '20', 200, 2),
(26, 1, '20', '20', 200, 2),
(26, 1, '20', '20', 200, 6),
(26, 1, '20', '20', 200, 5),
(26, 1, '20', '20', 200, 3),
(26, 4, '122', '122', 632, 5),
(27, 1, '20', '20', 200, 2),
(27, 1, '20', '20', 200, 3),
(27, 1, '20', '20', 200, 3),
(27, 1, '20', '20', 200, 2),
(27, 1, '20', '20', 200, 2),
(27, 1, '20', '20', 200, 5),
(27, 1, '20', '20', 200, 3),
(27, 1, '20', '20', 200, 5),
(27, 1, '20', '20', 200, 5),
(27, 4, '122', '122', 632, 6),
(28, 1, '20', '20', 200, 5),
(29, 4, '122', '122', 632, 5),
(29, 2, '20', '20', 3200, 5),
(30, 4, '122', '122', 632, 10),
(31, 4, '122', '122', 632, 10),
(32, 1, '20', '20', 200, 25),
(33, 4, '122', '122', 632, 50),
(34, 4, '122', '122', 632, 3),
(35, 4, '122', '122', 632, 5),
(36, 4, '122', '122', 632, 50),
(37, 4, '122', '122', 632, 3),
(37, 4, '122', '122', 632, 3),
(37, 4, '122', '122', 632, 3),
(37, 4, '122', '122', 632, 3),
(37, 4, '122', '122', 632, 3),
(37, 4, '122', '122', 632, 3),
(37, 4, '122', '122', 632, 3),
(37, 4, '122', '122', 632, 3),
(37, 4, '122', '122', 632, 3);

-- --------------------------------------------------------

--
-- Table structure for table `invoice_return`
--

CREATE TABLE `invoice_return` (
  `invoice_ret_id` int(3) NOT NULL,
  `invoice_ret_date` date NOT NULL,
  `customer_id` int(3) NOT NULL,
  `ref_no` int(20) NOT NULL,
  `sale_person_id` int(3) NOT NULL,
  `remarks` varchar(40) NOT NULL,
  `product_id` int(3) NOT NULL,
  `pack_size` varchar(20) NOT NULL,
  `batch_no` varchar(20) NOT NULL,
  `price` int(10) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_return`
--

INSERT INTO `invoice_return` (`invoice_ret_id`, `invoice_ret_date`, `customer_id`, `ref_no`, `sale_person_id`, `remarks`, `product_id`, `pack_size`, `batch_no`, `price`, `qty`) VALUES
(1, '2018-02-21', 3, 302, 5, 'good', 2, '66', '2155', 5000, 3),
(2, '2018-02-22', 2, 21, 8, 'asd', 1, '32321', '202', 5000, 2),
(3, '2018-01-30', 0, 0, 0, '', 0, '', '', 0, 0),
(4, '0000-00-00', 0, 0, 0, '', 0, '', '', 0, 0),
(5, '0000-00-00', 0, 0, 0, '', 0, '', '', 0, 0),
(6, '0000-00-00', 3, 564, 4, 'asd', 0, '<br', '<br', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `issuedby`
--

CREATE TABLE `issuedby` (
  `Id` int(11) NOT NULL,
  `date1` date NOT NULL,
  `name` varchar(30) NOT NULL,
  `status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issuedby`
--

INSERT INTO `issuedby` (`Id`, `date1`, `name`, `status`) VALUES
(1, '2018-03-02', 'Asim', 0),
(2, '2018-03-12', 'Aqib', 1),
(3, '2018-03-16', 'Asim Ghalib', 1),
(4, '2018-04-12', 't434', 0),
(5, '2018-04-04', 'hhfhg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `item_formula`
--

CREATE TABLE `item_formula` (
  `id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_formula`
--

INSERT INTO `item_formula` (`id`, `item_name`, `product_name`, `qty`) VALUES
(1, 'panadol', 'SO4', 50),
(2, 'panadol', 'H20', 50),
(3, 'panadol', 'h2', 50),
(4, 'dispren', 'SO4', 50),
(5, 'dispren', 'H20', 50),
(6, 'dispren', 'h2', 50),
(7, 'brufen', 'bh3', 5),
(8, 'brufen', 'ch4', 6),
(9, 'brufen', 'h2', 10);

-- --------------------------------------------------------

--
-- Table structure for table `item_reg`
--

CREATE TABLE `item_reg` (
  `id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_reg`
--

INSERT INTO `item_reg` (`id`, `item_name`, `category`) VALUES
(35, 'Bottle', 'Electronic'),
(36, 'Pepsi Bottle', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `item_registration`
--

CREATE TABLE `item_registration` (
  `item_code` varchar(15) NOT NULL,
  `item_name` varchar(25) NOT NULL,
  `company_name` varchar(25) NOT NULL,
  `pack_size` int(15) NOT NULL,
  `no_pcs` int(15) NOT NULL,
  `trade_price` int(15) NOT NULL,
  `retail_price` int(15) NOT NULL,
  `sales_tax` int(15) NOT NULL,
  `sales_dis` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_registration`
--

INSERT INTO `item_registration` (`item_code`, `item_name`, `company_name`, `pack_size`, `no_pcs`, `trade_price`, `retail_price`, `sales_tax`, `sales_dis`) VALUES
('0', '', ' ', 0, 0, 0, 0, 0, 0),
('0', '', ' ', 0, 0, 0, 0, 0, 0),
('0', '', ' ', 0, 0, 0, 0, 0, 0),
('121', 'na', 'asnka', 12, 12, 111, 123, 12, 11),
('13333', 'e', 'e', 1, 11, 1, 1, 11, 1),
('12D179', 'ABC', 'XYZ', 10, 10, 15, 10, 12, 10);

-- --------------------------------------------------------

--
-- Table structure for table `journal_vocher`
--

CREATE TABLE `journal_vocher` (
  `id` int(11) NOT NULL,
  `n_contractor` varchar(20) NOT NULL,
  `date_r` date NOT NULL,
  `d_amount` int(20) NOT NULL,
  `c_amount` int(20) NOT NULL,
  `Explanation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `journal_vocher`
--

INSERT INTO `journal_vocher` (`id`, `n_contractor`, `date_r`, `d_amount`, `c_amount`, `Explanation`) VALUES
(1, 'asim', '2018-03-10', 30, 20, 'good idea');

-- --------------------------------------------------------

--
-- Table structure for table `lc_details`
--

CREATE TABLE `lc_details` (
  `id` int(11) NOT NULL,
  `lc_trans_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lc_details`
--

INSERT INTO `lc_details` (`id`, `lc_trans_id`, `product_id`, `qty`, `price`, `total`) VALUES
(1, 11, 0, 3, 220, 0),
(2, 14, 0, 2, 200, 0),
(3, 15, 0, 2, 200, 0),
(4, 15, 0, 4, 632, 0),
(5, 16, 0, 2, 200, 0),
(6, 16, 0, 4, 632, 0),
(7, 16, 0, 3, 220, 0),
(8, 17, 0, 0, 200, 0),
(9, 18, 0, 2, 632, 0),
(10, 19, 4, 2, 632, 0),
(11, 19, 1, 3, 200, 0),
(12, 20, 4, 2, 632, 0),
(13, 23, 4, 2, 632, 0),
(14, 23, 1, 3, 200, 0),
(15, 24, 4, 3, 632, 0),
(16, 24, 1, 3, 200, 0),
(17, 25, 1, 2, 200, 0),
(18, 26, 4, 2, 632, 0),
(19, 26, 1, 3, 200, 0),
(20, 27, 4, 2, 632, 0),
(21, 27, 1, 3, 200, 0),
(22, 27, 3, 4, 220, 0),
(23, 28, 2, 2, 3200, 0),
(24, 29, 4, 3, 632, 0),
(25, 29, 1, 4, 200, 0),
(26, 29, 0, 0, 0, 0),
(27, 30, 1, 4, 200, 0),
(28, 30, 4, 5, 632, 0),
(29, 31, 4, 0, 632, 0),
(30, 32, 4, 700, 632, 0),
(31, 33, 4, 0, 632, 0),
(32, 33, 81, 0, 500, 0);

-- --------------------------------------------------------

--
-- Table structure for table `lc_transaction`
--

CREATE TABLE `lc_transaction` (
  `trans_no` int(10) NOT NULL,
  `open_date` date NOT NULL,
  `lc_bc_no` varchar(20) NOT NULL,
  `bank` varchar(30) NOT NULL,
  `party` varchar(30) NOT NULL,
  `indentor` varchar(30) NOT NULL,
  `supplier` varchar(30) NOT NULL,
  `remarks` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lc_transaction`
--

INSERT INTO `lc_transaction` (`trans_no`, `open_date`, `lc_bc_no`, `bank`, `party`, `indentor`, `supplier`, `remarks`) VALUES
(1, '2018-02-15', '5641-D', '', 'Customer', 'Ods', 'pakistan', 'Good product'),
(2, '0000-00-00', '', '', '', '7', '7', ''),
(3, '0000-00-00', '', '', '', 'Samsung', '', ''),
(4, '2018-02-23', '515', 'asd', 'king', '7', '10', 'karachi'),
(5, '0000-00-00', '', '', '', 'Carmix', '', ''),
(6, '2018-02-09', '5151', 'sadsa', 'karachi', '7', '11', 'king'),
(7, '0000-00-00', '', '', '', 'carmin', '', ''),
(8, '0000-00-00', '', '', '', '7', '7', ''),
(9, '0000-00-00', '', '', '', 'Samsung', '', ''),
(10, '2018-02-28', '6620', 'Bank Islami', 'karachi', '7', '7', 'oppo q mobile'),
(11, '2018-02-21', '626', 'karachi pakistan bank', 'peoples party', '9', '11', 'best'),
(12, '2018-02-22', '515', 'isb', 'pti', '9', '10', 'sa'),
(13, '0051-02-16', '515', '15515', '151', '9', '9', 'good transportation'),
(14, '0051-02-01', '515', '151515', '151', '7', '7', 'gh'),
(15, '2018-02-15', '630', '3030', '0330', '7', '7', 'Good product'),
(16, '2018-02-23', '212', '0202', '02', '7', '7', '02s'),
(17, '0000-00-00', '', '', '', '7', '7', ''),
(18, '2018-02-14', '55', 'Bank Islami', 'karachi', '9', '11', 'oppo q mobile'),
(19, '2018-02-22', '5155', 'NIB Bank', 'pakistan', '7', '7', 'oppo q mobile'),
(20, '0000-00-00', '', '', '', '', '', ''),
(21, '2018-02-15', '550', '2022', '202', '9', '8', 'ad'),
(22, '0000-00-00', '', '', '', '', '', ''),
(23, '2018-02-23', '20515', 'Bank Islami', 'pakistan', '9', '9', 'oppo q mobile'),
(24, '2018-02-09', '050', 'NIB Bank', 'Customer', '9', '10', 's'),
(25, '0000-00-00', '', '', '', '', '', ''),
(26, '2018-02-17', '62165', 'karachi pakistan bank', 'karachi', '8', '10', 'good transportation'),
(27, '2018-02-17', '6151', 'faysal bank', 'pakistan', '9', '10', 'Good product'),
(28, '2018-02-17', '62165', 'faysal bank', 'Customer', '9', '10', 'good transportation'),
(29, '0000-00-00', '', '', '', '', '', ''),
(30, '2018-03-09', '889', 'karachi bank', 'pakistan peoples party', '8', '8', 'issi'),
(31, '0000-00-00', '', '', '', '', '', ''),
(32, '2018-03-06', '78', 'karachi bank', 'aX', '8', '8', '2'),
(33, '0000-00-00', '', '', '', '', '', ''),
(34, '0000-00-00', '', '', '', '', '', ''),
(35, '0000-00-00', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `loanamount`
--

CREATE TABLE `loanamount` (
  `loan_id` int(3) UNSIGNED ZEROFILL NOT NULL,
  `emp_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `cell` varchar(20) NOT NULL,
  `cnic` varchar(20) NOT NULL,
  `amount` int(10) NOT NULL,
  `loan_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loanamount`
--

INSERT INTO `loanamount` (`loan_id`, `emp_id`, `name`, `cell`, `cnic`, `amount`, `loan_date`) VALUES
(008, 1, 'Asim', '8888', '98989', 800, '2018-03-14'),
(015, 3, 'Abdul', '878787', '87', 100, '2018-03-14'),
(017, 6, 'ahad90', '90', '099', 900, '2018-03-01'),
(018, 5, 'Dr.', '898', '8989', 600, '2018-03-14');

-- --------------------------------------------------------

--
-- Table structure for table `loan_acc`
--

CREATE TABLE `loan_acc` (
  `LoanAccount_Code` int(15) NOT NULL,
  `Account_Tittle` varchar(20) NOT NULL,
  `Address` varchar(25) NOT NULL,
  `Phone_1` int(12) NOT NULL,
  `Phone_2` int(12) NOT NULL,
  `Fax` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan_acc`
--

INSERT INTO `loan_acc` (`LoanAccount_Code`, `Account_Tittle`, `Address`, `Phone_1`, `Phone_2`, `Fax`) VALUES
(123, 'a', 'SS', 2, 3, 111),
(12, 'A', 'AA', 2, 11, 33),
(1234556, 'ABC', 'XYZ', 21, 213, 654);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `employe_name` varchar(255) NOT NULL,
  `employe_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `admin_name`, `admin_pass`, `employe_name`, `employe_pass`) VALUES
(1, 'admin', 'admin', 'employe', 'employe');

-- --------------------------------------------------------

--
-- Table structure for table `medi`
--

CREATE TABLE `medi` (
  `id` int(11) UNSIGNED NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) UNSIGNED NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `newitem_reg`
--

CREATE TABLE `newitem_reg` (
  `id` int(3) NOT NULL,
  `product_title` varchar(40) NOT NULL,
  `uom` varchar(30) NOT NULL,
  `mrp` int(11) NOT NULL,
  `opb` int(11) NOT NULL,
  `product_convention` varchar(40) NOT NULL,
  `quantity` int(11) NOT NULL,
  `reorder_quantity` int(11) NOT NULL,
  `dates` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newitem_reg`
--

INSERT INTO `newitem_reg` (`id`, `product_title`, `uom`, `mrp`, `opb`, `product_convention`, `quantity`, `reorder_quantity`, `dates`) VALUES
(81, 'SO4', '1', 55, 1000, '34', -2700, 300, ''),
(82, 'H20', '3', 8787, 8787, '8787', 1850, 700, ''),
(83, 'h2', '4', 7878, 78787, '8787', 800, 390, ''),
(84, 'c2', '2', 800, 600, '700', 15000, 500, ''),
(85, 'ch4', '6', 909, 9000, '90', 7970, 94, ''),
(86, 'bh3', '3', 89, 700, '88', 5975, 95, '18-03-16');

-- --------------------------------------------------------

--
-- Table structure for table `newvendor_reg`
--

CREATE TABLE `newvendor_reg` (
  `id` int(3) NOT NULL,
  `ven_title` varchar(30) NOT NULL,
  `ven_cat_id` int(11) NOT NULL,
  `v_contact_person` varchar(30) NOT NULL,
  `v_designation` varchar(30) NOT NULL,
  `v_address` varchar(60) NOT NULL,
  `v_phone` varchar(30) NOT NULL,
  `v_fax` varchar(30) NOT NULL,
  `v_email` varchar(30) NOT NULL,
  `v_op_bal` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newvendor_reg`
--

INSERT INTO `newvendor_reg` (`id`, `ven_title`, `ven_cat_id`, `v_contact_person`, `v_designation`, `v_address`, `v_phone`, `v_fax`, `v_email`, `v_op_bal`) VALUES
(12, 'jij', 0, 'iuiu', 'uiu', 'iui			 ', 'iu', 'iuiu', 'iu', 'u'),
(13, 'uiu', 12, 'uiui', 'iuiu', 'iuiu			 ', 'iuiu', 'iuiu', 'iuiu', '909'),
(14, '787', 0, '8787', '', '8787			 ', '8787', '8787', '878878', ''),
(15, 'shabeer', 0, 'ahad', '', 'jdjk			 ', '1', '1', '1@j', ''),
(16, 'ahmed', 0, 'aaa', '', 'kk			 ', 'oo', 'kj', 'q@k.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `new_company_reg`
--

CREATE TABLE `new_company_reg` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_address` text NOT NULL,
  `company_phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_company_reg`
--

INSERT INTO `new_company_reg` (`id`, `company_name`, `company_address`, `company_phone`) VALUES
(1, 'nokia', 'kookpoko', 89898);

-- --------------------------------------------------------

--
-- Table structure for table `new_customer_reg`
--

CREATE TABLE `new_customer_reg` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `email_personal` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `cnic` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `passport_no` varchar(255) NOT NULL,
  `permanent_add` text NOT NULL,
  `telephone_res` varchar(255) NOT NULL,
  `telephone_off` varchar(255) NOT NULL,
  `mob_no_personal` varchar(255) NOT NULL,
  `mob_no_off` varchar(255) NOT NULL,
  `email_off` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_customer_reg`
--

INSERT INTO `new_customer_reg` (`id`, `name`, `f_name`, `email_personal`, `address`, `cnic`, `city`, `country`, `passport_no`, `permanent_add`, `telephone_res`, `telephone_off`, `mob_no_personal`, `mob_no_off`, `email_off`) VALUES
(1, 'majid', 'kk', 'ep', 'add', '676', '898', '989', '9999', 'pd', 'tr', 'to', 'mp', 'moff', 'eof'),
(6, 'q', 'e', 'w@d.com', 'w', 'qw', 'w', 'w', 'qw', 'w', 'qw', 'w', 'q', 'qw', 'w@.com');

-- --------------------------------------------------------

--
-- Table structure for table `new_recpt_form`
--

CREATE TABLE `new_recpt_form` (
  `id` int(11) NOT NULL,
  `in_no` int(20) NOT NULL,
  `date_r` date NOT NULL,
  `amount` int(20) NOT NULL,
  `qty` int(20) NOT NULL,
  `item_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_recpt_form`
--

INSERT INTO `new_recpt_form` (`id`, `in_no`, `date_r`, `amount`, `qty`, `item_id`) VALUES
(1, 377, '2018-03-02', 788, 3, 8),
(2, 9, '0009-09-09', 0, 9, 8);

-- --------------------------------------------------------

--
-- Table structure for table `new_salesman`
--

CREATE TABLE `new_salesman` (
  `id` int(3) NOT NULL,
  `sal_title` varchar(30) NOT NULL,
  `s_address` varchar(30) NOT NULL,
  `s_p_no` varchar(20) NOT NULL,
  `s_mob_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_salesman`
--

INSERT INTO `new_salesman` (`id`, `sal_title`, `s_address`, `s_p_no`, `s_mob_no`) VALUES
(7, 'Mufaddal', 'Garden West', '0213555151', '03463525456'),
(8, 'Moiz', 'Garden East', '0213555151', '03215151551'),
(9, 'Sharjil', 'Saddarr', '021355515', '03223900001');

-- --------------------------------------------------------

--
-- Table structure for table `person_drw`
--

CREATE TABLE `person_drw` (
  `Personal_Acc` int(14) NOT NULL,
  `Description` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person_drw`
--

INSERT INTO `person_drw` (`Personal_Acc`, `Description`) VALUES
(1234, 'asjan'),
(1234, 'this is des');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` varchar(50) DEFAULT NULL,
  `buy_price` double(25,2) DEFAULT NULL,
  `sale_price` double(25,2) NOT NULL,
  `categorie_id` int(11) UNSIGNED NOT NULL,
  `media_id` int(11) DEFAULT 0,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(346, 'qqqqqz', '1', 0.00, 0.00, 1, 0, '2017-09-11 09:18:49'),
(347, 'hole swEE', '34', 2.00, 3.00, 1, 0, '2018-02-20 13:12:31'),
(348, 'Panadoll', '64', 1.00, 2.00, 1, 0, '2018-02-20 13:12:58'),
(349, 'nokia', '81', 200.00, 300.00, 1, 0, '2018-02-20 13:17:32');

-- --------------------------------------------------------

--
-- Table structure for table `production_file`
--

CREATE TABLE `production_file` (
  `prod_id` int(3) NOT NULL,
  `prod_date` date NOT NULL,
  `product_id` int(3) NOT NULL,
  `batch_size` varchar(15) NOT NULL,
  `batch_no` varchar(20) NOT NULL,
  `est_packs_qty` int(20) NOT NULL,
  `remarks` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `production_file`
--

INSERT INTO `production_file` (`prod_id`, `prod_date`, `product_id`, `batch_size`, `batch_no`, `est_packs_qty`, `remarks`) VALUES
(1, '2018-02-22', 1, '303', '220', 330, 'ookd'),
(2, '0000-00-00', 1, '', '', 0, ''),
(3, '2018-02-16', 2, '2302', '202', 200, 'Good product'),
(4, '2018-02-28', 2, '303', '21550', 200, 'not for sale'),
(5, '0000-00-00', 1, '', '', 0, ''),
(6, '2018-03-06', 1, '78', '878', 787, '78'),
(7, '2018-03-02', 0, '89', '898', 3, '89'),
(8, '2018-03-16', 0, '22', '445', 5, '4'),
(9, '2018-03-16', 0, '89', '989', 60, '4');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` varchar(50) DEFAULT NULL,
  `buy_price` double(25,2) DEFAULT NULL,
  `sale_price` double(25,2) NOT NULL,
  `categorie_id` int(11) UNSIGNED NOT NULL,
  `media_id` int(11) DEFAULT 0,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `quantity`, `buy_price`, `sale_price`, `categorie_id`, `media_id`, `date`) VALUES
(10, 'hole swEE', '59962', 2.00, 3.00, 4, 0, '2017-09-04 15:45:58'),
(11, 'wewe', '1', 54.00, 222.00, 4, 0, '2017-09-11 09:05:31'),
(12, 'jjjj', '-1', 4.00, 22.00, 4, 0, '2017-09-11 09:05:31'),
(13, 'voren20', '14', 2.45, 3.45, 4, 0, '2017-09-11 09:36:27'),
(14, 'next', '14', 2.44, 3.44, 4, 0, '2017-09-11 09:36:59'),
(17, 'vor', '14', 2.46, 3.45, 4, 0, '2017-09-11 09:48:23'),
(18, 'Panadoll', '-54', 1.00, 2.00, 6, 0, '2017-11-05 19:31:58'),
(19, 'nokia', '-61', 200.00, 300.00, 4, 0, '2018-02-03 03:39:19');

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `id` int(3) NOT NULL,
  `province_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`id`, `province_name`) VALUES
(1, 'punjab'),
(2, 'sindh'),
(3, 'balochistan'),
(4, 'KPK'),
(5, 'NWFP');

-- --------------------------------------------------------

--
-- Table structure for table `pro_project`
--

CREATE TABLE `pro_project` (
  `id` int(11) NOT NULL,
  `p_name` varchar(20) NOT NULL,
  `pro_name` varchar(20) NOT NULL,
  `Quantity` int(20) NOT NULL,
  `Ex_desc` varchar(20) NOT NULL,
  `Ex_unit` varchar(20) NOT NULL,
  `Ex_quantity` int(20) NOT NULL,
  `Ex_price` int(20) NOT NULL,
  `Ex_total` int(20) NOT NULL,
  `prod_price` int(11) NOT NULL,
  `datee` varchar(255) NOT NULL,
  `exdatee` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pro_project`
--

INSERT INTO `pro_project` (`id`, `p_name`, `pro_name`, `Quantity`, `Ex_desc`, `Ex_unit`, `Ex_quantity`, `Ex_price`, `Ex_total`, `prod_price`, `datee`, `exdatee`) VALUES
(1, '3', 'bags', 2, '0', '0', 0, 0, 0, 0, '', ''),
(2, '3', '', 0, '', '', 0, 0, 0, 0, '', ''),
(3, '2', 'usbb', 45, '0', '0', 0, 0, 0, 0, '', ''),
(4, '2', '', 0, '', '', 0, 0, 0, 0, '', ''),
(5, '2', '', 0, '', '', 0, 0, 0, 0, '', ''),
(6, '3', 'usbb', 2, '0', '0', 0, 0, 0, 0, '', ''),
(7, '3', '', 0, '', '', 0, 0, 0, 0, '', ''),
(8, '3', 'usbb', 45, '0', '0', 0, 0, 0, 0, '', ''),
(9, '3', '', 0, '', '', 0, 0, 0, 0, '', ''),
(10, '4', 'uiuiu', 45, '0', '0', 0, 0, 0, 0, '', ''),
(11, '4', '', 0, '', '', 0, 0, 0, 0, '', ''),
(12, '6', 'canon', 78, '0', '0', 0, 0, 0, 0, '', ''),
(13, '6', 'bags', 787, '0', '0', 0, 0, 0, 0, '', ''),
(14, '6', 'yy', 788, 'yy', '78', 788, 7888, 6215744, 0, '', ''),
(19, 'kmc', 'bags', 67, '0', '0', 0, 0, 0, 3000, '', ''),
(20, 'kmc', 'canon', 44, '0', '0', 0, 0, 0, 22000, '', ''),
(22, 'yyy', 'Electronic', 67, '0', '0', 0, 0, 0, 26800, '', ''),
(23, 'yyy', 'e', 3, '0', '0', 0, 0, 0, 2700, '', ''),
(24, 'yyy', '', 0, '', '', 0, 0, 0, 0, '', ''),
(25, 'ttt', 'bags', 3, '0', '0', 0, 0, 0, 1800, '', ''),
(26, 'ttt', '', 0, '', '', 0, 0, 0, 0, '', ''),
(27, 'ttt', 'ioi', 0, 'ioi', '99', 0, 0, 0, 0, '', ''),
(28, 'ttt', 'bags', 3, '0', '0', 0, 0, 0, 1800, '', ''),
(29, 'ttt', '', 0, '', '', 0, 0, 0, 0, '', ''),
(30, 'ttt', 'ioi', 0, 'ioi', '99', 0, 0, 0, 0, '', ''),
(31, 'ttt', 'watch', 4, '0', '0', 0, 0, 0, 400, '', ''),
(32, 'ttt', 'bags', 3, '0', '0', 0, 0, 0, 1800, '', ''),
(33, 'ttt', 'tea 2', 2, 'tea 2', '23', 2, 566, 0, 0, '', ''),
(34, 'ttt', 'e', 9, '0', '0', 0, 0, 0, 8100, '', ''),
(35, 'ttt', '', 0, '', '', 0, 0, 0, 0, '', ''),
(36, 'pawan2', 'bags', 2, '0', '0', 0, 0, 0, 1200, '', ''),
(37, 'pawan2', 'canon', 3, '0', '0', 0, 0, 0, 1500, '', ''),
(38, 'pawan2', 'tea2', 33, 'tea2', '3', 33, 2222, 0, 0, '', ''),
(39, 'pawan2', 'bags', 2, '0', '0', 0, 0, 0, 1200, '', ''),
(40, 'pawan2', 'canon', 3, '0', '0', 0, 0, 0, 1500, '', ''),
(41, 'pawan2', 'tea2', 33, 'tea2', '3', 33, 2222, 0, 0, '', ''),
(42, 'pawan2', 'bags', 2, '0', '0', 0, 0, 0, 1200, '', ''),
(43, 'pawan2', 'canon', 3, '0', '0', 0, 0, 0, 1500, '', ''),
(44, 'pawan2', 'tea2', 33, 'tea2', '3', 33, 2222, 2, 0, '', ''),
(45, 'pawan2', 'bags', 2, '0', '0', 0, 0, 0, 1200, '', ''),
(46, 'pawan2', 'canon', 3, '0', '0', 0, 0, 0, 1500, '', ''),
(47, 'pawan2', 'tea2', 33, 'tea2', '3', 33, 2222, 1500, 0, '', ''),
(48, 'pawan2', 'Electronic', 2, '0', '0', 0, 0, 0, 800, '', ''),
(49, 'pawan2', 't', 3, 't', '3', 3, 333, 800, 0, '', ''),
(50, 'pawan2', 'bags', 1, '0', '0', 0, 0, 0, 100, '', ''),
(51, 'pawan2', 'canon', 0, '0', '0', 0, 0, 0, 0, '', ''),
(52, 'pawan2', 'tl', 3, 'tl', '2', 3, 20, 0, 60, '', ''),
(53, 'pawan2', 'bags', 1, '0', '0', 0, 0, 0, 100, '', ''),
(54, 'pawan2', 'canon', 0, '0', '0', 0, 0, 0, 0, '', ''),
(55, 'pawan2', 'tl', 3, 'tl', '2', 3, 20, 0, 60, '', ''),
(56, 'pawan2', 'bags', 1, '0', '0', 0, 0, 0, 1000, '', ''),
(57, 'pawan2', 'canon', 0, '0', '0', 0, 0, 0, 2500, '', ''),
(58, 'pawan2', 'tl', 3, 'tl', '2', 3, 20, 0, 60, '', ''),
(59, 'pawan2', 'bags', 1, '0', '0', 0, 0, 0, 0, '', ''),
(60, 'pawan2', 'canon', 0, '0', '0', 0, 0, 0, 0, '', ''),
(61, 'pawan2', 'tl', 3, 'tl', '2', 3, 20, 0, 60, '', ''),
(62, 'pawan2', 'bags', 1, '0', '0', 0, 0, 0, 0, '', ''),
(63, 'pawan2', 'canon', 0, '0', '0', 0, 0, 0, 0, '', ''),
(64, 'pawan2', 'tl', 3, 'tl', '2', 3, 20, 0, 60, '', ''),
(65, 'pawan2', 'bags', 1, '0', '0', 0, 0, 0, 0, '', ''),
(66, 'pawan2', 'canon', 0, '0', '0', 0, 0, 0, 0, '', ''),
(67, 'pawan2', 'tl', 3, 'tl', '2', 3, 20, 0, 60, '', ''),
(68, 'pawan2', 'bags', 1, '0', '0', 0, 0, 0, 100, '', ''),
(69, 'pawan2', 'canon', 0, '0', '0', 0, 0, 0, 0, '', ''),
(70, 'pawan2', 'tl', 3, 'tl', '2', 3, 20, 0, 60, '', ''),
(71, 'pawan2', 'bags', 1, '0', '0', 0, 0, 0, 100, '', ''),
(72, 'pawan2', 'canon', 0, '0', '0', 0, 0, 0, 0, '', ''),
(73, 'pawan2', 'tl', 3, 'tl', '2', 3, 20, 0, 60, '', ''),
(74, 'pawan2', 'bags', 1, '0', '0', 0, 0, 0, 100, '', ''),
(75, 'pawan2', 'canon', 0, '0', '0', 0, 0, 0, 0, '', ''),
(76, 'pawan2', 'tl', 3, 'tl', '2', 3, 20, 0, 60, '', ''),
(77, 'pawan2', 'bags', 1, '0', '0', 0, 0, 0, 100, '', ''),
(78, 'pawan2', 'canon', 0, '0', '0', 0, 0, 0, 0, '', ''),
(79, 'pawan2', 'tl', 3, 'tl', '2', 3, 20, 0, 60, '', ''),
(80, 'pawan2', 'bags', 1, '0', '0', 0, 0, 0, 100, '', ''),
(81, 'pawan2', 'canon', 0, '0', '0', 0, 0, 0, 0, '', ''),
(82, 'pawan2', 'tl', 3, 'tl', '2', 3, 20, 0, 60, '', ''),
(83, 'pawan2', 'bags', 1, '0', '0', 0, 0, 0, 100, '', ''),
(84, 'pawan2', 'canon', 0, '0', '0', 0, 0, 0, 0, '', ''),
(85, 'pawan2', 'tl', 3, 'tl', '2', 3, 20, 0, 60, '', ''),
(86, 'pawan2', 'bags', 1, '0', '0', 0, 0, 0, 100, '', ''),
(87, 'pawan2', 's', 22, 's', '3', 22, 22, 0, 484, '', ''),
(88, 'karan', 'product1', 1, '0', '0', 0, 0, 0, 100, '', ''),
(89, 'karan', 'product 2', 3, 'product 2', '5', 3, 100, 0, 300, '', ''),
(90, 'karan', 'product1', 1, '0', '0', 0, 0, 0, 100, '', ''),
(91, 'karan', '', 0, '', '', 0, 0, 0, 0, '', ''),
(92, 'karan', 'product1', 1, '0', '0', 0, 0, 0, 100, '', ''),
(93, 'karan', '', 0, '', '', 0, 0, 0, 0, '', ''),
(94, 'karan', 'product1', 5, '0', '0', 0, 0, 0, 100, '', ''),
(95, 'karan', '', 0, '', '', 0, 0, 0, 0, '', ''),
(96, 'karan', 'product1', 3, '0', '0', 0, 0, 0, 100, '', ''),
(97, 'karan', 'bags', 2, '0', '0', 0, 0, 0, 0, '', ''),
(98, 'karan', 'asd', 2, 'asd', '2', 2, 200, 0, 400, '', ''),
(99, 'karan', 'product1', 3, '0', '0', 0, 0, 0, 100, '', ''),
(100, 'karan', 'a', 2, 'a', '2', 2, 200, 0, 400, '', ''),
(101, 'karan', 'product1', 3, '0', '0', 0, 0, 0, 300, '', ''),
(102, 'karan', 'a', 2, 'a', '2', 2, 200, 0, 400, '', ''),
(103, 'karan', 'product1', 3, '0', '0', 0, 0, 0, 300, '', ''),
(104, 'karan', 'dd2', 3, 'dd2', '2', 3, 100, 0, 300, '', ''),
(105, 'last', 'product1', 3, '0', '0', 0, 0, 0, 300, '', ''),
(106, 'last', 'n', 3, 'n', '2', 3, 300, 0, 900, '', ''),
(107, 'pawan2', 'Electronic', 2, '0', '0', 0, 0, 0, 2667, '', ''),
(108, 'pawan2', 'bags', 7, '0', '0', 0, 0, 0, 700, '', ''),
(109, 'pawan2', 'steel', 4, 'steel', 'kg', 4, 0, 0, 0, '', ''),
(110, 'pawan2', 'Electronic', 3, '0', '0', 0, 0, 0, 4000, '', ''),
(111, 'pawan2', 'watch', 5, '0', '0', 0, 0, 0, 500, '', ''),
(112, 'pawan2', 'steel', 2, 'steel', '2', 2, 0, 0, 0, '', ''),
(113, 'pawan2', 'Electronic', 3, '0', '0', 0, 0, 0, 4000, '', ''),
(114, 'pawan2', 'watch', 78, '0', '0', 0, 0, 0, 7800, '', ''),
(115, 'pawan2', 'steel', 4, 'steel', 'ktr', 4, 0, 0, 0, '', ''),
(116, 'kmc', 'e', 2, '0', '0', 0, 0, 0, 200, '', ''),
(117, 'kmc', 'bags', 4, '0', '0', 0, 0, 0, 400, '', ''),
(118, 'kmc', 'uy', 6, 'uy', 'y', 6, 566, 0, 3396, '', ''),
(119, 'stadium', 'steel', 3, '0', '0', 0, 0, 0, 1200, '', ''),
(120, 'stadium', 'tea', 2, 'tea', 'lt4', 2, 300, 0, 600, '', ''),
(121, 'kmc', 'spon', 50, '0', '0', 0, 0, 0, 2500, '', ''),
(122, 'kmc', 'uiui', 89, 'uiui', 'uuiu', 89, 98, 0, 0, '', ''),
(123, 'kmc', 'spon', 7888, '0', '0', 0, 0, 0, 394400, '', ''),
(124, 'kmc', '78', 78, '78', '878', 78, 787, 0, 0, '', ''),
(125, 'kmc', 'spon', 200, '0', '0', 0, 0, 0, 10000, '', ''),
(126, 'kmc', 'h', 2, '0', '0', 0, 0, 0, 400, '', ''),
(127, 'kmc', '7', 78, '7', '878', 78, 8, 0, 0, '', ''),
(128, 'kmc', 'spon', 200, '0', '0', 0, 0, 0, 10000, '', ''),
(129, 'kmc', '', 0, '', '', 0, 0, 0, 0, '', ''),
(130, 'kmc', 'bags', 200, '0', '0', 0, 0, 0, 20000, '', ''),
(131, 'kmc', '', 0, '', '', 0, 0, 0, 0, '', ''),
(132, 'kmc', 'spon', 200, '0', '0', 0, 0, 0, 10000, '', ''),
(133, 'kmc', '787', 87, '787', '87', 87, 878, 0, 76386, '', ''),
(134, 'kmc', 'qqq', 44343, '0', '0', 0, 0, 0, 2926638, '', ''),
(135, 'kmc', 'e', 3434, '0', '0', 0, 0, 0, 343400, '', ''),
(136, 'kmc', '4343', 43, '4343', '4343', 43, 334, 0, 14362, '', ''),
(137, 'kmc', '34', 43, '34', '43', 43, 43, 0, 1849, '', ''),
(138, 'kmc', 'Electronic', 43, '0', '0', 0, 0, 0, 57333, '', ''),
(139, 'kmc', '43', 34, '43', '43', 34, 43, 0, 1462, '', ''),
(140, 'bilal', 'Electronic', 5, '0', '0', 0, 0, 0, -1081, '', ''),
(141, 'bilal', '', 0, '', '', 0, 0, 0, 0, '', ''),
(142, 'kmc', 'billal', 5, '0', '0', 0, 0, 0, 2500, '', ''),
(143, 'kmc', '787', 7878, '787', '78', 7878, 7, 0, 55146, '', ''),
(144, 'bilal', 'Electronic', 5, '0', '0', 0, 0, 0, -952, '', ''),
(145, 'bilal', 'fdsfds', 445, 'fdsfds', '43f4', 445, 4554, 0, 2026530, '', ''),
(146, 'bilal', 'billal', 1, '0', '0', 0, 0, 0, 1000, '', ''),
(147, 'bilal', '76', 767, '76', '76', 767, 676, 0, 518492, '', ''),
(148, 'kmc', 'billal', 2, '0', '0', 0, 0, 0, 2500, '', ''),
(149, 'kmc', '', 0, '', '', 0, 0, 0, 0, '', ''),
(150, 'Asim', 'watch', 2, '0', '0', 0, 0, 0, 200, '', ''),
(151, 'Asim', 'tea', 22, 'tea', 'ltr', 22, 2000, 0, 44000, '', ''),
(152, 'geo_tv', 'billal', 6, '0', '0', 0, 0, 0, 15000, '', ''),
(153, 'geo_tv', 'chai', 8, 'chai', '67', 8, 2000, 0, 16000, '', ''),
(154, 'geo_tv', 'billal', 2, '0', '0', 0, 0, 0, -2500, '', ''),
(155, 'geo_tv', 'billal', 2, '0', '0', 0, 0, 0, -1667, '', ''),
(156, 'geo_tv', 'yu', 7, 'yu', '78', 7, 300, 0, 2100, '', ''),
(157, 'Asim', 'e', 0, '0', '0', 0, 0, 0, 0, '', ''),
(158, 'Asim', '', 0, '', '', 0, 0, 0, 0, '', ''),
(159, 'Asim', 'billal', 89, '0', '0', 0, 0, 0, -55625, '', ''),
(160, 'Asim', '', 0, '', '', 0, 0, 0, 0, '', ''),
(161, 'Asim', 'billal', 89, '0', '0', 0, 0, 0, -55625, '', ''),
(162, 'Asim', 'steel', 78, '0', '0', 0, 0, 0, 31200, '', ''),
(163, 'Asim', '89', 98, '89', '898', 98, 9, 0, 882, '', ''),
(164, 'Asim', 'billal', 89, 'uju', 'tt', 0, 0, 0, -55625, '', ''),
(165, 'Asim', 'steel', 78, '0', '0', 0, 0, 0, 31200, '', ''),
(166, 'Asim', '89', 98, '89', '898', 98, 9, 0, 882, '', ''),
(167, 'Crash', 'bags', 10, '0', '0', 0, 0, 0, -53, '', ''),
(168, 'Crash', 'billal', 20, '0', '0', 0, 0, 0, -1031, '', ''),
(169, 'Crash', 'spon', 30, '0', '0', 0, 0, 0, 0, '', ''),
(170, 'Crash', 'Rent truck', 20, 'Rent truck', 'Each', 20, 2000, 0, 40000, '', ''),
(186, 'majid', 'Cement', 2, '0', '0', 0, 0, 0, 8, '2018-04-17', ''),
(187, 'majid', 'spon', 34, '0', '0', 0, 0, 0, -10625, '2018-04-17', ''),
(188, 'majid', '78', 87, '78', '77', 87, 87, 0, 7569, '2018-04-17', ''),
(189, 'GoreMar', 'steel', 1000, '0', '0', 0, 0, 0, -20779, '2018-04-26', ''),
(190, 'GoreMar', 'spon', 1, '0', '0', 0, 0, 0, -152, '2018-04-26', ''),
(191, 'kamrankhN', 'bags', 20, '0', '0', 0, 0, 0, -100, '2018-04-27', ''),
(192, 'rr', '898989', 9898, '898989', '8998', 9898, 98, 0, 970004, '2018-04-29', ''),
(193, 'qq', '77', 7, '77', '777', 7, 777, 0, 5439, '2018-04-29', ''),
(194, 'cc', '6', 666, '6', '66', 666, 6666, 0, 4439556, '2018-04-29', ''),
(195, 'tay', '0', 0, 'yu', 'yu', 89, 89, 0, 7921, '2018-04-29', ''),
(196, 'tay', 'Cement', 2, '0', '0', 0, 0, 0, 8, '2018-04-29', ''),
(197, 'tay', 'spon', 2, '0', '0', 0, 0, 0, -299, '2018-04-29', ''),
(198, 'tay', 'billal', 3, '0', '0', 0, 0, 0, -128, '2018-04-29', ''),
(199, 'gg', 'Cement', 2, '0', '0', 0, 0, 0, 8, '2018-04-29', ''),
(200, 'gg', '78', 787, '78', '78', 787, 78, 0, 61386, '2018-04-29', ''),
(201, 'gg', '0', 0, '90', '90', 90, 9, 0, 810, '2018-04-29', ''),
(202, 'gg', 'billal', 8, '0', '0', 0, 0, 0, -333, '2018-04-29', ''),
(203, 'gg', '1', 87, '1', '7', 87, 87, 0, 7569, '2018-04-29', ''),
(204, 'no', 'billal', 89, '0', '0', 0, 0, 0, -3477, '2018-04-29', ''),
(205, 'no', 'Cement', 2, '0', '0', 0, 0, 0, 8, '2018-04-29', ''),
(206, 'no', '78', 7, '78', '78', 7, 878, 0, 6146, '2018-04-29', ''),
(207, 'yuuu', 'bags', 2, 't78', '78', 78, 78, 0, -9, '2018-04-29', ''),
(208, 'yuuu', 'steel', 2, '', '', 0, 0, 0, -3, '2018-04-29', ''),
(209, 'yuuu', 'Electronic', 2, 'ty5', '7', 77, 777, 0, -314, '2018-04-29', ''),
(210, 'yuuu', 'bags', 3, '', '', 0, 0, 0, -14, '2018-04-29', ''),
(211, 'yuuu', 'Electronic', 2, 'ty5', '7', 77, 777, 0, -302, '2018-04-29', ''),
(212, 'yuuu', 'bags', 3, '', '', 0, 0, 0, -13, '2018-04-29', ''),
(213, 'yuuu', 'billal', 2, 'yu7', '88', 4, 0, 0, -46, '2018-04-29', ''),
(214, 'yuuu', 'spon', 5, '', '', 0, 0, 0, -725, '2018-04-29', ''),
(215, 'yuuu', 'billal', 5, '788', '78', 787, 0, 0, -114, '2018-04-29', ''),
(216, 'yuuu', 'a', 3, '', '', 0, 0, 0, 9, '2018-04-29', ''),
(217, 'zz', 'steel', 2, 'ty1', '8', 9, 9, 0, -3, '2018-04-29', ''),
(218, 'zz', 'bags', 4, '', '', 0, 0, 0, -18, '2018-04-29', ''),
(219, 'qwe', 'Cement', 100, '0', '0', 0, 0, 0, 423, '2018-04-29', ''),
(220, 'qwe', 'steel', 100, '0', '0', 0, 0, 0, -148, '2018-04-29', ''),
(230, 'qwe', 'Cement', 300, '67', '676', 6767, 77, 521059, 1200, '2018-04-29', ''),
(231, 'majid', 'eyes', 1, '78t', '787', 878, 78, 68484, 400, '2018-04-29', ''),
(232, 'majid', 'aw', 1, '', '', 0, 0, 0, 200, '2018-04-29', ''),
(233, 'majid', '0', 0, 'Laburs', 'each', 10, 250, 2500, 0, '2018-04-30', ''),
(234, 'qwe', 'Boloks', 200, '0', '0', 0, 0, 0, 16000, '2018-04-30', ''),
(235, 'Gor-e-Mar-Canal', '0', 0, 'Cement', 'Bags', 100, 350, 35000, 0, '2018-05-06', ''),
(236, 'Gor-e-Mar-Canal', '0', 0, 'Water Stopper', 'Rolles', 5, 3600, 18000, 0, '2018-05-06', ''),
(237, 'Biadak-Canal', '0', 0, 'Cement', 'Bags', 200, 350, 70000, 0, '2018-05-06', ''),
(238, 'Biadak-Canal', '0', 0, 'Stone', 'M3', 1000, 600, 600000, 0, '2018-05-06', ''),
(241, 'khalii', 'eyes', 1, 'yu', 'yuyuy', 56, 6666, 373296, 400, '2018-05-27', ''),
(242, 'khalii', '0', 0, 'ioioiioi', 'ioio', 89, 999, 88911, 0, '', '2018-05-28'),
(243, 'khalii', 'aw', 676, '78', '8787', 78, 87887, 6855186, 135200, '2018-05-13', '2018-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_pro`
--

CREATE TABLE `purchase_pro` (
  `id` int(11) NOT NULL,
  `pro_name` varchar(20) NOT NULL,
  `ven_name` varchar(20) NOT NULL,
  `quantity` int(20) NOT NULL,
  `price` int(20) NOT NULL,
  `cash` int(20) NOT NULL,
  `due` int(20) NOT NULL,
  `one_pcs_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_pro`
--

INSERT INTO `purchase_pro` (`id`, `pro_name`, `ven_name`, `quantity`, `price`, `cash`, `due`, `one_pcs_price`) VALUES
(1, 'Electronic', 'general', -55, 8000, 8000, 88, '400'),
(6, 'bags', 'shabeer', -232, 1000, 904, 96, '600'),
(7, 'e', 'shabeer', -3429, 500, 100, 400, '900'),
(9, 'canon', 'jij', 5, 2500, 2000, 500, '500'),
(10, 'watch', 'shabeer', 8, 1000, 5500, -5400, '100'),
(11, 'watch', 'shabeer', 8, 100, 50, 50, '10'),
(12, 'product1', 'shabeer', 10, 1000, 500, 500, '100'),
(13, 'h', 'jij', 4, 800, 400, 400, '200'),
(14, 'steel', 'jij', -2785, 1600, 800, 800, '400'),
(15, 'h', 'jij', 34, 147543436, 44, -44434, '4339512.82353'),
(16, 'a', '787', -1, 6, 11, -5, '3'),
(17, 'a', '787', -1, 6, 11, -5, '3'),
(18, 'qqq', 'jij', -44265, 5148, 50, 5098, '66'),
(19, 'spon', 'jij', -74, 10000, 5000, 5000, '50'),
(20, 'billal', 'jij', -224, 5000, 100, 4900, '500'),
(21, 'billal', 'jij', -225, 756, 2525, -179, '252'),
(22, 'Cement', 'shabeer', 284, 8000, 0, 8000, '4'),
(23, 'eyes', 'ahmed', 0, 800, 200, 600, '400'),
(24, 'aw', 'jij', -676, 600, 600, 0, '200'),
(25, 'Boloks', 'ahmed', 2800, 240000, 0, 240000, '80');

-- --------------------------------------------------------

--
-- Table structure for table `rate_changing`
--

CREATE TABLE `rate_changing` (
  `Company_Code` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rate_changing`
--

INSERT INTO `rate_changing` (`Company_Code`) VALUES
(1234),
(1),
(125535),
(134);

-- --------------------------------------------------------

--
-- Table structure for table `reminder`
--

CREATE TABLE `reminder` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `cnic` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_on` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reminder`
--

INSERT INTO `reminder` (`id`, `email`, `c_name`, `cnic`, `subject`, `message`, `created_on`) VALUES
(4, '78@g.vom', 'majid', '676', '78', 'hy', '18-03-31');

-- --------------------------------------------------------

--
-- Table structure for table `requisition_to`
--

CREATE TABLE `requisition_to` (
  `id` int(11) NOT NULL,
  `requ` varchar(20) NOT NULL,
  `note` varchar(28) NOT NULL,
  `date` varchar(255) NOT NULL,
  `description` varchar(29) NOT NULL,
  `Mas_ty` varchar(20) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `balance` int(20) NOT NULL,
  `qty` int(20) NOT NULL,
  `cost_c` int(20) NOT NULL,
  `remarks` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requisition_to`
--

INSERT INTO `requisition_to` (`id`, `requ`, `note`, `date`, `description`, `Mas_ty`, `unit`, `balance`, `qty`, `cost_c`, `remarks`) VALUES
(1, 'RR', 'RR', '2018-03-09', 'E', 'EE', 'EE', 3, 2, 1, 'FFF'),
(2, 'ht', 'ht', '2018-03-03', '', '', '', 0, 0, 0, ''),
(3, '34', '22', '2018-03-03', '2', '22', '23', 21, 234, 0, 'ee'),
(4, 'weQW', 'QW', '2018-03-03', 'e', 'ed', '12', 21, 34, 0, 'rf'),
(5, 'weQW', 'QW', '2018-03-03', 'we', 'ed', '12', 21, 34, 0, 'rf'),
(6, 'asim', 'qnikal', '2018-03-09', 'we', 'r', '21', 12, 13, 0, 'e'),
(7, 'asim', 'qnikal', '2018-03-09', 'me', 'r', '21', 12, 13, 0, 'e'),
(8, 'e', 'w', '2018-03-10', 'we', '', '', 0, 0, 0, ''),
(9, 'e', 'w', '2018-03-10', 'me', '', '', 0, 0, 0, ''),
(10, 'uiu', 'iuiu', '2018-04-05', '787', '877878', '78', 78, 78, 78, '78'),
(11, '87', '87', '2018-04-11', '78', '78', '78', 78, 78, 78, '787'),
(12, '001', 'Nazir Khairullah', '2018-04-08', 'Cement', '100', 'Bags', 0, 100, 340, '');

-- --------------------------------------------------------

--
-- Table structure for table `reversal_recipt`
--

CREATE TABLE `reversal_recipt` (
  `id` int(11) NOT NULL,
  `customer_id` int(20) NOT NULL,
  `company_id` int(20) NOT NULL,
  `c_amount` int(20) NOT NULL,
  `d_amount` int(20) NOT NULL,
  `note` varchar(20) NOT NULL,
  `date_r` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reversal_recipt`
--

INSERT INTO `reversal_recipt` (`id`, `customer_id`, `company_id`, `c_amount`, `d_amount`, `note`, `date_r`) VALUES
(1, 3, 8, 3, 67, 'abe', '2018-03-11');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) UNSIGNED NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `price` double(25,2) NOT NULL,
  `date` date NOT NULL,
  `p_name` varchar(500) NOT NULL,
  `bno` int(11) NOT NULL,
  `cust` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `product_id`, `qty`, `price`, `date`, `p_name`, `bno`, `cust`) VALUES
(1, 10, 2, 10.00, '2017-09-11', '', 1, 'uzair'),
(3, 10, 2, 3.00, '2017-09-11', '', 2, 'uzair'),
(4, 11, 2, 222.00, '2017-09-11', '', 3, ''),
(5, 12, 4, 22.00, '2017-09-11', '', 3, ''),
(6, 10, 2, 3.00, '2018-02-20', '', 4, ''),
(7, 18, 50, 2.00, '2018-02-20', '', 5, ''),
(8, 10, 6, 3.00, '2018-02-20', '', 6, 'Asim'),
(9, 18, 6, 2.00, '2018-02-20', '', 6, 'Asim'),
(10, 19, 56, 300.00, '2018-02-20', '', 6, 'Asim'),
(11, 10, 6, 3.00, '2018-02-20', '', 7, 'Asim'),
(12, 18, 6, 2.00, '2018-02-20', '', 7, 'Asim'),
(13, 19, 5, 300.00, '2018-02-20', '', 7, 'Asim'),
(14, 10, 20, 3.00, '2018-02-20', '', 8, ''),
(15, 19, 20, 300.00, '2018-02-20', '', 8, ''),
(16, 18, 2, 2.00, '2018-02-20', '', 9, ''),
(18, 18, 0, 2.00, '2018-02-20', '', 10, '');

-- --------------------------------------------------------

--
-- Table structure for table `sales_man`
--

CREATE TABLE `sales_man` (
  `Booker_Code` int(15) NOT NULL,
  `Booker_Name` varchar(20) NOT NULL,
  `Booker_Address` varchar(25) NOT NULL,
  `Phone` int(12) NOT NULL,
  `Mobile_no` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_man`
--

INSERT INTO `sales_man` (`Booker_Code`, `Booker_Name`, `Booker_Address`, `Phone`, `Mobile_no`) VALUES
(123, 'ABC', 'XYZ', 21, 3333),
(12341, 'ABC', 'XYZ', 21, 345);

-- --------------------------------------------------------

--
-- Table structure for table `supllier_reg`
--

CREATE TABLE `supllier_reg` (
  `Supplier_Code` int(15) NOT NULL,
  `Supplier_Name` varchar(20) NOT NULL,
  `Supplier_Address` varchar(25) NOT NULL,
  `Phone_1` int(12) NOT NULL,
  `Phone_2` int(12) NOT NULL,
  `Fax` int(15) NOT NULL,
  `Area_Code` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supllier_reg`
--

INSERT INTO `supllier_reg` (`Supplier_Code`, `Supplier_Name`, `Supplier_Address`, `Phone_1`, `Phone_2`, `Fax`, `Area_Code`) VALUES
(123, 'ABC', 'XYZ', 21, 213, 1234, 232323),
(121115, 'ABC', 'XYZ', 21, 213, 123, 77676);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `name`, `location`) VALUES
(1, 'muneeb', 'arachi'),
(2, 'asim ghalib', 'drigh road'),
(3, 'ghalib', 'sk'),
(4, 'da', 'asas'),
(5, 'esd', 'assa'),
(6, 'sa', 'karachi'),
(7, 'qqwda', 'asaas'),
(8, 'asim munna', 'munna ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orderdetail`
--

CREATE TABLE `tbl_orderdetail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `quantity` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  `discount` int(11) NOT NULL,
  `amount` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_orderdetail`
--

INSERT INTO `tbl_orderdetail` (`id`, `order_id`, `product_name`, `quantity`, `price`, `discount`, `amount`) VALUES
(1, 1, 'nokia', '3', '200', 10, '2000'),
(2, 7, 'asasd', '5', '5', 5, '555'),
(3, 7, 'sadas', '555', '55', 555, '55'),
(4, 7, 'sasdas', '55', '55', 2, '33'),
(5, 7, 'saasdasas', '2', '222', 2205, '0505');

-- --------------------------------------------------------

--
-- Table structure for table `temp_sale`
--

CREATE TABLE `temp_sale` (
  `id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `name` varchar(2000) NOT NULL,
  `pack_size` varchar(30) NOT NULL,
  `batch_no` varchar(23) NOT NULL,
  `pric` double NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `temp_sales`
--

CREATE TABLE `temp_sales` (
  `id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `name` varchar(2000) NOT NULL,
  `pric` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(60) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_level` int(11) NOT NULL,
  `image` varchar(255) DEFAULT 'no_image.jpg',
  `status` int(1) NOT NULL,
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `user_level`, `image`, `status`, `last_login`) VALUES
(1, 'admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 'no_image.jpg', 1, '2018-08-08 18:05:36'),
(2, 'employee', 'employee', 'caf322f0bbed721eac4a36bf7aff1103079faf25', 2, 'no_image.jpg', 1, '2018-03-09 15:07:17'),
(3, 'Bank', 'Bank', 'bdd240c8fe7174e6ac1cfdd5282de76eb7ad6815', 3, 'no_image.jpg', 1, '2018-03-10 07:00:23'),
(4, 'Expense', 'Expense', '3a85e310858fac24740203d4b8282ad28b2b2ac2', 4, 'no_image.jpg', 1, '2018-03-09 15:05:48'),
(5, 'master_manu', 'master_manu', 'bdd240c8fe7174e6ac1cfdd5282de76eb7ad6815', 5, 'no_image.jpg', 1, '2018-03-07 22:24:31'),
(6, 'customer_master_file', 'customer_master_file', 'bdd240c8fe7174e6ac1cfdd5282de76eb7ad6815', 6, 'no_image.jpg', 1, '2018-03-07 21:50:40'),
(7, 'product_file', 'product_file', 'bdd240c8fe7174e6ac1cfdd5282de76eb7ad6815', 7, 'no_image.jpg', 1, '2018-03-07 22:26:14'),
(15, 'Admin', 'asimghalib', 'asim123', 1, 'no_image.jpg', 0, NULL),
(16, 'Admin', 'muneeb', '8d0c5d66fa718d58a621e3b662b2f6f790b5ddc6', 1, 'no_image.jpg', 0, '2018-03-19 11:03:16'),
(17, 'inventory', 'inventory', 'ec99b813fa064f7f7cfa1d35bc7cc3d743c61fd1', 2, 'no_image.jpg', 0, '2018-04-30 13:00:33'),
(18, 'crm', 'crm', 'c4f6a5444066327700c027e2f30f63e6290e17df', 3, 'no_image.jpg', 0, '2018-04-01 20:55:52'),
(19, 'account', 'account', 'ca20728d35f00c3a4c21b1fc8b0086b59f89df2d', 4, 'no_image.jpg', 0, '2018-04-01 20:58:27'),
(20, 'project', 'project', '98f54143ab4e86b28c3afee0f50f2f51cfb2ed38', 5, 'no_image.jpg', 0, '2018-05-17 07:58:11'),
(21, 'procurment', 'procurment', '64215f4678cdccebf5c4a40b95a7ab707ba4a0c2', 6, 'no_image.jpg', 0, '2018-04-01 21:06:26'),
(22, 'hrm', 'hrm', '19e67b50c86f6a23cdd3a9a24740a3e11d3a522b', 7, 'no_image.jpg', 0, '2018-04-01 21:10:29'),
(23, 'csac', 'csac', 'c4cc45c77be4d88c6b0d8e528ca211d84b04b591', 2, 'no_image.jpg', 0, NULL),
(24, 'gfdf', 'gfdf', '295f153b4f84becd6fc870a3f679fdb8f39d01fe', 3, 'no_image.jpg', 0, NULL),
(25, 'qqqqq', 'qqqqq', 'fa6977c99b809db68e1c56888ec38bd004719b39', 4, 'no_image.jpg', 0, NULL),
(27, 'sub', 'sub', '5d85613a56c124e3a3ff8ce6fc95d10cdcb5001e', 8, 'no_image.jpg', 0, '2018-04-30 12:56:41'),
(28, 'sattar2', 'sattar1', '0ad6935fd59f723d446b53e7941ecc4e1d7df487', 8, 'no_image.jpg', 0, '2018-04-30 10:13:45'),
(29, 'majid', 'majid', '3ad2c9c1bfbe4ae78a2288093549afc428fcd0d4', 1, 'no_image.jpg', 0, '2018-05-28 15:33:58');

-- --------------------------------------------------------

--
-- Table structure for table `user_groups`
--

CREATE TABLE `user_groups` (
  `id` int(11) NOT NULL,
  `group_name` varchar(150) NOT NULL,
  `group_level` int(11) NOT NULL,
  `group_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_groups`
--

INSERT INTO `user_groups` (`id`, `group_name`, `group_level`, `group_status`) VALUES
(1, 'Admin', 1, 1),
(2, 'inventroy', 2, 1),
(3, 'crm', 3, 1),
(4, 'account', 4, 1),
(5, 'project', 5, 1),
(6, 'procurment', 6, 1),
(7, 'hrm', 7, 1),
(8, 'subscribers', 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `voucher_transaction`
--

CREATE TABLE `voucher_transaction` (
  `voucher_id` int(3) NOT NULL,
  `voucher_type` int(10) NOT NULL,
  `voucher_mode` int(10) NOT NULL,
  `voucher_cat` int(10) NOT NULL,
  `ven_cus_id` int(10) NOT NULL,
  `amount` int(15) NOT NULL,
  `remarks` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voucher_transaction`
--

INSERT INTO `voucher_transaction` (`voucher_id`, `voucher_type`, `voucher_mode`, `voucher_cat`, `ven_cus_id`, `amount`, `remarks`) VALUES
(1, 0, 0, 0, 0, 2000, 'not for sale'),
(2, 1, 1, 2, 11, 60606, 'ass'),
(3, 1, 1, 1, 2, 22, 'ew'),
(4, 1, 1, 1, 2, 200, 'hh'),
(5, 1, 1, 2, 7, 9090, 'wd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `7_addproj1`
--
ALTER TABLE `7_addproj1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `7_newpayroll`
--
ALTER TABLE `7_newpayroll`
  ADD PRIMARY KEY (`payroll_id`);

--
-- Indexes for table `7_vendoraccount`
--
ALTER TABLE `7_vendoraccount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addaccount`
--
ALTER TABLE `addaccount`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `addbank`
--
ALTER TABLE `addbank`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `add_cashamount`
--
ALTER TABLE `add_cashamount`
  ADD PRIMARY KEY (`amount_id`);

--
-- Indexes for table `add_chequeamount`
--
ALTER TABLE `add_chequeamount`
  ADD PRIMARY KEY (`amount_id`);

--
-- Indexes for table `add_employee`
--
ALTER TABLE `add_employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `add_employee1`
--
ALTER TABLE `add_employee1`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `add_flat_shop`
--
ALTER TABLE `add_flat_shop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advance_paymt`
--
ALTER TABLE `advance_paymt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank_pymt_voucher`
--
ALTER TABLE `bank_pymt_voucher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `cah_pay_voucher`
--
ALTER TABLE `cah_pay_voucher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `cheque_in_hand`
--
ALTER TABLE `cheque_in_hand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city_reg`
--
ALTER TABLE `city_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cm_addcheque`
--
ALTER TABLE `cm_addcheque`
  ADD PRIMARY KEY (`cheque_id`);

--
-- Indexes for table `complete_pro`
--
ALTER TABLE `complete_pro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contractor`
--
ALTER TABLE `contractor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_reg`
--
ALTER TABLE `customer_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`exp_id`);

--
-- Indexes for table `finish_goods`
--
ALTER TABLE `finish_goods`
  ADD PRIMARY KEY (`trans_no`);

--
-- Indexes for table `genrate_salary`
--
ALTER TABLE `genrate_salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_no`);

--
-- Indexes for table `invoice_return`
--
ALTER TABLE `invoice_return`
  ADD PRIMARY KEY (`invoice_ret_id`),
  ADD UNIQUE KEY `invoice_ret_id` (`invoice_ret_id`),
  ADD UNIQUE KEY `invoice_ret_id_2` (`invoice_ret_id`),
  ADD UNIQUE KEY `invoice_ret_id_3` (`invoice_ret_id`),
  ADD UNIQUE KEY `invoice_ret_id_4` (`invoice_ret_id`),
  ADD UNIQUE KEY `invoice_ret_id_5` (`invoice_ret_id`);

--
-- Indexes for table `issuedby`
--
ALTER TABLE `issuedby`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `item_formula`
--
ALTER TABLE `item_formula`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_reg`
--
ALTER TABLE `item_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `journal_vocher`
--
ALTER TABLE `journal_vocher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lc_details`
--
ALTER TABLE `lc_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lc_transaction`
--
ALTER TABLE `lc_transaction`
  ADD PRIMARY KEY (`trans_no`);

--
-- Indexes for table `loanamount`
--
ALTER TABLE `loanamount`
  ADD PRIMARY KEY (`loan_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medi`
--
ALTER TABLE `medi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `newitem_reg`
--
ALTER TABLE `newitem_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newvendor_reg`
--
ALTER TABLE `newvendor_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_company_reg`
--
ALTER TABLE `new_company_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_customer_reg`
--
ALTER TABLE `new_customer_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_recpt_form`
--
ALTER TABLE `new_recpt_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_salesman`
--
ALTER TABLE `new_salesman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `categorie_id` (`categorie_id`),
  ADD KEY `media_id` (`media_id`);

--
-- Indexes for table `production_file`
--
ALTER TABLE `production_file`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `categorie_id` (`categorie_id`),
  ADD KEY `media_id` (`media_id`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pro_project`
--
ALTER TABLE `pro_project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_pro`
--
ALTER TABLE `purchase_pro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reminder`
--
ALTER TABLE `reminder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requisition_to`
--
ALTER TABLE `requisition_to`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reversal_recipt`
--
ALTER TABLE `reversal_recipt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_orderdetail`
--
ALTER TABLE `tbl_orderdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_sale`
--
ALTER TABLE `temp_sale`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_sales`
--
ALTER TABLE `temp_sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_level` (`user_level`);

--
-- Indexes for table `user_groups`
--
ALTER TABLE `user_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `group_level` (`group_level`);

--
-- Indexes for table `voucher_transaction`
--
ALTER TABLE `voucher_transaction`
  ADD PRIMARY KEY (`voucher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `7_addproj1`
--
ALTER TABLE `7_addproj1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `7_newpayroll`
--
ALTER TABLE `7_newpayroll`
  MODIFY `payroll_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `7_vendoraccount`
--
ALTER TABLE `7_vendoraccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `addaccount`
--
ALTER TABLE `addaccount`
  MODIFY `account_id` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `addbank`
--
ALTER TABLE `addbank`
  MODIFY `bank_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `add_cashamount`
--
ALTER TABLE `add_cashamount`
  MODIFY `amount_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `add_chequeamount`
--
ALTER TABLE `add_chequeamount`
  MODIFY `amount_id` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `add_employee`
--
ALTER TABLE `add_employee`
  MODIFY `emp_id` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `add_employee1`
--
ALTER TABLE `add_employee1`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `add_flat_shop`
--
ALTER TABLE `add_flat_shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `advance_paymt`
--
ALTER TABLE `advance_paymt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bank_pymt_voucher`
--
ALTER TABLE `bank_pymt_voucher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;

--
-- AUTO_INCREMENT for table `cah_pay_voucher`
--
ALTER TABLE `cah_pay_voucher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cheque_in_hand`
--
ALTER TABLE `cheque_in_hand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `city_reg`
--
ALTER TABLE `city_reg`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cm_addcheque`
--
ALTER TABLE `cm_addcheque`
  MODIFY `cheque_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `complete_pro`
--
ALTER TABLE `complete_pro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `contractor`
--
ALTER TABLE `contractor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_reg`
--
ALTER TABLE `customer_reg`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `exp_id` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `finish_goods`
--
ALTER TABLE `finish_goods`
  MODIFY `trans_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `genrate_salary`
--
ALTER TABLE `genrate_salary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_no` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `invoice_return`
--
ALTER TABLE `invoice_return`
  MODIFY `invoice_ret_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `issuedby`
--
ALTER TABLE `issuedby`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `item_formula`
--
ALTER TABLE `item_formula`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `item_reg`
--
ALTER TABLE `item_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `journal_vocher`
--
ALTER TABLE `journal_vocher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lc_details`
--
ALTER TABLE `lc_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `lc_transaction`
--
ALTER TABLE `lc_transaction`
  MODIFY `trans_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `loanamount`
--
ALTER TABLE `loanamount`
  MODIFY `loan_id` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `medi`
--
ALTER TABLE `medi`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `newitem_reg`
--
ALTER TABLE `newitem_reg`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `newvendor_reg`
--
ALTER TABLE `newvendor_reg`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `new_company_reg`
--
ALTER TABLE `new_company_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `new_customer_reg`
--
ALTER TABLE `new_customer_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `new_recpt_form`
--
ALTER TABLE `new_recpt_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `new_salesman`
--
ALTER TABLE `new_salesman`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=350;

--
-- AUTO_INCREMENT for table `production_file`
--
ALTER TABLE `production_file`
  MODIFY `prod_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pro_project`
--
ALTER TABLE `pro_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;

--
-- AUTO_INCREMENT for table `purchase_pro`
--
ALTER TABLE `purchase_pro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `reminder`
--
ALTER TABLE `reminder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `requisition_to`
--
ALTER TABLE `requisition_to`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `reversal_recipt`
--
ALTER TABLE `reversal_recipt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_orderdetail`
--
ALTER TABLE `tbl_orderdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `temp_sale`
--
ALTER TABLE `temp_sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `temp_sales`
--
ALTER TABLE `temp_sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user_groups`
--
ALTER TABLE `user_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `voucher_transaction`
--
ALTER TABLE `voucher_transaction`
  MODIFY `voucher_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
