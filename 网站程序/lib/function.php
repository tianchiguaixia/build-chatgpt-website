<?php 


function check(){
    echo '1';
	return false;
}



function sq($site,$check){
	$arr = array();
	$ts = count($site);
	for($i = 0; $i < $ts; $i++){
		// print_r($site[$i]);
		foreach($site[$i] as $v){
			// print_r($v);
			$arr[] = $v;
			// print_r($arr);
		}
	}

	if (in_array($check,$arr)) {
		return '1';
	}else{
		return '0';
	}

	}



function sqqq($site,$check){
	$arr = array();
	$ts = count($site);
	for($i = 0; $i < $ts; $i++){
		// print_r($site[$i]);
		foreach($site[$i] as $v){
			// print_r($v);
			$arr[] = $v;
			// print_r($arr);
		}
	}

	if (in_array($check,$arr)) {
		return '1';
	}else{
		return '0';
	}

	}















function datetime(){
	return date('Y-m-d h:i:s', time());
}



function getIp() {
	static $realip = null;
	if($realip !== null) {
		return $realip;
	}

	if(getenv('REMOTE_ADDR')) {
		$realip = getenv('REMOTE_ADDR');
	} else if(getenv('HTTP_CLIENT_IP')) {
		$realip = getenv('HTTP_CLIENT_IP');
	} else if (getenv('HTTP_X_FROWARD_FOR')) {
		$realip = getenv('HTTP_X_FROWARD_FOR');
	}

	return $realip;	
}




function Pj($table, $data , $act='insert' ,$where=0){
	if ($act == 'insert') {
		$sql = "insert into $table(";
		$sql .= implode(',' , array_keys($data)) . ")" . " values('";
		$sql .= implode("','", array_values($data)) . "');";
		return $sql;
		// echo $sql;
	}else if ($act == 'update') {
		//update wmr_site set url = 'baidu.com' , ip = '127.0.0.1';
		$sql = "update $table set ";
		foreach($data as $k => $v){
			$sql .= $k . "='" .$v . "',";
			// echo $sql;
		}
		$sql = rtrim($sql,',') . " where " . $where;
		return $sql;

	}
}




function sE($data , $table , $act = "select" , $where = 0){
	if ($act == 'select') {
		$sql = "select " .implode("," ,array_keys($data));
		$sql .= " from " . $table;
		$sql .= " where " .  $where;
		return $sql;
	}else if ($act == 'delete') {
		$sql = "delete from " . $table;
		$sql .= " where " . $where;
		return $sql;
	}
	
}




function cCode($name) {
	$salt = require(ROOT . '/lib/config.php');
	// echo '1';
	return md5($name . '|' . $salt['salt']);
}



function acc() {
	if(!isset($_COOKIE['aname']) || !isset($_COOKIE['accode'])){
		return false;
	}
	return $_COOKIE['accode'] === cCode($_COOKIE['aname']);



}


function uacc() {
	if(!isset($_COOKIE['dengluname']) || !isset($_COOKIE['uccode'])){
		return false;
	}
	if($_COOKIE['uccode'] == cCode($_COOKIE['dengluname'])){
	    return '登陆了';
	}else{
	    return '';
	}
}







function randStr($num=8) {
	$str = str_shuffle('abcedfghjkmnpqrstuvwxyzABCEDFGHJKMNPQRSTUVWXYZ23456789');
	return substr($str, 0 , $num);
}





function error($res) {
	$result = 'fail';
	require(ROOT . '/admin/view/info.html');
	exit();
}


function succ($res){
	$result = 'succ';
	require(ROOT . '/admin/view/info.html');
	exit();
}






function getPage($num,$curr,$cnt) {
	//最大的页码数
	$max = ceil($num/$cnt);
	//最左侧页码
	$left = max(1 , $curr-2);

	//最右侧页码
	$right = min($left+4 , $max);

	$left = max(1 , $right-4);

	for($i=$left;$i<=$right;$i++) {
		//$page[$i] = 'page='.$i;
		
		$_GET['ypage'] = $i;
 		$page[$i] = http_build_query($_GET);

 		//$page[$i] = http_build_query($_GET['page'] = $i);
	}

	return $page;
}




function sgetPage($num,$curr,$cnt) {
	//最大的页码数
	$max = ceil($num/$cnt);
	//最左侧页码
	$left = max(1 , $curr-2);

	//最右侧页码
	$right = min($left+4 , $max);

	$left = max(1 , $right-4);

/*	(1 [2] 3 4 5) 6 7 8 9 
	1 2 (3 4 [5] 6 7) 8 9
	1 2 3 4 (5 6 7 [8] 9)*/
	//$page = array();
	for($i=$left;$i<=$right;$i++) {
		//$page[$i] = 'page='.$i;
		
		$_GET['spage'] = $i;
 		$page[$i] = http_build_query($_GET);

 		//$page[$i] = http_build_query($_GET['page'] = $i);
	}

	return $page;
}





function zhifu($res) {
	// pdzf($danhao);
	$result = 'succ';
	require(ROOT . '/admin/view/zq.html');
	exit();
}








 ?>