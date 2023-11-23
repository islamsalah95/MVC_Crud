-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2023 at 02:07 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` float NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `created_at`, `updated_at`) VALUES
(17, 'cvcvv', 665545, '2023-11-22 23:53:21', '2023-11-22 23:53:21'),
(18, 'dsf', 65, '2023-11-22 23:55:39', '2023-11-22 23:55:39'),
(19, 'fdf', 2656, '2023-11-22 23:57:20', '2023-11-22 23:57:20'),
(20, 'fdf', 2656, '2023-11-22 23:57:23', '2023-11-22 23:57:23'),
(22, '6565', 9989900, '2023-11-23 00:02:40', '2023-11-23 00:02:40'),
(23, 'vc', 65, '2023-11-23 00:46:37', '2023-11-23 00:46:37'),
(24, 'cvc', 66, '2023-11-23 00:46:52', '2023-11-23 00:46:52'),
(25, 'cxc', 66, '2023-11-23 00:47:16', '2023-11-23 00:47:16'),
(26, 'cxcccc', 66, '2023-11-23 00:49:04', '2023-11-23 00:49:04'),
(27, 'as', 545, '2023-11-23 00:52:25', '2023-11-23 00:52:25'),
(28, 'zx', 44, '2023-11-23 00:53:00', '2023-11-23 00:53:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
