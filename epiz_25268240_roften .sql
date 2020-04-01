-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql202.byetcluster.com
-- Waktu pembuatan: 23 Mar 2020 pada 03.22
-- Versi server: 5.6.45-86.1
-- Versi PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_25268240_roften`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `chat`
--

INSERT INTO `chat` (`id`, `sender_id`, `receiver_id`, `message`, `date_created`) VALUES
(5, 6, 17, 'p', 1582978653),
(4, 17, 6, 'wkekek', 1582978606),
(3, 17, 6, 'Hay, abi amarulloh\r\nKeep hamasah????\r\n', 1582978591),
(23, 27, 6, 'Assalamualaikum akhi', 1583067045),
(22, 6, 14, 'wei', 1583066477),
(21, 6, 12, 'iya beb', 1583066160),
(20, 12, 6, 'Jgn lupa follow @sitirhmh06', 1583065983),
(19, 6, 25, 'ok', 1583065268),
(18, 25, 6, 'P', 1583065203),
(17, 6, 17, 'hai', 1582979367),
(24, 6, 12, 'Wei', 1583148120),
(25, 6, 25, 'Gus', 1583151202),
(26, 6, 31, 'Ca', 1583152821),
(27, 31, 6, 'udh ya', 1583152830),
(28, 27, 6, 'Assalamualaikum', 1583153973),
(29, 22, 29, 'Sad', 1583157763),
(30, 6, 33, 'Man ', 1583158066),
(31, 34, 30, 'Wei', 1584692407);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_actived` int(11) NOT NULL,
  `profesi` varchar(250) NOT NULL,
  `sekolah` varchar(250) NOT NULL,
  `bio` varchar(250) NOT NULL,
  `whatsapp` varchar(250) NOT NULL,
  `instagram` varchar(250) NOT NULL,
  `facebook` varchar(250) NOT NULL,
  `date_created` int(11) NOT NULL,
  `date_updated` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `fullname`, `username`, `image`, `email`, `password`, `role_id`, `is_actived`, `profesi`, `sekolah`, `bio`, `whatsapp`, `instagram`, `facebook`, `date_created`, `date_updated`) VALUES
(7, 'Snst', 'zalulupa32', 'IMG-20200222-WA0027.jpg', 'zalulupa32@gmail.com', '$2y$10$Cexh8c7eKPDamYUcINTJQ.gnpEM94aS83fukvsppuZwrGyjmE4/v.', 2, 1, 'Sampah Sekolah', 'Ngondoy Squad', 'This is me.', '6281296333241', 'datstick403_', 'zalulupa', 1582455983, 0),
(8, 'Fachri Hawari', 'fachri.hawari', 'default.jpg', 'fachri.hawari@gmail.com', '$2y$10$vvjM/m/hZ5ZB1fye1j4KkuhCCrut3UV.bJKqSpYCOPtg21E77z1OK', 2, 1, 'Software Engineer', 'SMK Negeri 4 Kota Tangerang', 'Just do it', '', 'fachrihawari', 'fachri.hawari', 1582464771, 0),
(9, 'Aditya Fiqri Firdaus', 'fiqri064', 'default.jpg', 'fiqri064@gmail.com', '$2y$10$5scXGNjroob2TDZJxU4Th.mniNCzG5WPVUaXoNhZF7FTpAMYqWmy.', 2, 1, '', '', '', '', '', '', 1582465164, 0),
(12, 'Siti Rohmah', 'sitirhmh0607', '2019-10-25_03_03_46_4.jpg', 'sitirhmh0607@gmail.com', '$2y$10$DtsB0ZNo2d2WHb27AQfiWuI/6NraHC9FxrM7kkP.vfpF2sLIMAqZ.', 2, 1, 'Ga usah kepo bisa kan! Yaudh diem.', 'Au ah Gelap', '&quot; Nanti kita cerita tentang masa depan beb;* &quot;', '+628990028143', '@sitirhmh06', 'sitirhmh', 1582466327, 1583144882),
(14, 'Akmal Mauluddin', 'agkhafidz46', 'IMG-20200228-WA0022.jpg', 'agkhafidz46@gmail.com', '$2y$10$TY9Rc2/EtvIHoP7D9zdrAeKUOLMb3cerTdQFi2RNY5IEnWJeVe.8e', 2, 1, 'Analog', 'Di Indonesia', 'Gausah banyak bct lah klean:v', '62895358569551', 'akmalmlddn', 'Akmal Mauluddin', 1582468354, 1583066384),
(15, 'ZILZIAN TEDY FIRMANSYAH', 'zilzian.firmansyah', 'IMG-20200223-WA0018.jpg', 'zilzian.firmansyah@gmail.com', '$2y$10$lXoFctepxJw33iZW47YXB.WgZcKOwQemHEhoLra8hiVrqxlF6tAsu', 2, 1, 'Mencoba menjadi fakboi', 'Kepo amat kek mau kenal aja', 'Klo gua ceritain lu kga bakal percaya asli dah.', '', '', '', 1582469056, 0),
(16, 'Dobleh', 'dobleh00uye', 'default.jpg', 'dobleh00uye@gmail.com', '$2y$10$s4RvptEW9U1b37LyASqDGOgtowGYX5bzJxUOz.cj1DWnNjiC6Mnga', 2, 1, 'Cod', 'Gapunya', 'Jangan kepo dech', '', 'Khorrr15', 'Bukhori M', 1582472368, 0),
(17, 'Putri rahmadini', 'Putri.rahmadini064', 'IMG_20200213_204153_987.jpg', 'Putri.rahmadini064@gmail.com', '$2y$10$i10Lv9V1JPNT2Bt77T7qWuhGwDoCImSTrXK96OIi0TfNqTuPe/6se', 2, 1, 'General branch administration', 'Smk almuin', 'Oh.', '', '', '', 1582936024, 0),
(18, 'Syadam ulil', 'syadamulil', 'default.jpg', 'syadamulil@gmail.com', '$2y$10$B1UluC8bYE39VEpxezWMouVweyNqTEdG29Rz5aR2iDuuaIbK/zg2m', 2, 1, 'Teknik', 'SMK al-muin', 'Kesepian terburuk adalah tidak nyaman dengan diri sendir', '', '', '', 1582944538, 0),
(19, 'Gunawan', 'agun.43043', 'default.jpg', 'agun.43043@gmail.com', '$2y$10$t4y.yvBmyuB3uxdzotJw3OCW8y/apizKm3pBqOOyVrPJlCmU2BFam', 2, 1, 'It', 'Muin', 'Sukses ', '', '', '', 1582945358, 1582955828),
(21, 'Buls', 'zian_tedy', 'default.jpg', 'zian_tedy@yahoo.com', '$2y$10$kpjp4bwe5iKpYRdZTAtNEOAJvzu2m7ZEv/q0xBXUAWHdkIUz/ME56', 2, 1, '', '', '', '', '', '', 1582978143, 0),
(22, 'Drmwn', 'dadada', 'default.jpg', 'dadada@gmail.com', '$2y$10$RloaLKo.7sT2Qsjoxm3igux.gVkl7Qe.9m1VZs7WXpsKdCxA5xaCS', 2, 1, 'Tidur', 'Mls', 'Rebahan', '', '', '', 1583020927, 1583157840),
(23, 'Rajip Malik', 'rajipmalik81', 'default.jpg', 'rajipmalik81@gmail.com', '$2y$10$TqZg5o2u6XIW.c2Xma7r/eu9SFICekzDT2u3lmt8BHcyT8R/i88T2', 2, 1, '', '', '', '', '', '', 1583037954, 0),
(24, 'Diva aprilian p', 'dipawabangjali', 'default.jpg', 'dipawabangjali@gmail.com', '$2y$10$FYoHVlngAr1B1C9iFktoEOYwd7mZnxkWIFJ03YCbZWD5B7moRS0Im', 2, 1, '', '', '', '', '', '', 1583065028, 0),
(25, 'Bagus Aji Pangestu', 'bagusajipangestu123', 'default.jpg', 'bagusajipangestu123@gmail.com', '$2y$10$q2hbXO3SoF4WvHXZ7frwjuce1krC4p1B.re91zdiCaadaziEah5Yy', 2, 1, 'Player', 'Muin', 'Kepo dih jadi orang ekek', '', '', '', 1583065146, 1583065249),
(26, 'Fadila Hermalia', 'fadilahhermalia1928', 'default.jpg', 'fadilahhermalia1928@gmail.com', '$2y$10$2tlYKlykz90zQUS7.8smO.ChoD7tGgQFYOJgOVGOrpBy/TSy6Dsyi', 2, 1, 'Tim rebahan:) ', 'Di muin', 'Rebahan is my life! :) ', '', 'fadilaaa_h', 'Fadila hrmlia', 1583065148, 1583065622),
(27, 'Rafli kurniawan', 'kurniawanrafly23', 'default.jpg', 'kurniawanrafly23@gmail.com', '$2y$10$D5WKZgIu8NSHv3iQz3BTHeSHKp0GpdE5KcT7tuf12nGFoLS0SByd.', 2, 1, '', '', '', '', '', '', 1583066911, 0),
(34, 'Abi amarulloh', 'abiamarulloh06', 'default.jpg', 'abiamarulloh06@gmail.com', '$2y$10$S2bjXgLEa06SKfyrVPl/Ou5Mea/OZzEXWf/2fpK8GdHYnf0RE12ia', 2, 1, '', '', '', '', '', '', 1584691345, 0),
(28, 'Ayas aby', 'ayasabi34', 'default.jpg', 'ayasabi34@gmail.com', '$2y$10$FklWyd7/WQCtW.2PZ0RYGeJY3g8c3hCpnEl8vf30jK0ZbppRPshNm', 2, 1, '', '', '', '', '', '', 1583078849, 0),
(29, 'Margiansah', 'margiansahiyan', 'default.jpg', 'margiansahiyan@gmail.com', '$2y$10$Gr4Ah/I8lpx8XY3qhpmWIeYUddehG89cwUwDmN3I75UzxkthQwG.G', 2, 1, '', '', '', '', '@iyan_mrh', '', 1583151536, 1583151828),
(30, 'julio kornip', 'julio', 'default.jpg', 'julio@gmail.com', '$2y$10$XgunWKiTOrWtVgVVls.aPupm6SMx0deSU1C2NhmyTyA9eu4nr/pqi', 2, 1, '', '', '', '087789667281', 'Julio.k_Lovers', 'Julio Kornip Alqodiry', 1583151807, 1583152145),
(31, 'Annisa Widya', 'annisawidya84', 'PhotoGrid_1583075579078.jpg', 'annisawidya84@gmail.com', '$2y$10$ktAwqS0rNJjqynLL2q6w3OGJiCbUJX2UP9ZMNtLWRfCblvtLcFchS', 2, 1, 'Psikolog', 'SMK AL-MU\'IN TANGERANG', 'Kepo? Cek instagram\r\n@tehbotle', '', '', '', 1583152511, 1583152793),
(32, 'Ayu fatinah', 'fatinahayu14', 'default.jpg', 'fatinahayu14@gmail.com', '$2y$10$IQBxEznGPZBVeqkJSBmx3e8sxaXeGY4IQ9iwRkSunK3bsxGPvmQSa', 2, 1, '', '', '', '', '', '', 1583154316, 0),
(33, 'ilman agil syihab', 'pejantantangguh517', 'default.jpg', 'pejantantangguh517@gmail.com', '$2y$10$.1bRlI6o6Gf2zOOLwHnLo.1wIM2wqE5b1QBWHdx96Fau8XWx5Mzwe', 2, 1, '', '', '', '', '', '', 1583157943, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `menu` varchar(250) NOT NULL,
  `icon` varchar(250) NOT NULL,
  `url` varchar(250) NOT NULL,
  `nama_menu` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu_id`, `menu`, `icon`, `url`, `nama_menu`) VALUES
(1, 1, 'home', 'fas fa-fw fa-home', 'user/home', 'Home'),
(2, 2, 'myprofile', 'fas fa-fw fa-user', 'user/myprofile', 'My Profile');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `role` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role_id`, `role`) VALUES
(1, 1, 'admin'),
(2, 2, 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
