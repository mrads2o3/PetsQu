-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jul 2022 pada 15.56
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petsqu_database`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `username` varchar(18) NOT NULL,
  `password` varchar(18) NOT NULL,
  `status` set('user','admin') NOT NULL,
  `nama` varchar(64) NOT NULL,
  `alamat` varchar(64) NOT NULL,
  `nope` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id_akun`, `username`, `password`, `status`, `nama`, `alamat`, `nope`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'Alamat admin', '812345678910'),
(2, 'user', 'user', 'user', 'Test User', 'Test Alamat User', '812345678'),
(6, 'akun', 'akun', 'user', 'aku', 'akun', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `k_id_pembelian` int(11) NOT NULL,
  `k_id_pembeli` int(11) NOT NULL,
  `k_id_produk` int(11) NOT NULL,
  `k_gambar_produk` varchar(64) NOT NULL,
  `k_nama_produk` varchar(64) NOT NULL,
  `k_deskripsi_produk` text NOT NULL,
  `k_jumlah_beli` int(11) NOT NULL,
  `k_harga_produk` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `keranjang`
--

INSERT INTO `keranjang` (`id_keranjang`, `k_id_pembelian`, `k_id_pembeli`, `k_id_produk`, `k_gambar_produk`, `k_nama_produk`, `k_deskripsi_produk`, `k_jumlah_beli`, `k_harga_produk`) VALUES
(7, 7632195, 2, 9, 'iIcasEtVJ09ReUQ1Qt2jHeNeD3ed8oKqLUe0q9yXjydPP0EsKI.png', 'Testing testing', 'testing produk', 2, 123),
(8, 7632195, 2, 2, 'testproduk02.jpg', 'Wimsikas', 'Maecenas malesuada. Etiam rhoncus. Vestibulum ullamcorper mauris at ligula esae.', 2, 12001);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_pelanggan` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `nope` int(13) NOT NULL,
  `list_barang` varchar(512) NOT NULL,
  `total` int(12) NOT NULL,
  `status` set('diproses','selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `tanggal`, `id_pelanggan`, `alamat`, `nope`, `list_barang`, `total`, `status`) VALUES
(7632195, '2022-07-03 13:53:40', 2, 'Test Alamat User', 812345678, '7,8,', 24248, 'diproses');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `gambar_produk` varchar(64) NOT NULL,
  `nama_produk` varchar(64) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `harga_produk` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `gambar_produk`, `nama_produk`, `deskripsi_produk`, `harga_produk`) VALUES
(1, 'testproduk01.jpg', 'Wshikas', 'Nulla sit amet est.In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Curabitur vestibulum aliquam leo. Praesent metus tellus, elementum eu, semper a, adipiscing nec, purusae.', 10001),
(2, 'testproduk02.jpg', 'Wimsikas', 'Maecenas malesuada. Etiam rhoncus. Vestibulum ullamcorper mauris at ligula esae.', 12001),
(9, 'iIcasEtVJ09ReUQ1Qt2jHeNeD3ed8oKqLUe0q9yXjydPP0EsKI.png', 'Testing testing', 'testing produk', 123);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indeks untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7632196;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
