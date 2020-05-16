-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2020 at 02:18 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sign_in_page`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_list`
--

CREATE TABLE `admin_list` (
  `count` int(11) NOT NULL,
  `full_name` varchar(22) NOT NULL,
  `username` varchar(15) NOT NULL,
  `admin_id` varchar(10) NOT NULL,
  `pass` varchar(12) NOT NULL,
  `contact_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_list`
--

INSERT INTO `admin_list` (`count`, `full_name`, `username`, `admin_id`, `pass`, `contact_no`) VALUES
(10, 'souvik mondal', 'souvik@', 'souvik@202', 'souvik20', '9073525749'),
(11, 'souvik mondal', 'souvik@', 'souvik@202', 'souvik20', '9073525749');

-- --------------------------------------------------------

--
-- Table structure for table `news_letter`
--

CREATE TABLE `news_letter` (
  `em_id` int(11) NOT NULL,
  `email_add` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `processed`
--

CREATE TABLE `processed` (
  `p_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `query` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `processed`
--

INSERT INTO `processed` (`p_id`, `name`, `email_id`, `query`) VALUES
(1, 'souvik mondal', 'marvel.sm.24@gmail.com', 'i have a problem in the css topic'),
(2, 'sisir mondal', 'sisir@gmail.com', 'hello i am sisir mondal'),
(3, 'ram', 'ram@gmail.com', 'hello i can not login with my email address'),
(4, 'souvik mondal', 'marvel.sm.24@gmail.com', 'i have a problem in the css topic'),
(5, 'sisir mondal', 'sisir@gmail.com', 'hello i am sisir mondal'),
(6, 'souvik mondal', 'marvel.sm.24@gmail.com', 'i have a problem in the css topic'),
(7, '', 'marvel.sm.24@gmail.com', 'i have a problem in the css topic'),
(8, 'souvik mondal', 'marvel.sm.24@gmail.com', 'i have a problem in the css topic'),
(9, 'john doue', 'john@gmail.com', 'i have a email validation problem'),
(10, 'sisir mondal', 'sisir@gmail.com', 'hello i am sisir mondal'),
(11, 'souvik mondal', 'marvel.sm.24@gmail.com', 'i have a problem in the css topic');

-- --------------------------------------------------------

--
-- Table structure for table `querypage`
--

CREATE TABLE `querypage` (
  `em_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `query` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subscribe_table`
--

CREATE TABLE `subscribe_table` (
  `em_id` int(11) NOT NULL,
  `email_add` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribe_table`
--

INSERT INTO `subscribe_table` (`em_id`, `email_add`) VALUES
(1, 'marvel.sm.24@gmail.com'),
(2, 'souvik@gmail.com'),
(7, 'alpha@gmail.com'),
(8, 'beta@gmail.com'),
(9, 'gama@gmail.com'),
(10, 'delta@gmail.com'),
(11, 'kalyani@gmail.com'),
(12, 'email@gmail.com'),
(13, 'email@gmail.com'),
(14, 'jkl@gmail.com'),
(15, 'beta@gmail.com'),
(16, 'jklvpg#gmail#@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `full_name` varchar(22) NOT NULL,
  `username` varchar(15) NOT NULL,
  `psw` varchar(15) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `cont_NO` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`full_name`, `username`, `psw`, `email_id`, `cont_NO`) VALUES
('Rudrashish Biswas', 'Rudra@05', '8420701112', 'brudrashish05@gmail.com', '8420701112'),
('admin', 'admin@', 'admin@2020', 'admin@gmail.com', '2356987412'),
('avishek sing', 'avishek@', 'avishek@2020', 'avishek@gmail.com', '2356987412'),
('bishal saha', 'bishal@', 'bishal@2020', 'bynny@gmail.com', '1236547893'),
('monodip day', 'monodip@', 'monodip@2020', 'monodip@gmail.com', '123456971'),
('poltu chondro saha', 'poltithegrate@', 'poltirdim', 'polti@gmail.com', '8965326589'),
('souvik mondal', 'souvik@', 'souvik@2020', 'marvel.sm.24@gmail.com', '9073525749'),
('tuhin kundu', 'tuhin@', 'tuhin@2020', 'tuhin@gmail.com', '1256358950');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_list`
--
ALTER TABLE `admin_list`
  ADD PRIMARY KEY (`count`);

--
-- Indexes for table `news_letter`
--
ALTER TABLE `news_letter`
  ADD PRIMARY KEY (`em_id`);

--
-- Indexes for table `processed`
--
ALTER TABLE `processed`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `querypage`
--
ALTER TABLE `querypage`
  ADD PRIMARY KEY (`em_id`);

--
-- Indexes for table `subscribe_table`
--
ALTER TABLE `subscribe_table`
  ADD PRIMARY KEY (`em_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`psw`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_list`
--
ALTER TABLE `admin_list`
  MODIFY `count` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `news_letter`
--
ALTER TABLE `news_letter`
  MODIFY `em_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `processed`
--
ALTER TABLE `processed`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `querypage`
--
ALTER TABLE `querypage`
  MODIFY `em_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subscribe_table`
--
ALTER TABLE `subscribe_table`
  MODIFY `em_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
