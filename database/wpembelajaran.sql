-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02 Nov 2016 pada 04.49
-- Versi Server: 10.1.10-MariaDB
-- PHP Version: 7.0.4

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
-- Struktur dari tabel `jadwal_kuliah`
--

CREATE TABLE `jadwal_kuliah` (
  `id` int(11) NOT NULL,
  `kode_seksi` varchar(5) NOT NULL,
  `tempat` varchar(5) NOT NULL,
  `waktu_mulai` datetime DEFAULT NULL,
  `waktu_selesai` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_ujian`
--

CREATE TABLE `jadwal_ujian` (
  `id` int(1) NOT NULL,
  `kode_seksi` varchar(5) NOT NULL,
  `kode_ujian` char(1) NOT NULL,
  `tanggal_ujian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_materi`
--

CREATE TABLE `list_materi` (
  `id` int(11) NOT NULL,
  `id_materi` int(11) NOT NULL,
  `point` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `kode_seksi` varchar(5) NOT NULL,
  `nama_mk` varchar(255) NOT NULL,
  `jenis_mk` char(1) NOT NULL,
  `total_sks` int(1) NOT NULL,
  `teori_sks` int(1) NOT NULL,
  `praktek_sks` int(1) NOT NULL,
  `rpkps` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`kode_seksi`, `nama_mk`, `jenis_mk`, `total_sks`, `teori_sks`, `praktek_sks`, `rpkps`) VALUES
('9510', 'Web Design', '1', 3, 2, 1, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `id` int(11) NOT NULL,
  `kode_seksi` varchar(5) NOT NULL,
  `judul_materi` varchar(255) NOT NULL,
  `materi` mediumtext NOT NULL,
  `tugas` mediumtext NOT NULL,
  `img_materi` mediumtext NOT NULL,
  `video_materi` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mk_user`
--

CREATE TABLE `mk_user` (
  `id` int(11) NOT NULL,
  `nim` varchar(9) NOT NULL,
  `kode_seksi` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile`
--

CREATE TABLE `profile` (
  `nim` varchar(9) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `foto` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profile`
--

INSERT INTO `profile` (`nim`, `nama`, `email`, `foto`) VALUES
('admin', 'Firdaus', 'firdausibnu@hotmail.com', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_mk`
--

CREATE TABLE `ref_mk` (
  `jenis_mk` char(1) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_mk`
--

INSERT INTO `ref_mk` (`jenis_mk`, `deskripsi`) VALUES
('1', 'Wajib'),
('2', 'Pilihan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_ruang`
--

CREATE TABLE `ref_ruang` (
  `kode_ruang` varchar(10) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_ruang`
--

INSERT INTO `ref_ruang` (`kode_ruang`, `deskripsi`) VALUES
('L1209', 'L1 (Gedung Elektro) 209'),
('LA101', 'Lab (Gedung Elektro) 101 ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_ujian`
--

CREATE TABLE `ref_ujian` (
  `kode_ujian` char(1) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_ujian`
--

INSERT INTO `ref_ujian` (`kode_ujian`, `deskripsi`) VALUES
('1', 'KUIS'),
('2', 'UTS'),
('3', 'UAS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `nim` varchar(9) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`nim`, `password`, `role`) VALUES
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
  ADD PRIMARY KEY (`kode_ruang`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jadwal_ujian`
--
ALTER TABLE `jadwal_ujian`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `list_materi`
--
ALTER TABLE `list_materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mk_user`
--
ALTER TABLE `mk_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jadwal_kuliah`
--
ALTER TABLE `jadwal_kuliah`
  ADD CONSTRAINT `jadwal_kuliah_ibfk_1` FOREIGN KEY (`tempat`) REFERENCES `ref_ruang` (`kode_ruang`);

--
-- Ketidakleluasaan untuk tabel `jadwal_ujian`
--
ALTER TABLE `jadwal_ujian`
  ADD CONSTRAINT `jadwal_ujian_ibfk_1` FOREIGN KEY (`kode_ujian`) REFERENCES `ref_ujian` (`kode_ujian`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_ujian_ibfk_2` FOREIGN KEY (`kode_seksi`) REFERENCES `mata_kuliah` (`kode_seksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `list_materi`
--
ALTER TABLE `list_materi`
  ADD CONSTRAINT `list_materi_ibfk_1` FOREIGN KEY (`id_materi`) REFERENCES `materi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD CONSTRAINT `mata_kuliah_ibfk_1` FOREIGN KEY (`jenis_mk`) REFERENCES `ref_mk` (`jenis_mk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `mk_user`
--
ALTER TABLE `mk_user`
  ADD CONSTRAINT `mk_user_ibfk_1` FOREIGN KEY (`kode_seksi`) REFERENCES `mata_kuliah` (`kode_seksi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mk_user_ibfk_2` FOREIGN KEY (`nim`) REFERENCES `user` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`nim`) REFERENCES `user` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
