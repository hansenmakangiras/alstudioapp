/*
 Navicat Premium Data Transfer

 Source Server         : mamp
 Source Server Type    : MySQL
 Source Server Version : 50723
 Source Host           : localhost:3306
 Source Schema         : dbalstudio

 Target Server Type    : MySQL
 Target Server Version : 50723
 File Encoding         : 65001

 Date: 08/11/2018 04:57:09
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for als_activity_log
-- ----------------------------
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

-- ----------------------------
-- Table structure for als_admin
-- ----------------------------
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

-- ----------------------------
-- Table structure for als_bahan
-- ----------------------------
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

-- ----------------------------
-- Records of als_bahan
-- ----------------------------
BEGIN;
INSERT INTO `als_bahan` VALUES (1, 'Bahan 1', 2, 350000, '2018-11-06 02:34:13', '2018-11-06 03:56:30', NULL);
COMMIT;

-- ----------------------------
-- Table structure for als_daftar_cetak
-- ----------------------------
DROP TABLE IF EXISTS `als_daftar_cetak`;
CREATE TABLE `als_daftar_cetak` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kode_pemesanan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_jenis_cetakan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for als_detail_transaksi
-- ----------------------------
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

-- ----------------------------
-- Table structure for als_finishing
-- ----------------------------
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

-- ----------------------------
-- Table structure for als_foto_studio
-- ----------------------------
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

-- ----------------------------
-- Table structure for als_gaji_karyawan
-- ----------------------------
DROP TABLE IF EXISTS `als_gaji_karyawan`;
CREATE TABLE `als_gaji_karyawan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_karyawan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for als_harga_jual_produk
-- ----------------------------
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

-- ----------------------------
-- Table structure for als_jenis_cetak
-- ----------------------------
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

-- ----------------------------
-- Records of als_jenis_cetak
-- ----------------------------
BEGIN;
INSERT INTO `als_jenis_cetak` VALUES (1, 'FTO', 1, 'FOTO STUDIO', 1, '2018-09-24 22:33:26', '2018-11-06 14:35:54');
INSERT INTO `als_jenis_cetak` VALUES (2, 'SPK', 2, 'SPANDUK', 1, '2018-09-24 22:33:28', NULL);
INSERT INTO `als_jenis_cetak` VALUES (3, 'BLH', 2, 'BALIHO', 1, '2018-09-24 22:33:29', NULL);
INSERT INTO `als_jenis_cetak` VALUES (4, 'STR', 2, 'STICKER', 1, '2018-09-24 22:33:31', NULL);
INSERT INTO `als_jenis_cetak` VALUES (5, 'BNR', 2, 'BANNER', 1, '2018-09-24 22:33:32', NULL);
INSERT INTO `als_jenis_cetak` VALUES (6, 'PSR', 2, 'POSTER', 1, '2018-09-24 22:33:34', NULL);
COMMIT;

-- ----------------------------
-- Table structure for als_jenis_cetakan
-- ----------------------------
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

-- ----------------------------
-- Records of als_jenis_cetakan
-- ----------------------------
BEGIN;
INSERT INTO `als_jenis_cetakan` VALUES (1, 'CTK-061018000001', 1, 1, 5000, 1, '2018-10-05 21:32:10', '2018-10-05 21:32:10');
INSERT INTO `als_jenis_cetakan` VALUES (2, 'CTK-061018000002', 1, 2, 7000, 5, '2018-10-05 21:35:39', '2018-10-05 21:35:39');
INSERT INTO `als_jenis_cetakan` VALUES (3, 'FTO-061018000001', 1, 1, 5000, 3, '2018-10-06 04:10:31', '2018-10-06 04:10:31');
COMMIT;

-- ----------------------------
-- Table structure for als_jenis_display
-- ----------------------------
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

-- ----------------------------
-- Table structure for als_jenis_paket
-- ----------------------------
DROP TABLE IF EXISTS `als_jenis_paket`;
CREATE TABLE `als_jenis_paket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orderid` varchar(30) DEFAULT NULL,
  `id_jenis_cetak` int(11) DEFAULT NULL,
  `nama_paket` varchar(50) DEFAULT NULL,
  `ukuran` varchar(30) DEFAULT NULL,
  `harga_jual` double DEFAULT NULL,
  `deskripsi` text,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of als_jenis_paket
-- ----------------------------
BEGIN;
INSERT INTO `als_jenis_paket` VALUES (1, 'FTO000001', 1, '2x3', '2x3 cm', 5000, NULL, '2018-09-24 14:46:13', '2018-10-21 11:06:13');
INSERT INTO `als_jenis_paket` VALUES (2, 'FTO000002', 1, '3x4', '3x4 cm', 7000, NULL, '2018-09-24 14:46:27', '2018-10-21 11:06:27');
INSERT INTO `als_jenis_paket` VALUES (3, 'FTO000003', 1, '4x6', '4x6 cm', 8000, NULL, '2018-09-24 14:46:38', '2018-10-21 11:06:55');
COMMIT;

-- ----------------------------
-- Table structure for als_jenis_potong
-- ----------------------------
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

-- ----------------------------
-- Table structure for als_jenis_satuan
-- ----------------------------
DROP TABLE IF EXISTS `als_jenis_satuan`;
CREATE TABLE `als_jenis_satuan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kode` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `satuan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of als_jenis_satuan
-- ----------------------------
BEGIN;
INSERT INTO `als_jenis_satuan` VALUES (1, 'Mtr', 'Meter', '2018-09-21 05:24:24', NULL);
INSERT INTO `als_jenis_satuan` VALUES (2, 'Cm', 'Centimeter', '2018-09-21 05:24:25', NULL);
INSERT INTO `als_jenis_satuan` VALUES (6, 'Pkt', 'Paket', '2018-09-24 13:35:12', '2018-09-24 13:35:12');
COMMIT;

-- ----------------------------
-- Table structure for als_jenis_ukuran
-- ----------------------------
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

-- ----------------------------
-- Records of als_jenis_ukuran
-- ----------------------------
BEGIN;
INSERT INTO `als_jenis_ukuran` VALUES (1, 1, '2x3', 5000, NULL, '2018-09-24 14:46:13', '2018-10-05 20:39:57');
INSERT INTO `als_jenis_ukuran` VALUES (2, 1, '3x4', 7000, NULL, '2018-09-24 14:46:27', '2018-10-05 20:40:05');
INSERT INTO `als_jenis_ukuran` VALUES (3, 1, '4x6', 8000, NULL, '2018-09-24 14:46:38', '2018-10-05 20:40:11');
COMMIT;

-- ----------------------------
-- Table structure for als_karyawan
-- ----------------------------
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

-- ----------------------------
-- Table structure for als_kategori_cetak
-- ----------------------------
DROP TABLE IF EXISTS `als_kategori_cetak`;
CREATE TABLE `als_kategori_cetak` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kategori` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of als_kategori_cetak
-- ----------------------------
BEGIN;
INSERT INTO `als_kategori_cetak` VALUES (1, 'Foto Studio', NULL, '2018-10-26 22:40:25', NULL);
INSERT INTO `als_kategori_cetak` VALUES (2, 'Digital Printing', NULL, '2018-10-26 22:40:32', NULL);
COMMIT;

-- ----------------------------
-- Table structure for als_kwitansi
-- ----------------------------
DROP TABLE IF EXISTS `als_kwitansi`;
CREATE TABLE `als_kwitansi` (
  `kode_kwitansi` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_nota` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_bayar` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for als_large_format
-- ----------------------------
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

-- ----------------------------
-- Table structure for als_level_pengguna
-- ----------------------------
DROP TABLE IF EXISTS `als_level_pengguna`;
CREATE TABLE `als_level_pengguna` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of als_level_pengguna
-- ----------------------------
BEGIN;
INSERT INTO `als_level_pengguna` VALUES (1, 'Admin');
INSERT INTO `als_level_pengguna` VALUES (2, 'Kasir');
INSERT INTO `als_level_pengguna` VALUES (3, 'Produksi');
INSERT INTO `als_level_pengguna` VALUES (4, 'Owner');
COMMIT;

-- ----------------------------
-- Table structure for als_mesin
-- ----------------------------
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

-- ----------------------------
-- Records of als_mesin
-- ----------------------------
BEGIN;
INSERT INTO `als_mesin` VALUES (1, 'Mesin 1', 'Tipe 1', 35000, '2018-11-06 04:11:50', '2018-11-06 11:34:39', NULL);
COMMIT;

-- ----------------------------
-- Table structure for als_migrations
-- ----------------------------
DROP TABLE IF EXISTS `als_migrations`;
CREATE TABLE `als_migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of als_migrations
-- ----------------------------
BEGIN;
INSERT INTO `als_migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `als_migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `als_migrations` VALUES (3, '2018_09_20_193100_create_transaksis_table', 1);
INSERT INTO `als_migrations` VALUES (4, '2018_09_20_193233_create_satuans_table', 1);
INSERT INTO `als_migrations` VALUES (5, '2018_09_20_193246_create_jenis_cetakans_table', 1);
INSERT INTO `als_migrations` VALUES (6, '2018_09_20_193313_create_pelanggans_table', 1);
INSERT INTO `als_migrations` VALUES (7, '2018_09_20_195823_create_daftar_cetaks_table', 1);
INSERT INTO `als_migrations` VALUES (8, '2018_09_20_200145_create_detail_transaksis_table', 1);
INSERT INTO `als_migrations` VALUES (9, '2018_09_20_200629_create_kwitansis_table', 1);
INSERT INTO `als_migrations` VALUES (10, '2018_09_20_200815_create_karyawans_table', 1);
INSERT INTO `als_migrations` VALUES (11, '2018_09_20_201100_create_gaji_karyawans_table', 1);
INSERT INTO `als_migrations` VALUES (12, '2018_09_20_201242_create_pembayarans_table', 1);
INSERT INTO `als_migrations` VALUES (13, '2018_09_20_201631_create_pengaturans_table', 1);
INSERT INTO `als_migrations` VALUES (14, '2018_09_20_211320_create_stoks_table', 1);
INSERT INTO `als_migrations` VALUES (15, '2018_10_03_210143_create_activity_log_table', 1);
COMMIT;

-- ----------------------------
-- Table structure for als_model_has_permissions
-- ----------------------------
DROP TABLE IF EXISTS `als_model_has_permissions`;
CREATE TABLE `als_model_has_permissions` (
  `permission_id` int(10) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `als_model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `als_model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `als_permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for als_model_has_roles
-- ----------------------------
DROP TABLE IF EXISTS `als_model_has_roles`;
CREATE TABLE `als_model_has_roles` (
  `role_id` int(10) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `als_model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `als_model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `als_roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of als_model_has_roles
-- ----------------------------
BEGIN;
INSERT INTO `als_model_has_roles` VALUES (1, 'App\\User', 1);
INSERT INTO `als_model_has_roles` VALUES (2, 'App\\User', 2);
INSERT INTO `als_model_has_roles` VALUES (3, 'App\\User', 3);
INSERT INTO `als_model_has_roles` VALUES (4, 'App\\User', 4);
INSERT INTO `als_model_has_roles` VALUES (5, 'App\\User', 5);
INSERT INTO `als_model_has_roles` VALUES (6, 'App\\User', 6);
COMMIT;

-- ----------------------------
-- Table structure for als_order_detail
-- ----------------------------
DROP TABLE IF EXISTS `als_order_detail`;
CREATE TABLE `als_order_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orderid` varchar(30) NOT NULL DEFAULT '',
  `qty` int(11) DEFAULT NULL,
  `subtotal` double unsigned DEFAULT '0',
  `panjang` int(11) unsigned DEFAULT NULL,
  `lebar` int(11) unsigned DEFAULT NULL,
  `satuan` varchar(50) DEFAULT NULL,
  `status_bayar` int(11) unsigned DEFAULT '1',
  `status_order` int(11) unsigned DEFAULT '1',
  `promo` varchar(150) DEFAULT NULL,
  `tgl_ambil` datetime DEFAULT NULL,
  `keterangan` text,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of als_order_detail
-- ----------------------------
BEGIN;
INSERT INTO `als_order_detail` VALUES (1, 'ORD000001', 3, 8000, 2, 3, 'cm', 2, 1, '1', '2018-10-22 00:00:00', 'sdfsdfsdf', '2018-10-22 15:47:00', '2018-10-22 15:47:00');
INSERT INTO `als_order_detail` VALUES (2, 'ORD000001', 7, 7000, 3, 4, 'cm', 1, 1, '1', '2018-10-23 00:00:00', 'gghgg', '2018-10-22 15:58:21', '2018-10-22 15:58:21');
INSERT INTO `als_order_detail` VALUES (3, 'ORD000001', 4, 7000, 3, 4, 'cm', 1, 2, '1', '2018-10-22 00:00:00', 'ssdfsdf', '2018-10-22 16:04:10', '2018-10-22 16:04:10');
COMMIT;

-- ----------------------------
-- Table structure for als_orders
-- ----------------------------
DROP TABLE IF EXISTS `als_orders`;
CREATE TABLE `als_orders` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `orderid` varchar(30) NOT NULL,
  `cetakid` int(11) unsigned NOT NULL DEFAULT '1',
  `pelangganid` int(11) unsigned NOT NULL DEFAULT '1',
  `jenispaketid` int(11) unsigned NOT NULL DEFAULT '1',
  `promoid` int(11) unsigned DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of als_orders
-- ----------------------------
BEGIN;
INSERT INTO `als_orders` VALUES (1, 'ORD000001', 1, 1, 1, 1, 1, 1, NULL, 24000, NULL, NULL, NULL, '2018-10-22 15:47:00', '2018-10-27 21:16:24');
COMMIT;

-- ----------------------------
-- Table structure for als_password_resets
-- ----------------------------
DROP TABLE IF EXISTS `als_password_resets`;
CREATE TABLE `als_password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `als_password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for als_pelanggan
-- ----------------------------
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

-- ----------------------------
-- Records of als_pelanggan
-- ----------------------------
BEGIN;
INSERT INTO `als_pelanggan` VALUES (1, 1, 'Hansen', '08114199010', 'LEBBAE', NULL, 1, 1, 1, '2018-10-21 13:55:51', '2018-10-21 13:55:51');
COMMIT;

-- ----------------------------
-- Table structure for als_pembayaran
-- ----------------------------
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

-- ----------------------------
-- Table structure for als_pengaturan
-- ----------------------------
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

-- ----------------------------
-- Table structure for als_pengguna
-- ----------------------------
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

-- ----------------------------
-- Records of als_pengguna
-- ----------------------------
BEGIN;
INSERT INTO `als_pengguna` VALUES (1, 'Hansen Makangiras', 'hansen', 'superadmin@alstudio.com', '2018-10-20 14:45:19', '$2y$10$rZ/gEBdMx3Xa8opl9MuRGuOAap/w5dGIiMMIU06jvIVpiimYGhKzi', 'XkC27b8kxx7COLaPG8jx1kEJIiPHJIxPTC9hPR8805ARNXb18okE0C0nQYYY', '2018-10-20 14:45:19', '2018-10-20 15:22:56');
INSERT INTO `als_pengguna` VALUES (2, 'Admin', 'admin', 'admin@alstudio.com', '2018-10-20 14:45:19', '$2y$10$fKoAt9BspPtBdV8qaHjUOe.9osDq8bMDjSHPkg0IdZtT1TOnUzZO.', 'Z8kyasj3bN', '2018-10-20 14:45:19', '2018-10-20 15:23:28');
INSERT INTO `als_pengguna` VALUES (3, 'Kasir', 'kasir', 'kasir@alstudio.com', '2018-10-20 14:45:19', '$2y$10$i7WV8F8B8qrqeoyCLRcmd.JFXG9NTep5Qn3azBV0GSUH1H1Ivz/d6', 'MY77iPqOnG', '2018-10-20 14:45:19', '2018-10-20 15:23:54');
INSERT INTO `als_pengguna` VALUES (4, 'Pencetakan', 'produksi', 'produksi@alstudio.com', NULL, '$2y$10$FPfB7SINYlDe/z01xY1g.u00yJqS3d1xsP1Z3emrgWHiWnzidxnoK', NULL, '2018-10-21 05:04:59', '2018-10-29 19:02:23');
INSERT INTO `als_pengguna` VALUES (5, 'Foto Studio', 'foto', 'foto@alstudio.com', NULL, '$2y$10$BAAxAi1gkKpZKkTxhijkw.d.nJxFiozv5clShkzHgFBCxgh3iEsDC', NULL, '2018-10-21 05:05:58', '2018-10-21 05:05:58');
INSERT INTO `als_pengguna` VALUES (6, 'Resepsionis', 'resepsionis', 'resepsionis@alstudio.com', NULL, '$2y$10$ITiSHdOR5WozmdePeO9JqeAOaMxyXIbAO0upxhwB92GLQQ/5XXaiW', NULL, '2018-10-29 18:59:21', '2018-10-29 18:59:21');
COMMIT;

-- ----------------------------
-- Table structure for als_permissions
-- ----------------------------
DROP TABLE IF EXISTS `als_permissions`;
CREATE TABLE `als_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of als_permissions
-- ----------------------------
BEGIN;
INSERT INTO `als_permissions` VALUES (1, 'viewUsers', 'web', '2018-10-20 14:45:18', '2018-10-20 14:45:18');
INSERT INTO `als_permissions` VALUES (2, 'addUsers', 'web', '2018-10-20 14:45:18', '2018-10-20 14:45:18');
INSERT INTO `als_permissions` VALUES (3, 'editUsers', 'web', '2018-10-20 14:45:18', '2018-10-20 14:45:18');
INSERT INTO `als_permissions` VALUES (4, 'deleteUsers', 'web', '2018-10-20 14:45:18', '2018-10-20 14:45:18');
INSERT INTO `als_permissions` VALUES (5, 'manageUsers', 'web', '2018-10-20 14:45:18', '2018-10-20 14:45:18');
INSERT INTO `als_permissions` VALUES (6, 'viewRoles', 'web', '2018-10-20 14:45:18', '2018-10-20 14:45:18');
INSERT INTO `als_permissions` VALUES (7, 'addRoles', 'web', '2018-10-20 14:45:18', '2018-10-20 14:45:18');
INSERT INTO `als_permissions` VALUES (8, 'editRoles', 'web', '2018-10-20 14:45:18', '2018-10-20 14:45:18');
INSERT INTO `als_permissions` VALUES (9, 'deleteRoles', 'web', '2018-10-20 14:45:18', '2018-10-20 14:45:18');
INSERT INTO `als_permissions` VALUES (10, 'manageRoles', 'web', '2018-10-20 14:45:18', '2018-10-20 14:45:18');
INSERT INTO `als_permissions` VALUES (11, 'managePelanggan', 'web', '2018-10-20 15:31:19', '2018-10-20 15:31:19');
INSERT INTO `als_permissions` VALUES (12, 'manageCetakan', 'web', '2018-10-20 15:31:41', '2018-10-20 15:31:41');
INSERT INTO `als_permissions` VALUES (13, 'managePaket', 'web', '2018-10-20 15:31:54', '2018-10-20 15:31:54');
INSERT INTO `als_permissions` VALUES (14, 'manageOrder', 'web', '2018-10-20 15:32:17', '2018-10-20 15:32:17');
INSERT INTO `als_permissions` VALUES (15, 'manageFoto', 'web', '2018-10-21 05:03:53', '2018-10-21 05:03:53');
INSERT INTO `als_permissions` VALUES (16, 'managePembayaran', 'web', '2018-10-29 19:00:06', '2018-10-29 19:00:06');
COMMIT;

-- ----------------------------
-- Table structure for als_produk
-- ----------------------------
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

-- ----------------------------
-- Records of als_produk
-- ----------------------------
BEGIN;
INSERT INTO `als_produk` VALUES (1, 1, 'Foto 2x3', 60000, NULL, '2018-10-26 22:45:44', NULL);
INSERT INTO `als_produk` VALUES (2, 1, 'Foto 3x4', 50000, NULL, '2018-10-26 22:45:59', NULL);
INSERT INTO `als_produk` VALUES (3, 2, 'Cetak Baliho', 15000, NULL, '2018-10-26 22:46:24', NULL);
INSERT INTO `als_produk` VALUES (4, 2, 'Cetak Foto 5R', 3500, NULL, '2018-10-28 14:34:52', NULL);
INSERT INTO `als_produk` VALUES (5, 2, 'Cetak Spanduk', 15000, NULL, '2018-10-28 14:35:17', NULL);
COMMIT;

-- ----------------------------
-- Table structure for als_promo
-- ----------------------------
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

-- ----------------------------
-- Records of als_promo
-- ----------------------------
BEGIN;
INSERT INTO `als_promo` VALUES (1, 'RIOoV7', 'Promo Umum', 'Potongan 2 % All item', '2018-10-21 00:00:00', 1, 1, '2018-10-21 13:10:00', '2018-10-21 13:10:00');
COMMIT;

-- ----------------------------
-- Table structure for als_ref_cetak
-- ----------------------------
DROP TABLE IF EXISTS `als_ref_cetak`;
CREATE TABLE `als_ref_cetak` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode` varchar(50) DEFAULT NULL,
  `namacetak` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of als_ref_cetak
-- ----------------------------
BEGIN;
INSERT INTO `als_ref_cetak` VALUES (1, 'FTO', 'FOTO', '2018-09-24 22:33:26', NULL);
INSERT INTO `als_ref_cetak` VALUES (2, 'SPK', 'SPANDUK', '2018-09-24 22:33:28', NULL);
INSERT INTO `als_ref_cetak` VALUES (3, 'BLH', 'BALIHO', '2018-09-24 22:33:29', NULL);
INSERT INTO `als_ref_cetak` VALUES (4, 'STR', 'STICKER', '2018-09-24 22:33:31', NULL);
INSERT INTO `als_ref_cetak` VALUES (5, 'BNR', 'BANNER', '2018-09-24 22:33:32', NULL);
INSERT INTO `als_ref_cetak` VALUES (6, 'PSR', 'POSTER', '2018-09-24 22:33:34', NULL);
COMMIT;

-- ----------------------------
-- Table structure for als_role_has_permissions
-- ----------------------------
DROP TABLE IF EXISTS `als_role_has_permissions`;
CREATE TABLE `als_role_has_permissions` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `als_role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `als_role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `als_permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `als_role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `als_roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of als_role_has_permissions
-- ----------------------------
BEGIN;
INSERT INTO `als_role_has_permissions` VALUES (1, 1);
INSERT INTO `als_role_has_permissions` VALUES (2, 1);
INSERT INTO `als_role_has_permissions` VALUES (3, 1);
INSERT INTO `als_role_has_permissions` VALUES (4, 1);
INSERT INTO `als_role_has_permissions` VALUES (5, 1);
INSERT INTO `als_role_has_permissions` VALUES (6, 1);
INSERT INTO `als_role_has_permissions` VALUES (7, 1);
INSERT INTO `als_role_has_permissions` VALUES (8, 1);
INSERT INTO `als_role_has_permissions` VALUES (9, 1);
INSERT INTO `als_role_has_permissions` VALUES (10, 1);
INSERT INTO `als_role_has_permissions` VALUES (11, 1);
INSERT INTO `als_role_has_permissions` VALUES (12, 1);
INSERT INTO `als_role_has_permissions` VALUES (13, 1);
INSERT INTO `als_role_has_permissions` VALUES (14, 1);
INSERT INTO `als_role_has_permissions` VALUES (15, 1);
INSERT INTO `als_role_has_permissions` VALUES (1, 2);
INSERT INTO `als_role_has_permissions` VALUES (6, 2);
INSERT INTO `als_role_has_permissions` VALUES (11, 2);
INSERT INTO `als_role_has_permissions` VALUES (12, 2);
INSERT INTO `als_role_has_permissions` VALUES (13, 2);
INSERT INTO `als_role_has_permissions` VALUES (14, 2);
INSERT INTO `als_role_has_permissions` VALUES (15, 2);
INSERT INTO `als_role_has_permissions` VALUES (14, 3);
INSERT INTO `als_role_has_permissions` VALUES (16, 3);
INSERT INTO `als_role_has_permissions` VALUES (12, 4);
INSERT INTO `als_role_has_permissions` VALUES (14, 5);
INSERT INTO `als_role_has_permissions` VALUES (15, 5);
INSERT INTO `als_role_has_permissions` VALUES (12, 6);
INSERT INTO `als_role_has_permissions` VALUES (14, 6);
COMMIT;

-- ----------------------------
-- Table structure for als_roles
-- ----------------------------
DROP TABLE IF EXISTS `als_roles`;
CREATE TABLE `als_roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of als_roles
-- ----------------------------
BEGIN;
INSERT INTO `als_roles` VALUES (1, 'Superadmin', 'web', '2018-10-20 14:45:19', '2018-10-20 14:45:19');
INSERT INTO `als_roles` VALUES (2, 'Admin', 'web', '2018-10-20 14:45:19', '2018-10-20 14:45:19');
INSERT INTO `als_roles` VALUES (3, 'Kasir', 'web', '2018-10-20 14:45:19', '2018-10-20 14:45:19');
INSERT INTO `als_roles` VALUES (4, 'Cetak', 'web', '2018-10-21 05:02:43', '2018-10-21 05:03:27');
INSERT INTO `als_roles` VALUES (5, 'Foto', 'web', '2018-10-21 05:03:17', '2018-10-21 05:03:17');
INSERT INTO `als_roles` VALUES (6, 'Resepsionis', 'web', '2018-10-29 18:59:39', '2018-10-29 18:59:39');
COMMIT;

-- ----------------------------
-- Table structure for als_satuan
-- ----------------------------
DROP TABLE IF EXISTS `als_satuan`;
CREATE TABLE `als_satuan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `satuan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of als_satuan
-- ----------------------------
BEGIN;
INSERT INTO `als_satuan` VALUES (1, 'Lembar', '2018-11-06 02:33:40', '2018-11-06 02:33:40', NULL);
INSERT INTO `als_satuan` VALUES (2, 'Meter', '2018-11-06 02:33:51', '2018-11-06 02:33:51', NULL);
COMMIT;

-- ----------------------------
-- Table structure for als_status_bayar
-- ----------------------------
DROP TABLE IF EXISTS `als_status_bayar`;
CREATE TABLE `als_status_bayar` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `statusbyr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of als_status_bayar
-- ----------------------------
BEGIN;
INSERT INTO `als_status_bayar` VALUES (1, 'Tunai', NULL, NULL);
INSERT INTO `als_status_bayar` VALUES (2, 'DP', NULL, NULL);
INSERT INTO `als_status_bayar` VALUES (3, 'Kredit', NULL, NULL);
INSERT INTO `als_status_bayar` VALUES (4, 'Transfer', NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for als_status_cetak
-- ----------------------------
DROP TABLE IF EXISTS `als_status_cetak`;
CREATE TABLE `als_status_cetak` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `statuscetak` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of als_status_cetak
-- ----------------------------
BEGIN;
INSERT INTO `als_status_cetak` VALUES (1, 'Daftar Tunggu', NULL, NULL);
INSERT INTO `als_status_cetak` VALUES (2, 'Sedang Proses', NULL, NULL);
INSERT INTO `als_status_cetak` VALUES (3, 'Selesai', NULL, NULL);
INSERT INTO `als_status_cetak` VALUES (4, 'Sudah Diambil', NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for als_status_order
-- ----------------------------
DROP TABLE IF EXISTS `als_status_order`;
CREATE TABLE `als_status_order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `status_order` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of als_status_order
-- ----------------------------
BEGIN;
INSERT INTO `als_status_order` VALUES (1, 'Daftar Tunggu', '2018-10-21 14:54:08', NULL);
INSERT INTO `als_status_order` VALUES (2, 'Sedang Proses', '2018-10-21 14:54:10', NULL);
INSERT INTO `als_status_order` VALUES (3, 'Selesai', '2018-10-21 14:54:13', NULL);
INSERT INTO `als_status_order` VALUES (4, 'Sudah Diambil', '2018-10-21 14:54:16', NULL);
COMMIT;

-- ----------------------------
-- Table structure for als_status_pelanggan
-- ----------------------------
DROP TABLE IF EXISTS `als_status_pelanggan`;
CREATE TABLE `als_status_pelanggan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `status_pelanggan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of als_status_pelanggan
-- ----------------------------
BEGIN;
INSERT INTO `als_status_pelanggan` VALUES (1, 'Inactive', '2018-10-21 14:08:15', NULL);
INSERT INTO `als_status_pelanggan` VALUES (2, 'Active', '2018-10-21 14:08:21', NULL);
COMMIT;

-- ----------------------------
-- Table structure for als_tipe_pelanggan
-- ----------------------------
DROP TABLE IF EXISTS `als_tipe_pelanggan`;
CREATE TABLE `als_tipe_pelanggan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipe` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of als_tipe_pelanggan
-- ----------------------------
BEGIN;
INSERT INTO `als_tipe_pelanggan` VALUES (1, 'Umum', NULL, NULL);
INSERT INTO `als_tipe_pelanggan` VALUES (2, 'Private', NULL, NULL);
INSERT INTO `als_tipe_pelanggan` VALUES (3, 'VIP', NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for als_transaksi
-- ----------------------------
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

-- ----------------------------
-- Table structure for als_users
-- ----------------------------
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

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
BEGIN;
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2018_09_20_193100_create_transaksis_table', 1);
INSERT INTO `migrations` VALUES (4, '2018_09_20_193233_create_satuans_table', 1);
INSERT INTO `migrations` VALUES (5, '2018_09_20_193246_create_jenis_cetakans_table', 1);
INSERT INTO `migrations` VALUES (6, '2018_09_20_193313_create_pelanggans_table', 1);
INSERT INTO `migrations` VALUES (7, '2018_09_20_195823_create_daftar_cetaks_table', 1);
INSERT INTO `migrations` VALUES (8, '2018_09_20_200145_create_detail_transaksis_table', 1);
INSERT INTO `migrations` VALUES (9, '2018_09_20_200629_create_kwitansis_table', 1);
INSERT INTO `migrations` VALUES (10, '2018_09_20_200815_create_karyawans_table', 1);
INSERT INTO `migrations` VALUES (11, '2018_09_20_201100_create_gaji_karyawans_table', 1);
INSERT INTO `migrations` VALUES (12, '2018_09_20_201242_create_pembayarans_table', 1);
INSERT INTO `migrations` VALUES (13, '2018_09_20_201631_create_pengaturans_table', 1);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
