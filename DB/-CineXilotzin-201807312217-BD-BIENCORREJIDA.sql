-- MySQL dump 10.16  Distrib 10.1.26-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: CineXilotzin
-- ------------------------------------------------------
-- Server version	10.1.26-MariaDB-1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `CineHistoria`
--

DROP TABLE IF EXISTS `CineHistoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CineHistoria` (
  `iCineHistoria` varchar(500) NOT NULL,
  `Link_Facebook` varchar(100) NOT NULL,
  `Link_Instagram` varchar(100) NOT NULL,
  `UbicacionCine` varchar(500) NOT NULL,
  `TelefonoCine` varchar(100) NOT NULL,
  `E-Mail_Cine` varchar(45) NOT NULL,
  `URL_Img_CineHistoria` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CineHistoria`
--

LOCK TABLES `CineHistoria` WRITE;
/*!40000 ALTER TABLE `CineHistoria` DISABLE KEYS */;
INSERT INTO `CineHistoria` VALUES ('el cine inicio en el año de','https://www.facebook.com/CineTeatroXilotzin/','https://www.instagram.com/explore/locations/2','https://www.google.com/maps/place/Cine+Teatro+Xilo',' 01 761 734 0152','cinexilotzin@gmail.com','img/imgCine/xilo1.png');
/*!40000 ALTER TABLE `CineHistoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Clasificacion`
--

DROP TABLE IF EXISTS `Clasificacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Clasificacion` (
  `Clv_Clasificacion` varchar(20) NOT NULL,
  `Nombre_Clasificacion` varchar(45) NOT NULL,
  `Descripcion` varchar(50) NOT NULL,
  PRIMARY KEY (`Clv_Clasificacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Clasificacion`
--

LOCK TABLES `Clasificacion` WRITE;
/*!40000 ALTER TABLE `Clasificacion` DISABLE KEYS */;
INSERT INTO `Clasificacion` VALUES ('a','A','Apto para todo publco'),('aa','AA','Apto para niños'),('b','B','Apto para Mayores de 12 años'),('bb','B+','Apto para Mayores de 15 años'),('c','C','Apto solo para Mayores de Edad'),('d','D','Apto solo para Adultos');
/*!40000 ALTER TABLE `Clasificacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Funciones_Peliculas`
--

DROP TABLE IF EXISTS `Funciones_Peliculas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Funciones_Peliculas` (
  `idPeliculas` int(11) NOT NULL,
  `Fecha_Funciones_Peliculas` date NOT NULL,
  `Hora_Funciones_Peliculas` time(6) NOT NULL,
  `Funcion_Principal_Funciones_Peliculas` varchar(45) NOT NULL,
  `Sala_Funcion_Pelicula` varchar(45) NOT NULL,
  `Status_Funcion_Pelicula` char(1) NOT NULL DEFAULT '1',
  KEY `Funciones_Peliculas_Peliculas_FK` (`idPeliculas`),
  CONSTRAINT `Funciones_Peliculas_Peliculas_FK` FOREIGN KEY (`idPeliculas`) REFERENCES `Peliculas` (`idPeliculas`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Funciones_Peliculas`
--

LOCK TABLES `Funciones_Peliculas` WRITE;
/*!40000 ALTER TABLE `Funciones_Peliculas` DISABLE KEYS */;
INSERT INTO `Funciones_Peliculas` VALUES (1,'2018-05-12','01:43:00.000000','funcion principal','sala 1','1'),(1,'2018-05-12','03:30:00.000000','funcion Normal','sala 1','1'),(2,'2018-03-03','01:10:00.000000','Funcion Principal','Sala 1','1'),(4,'2018-03-03','03:10:00.000000','Funcion Principal','Sala 1','1'),(4,'2018-04-03','03:10:00.000000','Funcion Normal','Sala 1','1'),(4,'2018-04-03','05:10:00.000000','Funcion Normal','Sala 1','1'),(4,'2018-04-03','07:10:00.000000','Funcion Normal','Sala 1','1'),(5,'2018-04-04','10:10:00.000000','Funcion Normal','Sala 1','1');
/*!40000 ALTER TABLE `Funciones_Peliculas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Genero`
--

DROP TABLE IF EXISTS `Genero`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Genero` (
  `Clv_Genero` varchar(20) NOT NULL,
  `Nombre_Genero` varchar(45) NOT NULL,
  `Descripcion_Genero` varchar(45) NOT NULL,
  PRIMARY KEY (`Clv_Genero`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Genero`
--

LOCK TABLES `Genero` WRITE;
/*!40000 ALTER TABLE `Genero` DISABLE KEYS */;
INSERT INTO `Genero` VALUES ('Acc','Accion','Peliculas de Accion'),('AM','Artes Marciales','Peliculas de Artes Marciales'),('Aven','Aventuras','Peliculas de Aventura'),('Bel','Belicas','Peliculas de Guerra'),('CF','Ciencia Ficcion','Peliculas de Ciencia Ficcion'),('Com','Comedia','Peliculas de Comedia'),('Dcmtl','Documental','Documentales Varios'),('Dram','Drama','Peliculas de Drama'),('Hst','Historicas','Peliculas Historicas'),('Infan','Infantil','Peliculas Infantiles'),('Mst','Misterio','Peliculas de Misterio'),('Susp','Suspenso','Peliculas de Suspenso'),('Trror','Terror','Peliculas de Terror'),('Wstr','Western','Peliculas del Oeste(Vaqueras)');
/*!40000 ALTER TABLE `Genero` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `HorariosFunciones`
--

DROP TABLE IF EXISTS `HorariosFunciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `HorariosFunciones` (
  `idHorariosFunciones` int(11) NOT NULL AUTO_INCREMENT,
  `Fecha_Funciones` date NOT NULL,
  `Hora_Funciones` time NOT NULL,
  PRIMARY KEY (`idHorariosFunciones`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `HorariosFunciones`
--

LOCK TABLES `HorariosFunciones` WRITE;
/*!40000 ALTER TABLE `HorariosFunciones` DISABLE KEYS */;
INSERT INTO `HorariosFunciones` VALUES (1,'2018-05-12','01:43:00');
/*!40000 ALTER TABLE `HorariosFunciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Idioma`
--

DROP TABLE IF EXISTS `Idioma`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Idioma` (
  `Clv_Idioma` varchar(20) NOT NULL,
  `Nombre_Idioma` varchar(45) NOT NULL,
  `Status` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Clv_Idioma`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Idioma`
--

LOCK TABLES `Idioma` WRITE;
/*!40000 ALTER TABLE `Idioma` DISABLE KEYS */;
INSERT INTO `Idioma` VALUES ('al','Aleman','0'),('esp','Español','1'),('esplat','Español latino','1'),('fran','Frances','1'),('ing','Ingles','1'),('jap','Japones','1');
/*!40000 ALTER TABLE `Idioma` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ImagenesCine`
--

DROP TABLE IF EXISTS `ImagenesCine`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ImagenesCine` (
  `idImagenesCine` int(11) NOT NULL AUTO_INCREMENT,
  `NombreImagenCine` varchar(50) NOT NULL,
  `URL_ImagenesCine` varchar(100) NOT NULL,
  PRIMARY KEY (`idImagenesCine`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ImagenesCine`
--

LOCK TABLES `ImagenesCine` WRITE;
/*!40000 ALTER TABLE `ImagenesCine` DISABLE KEYS */;
INSERT INTO `ImagenesCine` VALUES (1,'yoteconozco.jpg','img/imgCine/yoteconozco.jpg');
/*!40000 ALTER TABLE `ImagenesCine` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Peliculas`
--

DROP TABLE IF EXISTS `Peliculas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Peliculas` (
  `idPeliculas` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Pelicula` varchar(45) NOT NULL,
  `Resenia_Pelicula` varchar(500) NOT NULL,
  `Duracion_Pelicula` int(5) NOT NULL,
  `Fecha_Estreno_Pelicula` date NOT NULL,
  `URLImagenPelicula` varchar(255) NOT NULL,
  `Clv_Idioma` varchar(20) NOT NULL,
  `Clv_Subtitulos` varchar(20) NOT NULL,
  `Clv_Genero` varchar(20) NOT NULL,
  `Clv_Clasificacion` varchar(20) NOT NULL,
  `Pelicula_Status` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idPeliculas`),
  KEY `Peliculas_Idioma_FK` (`Clv_Idioma`),
  KEY `Peliculas_Subtitulos_FK` (`Clv_Subtitulos`),
  KEY `Peliculas_Genero_FK` (`Clv_Genero`),
  KEY `Peliculas_Clasificacion_FK` (`Clv_Clasificacion`),
  CONSTRAINT `Peliculas_Clasificacion_FK` FOREIGN KEY (`Clv_Clasificacion`) REFERENCES `Clasificacion` (`Clv_Clasificacion`) ON UPDATE CASCADE,
  CONSTRAINT `Peliculas_Genero_FK` FOREIGN KEY (`Clv_Genero`) REFERENCES `Genero` (`Clv_Genero`) ON UPDATE CASCADE,
  CONSTRAINT `Peliculas_Idioma_FK` FOREIGN KEY (`Clv_Idioma`) REFERENCES `Idioma` (`Clv_Idioma`) ON UPDATE CASCADE,
  CONSTRAINT `Peliculas_Subtitulos_FK` FOREIGN KEY (`Clv_Subtitulos`) REFERENCES `Subtitulos` (`Clv_Subtitulos`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Peliculas`
--

LOCK TABLES `Peliculas` WRITE;
/*!40000 ALTER TABLE `Peliculas` DISABLE KEYS */;
INSERT INTO `Peliculas` VALUES (1,'redes','lolsososo',1,'2018-09-12','img/peliculas/ref.jpg','esp','Ing','Acc','bb','1'),(2,'la purga:el inicio','Es una precuela de la película de 2013 The Purge y es la cuarta entrega de la franquicia The Purge',97,'2018-07-04','img/peliculas/raios.jpg','esp','Esp','Acc','bb','1'),(3,'pelicss','esta es una prueva desde el formulario',118,'2018-06-21','img/peliculas/yoteconozco.jpg','esp','Fran','Acc','b','1'),(4,'Ant-Man and the Wasp','Scott Lang vuelve a enfundarse el traje de Ant-Man para pelear codo con codo junto a la Avispa. La misión revelará a los dos superhéroes un secreto terrible y los enfrentará a su enemigo más poderoso.',120,'2018-06-21','img/peliculas/antmanWasp.jpeg','esplat','EspLat','Acc','bb','1'),(5,'lulus','las lulus vienen a vengarse',95,'2018-02-11','img/peliculas','esplat','EspLat','Acc','bb','1'),(6,'lulus','las lulus vienen a vengarse',95,'2018-02-11','img/peliculas','esplat','EspLat','Acc','bb','1');
/*!40000 ALTER TABLE `Peliculas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Producto`
--

DROP TABLE IF EXISTS `Producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Producto` (
  `idProducto` int(11) NOT NULL AUTO_INCREMENT,
  `NombreProducto` varchar(50) NOT NULL,
  `TipoProducto` varchar(45) NOT NULL,
  `PrecioProducto` varchar(45) NOT NULL,
  `Descripcion_Producto` varchar(50) NOT NULL,
  `URL_Img_Producto` varchar(100) NOT NULL,
  `Producto_Status` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idProducto`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Producto`
--

LOCK TABLES `Producto` WRITE;
/*!40000 ALTER TABLE `Producto` DISABLE KEYS */;
INSERT INTO `Producto` VALUES (1,'Palomitas','Snack','$35','Palomitas de mantequilla','img/productos/palomitas.jpg','1'),(2,'Nachos','Snack','$25','Nachos con queso y chile jalapeño','img/productos/ref2.jpg','1');
/*!40000 ALTER TABLE `Producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Promociones`
--

DROP TABLE IF EXISTS `Promociones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Promociones` (
  `idPromociones` int(11) NOT NULL AUTO_INCREMENT,
  `NombrePromocion` varchar(50) NOT NULL,
  `Fecha_Inicio_Promocion` date NOT NULL,
  `Fecha_final_Promocion` date NOT NULL,
  `Descripcion_Promocion` varchar(250) CHARACTER SET cp850 NOT NULL,
  `TipoPromocion` varchar(50) NOT NULL,
  `URL_Img_Promociones` varchar(100) NOT NULL,
  `Promociones_Status` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idPromociones`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Promociones`
--

LOCK TABLES `Promociones` WRITE;
/*!40000 ALTER TABLE `Promociones` DISABLE KEYS */;
INSERT INTO `Promociones` VALUES (1,'2X1 en el estreno de la chona','2018-09-07','2018-09-12','ven a la ?eventa de la chona y llevate 2X1 en boletos','entradas','img/promociones/prom1.jpg','1'),(2,'llevate la playera del jolk','2018-10-11','2018-10-12','por cada entrada participas apra ganarte una playera del JOLK','','img/promociones/19732100_1900656520172831_2950352465151421614_n.jpg','1');
/*!40000 ALTER TABLE `Promociones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Subtitulos`
--

DROP TABLE IF EXISTS `Subtitulos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Subtitulos` (
  `Clv_Subtitulos` varchar(20) NOT NULL,
  `Nombre_Subtitulos` varchar(45) NOT NULL,
  `Status` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Clv_Subtitulos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Subtitulos`
--

LOCK TABLES `Subtitulos` WRITE;
/*!40000 ALTER TABLE `Subtitulos` DISABLE KEYS */;
INSERT INTO `Subtitulos` VALUES ('Esp','Español','1'),('EspLat','Español Latino','1'),('Fran','Frances','1'),('Ing','Ingles','1'),('Jap','Japones','1');
/*!40000 ALTER TABLE `Subtitulos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Usuarios`
--

DROP TABLE IF EXISTS `Usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Usuarios` (
  `Clave_Usuario` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Usuario` varchar(30) NOT NULL,
  `Password_Usuario` varchar(10) NOT NULL,
  `Tipo_Usuario` varchar(45) NOT NULL,
  `Email_Usuario` varchar(50) NOT NULL,
  PRIMARY KEY (`Clave_Usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Usuarios`
--

LOCK TABLES `Usuarios` WRITE;
/*!40000 ALTER TABLE `Usuarios` DISABLE KEYS */;
INSERT INTO `Usuarios` VALUES (1,'Admin','12345','Administrador','isaiasclaudio777@gmail.com'),(2,'Usuario1','12345','Empleado','user123@hotmail.com');
/*!40000 ALTER TABLE `Usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contador`
--

DROP TABLE IF EXISTS `contador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(15) DEFAULT NULL,
  `hora` varchar(8) DEFAULT NULL,
  `fecha` varchar(20) DEFAULT NULL,
  `horau` varchar(10) DEFAULT NULL,
  `diau` char(3) DEFAULT NULL,
  `aniou` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contador`
--

LOCK TABLES `contador` WRITE;
/*!40000 ALTER TABLE `contador` DISABLE KEYS */;
/*!40000 ALTER TABLE `contador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'CineXilotzin'
--
/*!50003 DROP PROCEDURE IF EXISTS `proceDulceria` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `proceDulceria`(
par_NombreProducto  varchar(50),
par_TipoProducto varchar(45),
par_PrecioProducto varchar(45),
par_Descripcion_Producto varchar(50),
par_URL_Img_Producto varchar(100))
INSERT Producto VALUES(DEFAULT,par_NombreProducto,par_TipoProducto,par_PrecioProducto,par_Descripcion_Producto,par_URL_Img_Producto,DEFAULT) ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `proceHorariosFunciones` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `proceHorariosFunciones`(
par_idPeliculas int,
par_Fecha_Funciones_Peliculas date,
par_Hora_Funciones_Peliculas time(6),
par_Funcion_Principal_Funciones_Peliculas varchar(45),
par_Sala_Funcion_Pelicula varchar(45))
INSERT Funciones_Peliculas VALUES(par_idPeliculas,par_Fecha_Funciones_Peliculas,par_Hora_Funciones_Peliculas,
par_Funcion_Principal_Funciones_Peliculas,par_Sala_Funcion_Pelicula,DEFAULT) ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `proceImagenesCine` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `proceImagenesCine`(
par_NombreImagenCine  varchar(50),
par_URL_ImagenesCine varchar(100))
INSERT ImagenesCine VALUES(DEFAULT,par_NombreImagenCine,par_URL_ImagenesCine) ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `proceIncertarPeliculas` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `proceIncertarPeliculas`(
par_Nombre_Pelicula varchar(45),
par_Resenia_Pelicula varchar(500),
par_Duracion_Pelicula int,
par_Fecha_Estreno_Pelicula date,
par_URLImagenPelicula varchar(255),
par_Clv_Idioma varchar(20),
par_Clv_Subtitulos varchar(20),
par_Clv_Genero varchar(20),
par_Clv_Clasificacion varchar(20))
INSERT INTO Peliculas VALUES (DEFAULT,par_Nombre_Pelicula,par_Resenia_Pelicula,par_Duracion_Pelicula,par_Fecha_Estreno_Pelicula,
par_URLImagenPelicula,par_Clv_Idioma,par_Clv_Subtitulos,par_Clv_Genero,par_Clv_Clasificacion,DEFAULT) ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `proceInfCine` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `proceInfCine`(
par_iCineHistoria varchar(50),
par_Link_Facebook varchar(45),
par_Link_Instagram varchar(45),
par_UbicacionCine varchar(50),
par_TelefonoCine varchar(100),
par_EMail_Cine varchar(45),
par_URL_Img_CineHistoria varchar(500))
INSERT CineHistoria VALUES(par_iCineHistoria,par_Link_Facebook,par_Link_Instagram,par_UbicacionCine,par_TelefonoCine,par_EMail_Cine,par_URL_Img_CineHistoria) ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `procePromociones` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `procePromociones`(
par_NombrePromocion  varchar(50),
par_Fecha_Inicio_Promocion date,
par_Fecha_final_Promocion date,
par_Descripcion_Promocion varchar(250),
par_TipoPromocion varchar(50),
par_URL_Img_Promociones varchar(100))
INSERT Promociones VALUES(DEFAULT,par_NombrePromocion,par_Fecha_Inicio_Promocion,par_Fecha_final_Promocion,par_Descripcion_Promocion,par_TipoPromocion,par_URL_Img_Promociones,DEFAULT) ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `proceUser` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `proceUser`(
par_Password_Usuario  varchar(10))
UPDATE Usuarios SET Password_Usuario=par_Password_Usuario WHERE Clave_Usuario=1 ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-31 22:17:32
