-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2021 at 05:02 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.16

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
-- Table structure for table `data_bmkg`
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
-- Dumping data for table `data_bmkg`
--

INSERT INTO `data_bmkg` (`id`, `pegawai`, `jumlah_peralatan`, `provinsi`, `jenis_alat`, `nama_alat`, `lokasi`, `kondisi`, `tanggal_update`, `tanggal_pelaksanaan`, `petugas`) VALUES
(1, 'Karel Mogi', 1, 'Bali', 'Sound System', 'Speaker A43', 'Jl. Ayani', 'Baik', '2021-11-07', '2021-11-10', 'Rivaldo'),
(3, 'Bayu Anu', 3, 'Bali', 'Laptop', 'Laptop Asus 6432', 'Jl. Kedonganan', 'Baik', '2021-10-31', '2021-11-08', 'Suhar');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int(11) NOT NULL,
  `periode-tanggal` text NOT NULL,
  `judul-kegiatan` text NOT NULL,
  `pendahuluan` text NOT NULL,
  `pelaksana` text NOT NULL,
  `dasar-kegiatan` text NOT NULL,
  `lokasi` text NOT NULL,
  `lingkup-kegiatan` text NOT NULL,
  `hasil` text NOT NULL,
  `rekomendasi` text NOT NULL,
  `foto` text NOT NULL,
  `keterangan-foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `periode-tanggal`, `judul-kegiatan`, `pendahuluan`, `pelaksana`, `dasar-kegiatan`, `lokasi`, `lingkup-kegiatan`, `hasil`, `rekomendasi`, `foto`, `keterangan-foto`) VALUES
(2, '26 Maret 2021', 'Musyawarah besar bersama 2021 ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia reiciendis incidunt veniam ipsam dolorum quas? Non maiores asperiores vero, libero blanditiis perspiciatis numquam, hic quae laudantium explicabo nisi delectus ipsa. Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia reiciendis incidunt veniam ipsam dolorum quas? Non maiores asperiores vero, libero blanditiis perspiciatis numquam, hic quae laudantium explicabo nisi delectus ipsa.', 'Semua anggota yang aktif', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia reiciendis incidunt veniam ipsam dolorum quas? Non maiores asperiores vero, libero blanditiis perspiciatis numquam, hic quae laudantium explicabo nisi delectus ipsa. Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia reiciendis incidunt veniam ipsam dolorum quas? Non maiores asperiores vero, libero blanditiis perspiciatis numquam, hic quae laudantium explicabo nisi delectus ipsa. ', 'Jimbaran', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia reiciendis incidunt veniam ipsam dolorum quas? Non maiores asperiores vero, libero blanditiis perspiciatis numquam, hic quae laudantium explicabo nisi delectus ipsa.Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia reiciendis incidunt veniam ipsam dolorum quas? Non maiores asperiores vero, libero blanditiis perspiciatis numquam, hic quae laudantium explicabo nisi delectus ipsa.Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia reiciendis incidunt veniam ipsam dolorum quas? Non maiores asperiores vero, libero blanditiis perspiciatis numquam, hic quae laudantium explicabo nisi delectus ipsa.Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia reiciendis incidunt veniam ipsam dolorum quas? Non maiores asperiores vero, libero blanditiis perspiciatis numquam, hic quae laudantium explicabo nisi delectus ipsa.Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia reiciendis incidunt veniam ipsam dolorum quas? Non maiores asperiores vero, libero blanditiis perspiciatis numquam, hic quae laudantium explicabo nisi delectus ipsa.Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia reiciendis incidunt veniam ipsam dolorum quas? Non maiores asperiores vero, libero blanditiis perspiciatis numquam, hic quae laudantium explicabo nisi delectus ipsa.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia reiciendis incidunt veniam ipsam dolorum quas? Non maiores asperiores vero, libero blanditiis perspiciatis numquam, hic quae laudantium explicabo nisi delectus ipsa.Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia reiciendis incidunt veniam ipsam dolorum quas? Non maiores asperiores vero, libero blanditiis perspiciatis numquam, hic quae laudantium explicabo nisi delectus ipsa.Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia reiciendis incidunt veniam ipsam dolorum quas? Non maiores asperiores vero, libero blanditiis perspiciatis numquam, hic quae laudantium explicabo nisi delectus ipsa.Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia reiciendis incidunt veniam ipsam dolorum quas? Non maiores asperiores vero, libero blanditiis perspiciatis numquam, hic quae laudantium explicabo nisi delectus ipsa.Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia reiciendis incidunt veniam ipsam dolorum quas? Non maiores asperiores vero, libero blanditiis perspiciatis numquam, hic quae laudantium explicabo nisi delectus ipsa.Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia reiciendis incidunt veniam ipsam dolorum quas? Non maiores asperiores vero, libero blanditiis perspiciatis numquam, hic quae laudantium explicabo nisi delectus ipsa.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia reiciendis incidunt veniam ipsam dolorum quas? Non maiores asperiores vero, libero blanditiis perspiciatis numquam, hic quae laudantium explicabo nisi delectus ipsa.Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia reiciendis incidunt veniam ipsam dolorum quas? Non maiores asperiores vero, libero blanditiis perspiciatis numquam, hic quae laudantium explicabo nisi delectus ipsa.Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia reiciendis incidunt veniam ipsam dolorum quas? Non maiores asperiores vero, libero blanditiis perspiciatis numquam, hic quae laudantium explicabo nisi delectus ipsa.Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia reiciendis incidunt veniam ipsam dolorum quas? Non maiores asperiores vero, libero blanditiis perspiciatis numquam, hic quae laudantium explicabo nisi delectus ipsa.Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia reiciendis incidunt veniam ipsam dolorum quas? Non maiores asperiores vero, libero blanditiis perspiciatis numquam, hic quae laudantium explicabo nisi delectus ipsa.', '61971f1fd173c.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia reiciendis incidunt veniam ipsam dolorum quas? Non maiores asperiores vero, libero blanditiis perspiciatis numquam, hic quae laudantium explicabo nisi delectus ipsa.');

-- --------------------------------------------------------

--
-- Table structure for table `nota`
--

CREATE TABLE `nota` (
  `id` int(11) NOT NULL,
  `nomor` text NOT NULL,
  `yth` text NOT NULL,
  `dari` text NOT NULL,
  `hal` text NOT NULL,
  `tanggal` text NOT NULL,
  `tembusan` text NOT NULL,
  `tugas` text NOT NULL,
  `lokasi` text NOT NULL,
  `selama` text NOT NULL,
  `tanggal-berangkat` text NOT NULL,
  `tanggal-kembali` text NOT NULL,
  `sumber-dana` text NOT NULL,
  `nama` text NOT NULL,
  `nip` text NOT NULL,
  `pangkat` text NOT NULL,
  `jabatan` text NOT NULL,
  `nama2` text NOT NULL,
  `nip2` text NOT NULL,
  `pangkat2` text NOT NULL,
  `jabatan2` text NOT NULL,
  `nama3` text NOT NULL,
  `nip3` text NOT NULL,
  `pangkat3` text NOT NULL,
  `jabatan3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nota`
--

INSERT INTO `nota` (`id`, `nomor`, `yth`, `dari`, `hal`, `tanggal`, `tembusan`, `tugas`, `lokasi`, `selama`, `tanggal-berangkat`, `tanggal-kembali`, `sumber-dana`, `nama`, `nip`, `pangkat`, `jabatan`, `nama2`, `nip2`, `pangkat2`, `jabatan2`, `nama3`, `nip3`, `pangkat3`, `jabatan3`) VALUES
(2, '345864289', 'Luh Ris', 'Kadek Ayu', 'Penjadwalan Ulang', '28 Agustus 2021', 'Urgent', 'Melakukan penjadwalan ulang', 'Jawa timur', '3 Bulan', '27 Agustus 2021', '28 Agustus 2021', 'Internal', 'Putu', '384789', 'I', 'Data Analis', 'Gede', '32473', 'I', 'Bisnis Analis', 'Komang', '3892478321', 'I', 'Copy Writer');

-- --------------------------------------------------------

--
-- Table structure for table `spt`
--

CREATE TABLE `spt` (
  `id` int(11) NOT NULL,
  `no-tugas` text NOT NULL,
  `nama` text NOT NULL,
  `nip` text NOT NULL,
  `gol` text NOT NULL,
  `jabatan-utama` text NOT NULL,
  `unit-kerja` text NOT NULL,
  `nama1` text NOT NULL,
  `nip1` text NOT NULL,
  `gol1` text NOT NULL,
  `jabatan1` text NOT NULL,
  `nama2` text NOT NULL,
  `nip2` text NOT NULL,
  `gol2` text NOT NULL,
  `jabatan2` text NOT NULL,
  `tugas` text NOT NULL,
  `lokasi` text NOT NULL,
  `lama` text NOT NULL,
  `tanggal-berangkat` text NOT NULL,
  `dana` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spt`
--

INSERT INTO `spt` (`id`, `no-tugas`, `nama`, `nip`, `gol`, `jabatan-utama`, `unit-kerja`, `nama1`, `nip1`, `gol1`, `jabatan1`, `nama2`, `nip2`, `gol2`, `jabatan2`, `tugas`, `lokasi`, `lama`, `tanggal-berangkat`, `dana`) VALUES
(5, '123X6', 'Luh Ris', '385509238', 'II', 'Manager', 'Denpasar', 'Kadek', '327253409', 'I', 'Akunting', 'Putu', '3864896', 'I', 'Data Analis', 'Rapat Besar', 'Jakarta', '2 Bulan', '27 Oktober 2021', 'Internal');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(16) NOT NULL,
  `password` varchar(64) NOT NULL,
  `jabatan` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `jabatan`) VALUES
('admin', 'admin', 'admin'),
('lab', 'lab', 'lab'),
('tu', 'tu', 'tu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_bmkg`
--
ALTER TABLE `data_bmkg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spt`
--
ALTER TABLE `spt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_bmkg`
--
ALTER TABLE `data_bmkg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nota`
--
ALTER TABLE `nota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `spt`
--
ALTER TABLE `spt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
