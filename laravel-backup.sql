-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: localhost    Database: laravel
-- ------------------------------------------------------
-- Server version	5.7.22-0ubuntu0.16.04.1

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
-- Table structure for table `actividades`
--

DROP TABLE IF EXISTS `actividades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `actividades` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `actividad` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT '1',
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci,
  `contenido` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actividades`
--

LOCK TABLES `actividades` WRITE;
/*!40000 ALTER TABLE `actividades` DISABLE KEYS */;
INSERT INTO `actividades` VALUES (1,'Recorrido interpretado',1,'images/fotos-actividades/8005ce4c93ceb7e68fe89e08d1ac1e36.png','Jardín botánico y Sendero Gerardo Rodríguez','Recorrido interpretado por un guía especializado en el Jardín del CREDIA.','<p class=\"MsoNormal\" style=\"text-align: justify; line-height: 1.2;\"><span style=\"color: rgb(0, 0, 0); font-family: Helvetica;\">El Sendero\r\nGerardo Rodríguez, cuenta con un mundo fascinante, donde los reinos Plantae,\r\nanimal, fungí, visten sus mejores galas en el mundo natural. <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align: justify; line-height: 1.2;\"><span style=\"color: rgb(0, 0, 0); font-family: Helvetica;\">Cuenta con más\r\nde 500 árboles entre los cuales podemos encontrar, frutales, medicinales,\r\nmaderables y venenosos, además de ser un laboratorio viviente del mundo fungí,\r\ncon más de 250 hongos los que en los meses de lluvias aparecen bajo el dosel de\r\nlos arboles enriqueciendo los recorridos. <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align: justify; line-height: 1.2;\"><span style=\"color: rgb(0, 0, 0); font-family: Helvetica;\">Los más\r\nrepresentativos del reino animal son los insectos del orden de los Coleoptera,\r\nHomoptera, isóptera, Nymphalidae, Blattodea etc.&nbsp; &nbsp;<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align: justify; line-height: 1.2;\"><span style=\"color: rgb(0, 0, 0); font-family: Helvetica;\">Las Aves representadas\r\npor las más de 60 especies, siendo las familias de los Strigidae, Tyrannidae,\r\nColumbidae, Ardeidae, Icteridae, Accipitridae, Thraupidae, con mayor\r\nrepresentación en el jardín. <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align: justify; line-height: 1.2;\"><span style=\"color: rgb(0, 0, 0); font-family: Helvetica;\"><o:p>&nbsp;</o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align: center; line-height: 1.2;\"><span style=\"color: rgb(0, 0, 0); font-weight: bold; font-family: Helvetica;\">Ven y descubre\r\neste mundo fascinante a través de los recorridos en el sendero Gerardo\r\nRodríguez.</span> <o:p></o:p></p>','2018-10-23 22:04:25','2018-12-17 21:09:51'),(2,'Recorrido áreas protegidas del CBCH',1,'images/fotos-actividades/058e3a333f7b47cd48cf17fbed4f2a78.png','Pasaporte Verde del Corredor Biológico','Mediante esta herramienta se invita a recorrer las 10 áreas protegidas del CBCH.','<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"color: rgb(0, 0, 0); font-family: Helvetica;\">Al\r\nvisitar el CREDIA el niño adquiere su primera estampilla, una vez que ha\r\nterminado de recorrer el sendero Gerardo Rodríguez, está listo para que viaje\r\ncon su pasaporte verde a las Áreas Protegidas ubicadas a lo largo del corredor\r\nbiológico del Caribe Hondureño, 10 áreas lo conforman desde el Parque Nacional\r\nJeannette Kawas en el municipio de Tela al Parque Nacional Capiro Calentura en\r\nmunicipio de Trujillo, Colon.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"color: rgb(0, 0, 0); font-family: Helvetica;\">&nbsp;Se denomina&nbsp;<b style=\"\">corredor biológico</b>&nbsp;al\r\nel área que es utilizada para realizar una regeneración o recuperación mediante\r\nprocesos biológicos &nbsp;<a href=\"https://es.wikipedia.org/wiki/Proceso_biol%C3%B3gico\"></a>de las zonas de\r\namortiguamiento de las grandes extensiones de bosques existentes y que han sido\r\ndegradados a causa de la deforestación&nbsp;irracional de las extensas\r\ncoberturas boscosas que en siglos anteriores se encontraban en su plenitud\r\nmáxima con un ecosistema&nbsp;sustentable y un hábitat&nbsp;compuesto de gran\r\nvariedad de fauna y flora, pero que a causa de los efectos antropogénicos &nbsp;(causados\r\npor el hombre) estos bosques junto con todas las especies que habitan en ella\r\nhan desaparecido casi en su totalidad.</span><span style=\"font-family: Arial, sans-serif;\"><o:p></o:p></span></p>','2018-10-23 22:40:47','2018-12-17 21:23:20'),(3,'Charlas de concientización',1,'images/fotos-actividades/2deca5bfca4234ba2e879b952b0bb230.png','Forestería Comunitaria y Cambio Climático.','Concientización de métodos para mitigar los efectos del cambio climático.','<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"color: rgb(0, 0, 0); font-family: Helvetica;\">La\r\nparcela endoenergética de Guama, ubicada en la estación II del sendero Gerardo Rodríguez,\r\nes una muestra de los cultivos asociados <span style=\"font-size: 12pt; line-height: 107%;\">a la seguridad alimenticia, el cultivar en\r\ncallejones Inga puede reemplazar a la agricultura insostenible de talar y\r\nquemar el bosque tropical, resistir sequías de hasta 6 semanas, reducir la\r\nerosión y deslizamiento de tierras, incrementar la productividad y generar más\r\ndel 100% de la madera usada como combustible para cocinar desde una parcela no\r\nmuy grande.<o:p></o:p></span></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size: 12pt; line-height: 107%;\"><span style=\"color: rgb(0, 0, 0); font-family: Helvetica;\">El Gimkhana<b style=\"\"><i> del Cambio\r\nClimático, </i></b>es una iniciativa promovida por el Centro de Documentación e\r\nInterpretación Ambiental (CREDIA) que tiene por objetivo introducir en el\r\nconcepto de Cambio Climático a los niños y niñas hondureños, con la finalidad\r\nde sensibilizarlos sobre la importancia del fenómeno, sus efectos, y la\r\nnecesidad de adoptar comportamientos pro-ambientales que ayuden a mitigarlo.\r\nPara esto se incidirá en tres aspectos fundamentales: las causas, las\r\nconsecuencias y las soluciones al calentamiento global.</span><span style=\"font-family: Arial, sans-serif;\"><o:p></o:p></span></span></p>','2018-12-17 21:47:13','2018-12-17 21:47:13'),(4,'Proyecciones de video en 3D',1,'images/fotos-actividades/932a6a5a9f9954a8f91a17854a236b73.png','Videos sobre el ambiente y proyección en 3D','Enriqueciendo la experiencia de la visita en temas de importancia.','<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-family: Helvetica; color: rgb(0, 0, 0);\">La\r\nVideoteca del Centro Regional de Documentación e Interpretación Ambiental, cuenta\r\ncon una recopilación de videos de las áreas Protegidas y de sus iniciativas\r\nagroforestal asentadas en el corredor Biológico del Caribe Hondureño. <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-family: Helvetica; color: rgb(0, 0, 0);\">Los\r\nvideos Forman parte de la colección de material, que sirve para que los que\r\nvisiten la página web o redes sociales del CREDIA, puedan ser uso de ellos para\r\ninformase de lo que poseen en el ámbito natural. <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-family: Helvetica; color: rgb(0, 0, 0);\">A\r\ntravés del desarrollo de la temática de la problemática ambiental, los niños y\r\nniñas disfrutan de fotografías en 3D de los animales en peligro de extinción,\r\ndespertando su curiosidad por conocer y cuidar de ellos.&nbsp;</span><span style=\"font-family: Arial, sans-serif;\"><o:p></o:p></span></p>','2018-12-17 21:50:01','2018-12-17 21:50:01');
/*!40000 ALTER TABLE `actividades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `banners`
--

DROP TABLE IF EXISTS `banners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banners` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `indicador` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secuencia` int(11) DEFAULT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT '0',
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `banners_secuencia_unique` (`secuencia`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banners`
--

LOCK TABLES `banners` WRITE;
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;
INSERT INTO `banners` VALUES (1,'images/fotos-banners/5263e76bb02ca52118bde1e2ca5db586.jpg','fundacion','Sobre Nosotros','Conoce más sobre la fundación',NULL,0,NULL,NULL,'2018-10-30 19:57:02','2018-12-14 17:23:58'),(2,'images/fotos-banners/51abb55731e032428c7af5e4a93f9ef9.jpg','proyectos','Proyectos','Hola',NULL,0,NULL,NULL,'2018-10-30 20:17:17','2018-10-30 20:17:17'),(4,'images/fotos-banners/47a402ab0f0162da77cb4f9c5638b412.jpg','eventos','Eventos','Hola',NULL,0,NULL,NULL,'2018-10-30 20:22:52','2018-10-30 20:22:52'),(5,'images/fotos-banners/5c72f50616f48755d1924285b8bf4c1e.jpg','blog','Blog','Hola',NULL,0,NULL,NULL,'2018-10-30 20:25:30','2018-10-30 20:25:30'),(6,'images/fotos-banners/277b38fb031173ac85ae1b5a0ef2bb5e.jpg','contacto','Contáctenos','Únete se parte importante de la fundación',NULL,0,NULL,NULL,'2018-10-30 20:29:06','2018-10-30 20:29:06'),(7,'images/fotos-banners/c4ae9de5aca4fd4ccadb8f765fb52ec0.jpg','inicio','CREDIA','Centro Regional de Documentación e Interpretación Ambiental',1,1,'/blog/hola-mundo/17','Leer más','2018-11-23 18:58:11','2018-12-12 18:23:44'),(8,'images/fotos-banners/57201687e13f3be85658542104848374.jpg','patrocinador','Actividades','Engrandece tu empresa, apoyando nuestras actividades',NULL,0,NULL,NULL,'2018-11-26 20:45:04','2018-11-26 20:45:04'),(9,'images/fotos-banners/2d7b2055bcc1df7e184127930fffe429.jpg','voluntario','Voluntarios','Conviértete en uno más, se parte de nuestro voluntariado',NULL,0,NULL,NULL,'2018-11-26 20:56:57','2018-11-26 20:56:57'),(11,'images/fotos-banners/baa81c26e372d030d85353e5124e721c.jpg','sistema','Sistemas de información',NULL,NULL,0,NULL,NULL,'2018-12-07 15:22:23','2018-12-07 15:22:23'),(12,'images/fotos-banners/15dda8ddfb7eeba5b16df8352da8498e.jpg','faq','Preguntas frecuentes','puedes consultar si tienes alguna duda.',NULL,0,NULL,NULL,'2018-12-11 16:35:21','2018-12-11 16:35:21'),(14,'images/fotos-banners/2f0f47656cd4786b280ae80604c4d9e9.jpg','inicio','Hola',NULL,2,0,NULL,NULL,'2018-12-12 17:50:59','2018-12-12 17:50:59'),(15,'images/fotos-banners/3b925918fac8457611332e1268d2970e.jpg','inicio','Sistemas de información','hola',15,0,NULL,NULL,'2019-01-02 23:09:58','2019-01-02 23:09:58'),(16,'images/fotos-banners/9a0c558d6c850e8052537313e246711d.jpg','servicio','Alquiler de salones',NULL,NULL,0,NULL,NULL,'2019-01-03 21:52:05','2019-01-03 21:52:05');
/*!40000 ALTER TABLE `banners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_comments`
--

DROP TABLE IF EXISTS `blog_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog_comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `blog_post_id` int(10) unsigned DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT '0',
  `comentario` text COLLATE utf8mb4_unicode_ci,
  `parent` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `blog_comments_blog_post_id_foreign` (`blog_post_id`),
  CONSTRAINT `blog_comments_blog_post_id_foreign` FOREIGN KEY (`blog_post_id`) REFERENCES `blog_posts` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_comments`
--

LOCK TABLES `blog_comments` WRITE;
/*!40000 ALTER TABLE `blog_comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `blog_comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_posts`
--

DROP TABLE IF EXISTS `blog_posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog_posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `contenido_1` longtext COLLATE utf8mb4_unicode_ci,
  `estado` tinyint(1) NOT NULL DEFAULT '0',
  `fotos` longtext COLLATE utf8mb4_unicode_ci,
  `total_vista` int(11) DEFAULT '0',
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categoria_id` int(10) unsigned DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `blog_posts_user_id_foreign` (`user_id`),
  KEY `blog_posts_categoria_id_foreign` (`categoria_id`),
  CONSTRAINT `blog_posts_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`),
  CONSTRAINT `blog_posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_posts`
--

LOCK TABLES `blog_posts` WRITE;
/*!40000 ALTER TABLE `blog_posts` DISABLE KEYS */;
INSERT INTO `blog_posts` VALUES (15,'images/blog-articles-photos/e7f322bd88c05f3963c8061c53e003c8.jpg','Medio Ambiente','2018-11-15','<p>Hola mucho gusto!&nbsp;</p><p><br></p><p>Nota: bye.</p><p><br></p><p>hola!</p>',1,'[]',126,'José Di Gregorio','josedgregorio07@gmail.com',1,1,'2018-11-16 17:42:22','2019-01-02 22:40:34'),(17,'images/blog-articles-photos/95d0fbc07ed802d284538dce730fd19e.jpg','Hola mundo','2018-11-30','Hello World!',1,'[]',26,'Dennis Di Gregorio','dennis07@gmail.com',2,3,'2018-11-20 16:57:41','2018-12-20 23:29:39');
/*!40000 ALTER TABLE `blog_posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES (1,'Educación','Es un proceso de formación que permite la toma de conciencia de la importancia del medio ambiente, promueve en la ciudadanía el desarrollo de valores y nuevas actitudes que contribuyan al uso racional de los recursos naturales y a la solución de los problemas ambientales.','2018-11-01 20:09:13','2018-11-01 20:09:13'),(2,'Medio Ambiente','Educación Ambiental, para adolescentes y niños de escuelas y colegios.','2018-11-07 19:22:38','2018-11-07 19:22:38'),(3,'Hola','Hola','2018-12-20 18:34:01','2018-12-20 18:34:01');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contactos`
--

DROP TABLE IF EXISTS `contactos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contactos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mensaje` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contactos`
--

LOCK TABLES `contactos` WRITE;
/*!40000 ALTER TABLE `contactos` DISABLE KEYS */;
/*!40000 ALTER TABLE `contactos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_indicadores`
--

DROP TABLE IF EXISTS `data_indicadores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_indicadores` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `indicador_id` int(10) unsigned DEFAULT NULL,
  `fecha_inicio` datetime DEFAULT NULL,
  `fecha_final` datetime DEFAULT NULL,
  `valor` double(8,2) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT '0',
  `fecha_aprovacion` date DEFAULT NULL,
  `created_user_id` int(10) unsigned DEFAULT NULL,
  `updated_user_id` int(10) unsigned DEFAULT NULL,
  `institucion_id` int(10) unsigned DEFAULT NULL,
  `fuente_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `data_indicadores_indicador_id_foreign` (`indicador_id`),
  KEY `data_indicadores_created_user_id_foreign` (`created_user_id`),
  KEY `data_indicadores_updated_user_id_foreign` (`updated_user_id`),
  KEY `data_indicadores_institucion_id_foreign` (`institucion_id`),
  KEY `data_indicadores_fuente_id_foreign` (`fuente_id`),
  CONSTRAINT `data_indicadores_created_user_id_foreign` FOREIGN KEY (`created_user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `data_indicadores_fuente_id_foreign` FOREIGN KEY (`fuente_id`) REFERENCES `fuentes` (`id`),
  CONSTRAINT `data_indicadores_indicador_id_foreign` FOREIGN KEY (`indicador_id`) REFERENCES `indicadores` (`id`),
  CONSTRAINT `data_indicadores_institucion_id_foreign` FOREIGN KEY (`institucion_id`) REFERENCES `instituciones` (`id`),
  CONSTRAINT `data_indicadores_updated_user_id_foreign` FOREIGN KEY (`updated_user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_indicadores`
--

LOCK TABLES `data_indicadores` WRITE;
/*!40000 ALTER TABLE `data_indicadores` DISABLE KEYS */;
INSERT INTO `data_indicadores` VALUES (6,1,'2018-12-26 11:54:55','2018-12-22 11:54:57',100.00,0,NULL,1,1,1,1,'2018-12-07 17:55:03','2018-12-07 17:55:03');
/*!40000 ALTER TABLE `data_indicadores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empleados`
--

DROP TABLE IF EXISTS `empleados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empleados` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cargo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empleados`
--

LOCK TABLES `empleados` WRITE;
/*!40000 ALTER TABLE `empleados` DISABLE KEYS */;
INSERT INTO `empleados` VALUES (9,'images/fotos-equipo-de-trabajo/c072982ac8051b1535791d12a5b58829.jpg','Francisco Vásquez','Asistente Cendoc','2018-12-21 16:05:13','2018-12-21 16:05:13');
/*!40000 ALTER TABLE `empleados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `evento_patrocinador`
--

DROP TABLE IF EXISTS `evento_patrocinador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `evento_patrocinador` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `evento_id` int(10) unsigned DEFAULT NULL,
  `patrocinador_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `evento_patrocinador_evento_id_foreign` (`evento_id`),
  KEY `evento_patrocinador_patrocinador_id_foreign` (`patrocinador_id`),
  CONSTRAINT `evento_patrocinador_evento_id_foreign` FOREIGN KEY (`evento_id`) REFERENCES `eventos` (`id`) ON DELETE CASCADE,
  CONSTRAINT `evento_patrocinador_patrocinador_id_foreign` FOREIGN KEY (`patrocinador_id`) REFERENCES `patrocinadores` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `evento_patrocinador`
--

LOCK TABLES `evento_patrocinador` WRITE;
/*!40000 ALTER TABLE `evento_patrocinador` DISABLE KEYS */;
/*!40000 ALTER TABLE `evento_patrocinador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eventos`
--

DROP TABLE IF EXISTS `eventos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eventos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `contenido` longtext COLLATE utf8mb4_unicode_ci,
  `organizador` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `horaInicio` time DEFAULT NULL,
  `horaFinal` time DEFAULT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitud` decimal(9,6) DEFAULT NULL,
  `longitud` decimal(9,6) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eventos`
--

LOCK TABLES `eventos` WRITE;
/*!40000 ALTER TABLE `eventos` DISABLE KEYS */;
INSERT INTO `eventos` VALUES (1,'Sistemas de información','Mostrar contenido sobre los sistemas de información','images/fotos-eventos/97f7b2ab9cc8e2656fa268a33aeedac8.jpg','2018-12-28','DSPACE','José Di Gregorio','08:00:00','16:00:00','La Ceiba, Atlántida, Honduras el Naranjal','95031023','josedgregorio07@gmail.com',14.165868,16.353548,'2018-12-18 16:27:21','2018-12-18 16:29:27');
/*!40000 ALTER TABLE `eventos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faqs`
--

DROP TABLE IF EXISTS `faqs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faqs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pregunta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `respuesta` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faqs`
--

LOCK TABLES `faqs` WRITE;
/*!40000 ALTER TABLE `faqs` DISABLE KEYS */;
INSERT INTO `faqs` VALUES (1,'¿Qué es el Credia?','El CREDIA es un centro de educación e interpretación ambiental concebido como una instancia para el desarrollo y estudio del cambio climático y diferentes temas.','2018-12-11 15:57:20','2018-12-11 15:57:20'),(2,'Hola?','como estas?','2018-12-11 18:47:01','2018-12-11 18:47:01');
/*!40000 ALTER TABLE `faqs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `foto_voluntarios`
--

DROP TABLE IF EXISTS `foto_voluntarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `foto_voluntarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cargo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `foto_voluntarios`
--

LOCK TABLES `foto_voluntarios` WRITE;
/*!40000 ALTER TABLE `foto_voluntarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `foto_voluntarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fuentes`
--

DROP TABLE IF EXISTS `fuentes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fuentes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fuente` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institucion_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fuentes_institucion_id_foreign` (`institucion_id`),
  CONSTRAINT `fuentes_institucion_id_foreign` FOREIGN KEY (`institucion_id`) REFERENCES `instituciones` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fuentes`
--

LOCK TABLES `fuentes` WRITE;
/*!40000 ALTER TABLE `fuentes` DISABLE KEYS */;
INSERT INTO `fuentes` VALUES (1,'Cenaida Moncada',1,'2018-11-28 20:21:28','2018-12-15 02:11:39');
/*!40000 ALTER TABLE `fuentes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `indicador_user`
--

DROP TABLE IF EXISTS `indicador_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `indicador_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `indicador_id` int(10) unsigned DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `indicador_user_indicador_id_foreign` (`indicador_id`),
  KEY `indicador_user_user_id_foreign` (`user_id`),
  CONSTRAINT `indicador_user_indicador_id_foreign` FOREIGN KEY (`indicador_id`) REFERENCES `indicadores` (`id`) ON DELETE CASCADE,
  CONSTRAINT `indicador_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `indicador_user`
--

LOCK TABLES `indicador_user` WRITE;
/*!40000 ALTER TABLE `indicador_user` DISABLE KEYS */;
INSERT INTO `indicador_user` VALUES (1,1,1),(2,1,2);
/*!40000 ALTER TABLE `indicador_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `indicadores`
--

DROP TABLE IF EXISTS `indicadores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `indicadores` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci,
  `frecuencia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frecuencia_posteo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `protocolo_recoleccion` longtext COLLATE utf8mb4_unicode_ci,
  `calculo_indicador` longtext COLLATE utf8mb4_unicode_ci,
  `tipo_indicador` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `evaluacion_tipo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unidad_medida_id` int(10) unsigned DEFAULT NULL,
  `institucion_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `indicadores_unidad_medida_id_foreign` (`unidad_medida_id`),
  KEY `indicadores_institucion_id_foreign` (`institucion_id`),
  CONSTRAINT `indicadores_institucion_id_foreign` FOREIGN KEY (`institucion_id`) REFERENCES `instituciones` (`id`),
  CONSTRAINT `indicadores_unidad_medida_id_foreign` FOREIGN KEY (`unidad_medida_id`) REFERENCES `unidades_de_medidas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `indicadores`
--

LOCK TABLES `indicadores` WRITE;
/*!40000 ALTER TABLE `indicadores` DISABLE KEYS */;
INSERT INTO `indicadores` VALUES (1,'Elevación de la costa','Se procede a realizar un estudio sobre los daños causados y el desplazamiento de las playas hacia dentro de Corozal.','anual','anual','Se procede a realizar entrevistas periódicas, para obtener reseñas sobre el impacto de como estaba hasta como se encuentra actualmente y cuales son los daños colaterales y directos en los que se ven afectados los pobladores de esta zona.','Se procede a realizar un levantamiento de las altitudes y revisión del área.','impacto','cualitativo',2,1,'2018-11-28 17:50:41','2018-11-28 17:50:41');
/*!40000 ALTER TABLE `indicadores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `instituciones`
--

DROP TABLE IF EXISTS `instituciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `instituciones` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `instituciones`
--

LOCK TABLES `instituciones` WRITE;
/*!40000 ALTER TABLE `instituciones` DISABLE KEYS */;
INSERT INTO `instituciones` VALUES (1,'Fundación CREDIA','2018-11-27 22:44:52','2018-11-27 22:44:52');
/*!40000 ALTER TABLE `instituciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2018_09_21_162345_create_table_pag_eventos',2),(4,'2018_09_21_164127_create_table_patrocinadores',3),(5,'2018_09_21_164648_create_table_blog',4),(6,'2018_09_21_164832_create_table_blog_comments',5),(9,'2018_09_21_165120_create_table_sliders',6),(10,'2018_09_24_221938_jd_cambios_tabla_slider',6),(12,'2018_10_22_230120_jd_crear_tabla_voluntariado',7),(13,'2013_04_09_062329_create_revisions_table',8),(14,'2018_10_23_124925_jd_agregando_columna_voluntarios',9),(16,'2018_10_23_145456_jd_crear_tabla_actividad',10),(17,'2018_10_23_160740_jd_agregando_columna_estado_tabla_actividad',11),(18,'2018_10_29_171527_jd_create_contacto',12),(19,'2018_10_29_171633_jd_create_sociales',12),(21,'2018_10_30_120827_jd_created_table_banners',13),(22,'2018_10_30_143244_jd_nullables_tables',14),(23,'2016_05_10_130540_create_permission_tables',15),(25,'2018_11_01_100658_jd_cambios_table_blog',16),(33,'2018_11_01_113451_jd_cambios_table_blog_comments',17),(35,'2018_11_01_164435_jd_cambios_table_blog_1',18),(39,'2018_11_05_114541_jd_cambios_blog_posts',19),(46,'2018_11_08_124250_jd_cambios_tabla_eventos',20),(48,'2018_11_08_140608_jd_cambios_relacio_eventos',21),(50,'2018_11_08_142241_jd_crear_tabla_contacto_eventos',22),(52,'2018_11_11_013906_jd_eliminar_tabla_duplicada',23),(54,'2018_11_11_015145_jd_cambios_tabla_redes_sociales',24),(57,'2018_11_12_163107_jd_agregando_cont_visitas',25),(59,'2018_11_15_121757_jd_eliminar_columna_blog',26),(61,'2018_11_21_111231_jd_eliminar_campos_tabla_eventos',27),(66,'2018_11_22_105800_jd_crear_tabla_proyectos',28),(68,'2018_11_23_121116_jd_eliminar_tabla_slider',29),(70,'2018_11_27_125239_jd_create_table_instituciones',30),(72,'2018_11_27_135419_jd_create_table_indicadores',31),(75,'2018_11_28_112629_jd_cambios_tabla_indicadores',32),(78,'2018_11_28_124811_jd_crear_tabla_ingresodata_indicador',33),(81,'2018_11_30_131812_jd_cambios_proyectos',34),(83,'2018_12_11_090157_jd_create_table_faq',35),(84,'2018_12_11_095841_jd_tabla_equipo_de_trabajo',36),(86,'2018_12_11_113716_jd_cambios_table_faqs',37),(88,'2018_12_12_115501_jd_cambios_tabla_banner',38),(89,'2018_12_12_123205_jd_create_voluntarios_foto',39),(95,'2018_12_13_161314_jd_cambios_table_blog_posts',40),(96,'2018_12_14_172959_jd_add_columns_blog_posts',41),(98,'2018_12_14_181950_jd_add_coluns_actividades',42),(99,'2018_12_14_195710_jd_add_column_foto_table_user',43),(100,'2018_12_18_113024_jd_create_tabla_sistemas',44),(103,'2018_12_19_172818_jd_update_relacion_categorios_with_blog_and_proyect',45);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_type_model_id_index` (`model_type`,`model_id`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `model_has_roles` (
  `role_id` int(10) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_type_model_id_index` (`model_type`,`model_id`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` VALUES (1,'Backpack\\Base\\app\\Models\\BackpackUser',1),(1,'Backpack\\Base\\app\\Models\\BackpackUser',2),(2,'Backpack\\Base\\app\\Models\\BackpackUser',3);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` VALUES ('josedgregorio07@gmail.com','$2y$10$naTYcexxdI5OGLk5Dk.SAuTtbKz1DXTbS7.g.lFCVocxC3LdM8kA.','2018-06-04 23:14:23');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patrocinadores`
--

DROP TABLE IF EXISTS `patrocinadores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patrocinadores` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patrocinadores`
--

LOCK TABLES `patrocinadores` WRITE;
/*!40000 ALTER TABLE `patrocinadores` DISABLE KEYS */;
/*!40000 ALTER TABLE `patrocinadores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'add-actividad','web','2018-11-23 22:43:26','2018-11-23 22:43:26'),(2,'delete-actividad','web','2018-11-23 22:43:26','2018-11-23 22:43:26'),(3,'edit-actividad','web','2018-11-23 22:43:26','2018-11-23 22:43:26'),(4,'view-actividad','web','2018-11-23 22:43:26','2018-11-23 22:43:26'),(5,'search-actividad','web','2018-11-23 22:43:26','2018-11-23 22:43:26'),(6,'add-banner','web','2018-11-23 22:43:26','2018-11-23 22:43:26'),(7,'delete-banner','web','2018-11-23 22:43:27','2018-11-23 22:43:27'),(8,'edit-banner','web','2018-11-23 22:43:27','2018-11-23 22:43:27'),(9,'view-banner','web','2018-11-23 22:43:27','2018-11-23 22:43:27'),(10,'search-banner','web','2018-11-23 22:43:27','2018-11-23 22:43:27'),(11,'add-blog','web','2018-11-23 22:43:27','2018-11-23 22:43:27'),(12,'delete-blog','web','2018-11-23 22:43:27','2018-11-23 22:43:27'),(13,'edit-blog','web','2018-11-23 22:43:27','2018-11-23 22:43:27'),(14,'view-blog','web','2018-11-23 22:43:27','2018-11-23 22:43:27'),(15,'search-blog','web','2018-11-23 22:43:27','2018-11-23 22:43:27'),(16,'add-blogcomment','web','2018-11-23 22:43:27','2018-11-23 22:43:27'),(17,'delete-blogcomment','web','2018-11-23 22:43:27','2018-11-23 22:43:27'),(18,'edit-blogcomment','web','2018-11-23 22:43:27','2018-11-23 22:43:27'),(19,'view-blogcomment','web','2018-11-23 22:43:27','2018-11-23 22:43:27'),(20,'search-blogcomment','web','2018-11-23 22:43:27','2018-11-23 22:43:27'),(21,'add-categoria','web','2018-11-23 22:43:27','2018-11-23 22:43:27'),(22,'delete-categoria','web','2018-11-23 22:43:27','2018-11-23 22:43:27'),(23,'edit-categoria','web','2018-11-23 22:43:27','2018-11-23 22:43:27'),(24,'view-categoria','web','2018-11-23 22:43:27','2018-11-23 22:43:27'),(25,'search-categoria','web','2018-11-23 22:43:27','2018-11-23 22:43:27'),(26,'add-contacto','web','2018-11-23 22:43:27','2018-11-23 22:43:27'),(27,'delete-contacto','web','2018-11-23 22:43:28','2018-11-23 22:43:28'),(28,'edit-contacto','web','2018-11-23 22:43:28','2018-11-23 22:43:28'),(29,'view-contacto','web','2018-11-23 22:43:28','2018-11-23 22:43:28'),(30,'search-contacto','web','2018-11-23 22:43:28','2018-11-23 22:43:28'),(31,'add-contactoevento','web','2018-11-23 22:43:28','2018-11-23 22:43:28'),(32,'delete-contactoevento','web','2018-11-23 22:43:28','2018-11-23 22:43:28'),(33,'edit-contactoevento','web','2018-11-23 22:43:28','2018-11-23 22:43:28'),(34,'view-contactoevento','web','2018-11-23 22:43:28','2018-11-23 22:43:28'),(35,'search-contactoevento','web','2018-11-23 22:43:28','2018-11-23 22:43:28'),(36,'add-evento','web','2018-11-23 22:43:28','2018-11-23 22:43:28'),(37,'delete-evento','web','2018-11-23 22:43:28','2018-11-23 22:43:28'),(38,'edit-evento','web','2018-11-23 22:43:28','2018-11-23 22:43:28'),(39,'view-evento','web','2018-11-23 22:43:28','2018-11-23 22:43:28'),(40,'search-evento','web','2018-11-23 22:43:28','2018-11-23 22:43:28'),(41,'add-patrocinador','web','2018-11-23 22:43:28','2018-11-23 22:43:28'),(42,'delete-patrocinador','web','2018-11-23 22:43:28','2018-11-23 22:43:28'),(43,'edit-patrocinador','web','2018-11-23 22:43:28','2018-11-23 22:43:28'),(44,'view-patrocinador','web','2018-11-23 22:43:28','2018-11-23 22:43:28'),(45,'search-patrocinador','web','2018-11-23 22:43:28','2018-11-23 22:43:28'),(46,'add-proyecto','web','2018-11-23 22:43:28','2018-11-23 22:43:28'),(47,'delete-proyecto','web','2018-11-23 22:43:28','2018-11-23 22:43:28'),(48,'edit-proyecto','web','2018-11-23 22:43:28','2018-11-23 22:43:28'),(49,'view-proyecto','web','2018-11-23 22:43:29','2018-11-23 22:43:29'),(50,'search-proyecto','web','2018-11-23 22:43:29','2018-11-23 22:43:29'),(51,'add-role','web','2018-11-23 22:43:29','2018-11-23 22:43:29'),(52,'delete-role','web','2018-11-23 22:43:29','2018-11-23 22:43:29'),(53,'edit-role','web','2018-11-23 22:43:29','2018-11-23 22:43:29'),(54,'view-role','web','2018-11-23 22:43:29','2018-11-23 22:43:29'),(55,'search-role','web','2018-11-23 22:43:29','2018-11-23 22:43:29'),(56,'add-social','web','2018-11-23 22:43:29','2018-11-23 22:43:29'),(57,'delete-social','web','2018-11-23 22:43:29','2018-11-23 22:43:29'),(58,'edit-social','web','2018-11-23 22:43:29','2018-11-23 22:43:29'),(59,'view-social','web','2018-11-23 22:43:29','2018-11-23 22:43:29'),(60,'search-social','web','2018-11-23 22:43:29','2018-11-23 22:43:29'),(61,'add-user','web','2018-11-23 22:43:29','2018-11-23 22:43:29'),(62,'delete-user','web','2018-11-23 22:43:29','2018-11-23 22:43:29'),(63,'edit-user','web','2018-11-23 22:43:29','2018-11-23 22:43:29'),(64,'view-user','web','2018-11-23 22:43:30','2018-11-23 22:43:30'),(65,'search-user','web','2018-11-23 22:43:30','2018-11-23 22:43:30'),(66,'add-voluntario','web','2018-11-23 22:43:30','2018-11-23 22:43:30'),(67,'delete-voluntario','web','2018-11-23 22:43:30','2018-11-23 22:43:30'),(68,'edit-voluntario','web','2018-11-23 22:43:30','2018-11-23 22:43:30'),(69,'view-voluntario','web','2018-11-23 22:43:30','2018-11-23 22:43:30'),(70,'search-voluntario','web','2018-11-23 22:43:30','2018-11-23 22:43:30'),(71,'add-filterable-model','web','2018-11-26 04:13:08','2018-11-26 04:13:08'),(72,'delete-filterable-model','web','2018-11-26 04:13:08','2018-11-26 04:13:08'),(73,'edit-filterable-model','web','2018-11-26 04:13:09','2018-11-26 04:13:09'),(74,'view-filterable-model','web','2018-11-26 04:13:09','2018-11-26 04:13:09'),(75,'search-filterable-model','web','2018-11-26 04:13:09','2018-11-26 04:13:09'),(76,'add-indicador','web','2018-11-27 22:54:33','2018-11-27 22:54:33'),(77,'delete-indicador','web','2018-11-27 22:54:33','2018-11-27 22:54:33'),(78,'edit-indicador','web','2018-11-27 22:54:33','2018-11-27 22:54:33'),(79,'view-indicador','web','2018-11-27 22:54:33','2018-11-27 22:54:33'),(80,'search-indicador','web','2018-11-27 22:54:33','2018-11-27 22:54:33'),(81,'add-institucion','web','2018-11-27 22:54:33','2018-11-27 22:54:33'),(82,'delete-institucion','web','2018-11-27 22:54:33','2018-11-27 22:54:33'),(83,'edit-institucion','web','2018-11-27 22:54:33','2018-11-27 22:54:33'),(84,'view-institucion','web','2018-11-27 22:54:33','2018-11-27 22:54:33'),(85,'search-institucion','web','2018-11-27 22:54:34','2018-11-27 22:54:34'),(86,'add-unidadmedida','web','2018-11-27 22:54:34','2018-11-27 22:54:34'),(87,'delete-unidadmedida','web','2018-11-27 22:54:34','2018-11-27 22:54:34'),(88,'edit-unidadmedida','web','2018-11-27 22:54:34','2018-11-27 22:54:34'),(89,'view-unidadmedida','web','2018-11-27 22:54:34','2018-11-27 22:54:34'),(90,'search-unidadmedida','web','2018-11-27 22:54:34','2018-11-27 22:54:34'),(91,'add-dataindicador','web','2018-11-28 20:19:50','2018-11-28 20:19:50'),(92,'delete-dataindicador','web','2018-11-28 20:19:50','2018-11-28 20:19:50'),(93,'edit-dataindicador','web','2018-11-28 20:19:50','2018-11-28 20:19:50'),(94,'view-dataindicador','web','2018-11-28 20:19:50','2018-11-28 20:19:50'),(95,'search-dataindicador','web','2018-11-28 20:19:50','2018-11-28 20:19:50'),(96,'add-fuente','web','2018-11-28 20:19:50','2018-11-28 20:19:50'),(97,'delete-fuente','web','2018-11-28 20:19:50','2018-11-28 20:19:50'),(98,'edit-fuente','web','2018-11-28 20:19:51','2018-11-28 20:19:51'),(99,'view-fuente','web','2018-11-28 20:19:51','2018-11-28 20:19:51'),(100,'search-fuente','web','2018-11-28 20:19:51','2018-11-28 20:19:51'),(101,'add-faq','web','2018-12-11 15:47:17','2018-12-11 15:47:17'),(102,'delete-faq','web','2018-12-11 15:47:17','2018-12-11 15:47:17'),(103,'edit-faq','web','2018-12-11 15:47:17','2018-12-11 15:47:17'),(104,'view-faq','web','2018-12-11 15:47:17','2018-12-11 15:47:17'),(105,'search-faq','web','2018-12-11 15:47:17','2018-12-11 15:47:17'),(106,'add-equipo','web','2018-12-11 16:25:53','2018-12-11 16:25:53'),(107,'delete-equipo','web','2018-12-11 16:25:53','2018-12-11 16:25:53'),(108,'edit-equipo','web','2018-12-11 16:25:53','2018-12-11 16:25:53'),(109,'view-equipo','web','2018-12-11 16:25:53','2018-12-11 16:25:53'),(110,'search-equipo','web','2018-12-11 16:25:53','2018-12-11 16:25:53'),(111,'add-fotovoluntario','web','2018-12-12 18:44:55','2018-12-12 18:44:55'),(112,'delete-fotovoluntario','web','2018-12-12 18:44:55','2018-12-12 18:44:55'),(113,'edit-fotovoluntario','web','2018-12-12 18:44:55','2018-12-12 18:44:55'),(114,'view-fotovoluntario','web','2018-12-12 18:44:55','2018-12-12 18:44:55'),(115,'search-fotovoluntario','web','2018-12-12 18:44:55','2018-12-12 18:44:55'),(116,'add-sistema','web','2019-01-02 23:08:26','2019-01-02 23:08:26'),(117,'delete-sistema','web','2019-01-02 23:08:26','2019-01-02 23:08:26'),(118,'edit-sistema','web','2019-01-02 23:08:26','2019-01-02 23:08:26'),(119,'view-sistema','web','2019-01-02 23:08:26','2019-01-02 23:08:26'),(120,'search-sistema','web','2019-01-02 23:08:26','2019-01-02 23:08:26');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proyecto_categoria`
--

DROP TABLE IF EXISTS `proyecto_categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `proyecto_categoria` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `proyecto_id` int(10) unsigned DEFAULT NULL,
  `categoria_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `proyecto_categoria_proyecto_id_foreign` (`proyecto_id`),
  KEY `proyecto_categoria_categoria_id_foreign` (`categoria_id`),
  CONSTRAINT `proyecto_categoria_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE CASCADE,
  CONSTRAINT `proyecto_categoria_proyecto_id_foreign` FOREIGN KEY (`proyecto_id`) REFERENCES `proyectos` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proyecto_categoria`
--

LOCK TABLES `proyecto_categoria` WRITE;
/*!40000 ALTER TABLE `proyecto_categoria` DISABLE KEYS */;
INSERT INTO `proyecto_categoria` VALUES (1,6,1),(2,6,2),(3,7,2),(4,8,2);
/*!40000 ALTER TABLE `proyecto_categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proyecto_patrocinador`
--

DROP TABLE IF EXISTS `proyecto_patrocinador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `proyecto_patrocinador` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `proyecto_id` int(10) unsigned DEFAULT NULL,
  `patrocinador_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `proyecto_patrocinador_proyecto_id_foreign` (`proyecto_id`),
  KEY `proyecto_patrocinador_patrocinador_id_foreign` (`patrocinador_id`),
  CONSTRAINT `proyecto_patrocinador_patrocinador_id_foreign` FOREIGN KEY (`patrocinador_id`) REFERENCES `patrocinadores` (`id`) ON DELETE CASCADE,
  CONSTRAINT `proyecto_patrocinador_proyecto_id_foreign` FOREIGN KEY (`proyecto_id`) REFERENCES `proyectos` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proyecto_patrocinador`
--

LOCK TABLES `proyecto_patrocinador` WRITE;
/*!40000 ALTER TABLE `proyecto_patrocinador` DISABLE KEYS */;
/*!40000 ALTER TABLE `proyecto_patrocinador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proyectos`
--

DROP TABLE IF EXISTS `proyectos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `proyectos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_convenio` date DEFAULT NULL,
  `contenido` longtext COLLATE utf8mb4_unicode_ci,
  `avance` double(8,2) DEFAULT '0.00',
  `presupuesto` double DEFAULT '0',
  `utilizado` double DEFAULT '0',
  `fecha_inicio` date DEFAULT NULL,
  `fecha_finalizacion` date DEFAULT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `proyectos_user_id_foreign` (`user_id`),
  CONSTRAINT `proyectos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proyectos`
--

LOCK TABLES `proyectos` WRITE;
/*!40000 ALTER TABLE `proyectos` DISABLE KEYS */;
INSERT INTO `proyectos` VALUES (6,'SUBVENCIÓN PROMOCIÓN DE LA GESTIÓN DE CONOCIMIENTO EN MATERIA DE FORESTERÍA COMUNITARIA Y CAMBIO CLIMÁTICO A TRAVÉS DE LAS PLATAFORMAS DE EDUCACIÓN AMBIENTAL Y EL OBSERVATORIO NACIONAL DE CAMBIO CLIMÁTICO DEL CREDIA','En el marco del proyecto adaptación al cambio climático en el sector forestal CLIFOR-ICF','images/fotos-proyectos/35b23edf450cb2d30fd134cea97a4f0e.jpg','2018-11-20','<p class=\"MsoNormal\" style=\"text-align:justify;text-justify:inter-ideograph\"><span style=\"font-family: Helvetica; color: rgb(0, 0, 0);\"><span lang=\"ES-MX\">El CREDIA en\r\nun Centro Regional de Documentación e interpretación Ambiental creado en el año\r\n2011 para fortalecer el acceso a la información ambiental en Honduras.&nbsp; La Fundación CREDIA fue creada en el marco\r\ndel proyecto Pro-corredor de la Unión europea (UE) la cual se ve como la\r\ninstancia oportuna para la convergencia de acciones conjuntas que promueve la\r\neducación ambiental y la gestión del conocimiento en temas vinculados con la\r\ngestión y desarrollo ambiental de corredero Biológico del Caribe Hondureño. Así\r\nmismo mediante</span> la implementación de un modelo de gestión basado en el\r\nfortalecimiento de redes y promoción del análisis estratégico de los procesos\r\nsociales, económicos y ambientales, para la toma de decisiones participativas.</span></p><p class=\"MsoNormal\" style=\"text-align:justify;text-justify:inter-ideograph\"><span lang=\"ES-MX\" style=\"font-family: Helvetica; color: rgb(0, 0, 0);\">El CREDIA\r\ncuenta con un Observatorio de desarrollo Sostenible y Cambio Climático el cual\r\nconstituye una plataforma para el manejo integral de la información, cuyo\r\nobjetivo estratégico está orientado a generar análisis especializados que\r\ncoadyuven en una mejor compresión del entorno socioambiental y faciliten la\r\ntoma de decisiones para la adaptación al cambio climático.<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"text-align:justify;text-justify:inter-ideograph\"><span lang=\"ES-MX\" style=\"font-family: Helvetica; color: rgb(0, 0, 0);\">Bajo este\r\nmarco de propósitos la fundación ha venido ejecutando con el programa de\r\nadaptación al cambio climático en el sector Forestal la subvención en sus <b>siglas CLIFOR “PROMOCIÓN DE LA GESTIÓN DE\r\nCONOCIMIENTO EN MATERIA DE FORESTERÍA COMUNITARIA Y CAMBIO CLIMÁTICO A TRAVÉS\r\nDE LAS PLATAFORMAS DE EDUCACIÓN AMBIENTAL Y EL OBSERVATORIO NACIONAL DE CAMBIO\r\nCLIMÁTICO DEL CREDIA</b>” con una duración de 16 meses y un financiamiento por\r\nparte de la Unión europea de 190 mil Euros.</span></p><p class=\"MsoNormal\" style=\"text-align:justify;text-justify:inter-ideograph\"><span style=\"font-family: Helvetica; color: rgb(0, 0, 0);\"><span lang=\"ES-MX\">La\r\nsubvención tiene como grupos destinatarios a:&nbsp;\r\n</span>Secretarias\r\nde Estado, Universidades, Centros Educativos, Estudiantes, Docentes, Programas\r\ny Proyectos, Gremios Forestales, organizaciones comunitarias organizadas y el\r\nCREDIA y como beneficiarios finales ICF, Mi Ambiente, CREDIA, Universidades,\r\nsociedad civil organizada, grupos agroforestales, grupos comunitarios\r\norganizados, población hondureña en general.</span></p><p class=\"MsoNormal\" style=\"text-align:justify;text-justify:inter-ideograph\"><span lang=\"ES-MX\" style=\"font-family: Helvetica; color: rgb(0, 0, 0);\">Se busca a\r\ntravés de la subvención facilitar oportunidades de aprendizaje e innovación\r\nvinculados a los procesos de forestería comunitaria y adaptación al cambio\r\nclimático, haciendo uso de las plataformas de gestión del conocimiento\r\nreferentes a la temática socioambiental en Honduras. Así mismo Contribuir al\r\nfortalecimiento del monitoreo e interpretación de los modelos de forestaría\r\ncomunitaria y adaptación al cambio climático.</span></p><p class=\"MsoNormal\" style=\"text-align:justify;text-justify:inter-ideograph\"><span lang=\"ES-MX\" style=\"font-family: Helvetica; color: rgb(0, 0, 0);\">Como\r\nresultados de la intervención son :la facilitación de la educación ambiental\r\nrelacionada con la forestería comunitaria y adaptación al cambio climático, en\r\nel CREDIA; integrar en el ONCC-DS /CREDIA, indicadores que contribuyan a la\r\ngestión del sector forestal de Honduras, con el apoyo de Centro de Información\r\ndel Patrimonio Forestal (CIPF), consensuados con los colegios profesionales,\r\nacademia, otros; generar a través del Centro de Documentación (CENDOC) del\r\nCREDIA un respaldo de acceso a la información de forestería comunitaria y\r\ncambio climático en Honduras y Actualizados los instrumentos estratégicos y\r\noperativos para el fortalecimiento de la Fundación <b>CREDIA</b>.</span></p><p class=\"MsoNormal\" style=\"text-align:justify;text-justify:inter-ideograph\"><span lang=\"ES-MX\" style=\"font-weight: bold; font-family: Helvetica; color: rgb(0, 0, 0);\">Las\r\nprincipales actividades de la Subvención que se están desarrollando:</span></p><p class=\"MsoNormal\" style=\"text-align:justify;text-justify:inter-ideograph\"><span lang=\"ES-MX\" style=\"font-family: Helvetica; color: rgb(0, 0, 0);\">Enriquecimientos\r\ndel Sendero Gerardo Rodríguez y la producción de materiales didáctico de apoyo\r\na la interpretación ambiental, que incluye la preparación de guías con enfoque\r\na forestería comunitaria y cambio climático. Así mismo la preparación de ayudad\r\naudiovisuales, establecimientos de nuevas rutas del sendero, parcelas\r\nagroforestales y la construcción de un Kiosko y maqueta con enfoque a la\r\nforestería comunitaria y cambio climático.</span></p><p class=\"MsoNormal\" style=\"text-align:justify;text-justify:inter-ideograph\"><span lang=\"ES-MX\" style=\"font-family: Helvetica; color: rgb(0, 0, 0);\">El\r\ndesarrollo de un Foro mesoamericano en coordinación de la Universidad Nacional\r\nAutónoma de Honduras <b>UNAH-CURLA</b> para\r\nla retroalimentación de buenas prácticas de forestería comunitaria que incluye\r\nel tema de adaptación al cambio climático con la participación de expertos de\r\nCosta Rica, México, Guatemala y Panamá.</span></p><p class=\"MsoNormal\" style=\"text-align:justify;text-justify:inter-ideograph\"><span lang=\"ES-MX\" style=\"font-family: Helvetica; color: rgb(0, 0, 0);\">Estudio para\r\nconsensuar ficha o protocolo de registro indicadores de cambio climático con\r\nactores clave (CIPF/ICF, Colegios profesionales, academia, otros). E Implementar\r\nsistema de información de indicadores del sector forestal y cambio climático a\r\nnivel nacional.</span></p><p class=\"MsoNormal\" style=\"text-align:justify;text-justify:inter-ideograph\"><span lang=\"ES-MX\" style=\"font-family: Helvetica; color: rgb(0, 0, 0);\">Fortalecimiento\r\nde la plataforma tecnológica del <b>CENDOC/CREDIA</b>\r\npara el correcto funcionamiento del sistema de información documental, pagina web,\r\nelaboración de base de datos y/o catálogo de información y sistema de gestión\r\nde los indicadores de forestería comunitaria y cambio climático.</span></p><p class=\"MsoNormal\" style=\"text-align:justify;text-justify:inter-ideograph\"><span lang=\"ES-MX\" style=\"font-family: Helvetica; color: rgb(0, 0, 0);\">Y finalmente\r\napoyar a la fundación <b>CREDIA</b> en su\r\nfortalecimiento institucional que comprende la conformación del Comité Técnico\r\nConsultivo del <b>CREDIA/ONCCDS</b>, la revisión\r\ny actualización de los instrumentos estratégicos y otros ya existentes en el <b>CREDIA</b> Elaboración de estrategia de\r\nsostenibilidad financiera del <b>CREDIA</b>\r\ny la implementación de una campaña de visibilizarían y promoción de los\r\nservicios del <b>CREDIA</b>.</span></p><p class=\"MsoNormal\" style=\"text-align:justify;text-justify:inter-ideograph\"><span lang=\"ES-MX\" style=\"font-family: Helvetica; color: rgb(0, 0, 0);\">En ese mismo\r\nfortalecimiento desarrollar una de intercambio de experiencias a centros de\r\ninformación y observatorios ambientales a nivel centro americano. Como también,\r\nDiseñar y publicar una revista de experiencias exitosas a nivel de país sobre\r\nforestería comunitaria y adaptación al cambio climático.</span></p><p class=\"MsoNormal\" style=\"text-align:justify;text-justify:inter-ideograph;\r\nline-height:115%;mso-pagination:none;mso-layout-grid-align:none;text-autospace:\r\nnone\">\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"MsoNormal\" style=\"text-align:justify;text-justify:inter-ideograph\"><span lang=\"ES-MX\"><span style=\"font-family: Helvetica; color: rgb(0, 0, 0);\">La\r\nsubvención busca además el fortalecimiento del <b>CREDIA</b> mediante la creación o establecimiento de convenios con\r\ninstituciones generadoras de información científica, principalmente en temas de\r\nCambio Climático y sus efectos.</span><o:p></o:p></span></p>',90.00,0,0,'2018-10-01','2018-11-08','en_proceso',1,'2018-11-30 20:37:49','2018-12-20 23:27:55'),(7,'Hola mundo','Hola mucho gusto.','images/fotos-proyectos/cde832abf539854dc647ea61559dbcd9.jpg','2018-12-20','Hola',13.00,10000,10,'2018-10-17','2018-11-09','en_proceso',1,'2018-12-20 19:59:17','2018-12-20 23:28:06'),(8,'Hola mundo','Hola que hace','images/fotos-proyectos/2c8eb10e8ceaeb6122d3b05b6dfc23ae.jpg','2019-01-30','Hola putitos',100.00,10000,100000,'2018-10-22','2018-10-22','finalizado',1,'2019-01-02 22:15:49','2019-01-02 22:16:21');
/*!40000 ALTER TABLE `proyectos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `redes_sociales`
--

DROP TABLE IF EXISTS `redes_sociales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `redes_sociales` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `red` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `redes_sociales`
--

LOCK TABLES `redes_sociales` WRITE;
/*!40000 ALTER TABLE `redes_sociales` DISABLE KEYS */;
INSERT INTO `redes_sociales` VALUES (1,'facebook','https://www.facebook.com/crediahonduras/','2018-11-11 08:07:30','2018-11-11 08:07:30');
/*!40000 ALTER TABLE `redes_sociales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `revisions`
--

DROP TABLE IF EXISTS `revisions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `revisions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `revisionable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revisionable_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_value` text COLLATE utf8mb4_unicode_ci,
  `new_value` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `revisions_revisionable_id_revisionable_type_index` (`revisionable_id`,`revisionable_type`)
) ENGINE=InnoDB AUTO_INCREMENT=129 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `revisions`
--

LOCK TABLES `revisions` WRITE;
/*!40000 ALTER TABLE `revisions` DISABLE KEYS */;
INSERT INTO `revisions` VALUES (10,'App\\Models\\Slider',6,1,'created_at',NULL,'2018-10-23 11:07:10','2018-10-23 17:07:10','2018-10-23 17:07:10'),(11,'App\\Models\\Slider',6,1,'titulo','CREDIA','CREDIA 1','2018-10-23 17:07:39','2018-10-23 17:07:39'),(12,'App\\Models\\Slider',6,1,'titulo','CREDIA 1','CREDIA','2018-10-23 17:07:58','2018-10-23 17:07:58'),(13,'App\\Models\\Role',1,1,'created_at',NULL,'2018-11-23 16:57:09','2018-11-23 22:57:09','2018-11-23 22:57:09'),(14,'Backpack\\Base\\app\\Models\\BackpackUser',3,1,'created_at',NULL,'2018-11-25 22:26:19','2018-11-26 04:26:19','2018-11-26 04:26:19'),(15,'Backpack\\Base\\app\\Models\\BackpackUser',1,1,'remember_token','OnBeATOM2gL6n4RsKz4w2hIMuZ6uq9sdOxn3OoQcu08izb8JA2YgkNpNT7Ns','JCXqy1MOeYVFVNCb98QZwTYll9OCT366GcVgWElp8W9nv3fRsoFTijD0yuKr','2018-11-26 04:26:30','2018-11-26 04:26:30'),(16,'Backpack\\Base\\app\\Models\\BackpackUser',3,3,'remember_token',NULL,'Glt1BEkO2z07pomFNDkNP23OYiwwbP56KyKl7DgCNqjidUKrfGys0REZ4OOj','2018-11-26 04:26:59','2018-11-26 04:26:59'),(17,'Backpack\\Base\\app\\Models\\BackpackUser',1,1,'remember_token','JCXqy1MOeYVFVNCb98QZwTYll9OCT366GcVgWElp8W9nv3fRsoFTijD0yuKr','2l2i6k7fDHv7eAsHLtnf2catxVjkhOLtMjNxoA4E2fMqzXYjbdMgyl0PeVRw','2018-11-26 04:30:42','2018-11-26 04:30:42'),(18,'Backpack\\Base\\app\\Models\\BackpackUser',3,3,'remember_token','Glt1BEkO2z07pomFNDkNP23OYiwwbP56KyKl7DgCNqjidUKrfGys0REZ4OOj','WibeJP0ZN95rtYE9HCYUnK92KtY1ipnh2vkKAapwbG8U5m52UGbMJx5924QT','2018-11-26 04:30:58','2018-11-26 04:30:58'),(19,'Backpack\\Base\\app\\Models\\BackpackUser',3,1,'institucion_id',NULL,'1','2018-11-27 22:50:23','2018-11-27 22:50:23'),(20,'App\\Models\\Role',1,1,'name','Administrador','Super Administrador','2018-11-27 22:56:45','2018-11-27 22:56:45'),(21,'App\\Models\\Role',1,1,'name','Super Administrador','Administrador','2018-11-27 22:56:58','2018-11-27 22:56:58'),(22,'App\\Models\\Role',1,1,'name','Administrador','Super Administrador','2018-11-27 22:57:43','2018-11-27 22:57:43'),(23,'Backpack\\Base\\app\\Models\\BackpackUser',1,1,'remember_token','2l2i6k7fDHv7eAsHLtnf2catxVjkhOLtMjNxoA4E2fMqzXYjbdMgyl0PeVRw','tDI2aSHOYreSnXUn3ea6fMZvmnDwNgUDfwdxMunSH1rKG0Gka7d8XzajEagx','2018-11-27 23:09:17','2018-11-27 23:09:17'),(24,'Backpack\\Base\\app\\Models\\BackpackUser',1,1,'remember_token','tDI2aSHOYreSnXUn3ea6fMZvmnDwNgUDfwdxMunSH1rKG0Gka7d8XzajEagx','Xf7h5R2nm1MMH69O6ntY8OuaJLNJPOI4hkNezyQfVLCa6CH9KeUoMVtGeU8d','2018-11-27 23:21:50','2018-11-27 23:21:50'),(25,'Backpack\\Base\\app\\Models\\BackpackUser',1,1,'remember_token','Xf7h5R2nm1MMH69O6ntY8OuaJLNJPOI4hkNezyQfVLCa6CH9KeUoMVtGeU8d','6ABI5Dx6otZPmczXlIzvOoEmyo3t8eFw2Q9VNqmkv2giOruxT5F6omFnxtgJ','2018-11-30 15:26:47','2018-11-30 15:26:47'),(26,'Backpack\\Base\\app\\Models\\BackpackUser',1,1,'remember_token','6ABI5Dx6otZPmczXlIzvOoEmyo3t8eFw2Q9VNqmkv2giOruxT5F6omFnxtgJ','5vnTIgfUBhDSyqKChONcRsbJXSPaloheG2eEQN3978m0nMXEXkHFiQ8I1Y89','2018-11-30 17:03:24','2018-11-30 17:03:24'),(27,'Backpack\\Base\\app\\Models\\BackpackUser',1,1,'remember_token','5vnTIgfUBhDSyqKChONcRsbJXSPaloheG2eEQN3978m0nMXEXkHFiQ8I1Y89','Wkjza1gm8jZpvhaZ7wVEt7RCUK5dylJ1ze5iVZ42cR1JqwxTwNBYpFfnhrDz','2018-11-30 17:04:03','2018-11-30 17:04:03'),(28,'Backpack\\Base\\app\\Models\\BackpackUser',1,1,'remember_token','Wkjza1gm8jZpvhaZ7wVEt7RCUK5dylJ1ze5iVZ42cR1JqwxTwNBYpFfnhrDz','ghELUxnl0ntJDTQ8RYCyxa7NIT1Ptsgl8990foiYB3x6yGJoufJMVdu9o9gH','2018-11-30 17:04:29','2018-11-30 17:04:29'),(29,'Backpack\\Base\\app\\Models\\BackpackUser',1,1,'remember_token','ghELUxnl0ntJDTQ8RYCyxa7NIT1Ptsgl8990foiYB3x6yGJoufJMVdu9o9gH','7oEcXxHmHAmfdPzUcFqNqTldxQylDKrMlsxYHzVPJ7dPDLNaYv29DYoYB08Q','2018-11-30 17:06:53','2018-11-30 17:06:53'),(30,'Backpack\\Base\\app\\Models\\BackpackUser',1,1,'remember_token','7oEcXxHmHAmfdPzUcFqNqTldxQylDKrMlsxYHzVPJ7dPDLNaYv29DYoYB08Q','hnNwsW9hD7ps3y0WWISfjOYDWByOzUyejGIIarZz5002gvjiE7Q9tH4vSQ79','2018-11-30 17:09:32','2018-11-30 17:09:32'),(31,'Backpack\\Base\\app\\Models\\BackpackUser',1,1,'remember_token','hnNwsW9hD7ps3y0WWISfjOYDWByOzUyejGIIarZz5002gvjiE7Q9tH4vSQ79','djKnGpT4iCx9gJLlHIBziXs6usRmW1E02JT0crB92BB2PZ2ZCNbqQ41UBsj4','2018-11-30 17:17:32','2018-11-30 17:17:32'),(32,'Backpack\\Base\\app\\Models\\BackpackUser',1,1,'remember_token','djKnGpT4iCx9gJLlHIBziXs6usRmW1E02JT0crB92BB2PZ2ZCNbqQ41UBsj4','ItKqQKakDvb4E6ULgy92NwvbsGLsZpozjt5s4BLFO5txi5c5w3n40NsZ7PR7','2018-11-30 17:38:44','2018-11-30 17:38:44'),(33,'Backpack\\Base\\app\\Models\\BackpackUser',1,1,'remember_token','ItKqQKakDvb4E6ULgy92NwvbsGLsZpozjt5s4BLFO5txi5c5w3n40NsZ7PR7','jxJC2dp9nhBsKXo1ZUZNJpakc48AKEhrOyRW8TJdJ8GPxPgO32UzEEiy78FG','2018-11-30 17:40:57','2018-11-30 17:40:57'),(34,'Backpack\\Base\\app\\Models\\BackpackUser',1,1,'remember_token','jxJC2dp9nhBsKXo1ZUZNJpakc48AKEhrOyRW8TJdJ8GPxPgO32UzEEiy78FG','DB1JU5u4PcYGuHzl3Dwda7zAfp2hzcNqT2dYeqa0CIecznoRG5hvh9pLVIZi','2018-12-04 21:18:15','2018-12-04 21:18:15'),(35,'Backpack\\Base\\app\\Models\\BackpackUser',1,1,'remember_token','DB1JU5u4PcYGuHzl3Dwda7zAfp2hzcNqT2dYeqa0CIecznoRG5hvh9pLVIZi','3FtXkkQ7MuMAl31rN74nsMd5IekORtJW6F3J30Fsj6RxTT0NqSjTZUNffB2u','2018-12-06 22:55:08','2018-12-06 22:55:08'),(36,'App\\Models\\Role',2,1,'created_at',NULL,'2018-12-13 14:31:19','2018-12-13 20:31:19','2018-12-13 20:31:19'),(37,'Backpack\\Base\\app\\Models\\BackpackUser',1,1,'remember_token','3FtXkkQ7MuMAl31rN74nsMd5IekORtJW6F3J30Fsj6RxTT0NqSjTZUNffB2u','SLVBhsxi5NilnkYwKFWsQ5Hje4wNzEIMAyjo0ZelwVkwJbOXflN7lxJdezl5','2018-12-13 20:31:50','2018-12-13 20:31:50'),(38,'Backpack\\Base\\app\\Models\\BackpackUser',3,3,'remember_token','WibeJP0ZN95rtYE9HCYUnK92KtY1ipnh2vkKAapwbG8U5m52UGbMJx5924QT','mL7J6SeDXNnk1Ep9riQFLSKkC0nCeuplHV8K9qb6PZQRwNME6OtcmBdphC6u','2018-12-13 20:33:02','2018-12-13 20:33:02'),(39,'Backpack\\Base\\app\\Models\\BackpackUser',1,1,'remember_token','SLVBhsxi5NilnkYwKFWsQ5Hje4wNzEIMAyjo0ZelwVkwJbOXflN7lxJdezl5','9jNhhN4BGa6gJpqEpXtyiDVzm4vTveYZCF2Do5Z0ABkqjNPy3jqvatdDZkzb','2018-12-13 20:33:26','2018-12-13 20:33:26'),(40,'Backpack\\Base\\app\\Models\\BackpackUser',3,3,'remember_token','mL7J6SeDXNnk1Ep9riQFLSKkC0nCeuplHV8K9qb6PZQRwNME6OtcmBdphC6u','xT4Kfv1HiQ1jfnzminysHl4uOMzA1i1LvriQBRAlrFobym3WyLWmCPfFWL0F','2018-12-13 20:36:11','2018-12-13 20:36:11'),(41,'App\\Models\\Role',3,1,'created_at',NULL,'2018-12-13 14:37:58','2018-12-13 20:37:58','2018-12-13 20:37:58'),(42,'App\\Models\\Role',4,1,'created_at',NULL,'2018-12-13 14:38:26','2018-12-13 20:38:26','2018-12-13 20:38:26'),(43,'Backpack\\Base\\app\\Models\\BackpackUser',1,1,'remember_token','9jNhhN4BGa6gJpqEpXtyiDVzm4vTveYZCF2Do5Z0ABkqjNPy3jqvatdDZkzb','4jqbRUEVy1nZxlCvbT2iatmzodCAZZLByXgPY7JxAHFCi8YEtCQp37Ppbwbr','2018-12-13 20:38:32','2018-12-13 20:38:32'),(44,'Backpack\\Base\\app\\Models\\BackpackUser',3,3,'remember_token','xT4Kfv1HiQ1jfnzminysHl4uOMzA1i1LvriQBRAlrFobym3WyLWmCPfFWL0F','B0JRx6owL8Aeit3DPGReeRwxXVG4loIMP30ESMnU0zviRjYgfOnfVBf0NoLz','2018-12-13 20:38:43','2018-12-13 20:38:43'),(45,'Backpack\\Base\\app\\Models\\BackpackUser',3,1,'institucion_id','1',NULL,'2018-12-13 20:39:33','2018-12-13 20:39:33'),(46,'Backpack\\Base\\app\\Models\\BackpackUser',1,1,'remember_token','4jqbRUEVy1nZxlCvbT2iatmzodCAZZLByXgPY7JxAHFCi8YEtCQp37Ppbwbr','tvnzBGQNZ9xZr2OcZBiK4xZYPx9wFn3HgOVyJHXIXZXHZ5pIXPFztsDTMQNB','2018-12-13 20:40:07','2018-12-13 20:40:07'),(47,'Backpack\\Base\\app\\Models\\BackpackUser',3,3,'remember_token','B0JRx6owL8Aeit3DPGReeRwxXVG4loIMP30ESMnU0zviRjYgfOnfVBf0NoLz','2bxkPFkU8kVgn7SsrC6zv4sRADWhNYxremSkbcJewgOX5QNUL3JDtcxYlO5A','2018-12-13 20:43:13','2018-12-13 20:43:13'),(48,'Backpack\\Base\\app\\Models\\BackpackUser',1,1,'remember_token','tvnzBGQNZ9xZr2OcZBiK4xZYPx9wFn3HgOVyJHXIXZXHZ5pIXPFztsDTMQNB','WwzH9OJOVbAC2veDDF8ccOCGm462Xh3ERll1ribjnX5jugVLSXiFu0GxS7UX','2018-12-13 20:43:23','2018-12-13 20:43:23'),(49,'App\\Models\\Actividad',1,1,'actividad','Charlas','Charlas 1','2018-12-15 00:49:43','2018-12-15 00:49:43'),(50,'App\\Models\\Actividad',1,1,'actividad','Charlas 1','Charlas','2018-12-15 00:49:48','2018-12-15 00:49:48'),(51,'App\\Models\\Fuente',1,1,'fuente','Cenaida Moncada','Cenaida','2018-12-15 02:11:35','2018-12-15 02:11:35'),(52,'App\\Models\\Fuente',1,1,'fuente','Cenaida','Cenaida Moncada','2018-12-15 02:11:39','2018-12-15 02:11:39'),(53,'Backpack\\Base\\app\\Models\\BackpackUser',1,1,'foto',NULL,'images/fotos-usuarios/453bc815c89c560b01af680c884b7d8e.jpg','2018-12-15 02:12:40','2018-12-15 02:12:40'),(54,'App\\Models\\Actividad',1,1,'actividad','Charlas','Recorrido interpretado','2018-12-17 21:09:51','2018-12-17 21:09:51'),(55,'App\\Models\\Actividad',1,1,'foto',NULL,'images/fotos-actividades/8005ce4c93ceb7e68fe89e08d1ac1e36.png','2018-12-17 21:09:51','2018-12-17 21:09:51'),(56,'App\\Models\\Actividad',1,1,'titulo',NULL,'Jardín botánico y Sendero Gerardo Rodríguez','2018-12-17 21:09:51','2018-12-17 21:09:51'),(57,'App\\Models\\Actividad',1,1,'descripcion',NULL,'Recorrido interpretado por un guía especializado en el Jardín del CREDIA.','2018-12-17 21:09:51','2018-12-17 21:09:51'),(58,'App\\Models\\Actividad',1,1,'contenido',NULL,'<p class=\"MsoNormal\" style=\"text-align: justify; line-height: 1.2;\"><span style=\"color: rgb(0, 0, 0); font-family: Helvetica;\">El Sendero\r\nGerardo Rodríguez, cuenta con un mundo fascinante, donde los reinos Plantae,\r\nanimal, fungí, visten sus mejores galas en el mundo natural. <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align: justify; line-height: 1.2;\"><span style=\"color: rgb(0, 0, 0); font-family: Helvetica;\">Cuenta con más\r\nde 500 árboles entre los cuales podemos encontrar, frutales, medicinales,\r\nmaderables y venenosos, además de ser un laboratorio viviente del mundo fungí,\r\ncon más de 250 hongos los que en los meses de lluvias aparecen bajo el dosel de\r\nlos arboles enriqueciendo los recorridos. <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align: justify; line-height: 1.2;\"><span style=\"color: rgb(0, 0, 0); font-family: Helvetica;\">Los más\r\nrepresentativos del reino animal son los insectos del orden de los Coleoptera,\r\nHomoptera, isóptera, Nymphalidae, Blattodea etc.&nbsp; &nbsp;<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align: justify; line-height: 1.2;\"><span style=\"color: rgb(0, 0, 0); font-family: Helvetica;\">Las Aves representadas\r\npor las más de 60 especies, siendo las familias de los Strigidae, Tyrannidae,\r\nColumbidae, Ardeidae, Icteridae, Accipitridae, Thraupidae, con mayor\r\nrepresentación en el jardín. <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align: justify; line-height: 1.2;\"><span style=\"color: rgb(0, 0, 0); font-family: Helvetica;\"><o:p>&nbsp;</o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align: center; line-height: 1.2;\"><span style=\"color: rgb(0, 0, 0); font-weight: bold; font-family: Helvetica;\">Ven y descubre\r\neste mundo fascinante a través de los recorridos en el sendero Gerardo\r\nRodríguez.</span> <o:p></o:p></p>','2018-12-17 21:09:51','2018-12-17 21:09:51'),(59,'App\\Models\\Actividad',2,1,'actividad','Foro','Recorrido áreas protegidas del CBCH','2018-12-17 21:23:20','2018-12-17 21:23:20'),(60,'App\\Models\\Actividad',2,1,'foto',NULL,'images/fotos-actividades/058e3a333f7b47cd48cf17fbed4f2a78.png','2018-12-17 21:23:20','2018-12-17 21:23:20'),(61,'App\\Models\\Actividad',2,1,'titulo',NULL,'Pasaporte Verde del Corredor Biológico','2018-12-17 21:23:20','2018-12-17 21:23:20'),(62,'App\\Models\\Actividad',2,1,'descripcion',NULL,'Mediante esta herramienta se invita a recorrer las 10 áreas protegidas del CBCH.','2018-12-17 21:23:20','2018-12-17 21:23:20'),(63,'App\\Models\\Actividad',2,1,'contenido',NULL,'<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"color: rgb(0, 0, 0); font-family: Helvetica;\">Al\r\nvisitar el CREDIA el niño adquiere su primera estampilla, una vez que ha\r\nterminado de recorrer el sendero Gerardo Rodríguez, está listo para que viaje\r\ncon su pasaporte verde a las Áreas Protegidas ubicadas a lo largo del corredor\r\nbiológico del Caribe Hondureño, 10 áreas lo conforman desde el Parque Nacional\r\nJeannette Kawas en el municipio de Tela al Parque Nacional Capiro Calentura en\r\nmunicipio de Trujillo, Colon.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"color: rgb(0, 0, 0); font-family: Helvetica;\">&nbsp;Se denomina&nbsp;<b style=\"\">corredor biológico</b>&nbsp;al\r\nel área que es utilizada para realizar una regeneración o recuperación mediante\r\nprocesos biológicos &nbsp;<a href=\"https://es.wikipedia.org/wiki/Proceso_biol%C3%B3gico\"></a>de las zonas de\r\namortiguamiento de las grandes extensiones de bosques existentes y que han sido\r\ndegradados a causa de la deforestación&nbsp;irracional de las extensas\r\ncoberturas boscosas que en siglos anteriores se encontraban en su plenitud\r\nmáxima con un ecosistema&nbsp;sustentable y un hábitat&nbsp;compuesto de gran\r\nvariedad de fauna y flora, pero que a causa de los efectos antropogénicos &nbsp;(causados\r\npor el hombre) estos bosques junto con todas las especies que habitan en ella\r\nhan desaparecido casi en su totalidad.</span><span style=\"font-family: Arial, sans-serif;\"><o:p></o:p></span></p>','2018-12-17 21:23:20','2018-12-17 21:23:20'),(64,'App\\Models\\Actividad',3,1,'created_at',NULL,'2018-12-17 15:47:13','2018-12-17 21:47:13','2018-12-17 21:47:13'),(65,'App\\Models\\Actividad',4,1,'created_at',NULL,'2018-12-17 15:50:01','2018-12-17 21:50:01','2018-12-17 21:50:01'),(66,'App\\Models\\Blog',15,NULL,'total_vista','117','118','2018-12-18 15:23:28','2018-12-18 15:23:28'),(67,'App\\Models\\Evento',1,1,'created_at',NULL,'2018-12-18 10:27:21','2018-12-18 16:27:21','2018-12-18 16:27:21'),(68,'App\\Models\\Evento',1,1,'foto',NULL,'images/fotos-eventos/97f7b2ab9cc8e2656fa268a33aeedac8.jpg','2018-12-18 16:29:27','2018-12-18 16:29:27'),(69,'App\\Models\\Sistema',1,1,'created_at',NULL,'2018-12-18 14:33:11','2018-12-18 20:33:11','2018-12-18 20:33:11'),(70,'App\\Models\\Sistema',1,1,'estado','0','1','2018-12-18 20:35:27','2018-12-18 20:35:27'),(71,'App\\Models\\Sistema',2,1,'created_at',NULL,'2018-12-18 18:54:35','2018-12-19 00:54:35','2018-12-19 00:54:35'),(72,'Backpack\\Base\\app\\Models\\BackpackUser',1,1,'remember_token','WwzH9OJOVbAC2veDDF8ccOCGm462Xh3ERll1ribjnX5jugVLSXiFu0GxS7UX','q7um35qGXqEDZhm43daV8KyVngBRiqj80SqQbH37xXMasYG6VcdKPWOoubkq','2018-12-19 01:04:07','2018-12-19 01:04:07'),(73,'App\\Models\\Blog',17,NULL,'total_vista','0','1','2018-12-19 02:06:49','2018-12-19 02:06:49'),(74,'App\\Models\\Blog',17,NULL,'total_vista','1','2','2018-12-19 02:10:38','2018-12-19 02:10:38'),(75,'App\\Models\\Blog',17,NULL,'total_vista','2','3','2018-12-19 02:13:33','2018-12-19 02:13:33'),(76,'App\\Models\\Blog',17,NULL,'total_vista','3','4','2018-12-19 02:13:51','2018-12-19 02:13:51'),(77,'App\\Models\\Blog',17,NULL,'total_vista','4','5','2018-12-19 02:15:38','2018-12-19 02:15:38'),(78,'App\\Models\\Blog',17,NULL,'total_vista','5','6','2018-12-19 02:40:27','2018-12-19 02:40:27'),(79,'App\\Models\\Blog',17,NULL,'total_vista','6','7','2018-12-19 17:05:05','2018-12-19 17:05:05'),(80,'App\\Models\\Blog',17,NULL,'total_vista','7','8','2018-12-19 17:05:50','2018-12-19 17:05:50'),(81,'App\\Models\\Blog',17,NULL,'total_vista','8','9','2018-12-19 17:07:22','2018-12-19 17:07:22'),(82,'App\\Models\\Blog',17,NULL,'total_vista','9','10','2018-12-19 17:09:02','2018-12-19 17:09:02'),(83,'App\\Models\\Sistema',1,1,'contenido',NULL,'<h3 style=\"margin: 1.4em 0px 0.6em; padding: 0px; border: 0px; outline: 0px; font-size: 22.4px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(0, 0, 0); text-rendering: optimizelegibility; line-height: 1.3em; font-family: Arial, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; text-align: justify;\"><b style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 22.4px; vertical-align: baseline; background: transparent;\">Funcionalidad: centralizar, normalizar, almacenar, diseminar y preservar</b></h3><p style=\"margin-bottom: 1.6em; padding: 0px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; orphans: 4; color: rgb(0, 0, 0); font-family: Arial, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; text-align: justify;\">Los objetivos principales de DSpace son centralizar, normalizar, almacenar, diseminar y preservar&nbsp; la producción científica y académica de las instituciones. Su estructura permite organizar la información en comunidades que a su vez, se segmentan en colecciones de documentos.</p><p style=\"margin-top: 1.6em; margin-bottom: 1.6em; padding: 0px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; orphans: 4; color: rgb(0, 0, 0); font-family: Arial, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; text-align: justify;\">Dspace almacena casi cualquier tipo de formato y documento, así como la catalogación de los mismos utilizando el estándar Dublin Core. Es posible crear repositorios que integran contenidos de texto plano, documentos con formato, imágenes, bases de datos, programas ejecutables y contenido multimedia.</p><p style=\"margin-top: 1.6em; margin-bottom: 1.6em; padding: 0px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; orphans: 4; color: rgb(0, 0, 0); font-family: Arial, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; text-align: justify;\">Al ser una plataforma de software libre, es muy factible la configuración de funcionalidades que respondan a las necesidades específicas de cada organización.</p><h3 style=\"margin: 1.4em 0px 0.6em; padding: 0px; border: 0px; outline: 0px; font-size: 22.4px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(0, 0, 0); text-rendering: optimizelegibility; line-height: 1.3em; font-family: Arial, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; text-align: justify;\"><b style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 22.4px; vertical-align: baseline; background: transparent;\">Retos principales de las organizaciones al implementar DSpace</b></h3><p style=\"margin-bottom: 1.6em; padding: 0px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; orphans: 4; color: rgb(0, 0, 0); font-family: Arial, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; text-align: justify;\">Mencionamos algunos de los retos principales de las organizaciones públicas y privadas al implementar DSpace:</p><ul style=\"margin: 1.7em 0px 1.7em 1.7em; padding: 0px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; list-style-position: initial; list-style-image: initial; color: rgb(0, 0, 0); font-family: Arial, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; text-align: justify;\"><li style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; line-height: 21px;\">Contar con los permisos necesarios por parte de los autores para depositar, conservar y dar acceso (en proyecto de acceso libre) a documentos digitales dentro del repositorio.</li><li style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; line-height: 21px;\">Disponer de un equipo específico dentro de la organización &nbsp;para definir las necesidades que cubrirá el repositorio, así como darle la estructura completa y mantenimiento al mismo.</li><li style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; line-height: 21px;\">Definir las políticas de acceso, metadatos de cada comunidad, así como el proceso de intercambio de información.</li><li style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; line-height: 21px;\">Establecer un equipo técnico que defina un plan de actualización y mantenimiento de la plataforma, así como la infraestructura tecnológica para la implementación del proyecto.<span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; line-height: 1.5em;\">&nbsp;</span></li></ul><h3 style=\"margin: 1.4em 0px 0.6em; padding: 0px; border: 0px; outline: 0px; font-size: 22.4px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(0, 0, 0); text-rendering: optimizelegibility; line-height: 1.3em; font-family: Arial, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; text-align: justify;\"><b style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 22.4px; vertical-align: baseline; background: transparent;\">Algunas ventajas en la organización de la información para las instituciones, organizaciones y empresas que usan Dspace</b></h3><ul style=\"margin: 1.7em 0px 1.7em 1.7em; padding: 0px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; list-style-position: initial; list-style-image: initial; color: rgb(0, 0, 0); font-family: Arial, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; text-align: justify;\"><li style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; line-height: 21px;\">Cada departamento podrá definir el flujo de trabajo y proceso de publicación de sus documentos de forma independiente.</li><li style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; line-height: 21px;\">Cada departamento podrá formar las colecciones de documentos que requiera, según sus necesidades.</li><li style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; line-height: 21px;\">Cada colección de documentos puede contar con un esquema de metadatos personalizado.</li><li style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; line-height: 21px;\">Cada colección de documentos puede contar con restricciones de acceso personalizadas.</li><li style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; line-height: 21px;\">Cada registro permite almacenar uno o varios documentos (archivos que pueden ser de diversos formatos, por ejemplo, texto, imágenes, vídeo o audio), de acuerdo con la configuración del sistema.</li><li style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; line-height: 21px;\">Cuenta con un sistema de búsqueda muy depurado que permite utilizar filtros para delimitar búsquedas por comunidad, colección, autor, título, año, temática, área de interés, clasificación, etc.</li><li style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; line-height: 21px;\">El sistema de búsqueda permite localizar información dentro del texto completo de los documentos (para formatos de texto, PDF y MS Office).</li><li style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; line-height: 21px;\">Permite recibir alertas a través del protocolo RSS.</li><li style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; line-height: 21px;\">Las colecciones pueden contener archivos de texto, imágenes, sonido y vídeo. Los contenidos no textuales se enlazan con los documentos textuales o se acompañan de descripciones textuales (como las leyendas de las figuras) para poder buscar y consultar en modo de texto completo.</li><li style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; line-height: 21px;\">Cada colección puede manejar permisos diferentes para cada usuario, de forma que los objetos que el usuario puede consultar irán variando dependiendo de los permisos asignados; de igual forma es posible ocultar los objetos que no serán utilizados por los usuarios sin necesidad de borrarlos o darlos de baja de la colección.</li><li style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; line-height: 21px;\">Un mismo objeto publicado puede mostrarse en tantas colecciones como se definan, sin necesidad de duplicarlo dentro de la plataforma.</li><li style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; line-height: 21px;\">Al ser una plataforma de código abierto, DSpace no se adquiere como un software comercial, ni establece límites de concurrencia, almacenamiento o de descarga de objetos y documentos.</li></ul>','2018-12-19 18:42:57','2018-12-19 18:42:57'),(84,'App\\Models\\Blog',17,1,'total_vista','10','11','2018-12-19 20:36:03','2018-12-19 20:36:03'),(85,'App\\Models\\Blog',17,1,'total_vista','11','12','2018-12-19 20:59:18','2018-12-19 20:59:18'),(86,'App\\Models\\Sistema',1,1,'nombre_sistema','DSpace','D Space','2018-12-19 21:02:19','2018-12-19 21:02:19'),(87,'App\\Models\\Blog',17,1,'total_vista','12','13','2018-12-19 22:16:23','2018-12-19 22:16:23'),(88,'App\\Models\\Blog',17,1,'total_vista','13','14','2018-12-19 22:17:03','2018-12-19 22:17:03'),(89,'App\\Models\\Blog',17,1,'total_vista','14','15','2018-12-19 22:28:59','2018-12-19 22:28:59'),(90,'App\\Models\\Blog',17,NULL,'total_vista','15','16','2018-12-19 23:10:33','2018-12-19 23:10:33'),(91,'App\\Models\\Blog',17,NULL,'total_vista','16','17','2018-12-19 23:12:15','2018-12-19 23:12:15'),(92,'App\\Models\\Blog',17,NULL,'total_vista','17','18','2018-12-19 23:39:18','2018-12-19 23:39:18'),(93,'App\\Models\\Proyecto',6,1,'fecha_inicio','2018-10-01','2018-10-01 00:00:00','2018-12-20 17:56:36','2018-12-20 17:56:36'),(94,'App\\Models\\Proyecto',6,1,'fecha_finalizacion','2018-11-08','2018-11-08 00:00:00','2018-12-20 17:56:36','2018-12-20 17:56:36'),(95,'App\\Models\\Blog',15,1,'fotos',NULL,'[]','2018-12-20 17:56:59','2018-12-20 17:56:59'),(96,'App\\Models\\Blog',17,1,'fotos',NULL,'[]','2018-12-20 17:57:07','2018-12-20 17:57:07'),(97,'App\\Models\\Categoria',3,1,'created_at',NULL,'2018-12-20 12:34:01','2018-12-20 18:34:01','2018-12-20 18:34:01'),(98,'App\\Models\\Proyecto',6,1,'fecha_inicio','2018-10-01','2018-10-01 00:00:00','2018-12-20 19:57:10','2018-12-20 19:57:10'),(99,'App\\Models\\Proyecto',6,1,'fecha_finalizacion','2018-11-08','2018-11-08 00:00:00','2018-12-20 19:57:10','2018-12-20 19:57:10'),(100,'App\\Models\\Proyecto',7,1,'created_at',NULL,'2018-12-20 13:59:17','2018-12-20 19:59:17','2018-12-20 19:59:17'),(101,'App\\Models\\Blog',17,1,'total_vista','18','19','2018-12-20 21:43:48','2018-12-20 21:43:48'),(102,'App\\Models\\Blog',17,1,'total_vista','19','20','2018-12-20 21:45:53','2018-12-20 21:45:53'),(103,'App\\Models\\Blog',17,1,'total_vista','20','21','2018-12-20 21:46:29','2018-12-20 21:46:29'),(104,'App\\Models\\Blog',17,1,'total_vista','21','22','2018-12-20 22:06:24','2018-12-20 22:06:24'),(105,'App\\Models\\Blog',17,1,'total_vista','22','23','2018-12-20 22:07:46','2018-12-20 22:07:46'),(106,'App\\Models\\Blog',17,1,'total_vista','23','24','2018-12-20 22:10:30','2018-12-20 22:10:30'),(107,'App\\Models\\Blog',17,1,'total_vista','24','25','2018-12-20 22:11:55','2018-12-20 22:11:55'),(108,'App\\Models\\Blog',15,1,'categoria_id',NULL,'1','2018-12-20 23:27:33','2018-12-20 23:27:33'),(109,'App\\Models\\Blog',17,1,'categoria_id',NULL,'2','2018-12-20 23:27:40','2018-12-20 23:27:40'),(110,'App\\Models\\Proyecto',6,1,'fecha_inicio','2018-10-01','2018-10-01 00:00:00','2018-12-20 23:27:55','2018-12-20 23:27:55'),(111,'App\\Models\\Proyecto',6,1,'fecha_finalizacion','2018-11-08','2018-11-08 00:00:00','2018-12-20 23:27:55','2018-12-20 23:27:55'),(112,'App\\Models\\Proyecto',7,1,'fecha_inicio','2018-10-17','2018-10-17 00:00:00','2018-12-20 23:28:06','2018-12-20 23:28:06'),(113,'App\\Models\\Proyecto',7,1,'fecha_finalizacion','2018-11-09','2018-11-09 00:00:00','2018-12-20 23:28:06','2018-12-20 23:28:06'),(114,'App\\Models\\Blog',17,1,'total_vista','25','26','2018-12-20 23:29:40','2018-12-20 23:29:40'),(115,'App\\Models\\Equipo',9,1,'created_at',NULL,'2018-12-21 10:05:13','2018-12-21 16:05:13','2018-12-21 16:05:13'),(116,'App\\Models\\Blog',15,1,'total_vista','118','119','2018-12-21 16:58:48','2018-12-21 16:58:48'),(117,'App\\Models\\Blog',15,NULL,'total_vista','119','120','2018-12-21 22:02:03','2018-12-21 22:02:03'),(118,'App\\Models\\Blog',15,NULL,'total_vista','120','121','2019-01-02 15:14:03','2019-01-02 15:14:03'),(119,'App\\Models\\Blog',15,NULL,'total_vista','121','122','2019-01-02 15:42:17','2019-01-02 15:42:17'),(120,'App\\Models\\Blog',15,NULL,'total_vista','122','123','2019-01-02 16:09:25','2019-01-02 16:09:25'),(121,'App\\Models\\Blog',15,NULL,'total_vista','123','124','2019-01-02 16:24:51','2019-01-02 16:24:51'),(122,'App\\Models\\Social',2,1,'created_at',NULL,'2019-01-02 10:44:09','2019-01-02 16:44:09','2019-01-02 16:44:09'),(123,'App\\Models\\Proyecto',8,1,'created_at',NULL,'2019-01-02 16:15:49','2019-01-02 22:15:49','2019-01-02 22:15:49'),(124,'App\\Models\\Proyecto',8,1,'fecha_inicio','2018-10-22','2018-10-22 00:00:00','2019-01-02 22:16:21','2019-01-02 22:16:21'),(125,'App\\Models\\Proyecto',8,1,'fecha_finalizacion','2018-10-22','2018-10-22 00:00:00','2019-01-02 22:16:21','2019-01-02 22:16:21'),(126,'App\\Models\\Blog',15,1,'total_vista','124','125','2019-01-02 22:40:04','2019-01-02 22:40:04'),(127,'App\\Models\\Blog',15,1,'total_vista','125','126','2019-01-02 22:40:34','2019-01-02 22:40:34'),(128,'Backpack\\Base\\app\\Models\\BackpackUser',1,1,'remember_token','q7um35qGXqEDZhm43daV8KyVngBRiqj80SqQbH37xXMasYG6VcdKPWOoubkq','Z5EHkR9v7eQwouTjt2wT50rjrCPfIb6G0CkUEAUDphxVdiGUdfujQGuIFuij','2019-01-02 23:00:15','2019-01-02 23:00:15');
/*!40000 ALTER TABLE `revisions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
INSERT INTO `role_has_permissions` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,1),(15,1),(16,1),(17,1),(18,1),(19,1),(20,1),(21,1),(22,1),(23,1),(24,1),(25,1),(26,1),(27,1),(28,1),(29,1),(30,1),(31,1),(32,1),(33,1),(34,1),(35,1),(36,1),(37,1),(38,1),(39,1),(40,1),(41,1),(42,1),(43,1),(44,1),(45,1),(46,1),(47,1),(48,1),(49,1),(50,1),(51,1),(52,1),(53,1),(54,1),(55,1),(56,1),(57,1),(58,1),(59,1),(60,1),(61,1),(62,1),(63,1),(64,1),(65,1),(66,1),(67,1),(68,1),(69,1),(70,1),(71,1),(72,1),(73,1),(74,1),(75,1),(76,1),(77,1),(78,1),(79,1),(80,1),(81,1),(82,1),(83,1),(84,1),(85,1),(86,1),(87,1),(88,1),(89,1),(90,1),(91,1),(92,1),(93,1),(94,1),(95,1),(96,1),(97,1),(98,1),(99,1),(100,1),(101,1),(102,1),(103,1),(104,1),(105,1),(106,1),(107,1),(108,1),(109,1),(110,1),(111,1),(112,1),(113,1),(114,1),(115,1),(11,2),(13,2),(14,2),(15,2),(1,3),(2,3),(3,3),(4,3),(5,3),(6,3),(7,3),(8,3),(9,3),(10,3),(11,3),(12,3),(13,3),(14,3),(15,3),(16,3),(17,3),(18,3),(19,3),(20,3),(21,3),(22,3),(23,3),(24,3),(25,3),(26,3),(27,3),(28,3),(29,3),(30,3),(31,3),(32,3),(33,3),(34,3),(35,3),(36,3),(37,3),(38,3),(39,3),(40,3),(41,3),(42,3),(43,3),(44,3),(45,3),(46,3),(47,3),(48,3),(49,3),(50,3),(56,3),(57,3),(58,3),(59,3),(60,3),(66,3),(67,3),(68,3),(69,3),(70,3),(71,3),(72,3),(73,3),(74,3),(75,3),(101,3),(102,3),(103,3),(104,3),(105,3),(106,3),(107,3),(108,3),(109,3),(110,3),(11,4),(12,4),(13,4),(14,4),(15,4);
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Super Administrador','web','2018-11-23 22:57:09','2018-11-27 22:57:43'),(2,'Creador de articulos','web','2018-12-13 20:31:19','2018-12-13 20:31:19'),(3,'Administrador Web','web','2018-12-13 20:37:58','2018-12-13 20:37:58'),(4,'Editor de articulos','web','2018-12-13 20:38:26','2018-12-13 20:38:26');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sistemas`
--

DROP TABLE IF EXISTS `sistemas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sistemas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `texto_mini` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre_sistema` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contenido` longtext COLLATE utf8mb4_unicode_ci,
  `estado` tinyint(1) NOT NULL DEFAULT '0',
  `fotos` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sistemas`
--

LOCK TABLES `sistemas` WRITE;
/*!40000 ALTER TABLE `sistemas` DISABLE KEYS */;
INSERT INTO `sistemas` VALUES (1,'images/fotos-sistemas/deb97bf593afad34b86d0ce0df0a1a4c.png','Biblioteca virtual','D Space','Es un sistema de código abierto que permite la administración de colecciones digitales y su divulgación a través de la web. En este repositorio se almacenan y divulgan los documentos generados por el CREDIA y por los miembros de la red de centros de documentación. La mayoría de la información documental esta disponible para todo el público. También existen algunas colecciones privadas accesibles solamente para usuarios registrados.','http://repositorio.credia.hn','<h3 style=\"margin: 1.4em 0px 0.6em; padding: 0px; border: 0px; outline: 0px; font-size: 22.4px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(0, 0, 0); text-rendering: optimizelegibility; line-height: 1.3em; font-family: Arial, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; text-align: justify;\"><b style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 22.4px; vertical-align: baseline; background: transparent;\">Funcionalidad: centralizar, normalizar, almacenar, diseminar y preservar</b></h3><p style=\"margin-bottom: 1.6em; padding: 0px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; orphans: 4; color: rgb(0, 0, 0); font-family: Arial, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; text-align: justify;\">Los objetivos principales de DSpace son centralizar, normalizar, almacenar, diseminar y preservar&nbsp; la producción científica y académica de las instituciones. Su estructura permite organizar la información en comunidades que a su vez, se segmentan en colecciones de documentos.</p><p style=\"margin-top: 1.6em; margin-bottom: 1.6em; padding: 0px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; orphans: 4; color: rgb(0, 0, 0); font-family: Arial, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; text-align: justify;\">Dspace almacena casi cualquier tipo de formato y documento, así como la catalogación de los mismos utilizando el estándar Dublin Core. Es posible crear repositorios que integran contenidos de texto plano, documentos con formato, imágenes, bases de datos, programas ejecutables y contenido multimedia.</p><p style=\"margin-top: 1.6em; margin-bottom: 1.6em; padding: 0px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; orphans: 4; color: rgb(0, 0, 0); font-family: Arial, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; text-align: justify;\">Al ser una plataforma de software libre, es muy factible la configuración de funcionalidades que respondan a las necesidades específicas de cada organización.</p><h3 style=\"margin: 1.4em 0px 0.6em; padding: 0px; border: 0px; outline: 0px; font-size: 22.4px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(0, 0, 0); text-rendering: optimizelegibility; line-height: 1.3em; font-family: Arial, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; text-align: justify;\"><b style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 22.4px; vertical-align: baseline; background: transparent;\">Retos principales de las organizaciones al implementar DSpace</b></h3><p style=\"margin-bottom: 1.6em; padding: 0px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; orphans: 4; color: rgb(0, 0, 0); font-family: Arial, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; text-align: justify;\">Mencionamos algunos de los retos principales de las organizaciones públicas y privadas al implementar DSpace:</p><ul style=\"margin: 1.7em 0px 1.7em 1.7em; padding: 0px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; list-style-position: initial; list-style-image: initial; color: rgb(0, 0, 0); font-family: Arial, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; text-align: justify;\"><li style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; line-height: 21px;\">Contar con los permisos necesarios por parte de los autores para depositar, conservar y dar acceso (en proyecto de acceso libre) a documentos digitales dentro del repositorio.</li><li style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; line-height: 21px;\">Disponer de un equipo específico dentro de la organización &nbsp;para definir las necesidades que cubrirá el repositorio, así como darle la estructura completa y mantenimiento al mismo.</li><li style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; line-height: 21px;\">Definir las políticas de acceso, metadatos de cada comunidad, así como el proceso de intercambio de información.</li><li style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; line-height: 21px;\">Establecer un equipo técnico que defina un plan de actualización y mantenimiento de la plataforma, así como la infraestructura tecnológica para la implementación del proyecto.<span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; line-height: 1.5em;\">&nbsp;</span></li></ul><h3 style=\"margin: 1.4em 0px 0.6em; padding: 0px; border: 0px; outline: 0px; font-size: 22.4px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(0, 0, 0); text-rendering: optimizelegibility; line-height: 1.3em; font-family: Arial, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; text-align: justify;\"><b style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 22.4px; vertical-align: baseline; background: transparent;\">Algunas ventajas en la organización de la información para las instituciones, organizaciones y empresas que usan Dspace</b></h3><ul style=\"margin: 1.7em 0px 1.7em 1.7em; padding: 0px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; list-style-position: initial; list-style-image: initial; color: rgb(0, 0, 0); font-family: Arial, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; text-align: justify;\"><li style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; line-height: 21px;\">Cada departamento podrá definir el flujo de trabajo y proceso de publicación de sus documentos de forma independiente.</li><li style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; line-height: 21px;\">Cada departamento podrá formar las colecciones de documentos que requiera, según sus necesidades.</li><li style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; line-height: 21px;\">Cada colección de documentos puede contar con un esquema de metadatos personalizado.</li><li style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; line-height: 21px;\">Cada colección de documentos puede contar con restricciones de acceso personalizadas.</li><li style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; line-height: 21px;\">Cada registro permite almacenar uno o varios documentos (archivos que pueden ser de diversos formatos, por ejemplo, texto, imágenes, vídeo o audio), de acuerdo con la configuración del sistema.</li><li style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; line-height: 21px;\">Cuenta con un sistema de búsqueda muy depurado que permite utilizar filtros para delimitar búsquedas por comunidad, colección, autor, título, año, temática, área de interés, clasificación, etc.</li><li style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; line-height: 21px;\">El sistema de búsqueda permite localizar información dentro del texto completo de los documentos (para formatos de texto, PDF y MS Office).</li><li style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; line-height: 21px;\">Permite recibir alertas a través del protocolo RSS.</li><li style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; line-height: 21px;\">Las colecciones pueden contener archivos de texto, imágenes, sonido y vídeo. Los contenidos no textuales se enlazan con los documentos textuales o se acompañan de descripciones textuales (como las leyendas de las figuras) para poder buscar y consultar en modo de texto completo.</li><li style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; line-height: 21px;\">Cada colección puede manejar permisos diferentes para cada usuario, de forma que los objetos que el usuario puede consultar irán variando dependiendo de los permisos asignados; de igual forma es posible ocultar los objetos que no serán utilizados por los usuarios sin necesidad de borrarlos o darlos de baja de la colección.</li><li style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; line-height: 21px;\">Un mismo objeto publicado puede mostrarse en tantas colecciones como se definan, sin necesidad de duplicarlo dentro de la plataforma.</li><li style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; line-height: 21px;\">Al ser una plataforma de código abierto, DSpace no se adquiere como un software comercial, ni establece límites de concurrencia, almacenamiento o de descarga de objetos y documentos.</li></ul>',1,'[]','2018-12-18 20:33:11','2018-12-19 21:02:19'),(2,'images/fotos-sistemas/ecae611fafc40dd180c202932f18c760.jpg','Biblioteca virtual','ACra','Acra es un sistema de contenido de blogs!','/blog/hola-mundo/17',NULL,1,'[]','2018-12-19 00:54:35','2018-12-19 00:54:35');
/*!40000 ALTER TABLE `sistemas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `unidades_de_medidas`
--

DROP TABLE IF EXISTS `unidades_de_medidas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `unidades_de_medidas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `unidades_de_medidas`
--

LOCK TABLES `unidades_de_medidas` WRITE;
/*!40000 ALTER TABLE `unidades_de_medidas` DISABLE KEYS */;
INSERT INTO `unidades_de_medidas` VALUES (2,'Agua','2018-11-28 16:57:55','2018-11-28 17:08:15'),(3,'Hogares','2018-11-28 16:58:06','2018-11-28 17:08:29'),(4,'Permiso','2018-11-28 16:58:15','2018-11-28 17:08:42'),(5,'Resultado','2018-11-28 17:08:52','2018-11-28 17:08:52');
/*!40000 ALTER TABLE `unidades_de_medidas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `institucion_id` int(10) unsigned DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_institucion_id_foreign` (`institucion_id`),
  CONSTRAINT `users_institucion_id_foreign` FOREIGN KEY (`institucion_id`) REFERENCES `instituciones` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Jose Di Gregorio','josedgregorio07@gmail.com','$2y$10$Zm/PdWOlVM.KxLoQtZWLgOBo3Yv1ThFJP0oJZxYJepya7S.kt7wOa','Z5EHkR9v7eQwouTjt2wT50rjrCPfIb6G0CkUEAUDphxVdiGUdfujQGuIFuij','2018-05-26 01:25:33','2018-12-15 02:12:40',1,'images/fotos-usuarios/453bc815c89c560b01af680c884b7d8e.jpg'),(2,'Fermin','ferminarellano.hn@gmail.com','$2y$10$f3fIW2VjGLpN7.AhD34SWOmvlkJpOPlJmifxmPT0d31QASDp9lOMi','baYVP0x8d4SoRKhsZkvlljDQii4kfxXcQ5JE5dglwZyWGPlOmYH9QkN5YUy2','2018-09-22 02:50:34','2018-09-22 02:50:34',NULL,NULL),(3,'Dennis Di Gregorio','dennis07@gmail.com','$2y$10$dLgUMgZkprkM0WZbAVolYOYcrRhkr9Z5Gvm4jbUGEZFZwlYRnT.yu','2bxkPFkU8kVgn7SsrC6zv4sRADWhNYxremSkbcJewgOX5QNUL3JDtcxYlO5A','2018-11-26 04:26:19','2018-12-13 20:39:33',NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `voluntarios`
--

DROP TABLE IF EXISTS `voluntarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `voluntarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `actividad_id` int(10) unsigned DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `archivo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `voluntarios_actividad_id_foreign` (`actividad_id`),
  CONSTRAINT `voluntarios_actividad_id_foreign` FOREIGN KEY (`actividad_id`) REFERENCES `actividades` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `voluntarios`
--

LOCK TABLES `voluntarios` WRITE;
/*!40000 ALTER TABLE `voluntarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `voluntarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-01-03 16:44:49
