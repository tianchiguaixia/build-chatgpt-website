<?php
/* * 
 * 功能：彩虹易支付页面跳转同步通知页面
 * 说明：
 * 以下代码只是为了方便商户测试而提供的样例代码，商户可以根据自己网站的需要，按照技术文档编写,并非一定要使用该代码。
 */

require_once("lib/epay.config.php");
require_once("lib/EpayCore.class.php");
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>支付返回页面</title>
	</head>
	<body>
<?php
//计算得出通知验证结果
$epay = new EpayCore($epay_config);
$verify_result = $epay->verifyReturn();

if($verify_result) {//验证成功

	//商户订单号
	$out_trade_no = $_GET['out_trade_no'];

	//支付宝交易号
	$trade_no = $_GET['trade_no'];

	//交易状态
	$trade_status = $_GET['trade_status'];

	//支付方式
	$type = $_GET['type'];


    
	if($_GET['trade_status'] == 'TRADE_SUCCESS') {
		//判断该笔订单是否在商户网站中已经做过处理
		//如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
		//如果有做过处理，不执行商户的业务程序
		
        
        //判断当前订单是否已经做过处理
        $sql = "select sfcl from chat_order where dingdanhao='$out_trade_no'";
        $sfzgcl = $mysql->getOne($sql);
        
        //查询类型
		$sql = "select tworht from chat_order where dingdanhao='$out_trade_no'";
        $tworht = $mysql->getOne($sql);
        if($tworht != '绘画'){
            if($sfzgcl == 1){
                echo '<script>location.href = "../../index.php";</script>';
                exit();
            }
        }else{
            if($sfzgcl == 1){
                echo '<script>location.href = "../../huihua.php";</script>';
                exit();
            }
        }
        
        
        

		//根据订单号查询出用户
        $sql = "select yonghuming from chat_order where dingdanhao='$out_trade_no'";
        $user = $mysql->getOne($sql);
		
	
		//查询用户充值了多少个额度
		$sql = "select czdsed from chat_order where dingdanhao='$out_trade_no'";
        $czdsed = $mysql->getOne($sql);
		
		
		
		//查询类型
		$sql = "select tworht from chat_order where dingdanhao='$out_trade_no'";
        $tworht = $mysql->getOne($sql);
		
		if($tworht != '绘画'){
		    //判断当前用户是否已经到期
    		$sql = "select vip from chat_yonghu where yhmc='$user'";
    		$sfvip = $mysql->getOne($sql);
    
            if($sfvip != ''){
                //数据库的会员到期时间     
                $date1 = $sfvip;
                $time1 = strtotime($date1);
            }else{
                $time1 = 0;
            }
    		//当前时间戳
            $date2 = date("Y-m-d");
            $time2 = strtotime($date2);
            
    		
    		//判断是否开通会员
    		if($czdsed == '一个月'){
    		    
    		    $czdsed = '1500';
    
    		    //到期或者没有开通会员
    		    if(($sfvip == '') || ($time2 > $time1)){
    		        // 获取下个月的时间戳
                    $next_month_timestamp = strtotime('+1 month');
                    
                    // 将时间戳转换为日期格式
                    $next_month_date = date('Y-m-d', $next_month_timestamp);
                    
                    //给用户添加额度
            		$sql = "update chat_yonghu set vip='$next_month_date' where yhmc='$user'";
            		$res = $mysql->query($sql);
            		if (!$res) {
            		    echo '充值失败 联系客服处理！！！';
            		    exit();
            		}
              
    		    }else{
    		        //如果没有到期的补费
    		        $new_timestamp = strtotime("+1 month", $time1);
                    $new_time = date("Y-m-d", $new_timestamp);
    		        
    		        //给用户添加额度
            		$sql = "update chat_yonghu set vip='$new_time' where yhmc='$user'";
            		$res = $mysql->query($sql);
            		if (!$res) {
            		    echo '充值失败 联系客服处理！！！';
            		    exit();
            		}
                    
    		        
    		    }
    		    
    		    
    		    $sql = "update chat_yonghu set sycs=sycs+$czdsed where yhmc='$user'";
            	$res = $mysql->query($sql);
            	if (!$res) {
            		 echo '充值失败 联系客服处理！！！';
            		 exit();
            	}
    		    
    	
                
    		}else if($czdsed == '三个月'){
    		    
    		    $czdsed = '10000';
    		    
    		    if(($sfvip == '') || ($time2 > $time1)){
    		        // 获取下个月的时间戳
                    $next_month_timestamp = strtotime('+3 month');
                    
                    // 将时间戳转换为日期格式
                    $next_month_date = date('Y-m-d', $next_month_timestamp);
                    
                    //给用户添加额度
            		$sql = "update chat_yonghu set vip='$next_month_date' where yhmc='$user'";
            		$res = $mysql->query($sql);
            		if (!$res) {
            		    echo '充值失败 联系客服处理！！！';
            		    exit();
            		}
    		    }else{
    		        
    		        //如果没有到期的补费
    		        $new_timestamp = strtotime("+3 month", $time1);
                    $new_time = date("Y-m-d", $new_timestamp);
    		        
    		        //给用户添加额度
            		$sql = "update chat_yonghu set vip='$new_time' where yhmc='$user'";
            		$res = $mysql->query($sql);
            		if (!$res) {
            		    echo '充值失败 联系客服处理！！！';
            		    exit();
            		}
    		        
    		    }
    		    
    	
        		$sql = "update chat_yonghu set sycs=sycs+$czdsed where yhmc='$user'";
        		$res = $mysql->query($sql);
        		if (!$res) {
        		    echo '充值失败 联系客服处理！！！';
        		    exit();
        		}
    		}else if($czdsed == '一年'){
    		    
    		    $czdsed = '999999999';
    		    
    		    
    		    
    		    if(($sfvip == '') || ($time2 > $time1)){
    		        // 获取下个月的时间戳
                    $next_month_timestamp = strtotime('+12 month');
                    
                    // 将时间戳转换为日期格式
                    $next_month_date = date('Y-m-d', $next_month_timestamp);
                    
                    //给用户添加额度
            		$sql = "update chat_yonghu set vip='$next_month_date' where yhmc='$user'";
            		$res = $mysql->query($sql);
            		if (!$res) {
            		    echo '充值失败 联系客服处理！！！';
            		    exit();
            		}
    		    }else{
    		        //如果没有到期的补费
    		        $new_timestamp = strtotime("+3 month", $time1);
                    $new_time = date("Y-m-d", $new_timestamp);
                    
                    //给用户添加额度
            		$sql = "update chat_yonghu set vip='$new_time' where yhmc='$user'";
            		$res = $mysql->query($sql);
            		if (!$res) {
            		    echo '充值失败 联系客服处理！！！';
            		    exit();
            		}
                    
    		    }
    	
    		    
        		$sql = "update chat_yonghu set sycs=sycs+$czdsed where yhmc='$user'";
        		$res = $mysql->query($sql);
        		if (!$res) {
        		    echo '充值失败 联系客服处理！！！';
        		    exit();
        		}
    		}else{
    		    //给用户添加额度
        		$sql = "update chat_yonghu set sycs=sycs+$czdsed where yhmc='$user'";
        		$res = $mysql->query($sql);
        		if (!$res) {
        		    echo '充值失败 联系客服处理！！！';
        		    exit();
        		}
    		}
    		
    		
    		//修改用户充值总余额
    		$sql = "update chat_yonghu set zongxiaofei=zongxiaofei+'$money' where yhmc='$user'";
    		$res = $mysql->query($sql);
    		if (!$res) {
    		    echo '未知错误 联系管理员！';
    		    exit();
    		}
    
    		
    		//如果充值成功后 把订单号改为已经处理过了
    		$sql = "update chat_order set sfcl=1 where dingdanhao='$out_trade_no'";
    		$res = $mysql->query($sql);
    		if (!$res) {
    		    echo '订单号处理错误 联系客服处理！';
    		    exit();
    		}
    		
    		
    		
    		//处理代理
    		$sql = "select orshangji from chat_yonghu where yhmc='$user'";
    		$sfysj = $mysql->getOne($sql);
    		
    		if($sfysj != ''){
    		    //获取上级用户名
    		    $sql = "select yhmc from chat_yonghu where shangjiyaoqingma='$sfysj'";
    		    $sjyhm = $mysql->getOne($sql);
    
    		    //$value['zongxiaofei']*$yjbl/100)
    		    //获取佣金比例
    		    $sql = "select fanli from chat_admin where id='1'";
    		    $yjbl = $mysql->getOne($sql);
    		        
    		    $ktxyj = round($money*$yjbl/100);
    		        
    		        
    		    $sql = "update chat_yonghu set ketixian=ketixian+'$ktxyj' where yhmc='$sjyhm'";
            	$res = $mysql->query($sql);
            	if (!$res) {
            		 echo '未知错误 联系管理员！';
            		 exit();
            	}
    		   
    		}
    		
    		echo '<script>location.href = "../../index.php";</script>';
    		
		}else{
		    
		    
		    //给用户添加额度
        	$sql = "update chat_yonghu set huihuacs=huihuacs+$czdsed where yhmc='$user'";
        	$res = $mysql->query($sql);
        	if (!$res) {
        		echo '充值失败 联系客服处理！！！';
                exit();
        	}
		    
		    
		    //修改用户充值总余额
    		$sql = "update chat_yonghu set zongxiaofei=zongxiaofei+'$money' where yhmc='$user'";
    		$res = $mysql->query($sql);
    		if (!$res) {
    		    echo '未知错误 联系管理员！';
    		    exit();
    		}
    
    		
    		//如果充值成功后 把订单号改为已经处理过了
    		$sql = "update chat_order set sfcl=1 where dingdanhao='$out_trade_no'";
    		$res = $mysql->query($sql);
    		if (!$res) {
    		    echo '订单号处理错误 联系客服处理！';
    		    exit();
    		}
    		
    		
    		
    		//处理代理
    		$sql = "select orshangji from chat_yonghu where yhmc='$user'";
    		$sfysj = $mysql->getOne($sql);
    		
    		if($sfysj != ''){
    		    //获取上级用户名
    		    $sql = "select yhmc from chat_yonghu where shangjiyaoqingma='$sfysj'";
    		    $sjyhm = $mysql->getOne($sql);
    
    		    //$value['zongxiaofei']*$yjbl/100)
    		    //获取佣金比例
    		    $sql = "select fanli from chat_admin where id='1'";
    		    $yjbl = $mysql->getOne($sql);
    		        
    		    $ktxyj = round($money*$yjbl/100);
    		        
    		        
    		    $sql = "update chat_yonghu set ketixian=ketixian+'$ktxyj' where yhmc='$sjyhm'";
            	$res = $mysql->query($sql);
            	if (!$res) {
            		 echo '未知错误 联系管理员！';
            		 exit();
            	}
    		   
    		}
    		
    		
		    
		    echo '<script>location.href = "../../huihua.php";</script>';
		}
		


	
		
		
	}
	else {
		echo "trade_status=".$_GET['trade_status'];
	}

	echo "<h3>验证成功</h3><br />";
}
else {
	//验证失败
	echo "<h3>验证失败</h3>";
}
?>
	</body>
</html>