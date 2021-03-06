-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jan 2020 pada 05.31
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.4

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
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cart`
--

INSERT INTO `cart` (`id_cart`, `id_produk`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `checkout`
--

CREATE TABLE `checkout` (
  `id_checkout` int(11) NOT NULL,
  `id_cart` int(11) NOT NULL,
  `name_buy` varchar(128) NOT NULL,
  `province` varchar(128) NOT NULL,
  `address` varchar(128) NOT NULL,
  `regency` varchar(128) NOT NULL,
  `disctrict` varchar(128) NOT NULL,
  `village` varchar(128) NOT NULL,
  `zip` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `notes` text NOT NULL,
  `image_out` varchar(255) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `payment_status` enum('0','1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `checkout`
--

INSERT INTO `checkout` (`id_checkout`, `id_cart`, `name_buy`, `province`, `address`, `regency`, `disctrict`, `village`, `zip`, `email`, `phone`, `notes`, `image_out`, `total_harga`, `payment_status`) VALUES
(1, 1, 'rizki', 'Jawa Tengah', 'Jln. Kopral Sayom', 'Klaten', 'Klaten Utara', 'Sekaranom', '57438', 'rizki@gmail.com', '08956784512', 'asdasdasdasdasdasd', 'default.png', 300000, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jual`
--

CREATE TABLE `jual` (
  `id_jual` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nama_pemilik_rek` varchar(50) NOT NULL,
  `nama_bank` varchar(50) NOT NULL,
  `no_rek` char(50) NOT NULL,
  `no_telepon` varchar(13) NOT NULL,
  `nama_barang` varchar(200) NOT NULL,
  `harga_barang` char(10) NOT NULL,
  `id_kategori_gender` int(11) NOT NULL,
  `id_kategori_item` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `image` varchar(50) NOT NULL,
  `status` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jual`
--

INSERT INTO `jual` (`id_jual`, `nama`, `nama_pemilik_rek`, `nama_bank`, `no_rek`, `no_telepon`, `nama_barang`, `harga_barang`, `id_kategori_gender`, `id_kategori_item`, `deskripsi`, `image`, `status`) VALUES
(4, 'rizki', 'rizki', 'mandiri', '154987654312', '0895689789', 'Jaket Gildan Polos Warna hijau mulus', '50000', 1, 2, 'Jaket Gildan Polos Warna hijau mulus', 'a.jpg', 'proses'),
(5, 'rizki rama', 'rizki', 'mandiri', '154987654312', '0895689789', 'jaket', '50000', 5, 4, 'asdasdas', 'product_3.png', 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_gender`
--

CREATE TABLE `kategori_gender` (
  `id_kategori_gender` int(11) NOT NULL,
  `nama_kategori_gender` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_gender`
--

INSERT INTO `kategori_gender` (`id_kategori_gender`, `nama_kategori_gender`) VALUES
(1, 'Man'),
(5, 'Woman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_item`
--

CREATE TABLE `kategori_item` (
  `id_kategori_item` int(11) NOT NULL,
  `nama_kategori_item` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_item`
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
-- Struktur dari tabel `user`
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
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Rizki Rahmawanto', 'rizki.r@students.amikom.ac.id', 'profile.JPG', '$2y$10$AkXidwk9AP1.kC9HT9MiuOr4wH2Qo9pa8F8fUJLMSU73LFlrAT2n6', 1, 1, 1574572692),
(2, 'budi sajalah', 'rizki3299@gmail.com', '', '$2y$10$S9nGHvfGzLRReWkfVA7SvO.2hxsaeiEM3rmdd1r6W3X6Btaz69aNi', 2, 1, 1574574447),
(4, 'rizki rama', 'user@amikom.com', 'default.jpg', '$2y$10$ALX22.Wy.y0KiEcs.2EuMu5bA.0V5DvnEI2VQHH1W024JAUmcFiyG', 2, 1, 1575365635),
(5, 'Admin', 'admin@amikom.com', 'default.jpg', '$2y$10$uLrik3fFAbHuhENp3yaxoeGzKm78uU1g.bU5SxkNv3AIAkXC7GnJu', 1, 1, 1575366203);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(3, 'Menu\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
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
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fa fa-tachometer', 1),
(3, 3, 'Menu Management', 'menu', 'fa fa-folder', 1),
(4, 3, 'Submenu Management', 'menu/submenu', 'fa fa-folder-open', 1),
(7, 1, 'Produk', 'jual', 'fa fa-archive', 1),
(8, 1, 'Kategori', 'kategori', 'fa fa-list-ul', 1),
(9, 1, 'Konfirmasi Check Out', 'konfirmasi', 'fa fa-shopping-cart', 1),
(10, 1, 'Laporan Transaksi', 'laporan', 'fa fa-file-text', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indeks untuk tabel `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id_checkout`);

--
-- Indeks untuk tabel `jual`
--
ALTER TABLE `jual`
  ADD PRIMARY KEY (`id_jual`);

--
-- Indeks untuk tabel `kategori_gender`
--
ALTER TABLE `kategori_gender`
  ADD PRIMARY KEY (`id_kategori_gender`);

--
-- Indeks untuk tabel `kategori_item`
--
ALTER TABLE `kategori_item`
  ADD PRIMARY KEY (`id_kategori_item`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id_checkout` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `jual`
--
ALTER TABLE `jual`
  MODIFY `id_jual` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kategori_gender`
--
ALTER TABLE `kategori_gender`
  MODIFY `id_kategori_gender` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kategori_item`
--
ALTER TABLE `kategori_item`
  MODIFY `id_kategori_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
