-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2021 at 01:33 PM
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
-- Table structure for table `manage_section`
--

CREATE TABLE `manage_section` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cip` varchar(250) NOT NULL,
  `cby` int(11) NOT NULL,
  `cstatus` int(11) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage_section`
--

INSERT INTO `manage_section` (`id`, `name`, `cip`, `cby`, `cstatus`, `updated_at`, `created_at`) VALUES
(1, 'section 1', '::1', 1, 1, '2021-11-09 16:43:28', '2021-11-09 16:43:28'),
(2, 'section 2', '::1', 1, 1, '2021-11-09 16:43:35', '2021-11-09 16:43:35'),
(3, 'section 3', '::1', 1, 1, '2021-11-09 16:43:45', '2021-11-09 16:43:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manage_section`
--
ALTER TABLE `manage_section`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manage_section`
--
ALTER TABLE `manage_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
