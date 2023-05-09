<?php 

require('../lib/init.php');

$sql = "select * from chat_yonghu order by id desc";
$yhzl = $mysql->getAll($sql);


$sql = "select count(*) from chat_yonghu where 1";


$num = $mysql->getOne($sql);

$curr = isset($_GET['ypage']) ? $_GET['ypage'] : 1;
$cnt = 50;
$page = getPage($num , $curr, $cnt);


$sql = "select * from chat_yonghu order by id desc limit " . ($curr-1)*$cnt . ',' . $cnt;

$fenye = $mysql->getAll($sql);


$zyes = $num/$cnt;

$usersy = 'active';


require('../admin/view/userlist.php');



 ?>