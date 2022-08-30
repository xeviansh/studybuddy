-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2021 at 03:22 PM
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
  `status` varchar(255) NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `manage_answer_sheet`
--

CREATE TABLE `manage_answer_sheet` (
  `id` int(11) NOT NULL,
  `test_id` varchar(200) NOT NULL,
  `course_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
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

INSERT INTO `manage_answer_sheet` (`id`, `test_id`, `course_id`, `question_id`, `selected_answer`, `correct_answer`, `type`, `cip`, `cby`, `created_at`) VALUES
(1, '1', 1, 6, 'Cascade style sheets', 'Cascade style sheets', 'submit', '::1', '10', '2021-10-26 18:42:08'),
(2, '1', 1, 7, '<style src = example.css>', '<link rel=\"stylesheet\" type=\"text/css\" href=\"example.css\">', 'submit', '::1', '10', '2021-10-26 18:42:10'),
(3, '1', 1, 8, 'background-color', 'background-color', 'submit', '::1', '10', '2021-10-26 18:42:12'),
(4, '1', 1, 9, 'None of the above', 'font-size', 'submit', '::1', '10', '2021-10-26 18:42:14'),
(5, '1', 1, 10, 'styles', 'styles', 'review', '::1', '10', '2021-10-26 18:42:16'),
(6, '2', 2, 1, 'HyperText and links Markup Language', 'HyperText Markup Language', 'submit', '::1', '10', '2021-10-26 18:43:25'),
(7, '2', 2, 2, 'HTML, Body, Title, Head', 'HTML, Head, Title, Body', 'review', '::1', '10', '2021-10-26 18:43:37'),
(8, '2', 2, 3, 'h1', 'h6', 'submit', '::1', '10', '2021-10-26 18:43:40'),
(9, '2', 2, 4, ' b', 'br', 'submit', '::1', '10', '2021-10-26 18:43:42'),
(10, '2', 2, 5, 'dropdown', 'dropdown', 'submit', '::1', '10', '2021-10-26 18:43:46');

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
(1, 'Anup Dubey', '8521526062', 'maddeveloper94@gmail.com', 'MCA', '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px;\">+1 (647) 907-6014</p><li style=\"margin: 5px 0px; padding-left: 15px; position: relative; color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px;\">BsPT. Licensed and registered therapist of Newyork.</li><li style=\"margin: 5px 0px; padding-left: 15px; position: relative; color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px;\">Student Co- ordintor and Manager.</li><li style=\"margin: 5px 0px; padding-left: 15px; position: relative; color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px;\">Mentor of PCE written component for the past 5 years.</li>', '1634206149_Mayank-Jain.jpg', '<p><span style=\"color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px;\">We conduct over 65+ lectures which are over 150+ hours of quality coaching for PCE in Musculoskeletal, Cardiopulmonary, Neurology, Non-systems and Multi-systems by our dedicated and qualified professionals in their fields. They are extremely cost effective and suits one’s pockets. Our webinars are interactive, goal oriented and simplified for better understanding and grasping of the knowledge of the students. The duration of our one batch is for approximately 2.5 months. During this tenure you will receive an invitation everyday via email to access the live lecture as per the schedule. You can type in the chat box if you have any doubts or questions related to the topic that will be taught during the live session. So, it will be a group class and not one on one.</span><br></p>', '::1', 1, '2021-10-14 12:09:09', 1),
(2, 'Rahul Kumar', '7766062317', 'rahul@gmail.com', 'BCA', '<p><span style=\"color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px;\">We conduct over 65+ lectures which are over 150+ hours of quality coaching for PCE in Musculoskeletal, Cardiopulmonary, Neurology, Non-systems and Multi-systems by our dedicated and qualified professionals in their fields. They are extremely cost effective and suits one’s pockets. Our webinars are interactive, goal oriented and simplified for better understanding and grasping of the knowledge of the students. The duration of our one batch is for approximately 2.5 months. During this tenure you will receive an invitation everyday via email to access the live lecture as per the schedule. You can type in the chat box if you have any doubts or questions related to the topic that will be taught during the live session. So, it will be a group class and not one on one.</span><br></p>', '1634206184_Mansi-Khambati.jpg', '<p><span style=\"color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px;\">We conduct over 65+ lectures which are over 150+ hours of quality coaching for PCE in Musculoskeletal, Cardiopulmonary, Neurology, Non-systems and Multi-systems by our dedicated and qualified professionals in their fields. They are extremely cost effective and suits one’s pockets. Our webinars are interactive, goal oriented and simplified for better understanding and grasping of the knowledge of the students. The duration of our one batch is for approximately 2.5 months. During this tenure you will receive an invitation everyday via email to access the live lecture as per the schedule. You can type in the chat box if you have any doubts or questions related to the topic that will be taught during the live session. So, it will be a group class and not one on one.</span><br></p>', '::1', 1, '2021-10-14 12:09:44', 1);

-- --------------------------------------------------------

--
-- Table structure for table `manage_my_course`
--

CREATE TABLE `manage_my_course` (
  `id` int(11) NOT NULL,
  `student_id` varchar(11) NOT NULL,
  `course_id` varchar(11) NOT NULL,
  `duration` varchar(200) NOT NULL,
  `activation_date` varchar(200) NOT NULL,
  `expiry_data` varchar(200) NOT NULL,
  `payment_id` varchar(200) NOT NULL,
  `payment_response` longtext NOT NULL,
  `amount` varchar(200) NOT NULL,
  `cip` varchar(200) NOT NULL,
  `cby` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage_my_course`
--

INSERT INTO `manage_my_course` (`id`, `student_id`, `course_id`, `duration`, `activation_date`, `expiry_data`, `payment_id`, `payment_response`, `amount`, `cip`, `cby`, `created_at`, `updated_at`) VALUES
(1, '10', '1', '365', '2021-10-19', '2022-10-19', '123456', '12554544', '50000', '::1', '10', '2021-10-19 10:12:09', '2021-10-19 10:12:09'),
(7, '10', '2', '365', '2021-10-26', '2022-10-26', '123456', '12554544', '50000', '::1', '10', '2021-10-26 10:46:13', '2021-10-26 10:46:13');

-- --------------------------------------------------------

--
-- Table structure for table `manage_testdetails`
--

CREATE TABLE `manage_testdetails` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `test_name` varchar(100) NOT NULL,
  `test_type` int(11) NOT NULL,
  `start_date` varchar(100) NOT NULL,
  `end_date` varchar(100) NOT NULL,
  `total_question` varchar(100) NOT NULL,
  `total_mark` varchar(200) NOT NULL,
  `each_question_mark` varchar(100) NOT NULL,
  `negative_mark` varchar(100) NOT NULL,
  `timer` int(60) NOT NULL,
  `cip` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `cby` int(11) NOT NULL,
  `cstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage_testdetails`
--

INSERT INTO `manage_testdetails` (`id`, `course_id`, `test_name`, `test_type`, `start_date`, `end_date`, `total_question`, `total_mark`, `each_question_mark`, `negative_mark`, `timer`, `cip`, `created_at`, `updated_at`, `cby`, `cstatus`) VALUES
(1, 1, 'Test1', 1, '2021-10-25', '2021-10-29', '5', '5', '1', '1', 60, '::1', '2021-10-25 17:35:44', '2021-10-25 17:35:44', 1, 1),
(2, 2, 'Test2', 1, '2021-10-26', '2021-10-31', '5', '5', '1', '1', 60, '::1', '2021-10-25 17:36:10', '2021-10-25 17:36:10', 1, 1),
(3, 1, 'Test 3', 1, '2021-10-26', '2021-10-30', '5', '5', '1', '1', 60, '::1', '2021-10-26 10:17:17', '2021-10-26 10:17:17', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `manage_topic`
--

CREATE TABLE `manage_topic` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `topic_name` varchar(200) NOT NULL,
  `description` longtext NOT NULL,
  `cip` varchar(200) NOT NULL,
  `cby` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage_topic`
--

INSERT INTO `manage_topic` (`id`, `course_id`, `topic_name`, `description`, `cip`, `cby`, `created_at`, `updated_at`) VALUES
(1, 1, 'Topic 1', 'A tiny plugin which adds the ability to toggle all checkboxes within a table.', '', 1, '2021-10-18 10:35:46', '2021-10-18 10:35:46'),
(2, 1, 'Topic 2', 'A tiny plugin which adds the ability to toggle all checkboxes within a table.', '', 1, '2021-10-18 10:35:46', '2021-10-18 10:35:46');

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
  `cip` varchar(100) NOT NULL,
  `cby` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `cstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mange_package`
--

INSERT INTO `mange_package` (`id`, `name`, `subtitle`, `price`, `long_description`, `short_description`, `image`, `cip`, `cby`, `created_at`, `updated_at`, `cstatus`) VALUES
(1, 'Web Development', 'Full Stack Developer', '10', '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">Why do we use it?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p><h3 style=\"margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Section 1.10.32 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC</h3><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"</p>', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</span><br></p>', 'IMG-16297.jpg', '::1', '1', '2021-10-14 14:36:54', '2021-10-18 15:25:08', 1),
(2, 'Android Development', 'Swift Development', '20', '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">Where does it come from?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">Where can I get some?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</span><br></p>', 'IMG-6088.jpg', '::1', '1', '2021-10-14 14:37:58', '2021-10-18 15:25:08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `question_bank`
--

CREATE TABLE `question_bank` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
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

INSERT INTO `question_bank` (`id`, `course_id`, `test_id`, `passage`, `passage_image`, `question`, `question_image`, `option1`, `option2`, `option3`, `option4`, `correct_answer`, `mark`, `negative_mark`, `explanation`, `explanation_file`, `reference`, `cip`, `cby`, `cstatus`, `created_at`, `updated_at`) VALUES
(1, 2, 2, ' ', '', 'What does HTML stand for?', '', 'HighText Machine Language', 'HyperText and links Markup Language', ' HyperText Markup Language', ' None of these', 'HyperText Markup Language', '', '', ' HTML is an acronym that stands for HyperText Markup Language, which is used for creating web pages and web applications.\r\n\r\nHyperText simply means \"Text within Text.\" A text has a link within it, is a hypertext. A markup language is a computer language that is used to apply layout and formatting conventions to a text document.', 'uploads/question_bank/1635223803_3.png', 'Reference', '::1', 1, 1, '2021-10-26 10:20:03', '2021-10-26 10:20:03'),
(2, 2, 2, ' ', '', 'The correct sequence of HTML tags for starting a webpage is -', '', 'Head, Title, HTML, body', 'HTML, Body, Title, Head', ' HTML, Head, Title, Body', ' HTML, Head, Title, Body', 'HTML, Head, Title, Body', '', '', ' The correct sequence of HTML tags to start a webpage is html, head, title, and body.', 'uploads/question_bank/1635223971_Screenshot (4) - ', 'Reference', '::1', 1, 1, '2021-10-26 10:22:51', '2021-10-26 10:22:51'),
(3, 2, 2, ' ', '', 'Which of the following tag is used for inserting the largest heading in HTML?', '', 'h3', 'h1', 'h5', 'h6', 'h6', '', '', 'The <br> tag in the HTML document is used to create a line break in a text. If we place the <br> tag in HTML code, then it works the same as pressing the enter key in a word processor.', 'uploads/question_bank/1635224066_Screenshot (4) - ', 'Reference', '::1', 1, 1, '2021-10-26 10:24:26', '2021-10-26 10:24:26'),
(4, 2, 2, ' ', '', 'Which of the following element is responsible for making the text bold in HTML?', 'uploads/question_bank/1635224804_Screenshot (4) - Copy.png', 'pre', 'a', ' b', ' br', 'br', '', '', ' The <b> (bold tag) tag in HTML is used to display the written text in bold format.', 'uploads/question_bank/1635224804_Screenshot (4).pn', 'Reference', '::1', 1, 1, '2021-10-26 10:36:44', '2021-10-26 10:36:44'),
(5, 2, 2, ' ', '', 'Which of the following tag is used to define options in a drop-down selection list?', 'uploads/question_bank/1635224890_Screenshot (7).png', 'select', 'list', 'dropdown', 'option', 'dropdown', '', '', 'The <option> tag in HTML is used to define options in a dropdown list within <select> or <datalist> element. A dropdown list must have at least one <option> element.', 'uploads/question_bank/1635224890_Screenshot (4).pn', 'Reference', '::1', 1, 1, '2021-10-26 10:38:10', '2021-10-26 10:38:10'),
(6, 1, 1, ' ', '', 'CSS stands for -', 'uploads/question_bank/1635225007_Screenshot (4) - Copy.png', 'Cascade style sheets', 'Color and style sheets', ' Cascading style sheets', ' None of the above', 'Cascade style sheets', '', '', ' CSS stands for Cascading Style Sheet. CSS is used to design HTML tags. CSS is a widely used language on the web. HTML, CSS and JavaScript are used for web designing. It helps the web designers to apply style on HTML tags.', 'uploads/question_bank/1635225007_Screenshot (6).pn', 'Reference', '::1', 1, 1, '2021-10-26 10:40:07', '2021-10-26 10:40:07'),
(7, 1, 1, ' ', '', 'Which of the following is the correct syntax for referring the external style sheet?', 'uploads/question_bank/1635225079_Screenshot (4) - Copy.png', '<style src = example.css>', '<style src = \"example.css\" >', '<stylesheet> example.css </stylesheet>', '<link rel=\"stylesheet\" type=\"text/css\" href=\"example.css\">', '<link rel=\"stylesheet\" type=\"text/css\" href=\"example.css\">', '', '', 'The external style sheet is generally used when you want to make changes on multiple pages. It uses the <link> tag on every pages and the <link> tag should be put inside the head section.', 'uploads/question_bank/1635225079_Screenshot (6).pn', 'Reference', '::1', 1, 1, '2021-10-26 10:41:19', '2021-10-26 10:41:19'),
(8, 1, 1, ' ', '', 'The property in CSS used to change the background color of an element is -', 'uploads/question_bank/1635225146_Screenshot (4) - Copy.png', 'bgcolor', 'color', 'background-color', 'All of the above', 'background-color', '', '', 'The background-color property is used to specify the background color of an element. The background of an element covers the total size, including the padding and border and excluding margin.', 'uploads/question_bank/1635225146_Screenshot (6).pn', 'Reference', '::1', 1, 1, '2021-10-26 10:42:26', '2021-10-26 10:42:26'),
(9, 1, 1, ' ', '', 'The CSS property used to control the element\'s font-size is -', 'uploads/question_bank/1635225252_Screenshot (4) - Copy.png', 'text-style', 'text-size', 'font-size', 'None of the above', 'font-size', '', '', 'The font-size property in CSS is used to specify the height and size of the font. It affects the size of the text of an element. Its default value is medium and can be applied to every element.', 'uploads/question_bank/1635225252_Screenshot (6).pn', 'Reference', '::1', 1, 1, '2021-10-26 10:44:12', '2021-10-26 10:44:12'),
(10, 1, 1, ' ', '', 'The HTML attribute used to define the inline styles is -', 'uploads/question_bank/1635225311_Screenshot (4) - Copy.png', 'style', 'styles', 'class', 'None of the above', 'styles', '', '', 'If you want to use inline CSS, you should use the style attribute to the relevant tag. The inline CSS is also a method to insert style sheets in HTML document. This method mitigates some advantages of style sheets so it is advised to use this method sparingly.', 'uploads/question_bank/1635225311_Screenshot (6).pn', 'Reference', '::1', 1, 1, '2021-10-26 10:45:11', '2021-10-26 10:45:11');

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
  `status` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `student_userId` varchar(200) NOT NULL,
  `remember_token` varchar(50) NOT NULL,
  `last_login_ip` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `user_img`, `fname`, `lname`, `email`, `password`, `phone`, `role`, `status`, `created_at`, `student_userId`, `remember_token`, `last_login_ip`) VALUES
(1, '5664aac8df63205178575221a621074a.png', 'admin', 'singh', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', '7009660018', 'admin', '1', '2021-09-08 17:33:41', '', '', ''),
(10, '837cdae392b7809a1e078c41d2522550.png', 'Anup', 'Dubey', 'a@gmail.com', '202cb962ac59075b964b07152d234b70', '8521526062', 'student', '1', '2021-10-05 15:31:18', 'stbdy_884606', '', '::1');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `manage_answer_sheet`
--
ALTER TABLE `manage_answer_sheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `manage_instructor`
--
ALTER TABLE `manage_instructor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `manage_my_course`
--
ALTER TABLE `manage_my_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `manage_testdetails`
--
ALTER TABLE `manage_testdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `manage_topic`
--
ALTER TABLE `manage_topic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mange_package`
--
ALTER TABLE `mange_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `question_bank`
--
ALTER TABLE `question_bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
