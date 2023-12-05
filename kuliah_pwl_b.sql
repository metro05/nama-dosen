-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2023 at 10:27 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuliah_pwl_b`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `id_dosen` char(11) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `namafile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_dosen`
--

INSERT INTO `tb_dosen` (`id_dosen`, `nama_dosen`, `alamat`, `keterangan`, `namafile`) VALUES
('DSN001', 'Dr. ZAKARIAS SITUMORANG, MT', 'MEDAN', 'Wakil Rektor 1 Dosen Sitem Informasi', 'pak-zak.PNG'),
('DSN002', 'EMERSON PORMAN MALAU, S.Si, M.Kom', 'MEDAN', 'Dosen Sitem Informasi', 'emerson23.png'),
('DSN003', 'SORANG PAKPAHAN, S.Kom, M.Kom', 'MEDAN', 'Dosen Sitem Informasi', 'sorang1.jpg.crdownload'),
('DSN004', 'WASIT GINTING, S.Kom, M.Kom', 'MEDAN', 'Dosen Sitem Informasi', 'wasit-gintting.png'),
('DSN005', 'TONNI LIMBONG, S.Kom, M.Kom', 'MEDAN', 'Dosen Sitem Informasi', 'tonny-limbong.png'),
('DSN006', 'ROMANUS DAMANIK, S.Kom, M.Kom', 'MEDAN', 'Dosen Sitem Informasi', 'Romanus-damanaik-f-211x300.jpeg'),
('DSN007', 'Drs. LAMHOT SITORUS, M.Kom', 'MEDAN', 'Kepala LPPM Dosen Teknik Informatika', 'lamhot1.jpg.crdownload'),
('DSN008', 'ANDY PAUL HARIANJA, ST, M.Kom', 'MEDAN', 'Dosen Teknik Informatika', 'andi1.jpg.crdownload'),
('DSN009', 'PARASIAN D. P. SILITONGA, S.Kom, M.Cs', 'MEDAN', 'Wakil Dekan Dosenn Teknik Informatika', 'parasian-2-211x300.jpg'),
('DSN010', 'DESINTA PURBA, S.Kom, M.Kom', 'MEDAN', 'Dekan Dosen Teknik Informatika', 'desinta-2-211x300.jpg'),
('DSN011', 'MASDIANA SAGALA, S.Kom, M.Kom', 'MEDAN', '	Dosen Teknik Informatika', 'masdiana.png'),
('DSN012', 'Doni El Rezen Purba, S.Kom', 'MEDAN', 'Dosen Sistem Informasi', ''),
('DSN013', 'Alex Rikki, S.Kom., M.Kom', 'MEDAN', 'Dosen Teknik Informatika', ''),
('DSN014', 'Zekson A. Matondang, S.Kom., M.Kom', 'MEDAN', 'Dosen Sitem Informasi', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `id_jurusan` char(11) NOT NULL,
  `nama_jurusan` varchar(50) NOT NULL,
  `akreditas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`id_jurusan`, `nama_jurusan`, `akreditas`) VALUES
('JRS001', 'Sistem Informasi', 'B+'),
('JRS002', 'Teknik Informatika', 'B+');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `NPM` int(15) NOT NULL,
  `Nama_Mahasiswa` varchar(30) NOT NULL,
  `Alamat_Mahasiswa` varchar(30) NOT NULL,
  `JK` char(2) NOT NULL,
  `no_telp` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`NPM`, `Nama_Mahasiswa`, `Alamat_Mahasiswa`, `JK`, `no_telp`) VALUES
(210810001, ' Ronal Pandapotan Simbolon', 'Medan', 'L', '089729503512'),
(210810002, ' Kevin Niken Pratama Simanjunt', 'Medan', 'L', '081283016512'),
(210810003, 'Indra Setiawan Halawa', 'Nias', 'L', '081361328812'),
(210810005, ' Yoakim P.sinurat', 'Binjai', 'L', '082210523288'),
(210810006, 'Putri Sinuraya', 'Medan', 'P', '085261098273'),
(210810007, ' Sephia Putri Sari Br. Pa', 'Binjai', 'P', '085260216990'),
(210810008, ' Agus Yunus Sihombing', 'Samosir', 'P', '082279474921'),
(210810009, 'Marselina Br Sitepu', 'Binjai', 'P', '087760500461'),
(210810010, ' Hadomuan Sitinjak', 'Parlilitan', 'L', '082231960051'),
(210810011, 'Hotma Trianita Simarmata', 'Simalungun', 'P', '085296402810'),
(210810013, ' Elsa Desriyani Sijabat', 'Samosir', 'P', '082160314603'),
(210810014, ' Stella Kartika Br Purba', 'Medan', 'P', '083138630900'),
(210810015, 'Yemia Margaretha Br Sembiring', 'Simalungun', 'P', '089560011552'),
(210810016, ' Nurwana Gembira Br Nababan', 'Riau', 'P', '082371217344'),
(210810017, ' Gabryella Rovinta Br Sihotang', 'Medan', 'P', '081284501639'),
(210810018, ' Nora Meida Br Kaban', 'Medan', 'P', ' 083124814041'),
(210810019, 'Juan Bastian', 'Riau', 'P', '081279409547'),
(210810020, ' Andre Heskia Sitepu', 'Tebing Tinggi', 'P', '085266456317'),
(210810021, 'Henry Junior Zai', 'Nias', 'L', '081269849838'),
(210810022, 'Mei Paskalia Silaban', 'Tebing Tinggi', 'P', '082286446701'),
(210810023, 'Ricky Jeremi Purba', 'Pematang Siantar', 'L', '089508134517'),
(210810024, ' Sistra Sitanggang', 'Tebing Tinggi', 'P', '081260986442'),
(210810025, ' Three Nove Riang Buulolo', 'Nias', 'P', '082365549287'),
(210810026, 'Aprilyman Parulian Sihaloho', 'Kisaran', 'L', '082166987635'),
(210810028, ' Olivia Veronika Br Sitinjak', 'Tebing Tinggi', 'P', '081268025247'),
(210810029, 'Caesar Juanda Theodorus Situmo', 'Sidikalang', 'L', '085358126587'),
(210810030, ' Juliana Banjarnahor', 'Pematang Siantar', 'P', '081370676562'),
(210810031, ' Edi Hendriyanta Ginting', 'Medan', 'L', '089636551505'),
(210810032, ' Cindy Larasti Br.hasibuan', 'Binjai', 'P', '081275303830'),
(210810033, ' Metro Handoko Sinaga', 'Pematang Siantar', 'L', '082126254435'),
(210810034, ' Hanriyani Jesika Nella Sari S', 'Riau', 'P', '082116546763'),
(210810035, 'Billy Morientes Siallagan', 'Medan', 'L', '082241503930'),
(210810036, ' Priska A Simbolon', 'Samosir', 'P', '082294571487'),
(210810037, 'Fitria Evaulina Br Ginting', 'Riau', 'P', '081270553864'),
(210810038, 'Romaster Sijabat', 'Samosir', 'L', '081270553864'),
(210810039, ' Heny Prisla Br Panjaitan', 'Deli Serdang', 'P', '081362056360'),
(210810040, 'Anggi Putri Dewi Harefa', 'Nias', 'P', '082217287856'),
(210810041, ' Jevtri Manahan Simarmata', 'Samosir', 'P', '082276288654'),
(210810042, ' Febriani N Sinabutar', 'Samosir', 'P', '082277974309'),
(210810043, 'Prisilia Br Sinuraya', 'Tanah Karo', '', '081265175477');

-- --------------------------------------------------------

--
-- Table structure for table `tb_matakuliah`
--

CREATE TABLE `tb_matakuliah` (
  `id_matakuliah` char(11) NOT NULL,
  `nama_matakuliah` varchar(50) NOT NULL,
  `jumlah_sks` char(13) NOT NULL,
  `Semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_matakuliah`
--

INSERT INTO `tb_matakuliah` (`id_matakuliah`, `nama_matakuliah`, `jumlah_sks`, `Semester`) VALUES
('08110012', 'Pancasila', '2', 1),
('08110016', 'Etika', '2', 1),
('08120011', 'Aplikasi Desai Grafis', '1', 1),
('08120014', 'Algoritma Dan Struktur Data', '4', 1),
('08140012', 'Bahasa Inggris', '2', 1),
('08140013', 'Matematika Dasar', '3', 1),
('08140015', 'Teknik Informasi Dan Komunikasi', '4', 1),
('08140016', 'Bahasa Inggris II', '2', 2),
('08140017', 'Pemrograman Visual', '4', 2),
('08140018', 'Proses Bisnis 1', '3', 2),
('08140019', 'Aplikasi Multimedia', '2', 2),
('08140020', 'Akutansi Dasar', '2', 2),
('08140021', 'Matematika Diskrip', '2', 2),
('08140022', 'Sistem Basis Data ', '4', 2),
('08140023', 'Statistika dan Probabilitas', '3', 3),
('08140024', 'Jaringan Komputer', '4', 2),
('08140025', 'Pemrograman web dasar', '4', 3),
('08140026', 'Bahasa Query', '1', 3),
('08140027', 'Proses Bisnis II', '3', 3),
('08140028', 'Sistem Informasi ', '3', 3),
('08140029', 'Pemerograman Web Lanjut', '4', 4),
('08140030', 'Analisis Perancangan Sistem Informasi', '4', 4),
('08140031', 'Sistem Operasi', '3', 4),
('08140032', 'Bahasa Indonesia', '2', 4),
('08140033', 'Manajemen Umum', '2', 4),
('08140034', 'Riset Operasi', '2', 4),
('08140035', 'Pemerograman Berorientas Obyek', '4', 5),
('08140036', 'Interaksi Manusia Dan Komputer', '3', 5),
('08140037', 'Metode Penelitain', '2', 5),
('08140038', 'Audit Sistem Informasi', '3', 5),
('08140039', 'Administrasi Basis Data', '4', 5),
('08140040', 'Mata Kuliah Pemilihan Permintaan 1', '4', 5),
('08140041', 'Rekayasa Perangkat Lunak', '4', 6),
('08140042', 'Perilaku Organisasi', '2', 6),
('08140043', 'Mananajemen Proyek Sistem', '3', 6),
('08140044', 'Teknik Pengambilan Keputusan', '2', 6),
('08140045', 'Mata Kuliah Peminatan 2', '4', 6),
('08140046', 'Mata Kuliah Peminatan 3', '4', 6),
('08140047', 'Pendidikan Kewarganegaraan', '2', 7),
('08140048', 'Pendidikan Agama', '2', 7),
('08140049', 'Testing Dan Implementasi Sistem', '2', 7),
('08140050', 'Keamanan Sistem Informasi', '3', 7),
('08140051', 'Praktek Kerja Lapangan(KKN)', '3', 7),
('08140052', 'Proyek Prangkat Lunak', '1', 7),
('08140053', 'Mata Kuliah Peminatan 4', '4', 7),
('08140054', 'Kecakapan Antar Personal', '2', 8),
('08140055', 'Kewirausahaan', '2', 8),
('08140056', 'Skripsi', '0', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `username` char(11) NOT NULL,
  `password` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`username`, `password`) VALUES
('admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `tb_matakuliah`
--
ALTER TABLE `tb_matakuliah`
  ADD PRIMARY KEY (`id_matakuliah`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
