   
<?php
require('./header.php');
?>


<style>
    .text-nowrap {
    white-space: unset!important;
}
</style>

         

 <div class="container">
     <div class="page-header">
              <h1 class="page-title">
                账单列表
              </h1>
            </div>
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">账单列表</h3>
                  </div>
                  <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                      <thead>
                        <tr>
                          <th class="w-1">ID</th>
                          
                          <th>充值账户</th>
                          <th>订单号</th>
                          <th>充值次数or会员</th>
                          
                           <th>是否充值</th>
                          
                           <th>时间</th>
                  
                          <!--<th></th>-->
                        </tr>
                      </thead>
                      <tbody>

<?php foreach($fenye as $k => $v){?>
                        <tr>
                          <td><span class="text-muted"><?php echo $v['id'] ?></span></td>
                          <td><a href="#" class="text-inherit"><?php echo $v['yonghuming']?></a></td>
                          <td>
                           <?php echo $v['dingdanhao']?>
                          </td>
                          <td>
                            <?php echo $v['czdsed']?>
                          </td>
                          
                                <td>
                            <?php
                            
                            
                            if($v['sfcl'] == '1'){
                                echo '成功';
                            }else{
                            echo '未支付';
                            }
                            
                      
                            
                            ?>
                          </td>
                          
                          
                          <td>
                            <?php echo $v['time']?>
                          </td>
                          
                        
                          
                          
                          
                       <td>
                            <?php 
                            
                             
                            if($v['shifoufasong'] == '0'){
                             echo '待审核';
                            }else if($v['shifoufasong'] == '1'){
                            
                             echo '发送成功';
                            }else if($v['shifoufasong'] == '2'){
                            
                             echo '发送失败';
                            }
                            
                           
                            
                            
                            
                            ?>
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



<ul class="pagination">
  <li class="disabled">
      <?php foreach($page as $k=>$v) {?>
  <?php if($k == $curr) {?>
    <a href="zhangdan.php?spage=<?php echo 1 ?>">首页</a>
  </li>
<?php if($k == 1){?>
  <li class="disabled"><a href="zhangdan.php?spage=1">«</a></li>
  <?php } else if($k > 1){?>
 <li class="disabled"><a href="zhangdan.php?spage=<?php echo $k - 1;?>">«</a></li>
  <?php }?>
  <li class="disabled"><a><?php echo $k;?></a>
    <?php if($k == $zyes){?>
  </li><li class="disabled"><a href="zhangdan.php?spage=<?php echo $zyes ?>">»</a></li>
  <?php } else if($k < $zyes){?>
</li><li class="disabled"><a href="zhangdan.php?spage=<?php echo $k+1;?>">»</a></li>
  <?php }?>
  <li class="disabled"><a href="zhangdan.php?spage=<?php echo ceil($zyes) ?>">尾页</a></li>
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