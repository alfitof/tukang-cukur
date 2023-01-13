-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jan 2023 pada 03.57
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orderan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `member_username` varchar(128) NOT NULL,
  `member_password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id`, `member_username`, `member_password`, `email`, `nama`, `created_at`, `updated_at`) VALUES
(3, 'admin', 'admin', 'admin@gmail.com', 'Admin', NULL, NULL),
(6, 'rayhans', '123', 'rayhan112@gmail.com', 'Ray', '2023-01-11', '2023-01-11'),
(7, 'fernando', '123', 'ado@gmail.com', 'Fernando', '2023-01-12', '2023-01-12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_cukur`
--

CREATE TABLE `order_cukur` (
  `id` int(11) NOT NULL,
  `pemesan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `order_cukur`
--

INSERT INTO `order_cukur` (`id`, `pemesan`, `alamat`, `tanggal`, `created_at`, `updated_at`) VALUES
(8, 'Aldapstsr', 'Jl Baleendah', '2023-01-31', '2023-01-10', '2023-01-10'),
(12, 'ray', 'Kopo', '2023-01-16', '2023-01-11', '2023-01-11'),
(13, 'Fernando', 'Buah Batu', '2023-02-24', '2023-01-11', '2023-01-11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `review` varchar(256) NOT NULL,
  `gambar` text NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `testimoni`
--

INSERT INTO `testimoni` (`id`, `nama`, `review`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Ado Puts', 'Barbernya bisa cukur mohawk mepet', 'ado.jpg', NULL, NULL),
(2, 'Iver Rapper', 'Pokonya mantep dah, kaya cukur di bintaro', 'rapper.jpg', NULL, NULL),
(3, 'Han Simba', 'Rawr', 'simba.jpg', NULL, NULL),
(4, 'Hakiki Gaming', 'Barbernya profesional', 'gamer.jpg', NULL, NULL),
(5, 'Nugi Skuy', 'Wawasan barbernya luas banget', 'chad.jpg', NULL, NULL),
(7, 'Fito Einstein', 'Mantep, bisa kretek juga', 'kretek.jpg', NULL, NULL),
(15, 'King Gumi', 'Abangnya ga malu nyukur saya lagi rapat', 'king.jpg', NULL, NULL),
(16, 'Vena 1872', 'Qamoe Nanyeua??', 'cepak.jpg', NULL, NULL),
(23, 'Ray', 'Cukuran yang sangat rill', 'boong-yang-bener.gif', '2023-01-11', '2023-01-11'),
(24, 'Ray', 'Mantap kak', 'indoreaksi-jamet.gif', '2023-01-11', '2023-01-11'),
(25, 'Ray', 'Gaya rambut modern!', 'windah-basudara.gif', '2023-01-11', '2023-01-11');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `order_cukur`
--
ALTER TABLE `order_cukur`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `order_cukur`
--
ALTER TABLE `order_cukur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
