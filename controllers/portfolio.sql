-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2022 at 04:05 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `anti`
--

CREATE TABLE `anti` (
  `user282200123` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `password282200123` varchar(100) COLLATE armscii8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `anti`
--

INSERT INTO `anti` (`user282200123`, `password282200123`) VALUES
('Dev@Scimail.com', '$2y$10$kdq8q13pElqQNsZm3Ujoxuldk9jhslRjIaAxa1c4vTsFZGfJ6tRzq');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) UNSIGNED NOT NULL,
  `img1` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `topic` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `textbox` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) UNSIGNED NOT NULL,
  `mail` varchar(10000) COLLATE armscii8_bin NOT NULL,
  `name` varchar(10000) COLLATE armscii8_bin NOT NULL,
  `post_id` varchar(100) COLLATE armscii8_bin NOT NULL,
  `comment` mediumtext CHARACTER SET utf8mb4 NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `mail`, `name`, `post_id`, `comment`, `date`) VALUES
(1, 'durallite@gmail.com', 'okorosha', '2', 'making it easy guy u dey try ur best', '2022-02-10 19:20:43'),
(2, 'durallite@gmail.com', 'ademola aduragbemi', '2', 'new potggh y y', '2022-02-20 01:01:57');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `phone` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `name` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `message` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `email`, `phone`, `name`, `message`, `date`) VALUES
(1, 'durallite@gmail.com', '07026626851', 'ademola aduragbemi', 'hhhh', '2022-05-05 19:47:12'),
(2, 'durallite@gmail.com', '07026626851', 'ademola', 'we are o n texting the sms', '2022-05-05 19:58:40'),
(3, 'gg@gmail.com', '0702 662 6851', 'ADUMOLA', 'CONTACT\r\nLocation:\r\nA108 Adam Street, New York, NY 535022\r\n\r\nEmail:\r\ninfo@example.com\r\n\r\nCall:', '2022-05-05 20:01:55');

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE `cv` (
  `cvfile` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `cv`
--

INSERT INTO `cv` (`cvfile`, `date`) VALUES
('sample.pdf', '2022-02-11 10:29:06');

-- --------------------------------------------------------

--
-- Table structure for table `c_count`
--

CREATE TABLE `c_count` (
  `id` int(11) UNSIGNED NOT NULL,
  `count` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `c_count`
--

INSERT INTO `c_count` (`id`, `count`, `date`) VALUES
(1, '0', '2022-05-05 20:01:59');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) UNSIGNED NOT NULL,
  `banner` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `folder` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `proNmae` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `cat` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `id` int(11) UNSIGNED NOT NULL,
  `img1` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `name` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id`, `img1`, `name`, `date`) VALUES
(0, '@Space-package1644572350371104607.jpg', 'pako.js', '2022-02-11 09:39:10');

-- --------------------------------------------------------

--
-- Table structure for table `soci`
--

CREATE TABLE `soci` (
  `wat` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `fb` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `inst` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `Phone` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `TWEETER` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `linke` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `email` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `adress` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `soci`
--

INSERT INTO `soci` (`wat`, `fb`, `inst`, `Phone`, `TWEETER`, `linke`, `email`, `adress`, `date`) VALUES
('http://localhost/topKonect%20v0.3/_.php?id=21', 'http://localhost/topKonect%20v0.3/_.php?id=21', 'http://localhost/topKonect%20v0.3/_.php?id=21', '07026626851', 'http://localhost/topKonect%20v0.3/_.php?id=21', 'http://localhost/topKonect%20v0.3/_.php?id=21', 'Durallite@Gmail.Com', 'Mumbai, India - 400104\n\nMumbai, India - 400104', '2022-02-16 14:53:32');

-- --------------------------------------------------------

--
-- Table structure for table `track`
--

CREATE TABLE `track` (
  `id` int(11) UNSIGNED NOT NULL,
  `post_id` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `user_ip` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `track`
--

INSERT INTO `track` (`id`, `post_id`, `user_ip`, `date`) VALUES
(1, '2', 'DESKTOP-PG18R1E\r\n', '2022-02-10 19:10:37'),
(2, '2', 'Netpacks\r\n', '2022-05-05 20:20:40'),
(3, 'ZAAZOO', 'Netpacks\r\n', '2022-05-05 20:28:19');

-- --------------------------------------------------------

--
-- Table structure for table `webd`
--

CREATE TABLE `webd` (
  `id` int(11) UNSIGNED NOT NULL,
  `img1` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `img2` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `img3` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `webname` mediumtext CHARACTER SET utf8mb4 NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `webd`
--

INSERT INTO `webd` (`id`, `img1`, `img2`, `img3`, `webname`, `date`) VALUES
(1, '@Space-package16517433661705020712.jpg', '@Space-package16517433662047458107.jpg', '@Space-package1651743367131530132.jpg', 'Durallite', '2022-05-05 09:36:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_count`
--
ALTER TABLE `c_count`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `track`
--
ALTER TABLE `track`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `c_count`
--
ALTER TABLE `c_count`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `track`
--
ALTER TABLE `track`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
