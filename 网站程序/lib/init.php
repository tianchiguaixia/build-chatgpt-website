<?php

define('ROOT' , dirname(__DIR__));
require('mysql.class.php');
require('function.php');


//全局变量获取当前时间
$date =  datetime();
//全局变量获取访问者ip
$ip =  getIp();
//全局变量随机生成八位字符串
$suijishu = randStr();

//会员是否算次数 true为无限次数 false为次数有限制
$hysfscs = true;








 ?>

