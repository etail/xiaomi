<?php
// 数据库主机 3306为默认主机端口，如不是默认也需要修改
$db_host   = "127.0.0.1:3306";

// 数据库名称
$db_name   = "ecfw0001";

// 数据库用户名
$db_user   = "root";

// 数据库密码
$db_pass   = "root";

// table prefix
$prefix    = "ecs_";

$timezone    = "PRC";

$cookie_path    = "/";

$cookie_domain    = "";

$session = "1440";

define('EC_CHARSET','utf-8');

define('ADMIN_PATH','admin');

define('AUTH_KEY', 'this is a key');

define('OLD_AUTH_KEY', '');

define('API_TIME', '2017-05-30 10:47:58');

//define('DEBUG_MODE', 3); // 3=1+2，显示错误、禁用ECShop缓存

?>