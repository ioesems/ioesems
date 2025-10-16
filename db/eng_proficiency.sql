-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:8081
-- Generation Time: Oct 15, 2025 at 07:14 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eng_proficiency`
--

-- --------------------------------------------------------

--
-- Table structure for table `test_results`
--

CREATE TABLE `test_results` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `original_text` text NOT NULL,
  `basic_correction` text DEFAULT NULL,
  `medium_correction` text DEFAULT NULL,
  `high_professional_correction` text DEFAULT NULL,
  `spelling_percent` decimal(5,2) DEFAULT NULL,
  `grammar_percent` decimal(5,2) DEFAULT NULL,
  `subject_verb_percent` decimal(5,2) DEFAULT NULL,
  `article_percent` decimal(5,2) DEFAULT NULL,
  `other_mistakes_percent` decimal(5,2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test_results`
--

INSERT INTO `test_results` (`id`, `user_id`, `title`, `original_text`, `basic_correction`, `medium_correction`, `high_professional_correction`, `spelling_percent`, `grammar_percent`, `subject_verb_percent`, `article_percent`, `other_mistakes_percent`, `created_at`) VALUES
(1, 1, 'sdada', 'adsdafaf', 'The text \"adsdafaf\" does not form a recognizable English word or phrase.', 'It appears to be a sequence of random characters, possibly typed in error.', 'The input \"adsdafaf\" seems to be a nonsensical string of characters and does not convey any meaningful message in English.', 100.00, 100.00, 0.00, 0.00, 100.00, '2025-09-18 01:42:53'),
(3, 2, 'test', 'test is the crucial part of life . it is necessary for all individual people living in the world ', 'A test is a crucial part of life. It is necessary for all individuals living in the world.', 'Testing is a crucial aspect of life, and it is essential for all individuals living in the world.', 'Undertaking tests is a vital component of life, and it is indispensable for all individuals residing in the world, as it fosters personal growth, assesses knowledge, and promotes self-improvement.', 0.00, 60.00, 0.00, 50.00, 40.00, '2025-09-18 01:46:50'),
(18, 2, 'Think ', 'Thinking is important for none', 'Thinking is important for everyone', 'Thinking is essential for everyone', 'Critical thinking is crucial for individuals to make informed decisions and navigate complex situations effectively', 0.00, 50.00, 0.00, 0.00, 50.00, '2025-09-18 03:28:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'mkm', 'mukeshsingh98121159@gmail.com', '$2y$10$mdZWWux1bWyJ1IHF.dH/YOwOVCY92FAnKOZ63eR0N.T0gHQjurqBy', '2025-09-18 01:36:00'),
(2, 'ioe', 'ioesems@gmail.com', '$2y$10$6ZmyF1Zj7PaiQ3XmOGpun.sircsi67gYzq6v6nyNCCIwt3kqVrEOS', '2025-09-18 01:45:43'),
(3, '5', 'mukeshsingh9812115@gmail.com', '$2y$10$0FXQpHvpPJ4arL1GyBQMt.iClU4MqGCPUWSa6hIlptEztak16Hlxa', '2025-09-18 02:25:05');

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `real_name` varchar(100) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `profile_picture` varchar(255) DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `test_results`
--
ALTER TABLE `test_results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `test_results`
--
ALTER TABLE `test_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `test_results`
--
ALTER TABLE `test_results`
  ADD CONSTRAINT `test_results_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD CONSTRAINT `user_profiles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
