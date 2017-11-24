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
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_admin_log` values('1','1456946613','14','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2','1456980885','14','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('3','1457037542','14','添加会员账号: aaa','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('4','1457205697','14','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('5','1457205705','14','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('6','1457259137','14','编辑权限管理: admin','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('7','1481512316','14','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('8','1495244360','14','回收商品: 3','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('9','1496017163','14','删除广告: ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('10','1496017178','14','删除广告: ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('11','1496017190','14','删除广告: ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('12','1496021319','14','编辑广告: 1','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('13','1496021341','14','编辑广告: 1','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('14','1496021368','14','编辑广告: 1','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('15','1496021386','14','编辑广告: 1','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('16','1496021498','14','编辑广告: 1','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('17','1496021670','14','删除广告: ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('18','1496021738','14','编辑广告: 1','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('19','1496022236','14','编辑广告: 1','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('20','1496022957','14','删除广告: ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('21','1496023736','14','删除广告: ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('22','1496023752','14','删除广告: ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('23','1496023969','14','删除广告: ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('24','1496023998','14','删除广告: ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('25','1496024002','14','删除广告: ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('26','1496024011','14','删除广告: ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('27','1496024036','14','删除广告位置: ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('28','1496024696','14','删除广告: ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('29','1496024705','14','删除广告: ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('30','1496024706','14','删除广告: ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('31','1496024707','14','删除广告: ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('32','1496024714','14','删除广告: ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('33','1496024715','14','删除广告: ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('34','1496024716','14','删除广告: ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('35','1496024719','14','删除广告: ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('36','1496024720','14','删除广告: ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('37','1496024722','14','删除广告: ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('38','1496024739','14','删除广告: ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('39','1496024746','14','删除广告位置: ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('40','1496024751','14','删除广告: ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('41','1496024755','14','删除广告位置: ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('42','1496024760','14','删除广告: ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('43','1496024767','14','删除广告位置: ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('44','1496024773','14','删除广告: ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('45','1496024779','14','删除广告: ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('46','1496024783','14','删除广告位置: ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('47','1496024787','14','删除广告: ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('48','1496024792','14','删除广告: ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('49','1496024795','14','删除广告位置: ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('50','1496024799','14','删除广告: ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('51','1496024802','14','删除广告位置: ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('52','1496024856','14','删除广告: ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('53','1496024857','14','删除广告: ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('54','1496024859','14','删除广告: ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('55','1496024869','14','删除广告位置: ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('56','1496025162','14','批量删除会员账号: 111111,stone,jadranka,yiwei,a123456,ceshi,222222,333333,aaaaaa,aabbcc,46480504,123456a,haode,haode1,ceshi123,12345,abc098,ceshi22,zhengjun,123123,twldl,www,shinehua,tengwang123,wj123456,012363,karlew,wccw,test,leen,xiaoqiao,cesuo111,testabc,xiao','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('57','1496025206','14','批量删除商品: ','0.0.0.0');");

require("../../inc/footer.php");
?>