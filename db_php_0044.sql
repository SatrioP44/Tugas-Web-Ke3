-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Okt 2024 pada 08.33
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_php_0044`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user_0044`
--

CREATE TABLE `tb_user_0044` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jeniskelamin` enum('Laki - Laki','Perempuan') NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nohp` char(13) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user_0044`
--

INSERT INTO `tb_user_0044` (`id`, `nama`, `jeniskelamin`, `alamat`, `nohp`, `foto`) VALUES
(105, 'Satrio', 'Laki - Laki', 'Pekalongan', '087656456543', '6714a3ebae318_PictAvatar.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_user_0044`
--
ALTER TABLE `tb_user_0044`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_user_0044`
--
ALTER TABLE `tb_user_0044`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
