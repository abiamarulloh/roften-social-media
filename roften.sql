-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 19, 2021 at 09:19 PM
-- Server version: 8.0.22-0ubuntu0.20.04.3
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roften`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int NOT NULL,
  `sender_id` int NOT NULL,
  `receiver_id` int NOT NULL,
  `message` text NOT NULL,
  `date_created` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `sender_id`, `receiver_id`, `message`, `date_created`) VALUES
(5, 6, 17, 'p', 1582978653),
(4, 17, 34, 'wkekek', 1582978606),
(3, 17, 34, 'Hay, abi amarulloh\r\nKeep hamasah????\r\n', 1582978591),
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
(31, 34, 30, 'Wei', 1584692407),
(32, 34, 25, 'gus', 1610874507),
(33, 34, 25, 'p', 1610874518),
(34, 34, 25, 'p', 1610874520),
(35, 34, 25, 'p', 1610874523),
(36, 34, 25, 'p', 1610874942),
(37, 34, 17, 'hy', 1610975086),
(38, 34, 17, 'p', 1610975090),
(39, 34, 17, 'p', 1610975094),
(40, 35, 34, 'hy abi fake', 1610977727),
(41, 34, 35, 'eh iya abi asli', 1610977738),
(42, 35, 34, 'lagi apa bi', 1610977749),
(43, 35, 34, 'bee', 1610977897),
(44, 35, 34, 'hy', 1610978490),
(45, 34, 35, 'hello abi palsu', 1610978510),
(46, 35, 7, 'hy', 1610989206),
(47, 34, 31, 'hy ca', 1610989586),
(48, 34, 31, 'p', 1610989707),
(49, 34, 31, 'p', 1610989711),
(50, 34, 31, 'p', 1610989754),
(51, 34, 31, 'p', 1610989761),
(52, 34, 31, 'pdsfsdf', 1610992016),
(53, 34, 35, 'hy abi asli wei', 1610995757),
(54, 35, 34, 'iyaa abi palsu', 1610995781),
(55, 34, 17, 'p', 1611021560),
(56, 34, 17, 'p', 1611022146),
(57, 34, 35, 'p', 1611052025),
(58, 34, 35, 'p', 1611052031),
(59, 35, 34, 'hy aku abi palsu nih', 1611052434),
(60, 34, 35, 'iya tau lu kan abi palsu', 1611052452),
(61, 34, 35, 'pppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppp', 1611052524),
(62, 35, 34, 'iyaa bii apaan si', 1611054752);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int NOT NULL,
  `comment` varchar(255) NOT NULL,
  `post_id` int NOT NULL,
  `user_id` int NOT NULL,
  `create_at` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `comment`, `post_id`, `user_id`, `create_at`) VALUES
(2, 'apa itu asas bro ?', 10, 34, 1611063532);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `title` varchar(250) NOT NULL,
  `body` text NOT NULL,
  `create_at` int NOT NULL,
  `update_at` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `user_id`, `title`, `body`, `create_at`, `update_at`) VALUES
(1, 34, 'ini test', '&lt;p&gt;hanya test&lt;/p&gt;', 1610879800, 0),
(2, 34, 'Cara membuat Nasi Goreng', '<p>Nasi goreng menjadi salah satu menu masakan andalan berasal dari Indonesia. Nasi goreng mudah ditemukan karena banyak disajikan di warung hingga restoran mewah Tanah Air.<br><br>Nasi goreng pada umumnya hanya membutuhkan bumbu-bumbu dasar yang ada di dapur. Seperti bawang merah, bawang putih, telur dan nasi putih. Kemudian semua diolah dimasak menjadi satu kesatuan dalam wajan. Meskipun terlihat sederhana, namun menu makanan yang satu ini memiliki cita rasa unik di lidah.<br><br>Menu olahan nasi goreng bisa dipadukan dengan beragam menu dan topping lain, seperti sosis, bakso, ikan, ayam, bahkan mangga juga bisa dijadikan topping spesial.<br><br>Cita rasa nasi goreng Tanah Air tentunya nggak kalah lezat dari masakan luar negeri. Banyak wisatawan mancanegara yang datang ke Indonesia untuk mencoba mencicipi makanan yang satu ini. Bahkan tak sedikit dari mereka yang ketagihan dengan masakan lezat yang satu ini. <br><br>Nah, ternyata memasak nasi goreng sederhana namun dengan rasa istimewa rasa restoran bisa kamu lakukan di rumah. Seperti apa resepnya?<br><br>Tak perlu menunggu lama, simak beragam resep nasi goreng sederhana yang sudah <strong>brilio.net</strong> rangkum dari berbagai sumber pada Senin (30/9) berikut ini. Resep nasi goreng sederhana paling enak, spesial dan praktis khusus untukmu.<br><br><br><strong>1. Nasi goreng putih.</strong></p><p> </p><figure class=\"image\"><img src=\"https://cdn-brilio-net.akamaized.net/news/2019/09/30/171446/1104157-1000xauto-nasi-goreng-sederhana-sedap-makan.jpg\" alt=\"Nasi goreng sederhana sedap makan instagram \"></figure><p> </p><p><i>foto: Instagram/@dapurfoody</i><br>Bahan:<br>- Nasi 600 g<br>- Telur ayam 1 butir. Kocok<br>- Daging ayam 125 g. Cincang halus<br>- Sosis ayam 1 buah<br>- Bawang putih 3 siung. Iris halus<br>- Garam sdt<br>- Penyedap rasa sdt<br>- Kecap ikan sdm<br>- Merica sdt<br>- Daun bawang 1 batang. Iris halus<br><br>Cara memasak:<br>a. Tumis bawang putih hingga harum. Tambahkan telur lalu orak-arik.<br>b. Kemudian tambahkan ayam yang telah dicincang halus dan sosis. Masukkan daun bawang. Tumis lagi.<br>c. Masukkan nasi lalu aduk hingga rata. Tambahkan garam, merica, kecap ikan, dan penyedap rasa. Aduk rata sampai aroma sedap atau harum tercium.<br>d. Pindahkan nasi goreng putih pada piring. Taburi bawang merah goreng sebagai tambahan.</p>', 1610881303, 0),
(4, 34, 'bear family', '<ul><li>abi</li><li>marsha</li><li>ande</li><li>bear</li></ul>', 1610890110, 0),
(5, 35, 'postingan abi fake', '<p>hello ini postingan pertama</p>', 1610977633, 0),
(6, 34, 'test', '<h2>test </h2><p>ini text</p>', 1610978573, 0),
(7, 34, 'asa', '<p>asas</p>', 1611022995, 0),
(8, 34, 'asdas', '<p>sd</p>', 1611023141, 0),
(9, 34, 'as', '<p>as</p>', 1611023957, 0),
(10, 34, 'asas', '<p>as</p>', 1611024108, 0),
(11, 34, 'test', '<p>asas</p>', 1611024479, 0),
(12, 34, 'lagi galau', '<blockquote><h4><i>Hy ini kisah galau, gimana ya, emang lagi galau, galau tidak s<strong>ama dengan galau</strong></i></h4></blockquote>', 1611051521, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role_id` int NOT NULL,
  `is_actived` int NOT NULL,
  `profesi` varchar(250) NOT NULL,
  `sekolah` varchar(250) NOT NULL,
  `bio` varchar(250) NOT NULL,
  `whatsapp` varchar(250) NOT NULL,
  `instagram` varchar(250) NOT NULL,
  `facebook` varchar(250) NOT NULL,
  `date_created` int NOT NULL,
  `date_updated` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `username`, `image`, `email`, `password`, `role_id`, `is_actived`, `profesi`, `sekolah`, `bio`, `whatsapp`, `instagram`, `facebook`, `date_created`, `date_updated`) VALUES
(7, 'Snst', 'zalulupa32', 'IMG-20200222-WA0027.jpg', 'zalulupa32@gmail.com', '$2y$10$Cexh8c7eKPDamYUcINTJQ.gnpEM94aS83fukvsppuZwrGyjmE4/v.', 2, 1, 'Sampah Sekolah', 'Ngondoy Squad', 'This is me.', '6281296333241', 'datstick403_', 'zalulupa', 1582455983, 0),
(8, 'Fachri Hawari', 'fachri.hawari', 'default.jpg', 'fachri.hawari@gmail.com', '$2y$10$vvjM/m/hZ5ZB1fye1j4KkuhCCrut3UV.bJKqSpYCOPtg21E77z1OK', 2, 1, 'Software Engineer', 'SMK Negeri 4 Kota Tangerang', 'Just do it', '', 'fachrihawari', 'fachri.hawari', 1582464771, 0),
(9, 'Aditya Fiqri Firdaus', 'fiqri064', 'default.jpg', 'fiqri064@gmail.com', '$2y$10$5scXGNjroob2TDZJxU4Th.mniNCzG5WPVUaXoNhZF7FTpAMYqWmy.', 2, 1, '', '', '', '', '', '', 1582465164, 0),
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
(34, 'Abi amarulloh', 'abiamarulloh06', 'WhatsApp_Image_2021-01-11_at_12_21_13.jpeg', 'abiamarulloh06@gmail.com', '$2y$10$h6jMKYqG1tGLxVxKBo8TNeoXjRVaEo/oXLaVE8qezd1KHwbgNzS/.', 2, 1, 'Front End Developer', 'STMIK ANTAR BANGSA', 'i am like you, eits just kidding yeah.', '62895337813520', 'abiamarulloh', 'abamtech', 1584691345, 1611025167),
(28, 'Ayas aby', 'ayasabi34', 'default.jpg', 'ayasabi34@gmail.com', '$2y$10$FklWyd7/WQCtW.2PZ0RYGeJY3g8c3hCpnEl8vf30jK0ZbppRPshNm', 2, 1, '', '', '', '', '', '', 1583078849, 0),
(29, 'Margiansah', 'margiansahiyan', 'default.jpg', 'margiansahiyan@gmail.com', '$2y$10$Gr4Ah/I8lpx8XY3qhpmWIeYUddehG89cwUwDmN3I75UzxkthQwG.G', 2, 1, '', '', '', '', '@iyan_mrh', '', 1583151536, 1583151828),
(30, 'julio kornip', 'julio', 'default.jpg', 'julio@gmail.com', '$2y$10$XgunWKiTOrWtVgVVls.aPupm6SMx0deSU1C2NhmyTyA9eu4nr/pqi', 2, 1, '', '', '', '087789667281', 'Julio.k_Lovers', 'Julio Kornip Alqodiry', 1583151807, 1583152145),
(31, 'Annisa Widya', 'annisawidya84', 'PhotoGrid_1583075579078.jpg', 'annisawidya84@gmail.com', '$2y$10$ktAwqS0rNJjqynLL2q6w3OGJiCbUJX2UP9ZMNtLWRfCblvtLcFchS', 2, 1, 'Psikolog', 'SMK AL-MU\'IN TANGERANG', 'Kepo? Cek instagram\r\n@tehbotle', '', '', '', 1583152511, 1583152793),
(32, 'Ayu fatinah', 'fatinahayu14', 'default.jpg', 'fatinahayu14@gmail.com', '$2y$10$IQBxEznGPZBVeqkJSBmx3e8sxaXeGY4IQ9iwRkSunK3bsxGPvmQSa', 2, 1, '', '', '', '', '', '', 1583154316, 0),
(33, 'ilman agil syihab', 'pejantantangguh517', 'default.jpg', 'pejantantangguh517@gmail.com', '$2y$10$.1bRlI6o6Gf2zOOLwHnLo.1wIM2wqE5b1QBWHdx96Fau8XWx5Mzwe', 2, 1, '', '', '', '', '', '', 1583157943, 0),
(35, 'abi fake', 'abifake', 'default.jpg', 'abifake@mail.com', '$2y$10$lL8jvhcuzY2T9u..nqUY6eSrE2DuNqrrX821G0SgSvCkPidxp.PZ6', 2, 1, '', '', '', '', '', '', 1610977517, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int NOT NULL,
  `role_id` int NOT NULL,
  `role` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role_id`, `role`) VALUES
(1, 1, 'admin'),
(2, 2, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
