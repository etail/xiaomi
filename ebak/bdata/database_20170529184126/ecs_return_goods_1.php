<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_return_goods`;");
E_C("CREATE TABLE `ecs_return_goods` (
  `rg_id` int(10) NOT NULL AUTO_INCREMENT,
  `rec_id` mediumint(8) unsigned NOT NULL,
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `product_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `product_sn` varchar(60) DEFAULT NULL,
  `goods_name` varchar(120) DEFAULT NULL,
  `brand_name` varchar(60) DEFAULT NULL,
  `goods_sn` varchar(60) DEFAULT NULL,
  `is_real` tinyint(1) unsigned DEFAULT '0',
  `goods_attr` text,
  `goods_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `return_type` tinyint(3) NOT NULL,
  `back_num` smallint(6) NOT NULL,
  `out_num` smallint(6) NOT NULL,
  `out_attr` varchar(100) NOT NULL,
  `refund` decimal(10,2) NOT NULL,
  PRIMARY KEY (`rg_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>