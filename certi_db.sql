-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 03, 2022 at 06:53 AM
-- Server version: 8.0.21
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
  `batch_id` int NOT NULL,
  `course_id` int NOT NULL,
  `year` int NOT NULL,
  `Sdate` int NOT NULL,
  `Edate` int NOT NULL,
  `incharg` varchar(10) NOT NULL,
  `sem_id` int NOT NULL,
  PRIMARY KEY (`batch_id`),
  KEY `course_id` (`course_id`),
  KEY `sem_id` (`sem_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `course_id` int NOT NULL AUTO_INCREMENT,
  `course` varchar(25) NOT NULL,
  `duration` int NOT NULL,
  `staff_id` int NOT NULL,
  `dept_id` int NOT NULL,
  PRIMARY KEY (`course_id`),
  KEY `staff_id` (`staff_id`),
  KEY `dept_id` (`dept_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `dept_id` int NOT NULL AUTO_INCREMENT,
  `deptname` varchar(25) NOT NULL,
  `HOD` varchar(20) NOT NULL,
  `extnum` double NOT NULL,
  `code` varchar(2) NOT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
  `phone` int NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

DROP TABLE IF EXISTS `semester`;
CREATE TABLE IF NOT EXISTS `semester` (
  `sem_id` int NOT NULL,
  `Csem` int NOT NULL,
  `Tsem` int NOT NULL,
  PRIMARY KEY (`sem_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `staff_id` int NOT NULL AUTO_INCREMENT,
  `Sname` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usertype` varchar(10) NOT NULL,
  `dept_id` int NOT NULL,
  `email` varchar(100) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  PRIMARY KEY (`staff_id`),
  KEY `dept_id` (`dept_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `Sname`, `password`, `usertype`, `dept_id`, `email`, `avatar`) VALUES
(26, 'alias', '25d55ad283aa400af464c76d713c07ad', 'principal', 1, 'alias@gmail.com', '1646289852Screenshot (3).png'),
(27, 'Admin', '202cb962ac59075b964b07152d234b70', 'principal', 1, 'ashikmartin5@gamil.com', '1646289889Screenshot (2).png'),
(28, 'Adminter', '202cb962ac59075b964b07152d234b70', 'principal', 1, 'fasnanaurin568@gmail.com', '1646290036Screenshot (7).png'),
(29, 'dq', '202cb962ac59075b964b07152d234b70', 'principal', 1, 'leebanbabu1@gmail.com', '1646290190download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `stud_id` int NOT NULL AUTO_INCREMENT,
  `studname` varchar(25) NOT NULL,
  `batch_id` int NOT NULL,
  `studaddress` varchar(50) NOT NULL,
  `studemail` varchar(30) NOT NULL,
  `studphone` int NOT NULL,
  `Csem` int NOT NULL,
  `disjion` varchar(15) NOT NULL,
  PRIMARY KEY (`stud_id`),
  KEY `batch_id` (`batch_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
