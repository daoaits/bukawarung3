-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Apr 2024 pada 09.10
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
-- Struktur dari tabel `metode_pembayaran`
--

CREATE TABLE `metode_pembayaran` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `waktu_pembayaran` timestamp NOT NULL DEFAULT current_timestamp(),
  `metode_pembayaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `metode_pembayaran`
--

INSERT INTO `metode_pembayaran` (`id`, `nama_lengkap`, `email`, `alamat`, `no_hp`, `nama_barang`, `waktu_pembayaran`, `metode_pembayaran`) VALUES
(1, 'Daffa Fachri', 'daffafachri24@gmail.com', 'jln.Ahmadyani, Kp.Rancasema Rt.08/Rw.01', '089513674764', 'laptop-lenovo-thinkpad-x250-core-i3-i5-i7-gen-5-layar-125inch', '2024-04-26 06:00:49', ''),
(2, 'Daffa Fachri', 'daffafachri24@gmail.com', 'rew', '089513674764', 'Laptop Asus Vivo Book', '2024-04-26 06:20:04', 'COD'),
(3, 'zidan', 'daffafachri24@gmail.com', 'jln', '089513674764', 'Laptop Asus Vivo Book', '2024-04-26 06:31:30', 'COD'),
(4, 'Daffa Fachri', 'daffafachri24@gmail.com', 'jln', '089513674764', 'Laptop New Gen', '2024-04-26 07:02:32', 'COD');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `metode_pembayaran`
--
ALTER TABLE `metode_pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `metode_pembayaran`
--
ALTER TABLE `metode_pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
