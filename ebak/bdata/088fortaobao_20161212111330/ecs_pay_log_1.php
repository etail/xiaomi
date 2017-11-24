<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_pay_log`;");
E_C("CREATE TABLE `ecs_pay_log` (
  `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `order_amount` decimal(10,2) unsigned NOT NULL,
  `order_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_paid` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `openid` varchar(255) NOT NULL,
  `transid` varchar(255) NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM AUTO_INCREMENT=123 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_pay_log` values('1','1','0.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('2','2','503.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('3','3','8097.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('4','4','4998.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('5','5','0.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('6','6','35.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('7','7','2198.10','0','0','','');");
E_D("replace into `ecs_pay_log` values('8','8','638.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('9','9','2015.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('10','10','0.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('11','11','3810.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('12','12','253.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('13','13','975.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('14','14','0.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('15','15','17054.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('16','16','0.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('17','17','0.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('18','18','0.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('19','20','1401.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('20','21','327.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('21','22','124.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('22','1','2214.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('23','2','0.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('24','3','0.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('25','4','0.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('26','5','88249.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('27','6','26488.70','0','0','','');");
E_D("replace into `ecs_pay_log` values('28','7','963.10','0','0','','');");
E_D("replace into `ecs_pay_log` values('29','8','2209.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('30','1','451.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('31','2','2014.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('32','3','144.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('33','4','331.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('34','5','2463.64','0','0','','');");
E_D("replace into `ecs_pay_log` values('35','6','139.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('36','7','94.95','0','0','','');");
E_D("replace into `ecs_pay_log` values('37','8','139.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('38','9','109.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('39','10','109.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('40','11','132.50','0','0','','');");
E_D("replace into `ecs_pay_log` values('41','12','132.50','0','0','','');");
E_D("replace into `ecs_pay_log` values('42','13','52.50','0','0','','');");
E_D("replace into `ecs_pay_log` values('43','14','129.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('44','15','132.50','0','0','','');");
E_D("replace into `ecs_pay_log` values('45','16','1302.50','0','0','','');");
E_D("replace into `ecs_pay_log` values('46','17','112.50','0','0','','');");
E_D("replace into `ecs_pay_log` values('47','18','132.50','0','0','','');");
E_D("replace into `ecs_pay_log` values('48','19','1309.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('49','20','1302.50','0','0','','');");
E_D("replace into `ecs_pay_log` values('50','21','52.50','0','0','','');");
E_D("replace into `ecs_pay_log` values('51','22','132.50','0','0','','');");
E_D("replace into `ecs_pay_log` values('52','23','102.50','0','0','','');");
E_D("replace into `ecs_pay_log` values('53','24','133.84','0','0','','');");
E_D("replace into `ecs_pay_log` values('54','25','54.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('55','26','49.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('56','27','89.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('57','28','79.80','0','0','','');");
E_D("replace into `ecs_pay_log` values('58','29','129.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('59','30','139.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('60','31','109.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('61','32','82.50','0','0','','');");
E_D("replace into `ecs_pay_log` values('62','33','129.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('63','34','129.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('64','35','89.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('65','36','1299.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('66','37','89.90','0','0','','');");
E_D("replace into `ecs_pay_log` values('67','38','79.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('68','39','1470.50','0','0','','');");
E_D("replace into `ecs_pay_log` values('69','40','265.37','0','0','','');");
E_D("replace into `ecs_pay_log` values('70','41','246420.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('71','42','342.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('72','43','2127.27','0','0','','');");
E_D("replace into `ecs_pay_log` values('73','44','299.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('74','45','99.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('75','46','397.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('76','47','74.90','0','0','','');");
E_D("replace into `ecs_pay_log` values('77','48','99.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('78','1','1.00','1','1','','');");
E_D("replace into `ecs_pay_log` values('79','49','1314.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('80','50','2315.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('81','51','139.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('82','2','20.00','1','0','','');");
E_D("replace into `ecs_pay_log` values('83','52','1509.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('84','53','160.61','0','0','','');");
E_D("replace into `ecs_pay_log` values('85','54','152.50','0','0','','');");
E_D("replace into `ecs_pay_log` values('86','55','94.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('87','56','124.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('88','57','124.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('89','58','124.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('90','59','119.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('91','60','79.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('92','61','2615.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('93','62','104.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('94','63','114.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('95','64','89.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('96','65','485.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('97','66','95.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('98','67','99.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('99','68','2429.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('100','69','94.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('101','70','1514.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('102','71','104.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('103','72','4514.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('104','73','139.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('105','74','104.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('106','75','314.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('107','76','6909.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('108','77','153.90','0','0','','');");
E_D("replace into `ecs_pay_log` values('109','78','1309.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('110','79','20.90','0','0','','');");
E_D("replace into `ecs_pay_log` values('111','80','0.02','0','1','','');");
E_D("replace into `ecs_pay_log` values('112','81','164.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('113','82','144.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('114','83','2214.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('115','84','2315.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('116','85','54.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('117','86','109.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('118','87','1309.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('119','88','3009.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('120','89','18292.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('121','90','2315.00','0','0','','');");
E_D("replace into `ecs_pay_log` values('122','91','18415.00','0','0','','');");

require("../../inc/footer.php");
?>