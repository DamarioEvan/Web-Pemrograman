-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table myportfolio.about
CREATE TABLE IF NOT EXISTS `about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `about_title` varchar(255) NOT NULL,
  `about_subtitle` text NOT NULL,
  `profile_pic` text NOT NULL,
  `about_desc` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table myportfolio.about: ~0 rows (approximately)
/*!40000 ALTER TABLE `about` DISABLE KEYS */;
INSERT INTO `about` (`id`, `about_title`, `about_subtitle`, `profile_pic`, `about_desc`) VALUES
	(1, 'Damario Evan Dwiprayoga', 'Informatics Engineering Student', 'about_pic.jpeg', 'I\'m Informatics Engineering Student from Pembangunan Jaya University');
/*!40000 ALTER TABLE `about` ENABLE KEYS */;

-- Dumping structure for table myportfolio.contact
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table myportfolio.contact: ~0 rows (approximately)
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` (`id`, `address`, `email`, `mobile`) VALUES
	(1, 'Jakarta, Indonesia', 'damarioevan@gmail.com', '+6281776016829');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;

-- Dumping structure for table myportfolio.home
CREATE TABLE IF NOT EXISTS `home` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `showicons` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table myportfolio.home: ~0 rows (approximately)
/*!40000 ALTER TABLE `home` DISABLE KEYS */;
INSERT INTO `home` (`id`, `title`, `subtitle`, `showicons`) VALUES
	(1, 'Damario Evan Dwiprayoga', 'Informatics Engineering Student', 'on');
/*!40000 ALTER TABLE `home` ENABLE KEYS */;

-- Dumping structure for table myportfolio.portfolio
CREATE TABLE IF NOT EXISTS `portfolio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_pic` text NOT NULL,
  `project_type` varchar(255) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table myportfolio.portfolio: ~2 rows (approximately)
/*!40000 ALTER TABLE `portfolio` DISABLE KEYS */;
INSERT INTO `portfolio` (`id`, `project_pic`, `project_type`, `project_name`) VALUES
	(1, 'photo1.jpeg', 'PHOTOGRAPHY', 'Night Photography'),
	(6, 'photo2.jpg', 'PHOTOGRAPHY', 'Street Photography');
/*!40000 ALTER TABLE `portfolio` ENABLE KEYS */;

-- Dumping structure for table myportfolio.resume
CREATE TABLE IF NOT EXISTS `resume` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `institute` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table myportfolio.resume: ~3 rows (approximately)
/*!40000 ALTER TABLE `resume` DISABLE KEYS */;
INSERT INTO `resume` (`id`, `type`, `title`, `time`, `institute`) VALUES
	(1, 'e', 'Elementary School', '2007-2013', 'SDI Al-Azhar 15 Pamulang'),
	(7, 'e', 'Junior High School', '20013 - 2016', 'SMPI Al-Azhar 25 Tangerang Selatan'),
	(8, 'e', 'Senior High School', '2016 - 2019', 'SMAN 87 Jakarta'),
	(9, 'e', 'University', '2019 - Present', 'Pembangunan Jaya University');
/*!40000 ALTER TABLE `resume` ENABLE KEYS */;

-- Dumping structure for table myportfolio.section_control
CREATE TABLE IF NOT EXISTS `section_control` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `home_section` varchar(11) NOT NULL,
  `about_section` varchar(11) NOT NULL,
  `resume_section` varchar(11) NOT NULL,
  `skills_section` varchar(11) DEFAULT NULL,
  `portfolio_section` varchar(11) NOT NULL,
  `contact_section` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table myportfolio.section_control: ~1 rows (approximately)
/*!40000 ALTER TABLE `section_control` DISABLE KEYS */;
INSERT INTO `section_control` (`id`, `home_section`, `about_section`, `resume_section`, `skills_section`, `portfolio_section`, `contact_section`) VALUES
	(1, 'on', 'on', 'on', 'on', 'on', 'on');
/*!40000 ALTER TABLE `section_control` ENABLE KEYS */;

-- Dumping structure for table myportfolio.seo
CREATE TABLE IF NOT EXISTS `seo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_title` text NOT NULL,
  `keywords` text NOT NULL,
  `description` text NOT NULL,
  `siteicon` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table myportfolio.seo: ~0 rows (approximately)
/*!40000 ALTER TABLE `seo` DISABLE KEYS */;
INSERT INTO `seo` (`id`, `page_title`, `keywords`, `description`, `siteicon`) VALUES
	(1, 'Damario Evan Dwiprayoga', ' ', ' ', '1608861726home.png');
/*!40000 ALTER TABLE `seo` ENABLE KEYS */;

-- Dumping structure for table myportfolio.site_background
CREATE TABLE IF NOT EXISTS `site_background` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `background_img` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table myportfolio.site_background: ~0 rows (approximately)
/*!40000 ALTER TABLE `site_background` DISABLE KEYS */;
INSERT INTO `site_background` (`id`, `background_img`) VALUES
	(1, '1608860845london-at-night.jpg');
/*!40000 ALTER TABLE `site_background` ENABLE KEYS */;

-- Dumping structure for table myportfolio.skills
CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `skill_name` varchar(255) NOT NULL,
  `skill_level` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table myportfolio.skills: ~4 rows (approximately)
/*!40000 ALTER TABLE `skills` DISABLE KEYS */;
INSERT INTO `skills` (`id`, `skill_name`, `skill_level`) VALUES
	(2, 'HTML', 46),
	(4, 'Bootstrap', 35),
	(5, 'JAVA', 43),
	(6, 'Illustrator', 63),
	(7, 'Photography', 76);
/*!40000 ALTER TABLE `skills` ENABLE KEYS */;

-- Dumping structure for table myportfolio.social_media
CREATE TABLE IF NOT EXISTS `social_media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `twitter` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table myportfolio.social_media: ~1 rows (approximately)
/*!40000 ALTER TABLE `social_media` DISABLE KEYS */;
INSERT INTO `social_media` (`id`, `twitter`, `facebook`, `instagram`) VALUES
	(1, 'damarioevann', 'damarioevan', 'damarioevan');
/*!40000 ALTER TABLE `social_media` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
