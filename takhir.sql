-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2018 at 06:15 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `takhir`
--

-- --------------------------------------------------------

--
-- Table structure for table `mhsw`
--

CREATE TABLE `mhsw` (
  `Nama` varchar(100) NOT NULL,
  `NIM` varchar(10) NOT NULL,
  `Kelas` varchar(50) NOT NULL,
  `JenisKelamin` varchar(25) NOT NULL,
  `Hobi` varchar(100) NOT NULL,
  `Fakultas` varchar(100) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mhsw`
--

INSERT INTO `mhsw` (`Nama`, `NIM`, `Kelas`, `JenisKelamin`, `Hobi`, `Fakultas`, `Alamat`, `Password`) VALUES
('Karol', '6701174022', 'MI02', 'Perempuan', 'Berkuda', 'Fakultas Rekayasa Industri', 'Padalarang', '0'),
('Angelina Yona', '6701174049', 'MI04', 'Perempuan', 'Berenang', 'Fakultas Ilmu Terapan', 'Bandung', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE `posting` (
  `NIM` varchar(10) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Judul` varchar(100) NOT NULL,
  `Posting` varchar(250) NOT NULL,
  `Gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posting`
--

INSERT INTO `posting` (`NIM`, `Nama`, `Judul`, `Posting`, `Gambar`) VALUES
('', '', 'Oh Se-hun', 'Oh Se-hun (lahir 12 April 1994 umur 24 tahun), lebih dikenal dengan mononim Sehun, adalah penyanyi, rapper, model, dan aktor asal Korea Selatan. Ia dikenal sebagai anggota dari boyband Korea Selatan-Tiongkok EXO dan sub kelompoknya EXO-K.\r\nSehun lahi', 'Nomor 5.PNG'),
('', '', 'Oh Se-hun', 'Oh Se-hun (lahir 12 April 1994 umur 24 tahun), lebih dikenal dengan mononim Sehun, adalah penyanyi, rapper, model, dan aktor asal Korea Selatan. Ia dikenal sebagai anggota dari boyband Korea Selatan-Tiongkok EXO dan sub kelompoknya EXO-K.\r\nSehun lahi', 'Nomor 5.PNG'),
('', '', 'Oh Se-hun', 'Oh Se-hun (lahir 12 April 1994; umur 24 tahun), lebih dikenal dengan mononim Sehun, adalah penyanyi, rapper, model, dan aktor asal Korea Selatan. Ia dikenal sebagai anggota dari boyband Korea Selatan-Tiongkok EXO dan sub kelompoknya EXO-K.\r\nSehun lah', 'Nomor 1.PNG'),
('', '', 'Oh Se-hun', 'Oh Se-hun (lahir 12 April 1994; umur 24 tahun), lebih dikenal dengan mononim Sehun, adalah penyanyi, rapper, model, dan aktor asal Korea Selatan. Ia dikenal sebagai anggota dari boyband Korea Selatan-Tiongkok EXO dan sub kelompoknya EXO-K.\r\nSehun lah', 'Nomor 1.PNG'),
('', '', 'Oh Se-hun', '\r\nSehun\r\nOh Se-hun at Show! Music Core on July 24, 2017 (7).jpg\r\nLatar belakang\r\nNama lahir	Oh Se-hun\r\nLahir	12 April 1994 (umur 24)\r\nSeoul, Korea Selatan\r\nGenre	\r\nK-pop dance R&B\r\nPekerjaan	\r\nPenyanyi Rapper Aktor Model\r\nInstrumen	Vokal\r\nTahun aktif', 'Nomor 1.PNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mhsw`
--
ALTER TABLE `mhsw`
  ADD PRIMARY KEY (`NIM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
