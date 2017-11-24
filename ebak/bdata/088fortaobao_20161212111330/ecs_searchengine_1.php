<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_searchengine`;");
E_C("CREATE TABLE `ecs_searchengine` (
  `date` date NOT NULL DEFAULT '0000-00-00',
  `searchengine` varchar(20) NOT NULL DEFAULT '',
  `count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`date`,`searchengine`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_searchengine` values('2015-10-25','GOOGLE','100');");
E_D("replace into `ecs_searchengine` values('2015-10-26','GOOGLE','53');");
E_D("replace into `ecs_searchengine` values('2015-10-27','GOOGLE','57');");
E_D("replace into `ecs_searchengine` values('2015-10-28','GOOGLE','6');");
E_D("replace into `ecs_searchengine` values('2015-10-29','GOOGLE','6');");
E_D("replace into `ecs_searchengine` values('2015-10-30','GOOGLE','181');");
E_D("replace into `ecs_searchengine` values('2015-10-31','GOOGLE','388');");
E_D("replace into `ecs_searchengine` values('2015-11-01','GOOGLE','299');");
E_D("replace into `ecs_searchengine` values('2015-11-02','GOOGLE','5');");
E_D("replace into `ecs_searchengine` values('2015-11-02','YAHOO','1');");
E_D("replace into `ecs_searchengine` values('2015-11-03','GOOGLE','92');");
E_D("replace into `ecs_searchengine` values('2015-11-04','GOOGLE','33');");
E_D("replace into `ecs_searchengine` values('2015-11-05','GOOGLE','67');");
E_D("replace into `ecs_searchengine` values('2015-11-06','GOOGLE','65');");
E_D("replace into `ecs_searchengine` values('2015-11-07','GOOGLE','6');");
E_D("replace into `ecs_searchengine` values('2015-11-08','GOOGLE','93');");
E_D("replace into `ecs_searchengine` values('2015-11-09','GOOGLE','194');");
E_D("replace into `ecs_searchengine` values('2015-11-10','GOOGLE','87');");
E_D("replace into `ecs_searchengine` values('2015-11-11','GOOGLE','37');");
E_D("replace into `ecs_searchengine` values('2015-11-12','GOOGLE','68');");
E_D("replace into `ecs_searchengine` values('2015-11-13','GOOGLE','98');");
E_D("replace into `ecs_searchengine` values('2015-11-14','GOOGLE','86');");
E_D("replace into `ecs_searchengine` values('2015-11-15','GOOGLE','358');");
E_D("replace into `ecs_searchengine` values('2015-11-16','GOOGLE','210');");
E_D("replace into `ecs_searchengine` values('2015-11-17','GOOGLE','43');");
E_D("replace into `ecs_searchengine` values('2015-11-18','GOOGLE','5');");
E_D("replace into `ecs_searchengine` values('2015-11-19','GOOGLE','4');");
E_D("replace into `ecs_searchengine` values('2015-11-20','GOOGLE','8');");
E_D("replace into `ecs_searchengine` values('2015-11-21','GOOGLE','10');");
E_D("replace into `ecs_searchengine` values('2015-11-22','GOOGLE','13');");
E_D("replace into `ecs_searchengine` values('2015-11-23','GOOGLE','10');");
E_D("replace into `ecs_searchengine` values('2015-11-24','GOOGLE','14');");
E_D("replace into `ecs_searchengine` values('2015-11-25','GOOGLE','13');");
E_D("replace into `ecs_searchengine` values('2015-11-26','GOOGLE','11');");
E_D("replace into `ecs_searchengine` values('2015-11-26','YAHOO','120');");
E_D("replace into `ecs_searchengine` values('2015-11-27','GOOGLE','13');");
E_D("replace into `ecs_searchengine` values('2015-11-27','YAHOO','18');");
E_D("replace into `ecs_searchengine` values('2015-11-28','GOOGLE','14');");
E_D("replace into `ecs_searchengine` values('2015-11-28','YAHOO','2');");
E_D("replace into `ecs_searchengine` values('2015-11-29','GOOGLE','9');");
E_D("replace into `ecs_searchengine` values('2015-11-29','YAHOO','1');");
E_D("replace into `ecs_searchengine` values('2015-11-30','GOOGLE','7');");
E_D("replace into `ecs_searchengine` values('2015-12-01','GOOGLE','234');");
E_D("replace into `ecs_searchengine` values('2015-12-02','GOOGLE','310');");
E_D("replace into `ecs_searchengine` values('2015-12-03','GOOGLE','24');");
E_D("replace into `ecs_searchengine` values('2015-12-04','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-12-05','GOOGLE','4');");
E_D("replace into `ecs_searchengine` values('2015-12-07','GOOGLE','9');");
E_D("replace into `ecs_searchengine` values('2015-12-08','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2015-12-09','GOOGLE','13');");
E_D("replace into `ecs_searchengine` values('2015-12-10','GOOGLE','13');");
E_D("replace into `ecs_searchengine` values('2015-12-11','GOOGLE','18');");
E_D("replace into `ecs_searchengine` values('2015-12-12','GOOGLE','9');");
E_D("replace into `ecs_searchengine` values('2015-12-12','YAHOO','7');");
E_D("replace into `ecs_searchengine` values('2015-12-13','GOOGLE','12');");
E_D("replace into `ecs_searchengine` values('2015-12-13','YAHOO','2');");
E_D("replace into `ecs_searchengine` values('2015-12-14','GOOGLE','9');");
E_D("replace into `ecs_searchengine` values('2015-12-15','GOOGLE','9');");

require("../../inc/footer.php");
?>