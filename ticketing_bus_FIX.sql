-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2023 at 12:02 PM
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
(1, 'ZE17', 'Z1212HS', 'Eksekutif', 34, 'Tasikmalaya', 'Bandung'),
(2, 'DR10', 'D2023SL', 'Reguler', 38, 'Bandung', 'Jakarta'),
(3, 'BR30', 'B1511LA', 'Reguler', 36, 'Jakarta', 'Tasikmalaya'),
(4, 'ZR17', 'Z1234HS', 'Reguler', 34, 'Tasikmalaya', 'Bandung'),
(5, 'DE10', 'D2323SL', 'Eksekutif', 38, 'Bandung', 'Jakarta'),
(6, 'BE30', 'B1515LA', 'Eksekutif', 36, 'Jakarta', 'Tasikmalaya'),
(7, 'ZE20', 'Z1111NV', 'Eksekutif', 34, 'Tasikmalaya', 'Jakarta'),
(8, 'DE05', 'D2525PO', 'Eksekutif', 38, 'Bandung', 'Tasikmalaya'),
(9, 'BE12', 'B1121GO', 'Eksekutif', 36, 'Jakarta', 'Bandung'),
(10, 'ZR20', 'Z1010NV', 'Reguler', 34, 'Tasikmalaya', 'Jakarta'),
(11, 'DR05', 'D2505PO', 'Reguler', 38, 'Bandung', 'Tasikmalaya'),
(12, 'BR12', 'B1122GN', 'Reguler', 36, 'Jakarta', 'Bandung');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pw` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `user`, `pw`, `jabatan`) VALUES
(1, 'Adam', 'admin01', 'adm01', 'Admin'),
(2, 'Hibban', 'hibban12', 'hsm12', 'Petugas'),
(3, 'Ridwan', 'ridwan03', 'rdw03', 'Petugas'),
(4, 'Ujang', 'ujang', 'ujg', 'Admin');

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
(10, 'Tasikmalaya', 'Jakarta', 'Eksekutif', 300000),
(11, 'Bandung', 'Jakarta', 'Reguler', 145000),
(14, 'Bandung', 'Jakarta', 'Eksekutif', 250000),
(15, 'Bandung', 'Tasikmalaya', 'Reguler', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `status_kursi`
--

CREATE TABLE `status_kursi` (
  `id` int(11) NOT NULL,
  `kode_bus` varchar(50) NOT NULL,
  `kode_kursi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `status_kursi`
--

INSERT INTO `status_kursi` (`id`, `kode_bus`, `kode_kursi`) VALUES
(20, 'ZR17', 'A1'),
(23, 'ZR17', 'C4');

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
-- Indexes for table `status_kursi`
--
ALTER TABLE `status_kursi`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rute`
--
ALTER TABLE `rute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `status_kursi`
--
ALTER TABLE `status_kursi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id_tiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
