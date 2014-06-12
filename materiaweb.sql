-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.12-log - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL version:             7.0.0.4129
-- Date/time:                    2014-03-25 11:37:09
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping database structure for materiaweb
CREATE DATABASE IF NOT EXISTS `materiaweb` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `materiaweb`;


-- Dumping structure for table materiaweb.country
CREATE TABLE IF NOT EXISTS `country` (
  `Name` varchar(52) COLLATE utf8_unicode_ci NOT NULL,
  `Continent` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Region` varchar(26) COLLATE utf8_unicode_ci NOT NULL,
  `SurfaceArea` double NOT NULL,
  `IndepYear` smallint(6) DEFAULT NULL,
  `Population` int(11) NOT NULL,
  `LifeExpectancy` double DEFAULT NULL,
  `GNP` double DEFAULT NULL,
  `GNPOld` double DEFAULT NULL,
  `LocalName` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `GovernmentForm` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `HeadOfState` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Capital` int(11) DEFAULT NULL,
  `Code2` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `Code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table materiaweb.country: ~0 rows (approximately)
/*!40000 ALTER TABLE `country` DISABLE KEYS */;
/*!40000 ALTER TABLE `country` ENABLE KEYS */;


-- Dumping structure for table materiaweb.empresas
CREATE TABLE IF NOT EXISTS `empresas` (
  `idEmpresa` int(11) NOT NULL AUTO_INCREMENT,
  `claveEmpresa` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `razonSocialEmpresa` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nombreFantasiaEmpresa` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mailEmpresa` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `direccionCalleEmpresa` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `direccionNroEmpresa` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cpEmpresa` int(11) NOT NULL,
  `localidadEmpresa` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `provinciaEmpresa` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `paisEmpresa` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cuitEmpresa` bigint(20) NOT NULL,
  `perfilFiscalEmpresa` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nroIibbEmpresa` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `condicionIibbEmpresa` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `actividadEmpresa` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `observacionesEmpresa` longtext COLLATE utf8_unicode_ci NOT NULL,
  `nombreTitularEmpresa` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `usrTitularEmpresa` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `passTitularEmpresa` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `apellidoTitularEmpresa` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idEmpresa`),
  UNIQUE KEY `UNIQ_89AB2BF3B146BB14` (`claveEmpresa`),
  UNIQUE KEY `UNIQ_89AB2BF39D912CD` (`razonSocialEmpresa`),
  UNIQUE KEY `UNIQ_89AB2BF34F787765` (`nombreFantasiaEmpresa`),
  UNIQUE KEY `UNIQ_89AB2BF353603B24` (`mailEmpresa`),
  UNIQUE KEY `UNIQ_89AB2BF3800D1B2E` (`cuitEmpresa`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table materiaweb.empresas: ~2 rows (approximately)
/*!40000 ALTER TABLE `empresas` DISABLE KEYS */;
INSERT INTO `empresas` (`idEmpresa`, `claveEmpresa`, `razonSocialEmpresa`, `nombreFantasiaEmpresa`, `mailEmpresa`, `direccionCalleEmpresa`, `direccionNroEmpresa`, `cpEmpresa`, `localidadEmpresa`, `provinciaEmpresa`, `paisEmpresa`, `cuitEmpresa`, `perfilFiscalEmpresa`, `nroIibbEmpresa`, `condicionIibbEmpresa`, `actividadEmpresa`, `observacionesEmpresa`, `nombreTitularEmpresa`, `usrTitularEmpresa`, `passTitularEmpresa`, `apellidoTitularEmpresa`) VALUES
	(3, 'MateriaSistemas1', 'Materia Sistemas', 'Materia Sistemas', 'luis@materiasistemas.com.ar', 'Echague', '605', 3100, 'Parana', 'Entre Rios', 'Argentina', 20124995885, 'Monotributista', '12499588', 'Prof Liberales', 'Desarrollo', 'Dueños de Proyecto', 'Luis', 'ldonadio', 'mate1275', 'Donadio'),
	(4, 'MateriaSistemas2', 'Materia Sistemas 2', 'Materia Sistemas 2', 'victor@materiasistemas.com.ar', 'Echague', '605', 3100, 'Parana', 'Entre Rios', 'Argentina', 23342996329, 'Monotributista', '34299632', 'Ing Brutos', 'Desarrollo', 'Dueños de Proyecto', 'Victor', 'vdonadio', 'mate1275', 'Donadio'),
	(12, 'SIS', 'Pepe', 'pepe', 'mail@mail.com', 'martines', '1564', 3100, 'Parana', 'Entre Rios', 'Argentina', 23342965688, 'Monotributista', '65988542', 'Prof Lib', 'Desarrollo', 'asdasd', 'Victor', 'vdonadio', '123123', 'Donadio');
/*!40000 ALTER TABLE `empresas` ENABLE KEYS */;


-- Dumping structure for table materiaweb.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `idRol` int(11) NOT NULL AUTO_INCREMENT,
  `nombreRol` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idRol`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table materiaweb.roles: ~4 rows (approximately)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`idRol`, `nombreRol`) VALUES
	(1, 'admin'),
	(2, 'titular'),
	(3, 'supervisor'),
	(4, 'usuario');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;


-- Dumping structure for table materiaweb.sucursales
CREATE TABLE IF NOT EXISTS `sucursales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sucursal` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `numero_sucursal` int(11) NOT NULL,
  `nombre_sucursal` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `direccion_calle_sucursal` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `direccion_nro_sucursal` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cp_sucursal` int(11) NOT NULL,
  `localidad_sucursal` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `provincia_sucursal` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pais_sucursal` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_titular_sucursal` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_usr_titular_sucursal` int(11) NOT NULL,
  `actividad_sucursal` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `observaciones_sucursal` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_E0A0E09FB43587` (`nombre_sucursal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table materiaweb.sucursales: ~0 rows (approximately)
/*!40000 ALTER TABLE `sucursales` DISABLE KEYS */;
/*!40000 ALTER TABLE `sucursales` ENABLE KEYS */;


-- Dumping structure for table materiaweb.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `idEmpresa` int(11) NOT NULL,
  `nombreUsuario` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `apellidoUsuario` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mailUsuario` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `usuario` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `passwordUsuario` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `idPersonalUsuario` int(11) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rollUsuario` int(11) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  UNIQUE KEY `UNIQ_F780E5A4C9D2D129` (`mailUsuario`),
  UNIQUE KEY `UNIQ_F780E5A42265B05D` (`usuario`),
  UNIQUE KEY `UNIQ_F780E5A489BD5C42` (`idPersonalUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table materiaweb.usuarios: ~0 rows (approximately)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`idUsuario`, `idEmpresa`, `nombreUsuario`, `apellidoUsuario`, `mailUsuario`, `usuario`, `passwordUsuario`, `idPersonalUsuario`, `salt`, `rollUsuario`) VALUES
	(7, 12, 'Victor', 'Donadio', 'mail@mail.com', 'vdonadio', '123123', 12, '96cae35ce8a9b0244178bf28e4966c2ce1b8385723a96a6b838858cdd6ca0a1e', 1);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
