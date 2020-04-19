-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Apr 2020 pada 17.20
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040112`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `makanan`
--

CREATE TABLE `makanan` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `nama_makanan` varchar(100) NOT NULL,
  `asal_makanan` varchar(100) NOT NULL,
  `tahun_dibuat` varchar(100) NOT NULL,
  `bahan_utama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `makanan`
--

INSERT INTO `makanan` (`id`, `img`, `nama_makanan`, `asal_makanan`, `tahun_dibuat`, `bahan_utama`) VALUES
(1, '1.jpg', 'Seblak', 'Indonesia', 'Abad ke 19', 'Kerupuk'),
(2, '2.jpg', 'Spagheti', 'Italia', 'Abad ke 12', 'Tepung Gandum'),
(3, '3.jpg', 'Rendang', 'Indonesia', 'Abad ke 16', 'Daging Sapi'),
(4, '4.jpg', 'Pizza', 'Italia', 'Abad ke 16', 'Tepung Gandum'),
(5, '5.jpg', 'Sate ', 'Indonesia', 'Abad ke 19', 'Daging Kambing'),
(6, '6.jpg', 'Ramen', 'Jepang', 'Abad ke 15', 'Tepung Terigu'),
(7, '7.jpg', 'Dorayaki', 'Jepang', 'Abad ke 20', 'Adonan Castella'),
(8, '8.jpg', 'Opor Ayam', 'Indonesia', 'Abad ke 18', 'Daging Ayam'),
(9, '9.jpg', 'Hamburger', 'Amerika', 'Abad ke 17', 'Roti, Daging Sapi'),
(10, '10.jpg', 'Hot Dog', 'Jerman', 'Abad ke 18', 'Roti, Daging');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
