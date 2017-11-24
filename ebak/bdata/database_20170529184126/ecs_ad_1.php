<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_ad`;");
E_C("CREATE TABLE `ecs_ad` (
  `ad_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `position_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `media_type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ad_name` varchar(60) NOT NULL DEFAULT '',
  `ad_link` varchar(255) NOT NULL DEFAULT '',
  `ad_code` text NOT NULL,
  `start_time` int(11) NOT NULL DEFAULT '0',
  `end_time` int(11) NOT NULL DEFAULT '0',
  `link_man` varchar(60) NOT NULL DEFAULT '',
  `link_email` varchar(60) NOT NULL DEFAULT '',
  `link_phone` varchar(60) NOT NULL DEFAULT '',
  `click_count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `enabled` tinyint(3) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`ad_id`),
  KEY `position_id` (`position_id`),
  KEY `enabled` (`enabled`)
) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_ad` values('11','5','0','大家都喜欢左边广告','#','1437091450567936588.jpg','1437033600','1597478400','','','','0','1');");
E_D("replace into `ecs_ad` values('10','4','0','新品上架左边广告','#','1437081494946827817.jpg','1437033600','1597478400','','','','0','1');");
E_D("replace into `ecs_ad` values('8','3','0','首页轮播下广告2','#','1439235672175247984.jpg','1437033600','1597478400','','','','24','1');");
E_D("replace into `ecs_ad` values('9','3','0','首页轮播下广告3','#','1439235663686851046.jpg','1437033600','1597478400','','','','23','1');");
E_D("replace into `ecs_ad` values('7','3','0','首页轮播下广告1','#','1439235680072464326.jpg','1437033600','1597478400','','','','35','1');");
E_D("replace into `ecs_ad` values('27','11','0','团购页顶部广告1','#','1440453088903649388.jpg','1440403200','1442995200','','','','4','1');");
E_D("replace into `ecs_ad` values('16','8','0','路由器与智能硬件分类下商品左侧广告大','#','1449710786109632841.jpg','1448870400','1820476800','','','','18','1');");
E_D("replace into `ecs_ad` values('17','9','0','插线板、移动电源与电池分类下商品左侧广告小1','#','1439257063359182674.jpg','1439193600','1788940800','','','','4','1');");
E_D("replace into `ecs_ad` values('18','9','0','插线板、移动电源与电池分类下商品左侧广告小2','#','1439257083300448761.jpg','1439193600','1725868800','','','','6','1');");
E_D("replace into `ecs_ad` values('19','9','0','耳机音箱与存储卡分类下商品左侧广告小1','#','1439257211458415529.jpg','1439193600','1599638400','','','','41','1');");
E_D("replace into `ecs_ad` values('20','9','0','耳机音箱与存储卡分类下商品左侧广告小2','#','1439257230078103078.jpg','1439193600','1599638400','','','','1','1');");
E_D("replace into `ecs_ad` values('21','9','0','小米生活方式分类下商品左侧广告小1','#','1439257305251304063.jpg','1439193600','1631174400','','','','2','1');");
E_D("replace into `ecs_ad` values('22','9','0','小米生活方式分类下商品左侧广告小2','#','1439257325691545396.jpg','1439193600','1694246400','','','','1','1');");
E_D("replace into `ecs_ad` values('28','255','0','1','#','http://www.ectouch.cn/data/assets/images/ectouch2_ad1.png','1396339200','1525161600','','','','1','1');");
E_D("replace into `ecs_ad` values('29','255','0','2','#','http://www.ectouch.cn/data/assets/images/ectouch2_ad2.png','1396339200','1525161600','','','','0','1');");
E_D("replace into `ecs_ad` values('30','255','0','3','#','http://www.ectouch.cn/data/assets/images/ectouch2_ad3.png','1396339200','1525161600','','','','0','1');");
E_D("replace into `ecs_ad` values('59','256','0','1','#','1496021738175404618.gif','1396339200','1525161600','','','','0','1');");
E_D("replace into `ecs_ad` values('58','256','0','1','#','1496021368551052491.gif','1396339200','1525161600','','','','0','1');");
E_D("replace into `ecs_ad` values('56','256','0','1','#','1496021341873970854.gif','1396339200','1525161600','','','','0','1');");
E_D("replace into `ecs_ad` values('57','256','0','1','#','1496021319537112254.gif','1396339200','1525161600','','','','0','1');");
E_D("replace into `ecs_ad` values('41','257','0','1','#','555c6c90Ncb4fe515.jpg','1396339200','1525161600','','','','1','1');");
E_D("replace into `ecs_ad` values('42','258','0','1','#','55e5a38fN0b84386b.jpg','1396339200','1525161600','','','','1','1');");
E_D("replace into `ecs_ad` values('43','258','0','1','#','55ffda9bN7c81adbe.jpg','1396339200','1525161600','','','','0','1');");

require("../../inc/footer.php");
?>