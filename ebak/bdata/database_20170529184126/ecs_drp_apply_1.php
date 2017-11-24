<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_drp_apply`;");
E_C("CREATE TABLE `ecs_drp_apply` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `apply` int(1) DEFAULT '1',
  `user_id` int(10) DEFAULT '0',
  `time` int(12) DEFAULT '0',
  `amount` decimal(10,2) DEFAULT '0.00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>