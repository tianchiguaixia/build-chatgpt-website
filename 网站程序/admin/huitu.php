<?php

require('../lib/init.php');

if(!acc()){
    $dangqianlj = $_SERVER['DOCUMENT_ROOT'] . '/';
    exit();
}


$qita = 'active';


$sql = "select * from chat_admin where id = 1";
$huituapijk = $mysql->getRow($sql);
$huituapijk = $huituapijk['huitukey'];

$huituapijksig = $mysql->getRow($sql);
$huituapijksig = $huituapijksig['huitusig'];

$sql = "select zcsdschh from chat_admin where id = 1";
$zcsdshh = $mysql->getOne($sql);


$sql = "select buzcmfhh from chat_admin where id = 1";
$buzcmfhh = $mysql->getOne($sql);



$sql = "select sfkqaihh from chat_admin where id = 1";
$sfkqaihh = $mysql->getOne($sql);

if($sfkqaihh == '开启'){
    $sfkqaihhkaiqi = 'checked';
}else{
    $sfkqaihhguanbi = 'checked';
}






require('./view/header.php');


?>


<style>
    .text-nowrap {
    white-space: unset!important;
}
</style>







 <div class="container">
     

     <div class="row row-cards row-deck">
     
     
                    <div class="col-md-12">
     
                  <div class="page-header">
              <h1 class="page-title">
                绘图配置 目前对接的是意间AI绘画 网址:http://open.yjai.art/ 自己去申请API
              </h1>
            </div>
         
                <form class="card" action="" method="post" id="myForm">
                  <div class="card-body">
                    <h3 class="card-title">绘图配置信息修改</h3>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">API KEY</label>
                          <input type="text" class="form-control huitukey" name="huitukey" value="<?php echo $huituapijk;?>">
                        </div>
                      </div>
          
                   <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">ApiSecret</label>
                          <input type="text" class="form-control huitusig" name="huitusig" value="<?php echo $huituapijksig;?>">
                        </div>
                      </div>



       <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">注册默认送多少次绘画</label>
                          <input type="text" class="form-control zcsdsht" name="zcsdsht" value="<?php echo $zcsdshh;?>">
                        </div>
                      </div>
                      
                      
                      
         
       <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">不注册免费用户 默认送多少次</label>
                          <input type="text" class="form-control buzcmfhh" name="buzcmfhh" value="<?php echo $buzcmfhh;?>">
                        </div>
                      </div>
                      
                                   

                      
                     <div class="col-sm-6 col-md-6">
      <div class="form-group">
                            <div class="form-label">是否开启网站Ai绘画功能</div>
                            <div>
                              <label class="form-check form-check-inline">
                                <input  <?php echo $sfkqaihhkaiqi; ?> class="form-check-input" type="radio" name="sfkqaihh" value="开启" >
                                <span class="form-check-label">开启</span>
                              </label>
                              <label class="form-check form-check-inline">
                                <input  <?php echo $sfkqaihhguanbi; ?> class="form-check-input" type="radio" name="sfkqaihh" value="关闭">
                                <span class="form-check-label">关闭</span>
                              </label>
                             
                            </div>  </div>
                          </div>




                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary gxpz">更新配置</button>
                  </div>
                </form>
         
         
         
    
             
<script>



// 获取表单元素和提交按钮
var form = document.getElementById("myForm");
var submitBtn = form.querySelector("button[type='submit']");

// 监听表单提交事件
form.addEventListener("submit", function(event) {
    
      $('.gxpz').html('正在修改...');
    
  event.preventDefault(); // 阻止表单默认提交行为

  // 获取表单数据
  var formData = new FormData(form);

  // 发送ajax请求
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "../tool/xg.php?wzpz=huitu");
//   xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      console.log(xhr.responseText);
      
      if(xhr.responseText == 1){
          
         $('.gxpz').html('更新配置');
              
              alert('修改成功');
              
              
              location.reload();
          
   
      }else{
           alert('修改失败 请联系管理员');
      }
      
    }
  };
  xhr.send(formData,false);
});
</script>





              </div>
                    
                    
 
                    
                  <div class="col-md-6">
             <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">绘图套餐次数价格修改</h3>
                    </div>
                    <div class="card-body">
       
                      <div class="form-label">绘图套餐次数价格修改</div>
                      <div class="table-responsive">
                        <table class="table mb-0">
                          <thead>
                            <tr>
                              <th>价格(单位元)</th>
                              
                              
                              <th>次数</th>
                            </tr>
                          </thead>
                          <tbody>
                              
                               
                              
                              <?php
                              
                              $sql = 'select * from chat_huitutaocan where id < 4';
                                $sytc = $mysql->getAll($sql);
                                                      
                              foreach ($sytc as $k => $value) {
                                 
                                 echo '   <tr>
                              <td>
                                <input type="text" class="taocanjiage-'.$k.' form-control" value="'.$value['taocanjiage'].'">
                              </td>
                              <td>
                                <input type="text" class="taocangedu-'.$k.' form-control" value="'.$value['taocangedu'].'">
                              </td>
                            </tr>';
                                 
                              }
                              
                              
                              
                              ?>
                              
                              
                            
                            
                            
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="card-footer text-end">
                      <button class="btn btn-primary xgjiag" onclick="submitData()">修改</button>
                      
                      
                      
                      
                                   
<script>


function submitData() {
    
// 获取表格中的输入框元素
var taocanjiageInputs = document.querySelectorAll('[class^="taocanjiage-"]');
var taocangeduInputs = document.querySelectorAll('[class^="taocangedu-"]');


console.log(taocangeduInputs);

// 准备发送的数据
var data = [];
for (var i = 0; i < taocanjiageInputs.length; i++) {
  var taocanjiage = taocanjiageInputs[i].value;
  var taocangedu = taocangeduInputs[i].value;
  
  var data = {
      id:i+1,
  taocanjiage: taocanjiage,
  taocangedu: taocangedu
};
  
  $.ajax({
  type: "POST",
  url: "/admin/index.php?jgxg=huitu",
  data: data,
  traditional: true,
  success: function(response) {
      

           if(response == 1){
            alert('修改成功');
          
          }
      
      
    
  },
  error: function(error) {
    console.log(error);
  }
});
  
}




  
}
</script>

                      
                      
                      
                      
                      
                    </div>
                  </div>
                </div>
                        
                    

              </div>
                    
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
        
                      
                    </div>
          
         
     
         
</div>
                  </div>
                </div>
      





<?php
require('./footer.php');
?>