<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_user_address`;");
E_C("CREATE TABLE `ecs_user_address` (
  `address_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `address_name` varchar(50) NOT NULL DEFAULT '',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `consignee` varchar(60) NOT NULL DEFAULT '',
  `email` varchar(60) NOT NULL DEFAULT '',
  `country` smallint(5) NOT NULL DEFAULT '0',
  `province` smallint(5) NOT NULL DEFAULT '0',
  `city` smallint(5) NOT NULL DEFAULT '0',
  `district` smallint(5) NOT NULL DEFAULT '0',
  `address` varchar(120) NOT NULL DEFAULT '',
  `zipcode` varchar(60) NOT NULL DEFAULT '',
  `tel` varchar(60) NOT NULL DEFAULT '',
  `mobile` varchar(60) NOT NULL DEFAULT '',
  `sign_building` varchar(120) NOT NULL DEFAULT '',
  `best_time` varchar(120) NOT NULL DEFAULT '',
  PRIMARY KEY (`address_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_user_address` values('1','','1','刘先生','ecshop@ecshop.com','1','2','52','502','海兴大厦','','010-25851234','13986765412','','');");
E_D("replace into `ecs_user_address` values('2','','3','叶先生','text@ecshop.com','1','2','52','510','通州区旗舰凯旋小区','','13588104710','','','');");
E_D("replace into `ecs_user_address` values('3','','6','q111','admin123@qq.com','1','4','55','540','22','','333','','','');");
E_D("replace into `ecs_user_address` values('4','','8','111','444@qq.com','1','7','102','907','22','','333','','','');");
E_D("replace into `ecs_user_address` values('5','','6','11','222@qq.com','1','6','81','754','333','44','55','','','');");
E_D("replace into `ecs_user_address` values('6','','16','dsdad','497110669@qq.com','1','3','36','400','dsdadsadad','3213','13444442222','13444442222','','');");
E_D("replace into `ecs_user_address` values('7','','2','小明','vip@ecshop.com','1','3','38','417','上海市普陀区金沙江路','','18655564452','','','');");
E_D("replace into `ecs_user_address` values('8','','18','杨石头','stone@163.com','1','2','52','504','北京东燕郊东贸国际写字楼','1000000','01012548875','01012548875','','');");
E_D("replace into `ecs_user_address` values('9','','17','111111','111@qq.com','1','2','52','501','22222','','131','','','');");
E_D("replace into `ecs_user_address` values('10','','20','易伟','106626230@qq.com','1','14','209','1757','湖南省岳阳新桥镇','404111','18399939022','18399939022','','');");
E_D("replace into `ecs_user_address` values('11','','24','111111','33333@sina.cn','1','2','52','500','22222','','1311111111','','','');");
E_D("replace into `ecs_user_address` values('12','','26','张三','aadf@asdf.com','1','2','52','500','详细地址详细地址','','010-12345678','','','');");
E_D("replace into `ecs_user_address` values('13','','28','徐生','color168@qq.com','1','6','76','695','白云区','','18602050798','','','');");
E_D("replace into `ecs_user_address` values('14','','29','1232131','123@qq.com','1','2','52','501','123123123','1231231','1232123123','','','');");
E_D("replace into `ecs_user_address` values('15','','33','parker','warsong123@126.com','1','2','52','501','aaaabddsbaalcs','','0101234567','','','');");
E_D("replace into `ecs_user_address` values('16','','35','zhengjun','941641666@qq.com','1','2','52','503','bj','','198465465','','','');");
E_D("replace into `ecs_user_address` values('17','','36','订单','123123@qq.com','1','2','52','500','地对地导弹','','122121212','','','');");
E_D("replace into `ecs_user_address` values('18','','37','dsadsad','hjkhkj@Hjk.com','1','2','52','500','dsadsadsa','','23121321','','','');");
E_D("replace into `ecs_user_address` values('19','','38','陈先生','cys468@163.com','1','2','52','500','沃尔玛附近','323221','13423224345','13423224345','','');");
E_D("replace into `ecs_user_address` values('20','','39','军营东路','77610822@qq.com','1','16','224','1887','军营东路57号','','13195652356','','','');");
E_D("replace into `ecs_user_address` values('21','','40','123123123','569161548@qq.com','1','4','54','531','1231231','','1213123123123123','','','');");
E_D("replace into `ecs_user_address` values('22','','41','等我','wj123@126.com','1','2','52','503','搜房网','314000','13589563335','13589563335','二哥','');");
E_D("replace into `ecs_user_address` values('23','','43','karlew','642190311@qq.com','1','6','76','695','黄边南路47号永力商贸楼A栋A区4楼','','13428281958','','','');");
E_D("replace into `ecs_user_address` values('24','','44','sdfsdf','wsdfsdf@qq.net','1','4','59','580','sdfsdfs','','132222323233','','','');");
E_D("replace into `ecs_user_address` values('25','','45','test','test@sina.com','1','2','52','501','testtesttest','','1388888888','','','');");
E_D("replace into `ecs_user_address` values('26','','46','123123','flfadwl@akli.cn','1','4','53','520','123123','123123','123123213','','','');");
E_D("replace into `ecs_user_address` values('27','','47','cq','cqlq@cqlq.com.cn','1','32','394','3339','cq','111111','222','2222','22','222');");
E_D("replace into `ecs_user_address` values('28','','48','dsadasdasdsa','dadq@qq.com','1','2','52','503','dasdsadasdsad','','151681862216','','','');");
E_D("replace into `ecs_user_address` values('29','','50','mm','xiaodama2014@163.com','1','4','54','533','nnkhjhjkhkhkjhkhkhk','','18742211144','','','');");
E_D("replace into `ecs_user_address` values('30','','51','乐言','','1','2','52','500','就是这个地址…','','','15665828993','','');");

require("../../inc/footer.php");
?>