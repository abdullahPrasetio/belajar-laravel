-- Adminer 4.7.0 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `acara_akad`;
CREATE TABLE `acara_akad` (
  `acara_akad_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `jam1` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `jam2` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal1` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal2` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`acara_akad_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `acara_akad` (`acara_akad_id`, `nama`, `jam1`, `jam2`, `tanggal1`, `tanggal2`, `keterangan`) VALUES
(1,	'AKAD NIKAH',	'08:00',	'11:00',	'Sabtu 02',	'Februari 2018',	'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.');

DROP TABLE IF EXISTS `acara_resepsi`;
CREATE TABLE `acara_resepsi` (
  `acara_resepsi_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `jam1` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `jam2` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal1` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal2` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`acara_resepsi_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `acara_resepsi` (`acara_resepsi_id`, `nama`, `jam1`, `jam2`, `tanggal1`, `tanggal2`, `keterangan`) VALUES
(1,	'RESEPSI',	'12:00',	'21:00',	'Sabtu 02',	'Februari 2018',	'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.');

DROP TABLE IF EXISTS `acara_title`;
CREATE TABLE `acara_title` (
  `acara_title_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`acara_title_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `acara_title` (`acara_title_id`, `title`) VALUES
(1,	'Acara');

DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama1` varchar(115) NOT NULL,
  `nama2` varchar(115) NOT NULL,
  `title` varchar(115) NOT NULL,
  `waktu_mundur` varchar(115) NOT NULL,
  `gambar` text NOT NULL,
  PRIMARY KEY (`banner_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `banner` (`banner_id`, `nama1`, `nama2`, `title`, `waktu_mundur`, `gambar`) VALUES
(1,	'Shafa',	'Fadly',	'we are getting Married',	'Feb 2, 2019 08:00:00',	'5959af942011957.jpg');

DROP TABLE IF EXISTS `jasa_photo`;
CREATE TABLE `jasa_photo` (
  `jasa_photo_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`jasa_photo_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `jasa_photo` (`jasa_photo_id`, `nama`, `keterangan`) VALUES
(1,	'Jasa Photo',	'Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.2');

DROP TABLE IF EXISTS `jasa_rias`;
CREATE TABLE `jasa_rias` (
  `jasa_rias_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`jasa_rias_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `jasa_rias` (`jasa_rias_id`, `nama`, `keterangan`) VALUES
(1,	'Jasa Rias',	'Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.2');

DROP TABLE IF EXISTS `jasa_tenda`;
CREATE TABLE `jasa_tenda` (
  `jasa_tenda_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`jasa_tenda_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `jasa_tenda` (`jasa_tenda_id`, `nama`, `keterangan`) VALUES
(1,	'Tenda',	'Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.2');

DROP TABLE IF EXISTS `jasa_title`;
CREATE TABLE `jasa_title` (
  `jasa_title_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `video` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`jasa_title_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `jasa_title` (`jasa_title_id`, `title`, `video`) VALUES
(1,	'Jasa yg kami Gunakan2',	'');

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_resets_table',	1);

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `penganten`;
CREATE TABLE `penganten` (
  `penganten_id` int(11) NOT NULL AUTO_INCREMENT,
  `salam` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `nama1` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan1` text COLLATE utf8_unicode_ci NOT NULL,
  `gambar1` text COLLATE utf8_unicode_ci NOT NULL,
  `nama2` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan2` text COLLATE utf8_unicode_ci NOT NULL,
  `gambar2` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`penganten_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `penganten` (`penganten_id`, `salam`, `tanggal`, `title`, `nama1`, `keterangan1`, `gambar1`, `nama2`, `keterangan2`, `gambar2`) VALUES
(1,	'Hello!',	'2 Februari, 2018 Kp. Sawah, Bekasi',	'We invited you to celebrate our wedding',	'Shafa Rafida',	'Seseorang yang terlahir untuk mendampingi hidup Fadly Rifai, baik susah ataupun senang, telah mempercayakan sepenuhnya kepada Fadly Rifai.. dan berjanji akan selalu setia untuk menemani nya..',	'Alasan-Pengantin-Wanita-Melakukan-Diet-Sebelum-Menikah_41_20170701161900.jpg',	'Fadly Rifai',	'Seseorang yang terlahir untuk mencintai dan menyayangi Shafa Rafida.. berjanji untuk selalu melindungi dan membahagiakan ny.. pokok nya udah sayang banget sama Shafa, gak mau lg cari yg lain.. pokoknya cuma Shafa..',	'download.jpeg');

DROP TABLE IF EXISTS `story`;
CREATE TABLE `story` (
  `story_id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8_unicode_ci NOT NULL,
  `gambar` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`story_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `story` (`story_id`, `judul`, `tanggal`, `keterangan`, `gambar`) VALUES
(1,	'Pertama Kali Bertemu',	'13 Juni, 2007',	'Pertama kali bertemu di bangku sekolah menengah pertama.. Cinta pertama dan terakhir',	'1456131-352-k523266.jpg'),
(2,	'Pertama Kali Datang Kerumah',	'04 April 2018',	'Sang pria dengan modal nekat mencoba untuk memberanikan diri untuk datang kerumah mempelai wanita, berusaha untuk medapatkan cintanya..',	'36903.jpg'),
(4,	'Melamar',	'25 Agustus, 2018',	'Dan akhir nya melamar sang wanita pada tanggal 25 Agustus 2018, hari yang sangat menyenangkan..',	'Jangan-Kaget-di-Tulungagung-Wanita-Melamar-Pria-sebelum-MenikahU6LE7.jpg');

DROP TABLE IF EXISTS `story_title`;
CREATE TABLE `story_title` (
  `story_title_id` int(11) NOT NULL AUTO_INCREMENT,
  `title1` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  `title2` varchar(115) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`story_title_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `story_title` (`story_title_id`, `title1`, `title2`) VALUES
(1,	'WE LOVE EACH OTHER',	'Our Story');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2,	'Admin',	'admin',	'$2y$10$E4dHpv2mYNFVfNJD001YSeYUKXVuvuiETOkRFMxgQVkRmr7RPcau2',	'mmJUoJJ02N9As0Syo3Faeh7Vpjr6RB7Rz3ODKs1FWxPAWuBSIc9c7QQ3KDNa',	'2018-12-31 16:38:46',	'2018-12-31 16:38:46');

-- 2019-01-01 02:11:25
