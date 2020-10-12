-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2020 at 02:04 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vote`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Table structure for table `deadline`
--

CREATE TABLE `deadline` (
  `id` int(11) NOT NULL,
  `title` varchar(90) NOT NULL,
  `dates` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deadline`
--

INSERT INTO `deadline` (`id`, `title`, `dates`) VALUES
(1, 'nsdate', '2020/10/01'),
(2, 'nedate', '2020/10/01'),
(3, 'vsdate', '2020/10/01'),
(4, 'vedate', '2020/10/01');

-- --------------------------------------------------------

--
-- Table structure for table `session_names`
--

CREATE TABLE `session_names` (
  `id` int(11) NOT NULL,
  `title` varchar(90) NOT NULL,
  `word` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `session_names`
--

INSERT INTO `session_names` (`id`, `title`, `word`) VALUES
(1, 'notice', ' Enter notice here...'),
(2, 'div1', 'Best State University in Nigeria'),
(3, 'div2', 'Best Federal University in Nigeria'),
(4, 'div3', 'Best State Polythenic in Nigeria'),
(5, 'div4', 'Best Federal Polythecnic in Nigeria'),
(6, 'div5', 'Best State College of Education in Nigeria'),
(7, 'div6', 'Best Federal College of Education in Nigeria'),
(8, 'div7', 'Best State Secondary School in Nigeria'),
(9, 'div8', 'Best Federal Secondary School in Nigeria'),
(10, 'div9', 'Best Private University in Nigeria'),
(11, 'div10', 'Best Private Secondary School in Nigeria');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `deadline`
--
ALTER TABLE `deadline`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `session_names`
--
ALTER TABLE `session_names`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `deadline`
--
ALTER TABLE `deadline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `session_names`
--
ALTER TABLE `session_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
