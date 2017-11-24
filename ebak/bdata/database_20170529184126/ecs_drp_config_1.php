<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_drp_config`;");
E_C("CREATE TABLE `ecs_drp_config` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `centent` text COMMENT '多选时的选项',
  `keyword` varchar(20) DEFAULT NULL COMMENT '区分文章的key',
  `name` varchar(50) DEFAULT NULL COMMENT '显示字段名',
  `remarks` text COMMENT '备注',
  `type` varchar(20) DEFAULT 'text' COMMENT '数据类型',
  `value` text COMMENT '默认值',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_drp_config` values('1','','apply','温馨提示','申请分销商时，提示用户需要注意的信息','textarea','亲，您的佣金由三部分组成：<br>1.本店所销售的商品，我所获得的佣金（即本店销售佣金）<br>2.下级分店所销售的商品，我所获得的佣金（即一级分店佣金）<br>3.下级分店发展的分店所销售的商品，我所获得的佣金（即二级分店佣金）');");
E_D("replace into `ecs_drp_config` values('2','','novice','新手必读','分销商申请成功后，用户要注意的事项','textarea','1、开微店收入来源之一：您已成功注册微店，已经取得整个商城的商品销售权，只要有人在您的微店购物，即可获得“本店销售佣金”。<br>2、开微店收入来源之二：邀请您的朋友注册微店，他就会成为你的分销商，他店内销售的商品，您即可获得“一级分店佣金”。<br>3、开微店收入来源之三：您的分销商邀请他的朋友注册微店，他店内销售的商品，您即可获得“二级分店佣金”。');");
E_D("replace into `ecs_drp_config` values('3','','fxts','间隔','下单并付款之后经过间隔天数才可以对订单分成','text','1');");
E_D("replace into `ecs_drp_config` values('4','','txxz','提现标准','申请提现时，少于该值将无法提现','text','10');");
E_D("replace into `ecs_drp_config` values('5','open,close','msg_open','消息推送','是否开启消息推送','radio','open');");
E_D("replace into `ecs_drp_config` values('6','open,close','examine','购买分销商','是否开启购买成为分销商','radio','open');");
E_D("replace into `ecs_drp_config` values('7','','money','购买金额','购买分销商金额','text','1');");
E_D("replace into `ecs_drp_config` values('8','open,close','audit','分销商审核','是否对新申请的分销商进行审核','radio','open');");
E_D("replace into `ecs_drp_config` values('9','open,close','buy_money','累计消费金额','是否开启购物累计消费金额满足设置才能开店','radio','close');");
E_D("replace into `ecs_drp_config` values('10','','buy','设置累计消费金额','设置会员累计消费金额','text','0');");

require("../../inc/footer.php");
?>