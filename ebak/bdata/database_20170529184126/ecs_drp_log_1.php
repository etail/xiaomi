<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_drp_log`;");
E_C("CREATE TABLE `ecs_drp_log` (
  `log_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `user_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `pay_points` mediumint(9) NOT NULL DEFAULT '0',
  `change_time` int(10) unsigned NOT NULL DEFAULT '0',
  `change_desc` varchar(255) NOT NULL DEFAULT '',
  `change_type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `bank_info` text COMMENT '提现银行卡信息',
  `order_id` int(10) unsigned NOT NULL DEFAULT '0',
  `status` int(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`log_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>