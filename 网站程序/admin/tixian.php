   
<?php


require('../lib/init.php');
if(!acc()){
    $dangqianlj = $_SERVER['DOCUMENT_ROOT'] . '/';
    exit();
}

$tixian = 'active';





$sql = "select count(*) from chat_tixian where sfcl != 1 and sfcl != 2";

$num = $mysql->getOne($sql);

$curr = isset($_GET['spage']) ? $_GET['spage'] : 1;
$cnt = 10;
$page = sgetPage($num , $curr, $cnt);





$sql = "select * from chat_tixian where sfcl != 1 and sfcl != 2 order by id desc limit " . ($curr-1)*$cnt . ',' . $cnt;

$fenye = $mysql->getAll($sql);


$zyes = $num/$cnt;



if(!empty($_GET['id'])){
    
    
    
    $users = $_GET['id'];
    //判断处理
    $cgorsb = $_GET['cgorsb'];
    
    if($cgorsb == 1){
        $sql = "update chat_tixian set sfcl=1 where time='$users'";
    }else{
        $sql = "update chat_tixian set sfcl=2 where time='$users'";
    }
    
    
    $res = $mysql->query($sql);
    if ($res) {
        $domain = "http://".$_SERVER['HTTP_HOST'];
        
        header("Location:". $domain."/admin/tixian.php");
        // echo '<script>alert("状态修改成功")</script>';
    }else{
        $domain = "http://".$_SERVER['HTTP_HOST'];
        
        header("Location:". $domain."/admin/tixian.php");
        // echo '<script>alert("状态修改失败")</script>';
    }
    

    
    // exit();
}

require('./view/header.php');



?>


<style>
    .text-nowrap {
    white-space: unset!important;
}
</style>







 <div class="container">
     <div class="page-header">
              <h1 class="page-title">
                用户提现记录
              </h1>
            </div>
         
        

                    <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">用户提现记录(请手动给用户打款 然后点击:"已提现"即可)</h3>
                  </div>
                  <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                      <thead>
                        <tr>
                          <th class="w-1">ID</th>
                          
                          
                          <th>提现用户</th>
                          <th>提现支付宝</th>
                          <th>提现时间</th>
                          <th>提现金额</th>
                          
                           <th>是否成功</th>
                          
                            <th>处理</th>
                 
                        </tr>
                      </thead>
                      <tbody>

<?php foreach($fenye as $k => $v){?>
                        <tr>
                            
                          <td><span class="text-muted"><?php echo $v['id'] ?></span></td>
                          
                            <td><?php echo $v['txyh'] ?></td>
                          
                          
                          <td><a class="text-inherit"><?php echo $v['txsjh']?></a></td>
                          
                          
                          
                          <td>
                           <?php echo $v['time']?>
                          </td>
                          <td>
                            <?php echo $v['txje']?>
                          </td>
                          
                                <td>
                            <?php
                            
                            
                            if($v['sfcl'] == '0'){
                                echo '待处理';
                            }else if($v['sfcl'] == '1'){
                            echo '已给用户提现';
                            }else{
                                echo '驳回';
                            }
                            
                      
                            
                            ?>
                          </td>
          
         
                            <td>
                                
                            <a href="tixian.php?id=<?php echo $v['time']?>&cgorsb=1" class="text-inherit">已提现</a>
                                
                            <a href="tixian.php?id=<?php echo $v['time']?>&cgorsb=0" class="text-inherit">驳回</a>
                            
                            </td>
                  
                          
                          
                   
                        </tr>
<?php }?>

 
                      </tbody>
                    </table>
                                </div>



<style type="text/css">

.pagination {
    display: inline-block;
    padding-left: 0;
    margin: 35px 0px 15px 22px;
    border-radius: 4px;
}
.pagination > li {
    display: inline;
}

.pagination > .disabled > span, .pagination > .disabled > span:hover, .pagination > .disabled > span:focus, .pagination > .disabled > a, .pagination > .disabled > a:hover, .pagination > .disabled > a:focus {
    color: #777;
    cursor: not-allowed;
    background-color: #fff;
    border-color: #ddd;
}

.pagination > li > a, .pagination > li > span {
    position: relative;
    float: left;
    padding: 6px 12px;
    margin-left: -1px;
    line-height: 1.42857143;
    color: #337ab7;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid #ddd;
}



</style>


<?php


if($page != ''){ ?>




<ul class="pagination">
  <li class="disabled">
      <?php foreach($page as $k=>$v) {?>
  <?php if($k == $curr) {?>
    <a href="tixian.php?spage=<?php echo 1 ?>">首页</a>
  </li>
<?php if($k == 1){?>
  <li class="disabled"><a href="tixian.php?spage=1">«</a></li>
  <?php } else if($k > 1){?>
 <li class="disabled"><a href="tixian.php?spage=<?php echo $k - 1;?>">«</a></li>
  <?php }?>
  <li class="disabled"><a><?php echo $k;?></a>
    <?php if($k == $zyes){?>
  </li><li class="disabled"><a href="tixian.php?spage=<?php echo $zyes ?>">»</a></li>
  <?php } else if($k < $zyes){?>
</li><li class="disabled"><a href="tixian.php?spage=<?php echo $k+1;?>">»</a></li>
  <?php }?>
  <li class="disabled"><a href="tixian.php?spage=<?php echo ceil($zyes) ?>">尾页</a></li>
  <?php }?>
      <?php }?>
</ul>


    
<?php } ?>








</div>
          
         
     
         
</div>
                  </div>
                </div>
             </div>


              
                 
              <script>
                  
      
  $('.jcgx').click(function(event){

      
      $('.jcgx').html('<a href="javascript:void(0)" class="btn btn-primary">正在修改...</a>');



         var hydq = $('.hydq').val();
       
     var sycs = $('.sycs').val();
    


$.ajax({
    

    

    
    
  type: "POST",
  url: "../tool/ajax.php", //需要写云端连接
     dataType: "json",
  data: {
      cs:sycs,
      vip:hydq,
      biaoshi:'修改用户次数',
      yh:"<?php echo $yhm; ?>",
      
  },
  traditional: true,
  success: function(response) {





         alert(response.nr);
     
           $('.jcgx').html('<a href="javascript:void(0)" class="btn btn-primary">点我更新用户信息</a>');



        location.reload();
  
     
     
        event.stopImmediatePropagation();
        return false;
      
    
  },

});
                      
        
      
    
    

    
                  });
   
              </script>   
          









<?php
require('./footer.php');
?>