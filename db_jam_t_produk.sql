-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: db_jam
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.9-MariaDB

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
-- Table structure for table `t_produk`
--

DROP TABLE IF EXISTS `t_produk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_produk` (
  `id_produk` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(45) DEFAULT NULL,
  `harga` varchar(45) DEFAULT NULL,
  `deskripsi` longtext,
  `stok` int(11) DEFAULT NULL,
  `photo` longtext,
  PRIMARY KEY (`id_produk`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_produk`
--

LOCK TABLES `t_produk` WRITE;
/*!40000 ALTER TABLE `t_produk` DISABLE KEYS */;
INSERT INTO `t_produk` VALUES (1,'Alexandre Cristie','3,000,000','Seperti halnya Alexandre Cristie 6280MC. Jam tangan analog bertali kulit ini punya casing berwarna hitam. Meski bukan jam tangan untuk kegiatan luar ruangan, AC 6280 MC tahan dari tekanan air hingga 50 m',10,'images/jam/alexandre.jpg'),(2,'Casio','500,000','Casio adalah merek dengan penjualan tertinggi di dunia! Memang sih, tidak ada data valid yang menguatkannya.',25,'images/jam/casio.jpg'),(3,'Citizen','100,000,000','Citizen belakangan ini jadi pusat perhatian karena menghadirkan fitur Eco-drive pada jam tangannya. Fitur ini merupakan fitur pengisian tenaga jam tangan dengan memanfaatkan tenaga surya. Ya, di setia jam tangan Citizen seri Eco-drive, kamu tak perlu gonta-ganti baterai dan khawatir jam tanganmu berhenti berdetak. ',5,'images/jam/citizen.jpg'),(4,'Daniel Wllington','2,000,000','Bentuk dan desain Daniel Wellington termasuk fleksibel untuk dipakai beragam aktivitas. Cocok dipakai sebagai aksesoris di acara formal, tapi bisa menambah penampilan dengan gaya kasual yang santai.',15,'images/jam/dw.jpg'),(5,'Expedition','3,000,000',' Jam tangan ini punya ciri khas 3 dial yang berbeda. Diameter jam ini bahkan ada yang mencapai 50,5 mm.',10,'images/jam/expedition.jpg'),(6,'Fossil','2,000,000','Jam tangan Fossil punya beragam model. Untuk usia muda maupun tua dan pria juga wanita. Sehingga jam tangan Fossil bisa menyesuaikan dengan tampilan dan gaya pemakainya.',20,'images/jam/fossil.jpg'),(7,'Seiko','9,000,000',' seri Grand Seiko Hi-Beat 36000 GMT. Mekanikal jam tangan ini asli buatan Seiko. Punya kerumitan seperti jam tangan mewah buatan Swiss dan dilengkapi fungsi dual timezone dan power reserve. ',10,'images/jam/seiko.jpg'),(8,'Tagheur','60,000,000','jam tangan yang bisa diajak untuk berpetualang. Bahan utama adalah titanium grade 5 yang keras dan kuat. Selain itu, jam tangan ini juga bisa diajak menyelam hingga 100 m',5,'images/jam/tagheur.jpg');
/*!40000 ALTER TABLE `t_produk` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-30 12:01:11
