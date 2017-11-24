<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_order_return`;");
E_C("CREATE TABLE `ecs_order_return` (
  `ret_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '退换货id',
  `service_sn` varchar(20) NOT NULL COMMENT '服务订单编号',
  `goods_id` int(13) NOT NULL COMMENT '商品唯一id',
  `user_id` int(10) NOT NULL COMMENT '用户id',
  `rec_id` int(10) NOT NULL COMMENT '订单商品唯一id',
  `order_id` mediumint(8) NOT NULL COMMENT '所属订单号',
  `order_sn` varchar(20) NOT NULL,
  `service_id` int(2) NOT NULL,
  `cause_id` int(10) NOT NULL COMMENT '退换货原因',
  `add_time` varchar(120) NOT NULL COMMENT '插入时间',
  `should_return` decimal(10,2) NOT NULL COMMENT '应退金额',
  `actual_return` decimal(10,2) NOT NULL COMMENT '实退金额',
  `remark` text NOT NULL COMMENT '备注',
  `country` smallint(5) NOT NULL COMMENT '国家',
  `province` smallint(5) NOT NULL COMMENT '省份',
  `city` smallint(5) NOT NULL COMMENT '城市',
  `district` smallint(5) NOT NULL COMMENT '区',
  `addressee` varchar(30) NOT NULL COMMENT '收件人',
  `phone` varchar(20) NOT NULL COMMENT '联系电话',
  `address` varchar(100) NOT NULL COMMENT '详细地址',
  `zipcode` int(6) DEFAULT NULL COMMENT '邮编',
  `return_status` tinyint(3) NOT NULL COMMENT '退换货状态',
  `refund_status` tinyint(3) NOT NULL COMMENT '退款状态',
  `back_shipping_name` varchar(30) NOT NULL COMMENT '退回快递名称',
  `back_other_shipping` varchar(30) NOT NULL COMMENT '其他快递名称',
  `back_invoice_no` varchar(50) NOT NULL COMMENT '退回快递单号',
  `out_shipping_name` varchar(30) NOT NULL COMMENT '换出快递名称',
  `out_invoice_no` varchar(50) NOT NULL COMMENT '换出快递单号',
  `seller_id` int(11) NOT NULL,
  `is_check` tinyint(1) NOT NULL COMMENT '是否审核',
  `to_buyer` varchar(255) NOT NULL,
  PRIMARY KEY (`ret_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商品退货表'");

require("../../inc/footer.php");
?>