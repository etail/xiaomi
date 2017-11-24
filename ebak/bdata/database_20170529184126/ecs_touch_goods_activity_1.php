<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_touch_goods_activity`;");
E_C("CREATE TABLE `ecs_touch_goods_activity` (
  `act_id` int(10) DEFAULT '0',
  `act_banner` varchar(255) DEFAULT NULL,
  `sales_count` int(10) DEFAULT '0',
  `click_num` int(10) NOT NULL DEFAULT '0',
  `cur_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  UNIQUE KEY `act_id` (`act_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_touch_goods_activity` values('12',NULL,'0','0','10.00');");
E_D("replace into `ecs_touch_goods_activity` values('15',NULL,'0','0','113.00');");
E_D("replace into `ecs_touch_goods_activity` values('17',NULL,'0','0','400.00');");
E_D("replace into `ecs_touch_goods_activity` values('23',NULL,'0','0','200.00');");
E_D("replace into `ecs_touch_goods_activity` values('14',NULL,'0','0','22.00');");
E_D("replace into `ecs_touch_goods_activity` values('13',NULL,'0','0','22.00');");
E_D("replace into `ecs_touch_goods_activity` values('16',NULL,'0','0','444.00');");
E_D("replace into `ecs_touch_goods_activity` values('21',NULL,'0','0','10.00');");
E_D("replace into `ecs_touch_goods_activity` values('22',NULL,'0','0','2.00');");
E_D("replace into `ecs_touch_goods_activity` values('20',NULL,'0','0','10.00');");

require("../../inc/footer.php");
?>