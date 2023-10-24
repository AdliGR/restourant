-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2023 at 01:43 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts_restorant`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `nama_makanan` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `deskripsi` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `nama_makanan`, `category`, `harga`, `file_path`, `deskripsi`) VALUES
(4, 'Minuman Coklat', 'Beverage', 8000.00, 'gambar/download (1).jpeg', 'Minuman coklat ngak kalah enak'),
(5, 'Stick Tenderloin', 'Meat', 55000.00, 'gambar/tenderloin.jpeg', 'Tenderloin dari daging asli ada badaknya'),
(6, 'Ayam Mayonaise', 'Chicken', 25000.00, 'gambar/ayammayonaise.jpeg', 'Ayam dengan mayonaise nikmat'),
(7, 'Ayam Bakar', 'Chicken', 10000.00, 'gambar/ayambakar.jpeg', 'ayam bakar enak'),
(9, 'Ayam Goreng Tepung', 'Chicken', 25000.00, 'gambar/images.jpeg', '1 porsi 3'),
(10, 'Eskrim', 'Beverage', 25000.00, 'gambar/eskrim.jpeg', 'Enak pokoknya'),
(12, 'Minuman Taro', 'Beverage', 8000.00, 'gambar/taro.jpeg', 'Taro enak dah'),
(13, 'Coca Cola', 'Beverage', 5000.00, 'gambar/cola.jpeg', 'Coca cola segar');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `nama_makanan` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tanggallahir` date NOT NULL,
  `jeniskelamin` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `tanggallahir`, `jeniskelamin`, `role`) VALUES
(1, 'Shyehan', 'Rafael', 'Clisfix', 'raf@gmail.com', '$2y$10$FXaUQhI3bCJ7cRKIojrDq.v7GVI8YhAzfUaE.a48QmgjHO/00RrDm', '2002-09-04', 'Laki-laki', 'Admin'),
(4, 'Edwin', 'Tandira', 'Nicholaus', 'Nicholaus@gmail.com', '$2y$10$UzooFk9g.UHI0w4/zE9gaO8Wc5LuympMm71LjPzFiu/FK4Kz6GRRC', '2023-10-03', 'Perempuan', 'User'),
(5, 'Joy', 'Jesri', 'an00ne', 'an00ne@gmail.com', '$2y$10$rnUA39DKPA5zy.QX.yJnpe6zkpA6wYh7njV0eaZBt0fIgBHB5IQsy', '2023-07-06', 'Laki-laki', 'User'),
(6, 'kuku', 'kaja', 'kuuk', 'kuuk@gmail.com', '$2y$10$WNNDgZSFgNrwR2fuYocas.ilaR/88NEzxVpkKZ8v/B9vxQDfQotXO', '2023-10-05', 'Laki-laki', 'User'),
(7, 'Dirsya', 'Arsyad', 'Dirsya', 'dirsyaa@gmail.com', '$2y$10$sMQzT7DmXBp3KVo2CGy2UO2nCG2yuh9Ed9sD8KcWNSi37BWcsmFAm', '2023-10-13', 'Laki-laki', 'User'),
(8, 'Dirsya', 'Arsyad', 'dirsyaaa', 'dirsyaaa@gmail.com', '$2y$10$EpqfiK7ylIWes4szgSe1UuFZqVcUA68a4SWbHAvTfy8Zp16/pR/Lu', '2023-10-27', 'Laki-laki', 'Admin'),
(9, 'Dirsya', 'Arsyad', 'dirsyaaaa', 'dirsyaaaa@gmail.com', '$2y$10$seYFPpPvr3WRL73P/EnrqO8EOCeciW0rbLW9MfUaNWlQ3yG1PxzpC', '2023-10-25', 'Laki-laki', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
