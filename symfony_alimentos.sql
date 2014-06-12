-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.12-log - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL version:             7.0.0.4129
-- Date/time:                    2014-01-23 12:11:14
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping database structure for symfony_alimentos
CREATE DATABASE IF NOT EXISTS `symfony_alimentos` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `symfony_alimentos`;


-- Dumping structure for table symfony_alimentos.alimentos
CREATE TABLE IF NOT EXISTS `alimentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `energia` decimal(10,0) NOT NULL,
  `proteina` decimal(10,0) NOT NULL,
  `hidratocarbono` decimal(10,0) NOT NULL,
  `fibra` decimal(10,0) NOT NULL,
  `grasatotal` decimal(10,0) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- Dumping data for table symfony_alimentos.alimentos: ~8 rows (approximately)
/*!40000 ALTER TABLE `alimentos` DISABLE KEYS */;
INSERT INTO `alimentos` (`id`, `nombre`, `energia`, `proteina`, `hidratocarbono`, `fibra`, `grasatotal`) VALUES
	(40, 'Manzana', 654, 654, 65, 654, 64),
	(41, 'Kiwi', 654, 89498, 1, 651, 981),
	(42, 'Durazno', 321, 51, 681, 61, 5),
	(43, 'Sandia', 150, 5, 5, 5, 0),
	(44, 'Anana', 150, 55, 60, 30, 20),
	(45, 'Uva', 10, 2, 51, 66, 54),
	(46, 'Toronja', 51, 66, 85, 55, 0),
	(47, 'Limon', 30, 1, 1, 0, 0);
/*!40000 ALTER TABLE `alimentos` ENABLE KEYS */;


-- Dumping structure for table symfony_alimentos.alimentos_propiedades
CREATE TABLE IF NOT EXISTS `alimentos_propiedades` (
  `id` int(10) NOT NULL,
  `color` varchar(255) NOT NULL,
  `peso` decimal(10,0) NOT NULL,
  `familia` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table symfony_alimentos.alimentos_propiedades: ~0 rows (approximately)
/*!40000 ALTER TABLE `alimentos_propiedades` DISABLE KEYS */;
INSERT INTO `alimentos_propiedades` (`id`, `color`, `peso`, `familia`, `foto`) VALUES
	(40, 'Rojo', 654, 'Pepita', 'FotoManzana'),
	(41, 'Verde', 654, 'Climaterica', 'FotoKiwi'),
	(42, 'Anaranjado', 55, 'Carozo', 'FotoDurazno'),
	(43, 'Verde y Rojo', 100, 'Pepita', 'FotoSandia'),
	(44, 'Amarillo', 100, 'No Climaterica', 'FotoAnana'),
	(45, 'Morado', 5, 'Pepita', 'FotoUva'),
	(46, 'Anaranjado', 50, 'Citrico', 'FotoToronja'),
	(47, 'Amarillo', 35, 'Citrico', 'FotoLimon');
/*!40000 ALTER TABLE `alimentos_propiedades` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
