<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods`;");
E_C("CREATE TABLE `ecs_goods` (
  `goods_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `cat_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `goods_sn` varchar(60) NOT NULL DEFAULT '',
  `goods_name` varchar(120) NOT NULL DEFAULT '',
  `goods_name_style` varchar(60) NOT NULL DEFAULT '+',
  `click_count` int(10) unsigned NOT NULL DEFAULT '0',
  `brand_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `provider_name` varchar(100) NOT NULL DEFAULT '',
  `goods_number` smallint(5) unsigned NOT NULL DEFAULT '0',
  `goods_weight` decimal(10,3) unsigned NOT NULL DEFAULT '0.000',
  `market_price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `shop_price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `promote_price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `promote_start_date` int(11) unsigned NOT NULL DEFAULT '0',
  `promote_end_date` int(11) unsigned NOT NULL DEFAULT '0',
  `warn_number` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `goods_brief` varchar(255) NOT NULL DEFAULT '',
  `goods_desc` text NOT NULL,
  `goods_thumb` varchar(255) NOT NULL DEFAULT '',
  `goods_img` varchar(255) NOT NULL DEFAULT '',
  `original_img` varchar(255) NOT NULL DEFAULT '',
  `is_real` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `extension_code` varchar(30) NOT NULL DEFAULT '',
  `is_on_sale` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `is_alone_sale` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `is_shipping` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `integral` int(10) unsigned NOT NULL DEFAULT '0',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `sort_order` smallint(4) unsigned NOT NULL DEFAULT '100',
  `is_delete` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_best` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_new` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_hot` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_promote` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `bonus_type_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `last_update` int(10) unsigned NOT NULL DEFAULT '0',
  `goods_type` smallint(5) unsigned NOT NULL DEFAULT '0',
  `seller_note` varchar(255) NOT NULL DEFAULT '',
  `give_integral` int(11) NOT NULL DEFAULT '-1',
  `rank_integral` int(11) NOT NULL DEFAULT '-1',
  `suppliers_id` smallint(5) unsigned DEFAULT NULL,
  `is_check` tinyint(1) unsigned DEFAULT NULL,
  `sales_volume` int(10) unsigned NOT NULL DEFAULT '0',
  `comments_number` int(10) unsigned NOT NULL DEFAULT '0',
  `packing_list` text NOT NULL,
  `customer_service` text NOT NULL,
  `touch_sale` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `touch_fencheng` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `virtual_sales` tinyint(4) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`goods_id`),
  KEY `goods_sn` (`goods_sn`),
  KEY `cat_id` (`cat_id`),
  KEY `last_update` (`last_update`),
  KEY `brand_id` (`brand_id`),
  KEY `goods_weight` (`goods_weight`),
  KEY `promote_end_date` (`promote_end_date`),
  KEY `promote_start_date` (`promote_start_date`),
  KEY `goods_number` (`goods_number`),
  KEY `sort_order` (`sort_order`),
  KEY `sales_volume` (`sales_volume`)
) ENGINE=MyISAM AUTO_INCREMENT=109 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods` values('46','106','ECS000046','小钢炮蓝牙音箱','+','206','0','','9997','0.000','154.80','129.00','0.00','0','0','1','','','','images/201507/thumb_img/46_thumb_G_1437092278369.jpg','images/201507/goods_img/46_G_1437092278300.jpg','images/201507/source_img/46_G_1437092278839.jpg','1','','1','1','0','1','1437092278','4','0','0','0','1','0','0','1439938394','0','','-1','-1','0','0','3','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('44','95','ECS000044','小米移动电源5000mAh','+','131','0','','9999','0.000','58.80','49.00','0.00','0','0','1','','','','images/201507/thumb_img/44_thumb_G_1437092148601.jpg','images/201507/goods_img/44_G_1437092148551.jpg','images/201507/source_img/44_G_1437092148573.jpg','1','','1','1','0','0','1437092148','2','0','0','0','1','0','0','1439313623','0','','-1','-1','0','0','1','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('45','103','ECS000045','小米活塞耳机标准版','+','265','0','','10000','0.000','106.80','89.00','0.00','0','0','1','','','','images/201507/thumb_img/45_thumb_G_1437092199733.jpg','images/201507/goods_img/45_G_1437092199617.jpg','images/201507/source_img/45_G_1437092199141.jpg','1','','1','1','0','0','1437092199','3','0','1','0','1','0','0','1439938396','0','','-1','-1','0','0','0','4','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('27','77','ECS000000','小米电视2 40英寸','+','642','0','','9999','0.000','2640.00','2200.00','1200.00','1439884800','1439971200','1','','40/49/55英寸 现货购买','<p><img width=\"720\" height=\"598\" alt=\"\" src=\"/xiaomi2015273/images/upload/Image/20150818160807.png\" /></p>\r\n<p><img width=\"720\" height=\"508\" alt=\"\" src=\"/xiaomi2015273/images/upload/Image/20150818160858.png\" /></p>\r\n<p><img width=\"720\" height=\"572\" alt=\"\" src=\"/xiaomi2015273/images/upload/Image/20150818160916.png\" /></p>\r\n<p><img src=\"/xiaomi2015273/images/upload/Image/er08150123.png\" width=\"1351\" height=\"762\" alt=\"\" /></p>\r\n<p><img src=\"/xiaomi2015273/images/upload/Image/ger908150140.png\" width=\"1138\" height=\"867\" alt=\"\" /></p>','images/201507/thumb_img/27_thumb_G_1437074702008.jpg','images/201507/goods_img/27_G_1437074702381.jpg','images/201507/source_img/27_G_1437074702064.jpg','1','','1','1','0','22','1437074010','1','0','1','0','1','1','0','1441843861','3','','-1','-1','0','0','1','7','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('28','79','ECS000028','小米平板 16G','+','169','0','','9998','0.000','1558.00','1299.00','0.00','0','0','1','','全球首款搭载 NVIDIA Tegra K1 处理器平板','','images/201507/thumb_img/28_thumb_G_1437074792369.jpg','images/201507/goods_img/28_G_1437074792652.jpg','images/201507/source_img/28_G_1437074792489.jpg','1','','1','1','0','12','1437074792','2','0','0','0','1','0','0','1439830263','3','','-1','-1','0','0','2','1','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('29','78','ECS000029','小米盒子增强版 1G','+','71','0','','9997','0.000','358.00','299.00','0.00','0','0','1','','首款4K超高清网络机顶盒','','images/201507/thumb_img/29_thumb_G_1437074933275.jpg','images/201507/goods_img/29_G_1437074933512.jpg','images/201507/source_img/29_G_1437074933166.jpg','1','','1','1','0','2','1437074933','3','0','0','0','1','0','0','1441498116','3','','-1','-1','0','0','3','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('30','102','ECS000030','小米头戴式耳机','+','222','0','','10000','0.000','598.00','499.00','0.00','0','0','1','','50mm大尺寸航天金属振膜','<p><img src=\"/xiaomi2015273/images/upload/Image/af71a35721.png\" width=\"1040\" height=\"813\" alt=\"\" /></p>\r\n<p><img src=\"/xiaomi2015273/images/upload/Image/agx0536.png\" alt=\"\" /></p>\r\n<p><img src=\"/xiaomi2015273/images/upload/Image/he08110501.png\" width=\"913\" height=\"779\" alt=\"\" /></p>\r\n<p><img src=\"/xiaomi2015273/images/upload/Image/mhyte110940.png\" width=\"854\" height=\"836\" alt=\"\" /></p>','images/201507/thumb_img/30_thumb_G_1437075007558.jpg','images/201507/goods_img/30_G_1437075007745.jpg','images/201507/source_img/30_G_1437075007203.jpg','1','','1','1','0','4','1437075007','10000','0','1','1','1','0','0','1441672328','4','','-1','-1','0','0','0','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('31','95','ECS000031','小米移动电源10000mAh','+','107','0','','10000','0.000','94.00','79.00','0.00','0','0','1','','松下/LG高密度进口电芯','','images/201507/thumb_img/31_thumb_G_1437075539254.jpg','images/201507/goods_img/31_G_1437075539651.jpg','images/201507/source_img/31_G_1437075539605.jpg','1','','1','1','0','0','1437075539','5','0','1','0','0','0','0','1439171255','0','','-1','-1','0','0','0','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('32','82','ECS000032','小米路由器 mini','+','98','0','','10000','0.000','154.00','129.00','0.00','0','0','1','','主流双频AC智能路由器，性价比之王','','images/201507/thumb_img/32_thumb_G_1437075765802.jpg','images/201507/goods_img/32_G_1437075765689.jpg','images/201507/source_img/32_G_1437075765600.jpg','1','','1','1','0','1','1437075765','6','0','1','0','1','0','0','1439313614','0','','-1','-1','0','0','0','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('33','86','ECS000033','小蚁智能摄像机 标准','+','69','0','','9998','0.000','154.80','129.00','0.00','0','0','1','','能看能听能说，手机远程观看','','images/201507/thumb_img/33_thumb_G_1437075865379.jpg','images/201507/goods_img/33_G_1437075865949.jpg','images/201507/source_img/33_G_1437075865463.jpg','1','','1','1','0','1','1437075865','7','0','1','0','1','0','0','1439313614','0','','-1','-1','0','0','2','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('34','85','ECS000034','小蚁运动相机','+','44','0','','10000','0.000','478.00','399.00','0.00','0','0','1','','边玩边录边拍，手机随时分享','','images/201507/thumb_img/34_thumb_G_1437076036973.jpg','images/201507/goods_img/34_G_1437076036835.jpg','images/201507/source_img/34_G_1437076036893.jpg','1','','1','1','0','3','1437076036','8','0','1','0','1','0','0','1439313615','0','','-1','-1','0','0','0','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('35','84','ECS000035','小米空气净化器','+','73','0','','10000','0.000','1078.80','899.00','0.00','0','0','1','','','','images/201507/thumb_img/35_thumb_G_1437081702649.jpg','images/201507/goods_img/35_G_1437081702302.jpg','images/201507/source_img/35_G_1437081702860.jpg','1','','1','1','0','8','1437081702','1','0','0','1','1','0','0','1439313797','0','','-1','-1','0','0','0','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('36','87','ECS000036','iHealth智能血压计','+','15','0','','10000','0.000','238.00','199.00','0.00','0','0','1','','','','images/201507/thumb_img/36_thumb_G_1437082145888.jpg','images/201507/goods_img/36_G_1437082145677.jpg','images/201507/source_img/36_G_1437082145811.jpg','1','','1','1','0','1','1437082145','2','0','0','1','0','0','0','1439313706','0','','-1','-1','0','0','0','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('37','88','ECS000037','小米智能插座','+','23','0','','10000','0.000','94.00','79.00','0.00','0','0','1','','','','images/201507/thumb_img/37_thumb_G_1437082214575.jpg','images/201507/goods_img/37_G_1437082214887.jpg','images/201507/source_img/37_G_1437082214044.jpg','1','','1','1','0','0','1437082214','3','0','0','1','0','0','0','1439313617','0','','-1','-1','0','0','0','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('38','103','ECS000038','小米活塞耳机 炫彩版','+','240','0','','9998','0.000','46.80','39.00','0.00','0','0','1','','适合出街的耳机','<p><img width=\"1226\" height=\"691\" alt=\"\" src=\"/xiaomi2015273/images/upload/Image/xhsejxcb_01x.jpg\" /></p>\r\n<p><img width=\"1226\" height=\"692\" alt=\"\" src=\"/xiaomi2015273/images/upload/Image/xhsejxcb_05.jpg\" /></p>\r\n<p><img width=\"1226\" height=\"692\" alt=\"\" src=\"/xiaomi2015273/images/upload/Image/xhsejxcb_11.jpg\" /></p>\r\n<p><img width=\"1226\" height=\"692\" alt=\"\" src=\"/xiaomi2015273/images/upload/Image/xhsejxcb_13.jpg\" /></p>\r\n<p><img width=\"1226\" height=\"692\" alt=\"\" src=\"/xiaomi2015273/images/upload/Image/xhsejxcb_23.jpg\" /></p>\r\n<p><img width=\"1226\" height=\"692\" alt=\"\" src=\"/xiaomi2015273/images/upload/Image/xhsejxcb_37.jpg\" /></p>','images/201507/thumb_img/38_thumb_G_1437082667838.jpg','images/201507/goods_img/38_G_1437082667243.jpg','images/201507/source_img/38_G_1437082667365.jpg','1','','1','1','0','0','1437082667','1','0','0','1','1','0','0','1442180645','4','','-1','-1','0','0','2','7','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('39','123','ECS000039','小米水质TDS检测笔','+','32','0','','10000','0.000','46.80','39.00','0.00','0','0','1','','','','images/201507/thumb_img/39_thumb_G_1437082747983.jpg','images/201507/goods_img/39_G_1437082747038.jpg','images/201507/source_img/39_G_1437082747160.jpg','1','','1','1','0','0','1437082747','5','0','0','1','1','0','0','1439313619','0','','-1','-1','0','0','0','3','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('40','90','ECS000040','小米体重秤','+','76','0','','9999','0.000','118.00','99.00','0.00','0','0','1','','','','images/201507/thumb_img/40_thumb_G_1437082798686.jpg','images/201507/goods_img/40_G_1437082798286.jpg','images/201507/source_img/40_G_1437082798429.jpg','1','','1','1','0','0','1437082798','6','0','1','1','1','0','0','1439313620','0','','-1','-1','0','0','1','1','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('41','95','ECS000041','小米移动电源16000mAh','+','51','0','','10000','0.000','129.00','109.00','0.00','0','0','1','','','','images/201507/thumb_img/41_thumb_G_1437082849514.jpg','images/201507/goods_img/41_G_1437082849066.jpg','images/201507/source_img/41_G_1437082849886.jpg','1','','1','1','0','1','1437082849','7','0','1','1','0','0','0','1439313620','0','','-1','-1','0','0','0','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('42','93','ECS000042','小米蓝牙手柄','+','94','0','','9999','0.000','118.00','99.00','0.00','0','0','1','','','','images/201507/thumb_img/42_thumb_G_1437082936092.jpg','images/201507/goods_img/42_G_1437082936414.jpg','images/201507/source_img/42_G_1437082936458.jpg','1','','1','1','0','0','1437082936','8','0','1','1','0','0','0','1439313622','0','','-1','-1','0','0','1','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('43','123','ECS000043','小蚁蓝牙自拍杆','+','39','0','','9998','0.000','154.80','129.00','0.00','0','0','1','','','','images/201507/thumb_img/43_thumb_G_1437091900155.jpg','images/201507/goods_img/43_G_1437091900518.jpg','images/201507/source_img/43_G_1437091900408.jpg','1','','1','1','0','1','1437091900','1','0','0','0','1','0','0','1439313622','0','','-1','-1','0','0','2','2','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('47','107','ECS000047','米兔手机U盘升级版','+','115','0','','10000','0.000','59.87','49.90','0.00','0','0','1','','','','images/201508/thumb_img/47_thumb_G_1439331077002.jpg','images/201508/goods_img/47_G_1439331077204.jpg','images/201508/source_img/47_G_1439331077155.jpg','1','','1','1','0','0','1439331077','100','0','0','0','0','0','0','1439938394','0','','-1','-1','0','0','0','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('53','124','ECS000053','小米电视2S48英寸','+','49','62','','10000','0.000','3598.79','2999.00','0.00','0','0','1','','','','images/201508/thumb_img/53_thumb_G_1439511514539.jpg','images/201508/goods_img/53_G_1439511514043.jpg','images/201508/source_img/53_G_1439511514552.jpg','1','','1','1','0','29','1439511514','100','0','0','0','1','0','0','1441498131','3','','-1','-1','0','0','0','2','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('54','76','ECS000054','小米电视2 55英寸','+','62','54','','10000','0.000','5398.80','4499.00','0.00','0','0','1','','','','images/201508/thumb_img/54_thumb_G_1439511600535.jpg','images/201508/goods_img/54_G_1439511600015.jpg','images/201508/source_img/54_G_1439511600707.jpg','1','','1','1','0','44','1439511600','100','0','0','0','1','0','0','1441498095','3','','-1','-1','0','0','0','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('55','76','ECS000055','小米平板 64GB','+','51','0','','10000','0.000','1798.80','1499.00','0.00','0','0','1','','','','images/201508/thumb_img/55_thumb_G_1439511725721.jpg','images/201508/goods_img/55_G_1439511725534.jpg','images/201508/source_img/55_G_1439511725197.jpg','1','','1','1','0','14','1439511725','100','0','0','0','1','0','0','1441498056','3','','-1','-1','0','0','0','12','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('77','125','ECS000077','小米电视/盒子遥控器','+','14','0','','10000','0.000','34.80','29.00','0.00','0','0','1','','','','images/201508/thumb_img/77_thumb_G_1440984390480.jpg','images/201508/goods_img/77_G_1440984390774.jpg','images/201508/source_img/77_G_1440984390578.png','1','','1','1','0','0','1440984390','100','0','0','0','1','0','0','1441052227','0','','-1','-1','0','0','0','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('78','73','ECS000078','红米Note2','+','40','0','','10000','0.000','958.80','799.00','0.00','0','0','1','','千元旗舰，青春优选','','images/201509/thumb_img/78_thumb_G_1441050387337.jpg','images/201509/goods_img/78_G_1441050387752.jpg','images/201509/source_img/78_G_1441050387167.png','1','','1','1','0','7','1441050387','100','0','0','0','0','0','0','1441050387','0','','-1','-1','0','0','0','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('56','71','ECS000056','小米手机4','+','101','0','','10000','0.000','1798.80','1499.00','0.00','0','0','1','','','<p><img src=\"/xiaomi2015273/images/upload/Image/1235.png\" width=\"1015\" height=\"941\" alt=\"\" /></p>','images/201508/thumb_img/56_thumb_G_1440717641715.jpg','images/201508/goods_img/56_G_1440717641435.jpg','images/201508/source_img/56_G_1440717640337.png','1','','1','1','0','14','1440717640','100','0','0','0','0','0','0','1440717776','0','','-1','-1','0','0','0','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('57','109','ECS000057','清水软胶保护套','+','41','0','','10000','0.000','5.88','4.90','0.00','0','0','1','','','','images/201508/thumb_img/57_thumb_G_1440717888680.jpg','images/201508/goods_img/57_G_1440717888357.jpg','images/201508/source_img/57_G_1440717888107.jpg','1','','1','1','0','0','1440717888','100','0','0','0','0','0','0','1440717953','0','','-1','-1','0','0','0','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('58','114','ECS000058','实木后盖','+','15','0','','9999','0.000','82.80','69.00','0.00','0','0','1','','','<p><img width=\"1240\" height=\"700\" alt=\"\" src=\"/xiaomi2015273/images/upload/Image/manguzhutoutu.jpg\" /></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><img width=\"1240\" height=\"700\" alt=\"\" src=\"/xiaomi2015273/images/upload/Image/manguzhu_03.jpg\" /></p>','images/201508/thumb_img/58_thumb_G_1440725448948.jpg','images/201508/goods_img/58_G_1440725448654.jpg','images/201508/source_img/58_G_1440725448687.jpg','1','','1','1','0','0','1440725448','100','0','0','0','0','0','0','1440725512','0','','-1','-1','0','0','1','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('59','106','ECS000059','小米方盒子蓝牙音箱','+','22','0','','10000','0.000','118.80','99.00','0.00','0','0','1','','','','images/201508/thumb_img/59_thumb_G_1440983020324.jpg','images/201508/goods_img/59_G_1440983020503.jpg','images/201508/source_img/59_G_1440983020268.jpg','1','','1','1','0','0','1440983020','100','0','0','0','1','0','0','1440983126','0','','-1','-1','0','0','0','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('60','106','ECS000060','先锋APS-BA202蓝牙音箱','+','30','0','','10000','0.000','274.80','229.00','0.00','0','0','1','','','','images/201508/thumb_img/60_thumb_G_1440983103483.jpg','images/201508/goods_img/60_G_1440983103289.jpg','images/201508/source_img/60_G_1440983103358.jpg','1','','1','1','0','2','1440983049','100','0','0','0','1','0','0','1440983125','0','','-1','-1','0','0','0','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('61','106','ECS000061','Jam Blast蓝牙音箱','+','13','0','','10000','0.000','358.80','299.00','0.00','0','0','1','','','','images/201508/thumb_img/61_thumb_G_1440983075965.jpg','images/201508/goods_img/61_G_1440983075775.jpg','images/201508/source_img/61_G_1440983075461.jpg','1','','1','1','0','2','1440983075','100','0','0','0','1','0','0','1440983124','0','','-1','-1','0','0','0','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('62','105','ECS000062','1MORE金澈耳机','+','19','0','','10000','0.000','118.80','99.00','0.00','0','0','1','','','','images/201508/thumb_img/62_thumb_G_1440983163158.jpg','images/201508/goods_img/62_G_1440983163401.jpg','images/201508/source_img/62_G_1440983163343.jpg','1','','1','1','0','0','1440983163','100','0','0','0','0','0','0','1440983163','0','','-1','-1','0','0','0','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('63','105','ECS000063','Skullcandy Jib耳机','+','12','0','','10000','0.000','118.80','99.00','0.00','0','0','1','','','','images/201508/thumb_img/63_thumb_G_1440983188625.jpg','images/201508/goods_img/63_G_1440983188968.jpg','images/201508/source_img/63_G_1440983188774.jpg','1','','1','1','0','0','1440983188','100','0','0','0','0','0','0','1440983188','0','','-1','-1','0','0','0','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('64','105','ECS000064','魔声Beats Studio HD 2.0耳机','+','38','0','','10000','0.000','3238.79','2699.00','0.00','0','0','1','','适用于 小米平板, 所有小米手机','','images/201508/thumb_img/64_thumb_G_1440983246324.jpg','images/201508/goods_img/64_G_1440983246833.jpg','images/201508/source_img/64_G_1440983246755.jpg','1','','1','1','0','26','1440983246','100','0','0','0','1','0','0','1440983246','0','','-1','-1','0','0','0','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('65','81','ECS000065','全新小米路由器','+','30','0','','10000','0.000','838.80','699.00','0.00','0','0','1','','顶配企业级性能，最高内置6TB监控级硬盘','','images/201508/thumb_img/65_thumb_G_1440983430401.jpg','images/201508/goods_img/65_G_1440983430591.jpg','images/201508/source_img/65_G_1440983430781.png','1','','1','1','0','6','1440983430','100','0','0','0','1','0','0','1440983551','0','','-1','-1','0','0','0','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('66','92','ECS000066','小米随身WiFi U盘版本','+','11','0','','10000','0.000','59.87','49.90','0.00','0','0','1','','','','images/201508/thumb_img/66_thumb_G_1440983490045.jpg','images/201508/goods_img/66_G_1440983490432.jpg','images/201508/source_img/66_G_1440983490982.png','1','','1','1','0','0','1440983490','100','0','0','0','1','0','0','1440983551','0','','-1','-1','0','0','0','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('67','83','ECS000067','小米手环','+','44','0','','10000','0.000','82.80','69.00','0.00','0','0','1','','','','images/201508/thumb_img/67_thumb_G_1440983638116.jpg','images/201508/goods_img/67_G_1440983638287.jpg','images/201508/source_img/67_G_1440983638037.png','1','','1','1','0','0','1440983638','100','0','0','0','1','0','0','1440983646','0','','-1','-1','0','0','0','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('68','100','ECS000068','多彩便携USB线20CM','+','21','0','','10000','0.000','22.80','19.00','0.00','0','0','1','','','','images/201508/thumb_img/68_thumb_G_1440983695997.jpg','images/201508/goods_img/68_G_1440983695646.jpg','images/201508/source_img/68_G_1440983695262.jpg','1','','1','1','0','0','1440983695','100','0','0','0','1','0','0','1440983756','0','','-1','-1','0','0','0','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('69','100','ECS000069','小米千兆网线','+','29','0','','10000','0.000','17.88','14.90','0.00','0','0','1','','','','images/201508/thumb_img/69_thumb_G_1440983751530.jpg','images/201508/goods_img/69_G_1440983751111.jpg','images/201508/source_img/69_G_1440983751678.jpg','1','','1','1','0','0','1440983751','100','0','0','0','1','0','0','1440983756','0','','-1','-1','0','0','0','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('70','98','ECS000070','红米2/2A原装电池','+','18','0','','10000','0.000','58.80','49.00','0.00','0','0','1','','','','images/201508/thumb_img/70_thumb_G_1440983810214.jpg','images/201508/goods_img/70_G_1440983810229.jpg','images/201508/source_img/70_G_1440983810482.jpg','1','','1','1','0','0','1440983810','100','0','0','0','0','0','0','1440983810','0','','-1','-1','0','0','0','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('71','98','ECS000071','红米Note电池','+','29','0','','10000','0.000','58.80','49.00','0.00','0','0','1','','','','images/201508/thumb_img/71_thumb_G_1440983839269.jpg','images/201508/goods_img/71_G_1440983839789.jpg','images/201508/source_img/71_G_1440983839316.jpg','1','','1','1','0','0','1440983839','100','0','0','0','1','0','0','1440983965','0','','-1','-1','0','0','0','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('72','98','ECS000072','红米note 2原装电池','+','29','0','','10000','0.000','58.80','49.00','0.00','0','0','1','','','','images/201508/thumb_img/72_thumb_G_1440983887661.jpg','images/201508/goods_img/72_G_1440983887203.jpg','images/201508/source_img/72_G_1440983887349.jpg','1','','1','1','0','0','1440983887','100','0','0','0','1','0','0','1440983962','0','','-1','-1','0','0','0','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('73','97','ECS000073','刀锋移动电源','+','25','0','','10000','0.000','358.80','299.00','0.00','0','0','1','','','','images/201508/thumb_img/73_thumb_G_1440983937959.jpg','images/201508/goods_img/73_G_1440983937768.jpg','images/201508/source_img/73_G_1440983937124.jpg','1','','1','1','0','2','1440983937','100','0','0','0','1','0','0','1440983962','0','','-1','-1','0','0','0','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('74','97','ECS000074','萨摩小狗移动电源','+','45','0','','10000','0.000','153.60','128.00','0.00','0','0','1','','','','images/201508/thumb_img/74_thumb_G_1440983959230.jpg','images/201508/goods_img/74_G_1440983959272.jpg','images/201508/source_img/74_G_1440983959160.jpg','1','','1','1','0','1','1440983959','100','0','0','0','1','0','0','1440983961','0','','-1','-1','0','0','0','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('75','97','ECS000075','多彩电源适配器','+','17','0','','10000','0.000','23.88','19.90','0.00','0','0','1','','','','images/201508/thumb_img/75_thumb_G_1440984011595.jpg','images/201508/goods_img/75_G_1440984011527.jpg','images/201508/source_img/75_G_1440984011675.jpg','1','','1','1','0','0','1440984011','100','0','0','0','0','0','0','1445300804','0','','-1','-1','0','0','0','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('76','126','ECS000076','小米盒子mini版','+','32','0','','9999','0.000','238.79','199.00','0.00','0','0','1','','','','images/201508/thumb_img/76_thumb_G_1440984280864.jpg','images/201508/goods_img/76_G_1440984280941.jpg','images/201508/source_img/76_G_1440984280163.png','1','','1','1','0','1','1440984280','100','0','0','0','1','0','0','1441052219','0','','-1','-1','0','0','1','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('79','74','ECS000079','小米Note顶配版 合约机','+','40','0','','10000','0.000','3598.79','2999.00','0.00','0','0','1','','','','images/201509/thumb_img/79_thumb_G_1441050485953.jpg','images/201509/goods_img/79_G_1441050485186.jpg','images/201509/source_img/79_G_1441050485988.png','1','','1','1','0','29','1441050485','100','0','0','0','0','0','0','1441050485','0','','-1','-1','0','0','0','1','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('80','70','ECS000080','小米NOTE','+','105','0','','10000','0.000','2638.79','2199.00','0.00','0','0','1','','','','images/201509/thumb_img/80_thumb_G_1441050558701.jpg','images/201509/goods_img/80_G_1441050558071.jpg','images/201509/source_img/80_G_1441050558342.png','1','','1','1','0','21','1441050558','100','0','0','0','0','0','0','1441050558','0','','-1','-1','0','0','0','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('81','72','ECS000081','红米手机2','+','25','0','','10000','0.000','718.80','599.00','0.00','0','0','1','','','','images/201509/thumb_img/81_thumb_G_1441050609661.jpg','images/201509/goods_img/81_G_1441050609705.jpg','images/201509/source_img/81_G_1441050609492.png','1','','1','1','0','5','1441050609','100','0','0','0','0','0','0','1441050609','0','','-1','-1','0','0','0','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('82','75','ECS000082','红米手机2A','+','35','0','','10000','0.000','1078.80','899.00','0.00','0','0','1','','','','images/201509/thumb_img/82_thumb_G_1441050801926.jpg','images/201509/goods_img/82_G_1441050801693.jpg','images/201509/source_img/82_G_1441050801052.jpg','1','','1','1','0','8','1441050801','100','0','0','0','0','0','0','1441050801','0','','-1','-1','0','0','0','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('83','104','ECS000083','小米蓝牙耳机','+','28','62','','10000','0.000','94.80','79.00','0.00','0','0','1','','6.5克轻巧，蓝牙4.1高清通话音质','','images/201509/thumb_img/83_thumb_G_1441052403875.jpg','images/201509/goods_img/83_G_1441052403275.jpg','images/201509/source_img/83_G_1441052403717.png','1','','1','1','0','0','1441052403','100','0','0','0','0','0','0','1441052403','0','','-1','-1','0','0','0','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('84','127','ECS000084','插卡式翻盖保护套','+','63','0','','10000','0.000','34.80','29.00','0.00','0','0','1','','','<p><img width=\"720\" height=\"530\" alt=\"\" src=\"/xiaomi2015273/images/upload/Image/hminote_01.jpg\" /></p>\r\n<p><img width=\"720\" height=\"140\" alt=\"\" src=\"/xiaomi2015273/images/upload/Image/hminote_04.jpg\" /></p>\r\n<p><img width=\"720\" height=\"530\" alt=\"\" src=\"/xiaomi2015273/images/upload/Image/hminote_05.jpg\" /></p>\r\n<p><img width=\"720\" height=\"130\" alt=\"\" src=\"/xiaomi2015273/images/upload/Image/hominote_06.jpg\" /></p>\r\n<p><img width=\"720\" height=\"530\" alt=\"\" src=\"/xiaomi2015273/images/upload/Image/shou.jpg\" /></p>\r\n<p><img width=\"720\" height=\"530\" alt=\"\" src=\"/xiaomi2015273/images/upload/Image/hminote_11.jpg\" /></p>','images/201509/thumb_img/84_thumb_G_1441056023645.jpg','images/201509/goods_img/84_G_1441056023990.jpg','images/201509/source_img/84_G_1441056023964.jpg','1','','1','1','0','0','1441056023','100','0','0','0','0','0','0','1441502831','0','','-1','-1','0','0','0','5','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('85','128','ECS000085','清水软胶保护套','+','31','0','','10000','0.000','5.88','4.90','0.00','0','0','1','','适用于 红米1S/红米','','images/201509/thumb_img/85_thumb_G_1441056112107.jpg','images/201509/goods_img/85_G_1441056112082.jpg','images/201509/source_img/85_G_1441056112054.jpg','1','','1','1','0','0','1441056112','100','0','0','0','0','0','0','1441056112','0','','-1','-1','0','0','0','1','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('86','111','ECS000086','安卓防尘塞','+','24','0','','10000','0.000','7.08','5.90','0.00','0','0','1','','','','images/201509/thumb_img/86_thumb_G_1441056239670.jpg','images/201509/goods_img/86_G_1441056239202.jpg','images/201509/source_img/86_G_1441056239893.jpg','1','','1','1','0','0','1441056239','100','0','0','0','0','0','0','1441056239','0','','-1','-1','0','0','0','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('87','110','ECS000087','普通高透贴膜(单片装)','+','21','0','','10000','0.000','11.88','9.90','0.00','0','0','1','','','','images/201509/thumb_img/87_thumb_G_1441056303542.jpg','images/201509/goods_img/87_G_1441056303571.jpg','images/201509/source_img/87_G_1441056303890.jpg','1','','1','1','0','0','1441056303','100','0','0','0','0','0','0','1441056303','0','','-1','-1','0','0','0','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('88','129','ECS000088','米兔主题3D保护壳','+','135','0','','10000','0.000','46.80','39.00','0.00','0','0','1','','','','images/201509/thumb_img/88_thumb_G_1441056484072.jpg','images/201509/goods_img/88_G_1441056484238.jpg','images/201509/source_img/88_G_1441056484508.jpg','1','','1','1','0','0','1441056484','100','0','0','0','0','0','0','1441056484','0','','-1','-1','0','0','0','1','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('89','119','ECS000089','纯色开衫卫衣 女款','+','30','0','','10000','0.000','154.79','129.00','0.00','0','0','1','','','','images/201509/thumb_img/89_thumb_G_1441056597778.jpg','images/201509/goods_img/89_G_1441056597264.jpg','images/201509/source_img/89_G_1441056597372.jpg','1','','1','1','0','1','1441056597','100','0','0','0','1','0','0','1441493401','0','','-1','-1','0','0','0','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('90','120','ECS000090','企鹅版米兔','+','28','0','','10000','0.000','58.80','49.00','0.00','0','0','1','','','','images/201509/thumb_img/90_thumb_G_1441056659073.jpg','images/201509/goods_img/90_G_1441056659397.jpg','images/201509/source_img/90_G_1441056659816.jpg','1','','1','1','0','0','1441056659','100','0','0','0','1','0','0','1441493400','0','','-1','-1','0','0','0','1','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('91','121','ECS000091','简约多功能双肩包','+','23','0','','10000','0.000','118.80','99.00','0.00','0','0','1','','','','images/201509/thumb_img/91_thumb_G_1441056702928.jpg','images/201509/goods_img/91_G_1441056702794.jpg','images/201509/source_img/91_G_1441056702721.jpg','1','','1','1','0','0','1441056702','100','0','0','0','1','0','0','1441493400','0','','-1','-1','0','0','0','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('92','122','ECS000092','小米鼠标垫','+','38','0','','10000','0.000','5.88','4.90','0.00','0','0','1','','','','images/201509/thumb_img/92_thumb_G_1441056728120.jpg','images/201509/goods_img/92_G_1441056728244.jpg','images/201509/source_img/92_G_1441056728619.jpg','1','','1','1','0','0','1441056728','100','0','0','0','1','0','0','1441493399','0','','-1','-1','0','0','0','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('93','123','ECS000093','小米百变随身杯','+','39','0','','10000','0.000','46.80','39.00','0.00','0','0','1','','','','images/201509/thumb_img/93_thumb_G_1441056767939.jpg','images/201509/goods_img/93_G_1441056767774.jpg','images/201509/source_img/93_G_1441056767621.jpg','1','','1','1','0','0','1441056767','100','0','0','0','1','0','0','1441493398','0','','-1','-1','0','0','0','1','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('94','130','ECS000094','猫的秘密','+','47','0','','10000','0.000','238.79','199.00','0.00','0','0','1','','','','images/201509/thumb_img/94_thumb_G_1441056891849.jpg','images/201509/goods_img/94_G_1441056891405.jpg','images/201509/source_img/94_G_1441056891886.jpg','1','','1','1','0','1','1441056891','1','0','0','0','1','0','0','1441759636','0','','-1','-1','0','0','0','1','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('95','105','ECS000095','先锋SE-MJ512折叠式头戴耳机','+','14','0','','10000','0.000','201.60','168.00','0.00','0','0','1','','','','images/201509/thumb_img/95_thumb_G_1441738494824.jpg','images/201509/goods_img/95_G_1441738494127.jpg','images/201509/source_img/95_G_1441738494837.png','1','','1','1','0','1','1441738494','100','0','0','0','0','0','0','1441738494','0','','-1','-1','0','0','0','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('96','104','ECS000096','QCY派Q8蓝牙耳机','+','26','0','','10000','0.000','71.88','59.90','0.00','0','0','1','','','','images/201509/thumb_img/96_thumb_G_1441738537157.jpg','images/201509/goods_img/96_G_1441738537224.jpg','images/201509/source_img/96_G_1441738537599.png','1','','1','1','0','0','1441738537','100','0','0','0','0','0','0','1441738537','0','','-1','-1','0','0','0','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('97','105','ECS000097','先锋CL31系列入耳式耳机','+','14','0','','10000','0.000','118.80','99.00','0.00','0','0','1','','','','images/201509/thumb_img/97_thumb_G_1441738581513.jpg','images/201509/goods_img/97_G_1441738581436.jpg','images/201509/source_img/97_G_1441738581597.png','1','','1','1','0','0','1441738581','100','0','0','0','0','0','0','1441738581','0','','-1','-1','0','0','0','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('98','105','ECS000098','铁三角J100耳机','+','16','0','','10000','0.000','94.80','79.00','0.00','0','0','1','','','','images/201509/thumb_img/98_thumb_G_1441738620606.jpg','images/201509/goods_img/98_G_1441738620612.jpg','images/201509/source_img/98_G_1441738620612.png','1','','1','1','0','0','1441738620','100','0','1','0','0','0','0','1441754973','0','','-1','-1','0','0','0','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('99','105','ECS000099','捷波朗EASY–CALL蓝牙耳机','+','14','0','','10000','0.000','214.79','179.00','0.00','0','0','1','','','','images/201509/thumb_img/99_thumb_G_1441738667754.jpg','images/201509/goods_img/99_G_1441738667970.jpg','images/201509/source_img/99_G_1441738667868.png','1','','1','1','0','1','1441738667','100','0','0','0','0','0','0','1441738667','0','','-1','-1','0','0','0','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('100','105','ECS000100','铁三角CLR100耳机','+','21','0','','10000','0.000','213.60','178.00','0.00','0','0','1','','','','images/201509/thumb_img/100_thumb_G_1441738698084.jpg','images/201509/goods_img/100_G_1441738698092.jpg','images/201509/source_img/100_G_1441738698062.png','1','','1','1','0','1','1441738698','100','0','0','1','0','0','0','1446162989','0','','-1','-1','0','0','0','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('101','105','ECS000101','中锘基B97S运动蓝牙耳机','+','22','0','','10000','0.000','142.79','119.00','0.00','0','0','1','','','','images/201509/thumb_img/101_thumb_G_1441738730692.jpg','images/201509/goods_img/101_G_1441738730248.jpg','images/201509/source_img/101_G_1441738730067.png','1','','1','1','0','1','1441738730','100','0','0','1','1','0','0','1446162989','0','','-1','-1','0','0','0','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('102','105','ECS000102','QCY 杰克J02蓝牙耳机','+','34','0','','10000','0.000','116.28','96.90','0.00','0','0','1','','','','images/201509/thumb_img/102_thumb_G_1441738765271.jpg','images/201509/goods_img/102_G_1441738765970.jpg','images/201509/source_img/102_G_1441738765409.png','1','','1','1','0','0','1441738765','100','0','0','1','1','0','0','1446162988','0','','-1','-1','0','0','0','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('103','105','ECS000103','铁三角COR150入耳式耳机','+','29','0','','10000','0.000','166.79','139.00','0.00','0','0','1','','','','images/201509/thumb_img/103_thumb_G_1441738795942.jpg','images/201509/goods_img/103_G_1441738795866.jpg','images/201509/source_img/103_G_1441738794688.png','1','','1','1','0','1','1441738794','100','0','0','1','0','0','0','1450057875','0','','-1','-1','0','0','0','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('104','133','ECS000104','课程','+','51','0','','10000','0.000','100.00','80.00','0.00','0','0','1','','','<p><img width=\"1200\" height=\"675\" alt=\"\" src=\"/images/upload/Image/4.jpg\" /></p>','images/201509/thumb_img/104_thumb_G_1441747447591.jpg','images/201509/goods_img/104_G_1441747447738.jpg','images/201509/source_img/104_G_1441747447471.png','1','','1','1','0','0','1441747447','100','0','1','1','1','0','0','1446162984','0','','-1','-1','0','0','0','0','','','0.00','0.00','0');");
E_D("replace into `ecs_goods` values('107','125','ECS000107','34','+','19','50','','1','0.000','0.01','0.01','0.00','0','0','1','','','','','','','0','virtual_card','1','1','0','0','1446771266','100','0','0','0','0','0','0','1448596556','0','','-1','-1','0','0','0','0','','','0.00','0.00','0');");

require("../../inc/footer.php");
?>