-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:8081
-- Generation Time: Oct 15, 2025 at 07:17 PM
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
-- Database: `ludo_game`
--

-- --------------------------------------------------------

--
-- Table structure for table `game_chat`
--

CREATE TABLE `game_chat` (
  `id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `sent_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `game_chat`
--

INSERT INTO `game_chat` (`id`, `room_id`, `user_id`, `message`, `sent_at`) VALUES
(14, 18, 11, 'ji', '2025-09-21 09:58:02'),
(15, 22, 10, 'hi', '2025-09-21 10:29:29'),
(16, 22, 11, 'how are you', '2025-09-21 10:29:41'),
(17, 23, 11, 'ji', '2025-09-22 04:14:53');

-- --------------------------------------------------------

--
-- Table structure for table `game_moves`
--

CREATE TABLE `game_moves` (
  `id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `player_id` int(11) NOT NULL,
  `move_type` enum('roll','move','enter') NOT NULL,
  `dice_value` int(11) DEFAULT NULL,
  `token_index` int(11) DEFAULT NULL,
  `from_position` int(11) DEFAULT NULL,
  `to_position` int(11) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `game_moves`
--

INSERT INTO `game_moves` (`id`, `room_id`, `player_id`, `move_type`, `dice_value`, `token_index`, `from_position`, `to_position`, `timestamp`) VALUES
(5, 17, 11, 'roll', 5, NULL, NULL, NULL, '2025-09-21 09:55:58'),
(6, 17, 10, 'roll', 5, NULL, NULL, NULL, '2025-09-21 09:56:22'),
(7, 18, 10, 'roll', 3, NULL, NULL, NULL, '2025-09-21 09:57:26'),
(8, 18, 11, 'roll', 6, NULL, NULL, NULL, '2025-09-21 09:57:33'),
(9, 19, 11, 'roll', 6, NULL, NULL, NULL, '2025-09-21 09:59:03'),
(10, 19, 10, 'roll', 1, NULL, NULL, NULL, '2025-09-21 09:59:10'),
(11, 19, 11, 'move', NULL, 1, 0, 1, '2025-09-21 09:59:20'),
(12, 20, 10, 'roll', 3, NULL, NULL, NULL, '2025-09-21 10:00:01'),
(13, 21, 11, 'roll', 2, NULL, NULL, NULL, '2025-09-21 10:00:40'),
(14, 21, 10, 'roll', 2, NULL, NULL, NULL, '2025-09-21 10:00:44'),
(15, 22, 10, 'roll', 1, NULL, NULL, NULL, '2025-09-21 10:27:34'),
(16, 22, 11, 'roll', 2, NULL, NULL, NULL, '2025-09-21 10:27:39'),
(17, 22, 10, 'roll', 3, NULL, NULL, NULL, '2025-09-21 10:28:08'),
(18, 22, 11, 'roll', 6, NULL, NULL, NULL, '2025-09-21 10:28:15'),
(19, 22, 10, 'roll', 6, NULL, NULL, NULL, '2025-09-21 10:28:32'),
(20, 22, 11, 'roll', 2, NULL, NULL, NULL, '2025-09-21 10:28:36'),
(21, 22, 10, 'move', NULL, 1, 0, 1, '2025-09-21 10:28:40'),
(22, 22, 11, 'roll', 6, NULL, NULL, NULL, '2025-09-21 10:28:50'),
(23, 22, 10, 'roll', 1, NULL, NULL, NULL, '2025-09-21 10:28:53'),
(24, 22, 11, 'move', NULL, 0, 0, 1, '2025-09-21 10:28:56'),
(25, 22, 10, 'roll', 2, NULL, NULL, NULL, '2025-09-21 10:29:09'),
(26, 22, 11, 'roll', 2, NULL, NULL, NULL, '2025-09-21 10:29:12'),
(27, 23, 11, 'roll', 3, NULL, NULL, NULL, '2025-09-22 04:14:38'),
(28, 23, 10, 'roll', 5, NULL, NULL, NULL, '2025-09-22 04:14:41');

-- --------------------------------------------------------

--
-- Table structure for table `game_players`
--

CREATE TABLE `game_players` (
  `id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `player_color` enum('red','blue','green','yellow') NOT NULL,
  `position` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT '[]' CHECK (json_valid(`position`)),
  `tokens_home` int(11) DEFAULT 4,
  `tokens_finished` int(11) DEFAULT 0,
  `turn_order` int(11) NOT NULL,
  `is_ready` tinyint(1) DEFAULT 0,
  `joined_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `game_players`
--

INSERT INTO `game_players` (`id`, `room_id`, `user_id`, `player_color`, `position`, `tokens_home`, `tokens_finished`, `turn_order`, `is_ready`, `joined_at`) VALUES
(27, 17, 11, 'red', '[0,0,0,0]', 4, 0, 1, 1, '2025-09-21 09:55:38'),
(28, 17, 10, 'blue', '[0,0,0,0]', 4, 0, 2, 1, '2025-09-21 09:55:47'),
(29, 18, 10, 'red', '[0,0,0,0]', 4, 0, 1, 1, '2025-09-21 09:57:13'),
(30, 18, 11, 'blue', '[0,0,0,0]', 4, 0, 2, 1, '2025-09-21 09:57:19'),
(31, 19, 11, 'red', '[0,1,0,0]', 3, 0, 1, 1, '2025-09-21 09:58:48'),
(32, 19, 10, 'blue', '[0,0,0,0]', 4, 0, 2, 1, '2025-09-21 09:58:55'),
(33, 20, 10, 'red', '[0,0,0,0]', 4, 0, 1, 1, '2025-09-21 09:59:48'),
(34, 21, 11, 'red', '[0,0,0,0]', 4, 0, 1, 1, '2025-09-21 10:00:27'),
(35, 21, 10, 'blue', '[0,0,0,0]', 4, 0, 2, 1, '2025-09-21 10:00:35'),
(36, 22, 10, 'red', '[0,1,0,0]', 3, 0, 1, 1, '2025-09-21 10:27:13'),
(37, 22, 11, 'blue', '[1,0,0,0]', 3, 0, 2, 1, '2025-09-21 10:27:25'),
(38, 23, 11, 'red', '[0,0,0,0]', 4, 0, 1, 1, '2025-09-22 04:14:05'),
(39, 23, 10, 'blue', '[0,0,0,0]', 4, 0, 2, 1, '2025-09-22 04:14:30');

-- --------------------------------------------------------

--
-- Table structure for table `game_rooms`
--

CREATE TABLE `game_rooms` (
  `id` int(11) NOT NULL,
  `room_code` varchar(10) NOT NULL,
  `creator_id` int(11) NOT NULL,
  `max_players` int(11) DEFAULT 4,
  `current_players` int(11) DEFAULT 1,
  `status` enum('waiting','active','finished') DEFAULT 'waiting',
  `winner_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `game_rooms`
--

INSERT INTO `game_rooms` (`id`, `room_code`, `creator_id`, `max_players`, `current_players`, `status`, `winner_id`, `created_at`, `updated_at`) VALUES
(17, 'A9MNVV', 11, 2, 2, 'active', NULL, '2025-09-21 09:55:38', '2025-09-21 09:55:55'),
(18, 'SZAHJK', 10, 4, 2, 'active', NULL, '2025-09-21 09:57:13', '2025-09-21 09:57:24'),
(19, '4ZTLNJ', 11, 2, 2, 'active', NULL, '2025-09-21 09:58:48', '2025-09-21 09:59:00'),
(20, 'EJA76C', 10, 2, 1, 'active', NULL, '2025-09-21 09:59:48', '2025-09-21 09:59:50'),
(21, 'E3DVAL', 11, 2, 2, 'active', NULL, '2025-09-21 10:00:27', '2025-09-21 10:00:37'),
(22, 'EVEETK', 10, 2, 2, 'active', NULL, '2025-09-21 10:27:13', '2025-09-21 10:27:32'),
(23, 'EO99WW', 11, 2, 2, 'active', NULL, '2025-09-22 04:14:05', '2025-09-22 04:14:37');

-- --------------------------------------------------------

--
-- Table structure for table `invitations`
--

CREATE TABLE `invitations` (
  `id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_email` varchar(100) DEFAULT NULL,
  `receiver_id` int(11) DEFAULT NULL,
  `token` varchar(64) NOT NULL,
  `status` enum('pending','accepted','expired') DEFAULT 'pending',
  `created_at` datetime DEFAULT current_timestamp(),
  `expires_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT 'default.png',
  `wins` int(11) DEFAULT 0,
  `losses` int(11) DEFAULT 0,
  `games_played` int(11) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_login` timestamp NULL DEFAULT NULL,
  `status` enum('online','offline','in-game') DEFAULT 'offline'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `avatar`, `wins`, `losses`, `games_played`, `created_at`, `last_login`, `status`) VALUES
(10, '2', 'mukeshsingh98121159@gmail.com', '$2y$10$.3Q2.uce3PcAF8TnITV5L.K7sQtduFdHYl2bFFg4demYq1mlCjdOq', 'default.png', 0, 0, 0, '2025-09-21 09:55:19', '2025-09-22 04:14:26', 'online'),
(11, '1', 'm@gmail.com', '$2y$10$1oA7ol7NDVvzDFHt6AwTTum7xrGvQk1wKw2jRraYFduWM8ejZ5fS2', 'default.png', 0, 0, 0, '2025-09-21 09:55:34', '2025-09-22 04:13:58', 'online');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `game_chat`
--
ALTER TABLE `game_chat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_id` (`room_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `game_moves`
--
ALTER TABLE `game_moves`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_id` (`room_id`),
  ADD KEY `player_id` (`player_id`);

--
-- Indexes for table `game_players`
--
ALTER TABLE `game_players`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_player_per_room` (`room_id`,`user_id`),
  ADD UNIQUE KEY `unique_color_per_room` (`room_id`,`player_color`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `game_rooms`
--
ALTER TABLE `game_rooms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `room_code` (`room_code`),
  ADD KEY `creator_id` (`creator_id`),
  ADD KEY `winner_id` (`winner_id`);

--
-- Indexes for table `invitations`
--
ALTER TABLE `invitations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `token` (`token`),
  ADD KEY `room_id` (`room_id`),
  ADD KEY `receiver_id` (`receiver_id`),
  ADD KEY `idx_token` (`token`),
  ADD KEY `idx_expires_at` (`expires_at`),
  ADD KEY `idx_status` (`status`),
  ADD KEY `idx_sender_receiver` (`sender_id`,`receiver_id`);

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
-- AUTO_INCREMENT for table `game_chat`
--
ALTER TABLE `game_chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `game_moves`
--
ALTER TABLE `game_moves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `game_players`
--
ALTER TABLE `game_players`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `game_rooms`
--
ALTER TABLE `game_rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `invitations`
--
ALTER TABLE `invitations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `game_chat`
--
ALTER TABLE `game_chat`
  ADD CONSTRAINT `game_chat_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `game_rooms` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `game_chat_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `game_moves`
--
ALTER TABLE `game_moves`
  ADD CONSTRAINT `game_moves_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `game_rooms` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `game_moves_ibfk_2` FOREIGN KEY (`player_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `game_players`
--
ALTER TABLE `game_players`
  ADD CONSTRAINT `game_players_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `game_rooms` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `game_players_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `game_rooms`
--
ALTER TABLE `game_rooms`
  ADD CONSTRAINT `game_rooms_ibfk_1` FOREIGN KEY (`creator_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `game_rooms_ibfk_2` FOREIGN KEY (`winner_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `invitations`
--
ALTER TABLE `invitations`
  ADD CONSTRAINT `invitations_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `game_rooms` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `invitations_ibfk_2` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `invitations_ibfk_3` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
