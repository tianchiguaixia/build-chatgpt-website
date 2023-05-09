<?php


require('../../lib/init.php');

$sql = 'select yzfym from chat_admin where id = 1';
$ym = $mysql->getOne($sql);


$sql = 'select yzfid from chat_admin where id = 1';
$ids = $mysql->getOne($sql);


$sql = 'select yzfmy from chat_admin where id = 1';
$mys = $mysql->getOne($sql);




//支付接口地址
$epay_config['apiurl'] = $ym;

//商户ID
$epay_config['pid'] = $ids;

//商户密钥
$epay_config['key'] = $mys;


?>