-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2019 at 05:12 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `permissions` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `permissions`) VALUES
(1, 'Standard user', ''),
(2, 'Administrator', '{\r\n\"admin\": 1,\r\n\"moderator\": 1\r\n}');

-- --------------------------------------------------------

--
-- Table structure for table `tblregcourse`
--

CREATE TABLE `tblregcourse` (
  `regcourse_id` int(5) NOT NULL,
  `session` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL,
  `programme` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `course_code` varchar(10) NOT NULL,
  `course_title` varchar(60) NOT NULL,
  `course_unit` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblregcourse`
--

INSERT INTO `tblregcourse` (`regcourse_id`, `session`, `level`, `programme`, `semester`, `course_code`, `course_title`, `course_unit`) VALUES
(1, '2018/2019', '100 L', 'Full Time', 'First Semester', 'COM 101', 'Introduction to computing', 2),
(2, '2018/2019', '100 L', 'Full Time', 'First Semester', 'COM 112', 'Introduction to Digital Electronics', 2),
(3, '2018/2019', '100 L', 'Full Time', 'First Semester', 'COM 113', 'Introduction to Programming', 3),
(4, '2018/2019', '100 L', 'Full Time', 'First Semester', 'STA 111', 'Descriptive Statistics I', 3),
(5, '2018/2019', '100 L', 'Full Time', 'First Semester', 'STA 112', 'Elementary Probability Theory', 3),
(6, '2018/2019', '100 L', 'Full Time', 'First Semester', 'MTH 111', 'Logic and Linear Algebra ', 3),
(7, '2018/2019', '100 L', 'Full Time', 'First Semester', 'MTH 112', 'Functions and Geometry', 3),
(8, '2018/2019', '100 L', 'Full Time', 'First Semester', 'GNS 101', 'Technical English I', 4),
(9, '2018/2019', '100 L', 'Full Time', 'First Semester', 'GNS 111', 'Citizenship Education I', 2),
(10, '2018/2019', '100 L', 'Full Time', 'First Semester', 'GNS 118', 'Use of Library', 2),
(11, '2018/2019', '100 L', 'Full Time', 'First Semester', 'COM 121', 'Scientific Programming Language Using OO Java.', 0),
(12, '2018/2019', '100 L', 'Full Time', 'First Semester', 'COM 122', 'Introduction to the Internet', 2),
(13, '2018/2019', '100 L', 'Full Time', 'First Semester', 'COM 123', 'Computer Application Packages I', 2),
(14, '2018/2019', '100 L', 'Full Time', 'First Semester', 'COM 124', 'Data Structure and Algorithm', 3),
(15, '2018/2019', '100 L', 'Full Time', 'First Semester', 'COM 125', 'Introduction to System Analysis', 3),
(16, '2018/2019', '100 L', 'Full Time', 'First Semester', 'COM 126', 'PC Upgrade and Maintenance', 3),
(17, '2018/2019', '100 L', 'Full Time', 'First Semester', 'GNS 128', 'Citizenship Education II', 2),
(18, '2018/2019', '100 L', 'Full Time', 'First Semester', 'COM 128', 'Introduction to Operating System', 3),
(19, '2018/2019', '100 L', 'Full Time', 'First Semester', 'COM 211', 'Computer Programming Using OO BASIC', 3),
(20, '2018/2019', '100 L', 'Full Time', 'First Semester', 'COM 212', 'Introduction to System Programming', 2),
(21, '2018/2019', '100 L', 'Full Time', 'First Semester', 'COM 214', 'File Organization and Management', 3),
(22, '2018/2019', '100 L', 'Full Time', 'First Semester', 'COM 215', 'Computer Packages II', 2),
(23, '2018/2019', '100 L', 'Full Time', 'First Semester', 'COM 216', 'Computer System Troubleshooting I', 2),
(24, '2018/2019', '100 L', 'Full Time', 'First Semester', 'COM 217', 'Technical English II', 2),
(25, '2018/2019', '100 L', 'Full Time', 'First Semester', 'COM 218', 'Introduction to Database', 3),
(26, '2018/2019', '100 L', 'Full Time', 'First Semester', 'COM 211', 'Computer Programming Using OO FORTRAN', 3),
(27, '2018/2019', '100 L', 'Full Time', 'First Semester', 'COM 222', 'Seminar on Computer and Society', 2),
(28, '2018/2019', '100 L', 'Full Time', 'First Semester', 'COM 223', 'Basic Hardware Maintenance', 3),
(29, '2018/2019', '100 L', 'Full Time', 'First Semester', 'COM 224', 'Management Information System', 3),
(30, '2018/2019', '100 L', 'Full Time', 'First Semester', 'COM 226', 'Computer System Troubleshooting II', 2),
(31, '2018/2019', '100 L', 'Full Time', 'First Semester', 'COM 229', 'Project', 4),
(32, '2018/2019', '100 L', 'Full Time', 'First Semester', 'STA 226', 'Small Business Start Up', 2),
(33, '2018/2019', '100 L', 'Part Time', 'First Semester', 'COM 101', 'Introduction to computing', 2),
(34, '2018/2019', '100 L', 'Part Time', 'First Semester', 'COM 112', 'Introduction to Digital Electronics', 2),
(35, '2018/2019', '100 L', 'Part Time', 'First Semester', 'COM 113', 'Introduction to Programming', 3),
(36, '2018/2019', '100 L', 'Part Time', 'First Semester', 'STA 111', 'Descriptive Statistics I', 3),
(37, '2018/2019', '100 L', 'Part Time', 'First Semester', 'STA 112', 'Elementary Probability Theory', 3),
(38, '2018/2019', '100 L', 'Part Time', 'First Semester', 'MTH 111', 'Logic and Linear Algebra ', 3),
(39, '2018/2019', '100 L', 'Part Time', 'First Semester', 'MTH 112', 'Functions and Geometry', 3),
(40, '2018/2019', '100 L', 'Part Time', 'First Semester', 'GNS 101', 'Technical English I', 4),
(41, '2018/2019', '100 L', 'Part Time', 'First Semester', 'GNS 111', 'Citizenship Education I', 2),
(42, '2018/2019', '100 L', 'Part Time', 'First Semester', 'GNS 118', 'Use of Library', 2),
(43, '2018/2019', '100 L', 'Part Time', 'First Semester', 'COM 121', 'Scientific Programming Language Using OO Java.', 0),
(44, '2018/2019', '100 L', 'Part Time', 'First Semester', 'COM 122', 'Introduction to the Internet', 2),
(45, '2018/2019', '100 L', 'Part Time', 'First Semester', 'COM 123', 'Computer Application Packages I', 2),
(46, '2018/2019', '100 L', 'Part Time', 'First Semester', 'COM 124', 'Data Structure and Algorithm', 3),
(47, '2018/2019', '100 L', 'Part Time', 'First Semester', 'COM 125', 'Introduction to System Analysis', 3),
(48, '2018/2019', '100 L', 'Part Time', 'First Semester', 'COM 126', 'PC Upgrade and Maintenance', 3),
(49, '2018/2019', '100 L', 'Part Time', 'First Semester', 'GNS 128', 'Citizenship Education II', 2),
(50, '2018/2019', '100 L', 'Part Time', 'First Semester', 'COM 128', 'Introduction to Operating System', 3),
(51, '2018/2019', '100 L', 'Part Time', 'First Semester', 'COM 211', 'Computer Programming Using OO BASIC', 3),
(52, '2018/2019', '100 L', 'Part Time', 'First Semester', 'COM 212', 'Introduction to System Programming', 2),
(53, '2018/2019', '100 L', 'Part Time', 'First Semester', 'COM 214', 'File Organization and Management', 3),
(54, '2018/2019', '100 L', 'Part Time', 'First Semester', 'COM 215', 'Computer Packages II', 2),
(55, '2018/2019', '100 L', 'Part Time', 'First Semester', 'COM 216', 'Computer System Troubleshooting I', 2),
(56, '2018/2019', '100 L', 'Part Time', 'First Semester', 'COM 217', 'Technical English II', 2),
(57, '2018/2019', '100 L', 'Part Time', 'First Semester', 'COM 218', 'Introduction to Database', 3),
(58, '2018/2019', '100 L', 'Part Time', 'First Semester', 'COM 211', 'Computer Programming Using OO FORTRAN', 3),
(59, '2018/2019', '100 L', 'Part Time', 'First Semester', 'COM 222', 'Seminar on Computer and Society', 2),
(60, '2018/2019', '100 L', 'Part Time', 'First Semester', 'COM 223', 'Basic Hardware Maintenance', 3),
(61, '2018/2019', '100 L', 'Part Time', 'First Semester', 'COM 224', 'Management Information System', 3),
(62, '2018/2019', '100 L', 'Part Time', 'First Semester', 'COM 226', 'Computer System Troubleshooting II', 2),
(63, '2018/2019', '100 L', 'Part Time', 'First Semester', 'COM 229', 'Project', 4),
(64, '2018/2019', '100 L', 'Part Time', 'First Semester', 'STA 226', 'Small Business Start Up', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tblresults`
--

CREATE TABLE `tblresults` (
  `tblresults_id` int(10) NOT NULL,
  `programme` varchar(20) NOT NULL,
  `session` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `course_code` varchar(10) NOT NULL,
  `course_unit` varchar(10) NOT NULL,
  `score` int(10) NOT NULL,
  `grade` varchar(5) NOT NULL,
  `matric_no` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblresults`
--

INSERT INTO `tblresults` (`tblresults_id`, `programme`, `session`, `level`, `semester`, `course_code`, `course_unit`, `score`, `grade`, `matric_no`) VALUES
(1, 'Ft', '2018/2019', 'ND I', 'First Semester', 'Com222', '2', 32, 'CD', '16/85/0001'),
(2, 'Ft', '2018/2019', 'ND I', 'First Semester', 'Com223', '3', 34, 'CD', '16/85/0002'),
(3, 'Ft', '2018/2019', 'ND I', 'First Semester', 'Com224', '3', 45, 'CD', '16/85/0003'),
(4, 'Ft', '2018/2019', 'ND I', 'First Semester', 'Com225', '2', 65, 'C', '16/85/0004'),
(5, 'Ft', '2018/2019', 'ND I', 'First Semester', 'Com226', '2', 43, 'CD', '16/85/0005'),
(6, 'Ft', '2018/2019', 'ND I', 'First Semester', 'Com227', '2', 24, 'FF', '16/85/0006'),
(7, 'Ft', '2018/2019', 'ND I', 'First Semester', 'Com228', '2', 77, 'AB', '16/85/0007'),
(8, 'Ft', '2018/2019', 'ND I', 'First Semester', 'Com229', '2', 89, 'A', '16/85/0008'),
(9, 'Ft', '2018/2019', 'ND I', 'First Semester', 'Com230', '2', 76, 'AB', '16/85/0009'),
(10, 'Ft', '2018/2019', 'ND I', 'First Semester', 'Com231', '2', 90, 'A', '16/85/0010'),
(11, 'Ft', '2018/2019', 'ND I', 'First Semester', 'Com232', '2', 90, 'A', '16/85/0011'),
(12, 'Ft', '2018/2019', 'ND I', 'First Semester', 'Com233', '4', 99, 'A', '16/85/0049'),
(13, 'Ft', '2018/2019', 'ND I', 'First Semester', 'Com234', '3', 88, 'A', '16/85/0049'),
(14, 'Ft', '2018/2019', 'ND I', 'First Semester', 'Com235', '3', 76, 'AB', '16/85/0049'),
(15, 'Ft', '2018/2019', 'ND I', 'First Semester', 'Com236', '2', 54, 'CD', '16/85/0015');

-- --------------------------------------------------------

--
-- Table structure for table `tblstdtregcourse`
--

CREATE TABLE `tblstdtregcourse` (
  `regcourse_id` int(5) NOT NULL,
  `session` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL,
  `programme` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `course_code` varchar(10) NOT NULL,
  `course_title` varchar(30) NOT NULL,
  `course_unit` int(2) NOT NULL,
  `matric_no` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstdtregcourse`
--

INSERT INTO `tblstdtregcourse` (`regcourse_id`, `session`, `level`, `programme`, `semester`, `course_code`, `course_title`, `course_unit`, `matric_no`) VALUES
(13, '2018/2019', 'ND II', 'Full Time', 'First Semester', 'com753', 'JScripy', 3, '16/85/0049'),
(14, '2018/2019', 'ND II', 'Full Time', 'First Semester', 'Com873', 'Jquery', 3, '16/85/0049'),
(15, '2018/2019', 'ND II', 'Full Time', 'First Semester', 'Com348', 'ADA', 4, '16/85/0049'),
(16, '2018/2019', 'ND II', 'Full Time', 'First Semester', 'com165', 'css backend', 2, '16/85/0049'),
(17, '2018/2019', 'ND II', 'Full Time', 'First Semester', 'Com857', 'Vue JS', 2, '16/85/0049'),
(18, '2018/2019', 'ND II', 'Full Time', 'First Semester', 'com422', 'Project MGT', 2, '16/85/0012'),
(19, '2018/2019', 'ND II', 'Full Time', 'First Semester', 'com171', 'OOPHP', 3, '16/85/0012'),
(20, '2018/2019', 'ND II', 'Full Time', 'First Semester', 'com345', 'BPM', 3, '16/85/0012'),
(21, '2018/2019', 'ND II', 'Full Time', 'First Semester', 'com753', 'JScripy', 3, '16/85/0012'),
(22, '2018/2019', 'ND II', 'Full Time', 'First Semester', 'Com346', 'Laravel', 3, '16/85/0012'),
(23, '2018/2019', 'ND II', 'Full Time', 'First Semester', 'Com873', 'Jquery', 3, '16/85/0012'),
(24, '2018/2019', 'ND II', 'Full Time', 'First Semester', 'com165', 'css backend', 2, '16/85/0012'),
(26, '2018/2019', '100 L', 'Part Time', 'First Semester', 'COM 113', 'Introduction to Programming', 3, '16/85/0049'),
(27, '2018/2019', '100 L', 'Part Time', 'First Semester', 'STA 111', 'Descriptive Statistics I', 3, '16/85/0049'),
(28, '2018/2019', '100 L', 'Part Time', 'First Semester', 'STA 112', 'Elementary Probability Theory', 3, '16/85/0049'),
(29, '2018/2019', '100 L', 'Part Time', 'First Semester', 'COM 211', 'Computer Programming Using OO ', 3, '16/85/0049'),
(30, '2018/2019', '100 L', 'Part Time', 'First Semester', 'COM 222', 'Seminar on Computer and Societ', 2, '16/85/0049'),
(31, '2018/2019', '100 L', 'Part Time', 'First Semester', 'COM 223', 'Basic Hardware Maintenance', 3, '16/85/0049'),
(32, '2018/2019', '100 L', 'Part Time', 'First Semester', 'COM 224', 'Management Information System', 3, '16/85/0049'),
(33, '2018/2019', '100 L', 'Part Time', 'First Semester', 'COM 226', 'Computer System Troubleshootin', 2, '16/85/0049'),
(34, '2018/2019', '100 L', 'Part Time', 'First Semester', 'COM 229', 'Project', 4, '16/85/0049'),
(35, '2018/2019', '100 L', 'Part Time', 'First Semester', 'STA 226', 'Small Business Start Up', 2, '16/85/0049'),
(36, '2018/2019', '100 L', 'Part Time', 'First Semester', 'STA 111', 'Descriptive Statistics I', 3, '16/85/0049'),
(37, '2018/2019', '100 L', 'Part Time', 'First Semester', 'COM 125', 'Introduction to System Analysi', 3, '16/85/0049'),
(38, '2018/2019', '100 L', 'Part Time', 'First Semester', 'COM 126', 'PC Upgrade and Maintenance', 3, '16/85/0049'),
(39, '2018/2019', '100 L', 'Part Time', 'First Semester', 'COM 226', 'Computer System Troubleshootin', 2, '16/85/0049'),
(40, '2018/2019', '100 L', 'Part Time', 'First Semester', 'COM 229', 'Project', 4, '16/85/0049'),
(41, '2018/2019', '100 L', 'Part Time', 'First Semester', 'STA 226', 'Small Business Start Up', 2, '16/85/0049');

-- --------------------------------------------------------

--
-- Table structure for table `tblstudents`
--

CREATE TABLE `tblstudents` (
  `students_id` int(5) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `othernames` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(80) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL,
  `matric_no` varchar(30) NOT NULL,
  `session` varchar(30) NOT NULL,
  `street` varchar(60) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `sog` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `institution` varchar(100) NOT NULL,
  `programme` varchar(15) NOT NULL,
  `studentimg` varchar(50) NOT NULL,
  `salt` varchar(50) NOT NULL,
  `joined` varchar(20) NOT NULL,
  `group` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudents`
--

INSERT INTO `tblstudents` (`students_id`, `firstname`, `lastname`, `othernames`, `email`, `username`, `password`, `phone`, `department`, `level`, `matric_no`, `session`, `street`, `city`, `state`, `sog`, `dob`, `institution`, `programme`, `studentimg`, `salt`, `joined`, `group`) VALUES
(4, 'Yakub', 'Adeola', 'Opeyemi', 'yaqubopeyemi@schoolmail.com', 'yaqubopeyemi@schoolmail.com', '09e88b9b33bdb6af0cb58854ce6d5fd635ad029e4e4c493d33069ee3248631e8', '08171716532', 'Computer Science', '100 L', '16/85/0049', '2018/2019', '9, Sanyaolu street, Ibara G.R.A', 'Abeokuta', 'Ogun', 'Ogun', '2001-01-01', 'polytechnic', 'Part Time', 'studentimg/WIN_20190705_15_27_54_Pro.jpg', '€¿Ü»„#……,­æÆ\'[©¨·!sËdb1/ Ã*', '2019-07-06 08:45:09', 1),
(5, 'Adesanya', 'Folorunso', 'Opeyemi', 'adesanyafolorunso0@gmail.com', 'adesanyafolorunso0@gmail.com', 'b76b8497b780ade757f320391aedfc3cca0a32a050e969557d3de413cf4689ac', '08105575363', 'Computer Science', '300 L', '16/85/0012', '2018/2019', '1 Ayodele Oke-Owo Rd, Gbagada, Lagos', 'Lagos', 'Lagos', 'Lagos', '2000-01-01', 'polytechnic', 'Part Time', 'studentimg/avatar.png', '^åu \0üI€KÚ,ò¥ëæc³ßž¤Îö[EK—ÉÚè', '2019-07-06 08:47:51', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users_session`
--

CREATE TABLE `users_session` (
  `id` int(5) NOT NULL,
  `users_id` int(11) DEFAULT NULL,
  `hash` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_session`
--

INSERT INTO `users_session` (`id`, `users_id`, `hash`) VALUES
(1, 3, '33c70de95ac52cd04fcaadfc93d37d3a0c61f52e5607aa9511'),
(2, 4, '2686db7f93cf22e4d3ce29f1d6d80599a9f3b22b62b005b281');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblregcourse`
--
ALTER TABLE `tblregcourse`
  ADD PRIMARY KEY (`regcourse_id`);

--
-- Indexes for table `tblresults`
--
ALTER TABLE `tblresults`
  ADD PRIMARY KEY (`tblresults_id`);

--
-- Indexes for table `tblstdtregcourse`
--
ALTER TABLE `tblstdtregcourse`
  ADD PRIMARY KEY (`regcourse_id`);

--
-- Indexes for table `tblstudents`
--
ALTER TABLE `tblstudents`
  ADD PRIMARY KEY (`students_id`);

--
-- Indexes for table `users_session`
--
ALTER TABLE `users_session`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblregcourse`
--
ALTER TABLE `tblregcourse`
  MODIFY `regcourse_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `tblresults`
--
ALTER TABLE `tblresults`
  MODIFY `tblresults_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tblstdtregcourse`
--
ALTER TABLE `tblstdtregcourse`
  MODIFY `regcourse_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tblstudents`
--
ALTER TABLE `tblstudents`
  MODIFY `students_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users_session`
--
ALTER TABLE `users_session`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
