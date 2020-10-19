-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2020 at 02:41 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisfo_akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `nidn` varchar(50) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nidn`, `nama_dosen`, `alamat`, `jenis_kelamin`, `email`, `telp`, `photo`) VALUES
(2, '123459015', 'Dedi Waluyo Wijoyo', 'Bekasi', 'Laki-laki', 'doniwaluyo@contoh.com', '0214565326', 'profil2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hubungi`
--

CREATE TABLE `hubungi` (
  `id_hubungi` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hubungi`
--

INSERT INTO `hubungi` (`id_hubungi`, `nama`, `email`, `pesan`) VALUES
(1, 'Erik', 'erik@gmail.com', 'Mohon informasi pendaftaran mahasiswa baru');

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE `identitas` (
  `id_identitas` int(11) NOT NULL,
  `judul_website` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`id_identitas`, `judul_website`, `alamat`, `email`, `telp`) VALUES
(1, 'UNIVERSITAS PEKANBARU', 'Jalan Ahmad Dahlan No. 88', 'universitas.pekanbaru@gmail.com', '0216767677');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id_informasi` int(11) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `judul_informasi` varchar(50) NOT NULL,
  `isi_informasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id_informasi`, `icon`, `judul_informasi`, `isi_informasi`) VALUES
(1, 'fas fa-university', 'Penerimaan Mahasiswa Baru', 'Penerimaan mahasiswa baru gelombang 4 dibuka mulai 31 Juni 2020 sampai 31 Agustus 2020'),
(2, 'fas fa-wallet', 'Pembayaran Uang Kuliah', 'Pembayaran uang kuliah mulai tanggal 01 Juli 2020 sampai 01 Agustus 2020'),
(3, 'fas fa-user-graduate', 'Jadwal Wisuda', 'Jadwal pelaksanaan wisuda gelombang 1 tanggal 23 Oktoberr 2020'),
(5, 'fas fa-file-invoice', 'Bimbingan Skripsi', 'Jadwal bimbingan skripsi atau tugas akhir mulai dilaksanakan 21 Juni 2020');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `kode_jurusan` varchar(3) NOT NULL,
  `nama_jurusan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `kode_jurusan`, `nama_jurusan`) VALUES
(1, 'IK', 'Ilmu Komputer'),
(8, 'EB', 'Ekonomi dan Bisinis'),
(9, 'KB', 'Komunikasi dan Bahasa');

-- --------------------------------------------------------

--
-- Table structure for table `krs`
--

CREATE TABLE `krs` (
  `id_krs` int(11) NOT NULL,
  `id_thn_akad` int(10) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `kode_matakuliah` varchar(10) NOT NULL,
  `nilai` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `krs`
--

INSERT INTO `krs` (`id_krs`, `id_thn_akad`, `nim`, `kode_matakuliah`, `nilai`) VALUES
(2, 2, '12171353', 'MKU04', 'A'),
(3, 2, '12171355', 'MKU04', 'C'),
(4, 1, '12171301', 'MKB1', 'A'),
(5, 1, '12171301', 'MKB2', 'A'),
(6, 1, '12171301', 'MKB3', 'A'),
(7, 1, '12171301', 'MKB4', 'A'),
(8, 1, '12171301', 'MKB6', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` varchar(11) NOT NULL,
  `nama_lengkap` varchar(120) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `tempat_lahir` varchar(120) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(120) NOT NULL,
  `nama_prodi` varchar(120) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama_lengkap`, `alamat`, `email`, `telepon`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `nama_prodi`, `photo`) VALUES
(3, '12171301', 'Darmawan', 'Jakarta', 'darmawan@contoh.com', '021010234', 'Bandung', '1990-12-12', 'Laki-laki', 'Sistem Informasi', 'profil7.jpg'),
(4, '12171302', 'Dimas Indra', 'Bekasi', 'dimas@contoh.com', '08821212341', 'Cikarang', '1991-11-11', 'Laki-laki', 'Sistem Informasi', 'profil8.jpg'),
(5, '12171303', 'Budi Hartono', 'Cilacap', 'budi@contoh.com', '08821212322', 'Cilacap', '1990-10-10', 'Laki-laki', 'Sistem Informasi', 'profil6.jpg'),
(6, '12171304', 'Juleha', 'Karawang', 'juleha@contoh.com', '0877989898', 'Karawang', '1991-09-09', 'Laki-laki', 'Sistem Informasi', 'profil9.jpg'),
(7, '12171305', 'Firman Sinaga', 'Jakarta', 'firman@contoh.com', '089896754', 'Jakarta', '1991-08-07', 'Laki-laki', 'Sistem Informasi', 'profil4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `kode_matakuliah` varchar(10) NOT NULL,
  `nama_matakuliah` varchar(100) NOT NULL,
  `sks` int(5) NOT NULL,
  `semester` int(10) NOT NULL,
  `nama_prodi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`kode_matakuliah`, `nama_matakuliah`, `sks`, `semester`, `nama_prodi`) VALUES
('MKB1', 'Logika dan Algoritma', 3, 1, 'Sistem Informasi'),
('MKB2', 'Pengantar TIK', 2, 1, 'Sistem Informasi'),
('MKB3', 'Struktur Data', 3, 2, 'Sistem Informasi'),
('MKB4', 'Perancangan Basis Data', 3, 3, 'Sistem Informasi'),
('MKB5', 'Interaksi Manusia dan Komputer', 2, 1, 'Sistem Informasi'),
('MKB6', 'Web Programming', 3, 3, 'Sistem Informasi'),
('MKK2', 'Bahasa Inggris', 3, 2, 'Sistem Informasi'),
('MKK3', 'Statistika Deskriptif', 2, 2, 'Sistem Informasi'),
('MPK1', 'Pendidikan Pancasila', 2, 1, 'Sistem Informasi'),
('MPK2', 'Pendidikan Agama', 2, 1, 'Sistem Informasi');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(11) NOT NULL,
  `kode_prodi` varchar(20) NOT NULL,
  `nama_prodi` varchar(25) NOT NULL,
  `nama_jurusan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `kode_prodi`, `nama_prodi`, `nama_jurusan`) VALUES
(1, 'MI', 'Manajemen Informatika', 'Ilmu Komputer'),
(3, 'AK', 'Akutansi', 'Ekonomi dan Bisinis'),
(4, 'SI', 'Sastra Inggris', 'Komunikasi dan Bahasa'),
(5, 'SI', 'Sistem Informasi', 'Ilmu Komputer');

-- --------------------------------------------------------

--
-- Table structure for table `tahun_akademik`
--

CREATE TABLE `tahun_akademik` (
  `id_thn_akad` int(11) NOT NULL,
  `tahun_akademik` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahun_akademik`
--

INSERT INTO `tahun_akademik` (`id_thn_akad`, `tahun_akademik`, `semester`, `status`) VALUES
(1, '2018/2019', 'Ganjil', 'Aktif'),
(2, '2018/2019', 'Genap', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tentang_kampus`
--

CREATE TABLE `tentang_kampus` (
  `id` int(11) NOT NULL,
  `sejarah` varchar(1000) NOT NULL,
  `visi` varchar(250) NOT NULL,
  `misi` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tentang_kampus`
--

INSERT INTO `tentang_kampus` (`id`, `sejarah`, `visi`, `misi`) VALUES
(1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi vero aliquid necessitatibus expedita sint maxime mollitia animi ut dolor non fuga quasi sapiente, alias error, voluptatum eum optio? Animi, distinctio! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad exercitationem officiis doloribus consectetur, laboriosam molestias, sit nihil cupiditate ipsam ea aliquid nisi! Doloribus sapiente dolore odit exercitationem alias. Adipisci, velit.', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae nisi nulla cupiditate similique rem sed ad dicta. Quod dolorum numquam tenetur quaerat, quis nam beatae perspiciatis ipsam ullam, assumenda dicta! Lorem ipsum dolor sit amet consect');

-- --------------------------------------------------------

--
-- Table structure for table `transkrip_nilai`
--

CREATE TABLE `transkrip_nilai` (
  `id_transkrip` int(11) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `kode_matakuliah` varchar(15) NOT NULL,
  `nilai` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transkrip_nilai`
--

INSERT INTO `transkrip_nilai` (`id_transkrip`, `nim`, `kode_matakuliah`, `nilai`) VALUES
(1, '12171353', 'MKU04', 'A'),
(2, '12171301', 'MKB1', 'A'),
(3, '12171301', 'MKB2', 'A'),
(4, '12171301', 'MKB3', 'A'),
(5, '12171301', 'MKB4', 'A'),
(6, '12171301', 'MKB6', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `level` enum('admin','user') NOT NULL,
  `blokir` enum('N','Y') NOT NULL,
  `id_session` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `level`, `blokir`, `id_session`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@contoh.com', 'admin', 'N', ''),
(3, 'putriutami', '81dc9bdb52d04dc20036dbd8313ed055', 'putri@contoh.com', 'admin', 'N', 'd41d8cd98f00b204e9800998ecf8427e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `hubungi`
--
ALTER TABLE `hubungi`
  ADD PRIMARY KEY (`id_hubungi`);

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`id_identitas`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `krs`
--
ALTER TABLE `krs`
  ADD PRIMARY KEY (`id_krs`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indexes for table `tahun_akademik`
--
ALTER TABLE `tahun_akademik`
  ADD PRIMARY KEY (`id_thn_akad`);

--
-- Indexes for table `tentang_kampus`
--
ALTER TABLE `tentang_kampus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transkrip_nilai`
--
ALTER TABLE `transkrip_nilai`
  ADD PRIMARY KEY (`id_transkrip`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hubungi`
--
ALTER TABLE `hubungi`
  MODIFY `id_hubungi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `identitas`
--
ALTER TABLE `identitas`
  MODIFY `id_identitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `krs`
--
ALTER TABLE `krs`
  MODIFY `id_krs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tahun_akademik`
--
ALTER TABLE `tahun_akademik`
  MODIFY `id_thn_akad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tentang_kampus`
--
ALTER TABLE `tentang_kampus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transkrip_nilai`
--
ALTER TABLE `transkrip_nilai`
  MODIFY `id_transkrip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
