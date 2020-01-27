-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2018 at 11:43 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventor_soft`
--

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
(001, 0, '1', 17808020);

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
(1, 'islami', '888', 'ii', 'kkk', '11'),
(2, 'tehseen', '212154', 'alfalah', 'jhkjnkgnkjg54221', '215421154512'),
(3, 'Alhabib', 'D7', 'Defence', 'kjkjkjefijijefjk`', '77855442');

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

-- --------------------------------------------------------

--
-- Table structure for table `add_employee`
--

CREATE TABLE `add_employee` (
  `emp_id` int(3) UNSIGNED ZEROFILL NOT NULL,
  `name` varchar(20) NOT NULL,
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

INSERT INTO `add_employee` (`emp_id`, `name`, `designation`, `city`, `cell`, `cnic`, `salary`, `join_date`) VALUES
(001, 'ahad', 'cto', 'jjj', 'kdkkd', 'kk', 'k', '2018-05-17');

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

-- --------------------------------------------------------

--
-- Table structure for table `batch_detail`
--

CREATE TABLE `batch_detail` (
  `id` int(11) NOT NULL,
  `batch_no` varchar(25) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `product_title` varchar(25) NOT NULL,
  `stock` int(11) NOT NULL,
  `company` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch_detail`
--

INSERT INTO `batch_detail` (`id`, `batch_no`, `prod_id`, `product_title`, `stock`, `company`) VALUES
(1, '234', 95, 'disprin', 100, 'STANDARD'),
(2, 'ui', 95, 'disprin', 120, 'STANDARD'),
(3, '89', 95, 'disprin', 900, 'STANDARD'),
(4, '90', 102, 'bruffen', 8100, 'STANDARD'),
(5, '23', 45, '45', 220, 'STANDARD'),
(6, '25', 55, '55', 1000, 'STANDARD'),
(7, '20', 60, '60', 320, 'STANDARD'),
(8, '22', 48, '48', 440, 'STANDARD'),
(9, '23', 48, '48', 460, 'STANDARD'),
(10, '3', 118, '118', 30, 'STANDARD'),
(11, '90', 120, '120', 8100, 'STANDARD'),
(12, '7', 120, '120', 1080, 'STANDARD'),
(13, 't-001', 45, '45', 8588, 'STANDARD'),
(14, '78688', 47, '47', 2, 'STANDARD'),
(15, '89099', 47, '47', 23, 'STANDARD'),
(16, '8888888', 47, '47', 5, 'STANDARD'),
(17, 'T-001', 45, '45', 8588, 'STANDARD'),
(18, 'T-001', 45, '45', 5000, 'STANDARD'),
(19, 'T-005', 43, '43', 5000, 'STANDARD'),
(20, 'T-015', 43, '43', 5000, 'STANDARD'),
(21, 'T-018', 56, '56', 5000, 'STANDARD'),
(22, 'T-016', 45, '45', 5000, 'STANDARD'),
(23, 't00004', 45, '45', 1, 'STANDARD'),
(24, '123', 242, '242', 10, 'STANDARD'),
(25, '1234567', 243, '243', 2, 'STANDARD'),
(26, '67', 243, '243', 4, 'STANDARD'),
(27, '234', 243, '243', 2, 'STANDARD'),
(28, 'd-', 75, '75', 5000, 'STANDARD'),
(29, '52', 43, '43', 10, 'STANDARD'),
(30, '91929', 43, '43', 10, 'STANDARD'),
(31, '677', 43, '43', 20, 'STANDARD'),
(32, '000000', 43, '43', 10, 'STANDARD'),
(33, '6777', 43, '43', 30, 'STANDARD'),
(34, '776', 43, '43', 545, 'STANDARD'),
(35, '7764', 43, '43', 7, 'STANDARD'),
(36, '000000', 43, '43', 10, 'STANDARD'),
(37, 'T-111111', 43, '43', 10, 'STANDARD'),
(38, 'T-111111', 43, '43', 10, 'STANDARD'),
(39, '000000', 48, '48', 3, 'STANDARD'),
(40, 'T-111111', 49, '49', 7, 'STANDARD'),
(41, '000000', 46, '46', 10, 'STANDARD'),
(42, 'T-111111', 47, '47', 10, 'STANDARD'),
(43, '995', 46, '46', 10, 'STANDARD'),
(44, '562', 46, '46', 10, 'STANDARD'),
(45, '000000', 43, '43', 10, 'STANDARD'),
(46, '448', 43, '43', 20, 'STANDARD'),
(47, '878', 43, '43', 10, 'STANDARD'),
(48, '444', 43, '43', 10, 'STANDARD'),
(49, '5454', 43, '43', 10, 'STANDARD'),
(50, '11', 43, '43', 10, 'STANDARD'),
(51, '66', 46, '46', 10, 'STANDARD'),
(52, '5', 43, '43', 0, 'STANDARD'),
(53, '4545', 43, '43', 10, 'STANDARD'),
(54, '6654', 43, '43', 20, 'STANDARD'),
(55, '0000', 43, '43', 10, 'STANDARD'),
(56, '2', 46, '46', 10, 'STANDARD'),
(57, '50', 43, '43', 10, 'STANDARD'),
(58, '2121', 43, '43', 20, 'STANDARD'),
(59, '4555', 43, '43', 20, 'STANDARD'),
(60, 'kjkj', 43, '43', 20, 'STANDARD'),
(61, '45454', 48, '48', 5, 'STANDARD'),
(62, '6545454', 43, '43', 10, 'STANDARD'),
(63, '545454', 49, '49', 7, 'STANDARD'),
(64, '000000', 52, '52', 20, 'STANDARD'),
(65, '454211', 49, '49', 7, 'STANDARD'),
(66, '45454545', 59, '59', 20, 'STANDARD'),
(67, '212111', 57, '57', 20, 'STANDARD'),
(68, '87878', 58, '58', 40, 'STANDARD'),
(69, '545212', 59, '59', 20, 'STANDARD'),
(70, '5545', 68, '68', 14, 'STANDARD'),
(71, '2616', 43, '43', 10, 'STANDARD'),
(72, '454545454', 43, '43', 10, 'STANDARD'),
(73, '484', 59, '59', 10, 'STANDARD'),
(74, '4544', 59, '59', 10, 'STANDARD'),
(75, '654847', 46, '46', 20, 'STANDARD'),
(76, '5454', 43, '43', 10, 'STANDARD'),
(77, '48848', 43, '43', 10, 'STANDARD'),
(78, '5151', 59, '59', 10, 'STANDARD'),
(79, '54540', 59, '59', 10, 'STANDARD'),
(80, '215', 43, '43', 10, 'STANDARD'),
(81, '2125', 43, '43', 20, 'STANDARD'),
(82, '525252', 46, '46', 20, 'STANDARD'),
(83, '214', 46, '46', 6, 'STANDARD'),
(84, '874', 46, '46', 0, 'STANDARD'),
(85, '7878', 59, '59', 10, 'STANDARD'),
(86, '46546', 59, '59', 10, 'STANDARD'),
(87, '46', 59, '59', 10, 'STANDARD'),
(88, '1', 59, '59', 10, 'STANDARD'),
(89, '12', 52, '52', 10, 'STANDARD'),
(90, '5454', 43, '43', 10, 'STANDARD'),
(91, '789', 43, '43', 1, 'STANDARD'),
(92, '4445', 43, '43', 20, 'STANDARD'),
(93, '01', 46, '46', 10, 'STANDARD'),
(94, '44412', 48, '48', 5, 'STANDARD'),
(95, '44412', 48, '48', 5, 'STANDARD'),
(96, '002', 43, '43', 10, 'STANDARD'),
(97, '778', 103, '103', 100, 'STANDARD'),
(98, '4', 43, '43', 10, 'STANDARD'),
(99, '47', 43, '43', 10, 'STANDARD'),
(100, '0121', 48, '48', 5, 'STANDARD'),
(101, '1202', 43, '43', 10, 'STANDARD'),
(102, '10', 43, '43', 20, 'STANDARD'),
(103, '486', 43, '43', 10, 'STANDARD'),
(104, '13', 43, '43', 10, 'STANDARD'),
(105, '482', 43, '43', 10, 'STANDARD'),
(106, '41', 43, '43', 10, 'STANDARD'),
(107, '101', 43, '43', 10, 'STANDARD'),
(108, '0123', 43, '43', 10, 'STANDARD'),
(109, '459', 43, '43', 10, 'STANDARD'),
(110, '0215', 43, '43', 10, 'STANDARD'),
(111, '81', 43, '43', 20, 'STANDARD'),
(112, '8785', 43, '43', 10, 'STANDARD'),
(113, '72', 43, '43', 10, 'STANDARD'),
(114, '0216', 43, '43', 10, 'STANDARD'),
(115, '010', 43, '43', 10, 'STANDARD'),
(116, '70', 43, '43', 10, 'STANDARD'),
(117, '474', 46, '46', 10, 'STANDARD'),
(118, 'T-111111', 46, '46', 10, 'STANDARD'),
(119, '1036', 43, '43', 10, 'STANDARD'),
(120, '919999', 103, '103', 233, 'STANDARD'),
(121, '9919919191', 249, '249', 7, 'STANDARD'),
(122, '89', 43, '43', 990, 'STANDARD'),
(123, '90', 247, '247', 89, 'STANDARD'),
(124, '1234', 249, '249', 9, 'STANDARD'),
(125, '123456', 250, '250', 6285, 'STANDARD'),
(126, '90', 252, '252', 2, 'STANDARD'),
(127, '90', 254, '254', 1, 'STANDARD'),
(128, '90', 254, '254', 1, 'STANDARD'),
(129, '23456', 103, '103', 100, 'STANDARD'),
(130, '0909', 249, '249', 1, 'STANDARD'),
(131, '3456777', 249, '249', 12, 'STANDARD'),
(132, '90', 254, '254', 1, 'STANDARD'),
(133, '44', 252, '252', 1, 'STANDARD');

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
(4, 'general'),
(6, 'Medical'),
(5, 'u6yt');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `city_reg`
--

CREATE TABLE `city_reg` (
  `id` int(3) NOT NULL,
  `area_code` varchar(35) NOT NULL,
  `area_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city_reg`
--

INSERT INTO `city_reg` (`id`, `area_code`, `area_name`) VALUES
(1, 'karachi', 'Sindh'),
(2, '554422', 'Gulshan Block 6A'),
(3, '555', 'B A C K'),
(4, '', 'Ranchor Line'),
(5, '', 'Gulshan Block 6A');

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
(1, 'UBBASOFT (private LT)', 'Qrt 13efefef6 feef 37/b efefefe 1', 2147483647, 2147483647, 54545454),
(2, 'Pakistanis', 'Welcome to Pakistani Company.org			', 778544522, 655988722, 55549988);

-- --------------------------------------------------------

--
-- Table structure for table `customer_reg`
--

CREATE TABLE `customer_reg` (
  `id` int(3) NOT NULL,
  `customer_code` varchar(20) NOT NULL,
  `customer_name` varchar(15) NOT NULL,
  `salesman_code` varchar(25) NOT NULL,
  `salesman_name` varchar(20) NOT NULL,
  `customer_address` varchar(50) NOT NULL,
  `phone_1` varchar(15) NOT NULL,
  `phone_2` int(15) NOT NULL,
  `fax` varchar(50) NOT NULL,
  `area_code` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `old_balance` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_reg`
--

INSERT INTO `customer_reg` (`id`, `customer_code`, `customer_name`, `salesman_code`, `salesman_name`, `customer_address`, `phone_1`, `phone_2`, `fax`, `area_code`, `date`, `old_balance`) VALUES
(1, 'Tehsee', '1', 'aa', 'aa', 'a			 Adresss			 ', '22', 0, '2', 'q', '2018-07-10', 'q'),
(2, 'Taha', '1', '3', 'landhi', '64545	 ', '448822++225', 5454, 'tehseen@.com', '888776', '2018-07-10', '3000'),
(12, 'Tebu', '1', '4545', '545454', '21221121			 \r\n			 454554', '445454', 5454545, '4545454', '45454', '2018-07-10', '5454'),
(13, '75120', 'TEHSEEN', '70155', 'Jawed', 'jhjghgyefgy', '2121212', 2147483647, '5454', '554422', '2018-07-10', ''),
(14, '', 'TEHSEEN', '', '', 'frfrgrgr', '1', 1, '2', '2', '18-07-21', '0'),
(15, '', 'Jawad', '', '', 'fkjkrguhwudij			 \r\n			 ', '782124655', 2147483647, '545421545', '4421', '18-07-22', '0'),
(16, '', 'google Wala Bab', '', '', 'jjgeoekokf			 \r\n			 ', '744522', 155215, '6565', '323565', '18-07-22', '0'),
(17, '', 'TEHSEEN', '', '', 'ggt54t59889', '215454212', 1545452121, '54545421215', '454212154', '18-07-23', '0'),
(18, '', 'Jawad', '', '', '54875421			 \r\n			 ', '21548787', 4216686, '23212145', '54212454', '05-05-2001', '0'),
(19, '', 'tv', '', '', 'rkjkjhdhsjhfjh', '78856642', 2147483647, '544788523', '4556699', '18-07-31', '0'),
(20, '', 'TV 1', '', '', 'dfknjrnjrgbkhbb		 ', '3545487', 21545454, '21215454', '215', '18-07-31', '0');

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
(001, 'tea', 'kkk', '111', '0000-00-00'),
(002, 'lunch', 'wiwiw', '100', '2018-05-28'),
(003, 'lunch', 'wiwiw', '100', '2018-05-28'),
(004, 'bir', 'kkk', '122', '2018-06-09');

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

-- --------------------------------------------------------

--
-- Table structure for table `fnishe_good_rec`
--

CREATE TABLE `fnishe_good_rec` (
  `id` int(11) NOT NULL,
  `datee` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `batch_size` varchar(255) NOT NULL,
  `batch_no` varchar(255) NOT NULL,
  `est_pack_qty` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fnishe_good_rec`
--

INSERT INTO `fnishe_good_rec` (`id`, `datee`, `product_name`, `batch_size`, `batch_no`, `est_pack_qty`, `remarks`, `status`) VALUES
(3, '2018-06-07', '45', '22', '23', '220', '3', 1),
(4, '2018-06-22', '48', '23', '23', '460', 'wwf', 1),
(5, '2018-06-22', '120', '90', '90', '8100', '90', 1),
(6, '2018-06-08', '118', '2', '3', '30', 'test biryani production', 1),
(7, '2018-06-23', '120', '12', '7', '1080', 'kk', 1),
(8, '2018-06-15', '47', '23', '78688', '2', 'kkjj', 1),
(9, '2018-12-31', '47', '234', '89099', '23', 'ioioo', 1),
(10, '2018-12-31', '47', '45', '8888888', '5', 'www', 1),
(11, '2018-06-23', '45', '85881', 't-001', '8588', 'ssss', 1),
(12, '2018-06-23', '45', '85881', 't-001', '8588', 'ssss', 1),
(13, '2018-06-23', '45', '85881', 't-001', '8588', 'ssss', 1),
(14, '2018-06-23', '45', '85881', 't-001', '8588', 'ssss', 1),
(15, '2018-06-23', '45', '85881', 't-001', '8588', 'ssss', 1),
(16, '2018-06-23', '45', '85881', 't-001', '8588', 'ssss', 1),
(17, '2018-06-23', '45', '85881', 't-001', '8588', 'ssss', 1),
(18, '2018-06-23', '45', '85881', 't-001', '8588', 'ssss', 1),
(19, '2018-02-05', '43', '50000', 'T-005', '5000', '------', 1),
(20, '2018-02-05', '43', '50000', 'T-005', '5000', '------', 1),
(21, '2018-02-05', '43', '50000', 'T-005', '5000', '------', 1),
(22, '2018-02-05', '43', '50000', 'T-005', '5000', '------', 1),
(23, '2018-02-05', '43', '50000', 'T-005', '5000', '------', 1),
(24, '2018-02-02', '56', '50000', 'T-018', '5000', '----', 1),
(25, '2018-02-02', '56', '50000', 'T-018', '5000', '----', 1),
(26, '2018-02-02', '56', '50000', 'T-018', '5000', '----', 1),
(27, '2018-02-02', '56', '50000', 'T-018', '5000', '----', 1),
(28, '2018-02-02', '56', '50000', 'T-018', '5000', '----', 1),
(29, '2018-06-23', '45', '85881', 't-001', '8588', 'ssss', 1),
(30, '2018-06-23', '45', '85881', 't-001', '8588', 'ssss', 1),
(31, '2018-06-23', '45', '85881', 't-001', '8588', 'ssss', 1),
(32, '2018-06-16', '243', '10', '1234567', '2', 'jj', 1),
(33, '2018-06-23', '45', '85881', 't-001', '8588', 'ssss', 1),
(34, '2018-06-23', '243', '20', '67', '4', 'ui', 1),
(35, '2018-06-16', '243', '10', '234', '2', '2', 1),
(36, '2018-07-28', '254', '90', '90', '1', 'i', 1),
(37, '2018-07-21', '249', '123', '3456777', '12', 'jgjg', 1),
(38, '2018-07-31', '254', '90', '90', '1', 'good', 1),
(39, '2018-07-14', '252', '34', '44', '1', '44', 1);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `dc_num` varchar(20) NOT NULL,
  `dc_date` date NOT NULL,
  `customer_id` int(3) NOT NULL,
  `payment_paid` double NOT NULL,
  `payment_remaining` double NOT NULL,
  `old_balance` double NOT NULL,
  `ref_no` varchar(6) NOT NULL,
  `sale_person_id` int(3) NOT NULL,
  `remarks` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `invoice_no`, `dc_num`, `dc_date`, `customer_id`, `payment_paid`, `payment_remaining`, `old_balance`, `ref_no`, `sale_person_id`, `remarks`) VALUES
(1, 0, 'dc_noo', '2018-06-06', 1, 0, 0, 0, '  rrr', 15, '123'),
(2, 1, '8785', '2016-05-15', 1, 0, 0, 0, '66212', 13, 'jjj'),
(3, 3, '1', '1021-02-21', 1, 0, 0, 0, ' 54', 16, 'dfd'),
(4, 5, '5', '2005-05-05', 2, 0, 0, 0, ' 23', 16, 'dsa'),
(5, 12, '55', '5215-04-05', 13, 0, 0, 0, ' 121', 20, 'gooddd'),
(6, 21, '0215', '1154-05-21', 1, 0, 0, 0, '01 ', 18, ''),
(7, 45, '4545445', '2011-04-05', 2, 0, 0, 0, ' 45454', 19, '5454'),
(8, 48, '120', '6541-02-23', 1, 0, 0, 0, ' 75', 20, '959'),
(9, 52, '678', '2018-12-05', 1, 0, 0, 0, ' 5510', 24, 'good service'),
(10, 55, '55', '5555-05-05', 1, 0, 0, 0, ' 55', 1, '200'),
(11, 66, '782', '2011-02-21', 1, 0, 0, 0, ' 785', 1, 'q'),
(12, 71, '545', '5454-04-05', 1, 0, 0, 0, '121 ', 1, 'ded'),
(13, 90, '', '0000-00-00', 0, 0, 0, 0, '  09', 1, 'gud '),
(14, 121, '3232', '2011-02-13', 2, 0, 0, 0, ' 3123', 1, 'df'),
(15, 214, '2156', '2011-05-21', 2, 0, 0, 0, ' 000', 1, 'd'),
(16, 333, '8', '2015-02-03', 2, 0, 0, 0, ' 1212', 1, 'de'),
(17, 454, '2151', '4542-05-21', 1, 0, 0, 0, ' 545', 1, 'sdw'),
(18, 545, '787', '7854-08-07', 1, 0, 0, 0, ' 2151', 1, 'fefe'),
(19, 555, '555', '5555-05-05', 1, 0, 0, 0, ' 555', 1, '555'),
(20, 777, '777', '2018-07-09', 1, 0, 0, 0, '  777', 1, '777'),
(21, 787, '3232', '2015-03-31', 2, 0, 0, 0, ' 8785', 1, 'jhjh'),
(22, 881, '82', '2011-12-12', 1, 0, 0, 0, ' 123', 1, 'DSS'),
(23, 1215, '212154', '0124-02-21', 2, 0, 0, 0, ' 33', 1, 'DE'),
(24, 1234, '234_r', '2018-06-19', 1, 0, 0, 0, '    ss', 1, '222'),
(25, 1515, '121', '4656-12-15', 1, 0, 0, 0, ' 0215', 1, '200'),
(26, 2145, '1442', '2012-12-12', 2, 0, 0, 0, ' 454', 1, 'cf'),
(27, 2154, '12121', '2015-02-21', 2, 0, 0, 0, ' 12154', 1, 's'),
(28, 2155, '154', '2011-04-15', 2, 0, 0, 0, ' 41', 1, 'a'),
(29, 2326, '26265', '0652-02-23', 2, 0, 0, 0, ' 46546', 1, 'kjkjk'),
(30, 2454, '5454', '2011-05-04', 2, 0, 0, 0, ' 323', 1, 'd'),
(31, 3232, '1', '5623-06-20', 1, 0, 0, 0, '  6565', 1, 'wowow'),
(32, 4541, '4', '0232-03-31', 1, 0, 0, 0, ' 01', 1, 'jkjg'),
(33, 4545, '454', '5454-04-05', 1, 0, 0, 0, ' 00', 1, 'weee'),
(34, 6666, '77', '2018-06-12', 2, 0, 0, 0, '   333', 1, 'ho'),
(35, 7721, '15', '1511-12-15', 1, 0, 0, 0, ' 88', 1, 'good'),
(36, 15151, '215151', '0121-12-25', 1, 0, 0, 0, ' 1212 ', 1, 'sdw'),
(37, 48445, '745', '1541-05-21', 1, 0, 0, 0, '111', 1, 'wew'),
(38, 78454, '22121', '1000-12-12', 2, 0, 0, 0, '2124 ', 1, 's'),
(39, 454542, '5421', '2014-02-06', 2, 0, 0, 0, ' 325', 1, 'jhj'),
(40, 101010010, '111', '2018-06-12', 1, 0, 0, 0, ' 99999', 1, '8888'),
(41, 90, '', '0000-00-00', 0, 0, 0, 0, '  09', 1, 'gud '),
(42, 89, '89', '2018-07-23', 1, 0, 0, 0, '  89 ', 1, 'hjhjhjhjhjhjhjhjhjhjhjhjhjh'),
(43, 89, '898', '2018-07-23', 1, 0, 0, 0, '89', 1, '98'),
(44, 45, '45', '2018-07-23', 1, 0, 0, 0, '  45', 1, '45'),
(45, 45, '4', '2018-07-23', 2, 0, 0, 0, '54', 1, '4'),
(46, 90, '', '0000-00-00', 0, 0, 0, 0, '  09', 1, 'gud '),
(47, 909, '9090', '2018-07-17', 12, 0, 0, 0, '   89', 1, '989'),
(48, 1234, '89', '2018-07-17', 2, 0, 0, 0, '  8', 1, '989'),
(49, 768, '00001', '2018-07-15', 2, 0, 0, 0, '   000', 1, '000'),
(50, 0, '', '2010-05-01', 12, 0, 0, 0, '', 1, ''),
(51, 958251, '', '1111-01-01', 13, 0, 0, 0, '', 2, ''),
(52, 505096, '', '1111-01-01', 2, 0, 0, 0, '', 1, ''),
(53, 515075, '', '0000-00-00', 1, 0, 0, 0, '', 2, ''),
(54, 0, '', '0000-00-00', 0, 0, 0, 0, '', 0, ''),
(55, 0, '', '0000-00-00', 0, 0, 0, 0, '', 0, ''),
(56, 0, '', '1000-01-01', 1, 0, 0, 0, '', 1, ''),
(57, 35339, '', '0000-00-00', 1, 0, 0, 0, '', 1, ''),
(58, 977844, '', '7777-07-07', 1, 0, 0, 0, '', 1, ''),
(59, 515319, '', '0000-00-00', 0, 0, 0, 0, '', 0, ''),
(60, 253051, '', '0000-00-00', 0, 0, 0, 0, '', 0, ''),
(61, 896881, '', '0000-00-00', 0, 0, 0, 0, '', 0, ''),
(62, 503728, '', '0000-00-00', 0, 0, 0, 0, '', 0, ''),
(63, 692313, '', '0000-00-00', 0, 0, 0, 0, '', 0, ''),
(64, 547727, '', '0000-00-00', 0, 0, 0, 0, '', 0, ''),
(65, 835294, '', '0000-00-00', 0, 0, 0, 0, '', 0, ''),
(66, 39529, '', '0000-00-00', 0, 0, 0, 0, '', 0, ''),
(67, 571460, '', '0000-00-00', 0, 0, 0, 0, '', 0, ''),
(68, 931975, '', '0000-00-00', 0, 0, 0, 0, '', 0, ''),
(69, 4, '', '2011-01-01', 20, 75000, 5000, 0, '', 4, ''),
(70, 0, '', '0000-00-00', 0, 0, 0, 0, '', 0, ''),
(71, 45545, '', '2000-01-01', 20, 9000, 5000, 0, '', 4, ''),
(72, 52, '', '6565-05-06', 20, 10000, 1000, 0, '', 4, ''),
(73, 52, '', '1111-11-01', 20, 5000, 3000, 0, '', 4, ''),
(74, 6656, '', '6565-05-06', 20, 8000, 4000, 0, '', 4, ''),
(75, 12, '', '1111-01-01', 20, 3000, 1000, 0, '', 4, ''),
(76, 655454, '', '0545-04-05', 19, 2121, 2121, 0, '', 2, ''),
(77, 1, '', '2000-01-01', 20, 55, 55, 0, '', 4, ''),
(78, 54555445, '', '2015-01-01', 19, 6000, 1000, 0, '', 3, ''),
(79, 545454, '', '0000-00-00', 20, 888, 88888, 0, '', 4, ''),
(80, 578784, '', '8564-04-08', 20, 7800, 655500, 0, '', 4, ''),
(81, 55454, '', '5454-04-05', 14, 5454, 5454, 0, '', 2, ''),
(82, 54545, '', '5454-04-05', 20, 9898, 98989, 0, '', 4, ''),
(83, 45454, '', '0454-05-04', 20, 88787, 878787, 0, '', 4, ''),
(84, 545454, '', '0454-05-04', 20, 455411, 212121, 0, '', 4, ''),
(85, 5454, '', '4545-05-04', 20, 545454, 45454, 0, '', 4, ''),
(86, 8484, '', '8484-04-08', 20, 62656, 626265, 0, '', 4, ''),
(87, 554, '', '5454-04-05', 20, 5454, 5454, 0, '', 4, ''),
(88, 5454, '', '5454-04-05', 20, 5454, 5454, 0, '', 4, ''),
(89, 545454, '', '5454-04-05', 20, 6000, 5000, 0, '', 2, ''),
(90, 2147483647, '', '5151-12-15', 20, 666, 555, 0, '', 4, ''),
(91, 5454, '', '0545-04-05', 20, 88787, 87878, 0, '', 4, '');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_detail`
--

CREATE TABLE `invoice_detail` (
  `id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `pack_size` varchar(30) NOT NULL,
  `batch_no` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `dc_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_detail`
--

INSERT INTO `invoice_detail` (`id`, `invoice_id`, `prod_id`, `pack_size`, `batch_no`, `price`, `qty`, `total`, `dc_num`) VALUES
(1, 33, 95, '10', '10', 110, 5, 550, 0),
(2, 1234, 17, 'pack_size', 'pack_size', 34, 2, 68, 0),
(3, 1234, 17, 'pack_size', 'pack_size', 34, 2, 68, 0),
(4, 1, 11, 'pack_size', 'pack_size', 500, 1, 500, 0),
(5, 101010010, 248, '10', '10', 10, 55, 550, 0),
(6, 52, 11, '33', '33', 3000, 1, 3000, 0),
(7, 48445, 0, 'pack_size', 'pack_size', 0, 0, 0, 0),
(8, 6666, 6, 'pack_size', 'pack_size', 10000, 2, 20000, 0),
(9, 6666, 26, 'pack_size', 'pack_size', 5000, 1, 5000, 0),
(10, 1, 0, 'pack_size', 'pack_size', 0, 0, 0, 0),
(11, 1, 0, 'pack_size', 'pack_size', 0, 0, 0, 0),
(12, 0, 1, 'io', 'io', 90, 90, 8100, 0),
(14, 777, 1, 'io', 'io', 90, 90, 8100, 0),
(15, 90, 1, 'ps', 'bn', 900000, 0, 8100, 0),
(16, 90, 1, 'ps', 'bn', 100, 90, 9000, 0),
(17, 909, 1, 'io', 'io', 90, 9, 810, 0),
(18, 1234, 1, 'io', 'io', 90, 89, 8010, 0),
(19, 768, 0, 'pack_size', 'pack_size', 500, 5, 2500, 0),
(20, 768, 1, 'io', 'io', 90, 2, 180, 0),
(21, 0, 1, '-1812', '-1812', 90, 90, 8100, 0),
(22, 0, 1, '-1812', '-1812', 90, 90, 8100, 0),
(23, 0, 1, '-1812', '-1812', 642, 75, 48150, 0),
(24, 0, 1, '-1812', '-1812', 90, 90, 8100, 0),
(25, 0, 1, '-1812', '-1812', 90, 90, 8100, 0),
(26, 0, 1, '-1812', '-1812', 90, 90, 8100, 0),
(27, 0, 1, '-1812', '-1812', 90, 90, 8100, 0),
(28, 0, 1, '-1812', '-1812', 90, 90, 8100, 0),
(29, 0, 1, '5', '5', 90, 4, 360, 0),
(30, 0, 1, '-1812', '-1812', 90, 90, 8100, 0),
(31, 0, 1, '-1812', '-1812', 90, 90, 8100, 0),
(32, 0, 1, '-1812', '-1812', 90, 90, 8100, 0),
(33, 0, 1, '-1812', '-1812', 90, 90, 8100, 0),
(34, 0, 1, '-1812', '-1812', 90, 90, 8100, 0),
(35, 0, 1, '-1812', '-1812', 90, 90, 8100, 0),
(36, 0, 1, '-1812', '-1812', 90, 90, 8100, 0),
(37, 0, 1, '-1812', '-1812', 90, 90, 8100, 0),
(38, 0, 1, '-1812', '-1812', 90, 90, 8100, 0),
(39, 0, 1, '-1812', '-1812', 90, 90, 8100, 0),
(40, 0, 1, '-1812', '-1812', 90, 70, 6300, 0);

-- --------------------------------------------------------

--
-- Table structure for table `invoice_pay`
--

CREATE TABLE `invoice_pay` (
  `id` int(80) NOT NULL,
  `custom_id` varchar(80) NOT NULL,
  `payment_paid` double NOT NULL,
  `payment_remaining` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_pay`
--

INSERT INTO `invoice_pay` (`id`, `custom_id`, `payment_paid`, `payment_remaining`) VALUES
(1, '1', 11142690, 1),
(2, '2', 18071, -14000),
(4, '10', 0, 0),
(5, '12', 915179, 87909),
(6, '', 0, 0),
(7, '', 0, 0),
(8, '', 0, 0),
(9, '', 0, 0),
(10, '', 0, 0),
(11, '15', 0, 0),
(12, '19', 8121, -5000),
(13, '20', 80205117, -75113296);

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
  `remarks` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoice_return_detail`
--

CREATE TABLE `invoice_return_detail` (
  `invoice_ret_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `pack_size` int(11) NOT NULL,
  `batch_no` varchar(25) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `item_formula`
--

CREATE TABLE `item_formula` (
  `id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `qty` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_formula`
--

INSERT INTO `item_formula` (`id`, `item_name`, `product_name`, `qty`) VALUES
(310, '0', '1', '89');

-- --------------------------------------------------------

--
-- Table structure for table `item_formula_temp`
--

CREATE TABLE `item_formula_temp` (
  `id` int(11) NOT NULL,
  `product_name` int(11) NOT NULL,
  `qty` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
(001, 1, 'ahad', '123', '11', 200, '2018-05-19');

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
  `id` int(5) NOT NULL,
  `item_code` varchar(40) NOT NULL,
  `item_name` varchar(40) NOT NULL,
  `company_code` varchar(40) NOT NULL,
  `pack_size` varchar(30) NOT NULL,
  `no_of_pcs` int(30) NOT NULL,
  `trade_price` int(25) NOT NULL,
  `retail_price` int(25) NOT NULL,
  `sales_tax` varchar(40) NOT NULL,
  `sales_discount` double NOT NULL,
  `reorder_quantity` int(11) NOT NULL,
  `dates` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newitem_reg`
--

INSERT INTO `newitem_reg` (`id`, `item_code`, `item_name`, `company_code`, `pack_size`, `no_of_pcs`, `trade_price`, `retail_price`, `sales_tax`, `sales_discount`, `reorder_quantity`, `dates`) VALUES
(1, 'io', '1', 'io', '2', 0, 90, 90, '90', -1812, -1158, '18-07-12'),
(2, '4456205', 'Google Wallet', '101', '32', 70, 0, 500, '20', 10, 0, '18-07-19'),
(3, '', 'ddd', '1', 'ddd', 0, 2156, 3152, '2546', 22, 0, '18-07-20'),
(4, '', 'September', '1', 'Cool', 44, 6565, 2154, '2154', 5412, 0, '18-07-21'),
(5, '', 'tv1', '2', '800', 2054, 30, 45, '5', 5, 0, '18-07-31');

-- --------------------------------------------------------

--
-- Table structure for table `newvendor_reg`
--

CREATE TABLE `newvendor_reg` (
  `id` int(3) NOT NULL,
  `sup_code` varchar(30) NOT NULL,
  `sup_name` varchar(11) NOT NULL,
  `sup_address` varchar(60) NOT NULL,
  `phone_1` varchar(30) NOT NULL,
  `phone_2` varchar(30) NOT NULL,
  `v_phone` varchar(30) NOT NULL,
  `v_fax` varchar(30) NOT NULL,
  `area_code` varchar(30) NOT NULL,
  `v_op_bal` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newvendor_reg`
--

INSERT INTO `newvendor_reg` (`id`, `sup_code`, `sup_name`, `sup_address`, `phone_1`, `phone_2`, `v_phone`, `v_fax`, `area_code`, `v_op_bal`) VALUES
(15, '48224562', 'YahYa', '', '5554486232', '0221554882', '', '32245421', '4455215', ''),
(16, '', '', '', '', '', '', '', '', ''),
(17, '', '', '', '', '', '', '', '', ''),
(18, '', 'Google Mics', '', '44521552', '1155522215652', '', '666558788552', '254522', ''),
(19, '', 'Television', 'fefjijefikjk			 ', '4774552115', '6321552215', '', '3255662', '11255', ''),
(20, '', 'Google Mics', '		fff	 ', '5555555555555555', '55555555555', '', '5555555555555', '55555555555', ''),
(21, '', 'William Sha', 'sdwed			 ', '323232', '323232', '', '323232', '323232', ''),
(22, '', 'William Sha', 'jkfjiejfiehuhrf			 ', '545216898', '32315487021', '', '132565', '32354', ''),
(23, '', 'fe', '54545			 ', '54554', '545454', '', '54545454', '5454', ''),
(24, '', '56565', '65656565			 ', '65656565', '656565', '', '656565', '6565', ''),
(25, '', '77777777777', '7777777777777777			 ', '777777777777777', '777777777777777', '', '77777777777777777', '77777777777777777777777', ''),
(26, '', '55555555555', '555555555555555			 ', '555555555555555', '555555555555', '', '555555555555', '5555555555', ''),
(27, '', '88888888888', '88888888888			 ', '8888', '888888', '', '888888', '88888888', ''),
(28, '', '555555', '55555			 ', '5555', '5555', '', '5555', '55555', ''),
(29, '', 'Pak TV 1', 'pakistani conpany tv 1		 ', '81136652255', '6689962212356', '', '225669985', '66523', '');

-- --------------------------------------------------------

--
-- Table structure for table `new_salesman`
--

CREATE TABLE `new_salesman` (
  `id` int(3) NOT NULL,
  `booker_code` varchar(30) NOT NULL,
  `booker_name` varchar(30) NOT NULL,
  `address` varchar(60) NOT NULL,
  `p_no` int(20) NOT NULL,
  `mob_num` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_salesman`
--

INSERT INTO `new_salesman` (`id`, `booker_code`, `booker_name`, `address`, `p_no`, `mob_num`) VALUES
(1, 'shariq', 'aa', '22', 221, 0),
(2, '5547785', 'Usman', '1545frfgrgth659', 2147483647, 2120152215),
(3, '', 'Tehseen', 'qrui Quaid Abad', 445211566, 221552),
(4, '', 'TV Sales', 'kfejijiguhurgkjok', 2147483647, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `ninvoice_return`
--

CREATE TABLE `ninvoice_return` (
  `id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `ret_date` date NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `person_drw`
--

CREATE TABLE `person_drw` (
  `Personal_Acc` int(14) NOT NULL,
  `Description` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `media_id` int(11) DEFAULT '0',
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `production_file`
--

CREATE TABLE `production_file` (
  `prod_id` int(3) NOT NULL,
  `prod_date` date NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `batch_size` varchar(15) NOT NULL,
  `batch_no` varchar(20) NOT NULL,
  `est_packs_qty` int(20) NOT NULL,
  `remarks` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `production_file`
--

INSERT INTO `production_file` (`prod_id`, `prod_date`, `product_id`, `batch_size`, `batch_no`, `est_packs_qty`, `remarks`) VALUES
(1, '2018-05-24', '0', '5000', '001', 0, 'NO');

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
  `media_id` int(11) DEFAULT '0',
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

-- --------------------------------------------------------

--
-- Table structure for table `purchase_pay`
--

CREATE TABLE `purchase_pay` (
  `id` int(80) NOT NULL,
  `vendor_id` varchar(80) NOT NULL,
  `payment_paid` double NOT NULL,
  `payment_remaining` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_pay`
--

INSERT INTO `purchase_pay` (`id`, `vendor_id`, `payment_paid`, `payment_remaining`) VALUES
(1, '1', 2000, -2000),
(2, '2', 1003000, -1000000),
(3, '3', 3000, 8000),
(4, '4', 0, 0),
(5, '5', 5400, -5100),
(6, '6', 51000, 1000),
(7, '11', 0, 0),
(8, '', 0, 0),
(9, '13', 0, 0),
(10, '24', 2201279, 5454),
(11, '', 0, 0),
(12, '', 0, 0),
(13, '', 0, 0),
(14, '28', 555, 555),
(15, '29', 70019454, 5454);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_trans`
--

CREATE TABLE `purchase_trans` (
  `id` int(11) NOT NULL,
  `invoice_no` int(15) NOT NULL,
  `p_date` date NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `dc_no` int(11) NOT NULL,
  `pno` varchar(15) NOT NULL,
  `payment_paid` double NOT NULL,
  `payment_remaining` double NOT NULL,
  `old_balance` double NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_trans`
--

INSERT INTO `purchase_trans` (`id`, `invoice_no`, `p_date`, `vendor_id`, `dc_no`, `pno`, `payment_paid`, `payment_remaining`, `old_balance`, `remarks`) VALUES
(7, 0, '2018-05-09', 2, 90, '90', 0, 0, 0, '09'),
(24, 0, '2018-03-30', 5, 9, '', 0, 0, 0, ''),
(25, 0, '2018-03-30', 5, 10, '', 0, 0, 0, ''),
(26, 0, '2018-03-30', 5, 11, '', 0, 0, 0, ''),
(28, 0, '2018-03-27', 5, 12, '', 0, 0, 0, ''),
(29, 0, '2018-03-27', 5, 13, '', 0, 0, 0, ''),
(31, 0, '2018-03-27', 5, 16, '', 0, 0, 0, ''),
(32, 0, '2018-03-27', 5, 17, '', 0, 0, 0, ''),
(33, 0, '2018-03-27', 5, 18, '', 0, 0, 0, ''),
(34, 0, '2018-04-25', 5, 19, '', 0, 0, 0, ''),
(35, 0, '2018-05-07', 5, 20, '', 0, 0, 0, ''),
(36, 0, '2018-05-07', 5, 21, '', 0, 0, 0, ''),
(37, 0, '2018-05-07', 5, 22, '', 0, 0, 0, ''),
(38, 0, '2018-05-07', 5, 23, '', 0, 0, 0, ''),
(39, 0, '2018-05-07', 5, 24, '', 0, 0, 0, ''),
(40, 0, '2018-05-09', 5, 25, '', 0, 0, 0, ''),
(41, 0, '2018-05-03', 5, 26, '', 0, 0, 0, ''),
(42, 0, '2018-05-03', 5, 27, '', 0, 0, 0, ''),
(43, 0, '2018-05-16', 5, 28, '', 0, 0, 0, ''),
(45, 0, '2018-05-23', 5, 30, '', 0, 0, 0, ''),
(46, 0, '2018-05-23', 5, 31, '', 0, 0, 0, ''),
(47, 0, '2018-06-08', 5, 345, '0909', 0, 0, 0, 'buying'),
(48, 0, '2018-05-22', 5, 5547, '0025001', 0, 0, 0, '200'),
(53, 0, '2018-01-04', 9, 1, '021-34141916', 0, 0, 0, '---------'),
(54, 0, '2018-01-04', 9, 2, '021-34141916', 0, 0, 0, '---------'),
(55, 0, '2018-01-16', 9, 3, '021-34141916', 0, 0, 0, '-----------'),
(56, 0, '2018-01-26', 9, 4, '021-34141916', 0, 0, 0, '-----------'),
(57, 0, '2018-01-30', 9, 5, '021-34141916', 0, 0, 0, '---------'),
(58, 0, '2018-02-08', 9, 6, '021-34141916', 0, 0, 0, '-----------'),
(59, 0, '2018-02-08', 9, 7, '021-34141916', 0, 0, 0, '-----------'),
(60, 0, '2018-02-07', 9, 8, '021-34141916', 0, 0, 0, '-----------'),
(61, 0, '2018-02-08', 9, 9, '021-34141916', 0, 0, 0, '---------'),
(62, 0, '2018-02-16', 9, 10, '021-34141916', 0, 0, 0, '---------'),
(63, 0, '2018-02-27', 9, 11, '021-34141916', 0, 0, 0, '---------'),
(64, 0, '2018-02-27', 9, 12, '021-34141916', 0, 0, 0, '---------'),
(65, 0, '2018-03-06', 9, 13, '021-34141916', 0, 0, 0, '-----------'),
(66, 0, '2018-03-06', 5, 14, '------', 0, 0, 0, '---------'),
(67, 0, '2018-03-06', 9, 15, '021-34141916', 0, 0, 0, '---------'),
(68, 0, '2018-03-08', 9, 16, '021-34141916', 0, 0, 0, '---------'),
(69, 0, '2018-03-13', 5, 17, '021-34141916', 0, 0, 0, '---------'),
(70, 0, '2018-03-19', 9, 18, '021-34141916', 0, 0, 0, '---------'),
(71, 0, '2018-03-20', 9, 19, '021-34141916', 0, 0, 0, '---------'),
(72, 0, '2018-03-28', 9, 20, '021-34141916', 0, 0, 0, '---------'),
(73, 0, '2018-04-07', 9, 21, '021-34141916', 0, 0, 0, '---------'),
(74, 0, '2018-04-07', 9, 22, '021-34141916', 0, 0, 0, '---------'),
(75, 0, '2018-04-20', 9, 23, '021-34141916', 0, 0, 0, '---------'),
(76, 0, '2018-04-28', 9, 24, '021-34141916', 0, 0, 0, '---------'),
(77, 0, '2018-04-28', 9, 25, '021-34141916', 0, 0, 0, '---------'),
(78, 0, '2018-05-15', 9, 26, '021-34141916', 0, 0, 0, '---------'),
(79, 0, '2018-02-24', 10, 1, '--------', 0, 0, 0, '---------'),
(80, 0, '2018-03-22', 10, 2, '------', 0, 0, 0, '--------'),
(81, 0, '2018-03-22', 10, 3, '-------------', 0, 0, 0, '---------'),
(82, 0, '2018-03-24', 10, 4, '-----------', 0, 0, 0, '---------'),
(83, 0, '2018-03-24', 10, 5, '---------------', 0, 0, 0, '-------------'),
(84, 0, '2018-03-24', 10, 6, '----------', 0, 0, 0, '----------'),
(85, 0, '2018-03-27', 10, 7, '-------------', 0, 0, 0, '--------------'),
(86, 0, '2018-03-27', 10, 8, '---------------', 0, 0, 0, '-------------'),
(87, 0, '2018-03-28', 10, 9, '------------', 0, 0, 0, '-----------'),
(88, 0, '2018-03-28', 10, 10, '------------', 0, 0, 0, '-----------'),
(89, 0, '2018-04-12', 10, 11, '--------', 0, 0, 0, '--------'),
(90, 0, '2018-04-12', 10, 12, '-------', 0, 0, 0, '--------'),
(91, 0, '2018-04-17', 10, 13, '--------', 0, 0, 0, '---------'),
(92, 0, '2018-04-17', 10, 14, '----------', 0, 0, 0, '------------'),
(93, 0, '2018-04-17', 10, 15, '-----------', 0, 0, 0, '-----------'),
(94, 0, '2018-04-18', 10, 16, '----------', 0, 0, 0, '---------'),
(95, 0, '2018-04-25', 10, 17, '-----------', 0, 0, 0, '------------'),
(96, 0, '2018-04-25', 10, 18, '-------------', 0, 0, 0, '-----------'),
(97, 0, '2018-04-26', 10, 19, '----------', 0, 0, 0, '----------'),
(98, 0, '2018-04-26', 10, 20, '---------', 0, 0, 0, '---------'),
(99, 0, '2018-04-26', 10, 21, '---------', 0, 0, 0, '----------'),
(100, 0, '2018-04-27', 10, 22, '--------', 0, 0, 0, '-----------'),
(101, 0, '2018-04-27', 10, 23, '----------', 0, 0, 0, '-----------'),
(102, 0, '2018-04-27', 10, 24, '-------', 0, 0, 0, '--------'),
(103, 0, '2018-05-02', 10, 25, '-----------', 0, 0, 0, '------------'),
(104, 0, '2018-05-02', 10, 26, '----------', 0, 0, 0, '-------------'),
(105, 0, '2018-05-02', 10, 27, '-----------', 0, 0, 0, '-------------'),
(106, 0, '2018-05-04', 10, 28, '------------', 0, 0, 0, '----------'),
(107, 0, '2018-05-04', 10, 29, '-------------', 0, 0, 0, '-----------'),
(108, 0, '2018-05-07', 10, 30, '------------', 0, 0, 0, '---------'),
(109, 0, '2018-05-07', 10, 31, '-----------', 0, 0, 0, '----------'),
(110, 0, '2018-05-08', 10, 32, '--------------', 0, 0, 0, '-------------'),
(111, 0, '2018-05-08', 10, 33, '----------', 0, 0, 0, '-------------'),
(112, 0, '2018-05-10', 10, 34, '------------', 0, 0, 0, '--------------'),
(113, 0, '2018-05-11', 10, 35, '------------', 0, 0, 0, '------------'),
(114, 0, '2018-05-12', 10, 36, '---------', 0, 0, 0, '---------'),
(115, 0, '2018-05-15', 10, 38, '----------', 0, 0, 0, '----------'),
(116, 0, '2018-05-15', 10, 39, '----------', 0, 0, 0, '------------'),
(117, 0, '2018-05-16', 10, 40, '-----------', 0, 0, 0, '----------'),
(118, 0, '2018-05-16', 10, 41, '--------------', 0, 0, 0, '-----------------'),
(120, 0, '2018-05-22', 10, 43, '-----------', 0, 0, 0, '------------'),
(121, 0, '2018-05-22', 10, 44, '----------', 0, 0, 0, '---------'),
(122, 0, '2018-05-23', 10, 45, '-----------', 0, 0, 0, '---------'),
(123, 0, '2018-05-23', 10, 46, '-------------', 0, 0, 0, '----------'),
(124, 0, '2018-05-29', 10, 47, '--------------', 0, 0, 0, '---------------'),
(130, 0, '2015-11-11', 5, 48, '212151', 0, 0, 0, 'feed'),
(131, 0, '1545-12-15', 5, 99, '77', 0, 0, 0, 's'),
(132, 0, '2011-04-07', 5, 69, '45', 0, 0, 0, 'feeee'),
(139, 0, '2011-02-21', 5, 957, '78', 0, 0, 0, 'fr'),
(140, 0, '2011-12-15', 5, 0, '484', 0, 0, 0, 'se'),
(142, 0, '2011-01-01', 5, 7856, '8554', 0, 0, 0, 'o'),
(143, 0, '2011-05-04', 5, 856, '98', 0, 0, 0, 'frr'),
(144, 0, '0000-00-00', 5, 454, '36', 0, 0, 0, 're'),
(145, 0, '2011-03-31', 5, 223, '343', 0, 0, 0, 'fdf'),
(146, 0, '2011-05-21', 5, 752, '87421', 0, 0, 0, 'rrrr'),
(147, 0, '2015-02-02', 5, 6554, '78787', 0, 0, 0, 'wells'),
(148, 0, '2014-05-05', 5, 77854, '35668', 0, 0, 0, 'well'),
(149, 0, '2016-01-22', 5, 9872, '0202', 0, 0, 0, 'ded'),
(150, 0, '0545-04-05', 5, 0, '3132', 0, 0, 0, 'f'),
(151, 0, '0151-12-12', 5, 12151, '1515121', 0, 0, 0, '12151'),
(152, 0, '0154-05-21', 5, 2155, '215454', 0, 0, 0, '215151'),
(153, 0, '1515-12-05', 5, 21554, '515451', 0, 0, 0, 'de'),
(154, 0, '0515-04-15', 5, 326, '215454', 0, 0, 0, 'dee'),
(155, 0, '1515-05-21', 5, 2155515, '2155451', 0, 0, 0, '2151'),
(156, 0, '0000-00-00', 5, 215452, '215451', 0, 0, 0, '212154'),
(157, 0, '1552-02-05', 5, 215, '1554212', 0, 0, 0, '151'),
(158, 0, '0011-05-11', 5, 21521, '2154212', 0, 0, 0, '215421'),
(159, 0, '2011-01-06', 6, 1523, '448', 0, 0, 0, 'def'),
(160, 0, '2011-08-08', 6, 3115, '21520', 0, 0, 0, 'wes'),
(161, 0, '2011-04-05', 6, 212456, '48742133', 0, 0, 0, 'xd'),
(162, 0, '2011-05-04', 6, 2498, '15436521', 0, 0, 0, 'edee'),
(163, 0, '2015-12-05', 6, 125463232, '15454321365', 0, 0, 0, 'sdee'),
(164, 0, '2011-03-31', 6, 215454, '212424545', 0, 0, 0, 'deews'),
(165, 0, '2015-05-21', 6, 13655, '1242325653', 0, 0, 0, 'dfg'),
(166, 0, '2015-05-06', 6, 211521, '2153256532', 0, 0, 0, 'dewdf'),
(167, 0, '2014-02-21', 6, 21456565, '321323556523', 0, 0, 0, 'cfg'),
(168, 0, '2014-12-12', 6, 5478721, '548754216565', 0, 0, 0, 'sdffs'),
(169, 0, '2015-06-24', 6, 2147483647, '212454564656', 0, 0, 0, 'dfeed'),
(170, 0, '2011-02-23', 6, 23155421, '325656232565', 0, 0, 0, 'dedede'),
(171, 0, '2015-05-04', 6, 215656, '21545442356', 0, 0, 0, 'sdeef'),
(172, 0, '2015-05-21', 6, 54876565, '215465632', 0, 0, 0, 'der'),
(173, 0, '2015-04-05', 6, 3265656, '55487443', 0, 0, 0, 'sefef'),
(174, 0, '2011-12-21', 6, 21545421, '154545121544', 0, 0, 0, 'S'),
(175, 0, '2017-05-21', 6, 2147483647, '215432659898', 0, 0, 0, 'sdew'),
(176, 0, '2011-03-31', 6, 326591, '989765', 0, 0, 0, 'ade'),
(177, 0, '2000-05-21', 6, 21454665, '3656326565', 0, 0, 0, 'fg'),
(178, 0, '2014-02-23', 6, 245489, '5656532', 0, 0, 0, 'sdee'),
(179, 0, '2011-06-02', 6, 2154659, '265698553', 0, 0, 0, 'kjkjiui'),
(180, 0, '2015-02-21', 6, 254656, '1326890', 0, 0, 0, 'sd'),
(181, 0, '2014-05-06', 6, 57752, '12859', 0, 0, 0, 'dfew'),
(182, 0, '2014-05-21', 6, 2154546, '212154', 0, 0, 0, 'sdefg'),
(183, 0, '2015-05-21', 6, 2147483647, '02123', 0, 0, 0, 'sde'),
(184, 0, '2003-05-21', 6, 2147483647, '254542123369', 0, 0, 0, 'fdfd'),
(185, 0, '2014-02-23', 6, 321598, '544878', 0, 0, 0, 'sde'),
(186, 0, '2015-05-26', 6, 3268, '215498', 0, 0, 0, 'dfrc'),
(187, 0, '0000-00-00', 0, 0, '', 0, 0, 0, ''),
(188, 0, '2018-07-31', 7, 78787, '56565', 0, 0, 0, 'good'),
(189, 0, '2018-07-12', 5, 744, '9`', 0, 0, 0, 'last'),
(190, 0, '2018-07-12', 9, 3744, '9', 0, 0, 0, '999'),
(191, 0, '0000-00-00', 0, 0, '', 0, 0, 0, ''),
(192, 0, '0000-00-00', 0, 0, '', 0, 0, 0, ''),
(193, 0, '2000-05-01', 11, 78215, '35668789', 0, 0, 0, 'Cool man'),
(194, 0, '0000-00-00', 0, 0, '', 0, 0, 0, ''),
(195, 0, '2011-05-01', 11, 2159896, '326654659', 0, 0, 0, 'fewe'),
(196, 0, '0000-00-00', 0, 0, '', 0, 0, 0, ''),
(197, 0, '2013-04-12', 13, 545268989, '21215463232', 0, 0, 0, 'kjhyuy'),
(198, 0, '0000-00-00', 0, 0, '', 0, 0, 0, ''),
(199, 0, '0000-00-00', 0, 0, '', 0, 0, 0, ''),
(200, 945953, '1011-01-01', 15, 0, '', 0, 0, 0, ''),
(201, 222412, '1111-11-11', 15, 0, '', 0, 0, 0, ''),
(202, 818084, '4444-04-04', 18, 0, '', 0, 0, 0, ''),
(203, 381286, '0000-00-00', 0, 0, '', 0, 0, 0, ''),
(204, 555, '0005-05-05', 28, 0, '', 0, 0, 0, ''),
(205, 7785, '1125-02-25', 29, 0, '', 8000, 4000, 0, ''),
(206, 8875, '0555-05-05', 22, 0, '', 6000, 4000, 0, ''),
(207, 6566, '2005-01-01', 29, 0, '', 6000, 2000, 0, ''),
(208, 7566, '2000-01-01', 25, 0, '', 8000, 3000, 0, ''),
(209, 555, '0555-05-05', 24, 0, '', 555, 555, 0, ''),
(210, 54545, '5555-05-05', 24, 0, '', 8000, 3000, 0, ''),
(211, 656565665, '5656-06-05', 29, 0, '', 5454, 5454, 0, ''),
(212, 454545, '0545-04-05', 24, 0, '', 545454, 54545, 0, ''),
(213, 545454, '4545-05-04', 24, 0, '', 545454, 545454, 0, ''),
(214, 545454, '5454-04-05', 24, 0, '', 5454, 5454, 0, ''),
(215, 787554, '8745-04-05', 24, 0, '', 5454, 5454, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_trans_detail`
--

CREATE TABLE `purchase_trans_detail` (
  `id` int(11) NOT NULL,
  `pt_id` int(11) NOT NULL,
  `invoice_no` int(30) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` double NOT NULL,
  `total` double NOT NULL,
  `dc_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_trans_detail`
--

INSERT INTO `purchase_trans_detail` (`id`, `pt_id`, `invoice_no`, `product_id`, `qty`, `price`, `total`, `dc_no`) VALUES
(1, 0, 0, 98, -12498, 8, -99984, 0),
(2, 90, 0, 100, 80, 900, 72000, 0),
(3, 90, 0, 101, -80900, 900, -72810000, 0),
(4, 90, 0, 99, 120, 900, 108000, 0),
(6, 234, 0, 5, 29, 729.153605015674, 21145.454545454544, 0),
(7, 12345, 0, 3, -266815, 16.60193228256854, -4429644.561973525, 0),
(8, 22222, 0, 4, -29903, 50.08751050126015, -1497766.8265191822, 0),
(9, 22222, 0, 7, -13482, 100.55187637969095, -1355640.3973509935, 0),
(10, 22222, 0, 13, 58, 31.03448275862069, 1800, 0),
(11, 341, 0, 37, 54, 14.814814814814815, 800, 0),
(12, 123, 0, 11, 26, 27.586206896551722, 717.2413793103448, 0),
(13, 123, 0, 40, -69241, 609.375, -42193734.375, 0),
(14, 6, 0, 42, -19, 720, -13680, 0),
(15, 6, 0, 36, -307873, 60, -18472380, 0),
(16, 6, 0, 0, 57679, 52447.50520986841, 3025119653, 545268989),
(17, 6, 0, 103, 1, 1700, 1700, 0),
(18, 6, 0, 106, 1, 1800, 1800, 0),
(19, 6, 0, 105, 15, 500, 7500, 0),
(20, 0, 0, 29, 8, 1025, 8200, 0),
(21, 14, 0, 83, 51, 1264.7254901960785, 64501, 0),
(22, 14, 0, 20, -414008, 392.45098039215685, -162477845.49019608, 0),
(23, 14, 0, 108, 200, 4400, 880000, 0),
(24, 14, 0, 23, -39197, 1000, -39197000, 0),
(25, 0, 0, 107, 498, 1004.9900199600798, 500485.02994011977, 0),
(26, 0, 0, 84, 24, 430, 10191, 0),
(27, 0, 0, 38, -11699, 525, -6141975, 0),
(28, 0, 0, 109, -304818, 390, -118879020, 0),
(29, 0, 0, 41, -20649, 500, -10324500, 0),
(30, 0, 0, 25, -232532, 221.8181818181818, -51579825.45454545, 0),
(31, 0, 0, 81, -4415041, 205, -905083405, 0),
(32, 0, 0, 27, -92648, 325, -30110600, 0),
(33, 0, 0, 110, -2059572, 74.26415094339623, -152952365.88679245, 0),
(34, 0, 0, 111, 1, 2000, 2000, 0),
(35, 0, 0, 112, -187, 575, -107525, 0),
(36, 0, 0, 113, -67, 2900, -194300, 0),
(37, 0, 0, 114, 1, 3000, 3000, 0),
(38, 12345, 0, 115, 9910, 10, 99100, 0),
(39, 12345, 0, 117, 11700, 13, 152100, 0),
(40, 12345, 0, 116, 129850, 5, 649250, 0),
(41, 5200, 0, 26, -87, 2, -174, 0),
(42, 12, 0, 6, -3826408, 5.000388164100255, -19133525.27421853, 0),
(43, 12, 0, 21, 4, 10, 40, 0),
(44, 678, 0, 8, -10, 110, -1100, 0),
(45, 678, 0, 9, -152, 3.3223684210526314, -505, 0),
(46, 0, 0, 10, 100, 0, 0, 0),
(47, 0, 0, 2, 50, 0, 0, 0),
(48, 0, 0, 12, -182, 0, 0, 0),
(49, 0, 0, 16, -560, 0, 0, 0),
(50, 0, 0, 34, 50, 0, 0, 0),
(51, 0, 0, 24, 50, 0, 0, 0),
(52, 0, 0, 17, 20, 0, 0, 0),
(53, 0, 0, 18, 5, 0, 0, 0),
(54, 0, 0, 77, 2, 0, 0, 0),
(55, 0, 0, 15, -1214900, 0, 0, 0),
(56, 0, 0, 14, 47, 0, 0, 0),
(57, 0, 0, 162, 446, 356.04260089686096, 158795, 0),
(58, 0, 0, 137, 11, 0, 0, 0),
(59, 0, 0, 135, 22, 1112.5, 24475, 0),
(60, 0, 0, 138, 22, 1095, 24090, 0),
(61, 0, 0, 139, 22, 1095, 24090, 0),
(62, 0, 0, 136, 11, 0, 0, 0),
(63, 0, 0, 140, 10, 0, 0, 0),
(64, 0, 0, 141, 11, 0, 0, 0),
(65, 0, 0, 142, 11, 0, 0, 0),
(66, 0, 0, 143, 11, 0, 0, 0),
(67, 0, 0, 163, 1150, 0, 0, 0),
(68, 0, 0, 144, 11, 1150, 12305, 0),
(69, 0, 0, 145, 21, 1160.952380952381, 24380, 0),
(70, 0, 0, 146, 11, 1100, 11550, 0),
(71, 0, 0, 147, 10, 1100, 11000, 0),
(72, 0, 0, 148, 10, 1100, 10780, 0),
(73, 0, 0, 149, 13, 1150, 14375, 0),
(74, 0, 0, 150, 10, 1100, 10560, 0),
(75, 0, 0, 151, 10, 1100, 11110, 0),
(76, 0, 0, 164, 10, 1100, 11110, 0),
(77, 0, 0, 153, 9, 1150, 10810, 0),
(78, 0, 0, 154, 11, 1150, 12420, 0),
(79, 0, 0, 155, 11, 1150, 12305, 0),
(80, 0, 0, 156, 10, 1100, 10670, 0),
(81, 0, 0, 157, 31, 1110.6451612903227, 34430, 0),
(82, 0, 0, 158, 11, 1100, 12320, 0),
(83, 0, 0, 159, 10, 1100, 11220, 0),
(84, 0, 0, 160, 10, 1150, 11730, 0),
(85, 0, 0, 161, 9, 1150, 9890, 0),
(86, 1010101, 0, 248, -75664, 10, -756640, 0),
(87, 0, 0, 251, -325, 76, -24700, 0),
(89, 0, 787554, 1, 0, 90, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rate_changing`
--

CREATE TABLE `rate_changing` (
  `Company_Code` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `raw_packeging`
--

CREATE TABLE `raw_packeging` (
  `id` int(11) NOT NULL,
  `product_name` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `qty` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `receieve_customer`
--

CREATE TABLE `receieve_customer` (
  `id` int(80) NOT NULL,
  `customer_id` varchar(80) NOT NULL,
  `amount` double NOT NULL,
  `voucher_mode` varchar(80) NOT NULL,
  `remarks` varchar(80) NOT NULL,
  `bank_name` varchar(80) NOT NULL,
  `account_no` double NOT NULL,
  `check_no` double NOT NULL,
  `date` date NOT NULL,
  `voucher_id` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receieve_customer`
--

INSERT INTO `receieve_customer` (`id`, `customer_id`, `amount`, `voucher_mode`, `remarks`, `bank_name`, `account_no`, `check_no`, `date`, `voucher_id`) VALUES
(1, '1', 300, '2', 'dfr', '', 0, 0, '2018-07-10', 0),
(2, '1', 300, '2', 'cool', '', 0, 0, '2018-07-10', 0),
(3, '1', 4000, '2', 'hhhjjg', '', 0, 0, '2018-07-22', 0),
(4, '2', 7000, '2', 'hghgh', '', 0, 0, '2018-07-22', 321841),
(5, '1', 6000, '2', 'good', '', 0, 0, '2018-07-22', 100631),
(6, '1', 1000, '2', 'h', '', 0, 0, '2018-07-22', 118017),
(7, '1', 10000, '2', 'hh', '', 0, 0, '2018-07-22', 744595),
(8, '1', 11088586, '2', 'f', '', 0, 0, '2018-07-22', 202008),
(9, '20', 750, '1', 'gppd', '3', 4455667, 5555555555, '2018-08-01', 7852654),
(10, '20', 7000, '1', 'cool', '3', 4455667, 1122334, '2018-08-01', 87745662),
(11, '20', 75645, '1', '55454', '3', 45454, 0, '2018-08-01', 545454),
(12, '20', 545454, '1', '22121', '3', 12121, 212121, '2018-08-01', 323232),
(13, '20', 555, '2', '5555', '', 0, 0, '2018-08-01', 3232323),
(14, '20', 5000, '', '545454', '', 0, 0, '2018-08-01', 7777),
(15, '20', 44, '2', '444', '', 0, 0, '2018-08-01', 4),
(16, '20', 40500, '2', 'ddddd', '', 0, 0, '2018-08-01', 656565),
(17, '20', 11111, '1', 'fffff', '3', 4455667, 777775552, '2018-08-01', 778855),
(18, '20', 300, '1', '555', '3', 4455667, 111, '2018-08-01', 998791),
(19, '20', 77755566, '1', '5454', '3', 1, 5, '2018-08-01', 5454),
(20, '20', 45454, '1', '5545454', '3', 1, 4455667, '2018-08-01', 45454),
(21, '20', 7000, '1', '545454', '3', 1, 1, '2018-08-01', 4545454);

-- --------------------------------------------------------

--
-- Table structure for table `req_temp`
--

CREATE TABLE `req_temp` (
  `id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `batch_size` int(11) NOT NULL,
  `est_pack_size` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `quantity` int(11) NOT NULL,
  `discount` int(50) NOT NULL
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
  `discount` double NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `uom`
--

CREATE TABLE `uom` (
  `id` int(20) NOT NULL,
  `uom_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uom`
--

INSERT INTO `uom` (`id`, `uom_name`) VALUES
(1, 'BG'),
(2, 'BTL'),
(3, 'CAR'),
(4, 'EA'),
(5, 'GM'),
(6, 'ITM'),
(7, 'JR'),
(8, 'KG'),
(9, 'LTR'),
(10, 'MCG'),
(11, 'MG'),
(12, 'ML'),
(13, 'PCS'),
(14, 'STR'),
(15, 'UNIT');

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
(1, ' Admin User', 'Admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 'no_image.jpg', 1, '2018-08-03 12:04:29'),
(2, 'employee', 'employee', 'caf322f0bbed721eac4a36bf7aff1103079faf25', 2, 'no_image.jpg', 1, '2018-03-09 15:07:17'),
(3, 'Bank', 'Bank', 'bdd240c8fe7174e6ac1cfdd5282de76eb7ad6815', 3, 'no_image.jpg', 1, '2018-03-10 07:00:23'),
(4, 'Expense', 'Expense', '3a85e310858fac24740203d4b8282ad28b2b2ac2', 4, 'no_image.jpg', 1, '2018-03-09 15:05:48'),
(5, 'master_manu', 'master_manu', 'bdd240c8fe7174e6ac1cfdd5282de76eb7ad6815', 5, 'no_image.jpg', 1, '2018-03-07 22:24:31'),
(6, 'customer_master_file', 'customer_master_file', 'bdd240c8fe7174e6ac1cfdd5282de76eb7ad6815', 6, 'no_image.jpg', 1, '2018-03-07 21:50:40'),
(7, 'product_file', 'product_file', 'bdd240c8fe7174e6ac1cfdd5282de76eb7ad6815', 7, 'no_image.jpg', 1, '2018-03-07 22:26:14'),
(8, 'finishes_good_rec', 'finishes_good_rec', 'bdd240c8fe7174e6ac1cfdd5282de76eb7ad6815', 8, 'no_image.jpg', 1, '2018-03-07 22:09:34'),
(9, 'invoice_transaction', 'invoice_transaction', 'bdd240c8fe7174e6ac1cfdd5282de76eb7ad6815', 9, 'no_image.jpg', 1, '2018-03-07 22:27:42'),
(10, 'invoice_return', 'invoice_return', 'bdd240c8fe7174e6ac1cfdd5282de76eb7ad6815', 10, 'no_image.jpg', 1, '2018-03-07 22:27:04'),
(11, 'voucher_transaction', 'voucher_transaction', 'bdd240c8fe7174e6ac1cfdd5282de76eb7ad6815', 11, 'no_image.jpg', 1, '2018-03-10 07:01:27'),
(12, 'lc_transaction', 'lc_transaction', 'bdd240c8fe7174e6ac1cfdd5282de76eb7ad6815', 12, 'no_image.jpg', 1, '2018-03-07 22:26:45'),
(13, 'group_invoice', 'group_invoice', 'bdd240c8fe7174e6ac1cfdd5282de76eb7ad6815', 13, 'no_image.jpg', 1, '2018-03-09 15:08:11');

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
(2, 'employee', 2, 1),
(3, 'bank_manu', 3, 1),
(4, 'expense_manu', 4, 1),
(5, 'master_manu', 5, 1),
(6, 'customer_master_file', 6, 1),
(7, 'product_file', 7, 1),
(8, 'finishes_good_rec', 8, 1),
(9, 'invoice_transaction', 9, 1),
(10, 'invoice_return', 10, 1),
(11, 'voucher_transaction', 11, 1),
(12, 'lc_transaction', 12, 1),
(13, 'group_invoice', 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `vendor_payment`
--

CREATE TABLE `vendor_payment` (
  `id` int(60) NOT NULL,
  `vendor_name` varchar(80) NOT NULL,
  `amount` double NOT NULL,
  `voucher_mode` varchar(50) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `bank_name` varchar(60) NOT NULL,
  `account_no` double NOT NULL,
  `check_no` varchar(60) NOT NULL,
  `date` date NOT NULL,
  `voucher_no` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor_payment`
--

INSERT INTO `vendor_payment` (`id`, `vendor_name`, `amount`, `voucher_mode`, `remarks`, `bank_name`, `account_no`, `check_no`, `date`, `voucher_no`) VALUES
(1, '5', 5000, '1', 'vdlkf', '1', 0, '', '2018-07-10', 0),
(2, '1', 2000, '1', 'cool', '1', 0, '', '2018-07-10', 0),
(3, '15', 6000, '1', 'cool', '1', 0, '', '2018-07-22', 147103),
(4, '15', 4000, '1', 'good', '1', 254548454, '542121878', '2018-07-22', 686367),
(5, '29', 10000000, '1', 'fdfdfd', '3', 1, '545454', '2018-08-01', 566565),
(6, '29', 60000000, '1', 'dfdfd', '3', 1, '2121', '2018-08-01', 330383);

-- --------------------------------------------------------

--
-- Table structure for table `voucher_transaction`
--

CREATE TABLE `voucher_transaction` (
  `voucher_id` int(3) NOT NULL,
  `voucher_name` varchar(100) NOT NULL,
  `voucher_type` int(10) NOT NULL,
  `voucher_mode` int(10) NOT NULL,
  `voucher_cat` int(10) NOT NULL,
  `ven_cus_id` int(10) NOT NULL,
  `amount` int(15) NOT NULL,
  `remarks` varchar(40) NOT NULL,
  `dates` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voucher_transaction`
--

INSERT INTO `voucher_transaction` (`voucher_id`, `voucher_name`, `voucher_type`, `voucher_mode`, `voucher_cat`, `ven_cus_id`, `amount`, `remarks`, `dates`) VALUES
(1, '', 0, 0, 0, 0, 2000, 'not for sale', '2018-03-02'),
(2, '', 2, 1, 1, 12, 60606, 'ass', '2018-03-16'),
(3, '', 1, 1, 1, 2, 22, 'ew', '2018-04-03'),
(4, '', 1, 1, 2, 13, 200, 'hh', '2018-03-09'),
(5, '', 1, 1, 2, 12, 9090, 'wd', '2018-03-21'),
(6, '', 2, 1, 1, 12, 6500, 'assf', '2018-03-01'),
(7, '', 2, 1, 1, 12, 62000, 'asd3', '2018-04-03'),
(8, 'voucher_name', 2, 2, 1, 13, 51000, 'cash on debit', '2018-04-03'),
(9, 'printing voucher', 1, 1, 2, 13, 25000, 'karachi', '2018-03-29'),
(10, 'arydigital', 1, 1, 1, 13, 60000, 'karachi', '2018-03-29'),
(11, 'jaleio', 1, 1, 2, 12, 3456, 'asdifo', '2018-03-29'),
(12, '', 0, 2, 1, 0, 300, '', '2018-07-09'),
(13, '', 0, 2, 2, 0, 4000, '', '2018-07-09'),
(14, '', 0, 2, 2, 5, 500, '', '2018-07-09'),
(15, '', 0, 2, 1, 1, 3000, 'nice', '2018-07-09'),
(16, '', 0, 2, 2, 5, 2555000, 'hgh', '2018-07-09'),
(17, '', 0, 2, 2, 5, 2500, 'bgh', '2018-07-09'),
(18, '', 0, 2, 2, 6, 90000000, '200', '2018-07-09'),
(19, '', 0, 2, 1, 1, 4000, 'nice', '2018-07-09'),
(20, '', 0, 2, 1, 2, 40000, 'vin', '2018-07-09'),
(21, '', 0, 2, 1, 1, 2000, 'ko', '2018-07-09'),
(22, '', 0, 2, 1, 1, 23000, 'jyj', '2018-07-09'),
(23, '', 0, 2, 1, 1, 300, 'hy', '2018-07-09'),
(24, '', 0, 2, 2, 5, 200, 'ju', '2018-07-09'),
(25, '', 0, 1, 0, 5, 5000, 'cdoek', '2018-07-10');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `batch_detail`
--
ALTER TABLE `batch_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`);

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
-- Indexes for table `company_reg`
--
ALTER TABLE `company_reg`
  ADD PRIMARY KEY (`Company_Code`);

--
-- Indexes for table `customer_reg`
--
ALTER TABLE `customer_reg`
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
-- Indexes for table `fnishe_good_rec`
--
ALTER TABLE `fnishe_good_rec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice_detail`
--
ALTER TABLE `invoice_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice_pay`
--
ALTER TABLE `invoice_pay`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `item_formula`
--
ALTER TABLE `item_formula`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_formula_temp`
--
ALTER TABLE `item_formula_temp`
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
-- Indexes for table `new_salesman`
--
ALTER TABLE `new_salesman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ninvoice_return`
--
ALTER TABLE `ninvoice_return`
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
-- Indexes for table `purchase_pay`
--
ALTER TABLE `purchase_pay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_trans`
--
ALTER TABLE `purchase_trans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_trans_detail`
--
ALTER TABLE `purchase_trans_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `raw_packeging`
--
ALTER TABLE `raw_packeging`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receieve_customer`
--
ALTER TABLE `receieve_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `req_temp`
--
ALTER TABLE `req_temp`
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
-- Indexes for table `uom`
--
ALTER TABLE `uom`
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
-- Indexes for table `vendor_payment`
--
ALTER TABLE `vendor_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voucher_transaction`
--
ALTER TABLE `voucher_transaction`
  ADD PRIMARY KEY (`voucher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addaccount`
--
ALTER TABLE `addaccount`
  MODIFY `account_id` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `addbank`
--
ALTER TABLE `addbank`
  MODIFY `bank_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `add_cashamount`
--
ALTER TABLE `add_cashamount`
  MODIFY `amount_id` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `add_chequeamount`
--
ALTER TABLE `add_chequeamount`
  MODIFY `amount_id` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `add_employee`
--
ALTER TABLE `add_employee`
  MODIFY `emp_id` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `batch_detail`
--
ALTER TABLE `batch_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;
--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `city_reg`
--
ALTER TABLE `city_reg`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `cm_addcheque`
--
ALTER TABLE `cm_addcheque`
  MODIFY `cheque_id` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `company_reg`
--
ALTER TABLE `company_reg`
  MODIFY `Company_Code` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `customer_reg`
--
ALTER TABLE `customer_reg`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `exp_id` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `finish_goods`
--
ALTER TABLE `finish_goods`
  MODIFY `trans_no` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fnishe_good_rec`
--
ALTER TABLE `fnishe_good_rec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
--
-- AUTO_INCREMENT for table `invoice_detail`
--
ALTER TABLE `invoice_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `invoice_pay`
--
ALTER TABLE `invoice_pay`
  MODIFY `id` int(80) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `invoice_return`
--
ALTER TABLE `invoice_return`
  MODIFY `invoice_ret_id` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `item_formula`
--
ALTER TABLE `item_formula`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=311;
--
-- AUTO_INCREMENT for table `item_formula_temp`
--
ALTER TABLE `item_formula_temp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lc_details`
--
ALTER TABLE `lc_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lc_transaction`
--
ALTER TABLE `lc_transaction`
  MODIFY `trans_no` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `loanamount`
--
ALTER TABLE `loanamount`
  MODIFY `loan_id` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `newvendor_reg`
--
ALTER TABLE `newvendor_reg`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `new_salesman`
--
ALTER TABLE `new_salesman`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ninvoice_return`
--
ALTER TABLE `ninvoice_return`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `production_file`
--
ALTER TABLE `production_file`
  MODIFY `prod_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `purchase_pay`
--
ALTER TABLE `purchase_pay`
  MODIFY `id` int(80) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `purchase_trans`
--
ALTER TABLE `purchase_trans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=216;
--
-- AUTO_INCREMENT for table `purchase_trans_detail`
--
ALTER TABLE `purchase_trans_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT for table `raw_packeging`
--
ALTER TABLE `raw_packeging`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `receieve_customer`
--
ALTER TABLE `receieve_customer`
  MODIFY `id` int(80) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `req_temp`
--
ALTER TABLE `req_temp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_orderdetail`
--
ALTER TABLE `tbl_orderdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
-- AUTO_INCREMENT for table `uom`
--
ALTER TABLE `uom`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `user_groups`
--
ALTER TABLE `user_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `vendor_payment`
--
ALTER TABLE `vendor_payment`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `voucher_transaction`
--
ALTER TABLE `voucher_transaction`
  MODIFY `voucher_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
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
