-- MySQL dump 10.17  Distrib 10.3.25-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: roften
-- ------------------------------------------------------
-- Server version	10.3.25-MariaDB-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `chat`
--

DROP TABLE IF EXISTS `chat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=97 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chat`
--

LOCK TABLES `chat` WRITE;
/*!40000 ALTER TABLE `chat` DISABLE KEYS */;
INSERT INTO `chat` VALUES (5,6,17,'p',1582978653),(4,17,34,'wkekek',1582978606),(3,17,34,'Hay, abi amarulloh\r\nKeep hamasah????\r\n',1582978591),(23,27,6,'Assalamualaikum akhi',1583067045),(22,6,14,'wei',1583066477),(21,6,12,'iya beb',1583066160),(20,12,6,'Jgn lupa follow @sitirhmh06',1583065983),(19,6,25,'ok',1583065268),(18,25,6,'P',1583065203),(17,6,17,'hai',1582979367),(24,6,12,'Wei',1583148120),(25,6,25,'Gus',1583151202),(26,6,31,'Ca',1583152821),(27,31,6,'udh ya',1583152830),(28,27,6,'Assalamualaikum',1583153973),(29,22,29,'Sad',1583157763),(30,6,33,'Man ',1583158066),(31,34,30,'Wei',1584692407),(32,34,25,'gus',1610874507),(33,34,25,'p',1610874518),(34,34,25,'p',1610874520),(35,34,25,'p',1610874523),(36,34,25,'p',1610874942),(37,34,17,'hy',1610975086),(38,34,17,'p',1610975090),(39,34,17,'p',1610975094),(40,35,34,'hy abi fake',1610977727),(41,34,35,'eh iya abi asli',1610977738),(42,35,34,'lagi apa bi',1610977749),(43,35,34,'bee',1610977897),(44,35,34,'hy',1610978490),(45,34,35,'hello abi palsu',1610978510),(46,35,7,'hy',1610989206),(47,34,31,'hy ca',1610989586),(48,34,31,'p',1610989707),(49,34,31,'p',1610989711),(50,34,31,'p',1610989754),(51,34,31,'p',1610989761),(52,34,31,'pdsfsdf',1610992016),(53,34,35,'hy abi asli wei',1610995757),(54,35,34,'iyaa abi palsu',1610995781),(55,34,17,'p',1611021560),(56,34,17,'p',1611022146),(57,34,35,'p',1611052025),(58,34,35,'p',1611052031),(59,35,34,'hy aku abi palsu nih',1611052434),(60,34,35,'iya tau lu kan abi palsu',1611052452),(61,34,35,'pppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppp',1611052524),(62,35,34,'iyaa bii apaan si',1611054752),(63,34,36,'Hy dil',1611069692),(64,34,15,'Wei le',1611071035),(65,48,38,'test',1611134277),(66,34,31,'p',1611135516),(67,34,31,'p',1611135522),(68,34,15,'P',1611221615),(69,34,54,'Hy',1611243676),(70,55,34,'bicon ganteng',1611244130),(71,34,55,'Hy ayah',1611244153),(72,34,35,'Keren, kurang realtime aja, abis itu, lanjut bikin cms nya oke',1611326226),(73,34,52,'thanks feed back nya\n',1611373973),(74,34,56,'pagi xa',1611374019),(75,34,56,'p',1611374473),(76,34,56,'xa',1611374543),(77,56,34,'bi',1611374779),(78,34,56,'Hy',1611374822),(79,57,34,'Hshzg',1611380455),(80,34,57,'Jelek lu',1611380465),(81,57,34,'Adul',1611380482),(82,34,57,'Mantab',1611380488),(83,34,58,'Hy',1611381029),(84,55,34,'P',1611500476),(85,55,34,'Bi',1611500492),(86,34,55,'Apa',1611500501),(87,37,34,'P wr.wb',1611533086),(88,34,37,'widih si bebeb\n',1611541960),(89,59,55,'bapa abi\n',1611555414),(90,59,55,'p',1611555433),(91,55,59,'iqa',1611555467),(92,55,59,'iya',1611555471),(93,59,55,'p',1611555533),(94,34,55,'p',1611555561),(95,34,35,'oke manteb',1611843763),(96,34,35,'done, sudah realtime ',1611843799);
/*!40000 ALTER TABLE `chat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` varchar(255) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `create_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=122 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comment`
--

LOCK TABLES `comment` WRITE;
/*!40000 ALTER TABLE `comment` DISABLE KEYS */;
INSERT INTO `comment` VALUES (77,'hy',13,34,1611278517),(10,'Gorengnya pake minyak? ',2,39,1611070297),(11,'ok bingit suhu mantapp',13,40,1611070416),(23,'weh iya, user bisa hapus komen orang lain heuehu~',13,48,1611138764),(14,'Masih ada bug nya wkwk, lupa kasih kondisi di tombol delete',13,34,1611070705),(15,'User bisa ngapus komentar orang lain ya',13,43,1611071739),(19,'Mantap',2,45,1611095369),(20,'benar @hafshin08',13,34,1611109388),(95,'Test',16,58,1611380942),(24,'Ehem',13,42,1611139863),(85,'Pake dong, minyak sayur bang hehe',2,34,1611325981),(94,'Hy',16,34,1611380927),(96,'Hy',15,34,1611500664),(119,'hi kalo baca ini, bales mantul ya ',18,34,1611884649);
/*!40000 ALTER TABLE `comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `body` text NOT NULL,
  `create_at` int(11) NOT NULL,
  `update_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post`
--

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` VALUES (2,34,'Cara membuat Nasi Goreng','<p>Nasi goreng menjadi salah satu menu masakan andalan berasal dari Indonesia. Nasi goreng mudah ditemukan karena banyak disajikan di warung hingga restoran mewah Tanah Air.<br><br>Nasi goreng pada umumnya hanya membutuhkan bumbu-bumbu dasar yang ada di dapur. Seperti bawang merah, bawang putih, telur dan nasi putih. Kemudian semua diolah dimasak menjadi satu kesatuan dalam wajan. Meskipun terlihat sederhana, namun menu makanan yang satu ini memiliki cita rasa unik di lidah.<br><br>Menu olahan nasi goreng bisa dipadukan dengan beragam menu dan topping lain, seperti sosis, bakso, ikan, ayam, bahkan mangga juga bisa dijadikan topping spesial.<br><br>Cita rasa nasi goreng Tanah Air tentunya nggak kalah lezat dari masakan luar negeri. Banyak wisatawan mancanegara yang datang ke Indonesia untuk mencoba mencicipi makanan yang satu ini. Bahkan tak sedikit dari mereka yang ketagihan dengan masakan lezat yang satu ini. <br><br>Nah, ternyata memasak nasi goreng sederhana namun dengan rasa istimewa rasa restoran bisa kamu lakukan di rumah. Seperti apa resepnya?<br><br>Tak perlu menunggu lama, simak beragam resep nasi goreng sederhana yang sudah <strong>brilio.net</strong> rangkum dari berbagai sumber pada Senin (30/9) berikut ini. Resep nasi goreng sederhana paling enak, spesial dan praktis khusus untukmu.<br><br><br><strong>1. Nasi goreng putih.</strong></p><p> </p><figure class=\"image\"><img src=\"https://cdn-brilio-net.akamaized.net/news/2019/09/30/171446/1104157-1000xauto-nasi-goreng-sederhana-sedap-makan.jpg\" alt=\"Nasi goreng sederhana sedap makan instagram \"></figure><p> </p><p><i>foto: Instagram/@dapurfoody</i><br>Bahan:<br>- Nasi 600 g<br>- Telur ayam 1 butir. Kocok<br>- Daging ayam 125 g. Cincang halus<br>- Sosis ayam 1 buah<br>- Bawang putih 3 siung. Iris halus<br>- Garam sdt<br>- Penyedap rasa sdt<br>- Kecap ikan sdm<br>- Merica sdt<br>- Daun bawang 1 batang. Iris halus<br><br>Cara memasak:<br>a. Tumis bawang putih hingga harum. Tambahkan telur lalu orak-arik.<br>b. Kemudian tambahkan ayam yang telah dicincang halus dan sosis. Masukkan daun bawang. Tumis lagi.<br>c. Masukkan nasi lalu aduk hingga rata. Tambahkan garam, merica, kecap ikan, dan penyedap rasa. Aduk rata sampai aroma sedap atau harum tercium.<br>d. Pindahkan nasi goreng putih pada piring. Taburi bawang merah goreng sebagai tambahan.</p>',1610881303,0),(4,34,'bear family','<ul><li>abi</li><li>marsha</li><li>ande</li><li>bear</li></ul>',1610890110,0),(5,35,'postingan abi fake','<p>hello ini postingan pertama</p>',1610977633,0),(16,58,'???? ','<p>???? </p>',1611380895,0),(13,38,'Eh gimana','<p>Gimana sih? Oke?</p>',1611070244,0),(17,55,'Cara Menyetir mobil','<p>Hello semua, kali ini…</p>',1611674576,0),(18,34,'Cara membuat nasi goreng yang mantull','<p>Cita rasa nasi goreng Tanah Air tentunya nggak kalah lezat dari masakan luar negeri. Banyak wisatawan mancanegara yang datang ke Indonesia untuk mencoba mencicipi makanan yang satu ini. Bahkan tak sedikit dari mereka yang ketagihan dengan masakan lezat yang satu ini.<br><br>Nah, ternyata memasak nasi goreng sederhana namun dengan rasa istimewa rasa restoran bisa kamu lakukan di rumah. Seperti apa resepnya?<br><br>Tak perlu menunggu lama, simak beragam resep nasi goreng sederhana yang sudah <strong>brilio.net</strong> rangkum dari berbagai sumber pada Senin (30/9) berikut ini. Resep nasi goreng sederhana paling enak, spesial dan praktis khusus untukmu.<br><br><br><strong>1. Nasi goreng putih.</strong></p><p> </p><figure class=\"image\"><img src=\"https://cdn-brilio-net.akamaized.net/news/2019/09/30/171446/1104157-1000xauto-nasi-goreng-sederhana-sedap-makan.jpg\" alt=\"Nasi goreng sederhana sedap makan instagram \"></figure><p> </p><p><i>foto: Instagram/@dapurfoody</i></p><p><br><br>Bahan:<br>- Nasi 600 g<br>- Telur ayam 1 butir. Kocok<br>- Daging ayam 125 g. Cincang halus<br>- Sosis ayam 1 buah<br>- Bawang putih 3 siung. Iris halus<br>- Garam sdt<br>- Penyedap rasa sdt<br>- Kecap ikan sdm<br>- Merica sdt<br>- Daun bawang 1 batang. Iris halus</p>',1611844109,0);
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `date_updated` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (7,'Snst','zalulupa32','IMG-20200222-WA0027.jpg','zalulupa32@gmail.com','$2y$10$Cexh8c7eKPDamYUcINTJQ.gnpEM94aS83fukvsppuZwrGyjmE4/v.',2,1,'Sampah Sekolah','Ngondoy Squad','This is me.','6281296333241','datstick403_','zalulupa',1582455983,0),(8,'Fachri Hawari','fachri.hawari','default.jpg','fachri.hawari@gmail.com','$2y$10$vvjM/m/hZ5ZB1fye1j4KkuhCCrut3UV.bJKqSpYCOPtg21E77z1OK',2,1,'Software Engineer','SMK Negeri 4 Kota Tangerang','Just do it','','fachrihawari','fachri.hawari',1582464771,0),(9,'Aditya Fiqri Firdaus','fiqri064','default.jpg','fiqri064@gmail.com','$2y$10$5scXGNjroob2TDZJxU4Th.mniNCzG5WPVUaXoNhZF7FTpAMYqWmy.',2,1,'','','','','','',1582465164,0),(15,'ZILZIAN TEDY FIRMANSYAH','zilzian.firmansyah','IMG-20200223-WA0018.jpg','zilzian.firmansyah@gmail.com','$2y$10$lXoFctepxJw33iZW47YXB.WgZcKOwQemHEhoLra8hiVrqxlF6tAsu',2,1,'Mencoba menjadi fakboi','Kepo amat kek mau kenal aja','Klo gua ceritain lu kga bakal percaya asli dah.','','','',1582469056,0),(16,'Dobleh','dobleh00uye','default.jpg','dobleh00uye@gmail.com','$2y$10$s4RvptEW9U1b37LyASqDGOgtowGYX5bzJxUOz.cj1DWnNjiC6Mnga',2,1,'Cod','Gapunya','Jangan kepo dech','','Khorrr15','Bukhori M',1582472368,0),(17,'Putri rahmadini','Putri.rahmadini064','IMG_20200213_204153_987.jpg','Putri.rahmadini064@gmail.com','$2y$10$i10Lv9V1JPNT2Bt77T7qWuhGwDoCImSTrXK96OIi0TfNqTuPe/6se',2,1,'General branch administration','Smk almuin','Oh.','','','',1582936024,0),(18,'Syadam ulil','syadamulil','default.jpg','syadamulil@gmail.com','$2y$10$B1UluC8bYE39VEpxezWMouVweyNqTEdG29Rz5aR2iDuuaIbK/zg2m',2,1,'Teknik','SMK al-muin','Kesepian terburuk adalah tidak nyaman dengan diri sendir','','','',1582944538,0),(19,'Gunawan','agun.43043','default.jpg','agun.43043@gmail.com','$2y$10$t4y.yvBmyuB3uxdzotJw3OCW8y/apizKm3pBqOOyVrPJlCmU2BFam',2,1,'It','Muin','Sukses ','','','',1582945358,1582955828),(21,'Buls','zian_tedy','default.jpg','zian_tedy@yahoo.com','$2y$10$kpjp4bwe5iKpYRdZTAtNEOAJvzu2m7ZEv/q0xBXUAWHdkIUz/ME56',2,1,'','','','','','',1582978143,0),(22,'Drmwn','dadada','default.jpg','dadada@gmail.com','$2y$10$RloaLKo.7sT2Qsjoxm3igux.gVkl7Qe.9m1VZs7WXpsKdCxA5xaCS',2,1,'Tidur','Mls','Rebahan','','','',1583020927,1583157840),(23,'Rajip Malik','rajipmalik81','default.jpg','rajipmalik81@gmail.com','$2y$10$TqZg5o2u6XIW.c2Xma7r/eu9SFICekzDT2u3lmt8BHcyT8R/i88T2',2,1,'','','','','','',1583037954,0),(24,'Diva aprilian p','dipawabangjali','default.jpg','dipawabangjali@gmail.com','$2y$10$FYoHVlngAr1B1C9iFktoEOYwd7mZnxkWIFJ03YCbZWD5B7moRS0Im',2,1,'','','','','','',1583065028,0),(25,'Bagus Aji Pangestu','bagusajipangestu123','default.jpg','bagusajipangestu123@gmail.com','$2y$10$q2hbXO3SoF4WvHXZ7frwjuce1krC4p1B.re91zdiCaadaziEah5Yy',2,1,'Player','Muin','Kepo dih jadi orang ekek','','','',1583065146,1583065249),(26,'Fadila Hermalia','fadilahhermalia1928','default.jpg','fadilahhermalia1928@gmail.com','$2y$10$2tlYKlykz90zQUS7.8smO.ChoD7tGgQFYOJgOVGOrpBy/TSy6Dsyi',2,1,'Tim rebahan:) ','Di muin','Rebahan is my life! :) ','','fadilaaa_h','Fadila hrmlia',1583065148,1583065622),(27,'Rafli kurniawan','kurniawanrafly23','default.jpg','kurniawanrafly23@gmail.com','$2y$10$D5WKZgIu8NSHv3iQz3BTHeSHKp0GpdE5KcT7tuf12nGFoLS0SByd.',2,1,'','','','','','',1583066911,0),(34,'Abi amarulloh','abiamarulloh06','32256117.jpeg','abiamarulloh06@gmail.com','$2y$10$h6jMKYqG1tGLxVxKBo8TNeoXjRVaEo/oXLaVE8qezd1KHwbgNzS/.',2,1,'Front End Developer','STMIK ANTAR PELANET','Hei guys','62895337813520','abiamarulloh','abamtech',1584691345,1612139788),(28,'Ayas aby','ayasabi34','default.jpg','ayasabi34@gmail.com','$2y$10$FklWyd7/WQCtW.2PZ0RYGeJY3g8c3hCpnEl8vf30jK0ZbppRPshNm',2,1,'','','','','','',1583078849,0),(29,'Margiansah','margiansahiyan','default.jpg','margiansahiyan@gmail.com','$2y$10$Gr4Ah/I8lpx8XY3qhpmWIeYUddehG89cwUwDmN3I75UzxkthQwG.G',2,1,'','','','','@iyan_mrh','',1583151536,1583151828),(30,'julio kornip','julio','default.jpg','julio@gmail.com','$2y$10$XgunWKiTOrWtVgVVls.aPupm6SMx0deSU1C2NhmyTyA9eu4nr/pqi',2,1,'','','','087789667281','Julio.k_Lovers','Julio Kornip Alqodiry',1583151807,1583152145),(31,'Annisa Widya','annisawidya84','PhotoGrid_1583075579078.jpg','annisawidya84@gmail.com','$2y$10$ktAwqS0rNJjqynLL2q6w3OGJiCbUJX2UP9ZMNtLWRfCblvtLcFchS',2,1,'Psikolog','SMK AL-MU\'IN TANGERANG','Kepo? Cek instagram\r\n@tehbotle','','','',1583152511,1583152793),(32,'Ayu fatinah','fatinahayu14','default.jpg','fatinahayu14@gmail.com','$2y$10$IQBxEznGPZBVeqkJSBmx3e8sxaXeGY4IQ9iwRkSunK3bsxGPvmQSa',2,1,'','','','','','',1583154316,0),(33,'ilman agil syihab','pejantantangguh517','default.jpg','pejantantangguh517@gmail.com','$2y$10$.1bRlI6o6Gf2zOOLwHnLo.1wIM2wqE5b1QBWHdx96Fau8XWx5Mzwe',2,1,'','','','','','',1583157943,0),(35,'abi fake','abifake','default.jpg','abifake@mail.com','$2y$10$lL8jvhcuzY2T9u..nqUY6eSrE2DuNqrrX821G0SgSvCkPidxp.PZ6',2,1,'','','','','','',1610977517,0),(36,'Fadila Hermalia','hrmliafdila','IMG_20201211_000513_946.jpg','hrmliafdila@gmail.com','$2y$10$yDboTzF7dTf9Cqhl9Vn59uc7soX/w3J9By7w8mBkw0THCIOrLJcBi',2,1,'PENGACARA','SMK AL-MU\'IN','Idup.','','','',1611069193,1611069515),(37,'Panggil aja Syg','sitirhmh0607','PicsArt_01-05-11_18_04.jpg','sitirhmh0607@gmail.com','$2y$10$IoeMObqBHNzQtjUKywxc.ueYS3xS91Wv2.w03DUcXv0CbDIyW7ENK',2,1,'Mkn Tdr Brk','Di Tempatnya','Hagalogo????','08990028143','@sitirmh06','Sitirhmh',1611069527,1611533243),(38,'Siapa','siapasaja','default.jpg','siapasaja@gmail.com','$2y$10$rnGgBD6r7FfY4tDW47FEU..8Ksi0838SzHurrO031duIWcPDibpum',2,1,'','','','','','',1611070174,0),(39,'Izal Noera','izalnoera45','default.jpg','izalnoera45@gmail.com','$2y$10$mQuJIuUt1jirX4QOX8YlxuAhB3Z1jfxMHe2WMatnWZxLxBMPJseci',2,1,'','','','','','',1611070205,0),(40,'Dede Herman','dedehermanvpay','default.jpg','dedehermanvpay@gmail.com','$2y$10$gf2NrjhDK3GPGqTi7gZ0TO.b6fpmTWDDwhszczVz1bTBxdAJ0OwZO',2,1,'','','','','','',1611070385,0),(41,'Kurniasih','knias2020','default.jpg','knias2020@gmail.com','$2y$10$uYYyyfkfS9u0q74L4Hrf/.DS5wHddlNJWoAZ3MBW7LyKDSVF/Tcdq',2,1,'','','','','','',1611070825,0),(42,'Ifham aza','ifhamaza2','default.jpg','ifhamaza2@gmail.com','$2y$10$4.X471ytQhbzLbwMP.wEXupduPGU01.Sge6SEOu9bCBEIkD0GM3Iq',2,1,'','','','','','',1611071016,0),(43,'Abu Hafsin','hafshin08','default.jpg','hafshin08@gmail.com','$2y$10$R2lweQJhMtf/G93ZnTBmieztok9vBF02Tk.sJU2BcCy38q47g6i/O',2,1,'','','','','','',1611071411,0),(44,'muhamad nurwakhid','muhamadnurwakhid','default.jpg','muhamadnurwakhid@gmail.com','$2y$10$Ugki2u3WRNvvBZ00l.BG2eRsQ23a3iza7y/HWHf6Hu4wY6GJZt4KS',2,1,'','','','','','',1611072391,0),(45,'Tes','trs','default.jpg','trs@m.c','$2y$10$q8PkIsXcTuCNkpWWGVuB4.IzoTKPmRHPMn1BSA76eLYwiYW1topPK',2,1,'','','','','','',1611095239,0),(46,'R.Francoice V.R.K','francoice.victoryo','default.jpg','francoice.victoryo@gmail.com','$2y$10$CnNU2UoeOk5azjFUwY81MuDmxgkELDmgNTRd.MC/vHoQNBgM4CZFK',2,1,'','','','','','',1611126554,0),(47,'Roften','roften','default.jpg','roften@gmail.com','$2y$10$cZaaeIT5DaDyjppRFfrHAugJNvCllJYvJy/1SEmIjIT4iZT8G6/ui',2,1,'','','','','','',1611127244,0),(48,'Daffa Syarifuddin Masnun','syarf.masn234','default.jpg','syarf.masn234@hotmail.com','$2y$10$/bGdzF9opEdmOsXGGPVSKuf2Bw.P1DwQvK3wfc.WG8qeVgMyVYsFi',2,1,'','','','','','',1611134231,0),(49,'Agung Pramudya','pramudya9712','default.jpg','pramudya9712@gmail.com','$2y$10$KYTEZi60D1JgjcOYPOlURONR4aibPbwt3J1RPXE/Q2zwIYqs7r.BW',2,1,'','','','','','',1611153288,0),(50,'tes','tes124','default.jpg','tes124@gmail.com','$2y$10$J7Syp/6MlW/1FKx9tPpR8..ls3FYCmtAZ0fgvuZx0gKa07/pfeVnO',2,1,'','','','','','',1611154249,0),(51,'Arkana','arkanaalberta','default.jpg','arkanaalberta@gmail.com','$2y$10$IpgsGMLWUbWzVpZhd16HQesPNlPr5GrwKR/qQ/0GK9MSchpI8KSPW',2,1,'Mahasiswa','/* Mau tau banget */','','','Arkanaann','Arkana Alberta',1611156589,1611157415),(52,'rohohij683','rohohij683','default.jpg','rohohij683@dashseat.com','$2y$10$Hl.3iBiuzxwTsOcrkedsQ.OviGv8nWfQ2dnmJcoOsCBlqfyz9l1Eq',2,1,'','','kalau profilenya gak ada apa sebaiknya di redirect ke halaman lain bang? \r\nexample : http://47.254.244.223:81/testprofile','','','',1611201356,1611203131),(53,'Kurnia','knias2016','default.jpg','knias2016@gmail.com','$2y$10$2qPqCTtazrcfADptiYKWqO/XX3dFMGhrDEfPPej/gWr1BAO2uh5Bu',2,1,'','','','','','',1611230647,0),(54,'Mamaabi','mama','default.jpg','mama@gmail.com','$2y$10$ZvMz7T4dyQbYhvN1hhhSY.kiSy4yA4wveju5mjQu3tj7hYSMAUZ6a',2,1,'','','','','','',1611230746,0),(55,'wito','wito','default.jpg','wito@gmail.com','$2y$10$.oMtEROFMbel8Z1KrCTGm.kuXJFFAomNV.xl8gxQYe9uDZxuYjrlO',2,1,'','','','','','',1611234313,0),(56,'aqsapradipta','aqsapradipta19','pic_axaaaa19.png','aqsapradipta19@gmail.com','$2y$10$4sux9mxNob4Qbr4VDvR85OaFdprM/1IEyZaVI0F.XrGYhdROk5bAe',2,1,'Junior Developer','SMK PANJATEK','Nothing is impossible','6287881467166','axaaa19','Aqsa Pradipta',1611373408,1611374406),(57,'Gghjj','ggyuu','default.jpg','ggyuu@gmil.com','$2y$10$0ZE8C1rJYpsYcAewn6725.ehgLeV0NNxEM/JxmH1JCSdIjzcmvIKG',2,1,'','','','','','',1611380309,0),(58,'Fachri','asdf','default.jpg','asdf@asdf.com','$2y$10$rm4s9aCiChKS6XWNTyS91O9LVVOswN3DtDeo9p1GlV5obMKG65vcS',2,1,'','','','','','',1611380732,0),(59,'muhamad alwi rizki','awi','default.jpg','awi@gmail.com','$2y$10$GGDMO7mkRmvxM9A1o4B1ne1hwLI3jztLhxKMdKa8j9QSam7mhmTby',2,1,'','','','','','',1611555372,0);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_role`
--

DROP TABLE IF EXISTS `user_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `role` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_role`
--

LOCK TABLES `user_role` WRITE;
/*!40000 ALTER TABLE `user_role` DISABLE KEYS */;
INSERT INTO `user_role` VALUES (1,1,'admin'),(2,2,'user');
/*!40000 ALTER TABLE `user_role` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-02-02  6:51:49
