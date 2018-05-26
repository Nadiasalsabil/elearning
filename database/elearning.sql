-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2018 at 08:19 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `diskusi`
--

CREATE TABLE `diskusi` (
  `id` int(40) NOT NULL,
  `id_kelas` varchar(30) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `upload` varchar(500) NOT NULL,
  `diskusi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(40) NOT NULL,
  `nip` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `jk` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nip`, `nama`, `jabatan`, `jk`) VALUES
(1, '197102181998021005', 'Madanih Hasmi, S.Ag.M.M.Pd', 'Kepala Sekolah', 'L'),
(2, '196010211982112001', 'Hj.Utari Ratna Dewi Tj,S.Pd', 'Kepala Perpustakaan', 'P'),
(3, '196307231986032005', 'Murniati,S.Pd', 'Pembina Ekskul', 'P'),
(4, '196412241993032001', 'Dra.Nimade Ardani,M.M.Pd', 'Wakasek Bid.Kesiswaan', 'P'),
(5, '196201031998021001', 'Drs.Maman Rukmana', 'Guru ', 'L'),
(6, '196712041997022001', 'Dra.Aisyah Siregar,S.Pd', 'Guru', 'P'),
(7, '197104021998022001', 'Fauziah Juwanti,S.Pd', 'Wakasek Bid.Kurikulum', 'P'),
(8, '197008251998022003', 'Dewi Ulwiyati,S.Pd', 'guru', 'P'),
(9, '197005052008012018', 'Eny Winarsih,S.Pd', 'guru', 'P'),
(10, '196712042008012004', 'Uminah,S.Pd', 'guru', 'P'),
(11, '197110042008012006', 'Hj.Riza Hanum,S.Pd', 'guru', 'P'),
(12, '197207262008012004', 'Cucu Setiyorini,S.Pd', 'PWKS Bid.Kurikulum', 'P'),
(13, '197603172008012004', 'Jayeng Dian A, S.Pd', 'Guru', 'P'),
(14, '197002152008012012', 'Romsih Kurnianingsih,S.Ag', 'Wakasek Bid.Humas/Sanpres', 'P'),
(15, '198003142008012006', 'Minda Rossalina,S.Pd', 'PWKS Bid.Humas / Sanpres', 'P'),
(16, '1976071420080012005', 'Yuliawati,S.Pd', 'Kepala Lab.IPA', 'P'),
(17, '197510162008012005', 'Eti Puspitosari,S.Pd', 'Wali kelas 8-1', 'P'),
(18, '197608022008012002', 'Winarni dwi Agustini,S.Pd', 'Wali kelas 9-5', 'P'),
(19, '197608022008012003', 'Amalia Rusmiarti,S.Pd', 'Guru', 'P'),
(20, '198505262010011005', 'Kuswoyo,S.Pd,M.Pd', 'Wali Kelas 9-3', 'L'),
(21, '198211102010011011', 'H.Ayatullah,S.E.I,M.Pd', 'Wali Kelas 9-1', 'L'),
(22, '198204042010012008', 'Yutmiati,S.S', 'Wali kelas 7-3', 'P'),
(23, '197912142011011001', 'Sarwo Prihanto,S.Pd', 'Wali Kelas 9-2', 'L'),
(24, '196906232008012007', 'Yanah Rosdiana,S.Pd', 'wali Kelas 8-2', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(20) NOT NULL,
  `waktu` varchar(50) NOT NULL,
  `hari` varchar(80) NOT NULL,
  `pelajaran` varchar(300) NOT NULL,
  `guru` varchar(400) NOT NULL,
  `id_kelas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `waktu`, `hari`, `pelajaran`, `guru`, `id_kelas`) VALUES
(1, '07.00 - 07.40 WIB', 'Senin', 'Upacara', '-', '7-1'),
(2, '07.40 - 09.00 WIB', 'Senin', 'IPS', 'H Ayatullah,S.E.I.M.Pd', '7-1'),
(3, '09.00 - 09.40 WIB', 'Senin', 'Bahasa Indonesia', 'Yanah Rosdianah,S.Pd', '7-1'),
(4, '09.40-10.10 WIB', 'Senin', 'Istirahat', '-', '7-1'),
(5, '10.10 - 10.50 WIB', 'Senin', 'Bahasa Indonesia', 'Yanah Rosdianah,S.Pd', '7-1'),
(6, '10.50 - 12.10 WIB', 'Senin', 'Bahasa Inggris', 'Hj.Utari Ratna Dewi Tj,S.Pd', '7-1'),
(7, '12.10 - 12.40 WIB', 'Senin', 'Istirahat', '-', '7-1'),
(8, '12.40 - 14.00 WIB', 'Senin', 'Prakarya', 'Widyawati,S.Pd', '7-1'),
(9, '07.00 - 07.20 WIB', 'Selasa', 'Tadarus', '-', '7-1'),
(10, '07.20 - 09.20 WIB', 'Selasa', 'PKN', 'Nurhayati,S.Pd', '7-1'),
(11, '09.20 - 10.00 WIB', 'Selasa', 'IPA', 'Yuliawati,S.Pd', '7-1'),
(12, '10.00 - 10.30 WIB', 'Selasa', 'Istirahat', '-', '7-1'),
(13, '10.30 - 11.50 WIB', 'Selasa', 'PKN', 'Yuliawati,S.Pd', '7-1'),
(14, '11.50 - 12.30 WIB', 'Selasa', 'PAI', 'H.Nurhasannudin,S.Sos.I', '7-1'),
(15, '12.30 - 13.10 WIB', 'Selasa', 'Istirahat', '-', '7-1'),
(16, '13.10 - 14.30 WIB', 'Selasa', 'PAI', 'H.Nurhasannudin,S.Sos.I', '7-1'),
(17, '07.00 - 07.20 WIB', 'Rabu', 'Tadarus', '-', '7-1'),
(18, '07.20 - 08.40 WIB', 'Rabu', 'Bahasa Indonesia', 'Yanah Rosdianah,S.Pd', '7-1'),
(19, '08.40 - 10.00 WIB', 'Rabu', 'IPA', 'Yuliawati,S.Pd', '7-1'),
(20, '10.00 - 10.30 WIB', 'Rabu', 'Istirahat', '-', '7-1'),
(21, '10.30 - 12.30 WIB', 'Rabu', 'Matematika', 'Fauziah Juwanti,S.Pd', '7-1'),
(22, '12.30 - 13.10 WIB', 'Rabu', 'Istirahat', '-', '7-1'),
(23, '13.10 - 14.30 WIB', 'Rabu', 'Bahasa Sunda', 'Nuraeni,SH', '7-1'),
(24, '07.00 - 07.20 WIB', 'Kamis', 'Tadarus', '-', '7-1'),
(25, '07.20 - 09.20 WIB', 'Kamis', 'Penjaskes', 'Rohimin Nurkarim,S.Pd', '7-1'),
(26, '09.20 - 10.00 WIB', 'Kamis', 'BK', 'Dra.Nimade Ardani,M.M.Pd', '7-1'),
(27, '10.00 - 10.30 WIB', 'Kamis', 'Istirahat', '-', '7-1'),
(28, '10.30 - 11.50', 'Kamis', 'IPS', 'Eti Puspitosari', '7-1'),
(29, '11.50 - 12.30 WIB', 'Kamis', 'SBK', 'Faridatul Shobiroh,S.Pd', '7-1'),
(30, '12.30 - 13.10 WIB', 'Kamis', 'Istirahat', '-', '7-1'),
(31, '13.10 - 14.30', 'Kamis', 'SBK', 'Faridatul Shobiroh,S.Pd', '7-1'),
(32, '07.00 - 08.20 WIB', 'Jumat', 'Bahasa Inggris', 'Hj.Utari Ratna Dewi Tj,S.Pd', '7-1'),
(33, '08.20 - 09.40 WIB', 'Jumat', 'Bahasa Indonesia', 'Yanah Rosdianah,S.Pd', '7-1'),
(34, '09.40 - 10.10 WIB', 'Jumat', 'Istirahat', '-', '7-1'),
(35, '10.10 - 10.50 WIB', 'Jumat', 'Matematika', 'Fauziah Juwanti,S.Pd', '7-1');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_guru`
--

CREATE TABLE `jadwal_guru` (
  `id` int(30) NOT NULL,
  `nip` varchar(80) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `mapel` varchar(80) NOT NULL,
  `kelas` varchar(80) NOT NULL,
  `Hari` varchar(60) NOT NULL,
  `waktu` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_guru`
--

INSERT INTO `jadwal_guru` (`id`, `nip`, `nama`, `mapel`, `kelas`, `Hari`, `waktu`) VALUES
(1, '196010211982112001', 'Hj.Utari Ratna Dewi Tj,S.Pd', 'Bahasa Inggris', '8-1', 'Senin', '10:50:00.000000'),
(2, '196010211982112001', 'Hj.Utari Ratna Dewi Tj,S.Pd', 'Bahasa Inggris', '8-2', 'Senin', '10:10:00.000000'),
(3, '196010211982112001', 'Hj.Utari Ratna Dewi Tj,S.Pd', 'Bahasa Inggris', '8-3', 'Rabu', '13:10:00.000000'),
(4, '196010211982112001', 'Hj.Utari Ratna Dewi Tj,S.Pd', 'Bahasa Inggris', '8-4', 'Kamis', '13:10:00.000000'),
(5, '196010211982112001', 'Hj.Utari Ratna Dewi Tj,S.Pd', 'Bahasa Inggris', '8-5', 'Jumat', '10:10:00.000000'),
(6, '196307231986032005', 'Murniati,S.Pd', 'Ilmu Pengetahuan Sosial', '9-4', 'Senin', '08:20:00.000000'),
(7, '196307231986032005', 'Murniati,S.Pd', 'Ilmu Pengetahuan Sosial', '9-5', 'Senin', '11:30:00.000000'),
(8, '196021031993032001', 'Dra.Nimade Ardani,M.M.Pd', 'Ilmu Pengetahuan Alam', '9-1', 'Rabu', '08:40:00.000000'),
(9, '196021031993032001', 'Dra.Nimade Ardani,M.M.Pd', 'Ilmu Pengetahuan Alam', '9-2', 'Selasa', '11:50:00.000000'),
(10, '196021031993032001', 'Dra.Nimade Ardani,M.M.Pd', 'Ilmu Pengetahuan Alam', '7-4', 'Rabu', '11:10:00.000000'),
(11, '196021031993032001', 'Dra.Nimade Ardani,M.M.Pd', 'Ilmu Pengetahuan Alam', '7-5', 'Selasa', '07:20:00.000000'),
(12, '196201031998021001', 'Drs.Maman Rukmana ', 'Bahasa Indonesia', '8-3', 'Selasa', '11:10:00.000000'),
(13, '196201031998021001', 'Drs.Maman Rukmana ', 'Bahasa Indonesia', '8-4', 'Rabu', '13:10:00.000000'),
(14, '196201031998021001', 'Drs.Maman Rukmana ', 'Bahasa Indonesia', '8-5', 'Selasa', '13:10:00.000000'),
(15, '196712041997022001', 'Dra.Aisyah Siregar,S.Pd', 'BK', '9-5', 'Senin', '10:50:00.000000'),
(16, '196712041997022001', 'Dra.Aisyah Siregar,S.Pd', 'BK', '8-1', 'Kamis', '09:20:00.000000'),
(17, '196712041997022001', 'Dra.Aisyah Siregar,S.Pd', 'BK', '8-2', 'Kamis', '08:40:00.000000'),
(18, '196712041997022001', 'Dra.Aisyah Siregar,S.Pd', 'BK', '8-3', 'Kamis', '07:20:00.000000'),
(19, '197104021998022001', 'Fauziah Juwati,S.Pd', 'Matematika', '8-1', 'Rabu', '10:30:00.000000'),
(20, '197104021998022001', 'Fauziah Juwati,S.Pd', 'Matematika', '8-2', 'Selasa', '07:20:00.000000'),
(21, '197104021998022001', 'Fauziah Juwati,S.Pd', 'Matematika', '8-3', 'Senin', '12:40:00.000000'),
(23, '197008251998022003', 'Fauziah Juwanti,S.Pd', 'Matematika', '8-4', 'Kamis', '07:40:00.000000'),
(24, '197008251998022003', 'Dewi Ulwiyati, S.Pd', 'Pendidikan Kewarganegaraan', '9-2', 'Selasa', '07:20:00.000000'),
(25, '197008251998022003', 'Dewi Ulwiyati, S.Pd', 'Pendidikan Kewarganegaraan', '9-1', 'Selasa', '12:30:00.000000'),
(26, '197008251998022003', 'Dewi Ulwiyati, S.Pd', 'Pendidikan Kewarganegaraan', '9-3', 'Rabu', '11:30:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_tryout`
--

CREATE TABLE `jadwal_tryout` (
  `id` int(30) NOT NULL,
  `tanggal` date NOT NULL,
  `mapel` varchar(100) NOT NULL,
  `tryoutke` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_tryout`
--

INSERT INTO `jadwal_tryout` (`id`, `tanggal`, `mapel`, `tryoutke`) VALUES
(1, '2018-03-11', 'Bahasa Indonesia', '1'),
(2, '2018-05-14', 'Bahasa Inggris', '1'),
(3, '2018-05-15', 'Ilmu Pengetahuan Alam', '1'),
(4, '2018-05-16', 'Ilmu Pengetahuan Sosial', '1'),
(7, '2018-05-18', 'Matematika', '1');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(50) NOT NULL,
  `nis` varchar(70) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `id_kelas` varchar(100) NOT NULL,
  `batas_login` int(100) NOT NULL,
  `blokir` enum('N','Y') NOT NULL,
  `no` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `nis`, `username`, `password`, `level`, `id_kelas`, `batas_login`, `blokir`, `no`) VALUES
(12, '201810896', '201810896', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'siswa', '7-1', 0, 'N', 0),
(19, '0', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '0', 0, 'N', 0),
(21, '0', '7-1', 'dcf52f84dbf511ee4a0abcfc18093ee4', 'walikelas', '7-1', 0, 'N', 0),
(22, '0', '196010211982112001', '14e1b600b1fd579f47433b88e8d85291', 'guru', '', 0, 'N', 0),
(23, '0', '8-4', 'dcf52f84dbf511ee4a0abcfc18093ee4', 'walikelas', '8-4', 0, 'N', 0),
(25, '161707001', '161707001', '827ccb0eea8a706c4c34a16891f84e7b', 'siswa', '8-4', 0, 'N', 0),
(28, '2015230057', '2015230057', 'f1be06aa2db198a3398ed79e3463ae73', 'siswa', '9-1', 0, 'N', 0),
(29, '0', '196201031998021001', 'd86f50107b72386a44b00f0d86007ab2', 'guru', '8-4', 0, 'N', 0),
(30, '196712041997022001', '196712041997022001', 'd86f50107b72386a44b00f0d86007ab2', 'guru', '-', 0, 'N', 0),
(31, '197104021998022001', '197104021998022001', 'd86f50107b72386a44b00f0d86007ab2', 'guru', '-', 0, 'N', 0),
(32, '197008251998022003', '197008251998022003', 'd86f50107b72386a44b00f0d86007ab2', 'guru', '-', 0, 'N', 0),
(33, '197005052008012018', '197005052008012018', 'd86f50107b72386a44b00f0d86007ab2', 'guru', '-', 0, 'N', 0),
(34, '196712042008012004', '196712042008012004', 'd86f50107b72386a44b00f0d86007ab2', 'guru', '-', 0, 'N', 0),
(35, '197110042008012006', '197110042008012006', 'd86f50107b72386a44b00f0d86007ab2', 'guru', '-', 0, 'N', 0),
(36, '197207262008012004', '197207262008012004', 'd86f50107b72386a44b00f0d86007ab2', 'guru', '-', 0, 'N', 0),
(38, '9-1', '9-1', 'dcf52f84dbf511ee4a0abcfc18093ee4', 'walikelas', '9-1', 0, 'N', 0),
(39, '197002152008012012', '197002152008012012', 'd86f50107b72386a44b00f0d86007ab2', 'guru', '-', 0, 'N', 0),
(40, '198003142008012006', '198003142008012006', 'd86f50107b72386a44b00f0d86007ab2', 'guru', '-', 0, 'N', 0),
(41, '1976071420080012005', '1976071420080012005', 'd86f50107b72386a44b00f0d86007ab2', 'guru', '-', 0, 'N', 0),
(43, '161707136', '161707136', '23f86cc2c670b465198a4da285e5e890', 'siswa', '8-4', 0, 'N', 0),
(44, '161707006', '161707006', 'bcd724d15cde8c47650fda962968f102', 'siswa', '8-4', 0, 'N', 0),
(45, '2015230057', '2015230057', 'e86fdc2283aff4717103f2d44d0610f7', 'siswa', '9-1', 0, 'N', 0),
(46, '123456', '123456', 'bcbe3365e6ac95ea2c0343a2395834dd', 'siswa', '9-1', 0, 'N', 0),
(47, '786876', 'hgj', '7587c3c51ac3b38e48ad47cf158d812e', '', '', 0, 'N', 0);

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id` int(50) NOT NULL,
  `id_kelas` varchar(50) NOT NULL,
  `mapel` varchar(200) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `bab` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `file` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id` int(20) NOT NULL,
  `guru` varchar(100) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `nis` varchar(40) NOT NULL,
  `smt` int(30) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `mapel` varchar(60) NOT NULL,
  `absen` int(100) NOT NULL,
  `tugas` int(100) NOT NULL,
  `uts` int(100) NOT NULL,
  `uas` int(100) NOT NULL,
  `rata` float(40,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id`, `guru`, `kelas`, `nis`, `smt`, `nama`, `mapel`, `absen`, `tugas`, `uts`, `uas`, `rata`) VALUES
(40, '196010211982112001', '7-1', '201810901', 1, 'Jordan Imanuel Lontorin', 'Bahasa Inggris', 90, 89, 87, 85, 88),
(41, '196010211982112001', '7-1', '201810896', 1, 'Daffa Fazlu Rahman', 'Bahasa Inggris', 90, 89, 78, 75, 83),
(42, '196201031998021001', '8-4', '161707006', 1, 'Aji Dwi Prasetyo', 'Bahasa Indonesia', 90, 87, 98, 78, 88),
(43, '198003142008012006', '7-1', '201810896', 1, 'Daffa Fazlu Rahman', 'Bahasa Indonesia', 90, 80, 80, 90, 85);

-- --------------------------------------------------------

--
-- Table structure for table `nilaiquis`
--

CREATE TABLE `nilaiquis` (
  `id_quis` int(30) NOT NULL,
  `nis` varchar(40) NOT NULL,
  `kelas` varchar(40) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `latihan` varchar(100) NOT NULL,
  `nilai` decimal(40,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilaiquis`
--

INSERT INTO `nilaiquis` (`id_quis`, `nis`, `kelas`, `nama`, `latihan`, `nilai`) VALUES
(12, '201810896', '7-1', 'Daffa Fazlu Rahman', 'Latihan Soal Bahasa Indonesia 1', '90'),
(13, '201810896', '7-1', 'Daffa Fazlu Rahman', 'Latihan Soal Bahasa Indonesia 2', '89'),
(14, '201810896', '7-1', 'Daffa Fazlu Rahman', 'Latihan Soal Bahasa Indonesia 3', '78'),
(15, '201810896', '7-1', 'Daffa Fazlu Rahman', 'Latihan Soal Bahasa Indonesia 4', '76'),
(16, '201810896', '7-1', 'Daffa Fazlu Rahman', 'Latihan Soal Bahasa Indonesia 5', '95'),
(17, '201810896', '7-1', 'Daffa Fazlu Rahman', 'Latihan Soal Bahasa Indonesia Akhir', '89'),
(20, '201810896', '7-1', 'Daffa Fazlu Rahman', 'Latihan Soal Bahasa Inggris 1', '80');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(30) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `id_kelas` varchar(20) NOT NULL,
  `jk` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nis`, `nama`, `id_kelas`, `jk`) VALUES
(1, '161707001', 'Adinda Elfa Riza Ilyas', '8-4', 'P'),
(3, '161707136', 'Afivah Dewi Amaliyah', '8-4', 'P'),
(4, '161707006', 'Aji Dwi Prasetyo', '8-4', 'L'),
(5, '161707180', 'Alda Annisa Fitri', '8-4', 'P'),
(6, '161707181', 'Aldy Al-Amuzi Ramadhany', '8-4', 'L'),
(7, '161707222', 'Alifia Dinta Fesyiana', '8-4', 'P'),
(8, '161707269', 'Annisa Setyowati', '8-4', 'P'),
(9, '161707271', 'Aulia Asyfia Hidayat', '8-4', 'P'),
(10, '161707057', 'Aurellia Zerikha Syah', '8-4', 'P'),
(11, '161707314', 'Awal Khairun Nijam', '8-4', 'L'),
(12, '161707314', 'Cahya Saintika Ilahi', '8-4', 'P'),
(13, '161707278', 'Daffa Asyhada Bilyast', '8-4', 'L'),
(14, '161707142', 'Dimas Putra Wicaksana', '8-4', 'L'),
(15, '161707289', 'Erika Rahmawati', '8-4', 'P'),
(16, '161707236', 'Fitra Ferdiansyah Siregar', '8-4', 'L'),
(17, '161707018', 'Gunawan Rianto', '8-4', 'L'),
(18, '161707018', 'Indry Silviana Safitri', '8-4', 'P'),
(19, '161707241', 'Keysa Alea Sabina', '8-4', 'P'),
(20, '161707200', 'M.Riyan Hidayat', '8-4', 'L'),
(21, '161707152', 'Maheswari Pavita Dayana', '8-4', 'P'),
(22, '161707109', 'Meimbarasi Irene Christyn Wau', '8-4', 'P'),
(23, '161707366', 'Meydina Aulia Savitri', '8-4', 'P'),
(24, '161707068', 'Mia Jovita Zellyn', '8-4', 'P'),
(25, '161707154', 'Muhammad Davi Arjuna', '8-4', 'L'),
(26, '161707368', 'Muhamad Sadam Fahlefi', '8-4', 'L'),
(27, '161707072', 'Muhamammad Abdul Arrafi', '8-4', 'L'),
(28, '161707029', 'Muhammad Dhabith Auzan', '8-4', 'L'),
(29, '161707073', 'Muhammad Iqbal Bintang', '8-4', 'L'),
(30, '161707255', 'Muhammad Ridho Muharom', '8-4', 'L'),
(31, '161707330', 'Mutiara Sabila', '8-4', 'P'),
(32, '161707376', 'Nazwa Nugraini Zayyan', '8-4', 'P'),
(33, '161707206', 'Pinkan Adhaya Saffania', '8-4', 'P'),
(34, '161707298', 'Raffi Iqbal Fahrezi', '8-4', 'L'),
(35, '161707339', 'Ramzah', '8-4', 'L'),
(36, '161707123', 'Rania Seva Arlietha', '8-4', 'P'),
(37, '161707211', 'Risma Maryulianingsih', '8-4', 'P'),
(38, '161707211', 'Seteven Andriyano', '8-4', 'L'),
(39, '161707389', 'Tasya Sisilia Rahman', '8-4', 'P'),
(40, '161707132', 'Tsaabitah Jiihan Alvin', '8-4', 'P'),
(41, '161707306', 'Yosephine Cahaya Permatahari', '8-4', 'P'),
(42, '161707392', 'Zaid Aimar Zidane', '8-4', 'L'),
(45, '20181088', 'Achmad Ramzi Adriansyah', '7-1', 'L'),
(46, '201810889', 'Addisty Ayu Rinjani', '7-1', 'P'),
(47, '201810890', 'Akbar Cahyo Mustika Putra', '7-1', 'L'),
(48, '201810891', 'Andhika Gunawan', '7-1', 'L'),
(49, '201810892', 'Arrang Kamase Serawak', '7-1', 'L'),
(50, '201810893', 'Azkah Fauziah', '7-1', 'P'),
(51, '201810894', 'Cindy Tika Agustin', '7-1', 'P'),
(52, '201810895', 'Daffa Danendra Halsandrian', '7-1', 'L'),
(53, '201810896', 'Daffa Fazlu Rahman', '7-1', 'L'),
(54, '201810897', 'Edna Jasmine Pankesit', '7-1', 'P'),
(56, '201810898', 'Ganefa Sergian Hanafia', '7-1', 'P'),
(57, '201810899', 'hana Aliya Agustin', '7-1', 'P'),
(58, '201810900', 'Irvan Andhika Hasanudin', '7-1', 'L'),
(59, '201810901', 'Jordan Imanuel Lontorin', '7-1', 'L'),
(60, '201810902', 'Julia Wardani', '7-1', 'P'),
(61, '201810903', 'Karunia Cahyani', '7-1', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id_soal` int(30) NOT NULL,
  `kelas` varchar(30) NOT NULL,
  `mapel` varchar(100) NOT NULL,
  `soal` varchar(600) NOT NULL,
  `a` varchar(300) NOT NULL,
  `b` varchar(300) NOT NULL,
  `c` varchar(300) NOT NULL,
  `d` varchar(300) NOT NULL,
  `e` varchar(300) NOT NULL,
  `kunci_jawaban` varchar(40) NOT NULL,
  `gambar` varchar(500) NOT NULL,
  `tanggal` date NOT NULL,
  `aktif` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id_soal`, `kelas`, `mapel`, `soal`, `a`, `b`, `c`, `d`, `e`, `kunci_jawaban`, `gambar`, `tanggal`, `aktif`) VALUES
(1, '7-1', 'Latihan Soal Bahasa Indonesia 1', '<p>Penduduk yang tinggal dihunian liar atau tak berizin yang tersebar diseluruh wilayah kota solo diminta untuk pulang kekampung asalnya. Sampai sekarang sudah tercatat sebanyak 3.605 keluarga yang tinggal dipemukiman liar yang sebagian besar para pendatang. Menurut wakil wali kota solo Hadi Ruyanto,Pemkot Solo tidak akan memberi ganti rugi atau komponsasi dalam bentuk apapun kepada penghuni liar karena pada dasarnya mereka telah melakukan pelanggaran dengan tinggal diatas tanah negara. Pernyataan berikut yang bukan merupakan haal-hal pokok kutipan teks berita diatas adalah .......</p>', 'Para Pendukung penghuni liar sebagian besar pendatang', 'Semua Salah', 'Pemkot Solo tidak akan memberi kompensasi apapun terhadap para penghuni liar', 'Secara keseluruhan para penghuni liar yang tersebar dikota Solo kurang lebih 2.605 Kepala keluarga', 'Penduduk liar telah melakukan pelanggaran dengan tinggal diatas tanah negara', 'c', '', '2018-05-13', 'Y'),
(3, '7-1', 'Latihan Soal Bahasa Indonesia 1', '<p>Simpulan kutipan teks berita tersebut yang paling tepat................</p>', 'Pemerintah kota Solo menghimbau kepada para penghuni liar yang berada di seluruh wilayah kota Solo segera pulang ke daerah asalnya', 'Penduduk liar di seluruh wilayah kota Solo pada umumnya pendatang ', 'Kompensasi dalam bentuk apapun tidak akan diberikan oleh Pemkot Solo kepada para penghuni liar karena merupakan pelanggaran', 'Penduduk liar di seluruh wilayah kota Solo pada umumnya pendatang ', 'Para penghuni liar dimohon segera pulang ke asalnya masing-masing. ', 'b', '', '2018-05-13', 'Y'),
(4, '7-1', 'Latihan Soal Bahasa Indonesia 1', '<p>Cuaca ekstrim sejak awal November menjadi momok bagi petani di Banyumas, Jawa Tengah dan sekitarnya. Tidak hanya genangan air, serangan hama sejak tahap pembenihan sampai masa panen juga merepotkan petani. Yang banyak menyerang adalah tikus, wereng batang coklat, keong emas, bulai daun dan virus kuning.\r\nTema berita di atas adalah </p>\r\n', 'Pertanian', 'Peternakan', 'Pertambangan', 'Perdagangan', 'salah semua', 'a', '', '2018-05-13', 'Y'),
(5, '7-1', 'Latihan Soal Bahasa Indonesia 1', '<p>Musibah itu terjadi ketika orang tengah bersiap-siap makan sahur. Dalam waktu tak lebih dari sejam, banyak rumah telah menjadi korban. Warga tak punya kesempatan yang cukup untuk menyelamatkan harta bendanya. Tangispun terdengar menyayat hati. Kini yang tampak adalah beberapa rumah yang telah hangus.\r\nIsi berita di atas adalah </p>\r\n', 'kecelakaan lalu lintas saat akan sahur ', 'gempa bumi satu jam menjelang sahur	', 'banjir terjadi tengah malam ', 'Tsunami satu jam menjelang sahur	', 'kebakaran yang terjadi menjelang subuh', 'e', '', '2018-05-13', 'Y'),
(6, '7-1', 'Latihan Soal Bahasa Indonesia 1', '<p>Menjelang akhir tahun dan menyambut tahun baru, Kapolres Indramayu meminta pengguna kendaraan jalur pantura yang hendak konvoi untuk mematuhi tertib lalu lintas. Pengguna kendaraan diminta mencari jalan alternatif. Hal itu untuk menghindari kemacetan di jalur Pantura.Pokok-pokok yang terdapat dalam berita di atas adalah</p>', 'tahun baru, kapolres, kendaraan, jalur kemacetan', 'tahun baru, kapolres, pantura,  alternatif kemacetan', 'tahun baru, jalur pantura, jalan alternatif, kemacetan', 'tahun baru, jalur pantura, mencari jalan, kemacetan', 'tahun baru, jalur pantura, jalan alternatif, kemacetan', 'b', '', '2018-05-13', 'Y'),
(7, '7-1', 'Latihan Soal Bahasa Indonesia 2', '<p>Kebakaran hutan yang mengakibatkan kabut asap menjadi berita hangat yang menghiasi media cetak dan elektronika. Peristiwa ini telah menjadi agenda tahunan dan menghanguskan lebih dari tiga juta hektar hutan. Peristiwa ini pun telah menggangu kehidupan satwa.</p>', '  kabut asap  ', 'agenda tahunan', ' kehidupan satwa   ', 'kebakaran hutan', 'Tsunami', 'd', '', '2018-05-16', ''),
(8, '7-1', 'Latihan Soal Bahasa Indonesia 2', '<p>(1)      Sebelum berkendara, ada beberapa kelengkapan yang harus dicek, seperti rem, lampu, ban, dan spion yang harus berfungsi dengan baik. (2) itu gunanya servis kendaraan ke bengkel secara berkala. (3) saat berkendara, kita harus menaati semua aturan lalu lintas, dan sabar antre jika macet. (4) semua adalah hal yang harus diperhatikan pengendara agar selama sampaitujuan. Kalimat utama kutipan berita di atas terdapat pada nomor</p>', '1', '2', '3', '4', '1,2,3', 'b', '', '2018-05-16', 'Y'),
(9, '7-1', 'Latihan Soal Bahasa Indonesia 2', '<p>Pada umumnya, sakit tenggorokkan disebabkan oleh virus. Biasanya, terkait dengan tanda-tanda penyakit saluran napas lainnya. Seperti, hidung tersumbat atau batuk. Kebanyakan sakit tenggorokkan dapat sembuh dengan sendirinya. Namun, untuk membantu agar lebih nyaman ketika sakit, dapat dilakukan dengan minum air hangat yang diberi air perasan jeruk lemon dan madu.Simpulan paragraf tersebut yang tepat adalah </p>', 'Penyakit tenggorokkan disebabkan kebanyakan oleh virus.', 'Tanda-tanda penyakit tenggorokkan adalah hidung tersumbat.', 'Sakit tenggorokkan dapat dikurangi dengan minum air perasan jeruk lemon.', 'Usaha meringankan rasa sakit ketika menderita sakit tenggorokkan.', 'Penyakit tenggorokkan disebabkan kebanyakan oleh virus.', 'e', '', '2018-05-16', 'Y'),
(10, '7-1', 'Latihan Soal Bahasa Indonesia 2', '<p>Pergi pesiar naik sedan<br>\r\n   Jalannya cepat laksana kilat<br>\r\n    Jika engkau mendengar adzan<br>\r\n    Bersegeralah laksanakan salat. Ciri-ciri pantun berdasarkan contoh di atas adalah </p>', 'Terdiri atas 4 baris, berima sejajar, bersuku kata  8 s.d 12', 'Terdiri atas 4 baris, berima silang, tidak ada sampiran', 'Terdiri atas 4 baris, berima sejajar, bersampiran dan isi', 'Terdiri atas 4 baris, berima silang, bersuku kata 8 s.d 12', 'Terdiri atas 4 baris, berima sejajar, bersampiran dan isi', 'd', '', '2018-05-16', 'Y'),
(11, '7-1', 'Latihan Soal Bahasa Indonesia 2', '<p>Pada final kejuaraan futsal antarpelajar SMP se-Kecamatan Anjatan  Bagas  membuat sejarah baru. Dalam kedudukan 2:2 dan waktu tinggal 30 detik lagi tendangan saltonya menjebol gawang lawan. Dia pun diarak keliling lapangan Paragraf yang berisi pengalaman sesuai ilustrasi tersebut adalah</p>', 'Tendangan ala Pele diperagakan dengan sempurna. Dia melakukannya di saat yang tepat. Timnya yang dalam keadaan lesu menjadi bersemangat kembali dengan gol yang dibuatnya. Tim merasa berterima kasih kepada Bagas . Dia disanjung-sanjung, dielu-elukan dalam setiap kesempatan.', 'Aku bermain mati-matian. Waktu tinggal 30 detik lagi. Fantastis final futsal kali ini. Aku berlari ke depan gawang lawan. Tiba-tiba bola melayang melawati punggungku. Aku berspekulasi, salto sambil menendang. Wow…, goool! Aku diangkat ramai-ramai diarak keliling lapangan.', 'Kami tak mengira, Bagas  bisa menyamakan kedudukan. Semula kami putus asa. Berbagai strategi kami lakukan, tetapi hasilnya nihil. Entah kesurupan apa, tiba-tiba Bagas n menyeruak ke daerah pertahanan lawan dari sayap kiri. Dia berhasil mencetak gol ke gawang lawan. .', 'Semua benar', 'Aku memiliki tendangan salto yang akurat. Barangkali hal ini akan menambah kekuatan tim. Namun, sayang hal itu tidak membuat timku berhasil. Untung, Bagas  datang menyelamatkan timku. Gol tercipta dan mengubah kedudukan menjadi 2:2.', 'a', '', '2018-05-16', 'Y'),
(12, '7-1', 'Latihan Soal Bahasa Indonesia 3', '<p>Sabtu, 12 Desember 2015. Ibu Intan, Munirah, pulang dari Hongkong setelah ia mengadu nasib di negeri orang. Intan sudah membayangkan wajah ibu dan pelukan hangatnya, Dia berharap tak akan lagi kehilangan sosok seorang ibu.Kalimat dalam buku harian yang sesuai dengan ilustrasi adalah </p>', ' Hati Intan berdebar-debar, karena ia bertemu dengan ibunya di bandara. Dia berharap tak akan lagi kehilangan sosok seorang ibu', 'Di bandara aku menanti Ibu pulang dari Hongkong. Hatiku berdebar-debar mendengar kabar kecelakaan pesawat dari televisi.', 'Senin, 12 Desember memang hari yang menyenangkan, karena Ibu akan pulang dari Hongkong, tapi sayangnya Intan tak bisa menjemputnya di bandara.', 'Hatiku berdebar-debar menunggu Ibu di bandara hari Sabtu, 12 Desember 2015 tepat jam 13.00. Ibu yang bekerja mengadu nasib di negeri orang demi aku. Aku rindu ibu memelukku dengan hangat, tak kusadari air mataku mengalir.', 'Di bandara aku menanti Ibu pulang dari Hongkong. Hatiku berdebar-debar mendengar kabar kecelakaan pesawat dari televisi.', 'c', '', '2018-05-16', 'Y'),
(13, '7-1', 'Latihan Soal Bahasa Indonesia 3', '<p>Hari Senin, 2 November 2015, upacara bendera di sekolahku   sedikit berbeda. Aku bertugas sebagai pembaca janji siswa agak gugup. Kebetulan yang menjadi pembina upacara kepala sekolah menyampaikan amanat tentang  bela negara.  Intisari catatan harian di atas adalah</p>', 'pembaca janji siswa', 'pembina upacara', 'bela negara', 'upacara bendera', 'pembaca janji siswa', 'c', '', '2018-05-16', 'Y'),
(14, '7-1', 'Latihan Soal Bahasa Indonesia 3', '<p> Si kancil berjingkat-jingkat di kebun pak Tani, kancil hendak mencuri mentimun. Di tengah kebun ada boneka orang-orangan, si kancil tidak takut, sehingga dia mendekati boneka itu lalu menendangnya. Ternyata boneka orang-orangan pak Tani telah diberi getah nangka sehingga kaki si kancil menempel di boneka itu dan sulit dilepaskan. Kemudian pak Tani datang menangkap si kancil.Hal menarik dari dongeng di atas adalah </p>', 'Si kancil yang pemberani dan Pak Tani yang baik', 'Si kancil yang hendak mencuri mentimun', 'Si kancil yang serakah dan mendapat balasan dari perbuatannya', 'Si kancil berjingkat-jingkat di kebun pak Tani', 'Si kancil yang hendak mencuri mentimun', 'a', '', '2018-05-16', 'Y'),
(15, '7-1', 'Latihan Soal Bahasa Inggris 1', '<p>My favorite animal is rabbit. Rabbit has two long ears. Its eyes are big and black, but when it is dark its eyes are red. It has two long teeth. Its nose is small and soft pink.\r\nIts tail is soft, round and small like a cotton ball. Its legs are small. It doesn’t walk, it jumps. It is vegetarian and its favorite food are carrots. Rabbits are very cute.  How many ears does the rabbit have? </p>', 'Two ears', 'Four ears', 'Three ears', 'Five ears', 'Three ears', 'a', '', '2018-05-16', 'Y'),
(16, '7-1', 'Latihan Soal Bahasa Inggris 1', '<p>Does it has short teeth? </p>', 'Yes, it does', 'Yes, it doesn’t', ' No, it does', 'No, it doesn’t', ' No, it does', 'a', '', '2018-05-16', 'Y'),
(17, '7-1', 'Latihan Soal Matematika 1', ' <p>Hasil dari  -4 + 10 : 2(-5) adalah </p>', ' \r\n-29', '-15', ' \r\n-12', '-5', '-4', 'c', '', '2018-05-16', 'Y'),
(18, '7-1', 'Latihan Soal Matematika 1', 'Suhu tempat A adalah 60 C di bawah nol, suhu tempat B adalah 280C di atas nol, dan suhu tempat C adalah tepat di antara suhu tempat A dan tempat B. Suhu tempat C adalah', '-170', '-110', '110', '170', '180', 'a', '', '2018-05-16', 'Y'),
(19, '7-1', 'Latihan Soal Matematika 1', 'Setelah berputar 18 kali, roda sepeda menempuh jarak sejauh 27 meter. Jika roda tersebut berputar  12 kali, jarak yang ditempuh adalah .', '16 meter', '\r\n18 meter', '24 meter', '43 meter', '10 meter', 'b', '', '2018-05-16', 'Y'),
(20, '7-1', 'Latihan Soal Matematika 1', '<p>Sebuah asrama memiliki penghuni sebanyak 30 orang. Persediaan makanan yang ada diperkirakan akan habis selama 8 hari. Karena ada tambahan 10 orang penghuni, berapa hari persediaan makanan akan habis ?</p>', '\r\n6 hari', '11 hari', '\r\n15 hari', '24 hari', '20 hari', 'd', '', '2018-05-16', 'Y'),
(21, '7-1', 'Latihan Soal Matematika 1', 'Harga pembelian 1,5 lusin buku Rp72.000,00. Buku tersebut dijual eceran dengan harga Rp5.000,00 tiap buah. Persentase untung atau ruginya adalah', '\r\nUntung 20%', 'Rugi 20%', '\r\nUntung 25%', ' \r\nRugi 25%', 'Untung 20%', 'c', '', '2018-05-16', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `topik_quis`
--

CREATE TABLE `topik_quis` (
  `id_tq` int(20) NOT NULL,
  `latihan` varchar(100) NOT NULL,
  `id_kelas` varchar(100) NOT NULL,
  `waktu_pengerjaan` int(50) NOT NULL,
  `mapel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topik_quis`
--

INSERT INTO `topik_quis` (`id_tq`, `latihan`, `id_kelas`, `waktu_pengerjaan`, `mapel`) VALUES
(1, 'Latihan Soal Bahasa Indonesia 1', '7-1', 3600, 'Bahasa Indonesia'),
(2, 'Latihan Soal Bahasa Indonesia 2', '7-1', 3600, 'Bahasa Indonesia'),
(5, 'Latihan Soal Bahasa Indonesia 3', '7-1', 3600, 'Bahasa Indonesia'),
(6, 'Latihan Soal Bahasa Indonesia 4', '7-1', 3600, 'Bahasa Indonesia'),
(7, 'Latihan Soal Bahasa Indonesia 5', '7-1', 3600, 'Bahasa Indonesia'),
(10, 'Latihan Soal Bahasa Indonesia Akhir', '7-1', 3600, 'Bahasa Indonesia'),
(11, 'Latihan Soal Bahasa Inggris 1', '7-1', 3600, 'Bahasa Inggris'),
(13, 'Latihan Soal Bahasa Inggris 2', '7-1', 3600, 'Bahasa Inggris'),
(15, 'Latihan Soal Bahasa Inggris 3', '7-1', 3600, 'Bahasa Inggris'),
(16, 'Latihan Soal Bahasa Inggris 4', '7-1', 3600, 'Bahasa Inggris'),
(17, 'Latihan Soal Bahasa Inggris 5', '7-1', 3600, 'Bahasa Inggris'),
(18, 'Latihan Soal Bahasa Inggris Akhir', '7-1', 3600, 'Bahasa Inggris'),
(19, 'Latihan Soal Matematika 1', '7-1', 3600, 'Matematika'),
(20, 'Latihan Soal Matematika 2', '7-1', 3600, 'Matematika'),
(21, 'Latihan Soal Matematika 3', '7-1', 3600, 'Matematika'),
(22, 'Latihan Soal Matematika 4', '7-1', 3600, 'Matematika'),
(23, 'Latihan Soal Matematika 5', '7-1', 3600, 'Matematika'),
(24, 'Latihan Soal Matematika Akhir', '7-1', 3600, 'Matematika'),
(25, 'Latihan Soal IPA 1', '7-1', 3600, 'IPA'),
(26, 'Latihan Soal IPA 2', '7-1', 3600, 'IPA'),
(27, 'Latihan Soal IPA 3', '7-1', 3600, 'IPA'),
(28, 'Latihan Soal IPA 4', '7-1', 3600, 'IPA'),
(29, 'Latihan Soal IPA 5', '7-1', 3600, 'IPA'),
(30, 'Latihan Soal IPA Akhir', '7-1', 3600, 'IPA'),
(31, 'Latihan Soal IPS 1', '7-1', 3600, 'IPS'),
(32, 'Latihan Soal IPS 2', '7-1', 3600, 'IPS'),
(33, 'Latihan Soal IPS 3', '7-1', 3600, 'IPS'),
(34, 'Latihan Soal IPS 4', '7-1', 3600, 'IPS'),
(35, 'Latihan Soal IPS 5', '7-1', 3600, 'IPS'),
(36, 'Latihan Soal IPS Akhir', '7-1', 3600, 'IPS'),
(37, 'Latihan Soal Bahasa Indonesia 1', '9-1', 3600, 'Bahasa Indonesia'),
(38, 'Latihan Soal Bahasa Indonesia 2', '9-1', 3600, 'Bahasa Indonesia'),
(39, 'Latihan Soal Bahasa Indonesia 3', '9-1', 3600, 'Bahasa Indonesia'),
(40, 'Latihan Soal Bahasa Indonesia 4', '9-1', 3600, 'Bahasa Indonesia'),
(41, 'Latihan Soal Bahasa Indonesia 5', '9-1', 3600, 'Bahasa Indonesia'),
(42, 'Latihan Soal Bahasa Indonesia Akhir', '9-1', 3600, 'Bahasa Indonesia'),
(43, 'Latihan Soal Tryout Bahasa Indonesia', '9', 3600, 'Tryout'),
(44, 'Latihan Soal Tryout Bahasa Inggris', '9', 3600, 'Tryout'),
(45, 'Latihan Soal Tryout IPA', '9', 3600, 'Tryout'),
(46, 'Latihan Soal Tryout IPS', '9', 3600, 'Tryout'),
(47, 'Latihan Soal Tryout Matematika', '9', 3600, 'Tryout');

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `id` int(100) NOT NULL,
  `nis` varchar(30) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `id_kelas` varchar(100) NOT NULL,
  `mapel` varchar(200) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `tugas_ke` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `file` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tugas`
--

INSERT INTO `tugas` (`id`, `nis`, `nama`, `id_kelas`, `mapel`, `judul`, `tugas_ke`, `tanggal`, `file`) VALUES
(1, '161707001', 'Adinda Elfa Riza Ilyas', '8-4', 'Bahasa Indonesia', 'tugas', '1', '2018-04-20', '../tugas/react-native-preview.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diskusi`
--
ALTER TABLE `diskusi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `jadwal_guru`
--
ALTER TABLE `jadwal_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal_tryout`
--
ALTER TABLE `jadwal_tryout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilaiquis`
--
ALTER TABLE `nilaiquis`
  ADD PRIMARY KEY (`id_quis`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `topik_quis`
--
ALTER TABLE `topik_quis`
  ADD PRIMARY KEY (`id_tq`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diskusi`
--
ALTER TABLE `diskusi`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `jadwal_guru`
--
ALTER TABLE `jadwal_guru`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `jadwal_tryout`
--
ALTER TABLE `jadwal_tryout`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `nilaiquis`
--
ALTER TABLE `nilaiquis`
  MODIFY `id_quis` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `topik_quis`
--
ALTER TABLE `topik_quis`
  MODIFY `id_tq` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
