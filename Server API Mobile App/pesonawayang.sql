-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for pesonawayang
CREATE DATABASE IF NOT EXISTS `pesonawayang` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `pesonawayang`;

-- Dumping structure for table pesonawayang.macam_wayang
CREATE TABLE IF NOT EXISTS `macam_wayang` (
  `id_wayang` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `penjelasan_wayang` text NOT NULL,
  `image` varchar(50) NOT NULL,
  `media_kisah` varchar(50) NOT NULL,
  `link_olshop` varchar(50) NOT NULL,
  PRIMARY KEY (`id_wayang`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table pesonawayang.macam_wayang: ~0 rows (approximately)
/*!40000 ALTER TABLE `macam_wayang` DISABLE KEYS */;
INSERT INTO `macam_wayang` (`id_wayang`, `judul`, `penjelasan_wayang`, `image`, `media_kisah`, `link_olshop`) VALUES
	(1, 'Wayang Semar', 'advfbgntgb tdfgb gdn gdf fs ', 'vsfvfsv.jpg', 'cadcdac', 'cadadcd'),
	(2, 'Wayang Petruk', 'cadcfsv fd fd fsvfsvfs', 'vsfvfsvf', 'fvsfvfsv', 'vfsvfsv');
/*!40000 ALTER TABLE `macam_wayang` ENABLE KEYS */;

-- Dumping structure for table pesonawayang.sejarah_wayang
CREATE TABLE IF NOT EXISTS `sejarah_wayang` (
  `id_sejarah` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `isi_sejarah` text NOT NULL,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`id_sejarah`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table pesonawayang.sejarah_wayang: ~2 rows (approximately)
/*!40000 ALTER TABLE `sejarah_wayang` DISABLE KEYS */;
INSERT INTO `sejarah_wayang` (`id_sejarah`, `judul`, `isi_sejarah`, `image`) VALUES
	(1, 'cadcda', 'adcdacdanv fnukfivunsudnvlmdvsfvfsv', 'fvsvf'),
	(2, 'hfn h', 'fsbfsb gdb fv wrsfvsfbv f f', 'vsrvs');
/*!40000 ALTER TABLE `sejarah_wayang` ENABLE KEYS */;

-- Dumping structure for table pesonawayang.users
CREATE TABLE IF NOT EXISTS `users` (
  `id_users` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `display_pic` varchar(50) NOT NULL,
  PRIMARY KEY (`id_users`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table pesonawayang.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
