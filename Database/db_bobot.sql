-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jul 2021 pada 09.54
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bobot`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bobot`
--

CREATE TABLE `tb_bobot` (
  `id_bobot` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail_bobot`
--

CREATE TABLE `tb_detail_bobot` (
  `id_bobot` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `bobot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kriteria`
--

CREATE TABLE `tb_kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `kriteria` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`id_kriteria`, `kriteria`) VALUES
(1, 'Management Ability'),
(2, 'Price'),
(3, 'Environmental awareness'),
(4, 'Shipping performance'),
(5, 'Service'),
(6, 'Flexibility'),
(7, 'Technical ability'),
(8, 'Innovative'),
(9, 'Management approach'),
(10, 'Geographical location');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_supplier`
--

CREATE TABLE `tb_supplier` (
  `id_anggota` int(11) NOT NULL,
  `nama_anggota` varchar(255) NOT NULL,
  `nama_perusahaan` varchar(255) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_supplier`
--

INSERT INTO `tb_supplier` (`id_anggota`, `nama_anggota`, `nama_perusahaan`, `alamat`) VALUES
(5, 'H. Margono', 'COKRO', 'BATUR, TEGAL, CEPER'),
(16, 'Ali Afandi', 'RAJA TERANG', 'BATUR, TEGAL, CEPER'),
(23, 'Padyo Hartono', 'SUMBER HIDUP', 'BANGKALAN, CEPER, KLATEN'),
(24, 'H. Agus Salim', 'CV. INDRA DATA SAKTI', 'BANGKALAN, CEPER, KLATEN'),
(30, 'H. Dawan Ashari', 'KARYA MAKMUR', 'BANGKALAN BARU, CEPER'),
(32, 'H. Wachid Hasyim', 'BAJA JAYA', 'NGAWONGGO'),
(47, 'H. Suarto', 'SINAR INDUSTRI', 'TAMPIRAN'),
(52, 'Ishar Abadi', 'SINAR ABADI', 'BANGKALAN, CEPER, KLATEN'),
(55, 'H. Asmawi', 'SINAR SUPER JAYA', 'BATUR, TEGAL, CEPER'),
(56, 'H. Sholikah', 'JAYA MAKMUR', 'JEMBLOGAN'),
(58, 'Dr. H. Musa Ashari', 'RAJA KURNIA', 'JEMBLOGAN'),
(60, 'H. Hartanto Samsi', 'DARU KENCANA', 'TAMPIRAN'),
(68, 'Hadi Mulyono', '', 'NGAWONGGO'),
(72, 'Thoyibi', '', 'BATUR, TEGAL, CEPER'),
(73, 'Nurudin', 'NURUDIN', 'BATUR, TEGAL, CEPER'),
(77, 'H. Zartamli', 'SARI LOGAM', 'BATUR, TEGAL, CEPER'),
(79, 'HA. Samingun  M.', 'BAJA MULYA', 'BATUR, TEGAL, CEPER'),
(84, 'Chumaizah', '', 'KRENEKAN'),
(86, 'Munawir Kamil', 'MAHKOTA', 'BATUR, TEGAL, CEPER'),
(87, 'H. Ahmad Darwin', 'KARYA UTAMA', 'KRENEKAN'),
(88, 'H. Ali Suyanto', 'INDAH KARYA', 'BATUR, TEGAL, CEPER'),
(92, 'H. Purwono Atmojo', 'ATMAJA JAYA', 'BATUR, TEGAL, CEPER'),
(94, 'Sumarjo ', 'BAROKAH', 'NGAWONGGO'),
(95, 'Suhandoyono', 'SANTOSO', 'KERON, TROESNO, PEDAN'),
(96, 'Suharmono', 'SEMERU PUTRA', 'TEGALSARI'),
(97, 'Bahrudin', 'RAFINA MARGA', 'BATUR, TEGAL, CEPER'),
(99, 'Nurhadi', 'KLINDRA JAYA', 'SENTONO, NGAWONGGO, CEPER'),
(105, 'H. Didik Dwiyanto', 'RAJA KARYA', 'KRENEKAN, KLEPU, CEPER'),
(106, 'H. Makmuri', 'MAKMUR', 'BENDO, NGAWONGGO, CEPER'),
(107, 'H. Santoso', 'SENTOSA', 'KLATEN'),
(109, 'Hartanto Mulyono', '', 'BANGKALAN'),
(112, 'M. Rochimi', '', 'BENDO, NGAWONGGO, CEPER'),
(114, 'Muhyidin', 'PENGECORAN LOGAM SAR', 'KRENEKAN, KLEPU, CEPER'),
(116, 'Drs. H. Syamsudin A.', 'SETYA KARYA', 'BANGKALAN, CEPER, KLATEN'),
(117, 'H. Muhida Hudaf', 'ANGLING ABADI', 'KRENEKAN, KLEPU, CEPER'),
(118, 'Drs. H. Anas Yusuf M.', 'NIRWASA PERWARA', 'BATUR, TEGAL, CEPER'),
(119, 'Ahsin Fatoni', 'LOGAM KUSUMA', 'JL. SELATAN MASJID BATUR'),
(120, 'm. Muasir', 'UD DWI TUNGGAL', 'BATUR, TEGALREJO, CEPER'),
(121, 'H. Prayono Hadi', 'PRIMA LOGAM', 'NGAWONGGO'),
(125, 'Anwar Sanusi', 'MUTIARA', 'NOTOMULYO, JAMBUKULON, CEPER'),
(126, 'H. Badrul Munir, BSc', 'BAHARI', 'BATUR, TEGALREJO, CEPER'),
(128, 'H. Setyo Gunawan', 'MULTI GUNA', 'BATUR, TEGALREJO, CEPER'),
(129, 'Tunjung Suprapto', 'BUDILAKSANA', 'TEGALREJO'),
(131, 'Agus Prasetyanto', 'EMPU SUPO', 'BATUR, CEPER'),
(132, 'Endang Werdiningsih', '', 'KARANGWUNI KULON, DLIMAS, CEPER'),
(133, 'Ahmaddi Ds.', '', 'KARANGWUNI KULON, DLIMAS, CEPER'),
(134, 'Hartiningsih', '', 'BATUR RT. 01/02, CEPER, KLATEN'),
(135, 'Alfiyah Salamun', '', 'TAMPIRAN'),
(136, 'Sri Murtii Sofyan', '', 'BATUR TIMUR NO. 06'),
(137, 'Hanafi', 'ALFIHAN', 'BATUR'),
(138, 'Muqorobin', '', 'BATUR, TEGALREJO, CEPER'),
(139, 'Darmawan', '', 'NGAWONGGO'),
(141, 'Kusumasto', 'BUANA INDAH', 'BATUR, TEGALREJO, CEPER'),
(142, 'Krisdiyanto', 'LOGAM JAYA', 'BATUR CEPER'),
(146, 'H. Hussein Syifa\'. SE', 'PT. BAHAMA LASAKKA', 'BATUR, TEGALREJO, CEPER'),
(148, 'Drs. H. Nurqoni Iskd', 'PT. IKADA II', 'TEGALSARI, NGAWONGGO, CEPER'),
(150, 'H. Safrudin', 'INDO METAL PERSADA', 'JEBLOGAN, CEPER'),
(151, 'Umardani NH', 'NINDYA KARYA PUTRA', 'BATUR, TEGALREJO, CEPER'),
(152, 'H. Susanto TP', 'SOLO CASTING', 'BANGKALAN'),
(153, 'Ali Wiyasa', '', 'BATU'),
(155, 'HM. Ramell', 'TEHNIK UTAMA', 'BATUR, TEGALREJO, CEPER'),
(156, 'Rochani Mashudi', '', 'KLATEN'),
(158, 'Istiana', 'UD. MULTI KARYA LOGAM', 'SOLO'),
(159, 'M. Zainal', '', 'BATUR, TEGALREJO, CEPER'),
(161, 'Abdul Haris', '', 'BATUR, TEGALREJO, CEPER'),
(162, 'Bambang Yusuf W', 'JAYA WARSA', 'SOLO'),
(163, 'Hj. Siti Thoyibah', '', 'BATUR, TEGALREJO, CEPER'),
(164, 'MN. Budianto', 'INDUKSI COR LOGAM PUTRI', 'NGAWONGGO'),
(165, 'Bandiyah Iskandar', 'BAROKAH ADI', 'JETIS RT. O2/O4, KLEPU, CEPER'),
(166, 'Asngadi', 'ABADI INDAH', 'BATUR, TEGALREJO, CEPER'),
(167, 'Ir. Jamaludi', '', 'KURUNG BARU, KURUNG, CEPER'),
(170, 'Mudriq', '', 'SENTONO, NGAWONGGO'),
(171, 'Aspari', 'BONJOR JAYA', 'SENTONO, NGAWONGGO'),
(172, 'Istanto', '', 'KURUNG BARU, KURUNG, CEPER'),
(173, 'Shodiq Kamal', 'JULU BHAKTI UTAMA', 'SOLO'),
(174, 'Tri Murtini Syoko', 'CIPTA KARYA LOGAM', 'BATUR, TEGALREJO, CEPER'),
(175, 'Anwar Suraji', '', 'NOTOMULYO, JAMBUKULON, CEPER'),
(178, 'Aries', 'CV DEWANTARA PERMATA', 'KURUNG BARU, KURUNG, CEPER'),
(179, 'H. Purnomo', '', 'BATUR, TEGALREJO, CEPER'),
(182, 'H. Djoko Widodo', 'SINGER', 'BATUR, TEGALREJO, CEPER'),
(183, 'Agus Mustofa', 'CITRA MANDIRI', 'BATUR, TEGALREJO, CEPER'),
(185, 'Rustami', '', 'BATUR, TEGALREJO, CEPER'),
(186, 'Sudirman', 'CV SUDIRMAN', 'KURUNG BARU, KURUNG, CEPER'),
(187, 'H. Sahudin Ganny', 'AKBAR MATARAM', 'BATUR, TEGALREJO, CEPER'),
(188, 'H. Ainur', 'INDO KARYA PERDANA', 'TULUNG'),
(190, 'H. SohibQoirudin', 'FATMA KARYA INDAH', 'TEGALREJO, CEPER'),
(191, 'Suhadiq', 'CV ANGARA MAS', 'BATUR, TEGALREJO, CEPER'),
(192, 'Sri Muryati', 'BATUR LOGAM MATA', 'BANGKALAN'),
(193, 'Ahmad Zaini', 'SALMA', 'BANGKALAN'),
(194, 'H Hanif Wahidi', 'CV MARINDO UTAMA', 'NGARAN RT. O1/02, KLENCENG, CEPER'),
(196, 'H. Agus Yulianto', 'REKSA CIPTA TERINDO', 'KURUNG BARU, KURUNG, CEPER'),
(197, 'Erwin MK', 'ANEKA META INDUSTRI', 'BANGKALAN, CEPER'),
(200, 'Turoso', 'UD. LANCAR JAYA', 'BATUR, TEGALREJO, CEPER'),
(201, 'H. Anwar Khoirul R', 'RODA MAS', 'KURUNG BARU, KURUNG, CEPER'),
(203, 'Martu Zuhri', '', 'BANGKALAN CEPER'),
(204, 'Kadir Suroso', '', 'BATUR , TEGALREJO, CEPER'),
(205, 'Anwar Leo', 'MUSTIKA JAYA', 'BATUR, TEGALREJO, CEPER'),
(207, 'Arif Rahmawan', '', 'SOLO CASTING'),
(208, 'M. Sutaqin', '', 'BANGKALAN CEPER'),
(209, 'Abdul Muis', '', 'TEGALREJO, CEPER'),
(213, 'Daryoni Abdullah', '', 'BANGKALAN, CEPER'),
(214, 'Eni Setyamuhti', 'SAHABAT TEKNIK', 'BATUR BARU'),
(215, 'Muhammad', '', 'BATUR, TEGALREJO, CEPER'),
(216, 'Bari', '', 'BANGKALAN, CEPER'),
(218, 'Surya Eni', 'UD PASGAR JAYA', 'KEBONGAN, CEPER'),
(219, 'Raden Ratna Sari', 'UD SEMBADA', 'TEGALREJO, CEPER'),
(222, 'M. Wahidin', 'TERINDO NAFIA', 'KURUNG BARU, KURUNG, CEPER'),
(223, 'Umar Sumali', '', 'TRGALSARI'),
(225, 'Mutaqin', 'CV MUKTI LOGAM PERSADA', 'BATUR, CEPER'),
(226, 'Arif Setyawan', '', 'KEBONGAN, CEPER'),
(227, 'Taufiq Andri M', '', 'BANGKALAN '),
(228, 'Anis Yulianto M', '', 'BATUR, TEGALREJO, CEPER'),
(229, 'Mufitrohman H', '', 'BATUR, TEGALREJO, CEPER'),
(230, 'Fany Irwanto M', '', 'BATUR, TEGALREJO, CEPER'),
(231, 'Ery Santoso', '', 'KEBONGAN, CEPER'),
(232, 'Yusuf Darmawan', '', 'BATUR, TEGALREJO, CEPER'),
(233, 'Irfan Aldi', 'GELORA MARINDO', 'TEGALREJO, CEPER'),
(234, 'Ihwani', '', 'BANGKALAN, CEPER'),
(235, 'Budi Hartanto', 'KARYA RINI', 'BANGKALAN RT.02/02, CEPER'),
(236, 'Sri Handayani', '', 'BATUR, TEGALREJO, CEPER'),
(237, 'Muh. Sngidu', 'ADIMULYA', 'BATUR, TEGALREJO, CEPER'),
(238, 'H. Wiyono Atmojo', 'CV. TUNGGAL PERKASA', 'TAPIRAN, RT.37/15, NGAWONGSO'),
(239, 'H. Ngadiyono', 'CV. MULYA JAYA', 'BANGKALAN RT.04/02, CEPER'),
(240, 'Triawan Budi S', '', 'BENDO, NGAWONGSO'),
(242, 'Ir. HM Tolkah', '', 'SENTONO, NGAWONGSO'),
(243, 'Bayu Prasetya, S. Th. I', '', 'BATUR BARU,TEGALREJO, CEPER'),
(244, 'Nur Sefudin, ST', 'TEKNIK UTAMA JAYA', 'BATUR, CEPER'),
(245, 'H. Lukman Herawan', 'PT. ANEKA ADHILOGAM  KA', 'BATUR, CEPER'),
(246, 'Hj. Puji Astuti', 'WIJAYA MAKMUR', 'TEGALSARI, NGAWONGGO, CEPER'),
(247, 'Sugeng Widodo', 'PUTRA BAJA SAKTI', 'TEGALREJO, CEPER'),
(249, 'Eddy Sudarwono', '', 'JL. PENDEAN II/69,CENDONGCATUR'),
(250, 'Hada Amrullah', '', 'JEBLOGAN, CEPER'),
(251, 'Danang Setiyawan', '', 'TEGALSARI,NGAWONGGO,CEPER'),
(252, 'Susilowati Hj.', '', 'BANGKALAN'),
(253, 'Rina Kuswandari', '', 'GATAK,NGAWONGGO, RT. 17/40, CEPER'),
(254, 'Lutfa Rakhmawati', '', 'BATUR, RT 003/001, TEGALREJO,CEPER'),
(255, 'Budiyanto Cahyono', '', 'TEGALREJO'),
(256, 'Niyala Farihati,M.Si', 'TEKNIKA JAYA', 'KURUNG BARU, KURUNG, CEPER'),
(257, 'Erni Dwi Aswati', '', 'KLATEN'),
(258, 'Hammam Baihaqi, S.H., M.S', 'NUFFINDO NAJANAS', 'KADIREJO RT.09/04, KARANGNOM'),
(259, 'Ajlev Rozzak Auzyair', 'CV. LAKSANA AJI', 'JETIS RT.003/004,  KLEPU, CEPER'),
(260, 'Hj. Siti Aminah', '', 'NGAWONGGO'),
(261, 'Hairul Umam', '', 'SOLO'),
(262, 'Hj. Istiqomah', '', 'BANGKALAN'),
(263, 'Sri Winaryanti', 'UD. LANGGENG', 'BATUR, TEGALREJO, CEPER'),
(264, 'Ika Ayu Fajarwai', 'LANCAR ABADI', 'JEBLOGAN, CEPER'),
(265, 'Siti Zulali', '', 'BENDO NGAWONGGO, CEPER'),
(266, 'Eko Wahyono', '', 'BANGKALAN, RT. 002/002, CEPER, CEPER'),
(267, 'Herjuno Ariwibowo Arifin', '', 'JL. JAWA NO. 27 RT. 007/004, KEL TIMUR'),
(268, 'Siti Hartuti', 'TUNAS LOGAM JAYA', 'BATUR, TEGALREJO, CEPER'),
(269, 'Osep Teja Sulamunajat ', 'CV. MARIA IFIFIFERRO', 'NGAWONGGO, RT.19/09, CEPER, KLATEN'),
(270, 'Edward Iwan Tirta', 'NASIONAL IRON CASTING', 'BATUR, RT 003/001, TEGALREJO,CEPER'),
(277, 'Rizki Widya Pratama', 'RIZKICORP', 'TUBAN'),
(278, 'Fabryzal Adam Pramudya', 'ZL Land', 'BONDOWOSO');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `foto_user` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `name`, `email`, `foto_user`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(9, 'Rizki Widya Pratama', 'rizkiw8778@gmail.com', 'default.jpg', '$2y$10$ObTpN6zOShoG6.V.kmmP9ummGy/UAik46EBwME08VAxtCpu1zUc.G', 1, 1, 1619068190),
(10, 'Heri Suhartono', 'herisuhartono23@gmail.com', 'default.jpg', '$2y$10$Q7LlWXaF1.6tlkdoTC5wbuKCuHc.ydfPq6OvYur8z8TYnAtfwQdVW', 2, 1, 1619068190);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id_role`, `role`) VALUES
(1, 'Administrator'),
(2, 'User');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_bobot`
--
ALTER TABLE `tb_bobot`
  ADD PRIMARY KEY (`id_bobot`);

--
-- Indeks untuk tabel `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `tb_supplier`
--
ALTER TABLE `tb_supplier`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id_role`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_bobot`
--
ALTER TABLE `tb_bobot`
  MODIFY `id_bobot` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_supplier`
--
ALTER TABLE `tb_supplier`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=279;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
