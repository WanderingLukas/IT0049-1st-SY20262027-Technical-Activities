-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql102.infinityfree.com
-- Generation Time: Nov 17, 2026 at 10:57 PM
-- Server version: 11.4.13-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_43083987_pos_tfa3_db`
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
  `full_name` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `role` varchar(30) NOT NULL DEFAULT 'Cashier',
  `avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `full_name`, `created_at`, `role`, `avatar`) VALUES
(1, 'admin01', 'John Smith', '2026-11-07 19:14:06', 'Admin', NULL),
(2, 'cashier01', 'Sarah Lee', '2026-11-07 19:14:06', 'Cashier', NULL),
(3, 'cashier02', 'Michael Tan', '2026-11-07 19:14:06', 'Cashier', NULL),
(4, 'manager01', 'David Cruz', '2026-11-07 19:14:06', 'Manager', NULL),
(5, 'cashier03', 'Lisa Santos', '2026-11-07 19:14:06', 'Cashier', NULL),
(7, 'IkeDaGeneral', 'Dwight D. Eisenhower', '0000-00-00 00:00:00', 'Cashier', '1794054448_91547cf503c229d61eba.jpg'),
(10, 'DougyDoug', 'Douglas MacArthur', '0000-00-00 00:00:00', 'Cashier', '1794549899_65a6bde7e516998c48c2.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
