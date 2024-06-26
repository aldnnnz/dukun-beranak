-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 26, 2024 at 11:05 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `Dokter`
--

CREATE TABLE `Dokter` (
  `dokter_id` int(11) NOT NULL,
  `nama_dokter` varchar(255) NOT NULL,
  `spesialisasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Dokter`
--

INSERT INTO `Dokter` (`dokter_id`, `nama_dokter`, `spesialisasi`) VALUES
(1, 'Dr. Ahmad', 'Umum'),
(2, 'Dr. Budi', 'Gigi');

-- --------------------------------------------------------

--
-- Table structure for table `Pasien`
--

CREATE TABLE `Pasien` (
  `pasien_id` int(11) NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `tanggal_perawatan` date NOT NULL,
  `keluhan` text NOT NULL,
  `diagnosa` text NOT NULL,
  `tindakan` text DEFAULT NULL,
  `obat` text DEFAULT NULL,
  `dokter_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Pasien`
--

INSERT INTO `Pasien` (`pasien_id`, `nama_pasien`, `alamat`, `telepon`, `tanggal_perawatan`, `keluhan`, `diagnosa`, `tindakan`, `obat`, `dokter_id`) VALUES
(1, 'Budi', 'Jl. Kebon Jeruk No. 1', '081234567890', '2024-05-28', 'Batuk dan pilek', 'Flu', 'Istirahat, minum air putih banyak, dan minum obat', 'Paracetamol 500mg 3x sehari', 1),
(2, 'Ani', 'Jl. Mawar No. 2', '081234567891', '2024-05-28', 'Gigi sakit', 'Karies gigi', 'Ditambal', 'Amoxicillin 500mg 3x sehari', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Dokter`
--
ALTER TABLE `Dokter`
  ADD PRIMARY KEY (`dokter_id`);

--
-- Indexes for table `Pasien`
--
ALTER TABLE `Pasien`
  ADD PRIMARY KEY (`pasien_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Dokter`
--
ALTER TABLE `Dokter`
  MODIFY `dokter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Pasien`
--
ALTER TABLE `Pasien`
  MODIFY `pasien_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
