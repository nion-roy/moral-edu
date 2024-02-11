-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2024 at 01:01 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moral_edu`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_section`
--

CREATE TABLE `about_section` (
  `id` int(30) NOT NULL,
  `user_id` int(200) NOT NULL,
  `about_title` varchar(500) NOT NULL,
  `about_subtitle` varchar(3000) NOT NULL,
  `userPic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_section`
--

INSERT INTO `about_section` (`id`, `user_id`, `about_title`, `about_subtitle`, `userPic`) VALUES
(17, 140, 'About Us', '<p><span style=\"font-size: 12pt;\">The progress of Prince Education Group in 2007. The institute started its debut with only 30 students from the academic year 2007-2008 under the Bangladesh State Medical Faculty, approved by the Ministry of Health and Family Welfare. A group of talented, efficient and incredibly hard-working officials and teachers are the collaborators in crossing the impassable path of this dream journey. The journey of the college has started with the belief that there will be a fair environment for learning, academic education of students as well as physical and mental talent development and moral education of students. A politics, smoking and terror free environment prevails at all times. 18 more institutions have joined this long journey. </span></p>', 'prince-310637-about1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `activitylog`
--

CREATE TABLE `activitylog` (
  `activitylog` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `action` varchar(100) NOT NULL,
  `activity_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activitylog`
--

INSERT INTO `activitylog` (`activitylog`, `userid`, `action`, `activity_date`) VALUES
(618, 22, 'Delete Stuff - Name: Regan', '2019-09-29 09:41:44'),
(619, 22, 'Delete Stuff - Name: ', '2019-09-29 09:41:58'),
(620, 22, 'Delete Stuff - Name: à¦œà§à§Ÿà§‡à¦²', '2020-02-03 14:56:31'),
(621, 22, 'Delete Stuff - Name: à¦®à§‹à¦ƒ à¦à¦¨à¦¾à¦®à§à¦² à¦¹à¦•', '2020-02-03 14:56:35'),
(622, 22, 'Delete Stuff - Name: Jakiul Hasan Ruel', '2020-02-03 14:56:38'),
(623, 22, 'Delete Stuff - Name: Jikrul Hasan Jewel', '2020-02-03 14:56:41'),
(624, 22, 'Delete Stuff - Name: Megh', '2020-02-03 14:56:45'),
(625, 22, 'Update account', '2020-07-18 21:53:28'),
(626, 22, 'Update account', '2020-07-18 21:53:53'),
(627, 130, 'Add New Client - Name: Kalam', '2022-02-06 20:48:46'),
(628, 22, 'Add New Client - Name: Kalam', '2022-02-06 21:10:10'),
(629, 22, 'Add New Client - Name: Kalam', '2022-02-06 21:21:11'),
(630, 22, 'Add New Client - Name: Kalam', '2022-02-06 21:21:48'),
(631, 22, 'Add New Client - Name: Kalam', '2022-02-06 13:23:16'),
(632, 22, 'Add New Client - Name: Kalam', '2022-02-06 13:54:58'),
(633, 22, 'Add New Client - Name: Tausif', '2022-03-18 06:00:10'),
(634, 22, 'Add New Client - Name: Tausif', '2022-03-20 02:28:47'),
(635, 22, 'Add New Client - Name: Tausif', '2022-03-23 10:17:59'),
(636, 22, 'Add New Client - Name: Tausif', '2022-03-23 10:18:43'),
(637, 22, 'Add New Client - Name: Abul Azad', '2022-03-23 10:25:02'),
(638, 22, 'Add New Client - Name: Tausif', '2022-03-23 10:35:19'),
(639, 22, 'Add New Client - Name: Abul Azad', '2022-03-23 10:35:27'),
(640, 22, 'Add New Client - Name: S.M Imran Islam', '2022-04-06 12:27:57'),
(641, 22, 'Add New Client - Name: S.M Imran Islam', '2022-04-06 12:29:00'),
(642, 22, 'Add New Client - Name: Imran Islam', '2023-04-14 20:12:11'),
(643, 22, 'Add New Client - Name: Tausif', '2023-04-14 20:14:28'),
(644, 22, 'Add New Client - Name: Tausif', '2023-08-31 21:34:40'),
(645, 22, 'Add New Client - Name: Digital Training Center', '2024-01-31 17:33:44');

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `student_id` int(150) NOT NULL,
  `user_id` int(50) NOT NULL,
  `student_no` int(50) NOT NULL,
  `batch_no` varchar(250) NOT NULL,
  `course_name` varchar(200) NOT NULL,
  `student_name` varchar(250) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `bld_grp` varchar(50) NOT NULL,
  `father_name` varchar(250) NOT NULL,
  `mother_name` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`student_id`, `user_id`, `student_no`, `batch_no`, `course_name`, `student_name`, `gender`, `bld_grp`, `father_name`, `mother_name`) VALUES
(101, 130, 2, 'Md.Samiul Alom', '', 'Managing Director', 'Male', '', 'Tinmatha', '01751458998'),
(103, 130, 3, 'New Customer', '', '', 'Male', '', 'Bogura', '01751456623'),
(104, 130, 4, 'Zobayer2', '', '', 'Male', '', 'Meghai', '01611-717527'),
(105, 135, 5, 'Kiron Alom', '', '', 'Male', '', 'Dhaka', '01751894256'),
(106, 136, 6, 'Talha Khan', '', '', 'Male', '', 'Dhaka', '054654'),
(107, 135, 7, 'Rubel Hossain', '', '', 'Male', '', 'Dhaka', '00154545'),
(108, 135, 8, 'Bappi Hasan', '', 'Marketing Officer1', 'Male', '', 'Mirpur-12, Dhaka', '017589'),
(109, 137, 9, 'Jhon doe', '', 'Managing director', 'Male', '', 'New York City, USA', '846446456'),
(110, 137, 10, 'Samiul Alom', '', 'CEO', 'Male', '', 'Bogura', '01751891037'),
(111, 140, 1, 'Sidgao', '1', 'Interney Marketing', '', '', 'USA', '3232323232'),
(112, 137, 11, 'Kalam', '', 'Business', 'Male', '', 'Bizrul', '01751-895247'),
(113, 140, 2, 'Batch-25', 'Office Application', 'Md.Salam Ali', 'Male', '', 'Md.Abbas', 'Mrs.Salma'),
(114, 140, 3, 'Batch-25', '1', 'Md.Jamal Sheakh1', '', '', 'Jalal Sheakh1', 'Jomila Sheakh1'),
(115, 137, 0, 'Batch-25', '1', 'Salam', '', '', 'father', 'mother'),
(116, 140, 4, 'Batch-25', '1', 'a', 'Male', '', 'as', 'as'),
(117, 140, 5, '7', '25', 'DD', 'Other', 'O+', 'sf', 'sf'),
(118, 22, 12, '1', '25', 'DD', 'Female', 'A+', 'safa', 'asf');

-- --------------------------------------------------------

--
-- Table structure for table `bank_money`
--

CREATE TABLE `bank_money` (
  `id` int(11) NOT NULL,
  `user_id` int(50) NOT NULL,
  `bank_id` int(200) NOT NULL,
  `account_no` varchar(300) NOT NULL,
  `previous_amt` varchar(200) NOT NULL,
  `today_amt` varchar(200) NOT NULL,
  `recent_amt` varchar(200) NOT NULL,
  `refer` varchar(200) NOT NULL,
  `cuses` varchar(200) NOT NULL,
  `entry_date` date NOT NULL,
  `last_update` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank_money`
--

INSERT INTO `bank_money` (`id`, `user_id`, `bank_id`, `account_no`, `previous_amt`, `today_amt`, `recent_amt`, `refer`, `cuses`, `entry_date`, `last_update`) VALUES
(1, 130, 1, '121245', '25000', '3000', '28000', 'Own', 'Deposit', '2023-06-11', '2023-06-11'),
(2, 130, 2, '8523', '10500', '500', '10000', 'Own', 'Withdraw', '2023-06-11', '2023-06-11');

-- --------------------------------------------------------

--
-- Table structure for table `bank_money_history`
--

CREATE TABLE `bank_money_history` (
  `id` int(11) NOT NULL,
  `user_id` int(50) NOT NULL,
  `bank_id` int(200) NOT NULL,
  `account_no` varchar(300) NOT NULL,
  `previous_amt` varchar(200) NOT NULL,
  `money_in` varchar(200) NOT NULL,
  `money_out` varchar(500) NOT NULL,
  `recent_amt` varchar(200) NOT NULL,
  `refer` varchar(200) NOT NULL,
  `cuses` varchar(300) NOT NULL,
  `type` int(30) NOT NULL,
  `entry_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank_money_history`
--

INSERT INTO `bank_money_history` (`id`, `user_id`, `bank_id`, `account_no`, `previous_amt`, `money_in`, `money_out`, `recent_amt`, `refer`, `cuses`, `type`, `entry_date`) VALUES
(1, 140, 1, '121245', '30000', '5000', '0', '35000', 'None', '???', 3, '2023-06-11'),
(2, 140, 1, '121245', '35000', '0', '10000', '25000', '???', '??????? ', 4, '2023-06-11'),
(3, 140, 2, '8523', '10000', '500', '0', '10500', 'None', '???', 3, '2023-06-11'),
(4, 140, 1, '121245', '25000', '3000', '0', '28000', 'Own', 'Deposit', 3, '2023-06-11'),
(5, 140, 2, '8523', '10500', '0', '500', '10000', 'Own', 'Withdraw', 4, '2023-06-11'),
(6, 140, 3, '458', '30000', '10000', '0', '40000', 'Own', 'Deposit', 3, '2023-06-15');

-- --------------------------------------------------------

--
-- Table structure for table `bank_name`
--

CREATE TABLE `bank_name` (
  `id` int(20) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank_name`
--

INSERT INTO `bank_name` (`id`, `user_id`, `name`) VALUES
(1, 140, 'DBBL Agent'),
(2, 140, 'DBBL Agent'),
(3, 140, 'EBL Bank '),
(5, 140, 'SIBL');

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `id` int(20) NOT NULL,
  `user_id` int(100) NOT NULL,
  `batch_name` varchar(300) NOT NULL,
  `batch_no` varchar(100) NOT NULL,
  `trainer` varchar(350) NOT NULL,
  `entry_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`id`, `user_id`, `batch_name`, `batch_no`, `trainer`, `entry_date`) VALUES
(1, 130, 'Domain ', '1000', 'Anik', '2022-01-28'),
(2, 135, 'Nasta', '200', 'rr', '2022-01-30'),
(3, 130, 'nasta', '50', 'dd', '2022-01-30'),
(4, 136, 'Nasta', '50', 'dd', '2022-01-31'),
(5, 137, 'Dinner ', '230', 'Bbn', '2022-02-13'),
(6, 140, 'Tea 3cup', '30', 'sa', '2022-04-08'),
(7, 140, 'Nasta Tea 4-cup', '20', 'ss', '2022-05-29'),
(8, 140, 'Biscuit 2Pack', '40', 'aa', '2022-05-30'),
(9, 140, 'Nasta Tea 4-cup', '55', 'aff', '2022-05-31'),
(10, 140, 'Evening', '456', 'nhjty', '2023-04-16'),
(11, 140, 'nyjh', 'rnn', 'gnrtn', '2023-04-16');

-- --------------------------------------------------------

--
-- Table structure for table `bld_grp`
--

CREATE TABLE `bld_grp` (
  `bld_id` int(20) NOT NULL,
  `user_id` int(100) NOT NULL,
  `bld_name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bld_grp`
--

INSERT INTO `bld_grp` (`bld_id`, `user_id`, `bld_name`) VALUES
(2, 140, 'Bogura'),
(3, 140, 'Rajshahi'),
(4, 140, 'Bsc'),
(5, 140, 'O-'),
(6, 140, 'A-'),
(7, 140, 'O+');

-- --------------------------------------------------------

--
-- Table structure for table `blog_section`
--

CREATE TABLE `blog_section` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `userPic` varchar(255) DEFAULT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_section`
--

INSERT INTO `blog_section` (`id`, `user_id`, `title`, `slug`, `details`, `userPic`, `date`) VALUES
(1, 140, 'Sed ut fuga Dolorib', 'sed-ut-fuga-dolorib', '<p>Sed ut fuga Dolorib</p>', 'prince-202650-06.jpg', '2024-02-08'),
(4, 140, 'Adipisicing elit. Earum beatae, eius voluptates lorem ipsum dolor sit amet consectetur.', 'adipisicing-elit-earum-beatae-eius-voluptates-lorem-ipsum-dolor-sit-amet-consectetur', '<p><span style=\"font-size: 12pt;\">Computer Science Engineering encompasses studies on the design, analysis, implementation, and application of computer technology. Computing plays a vital role in all fields, including science and medicine, music and art, business, law, and human communication; hence, the study of computer science and engineering can be interdisciplinary in nature.</span></p>\r\n<p><span style=\"font-size: 12pt;\">A computer engineer is responsible for constructing and managing an organization&rsquo;s computer system and providing technical support to the organization. A computer engineer typically works in an office or laboratory environment as part of a team and enjoys a traditional work schedule. A computer engineer, who may be a software engineer, is responsible for developing, testing, and evaluating the software that enables our computer to work. They may help in the development of new computer games and business applications or even in the design of entirely new operating systems. Whether a student&rsquo;s goal is to become a computing professional, DTI is committed to helping them gain the background they need to be a world class engineer.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-size: 12pt;\"><strong>Objectives &amp; Outcomes:</strong></span></p>\r\n<p><span style=\"font-size: 12pt;\">&bull;&nbsp; Provides the highest quality education so that students can cope with both undergraduate and graduate program.</span><br /><span style=\"font-size: 12pt;\">&bull; Provides state-of-the-art education.</span><br /><span style=\"font-size: 12pt;\">&bull; Establish a productive Computer Science and Engineering career in industry, academia, or government sector.</span><br /><span style=\"font-size: 12pt;\">&bull; Ensure career development in the field of computer systems engineering or software systems engineering.</span><br /><span style=\"font-size: 12pt;\">&bull; Students will be trained in such a way that they can work as a team member or be able to lead a team effectively.</span><br /><span style=\"font-size: 12pt;\">&bull; Students will learn the development of innovative systems and solutions using hardware and software</span><br /><span style=\"font-size: 12pt;\">integration.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-size: 12pt;\"><strong>Course Outline:</strong></span></p>\r\n<div class=\"row\">\r\n<div class=\"col-md-3\">\r\n<ul>\r\n<li><span style=\"font-size: 12pt;\"><strong>SEMESTER-1</strong></span></li>\r\n<li><span style=\"font-size: 12pt;\">Engineering Drawing</span></li>\r\n<li><span style=\"font-size: 12pt;\">Computer Fundamental</span></li>\r\n<li><span style=\"font-size: 12pt;\">Computer Application-1</span></li>\r\n<li><span style=\"font-size: 12pt;\">Basic Electricity</span></li>\r\n<li><span style=\"font-size: 12pt;\">Applied English</span></li>\r\n<li><span style=\"font-size: 12pt;\">Mathematics-1</span></li>\r\n<li><span style=\"font-size: 12pt;\">Chemistry</span></li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-3\">\r\n<ul>\r\n<li><span style=\"font-size: 12pt;\"><strong>SEMESTER-2</strong></span></li>\r\n<li><span style=\"font-size: 12pt;\">Computer Application-2</span></li>\r\n<li><span style=\"font-size: 12pt;\">Basic Electronics</span></li>\r\n<li><span style=\"font-size: 12pt;\">Computer Workshop Practice</span></li>\r\n<li><span style=\"font-size: 12pt;\">Physics-1</span></li>\r\n<li><span style=\"font-size: 12pt;\">Mathematics-2</span></li>\r\n<li><span style=\"font-size: 12pt;\">Bangla</span></li>\r\n<li><span style=\"font-size: 12pt;\">Physical &amp; Life Skill Education</span></li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-3\">\r\n<ul>\r\n<li><span style=\"font-size: 12pt;\"><strong>SEMESTER-3</strong></span></li>\r\n<li><span style=\"font-size: 12pt;\">Programming in C</span></li>\r\n<li><span style=\"font-size: 12pt;\">Web Design</span></li>\r\n<li><span style=\"font-size: 12pt;\">Digital Electronics-1</span></li>\r\n<li><span style=\"font-size: 12pt;\">Electrical Device &amp; Circuits</span></li>\r\n<li><span style=\"font-size: 12pt;\">Mathematics-3</span></li>\r\n<li><span style=\"font-size: 12pt;\">Physics-2</span></li>\r\n<li><span style=\"font-size: 12pt;\">Social Science</span></li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-3\">\r\n<ul>\r\n<li><span style=\"font-size: 12pt;\"><strong>SEMESTER-4</strong></span></li>\r\n<li><span style=\"font-size: 12pt;\">Object Oriented Programming in C++</span></li>\r\n<li><span style=\"font-size: 12pt;\">Graphic Design</span></li>\r\n<li><span style=\"font-size: 12pt;\">Data Structure &amp; Algorithm</span></li>\r\n<li><span style=\"font-size: 12pt;\">Web Development</span></li>\r\n<li><span style=\"font-size: 12pt;\">Digital Electronics-2</span></li>\r\n<li><span style=\"font-size: 12pt;\">Electrical Machines</span></li>\r\n<li><span style=\"font-size: 12pt;\">Discrete Mathematics</span></li>\r\n</ul>\r\n</div>\r\n</div>\r\n<div class=\"row\">\r\n<div class=\"col-md-3\">\r\n<ul>\r\n<li><span style=\"font-size: 12pt;\"><strong>SEMESTER-5</strong></span></li>\r\n<li><span style=\"font-size: 12pt;\">Programming in C#</span></li>\r\n<li><span style=\"font-size: 12pt;\">Computer System Software</span></li>\r\n<li><span style=\"font-size: 12pt;\">Database Management System</span></li>\r\n<li><span style=\"font-size: 12pt;\">E-commerce &amp; CMS</span></li>\r\n<li><span style=\"font-size: 12pt;\">Web Development Project</span></li>\r\n<li><span style=\"font-size: 12pt;\">Book Keeping &amp; Accounting</span></li>\r\n<li><span style=\"font-size: 12pt;\">Environmental Management</span></li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-3\">\r\n<ul>\r\n<li><span style=\"font-size: 12pt;\"><strong>SEMESTER-6</strong></span></li>\r\n<li><span style=\"font-size: 12pt;\">Programming in JAVA</span></li>\r\n<li><span style=\"font-size: 12pt;\">Microprocessor &amp; Microcomputer</span></li>\r\n<li><span style=\"font-size: 12pt;\">Data Communication &amp; Computer Network</span></li>\r\n<li><span style=\"font-size: 12pt;\">Computer Architecture &amp; Peripherals</span></li>\r\n<li><span style=\"font-size: 12pt;\">Database Management System Project</span></li>\r\n<li><span style=\"font-size: 12pt;\">Computer Servicing &amp; Maintenance</span></li>\r\n<li><span style=\"font-size: 12pt;\">Industrial Management</span></li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-3\">\r\n<ul>\r\n<li><span style=\"font-size: 12pt;\"><strong>SEMESTER-7</strong></span></li>\r\n<li><span style=\"font-size: 12pt;\">Embedded System &amp; PLC</span></li>\r\n<li><span style=\"font-size: 12pt;\">Mobile Apps Development</span></li>\r\n<li><span style=\"font-size: 12pt;\">Network Administration &amp; Management</span></li>\r\n<li><span style=\"font-size: 12pt;\">Digital Marketing Technology</span></li>\r\n<li><span style=\"font-size: 12pt;\">Computer Engineering Project</span></li>\r\n<li><span style=\"font-size: 12pt;\">Information Management and Security</span></li>\r\n<li><span style=\"font-size: 12pt;\">Entrepreneurship</span></li>\r\n<li><span style=\"font-size: 12pt;\">Electrical Engineering Project</span></li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-3\">\r\n<ul>\r\n<li><span style=\"font-size: 12pt;\"><strong>SEMESTER-8</strong></span></li>\r\n<li><span style=\"font-size: 12pt;\">Industrial Training</span></li>\r\n</ul>\r\n</div>\r\n</div>\r\n<p>&nbsp;</p>', 'prince-311239-08.jpg', '2024-02-08');

-- --------------------------------------------------------

--
-- Table structure for table `board`
--

CREATE TABLE `board` (
  `brd_id` int(20) NOT NULL,
  `user_id` int(100) NOT NULL,
  `brd_name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `board`
--

INSERT INTO `board` (`brd_id`, `user_id`, `brd_name`) VALUES
(2, 140, 'Bogura'),
(3, 140, 'Rajshahi'),
(4, 140, 'Bsc'),
(5, 140, 'Rangpur');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `br_id` int(20) NOT NULL,
  `user_id` int(100) NOT NULL,
  `br_name` varchar(300) NOT NULL,
  `br_address` varchar(200) NOT NULL,
  `br_contact` varchar(50) NOT NULL,
  `br_mail` varchar(200) NOT NULL,
  `br_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`br_id`, `user_id`, `br_name`, `br_address`, `br_contact`, `br_mail`, `br_img`) VALUES
(1, 140, 'Uttara', 'North Uttara', '0123655', 'me@mail.com', '973186.');

-- --------------------------------------------------------

--
-- Table structure for table `chair_man_massage`
--

CREATE TABLE `chair_man_massage` (
  `id` int(30) NOT NULL,
  `user_id` int(200) NOT NULL,
  `title` varchar(500) NOT NULL,
  `subtitle` varchar(5000) NOT NULL,
  `userPic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chair_man_massage`
--

INSERT INTO `chair_man_massage` (`id`, `user_id`, `title`, `subtitle`, `userPic`) VALUES
(18, 130, 'Chairman', 'Prince Education Group has been established to keep pace with the progress of science and information technology and to achieve success in the journey of progress of Bangladesh with the potential of a large population and to expand teaching and research activities with due importance in the field of technical and work-oriented education and modern knowledge practice at the national level. Action oriented education is the main driver of development and progress. The economic emancipation of the common people lies in the wide spread of this education. Today it is the need of the hour to take this education to the grass root level, at the doorstep of all the hardworking people. Various organizations are being established at the public and private level with the aim of promoting, expanding, skilling and developing career-oriented education, innovative development projects have been adopted and are being implemented.', '829213.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `choose_section`
--

CREATE TABLE `choose_section` (
  `id` int(30) NOT NULL,
  `user_id` int(200) NOT NULL,
  `choose_title` varchar(200) NOT NULL,
  `choose_subtitle` varchar(200) NOT NULL,
  `userPic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `choose_section`
--

INSERT INTO `choose_section` (`id`, `user_id`, `choose_title`, `choose_subtitle`, `userPic`) VALUES
(9, 130, 'World Class Service', 'Provide World Class Service According To Your Demand', '576321.png'),
(10, 130, 'Best Quality Product', 'We always try to our best quality product service.', '443611.png'),
(11, 130, 'Best Price For You', 'We Take Affordable Price And Best Quality Product', '665496.png'),
(12, 130, 'Best Price For You', 'We Take Affordable Price And Best Quality Product', '812993.png'),
(13, 130, 'Best Price For You', 'We Take Affordable Price And Best Quality Product', '67187.png'),
(14, 130, 'Best Price For You', 'We Take Affordable Price And Best Quality Product', '538535.jpg'),
(15, 130, 'Best Price For You', 'We Take Affordable Price And Best Quality Product', '700985.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(30) NOT NULL,
  `user_id` int(200) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `userPic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `user_id`, `phone`, `email`, `address`, `userPic`) VALUES
(14, 140, '01610-762576', ' pcltd75@gmail.com', 'Puran Bogura, Rajshahi Division, Bangladesh', '946098.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `entry_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`id`, `name`, `email`, `phone`, `subject`, `message`, `entry_date`) VALUES
(58, 'Stone Maddox', 'fawalog@mailinator.com', '22', '', '', '0000-00-00'),
(59, 'Mona May', 'puvu@mailinator.com', '+1 (836) 899-5359', 'Distinctio Voluptas', 'Veniam nobis nemo v', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `course_apply`
--

CREATE TABLE `course_apply` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `course` varchar(255) NOT NULL,
  `course_type` varchar(255) NOT NULL,
  `entry_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_apply`
--

INSERT INTO `course_apply` (`id`, `name`, `email`, `phone`, `course`, `course_type`, `entry_date`) VALUES
(32, 'Stone Maddox', 'fawalog@mailinator.com', 22, 'Diploma in Civil Engineering', 'online', '2024-02-11 17:56:36'),
(33, 'Dana Potts', 'buqapoc@mailinator.com', 84, 'Computer Science Engineering', 'offline', '2024-02-11 17:58:53'),
(34, 'Ebony Velez', 'fixeqys@mailinator.com', 23, 'Diploma in Medical Assistant', 'online', '2024-02-11 17:59:02'),
(35, 'Jesse Perry', 'xunuvilet@mailinator.com', 31, '', 'offline', '2024-02-11 18:00:03'),
(36, 'Rhea Tanner', 'miqody@mailinator.com', 98, '', 'offline', '2024-02-11 18:00:46');

-- --------------------------------------------------------

--
-- Table structure for table `crse_topic`
--

CREATE TABLE `crse_topic` (
  `crse_id` int(20) NOT NULL,
  `user_id` int(100) NOT NULL,
  `crse_name` varchar(300) NOT NULL,
  `topic` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crse_topic`
--

INSERT INTO `crse_topic` (`crse_id`, `user_id`, `crse_name`, `topic`, `status`) VALUES
(11, 140, '25', ' Basic Hardware, Software', '1'),
(12, 140, '25', 'Introduction to Computer Operating System', '1'),
(13, 140, '25', ' Microsoft Word', '1'),
(14, 140, '25', 'Microsoft Excel', '1');

-- --------------------------------------------------------

--
-- Table structure for table `daily_notes`
--

CREATE TABLE `daily_notes` (
  `id` int(20) NOT NULL,
  `user_id` int(100) NOT NULL,
  `note_title` varchar(300) NOT NULL,
  `note_details` varchar(1000) NOT NULL,
  `alarm_date` date NOT NULL,
  `entry_date` date NOT NULL,
  `status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daily_notes`
--

INSERT INTO `daily_notes` (`id`, `user_id`, `note_title`, `note_details`, `alarm_date`, `entry_date`, `status`) VALUES
(1, 130, 'Domain ', '1000', '0000-00-00', '2022-01-28', 0),
(2, 135, 'Nasta', '200', '0000-00-00', '2022-01-30', 0),
(3, 130, 'nasta', '50', '0000-00-00', '2022-01-30', 0),
(4, 136, 'Nasta', '50', '0000-00-00', '2022-01-31', 0),
(5, 137, 'Dinner ', '230', '0000-00-00', '2022-02-13', 0),
(10, 141, 'Nasta', '20', '0000-00-00', '2022-06-08', 0),
(17, 144, 'Need Buy', 'Need Buy Need Buy', '0000-00-00', '2022-08-20', 1),
(18, 144, 'Laptop', 'Laptop Laptop Laptop', '2022-08-25', '2022-08-20', 1),
(19, 140, 'Ocean Life Limited', 'DD', '2023-10-17', '2023-10-17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `degree`
--

CREATE TABLE `degree` (
  `deg_id` int(20) NOT NULL,
  `user_id` int(100) NOT NULL,
  `deg_name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `degree`
--

INSERT INTO `degree` (`deg_id`, `user_id`, `deg_name`) VALUES
(2, 140, 'Bogura'),
(3, 140, 'Rajshahi'),
(4, 140, 'Bsc'),
(5, 140, 'fgnbfg');

-- --------------------------------------------------------

--
-- Table structure for table `diploma_admission`
--

CREATE TABLE `diploma_admission` (
  `ad_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ad_name` varchar(255) NOT NULL,
  `ad_details` text NOT NULL,
  `userPic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diploma_admission`
--

INSERT INTO `diploma_admission` (`ad_id`, `user_id`, `ad_name`, `ad_details`, `userPic`) VALUES
(1, 140, 'CSE1', '<p>CSE Here1</p>', '872646.png');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(20) NOT NULL,
  `user_id` int(100) NOT NULL,
  `dist_name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `user_id`, `dist_name`) VALUES
(2, 140, 'Bogura'),
(3, 140, 'Rajshahi'),
(4, 140, 'Pabna');

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `id` int(20) NOT NULL,
  `user_id` int(100) NOT NULL,
  `area_name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`id`, `user_id`, `area_name`) VALUES
(1, 130, 'Dhaka'),
(2, 130, 'Rajshahi');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(20) NOT NULL,
  `emp_name` varchar(100) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `national_id` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_info` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `position` varchar(200) NOT NULL,
  `hire_date` date NOT NULL,
  `sal_type` varchar(200) NOT NULL,
  `salary` int(200) NOT NULL,
  `status` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(30) NOT NULL,
  `user_id` int(50) NOT NULL,
  `emp_name` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(220) NOT NULL,
  `national_id` varchar(200) NOT NULL,
  `gross` varchar(50) NOT NULL,
  `house` varchar(50) NOT NULL,
  `medical` varchar(50) NOT NULL,
  `salary` varchar(300) NOT NULL,
  `position` varchar(300) NOT NULL,
  `join_date` date NOT NULL,
  `status` int(10) NOT NULL,
  `userPic` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `user_id`, `emp_name`, `address`, `phone`, `email`, `national_id`, `gross`, `house`, `medical`, `salary`, `position`, `join_date`, `status`, `userPic`) VALUES
(86, 140, 'Menon Bogura', 'Bogura', '0175187955', 'menon@gmail.com', '55', '10000', '2000', '3000', '15000', 'Manager', '2023-10-05', 1, '349810.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `employees_salary`
--

CREATE TABLE `employees_salary` (
  `id` int(30) NOT NULL,
  `user_id` int(50) NOT NULL,
  `emp_id` int(150) NOT NULL,
  `year` varchar(300) NOT NULL,
  `month` varchar(300) NOT NULL,
  `salary` varchar(300) NOT NULL,
  `bonus` varchar(300) NOT NULL,
  `total_salary` varchar(300) NOT NULL,
  `adv_paid` varchar(300) NOT NULL,
  `full_paid` varchar(300) NOT NULL,
  `recent_due` varchar(300) NOT NULL,
  `entry_date` date NOT NULL,
  `last_update` date NOT NULL,
  `status` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees_salary`
--

INSERT INTO `employees_salary` (`id`, `user_id`, `emp_id`, `year`, `month`, `salary`, `bonus`, `total_salary`, `adv_paid`, `full_paid`, `recent_due`, `entry_date`, `last_update`, `status`) VALUES
(150, 140, 86, '2023', 'January', '15000', '0', '15000', '0', '10000', '0', '2023-10-05', '2023-10-05', 0);

-- --------------------------------------------------------

--
-- Table structure for table `employees_salary_details`
--

CREATE TABLE `employees_salary_details` (
  `id` int(30) NOT NULL,
  `user_id` int(50) NOT NULL,
  `emp_id` int(30) NOT NULL,
  `year` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `bonus` varchar(100) NOT NULL,
  `total_salary` varchar(200) NOT NULL,
  `adv_paid` varchar(100) NOT NULL,
  `full_paid` varchar(200) NOT NULL,
  `recent_due` varchar(100) NOT NULL,
  `entry_date` date NOT NULL,
  `sal_type` int(20) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees_salary_details`
--

INSERT INTO `employees_salary_details` (`id`, `user_id`, `emp_id`, `year`, `month`, `salary`, `bonus`, `total_salary`, `adv_paid`, `full_paid`, `recent_due`, `entry_date`, `sal_type`, `comment`) VALUES
(157, 140, 86, '2023', 'January', '15000', '0', '15000', '5000', '0', '10000', '2023-10-05', 4, 'Advance Paid'),
(158, 140, 86, '2023', 'January', '15000', '0', '15000', '0', '10000', '0', '2023-10-05', 5, 'Full Paid');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `id` int(20) NOT NULL,
  `user_id` int(100) NOT NULL,
  `expense_name` varchar(300) NOT NULL,
  `exp_details` varchar(300) NOT NULL,
  `ammount` varchar(200) NOT NULL,
  `expense_cost` varchar(100) NOT NULL,
  `reference` varchar(350) NOT NULL,
  `entry_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`id`, `user_id`, `expense_name`, `exp_details`, `ammount`, `expense_cost`, `reference`, `entry_date`) VALUES
(7, 22, '3', 'TruckTruckTruckTruck', '', '10000', 'Nahid', '2020-10-01'),
(8, 22, '3', 'keyboard', '', '500', 'à¦•à¦¾à¦®à¦¾à¦²1', '2020-10-11'),
(9, 22, '5', 'keyboard', '1ps', '1000', 'aaa', '2020-10-11'),
(10, 22, '5', 'keyboard', '5ps', '1000', 'à¦•à¦¾à¦®à¦¾à¦²', '2020-10-11'),
(11, 22, '6', 'Drone', '1pcs', '45500', 'Dd', '2020-10-11'),
(12, 22, '3', 'shgrbhfhy', '1kg', '100', 'gh', '2020-10-11'),
(13, 22, '7', 'color', '1 galon', '540', 'ASX', '2020-10-11'),
(14, 22, '8', 'zdshkjvbhng', '5', '1000', 'Asraf', '2020-10-16'),
(15, 130, '9', 'aifgnxcujv', '1pcs', '250', 'Asraf', '2020-11-27'),
(16, 130, '10', 'computer', '2 Pcs', '30000', '', '2021-01-01'),
(17, 130, '13', '100 pcs ', '100', '2000', 'Suvo', '2021-04-07'),
(18, 130, '5', 'A4 Tech mouse', '1', '300', 'dsd', '2021-04-07'),
(19, 130, '14', '1 Bigha Land', '1', '5000', 'rr', '2021-04-16'),
(20, 130, '14', 'Fish 30kg Medum Size', '30', '6000', 'mm', '2021-04-16'),
(21, 130, '14', 'Food 5kg ', '5', '750', 'ff', '2021-04-16'),
(22, 140, '15', 'Small Fan', '1', '1050', 'aa', '2022-05-30'),
(25, 140, '5', 'dd', '1', '55', 'll', '2022-05-31'),
(26, 140, '16', 'ss', '1', '120', 'ss', '2022-06-05');

-- --------------------------------------------------------

--
-- Table structure for table `expense_other`
--

CREATE TABLE `expense_other` (
  `id` int(20) NOT NULL,
  `user_id` int(100) NOT NULL,
  `expense_name` varchar(300) NOT NULL,
  `expense_cost` varchar(100) NOT NULL,
  `reference` varchar(350) NOT NULL,
  `entry_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expense_other`
--

INSERT INTO `expense_other` (`id`, `user_id`, `expense_name`, `expense_cost`, `reference`, `entry_date`) VALUES
(1, 130, 'Domain ', '1000', 'Anik', '2022-01-28'),
(2, 135, 'Nasta', '200', 'rr', '2022-01-30'),
(3, 130, 'nasta', '50', 'dd', '2022-01-30'),
(4, 136, 'Nasta', '50', 'dd', '2022-01-31'),
(5, 137, 'Dinner ', '230', 'Bbn', '2022-02-13'),
(6, 140, 'Tea 3cup', '30', 'sa', '2022-04-08'),
(7, 140, 'Nasta Tea 4-cup', '20', 'ss', '2022-05-29'),
(8, 140, 'Biscuit 2Pack', '40', 'aa', '2022-05-30'),
(9, 140, 'Nasta Tea 4-cup', '55', 'aff', '2022-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `faq_section`
--

CREATE TABLE `faq_section` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq_section`
--

INSERT INTO `faq_section` (`id`, `user_id`, `title`, `details`, `date`) VALUES
(1, 140, 'Consequuntur laudant', 'Ut laborum irure tem', '2024-02-08'),
(3, 140, 'Iste est velit qui ', 'Sint excepteur volu', '2024-02-08');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(30) NOT NULL,
  `user_id` int(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `userPic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `user_id`, `title`, `userPic`) VALUES
(23, 140, 'g2', 'prince-870069-8.jpg'),
(24, 140, 'Program Photo', 'prince-104213-6.jpg'),
(25, 140, 'Program Photo', 'prince-417576-3.jpg'),
(26, 140, 'Program Photo', 'prince-967362-2.jpg'),
(27, 140, 'Program Photo', 'prince-328917-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `map`
--

CREATE TABLE `map` (
  `mp_id` int(20) NOT NULL,
  `user_id` int(100) NOT NULL,
  `mp_title` varchar(300) NOT NULL,
  `mp_link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `map`
--

INSERT INTO `map` (`mp_id`, `user_id`, `mp_title`, `mp_link`) VALUES
(1, 140, 'title', 'link');

-- --------------------------------------------------------

--
-- Table structure for table `medical_admission`
--

CREATE TABLE `medical_admission` (
  `ad_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ad_name` varchar(255) NOT NULL,
  `ad_details` text NOT NULL,
  `userPic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medical_admission`
--

INSERT INTO `medical_admission` (`ad_id`, `user_id`, `ad_name`, `ad_details`, `userPic`) VALUES
(1, 140, 'Medical1', '<p>Details Medical<br></p>', '611412.png');

-- --------------------------------------------------------

--
-- Table structure for table `medical_assistant_admission`
--

CREATE TABLE `medical_assistant_admission` (
  `ad_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ad_name` varchar(255) NOT NULL,
  `ad_details` text NOT NULL,
  `userPic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medical_assistant_admission`
--

INSERT INTO `medical_assistant_admission` (`ad_id`, `user_id`, `ad_name`, `ad_details`, `userPic`) VALUES
(1, 140, 'Medical Assistant', '<p>Details Medical Assistant<br></p>', '361786.png');

-- --------------------------------------------------------

--
-- Table structure for table `mission`
--

CREATE TABLE `mission` (
  `ms_id` int(30) NOT NULL,
  `user_id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `details` longtext NOT NULL,
  `userPic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mission`
--

INSERT INTO `mission` (`ms_id`, `user_id`, `name`, `details`, `userPic`) VALUES
(1, 140, 'Our Mission', '<p><span style=\"font-size: 12pt;\">Prince Education Group has been established to keep pace with the progress of science and information technology and to achieve success in the journey of progress of Bangladesh with the potential of a large population and to expand teaching and research activities with due importance in the field of technical and work-oriented education and modern knowledge practice at the national level.Action oriented education is the main driver of development and progress. </span></p>\r\n<p><span style=\"font-size: 12pt;\">The economic emancipation of the common people lies in the wide spread of this education. Today it is the need of the hour to take this education to the grass root level, at the doorstep of all the hardworking people. Various organizations are being established at the public and private level with the aim of promoting, expanding, skilling and developing career-oriented education, innovative development projects have been adopted and are being implemented.</span></p>', '22254.png');

-- --------------------------------------------------------

--
-- Table structure for table `month`
--

CREATE TABLE `month` (
  `mnt_id` int(20) NOT NULL,
  `user_id` int(100) NOT NULL,
  `mnth_name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `month`
--

INSERT INTO `month` (`mnt_id`, `user_id`, `mnth_name`) VALUES
(1, 140, 'June'),
(2, 140, 'July'),
(3, 140, 'August');

-- --------------------------------------------------------

--
-- Table structure for table `news_section`
--

CREATE TABLE `news_section` (
  `id` int(30) NOT NULL,
  `user_id` int(200) NOT NULL,
  `news_title` varchar(500) NOT NULL,
  `news_subtitle` longtext NOT NULL,
  `news_date` date NOT NULL,
  `userPic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_section`
--

INSERT INTO `news_section` (`id`, `user_id`, `news_title`, `news_subtitle`, `news_date`, `userPic`) VALUES
(17, 140, 'ডেটা নির্দেশিকায় পরিবর্তন, কমেছে প্যাকেজ ও মেয়াদ', '<div class=\"news_block\">\r\n                                    \r\n                    <div class=\"tittle_area\">\r\n                        <div class=\"newsdetails_top\">\r\n                            \r\n                            <p><span style=\"font-family: sans-serif; background-color: var(--bs-table-bg); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">প্রায় দেড় বছর আগে করা ডেটা নির্দেশিকায় পরিবর্তন-পরিমার্জন এনে নতুন \r\nনির্দেশিকা করেছে নিয়ন্ত্রণ সংস্থাটি। ইতোমধ্যে মোবাইল ফোন অপারেটরদের তা \r\nবাস্তবায়নের নির্দেশনাও দেয়া হয়েছে। নতুন এসব সিদ্ধান্ত অক্টোবর হতে \r\nবাস্তবায়ন করতে হবে।</span></p></div></div></div><div class=\"news_row\"><div class=\"post_details\">\r\n\r\n\r\n\r\n<p>নির্দেশিকায় ২১ টি সিদ্ধান্ত পরিবর্তন-পরিমার্জন বা নতুন করে যুক্ত হয়েছে। যেখানে একটি সিদ্ধান্ত বিলুপ্ত করা হয়েছে।</p><p><span style=\"background-color: var(--bs-table-bg); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\"> </span><span style=\"background-color: var(--bs-table-bg); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">অপারেটর যে প্যাকেজেই দিক না কেনো তার মেয়াদ হবে ৭ দিন, ৩০ দিন এবং \r\nআনলিমিটেড। আগে এটি ছিলো ৩ দিন, ৭ দিন, ১৫ দিন এবং ৩০ দিন। যেখানে ডেটা \r\nভলিউম সংক্রান্ত কিছু নির্দেশনাও ছিল।</span></p>\r\n\r\n\r\n\r\n<p>একটি অপারেটরের নিয়মিত, বিশেষ, রিসার্চ ও ডেভেলমেন্ট, সব ধরনের \r\nব্র্যান্ড (গ্রামীণফোন, স্কিটো, রবি, এয়ারটেল, বাংলালিংক ইত্যাদিসহ যা আছে)\r\n মিলিয়ে প্যাকেজের সংখ্যা হবে ৪০টি। আগে এটি ছিলো ৮৫টি।  </p>\r\n\r\n\r\n\r\n<p>মেয়াদ শেষ হওয়ার আগে একই প্যাকেজ কিনলে ডেটা ক্যারি ফরওয়ার্ড হবে। এতে \r\nএকই ভলিউম এবং একই কন্টেন্টের ৭ বা ৩০ দিন মেয়াদের প্যাকেজ ব্যবহার করার \r\nক্ষেত্রে মেয়াদ শেষ হওয়ার আগেই গ্রাহক ওই প্যাকেজ আবার কিনলে ডেটা ক্যারি \r\nফরওয়ার্ড হবে। ক্যারি ফরওয়ার্ড করা যাবে সর্বোচ্চ ৫০ জিবি ডেটা পর্যন্ত। </p>\r\n\r\n\r\n\r\n<p>কমানো হয়েছে প্রমোশনাল এসএমএসের সংখ্যাও। আগে প্রতিদিন সর্বোচ্চ ৪ টি এসএমএস দিতে পারত অপারে', '2023-09-09', '861086.jpg'),
(18, 140, ' কুমিল্লায় ১৭৫ কোটি টাকায় নলেজ পার্ক', '<p><b>প্রায় ১৭৫ কোটি টাকা</b> ব্যয়ে কুমিল্লা জেলার লালমাই উপজেলার দত্তপুর \r\nমৌজায় ৭.৮৮ একর জায়গায় ‘নলেজ পার্ক’ এর ভিত্তিপ্রস্তর স্থাপন করলেন \r\nঅর্থমন্ত্রী আ হ ম মুস্তফা কামাল ও আইসিটি প্রতিমন্ত্রী <b>জুনাইদ আহমেদ পলক</b>। </p><p>শনিবার <b>নলেজ পার্কের</b> ভিত্তিপ্রস্তর স্থাপন অনুষ্ঠানে আয়োজিত আলোচনা \r\nসভায় প্রধান অতিথির বক্তব্যে অর্থমন্ত্রী আ হ ম মুস্তফা কামাল বলেন, এ \r\nনলেজ পার্কের মাধ্যমে সমগ্র কুমিল্লার ছেলে-মেয়েরা প্রযুক্তির ক্ষেত্র \r\nএগিয়ে যাবে। আমরা সবাই মিলে কুমিল্লাকে এগিয়ে নেবো।</p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p>সভাপতির বক্তব্যে আইসিটি প্রতিমন্ত্রী জুনাইদ আহমেদ পলক বলেন, \r\n‘কুমিল্লার অনেক সনামধন্য শিক্ষা প্রতিষ্ঠানে হাজার হাজার শিক্ষার্থী \r\nরয়েছেন। এই তরুণ-তরুনীদেরকে যদি আমরা আমরা আইটিতে দক্ষ মানবসম্পদ হিসেবে \r\nগড়ে তুলতে পারি তাহলে এই অঞ্চলের অর্থনীতির ইকোসিস্টেমে আমূল পরিবর্তন \r\nআসবে।</p><p>তিনি বলেন, ১৫ বছর আগেও দেশের স্বল্প শিক্ষিত তরুণ প্রজন্ম \r\nকর্মসংস্থানের জন্য যেখানে গার্মেন্টসসহ অন্যান্য শ্রমনির্ভর শিল্পের উপর \r\nনির্ভরশীল ছিলো সেখানে বর্তমানে তারা আইটি শিল্পে নিজেদের ক্যারিয়ার গড়ে \r\nতুলছে। এছাড়া স্টার্টআপ এবং ক্ষুদ্র ও মাঝারি প্রতিষ্ঠানগুলোর \r\nইন্ডাস্ট্রিতে প্রবেশের হার বাড়ানো এবং জেন্ডার ইনক্লুসিভ \r\nএন্টারপ্রেনারশিপ তৈরিতে এই নলেজ পার্ক সরাসরি ভূমিকা রাখবে। আগামীর \r\nস্মার্ট বাংলাদেশ হবে বিশ্বের অন্যতম আইটি হাব। </p>\r\n\r\n\r\n\r\n<p>পলক বলেন, বাংলাদেশ থেকেই পরিচালিত হবে বিশ্বের অনেক জায়ান্ট কোম্পানি।\r\n সেগুলোর পরিচালনায় নেতৃত্ব দেবে আমাদের নতুন প্রজন্মের সন্তানেরা। সেই \r\nসময়ের উদ্ভাবনী মেধাসম্পন্ন তরুণ-তরুণীর মেধার বিকাশ ঘটবে আইটি বিজনেস \r\nইনকিউবেটর, ইনোভেশন হাব-এর মতো প্রতিষ্ঠানের মাধ্যমে। শীঘ্রই এই পার্কের \r\nপাশে ‘শেখ কামাল আইটি ট্রেনিং এন্ড ইনকিউবেশন সেন্টার’ এর নির্মাণ কাজ শেষ \r\nহবে। এখানে যে দক্ষ জনবল সৃষ্টি হবে তারাই আবার এই নলেজ পার্কে কাজ করবে। \r\nতখন এই পার্কের জন্য প্রয়োজনীয় দক্ষ মানবসম্পদ পেতে সমস্যা হবে না।</p>\r\n\r\n\r\n\r\n<p>স্বাগত বক্তব্যে বাংলাদেশ হাই-টেক পার্ক কর্তৃপক্ষ এর ব্যবস্থাপনা \r\nপরিচালক (গ্রেড-১) জি এস এম জাফরউল্লাহ্ বলেন, বাংলাদেশ হাই-টেক পার্ক \r\nকর্তৃপক্ষ এর মাধ্যমে বর্তমানে সারা দেশে সরাকারি উদ্যোগে ৯২টি হাই-টেক \r\nপার্ক/সফটওয়্যার টেকনোলজি পার্ক/আইটি ট্রেনিং এন্ড ইনকিউবেশন সেন্টার \r\nস্থাপনের কাজ চলমান রয়েছে, ইতোমধ্যে ১১টি পার্ক স্থাপনের কাজ সমাপ্ত \r\nহয়েছে যেখানে ইতোমধ্যে ব্যবসায়িক কার্যক্রম শুরু হয়েছে। এছাড়া বেসরকারি\r\n উদ্যোগে গঠিত হয়েছে আরো ১৭টি পার্ক। ৪র্থ শিল্প বিপ্লবের প্রতিযোগিতা \r\nমোকাবেলায় বিভিন্ন বিশ্ববিদ্যালয়ে আইওটি, রোবোটিক্স, সাইবার সিকিউরিটির \r\nউচ্চপ্রযুক্তির ৩৩টি বিশেষায়িত ল্যাব স্থাপন করা হয়েছে এবং \r\nবিশ্ববিদ্যালয়গুলোতে আইটি বিজনেস ইনকিউবেটর স্থাপন করা হচ্ছে।</p>\r\n\r\n\r\n\r\n<p>প্রকল্প পরিচালক এ, কে, এ, এম, ফজলুল হক জানান,  এই ‘নলেজ পার্ক’ \r\nস্থাপনের কাজ শেষ হলে এখানে প্রায় ১০০০ জনের কর্মসংস্থানের সুযোগ সৃষ্টি \r\nহবে। এছাড়া প্রকল্পের আওতায় প্রতি বছর ৩০০০ জনকে প্রশিক্ষণ প্রদান করা \r\nহবে।</p>\r\n\r\n\r\n\r\n<p><span style=\"background-color: var(--bs-table-bg); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">ভিত্তিপ্রস্তর স্থাপন অনুষ্ঠানে বাংলাদেশ হাই-টেক পার্ক কর্তৃপক্ষ ও স্থানীয় প্রশাসনের অন্যান্য কর্মকর্তারা উপস্থিত ছিলেন।</span> </p>', '2023-09-09', '795722.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `nursing_admission`
--

CREATE TABLE `nursing_admission` (
  `ad_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ad_name` varchar(255) NOT NULL,
  `ad_details` text NOT NULL,
  `userPic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nursing_admission`
--

INSERT INTO `nursing_admission` (`ad_id`, `user_id`, `ad_name`, `ad_details`, `userPic`) VALUES
(1, 140, 'Nursing', '<p>Details Nursing<br></p>', '468257.png');

-- --------------------------------------------------------

--
-- Table structure for table `office_exp_name`
--

CREATE TABLE `office_exp_name` (
  `of_id` int(20) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `office_exp_name`
--

INSERT INTO `office_exp_name` (`of_id`, `user_id`, `name`) VALUES
(3, 22, 'Keyboard'),
(4, 22, 'Keyboard'),
(5, 22, 'Mouse'),
(6, 22, 'Mavic mini'),
(7, 22, 'White paint'),
(8, 22, 'Costacb'),
(9, 130, 'New'),
(11, 130, 'Charger'),
(12, 130, 'profit'),
(13, 130, 'Khata'),
(14, 130, 'Pond-01 Season-01 ( January To December-2021 )'),
(15, 140, 'Fan'),
(16, 140, 'Burger'),
(17, 140, 'New Dd');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(200) NOT NULL,
  `order_id` int(200) NOT NULL,
  `user_id` int(15) NOT NULL,
  `customer_id` int(50) NOT NULL,
  `order_date` date NOT NULL,
  `deliver_date_or_last_update` date NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_contact` varchar(255) NOT NULL,
  `address` varchar(500) NOT NULL,
  `order_email` varchar(300) NOT NULL,
  `sub_total` varchar(255) NOT NULL,
  `vat` varchar(255) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `discount` varchar(100) NOT NULL,
  `pre_due` varchar(500) NOT NULL,
  `today_total` varchar(500) NOT NULL,
  `grand_total` varchar(500) NOT NULL,
  `paid` varchar(100) NOT NULL,
  `deliver_date_paid` varchar(220) NOT NULL,
  `due` varchar(255) NOT NULL,
  `dues_or_paid` varchar(30) NOT NULL,
  `dues_or_paid_status` varchar(50) NOT NULL,
  `payment_type` int(11) NOT NULL,
  `payment_status` int(11) NOT NULL,
  `order_status` int(11) NOT NULL DEFAULT 0,
  `order_type` int(30) NOT NULL,
  `custom_invoice_no` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `user_id`, `customer_id`, `order_date`, `deliver_date_or_last_update`, `client_name`, `client_contact`, `address`, `order_email`, `sub_total`, `vat`, `total_amount`, `discount`, `pre_due`, `today_total`, `grand_total`, `paid`, `deliver_date_paid`, `due`, `dues_or_paid`, `dues_or_paid_status`, `payment_type`, `payment_status`, `order_status`, `order_type`, `custom_invoice_no`) VALUES
(1001, 0, 130, 101, '2020-07-18', '2020-07-18', 'Md.Samiul Alom', '01751458998', '', '', '450.00', '0.00', '450.00', '0', '0', '450.00', '450.00', '450', '0', '0.00', 'Dues', '4', 1, 1, 1, 1, 0),
(1002, 0, 130, 0, '2020-08-05', '2020-08-05', 'Kalam', '017518941256', '', '', '110.00', '0.00', '110.00', '0', '0', '110.00', '110.00', '50', '0', '60.00', 'Dues', '4', 1, 1, 1, 2, 0),
(1003, 0, 130, 104, '2020-08-10', '2020-08-10', 'Zobayer2', '01611-717527', '', '', '750.00', '0.00', '750.00', '0', '0', '750.00', '750.00', '500', '0', '250.00', 'Dues', '4', 1, 1, 1, 1, 0),
(1004, 0, 130, 0, '2020-08-10', '2020-08-10', 'New Badsa', '01751894123', '', '', '240.00', '0.00', '240.00', '0', '0', '240.00', '240.00', '240', '0', '0.00', 'Dues', '4', 1, 1, 1, 2, 0),
(1005, 0, 130, 101, '2022-01-28', '2022-01-28', 'Md.Samiul Alom', '01751458998', '', '', '500.00', '0.00', '500.00', '0', '0.00', '500.00', '500.00', '500', '0', '0.00', 'Dues', '4', 1, 1, 1, 1, 0),
(1006, 0, 130, 101, '2022-01-28', '2022-01-28', 'Md.Samiul Alom', '01751458998', '', '', '10450.00', '0.00', '10450.00', '450', '0.00', '10000.00', '10000.00', '10000', '0', '0.00', 'Dues', '4', 1, 1, 1, 1, 0),
(1007, 0, 130, 101, '2022-01-28', '2022-01-28', 'Md.Samiul Alom', '01751458998', '', '', '10450.00', '0.00', '10450.00', '450', '0.00', '10000.00', '10000.00', '10000', '0', '0.00', 'Dues', '4', 1, 1, 1, 1, 0),
(1008, 0, 130, 101, '2022-01-28', '2022-01-28', 'Md.Samiul Alom', '01751458998', '', '', '90.00', '0.00', '90.00', '0', '0.00', '90.00', '90.00', '90', '0', '0.00', 'Dues', '4', 1, 1, 1, 1, 0),
(1009, 0, 130, 101, '2022-01-28', '2022-01-28', 'Md.Samiul Alom', '01751458998', '', '', '90.00', '0.00', '90.00', '0', '0.00', '90.00', '90.00', '90', '0', '0.00', 'Dues', '4', 1, 1, 1, 1, 0),
(1010, 0, 130, 101, '2022-01-28', '2022-01-28', 'Md.Samiul Alom', '01751458998', '', '', '210.00', '0.00', '210.00', '0', '0.00', '210.00', '210.00', '210', '0', '0.00', 'Dues', '4', 1, 1, 1, 1, 0),
(1011, 0, 130, 101, '2022-01-28', '2022-01-28', 'Md.Samiul Alom', '01751458998', '', '', '210.00', '0.00', '210.00', '0', '0.00', '210.00', '210.00', '210', '0', '0.00', 'Dues', '4', 1, 1, 1, 1, 0),
(1012, 0, 130, 101, '2022-01-28', '2022-01-28', 'Md.Samiul Alom', '01751458998', '', '', '570.00', '0.00', '570.00', '0', '0.00', '570.00', '570.00', '210', '0', '0.00', 'Dues', '4', 1, 1, 1, 1, 0),
(1013, 0, 130, 104, '2022-01-28', '2022-01-28', 'Zobayer2', '01611-717527', '', '', '10150.00', '0.00', '10150.00', '400', '250.00', '9750.00', '10000.00', '10000', '0', '0.00', 'Dues', '4', 1, 1, 1, 1, 0),
(1014, 0, 130, 0, '2022-01-28', '2022-01-28', 'None', 'None', '', '', '180.00', '0.00', '180.00', '0', '0', '180.00', '180.00', '180', '0', '0.00', 'Dues', '4', 1, 1, 1, 2, 0),
(1015, 0, 130, 0, '2022-01-28', '2022-01-28', 'None', 'None', '', '', '340.00', '0.00', '340.00', '0', '0', '340.00', '340.00', '340', '0', '0.00', 'Dues', '4', 1, 1, 1, 2, 0),
(1016, 0, 130, 101, '2022-01-28', '2022-01-28', 'Md.Samiul Alom', '01751458998', '', '', '5100.00', '0.00', '5100.00', '0', '0.00', '5100.00', '5100.00', '5100', '0', '0.00', 'Dues', '4', 1, 1, 1, 1, 0),
(1017, 0, 130, 101, '2022-01-28', '2022-01-28', 'Md.Samiul Alom', '01751458998', '', '', '1120.00', '0.00', '1120.00', '20', '0.00', '1100.00', '1120.00', '1000', '0', '100.00', 'Dues', '4', 1, 1, 1, 1, 0),
(1018, 0, 130, 0, '2022-01-29', '2022-01-29', 'Na', 'Na', '', '', '40.00', '0.00', '40.00', '0', '0', '40.00', '40.00', '5000', '0', '5000.00', 'Dues', '4', 1, 1, 1, 1, 0),
(1019, 0, 135, 105, '2022-01-30', '2022-01-30', 'Kiron Alom', '01751894256', '', '', '2400.00', '0.00', '2400.00', '0', '0', '2400.00', '2400.00', '2400', '0', '0.00', 'Dues', '4', 1, 1, 1, 1, 0),
(1020, 0, 135, 105, '2022-01-30', '2022-01-30', 'Kiron Alom', '01751894256', '', '', '1290.00', '0.00', '1290.00', '10', '0.00', '1280.00', '1280.00', '1000', '0', '280.00', 'Dues', '4', 1, 1, 1, 1, 0),
(1021, 0, 130, 101, '2022-01-30', '2022-01-30', 'Md.Samiul Alom', '01751458998', '', '', '1360.00', '0.00', '1360.00', '0', '100.00', '1360.00', '1460.00', '1000', '0', '460.00', 'Dues', '4', 1, 1, 1, 1, 0),
(1022, 0, 136, 106, '2022-01-31', '2022-01-31', 'Talha Khan', '054654', '', '', '20000.00', '0.00', '20000.00', '100', '0', '19900.00', '19900.00', '9900', '0', '10000.00', 'Dues', '4', 1, 1, 1, 1, 0),
(1023, 0, 135, 107, '2022-02-01', '2022-02-01', 'Rubel Hossain', '00154545', '222', '', '200.00', '0.00', '200.00', '0', '0', '200.00', '200.00', '1600', '0', '0.00', 'Dues', '4', 1, 1, 1, 1, 0),
(1024, 0, 135, 0, '2022-02-01', '2022-02-01', 'Kalam', '01759-891024', 'Bera1,Pabna-2', '', '100.00', '0.00', '100.00', '0', '0', '100.00', '100.00', '500', '0', '0.00', 'Dues', '4', 1, 1, 1, 1, 0),
(1025, 0, 130, 0, '2022-02-02', '2022-02-02', 'Na', 'Na', 'Na', '', '120.00', '0.00', '120.00', '0', '0', '120.00', '120.00', '120', '0', '0.00', 'Dues', '4', 1, 1, 1, 1, 0),
(1026, 0, 130, 101, '2022-02-02', '2022-02-02', 'Md.Samiul Alom', '01751458998', 'Tinmatha', '', '90.00', '0.00', '90.00', '0', '0', '90.00', '90.00', '90', '0', '0.00', 'Dues', '4', 1, 1, 1, 1, 0),
(1027, 1301027, 130, 104, '2022-02-02', '2022-02-02', 'Zobayer2', '01611-717527', 'Meghai', '', '10030.00', '0.00', '10030.00', '30', '0.00', '10000.00', '10000.00', '10000', '0', '0.00', 'Dues', '4', 1, 1, 1, 1, 0),
(1028, 1301028, 130, 101, '2022-02-02', '2022-02-02', 'Md.Samiul Alom', '01751458998', 'Tinmatha', '', '210.00', '0.00', '210.00', '0', '0.00', '210.00', '210.00', '210', '0', '0.00', 'Dues', '4', 1, 1, 1, 1, 0),
(1029, 1301029, 130, 104, '2022-02-02', '2022-02-02', 'Zobayer2', '01611-717527', 'Meghai', '', '90.00', '0.00', '90.00', '0', '0.00', '90.00', '90.00', '90', '0', '0.00', 'Dues', '4', 1, 1, 1, 1, 1001),
(1030, 1301030, 130, 104, '2022-02-02', '2022-02-02', 'Zobayer2', '01611-717527', 'Meghai', '', '2700.00', '0.00', '2700.00', '0', '0.00', '2700.00', '2700.00', '2000', '0', '700.00', 'Dues', '4', 2, 4, 1, 1, 1002),
(1031, 1301031, 130, 101, '2022-02-02', '2022-02-02', 'Md.Samiul Alom', '01751458998', 'Tinmatha', '', '90.00', '0.00', '90.00', '0', '0.00', '90.00', '90.00', '90', '0', '0.00', 'Dues', '4', 1, 1, 1, 1, 1003),
(1032, 0, 137, 109, '2022-02-03', '2022-02-03', 'Jhon doe', '846446456', 'New York City, USA', '', '550.00', '0.00', '550.00', '0', '0', '550.00', '550.00', '550', '0', '0.00', 'Dues', '4', 1, 1, 1, 1, 1001),
(1033, 1371033, 137, 109, '2022-02-03', '2022-02-03', 'Jhon doe', '846446456', 'New York City, USA', '', '2220.00', '0.00', '2220.00', '20', '0.00', '2200.00', '2220.00', '2200', '0', '0.00', 'Dues', '4', 1, 1, 1, 1, 1002),
(1034, 1371034, 137, 109, '2022-02-03', '2022-02-03', 'Jhon doe', '846446456', 'New York City, USA', '', '1600.00', '0.00', '1600.00', '0', '0.00', '1600.00', '1600.00', '1600', '0', '0.00', 'Dues', '4', 1, 1, 1, 1, 1003),
(1035, 1371034, 137, 109, '2022-02-03', '2022-02-03', 'Jhon doe', '846446456', 'New York City, USA', '', '1600.00', '0.00', '1600.00', '0', '0.00', '1600.00', '1600.00', '1600', '0', '0.00', 'Dues', '4', 1, 1, 1, 1, 1003),
(1036, 1371036, 137, 109, '2022-02-03', '2022-02-03', 'Jhon doe', '846446456', 'New York City, USA', '', '1600.00', '0.00', '1600.00', '0', '0.00', '1600.00', '1600.00', '1600', '0', '0.00', 'Dues', '4', 1, 1, 1, 1, 1004),
(1037, 1371037, 137, 0, '2022-02-03', '2022-02-03', 'Na', 'Na', 'Na', '', '1050.00', '0.00', '1050.00', '0', '0', '1050.00', '1050.00', '1050', '0', '0.00', 'Dues', '4', 1, 1, 1, 1, 1005),
(1038, 1371038, 137, 0, '2022-02-03', '2022-02-03', 'Na', 'Na', 'Na', 'Na', '550.00', '0.00', '550.00', '0', '0', '550.00', '550.00', '550', '0', '0.00', 'Dues', '4', 1, 1, 1, 1, 1006),
(1039, 1371039, 137, 0, '2022-02-03', '2022-02-03', 'Na', 'Na', 'Na', 'Na', '620.00', '0.00', '620.00', '0', '0', '620.00', '620.00', '620', '0', '0.00', 'Dues', '4', 1, 1, 1, 1, 1007),
(1040, 1371040, 137, 0, '2022-02-03', '2022-02-03', 'Kalam', '56456', 'Dhaka', 'samiulbdb@gmail.com', '1050.00', '0.00', '1050.00', '0', '0', '1050.00', '1050.00', '1050', '0', '0.00', 'Dues', '4', 1, 1, 1, 1, 1008),
(1041, 1371041, 137, 0, '2022-02-03', '2022-02-06', 'Na', 'Na', 'Na', 'Na', '550.00', '0.00', '550.00', '0', '0', '550.00', '550.00', '500', '0', '50.00', 'Dues', '4', 2, 4, 1, 1, 1009),
(1042, 1371042, 137, 109, '2022-02-10', '2022-02-10', 'Jhon doe', '846446456', 'New York City, USA', 'Na', '1120.00', '0.00', '1120.00', '20', '0.00', '1100.00', '1100.00', '1000', '0', '100.00', 'Dues', '4', 1, 4, 1, 1, 1010),
(1043, 1371043, 137, 110, '2022-02-23', '2022-02-23', 'Samiul Alom', '01751891037', 'Bogura', 'Na', '28000.00', '0.00', '28000.00', '500', '0', '27500.00', '27500.00', '20000', '0', '7500.00', 'Dues', '4', 1, 2, 1, 1, 1011),
(1044, 1371044, 137, 0, '2022-03-18', '2022-03-18', 'Na', 'Na', 'Na', 'Na', '12550.00', '0.00', '12550.00', '0', '0', '12550.00', '12550.00', '12550', '0', '0.00', 'Dues', '4', 1, 1, 1, 1, 1012),
(1045, 1371045, 137, 110, '2022-03-18', '2022-03-18', 'Samiul Alom', '01751891037', 'Bogura', 'Na', '1170.00', '0.00', '1170.00', '0', '7500.00', '1170.00', '8670.00', '870', '0', '7800.00', 'Dues', '4', 1, 1, 1, 1, 1013),
(1046, 1371046, 137, 0, '2022-03-20', '2022-03-20', 'Na', 'Na', 'Na', 'Na', '15000.00', '0.00', '15000.00', '0', '0', '15000.00', '15000.00', '10000', '0', '5000.00', 'Dues', '4', 2, 4, 1, 1, 1014),
(1047, 1301047, 140, 111, '2022-03-23', '2022-03-23', 'Sidgao', '3232323232', 'USA', 'Na', '2000.00', '0.00', '2000.00', '0', '0', '2000.00', '2000.00', '1000', '0', '1000.00', 'Dues', '4', 2, 4, 1, 1, 1001),
(1048, 1301048, 138, 0, '2022-03-23', '2022-03-23', 'Na', 'Na', 'Na', 'Na', '800.00', '0.00', '800.00', '0', '0', '800.00', '800.00', '800', '0', '0.00', 'Dues', '4', 2, 1, 1, 1, 10),
(1049, 1401048, 140, 114, '2022-04-02', '2022-04-06', 'Md.Jamal Sheakh', '01751891999', 'Pal Para', 'Na', '2500.00', '0.00', '2500.00', '0', '0', '2500.00', '2500.00', '1000', '0', '1500.00', 'Dues', '4', 2, 4, 1, 1, 1002),
(1050, 1401050, 140, 114, '2022-04-06', '2022-04-06', 'Md.Jamal Sheakh', '01751891999', 'Pal Para', 'jamal@gmail.com', '2600.00', '0.00', '2600.00', '0', '0', '2600.00', '2600.00', '1600', '0', '1000.00', 'Dues', '4', 2, 4, 1, 1, 1003),
(1051, 1401051, 140, 114, '2022-04-06', '2022-04-06', 'Md.Jamal Sheakh', '01751891999', 'Pal Para', 'jamal@gmail.com', '2500.00', '0.00', '2500.00', '0', '0', '2500.00', '2500.00', '500', '0', '2000.00', 'Dues', '4', 2, 2, 1, 1, 1004),
(1052, 1401052, 140, 114, '2022-06-05', '2022-06-05', 'Md.Jamal Sheakh', '01751891999', 'Pal Para', 'jamal@gmail.com', '3000.00', '0.00', '3000.00', '0', '0', '3000.00', '3000.00', '3000', '0', '0.00', 'Dues', '4', 1, 1, 1, 1, 1005),
(1053, 1401053, 140, 114, '2023-04-14', '2023-04-14', 'Md.Jamal Sheakh', '01751891999', 'Pal Para', 'jamal@gmail.com', '2500.00', '0.00', '2500.00', '0', '0', '2500.00', '2500.00', '0', '0', '2500.00', 'Dues', '4', 2, 5, 1, 1, 1006),
(1054, 1401054, 140, 113, '2023-04-15', '2023-04-15', 'Md.Salam Ali', '01751891037', 'Model village', 'salam@gmail.com', '5000.00', '0.00', '5000.00', '0', '1000', '5000.00', '6000.00', '0', '0', '6000.00', 'Dues', '4', 1, 5, 1, 1, 1007),
(1055, 1401055, 140, 113, '2023-10-12', '2023-10-12', 'Md.Salam Ali', '01751891037', 'Model village', 'salam@gmail.com', '8000.00', '0.00', '8000.00', '0', '1000', '8000.00', '9000.00', '9000', '0', '0.00', 'Dues', '4', 1, 1, 1, 1, 1008),
(1056, 1401056, 140, 114, '2023-10-12', '2023-10-12', 'Md.Jamal Sheakh1', '01751891999', 'Pal Para1', 'jamal@gmail.com', '5500.00', '0.00', '5500.00', '0', '0', '5500.00', '5500.00', '4000', '0', '1500.00', 'Dues', '4', 2, 2, 1, 1, 1009),
(1057, 1401057, 140, 113, '2023-10-17', '2023-10-17', 'Md.Salam Ali', '01751891037', 'Model village', 'salam@gmail.com', '2500.00', '0.00', '2500.00', '0', '1000', '2500.00', '3500.00', '500', '0', '3000.00', 'Dues', '4', 2, 4, 1, 1, 1010),
(1058, 1401058, 140, 113, '2024-01-31', '2024-01-31', 'Md.Salam Ali', '01751891037', 'Model village', 'salam@gmail.com', '6000.00', '0.00', '6000.00', '0', '1000', '6000.00', '7000.00', '300', '0', '6700.00', 'Dues', '4', 1, 1, 1, 1, 1011),
(1059, 1401059, 140, 113, '2024-01-31', '2024-01-31', 'Md.Salam Ali', '01751891037', 'Model village', 'salam@gmail.com', '2500.00', '0.00', '2500.00', '0', '0', '2500.00', '2500.00', '1500', '0', '1000.00', 'Dues', '4', 2, 3, 1, 1, 1012);

-- --------------------------------------------------------

--
-- Table structure for table `orders_details`
--

CREATE TABLE `orders_details` (
  `id` int(110) NOT NULL,
  `user_id` int(110) NOT NULL,
  `order_id` int(110) NOT NULL,
  `student_id` int(110) NOT NULL,
  `order_date` date NOT NULL,
  `pre_due` varchar(255) NOT NULL,
  `today_total` varchar(255) NOT NULL,
  `grand_total` varchar(255) NOT NULL,
  `paid` varchar(255) NOT NULL,
  `recent_due` varchar(255) NOT NULL,
  `causes` varchar(200) NOT NULL,
  `order_type` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders_details`
--

INSERT INTO `orders_details` (`id`, `user_id`, `order_id`, `student_id`, `order_date`, `pre_due`, `today_total`, `grand_total`, `paid`, `recent_due`, `causes`, `order_type`) VALUES
(54, 140, 0, 114, '2022-04-02', '0', '0', '0', '0', '0', 'New Student', 1),
(55, 140, 0, 113, '2022-04-02', '0', '0', '0', '0', '0', 'New Student', 1),
(56, 140, 0, 113, '2022-04-02', '3000', '0', '0', '2000', '1000', 'Dues Paid', 3),
(57, 140, 1401048, 114, '2022-04-02', '0', '2500.00', '2500.00', '1000', '1500.00', 'By Invoice', 1),
(58, 140, 1401050, 114, '2022-04-06', '0', '2600.00', '2600.00', '1600', '1000.00', 'By Invoice', 1),
(59, 140, 0, 113, '2022-04-06', '1000', '0', '0', '1000', '0', 'Dues Paid', 3),
(60, 140, 1401051, 114, '2022-04-06', '0', '2500.00', '2500.00', '500', '2000.00', 'By Invoice', 1),
(61, 140, 1401052, 114, '2022-06-05', '0', '3000.00', '3000.00', '3000', '0.00', 'By Invoice', 1),
(62, 140, 1401053, 114, '2023-04-14', '0', '2500.00', '2500.00', '0', '2500.00', 'By Invoice', 1),
(63, 140, 1401054, 113, '2023-04-15', '1000', '5000.00', '6000.00', '0', '6000.00', 'By Invoice', 1),
(64, 140, 1401055, 113, '2023-10-12', '1000', '8000.00', '9000.00', '9000', '0.00', 'By Invoice', 1),
(65, 140, 1401056, 114, '2023-10-12', '0', '5500.00', '5500.00', '4000', '1500.00', 'By Invoice', 1),
(66, 140, 1401057, 113, '2023-10-17', '1000', '2500.00', '3500.00', '500', '3000.00', 'By Invoice', 1),
(67, 140, 1401058, 113, '2024-01-31', '1000', '6000.00', '7000.00', '300', '6700.00', 'By Invoice', 1),
(68, 140, 1401059, 113, '2024-01-31', '0', '2500.00', '2500.00', '1500', '1000.00', 'By Invoice', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders_dues`
--

CREATE TABLE `orders_dues` (
  `id` int(110) NOT NULL,
  `user_id` int(110) NOT NULL,
  `order_id` int(110) NOT NULL,
  `student_id` int(110) NOT NULL,
  `order_date` date NOT NULL,
  `last_update` date NOT NULL,
  `pre_due` varchar(500) NOT NULL,
  `today_total` varchar(500) NOT NULL,
  `grand_total` varchar(500) NOT NULL,
  `paid` varchar(240) NOT NULL,
  `recent_due` varchar(500) NOT NULL,
  `causes` varchar(200) NOT NULL,
  `dues_or_paid_status` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders_dues`
--

INSERT INTO `orders_dues` (`id`, `user_id`, `order_id`, `student_id`, `order_date`, `last_update`, `pre_due`, `today_total`, `grand_total`, `paid`, `recent_due`, `causes`, `dues_or_paid_status`) VALUES
(15, 140, 1401056, 114, '2023-10-12', '2023-10-12', '0', '5500.00', '5500.00', '4000', '1500.00', 'By Invoice', 1),
(16, 140, 1401059, 113, '2024-01-31', '2024-01-31', '0', '2500.00', '2500.00', '1500', '1000.00', 'By Invoice', 3);

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `order_item_id` int(100) NOT NULL,
  `order_id` int(200) NOT NULL DEFAULT 0,
  `product_id` int(100) NOT NULL DEFAULT 0,
  `quantity` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `short_details` varchar(1500) NOT NULL,
  `order_item_status` int(11) NOT NULL DEFAULT 0,
  `entry_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`order_item_id`, `order_id`, `product_id`, `quantity`, `rate`, `total`, `short_details`, `order_item_status`, `entry_date`) VALUES
(1, 1001, 2001, '5', '50', '250.00', '', 1, '2020-07-18'),
(2, 1001, 2002, '5', '40', '200.00', '', 1, '2020-07-18'),
(3, 1002, 2001, '2', '55', '110.00', '', 1, '2020-08-05'),
(4, 1003, 2003, '5', '120', '600.00', '', 1, '2020-08-10'),
(5, 1003, 2001, '3', '50', '150.00', '', 1, '2020-08-10'),
(6, 1004, 2003, '2', '120', '240.00', '', 1, '2020-08-10'),
(7, 1005, 2001, '10', '50', '500.00', '', 1, '2022-01-28'),
(8, 1012, 3, '3', '120', '120.00', '', 1, '2022-01-28'),
(9, 1012, 5, '3', '30', '90.00', '', 1, '2022-01-28'),
(10, 1012, 3, '3', '120', '360.00', '', 1, '2022-01-28'),
(11, 1013, 3, '1', '120', '120.00', '', 1, '2022-01-28'),
(12, 1013, 5, '1', '30', '30.00', '', 1, '2022-01-28'),
(13, 1013, 6, '1', '10000', '10000.00', '', 1, '2022-01-28'),
(14, 1016, 3, '30', '120', '3600.00', '', 1, '2022-01-28'),
(15, 1016, 5, '50', '30', '1500.00', '', 1, '2022-01-28'),
(16, 1017, 3, '1', '500', '500.00', '', 1, '2022-01-28'),
(17, 1017, 5, '2', '310', '620.00', '', 1, '2022-01-28'),
(19, 1018, 2, '1', '40', '40.00', '', 1, '2022-01-29'),
(20, 1019, 7, '10', '50', '500.00', '', 1, '2022-01-30'),
(21, 1019, 8, '10', '100', '1000.00', '', 1, '2022-01-30'),
(22, 1019, 9, '15', '60', '900.00', '', 1, '2022-01-30'),
(23, 1020, 7, '5', '50', '250.00', '', 1, '2022-01-30'),
(24, 1020, 8, '8', '100', '800.00', '', 1, '2022-01-30'),
(25, 1020, 9, '4', '60', '240.00', '', 1, '2022-01-30'),
(26, 1021, 3, '8', '120', '960.00', '', 1, '2022-01-30'),
(27, 1021, 2, '10', '40', '400.00', '', 1, '2022-01-30'),
(28, 1022, 11, '1', '15000', '15000.00', '', 1, '2022-01-31'),
(29, 1022, 12, '50', '100', '5000.00', '', 1, '2022-01-31'),
(34, 1024, 8, '1', '100', '100.00', '', 1, '2022-02-01'),
(37, 1023, 8, '1', '100', '100.00', 'Very High', 1, '2022-02-01'),
(38, 1023, 8, '1', '100', '100.00', 'Medium Work', 1, '2022-02-01'),
(39, 1025, 1, '1', '50', '50.00', 'Na', 1, '2022-02-02'),
(40, 1025, 2, '1', '40', '40.00', 'Na', 1, '2022-02-02'),
(41, 1025, 5, '1', '30', '30.00', 'Na', 1, '2022-02-02'),
(42, 1026, 1, '1', '50', '50.00', 'Na', 1, '2022-02-02'),
(43, 1026, 2, '1', '40', '40.00', 'Na', 1, '2022-02-02'),
(44, 1301027, 5, '1', '30', '30.00', 'Na', 1, '2022-02-02'),
(45, 1301027, 6, '1', '10000', '10000.00', 'Na', 1, '2022-02-02'),
(46, 1301028, 1, '1', '50', '50.00', 'Na', 1, '2022-02-02'),
(47, 1301028, 2, '1', '40', '40.00', 'Na', 1, '2022-02-02'),
(48, 1301028, 3, '1', '120', '120.00', 'Na', 1, '2022-02-02'),
(49, 1301029, 1, '1', '50', '50.00', 'Na', 1, '2022-02-02'),
(50, 1301029, 2, '1', '40', '40.00', 'Na', 1, '2022-02-02'),
(51, 1301030, 3, '20', '120', '2400.00', 'Blur with new Style', 1, '2022-02-02'),
(52, 1301030, 5, '10', '30', '300.00', 'Medium Work', 1, '2022-02-02'),
(53, 1301031, 1, '1', '50', '50.00', 'Na', 1, '2022-02-02'),
(54, 1301031, 2, '1', '40', '40.00', 'Na', 1, '2022-02-02'),
(55, 0, 13, '1', '550', '550.00', 'Na', 1, '2022-02-03'),
(62, 1371033, 13, '1', '550', '550.00', 'model:150', 1, '2022-02-03'),
(63, 1371033, 14, '1', '1050', '1050.00', 'model:151', 1, '2022-02-03'),
(64, 1371033, 15, '1', '620', '620.00', 'model:153', 1, '2022-02-03'),
(67, 1371036, 13, '1', '550', '550.00', 'Na', 1, '2022-02-03'),
(68, 1371036, 14, '1', '1050', '1050.00', 'Na', 1, '2022-02-03'),
(69, 1371037, 14, '1', '1050', '1050.00', 'model:159', 1, '2022-02-03'),
(70, 1371038, 13, '1', '550', '550.00', 'Na', 1, '2022-02-03'),
(71, 1371039, 15, '1', '620', '620.00', 'Na', 1, '2022-02-03'),
(72, 1371040, 14, '1', '1050', '1050.00', 'Na', 1, '2022-02-03'),
(74, 1371041, 13, '1', '550', '550.00', 'Na', 1, '2022-02-03'),
(75, 1371042, 16, '1', '500', '500.00', 'Na', 1, '2022-02-10'),
(76, 1371042, 15, '1', '620', '620.00', 'Na', 1, '2022-02-10'),
(77, 1371043, 17, '2', '10000', '20000.00', 'warenty 1 year', 1, '2022-02-23'),
(78, 1371043, 19, '1', '8000', '8000.00', 'warenty 1 year', 1, '2022-02-23'),
(79, 1371044, 13, '1', '550', '550.00', 'Na', 1, '2022-03-18'),
(80, 1371044, 18, '1', '12000', '12000.00', 'Na', 1, '2022-03-18'),
(81, 1371045, 13, '1', '550', '550.00', 'Na', 1, '2022-03-18'),
(82, 1371045, 15, '1', '620', '620.00', 'Na', 1, '2022-03-18'),
(83, 1371046, 22, '50', '100', '5000.00', 'Medium Sise  50/KG', 1, '2022-03-20'),
(84, 1371046, 17, '1', '10000', '10000.00', 'Na', 1, '2022-03-20'),
(85, 1301047, 20, '1', '1000', '1000.00', 'Na', 1, '2022-03-23'),
(86, 1301047, 21, '1', '1000', '1000.00', 'Na', 1, '2022-03-23'),
(87, 1301048, 23, '1', '500', '500.00', 'Na', 1, '2022-03-23'),
(88, 1301048, 24, '1', '300', '300.00', 'Na', 1, '2022-03-23'),
(90, 1401048, 25, '1', '2500', '2500.00', '3-Month (Jan-June)', 1, '2022-04-02'),
(91, 1401050, 26, '1', '2600', '2600.00', '3-Month', 1, '2022-04-06'),
(92, 1401051, 25, '1', '2500', '2500.00', 'Three Month', 1, '2022-04-06'),
(94, 1401052, 26, '1', '3000', '3000.00', 'Six Month', 1, '2022-06-05'),
(95, 1401053, 25, '1', '2500', '2500.00', 'Three Month', 1, '2023-04-14'),
(96, 1401054, 28, '1', '5000', '5000.00', 'Six Month', 1, '2023-04-15'),
(103, 1401056, 25, '1', '2500', '2500.00', 'Three Month', 1, '2023-10-12'),
(104, 1401056, 29, '1', '3000', '3000.00', 'Six Month', 1, '2023-10-12'),
(105, 1401055, 28, '1', '5000', '5000.00', 'Six Month', 1, '2023-10-12'),
(106, 1401055, 27, '1', '3000', '3000.00', 'Three Month', 1, '2023-10-12'),
(107, 1401057, 25, '1', '2500', '2500.00', 'Three Month', 1, '2023-10-17'),
(108, 1401058, 26, '1', '3000', '3000.00', 'Six Month', 1, '2024-01-31'),
(109, 1401058, 27, '1', '3000', '3000.00', 'Three Month', 1, '2024-01-31'),
(110, 1401059, 25, '1', '2500', '2500.00', 'Three Month', 1, '2024-01-31');

-- --------------------------------------------------------

--
-- Table structure for table `parner`
--

CREATE TABLE `parner` (
  `pr_id` int(30) NOT NULL,
  `user_id` int(200) NOT NULL,
  `pr_name` varchar(200) NOT NULL,
  `pr_details` varchar(200) NOT NULL,
  `userPic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parner`
--

INSERT INTO `parner` (`pr_id`, `user_id`, `pr_name`, `pr_details`, `userPic`) VALUES
(2, 140, 'brch', 'Na', 'prince-458233-brch.png'),
(3, 140, 'Govt', 'Na', 'prince-340454-govt.jpg'),
(4, 140, 'bteb', 'Na', 'prince-223069-bteb.jpg'),
(5, 140, 'bteb', 'Na', 'prince-885739-bteb.jpg'),
(6, 140, 'blmdt', 'Na', 'prince-613366-blmdt.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `password`
--

CREATE TABLE `password` (
  `passwordid` int(11) NOT NULL,
  `original` varchar(30) NOT NULL,
  `mdfive` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password`
--

INSERT INTO `password` (`passwordid`, `original`, `mdfive`) VALUES
(6, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(130, 'samiul004', 'b17c7f9d339f87ae91c72e08daf1c8db'),
(131, '200710', '8e2945aecfcbf5748ebaf94364eb9807'),
(132, 'omor@2233', '72afd5ae40d11e6b6210e8aa1e048c0c'),
(133, '654321', 'c33367701511b4f6020ec61ded352059'),
(134, '826237', '1aaf3eb3eacb0821c0469b1897acc5d5'),
(135, 'Sam1', '490bd89bcdc4e9f01d1a33899736f7a3'),
(136, 'Sidd1', '7f141c9d56a461aad0415a582ea6b10c'),
(137, 'Nafiz21', '9fc4f00134322ce95dfaa83d945397da'),
(138, 'Abul3', 'ea7f88e04d75fb3b361d97378ae42a36'),
(139, 'Kalam14', 'd4efe65874f10a488c31b3b66f38884f'),
(140, 'ITM23', 'eb2dd0656157562e37736fe7e186d438'),
(141, 'SMImran1', '7ae96a01c41c5f3379e7b40bc15e3761'),
(142, 'SiddikDk1', '29486a5781c47b500d3b23e719c1e9d1'),
(143, 'Dta64', 'fc8facbb2ede3a0a78919631233ad1e9'),
(144, 'Hmt1', '578dd1e323383bdd74fbc6824b835e4f'),
(145, 'sphon1', '1050afd33aabfe7d9ecddc089e38a30e'),
(146, 'Sphon2', '9f144811062193e3d326c9314e527c96'),
(147, 'Sam23', '599dd3928dc723d2fe187674b4fdde5a'),
(148, 'SurmaT23', 'e7ce6e9ef890b6ba795db32f606057a4');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(110) NOT NULL,
  `user_id` int(110) NOT NULL,
  `order_id` int(110) NOT NULL,
  `customer_id` int(110) NOT NULL,
  `order_date` date NOT NULL,
  `last_update` date NOT NULL,
  `pre_due` varchar(500) NOT NULL,
  `today_total` varchar(500) NOT NULL,
  `grand_total` varchar(500) NOT NULL,
  `paid` varchar(240) NOT NULL,
  `recent_due` varchar(500) NOT NULL,
  `dues_or_paid` varchar(30) NOT NULL,
  `dues_or_paid_status` int(50) NOT NULL,
  `cuses` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `user_id`, `order_id`, `customer_id`, `order_date`, `last_update`, `pre_due`, `today_total`, `grand_total`, `paid`, `recent_due`, `dues_or_paid`, `dues_or_paid_status`, `cuses`) VALUES
(2, 130, 1301031, 101, '2022-02-02', '2022-02-02', '0.00', '90.00', '90.00', '90', '0.00', 'Dues', 5, 'By Invoice'),
(3, 130, 0, 102, '2020-08-05', '2020-08-05', '0', '0', '0', '0', '0', 'Dues', 4, 'New Customer'),
(4, 130, 1301030, 104, '2022-02-02', '2022-02-02', '0.00', '2700.00', '2700.00', '2000', '700.00', 'Dues', 4, 'By Invoice'),
(5, 135, 1020, 105, '2022-01-30', '2022-01-30', '0.00', '1280.00', '1280.00', '1000', '280.00', 'Dues', 4, 'By Invoice'),
(6, 136, 1022, 106, '2022-01-31', '2022-01-31', '10000.00', '0', '0', '10000', '0', 'Dues', 5, 'Dues Paid'),
(7, 135, 1023, 107, '2022-02-01', '2022-02-01', '0', '200.00', '200.00', '1600', '0.00', 'Dues', 4, 'Invoice Update'),
(8, 135, 0, 108, '2022-02-01', '2022-02-01', '0', '0', '0', '0', '0', 'Dues', 4, 'New Customer'),
(9, 137, 1371042, 109, '2022-02-10', '2022-02-10', '0.00', '1100.00', '1100.00', '1000', '100.00', 'Dues', 4, 'By Invoice'),
(10, 137, 1371045, 110, '2022-03-18', '2022-03-18', '7500.00', '1170.00', '8670.00', '870', '7800.00', 'Dues', 4, 'By Invoice'),
(11, 140, 1301047, 111, '2022-03-23', '2022-03-23', '0', '2000.00', '2000.00', '1000', '1000.00', 'Dues', 4, 'By Invoice'),
(12, 137, 0, 112, '2022-03-20', '2022-03-20', '0', '0', '0', '0', '0', 'Dues', 4, 'New Customer');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(200) NOT NULL,
  `product_name` varchar(500) NOT NULL,
  `product_image` text NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `duration` varchar(250) NOT NULL,
  `course_fee` varchar(255) NOT NULL,
  `my_cost` varchar(250) NOT NULL,
  `entry_date` date NOT NULL,
  `user_id` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_image`, `quantity`, `duration`, `course_fee`, `my_cost`, `entry_date`, `user_id`) VALUES
(25, 'Computer Office Application', '250745.', '-5', 'Three Month', '2500', '2000', '2022-03-31', 140),
(26, 'Computer Office Application', '601432.', '-2', 'Six Month', '3000', '2500', '2022-03-31', 140),
(27, 'Database Programming', '891517.', '-1', 'Three Month', '3000', '2500', '2022-04-06', 140),
(28, 'Database Programming', '267224.', '-1', 'Six Month', '5000', '4000', '2022-04-06', 140),
(29, 'Graphics Design & Multimedia', '865016.', '0', 'Six Month', '3000', '2500', '2022-04-06', 140),
(30, 'ADVANCED CERTIFICATE COURSE IN COMPUTER APPLICATION', '417198.', '1', 'One Year And Two Semester with 11 subject', '35000', '30000', '2022-04-06', 140),
(31, 'Computer Office Application', '410471.', '1', 'Three Month', '3000', '2500', '2022-06-01', 137);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pro_id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  `product_name` varchar(300) NOT NULL,
  `short_details` varchar(500) NOT NULL,
  `details` longtext NOT NULL,
  `size` varchar(150) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `price` varchar(40) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `user_id`, `product_name`, `short_details`, `details`, `size`, `weight`, `price`, `photo`) VALUES
(13, 130, 'Enerton', 'Vitalizer & Tonic (Herbal & Nutraceuticals)', 'Strength and energy booster . Superb sports tonic . Tonic for asthmatic patients . Libido enhancer . Excellent solution for debility', 'Children: Under the age of 12 years: Not recommended Adult: 2 - 3 teaspoonful (10 - 15ml) 2-3 times daily or as directed by the physician. ', '200 ml Syrup in PET Bottle', '3', '649856.jpg'),
(14, 130, 'Eredex', 'Aphrodisiac (Herbal & Nutraceuticals)', 'Erectile dysfunction (Male Impotence), Loss of Libido, Exhaustion', '1 capsule 3 times daily or as advised by the physician. ', '5.4mg capsule. 4 x 6\'s Alu-Alu blister Pack', '2', '992653.jpg'),
(15, 130, 'Adovas', 'Adhatoda vasica', 'AdovasÂ® is a sugar free, non sedating herbal cough syrup. It liquefies phlegm. It is effective for all kinds of common cold and cough such as, dry irritable cough, allergic cough, smokers cough and cough associated with bronchitis. It soothens the throat irritation and relieves hoarseness. ', 'Adults: 3 tea spoonfuls (15 ml) 2-3 times a day. In acute cough warm water can be added for better result. Children under 12 years of age: 1-2 teaspoo', '100 ml & 200ml Syrup in PET bottle.', '3', '693666.jpg'),
(16, 130, 'Asmon ', 'Asmona', 'helps to control asthma and dyspnoea,\r\n prevents allergies,\r\nrelieves bronchitis,\r\nrelieves cough.', 'Adult: 2 tablets daily in the evening or as directed by the physician.\r\nNB: Not recommended for under 8 years old children.\r\n', '50 Tablets in a modern plastic container', '1', '902656.jpg'),
(17, 130, 'Serpentin', 'Effective for Hypertension ', 'Control hypertension,\r\nrelieves unsteadiness,\r\nrelieves insomnia,\r\nrelieves headache.', '1-2 tablets morning and evening daily or as directed by the physician', '10 × 5 tablets blister box.', '1', '50072.jpg'),
(18, 130, 'AmCivit®', 'Amlaki rashayan', 'Vitamin C deficiency, Scurvy, Anemia in children, Prevent premature ageing.', '6 months-12 years: 1/2 teaspoonful-2 teaspoonful 3 times daily.\r\nAbove 12 years-Adult: 2-3 teaspoonful 3 times daily.', '100 ml Syrup in PET bottle', '3', '674094.jpg'),
(19, 130, 'Arubin®', 'Carbonyl enriched herbal hematinic', 'Carbonyl enriched herbal hematinic', 'Adult: 1 capsule should be taken daily before meal.\r\nChildren: Not recommended for children under 12 years of age.', '3 x 10`s blister pack', '2', '334591.png'),
(20, 130, 'Ulpep™', 'Hingastak churna', 'Indication:\r\n    Gastritis (wounds in the lining of stomach)\r\n    Gastric Ulcer & Duodenal Ulcer\r\n    Dyspepsia\r\n    Indigestion', 'One Ulpep™ capsule 2 times a day before meals or as directed by the physician.', 'Strength: 500 mg Dosage form: Capsule Pack size: 3', '2', '643378.jpg'),
(21, 130, 'UripamTM Softgel', 'Saw Palmetto', 'UripamTM is indicated for the treatment of Benign prostatic hyperplasia (BPH).', 'One softgel capsule one to two times daily or as advised by the physician.', 'UripamTM Softgel Capsule: Each box contains 30 sof', '2', '428262.png'),
(22, 130, 'Torel™', 'Muscle rub', '• Muscle pain\r\n\r\n• Sprains, strains and sports injuries\r\n\r\n• Headache\r\n\r\n• Bruising\r\n\r\n• Fibrositis\r\n\r\n• Neuralgia\r\n\r\n• Pain due to herpes zoster\r\n\r\n• Osteoarthritis', 'Adult: Clean the affected area. Apply a small amount of TorelTM muscle rub (an amount equal to the surface area of the tip of a finger) 3 to 4 times d', 'TorelTM : Each lami tube contains 20 gm TorelTM mu', '4', '113370.png'),
(23, 130, 'Reli BalmTM', 'Neck & Shoulder Rub', 'Neck & Shoulder pain', 'For adults and children over 12, rub well on the affected area. Repeat 3 to 4 times daily.', 'Each lamitube contains 25 gm Neck & Shoulder Rub. ', '4', '200168.jpg'),
(24, 130, 'Giloba®', 'Ginkgo biloba', '    Cerebral insufficiency,\r\n    Demential syndromes: memory deficit, poor concentration, depression, dizziness and headache,\r\n    Vertigo & tinnitus,\r\n    Peripheral vascular diseases,\r\n    Sexual dysfunction secondary to SSRI use,\r\n    Acute cochlear deafness.', 'Giloba® 60 mg 1 or 2 capsule 2 to 3 times daily or as advised by the physician.\r\nGiloba® 120 mg 1 or 2 capsule 2 to 3 times daily or as advised by the', 'Giloba® 60 mg: 5 x 6\'s Alu-Alu blister pack, <br> ', '2', '583603.jpg'),
(25, 130, 'Gintex®', 'Panax ginseng', '• Adaptogen & General Tonic for fatigue\r\n• Aphrodisiac & for Erectile Dysfunction\r\n• As an additive in Non Insulin Dependent Diabetes Mellitus\r\n• Menopausal symptoms\r\n• Immunostimulation\r\n• Pulmonary function improvement\r\n• Chronic respiratory disease', 'One Gintex® capsule one or two times a day or as advised by the physician. ', 'One Gintex® capsule one or two times a day or as a', '2', '279261.jpg'),
(26, 130, 'Lecogen', 'Lecogena', 'relieves long-standing lecucorrhoea.\r\neffective for trichomonas vaginalis, candida albicans, fungal and bacterial infections.\r\n relieves abnormal discharge and protects urinogenital infection.\r\nrelieves irregular menstruation, pain and inflammation of uterus.\r\ndiminished albuminuria.\r\neffective for gonorrhoea, syphilis and inflammation of gonorrhea.\r\n strengthens the body and prevents effect of age.', 'Adult: 2 tablets to be taken with milk morning & evening daily or as directed by the physician.', '10 × 5 film coated tablets blister box.', '1', '607063.jpg'),
(27, 130, 'Herboplex ', 'Vitamin & Mineral deficiencies', 'Herboplex is an ideal nutritional therapy of natural extract.\r\n\r\n    Relieves General weakness\r\n    Effective for vitamin and mineral deficiencies.\r\n    Effective in anemia during pregnancy.', '\r\n\r\nAdult: 2 teaspoonfuls 1-2 times daily.<br>\r\n\r\nChildren: 1 teaspoonful 1-2 times daily.\r\n', '100ml, 200ml & 450ml syrup PET bottle with measuri', '3', '847916.jpg'),
(28, 130, 'Livoliv ', 'Effective for Liver disorder & to Protect the Liver', 'Livoliv relieves hepatitis, all kinds of jaundice, protect menopausal hot flushes, burning sensation of body & skin', 'Adult: 2-4 teaspoonfuls 2-3 times daily after meal.<br>\r\n\r\nChildren: 1-2 teaspoonfuls 2-3 times daily after meal or as directed by the physician.', '100 ml & 450ml  syrup  in PET bottle with a measur', '3', '365673.jpg'),
(29, 130, 'Dyalin ', 'Remedy for Dysentery, Bacillary dysentery & Diarrhoea', 'Dyalin relieves dysentery, bacillary dysentery, haemorrhydal bleeding, intestinal colic, diarrhoea', 'Adult: 2-4 teaspoonfuls 3 times daily after meal.<br>\r\nChildren: 1-2 teaspoonfuls 3 times daily after meal, or as directed by the physician.\r\n', '450ml PET bottle syrup with a measuring cap.', '3', '135387.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `cat_id` int(30) NOT NULL,
  `user_id` int(200) NOT NULL,
  `cat_name` varchar(200) NOT NULL,
  `cat_details` varchar(200) NOT NULL,
  `link` varchar(300) NOT NULL,
  `cat_photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`cat_id`, `user_id`, `cat_name`, `cat_details`, `link`, `cat_photo`) VALUES
(1, 140, 'Tablet', 'Unani Best Medicin', 'tablet.php', '196361.jpg'),
(2, 140, 'Capsule', 'Unani Best Medicin', 'capsule.php', '567846.jpg'),
(3, 140, 'Syrup', 'Unani Best Medicin', 'syrup.php', '404832.jpg'),
(4, 140, 'Gel', 'Unani Best Medicin', 'gel.php', '220476.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `publish1`
--

CREATE TABLE `publish1` (
  `id` int(30) NOT NULL,
  `user_id` int(200) NOT NULL,
  `pb_title` varchar(500) NOT NULL,
  `pb_subtitle` longtext NOT NULL,
  `pb_date` date NOT NULL,
  `pb_file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publish1`
--

INSERT INTO `publish1` (`id`, `user_id`, `pb_title`, `pb_subtitle`, `pb_date`, `pb_file`) VALUES
(1, 140, ' Result Of Computer Science Engineering (4th Semester)', '<p><span style=\"color: rgb(82, 83, 104); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; background-color: rgb(243, 242, 242);\">Diploma in Engineering</span><br></p>', '2023-09-13', '');

-- --------------------------------------------------------

--
-- Table structure for table `publish_result_routine`
--

CREATE TABLE `publish_result_routine` (
  `id` int(30) NOT NULL,
  `user_id` int(200) NOT NULL,
  `type` int(20) NOT NULL,
  `title` varchar(200) NOT NULL,
  `userPic` varchar(200) NOT NULL,
  `entry_date` datetime NOT NULL,
  `status` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publish_result_routine`
--

INSERT INTO `publish_result_routine` (`id`, `user_id`, `type`, `title`, `userPic`, `entry_date`, `status`) VALUES
(33, 140, 1, 'Result Of Computer Science Engineering (4th Semester)', 'prince-894464-Institution Approval Letter.pdf', '2023-10-06 21:33:25', 1),
(34, 140, 2, 'Medical Assistant Programme 12', 'prince-1863-Fordwing Domail.pdf', '2023-10-06 21:35:20', 1),
(35, 140, 3, 'Nursing & Midwifery Programme', 'prince-588781-Dental bangla Email.pdf', '2023-10-06 21:38:54', 1);

-- --------------------------------------------------------

--
-- Table structure for table `seo_section`
--

CREATE TABLE `seo_section` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `keyword` mediumtext NOT NULL,
  `description` mediumtext NOT NULL,
  `author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_section`
--

INSERT INTO `seo_section` (`id`, `user_id`, `type`, `keyword`, `description`, `author`) VALUES
(1, 140, 'Home', 'Nostrud voluptatem ', 'Eum proident exerci', 'Voluptate ullam numq'),
(5, 140, 'About', 'Adipisci excepteur u', 'Error amet quidem e', 'Pariatur Velit dolo'),
(6, 140, 'Team', 'Dicta est itaque mai', 'Fugit esse id dol', 'Dolore porro consect'),
(7, 140, 'Teacher', 'In et veniam sed nu', 'Laborum nostrud mole', 'Voluptas magna sint'),
(8, 140, 'Student', 'Molestiae adipisci c', 'Tempor anim eum est ', 'Dolores consequatur'),
(9, 140, 'Course', 'Qui dolor omnis minu', 'Veniam dolor suscip', 'Soluta corporis unde'),
(10, 140, 'Gallery', 'Laborum labore facil', 'Ea culpa esse fuga', 'Dolor reprehenderit '),
(11, 140, 'Blog', 'Aliquid rerum reicie', 'Rerum ut placeat mi', 'Ad sunt similique i'),
(12, 140, 'Blog Details', 'Aliqua Eum et aut s', 'Aut deserunt quia ut', 'Fugiat sed inventor'),
(13, 140, 'Contact', 'Nobis quia error ad ', 'Modi a veniam esse', 'Atque dicta praesent');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `sv_id` int(30) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(200) NOT NULL,
  `sv_name` varchar(500) NOT NULL,
  `course_fee` varchar(100) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `total_semester` varchar(100) NOT NULL,
  `sv_details` longtext NOT NULL,
  `userPic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`sv_id`, `category_id`, `user_id`, `sv_name`, `course_fee`, `duration`, `total_semester`, `sv_details`, `userPic`) VALUES
(3, 3, 140, 'Computer Science Engineering', '200000', '4-Years', '8-Semester', '<p><span style=\"font-size: 12pt;\">Computer Science Engineering encompasses studies on the design, analysis, implementation, and application of computer technology. Computing plays a vital role in all fields, including science and medicine, music and art, business, law, and human communication; hence, the study of computer science and engineering can be interdisciplinary in nature.</span></p>\r\n<p><span style=\"font-size: 12pt;\">A computer engineer is responsible for constructing and managing an organization&rsquo;s computer system and providing technical support to the organization. A computer engineer typically works in an office or laboratory environment as part of a team and enjoys a traditional work schedule. A computer engineer, who may be a software engineer, is responsible for developing, testing, and evaluating the software that enables our computer to work. They may help in the development of new computer games and business applications or even in the design of entirely new operating systems. Whether a student&rsquo;s goal is to become a computing professional, DTI is committed to helping them gain the background they need to be a world class engineer.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-size: 12pt;\"><strong>Objectives &amp; Outcomes:</strong></span></p>\r\n<p><span style=\"font-size: 12pt;\">&bull;&nbsp; Provides the highest quality education so that students can cope with both undergraduate and graduate program.</span><br /><span style=\"font-size: 12pt;\">&bull; Provides state-of-the-art education.</span><br /><span style=\"font-size: 12pt;\">&bull; Establish a productive Computer Science and Engineering career in industry, academia, or government sector.</span><br /><span style=\"font-size: 12pt;\">&bull; Ensure career development in the field of computer systems engineering or software systems engineering.</span><br /><span style=\"font-size: 12pt;\">&bull; Students will be trained in such a way that they can work as a team member or be able to lead a team effectively.</span><br /><span style=\"font-size: 12pt;\">&bull; Students will learn the development of innovative systems and solutions using hardware and software</span><br /><span style=\"font-size: 12pt;\">integration.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-size: 12pt;\"><strong>Course Outline:</strong></span></p>\r\n<div class=\"row\">\r\n<div class=\"col-md-3\">\r\n<ul>\r\n<li><span style=\"font-size: 12pt;\"><strong>SEMESTER-1</strong></span></li>\r\n<li><span style=\"font-size: 12pt;\">Engineering Drawing</span></li>\r\n<li><span style=\"font-size: 12pt;\">Computer Fundamental</span></li>\r\n<li><span style=\"font-size: 12pt;\">Computer Application-1</span></li>\r\n<li><span style=\"font-size: 12pt;\">Basic Electricity</span></li>\r\n<li><span style=\"font-size: 12pt;\">Applied English</span></li>\r\n<li><span style=\"font-size: 12pt;\">Mathematics-1</span></li>\r\n<li><span style=\"font-size: 12pt;\">Chemistry</span></li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-3\">\r\n<ul>\r\n<li><span style=\"font-size: 12pt;\"><strong>SEMESTER-2</strong></span></li>\r\n<li><span style=\"font-size: 12pt;\">Computer Application-2</span></li>\r\n<li><span style=\"font-size: 12pt;\">Basic Electronics</span></li>\r\n<li><span style=\"font-size: 12pt;\">Computer Workshop Practice</span></li>\r\n<li><span style=\"font-size: 12pt;\">Physics-1</span></li>\r\n<li><span style=\"font-size: 12pt;\">Mathematics-2</span></li>\r\n<li><span style=\"font-size: 12pt;\">Bangla</span></li>\r\n<li><span style=\"font-size: 12pt;\">Physical &amp; Life Skill Education</span></li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-3\">\r\n<ul>\r\n<li><span style=\"font-size: 12pt;\"><strong>SEMESTER-3</strong></span></li>\r\n<li><span style=\"font-size: 12pt;\">Programming in C</span></li>\r\n<li><span style=\"font-size: 12pt;\">Web Design</span></li>\r\n<li><span style=\"font-size: 12pt;\">Digital Electronics-1</span></li>\r\n<li><span style=\"font-size: 12pt;\">Electrical Device &amp; Circuits</span></li>\r\n<li><span style=\"font-size: 12pt;\">Mathematics-3</span></li>\r\n<li><span style=\"font-size: 12pt;\">Physics-2</span></li>\r\n<li><span style=\"font-size: 12pt;\">Social Science</span></li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-3\">\r\n<ul>\r\n<li><span style=\"font-size: 12pt;\"><strong>SEMESTER-4</strong></span></li>\r\n<li><span style=\"font-size: 12pt;\">Object Oriented Programming in C++</span></li>\r\n<li><span style=\"font-size: 12pt;\">Graphic Design</span></li>\r\n<li><span style=\"font-size: 12pt;\">Data Structure &amp; Algorithm</span></li>\r\n<li><span style=\"font-size: 12pt;\">Web Development</span></li>\r\n<li><span style=\"font-size: 12pt;\">Digital Electronics-2</span></li>\r\n<li><span style=\"font-size: 12pt;\">Electrical Machines</span></li>\r\n<li><span style=\"font-size: 12pt;\">Discrete Mathematics</span></li>\r\n</ul>\r\n</div>\r\n</div>\r\n<div class=\"row\">\r\n<div class=\"col-md-3\">\r\n<ul>\r\n<li><span style=\"font-size: 12pt;\"><strong>SEMESTER-5</strong></span></li>\r\n<li><span style=\"font-size: 12pt;\">Programming in C#</span></li>\r\n<li><span style=\"font-size: 12pt;\">Computer System Software</span></li>\r\n<li><span style=\"font-size: 12pt;\">Database Management System</span></li>\r\n<li><span style=\"font-size: 12pt;\">E-commerce &amp; CMS</span></li>\r\n<li><span style=\"font-size: 12pt;\">Web Development Project</span></li>\r\n<li><span style=\"font-size: 12pt;\">Book Keeping &amp; Accounting</span></li>\r\n<li><span style=\"font-size: 12pt;\">Environmental Management</span></li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-3\">\r\n<ul>\r\n<li><span style=\"font-size: 12pt;\"><strong>SEMESTER-6</strong></span></li>\r\n<li><span style=\"font-size: 12pt;\">Programming in JAVA</span></li>\r\n<li><span style=\"font-size: 12pt;\">Microprocessor &amp; Microcomputer</span></li>\r\n<li><span style=\"font-size: 12pt;\">Data Communication &amp; Computer Network</span></li>\r\n<li><span style=\"font-size: 12pt;\">Computer Architecture &amp; Peripherals</span></li>\r\n<li><span style=\"font-size: 12pt;\">Database Management System Project</span></li>\r\n<li><span style=\"font-size: 12pt;\">Computer Servicing &amp; Maintenance</span></li>\r\n<li><span style=\"font-size: 12pt;\">Industrial Management</span></li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-3\">\r\n<ul>\r\n<li><span style=\"font-size: 12pt;\"><strong>SEMESTER-7</strong></span></li>\r\n<li><span style=\"font-size: 12pt;\">Embedded System &amp; PLC</span></li>\r\n<li><span style=\"font-size: 12pt;\">Mobile Apps Development</span></li>\r\n<li><span style=\"font-size: 12pt;\">Network Administration &amp; Management</span></li>\r\n<li><span style=\"font-size: 12pt;\">Digital Marketing Technology</span></li>\r\n<li><span style=\"font-size: 12pt;\">Computer Engineering Project</span></li>\r\n<li><span style=\"font-size: 12pt;\">Information Management and Security</span></li>\r\n<li><span style=\"font-size: 12pt;\">Entrepreneurship</span></li>\r\n<li><span style=\"font-size: 12pt;\">Electrical Engineering Project</span></li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-3\">\r\n<ul>\r\n<li><span style=\"font-size: 12pt;\"><strong>SEMESTER-8</strong></span></li>\r\n<li><span style=\"font-size: 12pt;\">Industrial Training</span></li>\r\n</ul>\r\n</div>\r\n</div>\r\n<p>&nbsp;</p>', 'prince-558033-diploma-computer.jpg');
INSERT INTO `service` (`sv_id`, `category_id`, `user_id`, `sv_name`, `course_fee`, `duration`, `total_semester`, `sv_details`, `userPic`) VALUES
(4, 3, 140, 'Diploma in Civil Engineering', '', '', '', '<p><span style=\"font-size: 12pt;\"><strong>A Diploma in Civil Engineering</strong> program can be a good choice for your career. An important branch of modern engineering &amp; technology is civil engineering, the main subject of which is planning, design, and structural execution. These include various challenging facilities including public works design supervision and construction activities like roads, bridges, tunnels, buildings, airports, dams, sewerage systems, ports, etc.</span></p>\r\n<p><span style=\"font-size: 12pt;\">A Civil Engineer is essential for the planning/implementation and maintenance of the project. We called him a civil engineer who has a degree Diploma in Civil Engineering in order to acquire engineering knowledge as well as administrative skills. They can establish themselves in the positions of site engineer/manager, design, research, education, etc., at various construction sites, both public and private. They also have the opportunity to work as Deputy Assistant Engineers in various government, semi-government and autonomous organizations. Possibly LGED, PWD, R&amp;H, BR, BBA, MES, EED, WASA, DESCO, DPDC, WDB, BADC, Bangladesh Airlines, Telecom Industry, and various public and private housing and development projects.</span></p>\r\n<p><span style=\"font-size: 12pt;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"data:image/jpeg;base64,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\" /></span></p>\r\n<section class=\"elementor-section elementor-inner-section elementor-element elementor-element-e17d8ca elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"e17d8ca\" data-element_type=\"section\">\r\n<div class=\"elementor-container elementor-column-gap-default\">\r\n<div class=\"elementor-row\">\r\n<div class=\"aux-parallax-section elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-700acd5\" data-id=\"700acd5\" data-element_type=\"column\">\r\n<div class=\"elementor-column-wrap elementor-element-populated\">\r\n<div class=\"elementor-widget-wrap\">\r\n<div class=\"elementor-element elementor-element-ea6020f elementor-widget elementor-widget-heading\" data-id=\"ea6020f\" data-element_type=\"widget\" data-widget_type=\"heading.default\">\r\n<div class=\"elementor-widget-container\">\r\n<h3 class=\"elementor-heading-title elementor-size-default\"><span style=\"font-size: 12pt;\">Career Prospects</span></h3>\r\n</div>\r\n</div>\r\n<div class=\"elementor-element elementor-element-d75c709 elementor-widget elementor-widget-text-editor\" data-id=\"d75c709\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\">\r\n<div class=\"elementor-widget-container\">\r\n<div class=\"elementor-text-editor elementor-clearfix\"><span style=\"font-size: 12pt;\">Diploma in Civil Engineering is a 4-year long program consisting of 8 semesters (1 Semester = 6 months). The final and the midterm exams of each semester is conducted under the supervision of Bangladesh Technical Education Board (BTEB). All the exams question, answer script checking and final results are published by the <a href=\"http://www.bteb.gov.bd/\" target=\"_blank\" rel=\"nofollow noopener\">BTEB</a>. Besides this, each student has to attend the regular class test, quiz test, and semester final project. After the successful completion, a student will receive a Diploma in&nbsp;<a href=\"https://en.wikipedia.org/wiki/Civil_engineering\" target=\"_blank\" rel=\"noopener\">civil engineering</a>&nbsp;certificate from BTEB.</span></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n<section class=\"elementor-section elementor-inner-section elementor-element elementor-element-6d3e88a elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"6d3e88a\" data-element_type=\"section\">\r\n<div class=\"elementor-container elementor-column-gap-default\">\r\n<div class=\"elementor-row\">\r\n<div class=\"aux-parallax-section elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-9ddbe64\" data-id=\"9ddbe64\" data-element_type=\"column\">\r\n<div class=\"elementor-column-wrap elementor-element-populated\">\r\n<div class=\"elementor-widget-wrap\">\r\n<div class=\"elementor-element elementor-element-045a41e elementor-widget elementor-widget-heading\" data-id=\"045a41e\" data-element_type=\"widget\" data-widget_type=\"heading.default\">\r\n<div class=\"elementor-widget-container\">\r\n<h3 class=\"elementor-heading-title elementor-size-default\"><span style=\"font-size: 12pt;\">Career Path</span></h3>\r\n</div>\r\n</div>\r\n<div class=\"elementor-element elementor-element-cf792ea elementor-widget elementor-widget-text-editor\" data-id=\"cf792ea\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\">\r\n<div class=\"elementor-widget-container\">\r\n<div class=\"elementor-text-editor elementor-clearfix\">\r\n<p><span style=\"font-size: 12pt;\">As a qualified civil engineer you can find work in a range of sectors, particularly in the construction sector, on buildings and large structures of all kinds, transport and communications infrastructure. You can also work for employers involved in the production, storage and distribution of electricity, gas and water.</span></p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n<section class=\"elementor-section elementor-inner-section elementor-element elementor-element-c4e0c41 elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"c4e0c41\" data-element_type=\"section\">\r\n<div class=\"elementor-container elementor-column-gap-default\">\r\n<div class=\"elementor-row\">\r\n<div class=\"aux-parallax-section elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-832bef1\" data-id=\"832bef1\" data-element_type=\"column\">\r\n<div class=\"elementor-column-wrap elementor-element-populated\">\r\n<div class=\"elementor-widget-wrap\">\r\n<div class=\"elementor-element elementor-element-f56c896 elementor-widget elementor-widget-heading\" data-id=\"f56c896\" data-element_type=\"widget\" data-widget_type=\"heading.default\">\r\n<div class=\"elementor-widget-container\">\r\n<h3 class=\"elementor-heading-title elementor-size-default\"><span style=\"font-size: 12pt;\">Admission Eligibility</span></h3>\r\n</div>\r\n</div>\r\n<div class=\"elementor-element elementor-element-f6b1970 elementor-widget elementor-widget-text-editor\" data-id=\"f6b1970\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\">\r\n<div class=\"elementor-widget-container\">\r\n<div class=\"elementor-text-editor elementor-clearfix\">\r\n<p><span style=\"font-size: 12pt;\">Minimum SSC equivalent from any discipline with minimum GPA: 2.00 .</span></p>\r\n<p><span style=\"font-size: 12pt;\">HSC (Science) Students can directly join in 3rd Semester</span><br /><span style=\"font-size: 12pt;\">&amp; HSC (Vocational) students can directly join in 4th Semester.( Passing year 2011, GPA: 2.00 )</span></p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n<section class=\"elementor-section elementor-inner-section elementor-element elementor-element-bacecb7 elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"bacecb7\" data-element_type=\"section\">\r\n<div class=\"elementor-container elementor-column-gap-default\">\r\n<div class=\"elementor-row\">\r\n<div class=\"aux-parallax-section elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-c5e2651\" data-id=\"c5e2651\" data-element_type=\"column\">\r\n<div class=\"elementor-column-wrap elementor-element-populated\">\r\n<div class=\"elementor-widget-wrap\">\r\n<div class=\"elementor-element elementor-element-d298675 elementor-widget elementor-widget-heading\" data-id=\"d298675\" data-element_type=\"widget\" data-widget_type=\"heading.default\">\r\n<div class=\"elementor-widget-container\">\r\n<h3 class=\"elementor-heading-title elementor-size-default\"><span style=\"font-size: 12pt;\">Admission Guidelines</span></h3>\r\n</div>\r\n</div>\r\n<div class=\"elementor-element elementor-element-4a4c1cb elementor-widget elementor-widget-text-editor\" data-id=\"4a4c1cb\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\">\r\n<div class=\"elementor-widget-container\">\r\n<div class=\"elementor-text-editor elementor-clearfix\">\r\n<p><span style=\"font-size: 12pt;\">Students are advice to collect admission form the admission office.</span></p>\r\n<p><span style=\"font-size: 12pt;\">To confirm the admission, students must submit</span></p>\r\n<ul>\r\n<li><span style=\"font-size: 12pt;\">4 copy of recent PP size photo</span></li>\r\n<li><span style=\"font-size: 12pt;\">Main copy of SSC transcript&nbsp;</span></li>\r\n<li><span style=\"font-size: 12pt;\">Photocopy of Parent&rsquo;s NID Card.</span></li>\r\n<li><span style=\"font-size: 12pt;\">Along with the properly filled admission form.</span></li>\r\n<li><span style=\"font-size: 12pt;\"><strong>NOTE: Students will be admitted for the limited </strong><strong>seats.</strong></span></li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n<section class=\"elementor-section elementor-inner-section elementor-element elementor-element-5d79718 elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"5d79718\" data-element_type=\"section\">\r\n<div class=\"elementor-container elementor-column-gap-default\">\r\n<div class=\"elementor-row\">\r\n<div class=\"aux-parallax-section elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-7e3cf4d\" data-id=\"7e3cf4d\" data-element_type=\"column\">\r\n<div class=\"elementor-column-wrap elementor-element-populated\">\r\n<div class=\"elementor-widget-wrap\">\r\n<div class=\"elementor-element elementor-element-a3f1a70 elementor-widget elementor-widget-heading\" data-id=\"a3f1a70\" data-element_type=\"widget\" data-widget_type=\"heading.default\">\r\n<div class=\"elementor-widget-container\">\r\n<h3 class=\"elementor-heading-title elementor-size-default\"><span style=\"font-size: 12pt;\">&nbsp;Lab Facilities</span></h3>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n<section class=\"elementor-section elementor-inner-section elementor-element elementor-element-45b5ef3 elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"45b5ef3\" data-element_type=\"section\">\r\n<div class=\"elementor-container elementor-column-gap-default\">\r\n<div class=\"elementor-row\">\r\n<div class=\"aux-parallax-section elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-2d5ee79\" data-id=\"2d5ee79\" data-element_type=\"column\">\r\n<div class=\"elementor-column-wrap elementor-element-populated\">\r\n<div class=\"elementor-widget-wrap\">\r\n<div class=\"elementor-element elementor-element-20add89 elementor-widget elementor-widget-text-editor\" data-id=\"20add89\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\">\r\n<div class=\"elementor-widget-container\">\r\n<div class=\"elementor-text-editor elementor-clearfix\">\r\n<ul>\r\n<li><span style=\"font-size: 12pt;\">Construction Lab</span></li>\r\n<li><span style=\"font-size: 12pt;\">Surveying Lab</span></li>\r\n<li><span style=\"font-size: 12pt;\">Computer Lab</span></li>\r\n<li><span style=\"font-size: 12pt;\">Hydraulics Lab</span></li>\r\n<li><span style=\"font-size: 12pt;\">Geotechnical Lab</span></li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>', 'prince-882505-diploma-in-civil-engineering.jpg');
INSERT INTO `service` (`sv_id`, `category_id`, `user_id`, `sv_name`, `course_fee`, `duration`, `total_semester`, `sv_details`, `userPic`) VALUES
(5, 6, 140, 'Diploma In Nursing Science And Midwifery', '', '', '', '<p><span style=\"font-size: 12pt;\">The applicant who meets the following criteria will be eligible to enter into the <strong>Diploma in nursing Science and Midwifery</strong> course.</span></p>\r\n<p><span style=\"font-size: 12pt;\"><strong> 1. <u>Eligibility of admission for the Local students</u></strong></span></p>\r\n<ul>\r\n<li><span style=\"font-size: 12pt;\">The applicant must be the citizen of Bangladesh.</span></li>\r\n<li><span style=\"font-size: 12pt;\">The applicants have to be passed both SSC and HSC or equivalent examinations from any group in total CGPA 6.00 with at least GPA 2.50 either SSC or HSC or equivalent examination.</span></li>\r\n<li><span style=\"font-size: 12pt;\">The applicant should apply within 02 (Two) years of passing HSC or equivalent Examination following SSC or equivalent examination as continual.</span></li>\r\n<li><span style=\"font-size: 12pt;\"><strong>Applicant must be seated for the admission test examination arranged by BNC and have to get at least 40% marks.</strong></span></li>\r\n</ul>\r\n<p><span style=\"font-size: 12pt;\"><strong>2. <u>Eligibility of admission for the Foreign Students</u></strong></span></p>\r\n<ul>\r\n<li><span style=\"font-size: 12pt;\">The applicants must need Cumulative Grading Point Average(CGPA) both O&rsquo;level and A&rsquo;level or equivalent examinations from any group in total 6.00 but not less than CGPA 2.50 in either O&rsquo;level or A&rsquo;level examination.</span></li>\r\n<li><span style=\"font-size: 12pt;\">The applicant should apply within 02 (Two) years of passing A&rsquo;level or equivalent Examination following O&rsquo;level or equivalent examination as continual.</span></li>\r\n<li><span style=\"font-size: 12pt;\">Students who meet up mentioned criteria above, they will get the opportunity to study in any non-government nursing college in Bangladesh. One-third of total seat will reserve for foreign students. If not found, Bangladeshi students can be admitted with the vacant seats.</span></li>\r\n<li><span style=\"font-size: 12pt;\">Foreign students must be attested their application form, O&rsquo;level and A&rsquo;level or equivalent certificate and transcript by their Ministry of Foreign Affairs through Bangladesh embassy and submitted to the Ministry of Foreign Affairs of Bangladesh in time. Ministry of Foreign Affairs will send it to Director General, Nursing and Midwifery council. With permission of the Health education and family welfare division, Bangladesh Nursing and Midwifery council will take necessary steps to equalize marks and others criteria. Ministry of Foreign Affairs will permit to admit with mark equalize report from the Council.</span></li>\r\n</ul>\r\n<p><span style=\"font-size: 12pt;\"><strong>3. <u>Student Registration:</u></strong></span></p>\r\n<p><span style=\"font-size: 12pt;\">Students have to be registered after admission as per BNMC rules and regulation.</span></p>\r\n<p><span style=\"font-size: 12pt;\"><strong>4. <u>Medical Fitness:</u></strong></span></p>\r\n<p><span style=\"font-size: 12pt;\">Successful candidate must be performed medical fitness check-up before admission.</span></p>', 'prince-416688-Diploma-in-Nursing-Science-and-Midwifery.jpg'),
(6, 5, 140, 'Diploma in Medical Assistant', '', '', '', '<div class=\"elementor-element elementor-element-66ecc47 elementor-widget elementor-widget-wd_text_block\" data-id=\"66ecc47\" data-element_type=\"widget\" data-widget_type=\"wd_text_block.default\">\r\n<div class=\"elementor-widget-container\">\r\n<div class=\"wd-text-block reset-last-child text-left\">\r\n<div class=\"wpb_text_column wpb_content_element\">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"wpb_text_column wpb_content_element\">\r\n<div class=\"wpb_wrapper\">\r\n<p><span style=\"font-size: 12pt;\">The Diploma in Medical Assistant (DMA) course is a two-year program that provides students with theoretical and practical knowledge in various areas of healthcare. The curriculum of the course includes the following subjects:</span></p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"elementor-element elementor-element-af38de1 elementor-widget elementor-widget-wd_infobox\" data-id=\"af38de1\" data-element_type=\"widget\" data-widget_type=\"wd_infobox.default\">\r\n<div class=\"elementor-widget-container\">\r\n<div class=\"info-box-wrapper\">\r\n<div class=\"wd-info-box text-left box-icon-align-top box-style-base color-scheme- cursor-pointer\">\r\n<div class=\"info-box-content\">\r\n<h4 class=\"info-box-title title box-title-style-default wd-fontsize-s\" data-elementor-setting-key=\"title\"><span style=\"font-size: 12pt;\">Diploma in Medical Assistant (DMA):</span></h4>\r\n<div class=\"info-box-inner set-cont-mb-s reset-last-child\" data-elementor-setting-key=\"content\">\r\n<ol>\r\n<li>\r\n<p><span style=\"font-size: 12pt;\">Anatomy and Physiology: This subject covers the study of the human body\'s structure and functions.</span></p>\r\n</li>\r\n<li>\r\n<p><span style=\"font-size: 12pt;\">Medical Terminology: This subject covers the study of medical terms and vocabulary used in the healthcare industry.</span></p>\r\n</li>\r\n<li>\r\n<p><span style=\"font-size: 12pt;\">Medical Ethics and Law: This subject covers the ethical and legal aspects of healthcare practice.</span></p>\r\n</li>\r\n<li>\r\n<p><span style=\"font-size: 12pt;\">Pharmacology: This subject covers the study of drugs and their effects on the human body.</span></p>\r\n</li>\r\n<li>\r\n<p><span style=\"font-size: 12pt;\">Clinical Procedures: This subject covers various clinical procedures such as taking vital signs, collecting samples, and administering medications.</span></p>\r\n</li>\r\n<li>\r\n<p><span style=\"font-size: 12pt;\">Medical Office Management: This subject covers the management and administration of medical offices, including scheduling appointments, maintaining records, and managing finances.</span></p>\r\n</li>\r\n</ol>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"elementor-element elementor-element-f0627db elementor-widget elementor-widget-wd_infobox\" data-id=\"f0627db\" data-element_type=\"widget\" data-widget_type=\"wd_infobox.default\">\r\n<div class=\"elementor-widget-container\">\r\n<div class=\"info-box-wrapper\">\r\n<div class=\"wd-info-box text-left box-icon-align-top box-style-base color-scheme- cursor-pointer\">\r\n<div class=\"info-box-content\">\r\n<h4 class=\"info-box-title title box-title-style-default wd-fontsize-s\" data-elementor-setting-key=\"title\"><span style=\"font-size: 12pt;\">Benefits of Diploma in Medical Assistant (DMA) Course:</span></h4>\r\n<div class=\"info-box-inner set-cont-mb-s reset-last-child\" data-elementor-setting-key=\"content\">\r\n<ol>\r\n<li>\r\n<p><span style=\"font-size: 12pt;\">Job Opportunities: Graduates of the Diploma in Medical Assistant (DMA) course have a wide range of job opportunities in various healthcare facilities, including hospitals, clinics, and private practices.</span></p>\r\n</li>\r\n<li>\r\n<p><span style=\"font-size: 12pt;\">Competitive Salary: Medical assistants are in high demand, and they receive a competitive salary.</span></p>\r\n</li>\r\n<li>\r\n<p><span style=\"font-size: 12pt;\">Professional Development: The Diploma in Medical Assistant (DMA) course provides students with the knowledge and skills needed to pursue further education and professional development in the healthcare industry.</span></p>\r\n</li>\r\n<li>\r\n<p><span style=\"font-size: 12pt;\">Job Satisfaction: Medical assistants play a crucial role in the healthcare industry and have a significant impact on patients\' lives. This can provide a sense of job satisfaction and fulfillment.</span></p>\r\n</li>\r\n</ol>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"elementor-element elementor-element-08dea7a elementor-widget elementor-widget-wd_text_block\" data-id=\"08dea7a\" data-element_type=\"widget\" data-widget_type=\"wd_text_block.default\">\r\n<div class=\"elementor-widget-container\">\r\n<div class=\"wd-text-block reset-last-child text-left\">\r\n<p><span style=\"font-size: 12pt;\"><strong>Conclusion</strong></span></p>\r\n<blockquote>\r\n<p><span style=\"font-size: 12pt;\">The Diploma in Medical Assistant (DMA) course is an excellent program for individuals who aspire to work in the healthcare industry. The course provides comprehensive training in various areas of healthcare, including clinical procedures, medical office management, and pharmacology. Graduates of the program have excellent job opportunities, receive competitive salaries, and can pursue further education and professional development in the healthcare industry.</span></p>\r\n</blockquote>\r\n</div>\r\n</div>\r\n</div>', 'prince-578263-medical-assist-diploma.jpg'),
(7, 4, 140, 'Diploma in Medical Technology', '150000', '3-Years', '12-Semester', '<div class=\"elementor elementor-2706 elementor-bc-flex-widget\" data-elementor-type=\"wp-post\" data-elementor-id=\"2706\">\r\n<section class=\"elementor-section elementor-top-section elementor-element elementor-element-61bb93c elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"61bb93c\" data-element_type=\"section\">\r\n<div class=\"elementor-container elementor-column-gap-default\">\r\n<div class=\"elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-61bbe22\" data-id=\"61bbe22\" data-element_type=\"column\">\r\n<div class=\"elementor-widget-wrap elementor-element-populated\">\r\n<div class=\"elementor-element elementor-element-61bc1e8 elementor-widget elementor-widget-text-editor\" data-id=\"61bc1e8\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\">\r\n<div class=\"elementor-widget-container\">\r\n<p><span style=\"font-size: 12pt;\">A <strong>Medical laboratory </strong> or <strong> Clinical laboratory </strong>&nbsp;is a&nbsp;laboratory&nbsp;where&nbsp;clinical pathology&nbsp;tests are carried out on clinical specimens to obtain information about the&nbsp;health&nbsp;of a&nbsp;patient to aid in diagnosis, treatment, and prevention of disease. Clinical Medical laboratories are an example of&nbsp;applied science, as opposed to&nbsp;research laboratories&nbsp;that focus on&nbsp;basic science, such as found in some&nbsp;academic&nbsp;institutions.</span></p>\r\n<p><span style=\"font-size: 12pt;\">Medical laboratories vary in size and complexity and so offer a variety of testing services. More comprehensive services can be found in acute-care hospitals and medical centers, where 70% of clinical decisions are based on laboratory testing.<sup id=\"cite_ref-2\" class=\"reference\"></sup>Doctors offices and clinics, as well as skilled nursing and long-term care facilities, may have laboratories that provide more basic testing services. Commercial medical laboratories operate as independent businesses and provide testing that is otherwise not provided in other settings due to low test volume or complexity.</span></p>\r\n<h2><span id=\"Departments\" class=\"mw-headline\" style=\"font-size: 12pt;\">Departments</span></h2>\r\n<p><span style=\"font-size: 12pt;\">In hospitals and other patient-care settings, laboratory medicine is provided by the Department of Pathology, and generally divided into two sections, each of which will be subdivided into multiple specialty areas. The two sections are:</span></p>\r\n<ul>\r\n<li><span style=\"font-size: 12pt;\">Anatomic pathology: areas included here are&nbsp;histopathology,&nbsp;cytopathology, and&nbsp;electron microscopy.</span></li>\r\n<li><span style=\"font-size: 12pt;\">Clinical pathology, which typically includes the following areas:</span></li>\r\n<li><span style=\"font-size: 12pt;\">Clinical Microbiology: This encompasses several different sciences, including&nbsp;bacteriology,&nbsp;virology,&nbsp;parasitology,&nbsp;immunology, and&nbsp;mycology.</span></li>\r\n<li><span style=\"font-size: 12pt;\">Clinical Chemistry: This area typically includes automated analysis of blood specimens, including tests related to&nbsp;enzymology,&nbsp;toxicology&nbsp;and&nbsp;endocrinology.</span></li>\r\n<li><span style=\"font-size: 12pt;\">Hematology: This area includes automated and manual analysis of blood cells. It also often includes&nbsp;coagulation.</span></li>\r\n<li><span style=\"font-size: 12pt;\">Blood Bank&nbsp;involves the testing of blood specimens in order to provide blood transfusion and related services.</span></li>\r\n<li><span style=\"font-size: 12pt;\">Molecular diagnostics&nbsp;DNA testing may be done here, along with a subspecialty known as&nbsp;cytogenetics.</span></li>\r\n<li><span style=\"font-size: 12pt;\">Reproductive biology&nbsp;testing is available in some laboratories, including&nbsp;Semen analysis,&nbsp;Sperm bank&nbsp;and&nbsp;assisted reproductive technology.</span></li>\r\n</ul>\r\n<p><span style=\"font-size: 12pt;\">Layouts of clinical laboratories in health institutions vary greatly from one facility to another. For instance, some health facilities have a single laboratory for the microbiology section, while others have a separate lab for each specialty area.</span></p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n</div>', 'prince-977468-diploma-in-medi-technology.jpg'),
(8, 3, 140, 'Power', '150000', '8-Semester', '4-Years', '<p>Power Tec</p>', 'prince-580425-exam-mcq.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `service_category`
--

CREATE TABLE `service_category` (
  `cat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cat_name` varchar(500) DEFAULT NULL,
  `cat_details` longtext DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `cat_photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_category`
--

INSERT INTO `service_category` (`cat_id`, `user_id`, `cat_name`, `cat_details`, `link`, `cat_photo`) VALUES
(3, 140, 'Diploma in Engineering', '<p><span style=\"font-size: 12pt;\">Computer Science Engineering encompasses studies on the design, analysis, implementation, and application of computer technology. Computing plays a vital role in all fields, including science and medicine, music and art, business, law, and human communication; hence, the study of computer science and engineering can be interdisciplinary in nature.</span></p>', 'diploma-engineering', 'prince-866726-diploma-eng.jpeg'),
(4, 140, 'Diploma in Medical Technology', '<p><span style=\"font-size: 12pt;\">Diploma in Medical Programmed</span></p>', 'medical-diploma', 'prince-356169-Diploma-in-Medical.png'),
(5, 140, 'Diploma in Medical Assistant', '<p><span style=\"font-size: 12pt;\">Diploma in Medical Assistant Programmed</span></p>', 'medical-assistant', 'prince-104741-Diploma-in-Medical.png'),
(6, 140, 'Diploma in Nursing & Midwifery', '<p><span style=\"font-size: 12pt;\">Diploma in Nursing &amp; Midwifery</span></p>', 'diploma-nursing', 'prince-353940-Diploma-in-Nursing-Science-and-Midwifery.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `skill_section`
--

CREATE TABLE `skill_section` (
  `id` int(30) NOT NULL,
  `user_id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `percent` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skill_section`
--

INSERT INTO `skill_section` (`id`, `user_id`, `name`, `percent`) VALUES
(6, 130, 'Web Development', '80%'),
(7, 130, 'Adobe', '60%'),
(67, 130, 'Microsoft Office', '70%');

-- --------------------------------------------------------

--
-- Table structure for table `slider_section`
--

CREATE TABLE `slider_section` (
  `id` int(30) NOT NULL,
  `user_id` int(200) NOT NULL,
  `slider_title` varchar(200) NOT NULL,
  `slider_subtitle` varchar(200) NOT NULL,
  `userPic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider_section`
--

INSERT INTO `slider_section` (`id`, `user_id`, `slider_title`, `slider_subtitle`, `userPic`) VALUES
(1, 140, 'Welcome To Prince Education Group', 'A Better Name Of Education Group', 'prince-143601-moral-korean.jpg'),
(2, 140, 'Diploma In Education Engineering', 'Diploma In Education Engineering', 'prince-425165-ielts.jpg'),
(3, 140, 'Diploma In MATS / Pharmacy / Dentist / Nursing', 'Diploma In MATS / Pharmacy / Dentist / Nursing', 'prince-3880-banners.jpg'),
(9, 140, 'Moral', 'Moral', 'prince-272868-moral-bb.png');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` int(30) NOT NULL,
  `user_id` int(200) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `youtube` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `user_id`, `facebook`, `twitter`, `youtube`, `instagram`) VALUES
(15, 140, 'https://www.facebook.com/princeedubd/', 'https://www.facebook.com/princeedubd/', 'https://www.facebook.com/princeedubd/', 'https://www.facebook.com/princeedubd/');

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE `stats` (
  `st_id` int(20) NOT NULL,
  `user_id` int(100) NOT NULL,
  `st_name` varchar(300) NOT NULL,
  `st_num` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stats`
--

INSERT INTO `stats` (`st_id`, `user_id`, `st_name`, `st_num`) VALUES
(1, 140, 'Teachers', '27'),
(2, 140, 'Courses', '30'),
(3, 140, '+ Trained Students', '200'),
(4, 140, 'Awards Achieved', '20');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(150) NOT NULL,
  `user_id` int(50) NOT NULL,
  `student_no` int(50) NOT NULL,
  `batch_no` varchar(250) NOT NULL,
  `course_name` varchar(200) NOT NULL,
  `student_name` varchar(250) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `bld_grp` varchar(50) NOT NULL,
  `father_name` varchar(250) NOT NULL,
  `mother_name` varchar(250) NOT NULL,
  `pre_vill` varchar(300) NOT NULL,
  `pre_post` varchar(200) NOT NULL,
  `pre_upazila` varchar(150) NOT NULL,
  `pre_dist` varchar(150) NOT NULL,
  `par_vill` varchar(150) NOT NULL,
  `par_post` varchar(150) NOT NULL,
  `par_upazila` varchar(150) NOT NULL,
  `par_dist` varchar(150) NOT NULL,
  `marriage_info` varchar(150) NOT NULL,
  `religion` varchar(150) NOT NULL,
  `nationality` varchar(150) NOT NULL,
  `birth_date` date NOT NULL,
  `student_phone` varchar(150) NOT NULL,
  `student_email` varchar(150) NOT NULL,
  `guardian_phone` varchar(150) NOT NULL,
  `degree` varchar(150) NOT NULL,
  `institute_name` varchar(250) NOT NULL,
  `board_roll` varchar(100) NOT NULL,
  `pass_year` varchar(100) NOT NULL,
  `gpa` varchar(100) NOT NULL,
  `board_name` varchar(200) NOT NULL,
  `reference` varchar(350) NOT NULL,
  `join_date` date NOT NULL,
  `status` int(10) NOT NULL,
  `userPic` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `user_id`, `student_no`, `batch_no`, `course_name`, `student_name`, `gender`, `bld_grp`, `father_name`, `mother_name`, `pre_vill`, `pre_post`, `pre_upazila`, `pre_dist`, `par_vill`, `par_post`, `par_upazila`, `par_dist`, `marriage_info`, `religion`, `nationality`, `birth_date`, `student_phone`, `student_email`, `guardian_phone`, `degree`, `institute_name`, `board_roll`, `pass_year`, `gpa`, `board_name`, `reference`, `join_date`, `status`, `userPic`) VALUES
(101, 130, 2, 'Md.Samiul Alom', '', 'Managing Director', 'Male', '', 'Tinmatha', '01751458998', 'samiulbdb@gmail.com', '000', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '2020-02-05', 1, '182825.jpg'),
(103, 130, 3, 'New Customer', '', '', 'Male', '', 'Bogura', '01751456623', '', '00', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '2020-08-05', 1, '637900.jpg'),
(104, 130, 4, 'Zobayer2', '', '', 'Male', '', 'Meghai', '01611-717527', '', '00', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '2020-08-10', 1, '344615.jpg'),
(105, 135, 5, 'Kiron Alom', '', '', 'Male', '', 'Dhaka', '01751894256', '', '00', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '2022-01-30', 1, '470799.jpg'),
(106, 136, 6, 'Talha Khan', '', '', 'Male', '', 'Dhaka', '054654', '', '00', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '2022-01-31', 1, '911154.'),
(107, 135, 7, 'Rubel Hossain', '', '', 'Male', '', 'Dhaka', '00154545', '', '00', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '2022-02-01', 1, '448091.'),
(108, 135, 8, 'Bappi Hasan', '', 'Marketing Officer1', 'Male', '', 'Mirpur-12, Dhaka', '017589', 'bapp1@gmail.com', '00', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '2022-02-01', 1, '450629.jpg'),
(109, 137, 9, 'Jhon doe', '', 'Managing director', 'Male', '', 'New York City, USA', '846446456', 'jhondoe@gmail.com', '00', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '2022-02-03', 1, '428090.'),
(110, 137, 10, 'Samiul Alom', '', 'CEO', 'Male', '', 'Bogura', '01751891037', 'samiulbdb\"gmail.com', '00', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '2022-02-23', 1, '548913.'),
(111, 140, 1, 'Sidgao', '1', 'Interney Marketing', '', '', 'USA', '3232323232', 'tausif@sidago.com', '232323', 'Gaibhandha', 'Gaibhandha', 'rr', 'rr', 'Gaibhandha', 'Gaibhandha', 'Yes', 'Muslim', 'Other', '0000-00-00', 'r', 'rr', 'rr', 'JSC', 'rr', 'rr', 'rr', 'r', 'r', 'rr', '2022-03-18', 1, '540258.'),
(112, 137, 11, 'Kalam', '', 'Business', 'Male', '', 'Bizrul', '01751-895247', 'kalam@gmail.com', '00', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '2022-03-20', 1, '294341.'),
(113, 140, 2, 'Batch-25', 'Office Application', 'Md.Salam Ali', 'Male', '', 'Md.Abbas', 'Mrs.Salma', 'Model village', 'Model Para', 'Gaibhandha', 'Gaibhandha', 'Model village1', 'Model Para1', 'Gaibhandha', 'Gaibhandha', 'Yes', 'Muslim', 'Bangladeshi', '2022-04-01', '01751891037', 'salam@gmail.com', '0198798646', 'JDC', 'GG College', '1256', '2011', '4.20', 'Ranpur', 'Kalam Ali', '2022-04-01', 1, 'itm-dtc-'),
(114, 140, 3, 'Batch-25', '1', 'Md.Jamal Sheakh1', '', '', 'Jalal Sheakh1', 'Jomila Sheakh1', 'Pal Para1', 'Gator', 'Sadullapur', 'Gaibhandha', 'Pal Para', 'Gator', 'Sadullapur', 'Gaibhandha', 'No', 'Hindu', 'Bangladeshi', '2022-04-02', '01751891999', 'jamal@gmail.com', '0198798145', 'JSC', 'BAM Scjool', '8541', '2016', '4.35', '4.35', 'Kazul PP', '2022-04-02', 1, 'itm-dtc-'),
(115, 137, 0, 'Batch-25', '1', 'Salam', '', '', 'father', 'mother', 'chota shoula', 'asfdas', 'Gaibhandha', 'Gaibhandha', 'chota shoula', 'sadf', 'Gaibhandha', 'Gaibhandha', 'Yes', 'Muslim', 'Bangladeshi', '2022-06-01', '54654', 'mahmud@gmail.com', '54', 'JSC', 'asdf', '545', '2022', '5', '5', 'peon', '2022-06-01', 1, 'itm-dtc-'),
(116, 140, 4, 'Batch-25', '1', 'Aa', '', '', 'as', 'as', 'sa', 's', 'Gaibhandha', 'Gaibhandha', 'a', 'a', 'Gaibhandha', 'Gaibhandha', 'Yes', 'Muslim', 'Bangladeshi', '2023-04-15', 'a', 'jabed@gmail.com', 'as', 'JSC', 'saa', '45', '2023', '5', '5', 'qw', '2023-04-15', 1, '941721.jpg'),
(117, 22, 12, '1', '26', 'Jamal', 'Male', 'A+', 'ff', 'mm', 'Dhaka', 'Dhaka1', '#', '#', 'sg', 'pp', '#', '#', 'Yes', 'Muslim', 'Bangladeshi', '2023-05-02', '848465', 'jabed@gmail.com', 'fgjd', '#', 'dh', 'dh', 'dh', 'dh', '#', 'dh', '2023-05-02', 1, 'itm-dtc-'),
(118, 22, 13, '2', '25', 'Abdul Alim', 'Male', 'A+', 'Father', 'Mother', 'Atibazar', 'Atibazar1', '2', '2', 'Atibazar', 'Atibazar', '2', '2', 'Yes', 'Muslim', 'Bangladeshi', '2023-05-04', '098798798', 'jabed@gmail.com', '098798798', '2', 'Dhaka Model College', '2566', '2022', '5.00', '3', 'SAD', '2023-05-04', 1, 'itm-dtc-');

-- --------------------------------------------------------

--
-- Table structure for table `stuff`
--

CREATE TABLE `stuff` (
  `userid` int(11) NOT NULL,
  `stuff_name` varchar(50) NOT NULL,
  `position` varchar(500) NOT NULL,
  `contact_info` varchar(50) NOT NULL,
  `business_name` varchar(500) CHARACTER SET utf8 NOT NULL,
  `business_details` varchar(250) NOT NULL,
  `service_charge` varchar(250) NOT NULL,
  `business_phone` varchar(100) NOT NULL,
  `business_email` varchar(250) NOT NULL,
  `biz_web` varchar(200) NOT NULL,
  `business_address` varchar(500) NOT NULL,
  `invoice_welcome` varchar(500) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `sign_img` text NOT NULL,
  `join_date` date NOT NULL,
  `status` int(20) NOT NULL,
  `software_status` int(150) NOT NULL,
  `comments` varchar(500) NOT NULL,
  `division_id` int(150) NOT NULL,
  `district_id` int(150) NOT NULL,
  `upazila_id` int(150) NOT NULL,
  `inv_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stuff`
--

INSERT INTO `stuff` (`userid`, `stuff_name`, `position`, `contact_info`, `business_name`, `business_details`, `service_charge`, `business_phone`, `business_email`, `biz_web`, `business_address`, `invoice_welcome`, `photo`, `sign_img`, `join_date`, `status`, `software_status`, `comments`, `division_id`, `district_id`, `upazila_id`, `inv_name`) VALUES
(22, 'Admin', 'Admin', 'Admin', '', '', '', '', '', '', '', '', '212', '', '2020-03-22', 0, 0, '', 0, 0, 0, ''),
(130, 'Samiul ITM', 'CEO', '01751891037', 'ITM Computer & Tech Gadget', '', '', '01751891037', 'samiulbdb@gmail.com', '', 'Bogura City, Bogura', '', 'upload/com-logo_1643530916.jpg', '', '2019-07-10', 1, 0, '', 0, 0, 0, ''),
(131, 'romel', 'Show Room 2', '01746895819', '', '', '', '', '', '', '', '', '', '', '0000-00-00', 1, 0, '', 0, 0, 0, ''),
(132, 'FARUK', 'Collection', '01742078781', '', '', '', '', '', '', '', '', '', '', '0000-00-00', 1, 0, '', 0, 0, 0, ''),
(133, 'ABU ZIHAD', 'Show Room 3  ', '01719826237', '', '', '', '', '', '', '', '', '', '', '2020-02-23', 0, 0, '', 0, 0, 0, ''),
(134, 'mozahid', 'Collector  ', '01794776083', '', '', '', '', '', '', '', '', '', '', '2020-03-03', 0, 0, '', 0, 0, 0, ''),
(135, 'Samim', ' Samims Graphics      ', '017545', '', '', '', '', '', '', '', '', 'upload/findusbd_1643652845.png', '', '2022-01-30', 1, 0, '', 0, 0, 0, ''),
(136, 'Siddik', 'Siddik Seo Firm, Dhaka  ', '01648886878', 'বা', '', '', 'Na', 'Na', '', '??', '', 'upload/samlogo_1643642558.jpg', '', '2022-01-31', 1, 0, '', 0, 0, 0, ''),
(137, 'Nafiz Imtiaz', 'CEO  ', '01918-001177', 'Light Hax', '', '', '01918-001177', 'imtiazither@gmail.com', '', 'Baily Road,Segun Bagicha,Dhaka1', '', 'upload/cropped-Lighthax-Logo_1643872544.png', '', '2022-02-03', 1, 0, '', 0, 0, 0, ''),
(138, 'Abul Azad', 'Ac          ', '01648886878', 'AA', '', '', '8798', 'Na', '', 'Baily Road,Segun Bagicha,Dhaka', 'Thanks For Work With Us', '', '', '2022-02-03', 1, 1, '', 0, 0, 0, ''),
(139, 'Kalam', 'CEO          ', '01648886777', 'Kalam BB', '', '', '01648886777', 'kalam@gmail.com', '', 'dhaka', '', '', '', '2022-02-06', 0, 3, 'Trail', 1, 1, 1, ''),
(140, 'Digital Training Center', 'Management System    ', '01751891037', 'Digital Training Center', 'Management System', '500', '01751891037', 'prince@gmail.com', 'princebd.com', 'Savar, Dhaka', 'Thanks For Work With Us', 'upload/itm-dtcms_1697531271.png', 'upload/Samiul_1694185179.jpg', '2022-04-11', 1, 2, 'Trail', 1, 5, 14, 'iss'),
(141, 'Imran Islam', 'Managing director        ', '01712-048534', '???????? ?????? ????????? ??????? ??????????', '', '500', '01712-048534', 'bokshigonjonline@gmail.com', '', 'Bokshigonj Bazar, Sadullapur, Bangladesh', 'Thanks For Training With Us', 'upload/bocti_1649431402.jpg', '', '2022-04-11', 1, 2, 'Trail', 2, 1, 1, ''),
(142, 'Siddik', 'SEO Expert', '01712-048598', 'Siddik Seo', '', '', '01712-048598', 'siddik@gmail.com', '', 'Dhaka', 'Thanks For Work With Us', '', '', '2022-04-10', 1, 2, 'Trail', 1, 1, 1, ''),
(143, 'Samiul Alom', 'CEO    ', '01751891037', 'DTA64', '', '500', '01751891037', 'dta64@gmail.com', '', 'Dhaka', 'Thanks For Work With Us', '', '', '2022-04-10', 1, 2, 'Trail', 2, 2, 2, 'dta'),
(144, 'HM Talha', 'CEO  ', '01765000003', 'Digital Dental', '', '500', '01765000003', 'nagadhat@gmail.com', '', 'Khaja Super Market, 2nd to 7th Floor, Kallyanpur Bus Stop, Mirpur Road, Dhaka-1207.', 'Thanks For Work With Us', '', '0', '2022-09-06', 1, 1, 'Trail', 0, 3, 2, 'kdc'),
(145, 'Smart Phone ', 'Busines Owner  ', '01751-891037', 'Smart Phone Shop', '', '750', '01751-891037', 'samiulbdb@gmail.com', '', 'Basundhara Shopping Center', 'Thanks For Shopping From Us', 'upload/spn_1667973606.png', 'upload/samiul_1667973736.jpg', '2022-11-09', 1, 2, 'Trail', 1, 0, 0, 'sps'),
(146, 'Nazmul Ahmmed ', 'Busines Owner            ', '0157657874', 'Phone Shop Bd', 'Phone Buy - Sale', '750', '0157657874', 'samiulbdb@gmail.com', '', 'Bogura', 'Thanks For Shopping', 'upload/surma-tarpin_1690179048.jpg', '0', '2022-12-05', 1, 1, 'Trail', 0, 0, 1, 'psb'),
(147, 'Samiul Alam', 'CEO', '01751891037', 'Dhaka Agro', 'Dhaka Agro', '500', '01751891037', 'samiul.promisegroup@gmail.com', 'ww.idealclipping.com/', 'No', 'Thanks For Work With Us', 'upload/user-male_1684224339.png', '0', '2023-05-16', 1, 2, 'Trail', 1, 0, 0, 'kdc'),
(148, '????? ?????? ????? ??????', 'Busines Owner', '01915-732878', 'সুরমা তারপিন থিনার বগুড়া', '??? ?????? ???????, ??????, ?????', '750', '01915-732878', 'surmatarpin@gmail.com', 'Na', '????? ????? ?????, ??????', 'Thanks For Buy From Us', 'upload/surma-tarpin_1690180049.jpg', '0', '2023-07-24', 1, 2, 'Trail', 1, 0, 0, 'st');

-- --------------------------------------------------------

--
-- Table structure for table `stuff_details`
--

CREATE TABLE `stuff_details` (
  `id` int(30) NOT NULL,
  `userid` int(11) NOT NULL,
  `own_name` varchar(300) NOT NULL,
  `business_name` varchar(300) NOT NULL,
  `status` int(50) NOT NULL,
  `software_status` int(50) NOT NULL,
  `comments` varchar(300) NOT NULL,
  `division_id` int(150) NOT NULL,
  `district_id` int(150) NOT NULL,
  `upazila_id` int(150) NOT NULL,
  `entry_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stuff_details`
--

INSERT INTO `stuff_details` (`id`, `userid`, `own_name`, `business_name`, `status`, `software_status`, `comments`, `division_id`, `district_id`, `upazila_id`, `entry_date`) VALUES
(746, 170, 'Samiul ITM ( Test )', '', 1, 1, 'Paid', 0, 0, 0, '2020-01-06 00:32:55'),
(747, 171, 'King Computer', '', 1, 2, 'Trail', 0, 0, 0, '2020-01-06 00:46:43'),
(748, 170, 'Samiul ITM ( Test )', '', 1, 2, 'Trail ', 0, 0, 0, '2020-01-06 00:47:38'),
(749, 171, 'King Computer', '', 1, 2, 'Trail', 0, 0, 0, '2020-01-06 00:50:12'),
(750, 171, 'King Computer', '', 1, 2, 'Trail', 0, 0, 0, '2020-01-06 00:53:34'),
(751, 171, 'King Computer', '', 1, 2, 'Trail', 0, 0, 0, '2020-01-06 12:25:30'),
(752, 170, 'Samiul ITM ( Test )', '', 1, 2, 'Trail ', 0, 0, 0, '2020-01-06 15:02:28'),
(753, 172, 'Salam House', '', 1, 2, 'trail', 0, 0, 0, '2021-12-18 00:00:00'),
(754, 172, 'Salam House', '', 1, 2, 'trail', 0, 0, 0, '2021-12-18 00:00:00'),
(755, 174, 'Salam House2', '', 1, 2, 'trail', 1, 1, 2, '2021-12-18 00:00:00'),
(756, 174, 'Salam House2', '', 0, 3, 'trail', 0, 0, 0, '2022-02-06 20:20:28'),
(757, 139, 'Kalam', 'Kalam BB', 1, 2, 'Trail', 1, 1, 1, '2022-02-06 00:00:00'),
(758, 140, 'Tausif', 'Affordable SEO Firm', 1, 1, 'abc', 1, 1, 1, '2022-03-18 00:00:00'),
(759, 141, 'Imran Islam', '???????? ?????? ????????? ??????? ??????????', 1, 2, 'Trail', 2, 1, 1, '2022-04-08 00:00:00'),
(760, 142, 'Siddik', 'Siddik Seo', 1, 2, 'Trail', 1, 1, 1, '2022-04-10 00:00:00'),
(761, 143, 'Samiul Alom', 'DTA64', 1, 2, 'Trail', 1, 1, 1, '2022-04-10 00:00:00'),
(762, 144, 'HM Talha', 'Digital Dental', 1, 1, 'Trail', 2, 0, 0, '2022-09-06 00:00:00'),
(763, 145, 'Smart Phone ', 'Smart Phone Shop', 1, 2, 'Trail', 1, 0, 0, '2022-11-09 00:00:00'),
(764, 146, 'Nazmul Ahmmed ', 'Phone Shop Bd', 1, 1, 'Trail', 1, 0, 0, '2022-12-05 00:00:00'),
(765, 147, 'Samiul Alam', 'Dhaka Agro', 1, 2, 'Trail', 1, 0, 0, '2023-05-16 00:00:00'),
(766, 148, '????? ?????? ????? ??????', '????? ?????? ????? ??????', 1, 2, 'Trail', 1, 0, 0, '2023-07-24 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `success_student_section`
--

CREATE TABLE `success_student_section` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` mediumtext NOT NULL,
  `userPic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `success_student_section`
--

INSERT INTO `success_student_section` (`id`, `user_id`, `name`, `title`, `details`, `userPic`) VALUES
(4, 140, 'Byron Blanchard', 'Magnam sed ipsam exe', 'Est eligendi qui as', 'prince-882685-team4.jpg'),
(5, 140, 'Janna Mcconnell', 'Eius ea cillum dolor', 'Voluptates est ad e', 'prince-181884-team1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_section`
--

CREATE TABLE `teacher_section` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `teacher_title` varchar(255) NOT NULL,
  `teacher_subtitle` varchar(255) NOT NULL,
  `userPic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_section`
--

INSERT INTO `teacher_section` (`id`, `user_id`, `teacher_title`, `teacher_subtitle`, `userPic`) VALUES
(2, 140, 'Ipsum sed inventore', 'Voluptas autem culpa', 'prince-88905-team1.jpg'),
(3, 140, 'Et culpa laudantium', 'Odio qui hic dolor n', 'prince-901001-team4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `team_section`
--

CREATE TABLE `team_section` (
  `id` int(30) NOT NULL,
  `user_id` int(200) NOT NULL,
  `team_title` varchar(200) NOT NULL,
  `team_subtitle` varchar(200) NOT NULL,
  `userPic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team_section`
--

INSERT INTO `team_section` (`id`, `user_id`, `team_title`, `team_subtitle`, `userPic`) VALUES
(18, 140, 'Teacher - 01', 'Teacher', 'prince-637383-team1.jpg'),
(19, 140, 'Teacher - 02', 'Teacher', 'prince-629526-team2.jpg'),
(20, 140, 'Teacher - 03', 'Teacher ', 'prince-835953-team3.jpg'),
(21, 140, 'Teacher - 04', 'Teacher ', 'prince-702325-team4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `ts_id` int(30) NOT NULL,
  `user_id` int(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(200) NOT NULL,
  `details` text NOT NULL,
  `userPic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`ts_id`, `user_id`, `name`, `position`, `details`, `userPic`) VALUES
(2, 140, 'Mahmuda Begum', 'Senior Stuff Nurse', '<div style=\"font-family: Consolas, \" courier=\"\" new\",=\"\" monospace;=\"\" line-height:=\"\" 22px;=\"\" white-space:=\"\" pre;\"=\"\"><div style=\"font-family: Consolas, \"Courier New\", monospace; line-height: 22px; white-space: pre;\">As a pharmacy student, I am grateful for the exceptional education provided by my college. The curriculum blends scientific knowledge with practical skills, equipping me to serve as a trusted healthcare provider. The supportive faculty, cutting-edge facilities, and diverse clinical experiences have prepared me to make a positive impact on patient care.</div></div>', '33621.jpg'),
(3, 140, 'Sabbir Ahmmed', 'Pharmacist BSMMU', '<div style=\"font-family: Consolas, \" courier=\"\" new\",=\"\" monospace;=\"\" line-height:=\"\" 22px;=\"\" white-space:=\"\" pre;\"=\"\"><div style=\"font-family: Consolas, \"Courier New\", monospace; line-height: 22px; white-space: pre;\">Being a pathology student at my college has been an enlightening experience. The comprehensive curriculum, state-of-the-art laboratories, and expert guidance from faculty members have nurtured my passion for understanding disease processes. The collaborative environment and research opportunities have prepared me for a promising career in diagnostic medicine.</div></div>', '747542.jpg'),
(4, 140, 'Al Amin', 'Medical Technologist', '<div style=\"font-family: Consolas, \" courier=\"\" new\",=\"\" monospace;=\"\" line-height:=\"\" 22px;=\"\" white-space:=\"\" pre;\"=\"\"><div style=\"font-family: Consolas, \" courier=\"\" new\",=\"\" monospace;=\"\" line-height:=\"\" 22px;=\"\" white-space:=\"\" pre;\"=\"\"><b>My college</b> has been instrumental in shaping me as a skilled <u><b>medical technologis</b></u>t. The rigorous training, emphasis on laboratory techniques, and exposure to advanced technologies have honed my diagnostic skills. The supportive faculty and hands-on experiences have prepared me to excel in the dynamic field of medical diagnostics.</div></div>', '186360.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `thana`
--

CREATE TABLE `thana` (
  `id` int(20) NOT NULL,
  `user_id` int(100) NOT NULL,
  `thana_name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thana`
--

INSERT INTO `thana` (`id`, `user_id`, `thana_name`) VALUES
(1, 22, 'Mirpur'),
(2, 22, 'Uttara');

-- --------------------------------------------------------

--
-- Table structure for table `title_name`
--

CREATE TABLE `title_name` (
  `id` int(10) NOT NULL,
  `location` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `stutas` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `title_name`
--

INSERT INTO `title_name` (`id`, `location`, `name`, `stutas`) VALUES
(2, 'Header', 'Digital Training Center', 0),
(5, 'Title Bar', 'Digital Training Center', 0),
(6, 'Report Title', 'Digital Training Center', 0);

-- --------------------------------------------------------

--
-- Table structure for table `upazila`
--

CREATE TABLE `upazila` (
  `id` int(20) NOT NULL,
  `user_id` int(100) NOT NULL,
  `upazila_name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upazila`
--

INSERT INTO `upazila` (`id`, `user_id`, `upazila_name`) VALUES
(2, 140, 'Bogura'),
(3, 140, 'Rajshahi'),
(4, 140, 'Bogura Sadar'),
(5, 140, 'Gabtoli'),
(6, 140, 'Sherpur');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `full_name` varchar(250) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `access_level` int(11) NOT NULL,
  `status` int(20) NOT NULL,
  `expire_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `full_name`, `username`, `password`, `access_level`, `status`, `expire_date`) VALUES
(22, 'Admin', 'AdmiN', '3052737b4b919b27a424455bb6475e24', 1, 1, '0000-00-00'),
(130, 'Samiul ITM', 'samiul004', 'b17c7f9d339f87ae91c72e08daf1c8db', 4, 1, '0000-00-00'),
(131, 'romel', 'romel', '8e2945aecfcbf5748ebaf94364eb9807', 4, 1, '0000-00-00'),
(132, 'FARUK', 'FARUK', '72afd5ae40d11e6b6210e8aa1e048c0c', 4, 1, '0000-00-00'),
(133, 'ABU ZIHAD', 'abuzihad', 'c33367701511b4f6020ec61ded352059', 4, 1, '0000-00-00'),
(134, 'mozahid', 'mozahid', '1aaf3eb3eacb0821c0469b1897acc5d5', 2, 1, '0000-00-00'),
(135, 'Samim', 'Sam1', '490bd89bcdc4e9f01d1a33899736f7a3', 4, 1, '0000-00-00'),
(136, 'Siddik', 'Sidd1', '7f141c9d56a461aad0415a582ea6b10c', 4, 1, '0000-00-00'),
(137, 'Nafiz Imtiaz', 'Nafiz21', '9fc4f00134322ce95dfaa83d945397da', 4, 1, '2022-04-11'),
(138, 'Abul Azad', 'Abul3', 'ea7f88e04d75fb3b361d97378ae42a36', 4, 1, '0000-00-00'),
(139, 'Kalam', 'Kalam14', 'd4efe65874f10a488c31b3b66f38884f', 4, 0, '0000-00-00'),
(140, 'Digital Training Center', 'ITM', 'eb2dd0656157562e37736fe7e186d438', 4, 1, '2024-03-30'),
(141, 'Imran Islam', 'SMImran1', '7ae96a01c41c5f3379e7b40bc15e3761', 4, 1, '2022-05-31'),
(142, 'Siddik', 'SiddikDk1', '29486a5781c47b500d3b23e719c1e9d1', 4, 1, '0000-00-00'),
(143, 'Samiul Alom', 'Dta64', 'fc8facbb2ede3a0a78919631233ad1e9', 4, 1, '2022-04-17'),
(144, 'HM Talha', 'Hmt1', '578dd1e323383bdd74fbc6824b835e4f', 4, 1, '2022-09-15'),
(145, 'Smart Phone ', 'sphon1', '1050afd33aabfe7d9ecddc089e38a30e', 4, 1, '2022-12-31'),
(146, 'Nazmul Ahmmed ', 'Sphon2', '9f144811062193e3d326c9314e527c96', 4, 1, '2023-08-06'),
(147, 'Samiul Alam', 'Sam23', '599dd3928dc723d2fe187674b4fdde5a', 4, 1, '2023-05-31'),
(148, '????? ?????? ????? ??????', 'SurmaT', 'e7ce6e9ef890b6ba795db32f606057a4', 4, 1, '2023-08-06');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `userlogid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `login` datetime NOT NULL,
  `logout` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vision`
--

CREATE TABLE `vision` (
  `ms_id` int(30) NOT NULL,
  `user_id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `details` longtext NOT NULL,
  `userPic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vision`
--

INSERT INTO `vision` (`ms_id`, `user_id`, `name`, `details`, `userPic`) VALUES
(1, 140, 'Our Vision', '<p><span style=\"font-size: 12pt;\">Prince Education Group has been established to keep pace with the progress of science and information technology and to achieve success in the journey of progress of Bangladesh with the potential of a large population and to expand teaching and research activities with due importance in the field of technical and work-oriented education and modern knowledge practice at the national level.Action oriented education is the main driver of development and progress.</span></p>\r\n<p><span style=\"font-size: 12pt;\"> The economic emancipation of the common people lies in the wide spread of this education. Today it is the need of the hour to take this education to the grass root level, at the doorstep of all the hardworking people. Various organizations are being established at the public and private level with the aim of promoting, expanding, skilling and developing career-oriented education, innovative development projects have been adopted and are being implemented.</span></p>', '608594.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `why_section`
--

CREATE TABLE `why_section` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `userPic` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `why_section`
--

INSERT INTO `why_section` (`id`, `user_id`, `title`, `userPic`, `date`) VALUES
(2, 140, 'Architecto cupiditat', 'prince-601685-stats3.png', '2024-02-08'),
(3, 140, 'Qui dolor ratione si', 'prince-672744-stats4.png', '2024-02-08'),
(4, 140, 'Tempore aut sunt r', 'prince-804676-stats1.png', '2024-02-08'),
(5, 140, 'Aliqua Est debitis ', 'prince-651962-stats4.png', '2024-02-08');

-- --------------------------------------------------------

--
-- Table structure for table `year_name`
--

CREATE TABLE `year_name` (
  `yer_id` int(20) NOT NULL,
  `user_id` int(100) NOT NULL,
  `yer_name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year_name`
--

INSERT INTO `year_name` (`yer_id`, `user_id`, `yer_name`) VALUES
(1, 140, '2023'),
(2, 140, '2024');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_section`
--
ALTER TABLE `about_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activitylog`
--
ALTER TABLE `activitylog`
  ADD PRIMARY KEY (`activitylog`);

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `bank_money`
--
ALTER TABLE `bank_money`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank_money_history`
--
ALTER TABLE `bank_money_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank_name`
--
ALTER TABLE `bank_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bld_grp`
--
ALTER TABLE `bld_grp`
  ADD PRIMARY KEY (`bld_id`);

--
-- Indexes for table `blog_section`
--
ALTER TABLE `blog_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`brd_id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`br_id`);

--
-- Indexes for table `chair_man_massage`
--
ALTER TABLE `chair_man_massage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `choose_section`
--
ALTER TABLE `choose_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_apply`
--
ALTER TABLE `course_apply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crse_topic`
--
ALTER TABLE `crse_topic`
  ADD PRIMARY KEY (`crse_id`);

--
-- Indexes for table `daily_notes`
--
ALTER TABLE `daily_notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `degree`
--
ALTER TABLE `degree`
  ADD PRIMARY KEY (`deg_id`);

--
-- Indexes for table `diploma_admission`
--
ALTER TABLE `diploma_admission`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees_salary`
--
ALTER TABLE `employees_salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees_salary_details`
--
ALTER TABLE `employees_salary_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense_other`
--
ALTER TABLE `expense_other`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_section`
--
ALTER TABLE `faq_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `map`
--
ALTER TABLE `map`
  ADD PRIMARY KEY (`mp_id`);

--
-- Indexes for table `medical_admission`
--
ALTER TABLE `medical_admission`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `medical_assistant_admission`
--
ALTER TABLE `medical_assistant_admission`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `mission`
--
ALTER TABLE `mission`
  ADD PRIMARY KEY (`ms_id`);

--
-- Indexes for table `month`
--
ALTER TABLE `month`
  ADD PRIMARY KEY (`mnt_id`);

--
-- Indexes for table `news_section`
--
ALTER TABLE `news_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nursing_admission`
--
ALTER TABLE `nursing_admission`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `office_exp_name`
--
ALTER TABLE `office_exp_name`
  ADD PRIMARY KEY (`of_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_details`
--
ALTER TABLE `orders_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_dues`
--
ALTER TABLE `orders_dues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`order_item_id`);

--
-- Indexes for table `parner`
--
ALTER TABLE `parner`
  ADD PRIMARY KEY (`pr_id`);

--
-- Indexes for table `password`
--
ALTER TABLE `password`
  ADD PRIMARY KEY (`passwordid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `product_id_2` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `publish1`
--
ALTER TABLE `publish1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publish_result_routine`
--
ALTER TABLE `publish_result_routine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_section`
--
ALTER TABLE `seo_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`sv_id`);

--
-- Indexes for table `service_category`
--
ALTER TABLE `service_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `skill_section`
--
ALTER TABLE `skill_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_section`
--
ALTER TABLE `slider_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stats`
--
ALTER TABLE `stats`
  ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `stuff`
--
ALTER TABLE `stuff`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `stuff_details`
--
ALTER TABLE `stuff_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `success_student_section`
--
ALTER TABLE `success_student_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_section`
--
ALTER TABLE `teacher_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_section`
--
ALTER TABLE `team_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`ts_id`);

--
-- Indexes for table `thana`
--
ALTER TABLE `thana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `title_name`
--
ALTER TABLE `title_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upazila`
--
ALTER TABLE `upazila`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`userlogid`);

--
-- Indexes for table `vision`
--
ALTER TABLE `vision`
  ADD PRIMARY KEY (`ms_id`);

--
-- Indexes for table `why_section`
--
ALTER TABLE `why_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `year_name`
--
ALTER TABLE `year_name`
  ADD PRIMARY KEY (`yer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_section`
--
ALTER TABLE `about_section`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `activitylog`
--
ALTER TABLE `activitylog`
  MODIFY `activitylog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=646;

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `student_id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `bank_money`
--
ALTER TABLE `bank_money`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bank_money_history`
--
ALTER TABLE `bank_money_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bank_name`
--
ALTER TABLE `bank_name`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `bld_grp`
--
ALTER TABLE `bld_grp`
  MODIFY `bld_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blog_section`
--
ALTER TABLE `blog_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `board`
--
ALTER TABLE `board`
  MODIFY `brd_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `br_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chair_man_massage`
--
ALTER TABLE `chair_man_massage`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `choose_section`
--
ALTER TABLE `choose_section`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `course_apply`
--
ALTER TABLE `course_apply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `crse_topic`
--
ALTER TABLE `crse_topic`
  MODIFY `crse_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `daily_notes`
--
ALTER TABLE `daily_notes`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `degree`
--
ALTER TABLE `degree`
  MODIFY `deg_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `diploma_admission`
--
ALTER TABLE `diploma_admission`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `employees_salary`
--
ALTER TABLE `employees_salary`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `employees_salary_details`
--
ALTER TABLE `employees_salary_details`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `expense_other`
--
ALTER TABLE `expense_other`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `faq_section`
--
ALTER TABLE `faq_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `map`
--
ALTER TABLE `map`
  MODIFY `mp_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `medical_admission`
--
ALTER TABLE `medical_admission`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `medical_assistant_admission`
--
ALTER TABLE `medical_assistant_admission`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mission`
--
ALTER TABLE `mission`
  MODIFY `ms_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `month`
--
ALTER TABLE `month`
  MODIFY `mnt_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news_section`
--
ALTER TABLE `news_section`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `nursing_admission`
--
ALTER TABLE `nursing_admission`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `office_exp_name`
--
ALTER TABLE `office_exp_name`
  MODIFY `of_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1060;

--
-- AUTO_INCREMENT for table `orders_details`
--
ALTER TABLE `orders_details`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `orders_dues`
--
ALTER TABLE `orders_dues`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `order_item_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `parner`
--
ALTER TABLE `parner`
  MODIFY `pr_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `password`
--
ALTER TABLE `password`
  MODIFY `passwordid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pro_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `cat_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `publish1`
--
ALTER TABLE `publish1`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `publish_result_routine`
--
ALTER TABLE `publish_result_routine`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `seo_section`
--
ALTER TABLE `seo_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `sv_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `service_category`
--
ALTER TABLE `service_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `skill_section`
--
ALTER TABLE `skill_section`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `slider_section`
--
ALTER TABLE `slider_section`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `stats`
--
ALTER TABLE `stats`
  MODIFY `st_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `stuff_details`
--
ALTER TABLE `stuff_details`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=767;

--
-- AUTO_INCREMENT for table `success_student_section`
--
ALTER TABLE `success_student_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teacher_section`
--
ALTER TABLE `teacher_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `team_section`
--
ALTER TABLE `team_section`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `ts_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `thana`
--
ALTER TABLE `thana`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `title_name`
--
ALTER TABLE `title_name`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `upazila`
--
ALTER TABLE `upazila`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `userlogid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vision`
--
ALTER TABLE `vision`
  MODIFY `ms_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `why_section`
--
ALTER TABLE `why_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `year_name`
--
ALTER TABLE `year_name`
  MODIFY `yer_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
