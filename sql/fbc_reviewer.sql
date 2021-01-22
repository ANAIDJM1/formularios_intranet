-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2018 at 11:28 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fbc_reviewer`
--

-- --------------------------------------------------------

--
-- Table structure for table `examproper`
--

CREATE TABLE `examproper` (
  `test_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total_questions` int(11) NOT NULL,
  `passing_rate` int(11) NOT NULL,
  `time_limit` int(11) NOT NULL,
  `access_code` text NOT NULL,
  `test_desc` text NOT NULL,
  `category_exam` text NOT NULL,
  `date_time` datetime NOT NULL,
  `date_expired` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examproper`
--

INSERT INTO `examproper` (`test_id`, `user_id`, `total_questions`, `passing_rate`, `time_limit`, `access_code`, `test_desc`, `category_exam`, `date_time`, `date_expired`) VALUES
(71, 48, 1, 100, 10, 'SDSNDZ', 'CIVIL ENGINEERING', 'Mathematics, Surveying and Transportation Engineering', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, 25, 20, 100, 60, 'Z846LR', 'CIVIL ENGINEERING', 'Mathematics, Surveying and Transportation Engineering', '2018-12-20 12:12:00', '2018-12-21 12:13:00');

-- --------------------------------------------------------

--
-- Table structure for table `exam_questions`
--

CREATE TABLE `exam_questions` (
  `q_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `question_desc` text NOT NULL,
  `option_a` text NOT NULL,
  `option_b` text NOT NULL,
  `option_c` text NOT NULL,
  `option_d` text NOT NULL,
  `correct_answer` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `test_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_questions`
--

INSERT INTO `exam_questions` (`q_id`, `test_id`, `question_desc`, `option_a`, `option_b`, `option_c`, `option_d`, `correct_answer`, `user_id`, `test_desc`) VALUES
(84, 70, '2', '2', '1', '3', '3', '2', 25, ''),
(85, 70, '2', '2', '3', '4', '4', '2', 25, ''),
(86, 70, '123', '123', '123', '123', '213', '123', 25, ''),
(87, 72, 'QUESTION PROPER', '1', '2', '3', '4', '1', 25, ''),
(88, 81, 'porper2', '123', '312', '123', '123', '123', 25, ''),
(89, 89, 'test', '1', '2', '3', '4', '1', 25, ''),
(90, 90, 'wala', 'wala', 'wala', 'wala', 'wala', 'wala', 25, ''),
(91, 91, 'finals', '11', '22', '33', '44', '11', 25, ''),
(92, 92, 'miss', 'miss', 'miss', 'miss', 'miss', 'miss', 25, ''),
(93, 92, 'missa', 'missa', 'missa', 'missa', 'miss', 'missa', 25, ''),
(94, 93, 'proper', '1', '2', '3', '4', '1', 25, '');

-- --------------------------------------------------------

--
-- Table structure for table `pre_questions`
--

CREATE TABLE `pre_questions` (
  `q_id` int(10) NOT NULL,
  `test_id` int(10) NOT NULL,
  `question_desc` text NOT NULL,
  `option_a` text NOT NULL,
  `option_b` text NOT NULL,
  `option_c` text NOT NULL,
  `option_d` text NOT NULL,
  `correct_answer` text NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pre_questions`
--

INSERT INTO `pre_questions` (`q_id`, `test_id`, `question_desc`, `option_a`, `option_b`, `option_c`, `option_d`, `correct_answer`, `user_id`) VALUES
(0, 0, 'qw', 'qwe', 's', 'qwe', 'qe', 'qwe', 25),
(0, 3, 'wqe', 'qwe', 'wqe', 'qwe', 'qwe', 'qwe', 25);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `q_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `question_desc` text NOT NULL,
  `option_a` text NOT NULL,
  `option_b` text NOT NULL,
  `option_c` text NOT NULL,
  `option_d` text NOT NULL,
  `correct_answer` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`q_id`, `test_id`, `question_desc`, `option_a`, `option_b`, `option_c`, `option_d`, `correct_answer`, `user_id`) VALUES
(211, 134, 'try', 'try', 'try', 'try', 'try', 'try', 25),
(212, 134, '22', '2', '2', '2', '2', '2', 25),
(213, 134, '3', '3', '3', '3', '3', '3', 25),
(214, 135, 'one', '1', '2', '3', '4', '1', 25),
(215, 135, 'two', '1', '2', '3', '4', '2', 25),
(216, 136, 'what', '1', '3', '2', '2', '1', 25),
(217, 136, 'when', '1', '3', '3', '4', '1', 25),
(218, 136, 'do', '2', '3', '4', '4', '2', 25),
(219, 136, 'same', '2', '22', '333', '22', '2', 25),
(220, 137, 'test', '1', '2', '3', '3', '1', 25),
(221, 137, 'test2', '1', '2', '3', '4', '1', 25),
(222, 137, 'test3', '1', '2', '3', '4', '1', 25),
(223, 138, 'where', '1', '2', '3', '4', '1', 48);

-- --------------------------------------------------------

--
-- Table structure for table `studentdata_exams`
--

CREATE TABLE `studentdata_exams` (
  `id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `q_id` int(11) NOT NULL,
  `answer` text NOT NULL,
  `status` int(11) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentdata_exams`
--

INSERT INTO `studentdata_exams` (`id`, `test_id`, `q_id`, `answer`, `status`, `student_id`) VALUES
(235, 70, 84, '2', 1, 47),
(236, 70, 85, '3', 0, 47),
(237, 72, 84, '2', 1, 47),
(245, 90, 90, 'wala', 1, 47),
(246, 91, 91, '22', 0, 47),
(247, 91, 91, '22', 0, 52),
(248, 92, 92, 'miss', 1, 47),
(249, 93, 94, '2', 0, 53);

-- --------------------------------------------------------

--
-- Table structure for table `studentdata_tests`
--

CREATE TABLE `studentdata_tests` (
  `id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `q_id` int(11) NOT NULL,
  `answer` text NOT NULL,
  `status` int(11) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentdata_tests`
--

INSERT INTO `studentdata_tests` (`id`, `test_id`, `q_id`, `answer`, `status`, `student_id`) VALUES
(62, 136, 218, '2', 1, 47),
(63, 136, 219, '2', 1, 47),
(64, 136, 217, '1', 1, 47),
(65, 136, 216, '1', 1, 47),
(66, 136, 216, '1', 1, 47),
(67, 136, 218, '2', 1, 47),
(68, 136, 219, '2', 1, 47),
(69, 136, 217, '1', 1, 47),
(70, 137, 221, '', 0, 47),
(71, 137, 220, '', 0, 47),
(72, 137, 222, '', 0, 47),
(73, 137, 222, '', 0, 47),
(74, 137, 221, '', 0, 47),
(75, 137, 220, '', 0, 47),
(76, 137, 220, '', 0, 47),
(77, 137, 222, '', 0, 47),
(78, 137, 221, '', 0, 47),
(79, 137, 220, '', 0, 47),
(80, 137, 221, '', 0, 47),
(81, 137, 222, '', 0, 47),
(82, 137, 221, '', 0, 47),
(83, 137, 220, '', 0, 47),
(84, 137, 222, '', 0, 47),
(85, 137, 220, '', 0, 47),
(86, 137, 222, '', 0, 47),
(87, 137, 221, '', 0, 47),
(88, 137, 220, '', 0, 47),
(89, 137, 222, '', 0, 47),
(90, 137, 221, '', 0, 47),
(91, 137, 222, '', 0, 47),
(92, 137, 221, '', 0, 47),
(93, 137, 220, '', 0, 47),
(94, 136, 218, '2', 1, 47),
(95, 136, 219, '2', 1, 47),
(96, 136, 216, '1', 1, 47),
(97, 136, 217, '1', 1, 47),
(98, 137, 222, '', 0, 47),
(99, 137, 221, '', 0, 47),
(100, 137, 220, '', 0, 47),
(101, 136, 217, '1', 1, 47),
(102, 136, 219, '2', 1, 47),
(103, 136, 218, '2', 1, 47),
(104, 136, 216, '1', 1, 47);

-- --------------------------------------------------------

--
-- Table structure for table `studentresult_exams`
--

CREATE TABLE `studentresult_exams` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `percentage` int(11) NOT NULL,
  `remarks` text NOT NULL,
  `date_taken` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentresult_exams`
--

INSERT INTO `studentresult_exams` (`id`, `student_id`, `test_id`, `score`, `percentage`, `remarks`, `date_taken`) VALUES
(183, 47, 70, 1, 50, 'FAILED', 'Nov, 28 2018'),
(184, 47, 137, 0, 0, 'FAILED', 'Nov, 28 2018'),
(185, 47, 136, 4, 100, 'PASSED', 'Nov, 28 2018'),
(186, 47, 72, 1, 100, 'PASSED', 'Dec, 16 2018'),
(187, 47, 89, 1, 100, 'PASSED', 'Dec, 16 2018'),
(188, 47, 89, 0, 0, 'FAILED', 'Dec, 16 2018'),
(189, 47, 90, 1, 100, 'PASSED', 'Dec, 16 2018'),
(190, 47, 91, 1, 100, 'PASSED', 'Dec, 16 2018'),
(191, 52, 91, 0, 0, 'FAILED', 'Dec, 16 2018'),
(192, 47, 92, 1, 100, 'PASSED', 'Dec, 17 2018'),
(193, 53, 93, 0, 0, 'FAILED', 'Dec, 17 2018');

-- --------------------------------------------------------

--
-- Table structure for table `studentresult_test`
--

CREATE TABLE `studentresult_test` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `percentage` int(11) NOT NULL,
  `remarks` text NOT NULL,
  `date_taken` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentresult_test`
--

INSERT INTO `studentresult_test` (`id`, `student_id`, `test_id`, `score`, `percentage`, `remarks`, `date_taken`) VALUES
(11, 47, 133, 0, 0, 'FAILED', 'Nov, 28 2018'),
(12, 47, 133, 0, 0, 'FAILED', 'Nov, 28 2018'),
(13, 47, 133, 0, 0, 'FAILED', 'Nov, 28 2018');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `test_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `difficulty_id` int(11) NOT NULL,
  `total_questions` int(11) NOT NULL,
  `passing_rate` int(11) NOT NULL,
  `time_limit` int(11) NOT NULL,
  `test_desc` text NOT NULL,
  `test_subject` text NOT NULL,
  `access_code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`test_id`, `user_id`, `difficulty_id`, `total_questions`, `passing_rate`, `time_limit`, `test_desc`, `test_subject`, `access_code`) VALUES
(103, 37, 1, 100, 100, 5, 'ECE', 'Geotech', ''),
(110, 40, 1, 100, 100, 5, 'CIVIL ENGINEERING', 'Mathematics, Surveying and Transportation Engineering', ''),
(136, 25, 1, 4, 50, 60, 'CIVIL ENGINEERING', 'Mathematics, Surveying and Transportation Engineering', ''),
(137, 25, 1, 3, 100, 5, 'CIVIL ENGINEERING', 'Mathematics, Surveying and Transportation Engineering', ''),
(138, 48, 1, 1, 100, 5, 'CIVIL ENGINEERING', 'Mathematics, Surveying and Transportation Engineering', ''),
(139, 25, 2, 1, 100, 5, 'CIVIL ENGINEERING', 'Mathematics, Surveying and Transportation Engineering', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `usertype_id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `mname` text NOT NULL,
  `lname` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `user_type` text NOT NULL,
  `course` text NOT NULL,
  `year` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `usertype_id`, `fname`, `mname`, `lname`, `username`, `password`, `user_type`, `course`, `year`) VALUES
(25, 1, 'admin', 'admin', 'admin', 'admin', 'admin', 'Admin', '', ''),
(48, 2, 'Anelyn', 'a', 'be', 'anelyn', '123', 'Teacher', 'CIVIL ENGINEERING', '1ST SEMESTER'),
(49, 2, 'Nonoy', 's', 'zuniga', 'nonoy', '123', 'Teacher', '', ''),
(51, 2, 'a', 'a', 'a', 'teacher2', '123', 'Teacher', '', ''),
(53, 3, 'micheal', 'learns', 'to rock', 'micheal', '123', 'Student', 'CIVIL ENGINEERING', '1ST SEMESTER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `examproper`
--
ALTER TABLE `examproper`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `exam_questions`
--
ALTER TABLE `exam_questions`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `studentdata_exams`
--
ALTER TABLE `studentdata_exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentdata_tests`
--
ALTER TABLE `studentdata_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentresult_exams`
--
ALTER TABLE `studentresult_exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentresult_test`
--
ALTER TABLE `studentresult_test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `examproper`
--
ALTER TABLE `examproper`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
--
-- AUTO_INCREMENT for table `exam_questions`
--
ALTER TABLE `exam_questions`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=224;
--
-- AUTO_INCREMENT for table `studentdata_exams`
--
ALTER TABLE `studentdata_exams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;
--
-- AUTO_INCREMENT for table `studentdata_tests`
--
ALTER TABLE `studentdata_tests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT for table `studentresult_exams`
--
ALTER TABLE `studentresult_exams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;
--
-- AUTO_INCREMENT for table `studentresult_test`
--
ALTER TABLE `studentresult_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
