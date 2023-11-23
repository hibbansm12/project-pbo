-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2023 at 09:34 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticketing_bus`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `id_bus` int(11) NOT NULL,
  `kode_bus` varchar(10) NOT NULL,
  `no_pol` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `asal` varchar(50) NOT NULL,
  `tujuan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`id_bus`, `kode_bus`, `no_pol`, `kelas`, `kapasitas`, `asal`, `tujuan`) VALUES
(1, 'ZE17', 'Z1234HSM', 'Eksekutif', 34, 'Tasikmalaya', 'Bandung'),
(2, 'DR10', 'D2023SLB', 'Reguler', 38, 'Bandung', 'Jakarta'),
(3, 'BR30', 'B1511LAN', 'Reguler', 36, 'Jakarta', 'Tasikmalaya'),
(4, 'ZR17', 'Z1234HSM', 'Reguler', 34, 'Tasikmalaya', 'Bandung'),
(5, 'DE10', 'D2023SLB', 'Eksekutif', 38, 'Bandung', 'Jakarta'),
(6, 'BE30', 'B1511LAN', 'Eksekutif', 36, 'Jakarta', 'Tasikmalaya'),
(7, 'ZE20', 'Z1010NVM', 'Eksekutif', 34, 'Tasikmalaya', 'Jakarta'),
(8, 'DE05', 'D2505POM', 'Eksekutif', 38, 'Bandung', 'Tasikmalaya'),
(9, 'BE12', 'B1122GON', 'Eksekutif', 36, 'Jakarta', 'Bandung'),
(10, 'ZR20', 'Z1010NVM', 'Reguler', 34, 'Tasikmalaya', 'Jakarta'),
(11, 'DR05', 'D2505POM', 'Reguler', 38, 'Bandung', 'Tasikmalaya'),
(12, 'BR12', 'B1122GON', 'Reguler', 36, 'Jakarta', 'Bandung');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pw` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `user`, `pw`, `jabatan`) VALUES
(1, 'Adam', 'admin01', 'adm01', 'Admin'),
(2, 'Hibban', 'hibban12', 'hsm12', 'Petugas'),
(3, 'Ridwan', 'ridwan03', 'rdw03', 'Petugas');

-- --------------------------------------------------------

--
-- Table structure for table `rute`
--

CREATE TABLE `rute` (
  `id` int(11) NOT NULL,
  `asal` varchar(50) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rute`
--

INSERT INTO `rute` (`id`, `asal`, `tujuan`, `kelas`, `harga`) VALUES
(1, 'Tasikmalaya', 'Bandung', 'Reguler', 100000),
(2, 'Tasikmalaya', 'Bandung', 'Eksekutif', 200000),
(3, 'Tasikmalaya', 'Jakarta', 'Reguler', 150000),
(4, 'Tasikmalaya', 'Jakarta', 'Eksekutif', 300000),
(5, 'Bandung', 'Tasikmalaya', 'Reguler', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` int(11) NOT NULL,
  `asal` varchar(50) NOT NULL,
  `terminal_asal` varchar(50) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `terminal_tujuan` varchar(50) NOT NULL,
  `kode_jadwal` varchar(50) NOT NULL,
  `kode_bus` varchar(50) NOT NULL,
  `no_pol` varchar(50) NOT NULL,
  `no_kursi` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`id_tiket`, `asal`, `terminal_asal`, `tujuan`, `terminal_tujuan`, `kode_jadwal`, `kode_bus`, `no_pol`, `no_kursi`, `tanggal`, `waktu`, `harga`) VALUES
(1, 'Tasikmalaya', 'Indihiang', 'Bandung', 'Cibiru', 'V18', 'V36', 'Z1234HSM', 'B4', '2023-11-21', '11:00:00', 110000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id_bus`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rute`
--
ALTER TABLE `rute`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `id_bus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rute`
--
ALTER TABLE `rute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id_tiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
