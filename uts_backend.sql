-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2024 at 10:15 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts_backend`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` varchar(40) NOT NULL,
  `game_start` datetime NOT NULL DEFAULT current_timestamp(),
  `submit_time` datetime DEFAULT NULL,
  `remaining_time` int(11) NOT NULL,
  `player_id` int(11) NOT NULL,
  `score` int(11) NOT NULL DEFAULT 0,
  `timeout` tinyint(1) NOT NULL DEFAULT 0,
  `is_answered` tinyint(1) NOT NULL DEFAULT 0,
  `create_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `game_start`, `submit_time`, `remaining_time`, `player_id`, `score`, `timeout`, `is_answered`, `create_time`) VALUES
('25d4c666-0351-4af3-96cf-2a828cfb286e', '2024-05-01 14:18:49', '2024-05-01 08:19:00', 21589, 4, 0, 1, 1, '2024-05-01 14:18:49'),
('4931ffbf-f024-4df7-b8a0-3b4bcc2b5f75', '2024-05-01 13:10:31', NULL, 0, 4, 0, 0, 0, '2024-05-01 13:10:31'),
('4b577f59-4f10-43be-9c94-45afdf5b698c', '2024-05-01 16:09:15', '2024-05-01 16:09:31', 16, 5, 30, 0, 1, '2024-05-01 16:09:15'),
('a87660f9-5445-44b3-9b64-bdd9a47eb19c', '2024-05-01 14:30:53', '2024-05-01 14:31:08', 15, 4, 0, 0, 1, '2024-05-01 14:30:53'),
('aa5c7e05-337e-455c-83b3-5a9f23462019', '2024-05-01 14:36:55', '2024-05-01 14:37:14', 19, 4, 20, 0, 1, '2024-05-01 14:36:55'),
('b02153d2-ecad-4fca-ac9a-29963c6df686', '2024-05-01 14:38:33', '2024-05-01 14:38:50', 17, 4, 20, 0, 1, '2024-05-01 14:38:33'),
('bee63052-7278-4538-af9f-ae69ae563409', '2024-05-01 13:10:34', '2024-05-01 08:17:41', -17573, 4, 0, 0, 1, '2024-05-01 13:10:34'),
('d38150c1-4bcf-4c8f-bf0a-9ba9ed3c1695', '2024-05-01 13:05:40', NULL, 0, 4, 0, 0, 0, '2024-05-01 13:05:40'),
('d8bb5e6f-8f1d-40f4-94e2-58836039c8f8', '2024-05-01 14:21:28', '2024-05-01 14:22:01', -33, 4, 20, 0, 1, '2024-05-01 14:21:28'),
('dbb8349d-5745-42bb-a047-59d5a5761846', '2024-05-01 14:34:32', '2024-05-01 14:34:53', 21, 4, 0, 0, 1, '2024-05-01 14:34:32');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `operand_1` int(11) NOT NULL,
  `operand_2` int(11) NOT NULL,
  `operator` char(1) NOT NULL,
  `answer` int(11) NOT NULL,
  `player_answer` int(11) DEFAULT NULL,
  `status` enum('Salah','Benar') DEFAULT NULL,
  `game_id` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `operand_1`, `operand_2`, `operator`, `answer`, `player_answer`, `status`, `game_id`) VALUES
(14, 83, 2, 'X', 166, NULL, NULL, 'd38150c1-4bcf-4c8f-bf0a-9ba9ed3c1695'),
(15, 31, 42, '+', 73, NULL, NULL, 'd38150c1-4bcf-4c8f-bf0a-9ba9ed3c1695'),
(16, 42, 69, '-', -27, NULL, NULL, 'd38150c1-4bcf-4c8f-bf0a-9ba9ed3c1695'),
(17, 2, 65, '/', 0, NULL, NULL, 'd38150c1-4bcf-4c8f-bf0a-9ba9ed3c1695'),
(18, 38, 81, '%', 38, NULL, NULL, 'd38150c1-4bcf-4c8f-bf0a-9ba9ed3c1695'),
(19, 13, 86, '%', 1118, NULL, NULL, '4931ffbf-f024-4df7-b8a0-3b4bcc2b5f75'),
(20, 5, 29, '/', 34, NULL, NULL, '4931ffbf-f024-4df7-b8a0-3b4bcc2b5f75'),
(21, 79, 26, '+', 53, NULL, NULL, '4931ffbf-f024-4df7-b8a0-3b4bcc2b5f75'),
(22, 30, 65, '-', 0, NULL, NULL, '4931ffbf-f024-4df7-b8a0-3b4bcc2b5f75'),
(23, 40, 5, 'X', 0, NULL, NULL, '4931ffbf-f024-4df7-b8a0-3b4bcc2b5f75'),
(24, 83, 2, '/', 166, 3, 'Salah', 'bee63052-7278-4538-af9f-ae69ae563409'),
(25, 74, 34, '-', 108, 40, 'Salah', 'bee63052-7278-4538-af9f-ae69ae563409'),
(26, 48, 36, '+', 12, 84, 'Salah', 'bee63052-7278-4538-af9f-ae69ae563409'),
(27, 21, 83, '%', 0, 2, 'Salah', 'bee63052-7278-4538-af9f-ae69ae563409'),
(28, 81, 18, 'X', 9, 3, 'Salah', 'bee63052-7278-4538-af9f-ae69ae563409'),
(29, 22, 82, '+', 1804, 0, 'Salah', '25d4c666-0351-4af3-96cf-2a828cfb286e'),
(30, 29, 84, '-', 113, 0, 'Salah', '25d4c666-0351-4af3-96cf-2a828cfb286e'),
(31, 12, 59, '/', -47, 0, 'Salah', '25d4c666-0351-4af3-96cf-2a828cfb286e'),
(32, 93, 96, '%', 0, 0, 'Salah', '25d4c666-0351-4af3-96cf-2a828cfb286e'),
(33, 31, 92, 'X', 31, 0, 'Salah', '25d4c666-0351-4af3-96cf-2a828cfb286e'),
(34, 55, 57, '%', 3135, 55, 'Salah', 'd8bb5e6f-8f1d-40f4-94e2-58836039c8f8'),
(35, 48, 14, '+', 62, 62, 'Benar', 'd8bb5e6f-8f1d-40f4-94e2-58836039c8f8'),
(36, 91, 28, '-', 63, 62, 'Salah', 'd8bb5e6f-8f1d-40f4-94e2-58836039c8f8'),
(37, 51, 20, '/', 2, 2, 'Benar', 'd8bb5e6f-8f1d-40f4-94e2-58836039c8f8'),
(38, 23, 32, 'X', 23, 4, 'Salah', 'd8bb5e6f-8f1d-40f4-94e2-58836039c8f8'),
(39, 73, 95, 'X', 6935, 4, 'Salah', 'a87660f9-5445-44b3-9b64-bdd9a47eb19c'),
(40, 26, 84, '/', 110, 26, 'Salah', 'a87660f9-5445-44b3-9b64-bdd9a47eb19c'),
(41, 66, 24, '%', 42, 4, 'Salah', 'a87660f9-5445-44b3-9b64-bdd9a47eb19c'),
(42, 88, 56, '-', 1, 32, 'Salah', 'a87660f9-5445-44b3-9b64-bdd9a47eb19c'),
(43, 29, 20, '+', 9, 49, 'Salah', 'a87660f9-5445-44b3-9b64-bdd9a47eb19c'),
(44, 15, 14, 'X', 210, 5, 'Salah', 'dbb8349d-5745-42bb-a047-59d5a5761846'),
(45, 16, 28, '/', 44, 16, 'Salah', 'dbb8349d-5745-42bb-a047-59d5a5761846'),
(46, 34, 48, '-', -14, 1, 'Salah', 'dbb8349d-5745-42bb-a047-59d5a5761846'),
(47, 81, 71, '%', 1, 10, 'Salah', 'dbb8349d-5745-42bb-a047-59d5a5761846'),
(48, 42, 88, '+', 42, 130, 'Salah', 'dbb8349d-5745-42bb-a047-59d5a5761846'),
(49, 56, 34, 'X', 1904, 14, 'Salah', 'aa5c7e05-337e-455c-83b3-5a9f23462019'),
(50, 62, 55, '/', 1, 34, 'Salah', 'aa5c7e05-337e-455c-83b3-5a9f23462019'),
(51, 84, 89, '+', 173, 173, 'Benar', 'aa5c7e05-337e-455c-83b3-5a9f23462019'),
(52, 58, 63, '%', 58, 58, 'Benar', 'aa5c7e05-337e-455c-83b3-5a9f23462019'),
(53, 78, 21, '-', 57, 67, 'Salah', 'aa5c7e05-337e-455c-83b3-5a9f23462019'),
(54, 87, 89, '-', -2, 34, 'Salah', 'b02153d2-ecad-4fca-ac9a-29963c6df686'),
(55, 65, 77, '+', 142, 142, 'Benar', 'b02153d2-ecad-4fca-ac9a-29963c6df686'),
(56, 44, 50, '%', 44, 44, 'Benar', 'b02153d2-ecad-4fca-ac9a-29963c6df686'),
(57, 33, 23, '/', 1, 2, 'Salah', 'b02153d2-ecad-4fca-ac9a-29963c6df686'),
(58, 24, 42, 'X', 1008, 34, 'Salah', 'b02153d2-ecad-4fca-ac9a-29963c6df686'),
(59, 24, 24, '-', 0, 0, 'Benar', '4b577f59-4f10-43be-9c94-45afdf5b698c'),
(60, 70, 26, '/', 3, 1, 'Salah', '4b577f59-4f10-43be-9c94-45afdf5b698c'),
(61, 16, 94, '%', 16, 16, 'Benar', '4b577f59-4f10-43be-9c94-45afdf5b698c'),
(62, 64, 37, '+', 101, 101, 'Benar', '4b577f59-4f10-43be-9c94-45afdf5b698c'),
(63, 74, 44, 'X', 3256, 2, 'Salah', '4b577f59-4f10-43be-9c94-45afdf5b698c');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL COMMENT 'Primary Key',
  `nama` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `create_time` datetime DEFAULT NULL COMMENT 'Create Time'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `create_time`) VALUES
(4, 'Kemz', 'kemz11', 'Kemas30112003', NULL),
(5, 'Jeje', 'jeje8', 'Kemas', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`),
  ADD KEY `player_id` (`player_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `game_id` (`game_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `games`
--
ALTER TABLE `games`
  ADD CONSTRAINT `player_id` FOREIGN KEY (`player_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `game_id` FOREIGN KEY (`game_id`) REFERENCES `games` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
