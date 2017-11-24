<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_admin_log`;");
E_C("CREATE TABLE `ecs_admin_log` (
  `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `log_time` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `log_info` varchar(255) NOT NULL DEFAULT '',
  `ip_address` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`log_id`),
  KEY `log_time` (`log_time`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_admin_log` values('1','1456946613','14','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2','1456980885','14','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('3','1457037542','14','添加会员账号: aaa','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('4','1457205697','14','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('5','1457205705','14','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('6','1457259137','14','编辑权限管理: admin','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('7','1481512316','14','编辑商店设置: ','127.0.0.1');");

require("../../inc/footer.php");
?>