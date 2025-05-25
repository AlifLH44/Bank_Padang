-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 28, 2023 at 05:27 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `it_banking`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`username`, `email`, `password`) VALUES
('wojak', 'alif@gmail.com', '123'),
('irgi', 'irgisky@gmail.com', '000'),
('andika', 'dika12@gmail.com', '12345'),
('irgi', 'er2d@gmail.com', 'wojak'),
('Hegel Kurniawan', 'hegelkrnwn@gmail.com', 'wojak'),
('Teddy Minahasa', 'teddy@gmail.com', '12345'),
('Marcus10', 'marcus10@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `nama_depan` text NOT NULL,
  `nama_belakang` text NOT NULL,
  `email` varchar(5000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `nomor_telepon` varchar(100) NOT NULL,
  `message` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`nama_depan`, `nama_belakang`, `email`, `tanggal`, `waktu`, `nomor_telepon`, `message`) VALUES
('Alif Molino', 'Rizki', 'mralifmolinorizki12@gmail.com', '2023-11-28', '02:13:00', '0895242425313412', 'Bayar UKT UPI Padang');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`nama`, `email`, `message`) VALUES
('Qory G', 'qjiwrewer@gmail.com', 'dwqfrqwerw2qr'),
('Qory G', 'qjiwrewer@gmail.com', 'dwqfrqwerw2qr'),
('Alif', 'babygang2jz@gmail.com', 'mmadewjderwq'),
('imam', 'ambatukam@gmail.com', 'djqwbdjkwasbd'),
('Lola', 'zieata@gmail.com', 'Kukuruyuk');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
