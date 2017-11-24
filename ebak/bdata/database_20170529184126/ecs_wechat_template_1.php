<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_wechat_template`;");
E_C("CREATE TABLE `ecs_wechat_template` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `open_id` varchar(255) DEFAULT NULL,
  `template_id` varchar(255) DEFAULT NULL,
  `contents` varchar(133) DEFAULT NULL,
  `template` text,
  `title` varchar(33) NOT NULL DEFAULT '',
  `add_time` int(11) DEFAULT '0',
  `switch` tinyint(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_wechat_template` values('1','OPENTM206547887','','{{first.DATA}}\r\n订单编号：{{keyword1.DATA}}\r\n商品名称：{{keyword2.DATA}}\r\n下单时间：{{keyword3.DATA}}\r\n下单金额：{{keyword4.DATA}}\r\n分销商名称：{{keyword5.DATA','您的分销商有新的订单产生。\r\n订单编号：2015070210121001\r\n商品名称：2015新款简约百搭蕾丝连衣裙\r\n下单时间：2015年07月02日 10:12\r\n下单金额：128元\r\n分销商名称：木友衣橱\r\n订单已付款，请尽快发货！','分销订单通知','0','0');");
E_D("replace into `ecs_wechat_template` values('2','OPENTM400075274','','{{first.DATA}}\r\n结款金额：{{keyword1.DATA}}\r\n银行卡：{{keyword2.DATA}}\r\n{{remark.DATA}}\r\n','内容示例\r\n您本月的分销结款金额如下，\r\n结款金额：1000\r\n银行卡：62XXXXXXXXXX\r\n银行到账可能会有延迟，如有问题，祝生活愉快！','分销结款通知','0','0');");
E_D("replace into `ecs_wechat_template` values('3','OPENTM207126233','','{{first.DATA}}\r\n分销商名称：{{keyword1.DATA}}\r\n分销商电话：{{keyword2.DATA}}\r\n申请时间：{{keyword3.DATA}}\r\n{{remark.DATA}}\r\n','分销商申请成功提醒\r\n分销商名称：张三\r\n分销商电话：15050510328\r\n申请时间：2015.07.28 10:01\r\n如有疑问，请在微信中留言，我们将第一时间为您服务。','分销商申请成功提醒','0','0');");

require("../../inc/footer.php");
?>