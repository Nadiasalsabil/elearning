-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2018 at 03:59 AM
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
(25, '197008251998022003', 'Dewi Ulwiyati, S.Pd', 'Pendidikan Kewarganegaraan', '9-1', 'Selasa', '12:30:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(40) NOT NULL,
  `pelajaran` varchar(50) NOT NULL,
  `id_kelas` varchar(30) NOT NULL,
  `file` varchar(400) NOT NULL,
  `soal` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `pelajaran`, `id_kelas`, `file`, `soal`) VALUES
(1, 'PKN', '7-1', '', ''),
(2, 'PKN', '7-2', '', ''),
(3, 'PKN', '7-3', '', ''),
(4, 'PKN', '7-4', '', ''),
(5, 'PKN', '7-5', '', ''),
(6, 'B.Inggris', '7-1', '', ''),
(7, 'B.Inggris', '7-2', '', ''),
(8, 'B.Inggris', '7-3', '', ''),
(9, 'B.Inggris', '7-4', '', ''),
(10, 'B.Inggris', '7-5', '', ''),
(11, 'IPS', '7-1', '', ''),
(12, 'IPS', '7-2', '', ''),
(13, 'IPS', '7-3', '', ''),
(14, 'IPS', '7-4', '', ''),
(15, 'IPS', '7-5', '', ''),
(16, 'IPA', '7-1', '', ''),
(17, 'IPA', '7-2', '', ''),
(18, 'IPA', '7-3', '', ''),
(19, 'IPA', '7-4', '', ''),
(20, 'IPA', '7-5', '', ''),
(21, 'B.Indonesia', '7-1', '', ''),
(22, 'B.Indonesia', '7-2', '', ''),
(23, 'B.Indonesia', '7-3', '', ''),
(24, 'B.Indonesia', '7-4', '', ''),
(25, 'B.Indonesia', '7-5', '', ''),
(32, 'Matematika', '7-1', '', ''),
(33, 'Matematika', '7-2', '', ''),
(34, 'Matematika', '7-3', '', ''),
(35, 'Matematika', '7-4', '', ''),
(36, 'Matematika', '7-5', '', ''),
(37, 'PKN', '8-1', '', ''),
(38, 'PKN', '8-2', '', ''),
(39, 'PKN', '8-3', '', ''),
(40, 'PKN', '8-4', '', ''),
(41, 'PKN', '8-5', '', ''),
(42, 'B.Inggris', '8-1', '', ''),
(43, 'B.Inggris', '8-2', '', ''),
(44, 'B.Inggris', '8-3', '', ''),
(45, 'B.Inggris', '8-4', '', ''),
(46, 'B.Inggris', '8-5', '', ''),
(47, 'IPS', '8-1', '', ''),
(48, 'IPS', '8-2', '', ''),
(49, 'IPS', '8-3', '', ''),
(50, 'IPS', '8-4', '', ''),
(51, 'IPS', '8-5', '', ''),
(52, 'IPA', '8-1', '', ''),
(53, 'IPA', '8-2', '', ''),
(54, 'IPA', '8-3', '', ''),
(55, 'IPA', '8-4', '', ''),
(56, 'IPA', '8-5', '', ''),
(57, 'B.Indonesia', '8-1', '', ''),
(58, 'B.Indonesia', '8-2', '', ''),
(59, 'B.Indonesia', '8-3', '', ''),
(60, 'B.Indonesia', '8-4', '', ''),
(61, 'B.Indonesia', '8-5', '', ''),
(62, 'Matematika', '8-1', '', ''),
(63, 'Matematika', '8-2', '', ''),
(64, 'Matematika', '8-3', '', ''),
(65, 'Matematika', '8-4', '', ''),
(66, 'Matematika', '8-5', '', ''),
(67, 'PKN', '9-1', '', ''),
(68, 'PKN', '9-2', '', ''),
(69, 'PKN', '9-3', '', ''),
(70, 'PKN', '9-4', '', ''),
(71, 'PKN', '9-5', '', ''),
(72, 'B.Inggris', '9-1', '', ''),
(73, 'B.Inggris', '9-2', '', ''),
(74, 'B.Inggris', '9-3', '', ''),
(75, 'B.Inggris', '9-4', '', ''),
(76, 'B.Inggris', '9-5', '', ''),
(77, 'IPS', '9-1', '', ''),
(78, 'IPS', '9-2', '', ''),
(79, 'IPS', '9-3', '', ''),
(80, 'IPS', '9-4', '', ''),
(81, 'IPS', '9-5', '', ''),
(82, 'IPA', '9-1', '', ''),
(83, 'IPA', '9-2', '', ''),
(84, 'IPA', '9-3', '', ''),
(85, 'IPA', '9-4', '', ''),
(86, 'IPA', '9-5', '', ''),
(87, 'B.Indonesia', '9-1', '', ''),
(88, 'B.Indonesia', '9-2', '', ''),
(89, 'B.Indonesia', '9-3', '', ''),
(90, 'B.Indonesia', '9-4', '', ''),
(91, 'B.Indonesia', '9-5', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(50) NOT NULL,
  `nis` int(30) NOT NULL,
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
(12, 201810896, '201810896', '202cb962ac59075b964b07152d234b70', 'siswa', '7-1', 0, 'N', 0),
(18, 0, 'guru', '77e69c137812518e359196bb2f5e9bb9', 'guru', '-', 0, 'N', 0),
(19, 0, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '0', 0, 'N', 0),
(21, 0, '7-1', 'dcf52f84dbf511ee4a0abcfc18093ee4', 'walikelas', '7-1', 0, 'N', 0);

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

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id`, `id_kelas`, `mapel`, `judul`, `bab`, `tanggal`, `file`) VALUES
(1, '7-1', 'Bahasa Indonesia', 'Proposal', '1', '2010-01-29', '../materi-soal/KATA PENGANTAR.pdf'),
(3, '7-1', 'Bahasa Inggris', 'Ask Help', '1', '2018-04-05', '../materi-soal/BAB III.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id` int(20) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `nis` varchar(40) NOT NULL,
  `smt` int(30) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `mapel` varchar(60) NOT NULL,
  `absen` int(100) NOT NULL,
  `tugas` int(100) NOT NULL,
  `uts` int(100) NOT NULL,
  `uas` int(100) NOT NULL,
  `rata` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id`, `kelas`, `nis`, `smt`, `nama`, `mapel`, `absen`, `tugas`, `uts`, `uas`, `rata`) VALUES
(6, '7-1', '201810896', 1, 'Daffa Fazlu Rahman', 'Bahasa Indonesia', 80, 85, 78, 80, 85),
(7, '7-1', '2015230052', 1, 'Nadia Salsabil', 'Matematika', 100, 98, 89, 99, 90),
(8, '7-1', '201810896', 1, 'Daffa Fazlu Rahman', 'Matematika', 60, 90, 60, 70, 90);

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
  `mapel` varchar(60) NOT NULL,
  `nilai` decimal(40,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilaiquis`
--

INSERT INTO `nilaiquis` (`id_quis`, `nis`, `kelas`, `nama`, `latihan`, `mapel`, `nilai`) VALUES
(5, '2015230052', '7-1', 'Nadia Salsabil', 'Latihan Bahasa Indonesia 1', 'Bahasa Indonesia ', '13');

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
(2, '161707045', 'Adittiyah', '8-4', 'L'),
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
  `mapel` varchar(30) NOT NULL,
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
(1, '7-1', 'Bahasa Indonesia', '<p>Bagaimana Melly dapat menciptakan lagu yang selalu berkesan  dan memilki karakter kuat ibu dua anak ini menjawab, \" menurut Melly , karena tidak banyak membaca ataupun belajar dari para pemikir dan maestro, karya yang dia hasikan menjadi sangat unik dan khas .\" Aku jadi nggak meniru orang lain\" , ujar ibu dua anak itu.Kalimat utama paragraf tersebut terdapat pada kalimat...</p>', 'pertama', 'kedua', 'ketiga', 'keempat', 'kelima', 'a', '', '2018-03-26', 'Y'),
(2, '7-1', 'Bahasa Indonesia', '<p>Penyebab kecelakaan lalu lintas di jalan raya terutama kesalahan para pengemudi biasa kurang sabar. Mereka sering mengebut dan ingin mendahului. Mengantuk juga sering menjadi penyebab kecelakaan. Jarak yang ditempuh kendaraan terlalu jauh akan mengakibatkan sopir lelah dan mengantuk sehingga mudah tabrakan dengan kendaraan lain.\r\nKalimat tanggapan yang sesuai dengan isi paragraf tersebut adalah...</p>', 'Jarak terlalu jauh mengakibatkan pengemudi kurang sabar.', 'Bila sopir berhati-hati , kecelakaan tidak mungkin terjadi', 'Para pengemudi biasanya mengebut dan mendahului.', 'Tabrakan terjadi karena sering mengantuk pengemudi', 'Semua Benar', 'b', '', '2018-03-26', 'Y'),
(3, '7-1', 'Bahasa Indonesia', 'Sebagian produk-produk industri dalam negeri khususnya dalam barang kebutuhan sehari-hari kurang laku dipasaran, masyarakat lebih menyukai produk luar negeri karena kualitasnya lebih baik.\r\nTanggapan logis terhadap pernyataan di atas yaitu.', ' Jumlah barang yang dijual dikurangi karena barang karena barang tersebut tidak laku di pasaran', 'Barang-barang kebutuhan sehari-hari perlu diproduksi karena diperlukan.', 'Kualitas barang harus ditingkatkan karena telah ditingkatkan karena konsumen lebih senang barang yang bermutu.', 'Produksi dalam negeri dijual murah karena dengan harga murah barang cepat habis.', 'Semua benar', 'c', '', '2018-03-28', 'Y'),
(4, '7-1', 'Bahasa Indonesia', 'Pada era global, sumber daya manusia (SDM) andai merupakan kebutuham yang mendasar. Usaha untuk mendapatkan (SDM) andal dapat dilakukan melalui berbagai cara misalnya melalui penataran, pelatihan, kursus, lokakarya, seminar atau kegiatan sejenis, cara yang efektif untuk menghasilkan SDM andal yaitu melalui jalur pendidikan dengan mengikuti pendidikan tertentu. Seseorang dapat belajar berdasarkan kurikulum yang terprogaram dan hari efektif yang pasti.\r\nSimpulan tersirat dari paragraf tersebut adalah....', 'Pada era global, sumber daya manusia (SDM) andai merupakan kebutuham yang mendasar.', 'Jalur pendidikan dianggap lebih efectif untuk menghasilkan SDM andal.', 'SDM andal dapat dilakukan melalui berbagai cara antara cara pendidikan dan  pelatihan.', 'Semua Salah', 'SDM yang andal menjadi kebutuhan mendasar bagi setipa negara baik negara maju dan berkembang.', 'b', '', '2018-03-28', 'Y'),
(5, '7-1', 'Bahasa Indonesia', '(1) Sebagai seorang sastrawan, pekerjaan Djenar Mahesa Ayu menulis novel atau cerita pendek. (2) Dari karya tersebut tentu pembaca memproleh berbagai manfaat. (3). Penyajian pesan penulis sastra halus dan sopan. (4). Hasil penulisannya jarang menimbulkan hal-hal yang berbau SARA\r\nKalimat fakta dalam paragraf  tersebut di tandai dengan no....', '1', '2', '3', '4', '5', 'a', '', '2018-03-28', 'Y'),
(6, '7-1', 'Bahasa Indonesia', '(1) Gubernur DKI Jakarta Sulistiyo, menargetkan pertumbuhan Ekonomi  pada 2007 sebesar 6,6 %. (2) Ia optimis target itu bisa dicapai karena ada pembangunan skala besar dijakarta. (3). Kondisi ekonomi dari sisi makro saat ini membaik. (4). Inflansi 2006 mencapai 9,9 % , 2005 mencapai 16,6 % dengan pertumbuhan ekonomi 2006 sebesar 5,8 % . (5). Jadi pada  2007 pertumbuhan  ekonomi bisa mencapai target 6,6 %, Kata Sutiyoso kepada wartawan.\r\nKalimat fakta pada bacaan tersebut di tandai engan nomer.....', '1 & 2', '1 & 4', '2 & 4', '2 & 5', '1 & 5', 'b', '', '2018-03-28', 'Y'),
(7, '7-1', 'Bahasa Indonesia', 'Tubuh biru\r\nTatapan mata biru\r\nLelaki terguling di jalan\r\n\r\nLewat gardu belanda dengan bumi\r\nBerlindung warna malam\r\nSendiri masuk kota\r\nIngin ikut ngubur ibunya\r\nTema puisi tersebut adalah ..........', 'Perlawanan', 'Keberanian', 'Kekejaman', 'Perjuangan', 'Kesedihan', 'd', '', '2018-03-28', 'Y'),
(8, '7-1', 'Bahasa Indonesia', ' (1) Betapa gembiranya Ardi. (2) saat pulang sekolah is mendapat tawaran dari pamannya Abdulmanam, untuk bersekolah di Jakarta. (3) bagaimanpun dijakarta harus berjuang . (4). Jakarta adalah kota besar , yang selama ini ia impikan selama ini, yakni bisa melihata dan tinggal di jakarta.\r\nBukti bahwa latar waktu kutiban tersebut  pada siang hari ditunjukan pada nomor.....', '4', '3', '2', '1', '5', 'c', '', '2018-03-28', 'Y');

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
(1, '2015230080', 'Ela Nastika', '7-2', 'Bahasa Indonesia', 'dghdf', 'dfdsf', '0000-00-00', '../tugas/'),
(2, '2015230057', 'Nadia Salsabil', '7-1', 'Bahasa Indonesia', '7-1', '2', '2018-03-16', '../tugas/- Rundown HIFASCO 2018.docx'),
(3, '2015230057', 'Nadia Salsabil', '7-1', 'Matematika', 'tugas latihan', '2', '2018-03-10', '../tugas/0611tu2.gif');

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
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
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
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `nilaiquis`
--
ALTER TABLE `nilaiquis`
  MODIFY `id_quis` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
