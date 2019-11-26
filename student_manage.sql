-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 26, 2019 at 02:41 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_manage`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `unit_id` varchar(255) NOT NULL,
  `student_id` int(11) NOT NULL,
  `lecturer` varchar(255) NOT NULL,
  `total_hours` int(11) DEFAULT NULL,
  `hours_taught` int(11) DEFAULT NULL,
  `attended_hours` int(11) DEFAULT NULL,
  `percentage_absent` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`unit_id`, `student_id`, `lecturer`, `total_hours`, `hours_taught`, `attended_hours`, `percentage_absent`) VALUES
('ICS 1201', 10929, '9807', 72, 38, 23, NULL),
('ICS 1202', 10929, '9807', 72, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `id_number` int(11) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `other_names` varchar(255) NOT NULL,
  `unit_taking` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`id_number`, `surname`, `other_names`, `unit_taking`, `email`, `password`) VALUES
(9807, 'Omondi', 'Kevin', 'ICS 1201', 'komondi@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_number` int(11) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `other_names` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `prev_school` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_number`, `surname`, `other_names`, `dob`, `phone`, `email`, `prev_school`, `religion`, `course`, `password`, `image`) VALUES
(10929, 'Ouda', 'Wycliffe', '2005-12-25', '7467645030', 'ouda.wycliffe@gmail.com', 'St. Mary\'s School', 'Christianity', 'Computer Scince', '1234', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_registered`
--

CREATE TABLE `student_registered` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `unit_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_registered`
--

INSERT INTO `student_registered` (`id`, `student_id`, `unit_id`) VALUES
(1, 10929, 'ICS 1201');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `unit_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lect` varchar(255) NOT NULL,
  `contact_hours` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`unit_id`, `name`, `lect`, `contact_hours`) VALUES
('ICS 1201', 'Data Structures and Algorithm', 'Kevin Omondi', 75);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD UNIQUE KEY `unit_id` (`unit_id`);

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`id_number`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_number`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `student_registered`
--
ALTER TABLE `student_registered`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD UNIQUE KEY `unit_id` (`unit_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_registered`
--
ALTER TABLE `student_registered`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
