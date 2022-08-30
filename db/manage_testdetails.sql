-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2021 at 09:06 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studybuddy`
--

-- --------------------------------------------------------

--
-- Table structure for table `manage_testdetails`
--

CREATE TABLE `manage_testdetails` (
  `id` int(11) NOT NULL,
  `unic_id` varchar(100) NOT NULL,
  `course_id` int(11) NOT NULL,
  `test_name` varchar(100) NOT NULL,
  `test_type` int(11) NOT NULL,
  `start_date` varchar(100) NOT NULL,
  `end_date` varchar(100) NOT NULL,
  `total_question` varchar(100) NOT NULL,
  `total_mark` varchar(200) NOT NULL,
  `each_question_mark` varchar(100) NOT NULL,
  `negative_mark` varchar(100) NOT NULL,
  `cip` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `cby` int(11) NOT NULL,
  `cstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage_testdetails`
--

INSERT INTO `manage_testdetails` (`id`, `unic_id`, `course_id`, `test_name`, `test_type`, `start_date`, `end_date`, `total_question`, `total_mark`, `each_question_mark`, `negative_mark`, `cip`, `created_at`, `updated_at`, `cby`, `cstatus`) VALUES
(3, 'QB3GUA', 1, 'Test1', 1, '2021-10-01', '2021-10-20', '20', '20', '1', '0', '::1', '2021-10-19 11:25:31', '2021-10-19 11:25:31', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manage_testdetails`
--
ALTER TABLE `manage_testdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manage_testdetails`
--
ALTER TABLE `manage_testdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
