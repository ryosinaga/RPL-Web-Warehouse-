-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2020 at 12:18 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rpl`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_barang`
--

CREATE TABLE IF NOT EXISTS `add_barang` (
  `id` int(20) NOT NULL,
  `kd_barang` varchar(10) NOT NULL,
  `nm_barang` varchar(25) NOT NULL,
  `kategori` varchar(10) NOT NULL,
  `qty` int(100) NOT NULL,
  `exp` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_barang`
--

INSERT INTO `add_barang` (`id`, `kd_barang`, `nm_barang`, `kategori`, `qty`, `exp`) VALUES
(1, 'S001', 'Sarden Cap Ikan T2', 'Makanan', 350, '2024-06-10'),
(2, 'A002', 'Air Mineral 600ml', 'Minuman', 100, '2025-06-01'),
(3, 'A001', 'Air Mineral 250ml', 'Minuman', 100, '2025-06-01'),
(4, 'S003', 'Susu UHT', 'Minuman', 322, '2025-06-01'),
(5, 'A003', 'Air Mineral 1L', 'Minuman', 100, '2025-06-01'),
(6, 'K001', 'Kopi Bubuk Cap T2', 'BhnMinuman', 444, '2025-06-02'),
(7, 'B001', 'Bihun Cap T2', 'Makanan', 500, '2025-06-02'),
(8, 'M001', 'Mie Goreng Instan', 'Makanan', 500, '2025-06-03'),
(9, 'M002', 'Mie Goreng CUP', 'Makanan', 400, '2025-06-03'),
(10, 'T001', 'Tepung Terigu Cap T2', 'BhnMakanan', 375, '2025-06-14'),
(11, 'C001', 'Cola-cola', 'Minuman', 450, '2025-06-22'),
(12, 'K002', 'Kopi Perahu 250ml', 'Minuman', 200, '2025-06-24'),
(13, 'T002', 'Tepung Beras Cap T2', 'BhnMakanan', 200, '2025-06-25'),
(14, 'S002', 'Susu Kental Manis Cap T2', 'BhnMinuman', 500, '2025-07-01'),
(15, 'S005', 'Susu Bubuk Balita', 'BhnMinuman', 300, '2025-07-01'),
(16, 'S006', 'Susu Bubuk Anak', 'BhnMinuman', 275, '2025-07-01'),
(17, 'S004', 'Susu Bubuk Batita', 'BhnMinuman', 135, '2025-07-03'),
(18, 'K003', 'Kopi Moccacino 473ml', 'Minuman', 260, '2025-07-04'),
(19, 'K004', 'Kopi Cappuccino', 'Minuman', 420, '2025-07-04'),
(20, 'M003', 'Mie Rebus Soto', 'Makanan', 500, '2025-07-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_barang`
--
ALTER TABLE `add_barang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_barang`
--
ALTER TABLE `add_barang`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
