-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2021 at 06:57 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

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
-- Table structure for table `attempt_details`
--

CREATE TABLE `attempt_details` (
  `id` int(11) NOT NULL,
  `test_id` varchar(50) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `cip` varchar(200) NOT NULL,
  `cby` varchar(200) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attempt_details`
--

INSERT INTO `attempt_details` (`id`, `test_id`, `student_id`, `date`, `time`, `cip`, `cby`, `updated_at`, `created_at`) VALUES
(1, '2', '10', '2021-101-12', '11-34-38', '::1', '10', '2021-11-12 11:34:38', '2021-11-12 11:34:38'),
(2, '2', '10', '2021-101-12', '11-58-16', '::1', '10', '2021-11-12 11:58:16', '2021-11-12 11:58:16'),
(3, '2', '10', '2021-101-12', '12-18-13', '::1', '10', '2021-11-12 12:18:13', '2021-11-12 12:18:13'),
(4, '2', '10', '2021-101-12', '12-19-4', '::1', '10', '2021-11-12 12:19:04', '2021-11-12 12:19:04'),
(5, '2', '10', '2021-101-12', '12-30-17', '::1', '10', '2021-11-12 12:30:17', '2021-11-12 12:30:17'),
(6, '2', '10', '2021-101-12', '12-31-18', '::1', '10', '2021-11-12 12:31:18', '2021-11-12 12:31:18'),
(7, '2', '10', '2021-101-12', '12-37-35', '::1', '10', '2021-11-12 12:37:35', '2021-11-12 12:37:35'),
(8, '2', '10', '2021-101-12', '13-0-56', '::1', '10', '2021-11-12 13:00:56', '2021-11-12 13:00:56'),
(9, '2', '10', '2021-101-12', '14-18-54', '::1', '10', '2021-11-12 14:18:54', '2021-11-12 14:18:54'),
(10, '2', '10', '2021-101-12', '15-31-26', '::1', '10', '2021-11-12 15:31:26', '2021-11-12 15:31:26'),
(11, '2', '10', '2021-101-12', '17-7-38', '::1', '10', '2021-11-12 17:07:38', '2021-11-12 17:07:38'),
(12, '2', '10', '2021-101-12', '17-11-46', '::1', '10', '2021-11-12 17:11:46', '2021-11-12 17:11:46'),
(13, '2', '10', '2021-101-14', '23-36-18', '::1', '10', '2021-11-14 23:36:18', '2021-11-14 23:36:18'),
(14, '2', '10', '2021-101-15', '16-29-48', '::1', '10', '2021-11-15 16:29:48', '2021-11-15 16:29:48'),
(15, '2', '10', '2021-101-17', '16-18-49', '::1', '10', '2021-11-17 16:18:49', '2021-11-17 16:18:49'),
(16, '2', '10', '2021-101-17', '18-29-30', '::1', '10', '2021-11-17 18:29:30', '2021-11-17 18:29:30'),
(17, '3', '10', '2021-111-2', '18-20-36', '::1', '10', '2021-12-02 18:20:36', '2021-12-02 18:20:36'),
(18, '2', '10', '2021-111-2', '18-20-50', '::1', '10', '2021-12-02 18:20:50', '2021-12-02 18:20:50');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `ID` int(11) NOT NULL,
  `course_title` varchar(255) NOT NULL,
  `course_description` varchar(255) NOT NULL,
  `course_duration` varchar(255) NOT NULL,
  `course_img` varchar(255) NOT NULL,
  `course_fee` varchar(255) NOT NULL,
  `lessons` varchar(255) NOT NULL,
  `cstatus` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `course_subtitle` varchar(200) NOT NULL,
  `total_lecture` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`ID`, `name`, `email`, `phone`, `message`, `status`, `created_at`) VALUES
(0, 'Anup Dubey', 'admin@gmail.com', '8521526062', 'dfgdf', '0', '2021-10-29 06:35:08'),
(0, 'Anup Dubey', 'admin@gmail.com', '8521526062', 'dfgdf', '0', '2021-10-29 06:40:38'),
(0, 'Anup Dubey', 'admin@gmail.com', '7256839304', 'tyuyut', '0', '2021-10-29 06:47:25');

-- --------------------------------------------------------

--
-- Table structure for table `manage_answer_sheet`
--

CREATE TABLE `manage_answer_sheet` (
  `id` int(11) NOT NULL,
  `test_id` varchar(200) NOT NULL,
  `course_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `attempt_id` varchar(11) NOT NULL,
  `selected_answer` varchar(200) NOT NULL,
  `correct_answer` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `cip` varchar(200) NOT NULL,
  `cby` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage_answer_sheet`
--

INSERT INTO `manage_answer_sheet` (`id`, `test_id`, `course_id`, `question_id`, `attempt_id`, `selected_answer`, `correct_answer`, `type`, `cip`, `cby`, `created_at`) VALUES
(1, '2', 3, 1, '18', 'HyperText Markup Language', 'HyperText Markup Language', 'submit', '::1', '10', '2021-12-02 18:20:55'),
(2, '2', 3, 2, '18', 'HTML, Head, Title, Body', 'Head, Title, HTML, body', 'submit', '::1', '10', '2021-12-02 18:20:57'),
(3, '2', 3, 3, '18', 'b', 'br', 'submit', '::1', '10', '2021-12-02 18:21:00'),
(4, '2', 3, 7, '18', 'All of the above', 'disc, circle, square', 'submit', '::1', '10', '2021-12-02 18:21:02');

-- --------------------------------------------------------

--
-- Table structure for table `manage_instructor`
--

CREATE TABLE `manage_instructor` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `qualification` longtext NOT NULL,
  `experience` longtext NOT NULL,
  `image` varchar(200) NOT NULL,
  `achievements` longtext NOT NULL,
  `cip` varchar(200) NOT NULL,
  `cby` int(11) NOT NULL,
  `cdate` datetime NOT NULL DEFAULT current_timestamp(),
  `cstatus` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage_instructor`
--

INSERT INTO `manage_instructor` (`id`, `name`, `mobile`, `email`, `qualification`, `experience`, `image`, `achievements`, `cip`, `cby`, `cdate`, `cstatus`) VALUES
(1, 'Anup Dubey', '8521526062', 'maddeveloper94@gmail.com', 'MCA', '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: \"Open Sans\", sans-serif; font-size: 14px;\">+1 (647) 907-6014</p><li style=\"margin: 5px 0px; padding-left: 15px; position: relative; color: rgb(102, 102, 102); font-family: \"Open Sans\", sans-serif; font-size: 14px;\">BsPT. Licensed and registered therapist of Newyork.</li><li style=\"margin: 5px 0px; padding-left: 15px; position: relative; color: rgb(102, 102, 102); font-family: \"Open Sans\", sans-serif; font-size: 14px;\">Student Co- ordintor and Manager.</li><li style=\"margin: 5px 0px; padding-left: 15px; position: relative; color: rgb(102, 102, 102); font-family: \"Open Sans\", sans-serif; font-size: 14px;\">Mentor of PCE written component for the past 5 years.</li>', '426124.jpg', '<p><span style=\"color: rgb(102, 102, 102); font-family: \"Open Sans\", sans-serif; font-size: 14px;\">We conduct over 65+ lectures which are over 150+ hours of quality coaching for PCE in Musculoskeletal, Cardiopulmonary, Neurology, Non-systems and Multi-systems by our dedicated and qualified professionals in their fields. They are extremely cost effective and suits one’s pockets. Our webinars are interactive, goal oriented and simplified for better understanding and grasping of the knowledge of the students. The duration of our one batch is for approximately 2.5 months. During this tenure you will receive an invitation everyday via email to access the live lecture as per the schedule. You can type in the chat box if you have any doubts or questions related to the topic that will be taught during the live session. So, it will be a group class and not one on one.</span><br></p>', '::1', 1, '2021-11-01 07:51:55', 1),
(2, 'Rahul Kumarp', '7766062317', 'rahul@gmail.com', 'BCA', '<p><span style=\"color: rgb(102, 102, 102); font-family: \"Open Sans\", sans-serif; font-size: 14px;\">We conduct over 65+ lectures which are over 150+ hours of quality coaching for PCE in Musculoskeletal, Cardiopulmonary, Neurology, Non-systems and Multi-systems by our dedicated and qualified professionals in their fields. They are extremely cost effective and suits one’s pockets. Our webinars are interactive, goal oriented and simplified for better understanding and grasping of the knowledge of the students. The duration of our one batch is for approximately 2.5 months. During this tenure you will receive an invitation everyday via email to access the live lecture as per the schedule. You can type in the chat box if you have any doubts or questions related to the topic that will be taught during the live session. So, it will be a group class and not one on one.</span><br></p>', '580676.jpg', '<p><span style=\"color: rgb(102, 102, 102); font-family: \"Open Sans\", sans-serif; font-size: 14px;\">We conduct over 65+ lectures which are over 150+ hours of quality coaching for PCE in Musculoskeletal, Cardiopulmonary, Neurology, Non-systems and Multi-systems by our dedicated and qualified professionals in their fields. They are extremely cost effective and suits one’s pockets. Our webinars are interactive, goal oriented and simplified for better understanding and grasping of the knowledge of the students. The duration of our one batch is for approximately 2.5 months. During this tenure you will receive an invitation everyday via email to access the live lecture as per the schedule. You can type in the chat box if you have any doubts or questions related to the topic that will be taught during the live session. So, it will be a group class and not one on one.</span><br></p>', '::1', 1, '2021-11-01 07:51:31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `manage_my_course`
--

CREATE TABLE `manage_my_course` (
  `id` int(11) NOT NULL,
  `student_id` varchar(11) NOT NULL,
  `purchase_type` varchar(200) NOT NULL,
  `course_id` varchar(11) DEFAULT NULL,
  `duration` varchar(200) NOT NULL,
  `test_id` varchar(11) DEFAULT NULL,
  `activation_date` varchar(200) NOT NULL,
  `expiry_data` varchar(200) NOT NULL,
  `payment_id` varchar(200) NOT NULL,
  `payment_response` longtext NOT NULL,
  `amount` varchar(200) NOT NULL,
  `cip` varchar(200) NOT NULL,
  `cby` varchar(200) NOT NULL,
  `cstatus` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage_my_course`
--

INSERT INTO `manage_my_course` (`id`, `student_id`, `purchase_type`, `course_id`, `duration`, `test_id`, `activation_date`, `expiry_data`, `payment_id`, `payment_response`, `amount`, `cip`, `cby`, `cstatus`, `created_at`, `updated_at`) VALUES
(1, '10', 'test', '3', '365', '1', '2021-11-11', '2022-11-11', '123456', '12554544', '50000', '::1', '10', NULL, '2021-11-11 17:59:39', '2021-11-11 17:59:39'),
(2, '10', 'test', '3', '365', '2', '2021-11-12', '2022-11-12', '123456', '12554544', '50000', '::1', '10', NULL, '2021-11-12 11:27:48', '2021-11-12 11:27:48'),
(3, '10', 'test', '3', '365', '3', '2021-11-12', '2022-11-12', '123456', '12554544', '50000', '::1', '10', NULL, '2021-11-12 11:28:10', '2021-11-12 11:28:10'),
(4, '10', 'test', '1', '365', '4', '2021-11-15', '2022-11-15', '123456', '12554544', '50000', '::1', '10', NULL, '2021-11-15 16:23:41', '2021-11-15 16:23:41');

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
(1, 3, '1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'IMG-86800.png', 'HTML stands for -', 'IMG-22078.png', 'HighText Machine Language', 'HyperText and links Markup Language', 'HyperText Markup Language', 'None of these', 'HyperText Markup Language', '  HTML is an acronym that stands for HyperText Markup Language, which is used for creating web pages and web applications.\r\n\r\nHyperText simply means \"Text within Text.\" A text has a link within it, is a hypertext. A markup language is a computer language that is used to apply layout and formatting conventions to a text document.', 'IMG-61251.png', 'https://www.youtube.com/watch?v=5FwcAsb8WcE', '::1', 1, 1, '2021-11-11 15:05:47', '2021-11-11 15:05:47'),
(2, 3, '1', ' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'IMG-72407.png', 'The correct sequence of HTML tags for starting a webpage is -', 'IMG-28945.png', 'Head, Title, HTML, body', 'HTML, Body, Title, Head', 'HTML, Head, Title, Body', 'HTML, Head, Title, Body', 'Head, Title, HTML, body', '  The correct sequence of HTML tags to start a webpage is html, head, title, and body.', 'IMG-20639.png', 'https://www.youtube.com/watch?v=4mJC_AZE6gk', '::1', 1, 1, '2021-11-11 15:07:10', '2021-11-11 15:07:10'),
(3, 3, '1', '    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'IMG-2481.png', 'Which of the following element is responsible for making the text bold in HTML?', 'IMG-44035.png', 'pre', 'a', 'b', 'br', 'br', '  The <b> (bold tag) tag in HTML is used to display the written text in bold format.      ', 'IMG-57093.png', 'https://www.youtube.com/watch?v=O3hZ5tscM00', '::1', 1, 1, '2021-11-11 15:09:03', '2021-11-11 15:09:03'),
(4, 3, '2', ' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'IMG-4071.png', 'Which of the following attribute is used to provide a unique name to an element?', 'IMG-32832.png', 'class', 'id', 'type', 'None of the above', 'None of the above', '  The id attribute is used to specify a unique id for an element of the HTML document. It allocates the unique identifier which can be used by the JavaScript and CSS to perform certain tasks.', 'IMG-87303.png', 'https://www.youtube.com/watch?v=o3bIGZijKzY', '::1', 1, 1, '2021-11-11 15:27:23', '2021-11-11 15:27:23'),
(5, 3, '2', ' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'IMG-79887.png', 'Which of the following HTML tag is used to display the text with scrolling effect?', 'IMG-45486.png', 'marquee', 'scroll', 'div', 'None of the above', 'None of the above', 'The <marquee> tag is a non-standard HTML element that is used to scroll a text or image either horizontally or vertically. In simple words, we can say that it automatically scrolls the image or text in up, down, left, and right direction.', 'IMG-17830.png', 'https://www.youtube.com/watch?v=D3GVKjeY1FM', '::1', 1, 1, '2021-11-11 15:28:46', '2021-11-11 15:28:46'),
(6, 3, '2', ' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'IMG-17264.png', 'Which of the following HTML tag is the special formatting tag?', 'IMG-90832.png', 'p', 'b', 'pre', 'None of the above', 'None of the above', '  The HTML <pre> tag is used to specify pre-formatted texts. Texts within <pre>…</pre> tag is displayed in a fixed-width font. Usually, it is displayed in courier font. It maintains both line break space.', 'IMG-6519.png', 'https://www.youtube.com/watch?v=4mJC_AZE6gk', '::1', 1, 1, '2021-11-11 15:30:09', '2021-11-11 15:30:09'),
(7, 3, '3', ' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'IMG-52507.png', 'What are the types of unordered or bulleted list in HTML?', 'IMG-68277.png', 'disc, square, triangle', 'polygon, triangle, circle', 'disc, circle, square', 'All of the above', 'disc, circle, square', '  The unordered or bulleted list in HTML is used to display the elements in a bulleted format. Mainly, there are three types of an unordered list: disc, circle, and square.', 'IMG-40127.png', 'https://www.youtube.com/watch?v=o3bIGZijKzY', '::1', 1, 1, '2021-11-11 15:32:06', '2021-11-11 15:32:06'),
(8, 3, '3', ' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'IMG-96176.png', 'Which of the following HTML attribute is used to define inline styles?', 'IMG-3514.png', 'style', 'type', 'class', 'None of the above', 'style', '  The style attribute in HTML is used to change the style of existing HTML elements. It can be used with any HTML tag. To apply the style on the HTML tag, you should have the basic knowledge of CSS properties.', 'IMG-20264.png', 'https://www.youtube.com/watch?v=4mJC_AZE6gk', '::1', 1, 1, '2021-11-11 15:33:35', '2021-11-11 15:33:35'),
(9, 3, '3', ' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'IMG-9190.png', 'A program in HTML can be rendered and read by -', 'IMG-52073.png', 'Web browser', 'Server', 'Interpreter', 'None of the above', 'Web browser', '  HTML programs can be read and rendered by the web browser. A web browser can support several web pages.', 'IMG-28687.png', 'https://www.youtube.com/watch?v=5FwcAsb8WcE', '::1', 1, 1, '2021-11-11 15:34:59', '2021-11-11 15:34:59'),
(10, 1, '1', ' ', '', 'Question  for pce', '', 'a', 'b', 'c', 'd', 'a', 'testing  ', '', 'a', '::1', 1, 1, '2021-11-15 15:47:50', '2021-11-15 15:47:50'),
(11, 1, '1', ' ', '', 'question 2 for pce', '', 'a', 'b', 'c', 'd', 'a', '  testing', '', 'a', '::1', 1, 1, '2021-11-15 15:48:32', '2021-11-15 15:48:32'),
(12, 1, '1', ' ', '', 'question 3 for pce 1', '', 'a', 'b', 'c', 'd', 'b', 'eh  ', '', 'd', '::1', 1, 1, '2021-11-15 15:49:10', '2021-11-15 15:49:10'),
(13, 1, '2', ' ', '', 'question 4 for pce 2', '', 'a', 'b', 'c', 'd', 'd', '  ee', '', 'c', '::1', 1, 1, '2021-11-15 15:51:28', '2021-11-15 15:51:28'),
(14, 1, '2', ' ', '', 'question for pce 2', '', 'a', 'b', 'c', 'd', 'd', '  ', '', 'a', '::1', 1, 1, '2021-11-15 15:52:47', '2021-11-15 15:52:47'),
(15, 1, '2', ' ', '', 'question pce 6', '', 'a', 'b', 'c', 'd', 'c', '  cdc', '', 'd', '::1', 1, 1, '2021-11-15 15:53:55', '2021-11-15 15:53:55'),
(16, 1, '3', ' ', '', 'question for pce 3', '', 'a', 'b', 'c', 'f', 'f', 'h  ', '', 'a', '::1', 1, 1, '2021-11-15 15:55:57', '2021-11-15 15:55:57'),
(17, 1, '3', 'xs', '', 'question pce 3', '', 'a', 'b', 'c', 'd', 'a', 'g  ', '', 'a', '::1', 1, 1, '2021-11-15 15:57:04', '2021-11-15 15:57:04'),
(18, 1, '3', ' ', '', 'Question', '', 'a', 'b', 'c', 'd', 'a', 'testing  ', '', 'test', '::1', 1, 0, '2021-11-25 13:21:43', '2021-11-25 13:21:43');

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

-- --------------------------------------------------------

--
-- Table structure for table `manage_testdetails`
--

CREATE TABLE `manage_testdetails` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `test_name` varchar(100) NOT NULL,
  `test_type` int(11) NOT NULL,
  `question_type` varchar(11) NOT NULL,
  `start_date` varchar(100) NOT NULL,
  `end_date` varchar(100) NOT NULL,
  `interval_of_break` varchar(100) NOT NULL,
  `time_of_break` varchar(100) NOT NULL,
  `total_question` varchar(100) NOT NULL,
  `total_mark` varchar(200) NOT NULL,
  `each_question_mark` varchar(100) NOT NULL,
  `negative_mark` varchar(100) NOT NULL,
  `timer` int(60) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `payment_status` varchar(100) NOT NULL,
  `payment_id` varchar(100) NOT NULL,
  `cip` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `cby` int(11) NOT NULL,
  `cstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage_testdetails`
--

INSERT INTO `manage_testdetails` (`id`, `course_id`, `test_name`, `test_type`, `question_type`, `start_date`, `end_date`, `interval_of_break`, `time_of_break`, `total_question`, `total_mark`, `each_question_mark`, `negative_mark`, `timer`, `amount`, `payment_status`, `payment_id`, `cip`, `created_at`, `updated_at`, `cby`, `cstatus`) VALUES
(1, 3, 'Exam NPTE  Test', 1, '1', '2021-11-01', '2021-11-12', '', '', '5', '5', '1', '1', 60, '100', '', '', '::1', '2021-11-10 15:09:37', '2021-11-10 15:09:37', 1, 1),
(2, 3, 'Practice NPTE Test', 2, '1', '2021-11-10', '2021-11-19', '', '', '5', '5', '1', '1', 60, '100', '', '', '::1', '2021-11-10 15:17:39', '2021-11-10 15:17:39', 1, 1),
(3, 3, 'Quiz NPTE Test', 3, '1', '2021-11-10', '2021-11-26', '', '', '5', '5', '1', '1', 60, '100', '', '', '::1', '2021-11-10 15:19:41', '2021-11-10 15:19:41', 1, 1),
(4, 1, 'sectionTest', 1, '1', '2021-11-14', '2021-11-20', '5', '1', '10', '10', '1', '1', 60, '10', '', '', '::1', '2021-11-15 15:13:00', '2021-11-15 15:13:00', 1, 2),
(5, 1, 'Exam 19', 1, '1', '2021-11-25', '2021-12-05', '5', '1', '10', '10', '1', '1', 10, '100', '', '', '::1', '2021-11-25 12:58:48', '2021-11-25 12:58:48', 1, 1),
(6, 1, 'deleted', 1, '1', '2021-11-25', '2021-11-27', '6', '1', '10', '10', '10', '1', 10, '', '', '', '::1', '2021-11-25 13:20:43', '2021-11-25 13:20:43', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `manage_topic`
--

CREATE TABLE `manage_topic` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `topic_name` varchar(200) NOT NULL,
  `description` longtext NOT NULL,
  `file` varchar(200) NOT NULL,
  `cip` varchar(200) NOT NULL,
  `cby` int(11) NOT NULL,
  `cstatus` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage_topic`
--

INSERT INTO `manage_topic` (`id`, `course_id`, `topic_name`, `description`, `file`, `cip`, `cby`, `cstatus`, `created_at`, `updated_at`) VALUES
(1, 22, 'add', '<p>bshb</p>', '', '::1', 1, NULL, '2021-11-25 07:55:17', '2021-11-25 07:55:17');

-- --------------------------------------------------------

--
-- Table structure for table `mange_package`
--

CREATE TABLE `mange_package` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `subtitle` varchar(200) NOT NULL,
  `price` varchar(100) NOT NULL,
  `long_description` longtext NOT NULL,
  `short_description` mediumtext NOT NULL,
  `image` varchar(200) NOT NULL,
  `instructor` varchar(50) NOT NULL,
  `cip` varchar(100) NOT NULL,
  `cby` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `cstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mange_package`
--

INSERT INTO `mange_package` (`id`, `name`, `subtitle`, `price`, `long_description`, `short_description`, `image`, `instructor`, `cip`, `cby`, `created_at`, `updated_at`, `cstatus`) VALUES
(1, 'PCE', 'Physiotherapy Competency Exam', '499', '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: \"Open Sans\", sans-serif; font-size: 14px;\">The PCE (Physiotherapy Competency Examination) is a two part nationwide Canadian exam designed to test a candidate’s competency and safety to work as a licensed physical therapist. The test consists of written component and clinical component. One requires a lot of dedication, hard work and sincerity to crack this test. Our goal is to help the students understand the crux of the topics and solve simulated cases. We strategically chalk out a plan to help the students excel in their knowledge and skills by motivating and proving their self-confidence. Our Study buddy team gives personal attention in doubt solving and helps the students in achieving their goal of clearing the test with flying colors and accomplish their dreams of working as triumphant and competent physical therapists.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: \"Open Sans\", sans-serif; font-size: 14px;\">PCE exam has 2 components: written and clinical which is designed to test a candidate’s competency to work as a licensed physical therapist.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: \"Open Sans\", sans-serif; font-size: 14px;\">We prepare students for the first step towards success- the written component; by improving their foundation knowledge, critical thinking, analyzing and reasoning skills.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: \"Open Sans\", sans-serif; font-size: 14px;\">Elements include assessment and evaluation, interpretation and intervention, reassessment and professional responsibilities which cover major structures of the exam: Neuromusculoskeletal, Neurological, Cardiopulmonary-vascular and Multi-system.</p>', '<h4 class=\"line-bottom-theme-colored-2 mb-15\" style=\"font-family: \"Roboto Slab\", serif; font-weight: 700; line-height: 1.42857; color: rgb(17, 17, 17); margin-top: 10px; font-size: 18px; margin-bottom: 15px !important;\">Course Details</h4><h5 class=\"line-bottom-theme-colored-2 mb-15\" style=\"font-family: \"Roboto Slab\", serif; font-weight: 700; line-height: 1.42857; color: rgb(17, 17, 17); margin-top: 10px; font-size: 14px; margin-bottom: 15px !important;\"></h5><h4 class=\"line-bottom-theme-colored-2 mt-20 mb-10\" style=\"font-family: \"Roboto Slab\", serif; font-weight: 700; line-height: 1.42857; color: rgb(17, 17, 17); font-size: 18px; margin-top: 20px !important; margin-bottom: 10px !important;\">We are offering 2 packages for PCE at this time:</h4><ul class=\"list theme-colored2 paper\" style=\"margin: 13px 0px 0px; list-style: outside none none; padding: 0px; color: rgb(102, 102, 102); font-family: \"Open Sans\", sans-serif; font-size: 14px;\"><li style=\"margin: 5px 0px; padding-left: 15px; position: relative;\"><h6 style=\"font-family: \"Roboto Slab\", serif; font-weight: 700; line-height: 1.42857; color: rgb(17, 17, 17); margin-top: 10px; margin-bottom: 10px; font-size: 12px;\">MCON-</h6>Includes musculoskeletal, cardiopulmonary, multi- systems, and non-systems. This package is available for $449, which will give you access for 1 year. It will include a total of 55+ regular lectures and strategy classes. Each class is of 2.5 hours. It will also include practice exams from Study Buddy.</li><li style=\"margin: 5px 0px; padding-left: 15px; position: relative;\"><h6 style=\"font-family: \"Roboto Slab\", serif; font-weight: 700; line-height: 1.42857; color: rgb(17, 17, 17); margin-top: 10px; margin-bottom: 10px; font-size: 12px;\">NEUROLOGY PACKAGE -</h6>This package includes neurology for a total of $149. This will give you access to neurology classes for 1 year. This package does not include access to strategy classes and Study Buddy practice exams. Please email us at <a href=\"mailto:pcestudybuddy@gmail.com\" style=\"color: rgb(153, 153, 153); -webkit-font-smoothing: antialiased; transition: all 300ms ease-in 0s;\">pcestudybuddy@gmail.com</a> and brainsmithphysioguru@gmail.com for payment details.</li></ul>', 'IMG-12394.jpg', '1,2', '::1', '1', '2021-10-28 00:23:52', '2021-10-28 00:23:52', 1),
(2, 'PCE Clinical', 'Physiotherapy Competency Examination', '799', '<p><span style=\"color: rgb(102, 102, 102); font-family: \"Open Sans\", sans-serif; font-size: 14px;\">PCE Study Buddy has pledged to provide a comprehensive preparation course for the written as well as clinical aspects of the PCE (Physiotherapy Competency Examination). PCE Study buddy is a renowned and trusted licensure program as per the guidelines of Canadian Alliance of Physiotherapy Regulators (CAPR), which helps the national and international students to achieve their goals and live their dreams of being a licensed therapist in Canada. We offer courses for both the written as well as the clinical component of the test. Our adept tutors have provided guidance for more than 500 students for over more than 5 years to crack the license test and work as efficient therapists.</span><br></p>', '<h4 class=\"line-bottom-theme-colored-2 mb-15\" style=\"font-family: \"Roboto Slab\", serif; font-weight: 700; line-height: 1.42857; color: rgb(17, 17, 17); margin-top: 10px; font-size: 18px; margin-bottom: 15px !important;\">Course Details</h4><h4 class=\"line-bottom-theme-colored-2 mb-15\" style=\"font-family: \"Roboto Slab\", serif; font-weight: 700; line-height: 1.42857; color: rgb(17, 17, 17); margin-top: 10px; font-size: 18px; margin-bottom: 15px !important;\">Course for the PCE clinical component</h4><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: \"Open Sans\", sans-serif; font-size: 14px;\">PCE Study Buddy offers a course which encircles the syllabus that is provided by the Canadian Alliance of Physiotherapy Regulators (CAPR). This test is divided into 2 components – written and the clinical component. We cover all the major subjects which build in the base of the test such as:</p><ul class=\"list theme-colored2 paper\" style=\"margin: 13px 0px 0px; list-style: outside none none; padding: 0px; color: rgb(102, 102, 102); font-family: \"Open Sans\", sans-serif; font-size: 14px;\"><li style=\"margin: 5px 0px; padding-left: 15px; position: relative;\">Musculoskeletal</li><li style=\"margin: 5px 0px; padding-left: 15px; position: relative;\">Cardio-pulmonary and vascular</li><li style=\"margin: 5px 0px; padding-left: 15px; position: relative;\">Non-systems</li><li style=\"margin: 5px 0px; padding-left: 15px; position: relative;\">Multi-systems</li><li style=\"margin: 5px 0px; padding-left: 15px; position: relative;\">Neurology</li></ul><h4 class=\"line-bottom-theme-colored-2 mt-20 mb-10\" style=\"font-family: \"Roboto Slab\", serif; font-weight: 700; line-height: 1.42857; color: rgb(17, 17, 17); font-size: 18px; margin-top: 20px !important; margin-bottom: 10px !important;\">Each subject is further dissected under the following sub-topics:</h4><ul class=\"list theme-colored2 paper\" style=\"margin: 13px 0px 0px; list-style: outside none none; padding: 0px; color: rgb(102, 102, 102); font-family: \"Open Sans\", sans-serif; font-size: 14px;\"><li style=\"margin: 5px 0px; padding-left: 15px; position: relative;\">Anatomy/Physiology</li><li style=\"margin: 5px 0px; padding-left: 15px; position: relative;\">Signs/Symptoms</li><li style=\"margin: 5px 0px; padding-left: 15px; position: relative;\">Treatments</li><li style=\"margin: 5px 0px; padding-left: 15px; position: relative;\">Indications/Contraindications</li><li style=\"margin: 5px 0px; padding-left: 15px; position: relative;\">System interaction</li><li style=\"margin: 5px 0px; padding-left: 15px; position: relative;\">Situational analysis</li></ul><h4 class=\"line-bottom-theme-colored-2 mb-15\" style=\"font-family: \"Roboto Slab\", serif; font-weight: 700; line-height: 1.42857; color: rgb(17, 17, 17); margin-top: 10px; font-size: 18px; margin-bottom: 15px !important;\">Clinical course objectives</h4><ul class=\"list theme-colored2 paper\" style=\"margin: 13px 0px 0px; list-style: outside none none; padding: 0px; color: rgb(102, 102, 102); font-family: \"Open Sans\", sans-serif; font-size: 14px;\"><li style=\"margin: 5px 0px; padding-left: 15px; position: relative;\">Opportunities to learn major skills for PCE clinicals.</li><li style=\"margin: 5px 0px; padding-left: 15px; position: relative;\">Practice practical cases as per Objective Structured Clinical Examination (OSCE) with peers and gain feedback on personal performance.</li><li style=\"margin: 5px 0px; padding-left: 15px; position: relative;\">We have a set number of lectures reserved for individual subjects; Total 9 lectures & 9 test classes will be conducted.</li><li style=\"margin: 5px 0px; padding-left: 15px; position: relative;\">Gain insight into how to read and interpret OSCE stations by creating and evaluating OSCE-style stations.</li><li style=\"margin: 5px 0px; padding-left: 15px; position: relative;\">We provide comprehensive notes for the clinical lectures and tests.</li><li style=\"margin: 5px 0px; padding-left: 15px; position: relative;\">Gain knowledge to improvise the performance with proper & personal guidance from our elite instructors.</li><li style=\"margin: 5px 0px; padding-left: 15px; position: relative;\">Students get an opportunity to discuss all major topics of PCE Clinicals as per the blueprint of CAPR.</li><li style=\"margin: 5px 0px; padding-left: 15px; position: relative;\">One on one assessment and guidance for your weak points based on your performance is given.</li><li style=\"margin: 5px 0px; padding-left: 15px; position: relative;\">All classes are conducted on Zoom to provided easy accessibility.</li><li style=\"margin: 5px 0px; padding-left: 15px; position: relative;\">9 different test are conducted on zoom. Each tests consists of 8 different clinical stations. Students are expected to be prepared before hand, as the tutors can randomly ask any student to perform the clinical test.</li></ul>', 'IMG-53037.jpg', '1,2', '::1', '1', '2021-10-28 00:24:59', '2021-10-28 00:24:59', 1),
(3, 'NPTE', 'The National Physical Therapy Examination', '499', '<p><span style=\"color: rgb(102, 102, 102); font-family: \"Open Sans\", sans-serif; font-size: 14px;\">NPTE (The National Physical Therapy Examination) is administered by the Federation of State Boards of Physical Therapy (FSBPT) which is designed to evaluate the clinical and patient care knowledge of entry-level physical therapists in the United States</span><br></p>', '<h4 class=\"line-bottom-theme-colored-2 mb-15\" style=\"font-family: \"Roboto Slab\", serif; font-weight: 700; line-height: 1.42857; color: rgb(17, 17, 17); margin-top: 10px; font-size: 18px; margin-bottom: 15px !important;\">Course Details</h4><h4 class=\"line-bottom-theme-colored-2 mt-20 mb-10\" style=\"font-family: \"Roboto Slab\", serif; font-weight: 700; line-height: 1.42857; color: rgb(17, 17, 17); font-size: 18px; margin-top: 20px !important; margin-bottom: 10px !important;\">We are offering two packages for NPTE at this time:</h4><ul class=\"list theme-colored2 paper\" style=\"margin: 13px 0px 0px; list-style: outside none none; padding: 0px; color: rgb(102, 102, 102); font-family: \"Open Sans\", sans-serif; font-size: 14px;\"><li style=\"margin: 5px 0px; padding-left: 15px; position: relative;\"><h6 style=\"font-family: \"Roboto Slab\", serif; font-weight: 700; line-height: 1.42857; color: rgb(17, 17, 17); margin-top: 10px; margin-bottom: 10px; font-size: 12px;\">MCON-</h6>Includes musculoskeletal, cardiopulmonary, other systems, and non-systems. This package is available for $499, which will give you access for 1 year. It will include a total of 55 regular lectures and 6 strategy classes. Each class is of 2.5 hours. It will also include practice exams from Study Buddy</li><li style=\"margin: 5px 0px; padding-left: 15px; position: relative;\"><h6 style=\"font-family: \"Roboto Slab\", serif; font-weight: 700; line-height: 1.42857; color: rgb(17, 17, 17); margin-top: 10px; margin-bottom: 10px; font-size: 12px;\">NEUROLOGY PACKAGE -</h6>This package includes neurology for a total of $149. This will give you access to neurology classes for 1 year. This package does not include access to strategy classes and Study Buddy practice exams. For enrollment, kindly contact us at <a href=\"mailto:nptestudybuddy@gmail.com\" style=\"color: rgb(153, 153, 153); -webkit-font-smoothing: antialiased; transition: all 300ms ease-in 0s;\">nptestudybuddy@gmail.com</a> or <a href=\"mailto:brainsmithphysioguru@gmail.com\" style=\"color: rgb(153, 153, 153); -webkit-font-smoothing: antialiased; transition: all 300ms ease-in 0s;\">brainsmithphysioguru@gmail.com</a> for payment details.</li></ul>', 'IMG-1689.jpg', '1', '::1', '1', '2021-10-28 00:25:55', '2021-10-28 00:25:55', 1),
(22, 'dd', 'hcbh', '555', '<p>hbchj</p>', '<p>hjbhj</p>', '', '2', '::1', '1', '2021-11-25 13:24:46', '2021-11-25 13:24:46', 3);

-- --------------------------------------------------------

--
-- Table structure for table `question_bank`
--

CREATE TABLE `question_bank` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL DEFAULT 0,
  `course_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `section_id` varchar(50) NOT NULL,
  `passage` longtext NOT NULL,
  `passage_image` varchar(200) NOT NULL,
  `question` longtext NOT NULL,
  `question_image` varchar(100) NOT NULL,
  `option1` mediumtext NOT NULL,
  `option2` mediumtext NOT NULL,
  `option3` mediumtext NOT NULL,
  `option4` mediumtext NOT NULL,
  `correct_answer` longtext NOT NULL,
  `mark` varchar(50) NOT NULL,
  `negative_mark` varchar(50) NOT NULL,
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
-- Dumping data for table `question_bank`
--

INSERT INTO `question_bank` (`id`, `question_id`, `course_id`, `test_id`, `section_id`, `passage`, `passage_image`, `question`, `question_image`, `option1`, `option2`, `option3`, `option4`, `correct_answer`, `mark`, `negative_mark`, `explanation`, `explanation_file`, `reference`, `cip`, `cby`, `cstatus`, `created_at`, `updated_at`) VALUES
(1, 0, 3, 2, '1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'IMG-86800.png', 'HTML stands for -', 'IMG-22078.png', 'HighText Machine Language', 'HyperText and links Markup Language', 'HyperText Markup Language', 'None of these', 'HyperText Markup Language', '', '', '  HTML is an acronym that stands for HyperText Markup Language, which is used for creating web pages and web applications.\r\n\r\nHyperText simply means \"Text within Text.\" A text has a link within it, is a hypertext. A markup language is a computer language that is used to apply layout and formatting conventions to a text document.', 'IMG-61251.png', 'https://www.youtube.com/watch?v=5FwcAsb8WcE', '::1', 1, 1, '2021-11-11 15:38:09', '2021-11-11 15:38:09'),
(2, 0, 3, 2, '1', ' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'IMG-72407.png', 'The correct sequence of HTML tags for starting a webpage is -', 'IMG-28945.png', 'Head, Title, HTML, body', 'HTML, Body, Title, Head', 'HTML, Head, Title, Body', 'HTML, Head, Title, Body', 'Head, Title, HTML, body', '', '', '  The correct sequence of HTML tags to start a webpage is html, head, title, and body.', 'IMG-20639.png', 'https://www.youtube.com/watch?v=4mJC_AZE6gk', '::1', 1, 1, '2021-11-11 15:38:09', '2021-11-11 15:38:09'),
(3, 0, 3, 2, '1', '    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'IMG-2481.png', 'Which of the following element is responsible for making the text bold in HTML?', 'IMG-44035.png', 'pre', 'a', 'b', 'br', 'br', '', '', '  The <b> (bold tag) tag in HTML is used to display the written text in bold format.      ', 'IMG-57093.png', 'https://www.youtube.com/watch?v=O3hZ5tscM00', '::1', 1, 1, '2021-11-11 15:38:09', '2021-11-11 15:38:09'),
(7, 0, 3, 2, '3', ' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'IMG-52507.png', 'What are the types of unordered or bulleted list in HTML?', 'IMG-68277.png', 'disc, square, triangle', 'polygon, triangle, circle', 'disc, circle, square', 'All of the above', 'disc, circle, square', '', '', '  The unordered or bulleted list in HTML is used to display the elements in a bulleted format. Mainly, there are three types of an unordered list: disc, circle, and square.', 'IMG-40127.png', 'https://www.youtube.com/watch?v=o3bIGZijKzY', '::1', 1, 1, '2021-11-11 15:38:40', '2021-11-11 15:38:40'),
(8, 0, 3, 2, '3', ' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'IMG-96176.png', 'Which of the following HTML attribute is used to define inline styles?', 'IMG-3514.png', 'style', 'type', 'class', 'None of the above', 'style', '', '', '  The style attribute in HTML is used to change the style of existing HTML elements. It can be used with any HTML tag. To apply the style on the HTML tag, you should have the basic knowledge of CSS properties.', 'IMG-20264.png', 'https://www.youtube.com/watch?v=4mJC_AZE6gk', '::1', 1, 1, '2021-11-11 15:38:40', '2021-11-11 15:38:40'),
(9, 0, 3, 2, '3', ' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'IMG-9190.png', 'A program in HTML can be rendered and read by -', 'IMG-52073.png', 'Web browser', 'Server', 'Interpreter', 'None of the above', 'Web browser', '', '', '  HTML programs can be read and rendered by the web browser. A web browser can support several web pages.', 'IMG-28687.png', 'https://www.youtube.com/watch?v=5FwcAsb8WcE', '::1', 1, 1, '2021-11-11 15:38:40', '2021-11-11 15:38:40'),
(10, 0, 3, 2, '2', ' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'IMG-4071.png', 'Which of the following attribute is used to provide a unique name to an element?', 'IMG-32832.png', 'class', 'id', 'type', 'None of the above', 'None of the above', '', '', '  The id attribute is used to specify a unique id for an element of the HTML document. It allocates the unique identifier which can be used by the JavaScript and CSS to perform certain tasks.', 'IMG-87303.png', 'https://www.youtube.com/watch?v=o3bIGZijKzY', '::1', 1, 1, '2021-11-12 14:30:25', '2021-11-12 14:30:25'),
(11, 0, 3, 2, '2', ' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'IMG-79887.png', 'Which of the following HTML tag is used to display the text with scrolling effect?', 'IMG-45486.png', 'marquee', 'scroll', 'div', 'None of the above', 'None of the above', '', '', 'The <marquee> tag is a non-standard HTML element that is used to scroll a text or image either horizontally or vertically. In simple words, we can say that it automatically scrolls the image or text in up, down, left, and right direction.', 'IMG-17830.png', 'https://www.youtube.com/watch?v=D3GVKjeY1FM', '::1', 1, 1, '2021-11-12 14:30:25', '2021-11-12 14:30:25'),
(12, 0, 3, 2, '2', ' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'IMG-17264.png', 'Which of the following HTML tag is the special formatting tag?', 'IMG-90832.png', 'p', 'b', 'pre', 'None of the above', 'None of the above', '', '', '  The HTML <pre> tag is used to specify pre-formatted texts. Texts within <pre>…</pre> tag is displayed in a fixed-width font. Usually, it is displayed in courier font. It maintains both line break space.', 'IMG-6519.png', 'https://www.youtube.com/watch?v=4mJC_AZE6gk', '::1', 1, 1, '2021-11-12 14:30:25', '2021-11-12 14:30:25'),
(13, 10, 1, 5, '1', ' ', '', 'Question  for pce', '', 'a', 'b', 'c', 'd', 'a', '1', '1', 'testing  ', '', 'a', '::1', 1, 1, '2021-11-15 16:38:02', '2021-11-15 16:38:02'),
(14, 11, 1, 5, '1', ' ', '', 'question 2 for pce', '', 'a', 'b', 'c', 'd', 'a', '1', '1', '  testing', '', 'a', '::1', 1, 1, '2021-11-15 16:38:02', '2021-11-15 16:38:02'),
(15, 12, 1, 5, '1', ' ', '', 'question 3 for pce 1', '', 'a', 'b', 'c', 'd', 'b', '1', '1', 'eh  ', '', 'd', '::1', 1, 1, '2021-11-15 16:38:02', '2021-11-15 16:38:02'),
(16, 13, 1, 5, '2', ' ', '', 'question 4 for pce 2', '', 'a', 'b', 'c', 'd', 'd', '1', '1', '  ee', '', 'c', '::1', 1, 1, '2021-11-15 16:38:02', '2021-11-15 16:38:02'),
(17, 14, 1, 5, '2', ' ', '', 'question for pce 2', '', 'a', 'b', 'c', 'd', 'd', '1', '1', '  ', '', 'a', '::1', 1, 1, '2021-11-15 16:38:02', '2021-11-15 16:38:02'),
(18, 15, 1, 5, '2', ' ', '', 'question pce 6', '', 'a', 'b', 'c', 'd', 'c', '1', '1', '  cdc', '', 'd', '::1', 1, 1, '2021-11-15 16:38:02', '2021-11-15 16:38:02'),
(19, 16, 1, 5, '3', ' ', '', 'question for pce 3', '', 'a', 'b', 'c', 'f', 'f', '1', '1', 'h  ', '', 'a', '::1', 1, 1, '2021-11-15 16:38:02', '2021-11-15 16:38:02'),
(20, 17, 1, 5, '3', 'xs', '', 'question pce 3', '', 'a', 'b', 'c', 'd', 'a', '1', '1', 'g  ', '', 'a', '::1', 1, 1, '2021-11-15 16:38:02', '2021-11-15 16:38:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `user_img` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `cstatus` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `student_userId` varchar(200) NOT NULL,
  `remember_token` varchar(50) NOT NULL,
  `last_login_ip` varchar(200) NOT NULL,
  `attempt` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `user_img`, `fname`, `lname`, `email`, `password`, `phone`, `role`, `cstatus`, `created_at`, `student_userId`, `remember_token`, `last_login_ip`, `attempt`) VALUES
(1, '5664aac8df63205178575221a621074a.png', 'admin', 'singh', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', '7009660018', 'admin', '1', '2021-09-08 17:33:41', '', '', '', 3),
(10, '837cdae392b7809a1e078c41d2522550.png', 'Anup', 'Dubey', 'a@gmail.com', '202cb962ac59075b964b07152d234b70', '8521526062', 'student', '1', '2021-10-05 15:31:18', 'stbdy_884606', '', '::1', 0),
(11, '', 'Raj', 'Roushan', 'roushan@vcanaglobal.com', 'e10adc3949ba59abbe56e057f20f883e', '', 'student', '1', '2021-10-28 05:27:22', 'stbdy_405942', '', '49.156.80.165', 3),
(12, '', 'Anup', 'Dubey', 'j@gmail.com', '202cb962ac59075b964b07152d234b70', '8521526062', 'student', '0', '2021-11-03 12:35:57', 'stbdy_961334', '', '::1', 3),
(13, '', 'sunny', 'singh', 's@gmail.com', '202cb962ac59075b964b07152d234b70', '7383777887', 'student', '1', '2021-11-09 10:59:54', 'stbdy_999734', '', '::1', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attempt_details`
--
ALTER TABLE `attempt_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_answer_sheet`
--
ALTER TABLE `manage_answer_sheet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_instructor`
--
ALTER TABLE `manage_instructor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_my_course`
--
ALTER TABLE `manage_my_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_quesion_hub`
--
ALTER TABLE `manage_quesion_hub`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_section`
--
ALTER TABLE `manage_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_syllabus_details`
--
ALTER TABLE `manage_syllabus_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_testdetails`
--
ALTER TABLE `manage_testdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_topic`
--
ALTER TABLE `manage_topic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mange_package`
--
ALTER TABLE `mange_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_bank`
--
ALTER TABLE `question_bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attempt_details`
--
ALTER TABLE `attempt_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `manage_answer_sheet`
--
ALTER TABLE `manage_answer_sheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `manage_instructor`
--
ALTER TABLE `manage_instructor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `manage_my_course`
--
ALTER TABLE `manage_my_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `manage_quesion_hub`
--
ALTER TABLE `manage_quesion_hub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `manage_section`
--
ALTER TABLE `manage_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `manage_syllabus_details`
--
ALTER TABLE `manage_syllabus_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manage_testdetails`
--
ALTER TABLE `manage_testdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `manage_topic`
--
ALTER TABLE `manage_topic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mange_package`
--
ALTER TABLE `mange_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `question_bank`
--
ALTER TABLE `question_bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
