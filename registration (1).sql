-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2019 at 08:00 AM
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
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `uploadfile`
--

CREATE TABLE `uploadfile` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploadfile`
--

INSERT INTO `uploadfile` (`id`, `name`, `size`, `type`, `location`) VALUES
(6, 'PID 4-The Influence of Online Transaction on Increasing the Profit of SMEs Using Structural Equation Modeling.docx', '912193', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'uploads/PID 4-The Influence of Online Transaction on Increasing the Profit of SMEs Using Structural Equation Modeling.docx'),
(7, 'ICT4T_Team Formation_Learn and Make An Effective Team.docx', '755479', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'uploads/ICT4T_Team Formation_Learn and Make An Effective Team.docx'),
(8, 'PID 76.doc', '106496', 'application/msword', 'uploads/PID 76.doc'),
(9, 'CR75.docx', '130121', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'uploads/CR75.docx'),
(10, 'PID 31.doc', '304640', 'application/msword', 'uploads/PID 31.doc');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `typeuser` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `typeuser`) VALUES
(5, 'mumul', 'www@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'reviewer'),
(6, 'kami', 'jgjg@ghgg', '827ccb0eea8a706c4c34a16891f84e7b', 'author'),
(7, 'mul', 'dsdss@gfgg', '827ccb0eea8a706c4c34a16891f84e7b', 'author'),
(8, 'mull', 'mull@hmggmg', '81dc9bdb52d04dc20036dbd8313ed055', 'author'),
(9, 'mulll', 'qwasd@gdff', '202cb962ac59075b964b07152d234b70', 'author'),
(11, 'sapik', 'sapik@gg', '81dc9bdb52d04dc20036dbd8313ed055', 'author'),
(12, 'fitri', 'fff@ff', '81dc9bdb52d04dc20036dbd8313ed055', 'committee'),
(13, 'yana', 'muh@fgg', '202cb962ac59075b964b07152d234b70', 'committee'),
(14, 'yoyo', 'hsgdd@ghfhf.com', '202cb962ac59075b964b07152d234b70', 'committee'),
(15, 'hanis', 'hhhh@hhh', '202cb962ac59075b964b07152d234b70', 'committee'),
(16, 'farah', 'fara_khair@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'committee'),
(17, 'farah khair', 'fara_khaissr@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'committee'),
(18, 'kalsum', 'kal@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'committee'),
(19, 'asd', 'asd@gail.com', '7815696ecbf1c96e6894b779456d330e', 'committee'),
(20, 'joyah', 'joyah@gmail.com', '202cb962ac59075b964b07152d234b70', 'author'),
(21, 'aina', '123@dffff', '202cb962ac59075b964b07152d234b70', 'author');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `uploadfile`
--
ALTER TABLE `uploadfile`
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
-- AUTO_INCREMENT for table `uploadfile`
--
ALTER TABLE `uploadfile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
