-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:8081
-- Generation Time: Oct 15, 2025 at 07:12 PM
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
-- Database: `mcq_test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `daily_test_logs`
--

CREATE TABLE `daily_test_logs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `total_questions` int(11) DEFAULT 20,
  `attempted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `daily_test_logs`
--

INSERT INTO `daily_test_logs` (`id`, `user_id`, `score`, `total_questions`, `attempted_at`) VALUES
(1, 1, 9, 20, '2025-09-19 07:49:23'),
(2, 1, 14, 20, '2025-09-20 08:24:39'),
(3, 2, 8, 20, '2025-09-20 08:45:34'),
(4, 3, 10, 20, '2025-09-20 10:33:27'),
(5, 2, 8, 20, '2025-09-21 03:00:47'),
(6, 6, 4, 20, '2025-09-21 03:15:45');

-- --------------------------------------------------------

--
-- Table structure for table `local_questions`
--

CREATE TABLE `local_questions` (
  `id` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `chapter` varchar(100) NOT NULL,
  `question_text` text NOT NULL,
  `question_image` varchar(255) DEFAULT NULL,
  `option_a` text NOT NULL,
  `option_b` text NOT NULL,
  `option_c` text NOT NULL,
  `option_d` text NOT NULL,
  `correct_answer` enum('A','B','C','D') NOT NULL,
  `explanation` text DEFAULT NULL,
  `explanation_image` varchar(255) DEFAULT NULL,
  `marks` int(11) DEFAULT 1,
  `difficulty` enum('Easy','Medium','Hard') DEFAULT 'Medium',
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `local_questions`
--

INSERT INTO `local_questions` (`id`, `subject`, `chapter`, `question_text`, `question_image`, `option_a`, `option_b`, `option_c`, `option_d`, `correct_answer`, `explanation`, `explanation_image`, `marks`, `difficulty`, `created_by`, `created_at`) VALUES
(1, 'Mathematics', 'Set, Logic and Functions', 'ewrw', NULL, 'wr', 'wr', 'wr', 'er', 'A', 'wer', NULL, 1, 'Medium', 1, '2025-09-20 09:47:43');

-- --------------------------------------------------------

--
-- Table structure for table `question_attempts`
--

CREATE TABLE `question_attempts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `question_text` text NOT NULL,
  `user_choice` varchar(255) DEFAULT NULL,
  `correct_choice` varchar(255) DEFAULT NULL,
  `is_correct` tinyint(1) DEFAULT NULL,
  `attempted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(11) NOT NULL DEFAULT 1,
  `question_source` enum('ai_only','ai_local','local_only') DEFAULT 'ai_only',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `question_source`, `updated_at`) VALUES
(1, 'ai_only', '2025-09-21 03:00:04');

-- --------------------------------------------------------

--
-- Table structure for table `test_results`
--

CREATE TABLE `test_results` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `total_questions` int(11) DEFAULT 20,
  `subject` varchar(50) DEFAULT 'General',
  `chapter` varchar(100) DEFAULT NULL,
  `test_type` enum('daily','set','chapter') DEFAULT 'set',
  `question_count` int(11) DEFAULT 20,
  `attempted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test_results`
--

INSERT INTO `test_results` (`id`, `user_id`, `score`, `total_questions`, `subject`, `chapter`, `test_type`, `question_count`, `attempted_at`) VALUES
(1, 1, 13, 20, 'General', NULL, 'set', 20, '2025-09-19 06:56:22'),
(2, 1, 11, 20, 'General', NULL, 'set', 20, '2025-09-19 06:59:50'),
(3, 1, 1, 5, 'General', NULL, 'set', 5, '2025-09-19 07:13:43'),
(4, 1, 3, 10, 'Mathematics', NULL, 'set', 10, '2025-09-19 07:15:42'),
(5, 1, 2, 5, 'General', NULL, 'set', 5, '2025-09-19 07:20:51'),
(6, 1, 9, 20, 'Daily Challenge', NULL, 'set', 20, '2025-09-19 07:49:23'),
(7, 1, 14, 20, 'Daily Challenge', NULL, 'set', 20, '2025-09-20 08:24:39'),
(8, 1, 4, 5, 'Mathematics', 'Set, Logic and Functions', 'chapter', 5, '2025-09-20 08:25:33'),
(9, 2, 8, 20, 'Daily Challenge', NULL, 'set', 20, '2025-09-20 08:45:34'),
(10, 2, 2, 5, 'Mathematics', 'Set, Logic and Functions', 'chapter', 5, '2025-09-20 09:42:37'),
(11, 2, 3, 5, 'Mathematics', 'Set, Logic and Functions', 'chapter', 5, '2025-09-20 10:07:21'),
(12, 3, 3, 10, 'Mathematics', 'Set, Logic and Functions', 'chapter', 10, '2025-09-20 10:21:09'),
(13, 3, 10, 20, 'Daily Challenge', NULL, 'set', 20, '2025-09-20 10:33:27'),
(14, 3, 3, 5, 'Mathematics', 'Trigonometry', 'chapter', 5, '2025-09-20 12:03:51'),
(15, 2, 8, 20, 'Daily Challenge', NULL, 'daily', 20, '2025-09-21 03:00:47'),
(16, 2, 1, 5, 'Mathematics', 'Set, Logic and Functions', 'chapter', 5, '2025-09-21 03:10:39'),
(17, 2, 3, 5, 'Mathematics', 'Set, Logic and Functions', 'chapter', 5, '2025-09-21 03:11:03'),
(18, 6, 4, 20, 'Daily Challenge', NULL, 'daily', 20, '2025-09-21 03:15:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `is_admin`, `created_at`) VALUES
(1, 'm', 'mukeshsingh98121159@gmail.com', '$2y$10$wEndW3eX40adHAA967oy7.RS3qaiY6aOAHdPFIY/o8pWR.yQIGZBq', 1, '2025-09-19 06:53:55'),
(2, '1', 'ioesems@gmail.com', '$2y$10$oAtmfwuPUyqT96zto6vgTOj8zOwq6aP.bDXGLcH1oqT..6.PwfpAy', 0, '2025-09-20 08:44:58'),
(3, '2', 'pinki.kumari@acme.edu.np', '$2y$10$m8mFDPqygYbv0hTtRwezVOpmb/12dt8FlM7fqRGwWhI52Rampkiii', 0, '2025-09-20 10:10:27'),
(4, '3', 'm@gmail.com', '$2y$10$ZikFLQ2kWdmcB5lOIikj8.6YIhZ8NnHA0D5MQJ8K287FaVXUTwdAq', 0, '2025-09-20 10:23:47'),
(5, '4', 'mk@gmail.com', '$2y$10$Sd1eZ5SkMGS8FPg4FoJxOegMsWY9y9O6cD8KKBxrqYj1a4VrCgSo.', 0, '2025-09-20 10:48:08'),
(6, '6', 'rameshsingh9813@gmail.com', '$2y$10$vUzYVv.AU22OFeUKRTUhve65rX/jPnT43AywuIiqGKAecUJmOIxuy', 0, '2025-09-21 03:15:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daily_test_logs`
--
ALTER TABLE `daily_test_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `local_questions`
--
ALTER TABLE `local_questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `question_attempts`
--
ALTER TABLE `question_attempts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daily_test_logs`
--
ALTER TABLE `daily_test_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `local_questions`
--
ALTER TABLE `local_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `question_attempts`
--
ALTER TABLE `question_attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `test_results`
--
ALTER TABLE `test_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `daily_test_logs`
--
ALTER TABLE `daily_test_logs`
  ADD CONSTRAINT `daily_test_logs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `local_questions`
--
ALTER TABLE `local_questions`
  ADD CONSTRAINT `local_questions_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `question_attempts`
--
ALTER TABLE `question_attempts`
  ADD CONSTRAINT `question_attempts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `test_results`
--
ALTER TABLE `test_results`
  ADD CONSTRAINT `test_results_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
