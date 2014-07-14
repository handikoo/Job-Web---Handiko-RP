-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2014 at 08:28 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `handisc`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `kode_anggota` int(5) NOT NULL,
  `nama_anggota` varchar(50) NOT NULL,
  `alamat_anggota` varchar(100) NOT NULL,
  `ttl_anggota` date NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `identitas_anggota` varchar(20) NOT NULL,
  `status_anggota` varchar(20) NOT NULL,
  `email_anggota` varchar(25) NOT NULL,
  PRIMARY KEY (`kode_anggota`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`kode_anggota`, `nama_anggota`, `alamat_anggota`, `ttl_anggota`, `no_telp`, `identitas_anggota`, `status_anggota`, `email_anggota`) VALUES
(10001, 'Handiko Rahman Pebrianto', 'Jl. Jangli Tlawah VI / 87D RT05 RW02 Jatingaleh, Semarang', '1995-02-09', '083838877414', 'Kartu Mahasiswa', 'Mahasiswa', 'handikorp@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `data_sewa`
--

CREATE TABLE IF NOT EXISTS `data_sewa` (
  `id_utama` int(5) NOT NULL AUTO_INCREMENT,
  `kode_sewa` varchar(5) NOT NULL,
  `kode_anggota` int(5) NOT NULL,
  `kode_film` varchar(5) NOT NULL,
  PRIMARY KEY (`id_utama`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `data_sewa`
--

INSERT INTO `data_sewa` (`id_utama`, `kode_sewa`, `kode_anggota`, `kode_film`) VALUES
(1, 'SE001', 10001, 'A0001');

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE IF NOT EXISTS `film` (
  `kode_film` varchar(5) NOT NULL,
  `judul_film` varchar(50) NOT NULL,
  `harga_film` varchar(10) NOT NULL,
  `durasi_sewa` varchar(10) NOT NULL,
  `denda_telat` varchar(10) NOT NULL,
  `stock_film` int(5) NOT NULL,
  `status_film` varchar(20) NOT NULL,
  PRIMARY KEY (`kode_film`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`kode_film`, `judul_film`, `harga_film`, `durasi_sewa`, `denda_telat`, `stock_film`, `status_film`) VALUES
('A0001', 'Final Destination 5', '3000', '1', '500', 2, 'Tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `kartu_member`
--

CREATE TABLE IF NOT EXISTS `kartu_member` (
  `kode_anggota` int(5) NOT NULL,
  `tgl_aktivasi_anggota` date NOT NULL,
  `tgl_exp_anggota` date NOT NULL,
  `perpanjangan_exp` varchar(10) NOT NULL,
  `biaya_perpanjangan` varchar(10) NOT NULL,
  PRIMARY KEY (`tgl_aktivasi_anggota`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kartu_member`
--

INSERT INTO `kartu_member` (`kode_anggota`, `tgl_aktivasi_anggota`, `tgl_exp_anggota`, `perpanjangan_exp`, `biaya_perpanjangan`) VALUES
(10001, '2014-04-09', '2014-11-09', '5', '10000');

-- --------------------------------------------------------

--
-- Table structure for table `penyewaan`
--

CREATE TABLE IF NOT EXISTS `penyewaan` (
  `kode_sewa` varchar(5) NOT NULL,
  `kode_anggota` int(5) NOT NULL,
  `kode_film` varchar(5) NOT NULL,
  `tanggal_sewa` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `total_harga` varchar(10) NOT NULL,
  `diskon` varchar(10) NOT NULL,
  PRIMARY KEY (`kode_sewa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyewaan`
--

INSERT INTO `penyewaan` (`kode_sewa`, `kode_anggota`, `kode_film`, `tanggal_sewa`, `tanggal_kembali`, `total_harga`, `diskon`) VALUES
('SE001', 10001, 'A0001', '2014-06-04', '2014-06-05', '3000', '0');

-- --------------------------------------------------------

--
-- Table structure for table `spesifik_film`
--

CREATE TABLE IF NOT EXISTS `spesifik_film` (
  `kode_film` varchar(5) NOT NULL,
  `genre_film` varchar(10) NOT NULL,
  `aktor_film` varchar(100) NOT NULL,
  `rating_film` varchar(10) NOT NULL,
  `tahun_rilis_film` int(4) NOT NULL,
  `production_house` varchar(20) NOT NULL,
  PRIMARY KEY (`genre_film`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spesifik_film`
--

INSERT INTO `spesifik_film` (`kode_film`, `genre_film`, `aktor_film`, `rating_film`, `tahun_rilis_film`, `production_house`) VALUES
('A0001', 'Thriller', 'John Legend, Arnold Swchanegerz', 'Dewasa', 2008, 'Techno House');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
