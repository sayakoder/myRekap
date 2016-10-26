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

-- Dumping database structure for sekolah1
CREATE DATABASE IF NOT EXISTS `sekolah1` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `sekolah1`;


-- Dumping structure for table sekolah1.matpel
CREATE TABLE IF NOT EXISTS `matpel` (
  `id_matpel` int(10) NOT NULL AUTO_INCREMENT,
  `nama_pelajaran` varchar(50) NOT NULL,
  PRIMARY KEY (`id_matpel`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table sekolah1.matpel: ~3 rows (approximately)
DELETE FROM `matpel`;
/*!40000 ALTER TABLE `matpel` DISABLE KEYS */;
INSERT INTO `matpel` (`id_matpel`, `nama_pelajaran`) VALUES
	(1, 'matematika'),
	(2, 'bahasa inggris'),
	(3, 'bahasa indonesia');
/*!40000 ALTER TABLE `matpel` ENABLE KEYS */;


-- Dumping structure for table sekolah1.nilai
CREATE TABLE IF NOT EXISTS `nilai` (
  `id_nilai` int(10) NOT NULL AUTO_INCREMENT,
  `id_siswa` int(11) DEFAULT NULL,
  `id_matpel` int(10) DEFAULT NULL,
  `nilai` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_nilai`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Dumping data for table sekolah1.nilai: ~10 rows (approximately)
DELETE FROM `nilai`;
/*!40000 ALTER TABLE `nilai` DISABLE KEYS */;
INSERT INTO `nilai` (`id_nilai`, `id_siswa`, `id_matpel`, `nilai`) VALUES
	(1, 1, 2, '99'),
	(2, 2, 2, '80'),
	(3, 3, 3, '90'),
	(4, 4, 2, '90'),
	(5, 5, 2, '90'),
	(9, 7, 1, '90'),
	(11, 9, 1, '90'),
	(12, 10, 3, '90'),
	(13, 11, 2, '100'),
	(14, 12, 2, '99');
/*!40000 ALTER TABLE `nilai` ENABLE KEYS */;


-- Dumping structure for table sekolah1.siswa
CREATE TABLE IF NOT EXISTS `siswa` (
  `id_siswa` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT '0',
  `alamat` varchar(255) DEFAULT '0',
  `kelamin` varchar(255) DEFAULT '0',
  PRIMARY KEY (`id_siswa`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Dumping data for table sekolah1.siswa: ~10 rows (approximately)
DELETE FROM `siswa`;
/*!40000 ALTER TABLE `siswa` DISABLE KEYS */;
INSERT INTO `siswa` (`id_siswa`, `nama`, `alamat`, `kelamin`) VALUES
	(1, 'mukidi', 'tulungagung', 'perempuan'),
	(2, 'sum', 'malang', 'perempuan'),
	(3, 'wawan', 'ta', 'laki-laki'),
	(4, 'paijo', 'malang', 'laki-laki'),
	(5, 'paidi', 'ta', 'laki-laki'),
	(7, 'midi', 'malang', 'laki-laki'),
	(9, 'percobaan_2', 'tulungagung', 'laki-laki'),
	(10, 'halo', 'malang', 'perempuan'),
	(11, 'paimin', 'tulungagung', 'perempuan'),
	(12, 'bissmilah', 'malang', 'perempuan');
/*!40000 ALTER TABLE `siswa` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
