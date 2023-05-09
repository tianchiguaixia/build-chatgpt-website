   
<?php
require('../lib/init.php');

if(!acc()){
    $dangqianlj = $_SERVER['DOCUMENT_ROOT'] . '/';
    exit();
}
$kami = 'active';





$sql = "select * from chat_kami order by id desc";
$yhzl = $mysql->getAll($sql);


$sql = "select count(*) from chat_kami where 1";


$num = $mysql->getOne($sql);

$curr = isset($_GET['ypage']) ? $_GET['ypage'] : 1;
$cnt = 50;
$page = getPage($num , $curr, $cnt);


$sql = "select * from chat_kami order by id desc limit " . ($curr-1)*$cnt . ',' . $cnt;

$fenye = $mysql->getAll($sql);


$zyes = $num/$cnt;



if(!empty($_GET['id'])){
    
    $id = $_GET['id'];
    $sql = "DELETE FROM chat_kami WHERE id = '$id'";
    if($mysql->query($sql)){
        header("Location:". $domain."/admin/kamilist.php");
    }
    exit();
}





require('./view/header.php');







?>



 <div class="container">
     <div class="page-header">
              <h1 class="page-title">
                用户列表
              </h1>
            </div>
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">用户列表</h3>
                  </div>
                  <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                      <thead>
                        <tr>
                          <th class="w-1">ID</th>
                          <th>卡密类型</th>
                          
                          <th>卡密</th>
                      
                          <th>卡密额度</th>
                 
                 
        
                          
                           <th>是否使用</th>
                          
                          <th>操作</th>
                      
                        </tr>
                      </thead>
                      <tbody>

<?php foreach($fenye as $k => $v){?>
                        <tr>
                          <td><span class="text-muted"><?php echo $v['id'] ?></span></td>
                          
                          
                          
                          <?php
                          
                          if($v['hyhscs'] == 'hytc'){
                              $hylx = '会员套餐';
                          }else if($v['hyhscs'] == 'cstc'){
                              $hylx = '次数套餐';
                          }else{
                               $hylx = '绘图套餐';
                          }
                          
                          ?>
                          
                             <td><span class="text-muted"><?php echo $hylx; ?></span></td>
                             
                             
                             
                          
                          <td><a href="#" class="text-inherit"><?php echo $v['kami']?></a></td>
                          
                          
                          
                               <?php
                          
                          if($v['hyhscs'] == 'hytc'){
                              $hylx = '个月';
                          }else{
                              $hylx = '次';
                          }
                          
                          ?>
                          
                          
                          
                              <td><a href="#" class="text-inherit"><?php echo $v['huiyuan'].$hylx;?></a></td>
                          
                       
         
               
                          
                               <?php
                          
                          if($v['sfsy'] == '0'){
                              $hylx = '没有使用';
                          }else{
                              $hylx = '已使用';
                          }
                          
                          ?>
                          
         
                          
                          <td><?php echo $hylx; ?></td>
                          
                          
                          
                          
                          
                          <!--<td class="text-right">-->
                          <!--  <a href="javascript:void(0)" class="btn btn-secondary btn-sm">待开发</a>-->
                          <!--  <div class="dropdown">-->
                          <!--    <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">待开发</button>-->
                          <!--  </div>-->
                          <!--</td>-->
                          <td>
                            <a class="icon" href="kamilist.php?id=<?php echo $v['id']?>">
                              删除
                            </a>
                            
                            
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

<!--   <div id="pagebar">
                Pages:&nbsp;
                <?php foreach($page as $k=>$v) {?>
                <?php if($k == $curr) {?>
                <?php echo $k;}else {?>
                <a href="index.php?<?php echo $v;?>"><?php echo $k;?></a>
                <?php }?>
                <?php }?>
            </div>
 -->

<ul class="pagination">
  <li class="disabled">
      <?php foreach($page as $k=>$v) {?>
  <?php if($k == $curr) {?>
    <a href="kamilist.php?ypage=<?php echo 1 ?>">首页</a>
  </li>
<?php if($k == 1){?>
  <li class="disabled"><a href="kamilist.php?ypage=1">«</a></li>
  <?php } else if($k > 1){?>
 <li class="disabled"><a href="kamilist.php?ypage=<?php echo $k - 1;?>">«</a></li>
  <?php }?>
  <li class="disabled"><a><?php echo $k;?></a>
    <?php if($k == $zyes){?>
  </li><li class="disabled"><a href="kamilist.php?ypage=<?php echo $zyes ?>">»</a></li>
  <?php } else if($k < $zyes){?>
</li><li class="disabled"><a href="kamilist.php?ypage=<?php echo $k+1;?>">»</a></li>
  <?php }?>
  <li class="disabled"><a href="kamilist.php?ypage=<?php echo ceil($zyes) ?>">尾页</a></li>
  <?php }?>
      <?php }?>
</ul>




</div>
</div>
                  </div>
                </div>
             </div>



<?php
require('./footer.php');
?>