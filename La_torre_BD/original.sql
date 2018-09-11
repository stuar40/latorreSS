CREATE DATABASE  IF NOT EXISTS `antenas` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `antenas`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: antenas
-- ------------------------------------------------------
-- Server version	5.7.14

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `compra`
--

DROP TABLE IF EXISTS `compra`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `compra` (
  `idcompra` int(11) NOT NULL AUTO_INCREMENT,
  `numero_comp` varchar(45) NOT NULL,
  `fecha_comp` date DEFAULT NULL,
  `subtotal_comp` decimal(8,2) DEFAULT NULL,
  `total_comp` decimal(8,2) NOT NULL,
  `proveedores_id` int(11) NOT NULL,
  PRIMARY KEY (`idcompra`),
  KEY `fk_compra_proveedores1_idx` (`proveedores_id`),
  CONSTRAINT `fk_compra_proveedores1` FOREIGN KEY (`proveedores_id`) REFERENCES `proveedores` (`id_proveedores`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compra`
--

LOCK TABLES `compra` WRITE;
/*!40000 ALTER TABLE `compra` DISABLE KEYS */;
INSERT INTO `compra` VALUES (1,'1','2017-05-17',0.00,0.00,1),(3,'3','2017-05-18',1350.00,1350.00,1),(4,'4','2017-05-18',20000.00,20000.00,2),(5,'5','2017-05-18',15500.00,15500.00,1),(6,'6','2017-05-18',18500.00,18500.00,2),(7,'7','2017-05-18',3500.00,3500.00,3),(8,'8','2017-05-18',3500.00,3500.00,3),(9,'9','2017-05-20',4500.00,4500.00,2),(10,'10','2017-05-20',5400.00,5400.00,3),(11,'11','2017-05-20',3200.00,3200.00,2),(12,'12','2017-05-29',900.00,900.00,1),(13,'13','2017-05-29',4999.95,4999.95,4),(14,'14','2017-05-31',1500.00,1500.00,4),(15,'15','2017-05-31',3000.00,3000.00,4),(16,'16','2017-05-31',900.00,900.00,1),(17,'17','2017-05-31',4500.00,4500.00,4);
/*!40000 ALTER TABLE `compra` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detalle_compra`
--

DROP TABLE IF EXISTS `detalle_compra`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detalle_compra` (
  `iddetalle_compra` int(11) NOT NULL AUTO_INCREMENT,
  `cantidad_dcomp` varchar(45) NOT NULL,
  `precio_dcomp` varchar(45) NOT NULL,
  `subtotal_dcomp` varchar(45) DEFAULT NULL,
  `producto_id` int(11) NOT NULL,
  `compra_id` int(11) NOT NULL,
  PRIMARY KEY (`iddetalle_compra`),
  KEY `fk_detalle_compra_producto1_idx` (`producto_id`),
  KEY `fk_detalle_compra_compra1_idx` (`compra_id`),
  CONSTRAINT `fk_detalle_compra_compra1` FOREIGN KEY (`compra_id`) REFERENCES `compra` (`idcompra`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_detalle_compra_producto1` FOREIGN KEY (`producto_id`) REFERENCES `producto` (`id_producto`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detalle_compra`
--

LOCK TABLES `detalle_compra` WRITE;
/*!40000 ALTER TABLE `detalle_compra` DISABLE KEYS */;
INSERT INTO `detalle_compra` VALUES (1,'1','1350.00','1350.00',1,3),(4,'10','1500.00','15000',1,4),(5,'5','1000.00','20000',4,4),(6,'15','800.00','12000',2,5),(7,'5','700.00','15500',3,5),(8,'10','1500.00','15000',1,6),(9,'5','700.00','3500',3,6),(10,'5','700.00','3500',3,7),(11,'5','700.00','3500',3,8),(12,'5','900.00','4500',5,9),(13,'2','1500.00','3000',1,10),(14,'3','800.00','2400',2,10),(15,'5','500.00','2500',7,11),(16,'1','700.00','700',3,11),(17,'1','900.00','900',5,12),(18,'5','999.99','4999.95',9,13),(19,'1','1500.00','1500',1,14),(20,'3','1000.00','3000',4,15),(21,'1','900.00','900',5,16),(22,'3','1500.00','4500',1,17);
/*!40000 ALTER TABLE `detalle_compra` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detalle_venta`
--

DROP TABLE IF EXISTS `detalle_venta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detalle_venta` (
  `iddetalle_venta` int(11) NOT NULL AUTO_INCREMENT,
  `cantidad_dtventa` decimal(8,2) NOT NULL,
  `costo_dtventa` decimal(8,2) DEFAULT NULL,
  `precio_dtventa` decimal(8,2) NOT NULL,
  `serieprod_dtventa` varchar(45) DEFAULT NULL,
  `subtotal_dtventa` decimal(8,2) NOT NULL,
  `producto_id` int(11) DEFAULT NULL,
  `venta_id` int(11) NOT NULL,
  `servicio_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`iddetalle_venta`),
  KEY `fk_detalle_venta_producto_idx` (`producto_id`),
  KEY `fk_detalle_venta_venta1_idx` (`venta_id`),
  KEY `fk_detalle_venta_servicio1_idx` (`servicio_id`),
  CONSTRAINT `fk_detalle_venta_producto` FOREIGN KEY (`producto_id`) REFERENCES `producto` (`id_producto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_detalle_venta_servicio1` FOREIGN KEY (`servicio_id`) REFERENCES `servicio` (`id_servicio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_detalle_venta_venta1` FOREIGN KEY (`venta_id`) REFERENCES `venta` (`idventa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detalle_venta`
--

LOCK TABLES `detalle_venta` WRITE;
/*!40000 ALTER TABLE `detalle_venta` DISABLE KEYS */;
INSERT INTO `detalle_venta` VALUES (1,1.00,700.00,700.00,'NnN-m2',700.00,2,2,NULL),(50,1.00,1500.00,1500.00,'m01',1500.00,1,3,NULL),(51,1.00,800.00,800.00,'m02',800.00,2,3,NULL),(52,1.00,700.00,700.00,'m03',700.00,3,3,NULL),(53,1.00,1000.00,1000.00,'r04',1000.00,4,3,NULL),(54,1.00,1500.00,1500.00,'2',1500.00,NULL,4,2),(55,2.00,1500.00,1500.00,'2',3000.00,NULL,4,2),(56,2.00,1500.00,1500.00,'m01',3000.00,1,5,NULL),(57,1.00,800.00,800.00,'m02',800.00,2,5,NULL),(58,1.00,1500.00,1500.00,'m01',1500.00,1,6,NULL),(59,2.00,1500.00,1500.00,'m01',3000.00,1,7,NULL),(60,4.00,900.00,900.00,'m03',3600.00,5,8,NULL),(61,4.00,1500.00,1500.00,'m01',6000.00,1,8,NULL),(62,1.00,1000.00,1000.00,'1',1000.00,NULL,9,1),(63,2.00,1550.00,1550.00,'m01',3100.00,1,10,NULL),(64,1.00,800.00,800.00,'m02',800.00,2,10,NULL),(65,1.00,1000.00,1000.00,'r04',1000.00,4,11,NULL),(66,1.00,1000.00,1000.00,'r04',1000.00,4,11,NULL),(67,1.00,1500.00,1500.00,'5',1500.00,NULL,12,5),(68,1.00,1500.00,1500.00,'m01',1500.00,1,13,NULL),(69,1.00,2000.00,2000.00,'3',2000.00,NULL,14,3),(70,1.00,500.00,500.00,'4',500.00,NULL,14,4),(71,1.00,500.00,500.00,'4',500.00,NULL,14,4),(72,1.00,1000.00,1000.00,'1',1000.00,NULL,15,1),(73,1.00,1500.00,1500.00,'m01',1500.00,1,16,NULL),(74,1.00,1500.00,1500.00,'m01',1500.00,1,16,NULL),(75,1.00,1500.00,1500.00,'m01',1500.00,1,17,NULL),(76,1.00,1000.00,1000.00,'1',1000.00,NULL,18,1),(82,1.00,0.00,0.00,'m05',0.00,6,19,NULL),(83,1.00,0.00,0.00,'m05',0.00,6,19,NULL),(84,1.00,500.00,500.00,'m05',500.00,7,19,NULL),(85,1.00,500.00,500.00,'m05',500.00,7,19,NULL),(86,1.00,1500.00,1500.00,'m01',1500.00,1,20,NULL),(87,1.00,800.00,800.00,'m02',800.00,2,20,NULL);
/*!40000 ALTER TABLE `detalle_venta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empleados`
--

DROP TABLE IF EXISTS `empleados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empleados` (
  `id_empleados` int(11) NOT NULL AUTO_INCREMENT,
  `nom_emple` varchar(45) NOT NULL,
  `sexo_emple` varchar(1) DEFAULT NULL,
  `dpi_emple` varchar(45) NOT NULL,
  `nit_emple` int(11) NOT NULL,
  `lice_emple` varchar(45) DEFAULT NULL,
  `tel_emple` varchar(45) DEFAULT NULL,
  `email_emple` varchar(45) DEFAULT NULL,
  `dir_emple` varchar(45) DEFAULT NULL,
  `fechaingres_emple` date DEFAULT NULL,
  `tipo_emple` int(11) DEFAULT NULL,
  `usuario_emple` varchar(45) NOT NULL,
  `pass_emple` varchar(45) NOT NULL,
  PRIMARY KEY (`id_empleados`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empleados`
--

LOCK TABLES `empleados` WRITE;
/*!40000 ALTER TABLE `empleados` DISABLE KEYS */;
INSERT INTO `empleados` VALUES (1,'Estuardo','m','1111',1111,'1111','1111','amestu@gmail','comitancillo','2017-05-17',1,'1','1'),(2,'Eddy','m','2222',2222,'2222','2222','eddy@gmail.com','Comitancillo','2017-05-17',2,'2','2'),(3,'David LÃ³pez','M','45987456',4568445,'asd456','789546','984asd654','asd48654','2017-05-31',1,'5','55'),(4,'Jonatan','M','456',456,'456654','45621654','165165asda','1654654','2017-05-31',0,'6','66'),(6,'julio','M','19218718271212',63705,'1821762524','41002301','xxxx','san jose caben','2017-05-02',0,'jd','jd'),(9,'Eddy Estuardo Agustin Marroquin','M','2743 45545 1204',83558764,'','55137630','amestuardo@gmail.com','Comitancillo','2018-01-13',0,'55','55');
/*!40000 ALTER TABLE `empleados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empresa_cliente`
--

DROP TABLE IF EXISTS `empresa_cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empresa_cliente` (
  `id_empresa` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_emp` varchar(45) NOT NULL,
  `nit_emp` int(11) NOT NULL,
  `descripcion_emp` varchar(45) DEFAULT NULL,
  `dir_emp` varchar(45) DEFAULT NULL,
  `tel_emp` varchar(20) DEFAULT NULL,
  `email_emp` varchar(45) DEFAULT NULL,
  `pais_emp` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_empresa`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresa_cliente`
--

LOCK TABLES `empresa_cliente` WRITE;
/*!40000 ALTER TABLE `empresa_cliente` DISABLE KEYS */;
INSERT INTO `empresa_cliente` VALUES (1,'SmartSoluciones ',3333,'Soluciones','SM','3333','smart@gmailc.om','Guatemala'),(2,'SmartConexion',4444,'Telecomunciaciones','SM','4444','smart@gmail.com','GT'),(3,'Syscom',555,'Productos','MX','555','Syscom@gmial','MX'),(4,'Oro Rey SM',123,'Cable TV internet','San Marcos','77608585','ororey@correo.com','Guatemala');
/*!40000 ALTER TABLE `empresa_cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `movimientos`
--

DROP TABLE IF EXISTS `movimientos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `movimientos` (
  `idmovimientos` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_mov` varchar(45) DEFAULT NULL,
  `fecha_mov` date DEFAULT NULL,
  `cantidad_mov` decimal(8,2) DEFAULT NULL,
  `precio_mov` decimal(8,2) DEFAULT NULL,
  `motivo_mov` varchar(45) DEFAULT NULL,
  `empleados_id` int(11) NOT NULL,
  `venta_idventa` int(11) DEFAULT NULL,
  `producto_id` int(11) DEFAULT NULL,
  `compra_idcompra` int(11) DEFAULT NULL,
  `servicio_id_servicio` int(11) DEFAULT NULL,
  PRIMARY KEY (`idmovimientos`),
  KEY `fk_movimientos_empleados1_idx` (`empleados_id`),
  KEY `fk_movimientos_venta1_idx` (`venta_idventa`),
  KEY `fk_movimientos_producto1_idx` (`producto_id`),
  KEY `fk_movimientos_compra1_idx` (`compra_idcompra`),
  KEY `fk_movimientos_servicio1_idx` (`servicio_id_servicio`),
  CONSTRAINT `fk_movimientos_compra1` FOREIGN KEY (`compra_idcompra`) REFERENCES `compra` (`idcompra`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_movimientos_empleados1` FOREIGN KEY (`empleados_id`) REFERENCES `empleados` (`id_empleados`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_movimientos_producto1` FOREIGN KEY (`producto_id`) REFERENCES `producto` (`id_producto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_movimientos_servicio1` FOREIGN KEY (`servicio_id_servicio`) REFERENCES `servicio` (`id_servicio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_movimientos_venta1` FOREIGN KEY (`venta_idventa`) REFERENCES `venta` (`idventa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movimientos`
--

LOCK TABLES `movimientos` WRITE;
/*!40000 ALTER TABLE `movimientos` DISABLE KEYS */;
INSERT INTO `movimientos` VALUES (1,'compra','2017-05-05',0.00,0.00,'0',1,1,NULL,NULL,NULL),(2,'Venta','2017-05-31',1.00,1500.00,'m01',2,13,1,NULL,NULL),(3,'Compra','2017-05-31',1.00,1500.00,'m01',2,NULL,1,NULL,NULL),(4,'Compra','2017-05-31',3.00,3000.00,'r04',2,NULL,4,15,NULL),(5,'Compra','2017-05-31',1.00,900.00,'m03',2,NULL,5,16,NULL),(6,'Servicio','2017-05-31',1.00,2000.00,'Estrucutracion',2,14,NULL,NULL,NULL),(7,'Servicio','2017-05-31',1.00,500.00,'Cableado',2,14,NULL,NULL,NULL),(8,'Servicio','2017-05-31',1.00,500.00,'Cableado',2,14,NULL,NULL,NULL),(9,'Servicio','2017-05-31',1.00,1000.00,'Mantenimiento',2,15,NULL,NULL,1),(10,'Venta','2017-05-31',1.00,1500.00,'m01',2,16,1,NULL,NULL),(11,'Venta','2017-05-31',1.00,1500.00,'m01',2,16,1,NULL,NULL),(12,'Venta','2017-05-31',1.00,1500.00,'m01',2,17,1,NULL,NULL),(13,'Compra','2017-05-31',3.00,4500.00,'m01',2,NULL,1,17,NULL),(14,'Servicio','2017-05-31',1.00,1000.00,'Mantenimiento',2,18,NULL,NULL,1),(20,'Venta','2017-06-02',1.00,0.00,'m05',3,19,6,NULL,NULL),(21,'Venta','2017-06-02',1.00,0.00,'m05',3,19,6,NULL,NULL),(22,'Venta','2017-06-02',1.00,500.00,'m05',3,19,7,NULL,NULL),(23,'Venta','2017-06-02',1.00,500.00,'m05',3,19,7,NULL,NULL),(24,'Venta','2018-01-14',1.00,1500.00,'m01',3,20,1,NULL,NULL),(25,'Venta','2018-01-14',1.00,800.00,'m02',3,20,2,NULL,NULL);
/*!40000 ALTER TABLE `movimientos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `producto`
--

DROP TABLE IF EXISTS `producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `serie_prod` varchar(45) DEFAULT NULL,
  `nom_prod` varchar(50) NOT NULL,
  `descr_prod` varchar(75) DEFAULT NULL,
  `stock_prod` decimal(8,2) NOT NULL,
  `stockmin_prod` decimal(8,2) DEFAULT NULL,
  `preciocosto_prod` decimal(8,2) DEFAULT NULL,
  `preciovent_prod` decimal(8,2) DEFAULT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producto`
--

LOCK TABLES `producto` WRITE;
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
INSERT INTO `producto` VALUES (1,'m01','pbm-m5','23 dbi',9.00,5.00,1500.00,1500.00),(2,'m02','NnN-m2','8 dbi',14.00,5.00,800.00,800.00),(3,'m03','NnM-m5','10 dbi',10.00,3.00,700.00,700.00),(4,'r04','Rb-300','mickrotic',4.00,3.00,1000.00,1000.00),(5,'m03','Ltbeam-16','Sector',2.00,0.00,900.00,900.00),(6,'m05','noecito','algo de noe',-2.00,5.00,0.00,0.00),(7,'m05','pruebainge','esto es una prueba ',3.00,5.00,500.00,500.00),(8,'m01','litebeam','esto es un prueba 12',0.00,0.00,0.00,0.00),(9,'1','nue','desc',5.00,1.00,999.99,999.99),(10,'m12','insercion con stokc','esto es un prueba insercion con stocl',5.00,3.00,100.00,150.00),(11,'2m12','insercion con stokc2','esto es un prueba insercion con stocl2',5.00,3.00,100.00,150.00),(12,'f01','final','esta es una preuba final',5.00,2.00,900.00,999.00),(13,'G657b3','Friba Drop ','Fibra optcia de 1 hilo redonda',-3.00,2.00,0.00,0.00);
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proveedores`
--

DROP TABLE IF EXISTS `proveedores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `proveedores` (
  `id_proveedores` int(11) NOT NULL AUTO_INCREMENT,
  `nom_prov` varchar(45) NOT NULL,
  `nit_prov` int(11) NOT NULL,
  `dir_prov` varchar(45) DEFAULT NULL,
  `decripcion_prov` varchar(75) DEFAULT NULL,
  `tel_prov` varchar(45) DEFAULT NULL,
  `email_prov` varchar(45) DEFAULT NULL,
  `pais_prov` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_proveedores`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proveedores`
--

LOCK TABLES `proveedores` WRITE;
/*!40000 ALTER TABLE `proveedores` DISABLE KEYS */;
INSERT INTO `proveedores` VALUES (1,'Weykan',666,'hhee','Redes','666','weyk@gmail','GT'),(2,'IntCM',777,'xla','Equipo','777','int@gmail','MX'),(3,'MCServ',888,'df','df','43','f','XL'),(4,'Spr',122564,'QTZ','1','1','spr@correo.com','Guatemala'),(7,'Pepsi',545454,'San Marcos','esto es una prueba para la torre','123321','pepsi@gma',NULL);
/*!40000 ALTER TABLE `proveedores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servicio`
--

DROP TABLE IF EXISTS `servicio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `servicio` (
  `id_servicio` int(11) NOT NULL AUTO_INCREMENT,
  `nom_serv` varchar(50) NOT NULL,
  `descripcion_serv` varchar(75) DEFAULT NULL,
  `precio_serv` decimal(8,2) DEFAULT NULL,
  PRIMARY KEY (`id_servicio`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicio`
--

LOCK TABLES `servicio` WRITE;
/*!40000 ALTER TABLE `servicio` DISABLE KEYS */;
INSERT INTO `servicio` VALUES (1,'Mantenimiento','Mantenimiento Estru',1000.00),(2,'Fusion FO','Fibra Optica',1500.00),(3,'Estrucutracion','Rack de Servidores',2000.00),(4,'Cableado','Cableado Cablemodem',500.00),(5,'Cableado Estructurado','Estructurar la instalacion de una central ',1500.00);
/*!40000 ALTER TABLE `servicio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tmp`
--

DROP TABLE IF EXISTS `tmp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tmp` (
  `id_tmp` int(11) NOT NULL AUTO_INCREMENT,
  `id_producto` int(11) NOT NULL,
  `cantidad_tmp` int(11) NOT NULL,
  `precio_tmp` double(8,2) DEFAULT NULL,
  `session_id` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_tmp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tmp`
--

LOCK TABLES `tmp` WRITE;
/*!40000 ALTER TABLE `tmp` DISABLE KEYS */;
/*!40000 ALTER TABLE `tmp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `venta`
--

DROP TABLE IF EXISTS `venta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `venta` (
  `idventa` int(11) NOT NULL AUTO_INCREMENT,
  `serie_venta` varchar(5) DEFAULT NULL,
  `numero_venta` varchar(20) NOT NULL,
  `fecha_venta` date DEFAULT NULL,
  `subtotal_venta` decimal(8,2) DEFAULT NULL,
  `descuento_venta` decimal(8,2) DEFAULT NULL,
  `totpagar_venta` decimal(8,2) NOT NULL,
  `empresa_cliente_id` int(11) NOT NULL,
  `empleados_id` int(11) NOT NULL,
  PRIMARY KEY (`idventa`),
  KEY `fk_venta_empresa_cliente1_idx` (`empresa_cliente_id`),
  KEY `fk_venta_empleados1_idx` (`empleados_id`),
  CONSTRAINT `fk_venta_empleados1` FOREIGN KEY (`empleados_id`) REFERENCES `empleados` (`id_empleados`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_venta_empresa_cliente1` FOREIGN KEY (`empresa_cliente_id`) REFERENCES `empresa_cliente` (`id_empresa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `venta`
--

LOCK TABLES `venta` WRITE;
/*!40000 ALTER TABLE `venta` DISABLE KEYS */;
INSERT INTO `venta` VALUES (1,'p','1','2017-05-17',0.00,0.00,0.00,1,1),(2,'m','2','2017-05-17',3550.00,0.00,3550.00,2,2),(3,'m','3','2017-05-18',4000.00,0.00,4000.00,1,2),(4,'s','4','2017-05-18',4500.00,0.00,4500.00,1,2),(5,'m','5','2017-05-18',3800.00,0.00,3800.00,1,2),(6,'m','6','2017-05-20',1500.00,0.00,1500.00,1,2),(7,'m','7','2017-05-20',3000.00,0.00,3000.00,1,1),(8,'m','8','2017-05-20',9600.00,0.00,9600.00,1,2),(9,'s','9','2017-05-20',1000.00,0.00,1000.00,1,1),(10,'m','10','2017-05-20',3900.00,0.00,3900.00,1,2),(11,'m','11','2017-05-29',2000.00,0.00,2000.00,1,2),(12,'s','12','2017-05-29',1500.00,0.00,1500.00,4,2),(13,'F','13','2017-05-31',1500.00,0.00,1500.00,1,2),(14,'s','14','2017-05-31',3000.00,0.00,3000.00,4,2),(15,'s','15','2017-05-31',1000.00,0.00,1000.00,4,2),(16,'F','16','2017-05-31',3000.00,0.00,3000.00,1,2),(17,'F','17','2017-05-31',1500.00,0.00,1500.00,1,2),(18,'s','18','2017-05-31',1000.00,0.00,1000.00,4,2),(19,'F','19','2017-06-02',1000.00,0.00,1000.00,2,3),(20,'F','20','2018-01-14',2300.00,0.00,2300.00,1,3);
/*!40000 ALTER TABLE `venta` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2007-05-21  2:09:27
