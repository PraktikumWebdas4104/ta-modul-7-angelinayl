-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Okt 2018 pada 04.59
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mhsw`
--

CREATE TABLE `mhsw` (
  `Nama` varchar(100) NOT NULL,
  `NIM` varchar(10) NOT NULL,
  `JenisKelamin` varchar(100) NOT NULL,
  `ProgramStudi` varchar(100) NOT NULL,
  `Fakultas` varchar(100) NOT NULL,
  `Asal` varchar(100) NOT NULL,
  `MottoHidup` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mhsw`
--

INSERT INTO `mhsw` (`Nama`, `NIM`, `JenisKelamin`, `ProgramStudi`, `Fakultas`, `Asal`, `MottoHidup`) VALUES
('Michelle Miscia', '6701172020', '', 'DKV', '', 'Kab. Bandung Selatan', 'Tiada hal yang sia-sia'),
('Anastasha', '6701173020', 'Perempuan', 'MBTI', 'Fakultas Ekonomi dan Bisnis', 'Bekasi', 'Selagi Bekasi Masih Panas, Berarti Saya Masih di Indonesia'),
('Marcelino Mahardika', '6701174029', 'Perempuan', 'DKV', 'Fakultas Industri Kreatif', 'Kabupaten B', 'Tiada hal yang sia-sia'),
('Mikaela', '6701174040', 'Perempuan', 'FD', 'Fakultas Industri Kreatif', 'Meikarta', 'Selagi kamu bisa, kenapa harus yang lain'),
('Giorgino Armani', '6701174090', 'Laki-Laki', 'DI', 'Fakultas Industri Kreatif', 'Jakarta', 'Yang penting oke');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mhsw`
--
ALTER TABLE `mhsw`
  ADD PRIMARY KEY (`NIM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
