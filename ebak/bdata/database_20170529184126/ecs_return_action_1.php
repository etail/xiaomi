<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_return_action`;");
E_C("CREATE TABLE `ecs_return_action` (
  `action_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `ret_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `action_user` varchar(30) NOT NULL DEFAULT '',
  `return_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `refund_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_check` tinyint(2) NOT NULL COMMENT '审核是否通过',
  `action_place` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `action_note` varchar(255) NOT NULL DEFAULT '',
  `action_info` varchar(255) NOT NULL COMMENT '操作介绍',
  `log_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`action_id`),
  KEY `order_id` (`ret_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>