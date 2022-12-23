-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2022 at 08:08 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `movie` varchar(100) NOT NULL,
  `actor` varchar(100) NOT NULL,
  `director` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `movie`, `actor`, `director`, `type`, `year`, `uname`) VALUES
(1, 'drishyam 2', 'ajay', 'ajay', 'planning', '2022', 'ravi123'),
(3, 'karan arjun', 'karan', 'karan', 'planning', '2015', 'ravi123');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `cu_id` int(11) NOT NULL,
  `cu_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`cu_id`, `cu_name`) VALUES
(1, 'india'),
(2, 'america');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(11) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `hobby` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `uname`, `pass`, `fname`, `mname`, `lname`, `email`, `phone`, `address`, `country`, `filename`, `hobby`, `status`) VALUES
(1, 'ravi123', '123', 'vjhvf', 'jhfhj', 'hjjhh', 'ravi18@gmail.com', '5678', 'jfy', '1', '', 'cricket', 'Enable'),
(2, 'mayur123', '123', 'ffgfjgj', 'gcdghc', 'hdhg', 'vaibhavkachhad@gmail.com', '576878', 'fhgfhjguh', '1', '', 'cricket', 'Enable'),
(3, 'mayur', '123', 'hjffyjhgv', 'fhgfhkf', 'gsgdfgdfgdgfdgdfgfdgfdgdgdgfdg', 'movaliyamayur007@gmail.com', '45787', '', '1', '', 'cricket,vollyball,hocky,football', 'Enable'),
(5, 'ravi', '123', 'gjfygy', 'hfhgffgh', 'gghfgfhgf', 'ravi18@gmail.com', '0123456789', '', '2', '', 'cricket', 'Enable'),
(19, 'ravi6666', 'gdg', 'gfdg', 'dfg', 'fgdg', 'ravo18@gmail.com', '455', 'gfdgdg', '1', '', 'cricket,vollyball,hocky,football', 'Enable'),
(20, 'mayur66666', 'fgfdg', 'fgfdg', 'gdfg', 'fgdg', 'ravo18@gmail.com', '456546546', 'fgdgfdg', '1', '', 'cricket,vollyball,hocky', 'Enable'),
(22, 'sdfdsf', 'dfsfs', 'sdfsf', 'dsfs', 'sdfs', 'ravi18@gmail.com', '4543', 'sdfs', '1', '', 'cricket,hocky', 'Enable'),
(26, 'dfdsf', 'dsfs', 'ffs', 'fdsfsdfs', 'sdfds', 'ravo18@gmail.com', '4545', 'dsff', '1', '', 'cricket,vollyball,hocky,football', 'Enable'),
(28, 'fdsfs', 'sdfds', 'dsfs', 'dfs', 'df', 'ravo18@gmail.com', '34535', 'sdfsf', '1', '', 'cricket', 'Enable');

-- --------------------------------------------------------

--
-- Table structure for table `superreg`
--

CREATE TABLE `superreg` (
  `id` int(11) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `hobby` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `superreg`
--

INSERT INTO `superreg` (`id`, `uname`, `password`, `fname`, `mname`, `lname`, `email`, `phone`, `address`, `country`, `hobby`) VALUES
(1, 'ravi790707', '123456', 'ravi', 'uu', 'bib', 'ravi18@gmail.com', '487984', 'tyffy', '1', 'cricket');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`cu_id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superreg`
--
ALTER TABLE `superreg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `cu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `superreg`
--
ALTER TABLE `superreg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
