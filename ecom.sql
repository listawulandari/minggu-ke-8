-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2020 at 11:24 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(15) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Handphone'),
(2, 'Laptop');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` varchar(10) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga` int(10) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga`, `gambar`, `deskripsi`, `kategori`) VALUES
('PR01', 'ASUS ZENFONE 5 ZE620KL', 3650000, 'Asus-ZenFone-5-ZE620KL2.jpg', 'RAM 6GB, Internal 64GB ', '1'),
('PR03', 'ASUS ZENFONE MAX PRO M2', 3000000, 'Asus-ZenFone-Max-Pro-M2-ZB631KL4.jpg', '6GB, 64GB', '1'),
('PR04', 'MACBOOK AIR', 24500000, 'laptop25.jpg', 'IOS', '2'),
('PR05', 'ASUS VIVOBOOK A14', 12500000, 'laptop12.jpg', 'i7, 12GB', '2'),
('PR07', 'HP PAVILION', 9500000, 'laptop5.jpg', 'i7, 4GB', '2'),
('PR08', 'LENOVO IDEALPAD', 5700000, 'laptop41.jpg', '4GB, i5', '2');

--
-- Triggers `produk`
--
DELIMITER $$
CREATE TRIGGER `hapus_barang` AFTER DELETE ON `produk` FOR EACH ROW BEGIN
INSERT INTO produk_hapus(id_produk, nama_produk, harga, gambar, deskripsi, kategori, tgl_hapus, user)
VALUES (OLD.id_produk, OLD.nama_produk, OLD.harga, OLD.gambar, OLD.deskripsi, OLD.kategori, SYSDATE(), CURRENT_USER);
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `produk_hapus`
--

CREATE TABLE `produk_hapus` (
  `id_produk` varchar(10) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga` int(10) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `tgl_hapus` date NOT NULL,
  `user` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk_hapus`
--

INSERT INTO `produk_hapus` (`id_produk`, `nama_produk`, `harga`, `gambar`, `deskripsi`, `kategori`, `tgl_hapus`, `user`) VALUES
('PR02', 'IPHONE 5S', 4500000, 'hp12.jpg', 'IOS, 64GB', '1', '2020-05-08', 'root@localhost');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_order`
--

CREATE TABLE `tbl_detail_order` (
  `id_do` int(10) NOT NULL,
  `order_id` int(10) NOT NULL,
  `produk` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `harga` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_detail_order`
--

INSERT INTO `tbl_detail_order` (`id_do`, `order_id`, `produk`, `qty`, `harga`) VALUES
(1, 0, 0, 1, '5699000'),
(2, 0, 0, 1, '35000000'),
(3, 2, 0, 2, '2650000'),
(4, 3, 0, 2, '2650000'),
(5, 4, 0, 1, '3500000'),
(6, 12, 0, 1, '4500000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id_order` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `id_pelanggan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id_order`, `tanggal`, `id_pelanggan`) VALUES
(1, '2020-04-11', '4'),
(2, '2020-04-11', '10'),
(3, '2020-04-17', '11'),
(4, '2020-04-17', '12'),
(5, '2020-04-17', '13'),
(6, '2020-04-17', '14'),
(7, '2020-04-17', '15'),
(8, '2020-04-17', '16'),
(9, '2020-04-17', '17'),
(10, '2020-04-17', '18'),
(11, '2020-04-17', '19'),
(12, '2020-05-03', '20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelanggan`
--

CREATE TABLE `tbl_pelanggan` (
  `id_pelanggan` int(10) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `email_pelanggan` varchar(50) NOT NULL,
  `alamat_pelanggan` varchar(50) NOT NULL,
  `telp_pelanggan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`id_pelanggan`, `nama_pelanggan`, `email_pelanggan`, `alamat_pelanggan`, `telp_pelanggan`) VALUES
(1, 'vera', 'vera@gmail.com', 'jalan patriot v', '34143'),
(2, 'vera', 'vera@gmail.com', 'jalan patriot v', '34143'),
(3, 'vera', 'vera@gmail.com', 'bima2', '363782398'),
(4, 'vera', 'vera@gmail.com', 'bima2', '66757'),
(5, 'rudi', 'rudi@gmail.com', 'arjuna', '937846483'),
(6, 'rani', 'rani@gmail.com', 'arjuna', '4848484393929'),
(7, 'BCDAJS', 'vera@gmail.com', 'SDHBDSA', 'SBXSH'),
(8, 'DSBSADB', 'bayu@gmail.com', 'njfnjdsfn', '3742748'),
(9, 'jhjfbnj', 'bayu@gmail.com', 'dbcajhk', ' sdcnjsa'),
(10, 'Vera', 'vera@gmail.com', 'Jl. Bima 2', '699647834'),
(11, '', '', '', ''),
(12, 'vera', 'vera@gmail.com', 'Jl. Patriot V', '024 3653735'),
(13, 'vera', 'vera@gmail.com', 'Jl. Patriot V', '024 3653735'),
(14, 'vera', 'vera@gmail.com', 'Jl. Patriot V', '024 3653735'),
(15, 'vera', 'vera@gmail.com', 'Jl. Patriot V', '024 3653735'),
(16, 'vera', 'vera@gmail.com', 'Jl. Patriot V', '024 3653735'),
(17, 'vera', 'vera@gmail.com', 'Jl. Patriot V', '024 3653735'),
(18, 'vera', 'vera@gmail.com', 'Jl. Patriot V', '024 3653735'),
(19, 'vera', 'vera@gmail.com', 'Jl. Patriot V', '024 3653735'),
(20, 'Berliana Febriani', 'berlianaf36@gmail.com', 'Jl. Patriot V', '083527267181910');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `username`, `password`) VALUES
(1, 'coba', 'cobacoba@gmail.com', 'coba', 'c3ec0f7b054e729c5a716c8125839829'),
(2, 'abc', 'abc@gmail.com', 'abc', '900150983cd24fb0d6963f7d28e17f72'),
(3, 'user', 'user@gmail.com', 'user', 'ee11cbb19052e40b07aac0ca060c23ee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `kategori` (`kategori`);

--
-- Indexes for table `produk_hapus`
--
ALTER TABLE `produk_hapus`
  ADD PRIMARY KEY (`id_produk`),
  ADD UNIQUE KEY `kategori` (`kategori`);

--
-- Indexes for table `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  ADD PRIMARY KEY (`id_do`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  MODIFY `id_do` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id_order` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  MODIFY `id_pelanggan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
