-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Mar 2021 pada 09.59
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smk-bayar-spp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `kompetensi_keahlian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `kelas`, `kompetensi_keahlian`) VALUES
(1, '12', 'Rekayasa Perangkat Lunak'),
(2, '10', 'Rekayasa Perangkat Lunak'),
(3, '11', 'Rekayasa Perangkat Lunak'),
(4, '12', 'OTKP'),
(5, '11', 'OTKP'),
(6, '10', 'OTKP'),
(7, '12', 'Multimedia'),
(8, '11', 'Multimedia'),
(9, '10', 'Multimedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `tgl_bayar` varchar(200) NOT NULL,
  `bulan_dibayar` varchar(50) NOT NULL,
  `tahun_dibayar` varchar(5) NOT NULL,
  `id_spp` int(11) NOT NULL,
  `jumlah_bayar` int(11) NOT NULL,
  `bukti_pembayaran` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Tunggu Konfirmasi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `nisn`, `nama`, `tgl_bayar`, `bulan_dibayar`, `tahun_dibayar`, `id_spp`, `jumlah_bayar`, `bukti_pembayaran`, `status`) VALUES
(2, '171810023', 'Alfiani Fitria Kusnadi', '04 Mar 2021', 'Januari', '2021', 1, 50000, '60410ce2af5a6.png', 'Dikonfirmasi'),
(3, '171810024', 'Alfan Fabian', '06 Mar 2021', 'Januari', '2021', 1, 50000, '604344026da56.png', 'Dikonfirmasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `level` enum('admin','petugas') NOT NULL,
  `role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `username`, `password`, `nama`, `level`, `role`) VALUES
(1, 'admin', '$2y$10$MnOzKoScbTEzxhTay26MO.lUDw.IIFDCicbYGTNYv9itNZDk/ASlC', 'Administrator', 'admin', 2),
(2, 'petugas', '$2y$10$MnOzKoScbTEzxhTay26MO.lUDw.IIFDCicbYGTNYv9itNZDk/ASlC', 'Petugas Satu', 'petugas', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nisn` char(10) NOT NULL,
  `nis` char(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nisn`, `nis`, `nama`, `id_kelas`, `alamat`, `no_telp`, `role`) VALUES
('0015995390', '171810023', 'Alfiani Fitria Kusnadi', 2, 'Kp. Desakolot Ds. Singkir Kec. Cikalong', '082321543292', 0),
('0015995391', '171810024', 'Alfan Fabian', 9, 'Cikalong', '085750538162', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `spp`
--

CREATE TABLE `spp` (
  `id_spp` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `bulan` varchar(10) NOT NULL,
  `nominal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `spp`
--

INSERT INTO `spp` (`id_spp`, `tahun`, `bulan`, `nominal`) VALUES
(1, 2021, 'Januari', 50000),
(4, 2021, 'Februari', 50000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`);

--
-- Indeks untuk tabel `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`id_spp`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `spp`
--
ALTER TABLE `spp`
  MODIFY `id_spp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
