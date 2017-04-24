CREATE DATABASE  IF NOT EXISTS `adotepets` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `adotepets`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: adotepets
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
-- Table structure for table `adotar`
--

DROP TABLE IF EXISTS `adotar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adotar` (
  `usuario_id_usuario` int(11) NOT NULL,
  `animal_id_animal` int(11) NOT NULL,
  `data_adocao` date NOT NULL,
  PRIMARY KEY (`usuario_id_usuario`,`animal_id_animal`),
  KEY `fk_usuario_has_animal_animal1_idx` (`animal_id_animal`),
  KEY `fk_usuario_has_animal_usuario_idx` (`usuario_id_usuario`),
  CONSTRAINT `fk_usuario_has_animal_animal1` FOREIGN KEY (`animal_id_animal`) REFERENCES `animal` (`id_animal`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_has_animal_usuario` FOREIGN KEY (`usuario_id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adotar`
--

LOCK TABLES `adotar` WRITE;
/*!40000 ALTER TABLE `adotar` DISABLE KEYS */;
/*!40000 ALTER TABLE `adotar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `animal`
--

DROP TABLE IF EXISTS `animal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `animal` (
  `id_animal` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `raca` varchar(45) DEFAULT 'Sem raça definida',
  `sexo` varchar(45) DEFAULT NULL,
  `porte` varchar(45) DEFAULT NULL,
  `idade` varchar(45) DEFAULT NULL,
  `foto` mediumblob,
  `descricao` varchar(255) DEFAULT 'Nenhuma descrição',
  PRIMARY KEY (`id_animal`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `animal`
--

LOCK TABLES `animal` WRITE;
/*!40000 ALTER TABLE `animal` DISABLE KEYS */;
INSERT INTO `animal` VALUES (1,'cachorro','Pedro','pitbull','masculino','grande','10','pug.png','fgjfghfghfghfghfghf');
/*!40000 ALTER TABLE `animal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comentarios`
--

DROP TABLE IF EXISTS `comentarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comentarios` (
  `id_comentario` int(11) NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `nome` varchar(45) NOT NULL,
  `comentario` varchar(255) NOT NULL,
  `usuario_id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_comentario`,`usuario_id_usuario`),
  KEY `fk_comentarios_usuario1_idx` (`usuario_id_usuario`),
  CONSTRAINT `fk_comentarios_usuario1` FOREIGN KEY (`usuario_id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comentarios`
--

LOCK TABLES `comentarios` WRITE;
/*!40000 ALTER TABLE `comentarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `comentarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'testedb','testenobanco@db','1234','sjbv','12345678','sp'),(2,'dsadasdas','dsadasdasdas','23213213','sadasdas','31231321','dasdasa'),(3,'pedro','pedro.marcos97@hotmail.com','1997','sjbv','19999999999','SP'),(4,'abiloaldo','abi@gmail.com','123456789','asdsadads','1936363636','MG'),(5,'gfdgdfgdfgdgfgd','dfgdfgdgfd','42344234234','gfdgd','dfgdfgdfgdfgd','dfgdfgd'),(6,'testandouser','exemplouser@gmail,com','testeteste','saojaodaboavista','12345678',''),(7,'dsfsdfsdf','sdfsfsdfs','fsdfsdfsdfsd','sdsgdhfgjh','435678857','fdghdfzhs'),(8,'fgdgdgd','gfdgdfgd','gfddfgdfg','fdgdgdfgd','36665467','hyujujujujuju'),(9,'jhgjghjg','jghjghjg','hjgjg','hgjhgjg','555555555','hgjghj'),(10,'dfgdfg','dfgdfgdf','fdgdgdfgd','dfgdfgfd','464246242462','Exemplo de textarea'),(11,'supercao','','','','','');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-24  0:26:16
