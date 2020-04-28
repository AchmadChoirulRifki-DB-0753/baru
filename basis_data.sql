-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2019 at 02:59 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basis_data_l`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `kode_dosen` varchar(15) NOT NULL,
  `nama_dosen` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`kode_dosen`, `nama_dosen`) VALUES
('DOS-001', 'Akhmad Khanif Zyen, S.Kom. ,M.Kom.'),
('DOS-002', 'Buang Budi Wahono,S.Si.,M.Kom'),
('DOS-003', 'R.Hadapiningradja Kusumodestoni,S.Kom.,M.Kom'),
('DOS-004', 'Ir.Adi Sucipto,M.Kom'),
('DOS-005', 'Harminto Mulyo,S.Kom.M.Kom'),
('DOS-006', 'Teguh Tamrin,S.Kom.,M.Kom'),
('DOS-007', 'Gentur Wahyu Nyipto Wibowo,M.Kom'),
('DOS-008', 'Nur Aeni Widiastuti,S.Pd.,M.Kom'),
('DOS-009', 'Nadia Annisa Maori,M.Kom'),
('DOS-010', 'Sarwido,SE.MM.');

-- --------------------------------------------------------

--
-- Table structure for table `kuliah`
--

CREATE TABLE `kuliah` (
  `kode_makul` varchar(15) NOT NULL,
  `nama_makul` varchar(50) NOT NULL,
  `sks` int(3) DEFAULT NULL,
  `kode_dosen` varchar(15) DEFAULT NULL,
  `ruang` varchar(15) DEFAULT NULL,
  `waktu` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kuliah`
--

INSERT INTO `kuliah` (`kode_makul`, `nama_makul`, `sks`, `kode_dosen`, `ruang`, `waktu`) VALUES
('TIF315', 'Basis Data Lanjur', 2, 'DOS-009', 'D103', 'Senin, 07.30-09.10'),
('TIF316', 'Strategi Algoritma', 3, 'DOS-002', 'D304', 'Selasa, 10.00-12.30'),
('TIF317', 'Grafika Komputer', 3, 'DOS-003', 'D101', 'Rabu, 07.30-10.00'),
('TIF318', 'Rekayasa Perangkat Lunak', 2, 'DOS-009', 'D304', 'Selasa, 07.30-09.10'),
('TIF319', 'Pemrograman Web', 3, 'DOS-008', 'D101', 'Jumat, 10.00-12.30'),
('TIF320', 'Jaringan Komputer', 3, 'DOS-008', 'D105', 'Kamis, 10.00-12.30'),
('TIF321', 'Premrograman Berorientasi Objek Lanjut', 3, 'DOS-006', 'D103', 'Kamis, 07.30-10.00');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` int(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telepon` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `alamat`, `telepon`) VALUES
(1, 'muhammad yusuf hidayatullah', 'mayong', '081878098765'),
(3, 'maulana ashar', 'jepara', '089234567890'),
(4, 'anang ma\'ruf', 'jepara', '089888999234'),
(6, 'tuvie miska muchammad', 'tanjung', '082234567890'),
(2345678, 'qwertyui', 'sdfghj', '0987654'),
(181240000, 'ashar', 'jondang', '08000000'),
(1234567890, 'satu', 'dua', '01010101011'),
(2147483647, 'hidayah', 'tahunan', '089321238901');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai`
--

CREATE TABLE `tbl_nilai` (
  `kode_makul` varchar(15) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `nilai` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='tbl_nilai';

--
-- Dumping data for table `tbl_nilai`
--

INSERT INTO `tbl_nilai` (`kode_makul`, `nim`, `nilai`) VALUES
('TIF315', '181240000833', 'A'),
('TIF316', '181240000833', 'AB'),
('TIF317', '181240000833', 'A'),
('TIF318', '181240000833', 'A'),
('TIF319', '181240000833', 'A'),
('TIF320', '181240000833', 'A'),
('TIF321', '181240000833', 'AB');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`kode_dosen`);

--
-- Indexes for table `kuliah`
--
ALTER TABLE `kuliah`
  ADD PRIMARY KEY (`kode_makul`),
  ADD KEY `kode_dosen` (`kode_dosen`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD PRIMARY KEY (`kode_makul`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `nim` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kuliah`
--
ALTER TABLE `kuliah`
  ADD CONSTRAINT `kuliah_ibfk_1` FOREIGN KEY (`kode_dosen`) REFERENCES `dosen` (`kode_dosen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
