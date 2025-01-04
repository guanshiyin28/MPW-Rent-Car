-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2025 at 07:47 PM
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
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `id` int(11) NOT NULL,
  `nama_mobil` varchar(255) NOT NULL,
  `harga_mobil` decimal(10,2) NOT NULL,
  `unit_mobil` int(11) NOT NULL,
  `gambar_mobil` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id`, `nama_mobil`, `harga_mobil`, `unit_mobil`, `gambar_mobil`) VALUES
(1, 'Ferrari 488', 15000000.00, 5, 'images/car-1.jpg'),
(2, 'Lamborghini Aventador', 20000000.00, 3, 'images/car-2.jpg'),
(3, 'Porsche 911', 12000000.00, 7, 'images/car-3.jpg'),
(4, 'McLaren 720S', 18000000.00, 4, 'images/car-4.jpg'),
(5, 'Aston Martin DB11', 14000000.00, 6, 'images/car-5.jpg'),
(6, 'Bugatti Chiron', 30000000.00, 2, 'images/car-6.jpg'),
(7, 'Chevrolet Corvette', 9000000.00, 10, 'images/car-7.jpg'),
(8, 'Ferrari F8 Tributo', 16000000.00, 5, 'images/car-8.jpg'),
(9, 'Lamborghini Huracan', 17000000.00, 4, 'images/car-9.jpg'),
(10, 'Porsche Cayman', 8000000.00, 8, 'images/car-10.jpg'),
(11, 'Nissan GT-R', 11000000.00, 6, 'images/car-11.jpg'),
(12, 'Audi R8', 13000000.00, 5, 'images/car-12.jpg'),
(13, 'BMW i8', 10000000.00, 7, NULL),
(14, 'Mercedes-AMG GT', 14000000.00, 4, NULL),
(15, 'Jaguar F-Type', 9500000.00, 9, NULL),
(16, 'Ford GT', 20000000.00, 3, NULL),
(17, 'Bentley Continental GT', 18000000.00, 4, NULL),
(18, 'Acura NSX', 12000000.00, 6, NULL),
(19, 'Maserati GranTurismo', 15000000.00, 5, NULL),
(20, 'Lexus LC500', 13000000.00, 7, NULL),
(21, 'Dodge Viper', 11000000.00, 6, NULL),
(22, 'Alfa Romeo 4C', 8000000.00, 8, NULL),
(23, 'Aston Martin Vantage', 13000000.00, 5, NULL),
(24, 'Pagani Huayra', 35000000.00, 1, NULL),
(25, 'Koenigsegg Agera', 40000000.00, 2, NULL),
(26, 'Ferrari LaFerrari', 30000000.00, 3, NULL),
(27, 'Lamborghini Veneno', 45000000.00, 1, NULL),
(28, 'McLaren P1', 35000000.00, 2, NULL),
(29, 'Porsche Taycan', 10000000.00, 7, NULL),
(30, 'Chevrolet Camaro', 8500000.00, 9, NULL),
(31, 'Ford Mustang', 7500000.00, 10, NULL),
(32, 'Tesla Roadster', 12000000.00, 6, NULL),
(33, 'BMW M4', 9500000.00, 8, NULL),
(34, 'Mercedes-Benz SLS AMG', 14000000.00, 4, NULL),
(35, 'Jaguar XJ220', 20000000.00, 2, NULL),
(36, 'Bugatti Veyron', 35000000.00, 1, NULL),
(37, 'Lamborghini Sian', 40000000.00, 1, NULL),
(38, 'Ferrari SF90 Stradale', 25000000.00, 3, NULL),
(39, 'Porsche Panamera', 15000000.00, 5, NULL),
(40, 'Aston Martin Rapide', 16000000.00, 4, NULL),
(41, 'Bentley Flying Spur', 17000000.00, 3, NULL),
(42, 'Lexus LFA', 20000000.00, 2, NULL),
(43, 'Maserati MC20', 18000000.00, 4, NULL),
(44, 'Audi TT RS', 9000000.00, 8, NULL),
(45, 'Nissan 370Z', 7500000.00, 9, NULL),
(46, 'Mercedes-Benz SL-Class', 13000000.00, 5, NULL),
(47, 'Alfa Romeo Giulia', 9500000.00, 7, NULL),
(48, 'Chevrolet SS', 8000000.00, 9, NULL),
(49, 'Ford Shelby GT500', 11000000.00, 6, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
