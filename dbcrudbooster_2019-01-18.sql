# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.23)
# Database: dbcrudbooster
# Generation Time: 2019-01-17 18:27:51 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table bahan
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bahan`;

CREATE TABLE `bahan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_bahan` varchar(255) DEFAULT NULL,
  `id_satuan` int(10) DEFAULT NULL,
  `hpp` double unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

LOCK TABLES `bahan` WRITE;
/*!40000 ALTER TABLE `bahan` DISABLE KEYS */;

INSERT INTO `bahan` (`id`, `nama_bahan`, `id_satuan`, `hpp`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(1,'Kertas Foto',2,1500,'2018-11-03 17:48:24',NULL,NULL),
	(2,'Abcde',1,30000,'2018-11-03 17:48:46',NULL,NULL);

/*!40000 ALTER TABLE `bahan` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table cms_apicustom
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cms_apicustom`;

CREATE TABLE `cms_apicustom` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `permalink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tabel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aksi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kolom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderby` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_query_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sql_where` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `method_type` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` longtext COLLATE utf8mb4_unicode_ci,
  `responses` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `cms_apicustom` WRITE;
/*!40000 ALTER TABLE `cms_apicustom` DISABLE KEYS */;

INSERT INTO `cms_apicustom` (`id`, `permalink`, `tabel`, `aksi`, `kolom`, `orderby`, `sub_query_1`, `sql_where`, `nama`, `keterangan`, `parameter`, `created_at`, `updated_at`, `method_type`, `parameters`, `responses`)
VALUES
	(1,'get_orders_detail','orders_detail','list',NULL,NULL,NULL,NULL,'get-orders-detail',NULL,NULL,NULL,NULL,'post','a:7:{i:0;a:5:{s:4:\"name\";s:2:\"id\";s:4:\"type\";s:6:\"string\";s:6:\"config\";N;s:8:\"required\";s:1:\"0\";s:4:\"used\";s:1:\"1\";}i:1;a:5:{s:4:\"name\";s:11:\"products_id\";s:4:\"type\";s:7:\"integer\";s:6:\"config\";N;s:8:\"required\";s:1:\"0\";s:4:\"used\";s:1:\"0\";}i:2;a:5:{s:4:\"name\";s:9:\"orders_id\";s:4:\"type\";s:7:\"integer\";s:6:\"config\";N;s:8:\"required\";s:1:\"0\";s:4:\"used\";s:1:\"0\";}i:3;a:5:{s:4:\"name\";s:14:\"products_price\";s:4:\"type\";s:7:\"numeric\";s:6:\"config\";N;s:8:\"required\";s:1:\"0\";s:4:\"used\";s:1:\"0\";}i:4;a:5:{s:4:\"name\";s:8:\"quantity\";s:4:\"type\";s:7:\"numeric\";s:6:\"config\";N;s:8:\"required\";s:1:\"0\";s:4:\"used\";s:1:\"0\";}i:5;a:5:{s:4:\"name\";s:5:\"price\";s:4:\"type\";s:7:\"numeric\";s:6:\"config\";N;s:8:\"required\";s:1:\"0\";s:4:\"used\";s:1:\"0\";}i:6;a:5:{s:4:\"name\";s:9:\"sub_total\";s:4:\"type\";s:7:\"numeric\";s:6:\"config\";N;s:8:\"required\";s:1:\"0\";s:4:\"used\";s:1:\"0\";}}','a:7:{i:0;a:4:{s:4:\"name\";s:2:\"id\";s:4:\"type\";s:3:\"int\";s:8:\"subquery\";N;s:4:\"used\";s:1:\"1\";}i:1;a:4:{s:4:\"name\";s:11:\"products_id\";s:4:\"type\";s:7:\"integer\";s:8:\"subquery\";N;s:4:\"used\";s:1:\"1\";}i:2;a:4:{s:4:\"name\";s:9:\"orders_id\";s:4:\"type\";s:7:\"integer\";s:8:\"subquery\";N;s:4:\"used\";s:1:\"1\";}i:3;a:4:{s:4:\"name\";s:14:\"products_price\";s:4:\"type\";s:7:\"numeric\";s:8:\"subquery\";N;s:4:\"used\";s:1:\"1\";}i:4;a:4:{s:4:\"name\";s:8:\"quantity\";s:4:\"type\";s:7:\"numeric\";s:8:\"subquery\";N;s:4:\"used\";s:1:\"1\";}i:5;a:4:{s:4:\"name\";s:5:\"price\";s:4:\"type\";s:7:\"numeric\";s:8:\"subquery\";N;s:4:\"used\";s:1:\"1\";}i:6;a:4:{s:4:\"name\";s:9:\"sub_total\";s:4:\"type\";s:7:\"numeric\";s:8:\"subquery\";N;s:4:\"used\";s:1:\"1\";}}');

/*!40000 ALTER TABLE `cms_apicustom` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table cms_apikey
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cms_apikey`;

CREATE TABLE `cms_apikey` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `screetkey` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hit` int(11) DEFAULT NULL,
  `status` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `cms_apikey` WRITE;
/*!40000 ALTER TABLE `cms_apikey` DISABLE KEYS */;

INSERT INTO `cms_apikey` (`id`, `screetkey`, `hit`, `status`, `created_at`, `updated_at`)
VALUES
	(1,'b71a8cf596e568a9aa8d644911afa0bc',0,'active','2018-10-23 21:02:27',NULL);

/*!40000 ALTER TABLE `cms_apikey` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table cms_dashboard
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cms_dashboard`;

CREATE TABLE `cms_dashboard` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_cms_privileges` int(11) DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table cms_email_queues
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cms_email_queues`;

CREATE TABLE `cms_email_queues` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `send_at` datetime DEFAULT NULL,
  `email_recipient` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_from_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_from_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_cc_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_content` text COLLATE utf8mb4_unicode_ci,
  `email_attachments` text COLLATE utf8mb4_unicode_ci,
  `is_sent` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table cms_email_templates
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cms_email_templates`;

CREATE TABLE `cms_email_templates` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cc_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `cms_email_templates` WRITE;
/*!40000 ALTER TABLE `cms_email_templates` DISABLE KEYS */;

INSERT INTO `cms_email_templates` (`id`, `name`, `slug`, `subject`, `content`, `description`, `from_name`, `from_email`, `cc_email`, `created_at`, `updated_at`)
VALUES
	(1,'Email Template Forgot Password Backend','forgot_password_backend',NULL,'<p>Hi,</p><p>Someone requested forgot password, here is your new password : </p><p>[password]</p><p><br></p><p>--</p><p>Regards,</p><p>Admin</p>','[password]','System','system@crudbooster.com',NULL,'2018-10-22 20:36:12',NULL),
	(2,'Email Template Forgot Password Backend','forgot_password_backend',NULL,'<p>Hi,</p><p>Someone requested forgot password, here is your new password : </p><p>[password]</p><p><br></p><p>--</p><p>Regards,</p><p>Admin</p>','[password]','System','system@crudbooster.com',NULL,'2018-10-26 20:11:34',NULL);

/*!40000 ALTER TABLE `cms_email_templates` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table cms_logs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cms_logs`;

CREATE TABLE `cms_logs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ipaddress` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `useragent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `id_cms_users` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=143 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `cms_logs` WRITE;
/*!40000 ALTER TABLE `cms_logs` DISABLE KEYS */;

INSERT INTO `cms_logs` (`id`, `ipaddress`, `useragent`, `url`, `description`, `details`, `id_cms_users`, `created_at`, `updated_at`)
VALUES
	(1,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/login','admin@crudbooster.com login with IP Address ::1','',1,'2018-10-22 20:36:58',NULL),
	(2,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/customers/add-save','Add New Data Hansen at Customers','',1,'2018-10-22 21:13:17',NULL),
	(3,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/customers/add-save','Add New Data Hansen Makangiras at Customers','',1,'2018-10-22 21:21:21',NULL),
	(4,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/products/add-save','Add New Data Foto Studio at Products','',1,'2018-10-22 21:21:58',NULL),
	(5,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/products/add-save','Add New Data Cetak Foto at Products','',1,'2018-10-22 21:22:16',NULL),
	(6,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/products/add-save','Add New Data Cetak Spanduk at Products','',1,'2018-10-22 21:22:32',NULL),
	(7,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/login','admin@crudbooster.com login with IP Address ::1','',1,'2018-10-23 19:56:15',NULL),
	(8,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/orders/add-save','Add New Data  at Orders','',1,'2018-10-23 20:43:19',NULL),
	(9,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/orders/delete/1','Delete data 1 at Orders','',1,'2018-10-23 20:44:47',NULL),
	(10,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/orders/delete/2','Delete data 2 at Orders','',1,'2018-10-23 20:45:04',NULL),
	(11,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/logout','admin@crudbooster.com logout','',1,'2018-10-23 21:05:32',NULL),
	(12,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/login','admin@crudbooster.com login with IP Address ::1','',1,'2018-10-23 21:06:22',NULL),
	(13,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/users/add-save','Add New Data Kasir at Users Management','',1,'2018-10-23 21:07:12',NULL),
	(14,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/logout','admin@crudbooster.com logout','',1,'2018-10-23 21:07:20',NULL),
	(15,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/login','kasir@alstudio.com login with IP Address ::1','',2,'2018-10-23 21:07:25',NULL),
	(16,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/logout','kasir@alstudio.com logout','',2,'2018-10-23 21:07:38',NULL),
	(17,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/login','admin@crudbooster.com login with IP Address ::1','',1,'2018-10-23 21:07:43',NULL),
	(18,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/menu_management/edit-save/1','Update data Products at Menu Management','<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>color</td><td></td><td>normal</td></tr></tbody></table>',1,'2018-10-23 21:10:09',NULL),
	(19,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/menu_management/edit-save/2','Update data Customers at Menu Management','<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>color</td><td></td><td>normal</td></tr><tr><td>sorting</td><td>2</td><td></td></tr></tbody></table>',1,'2018-10-23 21:10:19',NULL),
	(20,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/menu_management/edit-save/3','Update data Orders at Menu Management','<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>color</td><td></td><td>normal</td></tr><tr><td>sorting</td><td>3</td><td></td></tr></tbody></table>',1,'2018-10-23 21:10:29',NULL),
	(21,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/logout','admin@crudbooster.com logout','',1,'2018-10-23 21:10:34',NULL),
	(22,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/login','kasir@alstudio.com login with IP Address ::1','',2,'2018-10-23 21:10:38',NULL),
	(23,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/logout','kasir@alstudio.com logout','',2,'2018-10-23 21:17:03',NULL),
	(24,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/login','admin@crudbooster.com login with IP Address ::1','',1,'2018-10-23 21:21:59',NULL),
	(25,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/statistic_builder/add-save','Add New Data Dashboard at Statistic Builder','',1,'2018-10-23 21:22:34',NULL),
	(26,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/login','admin@crudbooster.com login with IP Address ::1','',1,'2018-10-24 16:43:46',NULL),
	(27,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/login','admin@crudbooster.com login with IP Address ::1','',1,'2018-10-25 19:18:55',NULL),
	(28,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/orders/add-save','Add New Data  at Orders','',1,'2018-10-25 19:31:56',NULL),
	(29,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/orders/edit-save/3','Update data  at Orders','<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>total</td><td>350000</td><td>110000</td></tr></tbody></table>',1,'2018-10-25 19:32:49',NULL),
	(30,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/statistic_builder/delete/1','Delete data Dashboard at Statistic Builder','',1,'2018-10-25 19:42:02',NULL),
	(31,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/orders/delete/3','Delete data 3 at Orders','',1,'2018-10-25 19:44:28',NULL),
	(32,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/orders/delete/4','Delete data 4 at Orders','',1,'2018-10-25 19:44:31',NULL),
	(33,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/login','admin@crudbooster.com login with IP Address ::1','',1,'2018-10-26 19:46:43',NULL),
	(34,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/menu_management/edit-save/5','Update data Status Bayar at Menu Management','<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>name</td><td>StatusBayar</td><td>Status Bayar</td></tr><tr><td>color</td><td></td><td>normal</td></tr><tr><td>sorting</td><td>5</td><td></td></tr></tbody></table>',1,'2018-10-26 22:15:54',NULL),
	(35,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/menu_management/edit-save/6','Update data Status Order at Menu Management','<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>name</td><td>StatusOrder</td><td>Status Order</td></tr><tr><td>color</td><td></td><td>normal</td></tr><tr><td>sorting</td><td>6</td><td></td></tr></tbody></table>',1,'2018-10-26 22:16:16',NULL),
	(36,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/menu_management/edit-save/5','Update data Status Bayar at Menu Management','<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>sorting</td><td>5</td><td></td></tr></tbody></table>',1,'2018-10-26 22:16:28',NULL),
	(37,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/status_bayar/add-save','Add New Data  at StatusBayar','',1,'2018-10-26 22:17:08',NULL),
	(38,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/status_bayar/add-save','Add New Data  at StatusBayar','',1,'2018-10-26 22:17:21',NULL),
	(39,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/status_bayar/add-save','Add New Data  at StatusBayar','',1,'2018-10-26 22:17:49',NULL),
	(40,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/status_order/add-save','Add New Data  at StatusOrder','',1,'2018-10-26 22:18:15',NULL),
	(41,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/status_order/add-save','Add New Data  at StatusOrder','',1,'2018-10-26 22:18:23',NULL),
	(42,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/status_order/add-save','Add New Data  at StatusOrder','',1,'2018-10-26 22:18:39',NULL),
	(43,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/status_order/add-save','Add New Data  at StatusOrder','',1,'2018-10-26 22:18:50',NULL),
	(44,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/status_order/add-save','Add New Data  at StatusOrder','',1,'2018-10-26 22:18:56',NULL),
	(45,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/status_order/add-save','Add New Data  at StatusOrder','',1,'2018-10-26 22:19:10',NULL),
	(46,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/kategori_cetak/add-save','Add New Data  at Kategori','',1,'2018-10-26 22:40:25',NULL),
	(47,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/kategori_cetak/add-save','Add New Data  at Kategori','',1,'2018-10-26 22:40:32',NULL),
	(48,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/produk/add-save','Add New Data Foto 2x3 at Produk','',1,'2018-10-26 22:45:44',NULL),
	(49,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/produk/add-save','Add New Data Foto 3x4 at Produk','',1,'2018-10-26 22:45:59',NULL),
	(50,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/produk/add-save','Add New Data Cetak Baliho at Produk','',1,'2018-10-26 22:46:24',NULL),
	(51,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/login','admin@crudbooster.com login with IP Address ::1','',1,'2018-10-27 02:43:48',NULL),
	(52,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/customers/add-save','Add New Data Hansen at Customers','',1,'2018-10-27 02:55:45',NULL),
	(53,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/orders/add-save','Add New Data  at Orders','',1,'2018-10-27 02:59:14',NULL),
	(54,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/login','admin@crudbooster.com login with IP Address ::1','',1,'2018-10-28 05:21:14',NULL),
	(55,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/users/add-save','Add New Data Admin at Users Management','',1,'2018-10-28 05:31:28',NULL),
	(56,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/users/add-save','Add New Data Produksi at Users Management','',1,'2018-10-28 05:31:58',NULL),
	(57,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/users/add-save','Add New Data Foto at Users Management','',1,'2018-10-28 05:32:21',NULL),
	(58,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/users/edit-save/1','Update data Super Admin at Users Management','<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>photo</td><td></td><td>uploads/1/2018-10/avatar5.png</td></tr><tr><td>password</td><td>$2y$10$SQiqnlRj8dW5Q5yJPBmVvO6QTNSRNO0kQpJVq6WkxJK/JASyiAL3u</td><td></td></tr><tr><td>status</td><td>Active</td><td></td></tr></tbody></table>',1,'2018-10-28 05:32:47',NULL),
	(59,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/statistic_builder/add-save','Add New Data Dashboard at Statistic Builder','',1,'2018-10-28 05:35:47',NULL),
	(60,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/menu_management/add-save','Add New Data Statistik at Menu Management','',1,'2018-10-28 05:36:32',NULL),
	(61,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/orders/add-save','Add New Data  at Orders','',1,'2018-10-28 06:45:48',NULL),
	(62,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/status_bayar/edit-save/3','Update data  at StatusBayar','<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>status</td><td>Transfer Bank</td><td>Lunas</td></tr><tr><td>deleted_at</td><td></td><td></td></tr></tbody></table>',1,'2018-10-28 06:57:04',NULL),
	(63,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/status_bayar/edit-save/2','Update data  at StatusBayar','<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>status</td><td>Bayar Dimuka</td><td>Belum Lunas</td></tr><tr><td>deleted_at</td><td></td><td></td></tr></tbody></table>',1,'2018-10-28 06:57:12',NULL),
	(64,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/status_bayar/delete/1','Delete data 1 at StatusBayar','',1,'2018-10-28 06:57:30',NULL),
	(65,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/orders/edit-save/1','Update data  at Orders','<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody></tbody></table>',1,'2018-10-28 06:57:50',NULL),
	(66,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/orders/edit-save/2','Update data  at Orders','<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>status_order</td><td>5</td><td>1</td></tr></tbody></table>',1,'2018-10-28 07:41:04',NULL),
	(67,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/orders/edit-save/2','Update data  at Orders','<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>status_order</td><td>5</td><td>1</td></tr></tbody></table>',1,'2018-10-28 07:43:12',NULL),
	(68,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/orders/edit-save/2','Update data  at Orders','<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>status_order</td><td>5</td><td>1</td></tr></tbody></table>',1,'2018-10-28 07:49:06',NULL),
	(69,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/orders/edit-save/2','Update data  at Orders','<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>status_order</td><td>5</td><td>1</td></tr></tbody></table>',1,'2018-10-28 08:27:58',NULL),
	(70,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/produk/add-save','Add New Data Cetak Foto 5R at Produk','',1,'2018-10-28 14:34:52',NULL),
	(71,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/produk/add-save','Add New Data Cetak Spanduk at Produk','',1,'2018-10-28 14:35:17',NULL),
	(72,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/menu_management/edit-save/6','Update data Status Order at Menu Management','<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>color</td><td>normal</td><td>red</td></tr><tr><td>sorting</td><td>6</td><td></td></tr></tbody></table>',1,'2018-10-28 14:41:12',NULL),
	(73,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/menu_management/edit-save/6','Update data Status Order at Menu Management','<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>color</td><td>red</td><td>muted</td></tr><tr><td>sorting</td><td>6</td><td></td></tr></tbody></table>',1,'2018-10-28 14:41:37',NULL),
	(74,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/menu_management/edit-save/6','Update data Status Order at Menu Management','<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>color</td><td>muted</td><td>normal</td></tr><tr><td>sorting</td><td>6</td><td></td></tr></tbody></table>',1,'2018-10-28 14:41:53',NULL),
	(75,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/menu_management/edit-save/6','Update data Status Order at Menu Management','<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>sorting</td><td>6</td><td></td></tr></tbody></table>',1,'2018-10-28 14:42:02',NULL),
	(76,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/menu_management/edit-save/6','Update data Status Order at Menu Management','<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>sorting</td><td>6</td><td></td></tr></tbody></table>',1,'2018-10-28 14:42:39',NULL),
	(77,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/menu_management/edit-save/5','Update data Status Bayar at Menu Management','<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>icon</td><td>fa fa-glass</td><td>fa fa-money</td></tr><tr><td>sorting</td><td>5</td><td></td></tr></tbody></table>',1,'2018-10-28 14:43:03',NULL),
	(78,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/menu_management/add-save','Add New Data Master Data at Menu Management','',1,'2018-10-28 14:45:55',NULL),
	(79,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/menu_management/edit-save/8','Update data Master Data at Menu Management','<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>path</td><td>/</td><td>\"\"</td></tr><tr><td>sorting</td><td></td><td></td></tr></tbody></table>',1,'2018-10-28 14:46:31',NULL),
	(80,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/menu_management/edit-save/8','Update data Master Data at Menu Management','<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>path</td><td>\"\"</td><td></td></tr><tr><td>sorting</td><td></td><td></td></tr></tbody></table>',1,'2018-10-28 14:46:48',NULL),
	(81,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/menu_management/edit-save/8','Update data Master Data at Menu Management','<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>path</td><td>\"\"</td><td></td></tr><tr><td>sorting</td><td></td><td></td></tr></tbody></table>',1,'2018-10-28 14:47:03',NULL),
	(82,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/customers/add-save','Add New Data Ancen at Customers','',1,'2018-10-28 14:52:36',NULL),
	(83,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/orders/add-save','Add New Data  at Orders','',1,'2018-10-28 14:53:59',NULL),
	(84,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/login','foto@alstudio.com login with IP Address ::1','',5,'2018-10-29 10:12:17',NULL),
	(85,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/logout','foto@alstudio.com logout','',5,'2018-10-29 11:52:43',NULL),
	(86,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/login','admin@crudbooster.com login with IP Address ::1','',1,'2018-10-29 11:52:49',NULL),
	(87,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/logout','admin@crudbooster.com logout','',1,'2018-10-29 11:53:42',NULL),
	(88,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/login','admin@crudbooster.com login with IP Address ::1','',1,'2018-10-29 11:54:13',NULL),
	(89,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/users/edit-save/1','Update data Super Admin at Users Management','<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>email</td><td>admin@crudbooster.com</td><td>superadmin@alstudio.com</td></tr><tr><td>password</td><td>$2y$10$SQiqnlRj8dW5Q5yJPBmVvO6QTNSRNO0kQpJVq6WkxJK/JASyiAL3u</td><td></td></tr><tr><td>status</td><td>Active</td><td></td></tr></tbody></table>',1,'2018-10-29 11:54:40',NULL),
	(90,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/logout','superadmin@alstudio.com logout','',1,'2018-10-29 11:54:52',NULL),
	(91,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/login','superadmin@alstudio.com login with IP Address ::1','',1,'2018-10-29 11:55:26',NULL),
	(92,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/users/edit-save/1','Update data Super Admin at Users Management','<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>password</td><td>$2y$10$SQiqnlRj8dW5Q5yJPBmVvO6QTNSRNO0kQpJVq6WkxJK/JASyiAL3u</td><td>$2y$10$dSQjVmscUYj8A6hpk4.mpemhLjD0uGiPHqGDPxnkWqoY79n.oZb1e</td></tr><tr><td>status</td><td>Active</td><td></td></tr></tbody></table>',1,'2018-10-29 11:57:13',NULL),
	(93,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/logout','superadmin@alstudio.com logout','',1,'2018-10-29 11:57:36',NULL),
	(94,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/login','superadmin@alstudio.com login with IP Address ::1','',1,'2018-10-29 11:57:45',NULL),
	(95,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/login','superadmin@alstudio.com login with IP Address ::1','',1,'2018-10-29 17:00:41',NULL),
	(96,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/login','superadmin@alstudio.com login with IP Address ::1','',1,'2018-10-31 18:00:01',NULL),
	(97,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/users/add-save','Add New Data Resepsionis at Users Management','',1,'2018-10-31 18:19:54',NULL),
	(98,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/users/edit-save/6','Update data Resepsionis at Users Management','<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>password</td><td>$2y$10$Pk/hz5nGS0EV.wZDe98HgeEdjzAgGKbE5Dp1WOms3uvNj16MbiL06</td><td></td></tr><tr><td>id_cms_privileges</td><td>5</td><td>6</td></tr><tr><td>status</td><td></td><td></td></tr></tbody></table>',1,'2018-10-31 18:20:49',NULL),
	(99,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/logout','superadmin@alstudio.com logout','',1,'2018-10-31 18:23:35',NULL),
	(100,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/login','resepsionis@alstudio.com login with IP Address ::1','',6,'2018-10-31 18:23:53',NULL),
	(101,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/logout','resepsionis@alstudio.com logout','',6,'2018-10-31 18:24:13',NULL),
	(102,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/login','admin@alstudio.com login with IP Address ::1','',3,'2018-10-31 18:24:30',NULL),
	(103,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/logout','admin@alstudio.com logout','',3,'2018-10-31 18:24:43',NULL),
	(104,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/login','superadmin@alstudio.com login with IP Address ::1','',1,'2018-10-31 18:25:00',NULL),
	(105,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/menu_management/edit-save/3','Update data Orders at Menu Management','<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>sorting</td><td>3</td><td></td></tr></tbody></table>',1,'2018-10-31 18:25:47',NULL),
	(106,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/menu_management/edit-save/1','Update data Products at Menu Management','<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>parent_id</td><td>8</td><td></td></tr></tbody></table>',1,'2018-10-31 18:25:58',NULL),
	(107,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/menu_management/edit-save/2','Update data Customers at Menu Management','<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>parent_id</td><td>8</td><td></td></tr><tr><td>sorting</td><td>2</td><td></td></tr></tbody></table>',1,'2018-10-31 18:26:07',NULL),
	(108,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/menu_management/edit-save/4','Update data Kategori at Menu Management','<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>color</td><td></td><td>normal</td></tr><tr><td>parent_id</td><td>8</td><td></td></tr><tr><td>sorting</td><td>3</td><td></td></tr></tbody></table>',1,'2018-10-31 18:26:16',NULL),
	(109,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/menu_management/edit-save/5','Update data Status Bayar at Menu Management','<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>parent_id</td><td>8</td><td></td></tr><tr><td>sorting</td><td>4</td><td></td></tr></tbody></table>',1,'2018-10-31 18:26:36',NULL),
	(110,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/menu_management/edit-save/3','Update data Orders at Menu Management','<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>sorting</td><td>3</td><td></td></tr></tbody></table>',1,'2018-10-31 18:26:47',NULL),
	(111,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/menu_management/edit-save/6','Update data Status Order at Menu Management','<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>parent_id</td><td>8</td><td></td></tr><tr><td>sorting</td><td>5</td><td></td></tr></tbody></table>',1,'2018-10-31 18:26:56',NULL),
	(112,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/menu_management/edit-save/8','Update data Master Data at Menu Management','<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>type</td><td>URL</td><td>Route</td></tr><tr><td>path</td><td>\"\"</td><td>/admin</td></tr><tr><td>sorting</td><td>2</td><td></td></tr></tbody></table>',1,'2018-10-31 18:27:42',NULL),
	(113,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/logout','superadmin@alstudio.com logout','',1,'2018-10-31 18:27:51',NULL),
	(114,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/login','admin@alstudio.com login with IP Address ::1','',3,'2018-10-31 18:28:19',NULL),
	(115,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/logout','admin@alstudio.com logout','',3,'2018-10-31 18:28:35',NULL),
	(116,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36','http://laracrudbooster.local/admin/login','superadmin@alstudio.com login with IP Address ::1','',1,'2018-10-31 18:28:55',NULL),
	(117,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36','http://laracrudbooster.local/admin/login','superadmin@alstudio.com login with IP Address ::1','',1,'2018-11-02 16:00:37',NULL),
	(118,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36','http://laracrudbooster.local/admin/orders/add-save','Add New Data  at Orders','',1,'2018-11-02 16:01:41',NULL),
	(119,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36','http://laracrudbooster.local/admin/menu_management/add-save','Add New Data History Order at Menu Management','',1,'2018-11-02 18:47:39',NULL),
	(120,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36','http://laracrudbooster.local/admin/menu_management/add-save','Add New Data Tambah Order at Menu Management','',1,'2018-11-02 18:48:50',NULL),
	(121,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36','http://laracrudbooster.local/admin/menu_management/edit-save/10','Update data Tambah Order at Menu Management','<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>type</td><td>Controller & Method</td><td>Route</td></tr><tr><td>parent_id</td><td>3</td><td></td></tr></tbody></table>',1,'2018-11-02 18:51:08',NULL),
	(122,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36','http://laracrudbooster.local/admin/login','superadmin@alstudio.com login with IP Address ::1','',1,'2018-11-03 03:01:10',NULL),
	(123,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36','http://laracrudbooster.local/admin/login','superadmin@alstudio.com login with IP Address ::1','',1,'2018-11-03 17:39:08',NULL),
	(124,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36','http://laracrudbooster.local/admin/satuan/add-save','Add New Data  at Satuan','',1,'2018-11-03 17:42:27',NULL),
	(125,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36','http://laracrudbooster.local/admin/satuan/add-save','Add New Data  at Satuan','',1,'2018-11-03 17:42:32',NULL),
	(126,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36','http://laracrudbooster.local/admin/satuan/add-save','Add New Data  at Satuan','',1,'2018-11-03 17:42:32',NULL),
	(127,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36','http://laracrudbooster.local/admin/satuan/delete/3','Delete data 3 at Satuan','',1,'2018-11-03 17:48:05',NULL),
	(128,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36','http://laracrudbooster.local/admin/bahan/add-save','Add New Data Kertas Foto at Bahan','',1,'2018-11-03 17:48:24',NULL),
	(129,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36','http://laracrudbooster.local/admin/bahan/add-save','Add New Data Abcde at Bahan','',1,'2018-11-03 17:48:46',NULL),
	(130,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36','http://laracrudbooster.local/admin/finishing/add-save','Add New Data Finishing 1 at Finishing','',1,'2018-11-03 17:53:25',NULL),
	(131,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36','http://laracrudbooster.local/admin/module_generator/delete/21','Delete data Large Format at Module Generator','',1,'2018-11-03 17:59:52',NULL),
	(132,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36','http://laracrudbooster.local/admin/mesin/add-save','Add New Data Starjet A108 at Mesin','',1,'2018-11-03 18:26:12',NULL),
	(133,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36','http://laracrudbooster.local/admin/login','superadmin@alstudio.com login with IP Address ::1','',1,'2018-11-04 05:15:29',NULL),
	(134,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36','http://laracrudbooster.local/admin/module_generator/delete/23','Delete data Display at Module Generator','',1,'2018-11-04 05:31:55',NULL),
	(135,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36','http://laracrudbooster.local/admin/module_generator/delete/24','Delete data Jenis Display at Module Generator','',1,'2018-11-04 05:36:57',NULL),
	(136,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36','http://laracrudbooster.local/admin/menu_management/delete/17','Delete data Display at Menu Management','',1,'2018-11-04 05:38:50',NULL),
	(137,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36','http://laracrudbooster.local/admin/jenis_potong/add-save','Add New Data Potong 1 at Jenis Potong','',1,'2018-11-04 05:42:50',NULL),
	(138,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36','http://laracrudbooster.local/admin/jenis_display/add-save','Add New Data Display 1 at Display','',1,'2018-11-04 05:43:05',NULL),
	(139,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36','http://laracrudbooster.local/admin/harga_jual_produk/add-save','Add New Data  at Harga Jual Produk','',1,'2018-11-04 05:51:31',NULL),
	(140,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36','http://laracrudbooster.local/admin/logout','superadmin@alstudio.com logout','',1,'2018-11-04 06:03:48',NULL),
	(141,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36','http://laracrudbooster.local/admin/login','superadmin@alstudio.com login with IP Address ::1','',1,'2018-11-05 06:54:08',NULL),
	(142,'::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36','http://laracrudbooster.local/admin/login','superadmin@alstudio.com login with IP Address ::1','',1,'2018-11-05 16:20:27',NULL);

/*!40000 ALTER TABLE `cms_logs` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table cms_menus
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cms_menus`;

CREATE TABLE `cms_menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'url',
  `path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_dashboard` tinyint(1) NOT NULL DEFAULT '0',
  `id_cms_privileges` int(11) DEFAULT NULL,
  `sorting` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `cms_menus` WRITE;
/*!40000 ALTER TABLE `cms_menus` DISABLE KEYS */;

INSERT INTO `cms_menus` (`id`, `name`, `type`, `path`, `color`, `icon`, `parent_id`, `is_active`, `is_dashboard`, `id_cms_privileges`, `sorting`, `created_at`, `updated_at`)
VALUES
	(1,'Products','Route','AdminProductsControllerGetIndex','normal','fa fa-product-hunt',8,1,0,1,1,'2018-10-22 21:11:00','2018-10-31 18:25:58'),
	(2,'Customers','Route','AdminCustomersControllerGetIndex','normal','fa fa-user-plus',8,1,0,1,2,'2018-10-22 21:12:24','2018-10-31 18:26:07'),
	(3,'Orders','Route','AdminOrdersControllerGetIndex','normal','fa fa-shopping-cart',0,1,0,1,3,'2018-10-22 21:23:33','2018-10-31 18:26:47'),
	(4,'Kategori','Route','AdminKategoriCetakControllerGetIndex','normal','fa fa-object-group',8,1,0,1,3,'2018-10-26 22:12:26','2018-10-31 18:26:16'),
	(5,'Status Bayar','Route','AdminStatusBayarControllerGetIndex','normal','fa fa-money',8,1,0,1,4,'2018-10-26 22:13:38','2018-10-31 18:26:36'),
	(6,'Status Order','Route','AdminStatusOrderControllerGetIndex','normal','fa fa-list',8,1,0,1,5,'2018-10-26 22:14:41','2018-10-31 18:26:56'),
	(7,'Statistik','Statistic','statistic_builder/show/dashboard','normal','fa fa-bar-chart',0,1,1,1,1,'2018-10-28 05:36:32',NULL),
	(8,'Master Data','Route','/admin','normal','fa fa-database',0,1,0,1,2,'2018-10-28 14:45:55','2018-10-31 18:27:42'),
	(9,'History Order','Module','orders','normal','fa fa-list',3,1,0,1,2,'2018-11-02 18:47:39',NULL),
	(10,'Tambah Order','Route','AdminOrdersControllerGetAdd','normal','fa fa-plus-circle',3,1,0,1,1,'2018-11-02 18:48:50','2018-11-02 18:51:08'),
	(11,'Bahan','Route','AdminBahanControllerGetIndex',NULL,'fa fa-glass',0,1,0,1,4,'2018-11-03 17:40:01',NULL),
	(12,'Satuan','Route','AdminSatuanControllerGetIndex',NULL,'fa fa-glass',0,1,0,1,5,'2018-11-03 17:41:52',NULL),
	(13,'Finishing','Route','AdminFinishingControllerGetIndex',NULL,'fa fa-heart',0,1,0,1,6,'2018-11-03 17:51:56',NULL),
	(15,'Mesin','Route','AdminMesinControllerGetIndex',NULL,'fa fa-laptop',0,1,0,1,7,'2018-11-03 18:00:23',NULL),
	(18,'Jenis Potong','Route','AdminJenisPotongControllerGetIndex',NULL,'fa fa-glass',0,1,0,1,9,'2018-11-04 05:33:43',NULL),
	(19,'Jenis Display','Route','AdminJenisDisplayControllerGetIndex',NULL,'fa fa-laptop',0,1,0,1,10,'2018-11-04 05:37:55',NULL),
	(20,'Harga Jual Produk','Route','AdminHargaJualProdukControllerGetIndex',NULL,'fa fa-money',0,1,0,1,11,'2018-11-04 05:43:30',NULL);

/*!40000 ALTER TABLE `cms_menus` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table cms_menus_privileges
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cms_menus_privileges`;

CREATE TABLE `cms_menus_privileges` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_cms_menus` int(11) DEFAULT NULL,
  `id_cms_privileges` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=119 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `cms_menus_privileges` WRITE;
/*!40000 ALTER TABLE `cms_menus_privileges` DISABLE KEYS */;

INSERT INTO `cms_menus_privileges` (`id`, `id_cms_menus`, `id_cms_privileges`)
VALUES
	(28,7,5),
	(29,7,1),
	(71,1,5),
	(72,1,4),
	(73,1,2),
	(74,1,3),
	(75,1,1),
	(76,2,5),
	(77,2,4),
	(78,2,2),
	(79,2,3),
	(80,2,1),
	(81,4,5),
	(82,4,1),
	(83,5,5),
	(84,5,4),
	(85,5,2),
	(86,5,3),
	(87,5,6),
	(88,5,1),
	(89,3,5),
	(90,3,4),
	(91,3,2),
	(92,3,3),
	(93,3,6),
	(94,3,1),
	(95,6,5),
	(96,6,4),
	(97,6,2),
	(98,6,3),
	(99,6,1),
	(100,8,5),
	(101,8,2),
	(102,8,1),
	(103,9,5),
	(104,9,1),
	(107,10,5),
	(108,10,1),
	(109,11,1),
	(110,12,1),
	(111,13,1),
	(112,14,1),
	(113,15,1),
	(114,16,1),
	(115,17,1),
	(116,18,1),
	(117,19,1),
	(118,20,1);

/*!40000 ALTER TABLE `cms_menus_privileges` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table cms_moduls
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cms_moduls`;

CREATE TABLE `cms_moduls` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_protected` tinyint(1) NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `cms_moduls` WRITE;
/*!40000 ALTER TABLE `cms_moduls` DISABLE KEYS */;

INSERT INTO `cms_moduls` (`id`, `name`, `icon`, `path`, `table_name`, `controller`, `is_protected`, `is_active`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(1,'Notifications','fa fa-cog','notifications','cms_notifications','NotificationsController',1,1,'2018-10-22 20:36:12',NULL,NULL),
	(2,'Privileges','fa fa-cog','privileges','cms_privileges','PrivilegesController',1,1,'2018-10-22 20:36:12',NULL,NULL),
	(3,'Privileges Roles','fa fa-cog','privileges_roles','cms_privileges_roles','PrivilegesRolesController',1,1,'2018-10-22 20:36:12',NULL,NULL),
	(4,'Users Management','fa fa-users','users','cms_users','AdminCmsUsersController',0,1,'2018-10-22 20:36:12',NULL,NULL),
	(5,'Settings','fa fa-cog','settings','cms_settings','SettingsController',1,1,'2018-10-22 20:36:12',NULL,NULL),
	(6,'Module Generator','fa fa-database','module_generator','cms_moduls','ModulsController',1,1,'2018-10-22 20:36:12',NULL,NULL),
	(7,'Menu Management','fa fa-bars','menu_management','cms_menus','MenusController',1,1,'2018-10-22 20:36:12',NULL,NULL),
	(8,'Email Templates','fa fa-envelope-o','email_templates','cms_email_templates','EmailTemplatesController',1,1,'2018-10-22 20:36:12',NULL,NULL),
	(9,'Statistic Builder','fa fa-dashboard','statistic_builder','cms_statistics','StatisticBuilderController',1,1,'2018-10-22 20:36:12',NULL,NULL),
	(10,'API Generator','fa fa-cloud-download','api_generator','','ApiCustomController',1,1,'2018-10-22 20:36:12',NULL,NULL),
	(11,'Log User Access','fa fa-flag-o','logs','cms_logs','LogsController',1,1,'2018-10-22 20:36:12',NULL,NULL),
	(12,'Produk','fa fa-product-hunt','produk','products','AdminProductsController',0,0,'2018-10-22 21:11:00',NULL,NULL),
	(13,'Customers','fa fa-user-plus','customers','customers','AdminCustomersController',0,0,'2018-10-22 21:12:24',NULL,NULL),
	(14,'Orders','fa fa-shopping-cart','orders','orders','AdminOrdersController',0,0,'2018-10-22 21:23:33',NULL,NULL),
	(15,'Kategori','fa fa-object-group','kategori_cetak','kategori_cetak','AdminKategoriCetakController',0,0,'2018-10-26 22:12:26',NULL,NULL),
	(16,'StatusBayar','fa fa-money','status_bayar','status_bayar','AdminStatusBayarController',0,0,'2018-10-26 22:13:38',NULL,NULL),
	(17,'StatusOrder','fa fa-list','status_order','status_order','AdminStatusOrderController',0,0,'2018-10-26 22:14:41',NULL,NULL),
	(18,'Bahan','fa fa-glass','bahan','bahan','AdminBahanController',0,0,'2018-11-03 17:40:01',NULL,NULL),
	(19,'Satuan','fa fa-glass','satuan','satuan','AdminSatuanController',0,0,'2018-11-03 17:41:52',NULL,NULL),
	(20,'Finishing','fa fa-heart','finishing','finishing','AdminFinishingController',0,0,'2018-11-03 17:51:56',NULL,NULL),
	(21,'Large Format','fa fa-glass','large_format','large_format','AdminLargeFormatController',0,0,'2018-11-03 17:53:48',NULL,'2018-11-03 17:59:52'),
	(22,'Mesin','fa fa-laptop','mesin','mesin','AdminMesinController',0,0,'2018-11-03 18:00:23',NULL,NULL),
	(23,'Display','fa fa-glass','jenis_display','jenis_display','AdminJenisDisplayController',0,0,'2018-11-04 05:30:46',NULL,'2018-11-04 05:31:55'),
	(24,'Jenis Display','fa fa-glass','jenis_display','jenis_display','AdminJenisDisplayController',0,0,'2018-11-04 05:32:11',NULL,'2018-11-04 05:36:57'),
	(25,'Jenis Potong','fa fa-glass','jenis_potong','jenis_potong','AdminJenisPotongController',0,0,'2018-11-04 05:33:43',NULL,NULL),
	(26,'Jenis Display','fa fa-laptop','jenis_display','jenis_display','AdminJenisDisplayController',0,0,'2018-11-04 05:37:55',NULL,NULL),
	(27,'Harga Jual Produk','fa fa-money','harga_jual_produk','harga_jual_produk','AdminHargaJualProdukController',0,0,'2018-11-04 05:43:30',NULL,NULL);

/*!40000 ALTER TABLE `cms_moduls` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table cms_notifications
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cms_notifications`;

CREATE TABLE `cms_notifications` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_cms_users` int(11) DEFAULT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_read` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table cms_orders
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cms_orders`;

CREATE TABLE `cms_orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `customers_id` int(11) NOT NULL,
  `order_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table cms_privileges
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cms_privileges`;

CREATE TABLE `cms_privileges` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_superadmin` tinyint(1) DEFAULT NULL,
  `theme_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `cms_privileges` WRITE;
/*!40000 ALTER TABLE `cms_privileges` DISABLE KEYS */;

INSERT INTO `cms_privileges` (`id`, `name`, `is_superadmin`, `theme_color`, `created_at`, `updated_at`)
VALUES
	(1,'Super Administrator',1,'skin-red','2018-10-22 20:36:12',NULL),
	(2,'Kasir',0,'skin-yellow',NULL,NULL),
	(3,'Produksi',0,'skin-green',NULL,NULL),
	(4,'Foto',0,'skin-black',NULL,NULL),
	(5,'Admin',0,'skin-black',NULL,NULL),
	(6,'Resepsionis',0,'skin-yellow',NULL,NULL);

/*!40000 ALTER TABLE `cms_privileges` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table cms_privileges_roles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cms_privileges_roles`;

CREATE TABLE `cms_privileges_roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `is_visible` tinyint(1) DEFAULT NULL,
  `is_create` tinyint(1) DEFAULT NULL,
  `is_read` tinyint(1) DEFAULT NULL,
  `is_edit` tinyint(1) DEFAULT NULL,
  `is_delete` tinyint(1) DEFAULT NULL,
  `id_cms_privileges` int(11) DEFAULT NULL,
  `id_cms_moduls` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `cms_privileges_roles` WRITE;
/*!40000 ALTER TABLE `cms_privileges_roles` DISABLE KEYS */;

INSERT INTO `cms_privileges_roles` (`id`, `is_visible`, `is_create`, `is_read`, `is_edit`, `is_delete`, `id_cms_privileges`, `id_cms_moduls`, `created_at`, `updated_at`)
VALUES
	(18,1,0,1,1,0,3,13,NULL,NULL),
	(19,1,0,1,1,0,3,14,NULL,NULL),
	(20,1,0,1,1,0,3,12,NULL,NULL),
	(24,1,0,1,0,0,4,13,NULL,NULL),
	(25,1,0,1,0,0,4,14,NULL,NULL),
	(26,1,0,1,0,0,4,12,NULL,NULL),
	(27,1,1,1,1,0,2,13,NULL,NULL),
	(28,1,1,1,1,0,2,14,NULL,NULL),
	(29,1,1,1,1,0,2,12,NULL,NULL),
	(39,1,1,1,1,1,6,14,NULL,NULL),
	(40,1,1,1,1,1,1,13,NULL,NULL),
	(41,1,1,1,1,1,1,15,NULL,NULL),
	(42,1,1,1,1,1,1,14,NULL,NULL),
	(43,1,1,1,1,1,1,12,NULL,NULL),
	(44,1,1,1,1,1,1,16,NULL,NULL),
	(45,1,1,1,1,1,1,17,NULL,NULL),
	(46,1,1,1,1,1,1,4,NULL,NULL),
	(47,1,1,1,1,1,5,13,NULL,NULL),
	(48,1,1,1,1,1,5,15,NULL,NULL),
	(49,1,1,1,1,1,5,14,NULL,NULL),
	(50,1,1,1,1,1,5,12,NULL,NULL),
	(51,1,1,1,1,1,5,16,NULL,NULL),
	(52,1,1,1,1,1,5,17,NULL,NULL),
	(53,1,1,1,1,1,1,18,NULL,NULL),
	(54,1,1,1,1,1,1,19,NULL,NULL),
	(55,1,1,1,1,1,1,20,NULL,NULL),
	(56,1,1,1,1,1,1,21,NULL,NULL),
	(57,1,1,1,1,1,1,22,NULL,NULL),
	(58,1,1,1,1,1,1,23,NULL,NULL),
	(59,1,1,1,1,1,1,24,NULL,NULL),
	(60,1,1,1,1,1,1,25,NULL,NULL),
	(61,1,1,1,1,1,1,26,NULL,NULL),
	(62,1,1,1,1,1,1,27,NULL,NULL);

/*!40000 ALTER TABLE `cms_privileges_roles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table cms_settings
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cms_settings`;

CREATE TABLE `cms_settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `content_input_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dataenum` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `helper` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `group_setting` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `cms_settings` WRITE;
/*!40000 ALTER TABLE `cms_settings` DISABLE KEYS */;

INSERT INTO `cms_settings` (`id`, `name`, `content`, `content_input_type`, `dataenum`, `helper`, `created_at`, `updated_at`, `group_setting`, `label`)
VALUES
	(1,'login_background_color',NULL,'text',NULL,'Input hexacode','2018-10-22 20:36:12',NULL,'Login Register Style','Login Background Color'),
	(2,'login_font_color',NULL,'text',NULL,'Input hexacode','2018-10-22 20:36:12',NULL,'Login Register Style','Login Font Color'),
	(3,'login_background_image',NULL,'upload_image',NULL,NULL,'2018-10-22 20:36:12',NULL,'Login Register Style','Login Background Image'),
	(4,'email_sender','support@crudbooster.com','text',NULL,NULL,'2018-10-22 20:36:12',NULL,'Email Setting','Email Sender'),
	(5,'smtp_driver','mail','select','smtp,mail,sendmail',NULL,'2018-10-22 20:36:12',NULL,'Email Setting','Mail Driver'),
	(6,'smtp_host','','text',NULL,NULL,'2018-10-22 20:36:12',NULL,'Email Setting','SMTP Host'),
	(7,'smtp_port','25','text',NULL,'default 25','2018-10-22 20:36:12',NULL,'Email Setting','SMTP Port'),
	(8,'smtp_username','','text',NULL,NULL,'2018-10-22 20:36:12',NULL,'Email Setting','SMTP Username'),
	(9,'smtp_password','','text',NULL,NULL,'2018-10-22 20:36:12',NULL,'Email Setting','SMTP Password'),
	(10,'appname','AL Studio App','text',NULL,NULL,'2018-10-22 20:36:12',NULL,'Application Setting','Application Name'),
	(11,'default_paper_size','A4','text',NULL,'Paper size, ex : A4, Legal, etc','2018-10-22 20:36:12',NULL,'Application Setting','Default Paper Print Size'),
	(12,'logo',NULL,'upload_image',NULL,NULL,'2018-10-22 20:36:12',NULL,'Application Setting','Logo'),
	(13,'favicon',NULL,'upload_image',NULL,NULL,'2018-10-22 20:36:12',NULL,'Application Setting','Favicon'),
	(14,'api_debug_mode','true','select','true,false',NULL,'2018-10-22 20:36:12',NULL,'Application Setting','API Debug Mode'),
	(15,'google_api_key',NULL,'text',NULL,NULL,'2018-10-22 20:36:12',NULL,'Application Setting','Google API Key'),
	(16,'google_fcm_key',NULL,'text',NULL,NULL,'2018-10-22 20:36:12',NULL,'Application Setting','Google FCM Key');

/*!40000 ALTER TABLE `cms_settings` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table cms_statistic_components
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cms_statistic_components`;

CREATE TABLE `cms_statistic_components` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_cms_statistics` int(11) DEFAULT NULL,
  `componentID` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `component_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area_name` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sorting` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `config` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `cms_statistic_components` WRITE;
/*!40000 ALTER TABLE `cms_statistic_components` DISABLE KEYS */;

INSERT INTO `cms_statistic_components` (`id`, `id_cms_statistics`, `componentID`, `component_name`, `area_name`, `sorting`, `name`, `config`, `created_at`, `updated_at`)
VALUES
	(1,1,'7e0cbe61381389ef1e60f50429bba7f5','smallbox','area1',0,NULL,'{\"name\":\"Total Customers\",\"icon\":\"ion-person\",\"color\":\"bg-green\",\"link\":\"\\/admin\\/customers\",\"sql\":\"select count(*) from customers\"}','2018-10-23 21:23:00',NULL),
	(3,1,'9950fb369d8f81ae2d141084f315666e','smallbox','area3',0,NULL,'{\"name\":\"Total Pendapatan\",\"icon\":\"ion-cash\",\"color\":\"bg-aqua\",\"link\":\"\\/\",\"sql\":\"select sum(\'total_harga\') from orders\"}','2018-10-23 21:23:08',NULL),
	(4,1,'4975bdb78b7efa5c108d3df16fdd3256','smallbox','area4',0,NULL,'{\"name\":\"Total Pengguna\",\"icon\":\"ion-person-add\",\"color\":\"bg-yellow\",\"link\":\"\\/admin\\/users\",\"sql\":\"select count(*) from cms_users\"}','2018-10-23 21:23:10',NULL),
	(7,1,'e54bbd0ff3b62832de1145e72b335447','smallbox','area2',1,NULL,'{\"name\":\"Total Orders\",\"icon\":\"ion-bag\",\"color\":\"bg-red\",\"link\":\"\\/admin\\/orders\",\"sql\":\"select count(*) from orders\"}','2018-10-28 05:37:58',NULL),
	(10,1,'c0030d84c2d15796582a48707a5203b5','panelarea',NULL,0,'Untitled',NULL,'2018-10-28 05:38:04',NULL),
	(12,1,'0b9a2993b689e71ccd7288e667b1f8f5','chartarea',NULL,0,'Untitled',NULL,'2018-10-28 05:38:32',NULL),
	(13,1,'399876dadc53ff95ed8b15fe08b79e3e','chartarea','area5',0,NULL,'{\"name\":\"Test\",\"sql\":\"SELECT\\r\\n\\tCOUNT( id ) AS \\r\\nVALUE\\r\\n\\t,\\r\\n\\tDATE_FORMAT( created_at, \'%M %Y\' ) AS label \\r\\nFROM\\r\\n\\torders_detail\\t\\r\\nGROUP BY\\r\\n\\tDATE_FORMAT( created_at, \'%M %Y\' );\\r\\n\\r\\nSELECT\\r\\n\\tCOUNT( id ) AS \\r\\nVALUE\\r\\n\\t,\\r\\n\\tDATE_FORMAT( created_at, \'%M %Y\' ) AS label \\r\\nFROM\\r\\n\\tcustomers\\t\\r\\nGROUP BY\\r\\n\\tDATE_FORMAT( created_at, \'%M %Y\' )\",\"area_name\":\"Jumlah\",\"goals\":\"5\"}','2018-10-28 06:28:03',NULL);

/*!40000 ALTER TABLE `cms_statistic_components` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table cms_statistics
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cms_statistics`;

CREATE TABLE `cms_statistics` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `cms_statistics` WRITE;
/*!40000 ALTER TABLE `cms_statistics` DISABLE KEYS */;

INSERT INTO `cms_statistics` (`id`, `name`, `slug`, `created_at`, `updated_at`)
VALUES
	(1,'Dashboard','dashboard','2018-10-28 05:35:47',NULL);

/*!40000 ALTER TABLE `cms_statistics` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table cms_users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cms_users`;

CREATE TABLE `cms_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_cms_privileges` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `cms_users` WRITE;
/*!40000 ALTER TABLE `cms_users` DISABLE KEYS */;

INSERT INTO `cms_users` (`id`, `name`, `photo`, `email`, `password`, `id_cms_privileges`, `created_at`, `updated_at`, `status`)
VALUES
	(1,'Super Admin','uploads/1/2018-10/avatar5.png','superadmin@alstudio.com','$2y$10$dSQjVmscUYj8A6hpk4.mpemhLjD0uGiPHqGDPxnkWqoY79n.oZb1e',1,'2018-10-22 20:36:12','2018-10-29 11:57:13','Active'),
	(2,'Kasir','uploads/1/2018-10/avatar.png','kasir@alstudio.com','$2y$10$q2sWNt7HGz2U6QPdfxgqce6RoNdJmpGGKvEInbwfm23qScHHi43d6',2,'2018-10-23 21:07:12',NULL,NULL),
	(3,'Admin','uploads/1/2018-10/avatar2.png','admin@alstudio.com','$2y$10$B/ML2AmWVgTit6p/QuUCteTB9ns6Wk5SEy/RT/7dJYTaj2aa8DNK2',5,'2018-10-28 05:31:28',NULL,NULL),
	(4,'Produksi','uploads/1/2018-10/avatar3.png','cetak@alstudio.com','$2y$10$aFw4fqBMfzNMxfLtgT46LuP0NmO/arijKMgdknnphEhmRxpd.7QfG',3,'2018-10-28 05:31:57',NULL,NULL),
	(5,'Foto','uploads/1/2018-10/avatar04.png','foto@alstudio.com','$2y$10$.G67KKtNg/nC77n0R3v.iu7pJmFPd.ZeJDP5i9wbajR5h0aDyouUu',4,'2018-10-28 05:32:21',NULL,NULL),
	(6,'Resepsionis','uploads/1/2018-10/avatar.png','resepsionis@alstudio.com','$2y$10$Pk/hz5nGS0EV.wZDe98HgeEdjzAgGKbE5Dp1WOms3uvNj16MbiL06',6,'2018-10-31 18:19:54','2018-10-31 18:20:49',NULL);

/*!40000 ALTER TABLE `cms_users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table customers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `customers`;

CREATE TABLE `customers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(17) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;

INSERT INTO `customers` (`id`, `name`, `phone`, `address`, `deleted_at`, `created_at`, `updated_at`)
VALUES
	(1,'Hansen','08114199010','BTP Blok J No 384',NULL,'2018-10-27 02:55:45',NULL),
	(2,'Ancen','081255985678','BTP Blok A No 11',NULL,'2018-10-28 14:52:36',NULL);

/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table finishing
# ------------------------------------------------------------

DROP TABLE IF EXISTS `finishing`;

CREATE TABLE `finishing` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `jenis_finishing` varchar(255) DEFAULT NULL,
  `id_satuan` int(10) unsigned DEFAULT NULL,
  `hpp` double unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

LOCK TABLES `finishing` WRITE;
/*!40000 ALTER TABLE `finishing` DISABLE KEYS */;

INSERT INTO `finishing` (`id`, `jenis_finishing`, `id_satuan`, `hpp`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(1,'Finishing 1',1,30000,'2018-11-03 17:53:25',NULL,NULL);

/*!40000 ALTER TABLE `finishing` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table foto_studio
# ------------------------------------------------------------

DROP TABLE IF EXISTS `foto_studio`;

CREATE TABLE `foto_studio` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `jenis_foto` varchar(255) DEFAULT NULL,
  `id_satuan` int(10) unsigned DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `hpp` double unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table harga_jual_produk
# ------------------------------------------------------------

DROP TABLE IF EXISTS `harga_jual_produk`;

CREATE TABLE `harga_jual_produk` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `produk_id` int(10) unsigned DEFAULT NULL,
  `bahan_id` int(10) unsigned DEFAULT NULL,
  `mesin_id` int(10) unsigned DEFAULT NULL,
  `finishing_id` int(10) unsigned DEFAULT NULL,
  `potong_id` int(10) unsigned DEFAULT NULL,
  `display_id` int(10) unsigned DEFAULT NULL,
  `harga_jual` double unsigned DEFAULT NULL,
  `min_qty` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

LOCK TABLES `harga_jual_produk` WRITE;
/*!40000 ALTER TABLE `harga_jual_produk` DISABLE KEYS */;

INSERT INTO `harga_jual_produk` (`id`, `produk_id`, `bahan_id`, `mesin_id`, `finishing_id`, `potong_id`, `display_id`, `harga_jual`, `min_qty`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(1,3,2,1,1,1,1,30000,1,'2018-11-04 05:51:31',NULL,NULL);

/*!40000 ALTER TABLE `harga_jual_produk` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table jenis_display
# ------------------------------------------------------------

DROP TABLE IF EXISTS `jenis_display`;

CREATE TABLE `jenis_display` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `jenis_display` varchar(255) DEFAULT NULL,
  `hpp` double unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

LOCK TABLES `jenis_display` WRITE;
/*!40000 ALTER TABLE `jenis_display` DISABLE KEYS */;

INSERT INTO `jenis_display` (`id`, `jenis_display`, `hpp`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(1,'Display 1',7000,'2018-11-04 05:43:05',NULL,NULL);

/*!40000 ALTER TABLE `jenis_display` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table jenis_potong
# ------------------------------------------------------------

DROP TABLE IF EXISTS `jenis_potong`;

CREATE TABLE `jenis_potong` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `jenis_potong` varchar(255) DEFAULT NULL,
  `id_satuan` int(10) DEFAULT NULL,
  `hpp` double unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

LOCK TABLES `jenis_potong` WRITE;
/*!40000 ALTER TABLE `jenis_potong` DISABLE KEYS */;

INSERT INTO `jenis_potong` (`id`, `jenis_potong`, `id_satuan`, `hpp`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(1,'Potong 1',1,5000,'2018-11-04 05:42:50',NULL,NULL);

/*!40000 ALTER TABLE `jenis_potong` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table kategori_cetak
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kategori_cetak`;

CREATE TABLE `kategori_cetak` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kategori` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `kategori_cetak` WRITE;
/*!40000 ALTER TABLE `kategori_cetak` DISABLE KEYS */;

INSERT INTO `kategori_cetak` (`id`, `kategori`, `deleted_at`, `created_at`, `updated_at`)
VALUES
	(1,'Foto Studio',NULL,'2018-10-26 22:40:25',NULL),
	(2,'Digital Printing',NULL,'2018-10-26 22:40:32',NULL);

/*!40000 ALTER TABLE `kategori_cetak` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table large_format
# ------------------------------------------------------------

DROP TABLE IF EXISTS `large_format`;

CREATE TABLE `large_format` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `no_order` varchar(30) DEFAULT NULL,
  `produk_id` int(10) unsigned DEFAULT NULL,
  `mesin_id` int(10) unsigned DEFAULT NULL,
  `bahan_id` int(10) unsigned DEFAULT NULL,
  `laminating_id` int(10) unsigned DEFAULT NULL,
  `cutting_id` int(10) unsigned DEFAULT NULL,
  `finishing_id` int(10) unsigned DEFAULT NULL,
  `panjang` decimal(10,2) unsigned DEFAULT NULL,
  `lebar` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table mesin
# ------------------------------------------------------------

DROP TABLE IF EXISTS `mesin`;

CREATE TABLE `mesin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_mesin` varchar(255) DEFAULT NULL,
  `tipe_mesin` varchar(255) DEFAULT NULL,
  `id_satuan` int(10) unsigned DEFAULT NULL,
  `hpp` double unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

LOCK TABLES `mesin` WRITE;
/*!40000 ALTER TABLE `mesin` DISABLE KEYS */;

INSERT INTO `mesin` (`id`, `nama_mesin`, `tipe_mesin`, `id_satuan`, `hpp`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(1,'Starjet A108','A',1,30000000,'2018-11-03 18:26:12',NULL,NULL);

/*!40000 ALTER TABLE `mesin` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2016_08_07_145904_add_table_cms_apicustom',1),
	(2,'2016_08_07_150834_add_table_cms_dashboard',1),
	(3,'2016_08_07_151210_add_table_cms_logs',1),
	(4,'2016_08_07_151211_add_details_cms_logs',1),
	(5,'2016_08_07_152014_add_table_cms_privileges',1),
	(6,'2016_08_07_152214_add_table_cms_privileges_roles',1),
	(7,'2016_08_07_152320_add_table_cms_settings',1),
	(8,'2016_08_07_152421_add_table_cms_users',1),
	(9,'2016_08_07_154624_add_table_cms_menus_privileges',1),
	(10,'2016_08_07_154624_add_table_cms_moduls',1),
	(11,'2016_08_17_225409_add_status_cms_users',1),
	(12,'2016_08_20_125418_add_table_cms_notifications',1),
	(13,'2016_09_04_033706_add_table_cms_email_queues',1),
	(14,'2016_09_16_035347_add_group_setting',1),
	(15,'2016_09_16_045425_add_label_setting',1),
	(16,'2016_09_17_104728_create_nullable_cms_apicustom',1),
	(17,'2016_10_01_141740_add_method_type_apicustom',1),
	(18,'2016_10_01_141846_add_parameters_apicustom',1),
	(19,'2016_10_01_141934_add_responses_apicustom',1),
	(20,'2016_10_01_144826_add_table_apikey',1),
	(21,'2016_11_14_141657_create_cms_menus',1),
	(22,'2016_11_15_132350_create_cms_email_templates',1),
	(23,'2016_11_15_190410_create_cms_statistics',1),
	(24,'2016_11_17_102740_create_cms_statistic_components',1),
	(25,'2017_06_06_164501_add_deleted_at_cms_moduls',1),
	(26,'2018_10_22_204809_create_products',2),
	(29,'2018_10_22_205954_create_orders_details_table',2),
	(30,'2018_10_22_205526_create_customers_table',3),
	(31,'2018_10_22_205810_create_orders_table',4),
	(32,'2018_10_26_202708_create_kategori_cetakan',5),
	(33,'2018_10_26_215838_create_status_bayar',5),
	(35,'2018_10_26_215940_create_status_order',6);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table orders
# ------------------------------------------------------------

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `customers_id` int(10) DEFAULT NULL,
  `kategori_id` int(10) unsigned DEFAULT NULL,
  `order_number` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` double NOT NULL,
  `pajak` double NOT NULL DEFAULT '0',
  `diskon` double NOT NULL DEFAULT '0',
  `grand_total` double NOT NULL DEFAULT '0',
  `status_order` int(10) unsigned DEFAULT NULL,
  `status_bayar` int(10) unsigned DEFAULT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;

INSERT INTO `orders` (`id`, `customers_id`, `kategori_id`, `order_number`, `total`, `pajak`, `diskon`, `grand_total`, `status_order`, `status_bayar`, `keterangan`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(1,1,2,'ORD000001',180000,0,0,0,1,2,NULL,'2018-10-27 02:59:14','2018-10-28 07:43:31',NULL),
	(2,1,2,'ORD000002',7440000,0,0,0,1,3,NULL,'2018-10-28 06:45:48','2018-10-28 08:27:58',NULL),
	(3,2,2,'ORD000003',3240000,0,0,0,1,2,NULL,'2018-10-28 14:53:59','2018-11-02 17:15:49',NULL),
	(4,2,2,'ORD000004',75000,0,0,0,1,2,NULL,'2018-11-02 16:01:41','2018-11-02 17:11:44',NULL);

/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table orders_detail
# ------------------------------------------------------------

DROP TABLE IF EXISTS `orders_detail`;

CREATE TABLE `orders_detail` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `products_id` int(11) NOT NULL,
  `orders_id` int(11) NOT NULL,
  `products_price` double NOT NULL,
  `panjang` int(10) unsigned DEFAULT NULL,
  `lebar` int(10) unsigned DEFAULT NULL,
  `satuan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` double DEFAULT NULL,
  `price` double DEFAULT NULL,
  `sub_total` double NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `orders_detail` WRITE;
/*!40000 ALTER TABLE `orders_detail` DISABLE KEYS */;

INSERT INTO `orders_detail` (`id`, `products_id`, `orders_id`, `products_price`, `panjang`, `lebar`, `satuan`, `quantity`, `price`, `sub_total`, `keterangan`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(10,3,1,15000,2,3,NULL,2,NULL,180000,NULL,NULL,NULL,NULL),
	(11,1,2,60000,3,4,NULL,2,NULL,1440000,NULL,NULL,NULL,NULL),
	(12,2,2,50000,4,5,NULL,6,NULL,6000000,NULL,NULL,NULL,NULL),
	(15,5,4,15000,1,2,NULL,1,NULL,30000,NULL,NULL,NULL,NULL),
	(16,3,4,15000,1,3,NULL,1,NULL,45000,NULL,NULL,NULL,NULL),
	(17,3,3,15000,10,5,NULL,3,NULL,2250000,NULL,NULL,NULL,NULL),
	(18,5,3,15000,2,3,NULL,11,NULL,990000,NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `orders_detail` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table products
# ------------------------------------------------------------

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kategori_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;

INSERT INTO `products` (`id`, `kategori_id`, `name`, `price`, `deleted_at`, `created_at`, `updated_at`)
VALUES
	(1,1,'Foto 2x3',60000,NULL,'2018-10-26 22:45:44',NULL),
	(2,1,'Foto 3x4',50000,NULL,'2018-10-26 22:45:59',NULL),
	(3,2,'Cetak Baliho',15000,NULL,'2018-10-26 22:46:24',NULL),
	(4,2,'Cetak Foto 5R',3500,NULL,'2018-10-28 14:34:52',NULL),
	(5,2,'Cetak Spanduk',15000,NULL,'2018-10-28 14:35:17',NULL);

/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table satuan
# ------------------------------------------------------------

DROP TABLE IF EXISTS `satuan`;

CREATE TABLE `satuan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `satuan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

LOCK TABLES `satuan` WRITE;
/*!40000 ALTER TABLE `satuan` DISABLE KEYS */;

INSERT INTO `satuan` (`id`, `satuan`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(1,'Meter','2018-11-03 17:42:27',NULL,NULL),
	(2,'Lembar','2018-11-03 17:42:32',NULL,NULL),
	(3,'Lembar','2018-11-03 17:42:32','2018-11-04 01:48:05','2018-11-03 17:48:05');

/*!40000 ALTER TABLE `satuan` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table status_bayar
# ------------------------------------------------------------

DROP TABLE IF EXISTS `status_bayar`;

CREATE TABLE `status_bayar` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `status` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `status_bayar` WRITE;
/*!40000 ALTER TABLE `status_bayar` DISABLE KEYS */;

INSERT INTO `status_bayar` (`id`, `status`, `deleted_at`, `created_at`, `updated_at`)
VALUES
	(1,'Tunai','2018-10-28 06:57:30','2018-10-26 22:17:08',NULL),
	(2,'Belum Lunas',NULL,'2018-10-26 22:17:21','2018-10-28 06:57:12'),
	(3,'Lunas',NULL,'2018-10-26 22:17:49','2018-10-28 06:57:04');

/*!40000 ALTER TABLE `status_bayar` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table status_order
# ------------------------------------------------------------

DROP TABLE IF EXISTS `status_order`;

CREATE TABLE `status_order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `status` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `status_order` WRITE;
/*!40000 ALTER TABLE `status_order` DISABLE KEYS */;

INSERT INTO `status_order` (`id`, `status`, `deleted_at`, `created_at`, `updated_at`)
VALUES
	(1,'Daftar Tunggu',NULL,'2018-10-26 22:18:15',NULL),
	(2,'Sedang Diproses',NULL,'2018-10-26 22:18:23',NULL),
	(3,'Batal',NULL,'2018-10-26 22:18:39',NULL),
	(4,'Selesai',NULL,'2018-10-26 22:18:50',NULL),
	(5,'Telah Diambil',NULL,'2018-10-26 22:18:56',NULL),
	(6,'Belum Diambil',NULL,'2018-10-26 22:19:10',NULL);

/*!40000 ALTER TABLE `status_order` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
