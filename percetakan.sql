-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jan 2022 pada 16.29
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `percetakan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(10) NOT NULL,
  `nm_admin` varchar(30) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `no_hp` varchar(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nm_admin`, `alamat`, `no_hp`, `username`, `pass`) VALUES
(1, 'puput', 'leban tawangargo', '0896823153', 'puput', 'puputyohana123'),
(4, 'Jojo Iskandar', 'ngudi tawangargo rt 21 rw 3', '0882009277', 'AD120', 'AD120');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bahanbaku`
--

CREATE TABLE `tb_bahanbaku` (
  `id_bhn` int(10) NOT NULL,
  `nm_bhn` varchar(30) NOT NULL,
  `jml_bhn` int(40) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bayar`
--

CREATE TABLE `tb_bayar` (
  `id_byr` int(10) NOT NULL,
  `id_trans` int(10) NOT NULL,
  `tgl_byr` date NOT NULL,
  `status` enum('selesai','belum') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id_plgn` varchar(10) NOT NULL,
  `nm_plgn` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` int(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id_plgn`, `nm_plgn`, `email`, `alamat`, `no_telp`, `username`, `pass`) VALUES
('PN001', 'SITI', 'sitinurbaya@gmail.com', 'jl bayabaya 23', 856789652, 'sitinur', 'nursiti23'),
('PN002', 'GUGUN', 'gugunrrrrr@gmail.com', 'Kertasari', 87654321, 'ggn', 'ggn123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` varchar(20) NOT NULL,
  `nm_produk` varchar(30) NOT NULL,
  `jml_produk` int(15) NOT NULL,
  `keterangan` text NOT NULL,
  `preorder` int(11) NOT NULL,
  `harga` int(30) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `nm_produk`, `jml_produk`, `keterangan`, `preorder`, `harga`, `gambar`) VALUES
('PD004', 'Babybio 10RS Custom', 100, 'nsmdn asjk ajdkaldj', 2, 50000, 'portfolio-4.jpg'),
('PD005', 'Babybio 8r custom', 100, 'smd sja jskad jaklsd', 2, 40000, 'portfolio-7.jpg'),
('PD007', 'Brosur Lipat 3', 5000, 'ajskaksn kaskajs asqygqu iqoiwo sjakjsla', 3, 300, 'portfolio-2.jpg'),
('PD008', 'brosur lipat 4', 1000, 'ajksj iiuqo ahsakj qiwuoq qwiqiwj', 3, 200, 'portfolio-3.jpg'),
('PD009', 'NOTEBOOK', 100, 'notebook a5 dot garis custm cover', 1, 50000, 'portfolio-9.jpg'),
('PR001', 'KALENDER A3+', 100, 'snda dsai jaskd j9e wjkasd', 2, 5000, 'portfolio-details-1.jpg'),
('PR007', 'KERTAS KADO CUSTOM UKURAN A3+', 100, 'KERTAS KADO CUSTOM UKURAN A3+', 4, 5000, 'CONTOH4RWISUDA.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_trans` int(10) NOT NULL,
  `id_produk` int(10) NOT NULL,
  `id_plgn` int(10) NOT NULL,
  `tgl_trans` date NOT NULL,
  `jml_trans` int(30) NOT NULL,
  `harga` int(30) NOT NULL,
  `total` int(30) NOT NULL,
  `metode_pengiriman` varchar(30) NOT NULL,
  `metode_pembayaran` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_bayar`
--
ALTER TABLE `tb_bayar`
  ADD PRIMARY KEY (`id_byr`);

--
-- Indeks untuk tabel `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id_plgn`);

--
-- Indeks untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_trans`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_bayar`
--
ALTER TABLE `tb_bayar`
  MODIFY `id_byr` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_trans` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
