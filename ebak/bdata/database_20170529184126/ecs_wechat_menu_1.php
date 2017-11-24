<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_wechat_menu`;");
E_C("CREATE TABLE `ecs_wechat_menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wechat_id` int(10) unsigned NOT NULL DEFAULT '0',
  `pid` int(3) unsigned NOT NULL DEFAULT '0' COMMENT '父级ID',
  `name` varchar(255) NOT NULL DEFAULT '' COMMENT '菜单标题',
  `type` varchar(10) NOT NULL DEFAULT '' COMMENT '菜单的响应动作类型',
  `key` varchar(255) NOT NULL DEFAULT '' COMMENT '菜单KEY值，click类型必须',
  `url` varchar(255) NOT NULL DEFAULT '' COMMENT '网页链接，view类型必须',
  `sort` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `status` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_wechat_menu` values('1','1','0','微商城','click','','#','1','1');");
E_D("replace into `ecs_wechat_menu` values('2','1','0','微互动','click','','#','2','1');");
E_D("replace into `ecs_wechat_menu` values('3','1','0','个人中心','click','','#','3','1');");
E_D("replace into `ecs_wechat_menu` values('4','1','1','商城首页','view','','http://localhost/mobile','1','1');");
E_D("replace into `ecs_wechat_menu` values('5','1','1','最新商品','click','news','','2','1');");
E_D("replace into `ecs_wechat_menu` values('6','1','1','推荐商品','click','best','','3','1');");
E_D("replace into `ecs_wechat_menu` values('7','1','1','热销商品','click','hot','','4','1');");
E_D("replace into `ecs_wechat_menu` values('8','1','2','大转盘','click','dzp','','1','1');");
E_D("replace into `ecs_wechat_menu` values('9','1','2','砸金蛋','click','zjd','','2','1');");
E_D("replace into `ecs_wechat_menu` values('10','1','2','刮刮卡','click','ggk','','3','1');");
E_D("replace into `ecs_wechat_menu` values('11','1','3','会员中心','view','','http://localhost/mobile/?c=user','1','1');");
E_D("replace into `ecs_wechat_menu` values('12','1','3','订单查询','click','ddcx','','2','1');");
E_D("replace into `ecs_wechat_menu` values('13','1','3','积分查询','click','jfcx','','3','1');");
E_D("replace into `ecs_wechat_menu` values('14','1','3','签到送积分','click','sign','','4','1');");

require("../../inc/footer.php");
?>