/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE DATABASE IF NOT EXISTS `landingpage` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `landingpage`;

CREATE TABLE IF NOT EXISTS `pricing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `price` int(11) NOT NULL DEFAULT '0',
  `bandwidth` int(11) NOT NULL DEFAULT '0',
  `onlinespace` int(11) NOT NULL DEFAULT '0',
  `support` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `domain` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `fees` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `pricing` DISABLE KEYS */;
INSERT INTO `pricing` (`id`, `name`, `price`, `bandwidth`, `onlinespace`, `support`, `domain`, `fees`) VALUES
	(1, 'starter', 9, 1, 500, 'no', '1', 'no'),
	(2, 'advanced', 19, 2, 1, 'yes', '3', 'no'),
	(3, 'professional', 29, 3, 2, 'yes', 'unlimited', 'no');
/*!40000 ALTER TABLE `pricing` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
