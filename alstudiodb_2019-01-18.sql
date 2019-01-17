# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.23)
# Database: alstudiodb
# Generation Time: 2019-01-17 18:27:37 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table als_migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `als_migrations`;

CREATE TABLE `als_migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `als_migrations` WRITE;
/*!40000 ALTER TABLE `als_migrations` DISABLE KEYS */;

INSERT INTO `als_migrations` (`id`, `migration`, `batch`)
VALUES
	(16,'2014_10_12_000000_create_users_table',1),
	(17,'2014_10_12_100000_create_password_resets_table',1),
	(18,'2018_10_12_020239_create_permission_tables',1);

/*!40000 ALTER TABLE `als_migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table als_model_has_permissions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `als_model_has_permissions`;

CREATE TABLE `als_model_has_permissions` (
  `permission_id` int(10) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `als_model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `als_model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `als_permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table als_model_has_roles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `als_model_has_roles`;

CREATE TABLE `als_model_has_roles` (
  `role_id` int(10) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `als_model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `als_model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `als_roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `als_model_has_roles` WRITE;
/*!40000 ALTER TABLE `als_model_has_roles` DISABLE KEYS */;

INSERT INTO `als_model_has_roles` (`role_id`, `model_type`, `model_id`)
VALUES
	(1,'App\\User',1),
	(2,'App\\User',2),
	(3,'App\\User',3);

/*!40000 ALTER TABLE `als_model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table als_password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `als_password_resets`;

CREATE TABLE `als_password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `als_password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table als_pengguna
# ------------------------------------------------------------

DROP TABLE IF EXISTS `als_pengguna`;

CREATE TABLE `als_pengguna` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `als_users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `als_pengguna` WRITE;
/*!40000 ALTER TABLE `als_pengguna` DISABLE KEYS */;

INSERT INTO `als_pengguna` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'Hansen Makangiras','hansen','superadmin@alstudio.com','2018-10-20 14:45:19','$2y$10$rZ/gEBdMx3Xa8opl9MuRGuOAap/w5dGIiMMIU06jvIVpiimYGhKzi','7v2OIzVmrt','2018-10-20 14:45:19','2018-10-20 15:22:56'),
	(2,'Admin','admin','admin@alstudio.com','2018-10-20 14:45:19','$2y$10$fKoAt9BspPtBdV8qaHjUOe.9osDq8bMDjSHPkg0IdZtT1TOnUzZO.','Z8kyasj3bN','2018-10-20 14:45:19','2018-10-20 15:23:28'),
	(3,'Kasir','kasir','kasir@alstudio.com','2018-10-20 14:45:19','$2y$10$i7WV8F8B8qrqeoyCLRcmd.JFXG9NTep5Qn3azBV0GSUH1H1Ivz/d6','MY77iPqOnG','2018-10-20 14:45:19','2018-10-20 15:23:54');

/*!40000 ALTER TABLE `als_pengguna` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table als_permissions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `als_permissions`;

CREATE TABLE `als_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `als_permissions` WRITE;
/*!40000 ALTER TABLE `als_permissions` DISABLE KEYS */;

INSERT INTO `als_permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`)
VALUES
	(1,'viewUsers','web','2018-10-20 14:45:18','2018-10-20 14:45:18'),
	(2,'addUsers','web','2018-10-20 14:45:18','2018-10-20 14:45:18'),
	(3,'editUsers','web','2018-10-20 14:45:18','2018-10-20 14:45:18'),
	(4,'deleteUsers','web','2018-10-20 14:45:18','2018-10-20 14:45:18'),
	(5,'manageUsers','web','2018-10-20 14:45:18','2018-10-20 14:45:18'),
	(6,'viewRoles','web','2018-10-20 14:45:18','2018-10-20 14:45:18'),
	(7,'addRoles','web','2018-10-20 14:45:18','2018-10-20 14:45:18'),
	(8,'editRoles','web','2018-10-20 14:45:18','2018-10-20 14:45:18'),
	(9,'deleteRoles','web','2018-10-20 14:45:18','2018-10-20 14:45:18'),
	(10,'manageRoles','web','2018-10-20 14:45:18','2018-10-20 14:45:18'),
	(11,'managePelanggan','web','2018-10-20 15:31:19','2018-10-20 15:31:19'),
	(12,'manageCetakan','web','2018-10-20 15:31:41','2018-10-20 15:31:41'),
	(13,'managePaket','web','2018-10-20 15:31:54','2018-10-20 15:31:54'),
	(14,'manageOrder','web','2018-10-20 15:32:17','2018-10-20 15:32:17');

/*!40000 ALTER TABLE `als_permissions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table als_role_has_permissions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `als_role_has_permissions`;

CREATE TABLE `als_role_has_permissions` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `als_role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `als_role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `als_permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `als_role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `als_roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `als_role_has_permissions` WRITE;
/*!40000 ALTER TABLE `als_role_has_permissions` DISABLE KEYS */;

INSERT INTO `als_role_has_permissions` (`permission_id`, `role_id`)
VALUES
	(1,1),
	(2,1),
	(3,1),
	(4,1),
	(5,1),
	(6,1),
	(7,1),
	(8,1),
	(9,1),
	(10,1),
	(11,1),
	(12,1),
	(13,1),
	(14,1),
	(1,2),
	(6,2),
	(11,2),
	(12,2),
	(13,2),
	(14,2),
	(1,3),
	(6,3),
	(11,3),
	(12,3),
	(14,3);

/*!40000 ALTER TABLE `als_role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table als_roles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `als_roles`;

CREATE TABLE `als_roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `als_roles` WRITE;
/*!40000 ALTER TABLE `als_roles` DISABLE KEYS */;

INSERT INTO `als_roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`)
VALUES
	(1,'Superadmin','web','2018-10-20 14:45:19','2018-10-20 14:45:19'),
	(2,'Admin','web','2018-10-20 14:45:19','2018-10-20 14:45:19'),
	(3,'Kasir','web','2018-10-20 14:45:19','2018-10-20 14:45:19');

/*!40000 ALTER TABLE `als_roles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table als_users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `als_users`;

CREATE TABLE `als_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `als_users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
