<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_order_goods`;");
E_C("CREATE TABLE `ecs_order_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_name` varchar(120) NOT NULL DEFAULT '',
  `goods_sn` varchar(60) NOT NULL DEFAULT '',
  `product_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_number` smallint(5) unsigned NOT NULL DEFAULT '1',
  `market_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `goods_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `goods_attr` text NOT NULL,
  `send_number` smallint(5) unsigned NOT NULL DEFAULT '0',
  `is_real` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `extension_code` varchar(30) NOT NULL DEFAULT '',
  `parent_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `is_gift` smallint(5) unsigned NOT NULL DEFAULT '0',
  `goods_attr_id` varchar(255) NOT NULL DEFAULT '',
  `touch_sale` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `touch_fencheng` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`rec_id`),
  KEY `order_id` (`order_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=112 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_order_goods` values('1','1','6','CHARMZONE婵真美菁红酒二件套装','ECS000006','0','2','261.59','218.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('2','2','27','小米电视2 40英寸','ECS000000','0','1','2398.00','1999.00','','1','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('3','3','43','小蚁蓝牙自拍杆','ECS000043','0','1','154.00','129.00','','1','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('4','4','44','小米移动电源5000mAh','ECS000044','0','1','58.00','49.00','','1','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('5','4','38','小米活塞耳机 炫彩版','ECS000038','0','1','49.00','39.00','','1','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('6','4','42','小米蓝牙手柄','ECS000042','0','1','118.00','99.00','','1','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('7','4','46','小钢炮蓝牙音箱','ECS000046','0','1','154.00','129.00','','1','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('8','5','27','小米电视2 40英寸','ECS000000','0','1','2640.00','2200.00','尺寸:45 \n颜色:黄 \n','0','1','','0','0','37,38','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('9','5','32','小米路由器 mini','ECS000032','0','1','154.00','129.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('10','6','33','小蚁智能摄像机 标准','ECS000033','0','1','154.80','129.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('11','7','31','小米移动电源10000mAh','ECS000031','0','1','94.00','79.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('12','8','32','小米路由器 mini','ECS000032','0','1','154.00','129.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('13','9','42','小米蓝牙手柄','ECS000042','0','1','118.00','99.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('14','10','42','小米蓝牙手柄','ECS000042','0','1','118.00','99.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('15','11','32','小米路由器 mini','ECS000032','0','1','154.00','129.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('16','12','33','小蚁智能摄像机 标准','ECS000033','0','1','154.80','129.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('17','13','44','小米移动电源5000mAh','ECS000044','0','1','58.80','49.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('18','14','32','小米路由器 mini','ECS000032','0','1','154.00','129.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('19','15','46','小钢炮蓝牙音箱','ECS000046','0','1','154.80','129.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('20','16','28','小米平板 16G','ECS000028','0','1','1558.00','1299.00','尺寸:45 \n颜色:灰 \n','0','1','','0','0','35,36','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('21','17','41','小米移动电源16000mAh','ECS000041','0','1','129.00','109.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('22','18','32','小米路由器 mini','ECS000032','0','1','154.00','129.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('23','19','28','小米平板 16G','ECS000028','0','1','1558.00','1299.00','尺寸:45 \n颜色:灰 \n','0','1','','0','0','35,36','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('24','20','28','小米平板 16G','ECS000028','0','1','1558.00','1299.00','尺寸:45 \n颜色:灰 \n','0','1','','0','0','35,36','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('25','21','44','小米移动电源5000mAh','ECS000044','0','1','58.80','49.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('26','22','32','小米路由器 mini','ECS000032','0','1','154.00','129.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('27','23','42','小米蓝牙手柄','ECS000042','0','1','118.00','99.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('28','24','32','小米路由器 mini','ECS000032','0','1','154.00','129.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('29','25','38','小米活塞耳机 炫彩版','ECS000038','0','1','46.80','39.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('30','26','38','小米活塞耳机 炫彩版','ECS000038','0','1','46.80','39.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('31','27','31','小米移动电源10000mAh','ECS000031','0','1','94.00','79.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('32','28','31','小米移动电源10000mAh','ECS000031','0','1','94.00','79.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('33','29','32','小米路由器 mini','ECS000032','0','1','154.00','129.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('34','30','32','小米路由器 mini','ECS000032','0','1','154.00','129.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('35','31','41','小米移动电源16000mAh','ECS000041','0','1','129.00','109.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('36','32','31','小米移动电源10000mAh','ECS000031','0','1','94.00','79.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('37','33','32','小米路由器 mini','ECS000032','0','1','154.00','129.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('38','34','32','小米路由器 mini','ECS000032','0','1','154.00','129.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('39','35','31','小米移动电源10000mAh','ECS000031','0','1','94.00','79.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('40','36','28','小米平板 16G','ECS000028','0','1','1558.00','1299.00','尺寸:45 \n颜色:灰 \n','0','1','','0','0','35,36','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('41','37','45','小米活塞耳机标准版','ECS000045','0','1','106.80','89.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('42','38','31','小米移动电源10000mAh','ECS000031','0','1','94.00','79.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('43','39','46','小钢炮蓝牙音箱','ECS000046','0','1','154.80','129.00','','1','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('44','39','38','小米活塞耳机 炫彩版','ECS000038','0','1','46.80','39.00','','1','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('45','39','28','小米平板 16G','ECS000028','0','1','1558.00','1299.00','尺寸:45 \n颜色:灰 \n','1','1','','0','0','35,36','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('46','40','33','小蚁智能摄像机 标准','ECS000033','0','2','154.80','129.00','','2','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('47','41','47','米兔手机U盘升级版','ECS000047','0','555','59.87','444.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('48','42','58','实木后盖','ECS000058','0','1','82.80','69.00','','1','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('49','42','43','小蚁蓝牙自拍杆','ECS000043','0','1','154.80','129.00','','1','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('50','42','46','小钢炮蓝牙音箱','ECS000046','0','1','154.80','129.00','','1','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('51','43','76','小米盒子mini版','ECS000076','0','1','238.79','199.00','','1','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('52','43','28','小米平板 16G','ECS000028','0','1','1558.00','1299.00','尺寸:45 \n颜色:灰 \n','1','1','','0','0','35,36','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('53','43','29','小米盒子增强版 1G','ECS000029','0','2','358.00','299.00','尺寸:15 \n颜色:黑 \n','2','1','','0','0','33,34','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('54','44','29','小米盒子增强版 1G','ECS000029','0','1','358.00','299.00','尺寸:15 \n颜色:黑 \n','1','1','','0','0','33,34','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('55','45','40','小米体重秤','ECS000040','0','1','118.00','99.00','','1','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('56','46','32','小米路由器 mini','ECS000032','0','3','154.00','129.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('57','47','96','QCY派Q8蓝牙耳机','ECS000096','0','1','71.88','59.90','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('58','48','45','小米活塞耳机标准版','ECS000045','0','1','106.80','89.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('59','49','28','小米平板 16G','ECS000028','0','1','1558.00','1299.00','尺寸:45 \n颜色:灰 \n','0','1','','0','0','35,36','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('60','50','27','小米电视2 40英寸','ECS000000','0','1','2740.00','2300.00','尺寸:45 \n颜色:黄[100] \n','0','1','','0','0','37,38','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('61','51','33','小蚁智能摄像机 标准','ECS000033','0','1','154.80','129.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('62','52','56','小米手机4','ECS000056','0','1','1798.80','1499.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('63','53','38','小米活塞耳机 炫彩版','ECS000038','0','1','156.80','149.00','颜色:丁香紫[10] \n线长:50cm[100] \n','0','1','','0','0','89,92','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('64','54','38','小米活塞耳机 炫彩版','ECS000038','0','1','156.80','149.00','颜色:丁香紫[10] \n线长:50cm[100] \n','0','1','','0','0','89,92','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('65','55','31','小米移动电源10000mAh','ECS000031','0','1','94.00','79.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('66','56','41','小米移动电源16000mAh','ECS000041','0','1','129.00','109.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('67','57','41','小米移动电源16000mAh','ECS000041','0','1','129.00','109.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('68','58','41','小米移动电源16000mAh','ECS000041','0','1','129.00','109.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('69','59','41','小米移动电源16000mAh','ECS000041','0','1','129.00','109.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('70','60','67','小米手环','ECS000067','0','1','82.80','69.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('71','61','27','小米电视2 40英寸','ECS000000','0','1','3040.00','2600.00','尺寸:45 \n颜色:灰[400] \n','0','1','','0','0','37,83','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('72','62','45','小米活塞耳机标准版','ECS000045','0','1','106.80','89.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('73','63','42','小米蓝牙手柄','ECS000042','0','1','118.00','99.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('74','64','45','小米活塞耳机标准版','ECS000045','0','1','106.80','89.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('75','65','40','小米体重秤','ECS000040','0','4','118.00','99.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('76','65','31','小米移动电源10000mAh','ECS000031','0','1','94.00','79.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('77','66','104','课程','ECS000104','0','1','100.00','80.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('78','67','45','小米活塞耳机标准版','ECS000045','0','1','106.80','89.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('79','68','27','小米电视2 40英寸','ECS000000','0','1','2740.00','2300.00','尺寸:45 \n颜色:黄[100] \n','0','1','','0','0','37,38','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('80','68','33','小蚁智能摄像机 标准','ECS000033','0','1','154.80','119.00','','0','1','','27','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('81','69','31','小米移动电源10000mAh','ECS000031','0','1','94.00','79.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('82','70','56','小米手机4','ECS000056','0','1','1798.80','1499.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('83','71','45','小米活塞耳机标准版','ECS000045','0','1','106.80','89.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('84','72','54','小米电视2 55英寸','ECS000054','0','1','5398.80','4499.00','尺寸:58 \n颜色:黄 \n','0','1','','0','0','68,69','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('85','73','43','小蚁蓝牙自拍杆','ECS000043','0','1','154.80','129.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('86','74','45','小米活塞耳机标准版','ECS000045','0','1','106.80','89.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('87','75','29','小米盒子增强版 1G','ECS000029','0','1','358.00','299.00','尺寸:15 \n颜色:黑 \n','0','1','','0','0','33,34','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('88','76','59','小米方盒子蓝牙音箱','ECS000059','0','1','118.80','99.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('89','76','78','红米Note2','ECS000078','0','1','958.80','799.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('90','76','82','红米手机2A','ECS000082','0','1','1078.80','899.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('91','76','81','红米手机2','ECS000081','0','1','718.80','599.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('92','76','79','小米Note顶配版 合约机','ECS000079','0','1','3598.79','2999.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('93','76','56','小米手机4','ECS000056','0','1','1798.80','1499.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('94','77','38','小米活塞耳机 炫彩版','ECS000038','0','1','156.80','149.00','颜色:丁香紫[10] \n线长:50cm[100] \n','0','1','','0','0','89,92','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('95','77','85','清水软胶保护套','ECS000085','0','1','5.88','4.90','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('96','78','28','小米平板 16G','ECS000028','0','1','1558.00','1299.00','尺寸:45 \n颜色:灰 \n','0','1','','0','0','35,36','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('97','79','86','安卓防尘塞','ECS000086','0','1','7.08','5.90','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('98','80','107','34','ECS000107','0','2','0.01','0.01','','2','0','virtual_card','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('99','81','38','小米活塞耳机 炫彩版','ECS000038','0','1','156.80','149.00','颜色:丁香紫[10] \n线长:50cm[100] \n','0','1','','0','0','89,92','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('100','82','46','小钢炮蓝牙音箱','ECS000046','0','1','154.80','129.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('101','83','80','小米NOTE','ECS000080','0','1','2638.79','2199.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('102','84','27','小米电视2 40英寸','ECS000000','0','1','2740.00','2300.00','尺寸:45 \n颜色:黄[100] \n','0','1','','0','0','37,38','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('103','85','88','米兔主题3D保护壳','ECS000088','0','1','46.80','39.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('104','86','40','小米体重秤','ECS000040','0','1','118.00','99.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('105','87','28','小米平板 16G','ECS000028','0','1','1558.00','1299.00','尺寸:45 \n颜色:灰 \n','0','1','','0','0','35,36','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('106','88','53','小米电视2S48英寸','ECS000053','0','1','3598.79','2999.00','尺寸:45 \n颜色:黑 \n','0','1','','0','0','66,67','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('107','89','27','小米电视2 40英寸','ECS000000','0','6','2740.00','2300.00','尺寸:45 \n颜色:黄[100] \n','0','1','','0','0','37,38','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('108','89','80','小米NOTE','ECS000080','0','2','2638.79','2199.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('109','89','31','小米移动电源10000mAh','ECS000031','0','1','94.00','79.00','','0','1','','0','0','','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('110','90','27','小米电视2 40英寸','ECS000000','0','1','2740.00','2300.00','尺寸:45 \n颜色:黄[100] \n','1','1','','0','0','37,38','0.00','0.00');");
E_D("replace into `ecs_order_goods` values('111','91','27','小米电视2 40英寸','ECS000000','0','8','2740.00','2300.00','尺寸:45 \n颜色:黄[100] \n','8','1','','0','0','37,38','0.00','0.00');");

require("../../inc/footer.php");
?>