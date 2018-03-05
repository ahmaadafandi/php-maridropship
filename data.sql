-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2018 at 02:06 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblfaq`
--

CREATE TABLE `tblfaq` (
  `idFaq` int(5) NOT NULL,
  `pertanyaan` text NOT NULL,
  `jawaban` text NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblfaq`
--

INSERT INTO `tblfaq` (`idFaq`, `pertanyaan`, `jawaban`, `status`) VALUES
(1, 'Apa yang harrus saya lakukan jika saya bodoh.??', 'Kamu harus giat belajar teruss', 'Aktif'),
(2, 'Apa yang harus saya lakukan jika saya tidak punya uang..?', 'Kamu harus berusaha untuk mencarinya', 'Aktif'),
(5, 'Apa gunanya uang.?', 'Ya guna banget lahh, aneh luu ahh...', 'Tidak Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tblpengguna`
--

CREATE TABLE `tblpengguna` (
  `idUser` int(10) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kontak` varchar(13) NOT NULL,
  `foto` varchar(55) NOT NULL,
  `status` varchar(25) NOT NULL,
  `tglDaftar` date NOT NULL,
  `tglKeluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpengguna`
--

INSERT INTO `tblpengguna` (`idUser`, `nama`, `email`, `password`, `alamat`, `kontak`, `foto`, `status`, `tglDaftar`, `tglKeluar`) VALUES
(1, 'Ahmad Afandi', 'ahmaad.afandi@gmail.com', 'fandi123', 'Jalan Beringin Pasar V Tembung Gang Salak 16 No. 08', '082298993672', 'merah.jpg', 'Aktif', '2018-02-12', '2018-02-12'),
(3, 'ratih', 'ratih@gmail.com', 'ratih123', 'marelan', '21435676543', 'ada', 'Aktif', '2018-02-12', '2018-02-12'),
(4, 'Monalisa', 'monalisa@gmail.com', 'mona123', 'martubung', '1234565432', 'ada', 'Aktif', '2018-02-12', '2018-02-12'),
(5, 'kris', 'kris@gmail.com', 'kris123', 'brayan', '098765456789', 'ada', 'Tidak Aktif', '2018-02-12', '2018-02-12');

-- --------------------------------------------------------

--
-- Table structure for table `tblpesanan`
--

CREATE TABLE `tblpesanan` (
  `idPesanan` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idProduk` int(11) NOT NULL,
  `jumlahPesanan` int(10) NOT NULL,
  `biaya` int(10) NOT NULL,
  `statusPesanan` varchar(15) NOT NULL,
  `tglPesan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpesanan`
--

INSERT INTO `tblpesanan` (`idPesanan`, `idUser`, `idProduk`, `jumlahPesanan`, `biaya`, `statusPesanan`, `tglPesan`) VALUES
(1, 1, 7, 3, 495000, 'Proses Kirim', '2018-02-28'),
(3, 3, 9, 1, 275000, 'Telah Sampai', '2018-02-27'),
(4, 4, 7, 2, 330000, 'Pesanan Baru', '2018-03-02'),
(5, 4, 8, 1, 170000, 'Pending', '2018-03-01'),
(6, 5, 11, 1, 210000, 'Telah Bayar', '2018-03-02');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduk`
--

CREATE TABLE `tblproduk` (
  `idProduk` int(10) NOT NULL,
  `namaProduk` varchar(50) NOT NULL,
  `kodeProduk` varchar(25) NOT NULL,
  `tipeProduk` varchar(30) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `hargaBeli` int(10) NOT NULL,
  `hargaJual` int(10) NOT NULL,
  `stok` int(10) NOT NULL,
  `status` varchar(15) NOT NULL,
  `tglMasuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduk`
--

INSERT INTO `tblproduk` (`idProduk`, `namaProduk`, `kodeProduk`, `tipeProduk`, `gambar`, `hargaBeli`, `hargaJual`, `stok`, `status`, `tglMasuk`) VALUES
(7, 'Tas Samping', 'S01', 'Tas', 'tas1.jpg', 125000, 165000, 12, 'Tersedia', '2018-02-27'),
(8, 'Tas Samping', 'S02', 'Tas', 'tas2.jpg', 135000, 170000, 14, 'Tersedia', '2018-02-01'),
(9, 'Tas Samping', 'S03', 'Tas', 'tas3.jpg', 235000, 275000, 8, 'Tersedia', '2018-01-10'),
(10, 'Tas Samping', 'S04', 'Tas', 'tas4.jpg', 110000, 140000, 16, 'Tersedia', '2017-12-13'),
(11, 'Tas Fashion', 'F01', 'Tas', 'tas5.jpg', 175000, 210000, 10, 'Tersedia', '2018-02-14'),
(12, 'Tas Fashion', 'F02', 'Tas', 'tas6.jpg', 130000, 170000, 12, 'Tersedia', '2018-01-04'),
(13, 'Tas Fashion', 'F03', 'Tas', 'tas7.jpg', 140000, 180000, 20, 'Tersedia', '2018-02-28'),
(14, 'Tas Fashion', 'F04', 'Tas', 'tas8.jpg', 120000, 150000, 11, 'Tersedia', '2018-03-01'),
(15, 'Tas Fashion', 'F05', 'Tas', 'tas9.jpg', 125000, 165000, 6, 'Tersedia', '2018-01-02'),
(16, 'Tas Fashion', 'F06', 'Tas', 'tas10.jpg', 255000, 300000, 10, 'Tersedia', '2018-02-21'),
(17, 'Tas Sandang', 'SD01', 'Tas', 'tas11.jpg', 75000, 90000, 15, 'Tersedia', '2018-01-24'),
(18, 'Tas Sandang', 'SD02', 'Tas', 'tas12.jpg', 70000, 85000, 11, 'Tersedia', '2018-02-27'),
(19, 'Tas Fashion', 'F07', 'Tas', 'tas13.jpg', 225000, 265000, 8, 'Tersedia', '2018-01-31'),
(20, 'Tas Fashion', 'F08', 'Tas', 'tas14.jpg', 145000, 180000, 22, 'Tersedia', '2018-03-02'),
(21, 'Tas Fashion', 'F09', 'Tas', 'tas15.jpg', 90000, 120000, 20, 'Tersedia', '2018-03-03');

-- --------------------------------------------------------

--
-- Table structure for table `tblpromo`
--

CREATE TABLE `tblpromo` (
  `idPromo` int(11) NOT NULL,
  `idProduk` int(11) NOT NULL,
  `hargaNormal` int(10) NOT NULL,
  `potongan` int(5) NOT NULL,
  `hargaPromo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpromo`
--

INSERT INTO `tblpromo` (`idPromo`, `idProduk`, `hargaNormal`, `potongan`, `hargaPromo`) VALUES
(5, 9, 275000, 10, 247500),
(6, 7, 165000, 10, 148500),
(7, 11, 210000, 10, 189000),
(8, 10, 140000, 10, 126000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblfaq`
--
ALTER TABLE `tblfaq`
  ADD PRIMARY KEY (`idFaq`);

--
-- Indexes for table `tblpengguna`
--
ALTER TABLE `tblpengguna`
  ADD PRIMARY KEY (`idUser`);

--
-- Indexes for table `tblpesanan`
--
ALTER TABLE `tblpesanan`
  ADD PRIMARY KEY (`idPesanan`);

--
-- Indexes for table `tblproduk`
--
ALTER TABLE `tblproduk`
  ADD PRIMARY KEY (`idProduk`);

--
-- Indexes for table `tblpromo`
--
ALTER TABLE `tblpromo`
  ADD PRIMARY KEY (`idPromo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblfaq`
--
ALTER TABLE `tblfaq`
  MODIFY `idFaq` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblpengguna`
--
ALTER TABLE `tblpengguna`
  MODIFY `idUser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblpesanan`
--
ALTER TABLE `tblpesanan`
  MODIFY `idPesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblproduk`
--
ALTER TABLE `tblproduk`
  MODIFY `idProduk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tblpromo`
--
ALTER TABLE `tblpromo`
  MODIFY `idPromo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
