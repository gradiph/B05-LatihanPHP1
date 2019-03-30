-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2019 at 08:06 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tbl_penjualan`
--

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `barang` varchar(50) NOT NULL,
  `kuantitas` int(50) NOT NULL,
  `harga_barang` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id`, `tanggal`, `barang`, `kuantitas`, `harga_barang`) VALUES
(32, '2019-03-03 01:22:07', 'HP', 450, 15000),
(33, '2019-03-02 01:22:10', 'komputer', 34, 100),
(34, '2019-03-03 16:11:10', 'laptop', 66, 456),
(35, '2019-03-05 12:22:05', 'Sepatu', 33, 449),
(36, '2019-03-09 14:32:20', 'Motor', 25, 400),
(37, '2019-03-09 04:41:20', 'Mobil', 9, 90),
(38, '2019-03-13 09:02:15', 'Motor', 13, 60),
(39, '2019-03-18 01:33:46', 'Gps', 31, 55),
(42, '2019-03-18 16:34:30', 'Helm', 31, 44),
(43, '2019-03-30 13:13:06', 'Speaker', 13, 55);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
