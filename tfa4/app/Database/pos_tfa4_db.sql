-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2026 at 08:24 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos_tfa4_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `full_name`, `email`, `phone`, `created_at`) VALUES
(1, 'Juan Dela Cruz', 'juan@gmail.com', '09171234567', '2026-11-07 19:14:00'),
(2, 'Maria Santos', 'maria@gmail.com', '09181234567', '2026-11-07 19:14:00'),
(3, 'Pedro Reyes', 'pedro@gmail.com', '09191234567', '2026-11-07 19:14:00'),
(4, 'Ana Garcia', 'ana@gmail.com', '09201234567', '2026-11-07 19:14:00'),
(5, 'Mark Cruz', 'mark@gmail.com', '09211234567', '2026-11-07 19:14:00'),
(12, 'Dwight D. Eisenhower', 'Dwight@EisenHower.com', '0382219151953', '0000-00-00 00:00:00'),
(13, ' Douglas MacArthur', 'Douglas@MacArthur.com', '05718801964', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `role` varchar(30) NOT NULL DEFAULT 'Cashier',
  `avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `full_name`, `created_at`, `role`, `avatar`) VALUES
(1, 'admin01', '$2y$12$Yh6SGHFIDvu0DF8Z4vv8seETuLle1GugAENxklGgrZ58QpgSoDA/q', 'John Smith', '2026-11-07 19:14:06', 'Admin', NULL),
(2, 'cashier01', '$2y$12$asMB1ZRl83M3eNlu.VU5YeduhFgoJka3b1mkWX/./eUd0QOfzpPhu', 'Sarah Lee', '2026-11-07 19:14:06', 'Cashier', NULL),
(3, 'cashier02', '$2y$12$e8hwC4SpEdTVrnhPr6WpPOwfohYsfVXb5O8D8GwFnqGra5khVqHHi', 'Michael Tan', '2026-11-07 19:14:06', 'Cashier', NULL),
(4, 'manager01', '$2y$12$AUZFJfShrKNrki8ZDbPeMebLpE0Lxfywe63TEVv/lDZyTm36T8byq', 'David Cruz', '2026-11-07 19:14:06', 'Manager', NULL),
(5, 'cashier03', '$2y$12$Onttdul5rzCvfXdz2OPqJ.UKnT6JUuJgI7x4DmM1V6KIKSOK0qiRq', 'Lisa Santos', '2026-11-07 19:14:06', 'Cashier', NULL),
(7, 'IkeDaGeneral', '$2y$12$ae2mxsnSYSXqEMUL1c68w.s/PrXn./x5CSrylaHEspXiZEePweiha', 'Dwight D. Eisenhower', '0000-00-00 00:00:00', 'Cashier', '1794054448_91547cf503c229d61eba.jpg'),
(10, 'DougyDoug', '$2y$12$CnmY0KWPlKwr89541zoC8uOm5l8GmtVJgIW51ho8mb9SdrvTWoNBG', 'Douglas MacArthur', '0000-00-00 00:00:00', 'Cashier', '1794549899_65a6bde7e516998c48c2.jpg'),
(12, 'lukeluke', '$2y$10$/TFG3zfpKOeJuc9QHeiT9uJei6w8c75qb0uzUzLGM85vAcPUz7LFC', 'lukedeguzman', '0000-00-00 00:00:00', 'Cashier', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
