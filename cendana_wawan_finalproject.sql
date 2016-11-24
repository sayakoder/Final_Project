-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.27 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for cendana_wawan_finalproject
CREATE DATABASE IF NOT EXISTS `cendana_wawan_finalproject` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `cendana_wawan_finalproject`;


-- Dumping structure for table cendana_wawan_finalproject.guru
CREATE TABLE IF NOT EXISTS `guru` (
  `id_guru` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nama_guru` varchar(255) DEFAULT NULL,
  `id_kelamin` int(11) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_guru`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table cendana_wawan_finalproject.guru: ~3 rows (approximately)
/*!40000 ALTER TABLE `guru` DISABLE KEYS */;
REPLACE INTO `guru` (`id_guru`, `nama_guru`, `id_kelamin`, `alamat`) VALUES
	(1, 'joko', 1, 'malang'),
	(2, 'hariadi', 1, 'nganjuk'),
	(3, 'susi', 2, 'semarang');
/*!40000 ALTER TABLE `guru` ENABLE KEYS */;


-- Dumping structure for table cendana_wawan_finalproject.kelamin
CREATE TABLE IF NOT EXISTS `kelamin` (
  `id_kelamin` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nama_kelamin` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_kelamin`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table cendana_wawan_finalproject.kelamin: ~2 rows (approximately)
/*!40000 ALTER TABLE `kelamin` DISABLE KEYS */;
REPLACE INTO `kelamin` (`id_kelamin`, `nama_kelamin`) VALUES
	(1, 'Pria'),
	(2, 'Wanita');
/*!40000 ALTER TABLE `kelamin` ENABLE KEYS */;


-- Dumping structure for table cendana_wawan_finalproject.kelas
CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kelas` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nama_kelas` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table cendana_wawan_finalproject.kelas: ~3 rows (approximately)
/*!40000 ALTER TABLE `kelas` DISABLE KEYS */;
REPLACE INTO `kelas` (`id_kelas`, `nama_kelas`) VALUES
	(1, 'kelas A'),
	(2, 'kelas B'),
	(3, 'kelas C');
/*!40000 ALTER TABLE `kelas` ENABLE KEYS */;


-- Dumping structure for table cendana_wawan_finalproject.mapel
CREATE TABLE IF NOT EXISTS `mapel` (
  `id_mapel` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nama_mapel` varchar(255) DEFAULT NULL,
  `id_guru` int(11) NOT NULL,
  PRIMARY KEY (`id_mapel`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table cendana_wawan_finalproject.mapel: ~3 rows (approximately)
/*!40000 ALTER TABLE `mapel` DISABLE KEYS */;
REPLACE INTO `mapel` (`id_mapel`, `nama_mapel`, `id_guru`) VALUES
	(1, 'matematika', 1),
	(2, 'bhs indonesia', 2),
	(3, 'IPA', 3);
/*!40000 ALTER TABLE `mapel` ENABLE KEYS */;


-- Dumping structure for table cendana_wawan_finalproject.nilai
CREATE TABLE IF NOT EXISTS `nilai` (
  `id_nilai` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_mapel` int(11) DEFAULT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `total_nilai` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_nilai`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table cendana_wawan_finalproject.nilai: ~5 rows (approximately)
/*!40000 ALTER TABLE `nilai` DISABLE KEYS */;
REPLACE INTO `nilai` (`id_nilai`, `id_mapel`, `id_siswa`, `total_nilai`) VALUES
	(1, 1, 1, 100),
	(2, 1, 2, 80),
	(3, 2, 2, 100),
	(4, 2, 3, 90),
	(5, 1, 2, 100);
/*!40000 ALTER TABLE `nilai` ENABLE KEYS */;


-- Dumping structure for table cendana_wawan_finalproject.siswa
CREATE TABLE IF NOT EXISTS `siswa` (
  `id_siswa` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nama_siswa` varchar(255) DEFAULT NULL,
  `id_kelamin` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `alamat` text,
  `id_kelas` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_siswa`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- Dumping data for table cendana_wawan_finalproject.siswa: ~8 rows (approximately)
/*!40000 ALTER TABLE `siswa` DISABLE KEYS */;
REPLACE INTO `siswa` (`id_siswa`, `nama_siswa`, `id_kelamin`, `status`, `alamat`, `id_kelas`) VALUES
	(4, 'ajurr', 1, 'menikah', 'semaranggsadsa', 1),
	(5, 'imam', 1, 'lajang', 'blitar', 3),
	(6, 'malik', 1, 'menikah', 'blitar', 2),
	(14, 'mukidi', 1, 'lajang', 'malang', 1),
	(15, 'farhan', 1, 'lajang', 'malang', 3),
	(16, 'imamudin', 1, 'lajang', 'malang', 1),
	(17, 'amin', 1, 'jomblo', 'mlang', 1),
	(18, 'imammmmmmmm', 2, 'halo', 'haloooooo', 2);
/*!40000 ALTER TABLE `siswa` ENABLE KEYS */;


-- Dumping structure for table cendana_wawan_finalproject.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table cendana_wawan_finalproject.user: ~1 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
REPLACE INTO `user` (`id`, `nama_user`, `password`, `username`) VALUES
	(1, 'admin', 'admin', 'wawan');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
