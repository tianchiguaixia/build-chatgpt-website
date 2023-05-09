<?php
require('../lib/init.php');
$ip = $_POST['ip'];
$sql = "select ip from chat_ip where ip='$ip'";
$ssfczip = $mysql->getOne($sql);
if($ssfczip == ''){
    $sql = "select mfcs from chat_admin where id='1'";
            $mfcs = $mysql->getOne($sql);
  $sql = "select buzcmfhh from chat_admin where id='1'";
            $buzcmfhh = $mysql->getOne($sql);
                $ipc['ip'] = $ip;
                $ipc['time'] = date("Y-m-d H:i:s");
                $ipc['mfsycs'] = $mfcs;
                $ipc['huitusycs'] = $buzcmfhh;
                $mysql->query(Pj('chat_ip' , $ipc));
}



