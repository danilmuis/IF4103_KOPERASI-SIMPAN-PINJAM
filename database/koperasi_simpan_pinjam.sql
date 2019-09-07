-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2019 at 06:46 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koperasi simpan pinjam`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `idAnggota` int(10) NOT NULL,
  `NIK` varchar(16) DEFAULT NULL,
  `kredit` int(50) DEFAULT NULL,
  `debit` int(50) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`idAnggota`, `NIK`, `kredit`, `debit`, `username`, `password`) VALUES
(1000, '11110023392', 0, 50000, 'A01', '123456'),
(1001, '11110023393', 0, 50000, 'A02', '123456'),
(1002, '11110023394', 0, 50000, 'A03', '123456'),
(1003, '11110023395', 0, 50000, 'A04', '123456'),
(1004, '11110023396', 0, 50000, 'A05', '123456'),
(1005, '11110023397', 0, 50000, 'A06', '123456'),
(1006, '11110023398', 0, 50000, 'A07', '123456'),
(1007, '11110023399', 0, 50000, 'A08', '123456'),
(1008, '11110023391', 0, 50000, 'A09', '123456'),
(1009, '11110023390', 0, 50000, 'A10', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `NIK` varchar(16) NOT NULL,
  `namaLengkap` varchar(50) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `TTL` varchar(50) DEFAULT NULL,
  `agama` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`NIK`, `namaLengkap`, `alamat`, `TTL`, `agama`) VALUES
('11110023390', 'Muhammad Igo', 'sukabirus', 'Bandung,10-05-1999', 'Islam'),
('11110023391', 'Muhammad Maulana', 'sukabirus', 'Medan,30-11-1999', 'Islam'),
('11110023392', 'Muhammad Danil Muis', 'sukabirus', 'Medan,10-05-1999', 'Islam'),
('11110023393', 'Muhammad Adan', 'sukabirus', 'Medan,10-06-1999', 'Islam'),
('11110023394', 'Muhammad Daffa', 'sukabirus', 'Medan,11-05-1999', 'Islam'),
('11110023395', 'Muhammad Rifki', 'sukabirus', 'Medan,12-04-1999', 'Islam'),
('11110023396', 'Muhammad Budi', 'sukabirus', 'Medan,19-02-1999', 'Islam'),
('11110023397', 'Muhammad Ryan', 'sukabirus', 'Medan,20-05-1999', 'Islam'),
('11110023398', 'Muhammad Bayu', 'sukabirus', 'Medan,01-09-1999', 'Islam'),
('11110023399', 'Muhammad Dicky', 'sukabirus', 'Medan,12-12-1999', 'Islam');

-- --------------------------------------------------------

--
-- Table structure for table `pengurus`
--

CREATE TABLE `pengurus` (
  `idPengurus` int(10) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengurus`
--

INSERT INTO `pengurus` (`idPengurus`, `nama`, `username`, `password`) VALUES
(100, 'Irsyad Rafi Diesta', 'irsyad', '123456'),
(101, 'Muhammad Danil Muis', 'muis', '123456'),
(102, 'M Iqbal', 'iqbal', '123456'),
(103, 'M Igo', 'igo', '123456'),
(104, 'M Daffa', 'daffa', '123456'),
(105, 'M Taufiq', 'taufiq', '123456'),
(106, 'M Harel', 'harel', '123456'),
(107, 'M Deki', 'deki', '123456'),
(108, 'M Kiki', 'kiki', '123456'),
(109, 'M Dodi', 'dodi', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `peringatan`
--

CREATE TABLE `peringatan` (
  `noPeringatan` varchar(10) NOT NULL,
  `idPengurus` int(10) DEFAULT NULL,
  `idAnggota` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peringatan`
--

INSERT INTO `peringatan` (`noPeringatan`, `idPengurus`, `idAnggota`) VALUES
('PR001', 100, 1000),
('PR002', 101, 1001),
('PR003', 102, 1002),
('PR004', 103, 1003),
('PR005', 104, 1004),
('PR006', 105, 1005),
('PR007', 106, 1006),
('PR008', 107, 1007),
('PR009', 108, 1008),
('PR010', 109, 1009);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `noTransaksi` varchar(20) NOT NULL,
  `jumlahUang` int(50) DEFAULT NULL,
  `jenisTransaksi` varchar(20) DEFAULT NULL,
  `waktuTransaksi` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `idAnggota` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`noTransaksi`, `jumlahUang`, `jenisTransaksi`, `waktuTransaksi`, `idAnggota`) VALUES
('T001', 0, 'Simpan', '2019-09-07 11:45:38', 1000),
('T002', 0, 'Simpan', '2019-09-07 11:45:38', 1001),
('T003', 0, 'Simpan', '2019-09-07 11:45:38', 1002),
('T004', 0, 'Simpan', '2019-09-07 11:45:38', 1003),
('T005', 0, 'Simpan', '2019-09-07 11:45:38', 1004),
('T006', 0, 'Simpan', '2019-09-07 11:45:38', 1005),
('T007', 0, 'Simpan', '2019-09-07 11:45:38', 1006),
('T008', 0, 'Simpan', '2019-09-07 11:45:38', 1007),
('T009', 0, 'Simpan', '2019-09-07 11:45:38', 1008),
('T010', 0, 'Simpan', '2019-09-07 11:45:38', 1009);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`idAnggota`),
  ADD KEY `NIK` (`NIK`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`idPengurus`);

--
-- Indexes for table `peringatan`
--
ALTER TABLE `peringatan`
  ADD PRIMARY KEY (`noPeringatan`),
  ADD KEY `idPengurus` (`idPengurus`),
  ADD KEY `idAnggota` (`idAnggota`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`noTransaksi`),
  ADD KEY `idAnggota` (`idAnggota`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `idAnggota` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1010;

--
-- AUTO_INCREMENT for table `pengurus`
--
ALTER TABLE `pengurus`
  MODIFY `idPengurus` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `akun`
--
ALTER TABLE `akun`
  ADD CONSTRAINT `akun_ibfk_1` FOREIGN KEY (`NIK`) REFERENCES `anggota` (`NIK`) ON DELETE CASCADE;

--
-- Constraints for table `peringatan`
--
ALTER TABLE `peringatan`
  ADD CONSTRAINT `peringatan_ibfk_1` FOREIGN KEY (`idPengurus`) REFERENCES `pengurus` (`idPengurus`) ON DELETE CASCADE,
  ADD CONSTRAINT `peringatan_ibfk_2` FOREIGN KEY (`idAnggota`) REFERENCES `akun` (`idAnggota`) ON DELETE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`idAnggota`) REFERENCES `akun` (`idAnggota`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
