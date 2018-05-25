-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2018 at 08:21 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `classmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `id` int(11) NOT NULL,
  `batch_name` varchar(255) NOT NULL,
  `batch_start_date` date NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted` int(2) NOT NULL,
  `deleted_at` datetime NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `batch_contains_subject`
--

CREATE TABLE `batch_contains_subject` (
  `id` int(11) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `id` int(11) NOT NULL,
  `branch_code` varchar(5) NOT NULL,
  `branch_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted` int(2) NOT NULL,
  `deleted_at` datetime NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`id`, `branch_code`, `branch_name`, `created_at`, `updated_at`, `updated_by`, `deleted`, `deleted_at`, `deleted_by`) VALUES
(1, 'IF', 'Information Technology', '2018-03-04 12:33:14', '2018-03-04 02:27:42', 1, 1, '2018-03-04 03:44:21', 1),
(3, 'CO', 'Computer Engineering', '2018-03-04 01:08:10', '2018-03-04 01:08:10', 1, 1, '2018-03-04 03:55:23', 1),
(4, 'CM', 'Computer Technology', '2018-03-04 01:44:25', '2018-03-04 01:44:25', 1, 0, '0000-00-00 00:00:00', 0),
(5, 'CO', 'Computer Engineering', '2018-03-11 12:49:44', '2018-03-11 12:49:59', 1, 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cheque`
--

CREATE TABLE `cheque` (
  `id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `cheque_number` int(6) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `bank_branch` varchar(255) NOT NULL,
  `cheque_status` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted` int(2) NOT NULL,
  `deleted_at` datetime NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cheque_status`
--

CREATE TABLE `cheque_status` (
  `id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cheque_status`
--

INSERT INTO `cheque_status` (`id`, `status`) VALUES
(1, 'Deposited'),
(2, 'Cleared'),
(3, 'Not Deposited'),
(4, 'Returned/Bounced');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `student_first_name` varchar(255) NOT NULL,
  `student_last_name` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_number` varchar(12) NOT NULL,
  `student_branch` int(2) NOT NULL,
  `student_sem` int(2) NOT NULL,
  `stream` int(11) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `date_of_enquiry` date NOT NULL,
  `comments` text NOT NULL,
  `handeled_by` int(11) NOT NULL,
  `college_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted` int(2) NOT NULL,
  `deleted_at` datetime NOT NULL,
  `deleted_by` int(11) NOT NULL,
  `admitted` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enrolls`
--

CREATE TABLE `enrolls` (
  `id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `GSTIN` varchar(255) NOT NULL,
  `bill_amount` varchar(255) NOT NULL,
  `cgst` varchar(255) NOT NULL,
  `sgst` varchar(255) NOT NULL,
  `igst` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted` int(2) NOT NULL,
  `deleted_at` datetime NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `faculty_first_name` varchar(255) NOT NULL,
  `faculty_last_name` varchar(255) NOT NULL,
  `faculty_dob` date NOT NULL,
  `faculty_number` varchar(12) NOT NULL,
  `faculty_email` varchar(255) NOT NULL,
  `faculty_qualification` varchar(255) NOT NULL,
  `faculty_type` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted` int(2) NOT NULL,
  `deleted_at` datetime NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_attendance`
--

CREATE TABLE `faculty_attendance` (
  `id` int(11) NOT NULL,
  `lecture_id` int(11) NOT NULL,
  `in_time` time NOT NULL,
  `out_time` time NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted` int(2) NOT NULL,
  `deleted_at` datetime NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `id` int(11) NOT NULL,
  `enroll_id` int(11) NOT NULL,
  `total_fees` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `follow_up`
--

CREATE TABLE `follow_up` (
  `id` int(11) NOT NULL,
  `enquiry_id` int(11) NOT NULL,
  `follow_up_activity` varchar(255) NOT NULL,
  `follow_up_date` date NOT NULL,
  `comments` text NOT NULL,
  `follow_up_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted` int(2) NOT NULL,
  `deleted_at` datetime NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `follow_up_request`
--

CREATE TABLE `follow_up_request` (
  `id` int(11) NOT NULL,
  `enquiry_id` int(11) NOT NULL,
  `follow_up_date` date NOT NULL,
  `follow_up_activity` varchar(255) NOT NULL,
  `follow_up_by` int(11) NOT NULL,
  `comments` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted` int(2) NOT NULL,
  `deleted_at` datetime NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gaurdian`
--

CREATE TABLE `gaurdian` (
  `id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gaurdian`
--

INSERT INTO `gaurdian` (`id`, `sid`, `pid`) VALUES
(1, 3, 3),
(2, 3, 4),
(3, 4, 5),
(4, 4, 6),
(5, 5, 7),
(6, 5, 8),
(7, 6, 9),
(8, 6, 10),
(9, 7, 11),
(10, 7, 12),
(11, 8, 13),
(12, 8, 14),
(13, 9, 15),
(14, 9, 16),
(15, 10, 17),
(16, 10, 18),
(17, 11, 19),
(18, 11, 20),
(19, 12, 21),
(20, 12, 22);

-- --------------------------------------------------------

--
-- Table structure for table `lecture`
--

CREATE TABLE `lecture` (
  `id` int(11) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `date_of_lec` date NOT NULL,
  `faculty_incharge` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted` int(2) NOT NULL,
  `deleted_at` datetime NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `member_name` varchar(255) NOT NULL,
  `member_email` varchar(255) NOT NULL,
  `member_password` varchar(255) NOT NULL,
  `member_role` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `member_name`, `member_email`, `member_password`, `member_role`, `created_at`, `updated_at`) VALUES
(1, 'Nikhil', 'nikhilshadija2@gmail.com', 'nikhil', 'admin', '2018-01-28 06:40:07', '2018-01-28 00:00:00'),
(2, 'Jaynam', 'jaynam@gmail.com', 'jaynam', 'admin', '2018-03-11 18:45:54', '2018-03-11 18:45:54');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `pid` int(11) NOT NULL,
  `parent_first_name` varchar(255) NOT NULL,
  `parent_number` varchar(12) NOT NULL,
  `parent_email` varchar(255) NOT NULL,
  `parent_gender` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted` int(2) NOT NULL,
  `deleted_at` datetime NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`pid`, `parent_first_name`, `parent_number`, `parent_email`, `parent_gender`, `created_by`, `created_at`, `updated_at`, `updated_by`, `deleted`, `deleted_at`, `deleted_by`) VALUES
(3, 'Ashok', '9777900981', 'ashokc@gmail.com', 'Male', 0, '2018-02-04 03:22:34', '2018-03-11 04:23:14', 1, 0, '0000-00-00 00:00:00', 0),
(4, 'Kusum', '9878097989', 'kusum@gmail.com', 'Female', 0, '2018-02-04 03:22:34', '2018-03-11 04:23:14', 1, 0, '0000-00-00 00:00:00', 0),
(5, 'Jaynam', '9821224563', 'jayu@gmail.com', 'Male', 0, '2018-02-04 03:28:48', '2018-03-11 04:20:11', 1, 0, '0000-00-00 00:00:00', 0),
(6, 'Hiral', '8743093747', 'hiral@gmail.com', 'Female', 0, '2018-02-04 03:28:48', '2018-03-11 04:20:11', 1, 0, '0000-00-00 00:00:00', 0),
(7, 'Vinod', '9891028923', 'vinod@gmail.com', 'Male', 0, '2018-02-18 11:44:19', '2018-02-18 11:44:19', 1, 1, '2018-02-18 03:26:14', 1),
(8, 'ABC', '8374982390', 'abc@gmail.com', 'Female', 0, '2018-02-18 11:44:19', '2018-02-18 11:44:19', 1, 1, '2018-02-18 03:26:14', 1),
(9, 'Kalyan', '9920744122', 'shadikala@gmail.com', 'Male', 0, '2018-02-18 03:28:08', '2018-02-18 03:28:08', 1, 1, '2018-02-19 07:08:44', 1),
(10, 'Manisha', '9123713112', 'man@gmail.com', 'Female', 0, '2018-02-18 03:28:08', '2018-02-18 03:28:08', 1, 1, '2018-02-19 07:08:44', 1),
(11, 'kkk', '1231432423', 'aS@fmas.c', 'Male', 0, '2018-02-25 11:46:09', '2018-02-25 11:46:09', 1, 1, '2018-02-25 11:48:35', 1),
(12, 'Nianfh', '4985734365', 'akjha@ajnfh.cjia', 'Female', 0, '2018-02-25 11:46:09', '2018-02-25 11:46:09', 1, 1, '2018-02-25 11:48:35', 1),
(13, 'sarjuparikh', '9876543355', 'sarju@gmail.com', 'Male', 0, '2018-03-04 11:02:02', '2018-03-04 11:02:02', 1, 1, '2018-03-04 11:42:33', 1),
(14, 'swati', '98765432', 'swati@gmail.com', 'Female', 0, '2018-03-04 11:02:02', '2018-03-04 11:02:02', 1, 1, '2018-03-04 11:42:33', 1),
(15, 'Dad', '8932781009', 'dad@gmail.com', 'Male', 0, '2018-03-11 12:29:44', '2018-03-11 12:29:44', 1, 0, '0000-00-00 00:00:00', 0),
(16, 'Mom', '8937461934', 'mom@gmail.com', 'Female', 0, '2018-03-11 12:29:44', '2018-03-11 12:29:44', 1, 0, '0000-00-00 00:00:00', 0),
(17, 'Dad', '8746231234', 'dad@gmail.com', 'Male', 0, '2018-03-11 12:32:52', '2018-03-11 12:33:25', 1, 0, '0000-00-00 00:00:00', 0),
(18, 'Mom', '8347625421', 'mom@gmail.com', 'Female', 0, '2018-03-11 12:32:53', '2018-03-11 12:33:25', 1, 0, '0000-00-00 00:00:00', 0),
(19, 'Dad', '9827361232', 'dad@gmail.com', 'Male', 0, '2018-03-11 02:34:36', '2018-03-11 02:34:36', 1, 0, '0000-00-00 00:00:00', 0),
(20, 'Mom', '9384701232', 'mom@gmail.com', 'Female', 0, '2018-03-11 02:34:36', '2018-03-11 02:34:36', 1, 0, '0000-00-00 00:00:00', 0),
(21, 'Dad', '9387426123', 'dad@gmail.com', 'Male', 0, '2018-03-11 02:39:53', '2018-03-11 02:39:53', 1, 0, '0000-00-00 00:00:00', 0),
(22, 'Mo', '8276441231', 'mo@gmail.com', 'Female', 0, '2018-03-11 02:39:53', '2018-03-11 02:39:53', 1, 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `enroll_id` int(11) NOT NULL,
  `payment_no` int(11) NOT NULL,
  `payment_amount` varchar(255) NOT NULL,
  `payment_mode` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted` int(2) NOT NULL,
  `deleted_at` datetime NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `sem` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted` int(2) NOT NULL,
  `deleted_at` datetime NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stream`
--

CREATE TABLE `stream` (
  `id` int(11) NOT NULL,
  `stream_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted` int(2) NOT NULL,
  `deleted_at` datetime NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` int(11) NOT NULL,
  `student_first_name` varchar(255) NOT NULL,
  `student_last_name` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_number` varchar(10) NOT NULL,
  `student_address` text NOT NULL,
  `student_branch` int(11) NOT NULL,
  `student_dob` date NOT NULL,
  `student_college` varchar(255) NOT NULL,
  `student_gender` varchar(255) NOT NULL,
  `stream_id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted` int(2) NOT NULL,
  `deleted_at` datetime NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `student_first_name`, `student_last_name`, `student_email`, `student_number`, `student_address`, `student_branch`, `student_dob`, `student_college`, `student_gender`, `stream_id`, `created_by`, `created_at`, `updated_at`, `updated_by`, `deleted`, `deleted_at`, `deleted_by`) VALUES
(1, 'Nikhil', 'Shadija', 'nikhil@gmail.com', '9090909090', 'Ulhas', 1, '1998-08-20', 'TSEC', 'Male', 1, 1, '2018-02-04 01:56:31', '2018-02-04 01:56:31', 1, 1, '2018-02-18 03:16:10', 1),
(3, 'Dhiren', 'Chotwani', 'dhiren@gmail.com', '9890909890', 'Ulhasnagar', 1, '1998-05-16', 'VESIT', 'Male', 1, 1, '2018-02-04 03:22:34', '2018-03-11 04:23:14', 1, 0, '0000-00-00 00:00:00', 0),
(4, 'Ashutosh', 'Tambe', 'ashu@gmail.com', '9827610980', 'Ghatkopar', 1, '1998-10-07', 'Somaiya ', 'Male', 1, 2, '2018-02-04 03:28:48', '2018-03-11 04:20:11', 1, 0, '0000-00-00 00:00:00', 0),
(5, 'Vishal', 'Deshpande', 'vishal@gmail.com', '9899129881', 'Kopar', 1, '1998-10-01', 'Father Agnel', 'Male', 1, 2, '2018-02-18 11:44:19', '2018-02-18 11:44:19', 1, 1, '2018-02-18 03:26:14', 1),
(6, 'Nikhil', 'Shadija', 'nikhilshadija2@gmail.com', '7666689907', '403,Putli Apt,Nr. Gursangat Darbar,Section-27', 1, '1998-08-20', 'TSEC', 'Male', 1, 2, '2018-02-18 03:28:08', '2018-02-18 03:28:08', 1, 1, '2018-02-19 07:08:44', 1),
(7, 'Nikhil', 'Shadija', 'nikhilshadija3@gmail.com', '9829100991', '403,Putli Apt,Nr. Gursangat Darbar,Section-27', 1, '1998-05-16', 'asas', 'Male', 2, 1, '2018-02-25 11:46:09', '2018-02-25 11:46:09', 1, 1, '2018-02-25 11:48:35', 1),
(8, 'aARVI', 'Thakkar', 'arvi@gmail.com', '0987654321', 'Mulund', 0, '0000-00-00', 'KJ Somaiya', 'Female', 0, 1, '2018-03-04 11:02:02', '2018-03-04 11:02:02', 1, 1, '2018-03-04 11:42:33', 1),
(9, 'Nikhil', 'Shadija', 'nikhilshadija2@gmail.com', '7666689907', 'Ulhasnagar', 1, '1998-08-20', 'TSEC', 'Male', 1, 1, '2018-03-11 12:29:44', '2018-03-11 12:29:44', 1, 0, '0000-00-00 00:00:00', 0),
(10, 'Suraj', 'Kakad', 'suraj@gmail.com', '8376234561', 'Worli', 1, '1998-07-02', 'RGIT', 'Male', 1, 2, '2018-03-11 12:32:52', '2018-03-11 12:33:25', 1, 0, '0000-00-00 00:00:00', 0),
(11, 'Jaynam', 'Sanghavi', 'jaynam@gmail.com', '8374691237', 'Mulund', 1, '1998-07-15', 'KJ Somaiya', 'Male', 1, 1, '2018-03-11 02:34:36', '2018-03-11 02:34:36', 1, 0, '0000-00-00 00:00:00', 0),
(12, 'Bhavesh', 'Changlani', 'bhavesh@gmail.com', '9374612736', 'Ulhasnagar', 1, '1998-05-18', 'TSEC', 'Male', 1, 2, '2018-03-11 02:39:53', '2018-03-11 02:39:53', 2, 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_attendance`
--

CREATE TABLE `student_attendance` (
  `id` int(11) NOT NULL,
  `lecture_id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `is_absent` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted` int(2) NOT NULL,
  `deleted_at` datetime NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `subject_fees` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted` int(2) NOT NULL,
  `deleted_at` datetime NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject_name`, `subject_fees`, `created_at`, `updated_at`, `updated_by`, `deleted`, `deleted_at`, `deleted_by`) VALUES
(1, 'Advanced Java', '7500', '2018-03-05 07:19:50', '2018-03-11 01:42:53', 1, 0, '0000-00-00 00:00:00', 0),
(2, 'Java', '4500', '2018-03-05 07:20:00', '2018-03-05 07:20:00', 1, 1, '2018-03-05 07:20:34', 1),
(3, 'Web Development', '16000', '2018-03-05 07:20:14', '2018-03-05 07:20:14', 1, 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subject_enroll`
--

CREATE TABLE `subject_enroll` (
  `id` int(11) NOT NULL,
  `enroll_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `discount_amount` varchar(255) NOT NULL,
  `discount_description` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teaches`
--

CREATE TABLE `teaches` (
  `id` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `rate_type` int(2) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted` int(2) NOT NULL,
  `deleted_at` datetime NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `test_description` text NOT NULL,
  `supervisor_incharge` int(11) NOT NULL,
  `test_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `total_marks` int(5) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted` int(11) NOT NULL,
  `deleted_at` datetime NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test_marks`
--

CREATE TABLE `test_marks` (
  `id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `marks_obtained` int(5) NOT NULL,
  `remarks` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted` int(2) NOT NULL,
  `deleted_at` datetime NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `topics_taught`
--

CREATE TABLE `topics_taught` (
  `id` int(11) NOT NULL,
  `lecture_id` int(11) NOT NULL,
  `topics` mediumtext NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted` int(2) NOT NULL,
  `deleted_at` datetime NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `batch_contains_subject`
--
ALTER TABLE `batch_contains_subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cheque`
--
ALTER TABLE `cheque`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cheque_status`
--
ALTER TABLE `cheque_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrolls`
--
ALTER TABLE `enrolls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty_attendance`
--
ALTER TABLE `faculty_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `follow_up`
--
ALTER TABLE `follow_up`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `follow_up_request`
--
ALTER TABLE `follow_up_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gaurdian`
--
ALTER TABLE `gaurdian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecture`
--
ALTER TABLE `lecture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stream`
--
ALTER TABLE `stream`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `student_attendance`
--
ALTER TABLE `student_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teaches`
--
ALTER TABLE `teaches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_marks`
--
ALTER TABLE `test_marks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `batch_contains_subject`
--
ALTER TABLE `batch_contains_subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `cheque`
--
ALTER TABLE `cheque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cheque_status`
--
ALTER TABLE `cheque_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `enrolls`
--
ALTER TABLE `enrolls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `faculty_attendance`
--
ALTER TABLE `faculty_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `follow_up`
--
ALTER TABLE `follow_up`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `follow_up_request`
--
ALTER TABLE `follow_up_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gaurdian`
--
ALTER TABLE `gaurdian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `lecture`
--
ALTER TABLE `lecture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stream`
--
ALTER TABLE `stream`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `student_attendance`
--
ALTER TABLE `student_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `teaches`
--
ALTER TABLE `teaches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `test_marks`
--
ALTER TABLE `test_marks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
