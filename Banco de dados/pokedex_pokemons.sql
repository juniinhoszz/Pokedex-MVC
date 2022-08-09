CREATE DATABASE  IF NOT EXISTS `pokedex` /*!40100 DEFAULT CHARACTER SET utf8mb3 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `pokedex`;
-- MySQL dump 10.13  Distrib 8.0.29, for Win64 (x86_64)
--
-- Host: localhost    Database: pokedex
-- ------------------------------------------------------
-- Server version	8.0.29

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `pokemons`
--

DROP TABLE IF EXISTS `pokemons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pokemons` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `descricao` varchar(150) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `linkfoto` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pokemons`
--

LOCK TABLES `pokemons` WRITE;
/*!40000 ALTER TABLE `pokemons` DISABLE KEYS */;
INSERT INTO `pokemons` VALUES (1,'Bulbasaur','Há uma semente de planta em suas costas desde o dia em que este Pokémon nasce. A semente lentamente cresce.','Grama','http://pm1.narvii.com/6223/11335ffde96efad386b23068bb8751d77e26c1ef_00.jpg'),(2,'Ivysaur','Quando a lâmpada em suas costas cresce grande, parece perder a capacidade de ficar em suas patas traseiras.','Grama','https://assets.pokemon.com/assets/cms2/img/pokedex/full/002.png'),(3,'Venusaur','Sua planta floresce quando está absorvendo energia solar. Ele fica em movimento para buscar a luz solar.','Grama','https://assets.pokemon.com/assets/cms2/img/pokedex/full/003.png'),(4,'Charmander','Tem preferência por coisas quentes. Quando chove, diz-se que o vapor jorra da ponta da cauda.','Fogo','https://assets.pokemon.com/assets/cms2/img/pokedex/full/004.png'),(5,'Charmeleon','Tem uma natureza bárbara. Em batalha, ele chicoteia sua cauda ardente ao redor e corta com garras afiadas.','Fogo','https://assets.pokemon.com/assets/cms2/img/pokedex/full/005.png'),(6,'Charizard','Ele cospe fogo que é quente o suficiente para derreter pedregulhos. Pode causar incêndios florestais soprando chamas.','Fogo','https://assets.pokemon.com/assets/cms2/img/pokedex/full/006.png'),(7,'Squirtle ','Quando ele retrai seu pescoço longo em sua concha, ele esguicha água com força vigorosa.','Água','https://assets.pokemon.com/assets/cms2/img/pokedex/full/007.png'),(8,'Wartortle ','É reconhecido como um símbolo de longevidade. Se sua concha tem algas, esse Wartortle é muito velho.','Água','https://assets.pokemon.com/assets/cms2/img/pokedex/full/008.png'),(9,'Blastoise','Ele esmaga seu inimigo sob seu corpo pesado para causar desmaios. Em uma pitada, ele vai se retirar dentro de sua concha.','Água','https://assets.pokemon.com/assets/cms2/img/pokedex/full/009.png'),(10,'Gyarados ','Tem uma natureza extremamente agressiva. O Hyper Beam que dispara de sua boca incinera totalmente todos os alvos.','Água','https://assets.pokemon.com/assets/cms2/img/pokedex/full/130.png'),(11,'Pikachu ','Pikachu que pode gerar eletricidade poderosa tem sacos de bochecha que são extra macios e super elásticos.','Elétrico','http://pm1.narvii.com/6434/7a2cb5fc86df1db37db549422128c66186059808_00.jpg'),(12,'Raichu','Sua cauda longa serve como um solo para se proteger de sua própria potência de alta tensão.','Elétrico','https://assets.pokemon.com/assets/cms2/img/pokedex/full/026.png');
/*!40000 ALTER TABLE `pokemons` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-08-04  0:06:34
