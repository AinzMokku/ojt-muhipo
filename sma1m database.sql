-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.37-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for sma1m
CREATE DATABASE IF NOT EXISTS `sma1m` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `sma1m`;

-- Dumping structure for table sma1m.asal_sekolah
CREATE TABLE IF NOT EXISTS `asal_sekolah` (
  `id_sekolah` int(11) NOT NULL AUTO_INCREMENT,
  `nama_sekolah` varchar(50) DEFAULT NULL,
  `alamat_sekolah` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_sekolah`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Dumping data for table sma1m.asal_sekolah: ~10 rows (approximately)
/*!40000 ALTER TABLE `asal_sekolah` DISABLE KEYS */;
INSERT INTO `asal_sekolah` (`id_sekolah`, `nama_sekolah`, `alamat_sekolah`) VALUES
	(1, 'SMP N 1 PONOROGO', 'Jl. Soekarno Hatta 82, Bangunsari, Ponorogo'),
	(2, 'SMP N 2 PONOROGO', 'Jl. Rachmad 44, Surodikraman, Ponorogo'),
	(3, 'SMP N 3 PONOROGO', 'Jl.'),
	(4, 'SMP N 4 PONOROGO', 'Jl.'),
	(5, 'SMP N 5 PONOROGO', 'Jl.'),
	(8, 'SMP N 6 PONOROGO', 'Jl.'),
	(9, 'SMP N 2 JENANGAN', 'Jl.'),
	(10, 'smpn 3 kedungwaru', 'bangoan'),
	(11, 'SMP N 1 JENANGAN', 'Jl'),
	(12, 'SMP N 1 Pulung', 'Pulung'),
	(13, 'Smp 2 ngawi', 'ngawi'),
	(14, 'smp 3 jenangan', 'jl.sumatra');
/*!40000 ALTER TABLE `asal_sekolah` ENABLE KEYS */;

-- Dumping structure for table sma1m.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sma1m.migrations: ~0 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table sma1m.orangtua
CREATE TABLE IF NOT EXISTS `orangtua` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `no_daftar` varchar(30) DEFAULT NULL,
  `nama_ayah` varchar(50) DEFAULT NULL,
  `pekerjaan_ayah` varchar(25) DEFAULT NULL,
  `alamat_ayah` varchar(100) DEFAULT NULL,
  `nohp_ayah` varchar(15) DEFAULT NULL,
  `nama_ibu` varchar(50) DEFAULT NULL,
  `pekerjaan_ibu` varchar(25) DEFAULT NULL,
  `alamat_ibu` varchar(100) DEFAULT NULL,
  `nohp_ibu` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `no_daftar` (`no_daftar`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

-- Dumping data for table sma1m.orangtua: ~21 rows (approximately)
/*!40000 ALTER TABLE `orangtua` DISABLE KEYS */;
INSERT INTO `orangtua` (`id`, `no_daftar`, `nama_ayah`, `pekerjaan_ayah`, `alamat_ayah`, `nohp_ayah`, `nama_ibu`, `pekerjaan_ibu`, `alamat_ibu`, `nohp_ibu`) VALUES
	(1, '2019A001', 'xxx', 'xxxx', 'zzz', '123123', 'xxxx', 'xxxx', 'zzz', '9999'),
	(2, '2019A002', 'jsdhfkjs', 'sjdhfkjshd', 'shkfjshdkfj', '92749283', 'sjhfsjkhfks', 'djhfskjdhf', 'shkfjshdkfj', '389742834'),
	(3, '2019A004', 'jhsfkjahs', 'sdhjfkjshgd', 'hfkjsdhfjh', '823694', 'jksdfgks', 'gfskhjdgf', 'gdksfgskj', '12937429'),
	(4, '2019A003', 'kahsdjhaksd', 'ahgskjdgakjs', 'ajshdkajsh', '17329871', 'ahskdjha', 'jsahkdj', 'hsadksjhd', '19832918'),
	(5, '2019A005', 'xxx', 'xxxx', 'xxxx', '8039482', 'xxx', 'ccccc', 'jsdhfkjah', '2983749283'),
	(7, '2019A006', 'akshdk', 'kajhsdk', 'kasjhdk', '82736527', 'xxxx', 'xxxx', 'iasouda', '2763482'),
	(8, '2019A007', 'ahsdkjahsdq', 'dhskfjhkjs', 'dhfkshdf', '24729874', 'hfksjdhf', 'hdksjhd', 'ahdskjahs', '12763873'),
	(9, '2019A012', 'hasjd', 'ashdkfjh', 'ksdjfhskj', '28379482', 'qiuweyieu', 'ajshd', 'haskdjha', '198237'),
	(10, '2019A013', 'kshk', 'JHAKJS', 'asjhdka', '23874983', 'ajsdkahs', 'skjhadk', 'ajskdha', '29379'),
	(11, '2019A015', 'kshk', 'JHAKJS', 'asjhdka', '23874983', 'ajsdkahs', 'skjhadk', 'ajskdha', '29379'),
	(12, '2019A017', 'kshk', 'JHAKJS', 'asjhdka', '23874983', 'ajsdkahs', 'skjhadk', 'ajskdha', '29379'),
	(13, '2019A014', 'qeqwe', 'qweqe', 'ewqeq', '12312', 'qweq', 'qeweqwe', 'eqeqew', '23123'),
	(14, '2019A016', 'agdj', 'jashdga', 'agsjdha', '128736', 'quiwequi', 'ashgja', 'ajshdg', '823648'),
	(15, '2019A018', 'aksjdgh', 'ahkdsjh', 'ajsdhka', '29387492', 'hdaksjhd', 'kasjdhak', 'aksjdhaksj', '9238748273'),
	(16, '2019A019', 'akshdk', 'kjgjh', 'ihkg', '897', 'hkjh', 'kjhkj', 'jkjhk', '98797'),
	(17, '2019A020', 'akshdk', 'shdkfjsh', 'kashfka', '29837923', 'dhfskjd', 'shdfkjshd', 'sdfhsk', '937459'),
	(18, '2019A021', 'sajhdka', 'kajshdka', 'aksdha', '2938749', 'hskjahd', 'hsakjd', 'haksjdh', '29374823'),
	(19, '2019A023', 'akshdak', 'aksjdh', 'kasjdh', '293827', 'ajsdhkaj', 'aksjd', 'aksjdh', '293874'),
	(20, '2019A025', 'akshdak', 'aksjdh', 'kasjdh', '293827', 'ajsdhkaj', 'aksjd', 'aksjdh', '293874'),
	(22, '2019A022', 'xx', 'xx', 'xxx', '000', 'xx', 'xxx', 'xxx', '99'),
	(23, '2019A027', 'x', 'x', 'x', '08', 'x', 'x', 'x', '09'),
	(24, '2019A024', 'VVV', 'VVV', 'VVV', '5676', 'VVV', 'VVV', 'VVV', '67868'),
	(25, '2019A029', 'xxx', 'xxx', 'xxx', '9090', 'xxxx', 'xxx', 'xxx', '90909'),
	(26, '2019A031', 'xxx', 'xxxx', 'xxxx', '90909', 'xxxx', 'xxxx', 'xxxxx', '9999'),
	(27, '2019A033', 'bayu', 'petani', 'ngawi', '099999', 'vinda', 'petani', 'ngawi', '099');
/*!40000 ALTER TABLE `orangtua` ENABLE KEYS */;

-- Dumping structure for table sma1m.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sma1m.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table sma1m.siswa
CREATE TABLE IF NOT EXISTS `siswa` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `no_daftar` varchar(24) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `id_sekolah` varchar(50) DEFAULT NULL,
  `nisn` varchar(20) DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `tempat` varchar(20) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `agama` varchar(15) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `info` varchar(30) DEFAULT NULL,
  `nohp` varchar(15) DEFAULT NULL,
  `program` varchar(30) DEFAULT NULL,
  `no_ijazah` varchar(25) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `no_daftar` (`no_daftar`),
  KEY `id_sekolah` (`id_sekolah`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

-- Dumping data for table sma1m.siswa: ~26 rows (approximately)
/*!40000 ALTER TABLE `siswa` DISABLE KEYS */;
INSERT INTO `siswa` (`id`, `no_daftar`, `nama`, `id_sekolah`, `nisn`, `jenis_kelamin`, `tempat`, `tgl_lahir`, `agama`, `alamat`, `info`, `nohp`, `program`, `no_ijazah`, `status`) VALUES
	(1, '2019A001', 'tes pertama', '1', '00000', 'Laki-Laki', 'po', '2019-06-05', 'islam', 'po', 'Pamflet', '0000', 'Reguler Ips', '0000', 'Diterima'),
	(2, '2019A002', 'tes kedua', '1', '098098', 'Perempuan', 'poo', '2019-06-03', 'islam', 'po', 'Baliho', '09838942', 'Bilingual Ipa', '02384923', 'Diterima'),
	(3, '2019A004', 'ahskdhak', '1', '1092481', 'Perempuan', 'aksjdhk', '2019-05-26', 'lajsldk', 'aksjdljahs', 'Brosur', '192831973', 'Tahfidz', '1732982', 'Diterima'),
	(4, '2019A003', 'mansdkabs', '1', '19826479716', 'Laki-Laki', 'iuiqsdhkas', '2019-05-29', 'gahjgd', 'kasgfkasbk', 'Brosur', '4816', 'Bilingual Ipa', '10298', 'Diterima'),
	(5, '2019A005', 'tes kellima', '1', '00000', 'Laki-Laki', 'po', '2000-02-09', 'islam', 'kasldk', 'Lainnya', '0000', 'Tahfidz', '0000', 'Diterima'),
	(7, '2019A006', 'tes', '1', '923749', 'Perempuan', 'malang', '2019-07-12', 'islam', 'a;sldkas', 'Guru', '38745834', 'Bilingual Ipa', '8236457263', 'Pendaftar'),
	(8, '2019A007', 'anjay', '1', '23984', 'Laki-Laki', '273498723', '2019-07-14', 'kjsdk', 'dhsfjhksj', 'Pamflet', '27938742938', 'Bilingual Ips', '187239812', 'Diterima'),
	(9, '2019A009', 'aa', '1', '00000', 'Laki-Laki', 'po', '2019-06-05', 'islam', 'po', 'Pamflet', '0000', 'Reguler Ips', '0000', 'Diterima'),
	(10, '2019A008', 'bb', '1', '098098', 'Perempuan', 'poo', '2019-06-03', 'islam', 'po', 'Baliho', '09838942', 'Bilingual Ips', '02384923', 'Pendaftar'),
	(11, '2019A010', 'cc', '1', '1092481', 'Perempuan', 'aksjdhk', '2019-05-26', 'lajsldk', 'aksjdljahs', 'Brosur', '192831973', 'Tahfidz', '1732982', 'Pendaftar'),
	(12, '2019A011', 'dd', '1', '19826479716', 'Laki-Laki', 'iuiqsdhkas', '2019-05-29', 'gahjgd', 'kasgfkasbk', 'Brosur', '4816', ' Bilingual Ips', '10298', 'Pendaftar'),
	(13, '2019A012', 'xxx', '2', '198230', 'Perempuan', 'xxx', '2019-07-05', 'islam', 'xxx', 'Baliho', '9238042', 'MIPA', '2983749823', 'Pendaftar'),
	(14, '2019A013', 'tes', '3', '27368', 'Laki-Laki', 'ugsjh', '2019-07-01', 'jahk', 'jasdhkasj', 'Brosur', '79879', 'Reguler Ipa', '9809', 'Pendaftar'),
	(15, '2019A015', 'tes', '3', '27368', 'Laki-Laki', 'ugsjh', '2019-07-01', 'jahk', 'jasdhkasj', 'Brosur', '79879', 'Reguler Ips', '9809', 'Pendaftar'),
	(16, '2019A017', 'tes', '3', '27368', 'Laki-Laki', 'ugsjh', '2019-07-01', 'jahk', 'jasdhkasj', 'Brosur', '79879', 'Reguler Ipa', '9809', 'Pendaftar'),
	(17, '2019A014', 'qweqwe', '1', '1232', 'Perempuan', 'qweqwe', '2019-07-01', 'asdas', 'qweqwe', 'Baliho', '123123', 'Tahfidz', '123123', 'Pendaftar'),
	(18, '2019A016', 'qwuey', '3', '23432', 'Perempuan', 'asdasd', '2019-07-03', 'asdas', 'adsda', 'Radio', '32423423', 'Tahfidz', '234234', 'Pendaftar'),
	(19, '2019A018', 'tes', '4', '3255245', 'Perempuan', 'qweqwe', '2019-07-03', 'xxx', 'qweqwd', 'Guru', '28394792', 'Tahfidz', '2739842', 'Pendaftar'),
	(20, '2019A019', '92374', '4', '26384726', 'Laki-Laki', 'sdhfksjd', '2019-02-05', 'ajkdhska', 'haksjdhka', 'Saudara', '2837648273', 'IPS', '28394827', 'Pendaftar'),
	(21, '2019A020', 'ajshdka', '4', '2387492', 'Perempuan', 'asdkjha', '2019-05-08', 'qejhk', 'kahsdk', 'Radio', '28937492', 'IPS', '23749823', 'Pendaftar'),
	(22, '2019A021', 'ahdj', '4', '2648', 'Laki-Laki', 'akjsdhk', '2019-07-19', 'ksajhdk', 'ahskdjha', 'Baliho', '023840', 'Tahfidz', '2093840', 'Pendaftar'),
	(23, '2019A023', 'ajshdgja', '8', '8273648', 'Laki-Laki', 'jahsdkaj', '2019-07-03', 'ahksdj', 'kajhsdka', 'Brosur', '876381', 'Reguler Ips', '923874293', 'Pendaftar'),
	(24, '2019A025', 'ajshdgja', '8', '8273648', 'Laki-Laki', 'jahsdkaj', '2019-07-03', 'ahksdj', 'kajhsdka', 'Brosur', '876381', 'Reguler Ipa', '923874293', 'Pendaftar'),
	(26, '2019A022', 'qwuey', '2', '09809', 'Perempuan', 'qwe', '2010-02-03', 'xxx', 'p', 'Baliho', '09', 'Bilingual Ips', '00', 'Pendaftar'),
	(27, '2019A027', 'tes', '9', '0983', 'Laki-Laki', 'po', '2019-07-17', 'islam', 'io', 'Baliho', '9823', 'Bilingual Ipa', '03982', 'Pendaftar'),
	(28, '2019A024', 'tes', '2', '12837', 'Perempuan', 'po', '2019-07-16', 'islam', 'ajshdk', 'Saudara', '209384', 'Reguler', 'AID02398', 'Pendaftar'),
	(29, '2019A029', 'imas', '11', '00000', 'Laki-Laki', 'ponorogo', '2000-06-13', 'islam', 'ponorogo', 'Radio', '23423', 'Bilingual', NULL, 'Pendaftar'),
	(30, '2019A031', 'xxx', '12', '0808', 'Laki-Laki', 'po', '2019-07-10', 'islam', 'ponorogo', 'Radio', '09889', 'Bilingual', 'm9jw', 'Pendaftar'),
	(31, '2019A033', 'iman', '13', '0909', 'Laki-Laki', 'ngawi', '2019-02-12', 'islam', 'ngawi', 'Brosur', '09889', 'MIPA', NULL, 'Pendaftar');
/*!40000 ALTER TABLE `siswa` ENABLE KEYS */;

-- Dumping structure for table sma1m.summernotes
CREATE TABLE IF NOT EXISTS `summernotes` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `content` longtext,
  `feature` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table sma1m.summernotes: ~3 rows (approximately)
/*!40000 ALTER TABLE `summernotes` DISABLE KEYS */;
INSERT INTO `summernotes` (`id`, `content`, `feature`, `created_at`, `updated_at`) VALUES
	(1, '<p>edit pertama kali</p>\n', 'tes', '2019-06-17 11:52:18', '2019-07-16 07:40:29'),
	(2, '<p>tes gambar lagi&nbsp;<img data-filename="117.jpg" style="width: 1067px;" src="/upload/15627801110.png"></p>\n', 'tes gambar resize', '2019-07-02 06:24:32', '2019-07-10 17:35:11'),
	(3, '<p>tes&nbsp;<img data-filename="5b217137-c757-48f6-907a-cdf5c3575a1c.jpg" style="width: 932px;" src="/upload/15620487400.png"></p>\n', 'tes gambar', '2019-07-02 06:25:40', '2019-07-02 06:25:40'),
	(4, '<p>akjshdkjasd</p>\n', 'tes ke 4', '2019-07-05 07:16:18', '2019-07-05 07:16:18'),
	(5, '<p>fsds bgfymgfumygudbdtstsr</p>\n', 'tes ilmu kimia', '2019-07-16 07:39:46', '2019-07-16 07:39:46');
/*!40000 ALTER TABLE `summernotes` ENABLE KEYS */;

-- Dumping structure for table sma1m.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sma1m.users: ~1 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(3, 'Muhipo', 'Muhipo@gmail.com', NULL, '$2y$10$MNbfVm.zRG1pkvaALxtivu1Yz5plbusr.naaJEiyPwk/t77IIbfAK', NULL, '2019-07-15 05:57:14', '2019-07-15 05:57:14');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
