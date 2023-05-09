   
<?php
require('../lib/init.php');


$tiwen = 'active';





$sql = "select * from chat_tiwen order by id desc";
$yhzl = $mysql->getAll($sql);


$sql = "select count(*) from chat_tiwen where 1";


$num = $mysql->getOne($sql);

$curr = isset($_GET['ypage']) ? $_GET['ypage'] : 1;
$cnt = 50;
$page = getPage($num , $curr, $cnt);


$sql = "select * from chat_tiwen order by id desc limit " . ($curr-1)*$cnt . ',' . $cnt;

$fenye = $mysql->getAll($sql);


$zyes = $num/$cnt;



if(!empty($_GET['id'])){
    
    $id = $_GET['id'];
    $sql = "DELETE FROM chat_tiwen WHERE id = '$id'";
    if($mysql->query($sql)){
        header("Location:". $domain."/admin/kamilist.php");
    }
    exit();
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
                          <th>提问内容</th>
                          
                          <th>提问IP</th>
                      
                          <th>提问时间</th>
                 
                           <th>提问人</th>
                          
                          <!--<th>操作</th>-->
                      
                        </tr>
                      </thead>
                      <tbody>

<?php foreach($fenye as $k => $v){?>
                        <tr>
                          <td><span class="text-muted"><?php echo $v['id'] ?></span></td>
                          
                          
                        
                   
                             <td><span class="text-muted"><?php echo $v['tiwen'] ?></span></td>
                             
                             
                             
                          
                          <td><a href="#" class="text-inherit"><?php echo $v['ip']?></a></td>
                          
                          
                          
                          
                
                          
                          
                          
                              <td><a href="#" class="text-inherit"><?php echo $v['time'];?></a></td>
                          
                       
         
                          
         
                          
                          <td><?php echo $v['yonghu'];?></td>
                          
         
                            
                            
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
    <a href="tiwenlist.php?ypage=<?php echo 1 ?>">首页</a>
  </li>
<?php if($k == 1){?>
  <li class="disabled"><a href="tiwenlist.php?ypage=1">«</a></li>
  <?php } else if($k > 1){?>
 <li class="disabled"><a href="tiwenlist.php?ypage=<?php echo $k - 1;?>">«</a></li>
  <?php }?>
  <li class="disabled"><a><?php echo $k;?></a>
    <?php if($k == $zyes){?>
  </li><li class="disabled"><a href="tiwenlist.php?ypage=<?php echo $zyes ?>">»</a></li>
  <?php } else if($k < $zyes){?>
</li><li class="disabled"><a href="tiwenlist.php?ypage=<?php echo $k+1;?>">»</a></li>
  <?php }?>
  <li class="disabled"><a href="tiwenlist.php?ypage=<?php echo ceil($zyes) ?>">尾页</a></li>
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