-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2021 at 04:00 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(12) NOT NULL,
  `user` varchar(25) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(12) NOT NULL,
  `department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department`) VALUES
(1, 'Computer Engineering'),
(2, 'Electrical Engineering'),
(3, 'Mechanical Engineering'),
(4, 'Civil Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `pdf`
--

CREATE TABLE `pdf` (
  `id` int(50) NOT NULL,
  `enroll` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pdf`
--

INSERT INTO `pdf` (`id`, `enroll`) VALUES
(13, '1700130090');

-- --------------------------------------------------------

--
-- Table structure for table `reject`
--

CREATE TABLE `reject` (
  `id` int(12) NOT NULL,
  `enroll` varchar(25) NOT NULL,
  `msg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reject`
--

INSERT INTO `reject` (`id`, `enroll`, `msg`) VALUES
(6, '1800130045', 'pending Fee. Contact Student Section');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `rid` int(50) NOT NULL,
  `enroll` int(15) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `course` varchar(30) NOT NULL,
  `year` varchar(20) NOT NULL,
  `reason` varchar(300) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`rid`, `enroll`, `sname`, `course`, `year`, `reason`, `status`) VALUES
(32, 1700130090, 'Vedprakash Sharad Panchal', 'Computer Engineering', 'Third', 'diploma completed', 1),
(33, 1700130121, 'Priya S Chavan', 'Electrical Engineering', 'Third', 'Diploma Completed', 0),
(34, 1800130045, 'RSM', 'Mechanical Engineering', 'third', 'diploma completed', 2);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(12) NOT NULL,
  `enroll` int(15) NOT NULL,
  `ssc` varchar(15) NOT NULL,
  `hsc` varchar(15) DEFAULT NULL,
  `sem1` varchar(12) NOT NULL,
  `sem2` varchar(25) NOT NULL,
  `sem3` varchar(15) NOT NULL,
  `sem4` varchar(15) NOT NULL,
  `sem5` varchar(15) NOT NULL,
  `sem6` varchar(50) NOT NULL,
  `fee` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `enroll`, `ssc`, `hsc`, `sem1`, `sem2`, `sem3`, `sem4`, `sem5`, `sem6`, `fee`) VALUES
(1, 1700130090, 'pass', 'NA', 'pass', 'pass', 'pass', 'pass', 'pass', 'pass', 'paid'),
(2, 1700130121, 'pass', 'pass', 'NA', 'NA', 'pass', 'pass', 'pass', 'pending', 'pending'),
(3, 1800130045, 'pass', 'NA', 'pass', 'pass', 'pass', 'pass', 'pass', 'pass', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `stud_login`
--

CREATE TABLE `stud_login` (
  `id` int(15) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stud_login`
--

INSERT INTO `stud_login` (`id`, `username`, `password`) VALUES
(1, 'testuser', 'test'),
(3, '1800130086', 'J#aY8es96'),
(4, '1800130083', 'qT3duV!4'),
(5, '1800130074', 'bp4#VU7v3'),
(6, '1800130072', 'r2p@nS54k'),
(7, '1800130064', 'ig5Yt2T7!'),
(8, '1800130045', '123');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(12) NOT NULL,
  `rno` int(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(12) NOT NULL,
  `branch` varchar(25) NOT NULL,
  `race` varchar(15) NOT NULL,
  `caste` varchar(15) NOT NULL,
  `subcaste` varchar(50) NOT NULL,
  `nationality` varchar(14) NOT NULL,
  `dob` varchar(25) NOT NULL,
  `place` varchar(23) NOT NULL,
  `institute` varchar(300) NOT NULL,
  `DOA` varchar(15) NOT NULL,
  `enroll` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `rno`, `name`, `mname`, `email`, `mobile`, `branch`, `race`, `caste`, `subcaste`, `nationality`, `dob`, `place`, `institute`, `DOA`, `enroll`) VALUES
(2, 124, 'vedprakash Sharad Panchal', 'Gitanjali', 'xyz@gmail.com', 923456789, 'Computer Engineering', 'Hindu', 'OBC', 'sutar', 'Indian', '20/03/2001', 'kelavli', 'Dnyanprabhodhan Madyamik Vidyalay Tal-Rajapur Dist-Ratnagiri', '05/08/2017', 1700130090),
(4, 139, 'Priya S Chavan', 'Sarita', 'priya @gmail.com', 923456789, 'Electrical Engineering', 'Hindu', 'OBC', 'Teli', 'Indian', '30/10/2002', 'Ratnagiri', 'Shirke High School Ratnagiri', '05/08/2017', 1700130121),
(5, 150, 'Vidya Jambhale', 'xyz', 'vidya@gmail.com', 923456789, 'Computer Engineering', 'Hindu', 'OPEN', 'Maratha', 'Indian', '12/5/2004', 'kolhapur', 'abc high school', '05/08/2018', 1800130165),
(7, 156, 'RSM', 'samidha', 'rsm@gmail.com', 956124578, 'Mechanical Engineering', 'Hindu', 'OBC', 'Bhandari', 'Indian', '20/03/2001', 'Ratnagiri', 'Phatak High School Ratnagiri', '05/08/2018', 1800130045);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pdf`
--
ALTER TABLE `pdf`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `enroll` (`enroll`);

--
-- Indexes for table `reject`
--
ALTER TABLE `reject`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `enroll` (`enroll`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`rid`),
  ADD UNIQUE KEY `enroll` (`enroll`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `enroll` (`enroll`);

--
-- Indexes for table `stud_login`
--
ALTER TABLE `stud_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rno` (`rno`),
  ADD UNIQUE KEY `enroll` (`enroll`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pdf`
--
ALTER TABLE `pdf`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `reject`
--
ALTER TABLE `reject`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `rid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stud_login`
--
ALTER TABLE `stud_login`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
