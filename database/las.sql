-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 10, 2022 at 12:35 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `las`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `ad_id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_email` varchar(60) NOT NULL,
  `ad_pass` varchar(25) NOT NULL,
  `uploaded_date` varchar(15) NOT NULL,
  PRIMARY KEY (`ad_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`ad_id`, `ad_email`, `ad_pass`, `uploaded_date`) VALUES
(1, 'admin@gmail.com', 'spi12345', '2022-07-06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance`
--

DROP TABLE IF EXISTS `tbl_attendance`;
CREATE TABLE IF NOT EXISTS `tbl_attendance` (
  `attend_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(30) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `entry_time` varchar(20) NOT NULL,
  `exit_time` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`attend_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_attendance`
--

INSERT INTO `tbl_attendance` (`attend_id`, `date`, `mobile`, `entry_time`, `exit_time`, `status`) VALUES
(1, '2022-07-07', '9120009291', '13:30:07', '', 'Present'),
(2, '2022-07-07', '8299167077', '13:30:16', '', 'Present'),
(3, '2022-07-07', '9433243424', '13:30:24', '13:34:01', 'Present'),
(4, '2022-07-07', '8545823983', '13:30:38', '13:33:34', 'Present'),
(5, '2022-07-07', '7889823977', '', '', 'Absent');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fee`
--

DROP TABLE IF EXISTS `tbl_fee`;
CREATE TABLE IF NOT EXISTS `tbl_fee` (
  `fee_id` int(8) NOT NULL AUTO_INCREMENT,
  `mobile` varchar(10) NOT NULL,
  `month_start` varchar(10) NOT NULL,
  `month_end` varchar(10) NOT NULL,
  `amount` varchar(5) NOT NULL,
  `payment_date` varchar(14) NOT NULL,
  `pay_via` varchar(20) NOT NULL,
  PRIMARY KEY (`fee_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_fee`
--

INSERT INTO `tbl_fee` (`fee_id`, `mobile`, `month_start`, `month_end`, `amount`, `payment_date`, `pay_via`) VALUES
(1, '9120009291', '2022-07-07', '2022-08-06', '1000', '2022-07-06', 'cash'),
(2, '8299167077', '2022-07-07', '2022-08-06', '1000', '2022-07-07', 'cash'),
(3, '9829821982', '2022-07-07', '2022-08-06', '1000', '2022-07-07', 'upi'),
(4, '9433243424', '2022-07-07', '2022-08-06', '1000', '2022-07-07', 'upi'),
(5, '8545823983', '2022-07-07', '2022-08-06', '1000', '2022-07-07', 'upi'),
(6, '7889823977', '2022-07-07', '2022-08-06', '1000', '2022-07-07', 'cash');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fee_mgmt`
--

DROP TABLE IF EXISTS `tbl_fee_mgmt`;
CREATE TABLE IF NOT EXISTS `tbl_fee_mgmt` (
  `fee_id` int(6) NOT NULL AUTO_INCREMENT,
  `fee_amt` varchar(5) NOT NULL,
  `uploaded_date` varchar(16) NOT NULL,
  PRIMARY KEY (`fee_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_fee_mgmt`
--

INSERT INTO `tbl_fee_mgmt` (`fee_id`, `fee_amt`, `uploaded_date`) VALUES
(1, '1000', '2022-07-07'),
(2, '1000', '2022-07-10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fee_status`
--

DROP TABLE IF EXISTS `tbl_fee_status`;
CREATE TABLE IF NOT EXISTS `tbl_fee_status` (
  `fs_id` int(11) NOT NULL AUTO_INCREMENT,
  `fs_mobile` varchar(12) NOT NULL,
  `fs_month_start` varchar(20) NOT NULL,
  `fs_month_end` varchar(20) NOT NULL,
  `fs_amount` varchar(10) NOT NULL,
  PRIMARY KEY (`fs_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_fee_status`
--

INSERT INTO `tbl_fee_status` (`fs_id`, `fs_mobile`, `fs_month_start`, `fs_month_end`, `fs_amount`) VALUES
(1, '9120009291', '2022-07-07', '2022-08-06', '1000'),
(2, '8299167077', '2022-07-07', '2022-08-06', '1000'),
(5, '8545823983', '2022-07-07', '2022-08-06', '1000'),
(4, '9433243424', '2022-07-07', '2022-08-06', '1000'),
(6, '7889823977', '2022-07-07', '2022-08-06', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student_details`
--

DROP TABLE IF EXISTS `tbl_student_details`;
CREATE TABLE IF NOT EXISTS `tbl_student_details` (
  `stu_id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dob` varchar(12) NOT NULL,
  `present_address` varchar(120) NOT NULL,
  `permanent_address` varchar(120) NOT NULL,
  `pic` varchar(60) NOT NULL,
  `aadhar` varchar(12) NOT NULL,
  `aadhar_pic` varchar(30) NOT NULL,
  `fee` varchar(5) NOT NULL,
  `pay_method` varchar(15) NOT NULL,
  `enroll_date` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`stu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student_details`
--

INSERT INTO `tbl_student_details` (`stu_id`, `name`, `mobile`, `email`, `gender`, `dob`, `present_address`, `permanent_address`, `pic`, `aadhar`, `aadhar_pic`, `fee`, `pay_method`, `enroll_date`, `status`) VALUES
(1, 'Stuti Srivastava', '9120009291', 'softprostuti@gmail.com', 'female', '2022-02-08', 'Lko', 'Lko', 'Stuti Srivastava2462.png', '982189218921', 'Stuti Srivastava-logo.png', '1000', 'cash', '2022-07-07', 'T'),
(2, 'Ravi Gupta', '8299167077', 'softproravi@gmail.com', 'male', '2022-02-08', 'Lko', 'Lko', 'Ravi Gupta7561.png', '982189218921', 'Ravi Gupta-form_img.jpg', '1000', 'cash', '2022-07-07', 'T'),
(3, 'Anaf Farzan', '9829821982', 'softproanaf@gmail.com', 'male', '2022-02-08', 'Lko', 'Lko', 'Anaf Farzan5831.png', '830219039020', 'Anaf Farzan-ee.jpeg', '1000', 'upi', '2022-07-07', 'F'),
(4, 'Aditya Pandey', '9433243424', 'softproaditya@gmail.com', 'male', '2021-08-17', 'Lko', 'Lko', 'Aditya Pandey1261.png', '243234441231', 'Aditya Pandey-civil.jpeg', '1000', 'upi', '2022-07-07', 'T'),
(5, 'Riya Srivastava', '8545823983', 'riya209sri@gmail.com', 'female', '2022-01-05', 'Faizabad', 'Faizabad', 'Riya Srivastava3012.png', '904329093429', 'Riya Srivastava-civil.jpeg', '1000', 'upi', '2022-07-07', 'T'),
(6, 'Shiva Gupta', '7889823977', 'ravi2611gupta@gmail.com', 'male', '2021-08-11', 'Lakhimpur', 'Lakhimpur', 'Shiva Gupta1271.png', '234234234429', 'Shiva Gupta-cs.jpeg', '1000', 'cash', '2022-07-07', 'T');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
