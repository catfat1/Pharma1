-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 22, 2018 at 09:57 AM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.0.26-2+ubuntu16.04.1+deb.sury.org+2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacovigilance`
--

-- --------------------------------------------------------

--
-- Table structure for table `adr`
--

CREATE TABLE `adr` (
  `adr_id` int(11) NOT NULL,
  `adr_report_id` int(11) NOT NULL,
  `adr_patient_id` int(11) DEFAULT NULL,
  `adr_reaction_pt` varchar(250) DEFAULT NULL,
  `adr_reaction` varchar(255) NOT NULL,
  `adr_soc` varchar(250) DEFAULT NULL,
  `adr_date_start` varchar(255) DEFAULT NULL,
  `adr_dechallenge` varchar(250) DEFAULT NULL,
  `adr_serious` varchar(250) DEFAULT NULL,
  `adr_expectedness` varchar(250) DEFAULT NULL,
  `adr_reaction_outcome_id` int(11) DEFAULT NULL,
  `adr_comment` varchar(250) DEFAULT NULL,
  `adr_reaction_llt` varchar(250) DEFAULT NULL,
  `adr_time_from_drag` varchar(250) DEFAULT NULL,
  `adr_date_stop` varchar(255) DEFAULT NULL,
  `adr_rechallenge` varchar(250) DEFAULT NULL,
  `adr_seriousenecy_act_id` int(11) DEFAULT NULL,
  `adr_consality_id` int(250) DEFAULT NULL,
  `adr_status` varchar(250) DEFAULT NULL,
  `adr_end_date` date DEFAULT NULL,
  `adr_company_id` int(11) DEFAULT NULL,
  `adr_branch_id` int(11) DEFAULT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `create_by` int(11) DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `delete_at` datetime DEFAULT NULL,
  `delete_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adr`
--

INSERT INTO `adr` (`adr_id`, `adr_report_id`, `adr_patient_id`, `adr_reaction_pt`, `adr_reaction`, `adr_soc`, `adr_date_start`, `adr_dechallenge`, `adr_serious`, `adr_expectedness`, `adr_reaction_outcome_id`, `adr_comment`, `adr_reaction_llt`, `adr_time_from_drag`, `adr_date_stop`, `adr_rechallenge`, `adr_seriousenecy_act_id`, `adr_consality_id`, `adr_status`, `adr_end_date`, `adr_company_id`, `adr_branch_id`, `create_at`, `create_by`, `update_at`, `update_by`, `delete_at`, `delete_by`) VALUES
(1, 70, NULL, NULL, '111111111111111111111', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-18 14:56:33', NULL, NULL, NULL, NULL, NULL),
(2, 70, NULL, NULL, '151234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-18 15:01:38', NULL, NULL, NULL, NULL, NULL),
(3, 70, NULL, NULL, '11111111111', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-18 15:03:27', NULL, NULL, NULL, NULL, NULL),
(4, 70, NULL, 'd', 'ddd', 'd', '2018-01-10', NULL, NULL, NULL, NULL, 'ddddddddddddddddddd', 'd', 'd', '2018-01-09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-18 15:18:31', NULL, NULL, NULL, NULL, NULL),
(5, 71, NULL, '', '11111111111111111111111111111222222222', '', '', NULL, NULL, NULL, NULL, 'Add Comment Here', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-18 16:17:24', NULL, NULL, NULL, NULL, NULL),
(6, 72, NULL, '', 'aaaaaaaaaa', '', '', NULL, NULL, NULL, NULL, 'Add Comment Here', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-22 08:30:41', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `age_group`
--

CREATE TABLE `age_group` (
  `age_group_id` int(11) NOT NULL,
  `age_group_desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `age_group`
--

INSERT INTO `age_group` (`age_group_id`, `age_group_desc`) VALUES
(4, 'Adolescent(12-18 Years)'),
(5, 'Adult(>18-70 Years)'),
(3, 'Child(2-12 Years)'),
(0, 'Choose'),
(6, 'Elderly(>70 Years)'),
(2, 'Infant(1-24 Months)'),
(1, 'Neonate');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branch_id` int(11) NOT NULL,
  `branch_company_id` int(11) NOT NULL,
  `branch_code` varchar(50) NOT NULL,
  `branch_desca` varchar(250) DEFAULT NULL,
  `branch_descl` varchar(250) DEFAULT NULL,
  `branch_end_date` date DEFAULT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `create_by` int(11) NOT NULL,
  `update_at` datetime DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `delete_at` datetime DEFAULT NULL,
  `delete_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `branch_company_id`, `branch_code`, `branch_desca`, `branch_descl`, `branch_end_date`, `create_at`, `create_by`, `update_at`, `update_by`, `delete_at`, `delete_by`) VALUES
(1, 1, '1', NULL, NULL, NULL, '2018-01-15 10:51:48', 1, NULL, NULL, '2018-01-18 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL,
  `company_code` varchar(50) NOT NULL,
  `company_desca` varchar(250) DEFAULT NULL,
  `company_descl` varchar(250) DEFAULT NULL,
  `company_end_date` date DEFAULT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `create_by` int(11) NOT NULL,
  `update_at` datetime DEFAULT NULL,
  `update_by` int(11) NOT NULL,
  `delete_at` datetime DEFAULT NULL,
  `delete_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_code`, `company_desca`, `company_descl`, `company_end_date`, `create_at`, `create_by`, `update_at`, `update_by`, `delete_at`, `delete_by`) VALUES
(1, '1', 'eepi', NULL, NULL, '2018-01-15 10:50:22', 1, NULL, 1, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `concomitant_drug`
--

CREATE TABLE `concomitant_drug` (
  `con_id` int(11) NOT NULL,
  `con_report_id` int(11) NOT NULL,
  `con_name` varchar(250) DEFAULT NULL,
  `con_suspected_drug_inn` varchar(250) DEFAULT NULL,
  `con_concentrate` varchar(250) DEFAULT NULL,
  `con_route_id` int(11) DEFAULT NULL,
  `con_indiation` varchar(250) DEFAULT NULL,
  `con_date_start` varchar(255) DEFAULT NULL,
  `con_status` varchar(250) DEFAULT NULL,
  `con_drug` varchar(250) DEFAULT NULL,
  `con_atc_code` varchar(250) DEFAULT NULL,
  `con_dosage_form_id` int(11) DEFAULT NULL,
  `cone_dose` varchar(250) DEFAULT NULL,
  `con_duration` varchar(250) DEFAULT NULL,
  `con_drug_class` varchar(250) DEFAULT NULL,
  `con_date_stop` varchar(255) DEFAULT NULL,
  `con_batch_no` varchar(250) DEFAULT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `create_by` int(11) DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `delete_at` datetime DEFAULT NULL,
  `delete_by` int(11) DEFAULT NULL,
  `con_end_date` date DEFAULT NULL,
  `con_company_id` int(11) DEFAULT NULL,
  `con_branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `concomitant_drug`
--

INSERT INTO `concomitant_drug` (`con_id`, `con_report_id`, `con_name`, `con_suspected_drug_inn`, `con_concentrate`, `con_route_id`, `con_indiation`, `con_date_start`, `con_status`, `con_drug`, `con_atc_code`, `con_dosage_form_id`, `cone_dose`, `con_duration`, `con_drug_class`, `con_date_stop`, `con_batch_no`, `create_at`, `create_by`, `update_at`, `update_by`, `delete_at`, `delete_by`, `con_end_date`, `con_company_id`, `con_branch_id`) VALUES
(1, 32, 'gf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-15 11:36:23', 1, NULL, 1, NULL, 1, NULL, 1, 1),
(2, 59, 'ssssshoby', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-17 16:15:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 60, '1111', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-18 10:24:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 61, 'eeeeeeee', 'eeeeeeeeee', 'eeee', 1, 'ee', '2018-01-17', '1', NULL, 'eeeeeeeeeeeeeeeee', 1, 'eeeee', '25', '25', '2018-01-31', 'ee', '2018-01-18 10:55:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 62, '55555555', '', '', 0, '', '', '0', NULL, '', 0, '', '', '', '', '', '2018-01-18 11:02:29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `consality`
--

CREATE TABLE `consality` (
  `consality_id` int(11) NOT NULL,
  `consality_desc` varchar(250) NOT NULL,
  `consality_company_id` int(11) NOT NULL,
  `consality_branch_id` int(11) NOT NULL,
  `consality_end_date` int(11) DEFAULT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `create_by` int(11) NOT NULL,
  `update_at` datetime DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `delete_at` datetime DEFAULT NULL,
  `delete_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `dosage`
--

CREATE TABLE `dosage` (
  `dosage_id` int(11) NOT NULL,
  `dosage_desc` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dosage`
--

INSERT INTO `dosage` (`dosage_id`, `dosage_desc`) VALUES
(5, 'Ampoules'),
(1, 'Capsule'),
(0, 'Choose'),
(7, 'Local Cream'),
(9, 'Local Liquid'),
(8, 'Local ointment'),
(3, 'Oral Liquid'),
(10, 'Others'),
(4, 'Suppositories'),
(2, 'Tablet'),
(6, 'vials');

-- --------------------------------------------------------

--
-- Table structure for table `dosage_class`
--

CREATE TABLE `dosage_class` (
  `dosage_class_id` int(11) NOT NULL,
  `dosage_class_desc` varchar(250) NOT NULL,
  `dosage_class_company_id` int(11) NOT NULL,
  `dosage_class_branch_id` int(11) NOT NULL,
  `dosage_class_end_date` int(11) DEFAULT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `create_by` int(11) NOT NULL,
  `update_at` datetime DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `delete_at` datetime DEFAULT NULL,
  `delete_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `drugs`
--

CREATE TABLE `drugs` (
  `drug_id` int(11) NOT NULL,
  `drug_code` varchar(250) NOT NULL,
  `drug_desc` varchar(250) NOT NULL,
  `drug_line` varchar(250) NOT NULL,
  `drug_company_id` int(11) NOT NULL,
  `drug_branch_id` int(11) NOT NULL,
  `drug_end_date` date DEFAULT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `create_by` int(11) NOT NULL,
  `update_at` datetime DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `delete_at` datetime DEFAULT NULL,
  `delete_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `drugs`
--

INSERT INTO `drugs` (`drug_id`, `drug_code`, `drug_desc`, `drug_line`, `drug_company_id`, `drug_branch_id`, `drug_end_date`, `create_at`, `create_by`, `update_at`, `update_by`, `delete_at`, `delete_by`) VALUES
(1, '1', 'DEXA', '1', 1, 1, NULL, '2018-01-15 10:48:10', 1, NULL, 1, NULL, 1),
(2, '122', 'KETOVAN', '', 1, 1, NULL, '2018-01-17 11:59:11', 1, NULL, 1, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `drug_class`
--

CREATE TABLE `drug_class` (
  `drug_class_id` int(11) NOT NULL,
  `drug_class_desc` varchar(250) NOT NULL,
  `drug_class_company_id` int(11) NOT NULL,
  `drug_class_branch_is` int(11) NOT NULL,
  `drug_class_end_date` date DEFAULT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `create_by` int(11) NOT NULL,
  `update_at` datetime DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `delete_at` datetime DEFAULT NULL,
  `delete_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `drug_route`
--

CREATE TABLE `drug_route` (
  `drug_route_id` int(11) NOT NULL,
  `drug_route_desc` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `drug_route`
--

INSERT INTO `drug_route` (`drug_route_id`, `drug_route_desc`) VALUES
(2, 'Buccal'),
(0, 'Choose'),
(8, 'Intradermal'),
(5, 'Intramuscular'),
(6, 'Intravenous'),
(4, 'Nasal'),
(1, 'Oral'),
(9, 'Others'),
(3, 'Otic'),
(7, 'Subcutaneous');

-- --------------------------------------------------------

--
-- Table structure for table `drug_status`
--

CREATE TABLE `drug_status` (
  `drug_status_id` int(11) NOT NULL,
  `drug_status_desc` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `drug_status`
--

INSERT INTO `drug_status` (`drug_status_id`, `drug_status_desc`) VALUES
(2, 'Cancel'),
(0, 'Choose'),
(1, 'Normal');

-- --------------------------------------------------------

--
-- Table structure for table `laboratory`
--

CREATE TABLE `laboratory` (
  `lab_id` int(11) NOT NULL,
  `lab_report_id` int(11) NOT NULL,
  `lab_name` varchar(250) DEFAULT NULL,
  `lab_result` varchar(250) DEFAULT NULL,
  `lab_status_id` int(11) DEFAULT NULL,
  `lab_date` varchar(255) DEFAULT NULL,
  `lab_result_action_id` int(11) DEFAULT NULL,
  `lab_reference_range` varchar(250) DEFAULT NULL,
  `lab_medra` varchar(250) DEFAULT NULL,
  `lab_end_date` varchar(255) DEFAULT NULL,
  `lab_company_id` int(11) DEFAULT NULL,
  `lab_branch_id` int(11) DEFAULT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `create_by` int(11) DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `delete_at` datetime DEFAULT NULL,
  `delete_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `laboratory`
--

INSERT INTO `laboratory` (`lab_id`, `lab_report_id`, `lab_name`, `lab_result`, `lab_status_id`, `lab_date`, `lab_result_action_id`, `lab_reference_range`, `lab_medra`, `lab_end_date`, `lab_company_id`, `lab_branch_id`, `create_at`, `create_by`, `update_at`, `update_by`, `delete_at`, `delete_by`) VALUES
(1, 32, 'lab test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2018-01-15 12:09:16', 1, NULL, 1, NULL, 1),
(2, 76, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-22 08:51:00', NULL, NULL, NULL, NULL, NULL),
(3, 78, 'fdfffddddddddddddddsf', '', 0, '', 0, '', '', NULL, NULL, NULL, '2018-01-22 09:09:40', NULL, NULL, NULL, NULL, NULL),
(4, 78, '0', 'DFD', 1, '2018-01-22', 1, 'fAFD', 'sdff', NULL, NULL, NULL, '2018-01-22 09:10:03', NULL, NULL, NULL, NULL, NULL),
(5, 78, '0', 'saddf', 2, '2018-01-22', 2, 'dasda', 'sdddddddaF', NULL, NULL, NULL, '2018-01-22 09:19:53', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lab_result_action`
--

CREATE TABLE `lab_result_action` (
  `lab_result_action_id` int(11) NOT NULL,
  `lab_result_action_desc` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lab_result_action`
--

INSERT INTO `lab_result_action` (`lab_result_action_id`, `lab_result_action_desc`) VALUES
(0, 'Choose'),
(1, 'Normal'),
(2, 'Ubnormal');

-- --------------------------------------------------------

--
-- Table structure for table `lab_status`
--

CREATE TABLE `lab_status` (
  `lab_status_id` int(100) NOT NULL,
  `lab_status_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lab_status`
--

INSERT INTO `lab_status` (`lab_status_id`, `lab_status_desc`) VALUES
(0, 'Choose'),
(1, 'Normal'),
(2, 'Cancelled');

-- --------------------------------------------------------

--
-- Table structure for table `office`
--

CREATE TABLE `office` (
  `office_id` int(11) NOT NULL,
  `office_code` varchar(50) NOT NULL,
  `office_desca` varchar(250) DEFAULT NULL,
  `office_descl` varchar(250) DEFAULT NULL,
  `office_company_id` int(11) NOT NULL,
  `office_branch_id` int(11) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `create_by` int(11) NOT NULL,
  `update_at` datetime DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `delete_at` datetime DEFAULT NULL,
  `delete_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(11) NOT NULL,
  `patient_report_id` int(11) NOT NULL,
  `patient_age` varchar(255) DEFAULT NULL,
  `patient_weight` varchar(255) NOT NULL,
  `patient_sex` varchar(255) DEFAULT NULL,
  `patient_country` varchar(255) DEFAULT NULL,
  `patient_address` varchar(255) DEFAULT NULL,
  `patient_telephone` varchar(255) DEFAULT NULL,
  `patient_mobile` varchar(255) NOT NULL,
  `patient_mail` varchar(255) DEFAULT NULL,
  `patient_name` varchar(250) DEFAULT NULL,
  `patient_age_group_id` int(11) DEFAULT NULL,
  `patient_pregamcy` varchar(250) DEFAULT NULL,
  `patient_city` varchar(250) DEFAULT NULL,
  `patient_status_id` int(11) DEFAULT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `create_by` int(11) DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `delete_at` datetime DEFAULT NULL,
  `delete_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `patient_report_id`, `patient_age`, `patient_weight`, `patient_sex`, `patient_country`, `patient_address`, `patient_telephone`, `patient_mobile`, `patient_mail`, `patient_name`, `patient_age_group_id`, `patient_pregamcy`, `patient_city`, `patient_status_id`, `create_at`, `create_by`, `update_at`, `update_by`, `delete_at`, `delete_by`) VALUES
(1, 32, NULL, '', NULL, NULL, NULL, NULL, '0', NULL, '0', NULL, NULL, NULL, NULL, '2017-12-31 09:15:44', NULL, NULL, NULL, NULL, NULL),
(2, 0, NULL, '', NULL, NULL, NULL, NULL, '0', NULL, '0', NULL, NULL, NULL, NULL, '2017-12-31 09:18:22', NULL, NULL, NULL, NULL, NULL),
(3, 0, NULL, '', NULL, NULL, NULL, NULL, '0', NULL, '0', NULL, NULL, NULL, NULL, '2017-12-31 09:20:47', NULL, NULL, NULL, NULL, NULL),
(4, 0, NULL, '', NULL, NULL, NULL, NULL, '0', NULL, '0', NULL, NULL, NULL, NULL, '2017-12-31 09:21:15', NULL, NULL, NULL, NULL, NULL),
(5, 0, NULL, '', NULL, NULL, NULL, NULL, '0', NULL, '0', NULL, NULL, NULL, NULL, '2017-12-31 10:19:17', NULL, NULL, NULL, NULL, NULL),
(6, 0, NULL, '', NULL, NULL, NULL, NULL, '0', NULL, '0', NULL, NULL, NULL, NULL, '2017-12-31 10:19:34', NULL, NULL, NULL, NULL, NULL),
(7, 0, NULL, '', NULL, NULL, NULL, NULL, '0', NULL, '0', NULL, NULL, NULL, NULL, '2017-12-31 10:20:16', NULL, NULL, NULL, NULL, NULL),
(8, 0, NULL, '', NULL, NULL, NULL, NULL, '0', NULL, '0', NULL, NULL, NULL, NULL, '2017-12-31 10:25:58', NULL, NULL, NULL, NULL, NULL),
(9, 0, NULL, '', NULL, NULL, NULL, NULL, '0', NULL, '0', NULL, NULL, NULL, NULL, '2017-12-31 10:27:39', NULL, NULL, NULL, NULL, NULL),
(10, 0, NULL, '', NULL, NULL, NULL, NULL, '0', NULL, '0', NULL, NULL, NULL, NULL, '2017-12-31 10:44:32', NULL, NULL, NULL, NULL, NULL),
(11, 0, NULL, '', NULL, NULL, NULL, NULL, '0', NULL, '0', NULL, NULL, NULL, NULL, '2017-12-31 10:44:45', NULL, NULL, NULL, NULL, NULL),
(12, 0, NULL, '', NULL, NULL, NULL, NULL, '0', NULL, '0', NULL, NULL, NULL, NULL, '2017-12-31 10:50:12', NULL, NULL, NULL, NULL, NULL),
(13, 0, NULL, '', NULL, NULL, NULL, NULL, '0', NULL, '0', NULL, NULL, NULL, NULL, '2017-12-31 10:56:45', NULL, NULL, NULL, NULL, NULL),
(14, 0, NULL, '', NULL, NULL, NULL, NULL, '0', NULL, '0', NULL, NULL, NULL, NULL, '2017-12-31 10:59:52', NULL, NULL, NULL, NULL, NULL),
(15, 0, NULL, '', NULL, NULL, NULL, NULL, '0', NULL, '0', NULL, NULL, NULL, NULL, '2017-12-31 11:00:00', NULL, NULL, NULL, NULL, NULL),
(16, 0, NULL, '', NULL, NULL, NULL, NULL, '0', NULL, '0', NULL, NULL, NULL, NULL, '2017-12-31 11:03:22', NULL, NULL, NULL, NULL, NULL),
(17, 0, NULL, '', NULL, NULL, NULL, NULL, '0', NULL, '0', NULL, NULL, NULL, NULL, '2017-12-31 11:22:28', NULL, NULL, NULL, NULL, NULL),
(18, 0, NULL, '', NULL, NULL, NULL, NULL, '0', NULL, '0', NULL, NULL, NULL, NULL, '2017-12-31 11:22:52', NULL, NULL, NULL, NULL, NULL),
(19, 0, NULL, '', NULL, NULL, NULL, NULL, '0', NULL, '0', NULL, NULL, NULL, NULL, '2017-12-31 11:28:47', NULL, NULL, NULL, NULL, NULL),
(20, 0, NULL, '', NULL, NULL, NULL, NULL, '0', NULL, '0', NULL, NULL, NULL, NULL, '2017-12-31 11:32:38', NULL, NULL, NULL, NULL, NULL),
(21, 0, NULL, '', NULL, NULL, NULL, NULL, '0', NULL, '0', NULL, NULL, NULL, NULL, '2017-12-31 11:33:22', NULL, NULL, NULL, NULL, NULL),
(22, 0, NULL, '', NULL, NULL, NULL, NULL, '0', NULL, '0', NULL, NULL, NULL, NULL, '2017-12-31 11:37:30', NULL, NULL, NULL, NULL, NULL),
(23, 0, NULL, '', NULL, NULL, NULL, NULL, '0', NULL, '0', NULL, NULL, NULL, NULL, '2017-12-31 11:52:45', NULL, NULL, NULL, NULL, NULL),
(24, 0, NULL, '', NULL, NULL, NULL, NULL, '0', NULL, '0', NULL, NULL, NULL, NULL, '2017-12-31 11:53:27', NULL, NULL, NULL, NULL, NULL),
(25, 0, NULL, '', NULL, NULL, NULL, NULL, '0', NULL, 'aaa2233', NULL, NULL, NULL, NULL, '2017-12-31 11:54:00', NULL, NULL, NULL, NULL, NULL),
(26, 0, NULL, '', NULL, NULL, NULL, NULL, '0', NULL, 'asasass', NULL, NULL, NULL, NULL, '2017-12-31 12:00:25', NULL, NULL, NULL, NULL, NULL),
(27, 26, NULL, '', NULL, NULL, NULL, NULL, '0', NULL, 'aqwqw2225', NULL, NULL, NULL, NULL, '2017-12-31 12:02:37', NULL, NULL, NULL, NULL, NULL),
(28, 27, NULL, '', NULL, NULL, NULL, NULL, '0', NULL, 'klaklak', NULL, NULL, NULL, NULL, '2017-12-31 12:06:02', NULL, NULL, NULL, NULL, NULL),
(29, 28, NULL, '', NULL, NULL, NULL, NULL, '0', NULL, '123456', NULL, NULL, NULL, NULL, '2017-12-31 12:09:56', NULL, NULL, NULL, NULL, NULL),
(30, 29, NULL, '', NULL, NULL, NULL, NULL, '0', NULL, 'lo', NULL, NULL, NULL, NULL, '2017-12-31 12:10:51', NULL, NULL, NULL, NULL, NULL),
(31, 30, NULL, '', NULL, NULL, NULL, NULL, '0', NULL, 'lolo', NULL, NULL, NULL, NULL, '2017-12-31 12:13:03', NULL, NULL, NULL, NULL, NULL),
(32, 0, NULL, '', NULL, NULL, NULL, NULL, '0', NULL, '0', NULL, NULL, NULL, NULL, '2017-12-31 12:57:10', NULL, NULL, NULL, NULL, NULL),
(33, 32, NULL, '', NULL, NULL, NULL, NULL, '0', NULL, '1111111111111111111111111', NULL, NULL, NULL, NULL, '2018-01-11 10:09:18', NULL, NULL, NULL, NULL, NULL),
(34, 49, NULL, '', NULL, NULL, NULL, NULL, '0', NULL, 'hebaaaaa', NULL, NULL, NULL, NULL, '2018-01-16 16:12:25', NULL, NULL, NULL, NULL, NULL),
(35, 50, '24', '', 'male', 'egypt', 'alexandria', '5024', '01289898935', 'ali@..a.com', 'ali', NULL, NULL, 'alex', NULL, '2018-01-17 09:49:05', NULL, NULL, NULL, NULL, NULL),
(36, 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', 0, '2018-01-17 10:21:27', NULL, NULL, NULL, NULL, NULL),
(37, 51, '25', '250', 'male', 'dfsfd', 'sdfsd', 'fdsfd', 'dsfds', 'sdd', 'kamel', 4, 'Not applicable', 'sdffd', 0, '2018-01-17 10:22:51', NULL, NULL, NULL, NULL, NULL),
(38, 51, '12', '123', 'male', 'ss', 'ss', 'ss', 'ss', 'ss', 'ffrrxcx', 3, 'Not applicable', 'ss', 0, '2018-01-17 10:23:59', NULL, NULL, NULL, NULL, NULL),
(39, 51, '52', '85', 'male', 'ss', 'ss', 'ss', 'ss', 'ss', 'ss', 3, 'Pregnant', 'ss', 0, '2018-01-17 10:25:20', NULL, NULL, NULL, NULL, NULL),
(40, 51, '255', '', '0', '', '', '', '', '', '', 0, 'Not_Choose', '', 2, '2018-01-17 10:26:53', NULL, NULL, NULL, NULL, NULL),
(41, 52, '25', '', '0', '', '', '', '', '', '', 0, 'Not_Choose', '', 0, '2018-01-17 12:36:39', NULL, NULL, NULL, NULL, NULL),
(42, 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', 0, '2018-01-17 12:36:57', NULL, NULL, NULL, NULL, NULL),
(43, 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', 0, '2018-01-17 12:43:28', NULL, NULL, NULL, NULL, NULL),
(44, 55, '25', '100', 'female', 'egypt', 'a', '0250', '01254', 'hwsh@skjs.com', '', 6, 'Pregnant', 'alex', 1, '2018-01-17 14:40:40', NULL, NULL, NULL, NULL, NULL),
(45, 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', 0, '2018-01-17 14:41:22', NULL, NULL, NULL, NULL, NULL),
(46, 56, '', '', '0', '', '', '', '', '', 'heba', 0, 'Not_Choose', '', 0, '2018-01-17 15:08:31', NULL, NULL, NULL, NULL, NULL),
(47, 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', 0, '2018-01-17 15:09:14', NULL, NULL, NULL, NULL, NULL),
(48, 57, '', '', '0', '', '', '', '', '', '11', 0, 'Not_Choose', '', 0, '2018-01-17 15:13:46', NULL, NULL, NULL, NULL, NULL),
(49, 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0', 0, '2018-01-17 15:14:02', NULL, NULL, NULL, NULL, NULL),
(50, 58, '25', '12', '0', '', '', '', '', '', '', 0, 'Not_Choose', '', 0, '2018-01-17 15:17:08', NULL, NULL, NULL, NULL, NULL),
(51, 59, '', '', '0', '', '', '', '', '', 'aaaa', 0, 'Not_Choose', '', 0, '2018-01-17 16:10:05', NULL, NULL, NULL, NULL, NULL),
(52, 60, '25', '', '0', '', '', '', '', '', 'rrrrrrrrrrrrrrrrrr', 0, 'Not_Choose', '', 0, '2018-01-18 10:13:32', NULL, NULL, NULL, NULL, NULL),
(53, 61, '', '', '0', '', '', '', '', '', 'eeeeeeeeee', 0, 'Not_Choose', '', 0, '2018-01-18 10:54:49', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `patient_status`
--

CREATE TABLE `patient_status` (
  `patient_status_id` int(11) NOT NULL,
  `patient_status_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient_status`
--

INSERT INTO `patient_status` (`patient_status_id`, `patient_status_desc`) VALUES
(2, 'Canceled'),
(0, 'Choose'),
(1, 'Normal');

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE `qualification` (
  `qualification_id` int(11) NOT NULL,
  `qualification_desc` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `qualification`
--

INSERT INTO `qualification` (`qualification_id`, `qualification_desc`) VALUES
(0, 'Choose'),
(5, 'Customer  or other non health Professional'),
(4, 'Lawyer'),
(3, 'Other Health Professional'),
(2, 'Pharmacist'),
(1, 'Physician');

-- --------------------------------------------------------

--
-- Table structure for table `reaction_outcome`
--

CREATE TABLE `reaction_outcome` (
  `reaction_outcome_id` int(11) NOT NULL,
  `reaction_outcome_desc` int(11) NOT NULL,
  `reaction_outcome_company_id` int(11) NOT NULL,
  `reaction_outcome_branch_id` int(11) NOT NULL,
  `reaction_outcome_end_date` int(11) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `create_by` int(11) NOT NULL,
  `update_at` datetime DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `delete_at` datetime DEFAULT NULL,
  `delete_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `report_id` int(11) NOT NULL,
  `report_desc` varchar(250) DEFAULT NULL,
  `report_type_id` int(11) DEFAULT NULL,
  `report_source` varchar(255) DEFAULT NULL,
  `report_date` text,
  `report_serious` varchar(255) DEFAULT NULL,
  `report_serious_id` int(11) DEFAULT NULL,
  `report_status_id` int(11) DEFAULT NULL,
  `report_addition_info` varchar(1000) DEFAULT NULL,
  `report_reporter_id` int(11) DEFAULT NULL,
  `report_patient_id` int(11) DEFAULT NULL,
  `report_suspect_drug_id` int(11) DEFAULT NULL,
  `report_concomitant_drug_id` int(11) DEFAULT NULL,
  `report_adr_id` int(11) DEFAULT NULL,
  `report_lab_id` int(11) DEFAULT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `create_by` int(11) DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `delete_at` datetime DEFAULT NULL,
  `delete_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`report_id`, `report_desc`, `report_type_id`, `report_source`, `report_date`, `report_serious`, `report_serious_id`, `report_status_id`, `report_addition_info`, `report_reporter_id`, `report_patient_id`, `report_suspect_drug_id`, `report_concomitant_drug_id`, `report_adr_id`, `report_lab_id`, `create_at`, `create_by`, `update_at`, `update_by`, `delete_at`, `delete_by`) VALUES
(1, 'ffffffffffff', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-28 15:24:52', NULL, NULL, NULL, NULL, NULL),
(2, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-28 15:33:42', NULL, NULL, NULL, NULL, NULL),
(3, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-30 08:46:33', NULL, NULL, NULL, NULL, NULL),
(4, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-30 08:48:12', NULL, NULL, NULL, NULL, NULL),
(5, 'sssssssssssssssssssssssssssss', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-30 08:52:33', NULL, NULL, NULL, NULL, NULL),
(6, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-30 10:33:41', NULL, NULL, NULL, NULL, NULL),
(7, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-30 10:34:02', NULL, NULL, NULL, NULL, NULL),
(8, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-30 10:36:25', NULL, NULL, NULL, NULL, NULL),
(9, 'qqqq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-30 10:53:52', NULL, NULL, NULL, NULL, NULL),
(10, 'asss', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-30 10:55:07', NULL, NULL, NULL, NULL, NULL),
(11, 'a1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-30 10:56:46', NULL, NULL, NULL, NULL, NULL),
(12, 'a11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-30 10:57:51', NULL, NULL, NULL, NULL, NULL),
(13, 'aaaaaaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-30 10:59:08', NULL, NULL, NULL, NULL, NULL),
(14, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-30 11:09:40', NULL, NULL, NULL, NULL, NULL),
(15, 'this is test report', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-31 08:39:14', NULL, NULL, NULL, NULL, NULL),
(16, 'this is test report', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-31 08:43:31', NULL, NULL, NULL, NULL, NULL),
(17, 'this is test 3 ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-31 08:44:33', NULL, NULL, NULL, NULL, NULL),
(18, 'sssss', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-31 09:20:58', NULL, NULL, NULL, NULL, NULL),
(19, 'sss', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-31 10:25:31', NULL, NULL, NULL, NULL, NULL),
(20, 'sss', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-31 10:27:24', NULL, NULL, NULL, NULL, NULL),
(21, 'sssnjn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-31 11:35:18', NULL, NULL, NULL, NULL, NULL),
(22, 'aa11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-31 11:53:42', NULL, NULL, NULL, NULL, NULL),
(23, 'heba', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-31 11:55:04', NULL, NULL, NULL, NULL, NULL),
(24, 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-31 11:59:03', NULL, NULL, NULL, NULL, NULL),
(25, 'yyayaya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-31 12:00:08', NULL, NULL, NULL, NULL, NULL),
(26, 'aa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-31 12:02:24', NULL, NULL, NULL, NULL, NULL),
(27, 'agga', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-31 12:05:43', NULL, NULL, NULL, NULL, NULL),
(28, '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-31 12:09:42', NULL, NULL, NULL, NULL, NULL),
(29, '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-31 12:10:36', NULL, NULL, NULL, NULL, NULL),
(30, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-31 12:12:44', NULL, NULL, NULL, NULL, NULL),
(31, 'whatt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-11 09:47:18', NULL, NULL, NULL, NULL, NULL),
(32, 'heba1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '2018-01-11 10:08:34', NULL, NULL, NULL, NULL, NULL),
(33, 'this is test report', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-16 09:37:39', NULL, NULL, NULL, NULL, NULL),
(34, '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-16 09:39:17', NULL, NULL, NULL, NULL, NULL),
(35, '123456', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-16 10:32:06', NULL, NULL, NULL, NULL, NULL),
(36, 'eeee', 2, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-16 10:41:11', NULL, NULL, NULL, NULL, NULL),
(38, '1', 1, '55555', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-16 10:42:37', NULL, NULL, NULL, NULL, NULL),
(39, '12345', 1, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-16 10:43:10', NULL, NULL, NULL, NULL, NULL),
(41, '1', 1, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-16 10:45:24', NULL, NULL, NULL, NULL, NULL),
(42, '1', 1, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-16 10:46:18', NULL, NULL, NULL, NULL, NULL),
(43, '1', 1, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-16 10:46:46', NULL, NULL, NULL, NULL, NULL),
(44, '1', 1, '2', '2018-01-16', 'Seriousness', NULL, 1, '3', NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-16 12:23:37', NULL, NULL, NULL, NULL, NULL),
(45, 'Report Description', 1, 'Report Source', '2018-01-16', 'Seriousness', NULL, 1, 'Additional Information', NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-16 14:25:05', NULL, NULL, NULL, NULL, NULL),
(46, 'qqq', 1, 'qq', '2018-01-16', 'Seriousness', NULL, 2, 'q', NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-16 14:55:11', NULL, NULL, NULL, NULL, NULL),
(47, 'qqqq', 1, 'qqq', '2018-01-24', 'Seriousness', NULL, 2, 'qqqq', NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-16 14:56:31', NULL, NULL, NULL, NULL, NULL),
(48, 'heba', 1, 'heba', '2018-01-16', 'Seriousness', NULL, 2, 'heba', NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-16 15:29:54', NULL, NULL, NULL, NULL, NULL),
(49, 'heba1', 1, 'heba1', '2018-01-16', 'Seriousness', NULL, 3, 'heba1', NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-16 15:30:53', NULL, NULL, NULL, NULL, NULL),
(50, 'q1', 1, 'q1', '2018-01-17', 'Seriousness', NULL, 2, 'q1', NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-17 09:31:43', NULL, NULL, NULL, NULL, NULL),
(51, 'a', 1, 'j', '2018-01-16', 'Seriousness', NULL, 1, 'h', NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-17 10:22:06', NULL, NULL, NULL, NULL, NULL),
(52, 's', 1, '', '2018-01-10', '0', NULL, 1, '', NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-17 12:36:17', NULL, NULL, NULL, NULL, NULL),
(53, '55', 1, '', '', '0', NULL, 1, '', NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-17 12:44:05', NULL, NULL, NULL, NULL, NULL),
(55, 'aa', 1, '', '', 'Seriousness', NULL, 1, '', NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-17 14:39:27', NULL, NULL, NULL, NULL, NULL),
(56, '44', 1, '', '', '0', NULL, 1, '', NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-17 15:07:53', NULL, NULL, NULL, NULL, NULL),
(57, '11', 1, '', '', '0', NULL, 1, '', NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-17 15:13:13', NULL, NULL, NULL, NULL, NULL),
(58, 'xsd', 1, '', '', '0', NULL, 1, '', NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-17 15:16:39', NULL, NULL, NULL, NULL, NULL),
(59, 'aaass', 1, '', '', '0', NULL, 1, '', NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-17 16:07:47', NULL, NULL, NULL, NULL, NULL),
(60, 'kkkk', 1, '', '', '0', NULL, 1, '', NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-18 10:13:10', NULL, NULL, NULL, NULL, NULL),
(61, 'er', 1, '', '', '0', NULL, 1, '', NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-18 10:54:35', NULL, NULL, NULL, NULL, NULL),
(62, 'ssssssssssssss', 1, '', '', '0', NULL, 1, '', NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-18 11:01:26', NULL, NULL, NULL, NULL, NULL),
(63, 'aqwwwww', 1, '', '', '0', NULL, 1, '', NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-18 12:25:43', NULL, NULL, NULL, NULL, NULL),
(67, 'aaaaaaaaaaaaaaaaaaaaaaaaaa', 1, '', '', '0', NULL, 1, '', NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-18 12:30:20', NULL, NULL, NULL, NULL, NULL),
(68, 'aaaaaaaaaaaaaaaaaaaaaaa', 1, '', '', '0', NULL, 1, '', NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-18 12:32:20', NULL, NULL, NULL, NULL, NULL),
(69, 'wwwwwwwwwwwwwwww', 1, '', '', '0', NULL, 1, '', NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-18 14:51:27', NULL, NULL, NULL, NULL, NULL),
(70, '11111111111111111111111111111111111111', 1, '', '', '0', NULL, 1, '', NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-18 14:54:29', NULL, NULL, NULL, NULL, NULL),
(71, '111111111111111111', 1, '', '', '0', NULL, 1, '', NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-18 16:17:10', NULL, NULL, NULL, NULL, NULL),
(72, 'aaaaaaaaaaaaa', 1, 'aaaaaaaaaaaaaaaa', '2018-01-22', '0', NULL, 1, '', NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-22 08:30:23', NULL, NULL, NULL, NULL, NULL),
(73, 'gggggggggggggggggggggggggggggg', 1, '', '2018-01-22', '0', NULL, 1, '', NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-22 08:41:15', NULL, NULL, NULL, NULL, NULL),
(74, '11212132112\'\'\'\'\'\'\'\'\'\'\'\'', 1, '', '', '0', NULL, 1, '', NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-22 08:42:56', NULL, NULL, NULL, NULL, NULL),
(75, 'aaaaaaaasa', 1, '', '', '0', NULL, 1, '', NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-22 08:46:33', NULL, NULL, NULL, NULL, NULL),
(76, 'sdddddddddddddd', 1, '', '', '0', NULL, 1, '', NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-22 08:50:21', NULL, NULL, NULL, NULL, NULL),
(77, 'sssssssssssssssssssssssssss', 1, '', '2018-01-01', 'Seriousness', NULL, 1, '', NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-22 09:04:48', NULL, NULL, NULL, NULL, NULL),
(78, 'sdfffffffffffffff', 1, '', '', '0', NULL, 1, '', NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-22 09:06:59', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reporter`
--

CREATE TABLE `reporter` (
  `reporter_id` int(11) NOT NULL,
  `reporter_report_id` int(11) NOT NULL,
  `reporter_qualification_id` int(11) DEFAULT NULL,
  `reporter_name` varchar(250) DEFAULT NULL,
  `reporter_work_institution_id` int(11) DEFAULT NULL,
  `reporter_address` varchar(250) DEFAULT NULL,
  `reporter_mobile_no` varchar(50) DEFAULT NULL,
  `reporter_contact_detail` varchar(250) DEFAULT NULL,
  `reporter_status_id` int(11) DEFAULT NULL,
  `reporter_speciality` varchar(250) DEFAULT NULL,
  `reporter_telephone` varchar(50) DEFAULT NULL,
  `reporter_mail` varchar(50) DEFAULT NULL,
  `reporter_medicaly_confirm` varchar(255) DEFAULT NULL,
  `reporter_end_date` date DEFAULT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `create_by` int(11) DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `delete_at` datetime DEFAULT NULL,
  `delete_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reporter`
--

INSERT INTO `reporter` (`reporter_id`, `reporter_report_id`, `reporter_qualification_id`, `reporter_name`, `reporter_work_institution_id`, `reporter_address`, `reporter_mobile_no`, `reporter_contact_detail`, `reporter_status_id`, `reporter_speciality`, `reporter_telephone`, `reporter_mail`, `reporter_medicaly_confirm`, `reporter_end_date`, `create_at`, `create_by`, `update_at`, `update_by`, `delete_at`, `delete_by`) VALUES
(1, 12, NULL, 'aa11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-30 10:57:59', NULL, NULL, NULL, NULL, NULL),
(2, 13, NULL, 'aaaabbb', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-30 10:59:21', NULL, NULL, NULL, NULL, NULL),
(3, 14, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-30 11:09:50', NULL, NULL, NULL, NULL, NULL),
(4, 17, NULL, 'this is reporter test ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-31 08:45:00', NULL, NULL, NULL, NULL, NULL),
(5, 18, NULL, 'ssssssssssssssssssss', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-31 09:21:06', NULL, NULL, NULL, NULL, NULL),
(6, 19, NULL, 'sss2222', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-31 10:25:43', NULL, NULL, NULL, NULL, NULL),
(7, 20, NULL, 'ssqwe5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-31 10:27:32', NULL, NULL, NULL, NULL, NULL),
(8, 21, NULL, 'dfgd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-31 11:35:35', NULL, NULL, NULL, NULL, NULL),
(9, 22, NULL, 'bb22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-31 11:53:52', NULL, NULL, NULL, NULL, NULL),
(10, 23, NULL, 'taha', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-31 11:55:23', NULL, NULL, NULL, NULL, NULL),
(11, 24, NULL, 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-31 11:59:11', NULL, NULL, NULL, NULL, NULL),
(12, 25, NULL, 'asasas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-31 12:00:15', NULL, NULL, NULL, NULL, NULL),
(13, 26, NULL, 'aaaaaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-31 12:02:30', NULL, NULL, NULL, NULL, NULL),
(14, 27, NULL, 'akaka', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-31 12:05:50', NULL, NULL, NULL, NULL, NULL),
(15, 28, NULL, '1235', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-31 12:09:49', NULL, NULL, NULL, NULL, NULL),
(16, 29, NULL, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-31 12:10:44', NULL, NULL, NULL, NULL, NULL),
(17, 30, NULL, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-31 12:12:53', NULL, NULL, NULL, NULL, NULL),
(18, 31, NULL, 'what reprter name', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-11 09:47:38', NULL, NULL, NULL, NULL, NULL),
(19, 31, NULL, 'fffffff', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-11 09:47:51', NULL, NULL, NULL, NULL, NULL),
(20, 0, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-11 09:52:26', NULL, NULL, NULL, NULL, NULL),
(21, 32, NULL, '111111111111111111111111111', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-11 10:08:49', NULL, NULL, NULL, NULL, NULL),
(22, 32, NULL, '1111111111111111111111111', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-11 10:09:00', NULL, NULL, NULL, NULL, NULL),
(23, 32, NULL, '11111111111111111111111111', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-11 10:09:09', NULL, NULL, NULL, NULL, NULL),
(24, 45, 0, 'test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-16 14:42:09', NULL, NULL, NULL, NULL, NULL),
(25, 45, 0, 'ttttttttt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-16 14:42:57', NULL, NULL, NULL, NULL, NULL),
(26, 45, 0, 'tttttttttttttttttttttttttttt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-16 14:44:09', NULL, NULL, NULL, NULL, NULL),
(27, 45, 2, 'rrrr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-16 14:46:48', NULL, NULL, NULL, NULL, NULL),
(28, 46, 1, 'eeeeeeee', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-16 14:55:34', NULL, NULL, NULL, NULL, NULL),
(29, 47, 3, 'ggege', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-16 14:56:52', NULL, NULL, NULL, NULL, NULL),
(30, 45, 2, 'ddddddddddd', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-16 15:07:14', NULL, NULL, NULL, NULL, NULL),
(31, 45, 3, 'wwwwwwwwwwww', 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-16 15:07:57', NULL, NULL, NULL, NULL, NULL),
(32, 45, 1, 'pppppppppp', 1, '0', '0', '0', 0, '0', '0', '0', 'yes', NULL, '2018-01-16 15:27:08', NULL, NULL, NULL, NULL, NULL),
(33, 49, 2, 'heba1', 1, 'heba1', 'heba1', 'heba1', 2, 'heba1', 'heba1', 'heba1', 'yes', NULL, '2018-01-16 15:32:09', NULL, NULL, NULL, NULL, NULL),
(34, 50, 1, 'q2', 2, 'q2', 'q2', 'q2', 1, 'q2', 'q2', 'q2', 'yes', NULL, '2018-01-17 09:32:25', NULL, NULL, NULL, NULL, NULL),
(35, 51, 1, '', 1, 'hh', 'hh', 'hh', 1, 'hh', 'hh', 'hh', 'yes', NULL, '2018-01-17 10:22:24', NULL, NULL, NULL, NULL, NULL),
(36, 52, 0, '', 0, '', '', '', 0, 's', '', '', '0', NULL, '2018-01-17 12:36:30', NULL, NULL, NULL, NULL, NULL),
(37, 55, 4, '', 1, 'vbfdf', 'fd', 'ds', 1, 'das', 'fd', 'a', 'yes', NULL, '2018-01-17 14:39:49', NULL, NULL, NULL, NULL, NULL),
(38, 56, 0, 'kkkk', 0, '', '', '', 0, '', '', '', '0', NULL, '2018-01-17 15:08:16', NULL, NULL, NULL, NULL, NULL),
(39, 57, 0, '15', 0, '', '', '', 0, '', '', '', '0', NULL, '2018-01-17 15:13:32', NULL, NULL, NULL, NULL, NULL),
(40, 58, 0, 'sacsda', 0, '', '', '', 0, '', '', '', '0', NULL, '2018-01-17 15:16:48', NULL, NULL, NULL, NULL, NULL),
(41, 59, 0, 'aaaa', 0, '', '', '', 0, '', '', '', '0', NULL, '2018-01-17 16:09:56', NULL, NULL, NULL, NULL, NULL),
(42, 60, 0, 'eeeeeeeeeeeeeeeeeee', 0, '', '', '', 0, '', '', '', '0', NULL, '2018-01-18 10:13:23', NULL, NULL, NULL, NULL, NULL),
(43, 61, 0, 'ee', 0, '', '', '', 0, '', '', '', '0', NULL, '2018-01-18 10:54:41', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reporter_status`
--

CREATE TABLE `reporter_status` (
  `status_id` int(11) NOT NULL,
  `status_desc` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reporter_status`
--

INSERT INTO `reporter_status` (`status_id`, `status_desc`) VALUES
(2, 'Canceled'),
(0, 'Choose'),
(1, 'Normal');

-- --------------------------------------------------------

--
-- Table structure for table `report_serious`
--

CREATE TABLE `report_serious` (
  `serious_id` int(11) NOT NULL,
  `serious_desc` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `report_status`
--

CREATE TABLE `report_status` (
  `status_id` int(11) NOT NULL,
  `status_desc` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `report_status`
--

INSERT INTO `report_status` (`status_id`, `status_desc`) VALUES
(3, 'Cancel'),
(2, 'Close'),
(1, 'Open');

-- --------------------------------------------------------

--
-- Table structure for table `report_type`
--

CREATE TABLE `report_type` (
  `type_id` int(11) NOT NULL,
  `type_desc` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `report_type`
--

INSERT INTO `report_type` (`type_id`, `type_desc`) VALUES
(2, ' Follow-up'),
(1, 'Initial');

-- --------------------------------------------------------

--
-- Table structure for table `seriousness_act`
--

CREATE TABLE `seriousness_act` (
  `seriousness_act_id` int(11) NOT NULL,
  `seriousness_act_desc` varchar(250) NOT NULL,
  `seriousness_act_company_id` int(11) NOT NULL,
  `seriousness_act_branch_id` int(11) NOT NULL,
  `seriousness_act_end_date` date DEFAULT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `create_by` int(11) NOT NULL,
  `update_at` datetime DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `delete_at` datetime DEFAULT NULL,
  `delete_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `suspect_drug`
--

CREATE TABLE `suspect_drug` (
  `suspect_drug_id` int(11) NOT NULL,
  `suspect_drug_report_id` int(11) NOT NULL,
  `suspect_drug_name` varchar(255) DEFAULT NULL,
  `suspect_drug_atc_code` varchar(250) DEFAULT NULL,
  `suspect_drug_dosage_form_id` int(11) DEFAULT NULL,
  `suspect_drug_dose` varchar(250) DEFAULT NULL,
  `suspect_drug_duration` varchar(255) DEFAULT NULL,
  `suspect_drug_class_id` varchar(255) DEFAULT NULL,
  `suspect_drug_date_start` varchar(255) DEFAULT NULL,
  `suspect_drug_batch_no` varchar(250) DEFAULT NULL,
  `suspect_drug_active_ingredient` varchar(250) DEFAULT NULL,
  `suspect_drug_suspeted_drag_inn` varchar(250) DEFAULT NULL,
  `suspect_drug_concentration` varchar(250) DEFAULT NULL,
  `suspect_drug_route_id` varchar(255) DEFAULT NULL,
  `suspect_drug_indication` varchar(255) DEFAULT NULL,
  `suspect_drug_date_stop` varchar(255) DEFAULT NULL,
  `suspect_drug_status_id` int(11) DEFAULT NULL,
  `create_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `create_by` int(11) DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `delete_at` datetime DEFAULT NULL,
  `delete_by` int(11) DEFAULT NULL,
  `suspect_drug_end_date` int(11) DEFAULT NULL,
  `suspect_drug_company_id` int(11) DEFAULT NULL,
  `suspect_drug_branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `suspect_drug`
--

INSERT INTO `suspect_drug` (`suspect_drug_id`, `suspect_drug_report_id`, `suspect_drug_name`, `suspect_drug_atc_code`, `suspect_drug_dosage_form_id`, `suspect_drug_dose`, `suspect_drug_duration`, `suspect_drug_class_id`, `suspect_drug_date_start`, `suspect_drug_batch_no`, `suspect_drug_active_ingredient`, `suspect_drug_suspeted_drag_inn`, `suspect_drug_concentration`, `suspect_drug_route_id`, `suspect_drug_indication`, `suspect_drug_date_stop`, `suspect_drug_status_id`, `create_at`, `create_by`, `update_at`, `update_by`, `delete_at`, `delete_by`, `suspect_drug_end_date`, `suspect_drug_company_id`, `suspect_drug_branch_id`) VALUES
(1, 32, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-15 10:54:54', 1, NULL, 1, NULL, 1, NULL, 1, 1),
(2, 50, '5', 'd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-17 12:11:15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 58, 'Drug Name', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-17 15:33:59', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 58, 'Drug Name', 'ATC Code', 1, 'Dose', '1', '1', '2018-01-16', 'Batch No', 'Active Ingredient', 'Suspected Drug INN', 'Concentration', '1', '1', '2018-01-31', 1, '2018-01-17 15:37:15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 59, 'asaaa', '', 0, '', '', '', '', '', '', '', '', '0', '', '', 0, '2018-01-17 16:12:53', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 59, 'sss', '', 0, '', '', '', '', '', '', '', '', '0', '', '', 0, '2018-01-17 16:13:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 60, 'fffffffffffffffffffff', '', 0, '', '', '', '', '', '', '', '', '0', '', '', 0, '2018-01-18 10:13:55', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 61, 'eeeeeeeeeeeee', '', 0, '', '', '', '', '', '', '', '', '0', '', '', 0, '2018-01-18 10:54:56', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_mail` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_status` int(11) NOT NULL DEFAULT '0',
  `user_office_id` int(11) DEFAULT NULL,
  `user_branch_id` int(11) DEFAULT NULL,
  `user_company_id` int(11) DEFAULT NULL,
  `user_end_date` date DEFAULT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `create_by` int(11) DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `delete_at` datetime DEFAULT NULL,
  `delete_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_mail`, `user_name`, `user_password`, `user_status`, `user_office_id`, `user_branch_id`, `user_company_id`, `user_end_date`, `create_at`, `create_by`, `update_at`, `update_by`, `delete_at`, `delete_by`) VALUES
(1, '', 'heba', '202cb962ac59075b964b07152d234b70', 0, NULL, NULL, NULL, NULL, '2017-12-24 08:54:45', NULL, NULL, NULL, NULL, NULL),
(3, 'heba@heba.com', 'ahmed', '202cb962ac59075b964b07152d234b70', 1, NULL, NULL, NULL, NULL, '2017-12-28 09:56:53', 1, NULL, 1, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `work_institution`
--

CREATE TABLE `work_institution` (
  `work_institution_id` int(11) NOT NULL,
  `work_institution_desc` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `work_institution`
--

INSERT INTO `work_institution` (`work_institution_id`, `work_institution_desc`) VALUES
(0, 'Choose'),
(2, 'Clinic'),
(1, 'Hospital'),
(3, 'Medical Centre'),
(5, 'Other'),
(4, 'Pharmacy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adr`
--
ALTER TABLE `adr`
  ADD PRIMARY KEY (`adr_id`),
  ADD KEY `adr_patient_fk` (`adr_patient_id`),
  ADD KEY `adr_seriousness_act_fk` (`adr_seriousenecy_act_id`),
  ADD KEY `adr_company_id` (`adr_company_id`),
  ADD KEY `adr_branch_id` (`adr_branch_id`),
  ADD KEY `adr_report_id` (`adr_report_id`),
  ADD KEY `adr_create_id` (`create_by`),
  ADD KEY `adr_update_id` (`update_by`),
  ADD KEY `adr_delete_id` (`delete_by`),
  ADD KEY `adr_consality_fk` (`adr_consality_id`);

--
-- Indexes for table `age_group`
--
ALTER TABLE `age_group`
  ADD PRIMARY KEY (`age_group_id`),
  ADD UNIQUE KEY `unique` (`age_group_desc`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branch_id`),
  ADD UNIQUE KEY `unique` (`branch_code`),
  ADD KEY `branch_company_fk` (`branch_company_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`),
  ADD UNIQUE KEY `unique` (`company_code`),
  ADD KEY `company_create_fk` (`create_by`),
  ADD KEY `company_update_fk` (`update_by`),
  ADD KEY `company_delete_fk` (`delete_by`);

--
-- Indexes for table `concomitant_drug`
--
ALTER TABLE `concomitant_drug`
  ADD PRIMARY KEY (`con_id`),
  ADD KEY `con_company_fk` (`con_company_id`),
  ADD KEY `con_branch_fk` (`con_branch_id`),
  ADD KEY `con_create_fk` (`create_by`),
  ADD KEY `con_update_fk` (`update_by`),
  ADD KEY `con_delete_fk` (`delete_by`),
  ADD KEY `con_report_fk` (`con_report_id`),
  ADD KEY `con_route_fk` (`con_route_id`),
  ADD KEY `con_dosage_fk` (`con_dosage_form_id`);

--
-- Indexes for table `consality`
--
ALTER TABLE `consality`
  ADD PRIMARY KEY (`consality_id`),
  ADD UNIQUE KEY `unique` (`consality_desc`);

--
-- Indexes for table `dosage`
--
ALTER TABLE `dosage`
  ADD PRIMARY KEY (`dosage_id`),
  ADD UNIQUE KEY `unique` (`dosage_desc`);

--
-- Indexes for table `dosage_class`
--
ALTER TABLE `dosage_class`
  ADD PRIMARY KEY (`dosage_class_id`),
  ADD UNIQUE KEY `unique` (`dosage_class_desc`),
  ADD KEY `dosage_class_company_fk` (`dosage_class_company_id`),
  ADD KEY `dosage_class_branch_fk` (`dosage_class_branch_id`),
  ADD KEY `dosage_class_create_fk` (`create_by`),
  ADD KEY `dosage_class_update_fk` (`update_by`),
  ADD KEY `dosage_class_delete_fk` (`delete_by`);

--
-- Indexes for table `drugs`
--
ALTER TABLE `drugs`
  ADD PRIMARY KEY (`drug_id`),
  ADD KEY `drug_create_fk` (`create_by`),
  ADD KEY `drug_update_fk` (`update_by`),
  ADD KEY `drug_delete_fk` (`delete_by`);

--
-- Indexes for table `drug_class`
--
ALTER TABLE `drug_class`
  ADD PRIMARY KEY (`drug_class_id`),
  ADD UNIQUE KEY `unique` (`drug_class_desc`),
  ADD KEY `drug_class_company_fk` (`drug_class_company_id`),
  ADD KEY `drug_class_branch_fk` (`drug_class_branch_is`),
  ADD KEY `drug_class_create_fk` (`create_by`),
  ADD KEY `drug_class_update_fk` (`update_by`),
  ADD KEY `drug_class_delete_fk` (`delete_by`);

--
-- Indexes for table `drug_route`
--
ALTER TABLE `drug_route`
  ADD PRIMARY KEY (`drug_route_id`),
  ADD UNIQUE KEY `unique` (`drug_route_desc`);

--
-- Indexes for table `drug_status`
--
ALTER TABLE `drug_status`
  ADD PRIMARY KEY (`drug_status_id`),
  ADD UNIQUE KEY `unique` (`drug_status_desc`);

--
-- Indexes for table `laboratory`
--
ALTER TABLE `laboratory`
  ADD PRIMARY KEY (`lab_id`),
  ADD KEY `lab_action_fk` (`lab_result_action_id`),
  ADD KEY `lab_company_fk` (`lab_company_id`),
  ADD KEY `lab_branch_fk` (`lab_branch_id`),
  ADD KEY `lab_create_fk` (`create_by`),
  ADD KEY `lab_update_fk` (`update_by`),
  ADD KEY `lab_delete_fk` (`delete_by`),
  ADD KEY `lab_report_id` (`lab_report_id`);

--
-- Indexes for table `lab_result_action`
--
ALTER TABLE `lab_result_action`
  ADD PRIMARY KEY (`lab_result_action_id`),
  ADD UNIQUE KEY `unique` (`lab_result_action_desc`);

--
-- Indexes for table `lab_status`
--
ALTER TABLE `lab_status`
  ADD PRIMARY KEY (`lab_status_id`);

--
-- Indexes for table `office`
--
ALTER TABLE `office`
  ADD PRIMARY KEY (`office_id`),
  ADD UNIQUE KEY `unique` (`office_code`),
  ADD KEY `office_company_fk` (`office_company_id`),
  ADD KEY `office_branch_fk` (`office_branch_id`),
  ADD KEY `office_create_fk` (`create_by`),
  ADD KEY `office_update_fk` (`update_by`),
  ADD KEY `office_delete_fk` (`delete_by`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `patient_status`
--
ALTER TABLE `patient_status`
  ADD PRIMARY KEY (`patient_status_id`),
  ADD UNIQUE KEY `unique` (`patient_status_desc`);

--
-- Indexes for table `qualification`
--
ALTER TABLE `qualification`
  ADD PRIMARY KEY (`qualification_id`),
  ADD UNIQUE KEY `unique` (`qualification_desc`);

--
-- Indexes for table `reaction_outcome`
--
ALTER TABLE `reaction_outcome`
  ADD PRIMARY KEY (`reaction_outcome_id`),
  ADD UNIQUE KEY `unique` (`reaction_outcome_desc`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_id`),
  ADD KEY `followUp_FK` (`report_source`),
  ADD KEY `serious_FK` (`report_serious_id`),
  ADD KEY `status_FK` (`report_status_id`),
  ADD KEY `type_FK` (`report_type_id`),
  ADD KEY `reporter_fk` (`report_reporter_id`),
  ADD KEY `report_source` (`report_source`);

--
-- Indexes for table `reporter`
--
ALTER TABLE `reporter`
  ADD PRIMARY KEY (`reporter_id`),
  ADD KEY `qualification_fk` (`reporter_qualification_id`),
  ADD KEY `work_institution_fk` (`reporter_work_institution_id`),
  ADD KEY `reporter_status_fk` (`reporter_status_id`);

--
-- Indexes for table `reporter_status`
--
ALTER TABLE `reporter_status`
  ADD PRIMARY KEY (`status_id`),
  ADD UNIQUE KEY `unique` (`status_desc`);

--
-- Indexes for table `report_serious`
--
ALTER TABLE `report_serious`
  ADD PRIMARY KEY (`serious_id`),
  ADD UNIQUE KEY `unique` (`serious_desc`);

--
-- Indexes for table `report_status`
--
ALTER TABLE `report_status`
  ADD PRIMARY KEY (`status_id`),
  ADD UNIQUE KEY `unique` (`status_desc`);

--
-- Indexes for table `report_type`
--
ALTER TABLE `report_type`
  ADD PRIMARY KEY (`type_id`),
  ADD UNIQUE KEY `unique` (`type_desc`);

--
-- Indexes for table `seriousness_act`
--
ALTER TABLE `seriousness_act`
  ADD PRIMARY KEY (`seriousness_act_id`),
  ADD UNIQUE KEY `unique` (`seriousness_act_desc`);

--
-- Indexes for table `suspect_drug`
--
ALTER TABLE `suspect_drug`
  ADD PRIMARY KEY (`suspect_drug_id`),
  ADD KEY `suspect_drug_company_fk` (`suspect_drug_company_id`),
  ADD KEY `suspect_drug_branch_fk` (`suspect_drug_branch_id`),
  ADD KEY `suspect_drug_create_fk` (`create_by`),
  ADD KEY `suspect_drug_update_fk` (`update_by`),
  ADD KEY `suspect_drug_delete_fk` (`delete_by`),
  ADD KEY `suspect_drug_report_fk` (`suspect_drug_report_id`),
  ADD KEY `suspect_drug_route_fk` (`suspect_drug_route_id`),
  ADD KEY `suspect_drug_status_fk` (`suspect_drug_status_id`),
  ADD KEY `suspect_drug_class_fk` (`suspect_drug_class_id`),
  ADD KEY `suspect_drug_report_id` (`suspect_drug_report_id`),
  ADD KEY `suspect_drug_report_id_2` (`suspect_drug_report_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_mail` (`user_mail`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD KEY `user_office_FK` (`user_office_id`) USING BTREE,
  ADD KEY `user_branch_FK` (`user_branch_id`) USING BTREE,
  ADD KEY `user_company_FK` (`user_company_id`) USING BTREE,
  ADD KEY `user_create_fk` (`create_by`),
  ADD KEY `user_update_fk` (`update_by`),
  ADD KEY `user_delete_fk` (`delete_by`);

--
-- Indexes for table `work_institution`
--
ALTER TABLE `work_institution`
  ADD PRIMARY KEY (`work_institution_id`),
  ADD UNIQUE KEY `unique` (`work_institution_desc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adr`
--
ALTER TABLE `adr`
  MODIFY `adr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `age_group`
--
ALTER TABLE `age_group`
  MODIFY `age_group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `concomitant_drug`
--
ALTER TABLE `concomitant_drug`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `consality`
--
ALTER TABLE `consality`
  MODIFY `consality_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dosage`
--
ALTER TABLE `dosage`
  MODIFY `dosage_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `dosage_class`
--
ALTER TABLE `dosage_class`
  MODIFY `dosage_class_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `drugs`
--
ALTER TABLE `drugs`
  MODIFY `drug_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `drug_class`
--
ALTER TABLE `drug_class`
  MODIFY `drug_class_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `drug_route`
--
ALTER TABLE `drug_route`
  MODIFY `drug_route_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `drug_status`
--
ALTER TABLE `drug_status`
  MODIFY `drug_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `laboratory`
--
ALTER TABLE `laboratory`
  MODIFY `lab_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `lab_result_action`
--
ALTER TABLE `lab_result_action`
  MODIFY `lab_result_action_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `lab_status`
--
ALTER TABLE `lab_status`
  MODIFY `lab_status_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `office`
--
ALTER TABLE `office`
  MODIFY `office_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `patient_status`
--
ALTER TABLE `patient_status`
  MODIFY `patient_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `qualification`
--
ALTER TABLE `qualification`
  MODIFY `qualification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `reaction_outcome`
--
ALTER TABLE `reaction_outcome`
  MODIFY `reaction_outcome_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `reporter`
--
ALTER TABLE `reporter`
  MODIFY `reporter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `reporter_status`
--
ALTER TABLE `reporter_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `report_serious`
--
ALTER TABLE `report_serious`
  MODIFY `serious_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `report_status`
--
ALTER TABLE `report_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `report_type`
--
ALTER TABLE `report_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `seriousness_act`
--
ALTER TABLE `seriousness_act`
  MODIFY `seriousness_act_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `suspect_drug`
--
ALTER TABLE `suspect_drug`
  MODIFY `suspect_drug_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `work_institution`
--
ALTER TABLE `work_institution`
  MODIFY `work_institution_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `adr`
--
ALTER TABLE `adr`
  ADD CONSTRAINT `adr_report_id` FOREIGN KEY (`adr_report_id`) REFERENCES `report` (`report_id`);

--
-- Constraints for table `branch`
--
ALTER TABLE `branch`
  ADD CONSTRAINT `branch_company_fk` FOREIGN KEY (`branch_company_id`) REFERENCES `company` (`company_id`);

--
-- Constraints for table `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `company_create_fk` FOREIGN KEY (`create_by`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `company_delete_fk` FOREIGN KEY (`delete_by`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `company_update_fk` FOREIGN KEY (`update_by`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `concomitant_drug`
--
ALTER TABLE `concomitant_drug`
  ADD CONSTRAINT `con_branch_fk` FOREIGN KEY (`con_branch_id`) REFERENCES `branch` (`branch_id`),
  ADD CONSTRAINT `con_company_fk` FOREIGN KEY (`con_company_id`) REFERENCES `company` (`company_id`),
  ADD CONSTRAINT `con_create_fk` FOREIGN KEY (`create_by`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `con_delete_fk` FOREIGN KEY (`delete_by`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `con_dosage_fk` FOREIGN KEY (`con_dosage_form_id`) REFERENCES `dosage` (`dosage_id`),
  ADD CONSTRAINT `con_report_fk` FOREIGN KEY (`con_report_id`) REFERENCES `report` (`report_id`),
  ADD CONSTRAINT `con_route_fk` FOREIGN KEY (`con_route_id`) REFERENCES `drug_route` (`drug_route_id`),
  ADD CONSTRAINT `con_update_fk` FOREIGN KEY (`update_by`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `dosage_class`
--
ALTER TABLE `dosage_class`
  ADD CONSTRAINT `dosage_class_branch_fk` FOREIGN KEY (`dosage_class_branch_id`) REFERENCES `branch` (`branch_id`),
  ADD CONSTRAINT `dosage_class_company_fk` FOREIGN KEY (`dosage_class_company_id`) REFERENCES `company` (`company_id`),
  ADD CONSTRAINT `dosage_class_create_fk` FOREIGN KEY (`create_by`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `dosage_class_delete_fk` FOREIGN KEY (`delete_by`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `dosage_class_update_fk` FOREIGN KEY (`update_by`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `drugs`
--
ALTER TABLE `drugs`
  ADD CONSTRAINT `drug_create_fk` FOREIGN KEY (`create_by`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `drug_delete_fk` FOREIGN KEY (`delete_by`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `drug_update_fk` FOREIGN KEY (`update_by`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `drug_class`
--
ALTER TABLE `drug_class`
  ADD CONSTRAINT `drug_class_branch_fk` FOREIGN KEY (`drug_class_branch_is`) REFERENCES `branch` (`branch_id`),
  ADD CONSTRAINT `drug_class_company_fk` FOREIGN KEY (`drug_class_company_id`) REFERENCES `company` (`company_id`),
  ADD CONSTRAINT `drug_class_create_fk` FOREIGN KEY (`create_by`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `drug_class_delete_fk` FOREIGN KEY (`delete_by`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `drug_class_update_fk` FOREIGN KEY (`update_by`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `office`
--
ALTER TABLE `office`
  ADD CONSTRAINT `office_branch_fk` FOREIGN KEY (`office_branch_id`) REFERENCES `branch` (`branch_id`),
  ADD CONSTRAINT `office_company_fk` FOREIGN KEY (`office_company_id`) REFERENCES `company` (`company_id`),
  ADD CONSTRAINT `office_create_fk` FOREIGN KEY (`create_by`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `office_delete_fk` FOREIGN KEY (`delete_by`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `office_update_fk` FOREIGN KEY (`update_by`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `reporter_fk` FOREIGN KEY (`report_reporter_id`) REFERENCES `reporter` (`reporter_id`),
  ADD CONSTRAINT `serious_FK` FOREIGN KEY (`report_serious_id`) REFERENCES `report_serious` (`serious_id`),
  ADD CONSTRAINT `status_FK` FOREIGN KEY (`report_status_id`) REFERENCES `report_status` (`status_id`),
  ADD CONSTRAINT `type_FK` FOREIGN KEY (`report_type_id`) REFERENCES `report_type` (`type_id`);

--
-- Constraints for table `reporter`
--
ALTER TABLE `reporter`
  ADD CONSTRAINT `qualification_fk` FOREIGN KEY (`reporter_qualification_id`) REFERENCES `qualification` (`qualification_id`),
  ADD CONSTRAINT `reporter_status_fk` FOREIGN KEY (`reporter_status_id`) REFERENCES `reporter_status` (`status_id`),
  ADD CONSTRAINT `work_institution_fk` FOREIGN KEY (`reporter_work_institution_id`) REFERENCES `work_institution` (`work_institution_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `branch_FK` FOREIGN KEY (`user_branch_id`) REFERENCES `branch` (`branch_id`),
  ADD CONSTRAINT `company_FK` FOREIGN KEY (`user_company_id`) REFERENCES `company` (`company_id`),
  ADD CONSTRAINT `office_FK` FOREIGN KEY (`user_office_id`) REFERENCES `office` (`office_id`),
  ADD CONSTRAINT `user_create_fk` FOREIGN KEY (`create_by`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `user_delete_fk` FOREIGN KEY (`delete_by`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `user_update_fk` FOREIGN KEY (`update_by`) REFERENCES `user` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
