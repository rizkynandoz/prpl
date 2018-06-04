-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2018 at 09:38 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `justdoeat`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `password` varchar(15) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`password`, `username`, `email`) VALUES
('12345689', 'nando', 'nando@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `idcustomer` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `namamakanan` varchar(150) NOT NULL,
  `hargamakanan` varchar(50) NOT NULL,
  `jumlahmakanan` varchar(30) DEFAULT NULL,
  `namasnack` varchar(150) NOT NULL,
  `hargasnack` varchar(50) NOT NULL,
  `jumlahsnack` varchar(30) NOT NULL,
  `namaminuman` varchar(150) NOT NULL,
  `hargaminuman` varchar(50) NOT NULL,
  `jumlahminuman` varchar(30) NOT NULL,
  `email` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `total` varchar(50) NOT NULL,
  `bayar` varchar(15) NOT NULL,
  `kembalian` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`idcustomer`, `nama`, `namamakanan`, `hargamakanan`, `jumlahmakanan`, `namasnack`, `hargasnack`, `jumlahsnack`, `namaminuman`, `hargaminuman`, `jumlahminuman`, `email`, `alamat`, `total`, `bayar`, `kembalian`) VALUES
('001', 'nando', 'CHIKEN STEAK | Rp. 23.000,00', '23000', '3', 'KENTANG GORENG LARGE | Rp. 18.000,00', '18000', '2', 'MANGGO JUICE | Rp. 15.000,00', '15000', '4', 'nando@gmai', 'purwokinanti pa 1 no 180 yogyakarta', '165000', '170000', '5000'),
('002', 'nurul', 'CHIKEN STEAK WITH HONEY SAUCE | Rp. 26.000,00', '26000', '1', 'KENTANG GORENG LARGE | Rp. 18.000,00', '18000', '3', 'ICE TEA | Rp. 10.000,00', '10000', '2', 'nurul@gmai', 'suronatan', '100000', '100000', '0');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `idpesanan` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tanggal` varchar(15) NOT NULL,
  `order1` varchar(15) NOT NULL,
  `order2` varchar(15) NOT NULL,
  `order3` varchar(15) NOT NULL,
  `order4` varchar(15) NOT NULL,
  `order5` varchar(15) NOT NULL,
  `order6` varchar(15) NOT NULL,
  `order7` varchar(15) NOT NULL,
  `order8` varchar(15) NOT NULL,
  `order9` varchar(15) NOT NULL,
  `order10` varchar(15) NOT NULL,
  `order11` varchar(15) NOT NULL,
  `order12` varchar(15) NOT NULL,
  `total` varchar(15) NOT NULL,
  `totalbarang` varchar(15) NOT NULL,
  `diskon` varchar(15) NOT NULL,
  `bayar` varchar(15) NOT NULL,
  `dibayar` varchar(15) NOT NULL,
  `kembalian1` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`idpesanan`, `username`, `alamat`, `tanggal`, `order1`, `order2`, `order3`, `order4`, `order5`, `order6`, `order7`, `order8`, `order9`, `order10`, `order11`, `order12`, `total`, `totalbarang`, `diskon`, `bayar`, `dibayar`, `kembalian1`) VALUES
('', 'nando', 'banduung', '2018-05-15', '', '0', '1', '1', '0', '3', '0', '0', '0', '3', '0', '0', '', '8', '', '61000', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idcustomer` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no` varchar(15) DEFAULT NULL,
  `gender` varchar(15) DEFAULT NULL,
  `comment` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idcustomer`, `email`, `no`, `gender`, `comment`) VALUES
('001', 'nando@gmail.com', '085601002744', 'laki-laki', 'keren bro');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`password`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`idcustomer`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`idpesanan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idcustomer`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
