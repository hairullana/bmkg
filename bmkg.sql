-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Nov 2021 pada 01.09
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

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
  `kalibrasi_end` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_bmkg`
--

INSERT INTO `data_bmkg` (`id`, `pegawai`, `jumlah_peralatan`, `provinsi`, `jenis_alat`, `nama_alat`, `lokasi`, `kondisi`, `tanggal_update`, `tanggal_pelaksanaan`, `kalibrasi_end`) VALUES
(1, 'Karel Mogi', 1, 'Bali', 'Sound System', 'Speaker A43', 'Jl. Ayani', 'Baik', '2021-11-07', '2021-11-10', 'Rivaldo'),
(3, 'Bayu Anu', 3, 'Bali', 'Laptop', 'Laptop Asus 6432', 'Jl. Kedonganan', 'Baik', '2021-10-31', '2021-11-08', 'Suhar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
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
  `keterangan-foto` text NOT NULL,
  `penyusunLaporan1` varchar(64) NOT NULL,
  `penyusunLaporan2` varchar(64) NOT NULL,
  `penyusunLaporan3` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id`, `periode-tanggal`, `judul-kegiatan`, `pendahuluan`, `pelaksana`, `dasar-kegiatan`, `lokasi`, `lingkup-kegiatan`, `hasil`, `rekomendasi`, `foto`, `keterangan-foto`, `penyusunLaporan1`, `penyusunLaporan2`, `penyusunLaporan3`) VALUES
(2, '26 Maret 2021', 'Musyawarah besar bersama 2021. Hanya sebagai contoh judul yang panjang saja', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia reiciendis incidunt veniam ipsam dolorum quas? Non maiores asperiores vero, libero blanditiis perspiciatis numquam, hic quae laudantium explicabo nisi delectus ipsa. Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia reiciendis incidunt veniam ipsam dolorum quas? Non maiores asperiores vero, libero blanditiis perspiciatis numquam, hic quae laudantium explicabo nisi delectus ipsa.', 'Semua anggota yang aktif', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia reiciendis incidunt veniam ipsam dolorum quas? Non maiores asperiores vero, libero blanditiis perspiciatis numquam, hic quae laudantium explicabo nisi delectus ipsa. Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia reiciendis incidunt veniam ipsam dolorum quas? Non maiores asperiores vero, libero blanditiis perspiciatis numquam, hic quae laudantium explicabo nisi delectus ipsa. ', 'Jimbaran, Kecamatan Kuta Selan, Kabupaten Badung', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia reiciendis incidunt veniam ipsam dolorum quas? Non maiores asperiores vero, libero blanditiis perspiciatis numquam, hic quae laudantium explicabo nisi delectus ipsa.Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia reiciendis incidunt veniam ipsam dolorum quas? Non maiores asperiores vero, libero blanditiis perspiciatis numquam, hic quae laudantium explicabo nisi delectus ipsa.Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia reiciendis incidunt veniam ipsam dolorum quas? Non maiores asperiores vero, libero blanditiis perspiciatis numquam, hic quae laudantium explicabo nisi delectus ipsa.Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia reiciendis incidunt veniam ipsam dolorum quas? Non maiores asperiores vero, libero blanditiis perspiciatis numquam, hic quae laudantium explicabo nisi delectus ipsa.Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia reiciendis incidunt veniam ipsam dolorum quas? Non maiores asperiores vero, libero blanditiis perspiciatis numquam, hic quae laudantium explicabo nisi delectus ipsa.Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia reiciendis incidunt veniam ipsam dolorum quas? Non maiores asperiores vero, libero blanditiis perspiciatis numquam, hic quae laudantium explicabo nisi delectus ipsa.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia reiciendis incidunt veniam ipsam dolorum quas? Non maiores asperiores vero, libero blanditiis perspiciatis numquam, hic quae laudantium explicabo nisi delectus ipsa.Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia reiciendis incidunt veniam ipsam dolorum quas? Non maiores asperiores vero, libero blanditiis perspiciatis numquam, hic quae laudantium explicabo nisi delectus ipsa.Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia reiciendis incidunt veniam ipsam dolorum quas? Non maiores asperiores vero, libero blanditiis perspiciatis numquam, hic quae laudantium explicabo nisi delectus ipsa.Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia reiciendis incidunt veniam ipsam dolorum quas? Non maiores asperiores vero, libero blanditiis perspiciatis numquam, hic quae laudantium explicabo nisi delectus ipsa.Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia reiciendis incidunt veniam ipsam dolorum quas? Non maiores asperiores vero, libero blanditiis perspiciatis numquam, hic quae laudantium explicabo nisi delectus ipsa.Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia reiciendis incidunt veniam ipsam dolorum quas? Non maiores asperiores vero, libero blanditiis perspiciatis numquam, hic quae laudantium explicabo nisi delectus ipsa.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia reiciendis incidunt veniam ipsam dolorum quas? Non maiores asperiores vero, libero blanditiis perspiciatis numquam, hic quae laudantium explicabo nisi delectus ipsa.Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia reiciendis incidunt veniam ipsam dolorum quas? Non maiores asperiores vero, libero blanditiis perspiciatis numquam, hic quae laudantium explicabo nisi delectus ipsa.Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia reiciendis incidunt veniam ipsam dolorum quas? Non maiores asperiores vero, libero blanditiis perspiciatis numquam, hic quae laudantium explicabo nisi delectus ipsa.Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia reiciendis incidunt veniam ipsam dolorum quas? Non maiores asperiores vero, libero blanditiis perspiciatis numquam, hic quae laudantium explicabo nisi delectus ipsa.Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia reiciendis incidunt veniam ipsam dolorum quas? Non maiores asperiores vero, libero blanditiis perspiciatis numquam, hic quae laudantium explicabo nisi delectus ipsa.', '61971f1fd173c.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia reiciendis incidunt veniam ipsam dolorum quas? Non maiores asperiores vero, libero blanditiis perspiciatis numquam, hic quae laudantium explicabo nisi delectus ipsa.', 'Karel', 'Leo', 'Rivaldo'),
(6, '30 OKT – 04 NOV 2021', 'Penyelenggaraan Kalibrasi Lapang Peralatan Stasiun Meteorologi Klas III Mali – Alor, AWS Digitalisasi, dan AWOS Kategori I di Nusa Tenggara Timur', 'Menurut ISO/IEC Guide 17025:2017 kalibrasi adalah kegiatan untuk menentukan kebenaran konvensional nilai penunjukkan alat ukur dan bahan ukur dengan cara membandingkan terhadap standar ukur yang mampu telusur (traceable) ke standar nasional maupun internasional untuk satuan ukuran dan/atau internasional dan bahan-bahan acuan tersertifikasi.', 'I Komang Susila, S.Pd, I Wayan Riksa Wibawa, Raras Ayu Paramita, S.Tr.Inst.', 'Surat Perintah Tugas Kepala Balai Besar MKG Wilayah III, Nomor: KP.05.00/397/KBB3/X/2021 tanggal 13 Oktober 2021\r\n', '1. Stasiun Meteorologi Klas III Mali - Alor\r\n2. AWS Digitalisasi Mali – Alor\r\n3. AWOS Kategori I Mali - Alor', 'Sabtu, 30 Oktober 2021\r\n1. Perjalanan Denpasar – Kupang - Alor\r\n2. Koordinasi dengan Kepala Stasiun Meteorologi\r\nKlas III Mali Alor.\r\nMinggu, 31 Oktober 2021\r\n1. Instal alat Standar kalibrasi\r\n2. Mengunduh data AWOS Kategori I dan AWS\r\nStandar lalu mengolah hasil data sementara.\r\n3. Menyesuaikan waktu alat standar dengan alat yang\r\ndi kalibrasi\r\n4. Melakukan kalibrasi pada AWOS Kategori I.\r\n5. Melakukan download data sementara\r\n6. Melakukan Kalibrasi dan adjustment pada\r\nAutomatic Rain Gauge pada AWOS\r\n7. Mengunduh data AWS Standar dan AWOS\r\nKategori I.\r\nSenin, 01 November 2021\r\n1. Mengunduh data AWS Standar dan AWOS\r\nKategori I.\r\n2. Melakukan kalibrasi peralatan Barometer Digital\r\n3. Melakukan kalibrasi peralatan Anemometer\r\n4. Melakukan kalibrasi alat Thermometer\r\n5. Menginstal alat kalibrator pada logger AWS\r\nDigitalisasi\r\n6. Melakukan kalibrasi AWS Digitalisasi.\r\n7. Mengunduh data AWS Digitalisasi dan AWS\r\nStandar lalu mengolah hasil data sementara.\r\n8. Mengunduh data AWS Standar dan AWS\r\nDigitalisasi.\r\nSelasa, 02 November 2021\r\n1. Melakukan Kalibrasi dan adjustment sensor tipping\r\nbucket pada AWS Digitalisasi\r\n2. Melakukan pengecekan Campbell Stokes, Panci\r\nPenguapan, Penakar Hujan Obs dan Penakar hujan\r\nHellmann.\r\n3. Mengolah data hasil kalibrasi dan melakukan\r\nanalisa terhadap hasil kalibrasi.\r\n4. Menyusun Laporan Sementara Hasil Kalibrasi\r\nStasiun Meteorologi Klas III Mali,Alor.\r\n5. Memberi label kalibrasi pada alat yang di Kalibrasi\r\n6. Melaporkan Hasil Kalibrasi sementara\r\n7. Penandatangan Laporan Awal\r\n8. Melakukan Perjalanan Alor ke Kupang\r\nRabu, 03 November 2021\r\n1. Transit di Kupang\r\nKamis, 04 November 2021\r\n1. Perjalanan dari Kupang menuju Kantor BBMKG', '6. Melakukan Kalibrasi dan adjustment pada\r\nAutomatic Rain Gauge pada AWOS\r\n7. Mengunduh data AWS Standar dan AWOS\r\nKategori I.\r\nSenin, 01 November 2021\r\n1. Mengunduh data AWS Standar dan AWOS\r\nKategori I.\r\n2. Melakukan kalibrasi peralatan Barometer Digital\r\n3. Melakukan kalibrasi peralatan Anemometer\r\n4. Melakukan kalibrasi alat Thermometer\r\n5. Menginstal alat kalibrator pada logger AWS\r\nDigitalisasi\r\n6. Melakukan kalibrasi AWS Digitalisasi.\r\n7. Mengunduh data AWS Digitalisasi dan AWS\r\nStandar lalu mengolah hasil data sementara.\r\n8. Mengunduh data AWS Standar dan AWS\r\nDigitalisasi.\r\nSelasa, 02 November 2021\r\n1. Melakukan Kalibrasi dan adjustment sensor tipping\r\nbucket pada AWS Digitalisasi\r\n2. Melakukan pengecekan Campbell Stokes, Panci\r\nPenguapan, Penakar Hujan Obs dan Penakar hujan\r\nHellmann.\r\n3. Mengolah data hasil kalibrasi dan melakukan\r\nanalisa terhadap hasil kalibrasi.\r\n4. Menyusun Laporan Sementara Hasil Kalibrasi\r\nStasiun Meteorologi Klas III Mali,Alor.\r\n5. Memberi label kalibrasi pada alat yang di Kalibrasi\r\n6. Melaporkan Hasil Kalibrasi sementara\r\n7. Penandatangan Laporan Awal\r\n8. Melakukan Perjalanan Alor ke Kupang\r\nRabu, 03 November 2021\r\n1. Transit di Kupang\r\nKamis, 04 November 2021\r\n1. Perjalanan dari Kupang menuju Kantor BBMKG', '6. Melakukan Kalibrasi dan adjustment pada\r\nAutomatic Rain Gauge pada AWOS\r\n7. Mengunduh data AWS Standar dan AWOS\r\nKategori I.\r\nSenin, 01 November 2021\r\n1. Mengunduh data AWS Standar dan AWOS\r\nKategori I.\r\n2. Melakukan kalibrasi peralatan Barometer Digital\r\n3. Melakukan kalibrasi peralatan Anemometer\r\n4. Melakukan kalibrasi alat Thermometer\r\n5. Menginstal alat kalibrator pada logger AWS\r\nDigitalisasi\r\n6. Melakukan kalibrasi AWS Digitalisasi.\r\n7. Mengunduh data AWS Digitalisasi dan AWS\r\nStandar lalu mengolah hasil data sementara.\r\n8. Mengunduh data AWS Standar dan AWS\r\nDigitalisasi.\r\nSelasa, 02 November 2021\r\n1. Melakukan Kalibrasi dan adjustment sensor tipping\r\nbucket pada AWS Digitalisasi\r\n2. Melakukan pengecekan Campbell Stokes, Panci\r\nPenguapan, Penakar Hujan Obs dan Penakar hujan\r\nHellmann.\r\n3. Mengolah data hasil kalibrasi dan melakukan\r\nanalisa terhadap hasil kalibrasi.\r\n4. Menyusun Laporan Sementara Hasil Kalibrasi\r\nStasiun Meteorologi Klas III Mali,Alor.\r\n5. Memberi label kalibrasi pada alat yang di Kalibrasi\r\n6. Melaporkan Hasil Kalibrasi sementara\r\n7. Penandatangan Laporan Awal\r\n8. Melakukan Perjalanan Alor ke Kupang\r\nRabu, 03 November 2021\r\n1. Transit di Kupang\r\nKamis, 04 November 2021\r\n1. Perjalanan dari Kupang menuju Kantor BBMKG', '61a40d038e5e9.png', 'testi', 'karel', 'leo', 'halo'),
(7, '30 OKT – 04 NOV 2021', 'Penyelenggaraan Kalibrasi Lapang Peralatan Stasiun Meteorologi Klas III Mali – Alor, AWS Digitalisasi, dan AWOS Kategori I di Nusa Tenggara Timur', 'Menurut ISO/IEC Guide 17025:2017 kalibrasi adalah kegiatan untuk menentukan kebenaran konvensional nilai penunjukkan alat ukur dan bahan ukur dengan cara membandingkan terhadap standar ukur yang mampu telusur (traceable) ke standar nasional maupun internasional untuk satuan ukuran dan/atau internasional dan bahan-bahan acuan tersertifikasi.', 'I Komang Susila, S.Pd, I Wayan Riksa Wibawa, Raras Ayu Paramita, S.Tr.Inst.', 'Surat Perintah Tugas Kepala Balai Besar MKG Wilayah III, Nomor: KP.05.00/397/KBB3/X/2021 tanggal 13 Oktober 2021\r\n', '1. Stasiun Meteorologi Klas III Mali - Alor\r\n2. AWS Digitalisasi Mali – Alor\r\n3. AWOS Kategori I Mali - Alor', 'Sabtu, 30 Oktober 2021\r\n1. Perjalanan Denpasar – Kupang - Alor\r\n2. Koordinasi dengan Kepala Stasiun Meteorologi\r\nKlas III Mali Alor.\r\nMinggu, 31 Oktober 2021\r\n1. Instal alat Standar kalibrasi\r\n2. Mengunduh data AWOS Kategori I dan AWS\r\nStandar lalu mengolah hasil data sementara.\r\n3. Menyesuaikan waktu alat standar dengan alat yang\r\ndi kalibrasi\r\n4. Melakukan kalibrasi pada AWOS Kategori I.\r\n5. Melakukan download data sementara\r\n6. Melakukan Kalibrasi dan adjustment pada\r\nAutomatic Rain Gauge pada AWOS\r\n7. Mengunduh data AWS Standar dan AWOS\r\nKategori I.\r\nSenin, 01 November 2021\r\n1. Mengunduh data AWS Standar dan AWOS\r\nKategori I.\r\n2. Melakukan kalibrasi peralatan Barometer Digital\r\n3. Melakukan kalibrasi peralatan Anemometer\r\n4. Melakukan kalibrasi alat Thermometer\r\n5. Menginstal alat kalibrator pada logger AWS\r\nDigitalisasi\r\n6. Melakukan kalibrasi AWS Digitalisasi.\r\n7. Mengunduh data AWS Digitalisasi dan AWS\r\nStandar lalu mengolah hasil data sementara.\r\n8. Mengunduh data AWS Standar dan AWS\r\nDigitalisasi.\r\nSelasa, 02 November 2021\r\n1. Melakukan Kalibrasi dan adjustment sensor tipping\r\nbucket pada AWS Digitalisasi\r\n2. Melakukan pengecekan Campbell Stokes, Panci\r\nPenguapan, Penakar Hujan Obs dan Penakar hujan\r\nHellmann.\r\n3. Mengolah data hasil kalibrasi dan melakukan\r\nanalisa terhadap hasil kalibrasi.\r\n4. Menyusun Laporan Sementara Hasil Kalibrasi\r\nStasiun Meteorologi Klas III Mali,Alor.\r\n5. Memberi label kalibrasi pada alat yang di Kalibrasi\r\n6. Melaporkan Hasil Kalibrasi sementara\r\n7. Penandatangan Laporan Awal\r\n8. Melakukan Perjalanan Alor ke Kupang\r\nRabu, 03 November 2021\r\n1. Transit di Kupang\r\nKamis, 04 November 2021\r\n1. Perjalanan dari Kupang menuju Kantor BBMKG', '6. Melakukan Kalibrasi dan adjustment pada\r\nAutomatic Rain Gauge pada AWOS\r\n7. Mengunduh data AWS Standar dan AWOS\r\nKategori I.\r\nSenin, 01 November 2021\r\n1. Mengunduh data AWS Standar dan AWOS\r\nKategori I.\r\n2. Melakukan kalibrasi peralatan Barometer Digital\r\n3. Melakukan kalibrasi peralatan Anemometer\r\n4. Melakukan kalibrasi alat Thermometer\r\n5. Menginstal alat kalibrator pada logger AWS\r\nDigitalisasi\r\n6. Melakukan kalibrasi AWS Digitalisasi.\r\n7. Mengunduh data AWS Digitalisasi dan AWS\r\nStandar lalu mengolah hasil data sementara.\r\n8. Mengunduh data AWS Standar dan AWS\r\nDigitalisasi.\r\nSelasa, 02 November 2021\r\n1. Melakukan Kalibrasi dan adjustment sensor tipping\r\nbucket pada AWS Digitalisasi\r\n2. Melakukan pengecekan Campbell Stokes, Panci\r\nPenguapan, Penakar Hujan Obs dan Penakar hujan\r\nHellmann.\r\n3. Mengolah data hasil kalibrasi dan melakukan\r\nanalisa terhadap hasil kalibrasi.\r\n4. Menyusun Laporan Sementara Hasil Kalibrasi\r\nStasiun Meteorologi Klas III Mali,Alor.\r\n5. Memberi label kalibrasi pada alat yang di Kalibrasi\r\n6. Melaporkan Hasil Kalibrasi sementara\r\n7. Penandatangan Laporan Awal\r\n8. Melakukan Perjalanan Alor ke Kupang\r\nRabu, 03 November 2021\r\n1. Transit di Kupang\r\nKamis, 04 November 2021\r\n1. Perjalanan dari Kupang menuju Kantor BBMKG', '6. Melakukan Kalibrasi dan adjustment pada\r\nAutomatic Rain Gauge pada AWOS\r\n7. Mengunduh data AWS Standar dan AWOS\r\nKategori I.\r\nSenin, 01 November 2021\r\n1. Mengunduh data AWS Standar dan AWOS\r\nKategori I.\r\n2. Melakukan kalibrasi peralatan Barometer Digital\r\n3. Melakukan kalibrasi peralatan Anemometer\r\n4. Melakukan kalibrasi alat Thermometer\r\n5. Menginstal alat kalibrator pada logger AWS\r\nDigitalisasi\r\n6. Melakukan kalibrasi AWS Digitalisasi.\r\n7. Mengunduh data AWS Digitalisasi dan AWS\r\nStandar lalu mengolah hasil data sementara.\r\n8. Mengunduh data AWS Standar dan AWS\r\nDigitalisasi.\r\nSelasa, 02 November 2021\r\n1. Melakukan Kalibrasi dan adjustment sensor tipping\r\nbucket pada AWS Digitalisasi\r\n2. Melakukan pengecekan Campbell Stokes, Panci\r\nPenguapan, Penakar Hujan Obs dan Penakar hujan\r\nHellmann.\r\n3. Mengolah data hasil kalibrasi dan melakukan\r\nanalisa terhadap hasil kalibrasi.\r\n4. Menyusun Laporan Sementara Hasil Kalibrasi\r\nStasiun Meteorologi Klas III Mali,Alor.\r\n5. Memberi label kalibrasi pada alat yang di Kalibrasi\r\n6. Melaporkan Hasil Kalibrasi sementara\r\n7. Penandatangan Laporan Awal\r\n8. Melakukan Perjalanan Alor ke Kupang\r\nRabu, 03 November 2021\r\n1. Transit di Kupang\r\nKamis, 04 November 2021\r\n1. Perjalanan dari Kupang menuju Kantor BBMKG', '61a40d73f39f9.png', 'testi', 'karel', 'leo', 'halo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nota`
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
-- Dumping data untuk tabel `nota`
--

INSERT INTO `nota` (`id`, `nomor`, `yth`, `dari`, `hal`, `tanggal`, `tembusan`, `tugas`, `lokasi`, `selama`, `tanggal-berangkat`, `tanggal-kembali`, `sumber-dana`, `nama`, `nip`, `pangkat`, `jabatan`, `nama2`, `nip2`, `pangkat2`, `jabatan2`, `nama3`, `nip3`, `pangkat3`, `jabatan3`) VALUES
(2, 'ND / 042 / KSIKR / X / 2021', 'Koordinator Bidang Observasi', 'Sub Koordinator Bidang Instrumentasi dan Kalibrasi', 'Permohonan Revisi Pembuatan SPT', '27 Oktober 2021', '1. Kepala BBMKG Wil III Denpasar\r\n2. Arsip\r\n', 'AWOS dan Stasiun Meteorologi Nunukan\r\nAWOS dan Stamet Long Bawan\r\nARG Nunukan\r\nARG Sebatik\r\nARG Bunyu\r\nARG Linmas\r\nARG Kalimarau\r\nARG Samboja\r\nInaTEWS BKB\r\n', 'Kalimantan Utara', '14 (empat belas) hari', '19 Oktober 2021', '	01 November 2021', 'Penyelenggaraan Kalibrasi Peralatan ARG dan AWOS All Weather di BBMKG Wil III', 'Mahmud Yusuf ST., MT.', '197702011999031001', 'Pembina / IV-a', 'Sub Koordinator Bidang Inskal', 'Supriyono, ST., MM.', '196306221984031001', 'Pembina / IV-a', 'PMG Madya', 'Iwan Dwi Cahyono, S.Tr.', '198509222006041003', 'Penata Muda Tk.I / IIIb', 'PMG Pertama');

-- --------------------------------------------------------

--
-- Struktur dari tabel `spt`
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
-- Dumping data untuk tabel `spt`
--

INSERT INTO `spt` (`id`, `no-tugas`, `nama`, `nip`, `gol`, `jabatan-utama`, `unit-kerja`, `nama1`, `nip1`, `gol1`, `jabatan1`, `nama2`, `nip2`, `gol2`, `jabatan2`, `tugas`, `lokasi`, `lama`, `tanggal-berangkat`, `dana`) VALUES
(5, 'KP 05 00/060/KBB3/II/2021', 'Agus Wahyu Raharjo, SP', '19620829 198703 1 001', 'Pembina Utama Muda, IV/c', 'Kepala Balai Besar', 'Balai Besar Meteorologi, Klimatologi, dan Gefisika Wilayah III', 'Ita Ayu Purnawati, S.Tr', '19920924 201312 2 002', 'Penata Muda, III/a', 'PMG Pertama', 'Kurnia Rubi Andini, S.Tr', '19950329 201411 2 001', 'Penata Muda, III/a', 'PMG Pertama', 'Melaksanakan Kalibrasi ARG, AWS dan Stasiun Meteorologi Kalianget', '1. ARG Socah\r\n2. ARG Sampang\r\n3. ARG Dasuk\r\n4. AWS Sampang\r\n5. (BPMJM) Batumarmar\r\n6. Stasiun Meteorologi Kalianget', '9 (sembilan) hari', '3 - 1 Maret 2021', 'Penyelenggaraan Kalibrasi Peralatan ARG dan AWS di BBMKG Wilayah III'),
(8, 'KP.05.00/060/KBB3/II2021', 'Agus Wahyu Raharjo SP', '19620829', 'Pembina Utama Muda IV/c', 'Kepala Balai Besar', 'Balai Besar Meteorologi, Klimatologi dan Geofisika Wilayah III', 'Ita Ayu Purnawati, S TR', '19620829 19620829 002', 'Pembina Utama Muda IV/c', 'Pmg Pertama', 'Kepala Balai Besar', 'Kepala Balai Besar', 'Kepala Balai Besar', 'Kepala Balai Besar', 'Melaksanakan Kalibrasi ARG, AWS, dan Stasiun Meteorologi Kalianget', '1. ARG Socah\r\n2. ARG Sampang\r\n3. ARG Dasuk\r\n4. AWS Sampang\r\n5. (BPJM) hahaha\r\n6. Statisun wkkwkwk', '9 (sembilan ) Hari', '3 -11 maret', 'Penyelenggara Kalibrasi Peralatan ARG dan AWS di BMKG Wilayah III'),
(9, 'KP.05.00/060/KBB3/II2021', 'Agus Wahyu Raharjo SP', '19620829', 'Pembina Utama Muda IV/c', 'Kepala Balai Besar', 'Balai Besar Meteorologi, Klimatologi dan Geofisika Wilayah III', 'Ita Ayu Purnawati, S TR', '19620829 19620829 002', 'Pembina Utama Muda IV/c', 'Pmg Pertama', 'Kepala Balai Besar', 'Kepala Balai Besar', 'Kepala Balai Besar', 'Kepala Balai Besar', 'Melaksanakan Kalibrasi ARG, AWS, dan Stasiun Meteorologi Kalianget', '1. ARG Socah\r\n2. ARG Sampang\r\n3. ARG Dasuk\r\n4. AWS Sampang\r\n5. (BPJM) hahaha\r\n6. Statisun wkkwkwk', '9 (sembilan ) Hari', '3 -11 maret', 'Penyelenggara Kalibrasi Peralatan ARG dan AWS di BMKG Wilayah III');

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
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `spt`
--
ALTER TABLE `spt`
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

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `nota`
--
ALTER TABLE `nota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `spt`
--
ALTER TABLE `spt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
