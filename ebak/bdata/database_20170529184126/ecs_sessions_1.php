<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_sessions`;");
E_C("CREATE TABLE `ecs_sessions` (
  `sesskey` char(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `expiry` int(10) unsigned NOT NULL DEFAULT '0',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `adminid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `ip` char(15) NOT NULL DEFAULT '',
  `user_name` varchar(60) NOT NULL,
  `user_rank` tinyint(3) NOT NULL,
  `discount` decimal(3,2) NOT NULL,
  `email` varchar(60) NOT NULL,
  `data` char(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`sesskey`),
  KEY `expiry` (`expiry`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_sessions` values('7bd0f530ee94148de0e7ddc36ee94370','1496054436','0','0','0.0.0.0','0','0','1.00','0','a:7:{s:9:\"parent_id\";i:0;s:8:\"drp_shop\";a:0:{}s:7:\"from_ad\";i:28;s:7:\"referer\";s:6:\"本站\";s:9:\"last_time\";i:1496025562;s:14:\"ectouch_verify\";s:4:\"ZYG6\";s:9:\"flow_type\";i:0;}');");
E_D("replace into `ecs_sessions` values('efd8b258d0d956fbbc06688965531e89','1496054539','0','14','0.0.0.0','0','0','0.00','0','a:4:{s:10:\"admin_name\";s:5:\"admin\";s:11:\"action_list\";s:3:\"all\";s:10:\"last_check\";i:1496025739;s:12:\"suppliers_id\";s:1:\"0\";}');");
E_D("replace into `ecs_sessions` values('22bec9e6ad9083d731c713979c6cefd8','1496054193','0','0','0.0.0.0','0','0','1.00','0','a:4:{s:7:\"from_ad\";i:7;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;s:12:\"captcha_word\";s:16:\"NmM2NjFmZGFmOA==\";}');");

require("../../inc/footer.php");
?>