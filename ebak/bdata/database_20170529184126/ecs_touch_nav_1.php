<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_touch_nav`;");
E_C("CREATE TABLE `ecs_touch_nav` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `ctype` varchar(10) DEFAULT NULL,
  `cid` smallint(5) unsigned DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '',
  `ifshow` tinyint(1) NOT NULL DEFAULT '0',
  `vieworder` tinyint(1) NOT NULL DEFAULT '0',
  `opennew` tinyint(1) NOT NULL DEFAULT '0',
  `url` varchar(255) NOT NULL DEFAULT '',
  `pic` varchar(255) NOT NULL DEFAULT '',
  `type` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `ifshow` (`ifshow`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_touch_nav` values('1','','0','全部分类','1','0','0','index.php?c=category&amp;a=top_all','themes/xiaomi/images/nav/nav_0.png','middle');");
E_D("replace into `ecs_touch_nav` values('2','','0','我的订单','1','0','0','index.php?c=user&amp;a=order_list','themes/xiaomi/images/nav/nav_1.png','middle');");
E_D("replace into `ecs_touch_nav` values('3','','0','最新团购','1','0','0','index.php?c=groupbuy','themes/xiaomi/images/nav/nav_4.png','middle');");
E_D("replace into `ecs_touch_nav` values('4','','0','促销活动','1','0','0','index.php?c=activity','themes/xiaomi/images/nav/nav_3.png','middle');");
E_D("replace into `ecs_touch_nav` values('5','','0','积分商城','1','0','0','index.php?c=exchange','themes/xiaomi/images/nav/nav_6.png','middle');");
E_D("replace into `ecs_touch_nav` values('6','','0','品牌街','1','0','0','index.php?c=brand','themes/xiaomi/images/nav/nav_2.png','middle');");
E_D("replace into `ecs_touch_nav` values('7','','0','个人中心','1','0','0','index.php?c=user','themes/xiaomi/images/nav/nav_5.png','middle');");
E_D("replace into `ecs_touch_nav` values('8','','0','购物车','1','0','0','index.php?c=flow&amp;a=cart','themes/xiaomi/images/nav/nav_7.png','middle');");

require("../../inc/footer.php");
?>