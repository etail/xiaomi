<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_touch_ad_position`;");
E_C("CREATE TABLE `ecs_touch_ad_position` (
  `position_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `position_name` varchar(255) NOT NULL DEFAULT '',
  `ad_width` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ad_height` smallint(5) unsigned NOT NULL DEFAULT '0',
  `position_desc` varchar(255) NOT NULL DEFAULT '',
  `position_style` text NOT NULL,
  PRIMARY KEY (`position_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_touch_ad_position` values('1','首页Banner广告位','360','168','','<ul>\r\n{foreach from=\$ads item=ad}\r\n  <li>{\$ad}</li>\r\n{/foreach}\r\n</ul>\r\n');");
E_D("replace into `ecs_touch_ad_position` values('2','首页导航下方广告','234','307','首页导航下方广告图','&lt;ul class=&quot;row&quot;&gt;\r\n{foreach from=\$ads item=ad}\r\n&lt;li class=&quot;col-sm-4 col-xs-4&quot;&gt;{\$ad}&lt;/li&gt;\r\n{/foreach}\r\n&lt;/ul&gt;');");

require("../../inc/footer.php");
?>