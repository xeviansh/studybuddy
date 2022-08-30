-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2021 at 01:34 PM
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
-- Table structure for table `manage_syllabus_details`
--

CREATE TABLE `manage_syllabus_details` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `syllabus_name` varchar(200) NOT NULL,
  `document_name` varchar(200) NOT NULL,
  `document` varchar(200) NOT NULL,
  `cip` varchar(200) NOT NULL,
  `cby` int(22) NOT NULL,
  `cstatus` int(2) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage_syllabus_details`
--

INSERT INTO `manage_syllabus_details` (`id`, `course_id`, `syllabus_name`, `document_name`, `document`, `cip`, `cby`, `cstatus`, `created_at`, `updated_at`) VALUES
(4, 17, 'sdf', 'sdf', 'course11.jpg', '::1', 1, 1, '2021-11-01 11:59:54', '2021-11-01 11:59:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manage_syllabus_details`
--
ALTER TABLE `manage_syllabus_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manage_syllabus_details`
--
ALTER TABLE `manage_syllabus_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
