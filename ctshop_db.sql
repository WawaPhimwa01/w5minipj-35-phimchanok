-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 22, 2026 at 10:51 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ctshop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `crystal`
--

CREATE TABLE `crystal` (
  `crystal_id` int(11) NOT NULL,
  `crystal_name` varchar(150) NOT NULL,
  `crystal_color` varchar(150) NOT NULL,
  `crystal_size` varchar(4) NOT NULL,
  `crystal_img` text NOT NULL,
  `crystal_price` int(11) NOT NULL,
  `type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `crystal`
--

INSERT INTO `crystal` (`crystal_id`, `crystal_name`, `crystal_color`, `crystal_size`, `crystal_img`, `crystal_price`, `type_id`) VALUES
(1, 'Rose quartz', 'Pink', 'S', 'https://wildmountaincrystals.com/cdn/shop/files/EDF15FAD-36A9-4929-8C9B-E09124F34CE3.jpg?v=1757365502&width=5000', 590, 2),
(2, 'Aventurine', 'Green', 'M', 'https://www.burtonsgemsandopals.com/cdn/shop/products/greencrystalball.jpg?v=1667692012&width=1646', 1200, 1),
(3, 'Obsidian', 'Black', 'L', 'https://mountainjade.ca/cdn/shop/files/IMG_4540.heic?v=1735946073&width=2200', 3500, 4),
(4, 'Clear Quartz', 'White', 'XL', 'https://merkababedesigns.com/cdn/shop/products/IMG_5292_4074deea-db7f-4758-adf2-b043fb7b7392_2048x2048.jpg?v=1675387238', 5990, 3);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `type_id` int(5) NOT NULL,
  `type_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `type_name`) VALUES
(1, 'โชคลาภ'),
(2, 'ความรัก'),
(4, 'สุขภาพ'),
(5, 'ป้องกันภัย');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` int(4) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `fname`, `lname`) VALUES
(1, 'ieatcrystal', 1234, 'Dekchaisomsee', 'Asha'),
(2, 'omgwhoru', 6767, 'Dekshaisompong', 'Itsallyours');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crystal`
--
ALTER TABLE `crystal`
  ADD PRIMARY KEY (`crystal_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crystal`
--
ALTER TABLE `crystal`
  MODIFY `crystal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `type_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
