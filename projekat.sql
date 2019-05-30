-- Adminer 4.6.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `consumables`;
CREATE TABLE `consumables` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `material_status_id` int(11) NOT NULL,
  `recommended_rating_id` int(11) NOT NULL,
  `created` date NOT NULL,
  `modified` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_consumable_recommended rating1_idx` (`recommended_rating_id`),
  KEY `fk_consumable_material status1_idx` (`material_status_id`),
  KEY `fk_consumable_items1_idx` (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `consumables` (`id`, `item_id`, `material_status_id`, `recommended_rating_id`, `created`, `modified`) VALUES
(1,	3,	2,	1,	'2018-05-18',	'2018-05-23');

DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `hts_number` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tax_group` varchar(45) NOT NULL,
  `eccn` varchar(45) NOT NULL,
  `release_date` date NOT NULL,
  `for_distributors` tinyint(1) NOT NULL,
  `product_status_id` int(11) NOT NULL,
  `created` date NOT NULL,
  `modified` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_goods_product status1_idx` (`product_status_id`),
  KEY `fk_goods_items1_idx` (`item_id`),
  CONSTRAINT `fk_goods_product status1` FOREIGN KEY (`product_status_id`) REFERENCES `product_statuses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `goods` (`id`, `item_id`, `pid`, `hts_number`, `tax_group`, `eccn`, `release_date`, `for_distributors`, `product_status_id`, `created`, `modified`) VALUES
(1,	2,	3838,	'8473 30 20',	'20%',	'EAR99',	'2011-10-20',	1,	2,	'2018-05-18',	'2018-05-23');

DROP TABLE IF EXISTS `inventories`;
CREATE TABLE `inventories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `material_status_id` int(11) NOT NULL,
  `recommended_rating_id` int(11) NOT NULL,
  `created` date NOT NULL,
  `modified` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_inventory_recommended rating1_idx` (`recommended_rating_id`),
  KEY `fk_inventory_material status1_idx` (`material_status_id`),
  KEY `fk_inventory_items1_idx` (`item_id`),
  CONSTRAINT `fk_inventory_material status1` FOREIGN KEY (`material_status_id`) REFERENCES `material_statuses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_inventory_recommended rating1` FOREIGN KEY (`recommended_rating_id`) REFERENCES `recommended_ratings` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `inventories` (`id`, `item_id`, `material_status_id`, `recommended_rating_id`, `created`, `modified`) VALUES
(1,	2,	2,	2,	'2018-05-18',	'2018-05-24');

DROP TABLE IF EXISTS `items`;
CREATE TABLE `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` text,
  `weight` int(11) DEFAULT NULL,
  `measurment_unit_id` int(11) NOT NULL,
  `item_type_id` int(11) NOT NULL,
  `deleted` tinyint(1) DEFAULT NULL,
  `created` date NOT NULL,
  `modified` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_items_item types_idx` (`item_type_id`),
  KEY `fk_items_measurment units1_idx` (`measurment_unit_id`),
  CONSTRAINT `items_ibfk_2` FOREIGN KEY (`item_type_id`) REFERENCES `item_types` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `items_ibfk_3` FOREIGN KEY (`measurment_unit_id`) REFERENCES `measurment_units` (`id`) ON DELETE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `items` (`id`, `code`, `name`, `description`, `weight`, `measurment_unit_id`, `item_type_id`, `deleted`, `created`, `modified`) VALUES
(1,	'PRO-3321',	'Pi 3 click shield',	'The Pi 3 click shield is compatible with Raspberry Pi 3 model B, 2 B, 1 A+ and B+.',	NULL,	7,	1,	0,	'2018-05-18',	'2018-05-23'),
(2,	'PP-2234',	'PP - ProxSense click v105',	'PP za ProxSense Click',	22,	7,	10,	0,	'2018-05-18',	'2018-05-24'),
(3,	'SMD-3322',	'IC FLASH 4MBIT 104MHZ 8TSSOP AT25SF041-XMHD-T',	'IC FLASH 4MBIT 104MHZ 8TSSOP AT25SF041-XMHD-T SMD',	15,	3,	8,	NULL,	'2018-05-22',	'2018-05-24'),
(7,	'SMD-2345',	'WIRELESS MODULE ATWINC3400-MR210CA122 SMD',	'WIRELESS MODULE ATWINC3400-MR210CA122 SMD\r\n',	10,	7,	2,	NULL,	'2018-05-21',	'2018-05-21'),
(8,	'SMD-2345',	'TVS DIODE 3.3VWM 6.8VC SOD123F SMF3.3 SMD',	'TVS DIODE 3.3VWM 6.8VC SOD123F SMF3.3 SMD',	20,	7,	2,	0,	'2018-05-21',	'2018-05-21'),
(14,	'test-567',	'dada',	'dadadadadad',	5,	1,	8,	NULL,	'2018-05-22',	'2018-05-22'),
(15,	'test-567',	'dada',	'dadadad',	5,	1,	2,	NULL,	'2018-05-22',	'2018-05-22'),
(16,	'testiranje-123',	'test',	'test test test',	10,	1,	2,	NULL,	'2018-05-22',	'2018-05-22'),
(17,	'asasdasd',	'asdasd',	'asdasdasd',	11,	1,	2,	NULL,	'2018-05-22',	'2018-05-22'),
(18,	'123123asdasd',	'123213asdasd',	'1eqd21x313',	20,	1,	2,	NULL,	'2018-05-22',	'2018-05-22'),
(19,	'blablabla',	'asdasdasd',	'adasdasdasd',	50,	1,	2,	NULL,	'2018-05-22',	'2018-05-22');

DROP TABLE IF EXISTS `item_types`;
CREATE TABLE `item_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `class` enum('product','kit','material','semi_product','service_product','service_supplier','consumable','inventory','good','other') NOT NULL,
  `tangible` tinyint(1) NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL,
  `created` date NOT NULL,
  `modified` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `item_types` (`id`, `code`, `name`, `class`, `tangible`, `active`, `created`, `modified`) VALUES
(1,	'PRO',	'Proizvod',	'product',	1,	1,	'2018-05-18',	NULL),
(2,	'SMD',	'SMD Komponente',	'material',	0,	1,	'2018-05-18',	NULL),
(3,	'KIT',	'Kitovi',	'kit',	1,	1,	'2018-05-18',	NULL),
(4,	'PP',	'Poluproizvod',	'semi_product',	1,	1,	'2018-05-18',	NULL),
(6,	'RND',	'Razvoj',	'service_product',	0,	1,	'2018-05-18',	NULL),
(7,	'PTP04',	'Ostala roba (PIS)',	'other',	1,	0,	'2018-05-18',	NULL),
(8,	'POT',	'potrosni materijal',	'consumable',	1,	1,	'2018-05-22',	NULL),
(9,	'1111',	'asdasdasd',	'service_supplier',	1,	1,	'2018-05-23',	'2018-05-23'),
(10,	'2222-aaaa',	'asdasdas',	'inventory',	1,	1,	'2018-05-23',	NULL),
(11,	'123213-gggg',	'asdasd',	'good',	1,	1,	'2018-05-23',	NULL);

DROP TABLE IF EXISTS `kits`;
CREATE TABLE `kits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `hts_number` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tax_group` varchar(45) NOT NULL,
  `eccn` varchar(45) NOT NULL,
  `kit_release_date` date NOT NULL,
  `for_distributors` tinyint(1) NOT NULL,
  `hide_kit_content` tinyint(1) NOT NULL,
  `product_status_id` int(11) NOT NULL,
  `created` date NOT NULL,
  `modified` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_kit_product status1_idx` (`product_status_id`),
  KEY `fk_kit_items1_idx` (`item_id`),
  CONSTRAINT `fk_kit_product status1` FOREIGN KEY (`product_status_id`) REFERENCES `product_statuses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `kits` (`id`, `item_id`, `pid`, `hts_number`, `tax_group`, `eccn`, `kit_release_date`, `for_distributors`, `hide_kit_content`, `product_status_id`, `created`, `modified`) VALUES
(1,	1,	2623,	'8473 30 20',	'20%',	'EAR99',	'2009-05-20',	0,	2,	2,	'2018-05-18',	'2018-05-23');

DROP TABLE IF EXISTS `materials`;
CREATE TABLE `materials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `material_status_id` int(11) NOT NULL,
  `service_production` tinyint(1) NOT NULL,
  `recommended_rating_id` int(11) DEFAULT NULL,
  `created` date NOT NULL,
  `modified` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_material_recommended rating1_idx` (`recommended_rating_id`),
  KEY `fk_material_material status1_idx` (`material_status_id`),
  KEY `fk_material_items1_idx` (`item_id`),
  CONSTRAINT `fk_material_material status1` FOREIGN KEY (`material_status_id`) REFERENCES `material_statuses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_material_recommended rating1` FOREIGN KEY (`recommended_rating_id`) REFERENCES `recommended_ratings` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `materials` (`id`, `item_id`, `material_status_id`, `service_production`, `recommended_rating_id`, `created`, `modified`) VALUES
(1,	3,	2,	0,	1,	'2018-05-18',	'2018-05-23'),
(2,	2,	1,	0,	2,	'2018-05-18',	NULL),
(3,	3,	3,	0,	1,	'2018-05-23',	'2018-05-24'),
(6,	7,	2,	0,	NULL,	'2018-05-21',	'2018-05-21'),
(7,	8,	3,	1,	2,	'2018-05-21',	'2018-05-21');

DROP TABLE IF EXISTS `material_statuses`;
CREATE TABLE `material_statuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(45) NOT NULL,
  `created` date NOT NULL,
  `modified` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `material_statuses` (`id`, `status`, `created`, `modified`) VALUES
(1,	'development',	'2018-05-18',	NULL),
(2,	'in use',	'2018-05-18',	NULL),
(3,	'phase out',	'2018-05-18',	NULL),
(4,	'obsolete',	'2018-05-18',	NULL);

DROP TABLE IF EXISTS `measurment_units`;
CREATE TABLE `measurment_units` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `symbol` varchar(45) NOT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `created` date NOT NULL,
  `modified` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `measurment_units` (`id`, `name`, `symbol`, `active`, `created`, `modified`) VALUES
(1,	'Metar',	'm',	1,	'2018-05-18',	'2018-05-21'),
(2,	'Litar',	'l',	1,	'2018-05-18',	NULL),
(3,	'Pakovanje',	'pak.',	1,	'2018-05-18',	NULL),
(4,	'Gram',	'g',	1,	'2018-05-18',	NULL),
(5,	'Kilogram',	'kg',	1,	'2018-05-18',	NULL),
(7,	'Komad',	'kom',	1,	'2018-05-18',	NULL),
(8,	'Jutar',	'j',	0,	'2018-05-18',	NULL);

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `hts_number` varchar(45) NOT NULL,
  `tax_group` varchar(45) NOT NULL,
  `eccn` varchar(45) DEFAULT NULL,
  `release_date` date DEFAULT NULL,
  `for_distributors` tinyint(1) NOT NULL,
  `product_status_id` int(11) NOT NULL,
  `service_production` tinyint(1) NOT NULL,
  `project` varchar(45) DEFAULT NULL,
  `created` date NOT NULL,
  `modified` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_product_product status1_idx` (`product_status_id`),
  KEY `fk_product_items1_idx` (`item_id`),
  CONSTRAINT `fk_product_product status1` FOREIGN KEY (`product_status_id`) REFERENCES `product_statuses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `products` (`id`, `item_id`, `pid`, `hts_number`, `tax_group`, `eccn`, `release_date`, `for_distributors`, `product_status_id`, `service_production`, `project`, `created`, `modified`) VALUES
(1,	1,	2756,	'8473 30 20',	'20%',	'EAR99',	'2023-11-20',	1,	2,	0,	'P17.222',	'2018-05-18',	'2018-05-23'),
(2,	3,	2812,	'8473 30 20',	'20%',	'EAR99',	'2011-10-20',	1,	2,	0,	NULL,	'2018-05-18',	NULL);

DROP TABLE IF EXISTS `product_statuses`;
CREATE TABLE `product_statuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(45) NOT NULL,
  `created` date NOT NULL,
  `modified` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `product_statuses` (`id`, `status`, `created`, `modified`) VALUES
(1,	'development',	'2018-05-18',	NULL),
(2,	'for sale',	'2018-05-18',	NULL),
(3,	'phase out',	'2018-05-18',	NULL),
(4,	'obsolete',	'2018-05-18',	NULL),
(5,	'nrnd',	'2018-05-18',	NULL);

DROP TABLE IF EXISTS `recommended_ratings`;
CREATE TABLE `recommended_ratings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rating` varchar(45) NOT NULL,
  `created` date NOT NULL,
  `modified` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `recommended_ratings` (`id`, `rating`, `created`, `modified`) VALUES
(1,	'platinum',	'2018-05-18',	NULL),
(2,	'gold',	'2018-05-18',	NULL),
(3,	'silver',	'2018-05-18',	NULL);

DROP TABLE IF EXISTS `semi_products`;
CREATE TABLE `semi_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `material_status_id` int(11) NOT NULL,
  `service_production` tinyint(1) NOT NULL,
  `created` date NOT NULL,
  `modified` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_semi-product_material status1_idx` (`material_status_id`),
  KEY `fk_semi-product_items1_idx` (`item_id`),
  CONSTRAINT `fk_semi-product_material status1` FOREIGN KEY (`material_status_id`) REFERENCES `material_statuses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `semi_products` (`id`, `item_id`, `material_status_id`, `service_production`, `created`, `modified`) VALUES
(1,	1,	2,	0,	'2018-05-18',	'2018-05-23'),
(2,	2,	3,	1,	'2018-05-18',	NULL);

DROP TABLE IF EXISTS `service_products`;
CREATE TABLE `service_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `hts_number` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tax_group` varchar(45) NOT NULL,
  `eccn` varchar(45) DEFAULT NULL,
  `release_date` date DEFAULT NULL,
  `for_distributors` tinyint(1) NOT NULL,
  `material_status_id` int(11) NOT NULL,
  `project` varchar(45) DEFAULT NULL,
  `created` date NOT NULL,
  `modified` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_service product_material status1_idx` (`material_status_id`),
  KEY `fk_service product_items1_idx` (`item_id`),
  CONSTRAINT `fk_service product_material status1` FOREIGN KEY (`material_status_id`) REFERENCES `material_statuses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `service_products` (`id`, `item_id`, `pid`, `hts_number`, `tax_group`, `eccn`, `release_date`, `for_distributors`, `material_status_id`, `project`, `created`, `modified`) VALUES
(1,	1,	2794,	'8523 49 51',	'20%',	NULL,	NULL,	0,	1,	'P17.222',	'2018-05-18',	'2018-05-23');

DROP TABLE IF EXISTS `service_suppliers`;
CREATE TABLE `service_suppliers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `material_status_id` int(11) NOT NULL,
  `recommended_rating_id` int(11) DEFAULT NULL,
  `created` date NOT NULL,
  `modified` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_service supplier_recommended rating1_idx` (`recommended_rating_id`),
  KEY `fk_service supplier_material status1_idx` (`material_status_id`),
  KEY `fk_service supplier_items1_idx` (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `service_suppliers` (`id`, `item_id`, `material_status_id`, `recommended_rating_id`, `created`, `modified`) VALUES
(1,	3,	4,	1,	'2018-05-18',	'2018-05-23'),
(2,	1,	1,	1,	'2018-05-23',	NULL);

DROP TABLE IF EXISTS `transfer_licenses`;
CREATE TABLE `transfer_licenses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `operator` varchar(45) DEFAULT NULL,
  `warehouse_place` varchar(45) DEFAULT NULL,
  `transfer_licenses` tinyint(4) DEFAULT NULL,
  `created` date DEFAULT NULL,
  `modified` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `warehouse_addresses`;
CREATE TABLE `warehouse_addresses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(45) DEFAULT NULL,
  `row` varchar(45) DEFAULT NULL,
  `shelf` int(11) DEFAULT NULL,
  `bulkhead` int(11) DEFAULT NULL,
  `barcode` varchar(45) DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL,
  `warehouse_locations_id` int(11) NOT NULL,
  `created` date DEFAULT NULL,
  `modified` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_warehouse address_warehouse locations1_idx` (`warehouse_locations_id`),
  CONSTRAINT `fk_warehouse address_warehouse locations1` FOREIGN KEY (`warehouse_locations_id`) REFERENCES `warehouse_locations` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `warehouse_locations`;
CREATE TABLE `warehouse_locations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(45) DEFAULT NULL,
  `item` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `default` tinyint(4) DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL,
  `item_types_id` int(11) NOT NULL,
  `created` date DEFAULT NULL,
  `modified` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_warehouse locations_item types1_idx` (`item_types_id`),
  CONSTRAINT `fk_warehouse locations_item types1` FOREIGN KEY (`item_types_id`) REFERENCES `item_types` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- 2018-06-01 09:27:08
