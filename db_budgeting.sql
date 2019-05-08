-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.19 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for db_budgeting
DROP DATABASE IF EXISTS `db_budgeting`;
CREATE DATABASE IF NOT EXISTS `db_budgeting` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_budgeting`;

-- Dumping structure for table db_budgeting.alamat
DROP TABLE IF EXISTS `alamat`;
CREATE TABLE IF NOT EXISTS `alamat` (
  `id_pj` int(11) NOT NULL AUTO_INCREMENT,
  `nama` text NOT NULL,
  `status` enum('Internal','External') NOT NULL,
  PRIMARY KEY (`id_pj`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=latin1;

-- Dumping data for table db_budgeting.alamat: ~76 rows (approximately)
DELETE FROM `alamat`;
/*!40000 ALTER TABLE `alamat` DISABLE KEYS */;
INSERT INTO `alamat` (`id_pj`, `nama`, `status`) VALUES
	(1, 'Deputi Bidang Pembangunan Manusia, Masyarakat dan Kebudayaan', 'Internal'),
	(2, 'Direktur Kesehatan dan Gizi Masyarakat', 'Internal'),
	(3, 'Direktur Pendidikan dan Agama', 'Internal'),
	(4, 'Direktur Pendidikan Tinggi, IPTEK dan Kebudayaan', 'Internal'),
	(5, 'Direktur Keluarga, Perempuan, Anak, Pemuda dan Olahraga', 'Internal'),
	(6, 'Deputi Bidang Politik, Hukum, Pertahanan dan Keamanan', 'Internal'),
	(7, 'Direktur Politik, dan Komunikasi', 'Internal'),
	(8, 'Direktur Aparatur Negara', 'Internal'),
	(9, 'Direktur Hukum dan Regulasi', 'Internal'),
	(10, 'Direktur Politik Luar Negeri dan Kerjasama Pembangunan Internasional', 'Internal'),
	(11, 'Direktur Pertahanan dan Keamanan', 'Internal'),
	(12, 'Deputi Bidang Kependudukan dan Ketenagakerjaan', 'Internal'),
	(13, 'Direktur Penanggulangan Kemiskinan dan Kesejahteraan Sosial', 'Internal'),
	(14, 'Direktur Tenaga Kerja dan Perluasan Kesempatan Kerja', 'Internal'),
	(15, 'Direktur Pengembangan Usaha Kecil, Menengah dan Koperasi', 'Internal'),
	(16, 'Direktur Perencanaan Kependudukan dan Perlindungan Sosial', 'Internal'),
	(17, 'Deputi Bidang Ekonomi', 'Internal'),
	(18, 'Direktur Perencanaan Makro dan Analisis Statistik', 'Internal'),
	(19, 'Direktur Keuangan Negara dan Analisis Moneter', 'Internal'),
	(20, 'Direktur Jasa Keuangan dan BUMN', 'Internal'),
	(21, 'Direktur Perdagangan, Investasi dan Kerjasama Ekonomi Internasional', 'Internal'),
	(22, 'Direktur Industri, Pariwisata dan Ekonomi Kreatif', 'Internal'),
	(23, 'Deputi Bidang Kemaritiman dan Sumber Daya Alam', 'Internal'),
	(24, 'Direktur Pangan dan Pertanian', 'Internal'),
	(25, 'Direktur Kehutanan dan Konservasi Sumber Daya Air', 'Internal'),
	(26, 'Direktur Kelautan dan Perikanan', 'Internal'),
	(27, 'Direktur Sumber Daya Energi, Mineral dan Pertambangan', 'Internal'),
	(28, 'Direktur Lingkungan Hidup', 'Internal'),
	(29, 'Deputi Bidang Sarana dan Prasarana', 'Internal'),
	(30, 'Direktur Pengairan dan Irigasi', 'Internal'),
	(31, 'Direktur Transportasi', 'Internal'),
	(32, 'Direktur Energi, Telekomunikasi dan Informatika', 'Internal'),
	(33, 'Direktur Kerjasama Pemerintah Swasta dan Rancang Bangun', 'Internal'),
	(34, 'Deputi Bidang Pengembangan Regional', 'Internal'),
	(35, 'Direktur Pengembangan Wilayah dan Kawasan', 'Internal'),
	(36, 'Direktur Daerah Tertinggal, Transmigrasi dan Perdesaan', 'Internal'),
	(37, 'Direktur Otonomi Daerah', 'Internal'),
	(38, 'Direktur Perkotaan, Perumahan dan Permukiman', 'Internal'),
	(39, 'Direktur Tata Ruang dan Pertanahan', 'Internal'),
	(40, 'Deputi Bidang Pendanaan Pembangunan', 'Internal'),
	(41, 'Direktur Perencanaan dan Pengembangan Pendanaan Pembangunan', 'Internal'),
	(43, 'Menteri PPN/Kepala Bappenas', 'Internal'),
	(44, 'Direktur Alokasi Pendanaan Pembangunan', 'Internal'),
	(45, 'Direktur Pendanaan Luar Negeri Bilateral', 'Internal'),
	(46, 'Direktur Pendanaan Luar Negeri Multilateral', 'Internal'),
	(47, 'Direktur Sistem dan Prosedur Pendanaan Pembangunan', 'Internal'),
	(48, 'Deputi Bidang Pemantauan, Evaluasi dan Pengendalian Pembangunan', 'Internal'),
	(49, 'Direktur Pemantauan, Evaluasi dan Pengendalian Pembangunan Daerah', 'Internal'),
	(50, 'Direktur Pemantauan, Evaluasi dan Pengendalian Pembangunan Sektoral', 'Internal'),
	(51, 'Direktur Sistem dan Pelaporan Pemantauan, Evaluasi dan Pengendalian Pembangunan', 'Internal'),
	(52, 'Sekretaris Kementerian PPN/Sekretaris Utama Bappenas', 'Internal'),
	(53, 'Kepala Biro Hubungan Masyarakat dan Tata Usaha Pimpinan', 'Internal'),
	(54, 'Kepala Biro Sumber Daya Manusia', 'Internal'),
	(55, 'Kepala Biro Hukum', 'Internal'),
	(56, 'Kepala Biro Umum', 'Internal'),
	(57, 'Kepala Biro Perencanaan, Organisasi dan Tata Laksana', 'Internal'),
	(58, 'Kepala Pusat Pembinaan Pendidikan dan Pelatihan Perencana', 'Internal'),
	(59, 'Kepala Pusat Data dan Informasi Perencanaan Pembangunan', 'Internal'),
	(60, 'Kepala Pusat Analisis Kebijakan dan Kinerja', 'Internal'),
	(61, 'Inspektorat Utama', 'Internal'),
	(62, 'Inspektorat Bidang Administrasi Umum', 'Internal'),
	(63, 'Inspektorat Bidang Kinerja Kelembagaan', 'Internal'),
	(64, 'Staf Ahli Bidang Sinergi Ekonomi dan Pembiayaan', 'Internal'),
	(65, 'Staf Ahli Bidang Sosial dan Penanggulangan Kemiskinan', 'Internal'),
	(66, 'Staf Ahli Bidang Hubungan Kelembagaan', 'Internal'),
	(67, 'Staf Ahli Bidang Pembangunan Sektor Unggulan dan Infrastruktur', 'Internal'),
	(68, 'Staf Ahli Bidang Pemerataan dan Kewilayahan', 'Internal'),
	(69, 'Kementerian Pertahanan', 'External'),
	(70, 'Badan Intelijen Negara', 'External'),
	(71, 'Lembaga Ketahanan Nasional', 'External'),
	(72, 'Badan Keamanan Laut', 'External'),
	(73, 'Kepolisian Negara Republik Indonesia', 'External'),
	(74, 'Badan Siber dan Sandi Negara', 'External'),
	(75, 'Badan Narkotika Nasional', 'External'),
	(76, 'Dewan Ketahanan Nasional', 'External'),
	(77, 'Lainnya', 'External');
/*!40000 ALTER TABLE `alamat` ENABLE KEYS */;

-- Dumping structure for table db_budgeting.article
DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id_article` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `title` varchar(200) NOT NULL,
  `title_eng` varchar(200) NOT NULL,
  `url_article` varchar(100) NOT NULL,
  `headline` enum('Y','N') NOT NULL DEFAULT 'N',
  `running_news` enum('Y','N') NOT NULL DEFAULT 'N',
  `isi_article` longtext NOT NULL,
  `isi_article_eng` longtext NOT NULL,
  `hari` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `video` varchar(100) NOT NULL,
  `poster_video` varchar(100) NOT NULL,
  `embbed_video` varchar(500) NOT NULL,
  `video_active` enum('U','E','D') NOT NULL DEFAULT 'D',
  `gen_code_article` varchar(200) NOT NULL,
  `gen_code_photo` varchar(200) NOT NULL,
  `gen_code_video` varchar(200) NOT NULL,
  `status` enum('Y','N') NOT NULL DEFAULT 'Y',
  `dibaca` int(5) NOT NULL,
  `id_menu` int(100) NOT NULL,
  `id_main_menu` int(11) NOT NULL,
  `menu_stats` varchar(100) NOT NULL,
  `document` varchar(500) NOT NULL,
  `komentar_status` enum('Y','N') NOT NULL DEFAULT 'N',
  `tag` text NOT NULL,
  PRIMARY KEY (`id_article`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Dumping data for table db_budgeting.article: 4 rows
DELETE FROM `article`;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` (`id_article`, `username`, `title`, `title_eng`, `url_article`, `headline`, `running_news`, `isi_article`, `isi_article_eng`, `hari`, `tanggal`, `jam`, `gambar`, `video`, `poster_video`, `embbed_video`, `video_active`, `gen_code_article`, `gen_code_photo`, `gen_code_video`, `status`, `dibaca`, `id_menu`, `id_main_menu`, `menu_stats`, `document`, `komentar_status`, `tag`) VALUES
	(11, '26', 'BAPPENAS MENGAPRESIASI UPAYA PT PAL YANG FOKUS PADA INFRASTRUKTUR PEMELIHARAAN KAPAL', '', 'bappenas-mengapresiasi-upaya-pt-pal-yang-fokus-pada-infrastruktur-pemeliharaan-kapal', 'Y', 'Y', '<p>Menteri Perencanaan Pembangunan Nasional/Kepala Badan Perencanaan dan Pembangunan Nasional (Bappenas) Bambang Brodjonegoro mengapresiasi upaya PT PAL Indonesia yang fokus pada infrastruktur pemeliharaan kapal karena mengurangi pengeluaran devisa ke luar negeri.</p>\r\n\r\n<p>&ldquo;Kami mengapresiasi jajaran direksi PT PAL Indonesia yang sudah memperbesar fokus pada pemeliharaan kapal, sebab pemeliharaan adalah bagian terpenting dari industri kapal itu sendiri,&rdquo; kata Bambang di Surabaya, Kamis.</p>\r\n\r\n<p>Bambang yang ditemui usai memantau sejumlah proyek pengerjaan kapal di Dermaga Timur PT PAL Indonesia Surabaya mengakui pemeliharaan kapal biasanya dilakukan ke luar negeri, namun dengan kemampuan PT PAL Indonesia saat ini, hal itu mampu dilakukan di dalam negeri.</p>\r\n\r\n<p>&ldquo;Ini artinya bisa juga menjadi pemasukan buat PT PAL Indonesia, sekaligus mengurangi pengeluaran devisa ke luar negeri,&rdquo; katanya.</p>\r\n\r\n<p>Bambang mencontohkan, salah satunya pemeliharaan standar kapal selam yang dilakukan lima tahun sekali ke luar negeri, yakni mengeluarkan biaya sekitar 40 juta dolar AS.</p>\r\n\r\n<p>&ldquo;Dengan adanya upaya PT PAL Indonesia hal itu bisa dilakukan di dalam negeri, dan menjadi pemasukan bagi PT PAL Indonesia, tentunya dengan biaya di bawah 40 juta dolar AS,&rdquo; katanya.</p>\r\n\r\n<p>Namun demikian, kata Bambang, hal yang utama dalam konsep pemeliharaan adalah teknologinya yang bisa dikembangkan di dalam negeri, sebab penguasaan teknologi tentunya lebih mahal dibanding pemeliharaan itu sendiri.</p>\r\n\r\n<p>&ldquo;Dengan penguasaan teknologi, ke depan pasti ada peluang pasar tentunya bukan hanya untuk kapal selam saja melainkan kapal sejenis lainnya, dan pasar bagus ini bisa untuk wilayah ASEAN karena jangkauannya sangat dekat,&rdquo; katanya.</p>\r\n\r\n<p>Dalam kesempatan kunjungan ke PT PAL Indonesia, Bambang juga melakukan beberapa pantauan ke galangan kapal selam dan melihat beberapa proses pengerjaan kapal perang pesanan kementerian pertahanan.</p>\r\n\r\n<p>&ldquo;Kunjungan ini untuk memastikan program prioritas jangka menengah, salah satunya pemberdayaan industri pertahanan dan itu salah satunya adalah PT PAL Indonesia,&rdquo; katanya.</p>\r\n\r\n<p>Bambang optimistis dengan capaian PT PAL selama ini Indonesia ke depan tidak akan lagi tergantung kepada luar negeri, karena mampu melakukan pemeliharaan dan pembuatan kapal secara mandiri.</p>\r\n\r\n<p>Sementara itu Direktur Pembangunan Kapal Turitan Indaryo mengatakan hal yang sama terkait optimisme capaian PT PAL Indonesia ke depan, sebab beberapa pesanan kapal luar negeri telah dilakukan secara tepat waktu.</p>\r\n\r\n<p>&ldquo;Selama ini, kami sangat mengutamakan kualitas dan kecepatan produksi, dan sangat komitmen dalam menghasilkan produk kapal yang tepat mutu dan tepat guna,&rdquo; katanya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>sumber :&nbsp;lancercell.com</p>\r\n', '', '', '2018-01-26', '15:45:07', '1526439037.jpg', '', '', '', 'D', '', '', '', 'Y', 0, 0, 0, '', '', 'Y', ''),
	(8, 'primadiayuemunda', 'Rencanakan Sistem Nasional, Bappenas RI Pelajari Sistem Penanganan Cepat Kota Surabaya', '', 'rencanakan-sistem-nasional,-bappenas-ri-pelajari-sistem-penanganan-cepat-kota-surabaya', 'Y', 'Y', '<p>Dinkominfo-Surabaya merupakan kota besar lengkap dengan sejumlah permasalahan yang mengikutinya. Tak hanya bencana alam, namun juga masalah sosial antar masyarakat. Banyak kejadian-kejadian gawat darurat yang terjadi, dan tentunya harus langsung ditangani. Oleh sebab itu, penanganan cepat atau quick response menjadi sebuah kebutuhan.&nbsp;</p>\r\n\r\n<p>Kamis (26/10), bertempat di Ruang Rapat Dinas Komunikasi dan Informatika, rombongan dari Direktorat Pertahanan dan Keamanan Badan Perencanaan Pembangunan Nasional (Bappenas) Republik Indonesia datang berkunjung untuk mempelajari sistem penanganan cepat yang telah diimplementasikan oleh Kota Surabaya.</p>\r\n\r\n<p>Maharani Putri, ketua rombongan dari Bappenas RI dalam sambutannya mengatakan bahwa maksud kedatangan ke Kota Surabaya adalah untuk mempelajari tentang sistem quick response, yang nantinya akan digunakan dalam perencanaan untuk program nasional. Ia juga mengatakan bahwa Bappenas RI akan membuat rencana pembangunan sistem quick response tunggal yang akan digunakan secara nasional.</p>\r\n\r\n<p>Sementara itu, Cahyo Utomo, Sekretaris Dinas Komunikasi dan Informatika Kota Surabaya menjelaskan bahwa sebelum adanya sistem quick response 112, Pemerintah Kota Surabaya mendapatkan laporan atau keluhan tentang kejadian apa saja yang terjadi di Kota Surabaya melalui media radio dan juga melalui saluran komunikasi Pemkot Surabaya yang disebut Media Center. Namun, penanganannya dirasa masih perlu untuk disempurnakan lagi. Maka, dibuatlah suatu sistem tunggal yang menangani kejadian kegawatdaruratan dengan menggunakan nomor tunggal 112.&nbsp;</p>\r\n\r\n<p>Cahyo juga menjelaskan bahwa semua petugas di lapangan terlacak dan dapat dimonitor lewat aplilasi Siaga. Aplikasi tersebut juga menunjukkan lokasi-lokasi vital terdekat yang bisa digunakan ketika ada suatu kejadian. Ia juga menambahkan bahwa nomor 112 selalu aktif selama 24 jam setiap hari untuk seluruh masyarakat Surabaya. (noi/ynu)&nbsp;</p>\r\n\r\n<p>sumber: surabaya.go.id</p>\r\n', '', '', '2017-10-26', '11:05:19', '1526437901.jpg', '', '', '', 'D', '', '', '', 'Y', 0, 0, 0, '', '', 'N', ''),
	(9, 'primadiayuemunda', 'Tim Bappenas RI Kunjungi Lanud Sultan Hasanuddin', '', 'tim-bappenas-ri-kunjungi-lanud-sultan-hasanuddin', 'Y', 'Y', '<p><strong>TRIBUN-TIMUR.COM, MAKASSAR -</strong>&nbsp;Komandan Lanud Sultan Hasanuddin Marsma TNI Bowo Budiarto, menerima kunjungan lapangan Tim&nbsp;<a href="``http://makassar.tribunnews.com/tag/bappenas``">Bappenas</a>&nbsp;RI yang dipimpin langsung Koordinator Tim Fauzal Muslim beserta rombongan, di ruang Rapat Mako Lanud Sultan Hasanuddin,&nbsp;<a href="``http://makassar.tribunnews.com/tag/makassar``">Makassar</a>, Kamis (13/7/2017).</p>\r\n\r\n<p>Pada acara penerimaan yang berlangsung sekitar satu jam tersebut, diawali sambutan Komandan Lanud Sultan Hasanuddin, lalu paparan dari Tim&nbsp;<a href="``http://makassar.tribunnews.com/tag/bappenas``">Bappenas</a>&nbsp;yang disampaikan Fauzul Muslim.</p>\r\n\r\n<p>Selanjutnya acara ditutup dengan diskusi yang dilanjutkan kunjungan ke beberapa satuan jajaran Lanud Sultan Hasanuddin oleh Tim&nbsp;<a href="``http://makassar.tribunnews.com/tag/bappenas``">Bappenas</a>, di antaranya Skadron Udara 11 Wing 5 sebagai home base pesawat tempur Sukhoi SU-30 MK2 dan SU-27 SKM, Skadron Teknik 044 yang bertugas untuk pemeliharaan pesawat tingkat sedang, serta beberapa satuan lainnya.</p>\r\n\r\n<p>Komandan Lanud Sultan Hasanuddin Marsma TNI Bowo Budiarto, dalam sambutannya menyampaikan kedatangan Tim&nbsp;<a href="``http://makassar.tribunnews.com/tag/bappenas``">Bappenas</a>&nbsp;RI ke Lanud Sultan Hasanuddin merupakan sebuah kehormatan.</p>\r\n\r\n<p>&quot;Selain untuk ajang bersilaturahmi, kami juga sangat mendukung apa yang dilaksanakan Tim&nbsp;<a href="``http://makassar.tribunnews.com/tag/bappenas``">Bappenas</a>&nbsp;RI di Lanud Sultan Hasanuddin,&quot;katanya.</p>\r\n\r\n<p>&quot;Selaku Komandan Lanud Sultan Hasanuddin maupun pribadi, saya menyambut positif kegiatan ini, mengingat kesiapan pesawat tempur Sukhoi ini sangat penting dalam rangka mendukung tugas operasi, sekaligus meningkatkan kesiapan pelaksanaan pembangunan nasional khususnya bidang pertahanan serta pembangunan minimum essential force (MEF) tahap II,&quot; tambahnya.</p>\r\n\r\n<p>Sementara Tim&nbsp;<a href="``http://makassar.tribunnews.com/tag/bappenas``">Bappenas</a>&nbsp;RI dalam paparannya yang disampaikan Fauzul Muslim, mengatakan kunjungan lapangan dan diskusi ini diperlukan untuk monitoring dan evaluasi untuk melengkapi data tentang kesiapan pesawat tempur Sukhoi dengan beberapa permasalahan, ancaman serta tantangan di lapangan, dukungan terhadap operating maintenance cost.</p>\r\n\r\n<p>&quot;Sekaligus mengurangi kemungkinan terjadinya kesalahan dalam penyusunan data teknis, untuk mengetahui sekaligus memastikan bahwa data-data teknis tersebut secara kuantitatif dan kualitatif, agar bisa bermanfaat dalam mengakses data apabila data-data tersebut diperlukan nantinya. (*)</p>\r\n\r\n<p>Sumber:&nbsp;<a href="``http://makassar.tribunnews.com/2017/07/14/tim-bappenas-ri-kunjungi-lanud-sultan-hadanuddin``">http://makassar.tribunnews.com/2017/07/14/tim-bappenas-ri-kunjungi-lanud-sultan-hadanuddin</a>.</p>\r\n', '', '', '2017-07-14', '17:20:41', '1526438664.jpg', '', '', '', 'D', '', '', '', 'Y', 0, 0, 0, '', '', 'Y', ''),
	(10, '26', 'Tim Bappenas RI Kunjungi Lanud Sultan Hadanuddin   Artikel ini telah tayang di tribun-timur.com dengan judul Tim Bappenas RI Kunjungi Lanud Sultan Hadanuddin, http://makassar.tribunnews.com/2017/07/14', '', 'tim-bappenas-ri-kunjungi-lanud-sultan-hadanuddin---artikel-ini-telah-tayang-di-tribun-timur.com-deng', 'Y', 'Y', '<p><strong>TRIBUN-TIMUR.COM, MAKASSAR -</strong>&nbsp;Komandan Lanud Sultan Hasanuddin Marsma TNI Bowo Budiarto, menerima kunjungan lapangan Tim&nbsp;<a href="http://makassar.tribunnews.com/tag/bappenas">Bappenas</a>&nbsp;RI yang dipimpin langsung Koordinator Tim Fauzal Muslim beserta rombongan, di ruang Rapat Mako Lanud Sultan Hasanuddin,&nbsp;<a href="http://makassar.tribunnews.com/tag/makassar">Makassar</a>, Kamis (13/7/2017).</p>\r\n\r\n<p>Pada acara penerimaan yang berlangsung sekitar satu jam tersebut, diawali sambutan Komandan Lanud Sultan Hasanuddin, lalu paparan dari Tim&nbsp;<a href="http://makassar.tribunnews.com/tag/bappenas">Bappenas</a>&nbsp;yang disampaikan Fauzul Muslim.</p>\r\n\r\n<p>Selanjutnya acara ditutup dengan diskusi yang dilanjutkan kunjungan ke beberapa satuan jajaran Lanud Sultan Hasanuddin oleh Tim&nbsp;<a href="http://makassar.tribunnews.com/tag/bappenas">Bappenas</a>, di antaranya Skadron Udara 11 Wing 5 sebagai home base pesawat tempur Sukhoi SU-30 MK2 dan SU-27 SKM, Skadron Teknik 044 yang bertugas untuk pemeliharaan pesawat tingkat sedang, serta beberapa satuan lainnya.</p>\r\n\r\n<p>Komandan Lanud Sultan Hasanuddin Marsma TNI Bowo Budiarto, dalam sambutannya menyampaikan kedatangan Tim&nbsp;<a href="http://makassar.tribunnews.com/tag/bappenas">Bappenas</a>&nbsp;RI ke Lanud Sultan Hasanuddin merupakan sebuah kehormatan.</p>\r\n\r\n<p>&quot;Selain untuk ajang bersilaturahmi, kami juga sangat mendukung apa yang dilaksanakan Tim&nbsp;<a href="http://makassar.tribunnews.com/tag/bappenas">Bappenas</a>&nbsp;RI di Lanud Sultan Hasanuddin,&quot;katanya.</p>\r\n\r\n<p>&quot;Selaku Komandan Lanud Sultan Hasanuddin maupun pribadi, saya menyambut positif kegiatan ini, mengingat kesiapan pesawat tempur Sukhoi ini sangat penting dalam rangka mendukung tugas operasi, sekaligus meningkatkan kesiapan pelaksanaan pembangunan nasional khususnya bidang pertahanan serta pembangunan minimum essential force (MEF) tahap II,&quot; tambahnya.</p>\r\n\r\n<p>Sementara Tim&nbsp;<a href="http://makassar.tribunnews.com/tag/bappenas">Bappenas</a>&nbsp;RI dalam paparannya yang disampaikan Fauzul Muslim, mengatakan kunjungan lapangan dan diskusi ini diperlukan untuk monitoring dan evaluasi untuk melengkapi data tentang kesiapan pesawat tempur Sukhoi dengan beberapa permasalahan, ancaman serta tantangan di lapangan, dukungan terhadap operating maintenance cost.</p>\r\n\r\n<p>&quot;Sekaligus mengurangi kemungkinan terjadinya kesalahan dalam penyusunan data teknis, untuk mengetahui sekaligus memastikan bahwa data-data teknis tersebut secara kuantitatif dan kualitatif, agar bisa bermanfaat dalam mengakses data apabila data-data tersebut diperlukan nantinya. (*)</p>\r\n\r\n<p><br />\r\nSumber :&nbsp;<a href="http://makassar.tribunnews.com/2017/07/14/tim-bappenas-ri-kunjungi-lanud-sultan-hadanuddin">http://makassar.tribunnews.com/2017/07/14/tim-bappenas-ri-kunjungi-lanud-sultan-hadanuddin</a>.</p>\r\n', '', '', '2017-07-14', '17:20:24', '1526438755.jpg', '', '', '', 'D', '', '', '', 'Y', 0, 0, 0, '', '', 'Y', '');
/*!40000 ALTER TABLE `article` ENABLE KEYS */;

-- Dumping structure for table db_budgeting.disposisi
DROP TABLE IF EXISTS `disposisi`;
CREATE TABLE IF NOT EXISTS `disposisi` (
  `agenda_id` int(4) NOT NULL AUTO_INCREMENT,
  `agenda_no` varchar(30) NOT NULL,
  `agenda_tgl_surat` varchar(8) NOT NULL,
  `agenda_tgl_terima` date NOT NULL,
  `agenda_no_surat` varchar(50) NOT NULL,
  `agenda_tentang` varchar(254) NOT NULL,
  `agenda_file` varchar(1000) NOT NULL,
  `agenda_dari` varchar(200) NOT NULL,
  `agenda_ket` varchar(500) NOT NULL,
  `agenda_posisi` int(2) NOT NULL,
  `waktu_acara` varchar(8) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `Laporan` varchar(200) NOT NULL,
  `tingkat_surat` varchar(20) NOT NULL,
  `target` text NOT NULL,
  `target_selesai` date NOT NULL,
  `ringkasan_surat` text NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`agenda_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Dumping data for table db_budgeting.disposisi: ~11 rows (approximately)
DELETE FROM `disposisi`;
/*!40000 ALTER TABLE `disposisi` DISABLE KEYS */;
INSERT INTO `disposisi` (`agenda_id`, `agenda_no`, `agenda_tgl_surat`, `agenda_tgl_terima`, `agenda_no_surat`, `agenda_tentang`, `agenda_file`, `agenda_dari`, `agenda_ket`, `agenda_posisi`, `waktu_acara`, `kategori`, `Laporan`, `tingkat_surat`, `target`, `target_selesai`, `ringkasan_surat`, `status`) VALUES
	(1, '1/Dt.7.5/05/2018', '30052018', '2018-05-30', '145/S/212.25/B/5/18', 'Percobaan 1 Sistem Persuratan Direktorat Pertahanan dan Keamanan', '1527643574_1_Dt_7_5_05_2018.pdf', 'Dewan Ketahanan Nasional', '', 1, '', 'surat', '', 'BIASA', 'njajal', '0000-00-00', 'Percobaan 1 Sistem Persuratan Direktorat Pertahanan dan Keamanan', 0),
	(2, '2/Dt.7.5/05/2018', '08052018', '2018-05-30', '145/S/212.25/B/5/18', 'Percobaan 1', '1527654891_2_Dt_7_5_05_2018.pdf', 'Direktur Sistem dan Pelaporan Pemantauan, Evaluasi dan Pengendalian Pembangunan', '', 1, '', 'surat', '', 'BIASA', 'tolong dikerjakan', '2018-05-31', 'testing', 0),
	(3, '1084/Dt.7.5/06/2018', '06062018', '2018-06-07', '261/Dt.7.4.ND/06/2018', 'Permohonan Informasi Kegiatan Mitra K/L dalam RKP 2019 yang Mendukung Implementasi Cetak Biru ASEAN 2025', '1528342134_1084_Dt_7_5_06_2018.pdf', 'Direktur Politik Luar Negeri dan Kerjasama Pembangunan Internasional', '', 1, '', 'surat', '', 'BIASA', '', '0000-00-00', 'Pemberian Informasi Terkait Kegiatan-Kegiatan Mitra K/L dalam RKP 2019 setelah Trilateral Meeting  (TM) yang mendukung pelaksanaan Implementasi Cetak Biru ASEAN 2025\r\n\r\nPaling Lambat Jumat, 29 Juni 2018', 0),
	(4, '1/Dt.7.5/05/2018', '30052018', '2018-05-30', '145/S/212.25/B/5/18', 'Percobaan 1 Sistem Persuratan Direktorat Pertahanan dan Keamanan', '1527643574_1_Dt_7_5_05_2018.pdf', 'Dewan Ketahanan Nasional', '', 1, '', 'surat', '', 'BIASA', 'njajal', '0000-00-00', 'Percobaan 1 Sistem Persuratan Direktorat Pertahanan dan Keamanan', 0),
	(5, '1/Dt.7.5/05/2018', '30052018', '2018-05-30', '145/S/212.25/B/5/18', 'Percobaan 1 Sistem Persuratan Direktorat Pertahanan dan Keamanan', '1527643574_1_Dt_7_5_05_2018.pdf', 'Dewan Ketahanan Nasional', '', 1, '', 'surat', '', 'BIASA', 'njajal', '0000-00-00', 'Percobaan 1 Sistem Persuratan Direktorat Pertahanan dan Keamanan', 0),
	(6, '1/Dt.7.5/05/2018', '30052018', '2018-05-30', '145/S/212.25/B/5/18', 'Percobaan 1 Sistem Persuratan Direktorat Pertahanan dan Keamanan', '1527643574_1_Dt_7_5_05_2018.pdf', 'Dewan Ketahanan Nasional', '', 1, '', 'surat', '', 'BIASA', 'njajal', '0000-00-00', 'Percobaan 1 Sistem Persuratan Direktorat Pertahanan dan Keamanan', 0),
	(7, '1/Dt.7.5/05/2018', '30052018', '2018-05-30', '145/S/212.25/B/5/18', 'Percobaan 1 Sistem Persuratan Direktorat Pertahanan dan Keamanan', '1527643574_1_Dt_7_5_05_2018.pdf', 'Dewan Ketahanan Nasional', '', 1, '', 'surat', '', 'BIASA', 'njajal', '0000-00-00', 'Percobaan 1 Sistem Persuratan Direktorat Pertahanan dan Keamanan', 0),
	(8, '1/Dt.7.5/05/2018', '30052018', '2018-05-30', '145/S/212.25/B/5/18', 'Percobaan 1 Sistem Persuratan Direktorat Pertahanan dan Keamanan', '1527643574_1_Dt_7_5_05_2018.pdf', 'Dewan Ketahanan Nasional', '', 1, '', 'surat', '', 'BIASA', 'njajal', '0000-00-00', 'Percobaan 1 Sistem Persuratan Direktorat Pertahanan dan Keamanan', 0),
	(9, '1/Dt.7.5/05/2018', '30052018', '2018-05-30', '145/S/212.25/B/5/18', 'Percobaan 1 Sistem Persuratan Direktorat Pertahanan dan Keamanan', '1527643574_1_Dt_7_5_05_2018.pdf', 'Dewan Ketahanan Nasional', '', 1, '', 'surat', '', 'BIASA', 'njajal', '0000-00-00', 'Percobaan 1 Sistem Persuratan Direktorat Pertahanan dan Keamanan', 0),
	(10, '1/Dt.7.5/05/2018', '30052018', '2018-05-30', '145/S/212.25/B/5/18', 'Percobaan 1 Sistem Persuratan Direktorat Pertahanan dan Keamanan', '1527643574_1_Dt_7_5_05_2018.pdf', 'Dewan Ketahanan Nasional', '', 1, '', 'surat', '', 'BIASA', 'njajal', '0000-00-00', 'Percobaan 1 Sistem Persuratan Direktorat Pertahanan dan Keamanan', 0),
	(11, '2/Dt.7.5/09/2018', '21092018', '2018-09-21', '208/SA.04.ND/09/2018', 'zzzzzzzz', '1537522755_2_Dt_7_5_09_2018.pdf', 'Direktur Pendidikan dan Agama', '', 1, '', 'surat', '', 'BIASA', '', '0000-00-00', 'zzzzzzz', 0);
/*!40000 ALTER TABLE `disposisi` ENABLE KEYS */;

-- Dumping structure for table db_budgeting.disposisi_aksi
DROP TABLE IF EXISTS `disposisi_aksi`;
CREATE TABLE IF NOT EXISTS `disposisi_aksi` (
  `idaksi` int(11) NOT NULL AUTO_INCREMENT,
  `id_staf` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `catatan` int(11) NOT NULL,
  PRIMARY KEY (`idaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_budgeting.disposisi_aksi: ~0 rows (approximately)
DELETE FROM `disposisi_aksi`;
/*!40000 ALTER TABLE `disposisi_aksi` DISABLE KEYS */;
/*!40000 ALTER TABLE `disposisi_aksi` ENABLE KEYS */;

-- Dumping structure for table db_budgeting.disposisi_isi
DROP TABLE IF EXISTS `disposisi_isi`;
CREATE TABLE IF NOT EXISTS `disposisi_isi` (
  `isi_id` int(2) NOT NULL AUTO_INCREMENT,
  `isi_nama` varchar(100) NOT NULL,
  `isi_keterangan` varchar(100) NOT NULL,
  PRIMARY KEY (`isi_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- Dumping data for table db_budgeting.disposisi_isi: ~22 rows (approximately)
DELETE FROM `disposisi_isi`;
/*!40000 ALTER TABLE `disposisi_isi` DISABLE KEYS */;
INSERT INTO `disposisi_isi` (`isi_id`, `isi_nama`, `isi_keterangan`) VALUES
	(1, 'Dibahas Bersama', ''),
	(2, 'Diteliti/Check/Dipelajari', ''),
	(3, 'Tanggapan', ''),
	(4, 'Siapkan Bahan/Draft', ''),
	(5, 'Siapkan Jawaban Sesuai Ketentuan', ''),
	(6, 'Catat dan Kembalikan', ''),
	(7, 'Laporan/Laporkan', ''),
	(8, 'Dapat Disetujui', ''),
	(9, 'Harap Dipenuhi', ''),
	(10, 'Koordinasikan', ''),
	(11, 'Untuk Diketahui', ''),
	(12, 'Untuk Digunakan', ''),
	(13, 'Untuk Menjadi Bahan Perhatian', ''),
	(14, 'Untuk Dimonitor', ''),
	(15, 'File/Arsip', ''),
	(16, 'Diedarkan', ''),
	(17, 'Agendakan', ''),
	(18, 'Hadiri/Wakili', ''),
	(19, 'Untuk Diselesaikan', ''),
	(20, 'Proses Sesuai Prosedur', ''),
	(21, 'Perbaiki', ''),
	(22, 'Lainnya', '');
/*!40000 ALTER TABLE `disposisi_isi` ENABLE KEYS */;

-- Dumping structure for table db_budgeting.disposisi_tugas
DROP TABLE IF EXISTS `disposisi_tugas`;
CREATE TABLE IF NOT EXISTS `disposisi_tugas` (
  `tugas_id` int(5) NOT NULL AUTO_INCREMENT,
  `agenda_id` int(5) NOT NULL,
  `staf_id` int(5) NOT NULL,
  `read` int(11) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`tugas_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Dumping data for table db_budgeting.disposisi_tugas: ~2 rows (approximately)
DELETE FROM `disposisi_tugas`;
/*!40000 ALTER TABLE `disposisi_tugas` DISABLE KEYS */;
INSERT INTO `disposisi_tugas` (`tugas_id`, `agenda_id`, `staf_id`, `read`, `time`) VALUES
	(3, 2, 39, 0, '2018-05-30 14:05:00'),
	(12, 1, 39, 0, '2018-05-31 11:39:49');
/*!40000 ALTER TABLE `disposisi_tugas` ENABLE KEYS */;

-- Dumping structure for table db_budgeting.disposisi_tugas_isi
DROP TABLE IF EXISTS `disposisi_tugas_isi`;
CREATE TABLE IF NOT EXISTS `disposisi_tugas_isi` (
  `tugas_isi_id` int(5) NOT NULL AUTO_INCREMENT,
  `agenda_id` int(5) NOT NULL,
  `isi_id` int(5) NOT NULL,
  `ket` text,
  PRIMARY KEY (`tugas_isi_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- Dumping data for table db_budgeting.disposisi_tugas_isi: ~3 rows (approximately)
DELETE FROM `disposisi_tugas_isi`;
/*!40000 ALTER TABLE `disposisi_tugas_isi` DISABLE KEYS */;
INSERT INTO `disposisi_tugas_isi` (`tugas_isi_id`, `agenda_id`, `isi_id`, `ket`) VALUES
	(3, 2, 6, ''),
	(19, 1, 13, ''),
	(20, 1, 22, 'ok juga');
/*!40000 ALTER TABLE `disposisi_tugas_isi` ENABLE KEYS */;

-- Dumping structure for table db_budgeting.ic_bin
DROP TABLE IF EXISTS `ic_bin`;
CREATE TABLE IF NOT EXISTS `ic_bin` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `gid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `username` varchar(12) DEFAULT NULL,
  `title` text,
  `backgroundColor` varchar(11) NOT NULL,
  `borderColor` varchar(11) NOT NULL,
  `textColor` varchar(11) NOT NULL,
  `description` text,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `url` varchar(255) NOT NULL,
  `allDay` enum('true','false') NOT NULL DEFAULT 'false',
  `rendering` varchar(10) NOT NULL,
  `overlap` enum('true','false') NOT NULL DEFAULT 'true',
  `recurdays` int(4) NOT NULL,
  `recurend` date NOT NULL,
  `location` varchar(255) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `filename` varchar(250) NOT NULL,
  `pubDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table db_budgeting.ic_bin: ~0 rows (approximately)
DELETE FROM `ic_bin`;
/*!40000 ALTER TABLE `ic_bin` DISABLE KEYS */;
/*!40000 ALTER TABLE `ic_bin` ENABLE KEYS */;

-- Dumping structure for table db_budgeting.ic_captcha
DROP TABLE IF EXISTS `ic_captcha`;
CREATE TABLE IF NOT EXISTS `ic_captcha` (
  `captcha_id` bigint(13) unsigned NOT NULL AUTO_INCREMENT,
  `captcha_time` int(10) unsigned NOT NULL,
  `ip_address` varchar(16) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `word` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`captcha_id`),
  KEY `word` (`word`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table db_budgeting.ic_captcha: ~2 rows (approximately)
DELETE FROM `ic_captcha`;
/*!40000 ALTER TABLE `ic_captcha` DISABLE KEYS */;
INSERT INTO `ic_captcha` (`captcha_id`, `captcha_time`, `ip_address`, `word`) VALUES
	(76, 1517538916, '10.1.160.18', '42371915'),
	(77, 1517538963, '10.1.160.18', '60927130');
/*!40000 ALTER TABLE `ic_captcha` ENABLE KEYS */;

-- Dumping structure for table db_budgeting.ic_category
DROP TABLE IF EXISTS `ic_category`;
CREATE TABLE IF NOT EXISTS `ic_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `category_desc` text NOT NULL,
  `backgroundColor` varchar(11) NOT NULL,
  `borderColor` varchar(11) NOT NULL,
  `textColor` varchar(11) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

-- Dumping data for table db_budgeting.ic_category: ~15 rows (approximately)
DELETE FROM `ic_category`;
/*!40000 ALTER TABLE `ic_category` DISABLE KEYS */;
INSERT INTO `ic_category` (`category_id`, `username`, `category_name`, `category_desc`, `backgroundColor`, `borderColor`, `textColor`) VALUES
	(16, 'user', 'Sports', 'Sporting activities', '#db044f', '#ffffff', '#ffffff'),
	(17, 'admin', 'Meeting', 'All my business meeting', '#73db04', '#ffffff', '#ffffff'),
	(28, 'admin', 'Hours', 'Daily hours', '#05b0dc', '#ffffff', '#ffffff'),
	(31, 'admin', 'Activities', 'Sporting activities', '#0335db', '#ffffff', '#ffffff'),
	(34, 'user', 'Meeting', 'Business Meeting', '#2fdb04', '#ffffff', '#ffffff'),
	(35, 'user', 'Installations', 'Building installations', '#dba204', '#ff0000', '#ffffff'),
	(36, 'Wahyu', 'meeting', 'meeting', '#05b0dc', '#ffffff', '#ffffff'),
	(37, 'Helena', 'Rapat', 'Rapat', '#05b0dc', '#ffffff', '#ffffff'),
	(38, 'Lora', 'Meeting', 'Meeting', '#05b0dc', '#ffffff', '#ffffff'),
	(39, 'Rizky', 'meeting', 'meeting', '#598500', '#ffffff', '#ffffff'),
	(40, 'Bayu', 'Meeting', 'Meeting', '#05b0dc', '#ffffff', '#ffffff'),
	(41, 'Suswanto', 'meeting', 'aaa', '#098500', '#ffffff', '#ffffff'),
	(42, 'Yati', 'meeting', '---', '#28009e', '#ffffff', '#ffffff'),
	(43, 'Lora', 'Umum', 'Umum', '#ff8fdf', '#ffffff', '#ffffff'),
	(44, 'Fara', 'meeting', 'meeting', '#05b0dc', '#ffffff', '#ffffff');
/*!40000 ALTER TABLE `ic_category` ENABLE KEYS */;

-- Dumping structure for table db_budgeting.ic_events
DROP TABLE IF EXISTS `ic_events`;
CREATE TABLE IF NOT EXISTS `ic_events` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `gid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `title` text,
  `backgroundColor` varchar(11) NOT NULL,
  `borderColor` varchar(11) NOT NULL,
  `textColor` varchar(11) NOT NULL,
  `description` text,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `url` varchar(255) NOT NULL,
  `allDay` enum('true','false') NOT NULL DEFAULT 'false',
  `rendering` varchar(10) NOT NULL,
  `overlap` enum('true','false') NOT NULL DEFAULT 'true',
  `recurdays` int(4) NOT NULL,
  `recurend` date NOT NULL,
  `location` varchar(255) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `filename` varchar(250) NOT NULL,
  `pubDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table db_budgeting.ic_events: ~0 rows (approximately)
DELETE FROM `ic_events`;
/*!40000 ALTER TABLE `ic_events` DISABLE KEYS */;
/*!40000 ALTER TABLE `ic_events` ENABLE KEYS */;

-- Dumping structure for table db_budgeting.ic_eventsources
DROP TABLE IF EXISTS `ic_eventsources`;
CREATE TABLE IF NOT EXISTS `ic_eventsources` (
  `source_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `source_name` varchar(90) NOT NULL,
  `source_url` varchar(255) NOT NULL,
  PRIMARY KEY (`source_id`),
  UNIQUE KEY `source_id` (`source_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- Dumping data for table db_budgeting.ic_eventsources: ~6 rows (approximately)
DELETE FROM `ic_eventsources`;
/*!40000 ALTER TABLE `ic_eventsources` DISABLE KEYS */;
INSERT INTO `ic_eventsources` (`source_id`, `username`, `source_name`, `source_url`) VALUES
	(7, 'user', 'Canadian Holidays', 'canadian__en@holiday.calendar.google.com'),
	(8, 'admin', 'JM Holidays', 'http://www.google.com/calendar/feeds/jm__en@holiday.calendar.google.com/public/basic'),
	(9, 'admin', 'USA Holidays', 'usa__en@holiday.calendar.google.com'),
	(10, 'user', 'Jamaican Holidays', 'jm__en@holiday.calendar.google.com'),
	(11, 'user', 'Shared GCal', 'necb6q98eqdql2oa0qnl6delig@group.calendar.google.com'),
	(12, 'admin', 'Canadian Holidays', 'canadian__en@holiday.calendar.google.com');
/*!40000 ALTER TABLE `ic_eventsources` ENABLE KEYS */;

-- Dumping structure for table db_budgeting.ic_eventsqueues
DROP TABLE IF EXISTS `ic_eventsqueues`;
CREATE TABLE IF NOT EXISTS `ic_eventsqueues` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `gid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `username` varchar(12) DEFAULT NULL,
  `title` text,
  `backgroundColor` varchar(11) NOT NULL,
  `borderColor` varchar(11) NOT NULL,
  `textColor` varchar(11) NOT NULL,
  `description` text,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `url` varchar(255) NOT NULL,
  `allDay` enum('true','false') NOT NULL DEFAULT 'true',
  `rendering` varchar(10) NOT NULL,
  `overlap` enum('true','false') NOT NULL DEFAULT 'true',
  `recurdays` int(4) NOT NULL,
  `recurend` date NOT NULL,
  `location` varchar(255) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `filename` varchar(250) NOT NULL,
  `pubDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`eid`),
  UNIQUE KEY `eid` (`eid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table db_budgeting.ic_eventsqueues: ~0 rows (approximately)
DELETE FROM `ic_eventsqueues`;
/*!40000 ALTER TABLE `ic_eventsqueues` DISABLE KEYS */;
/*!40000 ALTER TABLE `ic_eventsqueues` ENABLE KEYS */;

-- Dumping structure for table db_budgeting.ic_groups
DROP TABLE IF EXISTS `ic_groups`;
CREATE TABLE IF NOT EXISTS `ic_groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table db_budgeting.ic_groups: ~5 rows (approximately)
DELETE FROM `ic_groups`;
/*!40000 ALTER TABLE `ic_groups` DISABLE KEYS */;
INSERT INTO `ic_groups` (`id`, `name`, `description`) VALUES
	(1, 'admin', 'Sekretaris'),
	(2, 'members', 'General User'),
	(3, 'direktur', 'Direktur'),
	(4, 'kasubdit', 'Kasubdit'),
	(5, 'lainnya', 'Lainnya');
/*!40000 ALTER TABLE `ic_groups` ENABLE KEYS */;

-- Dumping structure for table db_budgeting.ic_login_attempts
DROP TABLE IF EXISTS `ic_login_attempts`;
CREATE TABLE IF NOT EXISTS `ic_login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table db_budgeting.ic_login_attempts: ~1 rows (approximately)
DELETE FROM `ic_login_attempts`;
/*!40000 ALTER TABLE `ic_login_attempts` DISABLE KEYS */;
INSERT INTO `ic_login_attempts` (`id`, `ip_address`, `login`, `time`) VALUES
	(1, '::1', 'admin@admin.com', 1548991326);
/*!40000 ALTER TABLE `ic_login_attempts` ENABLE KEYS */;

-- Dumping structure for table db_budgeting.ic_markers
DROP TABLE IF EXISTS `ic_markers`;
CREATE TABLE IF NOT EXISTS `ic_markers` (
  `markers_id` int(11) NOT NULL AUTO_INCREMENT,
  `markers_category_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `markers_name` varchar(45) NOT NULL,
  `markers_logo` varchar(80) NOT NULL,
  `markers_address` varchar(255) NOT NULL,
  `markers_lat` double NOT NULL,
  `markers_lng` double NOT NULL,
  `markers_url` varchar(110) NOT NULL,
  `markers_desc` text NOT NULL,
  `pubDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`markers_id`),
  UNIQUE KEY `event_id` (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table db_budgeting.ic_markers: ~0 rows (approximately)
DELETE FROM `ic_markers`;
/*!40000 ALTER TABLE `ic_markers` DISABLE KEYS */;
/*!40000 ALTER TABLE `ic_markers` ENABLE KEYS */;

-- Dumping structure for table db_budgeting.ic_pages
DROP TABLE IF EXISTS `ic_pages`;
CREATE TABLE IF NOT EXISTS `ic_pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(25) NOT NULL,
  `title` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `seo` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `meta_keywords` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `access` int(3) NOT NULL,
  `pubdates` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table db_budgeting.ic_pages: ~3 rows (approximately)
DELETE FROM `ic_pages`;
/*!40000 ALTER TABLE `ic_pages` DISABLE KEYS */;
INSERT INTO `ic_pages` (`id`, `uname`, `title`, `seo`, `content`, `meta_keywords`, `meta_description`, `access`, `pubdates`) VALUES
	(5, 'admin', 'Members page', 'members-page', '<p>Members page</p>', 'cifullcalendar,scheduler', 'CIFullCalendar is a responsive web application that gives you the “Super Saiyan Fusion” power of organizing, planning, grouping and sharing your event', 2, '2016-03-30 03:01:10'),
	(6, 'admin', 'public page', 'public-page', '<p>Hi public</p>', 'cifullcalendar,scheduler', 'CIFullCalendar is a responsive web application that gives you the “Super Saiyan Fusion” power of organizing, planning, grouping and sharing your event', 0, '2016-03-30 03:00:54'),
	(7, 'admin', 'admin page', 'admin-page', 'this is administrator page', 'cifullcalendar,scheduler', 'CIFullCalendar is a responsive web application that gives you the “Super Saiyan Fusion” power of organizing, planning, grouping and sharing your event', 1, '2016-03-30 03:02:12');
/*!40000 ALTER TABLE `ic_pages` ENABLE KEYS */;

-- Dumping structure for table db_budgeting.ic_session
DROP TABLE IF EXISTS `ic_session`;
CREATE TABLE IF NOT EXISTS `ic_session` (
  `session_id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `user_agent` varchar(150) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` blob NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `ci_sessions_timestamp` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_budgeting.ic_session: ~4 rows (approximately)
DELETE FROM `ic_session`;
/*!40000 ALTER TABLE `ic_session` DISABLE KEYS */;
INSERT INTO `ic_session` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
	('b9335acc01c4c2159a21a440504b5ea1', '10.1.160.18', 'Mozilla/4.0 (compatible;)', 1533620068, _binary ''),
	('c2c2c806a31b2929d3fa9b030141213d', '10.1.160.18', 'Mozilla/4.0 (compatible;)', 1537244038, _binary ''),
	('e0b72a50b9dbbec285b138d3915aea26', '10.1.160.18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.84 Safari/537.36', 1533622939, _binary ''),
	('fcd540173206e42a1e784ccf888cda74', '10.1.160.18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Safari/537.36 OPR/', 1537244038, _binary 0x613A363A7B733A393A22757365725F64617461223B733A303A22223B733A383A226964656E74697479223B733A31353A2261646D696E4061646D696E2E636F6D223B733A353A22656D61696C223B733A31353A2261646D696E4061646D696E2E636F6D223B733A373A22757365725F6964223B733A323A223332223B733A31343A226F6C645F6C6173745F6C6F67696E223B733A31303A2231353337323430383036223B733A393A226C6173745F70616765223B733A373A2270726F66696C65223B7D);
/*!40000 ALTER TABLE `ic_session` ENABLE KEYS */;

-- Dumping structure for table db_budgeting.ic_setting
DROP TABLE IF EXISTS `ic_setting`;
CREATE TABLE IF NOT EXISTS `ic_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(2048) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table db_budgeting.ic_setting: ~43 rows (approximately)
DELETE FROM `ic_setting`;
/*!40000 ALTER TABLE `ic_setting` DISABLE KEYS */;
INSERT INTO `ic_setting` (`id`, `name`, `value`) VALUES
	(1, 'site_name', 'Direktorat Pertahanan dan Keamanan'),
	(2, 'site_logo', 'logo.png'),
	(3, 'site_email', 'rizkymaulanaichsan@hotmail.com'),
	(4, 'site_timezone', 'Asia/Jakarta'),
	(5, 'site_language', 'en'),
	(6, 'site_latitude', '18.473790323586805'),
	(7, 'site_longitude', '-77.92278243655392'),
	(8, 'meta_description', 'CIFullCalendar v2 is a server-side dynamic web application that is responsive to any layout of a viewing screen. The “Super Saiyan Fusion” power of CIFullCalendar allows users to organize, plan and share events to everyone.'),
	(9, 'meta_keywords', 'cifullcalendar, agenda, meeting, personal organizer, fullcalendar, codeigniter, jquery, scheduler, cms, maps, location'),
	(10, 'current_theme', 'bootlaces'),
	(11, 'captcha_verification', '1'),
	(12, 'debug', '1'),
	(13, 'profile_max_upload_width', '1200'),
	(14, 'profile_max_upload_height', '1200'),
	(15, 'profile_max_upload_filesize', '25000'),
	(16, 'profile_allowed_extensions', 'gif|jpg|png'),
	(17, 'attach_max_size', '150096'),
	(18, 'attach_allowed_extension', 'gif|jpg|png|docx|pptx|ppt|xls|accdb|psd|txt|pdf|zip|ics'),
	(19, 'sync_max_size', '4096'),
	(20, 'sync_allowed_extension', 'ics|ical'),
	(21, 'sync_path_location', './assets/ics/'),
	(22, 'cal_defaultview', 'month'),
	(23, 'cal_header_left', 'month,agendaWeek,agendaDay,list'),
	(24, 'cal_header_center', 'title'),
	(25, 'cal_header_right', 'prev,next,today'),
	(26, 'cal_editable', 'true'),
	(27, 'cal_isrtl', 'false'),
	(28, 'cal_weeknumbers', 'true'),
	(29, 'cal_eventlimit', 'true'),
	(30, 'cal_alldayslot', 'false'),
	(31, 'cal_hiddendays', '-1'),
	(32, 'cal_slotduration', '01:30:00'),
	(34, 'cal_firstday', '1'),
	(36, 'cal_businessdays', ''),
	(37, 'cal_businessstart', '07:00'),
	(38, 'cal_businessend', '21:59'),
	(39, 'cal_aspectratio', '1.35'),
	(40, 'cal_slotlabeling', 'false'),
	(41, 'cal_slotlabelformat', 'HH:mm'),
	(42, 'cal_mintime', '00:00:00'),
	(43, 'cal_maxtime', '24:00:00'),
	(44, 'current_version', '2.6.5.0'),
	(45, 'cal_apikey', 'AIzaSyC_8gKr-UIdbPGxnG5w2vf5cKnrfGlyFGA');
/*!40000 ALTER TABLE `ic_setting` ENABLE KEYS */;

-- Dumping structure for table db_budgeting.ic_tasks
DROP TABLE IF EXISTS `ic_tasks`;
CREATE TABLE IF NOT EXISTS `ic_tasks` (
  `task_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `event_id` int(11) unsigned NOT NULL,
  `position` int(5) NOT NULL,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `code` int(10) unsigned NOT NULL,
  `status` tinyint(4) unsigned NOT NULL,
  `priority` tinyint(4) unsigned NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `filename` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`task_id`,`user_id`) USING BTREE,
  KEY `status` (`event_id`,`status`),
  KEY `parent` (`parent_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Dumping data for table db_budgeting.ic_tasks: ~4 rows (approximately)
DELETE FROM `ic_tasks`;
/*!40000 ALTER TABLE `ic_tasks` DISABLE KEYS */;
INSERT INTO `ic_tasks` (`task_id`, `event_id`, `position`, `parent_id`, `user_id`, `code`, `status`, `priority`, `title`, `description`, `filename`, `date_created`) VALUES
	(1, 3928147, 2, NULL, 1, 1, 2, 2, 'test run', '', '', '2016-04-05 02:01:53'),
	(2, 3708916, 3, NULL, 1, 0, 1, 1, 'test', '', '', '2016-04-05 02:16:38'),
	(3, 5796018, 4, 0, 1, 0, 1, 2, 'My new Task', '', '', '2016-04-07 23:49:33'),
	(4, 1907624, 1, NULL, 1, 1, 1, 1, 'Another Tasks', 'Hello World', '', '2016-04-08 00:08:10');
/*!40000 ALTER TABLE `ic_tasks` ENABLE KEYS */;

-- Dumping structure for table db_budgeting.ic_tasks_logs
DROP TABLE IF EXISTS `ic_tasks_logs`;
CREATE TABLE IF NOT EXISTS `ic_tasks_logs` (
  `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `task_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `status` tinyint(4) unsigned NOT NULL,
  `date_created` datetime NOT NULL,
  `date_finished` datetime DEFAULT NULL,
  `duration` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`log_id`),
  KEY `ic_tasks` (`task_id`,`status`) USING BTREE,
  KEY `ic_users` (`user_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table db_budgeting.ic_tasks_logs: ~0 rows (approximately)
DELETE FROM `ic_tasks_logs`;
/*!40000 ALTER TABLE `ic_tasks_logs` DISABLE KEYS */;
/*!40000 ALTER TABLE `ic_tasks_logs` ENABLE KEYS */;

-- Dumping structure for table db_budgeting.ic_templates
DROP TABLE IF EXISTS `ic_templates`;
CREATE TABLE IF NOT EXISTS `ic_templates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `types` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `pubdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table db_budgeting.ic_templates: ~6 rows (approximately)
DELETE FROM `ic_templates`;
/*!40000 ALTER TABLE `ic_templates` DISABLE KEYS */;
INSERT INTO `ic_templates` (`id`, `types`, `subject`, `body`, `pubdate`) VALUES
	(1, 'registration', 'Registration successful', '<div style="height: 2px; background-color: #535353;"></div><div style="border-radius: 5px 5px 5px 5px; padding:20px; margin-top:45px; background-color:#FFFFFF; font-family:Open Sans, Helvetica, sans-serif; font-size:13px;">Thanks for joining {SITE_NAME}. The following details below is your login information. Please keep in mind this information is sensitive.<br>To open your {SITE_NAME} homepage, please follow this link:<br><big><b><a href="{SITE_URL}">{SITE_NAME} Account!</a></b></big><br>Link doesn\'t work? Copy the following link to your browser address bar:<br><a href="{SITE_URL}">{SITE_URL}</a><br>Your username: {USERNAME}<br>Your email address: {EMAIL}<br>Your password: {PASSWORD}<p>Enjoy!<br>{SITE_NAME}</p></div><div style="height: 2px; background-color: #535353;"></div>', '2015-10-23 01:04:58'),
	(2, 'notify_message', 'Notification Message', '<div style="height: 2px; background-color: #535353;"></div> <div style="border-radius: 5px 5px 5px 5px; padding:20px; margin-top:45px; background-color:#FFFFFF; font-family:Open Sans, Helvetica, sans-serif; font-size:13px;"><p>Hi {RECIPIENT},</p><p>You have received a notification: </p><blockquote>{MESSAGE}</blockquote><br><big><b><a href="{SITE_URL}">Go to Account</a></b></big><br><br>Regards<br>{SITE_NAME}</div><div style="height: 2px; background-color: #535353;"></div>', '2015-10-23 02:18:19'),
	(3, 'change_email', 'Change Email', '<div style="height: 2px; background-color: #535353;"></div><div style="border-radius: 5px 5px 5px 5px; padding:20px; margin-top:45px; background-color:#FFFFFF; font-family:Open Sans, Helvetica, sans-serif; font-size:13px;">You have changed your email address for {SITE_NAME}.<br>Follow this link to confirm your new email address:<br><big><b><a href="{KEY_URL}">Confirm your new email</a></b></big><br>Copy the following link to your browser address bar if the link above did not work:<br><a href="{KEY_URL}">{KEY_URL}</a><br><br>Your new email address: {NEW_EMAIL}<br><br>You received this email, because it was requested by a <a href="{SITE_URL}">{SITE_NAME}</a> user. If you have received this by mistake, please DO NOT click the confirmation link, and simply delete this email. After a short time, the request will be removed from the system.<br>Thank you,<br>{SITE_NAME}</div><div style="height: 2px; background-color: #535353;"></div>', '2015-10-23 02:10:42'),
	(4, 'reset_email', 'New Email', '<div style="height: 2px; background-color: #535353;"></div><div style="border-radius: 5px 5px 5px 5px; padding:20px; margin-top:45px; background-color:#FFFFFF; font-family:Open Sans, Helvetica, sans-serif; font-size:13px;">You have changed your email address for {SITE_NAME}.<br>Follow this link to confirm your new email address:<br><big><b><a href="{KEY_URL}">Confirm your new email</a></b></big><br>Copy the following link to your browser address bar if the link above did not work:<br><a href="{KEY_URL}">{KEY_URL}</a><br><br>Your new email address: {NEW_EMAIL}<br><br>You received this email, because it was requested by a <a href="{SITE_URL}">{SITE_NAME}</a> user. If you have received this by mistake, please DO NOT click the confirmation link, and simply delete this email. After a short time, the request will be removed from the system.<br>Thank you,<br>{SITE_NAME}</div><div style="height: 2px; background-color: #535353;"></div>', '2015-10-23 02:19:11'),
	(5, 'forgot_password', 'Forgot Password', '<div style="height: 2px; background-color: #535353;"></div>\r\n<div style="border-radius: 5px 5px 5px 5px; padding:20px; margin-top:45px; background-color:#FFFFFF; font-family:Open Sans, Helvetica, sans-serif; font-size:13px;">You received this email because it was requested by a member of <a href="{SITE_URL}">{SITE_NAME}</a>.<p>To create a new password, click the follow link below:<br><big><b><a href="{KEY_URL}">Change password</a></b></big><br> If the link doesn\'t work simply copy the following link to your browser address bar:<br><a href="{KEY_URL}">{KEY_URL}</a></p>\r\n<p></p>\r\n<p>If you DID NOT request a new password. Please ignore this email or contact your administrator.</p>\r\n<br>Thank you,<br>{SITE_NAME}</div>\r\n</div>\r\n<div style="height: 2px; background-color: #535353;"></div>', '2015-10-23 02:18:08'),
	(6, 'reset_password', 'New Password', '<div style="height: 2px; background-color: #535353;"></div>\r\n<div style="border-radius: 5px 5px 5px 5px; padding:20px; margin-top:45px; background-color:#FFFFFF; font-family:Open Sans, Helvetica, sans-serif; font-size:13px;">You received this email because it was requested by a member of <a href="{SITE_URL}">{SITE_NAME}</a>.<p>To create a new password, click the follow link below:<br><big><b><a href="{KEY_URL}">Change password</a></b></big><br> If the link doesn\'t work simply copy the following link to your browser address bar:<br><a href="{KEY_URL}">{KEY_URL}</a></p>\r\n<p></p>\r\n<p>If you DID NOT request a new password. Please ignore this email or contact your administrator.</p>\r\n<br>Thank you,<br>{SITE_NAME}</div>\r\n</div>\r\n<div style="height: 2px; background-color: #535353;"></div>', '2015-10-23 02:20:31');
/*!40000 ALTER TABLE `ic_templates` ENABLE KEYS */;

-- Dumping structure for table db_budgeting.ic_users
DROP TABLE IF EXISTS `ic_users`;
CREATE TABLE IF NOT EXISTS `ic_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `urut` int(11) DEFAULT NULL,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `last_page` varchar(255) NOT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `display` enum('1','0') NOT NULL DEFAULT '1',
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.png',
  `lang` varchar(6) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'en',
  `cal_timezone` varchar(70) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Asia/Jakarta',
  `cal_defaultview` varchar(12) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'month',
  `cal_header_left` varchar(95) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'month,agendaWeek,basicDay,agendaList',
  `cal_header_center` varchar(95) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'title',
  `cal_header_right` varchar(95) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'prev,next,today',
  `cal_editable` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'true',
  `cal_firstday` int(2) NOT NULL DEFAULT '0',
  `cal_businessstart` varchar(9) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cal_businessend` varchar(9) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cal_businessdays` varchar(12) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `cal_hiddendays` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '-1',
  `cal_isrtl` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'false',
  `cal_weeknumbers` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'true',
  `cal_eventlimit` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'true',
  `cal_alldayslot` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'true',
  `cal_slotduration` varchar(9) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '00:30:00',
  `cal_slotlabeling` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'false',
  `cal_slotlabelformat` varchar(11) NOT NULL DEFAULT 'hh:mm a',
  `cal_aspectratio` float NOT NULL DEFAULT '1.45',
  `cal_mintime` varchar(9) NOT NULL DEFAULT '00:00:00',
  `cal_maxtime` varchar(9) NOT NULL DEFAULT '24:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `activation_selector` (`activation_selector`),
  UNIQUE KEY `forgotten_password_selector` (`forgotten_password_selector`),
  UNIQUE KEY `remember_selector` (`remember_selector`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table db_budgeting.ic_users: ~1 rows (approximately)
DELETE FROM `ic_users`;
/*!40000 ALTER TABLE `ic_users` DISABLE KEYS */;
INSERT INTO `ic_users` (`id`, `urut`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `last_page`, `active`, `display`, `first_name`, `last_name`, `company`, `phone`, `image`, `lang`, `cal_timezone`, `cal_defaultview`, `cal_header_left`, `cal_header_center`, `cal_header_right`, `cal_editable`, `cal_firstday`, `cal_businessstart`, `cal_businessend`, `cal_businessdays`, `cal_hiddendays`, `cal_isrtl`, `cal_weeknumbers`, `cal_eventlimit`, `cal_alldayslot`, `cal_slotduration`, `cal_slotlabeling`, `cal_slotlabelformat`, `cal_aspectratio`, `cal_mintime`, `cal_maxtime`) VALUES
	(1, 0, '10.1.160.18', 'admin', '$2y$12$cHXjbAyH.hQaAPSt8E/FW.z7GBhmn7FpDBlYwuQuOT821UpSKvl8q', NULL, 'rizkymaulanaichsan@hotmail.com', '', NULL, NULL, NULL, NULL, NULL, NULL, 1525084820, 1549013279, 'profile', 1, '0', 'admin', 'admin', 'Sekretaris', '123456789', 'raden.png', 'en', 'Asia/Jakarta', 'month', 'month,agendaWeek,basicDay,agendaList', 'title', 'prev,next,today', 'true', 0, '', '', '', '-1', 'false', 'true', 'true', 'true', '00:30:00', 'false', 'hh:mm a', 1.45, '00:00:00', '24:00:00');
/*!40000 ALTER TABLE `ic_users` ENABLE KEYS */;

-- Dumping structure for table db_budgeting.ic_users_groups
DROP TABLE IF EXISTS `ic_users_groups`;
CREATE TABLE IF NOT EXISTS `ic_users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=125 DEFAULT CHARSET=utf8;

-- Dumping data for table db_budgeting.ic_users_groups: ~22 rows (approximately)
DELETE FROM `ic_users_groups`;
/*!40000 ALTER TABLE `ic_users_groups` DISABLE KEYS */;
INSERT INTO `ic_users_groups` (`id`, `user_id`, `group_id`) VALUES
	(45, 1, 1),
	(91, 26, 1),
	(124, 27, 3),
	(99, 32, 1),
	(103, 33, 4),
	(102, 34, 4),
	(94, 35, 4),
	(110, 36, 2),
	(97, 37, 2),
	(77, 38, 2),
	(104, 39, 2),
	(79, 40, 2),
	(80, 41, 2),
	(81, 42, 2),
	(82, 43, 5),
	(83, 44, 5),
	(84, 45, 2),
	(85, 46, 1),
	(86, 47, 2),
	(87, 48, 2),
	(101, 49, 2),
	(109, 50, 2);
/*!40000 ALTER TABLE `ic_users_groups` ENABLE KEYS */;

-- Dumping structure for table db_budgeting.ic_users_tasks
DROP TABLE IF EXISTS `ic_users_tasks`;
CREATE TABLE IF NOT EXISTS `ic_users_tasks` (
  `user_id` int(10) unsigned NOT NULL,
  `event_id` int(11) unsigned NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`,`event_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_budgeting.ic_users_tasks: ~1 rows (approximately)
DELETE FROM `ic_users_tasks`;
/*!40000 ALTER TABLE `ic_users_tasks` DISABLE KEYS */;
INSERT INTO `ic_users_tasks` (`user_id`, `event_id`, `date_created`) VALUES
	(1, 23470859, '2014-09-02 18:52:34');
/*!40000 ALTER TABLE `ic_users_tasks` ENABLE KEYS */;

-- Dumping structure for table db_budgeting.konfirmasi
DROP TABLE IF EXISTS `konfirmasi`;
CREATE TABLE IF NOT EXISTS `konfirmasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_memo` int(11) NOT NULL,
  `tujuan` text,
  `penerima` text,
  `tgl` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table db_budgeting.konfirmasi: 5 rows
DELETE FROM `konfirmasi`;
/*!40000 ALTER TABLE `konfirmasi` DISABLE KEYS */;
INSERT INTO `konfirmasi` (`id`, `id_memo`, `tujuan`, `penerima`, `tgl`) VALUES
	(1, 1, 'dit', NULL, NULL),
	(2, 2, 'undangan1', 'jason', '2018-09-18 12:53:00'),
	(3, 2, 'undangan2', NULL, '2018-09-18 12:53:00'),
	(4, 2, 'undangan3', NULL, NULL),
	(5, 2, 'undangan4', NULL, NULL);
/*!40000 ALTER TABLE `konfirmasi` ENABLE KEYS */;

-- Dumping structure for table db_budgeting.laporan
DROP TABLE IF EXISTS `laporan`;
CREATE TABLE IF NOT EXISTS `laporan` (
  `id_laporan` int(11) NOT NULL AUTO_INCREMENT,
  `agenda_id` int(11) NOT NULL,
  `laporan` text NOT NULL,
  PRIMARY KEY (`id_laporan`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table db_budgeting.laporan: ~1 rows (approximately)
DELETE FROM `laporan`;
/*!40000 ALTER TABLE `laporan` DISABLE KEYS */;
INSERT INTO `laporan` (`id_laporan`, `agenda_id`, `laporan`) VALUES
	(3, 2, '');
/*!40000 ALTER TABLE `laporan` ENABLE KEYS */;

-- Dumping structure for table db_budgeting.memo
DROP TABLE IF EXISTS `memo`;
CREATE TABLE IF NOT EXISTS `memo` (
  `id_memo` int(11) NOT NULL AUTO_INCREMENT,
  `no_memo` varchar(50) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `judul` text NOT NULL,
  `tanggal` date NOT NULL,
  `file` varchar(1000) NOT NULL,
  `id_staf` int(11) NOT NULL,
  `pic` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  PRIMARY KEY (`id_memo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table db_budgeting.memo: ~1 rows (approximately)
DELETE FROM `memo`;
/*!40000 ALTER TABLE `memo` DISABLE KEYS */;
INSERT INTO `memo` (`id_memo`, `no_memo`, `jenis`, `judul`, `tanggal`, `file`, `id_staf`, `pic`, `kategori`) VALUES
	(2, '123/TES/05/2018', 'surat', 'percobaan surat keluar', '2018-05-29', '1527749456_123TES052018.pdf', 32, 26, 'SEGERA');
/*!40000 ALTER TABLE `memo` ENABLE KEYS */;

-- Dumping structure for table db_budgeting.rb_anggaran_belanja
DROP TABLE IF EXISTS `rb_anggaran_belanja`;
CREATE TABLE IF NOT EXISTS `rb_anggaran_belanja` (
  `id_anggaran_belanja` int(10) NOT NULL AUTO_INCREMENT,
  `id_data_umum` int(10) NOT NULL,
  `id_sub_jenis_belanja` int(10) NOT NULL,
  `keterangan_anggaran` text NOT NULL,
  `total_rp` int(20) NOT NULL,
  `bobot` varchar(10) NOT NULL,
  `vol` varchar(50) NOT NULL,
  `ket_vol` varchar(100) NOT NULL,
  `sisa_pagu` int(20) NOT NULL,
  `keterangan_akhir` text NOT NULL,
  `tgl_jam` datetime NOT NULL,
  `id_user` int(10) NOT NULL,
  `stat` varchar(2) NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id_anggaran_belanja`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

-- Dumping data for table db_budgeting.rb_anggaran_belanja: 17 rows
DELETE FROM `rb_anggaran_belanja`;
/*!40000 ALTER TABLE `rb_anggaran_belanja` DISABLE KEYS */;
INSERT INTO `rb_anggaran_belanja` (`id_anggaran_belanja`, `id_data_umum`, `id_sub_jenis_belanja`, `keterangan_anggaran`, `total_rp`, `bobot`, `vol`, `ket_vol`, `sisa_pagu`, `keterangan_akhir`, `tgl_jam`, `id_user`, `stat`) VALUES
	(3, 1, 1, 'Honorarium Panitia Kegiatan', 20000000, '4.00', '1', 'Paket (1 Kali)', 20000000, 'Menunggu Jadwal pelaksanaan kegiatan', '2015-04-22 17:58:06', 1, 'Y'),
	(5, 1, 2, 'Honorarium PPTK Kegiatan', 30000000, '5.9976', '12', 'OB', 25000000, '', '2015-04-23 02:10:16', 1, 'Y'),
	(6, 1, 2, 'Honorarium Pembantu PPTK', 28800000, '5.7577', '24', 'OB', 24000000, '', '2015-04-23 02:14:02', 0, 'Y'),
	(7, 1, 3, 'Honorarium Pegawai Honorer SMP', 21000000, '4.1983', '12', 'OB', 21000000, '(Pensiun)', '2015-04-23 02:20:24', 1, 'Y'),
	(8, 1, 3, 'Honorarium Pegawai Honorer SD', 21000000, '4.1983', '12', 'OB', 17500000, '', '2015-04-23 02:22:23', 1, 'Y'),
	(9, 1, 4, 'Belanja Alat Tulis Kantor (ATK)', 30000000, '5.9976', '6', 'Kali (1 Tahun)', 21035000, '', '2015-04-23 02:24:12', 1, 'Y'),
	(10, 1, 5, 'Pembuatan Spanduk ', 1200000, '0.2399', '1', 'Paket (1 Kali)', 1200000, '', '2015-04-23 02:26:08', 1, 'Y'),
	(11, 1, 6, 'Honorarium Tenaga Perkebunan', 45600000, '9.1164', '24', 'OB', 38200000, '', '2015-04-23 02:28:14', 1, 'Y'),
	(12, 1, 7, 'Belanja Cetak', 24600000, '4.9180', '5', 'Kali (1 Tahun)', 16905000, '', '2015-04-23 02:29:43', 1, 'Y'),
	(13, 1, 7, 'Belanja Penggandaan/Fotocopy/Penjilidan', 30000000, '5.9976', '7', 'Kali (1 Tahun)', 20013800, '', '2015-04-23 02:30:51', 1, 'Y'),
	(14, 1, 8, 'Belanja Makanan dan Minuman Rapat', 5000000, '0.9996', '6', 'Kali (1 Tahun)', 2880000, '', '2015-04-23 02:32:06', 1, 'Y'),
	(15, 1, 9, 'Belanja Makanan dan Minuman Kegiatan', 50000000, '9.9960', '1', 'Paket (1 Kali)', 50000000, '', '2015-04-23 02:33:59', 1, 'Y'),
	(16, 1, 9, 'Honor Pejabat Pengadaan Barang dan Jasa', 1000000, '0.1999', '1', 'Orang', 1000000, '', '2015-04-23 02:35:42', 1, 'Y'),
	(17, 1, 9, 'Honor Pejabat Penerima Hasil Pekerjaan Barang dan Jasa', 700000, '0.1399', '1', 'Orang', 700000, '', '2015-04-23 02:36:18', 1, 'Y'),
	(18, 1, 11, 'Belanja Perjalanan Dinas Dalam Daerah', 128000000, '25.5898', '56', 'OT (1 Tahun)', 104275000, '', '2015-04-23 02:37:26', 1, 'Y'),
	(19, 1, 11, 'Belanja Perjalanan Dinas Luar Daerah', 63300000, '12.6549', '14', 'OT(1 Tahun)', 44585500, '', '2015-04-23 02:38:32', 1, 'Y'),
	(29, 1, 10, 'Honorarium Panitia Kegiatan', 20000000, '3.9984', '1', 'Paket (1 Kali)', 20000000, '', '2015-07-24 10:39:29', 1, 'Y');
/*!40000 ALTER TABLE `rb_anggaran_belanja` ENABLE KEYS */;

-- Dumping structure for table db_budgeting.rb_data_umum
DROP TABLE IF EXISTS `rb_data_umum`;
CREATE TABLE IF NOT EXISTS `rb_data_umum` (
  `id_data_umum` int(10) NOT NULL AUTO_INCREMENT,
  `laporan_sampai` varchar(50) NOT NULL,
  `nama_program` varchar(255) NOT NULL,
  `nama_kegiatan` varchar(255) NOT NULL,
  `bidang_bagian_seksi` varchar(255) NOT NULL,
  `kpa` int(15) NOT NULL,
  `pptk` int(15) NOT NULL,
  `pagu_anggaran` int(20) NOT NULL,
  `tahun` int(5) NOT NULL,
  `waktu` datetime NOT NULL,
  `id_user` int(5) NOT NULL,
  PRIMARY KEY (`id_data_umum`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_budgeting.rb_data_umum: 1 rows
DELETE FROM `rb_data_umum`;
/*!40000 ALTER TABLE `rb_data_umum` DISABLE KEYS */;
INSERT INTO `rb_data_umum` (`id_data_umum`, `laporan_sampai`, `nama_program`, `nama_kegiatan`, `bidang_bagian_seksi`, `kpa`, `pptk`, `pagu_anggaran`, `tahun`, `waktu`, `id_user`) VALUES
	(1, 'April 2016', 'Peningkatan Kualitas Perencanaan, Pelaporan Capaian Kinerja', 'Pengembangan Sistem Koordinasi Perencanaan, Monitoring, Evaluasi & Pelaporan', 'Sekretariat / Perencanaan & Program', 13, 15, 500200000, 2016, '2015-04-21 10:03:24', 1);
/*!40000 ALTER TABLE `rb_data_umum` ENABLE KEYS */;

-- Dumping structure for table db_budgeting.rb_detail_realisasi
DROP TABLE IF EXISTS `rb_detail_realisasi`;
CREATE TABLE IF NOT EXISTS `rb_detail_realisasi` (
  `id_detail_realisasi` int(10) NOT NULL AUTO_INCREMENT,
  `id_anggaran_belanja` int(10) NOT NULL,
  `vol_fisik` varchar(20) NOT NULL,
  `persen_fisik` varchar(20) NOT NULL,
  `ttb_fisik` varchar(150) NOT NULL,
  `rp_keuangan` varchar(20) NOT NULL,
  `persen_keuangan` varchar(20) NOT NULL,
  `ttb_keuangan` varchar(20) NOT NULL,
  `waktu_realisasi` datetime NOT NULL,
  `id_user` int(10) NOT NULL,
  PRIMARY KEY (`id_detail_realisasi`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

-- Dumping data for table db_budgeting.rb_detail_realisasi: 17 rows
DELETE FROM `rb_detail_realisasi`;
/*!40000 ALTER TABLE `rb_detail_realisasi` DISABLE KEYS */;
INSERT INTO `rb_detail_realisasi` (`id_detail_realisasi`, `id_anggaran_belanja`, `vol_fisik`, `persen_fisik`, `ttb_fisik`, `rp_keuangan`, `persen_keuangan`, `ttb_keuangan`, `waktu_realisasi`, `id_user`) VALUES
	(5, 3, '1', '100.00', '4.00', '-', '-', '-', '2015-04-22 17:58:06', 1),
	(7, 5, '2', '16.666666666667', '0.9996', '5000000', '16.666666666667', '0.9996', '2015-04-23 02:10:16', 1),
	(8, 6, '4', '16.666666666667', '0.95961666666667', '4800000', '16.666666666667', '0.95961666666667', '2015-04-23 02:14:02', 0),
	(9, 7, '', '-', '-', '-', '-', '-', '2015-04-23 02:20:24', 1),
	(10, 8, '2', '16.666666666667', '0.69971666666667', '3500000', '16.666666666667', '0.69971666666667', '2015-04-23 02:22:23', 1),
	(11, 9, '2', '33.333333333333', '1.9992', '8965000', '29.883333333333', '1.7922828', '2015-04-23 02:24:12', 1),
	(12, 10, '', '-', '-', '', '-', '-', '2015-04-23 02:26:08', 1),
	(13, 11, '4', '16.666666666667', '1.5194', '7400000', '16.228070175439', '1.4794157894737', '2015-04-23 02:28:14', 1),
	(14, 12, '2', '40', '1.9672', '7695000', '31.280487804878', '1.5383743902439', '2015-04-23 02:29:43', 1),
	(15, 13, '3', '42.857142857143', '2.5704', '9986200', '33.287333333333', '1.996441104', '2015-04-23 02:30:51', 1),
	(16, 14, '2', '33.333333333333', '0.3332', '2120000', '42.4', '0.4238304', '2015-04-23 02:32:06', 1),
	(17, 15, '', '-', '-', '-', '-', '-', '2015-04-23 02:33:59', 1),
	(18, 16, '', '-', '-', '-', '-', '-', '2015-04-23 02:35:42', 1),
	(19, 17, '', '-', '-', '-', '-', '-', '2015-04-23 02:36:18', 1),
	(20, 18, '16', '28.571428571429', '7.3113714285714', '23725000', '18.53515625', '4.7431094140625', '2015-04-23 02:37:26', 1),
	(21, 19, '5', '35.714285714286', '4.5196071428571', '18714500', '29.56477093207', '3.7413921966825', '2015-04-23 02:38:32', 1),
	(31, 29, '', '-', '-', '', '-', '-', '2015-07-24 10:39:29', 1);
/*!40000 ALTER TABLE `rb_detail_realisasi` ENABLE KEYS */;

-- Dumping structure for table db_budgeting.rb_detail_target
DROP TABLE IF EXISTS `rb_detail_target`;
CREATE TABLE IF NOT EXISTS `rb_detail_target` (
  `id_detail_target` int(10) NOT NULL AUTO_INCREMENT,
  `id_anggaran_belanja` int(10) NOT NULL,
  `vol_fisik` varchar(20) NOT NULL,
  `persen_fisik` varchar(20) NOT NULL,
  `ttb_fisik` varchar(150) NOT NULL,
  `rp_keuangan` varchar(20) NOT NULL,
  `persen_keuangan` varchar(20) NOT NULL,
  `ttb_keuangan` varchar(20) NOT NULL,
  `waktu_target` datetime NOT NULL,
  `id_user` int(10) NOT NULL,
  PRIMARY KEY (`id_detail_target`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

-- Dumping data for table db_budgeting.rb_detail_target: 17 rows
DELETE FROM `rb_detail_target`;
/*!40000 ALTER TABLE `rb_detail_target` DISABLE KEYS */;
INSERT INTO `rb_detail_target` (`id_detail_target`, `id_anggaran_belanja`, `vol_fisik`, `persen_fisik`, `ttb_fisik`, `rp_keuangan`, `persen_keuangan`, `ttb_keuangan`, `waktu_target`, `id_user`) VALUES
	(5, 3, '-', '-', '-', '-', '-', '-', '2015-04-22 17:58:06', 1),
	(7, 5, '2', '16.666666666667', '0.9996', '5000000', '16.666666666667', '0.9996', '2015-04-23 02:10:16', 1),
	(8, 6, '4', '16.666666666667', '0.95961666666667', '4800000', '16.666666666667', '0.95961666666667', '2015-04-23 02:14:02', 1),
	(9, 7, '2', '16.666666666667', '0.69971666666667', '3500000', '16.666666666667', '0.69971666666667', '2015-04-23 02:20:24', 1),
	(10, 8, '2', '16.666666666667', '0.69971666666667', '3500000', '16.666666666667', '0.69971666666667', '2015-04-23 02:22:23', 1),
	(11, 9, '2', '33.333333333333', '1.9992', '10000000', '33.333333333333', '1.9992', '2015-04-23 02:24:12', 1),
	(12, 10, '', '-', '-', '', '-', '-', '2015-04-23 02:26:08', 1),
	(13, 11, '4', '16.666666666667', '1.5194', '7600000', '16.666666666667', '1.5194', '2015-04-23 02:28:14', 1),
	(14, 12, '2', '40', '1.9672', '10000000', '40.650406504065', '1.9991869918699', '2015-04-23 02:29:43', 1),
	(15, 13, '3', '42.857142857143', '2.5704', '10000000', '33.333333333333', '1.9992', '2015-04-23 02:30:51', 1),
	(16, 14, '2', '33.333333333333', '0.3332', '2500000', '50', '0.4998', '2015-04-23 02:32:06', 1),
	(17, 15, '', '-', '-', '-', '-', '-', '2015-04-23 02:33:59', 1),
	(18, 16, '', '-', '-', '-', '-', '-', '2015-04-23 02:35:42', 1),
	(19, 17, '', '-', '-', '-', '-', '-', '2015-04-23 02:36:18', 1),
	(20, 18, '19', '33.928571428571', '8.6822535714286', '44320000', '34.625', '8.86046825', '2015-04-23 02:37:26', 1),
	(21, 19, '3', '21.428571428571', '2.7117642857143', '13670000', '21.595576619273', '2.7328986255924', '2015-04-23 02:38:32', 1),
	(31, 29, '1', '100', '3.9984', '', '-', '-', '2015-07-24 10:39:29', 1);
/*!40000 ALTER TABLE `rb_detail_target` ENABLE KEYS */;

-- Dumping structure for table db_budgeting.rb_jenis_belanja
DROP TABLE IF EXISTS `rb_jenis_belanja`;
CREATE TABLE IF NOT EXISTS `rb_jenis_belanja` (
  `id_jenis_belanja` int(5) NOT NULL AUTO_INCREMENT,
  `keterangan` text NOT NULL,
  `id_user` int(5) NOT NULL,
  PRIMARY KEY (`id_jenis_belanja`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table db_budgeting.rb_jenis_belanja: 2 rows
DELETE FROM `rb_jenis_belanja`;
/*!40000 ALTER TABLE `rb_jenis_belanja` DISABLE KEYS */;
INSERT INTO `rb_jenis_belanja` (`id_jenis_belanja`, `keterangan`, `id_user`) VALUES
	(1, 'Belanja Langsung', 1),
	(2, 'Belanja Barang dan Jasa', 1);
/*!40000 ALTER TABLE `rb_jenis_belanja` ENABLE KEYS */;

-- Dumping structure for table db_budgeting.rb_jenis_target_realisasi
DROP TABLE IF EXISTS `rb_jenis_target_realisasi`;
CREATE TABLE IF NOT EXISTS `rb_jenis_target_realisasi` (
  `id_jenis_target_realisasi` int(10) NOT NULL AUTO_INCREMENT,
  `keterangan_target_realisasi` varchar(255) NOT NULL,
  PRIMARY KEY (`id_jenis_target_realisasi`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table db_budgeting.rb_jenis_target_realisasi: 2 rows
DELETE FROM `rb_jenis_target_realisasi`;
/*!40000 ALTER TABLE `rb_jenis_target_realisasi` DISABLE KEYS */;
INSERT INTO `rb_jenis_target_realisasi` (`id_jenis_target_realisasi`, `keterangan_target_realisasi`) VALUES
	(1, 'Fisik'),
	(2, 'Keuangan');
/*!40000 ALTER TABLE `rb_jenis_target_realisasi` ENABLE KEYS */;

-- Dumping structure for table db_budgeting.rb_page
DROP TABLE IF EXISTS `rb_page`;
CREATE TABLE IF NOT EXISTS `rb_page` (
  `id_page` int(5) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  PRIMARY KEY (`id_page`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table db_budgeting.rb_page: 2 rows
DELETE FROM `rb_page`;
/*!40000 ALTER TABLE `rb_page` DISABLE KEYS */;
INSERT INTO `rb_page` (`id_page`, `judul`, `isi`) VALUES
	(1, 'User Guide - Administrator', 'e-budgeting adalah sebuah sistem pembuatan anggaran di lingkungan pemerintahan kota. Dalam sistem ini untuk membuat\r\nsebuah anggaran, dibutuhkan komponen-komponen penyusun yang mana komponen-komponen penyusun tersebut merupakan hasil dari survey di lapangan.'),
	(2, 'User Guide - Operator', 'e-budgeting adalah sebuah sistem pembuatan anggaran di lingkungan pemerintahan kota. Dalam sistem ini untuk membuat\r\nsebuah anggaran, dibutuhkan komponen-komponen penyusun yang mana komponen-komponen penyusun tersebut merupakan hasil dari survey di lapangan.');
/*!40000 ALTER TABLE `rb_page` ENABLE KEYS */;

-- Dumping structure for table db_budgeting.rb_pegawai
DROP TABLE IF EXISTS `rb_pegawai`;
CREATE TABLE IF NOT EXISTS `rb_pegawai` (
  `id_pegawai` int(5) NOT NULL AUTO_INCREMENT,
  `nip` varchar(30) NOT NULL,
  `nama_lengkap` varchar(150) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` varchar(50) NOT NULL,
  `gol` varchar(20) NOT NULL,
  `jabatan` varchar(150) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `file_ijazah` varchar(255) DEFAULT NULL,
  `no_telpon` varchar(20) NOT NULL,
  `alamat_lengkap` text NOT NULL,
  `keterangan` text NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_pegawai`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- Dumping data for table db_budgeting.rb_pegawai: 3 rows
DELETE FROM `rb_pegawai`;
/*!40000 ALTER TABLE `rb_pegawai` DISABLE KEYS */;
INSERT INTO `rb_pegawai` (`id_pegawai`, `nip`, `nama_lengkap`, `tempat_lahir`, `tgl_lahir`, `gol`, `jabatan`, `agama`, `file_ijazah`, `no_telpon`, `alamat_lengkap`, `keterangan`, `id_user`) VALUES
	(17, '464646', 'Maria Lufi Ulfah', 'Kediri', '28 Juni 1987', 'IIa', 'Staf PTT', 'Hindu', '', '43545', 'Keidir', '-', 6),
	(15, '23442421', 'Deny Indrayana, S.H', 'jakarta', '30 Desember 1961', 'IIIa', 'Kasub Seksi', 'Protestan', '', '0567456', 'pasuruan', '-', 5),
	(13, '6732193021', 'Fatkhruhman, S.E', 'Blitar Timur', '19 Juli 1977', 'IVb', 'Kepala Bidang', 'Hindu', '', '05674561', 'Sudimoro Malang', 'Pensiun', 1);
/*!40000 ALTER TABLE `rb_pegawai` ENABLE KEYS */;

-- Dumping structure for table db_budgeting.rb_sub_jenis_belanja
DROP TABLE IF EXISTS `rb_sub_jenis_belanja`;
CREATE TABLE IF NOT EXISTS `rb_sub_jenis_belanja` (
  `id_sub_jenis_belanja` int(10) NOT NULL AUTO_INCREMENT,
  `id_jenis_belanja` int(10) NOT NULL,
  `keterangan_sub_jenis` text NOT NULL,
  `id_user` int(5) NOT NULL,
  PRIMARY KEY (`id_sub_jenis_belanja`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Dumping data for table db_budgeting.rb_sub_jenis_belanja: 10 rows
DELETE FROM `rb_sub_jenis_belanja`;
/*!40000 ALTER TABLE `rb_sub_jenis_belanja` DISABLE KEYS */;
INSERT INTO `rb_sub_jenis_belanja` (`id_sub_jenis_belanja`, `id_jenis_belanja`, `keterangan_sub_jenis`, `id_user`) VALUES
	(2, 1, 'Honorarium Pengelola Keuangan', 1),
	(3, 1, 'Honorarium Non PNS 1 2', 1),
	(4, 2, 'Belanja Alat Tulis Kantor', 1),
	(5, 2, 'Belanja Jasa Publikasi', 1),
	(6, 2, 'Belanja Jasa Tenaga Teknis / Non Teknis', 1),
	(7, 2, 'Belanja Cetak dan Penggandaan', 1),
	(8, 2, 'Belanja Makanan dan Minuman Rapat', 1),
	(9, 2, 'Belanja Makanan dan Minuman Kegiatan / Pelatihan', 1),
	(10, 1, 'Honorarium Panitia Pelaksana Kegiatan', 1),
	(11, 2, 'Belanja Perjalanan Dinas', 1);
/*!40000 ALTER TABLE `rb_sub_jenis_belanja` ENABLE KEYS */;

-- Dumping structure for table db_budgeting.rb_user
DROP TABLE IF EXISTS `rb_user`;
CREATE TABLE IF NOT EXISTS `rb_user` (
  `id_user` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(150) NOT NULL,
  `no_telpon` varchar(20) NOT NULL,
  `alamat_lengkap` text NOT NULL,
  `keterangan` text NOT NULL,
  `level` varchar(20) NOT NULL DEFAULT 'operator',
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table db_budgeting.rb_user: 3 rows
DELETE FROM `rb_user`;
/*!40000 ALTER TABLE `rb_user` DISABLE KEYS */;
INSERT INTO `rb_user` (`id_user`, `username`, `password`, `nama_lengkap`, `no_telpon`, `alamat_lengkap`, `keterangan`, `level`) VALUES
	(1, 'admin', '0192023a7bbd73250516f069df18b500', 'Robby Prihandaya', '081267771344', 'Jl.Angkasa Puri, Perundam 4, Tunggul Hitam, Padang, Sumatera Barat', '', 'admin'),
	(2, 'dewi', 'ed1d859c50262701d92e5cbf39652792', 'Dewi Safitri', '082173054500', 'Jl.Angkasa Puri, Perundam 4, Tunggul Hitam, Padang, Sumatera Barat', 'Operator 1', 'operator'),
	(4, 'udin', '6bec9c852847242e384a4d5ac0962ba0', 'Udin Sedunia', '081267771300', 'Lubuk Begalung, Padang, Sumatera Barat', 'Operator 2', 'operator');
/*!40000 ALTER TABLE `rb_user` ENABLE KEYS */;

-- Dumping structure for table db_budgeting.sys_menu
DROP TABLE IF EXISTS `sys_menu`;
CREATE TABLE IF NOT EXISTS `sys_menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(50) NOT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `link` varchar(100) NOT NULL DEFAULT '#',
  `parent` int(11) NOT NULL DEFAULT '0',
  `stats` enum('mm','sm','ssm') NOT NULL DEFAULT 'sm',
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table db_budgeting.sys_menu: ~9 rows (approximately)
DELETE FROM `sys_menu`;
/*!40000 ALTER TABLE `sys_menu` DISABLE KEYS */;
INSERT INTO `sys_menu` (`id_menu`, `menu_name`, `icon`, `link`, `parent`, `stats`, `order`) VALUES
	(1, 'MAIN NAVIGATION', '', '#', 0, 'mm', 1),
	(2, 'FINANCE NAVIGATION', NULL, '#', 0, 'mm', 2),
	(3, 'ADMIN NAVIGATION', NULL, '#', 0, 'mm', 3),
	(4, 'Dashboard', 'home', '', 1, 'sm', 1),
	(5, 'Master Data', 'view_list', '#', 2, 'sm', 1),
	(6, 'User', 'people', 'user', 3, 'sm', 1),
	(7, 'Data Kegiatan', NULL, 'kegiatan', 5, 'ssm', 1),
	(8, 'Menu', 'menu', 'menu', 3, 'sm', 2),
	(9, 'Konfiguration', 'settings_applications', 'modul', 3, 'sm', 3);
/*!40000 ALTER TABLE `sys_menu` ENABLE KEYS */;

-- Dumping structure for table db_budgeting.web_menu
DROP TABLE IF EXISTS `web_menu`;
CREATE TABLE IF NOT EXISTS `web_menu` (
  `id_menu` int(200) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(500) NOT NULL,
  `menu_name_english` varchar(300) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `link` varchar(500) NOT NULL,
  `id_parent` int(200) NOT NULL,
  `menu_stats` varchar(200) NOT NULL,
  `list_number` int(100) NOT NULL,
  `id_parent1` int(11) NOT NULL,
  `id_parent2` int(11) NOT NULL,
  `id_parent3` int(11) NOT NULL,
  `id_parent4` int(11) NOT NULL,
  `id_parent5` int(11) NOT NULL,
  `menu_status` enum('Y','N') NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`id_menu`)
) ENGINE=MyISAM AUTO_INCREMENT=99 DEFAULT CHARSET=latin1;

-- Dumping data for table db_budgeting.web_menu: 12 rows
DELETE FROM `web_menu`;
/*!40000 ALTER TABLE `web_menu` DISABLE KEYS */;
INSERT INTO `web_menu` (`id_menu`, `menu_name`, `menu_name_english`, `icon`, `link`, `id_parent`, `menu_stats`, `list_number`, `id_parent1`, `id_parent2`, `id_parent3`, `id_parent4`, `id_parent5`, `menu_status`) VALUES
	(80, 'Beranda', 'Home', 'fa-home', '', 0, 'mm', 1, 0, 0, 0, 0, 0, 'Y'),
	(81, 'Profil', 'Profile', 'fa-user', '#', 0, 'mm', 2, 0, 0, 0, 0, 0, 'Y'),
	(82, 'Kegiatan', 'Activities', 'fa-flash', 'pages/kegiatan', 0, 'mm', 3, 0, 0, 0, 0, 0, 'Y'),
	(83, 'Dokumen', 'Document', 'fa-file-text-o', '#', 0, 'mm', 4, 0, 0, 0, 0, 0, 'Y'),
	(84, 'Latar Belakang', 'background', 'fa-user', 'detail/latar-belakang', 81, 'sm1', 1, 81, 0, 0, 0, 0, 'Y'),
	(86, 'Personil', 'personnel', 'fa-user', 'detail/personil', 81, 'sm1', 3, 81, 0, 0, 0, 0, 'Y'),
	(90, 'Kajian', 'Kajian', 'fa-file-text-o', 'pages/kajian', 83, 'sm1', 2, 83, 0, 0, 0, 0, 'Y'),
	(91, 'Publikasi', 'Publikasi', 'fa-file-text-o', 'pages/publikasi', 83, 'sm1', 3, 83, 0, 0, 0, 0, 'Y'),
	(40, 'Galleri', 'Gallery', 'fa-camera', 'gal/gallery', 0, 'mm', 5, 0, 0, 0, 0, 0, 'Y'),
	(94, 'Analisis', 'analisis', 'fa-file-text-o', 'pages/analisis', 83, 'sm1', 1, 83, 0, 0, 0, 0, 'Y'),
	(95, 'Regulasi', 'Regulation', 'fa-bars', 'reg/regulasi', 0, 'mm', 3, 0, 0, 0, 0, 0, 'Y'),
	(98, 'Kontak', 'Contact Us', 'fa-envelope', 'contact', 80, 'mm', 7, 80, 0, 0, 0, 0, 'Y');
/*!40000 ALTER TABLE `web_menu` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
