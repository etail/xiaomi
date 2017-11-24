<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_touch_ad`;");
E_C("CREATE TABLE `ecs_touch_ad` (
  `ad_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `position_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `media_type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ad_name` varchar(255) NOT NULL DEFAULT '',
  `ad_link` varchar(255) NOT NULL DEFAULT '',
  `ad_code` text NOT NULL,
  `start_time` int(11) NOT NULL DEFAULT '0',
  `end_time` int(11) NOT NULL DEFAULT '0',
  `link_man` varchar(60) NOT NULL DEFAULT '',
  `link_email` varchar(60) NOT NULL DEFAULT '',
  `link_phone` varchar(60) NOT NULL DEFAULT '',
  `click_count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `enabled` tinyint(3) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`ad_id`),
  KEY `position_id` (`position_id`),
  KEY `enabled` (`enabled`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_touch_ad` values('1','1','0','1','','data/attached/images/fac916e220941bfadab8cb76e5d7977c.png','1396252800','1525075200','','','','1','1');");
E_D("replace into `ecs_touch_ad` values('2','1','0','2','','data/attached/images/fac916e220941bfadab8cb76e5d7977c.png','1396252800','1525075200','','','','0','1');");
E_D("replace into `ecs_touch_ad` values('3','1','0','3','','data/attached/images/fac916e220941bfadab8cb76e5d7977c.png','1396252800','1525075200','','','','1','1');");
E_D("replace into `ecs_touch_ad` values('4','2','0','首页导航下方广告-1','','data/attached/images/fd24171a2d9b61c21661a9420f34a02d.jpg','1457337600','1599379200','','','','0','1');");
E_D("replace into `ecs_touch_ad` values('5','2','0','首页导航下方广告-2','','data/attached/images/c2199db56346d06cd4beda0b1ca7ce14.jpg','1457337600','1586160000','','','','0','1');");
E_D("replace into `ecs_touch_ad` values('6','2','0','首页导航下方广告-3','','data/attached/images/0cebfeba915d02d153c81ffb31f3be0a.jpg','1457337600','1586160000','','','','2','1');");

require("../../inc/footer.php");
?>