   
<?php
require('./header.php');
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
                          <th>用户名</th>
                          
                          <th>邮箱</th>
                      
                          <th>用户剩余次数</th>
                          <!--<th>电话</th>-->
                          <!--<th>密码</th>-->
                          <!--<th>加密字符串</th>-->
                          <th>注册时间</th>
                          
                           <th>是否会员</th>
                          
                          <th>操作</th>
                      
                        </tr>
                      </thead>
                      <tbody>

<?php foreach($fenye as $k => $v){?>
                        <tr>
                          <td><span class="text-muted"><?php echo $v['id'] ?></span></td>
                             <td><span class="text-muted"><?php echo $v['yhmc'] ?></span></td>
                          
                          <td><a href="#" class="text-inherit"><?php echo $v['yhyx']?></a></td>
                              <td><a href="#" class="text-inherit"><?php echo $v['sycs']?></a></td>
                          
                       
         
                          
                          <td><?php echo $v['time']?></td>
                          
                          
                          
                          
                                 <td><a href="#" class="text-inherit">
                                  
                                  
                                  <?php
                                      
                                      if($v['vip'] == ''){
                                          echo '不是会员';
                                      }else{
                                          echo '是会员';
                                      }
                               
                                  
                                  ?>
                              
                              
                              
                              </a></td>
                          
                          
                          
                          <!--<td class="text-right">-->
                          <!--  <a href="javascript:void(0)" class="btn btn-secondary btn-sm">待开发</a>-->
                          <!--  <div class="dropdown">-->
                          <!--    <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">待开发</button>-->
                          <!--  </div>-->
                          <!--</td>-->
                          <td>
                            <a class="icon" href="uuser.php?id=<?php echo $v['yhmc']?>">
                              <i class="fe fe-edit"></i>
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
    <a href="userlist.php?ypage=<?php echo 1 ?>">首页</a>
  </li>
<?php if($k == 1){?>
  <li class="disabled"><a href="userlist.php?ypage=1">«</a></li>
  <?php } else if($k > 1){?>
 <li class="disabled"><a href="userlist.php?ypage=<?php echo $k - 1;?>">«</a></li>
  <?php }?>
  <li class="disabled"><a><?php echo $k;?></a>
    <?php if($k == $zyes){?>
  </li><li class="disabled"><a href="userlist.php?ypage=<?php echo $zyes ?>">»</a></li>
  <?php } else if($k < $zyes){?>
</li><li class="disabled"><a href="userlist.php?ypage=<?php echo $k+1;?>">»</a></li>
  <?php }?>
  <li class="disabled"><a href="userlist.php?ypage=<?php echo ceil($zyes) ?>">尾页</a></li>
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