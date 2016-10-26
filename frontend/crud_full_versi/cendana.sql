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

-- Dumping database structure for cendana
CREATE DATABASE IF NOT EXISTS `cendana` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `cendana`;


-- Dumping structure for table cendana.kelamin
CREATE TABLE IF NOT EXISTS `kelamin` (
  `id` int(255) NOT NULL,
  `nama_kelamin` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table cendana.kelamin: ~2 rows (approximately)
DELETE FROM `kelamin`;
/*!40000 ALTER TABLE `kelamin` DISABLE KEYS */;
INSERT INTO `kelamin` (`id`, `nama_kelamin`) VALUES
	(1, 'laki-laki'),
	(2, 'perempuan');
/*!40000 ALTER TABLE `kelamin` ENABLE KEYS */;


-- Dumping structure for table cendana.login
CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table cendana.login: ~1 rows (approximately)
DELETE FROM `login`;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` (`username`, `password`) VALUES
	('admin', '202cb962ac59075b964b07152d234b70');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;


-- Dumping structure for table cendana.pegawai
CREATE TABLE IF NOT EXISTS `pegawai` (
  `id_pegawai` int(255) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `kota` varchar(255) DEFAULT NULL,
  `kelamin` int(1) DEFAULT NULL,
  `id_posisi` varchar(255) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_pegawai`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Dumping data for table cendana.pegawai: ~11 rows (approximately)
DELETE FROM `pegawai`;
/*!40000 ALTER TABLE `pegawai` DISABLE KEYS */;
INSERT INTO `pegawai` (`id_pegawai`, `nama`, `telp`, `kota`, `kelamin`, `id_posisi`, `status`) VALUES
	(4, 'Dody Ahmad Kusuma Jaya', '083854520015', '1', 1, '4', 1),
	(5, 'Choirul Ikhsan', '085749535400', '4', 1, '1', 1),
	(6, 'Wawan Dwi Prasetyo', '085745966707', '2', 1, '2', 1),
	(7, 'Achmad Chadil Auwfar', '08984119934', '1', 1, '3', 1),
	(8, 'Alhafiizhasrofi', '087859615271', '1', 1, '4', 1),
	(9, 'Faiq', '085736333728', '1', 1, '1', 1),
	(10, 'Rizal Ferdian', '087777284179', '1', 1, '2', 1),
	(11, 'Antony Febriansyah', '082199568540', '1', 1, '3', 1),
	(12, 'redika angga', '083834657395', '1', 1, '1', 1),
	(13, 'Jessica', '0909090909090', '1', 2, '3', 1),
	(15, 'yuri', '081231549154', '1', 1, '4', 1);
/*!40000 ALTER TABLE `pegawai` ENABLE KEYS */;


-- Dumping structure for table cendana.posisi
CREATE TABLE IF NOT EXISTS `posisi` (
  `id_posisi` int(255) NOT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table cendana.posisi: ~4 rows (approximately)
DELETE FROM `posisi`;
/*!40000 ALTER TABLE `posisi` DISABLE KEYS */;
INSERT INTO `posisi` (`id_posisi`, `nama`) VALUES
	(1, 'IT'),
	(2, 'HRD'),
	(3, 'Keuangan'),
	(4, 'Produk');
/*!40000 ALTER TABLE `posisi` ENABLE KEYS */;


-- Dumping structure for table cendana.tab_kota
CREATE TABLE IF NOT EXISTS `tab_kota` (
  `id_kota` int(255) NOT NULL,
  `nama_kota` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table cendana.tab_kota: ~4 rows (approximately)
DELETE FROM `tab_kota`;
/*!40000 ALTER TABLE `tab_kota` DISABLE KEYS */;
INSERT INTO `tab_kota` (`id_kota`, `nama_kota`) VALUES
	(1, 'malang'),
	(2, 'tulungagung'),
	(3, 'nganjuk'),
	(4, 'blitar');
/*!40000 ALTER TABLE `tab_kota` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
