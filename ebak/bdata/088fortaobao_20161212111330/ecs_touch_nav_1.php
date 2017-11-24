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
  `cid` smallint(5) unsigned DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `ifshow` tinyint(1) NOT NULL,
  `vieworder` tinyint(1) NOT NULL,
  `opennew` tinyint(1) NOT NULL,
  `url` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `ifshow` (`ifshow`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_touch_nav` values('1','','0','全部分类','1','0','0','index.php?c=category&amp;a=top_all','themes/default/images/nav/nav_0.png','middle');");
E_D("replace into `ecs_touch_nav` values('2','','0','我的订单','0','0','0','index.php?m=default&amp;c=user&amp;a=order_list','themes/default/images/nav/nav_1.png','middle');");
E_D("replace into `ecs_touch_nav` values('3','','0','最新团购','1','0','0','index.php?m=default&amp;c=groupbuy','themes/default/images/nav/nav_2.png','middle');");
E_D("replace into `ecs_touch_nav` values('4','','0','促销活动','1','0','0','index.php?m=default&amp;c=activity','themes/default/images/nav/nav_3.png','middle');");
E_D("replace into `ecs_touch_nav` values('5','','0','热门搜索','0','0','0','javascript:openSearch();','themes/default/images/nav/nav_4.png','middle');");
E_D("replace into `ecs_touch_nav` values('6','','0','品牌街','0','0','0','index.php?m=default&amp;c=brand','themes/default/images/nav/nav_5.png','middle');");
E_D("replace into `ecs_touch_nav` values('7','','0','个人中心','1','0','0','index.php?m=default&amp;c=user','themes/default/images/nav/nav_6.png','middle');");
E_D("replace into `ecs_touch_nav` values('8','','0','购物车','0','0','0','index.php?m=default&amp;c=flow&amp;a=cart','themes/default/images/nav/nav_7.png','middle');");

require("../../inc/footer.php");
?>