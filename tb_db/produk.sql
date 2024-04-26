-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Apr 2024 pada 09.11
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bukawarung`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama_product` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `nama_product`, `foto`, `harga`, `deskripsi`, `created_at`) VALUES
(3, 'laptop-lenovo-thinkpad-x250-core-i3-i5-i7-gen-5-layar-125inch', 'shopping.webp', '1.600.000', 'QME SSD 12 5 Inci. laptop hp spectre x360 i7 1165g7. laptop anak belajar multifungsi. laptop lenovo amd athlon silver. laptop touchscreen hp x360. lenovo thinkpad x260 16gb', '2024-04-25 05:16:34'),
(4, 'Eimio Folding Dual-Screen Portable Monitor 31.2-Inch', 'iemio.webp', '11.900.000', 'Jual Eimio Folding Dual-Screen Portable Monitor 31.2-Inch All-In-One Laptop dengan harga relatif murah tapi kualitas tidak murahan hanya di bukawarung.com', '2024-04-25 05:20:38'),
(7, 'Laptop New Gen', 'rog.webp', '12.000.00', 'Kami tidak merekomendasikan penggunaan link dan script untuk deskripsi dan fitur unggulanKami tidak merekomendasikan penggunaan link dan script untuk deskripsi dan fitur unggulanKami ', '2024-04-25 05:29:47'),
(8, 'Laptop Asus Vivo Book', 'asus vivobook.webp', '5.599.000', 'Untuk kebutuhan bekerja atau bermain, ASUS VivoBook 15 A516 adalah laptop level entri yang memberikan kinerja bertenaga dan visual yang imersif. Layar NanoEdge-nya menawarkan sudut pandang 178° yang luas dan lapisan anti-glare untuk pengalaman yang benar-benar menarik. ', '2024-04-25 05:33:39'),
(9, 'ASUS LAPTOP ROG STRIX-G', 'sus.webp', '15.499.000', 'ASUS LAPTOP ROG STRIX-G G513IH-R765B6T-O R7-4800H | 8GB | 512GB | NVIDIA GTX1650 | W10+OHS', '2024-04-25 05:36:17'),
(10, 'Acer Aspire Vero Av14 Intel I5-1235u 16gb 1tb Ssd 14.0 Fhd Backlit Keyboard Win11 Original - 3 Bulan, 16gb/1tb Ssd', 'acer Aspiere.webp', '8.099.000', 'SPESIALIS LAPTOP menjual Laptop HIGH SPEC dan LOW BUDGET pastinya . Cocok untuk kalian yang BPJS alias Budget Pas-Pasan Jiwa Sosialita, Oke langsung aja kepoin buat speknya ya :) Setiap pembelian disini dipastikan pembeli mendapatkan: - Barang Di-Jamin ORIGINAL 100 % FOTO REAL', '2024-04-25 05:41:00'),
(11, 'Hp Terbaru OPP0 Reno9 Pro 5G 12/512GB', 'oppo reno 9.webp', '1.750.000', 'Hp Terbaru OPP0 Reno9 Pro 5G 12/512GB Handphone 7.5Inci Smartphone Hp Murah Promo Reno6/Reno7 Reno8 Pro Handphone WIFI Dual Card HD Kamera Android Hp', '2024-04-25 05:43:53'),
(12, 'Opp Reno6 4g Ram 8gb Rom 256gb Layar 5.8 Inci Hp Ai Camera Belak', 'reno6.webp', '1.470.250', 'Selamat datang di: sanfuy, Selama epidemi, kami akan mendisinfeksi setiap paket ponsel! Pastikan ponsel yang Anda terima bebas dari bakteri. ——————Kelebihan kami—————— 1. 100% resmi asli, nikmati garansi resmi 2.', '2024-04-25 05:45:37'),
(14, 'laptop', 'asus vivobook.webp', '1.600.000.', 'tidak ada descripsi', '2024-04-26 07:01:29');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
