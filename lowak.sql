-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2019 at 11:28 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lowak`
--

-- --------------------------------------------------------

--
-- Table structure for table `jual`
--

CREATE TABLE `jual` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nama_pemilik_rek` varchar(50) NOT NULL,
  `nama_bank` varchar(50) NOT NULL,
  `no_rek` char(50) NOT NULL,
  `nama_barang` varchar(200) NOT NULL,
  `harga_barang` char(10) NOT NULL,
  `no_telepon` varchar(13) NOT NULL,
  `id_kategori_gender` int(11) NOT NULL,
  `id_kategori_item` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jual`
--

INSERT INTO `jual` (`id`, `nama`, `nama_pemilik_rek`, `nama_bank`, `no_rek`, `nama_barang`, `harga_barang`, `no_telepon`, `id_kategori_gender`, `id_kategori_item`, `foto`) VALUES
(1, 'Reza Alamsyah', 'Reza Alamsyah', 'BNI', '1234567890', 'Kaos', '50000', '08912345678', 0, 0, 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_gender`
--

CREATE TABLE `kategori_gender` (
  `id_kategori_gender` int(11) NOT NULL,
  `nama_kategori_gender` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_gender`
--

INSERT INTO `kategori_gender` (`id_kategori_gender`, `nama_kategori_gender`) VALUES
(1, 'Man'),
(2, 'Woman');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_item`
--

CREATE TABLE `kategori_item` (
  `id_kategori_item` int(11) NOT NULL,
  `nama_kategori_item` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_item`
--

INSERT INTO `kategori_item` (`id_kategori_item`, `nama_kategori_item`) VALUES
(1, 'Shirt'),
(2, 'Tshirt'),
(3, 'Jacket'),
(4, 'Pants'),
(5, 'Shoes'),
(6, 'Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_produk` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `harga` int(9) NOT NULL,
  `id_kategori_gender` int(11) NOT NULL,
  `id_kategori_item` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `image` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_produk`, `name`, `harga`, `id_kategori_gender`, `id_kategori_item`, `deskripsi`, `image`) VALUES
(1, 'Jaket Gildan', 150000, 1, 3, 'Jaket Gildan Polos Warna Hitam', 'default.jpg'),
(3, 'Jaket Gildan', 1500000, 2, 3, 'Jaket Gildan Warna Kuning', 'product_3.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Rizki Rahmawanto', 'rizki.r@students.amikom.ac.id', 'profile.JPG', '$2y$10$AkXidwk9AP1.kC9HT9MiuOr4wH2Qo9pa8F8fUJLMSU73LFlrAT2n6', 1, 1, 1574572692),
(2, 'budi sajalah', 'rizki3299@gmail.com', '', '$2y$10$S9nGHvfGzLRReWkfVA7SvO.2hxsaeiEM3rmdd1r6W3X6Btaz69aNi', 2, 1, 1574574447),
(4, 'User', 'user@amikom.com', 'default.jpg', '$2y$10$5MHsJBsMH11ZjT43tIRNBO.4AoDP624RUU0Ro0hMPhi8NQjMI1Zl2', 2, 1, 1575365635),
(5, 'Admin', 'admin@amikom.com', 'default.jpg', '$2y$10$zw1n8jb7FANgvFUKULW2Y.L71BQJrqo6YTHWJNaYZUa5lgwz.GXqa', 1, 1, 1575366203);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(3, 'Menu\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fa fa-tachometer', 1),
(3, 3, 'Menu Management', 'menu', 'fa fa-folder', 1),
(4, 3, 'Submenu Management', 'menu/submenu', 'fa fa-folder-open', 1),
(6, 1, 'Produk', 'admin/produk', 'fa fa-suitcase', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jual`
--
ALTER TABLE `jual`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_gender`
--
ALTER TABLE `kategori_gender`
  ADD PRIMARY KEY (`id_kategori_gender`);

--
-- Indexes for table `kategori_item`
--
ALTER TABLE `kategori_item`
  ADD PRIMARY KEY (`id_kategori_item`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jual`
--
ALTER TABLE `jual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori_gender`
--
ALTER TABLE `kategori_gender`
  MODIFY `id_kategori_gender` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori_item`
--
ALTER TABLE `kategori_item`
  MODIFY `id_kategori_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
