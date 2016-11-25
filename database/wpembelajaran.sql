-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2016 at 03:33 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpembelajaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_kuliah`
--

CREATE TABLE `jadwal_kuliah` (
  `id` int(11) NOT NULL,
  `kode_seksi` varchar(5) NOT NULL,
  `tempat` varchar(5) NOT NULL,
  `waktu_mulai` datetime DEFAULT NULL,
  `waktu_selesai` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_kuliah`
--

INSERT INTO `jadwal_kuliah` (`id`, `kode_seksi`, `tempat`, `waktu_mulai`, `waktu_selesai`) VALUES
(5, '9511', 'L1209', '2016-11-24 12:00:00', '2016-11-24 14:00:00'),
(7, '9510', 'L1209', '2016-11-25 06:00:00', '2016-11-25 08:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_ujian`
--

CREATE TABLE `jadwal_ujian` (
  `id` int(1) NOT NULL,
  `kode_seksi` varchar(5) NOT NULL,
  `kode_ujian` char(1) NOT NULL,
  `tanggal_ujian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_ujian`
--

INSERT INTO `jadwal_ujian` (`id`, `kode_seksi`, `kode_ujian`, `tanggal_ujian`) VALUES
(8, '9510', '2', '2016-11-25'),
(9, '9510', '3', '2016-11-30'),
(10, '9510', '1', '2016-12-10');

-- --------------------------------------------------------

--
-- Table structure for table `list_materi`
--

CREATE TABLE `list_materi` (
  `id` int(11) NOT NULL,
  `id_materi` int(11) NOT NULL,
  `point` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `kode_seksi` varchar(5) NOT NULL,
  `nama_mk` varchar(255) NOT NULL,
  `jenis_mk` char(1) NOT NULL,
  `total_sks` int(1) NOT NULL,
  `teori_sks` int(1) NOT NULL,
  `praktek_sks` int(1) NOT NULL,
  `rpkps` mediumtext NOT NULL,
  `cover_img` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`kode_seksi`, `nama_mk`, `jenis_mk`, `total_sks`, `teori_sks`, `praktek_sks`, `rpkps`, `cover_img`) VALUES
('9510', 'Web Design', '1', 3, 2, 1, 'Rpkps_9510.docx', '1.jpg'),
('9511', 'CSS', '2', 4, 3, 1, 'Rpkps_9511.docx', '3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id` int(11) NOT NULL,
  `kode_seksi` varchar(5) NOT NULL,
  `judul_materi` varchar(255) NOT NULL,
  `materi` mediumtext NOT NULL,
  `tugas` mediumtext NOT NULL,
  `img_materi` mediumtext NOT NULL,
  `video_materi` mediumtext NOT NULL,
  `file_materi` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id`, `kode_seksi`, `judul_materi`, `materi`, `tugas`, `img_materi`, `video_materi`, `file_materi`) VALUES
(7, '9510', 'INTERNET DAN WEB', '<h3>a. Definisi dan sejarah Internet<br />\r\nb. Layanan- layanan Internet<br />\r\nc. Web sebagai layanan internet<br />\r\nd. Lembaga-lembaga Pengelola Internet dan web</h3>\r\n', 'tugas_INTERNET DAN WEB_9510.docx', '1.jpg', 'video_materi_INTERNET DAN WEB_9510.mp4', 'file_materi_INTERNET DAN WEB_9510.docx'),
(8, '9510', 'HYPERTEXT MARKUP LANGUAGE (HTML)', '<h3>a. Definisi HTML<br />\r\nb. Elemen HTML<br />\r\nc. Tag<br />\r\nd. Atribut<br />\r\ne. Struktur HTML</h3>\r\n', 'tugas_HYPERTEXT MARKUP LANGUAGE (HTML)_9510.docx', '2.jpg', 'video_materi_HYPERTEXT MARKUP LANGUAGE (HTML)_9510.mp4', 'file_materi_HYPERTEXT MARKUP LANGUAGE (HTML)_9510.docx');

-- --------------------------------------------------------

--
-- Table structure for table `mk_user`
--

CREATE TABLE `mk_user` (
  `id` int(11) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `kode_seksi` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `foto` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`nim`, `nama`, `email`, `foto`) VALUES
('5235117148', 'Rizda', 'rizda25.9c@gmail.com', '14730596_538654909663352_8205669833736454144_n.jpg'),
('5235117149', '', NULL, NULL),
('5235117150', '', NULL, NULL),
('5235117151', '', NULL, NULL),
('5235117152', '', NULL, NULL),
('5235117153', '', NULL, NULL),
('admin', 'Firdaus', 'firdausibnu@hotmail.com', '14563460_1410867325605062_8265481057655684327_n.png');

-- --------------------------------------------------------

--
-- Table structure for table `ref_mk`
--

CREATE TABLE `ref_mk` (
  `jenis_mk` char(1) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_mk`
--

INSERT INTO `ref_mk` (`jenis_mk`, `deskripsi`) VALUES
('1', 'Wajib'),
('2', 'Pilihan');

-- --------------------------------------------------------

--
-- Table structure for table `ref_ruang`
--

CREATE TABLE `ref_ruang` (
  `id` int(10) NOT NULL,
  `kode_ruang` varchar(10) NOT NULL,
  `deskripsi` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_ruang`
--

INSERT INTO `ref_ruang` (`id`, `kode_ruang`, `deskripsi`) VALUES
(1, 'L1209', 'L1 (Gedung Elektro) 209');

-- --------------------------------------------------------

--
-- Table structure for table `ref_ujian`
--

CREATE TABLE `ref_ujian` (
  `kode_ujian` char(1) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_ujian`
--

INSERT INTO `ref_ujian` (`kode_ujian`, `deskripsi`) VALUES
('1', 'KUIS'),
('2', 'UTS'),
('3', 'UAS');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nim` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nim`, `password`, `role`) VALUES
('5235117148', '827ccb0eea8a706c4c34a16891f84e7b', '1'),
('5235117149', '827ccb0eea8a706c4c34a16891f84e7b', '1'),
('5235117150', '827ccb0eea8a706c4c34a16891f84e7b', '1'),
('5235117151', '827ccb0eea8a706c4c34a16891f84e7b', '1'),
('5235117152', '827ccb0eea8a706c4c34a16891f84e7b', '1'),
('5235117153', '827ccb0eea8a706c4c34a16891f84e7b', '1'),
('admin', '0192023a7bbd73250516f069df18b500', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal_kuliah`
--
ALTER TABLE `jadwal_kuliah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_seksi` (`kode_seksi`),
  ADD KEY `tempat` (`tempat`);

--
-- Indexes for table `jadwal_ujian`
--
ALTER TABLE `jadwal_ujian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_seksi` (`kode_seksi`),
  ADD KEY `kode_ujian` (`kode_ujian`);

--
-- Indexes for table `list_materi`
--
ALTER TABLE `list_materi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_materi` (`id_materi`);

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`kode_seksi`),
  ADD KEY `jenis_mk` (`jenis_mk`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_seksi` (`kode_seksi`);

--
-- Indexes for table `mk_user`
--
ALTER TABLE `mk_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nim` (`nim`),
  ADD KEY `kode_seksi` (`kode_seksi`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `nim` (`nim`) USING BTREE;

--
-- Indexes for table `ref_mk`
--
ALTER TABLE `ref_mk`
  ADD PRIMARY KEY (`jenis_mk`),
  ADD KEY `jenis_mk` (`jenis_mk`);

--
-- Indexes for table `ref_ruang`
--
ALTER TABLE `ref_ruang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_ujian`
--
ALTER TABLE `ref_ujian`
  ADD PRIMARY KEY (`kode_ujian`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal_kuliah`
--
ALTER TABLE `jadwal_kuliah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `jadwal_ujian`
--
ALTER TABLE `jadwal_ujian`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `list_materi`
--
ALTER TABLE `list_materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `mk_user`
--
ALTER TABLE `mk_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `ref_ruang`
--
ALTER TABLE `ref_ruang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal_ujian`
--
ALTER TABLE `jadwal_ujian`
  ADD CONSTRAINT `jadwal_ujian_ibfk_1` FOREIGN KEY (`kode_ujian`) REFERENCES `ref_ujian` (`kode_ujian`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_ujian_ibfk_2` FOREIGN KEY (`kode_seksi`) REFERENCES `mata_kuliah` (`kode_seksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `list_materi`
--
ALTER TABLE `list_materi`
  ADD CONSTRAINT `list_materi_ibfk_1` FOREIGN KEY (`id_materi`) REFERENCES `materi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD CONSTRAINT `mata_kuliah_ibfk_1` FOREIGN KEY (`jenis_mk`) REFERENCES `ref_mk` (`jenis_mk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mk_user`
--
ALTER TABLE `mk_user`
  ADD CONSTRAINT `mk_user_ibfk_1` FOREIGN KEY (`kode_seksi`) REFERENCES `mata_kuliah` (`kode_seksi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mk_user_ibfk_2` FOREIGN KEY (`nim`) REFERENCES `user` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`nim`) REFERENCES `user` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
