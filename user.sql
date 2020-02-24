-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 24, 2020 at 09:20 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `housify`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `jina` varchar(255) NOT NULL,
  `numbari` varchar(255) NOT NULL,
  `arafa` varchar(255) NOT NULL,
  `siri` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `jina`, `numbari`, `arafa`, `siri`) VALUES
(2, 'jedidah', '39987377347', '0789654222', 'ksxiiwiiwiwiw'),
(3, 'uxziwi', 'derrrer', '09938939rd', 'eeeeeee'),
(4, 'uxziwi', 'derrrer', '09938939rd', 'eeeeeee'),
(5, 'naomi', 'j@gmail.com', '0729456677', 'ellllaahh'),
(6, 'kinya', 'r@gmail.com', '986545', '12345'),
(7, 'stacy', 's@gmail.com', '23456', '65432'),
(8, 'lisa', 'lisa@gmail.com', '0712345', '12543'),
(9, 'matildah', 'M@gmail.com', '12345678', '01234'),
(10, 'anto', 'a@gmail.com', '76543', 'anto'),
(12, 'janice', 'ja@gmail.com', '54', 'janice'),
(13, 'abdul', 'a@gmail.com', '123', 'abdul');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
