-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2025 at 10:18 AM
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
-- Database: `webrentalmobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$e0MYzXyjpJS7Pd0RVvHwHeFUP4P3cD.DJ8J5KqWj1gEQY4JnbE1i2'),
(3, 'guan', '$2y$10$el8oBujLsCsEbfywLXMSC.urmlCbaJ.J8StazzsPRqiL/dG4BP9VK');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `id` int(11) NOT NULL,
  `nama_mobil` varchar(255) NOT NULL,
  `harga_mobil` int(255) NOT NULL,
  `unit_mobil` int(11) NOT NULL,
  `gambar_mobil` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id`, `nama_mobil`, `harga_mobil`, `unit_mobil`, `gambar_mobil`) VALUES
(1, 'Fortuner', 500000, 4, 'assets/images/car/Fortuner.jpg'),
(2, 'Avanza Veloz', 400000, 3, 'assets/images/car/Avanza.jpg'),
(3, 'Civic', 1000000, 7, 'assets/images/car/Civic.jpg'),
(4, 'Pajero', 500000, 4, 'assets/images/car/Pajero.jpg'),
(5, 'Sigra', 400000, 6, 'assets/images/car/Sigra.jpg'),
(7, 'Rush', 500000, 10, 'assets/images/car/Rush.jpg'),
(8, 'Rubicon', 1000000, 5, 'assets/images/car/Rubicon.jpg'),
(9, 'Range Rover', 1500000, 4, 'assets/images/car/RangeRover.jpg'),
(10, 'Xenia', 400000, 8, 'assets/images/car/Xenia.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
