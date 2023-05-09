<?php
$dangqianlj = $_SERVER['DOCUMENT_ROOT'] . '/';
require('../plug/wzhcpz.php');
$file = $dangqianlj.'tool/gengxin.txt'; // txt文件路径
$content = file_get_contents($file); // 读取文件内容
if (trim($content) !== '1') { // 去除空格后判断内容是否不等于1
    file_put_contents($file, '1'); // 将文件内容更改为1
    // echo '更新完成';
}
?>