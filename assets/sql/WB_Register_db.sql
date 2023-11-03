-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Nov 2023 pada 19.49
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wb_register`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengakses`
--

CREATE TABLE `pengakses` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengakses`
--

INSERT INTO `pengakses` (`id_user`, `nama`) VALUES
(1000064401, 'Devan Cakra');

-- --------------------------------------------------------

--
-- Struktur dari tabel `registrasi`
--

CREATE TABLE `registrasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pstudi` varchar(50) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `divisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `registrasi`
--

INSERT INTO `registrasi` (`id`, `nama`, `email`, `pstudi`, `telp`, `divisi`) VALUES
(1, 'Endy Gigih Pratama', '18081010066@student.upnjatim.ac.id', 'Teknik Informatika', '082332342324', 'Mekatronika'),
(2, 'Jefri Abdurrozak Ismail', '18081010059@student.upnjatim.ac.id', 'Teknik Informatika', '085223442266', 'Mekatronika'),
(3, 'Helna Freecenta', '18081010109@student.upnjatim.ac.id', 'Teknik Informatika', '083898334423', 'Menfo'),
(4, 'Sonia Tisa Putri', '18081010113@student.upnjatim.ac.id', 'Teknik Informatika', '082124522453', 'Menfo'),
(5, 'Fahmi Nugroho Alibasyah', '18081010065@student.upnjatim.ac.id', 'Teknik Informatika', '085854353532', 'Mekatronika'),
(6, 'Dwiki Aditama Supangkat', '18081010064@student.upnjatim.ac.id', 'Teknik Informatika', '083834638784', 'Mekatronika'),
(7, 'Irsyad Zainul Hanif', '18081010007@student.upnjatim.ac.id', 'Teknik Informatika', '085852684532', 'Programming'),
(8, 'Mohamad Ilham Prasetyo Raharjo', '18081010019@student.upnjatim.ac.id', 'Teknik Informatika', '082824535484', 'Programming'),
(9, 'Elang Eka Marga Putra', '18081010068@student.upnjatim.ac.id', 'Teknik Informatika', '081244354652', 'Menfo'),
(10, 'Dimas Amrulloh', '18081010125@student.upnjatim.ac.id', 'Teknik Informatika', '083854632345', 'Mekatronika'),
(11, 'Alfiatun Masrifah', '18081010032@student.upnjatim.ac.id', 'Teknik Informatika', '082234543546', 'Menfo'),
(12, 'Dwi Wahyu Effendi', '18081010017@student.upnjatim.ac.id', 'Teknik Informatika', '085864542354', 'Menfo'),
(13, 'Amirah Aulia Fitri', '18081010029@student.upnjatim.ac.id', 'Teknik Informatika', '083834353535', 'Menfo'),
(14, 'Melania Syafrida Paruntu', '18081010011@student.upnjatim.ac.id', 'Teknik Informatika', '087834353453', 'Menfo'),
(15, 'Mohammad Faisal Riftiarrasyid', '18081010001@student.upnjatim.ac.id', 'Teknik Informatika', '082854563456', 'Programming'),
(16, 'Imalia Rosyida', '19091010113@student.upnjatim.ac.id', 'Teknik Informatika', '085232452325', 'Menfo'),
(17, 'Dian Agus Prawinata', '19091010074@student.upnjatim.ac.id', 'Teknik Informatika', '085554322356', 'Programming'),
(18, 'Dimas Rehan Nabiel Avianto', '18081010021@student.upnjatim.ac.id', 'Teknik Informatika', '087873242345', 'Mekatronika'),
(19, 'Mohammad Naufal Pratama', '18081010121@student.upnjatim.ac.id', 'Teknik Informatika', '087835631975', 'Programming'),
(20, 'Nadia Ristya Dewi', '18081010071@student.upnjatim.ac.id', 'Teknik Informatika', '087843689843', 'Menfo');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pengakses`
--
ALTER TABLE `pengakses`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
