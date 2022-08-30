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
-- Table structure for table `manage_quesion_hub`
--

CREATE TABLE `manage_quesion_hub` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `section_id` varchar(10) NOT NULL,
  `passage` longtext NOT NULL,
  `passage_image` varchar(200) NOT NULL,
  `question` longtext NOT NULL,
  `question_image` varchar(100) NOT NULL,
  `option1` mediumtext NOT NULL,
  `option2` mediumtext NOT NULL,
  `option3` mediumtext NOT NULL,
  `option4` mediumtext NOT NULL,
  `correct_answer` longtext NOT NULL,
  `explanation` longtext NOT NULL,
  `explanation_file` varchar(50) NOT NULL,
  `reference` mediumtext NOT NULL,
  `cip` varchar(200) NOT NULL,
  `cby` int(11) NOT NULL,
  `cstatus` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage_quesion_hub`
--

INSERT INTO `manage_quesion_hub` (`id`, `course_id`, `section_id`, `passage`, `passage_image`, `question`, `question_image`, `option1`, `option2`, `option3`, `option4`, `correct_answer`, `explanation`, `explanation_file`, `reference`, `cip`, `cby`, `cstatus`, `created_at`, `updated_at`) VALUES
(16, 1, '', '   Web development test   Web development test   Web development test   Web development test   Web development test   Web development test   Web development test   Web development test   Web development test   Web development test   Web development test   Web development test   Web development test   Web development test   Web development test   Web development test   Web development test   Web development test   Web development test   Web development test   Web development test   Web development test   Web development test   Web development test   Web development test   Web development test   Web development test   Web development test   Web development test   Web development test   Web development test   Web development test', '', 'question 1 test 1', '', 'A', 'B', 'C', 'D', 'C', '  C is correct     ', '', 'C', '::1', 12, 1, '2021-10-27 11:33:10', '2021-10-27 11:33:10'),
(17, 1, '', '  Web development', '', 'question 2 test 1', '', 'A', 'B', 'C', 'D', 'D is correct', '  D  ', '', 'D', '::1', 12, 1, '2021-10-27 11:34:27', '2021-10-27 11:34:27'),
(18, 1, '', '  Web Development test', '', 'question 3 test 1', '', 'A', 'B', 'C', 'D', 'A', '  A is correct  ', '', 'A', '::1', 12, 1, '2021-10-27 11:35:22', '2021-10-27 11:35:22'),
(19, 1, '', '  Web Development test', '', 'question 4 test 1', '', 'A', 'B', 'C', 'D', 'B', '  B is correct  ', '', 'B', '::1', 12, 1, '2021-10-27 11:36:34', '2021-10-27 11:36:34'),
(20, 1, '', '  Web Development test ', '', 'question 5 test 1', '', 'A', 'B', 'C', 'D', 'D', '  D is correct  ', '', 'D', '::1', 12, 1, '2021-10-27 11:38:09', '2021-10-27 11:38:09'),
(21, 1, '', '  Web Development  test ', '', 'question 6 test 1', '', 'A', 'B', 'C', 'D', 'B', '  B is correct   ', '', 'B', '::1', 12, 1, '2021-10-27 11:39:30', '2021-10-27 11:39:30'),
(22, 1, '', ' Web Development test ', '', 'question 7  test 1', '', 'A', 'B', 'C', 'D', 'C', '  C is correct  ', '', 'c', '::1', 12, 1, '2021-10-27 11:40:47', '2021-10-27 11:40:47'),
(23, 1, '', '  Web Development test', '', 'question 8 test 1', '', 'A', 'B', 'C', 'D', 'D', '  D  is correct  ', '', 'D', '::1', 12, 1, '2021-10-27 11:42:05', '2021-10-27 11:42:05'),
(25, 1, '', '  web development ', '', 'question 1 test 2', '', 'A', 'B', 'C', 'D', 'B', '  B is correct  ', '', 'B', '::1', 12, 1, '2021-10-27 11:46:56', '2021-10-27 11:46:56'),
(26, 1, '', '  web development', '', 'question 2 test 2', '', 'A', 'B', 'C', 'D', 'D', '  D is correct  ', '', 'D', '::1', 12, 1, '2021-10-27 11:47:58', '2021-10-27 11:47:58'),
(27, 1, '', '  Web Development', '', 'question 3 test 2', '', 'A', 'B', 'C', 'D', 'B', '  B  is correct  ', '', 'B', '::1', 12, 1, '2021-10-27 11:49:15', '2021-10-27 11:49:15'),
(28, 1, '', '   Web development test', '', 'question 4 test 2', '', 'A', 'B', 'C', 'D', 'A', '  A is correct    ', '', 'A', '::1', 12, 1, '2021-10-27 11:50:23', '2021-10-27 11:50:23'),
(29, 1, '', '  web development test', '', 'question 5 test 2', '', 'A', 'B', 'C', 'D', 'C', '  C is correct  ', '', 'C', '::1', 12, 1, '2021-10-27 11:51:33', '2021-10-27 11:51:33'),
(30, 1, '', '  web development test', '', 'question 6 test 2', '', 'A', 'B', 'C', 'D', 'C', '  C is correct    ', '', 'C', '::1', 12, 1, '2021-10-27 11:52:24', '2021-10-27 11:52:24'),
(31, 1, '', '   web development test', '', 'question 7 test 2', '', 'A', 'B', 'C', 'D', 'D', '  D is correct    ', '', 'D', '::1', 12, 1, '2021-10-27 11:53:08', '2021-10-27 11:53:08'),
(32, 1, '', '  web development test', '', 'question 8test 2', '', 'A', 'B', 'C', 'D', 'A', '  A is correct  ', '', 'A', '::1', 12, 1, '2021-10-27 11:54:22', '2021-10-27 11:54:22'),
(33, 1, '', '  web development test', '', 'question 9 test 2', '', 'A', 'B', 'C', 'D', 'D', '  D is correct  ', '', 'D', '::1', 12, 1, '2021-10-27 11:55:02', '2021-10-27 11:55:02'),
(34, 2, '', ' Android Development', '', 'question 1 test 1', '', 'A', 'B', 'C', 'D', 'D', '  D is correct', '', 'D', '::1', 1, 1, '2021-10-27 11:57:34', '2021-10-27 11:57:34'),
(35, 2, '', ' Android Development', '', 'question 2 test1', '', 'A', 'B', 'C', 'D', 'D', '  D  is correct', '', 'D', '::1', 1, 1, '2021-10-27 11:58:36', '2021-10-27 11:58:36'),
(36, 2, '', ' Android Development', '', 'question 3 test 1', '', 'A', 'B', ' C', ' D', 'A', '  A is correct', '', 'A', '::1', 1, 1, '2021-10-27 11:59:37', '2021-10-27 11:59:37'),
(37, 2, '', ' Android Development', '', 'question 4 test1', '', 'A', 'B', ' C', ' D', 'C', '  c is correct', '', 'C', '::1', 1, 1, '2021-10-27 12:00:17', '2021-10-27 12:00:17'),
(38, 2, '', ' Android Development', '', 'question 4 test 1', '', 'A', 'B', 'C', 'D', 'C', '  c is correct', '', 'C', '::1', 1, 1, '2021-10-27 12:00:56', '2021-10-27 12:00:56'),
(39, 2, '3', ' Android Development', '', 'question 4 test1', '', 'A', 'B', 'C', 'D', 'D', '  D', '', 'D', '::1', 1, 1, '2021-10-27 12:01:31', '2021-10-27 12:01:31'),
(40, 2, '3', ' Android Development', '', 'question 6 test1', '', 'A', 'B', ' C', ' D', 'B', '  B IS CORRECT', '', 'B', '::1', 1, 1, '2021-10-27 12:02:09', '2021-10-27 12:02:09'),
(41, 2, '3', ' Android Development', '', 'question 7 test1', '', 'A', 'B', ' C', ' D', 'C', '  c is correct', '', 'C', '::1', 1, 2, '2021-10-27 12:02:50', '2021-10-27 12:02:50'),
(42, 2, '3', ' Android Development', '', 'question 8 test 1', '', 'A', 'B', ' C', ' D', 'D', '  D is correct', '', 'D', '::1', 1, 1, '2021-10-27 12:03:28', '2021-10-27 12:03:28'),
(43, 2, '3', ' Android Development', '', 'question 9 test1', '', 'A', 'B', ' C', ' D', 'C', 'C is correct  ', '', 'C', '::1', 1, 1, '2021-10-27 12:04:04', '2021-10-27 12:04:04'),
(44, 2, '2', ' Android Development', '', 'question 10 test1', '', 'A', 'B', ' C', ' D', 'A', '  A is correct', '', 'A', '::1', 1, 1, '2021-10-27 12:04:44', '2021-10-27 12:04:44'),
(46, 2, '2', '  Android Development', '', 'question1 test2', '', 'A', 'B', 'C', 'D', 'B', '  B is correct  ', '', 'B', '::1', 12, 1, '2021-10-27 12:07:38', '2021-10-27 12:07:38'),
(47, 2, '2', '  :Android Development', '', 'question2 test2', '', 'A', 'B', 'C', 'D', 'D', '  D is correct  ', '', 'D', '::1', 12, 1, '2021-10-27 12:08:12', '2021-10-27 12:08:12'),
(48, 2, '2', '  Android Development', '', 'question 3 test2', '', 'A', 'B', 'C', 'D', 'C', '  C is correct  ', '', 'C', '::1', 12, 1, '2021-10-27 12:08:57', '2021-10-27 12:08:57'),
(49, 2, '2', '  Android Development', '', 'question 4 test2', '', 'A', 'B', ' C', ' D', 'A', '  A is correct  ', '', 'A', '::1', 12, 1, '2021-10-27 12:09:33', '2021-10-27 12:09:33'),
(50, 2, '1', '  Android Development', '', 'question 5 test2', '', 'A', 'B', ' C', ' D', 'B', '  B is correct  ', '', 'B', '::1', 12, 1, '2021-10-27 12:10:07', '2021-10-27 12:10:07'),
(51, 2, '1', '   Android Development', '', 'question 6 test2', '', 'A', 'B', ' C', ' D', 'C', '  C is correct  ', '', 'c', '::1', 12, 1, '2021-10-27 12:10:45', '2021-10-27 12:10:45'),
(52, 2, '1', '  Android Development', '', 'question 7 test2', '', 'A', 'B', ' C', ' D', 'B', '  B is correct  ', '', 'B', '::1', 12, 1, '2021-10-27 12:11:26', '2021-10-27 12:11:26'),
(53, 2, '1', '  Android Development', '', 'question 8 test2', '', 'A', 'B', ' C', ' D', 'B', '  B is correct  ', '', 'B', '::1', 12, 1, '2021-10-27 12:12:02', '2021-10-27 12:12:02'),
(54, 2, '1', '  Android Development', '', 'question 9 test2', '', 'A', 'B', 'C', ' D', 'A', '  A is correct  ', '', 'A', '::1', 12, 1, '2021-10-27 12:12:46', '2021-10-27 12:12:46'),
(55, 1, '', '  web development', '', 'question 10 test2', '', 'A', 'B', 'C', 'D', 'B', '  B is correct  ', '', 'B', '::1', 12, 1, '2021-10-27 13:09:59', '2021-10-27 13:09:59'),
(56, 2, '', '  Android Development', '', 'question 10', '', 'A', 'B', ' C', ' D', 'A', '  A is correct  ', '', 'A', '::1', 1, 1, '2021-10-27 13:14:02', '2021-10-27 13:14:02'),
(57, 2, '', '  Android Development', '', 'question 10 test2', '', 'A', 'B', ' C', ' D', 'B', '  B is correct  ', '', 'B', '::1', 1, 1, '2021-10-27 14:02:24', '2021-10-27 14:02:24'),
(60, 1, '', ' Web Development test ', '', 'question 9  test 1', '', 'A', 'B', 'C', 'D', 'C', '  C is correct  ', '', 'c', '::1', 1, 2, '2021-10-27 11:40:47', '2021-10-27 11:40:47'),
(64, 2, '', '   26 passage of number 2622', 'IMG-7099.png', '526', 'IMG-65209.png', 'In this condition forward flexion is the most limited range of motion', 'Annular ligament tear', 'In this condition forward flexion is less limited than external rotation range of motion', '•	Grip strength testing', 'abc', '  66    ', 'IMG-6433.png', 'https://www.youtube.com/watch?v=5FwcAsb8WcE', '::1', 1, 1, '2021-11-01 16:28:29', '2021-11-01 16:28:29'),
(65, 3, '', ' ', '', 'what is first question?', '', 'a', 'b', 'c', 'd', 'a', '  testing purpose', '', 'net', '::1', 1, 2, '2021-11-08 10:25:11', '2021-11-08 10:25:11'),
(66, 1, '', '    ', '', '2nd question?', '', 'a', 'b', 'c', 'd', 'a\'s', 'test        ', '', 'test', '::1', 1, 2, '2021-11-08 10:25:59', '2021-11-08 10:25:59'),
(68, 1, '2', '   new1', 'IMG-46851.png', 'new1', '', 'a', 'b', 'c', 'd', 'c', '  fgdgdfgdfg    ', 'IMG-39686.png', 'https://www.youtube.com/watch?v=4mJC_AZE6gk', '::1', 1, 1, '2021-11-09 17:08:27', '2021-11-09 17:08:27'),
(69, 1, '1', '  new2', 'IMG-3928.png', 'new2', 'IMG-38465.png', 'a', 'b', 'c', 'd', 'd', '  dsfsfgh fdgdfg  ', 'IMG-2803.png', 'https://www.youtube.com/watch?v=o3bIGZijKzY', '::1', 1, 1, '2021-11-09 17:09:11', '2021-11-09 17:09:11'),
(70, 3, '1', ' Which of the following centers tabs/pills?', 'IMG-57381.png', 'Which of the following centers tabs/pills?', 'IMG-32732.png', '.nav-justified', '.nav nav-pills', ' .nav-stacked', '.nav.navbar-nav', '.nav-justified', '  Explanation: .nav-justified centers tabs/pills, on screens smaller than 786px the items are stacked and the content will remained centered, .nav nav-pills indicates a pill menu, .nav.navbar-nav contains list items with links inside navigation bar, .nav-stacked is for vertically stack tabs or pills.', 'IMG-5622.png', 'https://www.youtube.com/watch?v=5FwcAsb8WcE', '::1', 1, 1, '2021-11-09 17:58:42', '2021-11-09 17:58:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manage_quesion_hub`
--
ALTER TABLE `manage_quesion_hub`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manage_quesion_hub`
--
ALTER TABLE `manage_quesion_hub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
