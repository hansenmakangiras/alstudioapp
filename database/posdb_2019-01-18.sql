# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.23)
# Database: posdb
# Generation Time: 2019-01-17 18:28:05 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table ospos_app_config
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ospos_app_config`;

CREATE TABLE `ospos_app_config` (
  `key` varchar(50) NOT NULL,
  `value` varchar(500) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `ospos_app_config` WRITE;
/*!40000 ALTER TABLE `ospos_app_config` DISABLE KEYS */;

INSERT INTO `ospos_app_config` (`key`, `value`)
VALUES
	('address','Jln. Samudra'),
	('allow_duplicate_barcodes','0'),
	('barcode_content','id'),
	('barcode_first_row','category'),
	('barcode_font','Arial'),
	('barcode_font_size','10'),
	('barcode_formats','[]'),
	('barcode_generate_if_empty','0'),
	('barcode_height','50'),
	('barcode_num_in_row','2'),
	('barcode_page_cellspacing','20'),
	('barcode_page_width','100'),
	('barcode_second_row','item_code'),
	('barcode_third_row','unit_price'),
	('barcode_type','Code39'),
	('barcode_width','250'),
	('cash_decimals','2'),
	('cash_rounding_code','1'),
	('company','AL Studio'),
	('company_logo',''),
	('country_codes','us,id'),
	('currency_decimals','2'),
	('currency_symbol','Rp. '),
	('customer_reward_enable','0'),
	('customer_sales_tax_support','0'),
	('dateformat','m/d/Y'),
	('date_or_time_format',''),
	('default_origin_tax_code',''),
	('default_register_mode','sale'),
	('default_sales_discount','0'),
	('default_tax_1_name',''),
	('default_tax_1_rate',''),
	('default_tax_2_name',''),
	('default_tax_2_rate',''),
	('default_tax_category','Standard'),
	('default_tax_rate','8'),
	('derive_sale_quantity','0'),
	('dinner_table_enable','0'),
	('email','admin@alstudio.com'),
	('email_receipt_check_behaviour','last'),
	('enforce_privacy','0'),
	('fax',''),
	('financial_year','1'),
	('gcaptcha_enable','0'),
	('gcaptcha_secret_key',''),
	('gcaptcha_site_key',''),
	('giftcard_number','series'),
	('invoice_default_comments','This is a default comment'),
	('invoice_email_message','Dear {CU}, In attachment the receipt for sale {ISEQ}'),
	('invoice_enable','1'),
	('language','english'),
	('language_code','en-US'),
	('last_used_invoice_number','0'),
	('last_used_quote_number','0'),
	('last_used_work_order_number','0'),
	('lines_per_page','25'),
	('line_sequence','0'),
	('mailpath','/usr/sbin/sendmail'),
	('msg_msg',''),
	('msg_pwd','2e01b0f802ee1a7a0f067ae70473b30e1c43aa1224d339da41b77b0d68cec2e0db67509571a38d52b074471e6729cecb939dee4f9c769e42605b85c42e93b988m9yPkRTb7ppQYEYOcPaB6E2z27yj7h5XdxrJo3lxksA='),
	('msg_src','AL Studio'),
	('msg_uid','admin'),
	('notify_horizontal_position','center'),
	('notify_vertical_position','bottom'),
	('number_locale','en_US'),
	('payment_options_order','cashdebitcredit'),
	('phone','555-555-5555'),
	('print_bottom_margin','0'),
	('print_delay_autoreturn','0'),
	('print_footer','0'),
	('print_header','0'),
	('print_left_margin','0'),
	('print_receipt_check_behaviour','last'),
	('print_right_margin','0'),
	('print_silently','1'),
	('print_top_margin','0'),
	('protocol','mail'),
	('quantity_decimals','0'),
	('quote_default_comments','This is a default quote comment'),
	('receipt_font_size','12'),
	('receipt_show_company_name','1'),
	('receipt_show_description','1'),
	('receipt_show_serialnumber','1'),
	('receipt_show_taxes','0'),
	('receipt_show_total_discount','1'),
	('receipt_template','receipt_default'),
	('receiving_calculate_average_price','0'),
	('recv_invoice_format','{CO}'),
	('return_policy','Test'),
	('sales_invoice_format','{CO}'),
	('sales_quote_format','Q%y{QSEQ:6}'),
	('smtp_crypto','ssl'),
	('smtp_host',''),
	('smtp_pass',''),
	('smtp_port','465'),
	('smtp_timeout','5'),
	('smtp_user',''),
	('suggestions_first_column','name'),
	('suggestions_second_column',''),
	('suggestions_third_column',''),
	('tax_decimals','2'),
	('tax_included','0'),
	('theme','flatly'),
	('thousands_separator','thousands_separator'),
	('timeformat','H:i:s'),
	('timezone','Asia/Hong_Kong'),
	('website',''),
	('work_order_enable','0'),
	('work_order_format','W%y{WSEQ:6}');

/*!40000 ALTER TABLE `ospos_app_config` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table ospos_customers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ospos_customers`;

CREATE TABLE `ospos_customers` (
  `person_id` int(10) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `account_number` varchar(255) DEFAULT NULL,
  `taxable` int(1) NOT NULL DEFAULT '1',
  `sales_tax_code` varchar(32) NOT NULL DEFAULT '1',
  `discount_percent` decimal(15,2) NOT NULL DEFAULT '0.00',
  `package_id` int(11) DEFAULT NULL,
  `points` int(11) DEFAULT NULL,
  `deleted` int(1) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `employee_id` int(10) NOT NULL,
  `consent` int(1) NOT NULL DEFAULT '0',
  UNIQUE KEY `account_number` (`account_number`),
  KEY `person_id` (`person_id`),
  KEY `package_id` (`package_id`),
  CONSTRAINT `ospos_customers_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `ospos_people` (`person_id`),
  CONSTRAINT `ospos_customers_ibfk_2` FOREIGN KEY (`package_id`) REFERENCES `ospos_customers_packages` (`package_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table ospos_customers_packages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ospos_customers_packages`;

CREATE TABLE `ospos_customers_packages` (
  `package_id` int(11) NOT NULL AUTO_INCREMENT,
  `package_name` varchar(255) DEFAULT NULL,
  `points_percent` float NOT NULL DEFAULT '0',
  `deleted` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`package_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

LOCK TABLES `ospos_customers_packages` WRITE;
/*!40000 ALTER TABLE `ospos_customers_packages` DISABLE KEYS */;

INSERT INTO `ospos_customers_packages` (`package_id`, `package_name`, `points_percent`, `deleted`)
VALUES
	(1,'Default',0,0),
	(2,'Bronze',10,0),
	(3,'Silver',20,0),
	(4,'Gold',30,0),
	(5,'Premium',50,0);

/*!40000 ALTER TABLE `ospos_customers_packages` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table ospos_customers_points
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ospos_customers_points`;

CREATE TABLE `ospos_customers_points` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `sale_id` int(11) NOT NULL,
  `points_earned` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `person_id` (`person_id`),
  KEY `package_id` (`package_id`),
  KEY `sale_id` (`sale_id`),
  CONSTRAINT `ospos_customers_points_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `ospos_customers` (`person_id`),
  CONSTRAINT `ospos_customers_points_ibfk_2` FOREIGN KEY (`package_id`) REFERENCES `ospos_customers_packages` (`package_id`),
  CONSTRAINT `ospos_customers_points_ibfk_3` FOREIGN KEY (`sale_id`) REFERENCES `ospos_sales` (`sale_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table ospos_dinner_tables
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ospos_dinner_tables`;

CREATE TABLE `ospos_dinner_tables` (
  `dinner_table_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `deleted` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`dinner_table_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

LOCK TABLES `ospos_dinner_tables` WRITE;
/*!40000 ALTER TABLE `ospos_dinner_tables` DISABLE KEYS */;

INSERT INTO `ospos_dinner_tables` (`dinner_table_id`, `name`, `status`, `deleted`)
VALUES
	(1,'Delivery',0,0),
	(2,'Take Away',0,0);

/*!40000 ALTER TABLE `ospos_dinner_tables` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table ospos_employees
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ospos_employees`;

CREATE TABLE `ospos_employees` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `person_id` int(10) NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT '0',
  `hash_version` int(1) NOT NULL DEFAULT '2',
  `language` varchar(48) DEFAULT NULL,
  `language_code` varchar(8) DEFAULT NULL,
  UNIQUE KEY `username` (`username`),
  KEY `person_id` (`person_id`),
  CONSTRAINT `ospos_employees_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `ospos_people` (`person_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `ospos_employees` WRITE;
/*!40000 ALTER TABLE `ospos_employees` DISABLE KEYS */;

INSERT INTO `ospos_employees` (`username`, `password`, `person_id`, `deleted`, `hash_version`, `language`, `language_code`)
VALUES
	('admin','$2y$10$vJBSMlD02EC7ENSrKfVQXuvq9tNRHMtcOA8MSK2NYS748HHWm.gcG',1,0,2,NULL,NULL);

/*!40000 ALTER TABLE `ospos_employees` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table ospos_expense_categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ospos_expense_categories`;

CREATE TABLE `ospos_expense_categories` (
  `expense_category_id` int(10) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) DEFAULT NULL,
  `category_description` varchar(255) NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`expense_category_id`),
  UNIQUE KEY `category_name` (`category_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table ospos_expenses
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ospos_expenses`;

CREATE TABLE `ospos_expenses` (
  `expense_id` int(10) NOT NULL AUTO_INCREMENT,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `amount` decimal(15,2) NOT NULL,
  `payment_type` varchar(40) NOT NULL,
  `expense_category_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `employee_id` int(10) NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT '0',
  `supplier_name` varchar(255) DEFAULT NULL,
  `supplier_tax_code` varchar(255) DEFAULT NULL,
  `tax_amount` decimal(15,2) DEFAULT NULL,
  PRIMARY KEY (`expense_id`),
  KEY `expense_category_id` (`expense_category_id`),
  KEY `employee_id` (`employee_id`),
  CONSTRAINT `ospos_expenses_ibfk_1` FOREIGN KEY (`expense_category_id`) REFERENCES `ospos_expense_categories` (`expense_category_id`),
  CONSTRAINT `ospos_expenses_ibfk_2` FOREIGN KEY (`employee_id`) REFERENCES `ospos_employees` (`person_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table ospos_giftcards
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ospos_giftcards`;

CREATE TABLE `ospos_giftcards` (
  `record_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `giftcard_id` int(11) NOT NULL AUTO_INCREMENT,
  `giftcard_number` varchar(255) DEFAULT NULL,
  `value` decimal(15,2) NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT '0',
  `person_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`giftcard_id`),
  UNIQUE KEY `giftcard_number` (`giftcard_number`),
  KEY `person_id` (`person_id`),
  CONSTRAINT `ospos_giftcards_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `ospos_people` (`person_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table ospos_grants
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ospos_grants`;

CREATE TABLE `ospos_grants` (
  `permission_id` varchar(255) NOT NULL,
  `person_id` int(10) NOT NULL,
  `menu_group` varchar(32) DEFAULT 'home',
  PRIMARY KEY (`permission_id`,`person_id`),
  KEY `ospos_grants_ibfk_2` (`person_id`),
  CONSTRAINT `ospos_grants_ibfk_1` FOREIGN KEY (`permission_id`) REFERENCES `ospos_permissions` (`permission_id`) ON DELETE CASCADE,
  CONSTRAINT `ospos_grants_ibfk_2` FOREIGN KEY (`person_id`) REFERENCES `ospos_employees` (`person_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `ospos_grants` WRITE;
/*!40000 ALTER TABLE `ospos_grants` DISABLE KEYS */;

INSERT INTO `ospos_grants` (`permission_id`, `person_id`, `menu_group`)
VALUES
	('config',1,'office'),
	('customers',1,'home'),
	('employees',1,'office'),
	('expenses',1,'home'),
	('expenses_categories',1,'home'),
	('giftcards',1,'home'),
	('home',1,'office'),
	('items',1,'home'),
	('items_stock',1,'home'),
	('item_kits',1,'home'),
	('messages',1,'home'),
	('office',1,'home'),
	('receivings',1,'home'),
	('receivings_stock',1,'home'),
	('reports',1,'home'),
	('reports_categories',1,'home'),
	('reports_customers',1,'home'),
	('reports_discounts',1,'home'),
	('reports_employees',1,'home'),
	('reports_expenses_categories',1,'home'),
	('reports_inventory',1,'home'),
	('reports_items',1,'home'),
	('reports_payments',1,'home'),
	('reports_receivings',1,'home'),
	('reports_sales',1,'home'),
	('reports_suppliers',1,'home'),
	('reports_taxes',1,'home'),
	('sales',1,'home'),
	('sales_delete',1,'--'),
	('sales_stock',1,'home'),
	('suppliers',1,'home'),
	('taxes',1,'office');

/*!40000 ALTER TABLE `ospos_grants` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table ospos_inventory
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ospos_inventory`;

CREATE TABLE `ospos_inventory` (
  `trans_id` int(11) NOT NULL AUTO_INCREMENT,
  `trans_items` int(11) NOT NULL DEFAULT '0',
  `trans_user` int(11) NOT NULL DEFAULT '0',
  `trans_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `trans_comment` text NOT NULL,
  `trans_location` int(11) NOT NULL,
  `trans_inventory` decimal(15,3) NOT NULL DEFAULT '0.000',
  PRIMARY KEY (`trans_id`),
  KEY `trans_items` (`trans_items`),
  KEY `trans_user` (`trans_user`),
  KEY `trans_location` (`trans_location`),
  CONSTRAINT `ospos_inventory_ibfk_1` FOREIGN KEY (`trans_items`) REFERENCES `ospos_items` (`item_id`),
  CONSTRAINT `ospos_inventory_ibfk_2` FOREIGN KEY (`trans_user`) REFERENCES `ospos_employees` (`person_id`),
  CONSTRAINT `ospos_inventory_ibfk_3` FOREIGN KEY (`trans_location`) REFERENCES `ospos_stock_locations` (`location_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

LOCK TABLES `ospos_inventory` WRITE;
/*!40000 ALTER TABLE `ospos_inventory` DISABLE KEYS */;

INSERT INTO `ospos_inventory` (`trans_id`, `trans_items`, `trans_user`, `trans_date`, `trans_comment`, `trans_location`, `trans_inventory`)
VALUES
	(1,1,1,'2018-11-23 19:21:23','Manual Edit of Quantity',1,100.000);

/*!40000 ALTER TABLE `ospos_inventory` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table ospos_item_kit_items
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ospos_item_kit_items`;

CREATE TABLE `ospos_item_kit_items` (
  `item_kit_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `quantity` decimal(15,3) NOT NULL,
  `kit_sequence` int(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`item_kit_id`,`item_id`,`quantity`),
  KEY `ospos_item_kit_items_ibfk_2` (`item_id`),
  CONSTRAINT `ospos_item_kit_items_ibfk_1` FOREIGN KEY (`item_kit_id`) REFERENCES `ospos_item_kits` (`item_kit_id`) ON DELETE CASCADE,
  CONSTRAINT `ospos_item_kit_items_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `ospos_items` (`item_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table ospos_item_kits
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ospos_item_kits`;

CREATE TABLE `ospos_item_kits` (
  `item_kit_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `item_id` int(10) NOT NULL DEFAULT '0',
  `kit_discount_percent` decimal(15,2) NOT NULL DEFAULT '0.00',
  `price_option` tinyint(2) NOT NULL DEFAULT '0',
  `print_option` tinyint(2) NOT NULL DEFAULT '0',
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`item_kit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table ospos_item_quantities
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ospos_item_quantities`;

CREATE TABLE `ospos_item_quantities` (
  `item_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `quantity` decimal(15,3) NOT NULL DEFAULT '0.000',
  PRIMARY KEY (`item_id`,`location_id`),
  KEY `item_id` (`item_id`),
  KEY `location_id` (`location_id`),
  CONSTRAINT `ospos_item_quantities_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `ospos_items` (`item_id`),
  CONSTRAINT `ospos_item_quantities_ibfk_2` FOREIGN KEY (`location_id`) REFERENCES `ospos_stock_locations` (`location_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `ospos_item_quantities` WRITE;
/*!40000 ALTER TABLE `ospos_item_quantities` DISABLE KEYS */;

INSERT INTO `ospos_item_quantities` (`item_id`, `location_id`, `quantity`)
VALUES
	(1,1,100.000);

/*!40000 ALTER TABLE `ospos_item_quantities` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table ospos_items
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ospos_items`;

CREATE TABLE `ospos_items` (
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `item_number` varchar(255) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `cost_price` decimal(15,2) NOT NULL,
  `unit_price` decimal(15,2) NOT NULL,
  `reorder_level` decimal(15,3) NOT NULL DEFAULT '0.000',
  `receiving_quantity` decimal(15,3) NOT NULL DEFAULT '1.000',
  `item_id` int(10) NOT NULL AUTO_INCREMENT,
  `pic_filename` varchar(255) DEFAULT NULL,
  `allow_alt_description` tinyint(1) NOT NULL,
  `is_serialized` tinyint(1) NOT NULL,
  `stock_type` tinyint(2) NOT NULL DEFAULT '0',
  `item_type` tinyint(2) NOT NULL DEFAULT '0',
  `tax_category_id` int(10) NOT NULL DEFAULT '1',
  `deleted` int(1) NOT NULL DEFAULT '0',
  `custom1` varchar(255) DEFAULT NULL,
  `custom2` varchar(255) DEFAULT NULL,
  `custom3` varchar(255) DEFAULT NULL,
  `custom4` varchar(255) DEFAULT NULL,
  `custom5` varchar(255) DEFAULT NULL,
  `custom6` varchar(255) DEFAULT NULL,
  `custom7` varchar(255) DEFAULT NULL,
  `custom8` varchar(255) DEFAULT NULL,
  `custom9` varchar(255) DEFAULT NULL,
  `custom10` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`item_id`),
  KEY `item_number` (`item_number`),
  KEY `supplier_id` (`supplier_id`),
  CONSTRAINT `ospos_items_ibfk_1` FOREIGN KEY (`supplier_id`) REFERENCES `ospos_suppliers` (`person_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

LOCK TABLES `ospos_items` WRITE;
/*!40000 ALTER TABLE `ospos_items` DISABLE KEYS */;

INSERT INTO `ospos_items` (`name`, `category`, `supplier_id`, `item_number`, `description`, `cost_price`, `unit_price`, `reorder_level`, `receiving_quantity`, `item_id`, `pic_filename`, `allow_alt_description`, `is_serialized`, `stock_type`, `item_type`, `tax_category_id`, `deleted`, `custom1`, `custom2`, `custom3`, `custom4`, `custom5`, `custom6`, `custom7`, `custom8`, `custom9`, `custom10`)
VALUES
	('Cetak Foto 5R','Foto Studio',NULL,NULL,'',50000.00,80000.00,1.000,1.000,1,NULL,0,0,0,0,0,0,'','','','','','','','','','');

/*!40000 ALTER TABLE `ospos_items` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table ospos_items_taxes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ospos_items_taxes`;

CREATE TABLE `ospos_items_taxes` (
  `item_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `percent` decimal(15,3) NOT NULL,
  PRIMARY KEY (`item_id`,`name`,`percent`),
  CONSTRAINT `ospos_items_taxes_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `ospos_items` (`item_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table ospos_migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ospos_migrations`;

CREATE TABLE `ospos_migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `ospos_migrations` WRITE;
/*!40000 ALTER TABLE `ospos_migrations` DISABLE KEYS */;

INSERT INTO `ospos_migrations` (`version`)
VALUES
	(20180501100000);

/*!40000 ALTER TABLE `ospos_migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table ospos_modules
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ospos_modules`;

CREATE TABLE `ospos_modules` (
  `name_lang_key` varchar(255) NOT NULL,
  `desc_lang_key` varchar(255) NOT NULL,
  `sort` int(10) NOT NULL,
  `module_id` varchar(255) NOT NULL,
  PRIMARY KEY (`module_id`),
  UNIQUE KEY `desc_lang_key` (`desc_lang_key`),
  UNIQUE KEY `name_lang_key` (`name_lang_key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `ospos_modules` WRITE;
/*!40000 ALTER TABLE `ospos_modules` DISABLE KEYS */;

INSERT INTO `ospos_modules` (`name_lang_key`, `desc_lang_key`, `sort`, `module_id`)
VALUES
	('module_config','module_config_desc',110,'config'),
	('module_customers','module_customers_desc',10,'customers'),
	('module_employees','module_employees_desc',80,'employees'),
	('module_expenses','module_expenses_desc',108,'expenses'),
	('module_expenses_categories','module_expenses_categories_desc',109,'expenses_categories'),
	('module_giftcards','module_giftcards_desc',90,'giftcards'),
	('module_home','module_home_desc',1,'home'),
	('module_items','module_items_desc',20,'items'),
	('module_item_kits','module_item_kits_desc',30,'item_kits'),
	('module_messages','module_messages_desc',98,'messages'),
	('module_office','module_office_desc',999,'office'),
	('module_receivings','module_receivings_desc',60,'receivings'),
	('module_reports','module_reports_desc',50,'reports'),
	('module_sales','module_sales_desc',70,'sales'),
	('module_suppliers','module_suppliers_desc',40,'suppliers'),
	('module_taxes','module_taxes_desc',105,'taxes');

/*!40000 ALTER TABLE `ospos_modules` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table ospos_people
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ospos_people`;

CREATE TABLE `ospos_people` (
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` int(1) DEFAULT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address_1` varchar(255) NOT NULL,
  `address_2` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `comments` text NOT NULL,
  `person_id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`person_id`),
  KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

LOCK TABLES `ospos_people` WRITE;
/*!40000 ALTER TABLE `ospos_people` DISABLE KEYS */;

INSERT INTO `ospos_people` (`first_name`, `last_name`, `gender`, `phone_number`, `email`, `address_1`, `address_2`, `city`, `state`, `zip`, `country`, `comments`, `person_id`)
VALUES
	('John','Doe',NULL,'555-555-5555','changeme@example.com','Address 1','','','','','','',1);

/*!40000 ALTER TABLE `ospos_people` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table ospos_permissions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ospos_permissions`;

CREATE TABLE `ospos_permissions` (
  `permission_id` varchar(255) NOT NULL,
  `module_id` varchar(255) NOT NULL,
  `location_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`permission_id`),
  KEY `module_id` (`module_id`),
  KEY `ospos_permissions_ibfk_2` (`location_id`),
  CONSTRAINT `ospos_permissions_ibfk_1` FOREIGN KEY (`module_id`) REFERENCES `ospos_modules` (`module_id`) ON DELETE CASCADE,
  CONSTRAINT `ospos_permissions_ibfk_2` FOREIGN KEY (`location_id`) REFERENCES `ospos_stock_locations` (`location_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `ospos_permissions` WRITE;
/*!40000 ALTER TABLE `ospos_permissions` DISABLE KEYS */;

INSERT INTO `ospos_permissions` (`permission_id`, `module_id`, `location_id`)
VALUES
	('config','config',NULL),
	('customers','customers',NULL),
	('employees','employees',NULL),
	('expenses','expenses',NULL),
	('expenses_categories','expenses_categories',NULL),
	('giftcards','giftcards',NULL),
	('home','home',NULL),
	('items','items',NULL),
	('items_stock','items',1),
	('item_kits','item_kits',NULL),
	('messages','messages',NULL),
	('office','office',NULL),
	('receivings','receivings',NULL),
	('receivings_stock','receivings',1),
	('reports','reports',NULL),
	('reports_categories','reports',NULL),
	('reports_customers','reports',NULL),
	('reports_discounts','reports',NULL),
	('reports_employees','reports',NULL),
	('reports_expenses_categories','reports',NULL),
	('reports_inventory','reports',NULL),
	('reports_items','reports',NULL),
	('reports_payments','reports',NULL),
	('reports_receivings','reports',NULL),
	('reports_sales','reports',NULL),
	('reports_suppliers','reports',NULL),
	('reports_taxes','reports',NULL),
	('sales','sales',NULL),
	('sales_delete','sales',NULL),
	('sales_stock','sales',1),
	('suppliers','suppliers',NULL),
	('taxes','taxes',NULL);

/*!40000 ALTER TABLE `ospos_permissions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table ospos_receivings
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ospos_receivings`;

CREATE TABLE `ospos_receivings` (
  `receiving_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `supplier_id` int(10) DEFAULT NULL,
  `employee_id` int(10) NOT NULL DEFAULT '0',
  `comment` text,
  `receiving_id` int(10) NOT NULL AUTO_INCREMENT,
  `payment_type` varchar(20) DEFAULT NULL,
  `reference` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`receiving_id`),
  KEY `supplier_id` (`supplier_id`),
  KEY `employee_id` (`employee_id`),
  KEY `reference` (`reference`),
  CONSTRAINT `ospos_receivings_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `ospos_employees` (`person_id`),
  CONSTRAINT `ospos_receivings_ibfk_2` FOREIGN KEY (`supplier_id`) REFERENCES `ospos_suppliers` (`person_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table ospos_receivings_items
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ospos_receivings_items`;

CREATE TABLE `ospos_receivings_items` (
  `receiving_id` int(10) NOT NULL DEFAULT '0',
  `item_id` int(10) NOT NULL DEFAULT '0',
  `description` varchar(30) DEFAULT NULL,
  `serialnumber` varchar(30) DEFAULT NULL,
  `line` int(3) NOT NULL,
  `quantity_purchased` decimal(15,3) NOT NULL DEFAULT '0.000',
  `item_cost_price` decimal(15,2) NOT NULL,
  `item_unit_price` decimal(15,2) NOT NULL,
  `discount_percent` decimal(15,2) NOT NULL DEFAULT '0.00',
  `item_location` int(11) NOT NULL,
  `receiving_quantity` decimal(15,3) NOT NULL DEFAULT '1.000',
  PRIMARY KEY (`receiving_id`,`item_id`,`line`),
  KEY `item_id` (`item_id`),
  CONSTRAINT `ospos_receivings_items_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `ospos_items` (`item_id`),
  CONSTRAINT `ospos_receivings_items_ibfk_2` FOREIGN KEY (`receiving_id`) REFERENCES `ospos_receivings` (`receiving_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table ospos_sales
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ospos_sales`;

CREATE TABLE `ospos_sales` (
  `sale_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `customer_id` int(10) DEFAULT NULL,
  `employee_id` int(10) NOT NULL DEFAULT '0',
  `comment` text,
  `invoice_number` varchar(32) DEFAULT NULL,
  `quote_number` varchar(32) DEFAULT NULL,
  `sale_id` int(10) NOT NULL AUTO_INCREMENT,
  `sale_status` tinyint(2) NOT NULL DEFAULT '0',
  `dinner_table_id` int(11) DEFAULT NULL,
  `work_order_number` varchar(32) DEFAULT NULL,
  `sale_type` tinyint(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`sale_id`),
  UNIQUE KEY `invoice_number` (`invoice_number`),
  KEY `customer_id` (`customer_id`),
  KEY `employee_id` (`employee_id`),
  KEY `sale_time` (`sale_time`),
  KEY `dinner_table_id` (`dinner_table_id`),
  CONSTRAINT `ospos_sales_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `ospos_employees` (`person_id`),
  CONSTRAINT `ospos_sales_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `ospos_customers` (`person_id`),
  CONSTRAINT `ospos_sales_ibfk_3` FOREIGN KEY (`dinner_table_id`) REFERENCES `ospos_dinner_tables` (`dinner_table_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table ospos_sales_items
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ospos_sales_items`;

CREATE TABLE `ospos_sales_items` (
  `sale_id` int(10) NOT NULL DEFAULT '0',
  `item_id` int(10) NOT NULL DEFAULT '0',
  `description` varchar(255) DEFAULT NULL,
  `serialnumber` varchar(30) DEFAULT NULL,
  `line` int(3) NOT NULL DEFAULT '0',
  `quantity_purchased` decimal(15,3) NOT NULL DEFAULT '0.000',
  `item_cost_price` decimal(15,2) NOT NULL,
  `item_unit_price` decimal(15,2) NOT NULL,
  `discount_percent` decimal(15,2) NOT NULL DEFAULT '0.00',
  `item_location` int(11) NOT NULL,
  `print_option` tinyint(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`sale_id`,`item_id`,`line`),
  KEY `sale_id` (`sale_id`),
  KEY `item_id` (`item_id`),
  KEY `item_location` (`item_location`),
  CONSTRAINT `ospos_sales_items_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `ospos_items` (`item_id`),
  CONSTRAINT `ospos_sales_items_ibfk_2` FOREIGN KEY (`sale_id`) REFERENCES `ospos_sales` (`sale_id`),
  CONSTRAINT `ospos_sales_items_ibfk_3` FOREIGN KEY (`item_location`) REFERENCES `ospos_stock_locations` (`location_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table ospos_sales_items_taxes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ospos_sales_items_taxes`;

CREATE TABLE `ospos_sales_items_taxes` (
  `sale_id` int(10) NOT NULL,
  `item_id` int(10) NOT NULL,
  `line` int(3) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `percent` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `tax_type` tinyint(2) NOT NULL DEFAULT '0',
  `rounding_code` tinyint(2) NOT NULL DEFAULT '0',
  `cascade_tax` tinyint(2) NOT NULL DEFAULT '0',
  `cascade_sequence` tinyint(2) NOT NULL DEFAULT '0',
  `item_tax_amount` decimal(15,4) NOT NULL DEFAULT '0.0000',
  PRIMARY KEY (`sale_id`,`item_id`,`line`,`name`,`percent`),
  KEY `sale_id` (`sale_id`),
  KEY `item_id` (`item_id`),
  CONSTRAINT `ospos_sales_items_taxes_ibfk_1` FOREIGN KEY (`sale_id`) REFERENCES `ospos_sales_items` (`sale_id`),
  CONSTRAINT `ospos_sales_items_taxes_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `ospos_items` (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table ospos_sales_payments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ospos_sales_payments`;

CREATE TABLE `ospos_sales_payments` (
  `sale_id` int(10) NOT NULL,
  `payment_type` varchar(40) NOT NULL,
  `payment_amount` decimal(15,2) NOT NULL,
  PRIMARY KEY (`sale_id`,`payment_type`),
  KEY `sale_id` (`sale_id`),
  CONSTRAINT `ospos_sales_payments_ibfk_1` FOREIGN KEY (`sale_id`) REFERENCES `ospos_sales` (`sale_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table ospos_sales_reward_points
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ospos_sales_reward_points`;

CREATE TABLE `ospos_sales_reward_points` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sale_id` int(11) NOT NULL,
  `earned` float NOT NULL,
  `used` float NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sale_id` (`sale_id`),
  CONSTRAINT `ospos_sales_reward_points_ibfk_1` FOREIGN KEY (`sale_id`) REFERENCES `ospos_sales` (`sale_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table ospos_sales_taxes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ospos_sales_taxes`;

CREATE TABLE `ospos_sales_taxes` (
  `sale_id` int(10) NOT NULL,
  `tax_type` smallint(2) NOT NULL,
  `tax_group` varchar(32) NOT NULL,
  `sale_tax_basis` decimal(15,4) NOT NULL,
  `sale_tax_amount` decimal(15,4) NOT NULL,
  `print_sequence` tinyint(2) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `tax_rate` decimal(15,4) NOT NULL,
  `sales_tax_code` varchar(32) NOT NULL DEFAULT '',
  `rounding_code` tinyint(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`sale_id`,`tax_type`,`tax_group`),
  KEY `print_sequence` (`sale_id`,`print_sequence`,`tax_type`,`tax_group`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table ospos_sessions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ospos_sessions`;

CREATE TABLE `ospos_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `ospos_sessions` WRITE;
/*!40000 ALTER TABLE `ospos_sessions` DISABLE KEYS */;

INSERT INTO `ospos_sessions` (`id`, `ip_address`, `timestamp`, `data`)
VALUES
	('a4e45cba0c994502701f00dbbf6e99402909a4fd','::1',1541565628,X'5F5F63695F6C6173745F726567656E65726174657C693A313534313536353632383B'),
	('3914e3af4e890af31489d35c63d73cc5f19e909b','::1',1541566131,X'5F5F63695F6C6173745F726567656E65726174657C693A313534313536353835323B706572736F6E5F69647C733A313A2231223B6D656E755F67726F75707C733A363A226F6666696365223B6974656D5F6C6F636174696F6E7C733A313A2231223B726563765F636172747C613A303A7B7D726563765F6D6F64657C733A373A2272656365697665223B726563765F737570706C6965727C693A2D313B73616C655F69647C693A2D313B73616C65735F636172747C613A303A7B7D73616C65735F637573746F6D65727C693A2D313B73616C65735F6D6F64657C733A343A2273616C65223B73616C65735F6C6F636174696F6E7C733A313A2231223B73616C65735F7061796D656E74737C613A303A7B7D636173685F6D6F64657C693A303B636173685F726F756E64696E677C693A303B73616C65735F696E766F6963655F6E756D6265727C4E3B'),
	('2006fa3b26dbaff6a67ad284d34d91b026be1f1d','::1',1541566246,X'5F5F63695F6C6173745F726567656E65726174657C693A313534313536363234353B706572736F6E5F69647C733A313A2231223B6D656E755F67726F75707C733A343A22686F6D65223B6974656D5F6C6F636174696F6E7C733A313A2231223B726563765F636172747C613A303A7B7D726563765F6D6F64657C733A373A2272656365697665223B726563765F737570706C6965727C693A2D313B73616C655F69647C693A2D313B73616C65735F636172747C613A303A7B7D73616C65735F637573746F6D65727C693A2D313B73616C65735F6D6F64657C733A343A2273616C65223B73616C65735F6C6F636174696F6E7C733A313A2231223B73616C65735F7061796D656E74737C613A303A7B7D636173685F6D6F64657C693A303B636173685F726F756E64696E677C693A303B73616C65735F696E766F6963655F6E756D6265727C4E3B'),
	('7bbfd5b2d9d3583bd1957e35457e2ffa8322b47e','::1',1542971907,X'5F5F63695F6C6173745F726567656E65726174657C693A313534323937313533313B706572736F6E5F69647C733A313A2231223B6D656E755F67726F75707C733A363A226F6666696365223B6974656D5F6C6F636174696F6E7C733A313A2231223B726563765F636172747C613A303A7B7D726563765F6D6F64657C733A373A2272656365697665223B726563765F737570706C6965727C693A2D313B73616C655F69647C693A2D313B73616C65735F636172747C613A303A7B7D73616C65735F637573746F6D65727C693A2D313B73616C65735F6D6F64657C733A343A2273616C65223B73616C65735F6C6F636174696F6E7C733A313A2231223B73616C65735F7061796D656E74737C613A303A7B7D636173685F6D6F64657C693A303B636173685F726F756E64696E677C693A303B73616C65735F696E766F6963655F6E756D6265727C4E3B'),
	('483c1b95b2753fabb6dce37d28dce64464e77f26','::1',1542972260,X'5F5F63695F6C6173745F726567656E65726174657C693A313534323937313931373B706572736F6E5F69647C733A313A2231223B6D656E755F67726F75707C733A363A226F6666696365223B6974656D5F6C6F636174696F6E7C733A313A2231223B726563765F636172747C613A303A7B7D726563765F6D6F64657C733A373A2272656365697665223B726563765F737570706C6965727C693A2D313B73616C655F69647C693A2D313B73616C65735F6D6F64657C733A343A2273616C65223B73616C65735F6C6F636174696F6E7C733A313A2231223B73616C65735F696E766F6963655F6E756D6265725F656E61626C65647C623A303B73616C65735F636172747C613A303A7B7D73616C65735F637573746F6D65727C693A2D313B73616C65735F7061796D656E74737C613A303A7B7D636173685F6D6F64657C693A303B636173685F726F756E64696E677C693A303B73616C65735F696E766F6963655F6E756D6265727C4E3B'),
	('7d41e927fb7e7c63d6953dd7f1f4b1f34a904b24','::1',1542972327,X'5F5F63695F6C6173745F726567656E65726174657C693A313534323937323330333B706572736F6E5F69647C733A313A2231223B6D656E755F67726F75707C733A343A22686F6D65223B6974656D5F6C6F636174696F6E7C733A313A2231223B726563765F636172747C613A303A7B7D726563765F6D6F64657C733A373A2272656365697665223B726563765F737570706C6965727C693A2D313B73616C655F69647C693A2D313B73616C65735F6D6F64657C733A343A2273616C65223B73616C65735F6C6F636174696F6E7C733A313A2231223B73616C65735F696E766F6963655F6E756D6265725F656E61626C65647C623A303B73616C65735F636172747C613A303A7B7D73616C65735F637573746F6D65727C693A2D313B73616C65735F7061796D656E74737C613A303A7B7D636173685F6D6F64657C693A303B636173685F726F756E64696E677C693A303B73616C65735F696E766F6963655F6E756D6265727C4E3B'),
	('1be673936c586eff64d0a3f9035a27115e367a43','::1',1542975058,X'5F5F63695F6C6173745F726567656E65726174657C693A313534323937343939343B706572736F6E5F69647C733A313A2231223B6D656E755F67726F75707C733A343A22686F6D65223B6974656D5F6C6F636174696F6E7C733A313A2231223B726563765F636172747C613A303A7B7D726563765F6D6F64657C733A373A2272656365697665223B726563765F737570706C6965727C693A2D313B73616C655F69647C693A2D313B73616C65735F6D6F64657C733A363A2272657475726E223B73616C65735F6C6F636174696F6E7C733A313A2231223B73616C65735F696E766F6963655F6E756D6265725F656E61626C65647C623A303B73616C65735F636172747C613A303A7B7D73616C65735F637573746F6D65727C693A2D313B73616C65735F7061796D656E74737C613A303A7B7D636173685F6D6F64657C693A303B636173685F726F756E64696E677C693A303B73616C65735F696E766F6963655F6E756D6265727C4E3B73616C655F747970657C693A343B64696E6E65725F7461626C657C4E3B');

/*!40000 ALTER TABLE `ospos_sessions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table ospos_stock_locations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ospos_stock_locations`;

CREATE TABLE `ospos_stock_locations` (
  `location_id` int(11) NOT NULL AUTO_INCREMENT,
  `location_name` varchar(255) DEFAULT NULL,
  `deleted` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`location_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

LOCK TABLES `ospos_stock_locations` WRITE;
/*!40000 ALTER TABLE `ospos_stock_locations` DISABLE KEYS */;

INSERT INTO `ospos_stock_locations` (`location_id`, `location_name`, `deleted`)
VALUES
	(1,'stock',0);

/*!40000 ALTER TABLE `ospos_stock_locations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table ospos_suppliers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ospos_suppliers`;

CREATE TABLE `ospos_suppliers` (
  `person_id` int(10) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `agency_name` varchar(255) NOT NULL,
  `account_number` varchar(255) DEFAULT NULL,
  `deleted` int(1) NOT NULL DEFAULT '0',
  UNIQUE KEY `account_number` (`account_number`),
  KEY `person_id` (`person_id`),
  CONSTRAINT `ospos_suppliers_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `ospos_people` (`person_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table ospos_tax_categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ospos_tax_categories`;

CREATE TABLE `ospos_tax_categories` (
  `tax_category_id` int(10) NOT NULL AUTO_INCREMENT,
  `tax_category` varchar(32) NOT NULL,
  `tax_group_sequence` tinyint(2) NOT NULL,
  PRIMARY KEY (`tax_category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

LOCK TABLES `ospos_tax_categories` WRITE;
/*!40000 ALTER TABLE `ospos_tax_categories` DISABLE KEYS */;

INSERT INTO `ospos_tax_categories` (`tax_category_id`, `tax_category`, `tax_group_sequence`)
VALUES
	(1,'Standard',10),
	(2,'Service',12),
	(3,'Alcohol',11);

/*!40000 ALTER TABLE `ospos_tax_categories` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table ospos_tax_code_rates
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ospos_tax_code_rates`;

CREATE TABLE `ospos_tax_code_rates` (
  `rate_tax_code` varchar(32) NOT NULL,
  `rate_tax_category_id` int(10) NOT NULL,
  `tax_rate` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `rounding_code` tinyint(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rate_tax_code`,`rate_tax_category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table ospos_tax_codes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ospos_tax_codes`;

CREATE TABLE `ospos_tax_codes` (
  `tax_code` varchar(32) NOT NULL,
  `tax_code_name` varchar(255) NOT NULL DEFAULT '',
  `tax_code_type` tinyint(2) NOT NULL DEFAULT '0',
  `city` varchar(255) NOT NULL DEFAULT '',
  `state` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`tax_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
