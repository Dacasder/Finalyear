-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2020 at 01:05 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sams`
--

-- --------------------------------------------------------

--
-- Table structure for table `assi`
--

CREATE TABLE `assi` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `content` varchar(3000) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assi`
--

INSERT INTO `assi` (`id`, `title`, `content`, `course_id`) VALUES
(1, 'Warm Up assignment', 'Create a file called HelloWorld.java, and in this file, declare a class called HelloWorld. This class\r\nshould define only one method called main(). In the body of this method, use System.out.println()\r\nto display “Hello world\"', 1),
(2, 'Bonus Assignment', 'Create a file called A.java, and in this file, declare a class called A. This class should define only one\r\nmethod called main(). In the body of this method, use System.out.println() to display the following\r\npattern:\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ass_scores`
--

CREATE TABLE `ass_scores` (
  `id` int(11) NOT NULL,
  `assignment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ass_scores`
--

INSERT INTO `ass_scores` (`id`, `assignment_id`, `user_id`, `score`) VALUES
(1, 1, 7, 10),
(2, 2, 7, 10);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `ass` int(11) NOT NULL,
  `lecturer_id` varchar(225) NOT NULL,
  `student_id` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `ass`, `lecturer_id`, `student_id`) VALUES
(1, 'cosc 101', 0, '8', '7'),
(3, 'cosc102', 0, '8', '7'),
(4, 'cocs103', 0, '8', '7'),
(5, 'cosc104', 0, '8', '7'),
(6, 'cocs105', 0, '8', '7');

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ca_score` int(11) NOT NULL,
  `exam_score` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `grade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `course_id`, `user_id`, `ca_score`, `exam_score`, `total`, `grade`) VALUES
(1, 1, 7, 30, 69, 99, 5),
(2, 3, 7, 0, 0, 99, 5);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(11) NOT NULL,
  `qiuz` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `qiuz`, `course_id`, `score`, `user_id`) VALUES
(1, 1, 1, 10, 7),
(2, 1, 3, 8, 7);

-- --------------------------------------------------------

--
-- Table structure for table `submission`
--

CREATE TABLE `submission` (
  `id` int(11) NOT NULL,
  `assignment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `submission` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submission`
--

INSERT INTO `submission` (`id`, `assignment_id`, `user_id`, `submission`) VALUES
(1, 1, 7, 'submissions/welcome.html');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(225) NOT NULL,
  `class` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `birthday`, `gender`, `class`, `image`) VALUES
(7, 'Kayode Soliu', 'soliupeter@gmail.com', '$2y$10$UBx9r0jM0cIUo9NJtwHq5uhMkncdvdjLEL5JG40Xhs9TapezFDk0y', '2020-05-02', 'Female', 'Student', 'img/id/IMG_3908 (1).JPG'),
(8, 'Niniola Gbalogun', 'Niniola@gmail.com', '$2y$10$srzYSTKPfjcYcrm.Wabpce/JoU/TFp87XMeIhFb2pprSg6qximKsq', '1970-01-01', 'Female', 'Lecturer', 'img/id/IMG_3775.JPG'),
(9, 'Tolu Obasanjo', 'Toluobasanjo@gmail.con', '$2y$10$g9oovmNdStlSr7o2xx7q7uQL2pnzWN94HELhyaYATe3XjvkMu39Ay', '1970-01-01', 'Male', 'Student', 'img/id/AIOT1163.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assi`
--
ALTER TABLE `assi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ass_scores`
--
ALTER TABLE `ass_scores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submission`
--
ALTER TABLE `submission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assi`
--
ALTER TABLE `assi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ass_scores`
--
ALTER TABLE `ass_scores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `submission`
--
ALTER TABLE `submission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
