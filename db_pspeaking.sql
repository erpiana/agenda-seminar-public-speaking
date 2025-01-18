-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Bulan Mei 2023 pada 14.37
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pspeaking`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel1`
--

CREATE TABLE `tabel1` (
  `ID` int(3) NOT NULL,
  `Judul` varchar(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `Deskripsi` varchar(800) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tabel1`
--

INSERT INTO `tabel1` (`ID`, `Judul`, `tanggal`, `Deskripsi`) VALUES
(1, 'Seminar Public Speaking', '2023-08-24', 'Selamat datang di acara seminar public speaking yang akan diadakan dalam waktu dekat!. Acara ini dirancang khusus untuk membantu Anda meningkatkan keterampilan berbicara di depan umum dan menjadi seorang pembicara yang percaya diri.Kami telah mengundang para ahli dalam bidang public speaking yang telah memiliki pengalaman luas dan sukses dalam berkomunikasi di hadapan audiens yang besar. Mereka akan berbagi pengetahuan, tips, dan strategi praktis untuk membantu Anda mengatasi ketakutan, meningkatkan kejelasan pesan, dan memberikan presentasi yang menginspirasi.'),
(2, NULL, NULL, 'Acara ini juga akan memberikan kesempatan bagi Anda untuk berlatih langsung dengan sesi simulasi dan mendapatkan umpan balik konstruktif dari para ahli. Selain itu, Anda akan dapat bertemu dan berinteraksi dengan para peserta lainnya yang memiliki minat yang sama, sehingga dapat saling mendukung dan membangun jaringan profesional.Kami yakin bahwa seminar ini akan memberikan manfaat yang besar bagi semua peserta. Dengan menghadiri acara ini, Anda akan memperoleh keterampilan yang akan berguna dalam karier Anda, meningkatkan kepercayaan diri Anda, dan dapat menginspirasi orang lain melalui presentasi yang kuat dan meyakinkan.'),
(3, NULL, NULL, 'Jangan lewatkan kesempatan ini untuk mengembangkan potensi Anda dalam berbicara di depan umum. Daftarlah sekarang untuk acara seminar public speaking ini dan mari bersama-sama mengubah cara Anda berkomunikasi dan mempengaruhi dunia di sekitar Anda.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel2`
--

CREATE TABLE `tabel2` (
  `ID` int(3) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jk` varchar(500) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `no_hp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tabel2`
--

INSERT INTO `tabel2` (`ID`, `nama`, `jk`, `alamat`, `no_hp`) VALUES
(1, 'saka', 'laki-laki', 'Batam', '085367984351'),
(23, 'febi', 'perempuan', 'Manado', '085367984365'),
(24, 'Budi', 'laki-laki', 'Pekanbaru', '085367094343'),
(27, 'Marsel', 'laki-laki', 'Padang', '086547654309'),
(29, 'Oca', 'perempuan', 'Aceh', '085378094471');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel3`
--

CREATE TABLE `tabel3` (
  `ID` int(3) NOT NULL,
  `Judul` varchar(50) DEFAULT NULL,
  `Deskripsi` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tabel3`
--

INSERT INTO `tabel3` (`ID`, `Judul`, `Deskripsi`) VALUES
(1, 'Petunjuk Penggunaan Web Seminar Public Speaking.', '1. Acara Seminar Public Speaking akan di Adakan Pada tanggal 24 Agustus 2023 di Auditorium Universitas Negeri Padang.'),
(2, NULL, '2. Silahkan Anda Inputkan Nama Peserta yang akan mengikuti acara seminar public speaking. Penginputtan Data terdiri dari Nama Peserta yang akan mengikuti seminar public speaking, Jenis Kelamin, Alamat tempat tinggal, dan Nomor Handphone Peserta Seminar.'),
(3, NULL, '3. Setelah Data Peserta Diinputkan maka jangan lupa untuk menekan tombol SAVE pada bagian bawah penginputan data.'),
(4, NULL, '4. Setelah Penginputan Data selesai dilakukan maka untuk manampilkan datanya atau melihat datanya maka anda dapat menekan tombol Tampilkan data pada menu Navigasi.'),
(5, NULL, '5. Jika anda ingin merubah atau memperbarui data peserta seminar maka anda bisa beralih ke halaman Pembaharui data. Lalu silahkan perbarui data yang anda ingin ubah.'),
(6, NULL, '6. Jika anda ingin menghapus nama peserta seminar maka anda bisa beralih ke halaman Hapus data. Maka data yang anda ingin hapus akan terhapus.'),
(7, NULL, '7. Sekian Petunjuk yang dapat saya sampaikan. ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel4`
--

CREATE TABLE `tabel4` (
  `ID` int(3) NOT NULL,
  `Nama` varchar(50) DEFAULT NULL,
  `Identitas` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tabel4`
--

INSERT INTO `tabel4` (`ID`, `Nama`, `Identitas`) VALUES
(1, '22343004_ERPIANA', 'Program Studi Informatika FT UNP');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel1`
--
ALTER TABLE `tabel1`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `tabel2`
--
ALTER TABLE `tabel2`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `tabel3`
--
ALTER TABLE `tabel3`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `tabel4`
--
ALTER TABLE `tabel4`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel1`
--
ALTER TABLE `tabel1`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tabel2`
--
ALTER TABLE `tabel2`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `tabel3`
--
ALTER TABLE `tabel3`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tabel4`
--
ALTER TABLE `tabel4`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
