<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_service_type`;");
E_C("CREATE TABLE `ecs_service_type` (
  `service_id` int(10) NOT NULL AUTO_INCREMENT,
  `service_name` varchar(60) NOT NULL,
  `service_desc` text NOT NULL,
  `received_days` mediumint(4) NOT NULL,
  `unreceived_days` mediumint(6) NOT NULL,
  `is_show` tinyint(1) NOT NULL,
  `sort_order` tinyint(3) NOT NULL,
  `service_type` tinyint(1) NOT NULL COMMENT '服务类型',
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_service_type` values('1','退货退款','已收到货，需要退还已收到的货物1','7','8','1','9','1');");
E_D("replace into `ecs_service_type` values('3','换货','对已收到的货物不满意，联系卖家协商换货','7','10','1','3','3');");

require("../../inc/footer.php");
?>