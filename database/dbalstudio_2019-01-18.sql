# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.23)
# Database: dbalstudio
# Generation Time: 2019-01-17 18:26:56 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table als_activity_log
# ------------------------------------------------------------

DROP TABLE IF EXISTS `als_activity_log`;

CREATE TABLE `als_activity_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `log_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `subject_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` int(11) DEFAULT NULL,
  `causer_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `properties` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `activity_log_log_name_index` (`log_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table als_admin
# ------------------------------------------------------------

DROP TABLE IF EXISTS `als_admin`;

CREATE TABLE `als_admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_super` tinyint(1) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table als_bahan
# ------------------------------------------------------------

DROP TABLE IF EXISTS `als_bahan`;

CREATE TABLE `als_bahan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_bahan` varchar(255) DEFAULT NULL,
  `id_satuan` int(10) DEFAULT NULL,
  `hpp` double unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

LOCK TABLES `als_bahan` WRITE;
/*!40000 ALTER TABLE `als_bahan` DISABLE KEYS */;

INSERT INTO `als_bahan` (`id`, `nama_bahan`, `id_satuan`, `hpp`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(1,'Bahan 1',2,350000,'2018-11-06 02:34:13','2018-11-06 03:56:30',NULL);

/*!40000 ALTER TABLE `als_bahan` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table als_daftar_cetak
# ------------------------------------------------------------

DROP TABLE IF EXISTS `als_daftar_cetak`;

CREATE TABLE `als_daftar_cetak` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kode_pemesanan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_jenis_cetakan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table als_detail_transaksi
# ------------------------------------------------------------

DROP TABLE IF EXISTS `als_detail_transaksi`;

CREATE TABLE `als_detail_transaksi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kode_pemesanan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_jenis_cetakan` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table als_finishing
# ------------------------------------------------------------

DROP TABLE IF EXISTS `als_finishing`;

CREATE TABLE `als_finishing` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `jenis_finishing` varchar(255) DEFAULT NULL,
  `id_satuan` int(10) unsigned DEFAULT NULL,
  `hpp` double unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table als_foto_studio
# ------------------------------------------------------------

DROP TABLE IF EXISTS `als_foto_studio`;

CREATE TABLE `als_foto_studio` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `jenis_foto` varchar(255) DEFAULT NULL,
  `id_satuan` int(10) unsigned DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `hpp` double unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table als_gaji_karyawan
# ------------------------------------------------------------

DROP TABLE IF EXISTS `als_gaji_karyawan`;

CREATE TABLE `als_gaji_karyawan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_karyawan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table als_harga_jual_produk
# ------------------------------------------------------------

DROP TABLE IF EXISTS `als_harga_jual_produk`;

CREATE TABLE `als_harga_jual_produk` (
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
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table als_jenis_cetak
# ------------------------------------------------------------

DROP TABLE IF EXISTS `als_jenis_cetak`;

CREATE TABLE `als_jenis_cetak` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_jenis` varchar(50) DEFAULT NULL,
  `produk_id` int(11) unsigned DEFAULT NULL,
  `jenis_cetak` varchar(50) DEFAULT NULL,
  `status_cetak` int(11) unsigned DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

LOCK TABLES `als_jenis_cetak` WRITE;
/*!40000 ALTER TABLE `als_jenis_cetak` DISABLE KEYS */;

INSERT INTO `als_jenis_cetak` (`id`, `kode_jenis`, `produk_id`, `jenis_cetak`, `status_cetak`, `created_at`, `updated_at`)
VALUES
	(1,'FTO',1,'FOTO STUDIO',1,'2018-09-24 22:33:26','2018-11-06 14:35:54'),
	(2,'SPK',2,'SPANDUK',1,'2018-09-24 22:33:28',NULL),
	(3,'BLH',2,'BALIHO',1,'2018-09-24 22:33:29',NULL),
	(4,'STR',2,'STICKER',1,'2018-09-24 22:33:31',NULL),
	(5,'BNR',2,'BANNER',1,'2018-09-24 22:33:32',NULL),
	(6,'PSR',2,'POSTER',1,'2018-09-24 22:33:34',NULL);

/*!40000 ALTER TABLE `als_jenis_cetak` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table als_jenis_cetakan
# ------------------------------------------------------------

DROP TABLE IF EXISTS `als_jenis_cetakan`;

CREATE TABLE `als_jenis_cetakan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kode_jenis_cetak` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_ref_cetak` int(11) NOT NULL,
  `id_ref_ukuran` int(11) NOT NULL,
  `harga` double NOT NULL,
  `id_jenis_satuan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `als_jenis_cetakan` WRITE;
/*!40000 ALTER TABLE `als_jenis_cetakan` DISABLE KEYS */;

INSERT INTO `als_jenis_cetakan` (`id`, `kode_jenis_cetak`, `id_ref_cetak`, `id_ref_ukuran`, `harga`, `id_jenis_satuan`, `created_at`, `updated_at`)
VALUES
	(1,'CTK-061018000001',1,1,5000,1,'2018-10-05 21:32:10','2018-10-05 21:32:10'),
	(2,'CTK-061018000002',1,2,7000,5,'2018-10-05 21:35:39','2018-10-05 21:35:39'),
	(3,'FTO-061018000001',1,1,5000,3,'2018-10-06 04:10:31','2018-10-06 04:10:31');

/*!40000 ALTER TABLE `als_jenis_cetakan` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table als_jenis_display
# ------------------------------------------------------------

DROP TABLE IF EXISTS `als_jenis_display`;

CREATE TABLE `als_jenis_display` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_display` int(10) unsigned DEFAULT NULL,
  `jenis_display` varchar(255) DEFAULT NULL,
  `hpp` double unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table als_jenis_paket
# ------------------------------------------------------------

DROP TABLE IF EXISTS `als_jenis_paket`;

CREATE TABLE `als_jenis_paket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orderid` varchar(30) DEFAULT NULL,
  `id_jenis_cetak` int(11) DEFAULT NULL,
  `nama_paket` varchar(50) DEFAULT NULL,
  `ukuran` varchar(30) DEFAULT NULL,
  `harga_jual` double DEFAULT NULL,
  `deskripsi` text,
  `status` tinyint(1) unsigned DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

LOCK TABLES `als_jenis_paket` WRITE;
/*!40000 ALTER TABLE `als_jenis_paket` DISABLE KEYS */;

INSERT INTO `als_jenis_paket` (`id`, `orderid`, `id_jenis_cetak`, `nama_paket`, `ukuran`, `harga_jual`, `deskripsi`, `status`, `created_at`, `updated_at`)
VALUES
	(1,'FTO000001',1,'2x3','2x3 cm',5000,NULL,1,'2018-09-24 14:46:13','2018-10-21 11:06:13'),
	(2,'FTO000002',1,'3x4','3x4 cm',7000,NULL,1,'2018-09-24 14:46:27','2018-10-21 11:06:27'),
	(3,'FTO000003',1,'4x6','4x6 cm',8000,NULL,1,'2018-09-24 14:46:38','2018-10-21 11:06:55'),
	(4,NULL,2,'Normal','1',15000,'Cetak Spanduk Normal',1,'2018-11-18 20:39:48','2018-11-18 20:39:48'),
	(5,NULL,3,'Normal','4',20000,'Cetak Baliho Normal',1,'2018-11-18 20:40:35','2018-11-18 20:40:35'),
	(6,NULL,4,'Normal','1',10000,'Cetak Sticker Normal',1,'2018-11-18 20:40:55','2018-11-18 20:40:55'),
	(7,NULL,5,'Normal','1',15000,'Cetak Banner Normal',1,'2018-11-18 20:41:12','2018-11-18 20:41:12');

/*!40000 ALTER TABLE `als_jenis_paket` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table als_jenis_potong
# ------------------------------------------------------------

DROP TABLE IF EXISTS `als_jenis_potong`;

CREATE TABLE `als_jenis_potong` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_potong` int(10) unsigned DEFAULT NULL,
  `jenis_potong` varchar(255) DEFAULT NULL,
  `id_satuan` int(10) DEFAULT NULL,
  `hpp` double unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table als_jenis_satuan
# ------------------------------------------------------------

DROP TABLE IF EXISTS `als_jenis_satuan`;

CREATE TABLE `als_jenis_satuan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kode` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `satuan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `als_jenis_satuan` WRITE;
/*!40000 ALTER TABLE `als_jenis_satuan` DISABLE KEYS */;

INSERT INTO `als_jenis_satuan` (`id`, `kode`, `satuan`, `created_at`, `updated_at`)
VALUES
	(1,'Mtr','Meter','2018-09-21 05:24:24',NULL),
	(2,'Cm','Centimeter','2018-09-21 05:24:25',NULL),
	(6,'Pkt','Paket','2018-09-24 13:35:12','2018-09-24 13:35:12');

/*!40000 ALTER TABLE `als_jenis_satuan` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table als_jenis_ukuran
# ------------------------------------------------------------

DROP TABLE IF EXISTS `als_jenis_ukuran`;

CREATE TABLE `als_jenis_ukuran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produk_id` int(11) DEFAULT NULL,
  `ukuran` varchar(50) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `deskripsi` text,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

LOCK TABLES `als_jenis_ukuran` WRITE;
/*!40000 ALTER TABLE `als_jenis_ukuran` DISABLE KEYS */;

INSERT INTO `als_jenis_ukuran` (`id`, `produk_id`, `ukuran`, `harga`, `deskripsi`, `created_at`, `updated_at`)
VALUES
	(1,1,'2x3',5000,NULL,'2018-09-24 14:46:13','2018-10-05 20:39:57'),
	(2,1,'3x4',7000,NULL,'2018-09-24 14:46:27','2018-10-05 20:40:05'),
	(3,1,'4x6',8000,NULL,'2018-09-24 14:46:38','2018-10-05 20:40:11');

/*!40000 ALTER TABLE `als_jenis_ukuran` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table als_karyawan
# ------------------------------------------------------------

DROP TABLE IF EXISTS `als_karyawan`;

CREATE TABLE `als_karyawan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_karyawan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gaji_pokok` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table als_kategori_cetak
# ------------------------------------------------------------

DROP TABLE IF EXISTS `als_kategori_cetak`;

CREATE TABLE `als_kategori_cetak` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kategori` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `als_kategori_cetak` WRITE;
/*!40000 ALTER TABLE `als_kategori_cetak` DISABLE KEYS */;

INSERT INTO `als_kategori_cetak` (`id`, `kategori`, `deleted_at`, `created_at`, `updated_at`)
VALUES
	(1,'Foto Studio',NULL,'2018-10-26 22:40:25',NULL),
	(2,'Digital Printing',NULL,'2018-10-26 22:40:32',NULL);

/*!40000 ALTER TABLE `als_kategori_cetak` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table als_kwitansi
# ------------------------------------------------------------

DROP TABLE IF EXISTS `als_kwitansi`;

CREATE TABLE `als_kwitansi` (
  `kode_kwitansi` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_nota` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_bayar` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table als_large_format
# ------------------------------------------------------------

DROP TABLE IF EXISTS `als_large_format`;

CREATE TABLE `als_large_format` (
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
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table als_level_pengguna
# ------------------------------------------------------------

DROP TABLE IF EXISTS `als_level_pengguna`;

CREATE TABLE `als_level_pengguna` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

LOCK TABLES `als_level_pengguna` WRITE;
/*!40000 ALTER TABLE `als_level_pengguna` DISABLE KEYS */;

INSERT INTO `als_level_pengguna` (`id`, `level`)
VALUES
	(1,'Admin'),
	(2,'Kasir'),
	(3,'Produksi'),
	(4,'Owner');

/*!40000 ALTER TABLE `als_level_pengguna` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table als_mesin
# ------------------------------------------------------------

DROP TABLE IF EXISTS `als_mesin`;

CREATE TABLE `als_mesin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_mesin` varchar(255) DEFAULT NULL,
  `tipe_mesin` varchar(255) DEFAULT NULL,
  `hpp` double unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

LOCK TABLES `als_mesin` WRITE;
/*!40000 ALTER TABLE `als_mesin` DISABLE KEYS */;

INSERT INTO `als_mesin` (`id`, `nama_mesin`, `tipe_mesin`, `hpp`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(1,'Mesin 1','Tipe 1',35000,'2018-11-06 04:11:50','2018-11-06 11:34:39',NULL);

/*!40000 ALTER TABLE `als_mesin` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table als_migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `als_migrations`;

CREATE TABLE `als_migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `als_migrations` WRITE;
/*!40000 ALTER TABLE `als_migrations` DISABLE KEYS */;

INSERT INTO `als_migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2014_10_12_000000_create_users_table',1),
	(2,'2014_10_12_100000_create_password_resets_table',1),
	(3,'2018_09_20_193100_create_transaksis_table',1),
	(4,'2018_09_20_193233_create_satuans_table',1),
	(5,'2018_09_20_193246_create_jenis_cetakans_table',1),
	(6,'2018_09_20_193313_create_pelanggans_table',1),
	(7,'2018_09_20_195823_create_daftar_cetaks_table',1),
	(8,'2018_09_20_200145_create_detail_transaksis_table',1),
	(9,'2018_09_20_200629_create_kwitansis_table',1),
	(10,'2018_09_20_200815_create_karyawans_table',1),
	(11,'2018_09_20_201100_create_gaji_karyawans_table',1),
	(12,'2018_09_20_201242_create_pembayarans_table',1),
	(13,'2018_09_20_201631_create_pengaturans_table',1),
	(14,'2018_09_20_211320_create_stoks_table',1),
	(15,'2018_10_03_210143_create_activity_log_table',1);

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
	(3,'App\\User',3),
	(4,'App\\User',4),
	(5,'App\\User',5),
	(6,'App\\User',6);

/*!40000 ALTER TABLE `als_model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table als_order_detail
# ------------------------------------------------------------

DROP TABLE IF EXISTS `als_order_detail`;

CREATE TABLE `als_order_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orderid` varchar(30) NOT NULL DEFAULT '',
  `qty` int(11) DEFAULT NULL,
  `subtotal` double unsigned DEFAULT '0',
  `panjang` int(11) unsigned DEFAULT NULL,
  `lebar` int(11) unsigned DEFAULT NULL,
  `satuan` varchar(50) DEFAULT NULL,
  `harga_jual` double unsigned DEFAULT NULL,
  `status_bayar` int(11) unsigned DEFAULT '1',
  `status_order` int(11) unsigned DEFAULT '1',
  `promo` varchar(150) DEFAULT NULL,
  `tgl_ambil` datetime DEFAULT NULL,
  `keterangan` text,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

LOCK TABLES `als_order_detail` WRITE;
/*!40000 ALTER TABLE `als_order_detail` DISABLE KEYS */;

INSERT INTO `als_order_detail` (`id`, `orderid`, `qty`, `subtotal`, `panjang`, `lebar`, `satuan`, `harga_jual`, `status_bayar`, `status_order`, `promo`, `tgl_ambil`, `keterangan`, `created_at`, `updated_at`)
VALUES
	(1,'ORD000001',3,8000,2,3,'cm',NULL,2,1,'1','2018-10-22 00:00:00','sdfsdfsdf','2018-10-22 15:47:00','2018-10-22 15:47:00'),
	(2,'ORD000001',7,7000,3,4,'cm',NULL,1,1,'1','2018-10-23 00:00:00','gghgg','2018-10-22 15:58:21','2018-10-22 15:58:21'),
	(3,'ORD000001',4,7000,3,4,'cm',NULL,1,2,'1','2018-10-22 00:00:00','ssdfsdf','2018-10-22 16:04:10','2018-10-22 16:04:10'),
	(4,'ORD000002',2,0,3,1,'Meter',8000,1,1,'1','2018-10-23 00:00:00','www','2018-11-18 20:35:51','2018-11-18 20:35:51'),
	(5,'ORD000003',3,0,3,1,'Meter',20000,1,1,'1','2018-10-22 00:00:00',NULL,'2018-11-23 19:40:58','2018-11-23 19:40:58'),
	(6,'ORD000004',3,0,2,4,'Meter',15000,1,1,'1','2018-11-22 00:00:00',NULL,'2018-11-28 21:12:46','2018-11-28 21:12:46');

/*!40000 ALTER TABLE `als_order_detail` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table als_orders
# ------------------------------------------------------------

DROP TABLE IF EXISTS `als_orders`;

CREATE TABLE `als_orders` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `orderid` varchar(30) NOT NULL,
  `cetakid` int(11) unsigned NOT NULL DEFAULT '1',
  `pelangganid` int(11) unsigned NOT NULL DEFAULT '1',
  `jenispaketid` int(11) unsigned NOT NULL DEFAULT '1',
  `promoid` int(11) unsigned DEFAULT NULL,
  `bahanid` int(11) unsigned DEFAULT '1',
  `mesinid` int(11) unsigned DEFAULT '1',
  `finishingid` int(11) unsigned DEFAULT '1',
  `status_bayar` int(11) unsigned DEFAULT '1',
  `status_order` int(11) unsigned DEFAULT '1',
  `total_order` int(11) unsigned DEFAULT '0',
  `total_harga` double unsigned DEFAULT '0',
  `pajak` double DEFAULT NULL,
  `diskon` double DEFAULT NULL,
  `keterangan` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `idx_orderid` (`orderid`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

LOCK TABLES `als_orders` WRITE;
/*!40000 ALTER TABLE `als_orders` DISABLE KEYS */;

INSERT INTO `als_orders` (`id`, `orderid`, `cetakid`, `pelangganid`, `jenispaketid`, `promoid`, `bahanid`, `mesinid`, `finishingid`, `status_bayar`, `status_order`, `total_order`, `total_harga`, `pajak`, `diskon`, `keterangan`, `created_at`, `updated_at`)
VALUES
	(1,'ORD000001',1,1,1,1,1,NULL,1,1,1,0,24000,NULL,NULL,NULL,'2018-10-22 15:47:00','2018-12-08 03:06:40'),
	(2,'ORD000002',1,1,1,1,1,NULL,1,1,1,0,16000,NULL,NULL,NULL,'2018-11-18 20:29:34','2018-11-18 20:29:34'),
	(3,'ORD000003',3,1,5,1,1,NULL,1,1,1,0,60000,NULL,NULL,NULL,'2018-11-23 19:40:58','2018-11-23 19:40:58'),
	(4,'ORD000004',2,1,4,1,1,NULL,1,1,1,0,45000,NULL,NULL,NULL,'2018-11-28 21:12:46','2018-11-28 21:12:46');

/*!40000 ALTER TABLE `als_orders` ENABLE KEYS */;
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



# Dump of table als_pelanggan
# ------------------------------------------------------------

DROP TABLE IF EXISTS `als_pelanggan`;

CREATE TABLE `als_pelanggan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `promoid` int(10) unsigned DEFAULT NULL,
  `namapel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notelp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `tgl_ambil` datetime DEFAULT NULL,
  `jenis_pelanggan` int(11) unsigned DEFAULT '1',
  `status_bayar` int(11) unsigned DEFAULT '1',
  `status` tinyint(1) unsigned DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `als_pelanggan` WRITE;
/*!40000 ALTER TABLE `als_pelanggan` DISABLE KEYS */;

INSERT INTO `als_pelanggan` (`id`, `promoid`, `namapel`, `notelp`, `alamat`, `tgl_ambil`, `jenis_pelanggan`, `status_bayar`, `status`, `created_at`, `updated_at`)
VALUES
	(1,1,'Hansen','08114199010','LEBBAE',NULL,1,1,1,'2018-10-21 13:55:51','2018-10-21 13:55:51');

/*!40000 ALTER TABLE `als_pelanggan` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table als_pembayaran
# ------------------------------------------------------------

DROP TABLE IF EXISTS `als_pembayaran`;

CREATE TABLE `als_pembayaran` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kode_pembayaran` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_pemesanan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_bayar` datetime NOT NULL,
  `bayar` double NOT NULL,
  `statusbyr_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table als_pengaturan
# ------------------------------------------------------------

DROP TABLE IF EXISTS `als_pengaturan`;

CREATE TABLE `als_pengaturan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipe` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_setting` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
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
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `als_users_email_unique` (`email`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `als_pengguna` WRITE;
/*!40000 ALTER TABLE `als_pengguna` DISABLE KEYS */;

INSERT INTO `als_pengguna` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'Hansen Makangiras','hansen','superadmin@alstudio.com','2018-10-20 14:45:19','$2y$10$rZ/gEBdMx3Xa8opl9MuRGuOAap/w5dGIiMMIU06jvIVpiimYGhKzi','XkC27b8kxx7COLaPG8jx1kEJIiPHJIxPTC9hPR8805ARNXb18okE0C0nQYYY','2018-10-20 14:45:19','2018-10-20 15:22:56'),
	(2,'Admin','admin','admin@alstudio.com','2018-10-20 14:45:19','$2y$10$fKoAt9BspPtBdV8qaHjUOe.9osDq8bMDjSHPkg0IdZtT1TOnUzZO.','Z8kyasj3bN','2018-10-20 14:45:19','2018-10-20 15:23:28'),
	(3,'Kasir','kasir','kasir@alstudio.com','2018-10-20 14:45:19','$2y$10$i7WV8F8B8qrqeoyCLRcmd.JFXG9NTep5Qn3azBV0GSUH1H1Ivz/d6','MY77iPqOnG','2018-10-20 14:45:19','2018-10-20 15:23:54'),
	(4,'Pencetakan','produksi','produksi@alstudio.com',NULL,'$2y$10$FPfB7SINYlDe/z01xY1g.u00yJqS3d1xsP1Z3emrgWHiWnzidxnoK',NULL,'2018-10-21 05:04:59','2018-10-29 19:02:23'),
	(5,'Foto Studio','foto','foto@alstudio.com',NULL,'$2y$10$BAAxAi1gkKpZKkTxhijkw.d.nJxFiozv5clShkzHgFBCxgh3iEsDC',NULL,'2018-10-21 05:05:58','2018-10-21 05:05:58'),
	(6,'Resepsionis','resepsionis','resepsionis@alstudio.com',NULL,'$2y$10$ITiSHdOR5WozmdePeO9JqeAOaMxyXIbAO0upxhwB92GLQQ/5XXaiW',NULL,'2018-10-29 18:59:21','2018-10-29 18:59:21');

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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
	(14,'manageOrder','web','2018-10-20 15:32:17','2018-10-20 15:32:17'),
	(15,'manageFoto','web','2018-10-21 05:03:53','2018-10-21 05:03:53'),
	(16,'managePembayaran','web','2018-10-29 19:00:06','2018-10-29 19:00:06');

/*!40000 ALTER TABLE `als_permissions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table als_produk
# ------------------------------------------------------------

DROP TABLE IF EXISTS `als_produk`;

CREATE TABLE `als_produk` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `jenis_cetak_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `als_produk` WRITE;
/*!40000 ALTER TABLE `als_produk` DISABLE KEYS */;

INSERT INTO `als_produk` (`id`, `jenis_cetak_id`, `name`, `price`, `deleted_at`, `created_at`, `updated_at`)
VALUES
	(1,1,'Foto 2x3',60000,NULL,'2018-10-26 22:45:44',NULL),
	(2,1,'Foto 3x4',50000,NULL,'2018-10-26 22:45:59',NULL),
	(3,2,'Cetak Baliho',15000,NULL,'2018-10-26 22:46:24',NULL),
	(4,2,'Cetak Foto 5R',3500,NULL,'2018-10-28 14:34:52',NULL),
	(5,2,'Cetak Spanduk',15000,NULL,'2018-10-28 14:35:17',NULL);

/*!40000 ALTER TABLE `als_produk` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table als_promo
# ------------------------------------------------------------

DROP TABLE IF EXISTS `als_promo`;

CREATE TABLE `als_promo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kode` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `namapromo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expire_date` datetime DEFAULT NULL,
  `tipe_pelanggan` int(10) unsigned DEFAULT '1',
  `status` tinyint(1) unsigned DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `als_promo` WRITE;
/*!40000 ALTER TABLE `als_promo` DISABLE KEYS */;

INSERT INTO `als_promo` (`id`, `kode`, `namapromo`, `deskripsi`, `expire_date`, `tipe_pelanggan`, `status`, `created_at`, `updated_at`)
VALUES
	(1,'RIOoV7','Promo Umum','Potongan 2 % All item','2018-10-21 00:00:00',1,1,'2018-10-21 13:10:00','2018-10-21 13:10:00');

/*!40000 ALTER TABLE `als_promo` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table als_ref_cetak
# ------------------------------------------------------------

DROP TABLE IF EXISTS `als_ref_cetak`;

CREATE TABLE `als_ref_cetak` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode` varchar(50) DEFAULT NULL,
  `namacetak` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

LOCK TABLES `als_ref_cetak` WRITE;
/*!40000 ALTER TABLE `als_ref_cetak` DISABLE KEYS */;

INSERT INTO `als_ref_cetak` (`id`, `kode`, `namacetak`, `created_at`, `update_at`)
VALUES
	(1,'FTO','FOTO','2018-09-24 22:33:26',NULL),
	(2,'SPK','SPANDUK','2018-09-24 22:33:28',NULL),
	(3,'BLH','BALIHO','2018-09-24 22:33:29',NULL),
	(4,'STR','STICKER','2018-09-24 22:33:31',NULL),
	(5,'BNR','BANNER','2018-09-24 22:33:32',NULL),
	(6,'PSR','POSTER','2018-09-24 22:33:34',NULL);

/*!40000 ALTER TABLE `als_ref_cetak` ENABLE KEYS */;
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
	(15,1),
	(1,2),
	(6,2),
	(11,2),
	(12,2),
	(13,2),
	(14,2),
	(15,2),
	(14,3),
	(16,3),
	(12,4),
	(14,5),
	(15,5),
	(12,6),
	(14,6);

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `als_roles` WRITE;
/*!40000 ALTER TABLE `als_roles` DISABLE KEYS */;

INSERT INTO `als_roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`)
VALUES
	(1,'Superadmin','web','2018-10-20 14:45:19','2018-10-20 14:45:19'),
	(2,'Admin','web','2018-10-20 14:45:19','2018-10-20 14:45:19'),
	(3,'Kasir','web','2018-10-20 14:45:19','2018-10-20 14:45:19'),
	(4,'Cetak','web','2018-10-21 05:02:43','2018-10-21 05:03:27'),
	(5,'Foto','web','2018-10-21 05:03:17','2018-10-21 05:03:17'),
	(6,'Resepsionis','web','2018-10-29 18:59:39','2018-10-29 18:59:39');

/*!40000 ALTER TABLE `als_roles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table als_satuan
# ------------------------------------------------------------

DROP TABLE IF EXISTS `als_satuan`;

CREATE TABLE `als_satuan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `satuan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

LOCK TABLES `als_satuan` WRITE;
/*!40000 ALTER TABLE `als_satuan` DISABLE KEYS */;

INSERT INTO `als_satuan` (`id`, `satuan`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(1,'Lembar','2018-11-06 02:33:40','2018-11-06 02:33:40',NULL),
	(2,'Meter','2018-11-06 02:33:51','2018-11-06 02:33:51',NULL);

/*!40000 ALTER TABLE `als_satuan` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table als_status_bayar
# ------------------------------------------------------------

DROP TABLE IF EXISTS `als_status_bayar`;

CREATE TABLE `als_status_bayar` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `statusbyr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `als_status_bayar` WRITE;
/*!40000 ALTER TABLE `als_status_bayar` DISABLE KEYS */;

INSERT INTO `als_status_bayar` (`id`, `statusbyr`, `created_at`, `updated_at`)
VALUES
	(1,'Tunai',NULL,NULL),
	(2,'DP',NULL,NULL),
	(3,'Kredit',NULL,NULL),
	(4,'Transfer',NULL,NULL);

/*!40000 ALTER TABLE `als_status_bayar` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table als_status_cetak
# ------------------------------------------------------------

DROP TABLE IF EXISTS `als_status_cetak`;

CREATE TABLE `als_status_cetak` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `statuscetak` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `als_status_cetak` WRITE;
/*!40000 ALTER TABLE `als_status_cetak` DISABLE KEYS */;

INSERT INTO `als_status_cetak` (`id`, `statuscetak`, `created_at`, `updated_at`)
VALUES
	(1,'Daftar Tunggu',NULL,NULL),
	(2,'Sedang Proses',NULL,NULL),
	(3,'Selesai',NULL,NULL),
	(4,'Sudah Diambil',NULL,NULL);

/*!40000 ALTER TABLE `als_status_cetak` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table als_status_order
# ------------------------------------------------------------

DROP TABLE IF EXISTS `als_status_order`;

CREATE TABLE `als_status_order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `status_order` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `als_status_order` WRITE;
/*!40000 ALTER TABLE `als_status_order` DISABLE KEYS */;

INSERT INTO `als_status_order` (`id`, `status_order`, `created_at`, `updated_at`)
VALUES
	(1,'Daftar Tunggu','2018-10-21 14:54:08',NULL),
	(2,'Sedang Proses','2018-10-21 14:54:10',NULL),
	(3,'Selesai','2018-10-21 14:54:13',NULL),
	(4,'Sudah Diambil','2018-10-21 14:54:16',NULL);

/*!40000 ALTER TABLE `als_status_order` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table als_status_pelanggan
# ------------------------------------------------------------

DROP TABLE IF EXISTS `als_status_pelanggan`;

CREATE TABLE `als_status_pelanggan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `status_pelanggan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `als_status_pelanggan` WRITE;
/*!40000 ALTER TABLE `als_status_pelanggan` DISABLE KEYS */;

INSERT INTO `als_status_pelanggan` (`id`, `status_pelanggan`, `created_at`, `updated_at`)
VALUES
	(1,'Inactive','2018-10-21 14:08:15',NULL),
	(2,'Active','2018-10-21 14:08:21',NULL);

/*!40000 ALTER TABLE `als_status_pelanggan` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table als_tipe_pelanggan
# ------------------------------------------------------------

DROP TABLE IF EXISTS `als_tipe_pelanggan`;

CREATE TABLE `als_tipe_pelanggan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipe` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `als_tipe_pelanggan` WRITE;
/*!40000 ALTER TABLE `als_tipe_pelanggan` DISABLE KEYS */;

INSERT INTO `als_tipe_pelanggan` (`id`, `tipe`, `created_at`, `updated_at`)
VALUES
	(1,'Umum',NULL,NULL),
	(2,'Private',NULL,NULL),
	(3,'VIP',NULL,NULL);

/*!40000 ALTER TABLE `als_tipe_pelanggan` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table als_transaksi
# ------------------------------------------------------------

DROP TABLE IF EXISTS `als_transaksi`;

CREATE TABLE `als_transaksi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kode_pemesanan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_pelanggan` int(10) unsigned NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `tgl_selesai` datetime NOT NULL,
  `jumlah_harga` double NOT NULL,
  `uang_muka` double NOT NULL,
  `status_pembayaran` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



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



# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2014_10_12_000000_create_users_table',1),
	(2,'2014_10_12_100000_create_password_resets_table',1),
	(3,'2018_09_20_193100_create_transaksis_table',1),
	(4,'2018_09_20_193233_create_satuans_table',1),
	(5,'2018_09_20_193246_create_jenis_cetakans_table',1),
	(6,'2018_09_20_193313_create_pelanggans_table',1),
	(7,'2018_09_20_195823_create_daftar_cetaks_table',1),
	(8,'2018_09_20_200145_create_detail_transaksis_table',1),
	(9,'2018_09_20_200629_create_kwitansis_table',1),
	(10,'2018_09_20_200815_create_karyawans_table',1),
	(11,'2018_09_20_201100_create_gaji_karyawans_table',1),
	(12,'2018_09_20_201242_create_pembayarans_table',1),
	(13,'2018_09_20_201631_create_pengaturans_table',1);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
