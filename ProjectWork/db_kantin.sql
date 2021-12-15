-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Nov 2021 pada 11.53
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kantin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_telp` varchar(20) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`admin_id`, `admin_name`, `username`, `password`, `admin_telp`, `admin_email`, `admin_address`) VALUES
(1, 'Ihsan Maulana', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', '+628817503510', '20198490@student.smktelkom-jkt.sch.id', 'Jl.Kresek Raya, Duri Kosambi, Cengkareng, Jakarta Barat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_category`
--

CREATE TABLE `tb_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_category`
--

INSERT INTO `tb_category` (`category_id`, `category_name`) VALUES
(1, 'Makanan'),
(2, 'Minuman'),
(3, 'Camilan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_product`
--

CREATE TABLE `tb_product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_status` tinyint(1) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_product`
--

INSERT INTO `tb_product` (`product_id`, `category_id`, `product_name`, `product_price`, `product_description`, `product_image`, `product_status`, `date_created`) VALUES
(1, 3, 'Wafer', 2000, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>\r\n', 'produk1629217695.jpg', 1, '2021-08-17 14:25:24'),
(2, 2, 'Teh Manis/Tawar ', 3000, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>\r\n', 'produk1629210378.jpg', 1, '2021-08-17 14:26:18'),
(3, 1, 'Mie Ayam', 10000, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>\r\n', 'produk1629217507.jpg', 1, '2021-08-17 14:26:55'),
(4, 3, 'Permen', 1000, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>\r\n', 'produk1629210444.jpg', 1, '2021-08-17 14:27:24'),
(5, 2, 'Kopi', 5000, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>\r\n', 'produk1629210559.jpg', 1, '2021-08-17 14:29:19'),
(6, 1, 'Nasi Goreng', 13000, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>\r\n', 'produk1629210611.jpg', 1, '2021-08-17 14:30:11'),
(7, 3, 'Es Krim', 7000, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>\r\n', 'produk1629210683.jpg', 1, '2021-08-17 14:31:23'),
(8, 2, 'Jus', 8000, '<p><strong>JUS SEHAT DAN BERGIZI</strong></p>\r\n\r\n<p>Jus di toko kami terbuat dari buah-buahan yang segar, bersih serta bergizi tinggi. Kami mengedepankan dan mementingkan kualitas serta kepuasan pelanggan dalam pengolahan serta pembuatannya.&nbsp;Kami menyediankan banyak varian rasa, diantaranya: tomat, timun, wortel, mangga, pisang, melon, durian, nangka, jeruk, dan berbagai buah-buahan lainnya.</p>\r\n', 'produk1629210730.jpg', 1, '2021-08-17 14:32:10'),
(9, 1, 'Mie Instant', 5000, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>\r\n', 'produk1629217774.jpg', 1, '2021-08-17 14:33:02'),
(10, 3, 'Roti', 4000, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>\r\n', 'produk1629210821.png', 0, '2021-08-17 14:33:41'),
(11, 2, 'Air Mineral', 3500, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>\r\n', 'produk1629210887.jpg', 1, '2021-08-17 14:34:47'),
(12, 1, 'Ayam Goreng & Nasi', 12000, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>\r\n', 'produk1630690075.jpg', 0, '2021-08-17 14:36:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_product_purchase`
--

CREATE TABLE `tb_product_purchase` (
  `product_purchase_id` int(11) NOT NULL,
  `purchase_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_product_purchase`
--

INSERT INTO `tb_product_purchase` (`product_purchase_id`, `purchase_id`, `product_id`, `jumlah`) VALUES
(1, 1, 11, 1),
(2, 1, 7, 1),
(3, 1, 4, 1),
(4, 2, 6, 1),
(5, 2, 7, 1),
(6, 3, 9, 1),
(7, 3, 3, 1),
(8, 4, 11, 1),
(9, 4, 9, 1),
(10, 5, 9, 4),
(11, 5, 3, 2),
(12, 6, 5, 1),
(13, 6, 9, 3),
(14, 7, 8, 1),
(15, 7, 11, 3),
(16, 8, 4, 1),
(17, 8, 6, 1),
(18, 9, 7, 4),
(19, 10, 5, 1),
(20, 10, 3, 1),
(21, 11, 11, 1),
(22, 11, 9, 2),
(23, 12, 5, 1),
(24, 0, 9, 1),
(25, 0, 8, 1),
(26, 15, 9, 1),
(27, 15, 1, 1),
(28, 16, 3, 1),
(29, 16, 11, 1),
(30, 17, 11, 1),
(31, 18, 6, 1),
(32, 18, 2, 1),
(33, 19, 11, 1),
(34, 20, 7, 1),
(35, 21, 3, 1),
(36, 22, 9, 1),
(37, 23, 5, 1),
(38, 23, 2, 1),
(39, 24, 4, 1),
(40, 24, 1, 1),
(41, 25, 9, 1),
(42, 26, 8, 1),
(43, 27, 8, 3),
(44, 27, 6, 1),
(45, 28, 5, 1),
(46, 29, 8, 3),
(47, 29, 7, 1),
(48, 30, 9, 1),
(49, 30, 8, 1),
(50, 30, 7, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_purchase`
--

CREATE TABLE `tb_purchase` (
  `purchase_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `purchase_date` date NOT NULL,
  `purchase_total` int(11) NOT NULL,
  `purchase_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_purchase`
--

INSERT INTO `tb_purchase` (`purchase_id`, `user_id`, `purchase_date`, `purchase_total`, `purchase_status`) VALUES
(1, 1, '2021-09-08', 11500, 1),
(2, 1, '2021-09-08', 20000, 1),
(3, 2, '2021-09-12', 15000, 1),
(4, 1, '2021-09-14', 8500, 1),
(5, 2, '2021-09-15', 40000, 0),
(6, 1, '2021-09-15', 20000, 1),
(7, 1, '2021-09-15', 18500, 0),
(8, 2, '2021-09-15', 14000, 1),
(9, 1, '2021-09-15', 28000, 1),
(10, 2, '2021-09-20', 15000, 1),
(11, 2, '2021-09-28', 13500, 1),
(12, 2, '2021-09-28', 5000, 1),
(13, 2, '2021-09-29', 7000, 0),
(16, 1, '2021-09-29', 13500, 0),
(17, 1, '2021-09-29', 3500, 1),
(18, 1, '2021-10-07', 16000, 0),
(19, 1, '2021-10-07', 3500, 1),
(20, 2, '2021-10-11', 7000, 1),
(21, 2, '2021-10-11', 10000, 0),
(22, 2, '2021-10-11', 5000, 1),
(23, 3, '2021-10-11', 8000, 0),
(24, 3, '2021-10-11', 3000, 0),
(25, 2, '2021-10-11', 5000, 1),
(26, 4, '2021-10-12', 8000, 1),
(27, 4, '2021-10-12', 37000, 0),
(28, 4, '2021-10-14', 5000, 1),
(29, 3, '2021-10-21', 31000, 0),
(30, 5, '2021-11-05', 20000, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_telp` varchar(20) NOT NULL,
  `user_class` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `user_name`, `username`, `password`, `user_telp`, `user_class`) VALUES
(1, 'Dimas Angga', '20198395', '98765', '083811964143', 'XII Tel 13'),
(2, 'Ifan Hafidz', '20198489', '101112', '081908951798', 'XII Tel 12'),
(3, 'Azhar Fadillah', '20198560', '45678', '087783141567', 'XII Tel 13'),
(4, 'Nando Fikri', '20198630', '09876', '089530256351', 'XII Tel 13'),
(5, 'Fauzan', '20190000', '12345', '0888888888', 'Guru');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indeks untuk tabel `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indeks untuk tabel `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indeks untuk tabel `tb_product_purchase`
--
ALTER TABLE `tb_product_purchase`
  ADD PRIMARY KEY (`product_purchase_id`);

--
-- Indeks untuk tabel `tb_purchase`
--
ALTER TABLE `tb_purchase`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `tb_product_purchase`
--
ALTER TABLE `tb_product_purchase`
  MODIFY `product_purchase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `tb_purchase`
--
ALTER TABLE `tb_purchase`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
