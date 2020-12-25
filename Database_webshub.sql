-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2020 at 05:49 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webshub`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` mediumint(9) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `USER_TYPE` varchar(50) DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `USER_TYPE`) VALUES
(1000, 'abc@gmail.com', '12345678', 'user'),
(1001, 'ab@gmail.com', '1111', 'Admin'),
(1002, 'SUNNY@GMAIL.COM', '12345', 'user'),
(1003, 'sagir@gmail.com', '22222', 'Admin'),
(1004, 'neeraj@gmail.com', 'neeraj', 'user'),
(1005, 'id@gmail.com', 'id', 'user'),
(1006, 'Admin@gmail.com', 'admin', 'Admin'),
(1007, 'dec@gmail.com', 'dec', 'user'),
(1008, 'jan@gmail.com', 'jan', 'Admin'),
(1009, 'test12@gmail.com', 'test', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `webupload`
--

CREATE TABLE `webupload` (
  `id` int(23) NOT NULL,
  `name` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `season` int(25) NOT NULL,
  `episode` int(24) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `imdb` varchar(255) NOT NULL,
  `imageinput` varchar(255) NOT NULL,
  `videoinput` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `webupload`
--

INSERT INTO `webupload` (`id`, `name`, `genre`, `season`, `episode`, `duration`, `rating`, `imdb`, `imageinput`, `videoinput`) VALUES
(30, 'MR. ROBOT', 'Thriller', 6, 10, '55 MIN APROX', '4 star', '3 star', 'mrrobot.jpg', 'Pal Pal Dil Ke Paas – Title Song - Lyrical - Karan Deol, Sahher Bambba - Arijit Singh, Parampara.webm'),
(41, 'Flash ', 'Sci-fi/Fantacy', 3, 4, '50 min aprox', '2 star', '4 star', '220px-The_Flash_season_7.jpg', 'The Flash Season 7 - Official Trailer - DC FanDome - YouTube.mkv'),
(43, 'Mirjapur Seassion 2', 'Drama', 2, 10, '48 min aprox', '4 star', '3 star', 'mirzapur.jpg', 'Mirzapur season 2 - Official trailer - realease date - Hanna web series promotion.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webupload`
--
ALTER TABLE `webupload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1010;

--
-- AUTO_INCREMENT for table `webupload`
--
ALTER TABLE `webupload`
  MODIFY `id` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
