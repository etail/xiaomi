<?php

/**
 * ECSHOP 程序说明
 * ===========================================================
 * * 版权所有 2005-2012 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com；
 * ----------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ==========================================================
 * $Author: liubo $
 * $Id: affiliate.php 17217 2011-01-19 06:29:08Z liubo $
 */

$_LANG['on'] = '開啟';
$_LANG['off'] = '關閉';
$_LANG['drp_profit'] = '分銷利潤設置';
$_LANG['cate_name'] = '產品分類';
$_LANG['cate_id'] = '編號';
$_LANG['profit1'] = '本店銷售傭金';
$_LANG['profit2'] = '一級分店傭金';
$_LANG['profit3'] = '二級分店傭金';
$_LANG['submit'] = '提交';
$_LANG['apply_wxts'] = '申請分銷商時的溫馨提示';
$_LANG['config'] = '分銷設置';

$_LANG['user_name'] = '下單用戶';
$_LANG['parent_name'] = '所屬分銷商';

$_LANG['order_id'] = '訂單號';
$_LANG['affiliate_separate'] = '分成';
$_LANG['affiliate_cancel'] = '取消';
$_LANG['affiliate_rollback'] = '撤銷';
$_LANG['log_info'] = '操作信息';
$_LANG['edit_ok'] = '操作成功';
$_LANG['edit_fail'] = '操作失敗';
$_LANG['separate_info'] = '訂單號 %s, 分成:金錢 %s 積分 %s';
$_LANG['separate_info2'] = '用戶ID %s ( %s ), 分成:金錢 %s 積分 %s';
$_LANG['sch_order'] = '搜索訂單號';

$_LANG['sch_stats']['name'] = '操作狀態';
$_LANG['sch_stats']['info'] = '按操作狀態查找:';
$_LANG['sch_stats']['all'] = '全部';
$_LANG['sch_stats'][0] = '等待處理';
$_LANG['sch_stats'][1] = '已分成';
$_LANG['sch_stats'][2] = '取消分成';
$_LANG['sch_stats'][3] = '已撤銷';
$_LANG['order_stats']['name'] = '訂單狀態';
$_LANG['order_stats'][0] = '未確認';
$_LANG['order_stats'][1] = '已確認';
$_LANG['order_stats'][2] = '已取消';
$_LANG['order_stats'][3] = '無效';
$_LANG['order_stats'][4] = '退貨';
$_LANG['js_languages']['cancel_confirm'] = '您確定要取消分成嗎？此操作不能撤銷。';
$_LANG['js_languages']['rollback_confirm'] = '您確定要撤銷此次分成嗎？';
$_LANG['js_languages']['separate_confirm'] = '您確定要分成嗎？';
$_LANG['loginfo'][0] = '用戶id:';
$_LANG['loginfo'][1] = '現金:';
$_LANG['loginfo'][2] = '積分:';
$_LANG['loginfo']['cancel'] = '分成被管理員取消！';

$_LANG['separate_type'] = '分成類型';
$_LANG['separate_by'][0] = '推薦註冊分成';
$_LANG['separate_by'][1] = '推薦訂單分成';
$_LANG['separate_by'][-1] = '推薦註冊分成';
$_LANG['separate_by'][-2] = '推薦訂單分成';

$_LANG['show_affiliate_orders'] = '此列表顯示此用戶推薦的訂單信息。';
$_LANG['back_note'] = '返回會員編輯頁面';

$_LANG['user']['user_name'] = '用戶名';
$_LANG['user']['real_name'] = '真實姓名';
$_LANG['user']['money'] = '分銷傭金';
$_LANG['user']['sale_money'] = '銷售傭金';
$_LANG['user']['sales_volume'] = '銷售額';
$_LANG['user']['shop_name'] = '店鋪名';
$_LANG['user']['shop_mobile'] = '手機號';
$_LANG['user']['shop_qq'] = 'QQ號';
$_LANG['user']['audit'] = '審核狀態';
$_LANG['user']['audit_true'] = '已審核';
$_LANG['user']['audit_false'] = '未審核';
$_LANG['user']['open'] = '店鋪狀態';
$_LANG['user']['open_true'] = '開啟';
$_LANG['user']['open_false'] = '關閉';
$_LANG['user']['create_time'] = '開店時間';
$_LANG['handle'] = '操作';
$_LANG['edit'] = '編輯';
$_LANG['change'] = '您確認要修改店鋪狀態嗎？';
$_LANG['drp_user_edit'] = '店鋪信息編輯？';

// 傭金提現管理
$_LANG['drp_log']  = '傭金管理';
$_LANG['user_surplus'] = '預付款';
$_LANG['surplus_id'] = '編號';
$_LANG['user_id'] = '會員名稱';
$_LANG['surplus_amount'] = '金額';
$_LANG['add_date'] = '操作日期';
$_LANG['pay_mothed'] = '支付方式';
$_LANG['process_type'] = '類型';
$_LANG['confirm_date'] = '到款日期';
$_LANG['surplus_notic'] = '管理員備註';
$_LANG['surplus_desc'] = '描述';
$_LANG['surplus_type'] = '操作類型';

$_LANG['no_user'] = '匿名購買';

$_LANG['surplus_type_0'] = '充值';
$_LANG['surplus_type_1'] = '提現';
$_LANG['admin_user'] = '操作員';

$_LANG['status'] = '到款狀態';
$_LANG['confirm'] = '已完成';
$_LANG['unconfirm'] = '未確認';
$_LANG['cancel'] = '取消';

$_LANG['please_select'] = '請選擇...';
$_LANG['surplus_info'] = '會員金額信息';
$_LANG['check'] = '到款審核';

$_LANG['money_type'] = '幣種';
$_LANG['surplus_add'] = '添加申請';
$_LANG['surplus_edit'] = '編輯申請';
$_LANG['attradd_succed'] = '您此次操作已成功！';
$_LANG['username_not_exist'] = '您輸入的會員名稱不存在！';
$_LANG['cancel_surplus'] = '您確定要取消這條記錄嗎?';
$_LANG['surplus_amount_error'] = '要提現的金額超過了此會員的帳戶餘額，此操作將不可進行！';
$_LANG['edit_surplus_notic'] = '現在的狀態已經是 已完成，如果您要修改，請先將之設置為 未確認';
$_LANG['back_list'] = '返回充值和提現申請';
$_LANG['continue_add'] = '繼續添加申請';
$_LANG['commission_Status'] = '傭金說明';
$_LANG['withdrawals_info'] = '提現信息';
$_LANG['shop_name'] = '店鋪名稱';
$_LANG['withdraw'] = '提現';
$_LANG['withdraw_mode'] = '提現方式';
$_LANG['withdraw_gold'] = '提現金額';
$_LANG['withdraw_ok'] = '提現成功';
$_LANG['Lack_of_funds'] = '資金不足，無法提現';
$_LANG['commission_fettle'] = '傭金狀態';
$_LANG['The_extracted'] = '對不起，傭金已經提取過了';
$_LANG['delete_Success'] = '傭金刪除成功';
$_LANG['delete_search'] = '傭金搜索';





/* JS語言項 */
$_LANG['js_languages']['user_id_empty'] = '會員名稱不能為空！';
$_LANG['js_languages']['deposit_amount_empty'] = '請輸入充值的金額！';
$_LANG['js_languages']['pay_code_empty'] = '請選擇支付方式';
$_LANG['js_languages']['deposit_amount_error'] = '請按正確的格式輸入充值的金額！';
$_LANG['js_languages']['deposit_type_empty'] = '請填寫類型！';
$_LANG['js_languages']['deposit_notic_empty'] = '請填寫管理員備註！';
$_LANG['js_languages']['deposit_desc_empty'] = '請填寫會員描述！';



$_LANG['cs'][OS_UNCONFIRMED] = '待確認';
$_LANG['cs'][CS_AWAIT_PAY] = '待付款';
$_LANG['cs'][CS_AWAIT_SHIP] = '待發貨';
$_LANG['cs'][CS_FINISHED] = '已完成';
$_LANG['cs'][PS_PAYING] = '付款中';
$_LANG['cs'][OS_CANCELED] = '取消';
$_LANG['cs'][OS_INVALID] = '無效';
$_LANG['cs'][OS_RETURNED] = '退貨';
$_LANG['cs'][OS_SHIPPED_PART] = '部分發貨';

/* 訂單狀態 */
$_LANG['os'][OS_UNCONFIRMED] = '未確認';
$_LANG['os'][OS_CONFIRMED] = '已確認';
$_LANG['os'][OS_CANCELED] = '<font color="red"> 取消</font>';
$_LANG['os'][OS_INVALID] = '<font color="red">無效</font>';
$_LANG['os'][OS_RETURNED] = '<font color="red">退貨</font>';
$_LANG['os'][OS_SPLITED] = '已分單';
$_LANG['os'][OS_SPLITING_PART] = '部分分單';

$_LANG['ss'][SS_UNSHIPPED] = '未發貨';
$_LANG['ss'][SS_PREPARING] = '配貨中';
$_LANG['ss'][SS_SHIPPED] = '已發貨';
$_LANG['ss'][SS_RECEIVED] = '收貨確認';
$_LANG['ss'][SS_SHIPPED_PART] = '已發貨(部分商品)';
$_LANG['ss'][SS_SHIPPED_ING] = '發貨中';

$_LANG['ps'][PS_UNPAYED] = '未付款';
$_LANG['ps'][PS_PAYING] = '付款中';
$_LANG['ps'][PS_PAYED] = '已付款';
$_LANG['download'] = '導出';
$_LANG['start_time'] = '起始時間';
$_LANG['end_time'] = '結束時間';

?>