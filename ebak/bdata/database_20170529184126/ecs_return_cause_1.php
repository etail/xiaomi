<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_return_cause`;");
E_C("CREATE TABLE `ecs_return_cause` (
  `cause_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `cause_name` varchar(50) NOT NULL COMMENT '退换货原因',
  `parent_id` int(11) NOT NULL COMMENT '父级id',
  `sort_order` int(10) NOT NULL COMMENT '排序',
  `is_show` tinyint(3) NOT NULL COMMENT '是否显示',
  PRIMARY KEY (`cause_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COMMENT='退换货原因说明'");
E_D("replace into `ecs_return_cause` values('24','颜色问题','0','50','1');");
E_D("replace into `ecs_return_cause` values('25','质量问题','0','50','1');");

require("../../inc/footer.php");
?>