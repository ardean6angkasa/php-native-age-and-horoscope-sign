-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for zodiac
CREATE DATABASE IF NOT EXISTS `zodiac` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `zodiac`;

-- Dumping structure for table zodiac.tzodiak
CREATE TABLE IF NOT EXISTS `tzodiak` (
  `id_zodiak` int NOT NULL AUTO_INCREMENT,
  `nama_zodiak` varchar(100) NOT NULL,
  `awal` text NOT NULL,
  `akhir` text NOT NULL,
  PRIMARY KEY (`id_zodiak`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Dumping data for table zodiac.tzodiak: 12 rows
/*!40000 ALTER TABLE `tzodiak` DISABLE KEYS */;
INSERT INTO `tzodiak` (`id_zodiak`, `nama_zodiak`, `awal`, `akhir`) VALUES
	(1, 'Aries', 'March 21', 'April 19'),
	(2, 'Taurus', 'April 20', 'May 20'),
	(3, 'Gemini', 'May 21', 'June 20'),
	(4, 'Cancer', 'June 21', 'July 22'),
	(5, 'Leo', 'July 23', 'August 22'),
	(6, 'Virgo', 'August 23', 'September 22'),
	(7, 'Libra', 'September 23', 'October 22'),
	(8, 'Scorpio', 'October 23', 'November 21'),
	(9, 'Sagittarus', 'November 22', 'December 21'),
	(10, 'Capricornus', 'December 22', 'January 19'),
	(11, 'Aquarius', 'January 20', 'February 18'),
	(12, 'Pisces', 'February 19', 'March 20');
/*!40000 ALTER TABLE `tzodiak` ENABLE KEYS */;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
