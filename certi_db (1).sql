-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 07, 2022 at 09:53 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `certi_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

DROP TABLE IF EXISTS `batch`;
CREATE TABLE IF NOT EXISTS `batch` (
  `batch_id` int(11) NOT NULL AUTO_INCREMENT,
  `year` int(11) NOT NULL,
  `Sdate` date NOT NULL,
  `Edate` date NOT NULL,
  PRIMARY KEY (`batch_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`batch_id`, `year`, `Sdate`, `Edate`) VALUES
(1, 2019, '2019-06-04', '2022-06-04'),
(2, 2020, '2020-07-04', '2023-07-04');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course` varchar(25) NOT NULL,
  `duration` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  PRIMARY KEY (`course_id`),
  KEY `dept_id` (`dept_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course`, `duration`, `dept_id`) VALUES
(1, 'BCA', 3, 1),
(2, 'BSC', 3, 1),
(3, 'BSC HM', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `dept_id` int(11) NOT NULL AUTO_INCREMENT,
  `deptname` varchar(25) NOT NULL,
  `HOD` varchar(20) NOT NULL,
  `extnum` double NOT NULL,
  `code` varchar(2) NOT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `deptname`, `HOD`, `extnum`, `code`) VALUES
(1, 'Computer Science', 'Mr.Jayakrishnan S', 9908146475, 'CS'),
(2, 'Hotel Management', 'Mr.Robert Fernandez', 8748364723, 'HM'),
(3, 'Commerce', 'Dr.Mathew jose', 9147483647, 'CO'),
(4, 'Language', 'Dr.Tessy Poulose', 9455214640, 'LN');

-- --------------------------------------------------------

--
-- Table structure for table `institution`
--

DROP TABLE IF EXISTS `institution`;
CREATE TABLE IF NOT EXISTS `institution` (
  `name` varchar(20) NOT NULL,
  `phone` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

DROP TABLE IF EXISTS `semester`;
CREATE TABLE IF NOT EXISTS `semester` (
  `sem_id` int(11) NOT NULL,
  `Csem` int(11) NOT NULL,
  `Tsem` int(11) NOT NULL,
  PRIMARY KEY (`sem_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `staff_id` int(11) NOT NULL AUTO_INCREMENT,
  `Sname` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usertype` varchar(10) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `batch_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  PRIMARY KEY (`staff_id`),
  KEY `dept_id` (`dept_id`),
  KEY `batch_id` (`batch_id`),
  KEY `course_id` (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `Sname`, `password`, `usertype`, `dept_id`, `batch_id`, `course_id`, `email`, `avatar`) VALUES
(1, 'deepak', '202cb962ac59075b964b07152d234b70', 'teacher', 1, 1, 1, 'ds@gmail.com', '1646587001Screenshot (10).png'),
(2, 'Mr.Jayakrishnan S', '202cb962ac59075b964b07152d234b70', 'HOD', 1, NULL, NULL, 'jai@gmail.com', '1646587242Screenshot (9).png'),
(5, 'siji', '202cb962ac59075b964b07152d234b70', 'teacher', 1, 2, 1, 'siji@gmail.com', '1646629394Screenshot (4).png');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `stud_id` int(11) NOT NULL AUTO_INCREMENT,
  `studname` varchar(25) NOT NULL,
  `spwd` varchar(100) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `studdob` date NOT NULL,
  `studaddress` text NOT NULL,
  `studemail` varchar(30) NOT NULL,
  `studphone` bigint(11) NOT NULL,
  `Csem` int(11) NOT NULL,
  `status` varchar(15) DEFAULT NULL,
  `s_avatar` varchar(100) NOT NULL,
  PRIMARY KEY (`stud_id`),
  KEY `batch_id` (`batch_id`),
  KEY `course_id` (`course_id`),
  KEY `dept_id` (`dept_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stud_id`, `studname`, `spwd`, `batch_id`, `course_id`, `dept_id`, `studdob`, `studaddress`, `studemail`, `studphone`, `Csem`, `status`, `s_avatar`) VALUES
(1, 'ar', '123', 1, 1, 1, '2022-03-17', 'fycirxuuuuu', 'ar@gmail.com', 9089987890, 1, '1', '1646627881Screenshot (9).png'),
(2, 'jrr', '202cb962ac59075b964b07152d234b70', 1, 1, 1, '2001-06-17', 'uyre()fitfiy\r\nigyvu\r\nhh', 'jrr@gmail.com', 2345678909, 2, '1', '1646628154Screenshot (8).png'),
(3, 'eb', '202cb962ac59075b964b07152d234b70', 1, 1, 1, '2022-03-20', 'gkyvit', 'eb@gmail.com', 123, 3, '1', '1646628349Screenshot (5).png'),
(4, 'josh', '81dc9bdb52d04dc20036dbd8313ed055', 2, 1, 1, '2002-02-01', 'lyddxul\r\nyi', 'josh@gmail.com', 3454356788, 1, '1', '1646629492Screenshot (1).png'),
(5, 'joya', '202cb962ac59075b964b07152d234b70', 1, 1, 1, '2002-07-20', 'dqwew\r\nfew', 'joya@gmail.com', 9089898776, 1, '1', '1646640595Screenshot (9).png');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`batch_id`) REFERENCES `batch` (`batch_id`),
  ADD CONSTRAINT `staff_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`),
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
