-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2022 at 10:33 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(200) NOT NULL,
  `maskapai` varchar(500) NOT NULL,
  `tgl_berangkat` date NOT NULL,
  `jam_berangkat` time NOT NULL,
  `asal` varchar(300) NOT NULL,
  `tgl_datang` date NOT NULL,
  `jam_datang` time NOT NULL,
  `tujuan` varchar(300) NOT NULL,
  `harga` int(8) NOT NULL,
  `kursi` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `maskapai`, `tgl_berangkat`, `jam_berangkat`, `asal`, `tgl_datang`, `jam_datang`, `tujuan`, `harga`, `kursi`) VALUES
(10, 'ABC', '2022-03-11', '14:18:00', 'Malang', '2022-03-12', '02:18:00', 'Surabaya', 24000, 6),
(11, 'Coder Airline', '2022-03-05', '14:37:00', 'Jakarta', '2022-03-30', '14:38:00', 'Surabaya', 90000, 6),
(12, 'Ini Pesawat', '2022-03-02', '14:47:00', 'Malang', '2022-03-12', '14:49:00', 'Surabaya', 24000, 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
