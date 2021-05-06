-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2021 at 10:09 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internship`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment1`
--

CREATE TABLE `assignment1` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` text NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignment1`
--

INSERT INTO `assignment1` (`id`, `name`, `email`, `image`, `status`) VALUES
(3, 'Faizal', 'faiz@123.com', 'upload/ken1.jpg', 'Approved'),
(4, 'Faizal', 'faiz@123.com', 'upload/ken1.jpg', 'Approved'),
(61, 'ABC', 'evan123@gmail.com', 'upload/one.jpg', 'Approved'),
(71, 'Nithisha Jain', 'nitz@gmail.com', 'upload/WhatsApp Image 2020-06-11 at 12.57.25 PM (1).jpeg', 'Declined'),
(86, 'Shreya', 'linda@helloleads.io', 'upload/Sketch.png', 'Declined'),
(87, 'Kohli', 'kohli@rcb.com', 'upload/Levi.jpg', 'Decline'),
(96, 'Rishi', 'rish@ig.com', 'upload/WhatsApp Image 2020-06-11 at 12.57.25 PM (1).jpeg', 'Decline'),
(97, 'Deepa', 'deepa@ig.com', 'upload/WhatsApp Image 2020-06-11 at 12.57.25 PM (1).jpeg', 'Declined'),
(98, 'Rishitha', 'rish@igo.com', 'upload/two.jpg', 'Pending'),
(99, 'Harshitha', 'harshi1208@yahoo.com', 'upload/two.jpg', 'Declined');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignment1`
--
ALTER TABLE `assignment1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignment1`
--
ALTER TABLE `assignment1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
