<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_aftermarket_attachments`;");
E_C("CREATE TABLE `ecs_aftermarket_attachments` (
  `img_id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `rec_id` mediumint(8) NOT NULL,
  `img_url` varchar(255) NOT NULL,
  `goods_id` mediumint(8) NOT NULL,
  UNIQUE KEY `img_id` (`img_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>