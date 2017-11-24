<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_touch_goods`;");
E_C("CREATE TABLE `ecs_touch_goods` (
  `goods_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '外键',
  `sales_volume` int(10) unsigned DEFAULT NULL COMMENT '销量统计',
  PRIMARY KEY (`goods_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_touch_goods` values('80','0');");
E_D("replace into `ecs_touch_goods` values('56','0');");
E_D("replace into `ecs_touch_goods` values('98','0');");
E_D("replace into `ecs_touch_goods` values('83','0');");
E_D("replace into `ecs_touch_goods` values('63','0');");
E_D("replace into `ecs_touch_goods` values('45','0');");
E_D("replace into `ecs_touch_goods` values('102','0');");
E_D("replace into `ecs_touch_goods` values('100','0');");
E_D("replace into `ecs_touch_goods` values('99','0');");
E_D("replace into `ecs_touch_goods` values('96','0');");
E_D("replace into `ecs_touch_goods` values('38','0');");
E_D("replace into `ecs_touch_goods` values('30','0');");
E_D("replace into `ecs_touch_goods` values('101','0');");
E_D("replace into `ecs_touch_goods` values('95','0');");
E_D("replace into `ecs_touch_goods` values('64','0');");
E_D("replace into `ecs_touch_goods` values('97','0');");
E_D("replace into `ecs_touch_goods` values('62','0');");
E_D("replace into `ecs_touch_goods` values('103','0');");
E_D("replace into `ecs_touch_goods` values('27','1');");
E_D("replace into `ecs_touch_goods` values('31','0');");
E_D("replace into `ecs_touch_goods` values('74','0');");
E_D("replace into `ecs_touch_goods` values('65','0');");

require("../../inc/footer.php");
?>