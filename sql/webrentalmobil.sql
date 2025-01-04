-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jan 2025 pada 20.20
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

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
-- Struktur dari tabel `unit`
--

CREATE TABLE `unit` (
  `id` int(11) NOT NULL,
  `nama_mobil` varchar(255) NOT NULL,
  `harga_mobil` decimal(10,2) NOT NULL,
  `unit_mobil` int(11) NOT NULL,
  `gambar_mobil` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `unit`
--

INSERT INTO `unit` (`id`, `nama_mobil`, `harga_mobil`, `unit_mobil`, `gambar_mobil`) VALUES
(1, 'Fortuner', 500000.00, 5, 'images/car-1.jpg'),
(2, 'Avanza Veloz', 400000.00, 3, 'images/car-2.jpg'),
(3, 'Civic', 1000000.00, 7, 'images/car-3.jpg'),
(4, 'Pajero', 500000.00, 4, 'images/car-4.jpg'),
(5, 'Sigra', 400000.00, 6, 'images/car-5.jpg'),
(6, 'Fortuner Vrz', 500000.00, 2, 'images/car-6.jpg'),
(7, 'Rush', 500000.00, 10, 'images/car-7.jpg'),
(8, 'Rubicon', 1000000.00, 5, 'images/car-8.jpg'),
(9, 'Range Rover', 1500000.00, 4, 'images/car-9.jpg'),
(10, 'Xenia', 400000.00, 8, 'images/car-10.jpg'),
(11, 'Avanza Veloz', 450000.00, 6, 'images/car-11.jpg'),
(12, 'Crv', 500000.00, 5, 'images/car-12.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `unit`
--
ALTER TABLE `unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
