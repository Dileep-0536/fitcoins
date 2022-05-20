-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2020 at 03:53 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitcons`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `activity_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='activities master';

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`activity_id`, `name`, `status`, `created_on`) VALUES
(1, 'Running', 1, '2020-09-23 11:05:09'),
(2, 'Cycling', 1, '2020-09-23 11:05:09'),
(3, 'Aerobics', 1, '2020-09-23 11:05:09'),
(4, 'Dancing', 1, '2020-09-23 11:05:09'),
(5, 'Swimming', 1, '2020-09-23 11:05:09'),
(6, 'Walking', 1, '2020-09-23 11:05:09'),
(7, 'Yoga', 1, '2020-09-23 11:05:09'),
(8, 'Gym', 1, '2020-09-23 11:05:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `role` enum('admin','user') DEFAULT 'user',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='users details';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `mobile`, `email`, `city`, `password`, `dob`, `gender`, `role`, `status`, `created_on`) VALUES
(1, 'Admin', 'Master', '9988776655', 'siva@gmail.com', 'visakhapatnam', 'e10adc3949ba59abbe56e057f20f883e', '1997-12-02', 'male', 'admin', 1, '2020-09-23 13:08:51'),
(2, 'kiran', 'kumar', '9879879879', 'kiran@gmail.com', 'visakhapatnam', 'e10adc3949ba59abbe56e057f20f883e', '1999-09-02', 'male', 'user', 0, '2020-09-24 16:10:14'),
(3, 'lalitha', 'sivabalaji', '8309556655', 'sony@gmail.com', 'Rajahmundry', 'e10adc3949ba59abbe56e057f20f883e', '1997-10-16', 'female', 'user', 1, '2020-09-27 18:13:14'),
(4, 'murali ', 'krishna', '9887788777', 'murali@gmail.com', 'Visakhapatnam', 'e10adc3949ba59abbe56e057f20f883e', '1998-09-04', 'male', 'user', 1, '2020-09-27 18:34:08'),
(5, 'chandu', 'kiladi', '83092226127', 'chandu@gmail.com', 'rajahmundry', 'e10adc3949ba59abbe56e057f20f883e', '2020-09-18', 'male', 'user', 1, '2020-09-29 15:00:36'),
(6, 'Ramya', 'Junnuri', '8688812345', 'ramyaj@gmail.com', 'Guntur', 'e10adc3949ba59abbe56e057f20f883e', '2020-09-10', 'female', 'user', 0, '2020-09-29 15:01:58');

-- --------------------------------------------------------

--
-- Table structure for table `user_activities`
--

CREATE TABLE `user_activities` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activity_id` int(11) NOT NULL,
  `distance` int(11) DEFAULT NULL COMMENT 'in meters',
  `time` int(11) NOT NULL COMMENT 'in minutes',
  `date` date NOT NULL,
  `route` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='users and their activities';

--
-- Dumping data for table `user_activities`
--

INSERT INTO `user_activities` (`id`, `user_id`, `activity_id`, `distance`, `time`, `date`, `route`, `status`, `created_on`) VALUES
(2, 3, 4, 0, 45, '0000-00-00', '', 1, '2020-09-29 16:31:44'),
(4, 3, 3, 0, 123, '0000-00-00', '', 1, '2020-09-29 16:36:18'),
(5, 3, 2, 240, 30, '2020-09-29', 'Visakapatnam Road', 1, '2020-09-29 16:39:52'),
(6, 3, 1, 500, 120, '2020-09-30', 'Rk Beach House Road', 1, '2020-09-30 10:47:00'),
(7, 3, 3, 0, 45, '2020-09-22', '', 1, '2020-09-30 10:47:39'),
(8, 3, 2, 123, 34, '2020-09-29', 'Kailashagiri Marg', 1, '2020-09-30 11:27:08'),
(9, 3, 7, 0, 123, '2020-09-15', '', 1, '2020-09-30 11:27:43'),
(10, 2, 1, 122, 12, '2020-09-22', 'test case', 1, '2020-09-30 12:02:20'),
(11, 2, 2, 11, 123, '2020-09-29', 'qweqweqweqwe', 1, '2020-09-30 12:02:40'),
(12, 2, 3, 0, 43, '2020-09-14', '', 1, '2020-09-30 12:02:57'),
(13, 2, 3, 0, 32, '2020-09-07', '', 1, '2020-09-30 12:03:13'),
(14, 2, 4, 0, 234, '2020-09-29', '', 1, '2020-09-30 12:03:50'),
(15, 2, 5, 0, 45, '2020-08-24', '', 1, '2020-09-30 12:04:04'),
(16, 2, 6, 567, 65, '2020-07-22', 'test case data', 1, '2020-09-30 12:04:45'),
(17, 2, 7, 0, 78, '2020-06-11', '', 1, '2020-09-30 12:05:06'),
(18, 2, 8, 0, 98, '2020-09-08', '', 1, '2020-09-30 12:05:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`activity_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_activities`
--
ALTER TABLE `user_activities`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `activity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_activities`
--
ALTER TABLE `user_activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
