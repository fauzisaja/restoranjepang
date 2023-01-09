-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2023 at 03:22 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restoran_jepang`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id_Admin` int(11) NOT NULL,
  `Nama_Admin` varchar(100) NOT NULL DEFAULT '',
  `Password` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id_Admin`, `Nama_Admin`, `Password`) VALUES
(1, 'Arie wow', '1234'),
(2, 'Lenny', '1234'),
(3, 'Maria', '1234'),
(4, 'Fauzi Ganteng', '1234'),
(5, 'Agus', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `Id_Transaksi` int(11) NOT NULL,
  `Id_Menu` int(11) NOT NULL,
  `Jumlah` int(11) NOT NULL,
  `Harga` double NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `Id_Menu` int(11) NOT NULL,
  `Nama_Menu` varchar(100) DEFAULT NULL,
  `Deskripsi` text DEFAULT NULL,
  `Harga_Menu` double DEFAULT NULL,
  `Foto_Menu` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`Id_Menu`, `Nama_Menu`, `Deskripsi`, `Harga_Menu`, `Foto_Menu`) VALUES
(1, 'SUSHI MENTAI', 'Saus Mentai adalah olahan khas jepang berupa telur ikan pollack,sejenis kod yang diawetkan dengan garam dan diansinkan bercampur dengan mayonnes. bumbuh dan rempah - rempah jepang. Sushi Mentai ini memiliki cita rasa yang gurih karena ada campuran alpukat & taburan crsipy diatasnya, serta juga memiliki rasa sedikit pedas dari saus mentai', 35000, NULL),
(2, 'SALMON SUSHI', 'Salmon Sushi yaitu sushi menggunakan ikan salmon yang diperkenalkan orang Norwegia pada tahun 1985, Sushi ini memiliki cita rasa yang manis alami dari daging salmon. Sushi salmon ini juga ditaburi Nori dan Mayonnes di atasnya. Sehingga lebih enak untuk disantap', 45000, NULL),
(3, 'OCHA TEA', 'Ocha adalah sebutan untuk teh hijau dalam bahasa jepang, Seperti layaknya teh biasa, ocha diseduh dari daun teh hijau dalam gelas atau teko air', 10000, NULL),
(11, 'CHICKEN RAMEN', 'Chicken Ramen adalah ramen berkuah kaldu ayam jernih, dibumbui shoyu racikan Ippudo, dengan potongan chasu ayam yang empuk serta dilengkapi menma atau olahan rebung dan baso ikan.', 45000, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `Id_Pelanggan` int(11) NOT NULL,
  `Nama_Pelanggan` varchar(100) DEFAULT NULL,
  `No_Hp_Pelanggan` varchar(100) DEFAULT NULL,
  `Jenis_Kelamin` char(1) DEFAULT NULL,
  `Alamat_Pelanggan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`Id_Pelanggan`, `Nama_Pelanggan`, `No_Hp_Pelanggan`, `Jenis_Kelamin`, `Alamat_Pelanggan`) VALUES
(1, 'Agus Sasirangan', '085112345678', 'L', 'Jl. Kayutangi RT.01 NO.11, Banjarmasin'),
(2, 'Karyo', '085166458856', 'L', 'Jl.Kuin Utara RT.02 NO.12, Banjarmasin'),
(4, 'Nasar', '085167892347', 'L', 'Jl. Alalak Tengah RT. 02 NO.6, Banjarmasin'),
(5, 'Asep jabul', '096157526687', 'L', 'Jl. Sungai Andai RT.06 NO. 11, Banjarmasin'),
(6, 'jamed', '085187995443', 'L', 'Jl. Alalak Utara RT. 01 NO. 11, Banjarmasin');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `Id_Transaksi` int(11) NOT NULL,
  `Tanggal` date DEFAULT NULL,
  `Id_Pelanggan` int(11) DEFAULT NULL,
  `Id_Admin` int(11) DEFAULT NULL,
  `No_Meja` int(11) DEFAULT NULL,
  `Total` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id_Admin`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`Id_Transaksi`,`Id_Menu`),
  ADD KEY `Id_Menu` (`Id_Menu`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`Id_Menu`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`Id_Pelanggan`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`Id_Transaksi`),
  ADD KEY `Id_Pelanggan` (`Id_Pelanggan`),
  ADD KEY `Id_Admin` (`Id_Admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id_Admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `Id_Menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `Id_Pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `Id_Transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_ibfk_1` FOREIGN KEY (`Id_Transaksi`) REFERENCES `transaksi` (`Id_Transaksi`) ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_transaksi_ibfk_2` FOREIGN KEY (`Id_Menu`) REFERENCES `menu` (`Id_Menu`) ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`Id_Pelanggan`) REFERENCES `pelanggan` (`Id_Pelanggan`) ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`Id_Admin`) REFERENCES `admin` (`Id_Admin`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
