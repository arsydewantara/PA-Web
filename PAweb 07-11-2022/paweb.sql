-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2022 at 02:34 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pwd` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `spec` varchar(50) NOT NULL,
  `warna` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `rilis` varchar(50) NOT NULL,
  `gambarhp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `merk`, `spec`, `warna`, `harga`, `rilis`, `gambarhp`) VALUES
(1, 'Poco M4 Pro', '256GB 8GB RAM', 'Kuning', 'Rp. 2.817.000', '2021-11-11', 'Poco M4 Pro.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id` int(11) NOT NULL,
  `merk` varchar(25) NOT NULL,
  `penyimpanan` varchar(25) NOT NULL,
  `warna` varchar(25) NOT NULL,
  `pembayaran` varchar(25) NOT NULL,
  `tgl_pembayaran` varchar(50) NOT NULL,
  `bukti_pembayaran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id`, `merk`, `penyimpanan`, `warna`, `pembayaran`, `tgl_pembayaran`, `bukti_pembayaran`) VALUES
(3, 'samsung', '128 gb', 'Blue', 'Cash', '2022-10-28', 'samsung.png'),
(4, 'vivo', '64 gb', 'merah', 'Cash', '2022-10-28', 'vivo.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `username` varchar(25) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `pwd`) VALUES
(1, 'Rivan Abdillah', 'Nekopan', '$2y$10$HlG2QcuRMaJCR'),
(2, 'Sakura Miko', 'Mikochi', '$2y$10$Y3GrhI3IinkfI'),
(3, 'Repa', 'Shougo', '$2y$10$Kq1y9Cf9lAL2Z'),
(4, 'Adam', 'Apalah', '$2y$10$ZVFi9etzcbi5t'),
(5, 'Farizi', 'Shiro', '$2y$10$6jilQMLNiojtW8wjyy1.f.BASa80vRpy/iNchTRfCkELCUZEC6Yo.'),
(6, 'Siska Leontyne', 'Siskuy', '$2y$10$rInMrGRlOd.RQ3niDZFmAO8G4R9cqLiIQW4vTokQOHclEF0agvktq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
