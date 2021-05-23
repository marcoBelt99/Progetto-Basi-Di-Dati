-- MySQL dump 10.13  Distrib 8.0.19, for macos10.15 (x86_64)
--
-- Host: localhost    Database: Biblioteca
-- ------------------------------------------------------
-- Server version	8.0.19

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `AUTORE`
--

DROP TABLE IF EXISTS `AUTORE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `AUTORE` (
  `COD_A` int NOT NULL AUTO_INCREMENT,
  `NOME_A` varchar(15) NOT NULL,
  `COGNOME_A` varchar(15) NOT NULL,
  `LUOGO_NASCITA` varchar(15) DEFAULT NULL,
  `DATA_NASCITA` date DEFAULT NULL,
  PRIMARY KEY (`COD_A`),
  UNIQUE KEY `AUTORE` (`NOME_A`,`COGNOME_A`,`LUOGO_NASCITA`,`DATA_NASCITA`)
) ENGINE=InnoDB AUTO_INCREMENT=128 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `AUTORE`
--

LOCK TABLES `AUTORE` WRITE;
/*!40000 ALTER TABLE `AUTORE` DISABLE KEYS */;
INSERT INTO `AUTORE` VALUES (32,'Abey','Crowest','New York','1965-07-20'),(22,'Adamo','Ligoe','New York','1971-03-26'),(88,'Alejandrina','Bardell','Wilpen','1962-10-25'),(90,'Alessandro','Oldam','New York','1972-07-09'),(98,'Ami','Adamo','Lawrence','1978-08-10'),(67,'Andrej','Von Der Empten','Amsterdam','1989-12-17'),(2,'Ange','Symcox','Paris','1977-07-01'),(78,'Angil','Beckson','Oxford','1956-05-01'),(31,'Barr','Labbet','Lawrence','1967-07-06'),(85,'Bartolemo','Chadwin','Pleasantville','1969-07-22'),(61,'Betti','Benz','Berlino','1977-08-05'),(42,'Beverlee','Jepensen','Cumberland','1976-12-17'),(94,'Booth','Belvard','London','1959-10-11'),(9,'Boycie','Shorey','Amsterdam','1989-11-20'),(89,'Branden','Huffer','Bloomington','1955-01-03'),(33,'Breanne','Weben','London','1989-11-13'),(86,'Briant','Anespie','Los Angeles','1989-01-01'),(11,'Bruno','Goodsall','London','1963-04-27'),(29,'Bryanty','Froud','London','1970-10-30'),(14,'Brynn','Semor','Oslo','1986-05-09'),(52,'Burk','Torr','Bloomington','1984-08-01'),(6,'Cal','Inkin','Oxford','1969-11-22'),(51,'Cecile','Follacaro','New York','1986-01-08'),(84,'Chelsea','Nannetti','San Diego','1973-04-14'),(91,'Cointon','Stranaghan','New York','1963-12-30'),(37,'Corri','Gavrieli','London','1974-06-30'),(10,'Cristian','Pes','New York','1981-09-10'),(77,'De','Wackly','Bloomington','1989-09-17'),(96,'Emiline','Greenhough','Madison','1982-04-11'),(80,'Enrico','Zimuel','Milan','1972-04-11'),(75,'Erny','Wrixon','Nashville','1967-02-25'),(34,'Eva','Elcum','Pleasantville','1956-02-20'),(44,'Fanchon','Bish','New York','1987-08-27'),(95,'Farrah','Letham','Oxford','1962-07-15'),(72,'Fiorenze','Deluca','Lawrence','1984-07-22'),(74,'Gabriella','Orum','Madison','1958-11-21'),(47,'Gertrudis','Corzon','Oxford','1983-06-21'),(25,'Giffer','Leisman','Los Angeles','1959-05-25'),(36,'Gil','Lettington','Los Angeles','1974-08-11'),(66,'Giustina','Jezzard','Pleasantville','1969-02-04'),(59,'Godwin','Lebbern','San Diego','1983-11-16'),(1,'Gregorius','McPhater','Pleasantville','1976-12-04'),(65,'Gwyneth','Tinsley','Los Angeles','1986-05-12'),(87,'Hannah','Bachnic','Madison','1956-06-22'),(30,'Harlene','Tartt','New York','1984-09-20'),(58,'Hastings','Sweetman','Los Angeles','1978-08-13'),(3,'Hirsch','Legging','Oxford','1961-12-19'),(5,'Hortense','Whatson','Washington','1978-08-25'),(40,'Ileane','Spurriar','Los Angeles','1969-09-03'),(45,'Inesita','Dallender','New York','1982-04-05'),(26,'Isacco','McSherry','Edimburg','1976-04-17'),(55,'Jacquenette','Snookes','Lawrence','1973-08-07'),(8,'Jasen','Itter','Madison','1967-12-24'),(64,'Jefferson','Dewire','Cardiff','1971-02-16'),(71,'Jermaine','Van Velde','Los Angeles','1979-04-23'),(43,'Jodee','Westwick','Liverpool','1968-01-23'),(50,'Jon','Duckett','Los Angeles','1978-08-16'),(76,'Junia','Everal','Los Angeles','1973-11-09'),(57,'Karie','Bendixen','Amsterdam','1969-12-29'),(13,'Kerri','Adiscot','Cumberland','1980-06-28'),(68,'Lavena','Capey','Cumberland','1972-02-17'),(41,'Leroy','Vasiltsov','San Diego','1976-10-13'),(60,'Lewes','Salsberg','Cumberland','1988-05-18'),(28,'Lu','Jenne','Seul','1977-01-11'),(73,'Luciano','Gamberini','Rome','1979-11-08'),(70,'Ludvig','Callf','London','1971-06-05'),(17,'Maible','Twidale','Bloomington','1963-01-29'),(23,'Margaretha','Aysik','Washington','1973-03-18'),(24,'Margaretta','Pardal','New York','1970-03-08'),(99,'Marja','Rosedale','New York','1989-03-25'),(46,'Marnie','Spinke','Los Angeles','1987-09-07'),(53,'Merissa','Senechault','New York','1956-02-02'),(4,'Merna','Lambal','London','1969-09-30'),(92,'Merrick','Harbron','Pleasantville','1959-11-09'),(35,'Mirelle','Hehnke','Los Angeles','1968-06-25'),(79,'Nicki','Pharrow','Los Angeles','1984-09-16'),(100,'Peri','Maher','Wilpen','1967-04-08'),(16,'Perrine','Blagden','Washington','1984-01-04'),(63,'Petunia','Breznovic','Prague','1981-02-19'),(97,'Pincas','Paulisch','Berlino','1973-12-24'),(81,'Quincey','Franke','Bloomington','1964-10-12'),(38,'Ramez','Elmasri','Oxford','1970-02-16'),(83,'Raquel','Semered','Bloomington','1972-03-21'),(7,'Reta','Philippsohn','Washington','1966-10-08'),(62,'Roxy','Burnage','Oxford','1955-04-13'),(15,'Rubie','Delgua','Los Angeles','1970-06-03'),(49,'Russ','Leander','Oxford','1959-11-16'),(21,'Sandro','Wilcher','Nashville','1990-09-25'),(18,'Sansone','Jansen','Lawrence','1968-05-12'),(20,'Sella','Marriage','Madison','1988-12-01'),(56,'Shamkant','Navathe','London','1962-11-24'),(69,'Shelbi','Wheelton','Los Angeles','1987-09-12'),(39,'Sim','Frondt','Bloomington','1967-05-20'),(48,'Theo','McLauchlin','Cardiff','1961-03-01'),(19,'Ursula','Lockitt','Liverpool','1967-12-14'),(93,'Vitia','Douch','London','1977-08-20'),(82,'Walker','Dumberell','London','1965-12-30'),(54,'Xylia','Bendle','Cumberland','1975-01-01'),(12,'Yancey','Sacher','Lawrence','1961-04-17'),(27,'Zilvia','Silver','Nashville','1958-04-25');
/*!40000 ALTER TABLE `AUTORE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `COPIA`
--

DROP TABLE IF EXISTS `COPIA`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `COPIA` (
  `ISBN_LIBRO` char(13) NOT NULL,
  `COD_COPIA` int NOT NULL AUTO_INCREMENT,
  `IND_S` int NOT NULL,
  PRIMARY KEY (`COD_COPIA`,`ISBN_LIBRO`),
  KEY `ISBN_LIBRO` (`ISBN_LIBRO`),
  KEY `IND_S` (`IND_S`),
  CONSTRAINT `copia_ibfk_1` FOREIGN KEY (`ISBN_LIBRO`) REFERENCES `LIBRO` (`ISBN`),
  CONSTRAINT `copia_ibfk_2` FOREIGN KEY (`IND_S`) REFERENCES `SUCCURSALE` (`COD_SUC`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=1024 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `COPIA`
--

LOCK TABLES `COPIA` WRITE;
/*!40000 ALTER TABLE `COPIA` DISABLE KEYS */;
INSERT INTO `COPIA` VALUES ('870560200-9',1,1),('226372696-9',24,1),('226372696-9',25,1),('226372696-9',26,1),('387623794-7',64,1),('387623794-7',65,1),('387623794-7',66,1),('376459959-6',104,1),('376459959-6',105,1),('376459959-6',106,1),('129488690-8',144,1),('292051296-X',145,1),('331424241-7',146,1),('147191251-5',184,1),('194862546-6',185,1),('171208472-0',186,1),('271280652-2',224,1),('271280652-2',225,1),('271280652-2',226,1),('343838580-5',264,1),('469863297-8',265,1),('469863297-8',266,1),('192373118-1',304,1),('347737564-5',305,1),('347737564-5',306,1),('259579784-0',344,1),('259579784-0',345,1),('554021569-9',346,1),('384050463-5',384,1),('384050463-5',385,1),('653175736-1',386,1),('970334328-7',424,1),('970334328-7',425,1),('970334328-7',426,1),('006821799-4',464,1),('006821799-4',465,1),('006821799-4',466,1),('711604128-1',504,1),('711604128-1',505,1),('000369692-8',506,1),('137066182-7',2,2),('368990830-2',9,2),('368990830-2',10,2),('368990830-2',11,2),('457456450-4',30,2),('457456450-4',31,2),('369048652-1',32,2),('872379238-8',49,2),('872379238-8',50,2),('872379238-8',51,2),('165632171-8',70,2),('507124152-8',71,2),('507124152-8',72,2),('825867311-4',89,2),('517581126-6',90,2),('517581126-6',91,2),('405663612-5',110,2),('405663612-5',111,2),('405663612-5',112,2),('301170811-8',129,2),('214940353-6',130,2),('214940353-6',131,2),('065646345-7',150,2),('065646345-7',151,2),('065646345-7',152,2),('368968937-6',169,2),('368968937-6',170,2),('368968937-6',171,2),('992229254-8',190,2),('103300276-3',191,2),('103300276-3',192,2),('280992700-6',209,2),('672560381-5',210,2),('672560381-5',211,2),('502714957-3',230,2),('502714957-3',231,2),('998941371-1',232,2),('083845517-4',249,2),('441842932-8',250,2),('441842932-8',251,2),('542931356-4',270,2),('542931356-4',271,2),('542931356-4',272,2),('469785019-X',289,2),('158999545-7',290,2),('158999545-7',291,2),('389625239-9',310,2),('786395256-5',311,2),('786395256-5',312,2),('744780754-0',329,2),('560211284-7',330,2),('560211284-7',331,2),('022938411-0',350,2),('022938411-0',351,2),('022938411-0',352,2),('101215590-0',369,2),('101215590-0',370,2),('101215590-0',371,2),('760264513-8',390,2),('760264513-8',391,2),('836374770-X',392,2),('346481000-3',409,2),('857627191-5',410,2),('857627191-5',411,2),('086031288-7',430,2),('086031288-7',431,2),('733508116-5',432,2),('742437654-3',449,2),('372098427-3',450,2),('372098427-3',451,2),('966859767-2',470,2),('966859767-2',471,2),('666013383-6',472,2),('300485539-9',489,2),('860964250-X',490,2),('860964250-X',491,2),('756564271-1',510,2),('756564271-1',511,2),('756564271-1',512,2),('386397507-3',3,3),('175205668-X',18,3),('175205668-X',19,3),('607745120-7',20,3),('421308038-2',58,3),('366292343-2',59,3),('366292343-2',60,3),('333748888-9',98,3),('333748888-9',99,3),('585173205-9',100,3),('296111646-5',138,3),('296111646-5',139,3),('296111646-5',140,3),('182342356-6',178,3),('182342356-6',179,3),('182342356-6',180,3),('404884623-X',218,3),('404884623-X',219,3),('404884623-X',220,3),('594275024-6',258,3),('222223087-X',259,3),('343838580-5',260,3),('449571196-2',298,3),('671158165-2',299,3),('671158165-2',300,3),('421128511-4',338,3),('421128511-4',339,3),('421128511-4',340,3),('976860084-5',378,3),('976860084-5',379,3),('976860084-5',380,3),('601546113-6',418,3),('501862280-6',419,3),('829914597-X',420,3),('264788349-1',458,3),('264788349-1',459,3),('368515943-7',460,3),('945660604-X',498,3),('945660604-X',499,3),('945660604-X',500,3),('386397507-3',4,4),('712463375-3',12,4),('607745120-7',21,4),('226372696-9',22,4),('226372696-9',23,4),('369048652-1',33,4),('946684198-X',34,4),('946684198-X',35,4),('946684198-X',36,4),('565659819-5',52,4),('366292343-2',61,4),('657583349-7',62,4),('657583349-7',63,4),('507124152-8',73,4),('507124152-8',74,4),('507124152-8',75,4),('507124152-8',76,4),('509808775-9',92,4),('585173205-9',101,4),('585173205-9',102,4),('376459959-6',103,4),('405663612-5',113,4),('405663612-5',114,4),('405663612-5',115,4),('740153355-3',116,4),('814543114-X',132,4),('076691563-8',141,4),('129488690-8',142,4),('129488690-8',143,4),('065646345-7',153,4),('009140312-X',154,4),('009140312-X',155,4),('009140312-X',156,4),('368968937-6',172,4),('182342356-6',181,4),('147191251-5',182,4),('147191251-5',183,4),('103300276-3',193,4),('253760945-X',194,4),('253760945-X',195,4),('253760945-X',196,4),('672560381-5',212,4),('404884623-X',221,4),('404884623-X',222,4),('271280652-2',223,4),('510453377-8',233,4),('510453377-8',234,4),('510453377-8',235,4),('299282269-8',236,4),('441842932-8',252,4),('343838580-5',261,4),('343838580-5',262,4),('343838580-5',263,4),('542931356-4',273,4),('752213396-3',274,4),('752213396-3',275,4),('752213396-3',276,4),('989371762-0',292,4),('014330257-4',301,4),('014330257-4',302,4),('192373118-1',303,4),('786395256-5',313,4),('085745713-6',314,4),('801081738-4',315,4),('801081738-4',316,4),('663119553-5',332,4),('978061177-0',341,4),('978061177-0',342,4),('259579784-0',343,4),('768148078-1',353,4),('600597433-5',354,4),('068254989-4',355,4),('068254989-4',356,4),('976860084-5',372,4),('976860084-5',381,4),('384050463-5',382,4),('384050463-5',383,4),('836374770-X',393,4),('836374770-X',394,4),('179592990-1',395,4),('179592990-1',396,4),('857627191-5',412,4),('829914597-X',421,4),('829914597-X',422,4),('970334328-7',423,4),('055417113-9',433,4),('055417113-9',434,4),('515279116-1',435,4),('515279116-1',436,4),('372098427-3',452,4),('368515943-7',461,4),('259418123-4',462,4),('006821799-4',463,4),('666013383-6',473,4),('666013383-6',474,4),('666013383-6',475,4),('666013383-6',476,4),('860964250-X',492,4),('945660604-X',501,4),('945660604-X',502,4),('711604128-1',503,4),('875127371-3',513,4),('875127371-3',514,4),('875127371-3',515,4),('875127371-3',516,4),('386397507-3',5,5),('712463375-3',13,5),('536751983-0',15,5),('536751983-0',16,5),('175205668-X',17,5),('843331705-9',37,5),('843331705-9',38,5),('843331705-9',39,5),('565659819-5',53,5),('565659819-5',55,5),('421308038-2',56,5),('421308038-2',57,5),('364615054-8',77,5),('364615054-8',78,5),('364615054-8',79,5),('075305079-X',93,5),('216013488-0',95,5),('216013488-0',96,5),('216013488-0',97,5),('740153355-3',117,5),('740153355-3',118,5),('698429931-4',119,5),('814543114-X',133,5),('050916783-7',135,5),('296111646-5',136,5),('296111646-5',137,5),('093035174-6',157,5),('093035174-6',158,5),('093035174-6',159,5),('004023598-X',173,5),('004023598-X',175,5),('004023598-X',176,5),('290005808-2',177,5),('015674765-0',197,5),('015674765-0',198,5),('015674765-0',199,5),('672560381-5',213,5),('672560381-5',215,5),('672560381-5',216,5),('672560381-5',217,5),('299282269-8',237,5),('299282269-8',238,5),('299282269-8',239,5),('009047587-9',253,5),('594275024-6',255,5),('594275024-6',256,5),('594275024-6',257,5),('255439894-1',277,5),('255439894-1',278,5),('887526619-0',279,5),('989371762-0',293,5),('989371762-0',295,5),('087133062-8',296,5),('087133062-8',297,5),('611928800-7',317,5),('023019395-1',318,5),('023019395-1',319,5),('769740772-8',333,5),('769740772-8',335,5),('769740772-8',336,5),('421128511-4',337,5),('863050834-5',357,5),('863050834-5',358,5),('863050834-5',359,5),('976860084-5',373,5),('976860084-5',375,5),('976860084-5',376,5),('976860084-5',377,5),('385828979-5',397,5),('385828979-5',398,5),('385828979-5',399,5),('857627191-5',413,5),('435456826-8',415,5),('435456826-8',416,5),('601546113-6',417,5),('515279116-1',437,5),('515279116-1',438,5),('515279116-1',439,5),('190222315-2',453,5),('521847642-0',455,5),('521847642-0',456,5),('264788349-1',457,5),('666013383-6',477,5),('666013383-6',478,5),('351898785-2',479,5),('860964250-X',493,5),('860964250-X',495,5),('672217513-8',496,5),('672217513-8',497,5),('170243376-5',517,5),('829509196-4',518,5),('829509196-4',519,5),('386397507-3',6,6),('536751983-0',14,6),('167947701-3',43,6),('167947701-3',44,6),('872379238-8',45,6),('565659819-5',54,6),('925812482-0',83,6),('925812482-0',84,6),('925812482-0',85,6),('216013488-0',94,6),('661872594-1',123,6),('661872594-1',124,6),('851106761-2',125,6),('050916783-7',134,6),('394873350-3',163,6),('394873350-3',164,6),('132261731-7',165,6),('004023598-X',174,6),('526942871-7',203,6),('526942871-7',204,6),('526942871-7',205,6),('672560381-5',214,6),('432587582-4',243,6),('432587582-4',244,6),('432587582-4',245,6),('009047587-9',254,6),('887526619-0',283,6),('492112694-1',284,6),('492112694-1',285,6),('989371762-0',294,6),('595626866-2',323,6),('168316748-1',324,6),('168316748-1',325,6),('769740772-8',334,6),('265972215-3',363,6),('265972215-3',364,6),('927994979-9',365,6),('976860084-5',374,6),('391578830-9',403,6),('052706515-3',404,6),('052706515-3',405,6),('653073623-9',414,6),('184722570-5',443,6),('184722570-5',444,6),('184722570-5',445,6),('190222315-2',454,6),('584224789-5',483,6),('584224789-5',484,6),('584224789-5',485,6),('860964250-X',494,6),('560797299-2',7,7),('436501926-0',40,7),('436501926-0',41,7),('167947701-3',42,7),('872379238-8',46,7),('872379238-8',47,7),('872379238-8',48,7),('925812482-0',80,7),('925812482-0',81,7),('925812482-0',82,7),('951964371-0',86,7),('825867311-4',87,7),('825867311-4',88,7),('698429931-4',120,7),('698429931-4',121,7),('698429931-4',122,7),('851106761-2',126,7),('851106761-2',127,7),('301170811-8',128,7),('093035174-6',160,7),('394873350-3',161,7),('394873350-3',162,7),('132261731-7',166,7),('132261731-7',167,7),('132261731-7',168,7),('131544489-5',200,7),('131544489-5',201,7),('526942871-7',202,7),('526942871-7',206,7),('280992700-6',207,7),('280992700-6',208,7),('136964378-0',240,7),('136964378-0',241,7),('136964378-0',242,7),('284203566-6',246,7),('284203566-6',247,7),('284203566-6',248,7),('887526619-0',280,7),('887526619-0',281,7),('887526619-0',282,7),('492112694-1',286,7),('469785019-X',287,7),('469785019-X',288,7),('023019395-1',320,7),('023019395-1',321,7),('595626866-2',322,7),('168316748-1',326,7),('744780754-0',327,7),('744780754-0',328,7),('425111017-X',360,7),('425111017-X',361,7),('425111017-X',362,7),('927994979-9',366,7),('101215590-0',367,7),('101215590-0',368,7),('385828979-5',400,7),('385828979-5',401,7),('385828979-5',402,7),('052706515-3',406,7),('256739345-5',407,7),('256739345-5',408,7),('515279116-1',440,7),('515279116-1',441,7),('515279116-1',442,7),('521329516-9',446,7),('521329516-9',447,7),('521329516-9',448,7),('351898785-2',480,7),('775940054-3',481,7),('775940054-3',482,7),('584224789-5',486,7),('300485539-9',487,7),('300485539-9',488,7),('356414253-3',520,7),('356414253-3',521,7),('356414253-3',522,7),('368990830-2',8,8),('457456450-4',27,8),('457456450-4',28,8),('457456450-4',29,8),('660038142-6',67,8),('867778553-1',68,8),('867778553-1',69,8),('947990234-6',107,8),('947990234-6',108,8),('947990234-6',109,8),('331424241-7',147,8),('331424241-7',148,8),('065646345-7',149,8),('362309208-8',187,8),('992229254-8',188,8),('992229254-8',189,8),('816886703-3',227,8),('816886703-3',228,8),('502714957-3',229,8),('371268896-2',267,8),('371268896-2',268,8),('542931356-4',269,8),('347737564-5',307,8),('136320382-7',308,8),('136320382-7',309,8),('554021569-9',347,8),('554021569-9',348,8),('554021569-9',349,8),('653175736-1',387,8),('653175736-1',388,8),('653175736-1',389,8),('970334328-7',427,8),('970334328-7',428,8),('970334328-7',429,8),('060088686-7',467,8),('060088686-7',468,8),('060088686-7',469,8),('000369692-8',507,8),('000369692-8',508,8),('516983356-3',509,8);
/*!40000 ALTER TABLE `COPIA` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `DIPARTIMENTO`
--

DROP TABLE IF EXISTS `DIPARTIMENTO`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `DIPARTIMENTO` (
  `NOME_D` varchar(50) NOT NULL,
  `NOME_DIR` varchar(30) NOT NULL,
  `COGNOME_DIR` varchar(30) NOT NULL,
  `C_SUC` int NOT NULL,
  PRIMARY KEY (`NOME_D`),
  KEY `C_SUC` (`C_SUC`),
  CONSTRAINT `dipartimento_ibfk_1` FOREIGN KEY (`C_SUC`) REFERENCES `SUCCURSALE` (`COD_SUC`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `DIPARTIMENTO`
--

LOCK TABLES `DIPARTIMENTO` WRITE;
/*!40000 ALTER TABLE `DIPARTIMENTO` DISABLE KEYS */;
INSERT INTO `DIPARTIMENTO` VALUES ('\nArchitettura','Alessandro','Ippoliti',1),('\nEconomia e management','Laura','Ramaciotti',2),('\nFisica e Scienze della Terra','Vincenzo ','Guidi',3),('\nGiurisprudenza','Daniele ','Negri',4),('\nIngegneria','Marco','Franchini',3),('\nMatematica e informatica','Massimiliano ','Mella',5),('\nMorfologia, chirurgia e medicina sperimentale','Paola ','Secchiero',6),('\nScienze biomediche e chirurgico specialistiche','Stefano ','Pelucchi',6),('\nScienze chimiche e farmaceutiche','Olga ','Bortolini',6),('\nScienze della vita e biotecnologie','Mirko ','Pinotti',6),('\nScienze mediche','Lamberto ','Manzoli',7),('\nStudi umanistici','Paolo ','Tanganelli',8);
/*!40000 ALTER TABLE `DIPARTIMENTO` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `EDITORE`
--

DROP TABLE IF EXISTS `EDITORE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `EDITORE` (
  `COD_E` int NOT NULL AUTO_INCREMENT,
  `NOME_E` varchar(30) NOT NULL,
  `NOME_VIA_E` varchar(30) DEFAULT NULL,
  `NUM_CIVICO_E` varchar(8) DEFAULT NULL,
  `CAP_E` varchar(5) DEFAULT NULL,
  `PROVINCIA_E` varchar(30) DEFAULT NULL,
  `TELEFONO` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`COD_E`),
  UNIQUE KEY `NOME_E` (`NOME_E`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `EDITORE`
--

LOCK TABLES `EDITORE` WRITE;
/*!40000 ALTER TABLE `EDITORE` DISABLE KEYS */;
INSERT INTO `EDITORE` VALUES (1,'Apogeo','Via Andegari','6','20121','Milan','02-3596681'),(2,'Pearson Italia','Corso Trapani','16','10139','Turin','011-75021510'),(3,'Tecniche Nuove','Via Eritrea','21','20157','Milan','02-390901'),(4,'Packt Publishing','Tennessee Circle','4','89654','Boston','903-259-1261'),(5,'Addison-Wesley','Coolidge Junction','12','7030','Oboken','638-435-4004'),(6,'Pst Edizioni','Via degli Editori Riuniti','8','20157','Milan','02-546722'),(7,'Dunning Editions','Dunning Drive','988','23445','Lawrance','16-339-1269'),(8,'Europa Edizioni','Via degli Editori Riuniti','34','20157','Milan','02-835610'),(9,'Plaza Publicaciones','Strada Grande','944','2264','Madrid','03-567234'),(10,'Meaning','Lakewood Gardens Place','28063','8734','New York','309-306-5066');
/*!40000 ALTER TABLE `EDITORE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `LIBRO`
--

DROP TABLE IF EXISTS `LIBRO`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `LIBRO` (
  `TITOLO` varchar(100) NOT NULL,
  `ISBN` char(13) NOT NULL,
  `LINGUA` varchar(20) NOT NULL,
  `ANNO_PUBB` char(4) NOT NULL,
  `C_E` int NOT NULL,
  PRIMARY KEY (`ISBN`),
  KEY `C_E` (`C_E`),
  CONSTRAINT `libro_ibfk_1` FOREIGN KEY (`C_E`) REFERENCES `EDITORE` (`COD_E`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `LIBRO`
--

LOCK TABLES `LIBRO` WRITE;
/*!40000 ALTER TABLE `LIBRO` DISABLE KEYS */;
INSERT INTO `LIBRO` VALUES ('Thief of Hearts','000369692-8','English','2016',10),('Gingerbread Man The','004023598-X','Dari','2012',4),('Counterfeiters The (Die FŠlscher)','006821799-4','Estonian','2018',9),('Life of Another The (La vie d une autre)','009047587-9','English','2015',5),('Death Defying Acts','009140312-X','Dhivehi','2017',3),('Longest Yard The','014330257-4','Georgian','2010',6),('Children Are Watching Us The (Bambini ci guardano I)','015674765-0','English','2018',4),('Almanya - Welcome to Germany (Almanya - Willkommen in Deutschland)','022938411-0','Guarani','2014',7),('Heroine','023019395-1','Dzongkha','2013',7),('Inspectors The','050916783-7','Catalan','2017',3),('Dead Man Walking','052706515-3','English','2011',8),('Private Detective 62','055417113-9','English','2017',9),('Mondays in the Sun (Lunes al sol Los)','060088686-7','English','2019',9),('Phil Spector','065646345-7','Irish Gaelic','2020',3),('Human Failure (Menschliches Versagen)','068254989-4','English','2014',8),('Attack of the 50 Foot Woman','075305079-X','Danish','2010',2),('Bed & Breakfast Love is a Happy Accident (Bed & Breakfast)','076691563-8','Dari','2018',3),('Memory','083845517-4','Punjabi','2014',5),('Suit for Wedding A (aka The Wedding Suit) (Lebassi Baraye Arossi)','085745713-6','English','2020',7),('Stingray Sam','086031288-7','Polish','2019',9),('Come Blow Your Horn','087133062-8','English','2013',6),('Doc Savage The Man of Bronze','093035174-6','English','2015',3),('Cars','101215590-0','English','2012',8),('Sound of Music The','103300276-3','Khmer','2019',4),('Family Tree','129488690-8','English','2017',3),('Addams Family The','131544489-5','English','2019',4),('The Dark Horse','132261731-7','Guarani','2018',3),('Mon oncle d AmŽrique','136320382-7','English','2017',6),('Maniac','136964378-0','English','2013',5),('Gone Fishin ','137066182-7','Georgian','2012',1),('You Only Live Once','147191251-5','Dari','2018',4),('Rains of Ranchipur The','158999545-7','English','2012',6),('Paradise Lost 2 Revelations','165632171-8','Italian','2010',2),('Saboteur','167947701-3','English','2014',1),('Carbon Nation','168316748-1','Portuguese','2012',7),('Buddy','170243376-5','English','2015',10),('The Fourth War','171208472-0','English','2020',4),('Gasoline (Benzina)','175205668-X','English','2019',1),('Day of the Triffids The','179592990-1','English','2011',8),('Meet Joe Black','182342356-6','Japanese','2011',4),('Ironclad','184722570-5','Kashmiri','2011',9),('Salvage','190222315-2','Belarusian','2014',9),('No Distance Left to Run','192373118-1','English','2019',6),('Dakota Skye','194862546-6','English','2011',4),('Tenchi The Samurai Astronomer','214940353-6','English','2018',3),('Enemy','216013488-0','Arabic','2012',2),('Concrete Night (Betoniyš)','222223087-X','Irish Gaelic','2010',5),('State of Siege (ƒtat de sige)','226372696-9','Hindi','2013',1),('Red White & Blue','253760945-X','English','2016',4),('Pitch Black','255439894-1','English','2015',6),('High Spirits','256739345-5','Swedish','2016',8),('Inhale','259418123-4','English','2011',9),('Waydowntown','259579784-0','English','2018',7),('In the Park','264788349-1','Haitian Creole','2018',9),('Animal House','265972215-3','English','2017',8),('Shuttle','271280652-2','English','2017',4),('Young Cassidy','280992700-6','German','2018',4),('Trial','284203566-6','Korean','2013',5),('World of Kanako The (Kawaki)','290005808-2','Lao','2020',4),('Purple Rose of Cairo The','292051296-X','Guarani','2013',3),('Golem','296111646-5','Japanese','2019',3),('Scenic Route','299282269-8','English','2015',5),('Wild River','300485539-9','Dzongkha','2012',10),('Such Is Life (As’ es la vida)','301170811-8','English','2019',3),('PHP 7 development','331424241-7','Italian','2015',3),('History Boys The','333748888-9','Catalan','2017',2),('Jubilee','343838580-5','English','2015',5),('South of Heaven West of Hell','346481000-3','English','2015',9),('Last Ride','347737564-5','Haitian Creole','2019',6),('Boys from Fengkuei The (Feng gui lai de ren)','351898785-2','Portuguese','2016',10),('Elizabeth','356414253-3','English','2012',10),('Nicholas on Holiday','362309208-8','English','2018',4),('Human-computer interaction','364615054-8','English','2017',2),('Boys of St Vincent The','366292343-2','English','2013',1),('Love s Labour s Lost','368515943-7','Czech','2011',9),('Secret Garden The','368968937-6','English','2014',4),('Andrei Rublev (Andrey Rublyov)','368990830-2','English','2017',1),('Oliver Twist','369048652-1','Guarani','2020',1),('19th Wife The','371268896-2','Belarusian','2016',5),('Sergeant Rutledge','372098427-3','Arabic','2011',9),('Svidd Neger','376459959-6','English','2018',2),('Ninotchka','384050463-5','Quechua','2017',8),('Deep Impact','385828979-5','Bengali','2019',8),('Gunfighter The','386397507-3','Albanian','2013',1),('Get Smart','387623794-7','English','2010',2),('Get Bruce','389625239-9','Hebrew','2020',7),('Flight of the Living Dead','391578830-9','Kazakh','2014',8),('Family Life','394873350-3','English','2014',3),('Altman','404884623-X','Czech','2010',4),('Open Windows','405663612-5','English','2015',2),('Life is to Whistle (Vida es silbar La)','421128511-4','English','2012',7),('LA Without a Map','421308038-2','English','2014',1),('Key Largo','425111017-X','Estonian','2019',8),('Rebecca','432587582-4','Swedish','2015',5),('Lavender Hill Mob The','435456826-8','English','2016',9),('Great Expectations','436501926-0','Catalan','2013',1),('Luna de Avellaneda','441842932-8','Guarani','2018',5),('Black Windmill The','449571196-2','English','2013',6),('Beefcake','457456450-4','Aymara','2016',1),('Wave The (Welle Die)','469785019-X','English','2014',6),('Raisin in the Sun A','469863297-8','Punjabi','2015',5),('Closure','492112694-1','English','2018',6),('Redemption The Stan Tookie Williams Story','501862280-6','Finnish','2011',9),('Revenge of the Nerds','502714957-3','Japanese','2019',5),('Diplomacy (Diplomatie)','507124152-8','French','2019',2),('Vehicle 19','509808775-9','English','2013',2),('Streetcar Named Desire A','510453377-8','English','2013',5),('The Frame','515279116-1','English','2010',9),('Big Squeeze The','516983356-3','English','2014',10),('Carmen Comes Home (Karumen kokyo ni kaeru)','517581126-6','Hindi','2020',2),('GŽnŽral Idi Amin Dada A Self Portrait (GŽnŽral Idi Amin Dada Autoportrait)','521329516-9','English','2015',9),('Holy Flying Circus','521847642-0','English','2016',9),('Agent Vinod','526942871-7','Catalan','2017',4),('Slaves to the Underground','536751983-0','French','2014',1),('From the Life of the Marionettes (Aus dem Leben der Marionetten) ','542931356-4','Italian','2015',5),('Renaissance','554021569-9','English','2018',7),('Tyler Perry s I Can Do Bad All by Myself','560211284-7','Italian','2018',7),('Arthur and the Revenge of Maltazard (Arthur et la vengeance de Maltazard)','560797299-2','English','2017',1),('Strangers on a Train','565659819-5','Dutch','2014',1),('Teaching Mrs Tingle','584224789-5','English','2020',10),('Battle Royale 2 Requiem (Batoru rowaiaru II Chinkonka)','585173205-9','English','2018',2),('Memory Keeper s Daughter The','594275024-6','English','2012',5),('Rollerball','595626866-2','Hungarian','2014',7),('Wall Street','600597433-5','English','2020',7),('1208 East of Bucharest (A fost sau n-a fost?)','601546113-6','Gujarati','2011',9),('HTM & CSS','607745120-7','Italian','2018',1),('Cyrano de Bergerac','611928800-7','Korean','2017',7),('Act Da Fool','653073623-9','English','2020',9),('Happy People A Year in the Taiga','653175736-1','Swedish','2012',8),('Knack and How to Get It The','657583349-7','English','2015',1),('Stonewall','660038142-6','Icelandic','2016',2),('Woman on the Beach (Haebyeonui yeoin)','661872594-1','English','2020',3),('Deadline','663119553-5','Spanish','2015',7),('Lost City The','666013383-6','English','2014',10),('Nick and Norah s Infinite Playlist','671158165-2','Czech','2019',6),('Heaven s Prisoners','672217513-8','Bengali','2014',10),('Day the Universe Changed The','672560381-5','Northern Sotho','2018',4),('Lone Ranger The','698429931-4','Icelandic','2011',3),('Crocodile Hunter Collision Course The','711604128-1','English','2014',10),('Fear','712463375-3','English','2012',1),('Angels  Share The','733508116-5','English','2017',9),('Fundamentals of Database Systems','740153355-3','Italian','2019',2),('Under the Bridges (Unter den BrŸcken)','742437654-3','Swedish','2016',9),('Times Square','744780754-0','English','2020',7),('Brides (Nyfes)','752213396-3','Georgian','2012',6),('Little Children','756564271-1','English','2014',10),('Story of My Life The (Mensonges et trahisons et plus si affinitŽs)','760264513-8','English','2012',8),('Kleines Arschloch - Der Film','768148078-1','Korean','2017',7),('Hollywood Party','769740772-8','English','2018',7),('I m Reed Fish','775940054-3','Kashmiri','2017',10),('Dragon Ball Z Bio-Broly (Doragon b™ru Z 11 Sžp‰ senshi gekiha! Katsu no wa ore da)','786395256-5','English','2019',7),('Murder by Proxy How America Went Postal','801081738-4','English','2019',7),('Ingeborg Holm','814543114-X','English','2013',3),('Split Second','816886703-3','Italian','2012',4),('Kairat','825867311-4','Hiri Motu','2013',2),('Shaka Zulu The Citadel','829509196-4','Swedish','2014',10),('Project X','829914597-X','English','2019',9),('Wolf Man The','836374770-X','Indonesian','2013',8),('Avengers The','843331705-9','Bengali','2012',1),('Chronicle of a Summer (Chronique d un ŽtŽ)','851106761-2','Italian','2019',3),('Larceny Inc','857627191-5','English','2012',9),('Iron Horse The','860964250-X','Japanese','2013',10),('Richard III','863050834-5','Chinese','2019',8),('Hot Fuzz','867778553-1','Polish','2012',2),('Eight Crazy Nights (Adam Sandler s Eight Crazy Nights)','870560200-9','English','2018',1),('From Above','872379238-8','English','2018',1),('Million Ways to Die in the West A','875127371-3','Norwegian','2014',10),('Thieves The (Dodookdeul)','887526619-0','Romanian','2011',6),('Kumail Nanjiani Beta Male ','925812482-0','German','2010',2),('Missionary Man','927994979-9','Dhivehi','2017',8),('Cassandra Crossing The','945660604-X','Arabic','2016',10),('Absolute Power','946684198-X','Czech','2016',1),('Peculiarities of the National Hunt (Osobennosti natsionalnoy okhoty) ','947990234-6','English','2019',2),('Iron Mask The','951964371-0','Bengali','2014',2),('Sting II The','966859767-2','English','2020',9),('Forbidden Christ The (Cristo proibito Il)','970334328-7','Danish','2019',9),('Krrish','976860084-5','English','2016',8),('Kirikou and the Wild Beast (Kirikou et les btes sauvages)','978061177-0','Khmer','2010',7),('Convoy','989371762-0','German','2015',6),('And Nobody Weeps for Me (Und keiner weint mir nach)','992229254-8','Italian','2017',4),('Stupid Boy (Garon stupide)','998941371-1','Italian','2013',5);
/*!40000 ALTER TABLE `LIBRO` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PRESTITO`
--

DROP TABLE IF EXISTS `PRESTITO`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `PRESTITO` (
  `ISBN_LIB` char(13) NOT NULL,
  `C_COPIA` int NOT NULL,
  `MATR` char(10) NOT NULL,
  `DATA_USCITA` date NOT NULL,
  `DATA_LIMITE` date DEFAULT NULL,
  PRIMARY KEY (`ISBN_LIB`,`C_COPIA`,`MATR`),
  KEY `MATR` (`MATR`),
  CONSTRAINT `prestito_ibfk_1` FOREIGN KEY (`ISBN_LIB`, `C_COPIA`) REFERENCES `COPIA` (`ISBN_LIBRO`, `COD_COPIA`),
  CONSTRAINT `prestito_ibfk_2` FOREIGN KEY (`MATR`) REFERENCES `STUDENTE` (`MATRICOLA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PRESTITO`
--

LOCK TABLES `PRESTITO` WRITE;
/*!40000 ALTER TABLE `PRESTITO` DISABLE KEYS */;
INSERT INTO `PRESTITO` VALUES ('175205668-X',17,'426797','2020-08-17','2020-09-16'),('175205668-X',18,'176281','2020-09-02','2020-10-02'),('175205668-X',19,'44316','2020-09-03','2020-10-03'),('226372696-9',22,'343893','2020-09-10','2020-10-10'),('226372696-9',26,'180997','2020-09-07','2020-10-07'),('368990830-2',8,'220459','2020-08-01','2020-08-31'),('368990830-2',9,'49765','2020-08-18','2020-09-17'),('368990830-2',10,'343752','2020-08-26','2020-09-25'),('368990830-2',11,'232347','2020-08-30','2020-09-29'),('386397507-3',3,'270797','2020-09-17','2020-10-17'),('386397507-3',4,'322474','2020-08-12','2020-09-11'),('536751983-0',14,'149659','2020-08-16','2020-09-15'),('536751983-0',15,'244939','2020-08-06','2020-09-05'),('536751983-0',16,'398515','2020-08-13','2020-09-12'),('560797299-2',7,'403856','2020-08-15','2020-09-14'),('607745120-7',20,'185177','2020-09-03','2020-10-03'),('607745120-7',21,'420884','2020-09-03','2020-10-03'),('712463375-3',12,'132081','2020-08-02','2020-09-01'),('712463375-3',13,'356007','2020-08-03','2020-09-02');
/*!40000 ALTER TABLE `PRESTITO` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `SCRIVERE`
--

DROP TABLE IF EXISTS `SCRIVERE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `SCRIVERE` (
  `ISBN_L` char(13) NOT NULL,
  `COD_AUTORE` int NOT NULL,
  PRIMARY KEY (`ISBN_L`,`COD_AUTORE`),
  KEY `COD_AUTORE` (`COD_AUTORE`),
  CONSTRAINT `scrivere_ibfk_1` FOREIGN KEY (`ISBN_L`) REFERENCES `LIBRO` (`ISBN`),
  CONSTRAINT `scrivere_ibfk_2` FOREIGN KEY (`COD_AUTORE`) REFERENCES `AUTORE` (`COD_A`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `SCRIVERE`
--

LOCK TABLES `SCRIVERE` WRITE;
/*!40000 ALTER TABLE `SCRIVERE` DISABLE KEYS */;
INSERT INTO `SCRIVERE` VALUES ('009047587-9',1),('184722570-5',1),('432587582-4',1),('698429931-4',1),('870560200-9',1),('887526619-0',1),('998941371-1',1),('015674765-0',2),('060088686-7',2),('137066182-7',2),('947990234-6',2),('132261731-7',3),('386397507-3',3),('542931356-4',3),('666013383-6',3),('752213396-3',3),('825867311-4',3),('976860084-5',3),('992229254-8',3),('356414253-3',4),('385828979-5',4),('386397507-3',4),('526942871-7',4),('829509196-4',4),('857627191-5',4),('385828979-5',5),('386397507-3',5),('536751983-0',5),('653175736-1',5),('744780754-0',5),('009140312-X',6),('214940353-6',6),('386397507-3',6),('672560381-5',6),('860964250-X',6),('945660604-X',6),('006821799-4',7),('271280652-2',7),('560797299-2',7),('711604128-1',7),('368990830-2',8),('507124152-8',8),('600597433-5',8),('814543114-X',8),('023019395-1',9),('136964378-0',9),('343838580-5',9),('368990830-2',9),('421308038-2',9),('521329516-9',9),('554021569-9',9),('560211284-7',9),('875127371-3',9),('147191251-5',10),('165632171-8',10),('368990830-2',10),('385828979-5',10),('517581126-6',10),('584224789-5',10),('711604128-1',10),('825867311-4',10),('851106761-2',10),('860964250-X',10),('136320382-7',11),('253760945-X',11),('256739345-5',11),('368990830-2',11),('521329516-9',11),('536751983-0',11),('594275024-6',11),('976860084-5',11),('000369692-8',12),('015674765-0',12),('404884623-X',12),('611928800-7',12),('711604128-1',12),('712463375-3',12),('085745713-6',13),('226372696-9',13),('405663612-5',13),('502714957-3',13),('521847642-0',13),('712463375-3',13),('976860084-5',13),('184722570-5',14),('385828979-5',14),('457456450-4',14),('536751983-0',14),('565659819-5',14),('585173205-9',14),('666013383-6',14),('175205668-X',15),('284203566-6',15),('343838580-5',15),('347737564-5',15),('441842932-8',15),('875127371-3',15),('978061177-0',15),('087133062-8',16),('175205668-X',16),('253760945-X',16),('265972215-3',16),('333748888-9',16),('435456826-8',16),('436501926-0',16),('976860084-5',16),('175205668-X',17),('264788349-1',17),('432587582-4',17),('515279116-1',17),('542931356-4',17),('698429931-4',17),('860964250-X',17),('989371762-0',17),('023019395-1',18),('184722570-5',18),('259418123-4',18),('542931356-4',18),('607745120-7',18),('158999545-7',19),('384050463-5',19),('391578830-9',19),('515279116-1',19),('607745120-7',19),('863050834-5',19),('887526619-0',19),('014330257-4',20),('226372696-9',20),('299282269-8',20),('421128511-4',20),('740153355-3',20),('872379238-8',20),('945660604-X',20),('226372696-9',21),('368968937-6',21),('515279116-1',21),('666013383-6',21),('836374770-X',21),('843331705-9',21),('086031288-7',22),('101215590-0',22),('226372696-9',22),('253760945-X',22),('331424241-7',22),('384050463-5',22),('394873350-3',22),('814543114-X',22),('050916783-7',23),('226372696-9',23),('299282269-8',23),('331424241-7',23),('584224789-5',23),('101215590-0',24),('331424241-7',24),('457456450-4',24),('509808775-9',24),('698429931-4',24),('296111646-5',25),('441842932-8',25),('457456450-4',25),('945660604-X',25),('369048652-1',26),('457456450-4',26),('653175736-1',26),('182342356-6',27),('214940353-6',27),('368515943-7',27),('457456450-4',27),('775940054-3',27),('369048652-1',28),('970334328-7',28),('022938411-0',29),('364615054-8',29),('663119553-5',29),('875127371-3',29),('887526619-0',29),('946684198-X',29),('989371762-0',29),('050916783-7',30),('182342356-6',30),('256739345-5',30),('271280652-2',30),('347737564-5',30),('421128511-4',30),('672560381-5',30),('946684198-X',30),('300485539-9',31),('404884623-X',31),('560211284-7',31),('672560381-5',31),('927994979-9',31),('946684198-X',31),('052706515-3',32),('129488690-8',32),('584224789-5',32),('843331705-9',32),('343838580-5',33),('405663612-5',33),('816886703-3',33),('843331705-9',33),('887526619-0',33),('992229254-8',33),('436501926-0',34),('009140312-X',35),('103300276-3',35),('167947701-3',35),('554021569-9',35),('970334328-7',35),('022938411-0',36),('167947701-3',36),('347737564-5',36),('351898785-2',36),('167947701-3',37),('372098427-3',37),('469785019-X',37),('502714957-3',37),('769740772-8',37),('087133062-8',38),('093035174-6',38),('346481000-3',38),('449571196-2',38),('501862280-6',38),('516983356-3',38),('653175736-1',38),('744780754-0',38),('872379238-8',38),('976860084-5',38),('060088686-7',39),('065646345-7',39),('075305079-X',39),('259579784-0',39),('284203566-6',39),('292051296-X',39),('299282269-8',39),('769740772-8',39),('851106761-2',39),('872379238-8',39),('006821799-4',40),('103300276-3',40),('259579784-0',40),('343838580-5',40),('421308038-2',40),('872379238-8',40),('970334328-7',40),('976860084-5',40),('601546113-6',41),('825867311-4',41),('857627191-5',41),('863050834-5',41),('872379238-8',41),('086031288-7',42),('394873350-3',42),('469785019-X',42),('872379238-8',42),('947990234-6',42),('976860084-5',42),('300485539-9',43),('362309208-8',43),('387623794-7',43),('492112694-1',43),('554021569-9',43),('740153355-3',43),('752213396-3',43),('836374770-X',43),('872379238-8',43),('179592990-1',44),('425111017-X',44),('565659819-5',44),('927994979-9',44),('009047587-9',45),('023019395-1',45),('264788349-1',45),('565659819-5',45),('595626866-2',45),('023019395-1',46),('068254989-4',46),('093035174-6',46),('526942871-7',46),('565659819-5',46),('760264513-8',46),('769740772-8',46),('989371762-0',46),('343838580-5',47),('421308038-2',47),('469785019-X',47),('510453377-8',47),('517581126-6',47),('182342356-6',48),('366292343-2',48),('492112694-1',48),('006821799-4',49),('132261731-7',49),('271280652-2',49),('300485539-9',49),('366292343-2',49),('376459959-6',49),('441842932-8',49),('925812482-0',49),('015674765-0',50),('103300276-3',50),('366292343-2',50),('947990234-6',50),('065646345-7',51),('368515943-7',51),('376459959-6',51),('521847642-0',51),('657583349-7',51),('671158165-2',51),('786395256-5',51),('083845517-4',52),('542931356-4',52),('595626866-2',52),('657583349-7',52),('022938411-0',53),('060088686-7',53),('136320382-7',53),('147191251-5',53),('158999545-7',53),('387623794-7',53),('004023598-X',54),('132261731-7',54),('387623794-7',54),('425111017-X',54),('666013383-6',54),('296111646-5',55),('660038142-6',55),('136964378-0',56),('179592990-1',56),('405663612-5',56),('672560381-5',56),('867778553-1',56),('014330257-4',57),('076691563-8',57),('284203566-6',57),('594275024-6',57),('666013383-6',57),('867778553-1',57),('875127371-3',57),('216013488-0',58),('376459959-6',58),('469863297-8',58),('492112694-1',58),('507124152-8',58),('752213396-3',58),('756564271-1',58),('004023598-X',59),('055417113-9',59),('147191251-5',59),('171208472-0',59),('507124152-8',59),('769740772-8',59),('857627191-5',59),('216013488-0',60),('432587582-4',60),('502714957-3',60),('507124152-8',60),('829914597-X',60),('000369692-8',61),('271280652-2',61),('507124152-8',61),('594275024-6',61),('190222315-2',62),('507124152-8',62),('966859767-2',62),('009140312-X',63),('364615054-8',63),('653073623-9',63),('296111646-5',64),('364615054-8',64),('786395256-5',64),('052706515-3',65),('661872594-1',65),('925812482-0',65),('970334328-7',65),('131544489-5',66),('296111646-5',66),('385828979-5',66),('404884623-X',66),('925812482-0',66),('190222315-2',67),('368968937-6',67),('526942871-7',67),('925812482-0',67),('182342356-6',68),('264788349-1',68),('857627191-5',68),('925812482-0',68),('976860084-5',68),('101215590-0',69),('515279116-1',69),('601546113-6',69),('925812482-0',69),('129488690-8',70),('222223087-X',70),('368968937-6',70),('394873350-3',70),('405663612-5',70),('661872594-1',70),('666013383-6',70),('951964371-0',70),('000369692-8',71),('132261731-7',71),('216013488-0',71),('405663612-5',71),('425111017-X',71),('671158165-2',71),('742437654-3',71),('131544489-5',72),('168316748-1',72),('216013488-0',72),('435456826-8',72),('469863297-8',72),('554021569-9',72),('280992700-6',73),('333748888-9',73),('515279116-1',73),('672217513-8',73),('966859767-2',73),('299282269-8',74),('585173205-9',74),('801081738-4',74),('860964250-X',74),('265972215-3',75),('356414253-3',75),('585173205-9',75),('970334328-7',75),('376459959-6',76),('405663612-5',76),('740153355-3',76),('851106761-2',76),('672560381-5',77),('698429931-4',77),('065646345-7',78),('068254989-4',78),('301170811-8',78),('385828979-5',78),('756564271-1',78),('829914597-X',78),('976860084-5',78),('301170811-8',79),('368968937-6',79),('945660604-X',79),('093035174-6',80),('101215590-0',80),('296111646-5',80),('584224789-5',80),('976860084-5',80),('065646345-7',81),('065646345-7',82),('259579784-0',82),('672560381-5',82),('055417113-9',83),('093035174-6',83),('356414253-3',83),('744780754-0',83),('887526619-0',83),('978061177-0',83),('004023598-X',84),('394873350-3',84),('526942871-7',84),('756564271-1',84),('004023598-X',85),('384050463-5',85),('389625239-9',85),('594275024-6',85),('836374770-X',85),('970334328-7',85),('255439894-1',86),('290005808-2',86),('371268896-2',86),('372098427-3',86),('194862546-6',87),('860964250-X',87),('371268896-2',88),('515279116-1',88),('829509196-4',88),('829914597-X',88),('992229254-8',88),('101215590-0',89),('526942871-7',89),('801081738-4',89),('280992700-6',90),('515279116-1',90),('168316748-1',91),('280992700-6',91),('672560381-5',91),('945660604-X',91),('672217513-8',92),('672560381-5',92),('775940054-3',92),('786395256-5',92),('816886703-3',92),('863050834-5',92),('052706515-3',93),('404884623-X',93),('768148078-1',93),('255439894-1',94),('404884623-X',94),('421128511-4',94),('989371762-0',94),('351898785-2',95),('510453377-8',95),('421128511-4',96),('510453377-8',96),('542931356-4',96),('192373118-1',97),('733508116-5',97),('192373118-1',98),('384050463-5',98),('653175736-1',98),('168316748-1',99),('372098427-3',99),('521329516-9',99),('760264513-8',99),('170243376-5',100),('515279116-1',100),('666013383-6',100);
/*!40000 ALTER TABLE `SCRIVERE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `STUDENTE`
--

DROP TABLE IF EXISTS `STUDENTE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `STUDENTE` (
  `MATRICOLA` char(10) NOT NULL,
  `NOME_S` varchar(25) NOT NULL,
  `COGNOME_S` varchar(25) NOT NULL,
  `NOME_VIA_S` varchar(30) NOT NULL,
  `NUM_CIVICO_S` varchar(8) DEFAULT NULL,
  `CAP_S` varchar(5) NOT NULL,
  `PROVINCIA_S` varchar(30) NOT NULL,
  `NUM_TELEFONO` varchar(15) NOT NULL,
  PRIMARY KEY (`MATRICOLA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `STUDENTE`
--

LOCK TABLES `STUDENTE` WRITE;
/*!40000 ALTER TABLE `STUDENTE` DISABLE KEYS */;
INSERT INTO `STUDENTE` VALUES ('132081','Dalida','Giacummo','Via P.Colombi','250','45100','Rovigo','447-8663716'),('149659','Nilde','Calafa','Via D.Gallo','185','44020','Ferrara','044-3165440'),('176281','Igor','Auteri','Via I.Castelluccio','35','29020','Piacenza','335-0400170'),('180997','Milo','Ferrarini','Via C.Armellini','128','45100','Rovigo','480-6201528'),('185177','Liviana','Zorzenon','Viale B.Lanino','28','42034','Reggio Emilia','776-8762136'),('220459','Cora','Guarino','Via A.Aleardi','235/A','40056','Bologna','652-5770099'),('232347','Annagrazia','Anzivino','Via Lima','63','42034','Reggio Emilia','355-4806194'),('244939','Ladislao','Vairetti','Via Calizzano','164','35020','Padova','484-2851866'),('270797','Viola','Bolognese','Via G.Natale','274','44121','Ferrara','045-6632213'),('322474','Alessandro','Anastasio','Via Monte Palombino','112','44020','Ferrara','154-6446882'),('343752','Sesto','Tellitocci','Via Marsic','178','48011','Ravenna','995-4632840'),('343893','Isabella','Mattana','Via I.Lanza','244','45011','Rovigo','870-5928577'),('356007','Gianmaria','Bello','Via Battaglia di Adua','267','45011','Rovigo','611-6726223'),('398515','Ercole','Guzzanti','Via P.Cola','96','44121','Ferrara','359-9860597'),('403856','Gioia','Gisulfo','Via L.Manfredini','23','40025','Bologna','868-5912412'),('420884','Emanuela','Maddi','Via S.Monica','277','40056','Bologna','869-9606779'),('426797','Armando','Filosi','Via F.Parlatore','213','40025','Bologna','922-4410043'),('44316','Floriana','Scapini','Via E.Toti','58','48011','Ravenna','237-9913952'),('446757','Gillo','Prestianni','Via Brisa','194/D','35020','Padova','669-7274189'),('49765','Fabiano','Campus','Via Orbassano','93','29020','Piacenza','796-1182553');
/*!40000 ALTER TABLE `STUDENTE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `SUCCURSALE`
--

DROP TABLE IF EXISTS `SUCCURSALE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `SUCCURSALE` (
  `COD_SUC` int NOT NULL AUTO_INCREMENT,
  `NOME_VIA_SUC` varchar(30) NOT NULL,
  `NUM_CIVICO_SUC` varchar(8) NOT NULL,
  PRIMARY KEY (`COD_SUC`),
  UNIQUE KEY `SEDE` (`NOME_VIA_SUC`,`NUM_CIVICO_SUC`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `SUCCURSALE`
--

LOCK TABLES `SUCCURSALE` WRITE;
/*!40000 ALTER TABLE `SUCCURSALE` DISABLE KEYS */;
INSERT INTO `SUCCURSALE` VALUES (4,'Corso Ercole I d Este','37'),(7,'Via Fossato di Mortara','64/B'),(1,'Via Ghiara','36'),(6,'Via Luigi Borsari','46'),(5,'Via Macchiavelli','30'),(8,'Via Paradiso','12'),(3,'Via Saragat','1'),(2,'Via Voltapaletto','11');
/*!40000 ALTER TABLE `SUCCURSALE` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-09-17 16:17:56
