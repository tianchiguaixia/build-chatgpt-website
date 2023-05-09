<?php
//如果没有登录跳转到注册页面
$sfyjdl = $_COOKIE['aname'];


$dangqianlj = $_SERVER['DOCUMENT_ROOT'] . '/';

$file_path = $dangqianlj.'/tool/or.php';
if (file_exists($file_path)) {
    $contentor = file_get_contents($file_path);
    if($contentor == '0'){
        $file_path = $dangqianlj.'/tool/or.txt';
        $content = '1';
        file_put_contents($file_path, $content);
    }
}


$file_pathor = $dangqianlj.'/tool/or.txt';
if (file_exists($file_pathor)) {
    file_put_contents($file_path, '0');
}

?>


<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="./favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />
    <!-- Generated: 2018-04-06 16:27:42 +0200 -->
    <title>后台管理</title>
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
    <!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">-->
    <script src="assets/js/require.min.js"></script>
  
    <!--<link href="assets/tabler.min.css" rel="stylesheet"/>-->
 
    <!-- Dashboard Core -->
    <link href="assets/css/dashboard.css" rel="stylesheet" />
    <script src="assets/js/dashboard.js"></script>
    <!-- c3.js Charts Plugin -->
    <!--<link href="assets/plugins/charts-c3/plugin.css" rel="stylesheet" />-->
    <script src="assets/plugins/charts-c3/plugin.js"></script>
    <!-- Google Maps Plugin -->
    <link href="assets/plugins/maps-google/plugin.css" rel="stylesheet" />
    <script src="assets/plugins/maps-google/plugin.js"></script>
    <!-- Input Mask Plugin -->
    <script src="assets/plugins/input-mask/plugin.js"></script>
    <script type="text/javascript" src="../jquery.js"></script>
    
    

  </head>


<style>
    .page-header {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: unset!important;
    margin: 1.5rem 0 1.5rem;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
}
</style>

               
  <body class="">
    <div class="page">
      <div class="page-main">
        <div class="header py-4">
          <div class="container">
            <div class="d-flex">
              <a class="header-brand" href="./index.php">
                <!--<img src="http://wl.aidezy.com/2019062111074534659061.png" class="header-brand-img" alt="tabler logo">-->
              ChatGPT后台
              
              </a>
              <div class="d-flex order-lg-2 ml-auto">
                <div class="nav-item d-none d-md-flex">
                  <a href="" class="btn btn-sm btn-outline-primary" target="_blank">官方博客</a>
                </div>
               
                <div class="dropdown">
                  <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                    <span class="avatar" style="background-image: url(./view/qq.jpg)"></span>
                    <span class="ml-2 d-none d-lg-block">
                      <span class="text-default"><?php if(!empty($glymz)){echo $glymz;}?></span>
                      
                    </span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
              
               
                    
             
                
              
                    <a class="dropdown-item" href="./login.php">
                      <i class="dropdown-icon fe fe-log-out"></i> 安全退出
                    </a>
                  </div>
                </div>
              </div>
              <a href="../login.php" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                <span class="header-toggler-icon"></span>
              </a>
            </div>
          </div>
        </div>
        <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
          <div class="container">
            <div class="row align-items-center">
             <!--  <div class="col-lg-3 ml-auto">
                <form class="input-icon my-3 my-lg-0">
                  <input type="search" class="form-control header-search" placeholder="Search&hellip;" tabindex="1">
                  <div class="input-icon-addon">
                    <i class="fe fe-search"></i>
                  </div>
                </form>
              </div> -->
              <div class="col-lg order-lg-first">
                <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                  <li class="nav-item">
                    <a href="./index.php" class="nav-link <?php if(!empty($shouye)){echo $shouye;}?>"><i class="fe fe-home"></i> 主页</a>
                  </li>
                  
                  
                  
                  <li class="nav-item">
                    <a href="javascript:void(0)" class="nav-link <?php if(!empty($usersy)){echo $usersy;}?>" data-toggle="dropdown"><i class="fe fe-user"></i> 用户列表</a>
                    <div class="dropdown-menu dropdown-menu-arrow">
                      <a href="./userlist.php" class="dropdown-item ">用户列表</a>
                      <!--<a href="./adduser.php" class="dropdown-item ">添加用户</a>-->
                     
                    </div>
                  </li>
                  
                  
                  
      <li class="nav-item dropdown">
                    <a href="javascript:void(0)" class="nav-link <?php if(!empty($tixian)){echo $tixian;}?>" data-toggle="dropdown">
                        
                        
                        <i class="fe fe-zap"></i>
                        
      
                    
                    
                    用户提现</a>
                    <div class="dropdown-menu dropdown-menu-arrow">
                      <a href="./tixian.php" class="dropdown-item ">用户提现</a>
             
                    </div>
                  </li>
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <li class="nav-item dropdown">
                    <a href="javascript:void(0)" class="nav-link <?php if(!empty($kami)){echo $kami;}?>" data-toggle="dropdown"><i class="fe fe-calendar"></i> 卡密生成</a>
                    <div class="dropdown-menu dropdown-menu-arrow">
                      <a href="./kami.php" class="dropdown-item ">卡密生成</a>
             <a href="./kamilist.php" class="dropdown-item ">卡密列表</a>
                    </div>
                  </li>
                  
                  
                  
                  <li class="nav-item dropdown">
                    <a href="javascript:void(0)" class="nav-link <?php if(!empty($shouyezd)){echo $shouyezd;}?>" data-toggle="dropdown"><i class="fe fe-check-circle"></i> 订单记录</a>
                    <div class="dropdown-menu dropdown-menu-arrow">
                      <!--<a href="./dblist.php" class="dropdown-item ">账单记录</a>-->
                      <a href="./zhangdan.php" class="dropdown-item ">订单记录</a>
                     
                    </div>
                  </li>


  <li class="nav-item dropdown">
                    <a href="javascript:void(0)" class="nav-link <?php if(!empty($tiwen)){echo $tiwen;}?>" data-toggle="dropdown"><i class="fe fe-activity"></i> 提问记录</a>
                    <div class="dropdown-menu dropdown-menu-arrow">
                      <a href="./tiwenlist.php" class="dropdown-item ">提问记录</a>
            
                    </div>
                    


    <li class="nav-item dropdown">
                    <a href="javascript:void(0)" class="nav-link <?php if(!empty($qita)){echo $qita;}?>" data-toggle="dropdown"><i class="fe fe-feather"></i> 更多功能</a>
                    
                    
                    
                    <div class="dropdown-menu dropdown-menu-arrow">
                        
                        
                      <a href="./gengduo.php" class="dropdown-item ">→更多网站配置</a>  
                        
                        
                       <a href="./huitu.php" class="dropdown-item ">绘图配置</a>  
                        
                        
                      <a href="./gonggao.php" class="dropdown-item ">网站公告设置</a>
                      
                      <a href="./yanzhengma.php" class="dropdown-item ">网站注册验证码配置</a>
                        
                      <a href="./tanchuang.php" class="dropdown-item ">点击提交订单的弹窗提示配置</a>
                      
                      <a href="./ipfj.php" class="dropdown-item ">封禁指定IP配置</a>
                        
                    </div>
                    
                    
                    
                  </li>




        <li class="nav-item dropdown">
                    <a href="javascript:void(0)" class="nav-link <?php if(!empty($gengxin)){echo $gengxin;}?>" data-toggle="dropdown">
                        
                        
                      <i class="fe fe-box"></i> 检测更新</a>
                    <div class="dropdown-menu dropdown-menu-arrow">
                      <!--<a href="./dblist.php" class="dropdown-item ">账单记录</a>-->
                      <a href="./gengxin.php" class="dropdown-item ">检测更新</a>
                     
                    </div>
                  </li>




              <!--      <li class="nav-item dropdown">-->
              <!--      <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-edit-2"></i> 工单管理</a>-->
              <!--      <div class="dropdown-menu dropdown-menu-arrow">-->
              <!--        <a href="./wderlist.php" class="dropdown-item ">工单列表</a>-->
              <!--<a href="./addmsg.php" class="dropdown-item ">发布</a> -->
              <!--      </div>-->
              <!--    </li>-->

     <!--<li class="nav-item dropdown">-->
     <!--               <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-inbox"></i> 额度购买</a>-->
     <!--               <div class="dropdown-menu dropdown-menu-arrow">-->
     <!--                 <a href="./edugoumai.php" class="dropdown-item ">购买额度</a>-->
    
     <!--               </div>-->
     <!--             </li>-->
                     

                

                    
                    
  <!--                </li>-->
  <!--     <li class="nav-item dropdown">-->
  <!--                  <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-download"></i> 源码管理</a>-->
  <!--                  <div class="dropdown-menu dropdown-menu-arrow">-->
  <!--                    <a href="#" class="dropdown-item ">源码下载</a>-->
            
  <!--                  </div>-->
  <!--                </li>-->
           
                  <li class="nav-item">
                    <a href="./login.php" class="nav-link"><i class="fe fe-log-out"></i> 退出登录</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>



