-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2019 at 01:26 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `photo`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutpage`
--

CREATE TABLE `aboutpage` (
  `id` int(11) NOT NULL,
  `user_id` int(100) NOT NULL,
  `maintext` varchar(1000) NOT NULL,
  `text2` text NOT NULL,
  `aboutimage` text NOT NULL,
  `alt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutpage`
--

INSERT INTO `aboutpage` (`id`, `user_id`, `maintext`, `text2`, `aboutimage`, `alt`) VALUES
(1, 5, 'Bitcoin is divisible to eight decimal places 2', 'Bitcoin is designed around the idea of using cryptography to control the creation and transfer of money in any time. 2', '02.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

CREATE TABLE `homepage` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `bannermaintext` text NOT NULL,
  `bannertext` text NOT NULL,
  `buttontext` varchar(1000) NOT NULL,
  `buttonhref` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`id`, `user_id`, `bannermaintext`, `bannertext`, `buttontext`, `buttonhref`) VALUES
(2, '5', 'shubham ralli', 'Bitcoin is designed around the idea of using cryptography to control the creation and transfer of money in any time.', 'See how it works ', 'https://www.facebook.com/');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `domain` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `logo` varchar(100) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `password`, `domain`, `status`, `logo`) VALUES
(5, 'shubham', 'ralli', 'sralli73@gmail.com', '123', 'shubham', '1', '1'),
(11, 'nitika', 'ralli', 'nitika@gmail.com', '123', 'nitika', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `webshow`
--

CREATE TABLE `webshow` (
  `id` int(11) NOT NULL,
  `user_id` int(100) NOT NULL,
  `about` varchar(100) NOT NULL,
  `gallery` varchar(100) NOT NULL,
  `team` varchar(100) NOT NULL,
  `blog` varchar(100) NOT NULL,
  `service` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webshow`
--

INSERT INTO `webshow` (`id`, `user_id`, `about`, `gallery`, `team`, `blog`, `service`) VALUES
(7, 5, '2', '2', '2', '2', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutpage`
--
ALTER TABLE `aboutpage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepage`
--
ALTER TABLE `homepage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webshow`
--
ALTER TABLE `webshow`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutpage`
--
ALTER TABLE `aboutpage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `homepage`
--
ALTER TABLE `homepage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `webshow`
--
ALTER TABLE `webshow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
