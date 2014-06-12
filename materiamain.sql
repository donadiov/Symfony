-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.12-log - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL version:             7.0.0.4129
-- Date/time:                    2014-04-23 14:55:09
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping database structure for materiamain
CREATE DATABASE IF NOT EXISTS `materiamain` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `materiamain`;


-- Dumping structure for table materiamain.company
CREATE TABLE IF NOT EXISTS `company` (
  `companyId` int(11) NOT NULL AUTO_INCREMENT,
  `companyClave` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `companyRazonSocial` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `companyNombrefantasia` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `companyMail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `companyCalle` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `companyCalleNro` int(11) NOT NULL,
  `companyCp` int(11) NOT NULL,
  `companyLocalidad` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `companyProvincia` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `companyPais` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `companyCuit` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `companyPerFiscal` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `companyNiibb` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `companyCondiibb` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `companyActividad` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `companyObservaciones` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `companyNombreTitular` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `companyApellidoTitular` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `companyUsuarioTitular` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `companyPasswordTitular` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `companyActive` int(11) NOT NULL,
  `companyHost` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `companyBase` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `companyBaseUser` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `companyBaseClave` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`companyId`),
  UNIQUE KEY `UNIQ_800230D3BB611D7A` (`companyClave`),
  UNIQUE KEY `UNIQ_800230D3DB752A5F` (`companyRazonSocial`),
  UNIQUE KEY `UNIQ_800230D3A52B64D8` (`companyNombrefantasia`),
  UNIQUE KEY `UNIQ_800230D350107A2D` (`companyCuit`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table materiamain.company: ~2 rows (approximately)
/*!40000 ALTER TABLE `company` DISABLE KEYS */;
INSERT INTO `company` (`companyId`, `companyClave`, `companyRazonSocial`, `companyNombrefantasia`, `companyMail`, `companyCalle`, `companyCalleNro`, `companyCp`, `companyLocalidad`, `companyProvincia`, `companyPais`, `companyCuit`, `companyPerFiscal`, `companyNiibb`, `companyCondiibb`, `companyActividad`, `companyObservaciones`, `companyNombreTitular`, `companyApellidoTitular`, `companyUsuarioTitular`, `companyPasswordTitular`, `companyActive`, `companyHost`, `companyBase`, `companyBaseUser`, `companyBaseClave`) VALUES
	(1, 'M4t3R14W3b', 'Victor Damian Donadio', 'Materia Web', 'victor@materiasistemas.com.ar', 'Echague', 605, 3100, 'Parana', 'Entre rios', 'Argentina', '23-34299632-9', 'Monotributista', '23-34299632-9', 'Inscripto', 'Desarrollo web', 'Creadores del proyecto', 'Victor', 'Donadio', 'SUPERVISOR', '79354cb7f1430fa4f72561d0b5e5485b87b8e82e', 1, 'localhost', 'materiamain','root', 'efldvl2102'),
	(2, '4gR0p4lMa', 'Daniel Delea Schiava', 'Agropecuara Almafuerte', 'info@agropalmafuerte.com.ar', 'Almafuerte', 430, 3100, 'Parana', 'Entre rios', 'Argentina', '20-13508760-3', 'Monotributista', '20-13508760-3', 'Inscripto', 'Venta de insumos agropecuarios', '', 'Daniel', 'Dellaschiava', 'vdonadio', '7f8fec6715b3290d38f42a8511df93ffcb5f6f7e', 1, 'localhost', 'agropalma', 'root', 'efldvl2102');
/*!40000 ALTER TABLE `company` ENABLE KEYS */;


-- Dumping structure for table materiamain.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `rolId` int(11) NOT NULL,
  `rolName` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`rolId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table materiamain.roles: ~5 rows (approximately)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`rolId`, `rolName`) VALUES
	(1, 'SUPER_ADMI'),
	(2, 'TITULAR'),
	(3, 'ADMIN'),
	(4, 'USUARIO'),
	(5, 'VENDEDOR');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;


-- Dumping structure for table materiamain.users
CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `userName` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `firstName` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `userCompanyId` int(11) NOT NULL,
  `userMail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `userRol` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table materiamain.users: ~5 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`userid`, `password`, `userName`, `firstName`, `lastName`, `userCompanyId`, `userMail`, `userRol`) VALUES
	(83, '289a6a3026334a316ceda9788d5d56898afc312a', 'supervisor', 'Supervisor', 'Sistemas', 1, 'victor@materiasistemas.com.ar', 'SUPER_ADMIN'),
	(84, '9be090d343b8d2e8b85cb506f01b1eca627cf150', 'vdonadio', 'Victor', 'Donadio', 2, 'donadiovictor@gmail.com', 'TITULAR'),
	(85, '5e58791207bef65529728cb54ae4e8eeb2879056', 'ldonadio', 'Luis', 'Donadio', 2, 'victor@materiasistemas.com.ar', 'ADMIN'),
	(86, 'f2c7ec0b3fa9b719b51a8b52f713cd1ef6a5f13b', 'ddonadio', 'Daniela', 'Donadio', 2, 'donadiodanielav@gmail.com', 'USUARIO'),
	(87, '7f8fec6715b3290d38f42a8511df93ffcb5f6f7e', 'ddellaschiava', 'Daniel', 'Della Schiava', 2, 'info@agropalmafuerte.com.ar', 'ADMIN');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
