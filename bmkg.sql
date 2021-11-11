-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Nov 2021 pada 06.07
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bmkg`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_bmkg`
--

CREATE TABLE `data_bmkg` (
  `id` int(11) NOT NULL,
  `pegawai` varchar(64) NOT NULL,
  `jumlah_peralatan` int(11) NOT NULL,
  `provinsi` varchar(64) NOT NULL,
  `jenis_alat` varchar(64) NOT NULL,
  `nama_alat` varchar(64) NOT NULL,
  `lokasi` varchar(64) NOT NULL,
  `kondisi` varchar(64) NOT NULL,
  `tanggal_update` date NOT NULL,
  `tanggal_pelaksanaan` date NOT NULL,
  `petugas` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_bmkg`
--

INSERT INTO `data_bmkg` (`id`, `pegawai`, `jumlah_peralatan`, `provinsi`, `jenis_alat`, `nama_alat`, `lokasi`, `kondisi`, `tanggal_update`, `tanggal_pelaksanaan`, `petugas`) VALUES
(1, 'Karel Mogi', 1, 'Bali', 'Sound System', 'Speaker A43', 'Jl. Ayani', 'Baik', '2021-11-07', '2021-11-10', 'Rivaldo'),
(3, 'Bayu Anu', 3, 'Bali', 'Laptop', 'Laptop Asus 6432', 'Jl. Kedonganan', 'Baik', '2021-10-31', '2021-11-08', 'Suhar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(16) NOT NULL,
  `password` varchar(64) NOT NULL,
  `jabatan` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `jabatan`) VALUES
('admin', 'admin', 'admin'),
('lab', 'lab', 'lab'),
('tu', 'tu', 'tu');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_bmkg`
--
ALTER TABLE `data_bmkg`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_bmkg`
--
ALTER TABLE `data_bmkg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
