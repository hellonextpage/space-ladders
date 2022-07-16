-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2022 at 11:52 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spaceladders`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_client_chat`
--

CREATE TABLE `admin_client_chat` (
  `interaction_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `interaction_on` datetime NOT NULL,
  `interaction_text` text NOT NULL,
  `interaction_type` varchar(255) NOT NULL,
  `comment` text DEFAULT NULL,
  `interaction_from` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_client_chat`
--

INSERT INTO `admin_client_chat` (`interaction_id`, `project_id`, `interaction_on`, `interaction_text`, `interaction_type`, `comment`, `interaction_from`, `is_active`) VALUES
(8, 1, '2021-05-05 20:12:31', 'uploads/1620238351/', 'doc', 'kahsdkjhaksjd', 'client', 0),
(9, 1, '2021-05-05 20:13:22', 'uploads/1620238402/', 'doc', 'ok ok', 'admin', 0),
(11, 1, '2021-05-06 10:10:52', 'uploads/1620288652/', 'doc', 'ha', 'admin', 0),
(12, 1, '2021-05-06 10:12:24', '', '', 'asdasd', 'admin', 0),
(13, 1, '2021-05-06 10:17:13', '', '', 'Hi', 'admin', 0),
(14, 1, '2021-05-06 10:24:00', '', '', '', 'client', 0),
(15, 1, '2021-05-06 11:26:54', '', '', 'aweqwe', 'client', 0),
(16, 0, '2021-05-06 11:27:13', '', '', 'asdasd', 'client', 0),
(17, 1, '2021-05-06 11:32:35', '', '', 'asdasd', 'client', 0),
(18, 1, '2021-05-06 11:33:37', 'uploads/1620293617/', 'doc', 'asdasda', 'client', 0),
(19, 1, '2021-05-06 11:34:22', 'uploads/1620293662/', 'doc', 'asdasdasd', 'client', 0),
(20, 0, '2021-05-06 11:34:35', 'uploads/1620293674/', 'doc', 'asasdasd', 'client', 0),
(21, 1, '2021-05-06 11:43:49', 'uploads/1620294229/', 'doc', 'asdasd', 'client', 0),
(22, 1, '2021-05-06 11:54:51', 'uploads/1620294891/', 'doc', 'sdfsdfs', 'client', 0),
(23, 1, '2021-05-06 11:58:19', 'uploads/1620295099/', 'doc', 'asdsadasda', 'client', 0),
(24, 1, '2021-05-06 12:02:08', 'uploads/1620295328/', 'doc', 'dfsdfsdf', 'client', 0),
(25, 1, '2021-05-06 14:58:44', '', '', 'iuuiui', 'client', 0),
(26, 0, '2021-05-06 14:58:47', '', '', 'jhgjh]', 'client', 0),
(27, 1, '2021-05-06 14:59:05', '', '', 'yuhkjhkjhk', 'client', 0),
(28, 0, '2021-05-06 14:59:13', '', '', 'hjhhjhjhhj', 'client', 0),
(29, 1, '2021-05-06 14:59:42', '', '', 'jdkfjskdjfsdf', 'client', 0),
(30, 0, '2021-05-06 14:59:47', '', '', 'jsdfkkfsdf', 'client', 0),
(31, 1, '2021-05-06 15:00:08', '', '', 'slkjflsdfs', 'client', 0),
(32, 0, '2021-05-06 15:00:16', '', '', 'slkdjflksdf', 'client', 0),
(33, 1, '2021-05-06 15:04:54', '', '', 'hai', 'client', 0),
(42, 1, '2021-05-12 16:19:31', '', '', 'Admin', 'admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `username`, `password`, `is_active`, `created_on`, `updated_on`) VALUES
(1, 'admin', 'admin', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `client_details`
--

CREATE TABLE `client_details` (
  `client_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile_number` varchar(50) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `signup_on` datetime NOT NULL,
  `otp` varchar(50) NOT NULL,
  `otp_validation` varchar(50) NOT NULL,
  `client_status` enum('Requested','Approved') NOT NULL,
  `password` varchar(255) NOT NULL,
  `comments` text NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_on` datetime NOT NULL,
  `reach_in_whatsapp` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_details`
--

INSERT INTO `client_details` (`client_id`, `name`, `mobile_number`, `email_id`, `city`, `signup_on`, `otp`, `otp_validation`, `client_status`, `password`, `comments`, `is_active`, `created_on`, `updated_on`, `reach_in_whatsapp`) VALUES
(1, 'Niranjan', '8885344518', 'niranjanpusuluri4@gmail.com', 'Hyderabad', '0000-00-00 00:00:00', '1234', '', 'Requested', '123456', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(2, 'SaiKumar', '9959578585', 'fosdfsod@sdf.sdf', 'Hyderabad', '0000-00-00 00:00:00', '1234', '', 'Requested', '46665', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(3, 'SaiKumar', '9959578585', 'fosdfsod@sdf.sdf', 'Hyderabad', '2021-04-30 07:12:20', '1234', '', 'Requested', '46665', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(4, 'Sai Kumar', '9959578585', 'fosdfsod@sdf.sdf', 'Hyderabad', '2021-04-30 07:12:46', '1234', '', 'Requested', '46665', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(5, '', '9898989', '', 'Hyderabad', '2021-04-30 07:26:45', '1234', '', 'Requested', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(6, '', '98989894', '', 'Pune', '2021-04-30 07:27:43', '1234', '', 'Requested', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(7, '', '98989892', '', 'Pune', '2021-04-30 07:30:33', '1234', '', 'Requested', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(8, 'Niranjan', '7989001629', 'admin@admin.com', 'Pune', '2021-04-30 07:43:21', '1234', '', 'Requested', '1234', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(9, 'Niranjan', '7989001629', '', 'Pune', '2021-04-30 07:46:13', '1234', '', 'Requested', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(10, 'New ', '8989898989', '', 'Hyderabad', '2021-04-30 08:03:24', '1234', '', 'Requested', '1234', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(11, '', '', '', 'Hyderabad', '2021-05-03 06:45:02', '1234', '', 'Requested', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(12, 'asdas', 'asdasd', '', 'Pune', '2021-05-03 06:57:37', '1234', '', 'Requested', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(13, '', '', '', 'Hyderabad', '2021-05-03 07:01:06', '1234', '', 'Requested', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(14, '', '', '', 'Pune', '2021-05-03 07:02:18', '1234', '', 'Requested', '1234', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(15, 'Niranjan', '9696969696', '', 'Pune', '2021-05-03 07:38:17', '1234', '', 'Requested', '1234', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(16, '', '', '', 'Pune', '2021-05-04 15:00:16', '1234', '', 'Requested', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(17, '', '', '', 'Hyderabad', '2021-05-04 18:33:12', '1234', '', 'Requested', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(18, '', '', '', 'Hyderabad', '2021-05-04 18:33:40', '1234', '', 'Requested', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `client_escallation`
--

CREATE TABLE `client_escallation` (
  `escallation_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `client_comments` text NOT NULL,
  `escallation_on` datetime NOT NULL,
  `is_closed` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `admin_comments` text NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_escallation`
--

INSERT INTO `client_escallation` (`escallation_id`, `project_id`, `client_comments`, `escallation_on`, `is_closed`, `is_active`, `admin_comments`, `created_on`, `updated_on`) VALUES
(1, 1, 'This is for testing', '2021-04-30 08:55:06', 0, 1, 'asdasdas', '2021-04-30 08:55:06', '2021-05-03 18:45:53'),
(4, 1, 'zckzkxclz', '2021-05-12 10:02:59', 0, 0, '', '2021-05-12 10:02:59', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`id`, `name`, `email`, `mobile`, `created_on`) VALUES
(1, 'Niranjan', 'manager@gmail.com', '9999999999', '2021-05-12 17:33:53');

-- --------------------------------------------------------

--
-- Table structure for table `marketing_partners`
--

CREATE TABLE `marketing_partners` (
  `marketing_partner_id` int(11) NOT NULL,
  `partner_name` varchar(255) NOT NULL,
  `partner_company` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marketing_partners`
--

INSERT INTO `marketing_partners` (`marketing_partner_id`, `partner_name`, `partner_company`, `designation`, `mobile_no`, `email`, `area`, `city`, `status`, `is_active`, `created_on`, `updated_on`) VALUES
(1, 'Niranjan', 'Next Page', 'Web Developer', '7989001629', 'niranjan@gmail1.com', 'Madhapur', 'Hyderabad', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Ravi', 'Tech', 'Developer', '9657896578', 'new@gmail.com', 'Kukatpally', 'Hyderabad', 1, 1, '2021-05-03 00:00:00', '2021-05-03 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `marketing_partner_coupons`
--

CREATE TABLE `marketing_partner_coupons` (
  `coupon_id` int(11) NOT NULL,
  `marketing_partner_id` int(11) NOT NULL,
  `coupon_code` varchar(50) NOT NULL,
  `client_id` int(11) NOT NULL,
  `used_on` datetime NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marketing_partner_coupons`
--

INSERT INTO `marketing_partner_coupons` (`coupon_id`, `marketing_partner_id`, `coupon_code`, `client_id`, `used_on`, `is_active`, `created_on`, `updated_on`) VALUES
(1, 1, '1234', 0, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 1, 'NEW', 0, '0000-00-00 00:00:00', 1, '2021-05-03 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `project_menu`
--

CREATE TABLE `project_menu` (
  `project_id` int(11) NOT NULL,
  `project_id_for_client` int(11) NOT NULL,
  `project_name` text NOT NULL,
  `client_id` int(11) NOT NULL,
  `possession_in` enum('<3months','3-6months','>6months') NOT NULL,
  `floorplan` enum('1BHK','2BHK','3BHK','3+ BHK') NOT NULL,
  `purpose` enum('Move in','Move out','Renovate') NOT NULL,
  `coupon_code` varchar(255) NOT NULL,
  `project_start_date` datetime NOT NULL,
  `promissed_handover_date` datetime NOT NULL,
  `actual_handover_date` datetime NOT NULL,
  `project_manager_name` varchar(255) NOT NULL,
  `total_project_cost` decimal(10,2) NOT NULL,
  `factory_project_cost` decimal(10,2) NOT NULL,
  `custom_cost` decimal(10,2) NOT NULL,
  `po_date` datetime NOT NULL,
  `project_status` enum('Quote Requested','Design Ongoing','Design Accepted','Dropped Project','Received First Payment','Received Second Payment','Project Completed','Project HandOver') NOT NULL,
  `first_paymnt_made_on` datetime NOT NULL,
  `second_paymnt_made_on` datetime NOT NULL,
  `completed_on` datetime NOT NULL,
  `comments` text NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_on` datetime NOT NULL,
  `design` text DEFAULT NULL,
  `sla` text DEFAULT NULL,
  `contract` text DEFAULT NULL,
  `signoff` text DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `partner_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_menu`
--

INSERT INTO `project_menu` (`project_id`, `project_id_for_client`, `project_name`, `client_id`, `possession_in`, `floorplan`, `purpose`, `coupon_code`, `project_start_date`, `promissed_handover_date`, `actual_handover_date`, `project_manager_name`, `total_project_cost`, `factory_project_cost`, `custom_cost`, `po_date`, `project_status`, `first_paymnt_made_on`, `second_paymnt_made_on`, `completed_on`, `comments`, `is_active`, `created_on`, `updated_on`, `design`, `sla`, `contract`, `signoff`, `city`, `partner_id`) VALUES
(1, 0, 'New', 1, '<3months', '1BHK', 'Move in', '', '2021-05-03 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0.00', '0.00', '0.00', '0000-00-00 00:00:00', 'Quote Requested', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '2021-05-03 00:00:00', '2021-05-03 00:00:00', '', '', '', NULL, '', 0),
(2, 0, '', 4, '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0.00', '0.00', '0.00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, '', 0),
(3, 0, '', 5, '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0.00', '0.00', '0.00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, '', 0),
(4, 0, '', 6, '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0.00', '0.00', '0.00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, '', 0),
(5, 0, '', 7, '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0.00', '0.00', '0.00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, '', 0),
(6, 0, '1 BHK', 8, '', '', '', '1234', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0.00', '0.00', '0.00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, '', 0),
(7, 0, '', 9, '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0.00', '0.00', '0.00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, '', 0),
(8, 0, 'New Project', 10, '3-6months', '1BHK', 'Move out', '1234', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0.00', '0.00', '0.00', '0000-00-00 00:00:00', 'Quote Requested', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, 'Hyderabad', 0),
(9, 0, '', 11, '3-6months', '1BHK', 'Renovate', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0.00', '0.00', '0.00', '0000-00-00 00:00:00', 'Quote Requested', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, 'Hyderabad', 0),
(10, 0, '', 12, '3-6months', '3+ BHK', 'Renovate', '', '1970-01-01 00:00:00', '1970-01-01 00:00:00', '1970-01-01 00:00:00', '', '0.00', '0.00', '0.00', '1970-01-01 00:00:00', 'Quote Requested', '2021-02-02 00:00:00', '1970-01-01 00:00:00', '1970-01-01 00:00:00', '', 0, '2021-05-03 00:00:00', '2021-05-03 00:00:00', NULL, NULL, NULL, NULL, 'Pune', 0),
(11, 0, '', 13, '>6months', '3BHK', 'Move out', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0.00', '0.00', '0.00', '0000-00-00 00:00:00', 'Quote Requested', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '2021-05-03 00:00:00', '2021-05-03 00:00:00', NULL, NULL, NULL, NULL, 'Hyderabad', 0),
(12, 0, 'Interior Design', 15, '3-6months', '3BHK', 'Move in', '1234', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-05-03 00:00:00', 'dvslkdclk', '23423423.00', '23423.00', '2342.00', '0000-00-00 00:00:00', 'Project HandOver', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '2021-05-03 00:00:00', '2021-05-03 00:00:00', 'HERITAGEGHEE.png', '', '', 'code12.jpg', 'Pune', 1),
(14, 0, '', 16, '<3months', '3+ BHK', 'Move in', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0.00', '0.00', '0.00', '0000-00-00 00:00:00', 'Quote Requested', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, 'Pune', 0),
(15, 0, '', 17, '3-6months', '1BHK', 'Move out', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0.00', '0.00', '0.00', '0000-00-00 00:00:00', 'Quote Requested', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, 'Hyderabad', 0),
(16, 0, '', 18, '3-6months', '1BHK', 'Move out', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0.00', '0.00', '0.00', '0000-00-00 00:00:00', 'Quote Requested', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, 'Hyderabad', 0),
(17, 0, '', 14, '<3months', '2BHK', 'Move out', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0.00', '0.00', '0.00', '0000-00-00 00:00:00', 'Quote Requested', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, 'Pune', 0),
(18, 0, '', 14, '<3months', '2BHK', 'Move in', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0.00', '0.00', '0.00', '0000-00-00 00:00:00', 'Quote Requested', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, 'Pune', 0);

-- --------------------------------------------------------

--
-- Table structure for table `project_tracking`
--

CREATE TABLE `project_tracking` (
  `project_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `updated_on` datetime NOT NULL,
  `comment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_tracking`
--

INSERT INTO `project_tracking` (`project_id`, `status`, `updated_on`, `comment`) VALUES
(12, 'Design Ongoing', '2021-05-03 07:52:06', ''),
(12, 'Design Accepted', '2021-05-03 08:01:24', ''),
(1, 'Quote Requested', '2021-05-03 08:01:37', ''),
(12, 'Project HandOver', '2021-05-03 09:37:39', ''),
(12, 'Project HandOver', '2021-05-03 09:37:40', '');

-- --------------------------------------------------------

--
-- Table structure for table `referrals`
--

CREATE TABLE `referrals` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `referred_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `referrals`
--

INSERT INTO `referrals` (`id`, `name`, `email`, `mobile`, `client_id`, `referred_on`) VALUES
(2, 'sdfs', 'sdfsdf@sdf.sdf', '9998989898', 1, '2021-05-06 16:08:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_client_chat`
--
ALTER TABLE `admin_client_chat`
  ADD PRIMARY KEY (`interaction_id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `client_details`
--
ALTER TABLE `client_details`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `client_escallation`
--
ALTER TABLE `client_escallation`
  ADD PRIMARY KEY (`escallation_id`);

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marketing_partners`
--
ALTER TABLE `marketing_partners`
  ADD PRIMARY KEY (`marketing_partner_id`);

--
-- Indexes for table `marketing_partner_coupons`
--
ALTER TABLE `marketing_partner_coupons`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Indexes for table `project_menu`
--
ALTER TABLE `project_menu`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `referrals`
--
ALTER TABLE `referrals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_client_chat`
--
ALTER TABLE `admin_client_chat`
  MODIFY `interaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client_details`
--
ALTER TABLE `client_details`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `client_escallation`
--
ALTER TABLE `client_escallation`
  MODIFY `escallation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `marketing_partners`
--
ALTER TABLE `marketing_partners`
  MODIFY `marketing_partner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `marketing_partner_coupons`
--
ALTER TABLE `marketing_partner_coupons`
  MODIFY `coupon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `project_menu`
--
ALTER TABLE `project_menu`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `referrals`
--
ALTER TABLE `referrals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
