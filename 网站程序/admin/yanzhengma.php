<?php

require('../lib/init.php');

if(!acc()){
    $dangqianlj = $_SERVER['DOCUMENT_ROOT'] . '/';
    exit();
}


$qita = 'active';

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
                网站邮件设置
              </h1>
            </div>
         
        
        
        
        
        <div class="card card-md scc" style="display:none;">
                 
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-10">
                        <h3 class="h1">生成成功</h3>
                        
                        <div id="kmlist">
                            
                
                            
                        </div>
                        
                      
                      
                      
                      
                      
                      
                      
                      </div>
                    </div>
                  </div>
                </div>
        
        
        
        
        

                    <div class="card">
                      <div class="card-body">
                   
                        <h4 class="card-title"><a href="javascript:void(0)">网站邮件设置</a></h4>
                    
                    
                    
                    
                    <div class="col-md-6 col-xl-12">
                        
                        
                        
                        
                      
                            
                            <br>
                            
                        <div class="mb-3">
                            <div class="form-label">是否开启验证码登录：</div>
                            <div>
                                
                 
                   <?php
                   
                   $sql = "select yzmlx from chat_admin where id = 1";
                   
                   $gglx = $mysql->getOne($sql);
                   
                   if($gglx == '1'){
                       $one = 'checked';
                   }else if($gglx == '0'){
                       $tow = 'checked';
                   }
                   
                   
                   $sql = "select yxqq from chat_admin where id = 1";
                   $yxqq = $mysql->getOne($sql);
                   
                   
                   $sql = "select yxmm from chat_admin where id = 1";
                   $yxmm = $mysql->getOne($sql);
                   ?>
                                
                                
                                
                              <label class="form-check form-check-inline">
                                 
                                <input <?php echo $one;?> value="1" class="form-check-input xztc" type="radio" name="radios-inline">
                                
                                
                                <span class="form-check-label">开启注册邮件验证</span>
                              </label>
                              
                              
                              
                              
                              
                              <label class="form-check form-check-inline">
                           
                                <input <?php echo $tow;?> value="0" class="form-check-input xztc" type="radio" name="radios-inline">
                           
                                <span class="form-check-label">关闭注册邮件</span>
                              </label>
                           
                        
                           
                            </div>
                          </div>
                            
         
         
                        <div class="form-group">
                          <label class="form-label">邮箱地址:</label>
                          <input type="text" class="form-control yxqq" name="title" placeholder="<?php echo $yxqq;?>" value="<?php echo $yxqq;?>">
                        </div>
                
                      
                        
         
                        <div class="form-group">
                          <label class="form-label">邮箱密钥:</label>
                          <input type="text" class="form-control yxmm" name="title" placeholder="<?php echo $yxmm;?>" value="<?php echo $yxmm;?>">
                        </div>
                
                      
         
       
                        <div class="mt-5 d-flex align-items-center">
                    
                          <div class="ml-auto wzggxg">
                            <a href="javascript:void(0)" class="btn btn-primary">点我修改</a>
                          </div>
                        </div>
                   
                   
                   
                   
                   
                   
                   
                        <div class="form-group">
                          <label class="form-label">测试收件人:</label>
                          <input type="email" class="form-control ceshiqq" name="title" placeholder="输入你的邮箱地址" value="">
                        </div>
                
                   
                   
                   
                        <div class="mt-5 d-flex align-items-center">
                    
                          <div class="ml-auto cesfs">
                            <a href="javascript:void(0)" class="btn btn-primary">测试发送</a>
                          </div>
                        </div>
                   
          
                        </div>
                    
                    
                    
                    
                    
                    
                  
                        
                     
            
            
            
            
                        
                      </div>

                      
                    </div>
          
         
     
         
</div>
                  </div>
                </div>
             </div>


              
                 
              <script>
              
              
              
$('.cesfs').click(function(event){
    
    

//判断选择了什么
var xztc = $('input[name="radios-inline"]:checked').val();

var yxmm = $('.yxmm').val();   
var yxqq = $('.yxqq').val();   
var ceshiqq = $('.ceshiqq').val();   





if(yxqq == ''){
    alert('表单不完整');
    event.stopImmediatePropagation();
    return false;
}

if(yxmm == ''){
    alert('表单不完整');
    event.stopImmediatePropagation();
    return false;
}

if(ceshiqq == ''){
    alert('表单不完整');
    event.stopImmediatePropagation();
    return false;
}




      $('.cesfs').html('<a href="javascript:void(0)" class="btn btn-primary">正在提交...</a>');
           
       
       
       
  
$.ajax({
    

  type: "POST",
  url: "../email.php", //需要写云端连接
  data: {
      xztc:xztc,
      yxmm:yxmm,
      yxqq,yxqq,
      ceshiqq:ceshiqq,
      ceshi:'1',
      
  },
  traditional: true,
  success: function(response) {




     if (response.indexOf("发送成功") !== -1) {
            alert('提交成功 请检查是否收到邮件');
            $('.wzggxg').html('<a href="javascript:void(0)" class="btn btn-primary">测试发送</a>');
                //   location.reload();
     
        event.stopImmediatePropagation();
        return false;
        }else{
     alert('提交失败 请检查配置');
            $('.wzggxg').html('<a href="javascript:void(0)" class="btn btn-primary">测试发送</a>');
            //  location.reload();
        }


      
    
  },

});     
       
       
       
       
       
});         
              
              
              
              
              
              
              
              
              
              
                  
   
$('.wzggxg').click(function(event){




//判断选择了什么
var xztc = $('input[name="radios-inline"]:checked').val();

var yxmm = $('.yxmm').val();   
var yxqq = $('.yxqq').val();   



if(yxqq == ''){
    alert('表单不完整');
    event.stopImmediatePropagation();
    return false;
}

if(yxmm == ''){
    alert('表单不完整');
    event.stopImmediatePropagation();
    return false;
}


      $('.wzggxg').html('<a href="javascript:void(0)" class="btn btn-primary">正在修改...</a>');
           
       

$.ajax({
    

  type: "POST",
  url: "../tool/ajax.php", //需要写云端连接
  data: {
      xztc:xztc,
      biaoshi:'验证码',
      yxmm:yxmm,
      yxqq,yxqq,
      
  },
  traditional: true,
  success: function(response) {



        if(response == 1){
            alert('修改成功');
            $('.wzggxg').html('<a href="javascript:void(0)" class="btn btn-primary">点我修改</a>');
                   location.reload();
     
        event.stopImmediatePropagation();
        return false;
        }else{
            alert('修改失败');
            $('.wzggxg').html('<a href="javascript:void(0)" class="btn btn-primary">点我修改</a>');
             location.reload();
        }



        
        
      
    
  },

});
         
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
  });                 
                  
            
            
            
            
            

   
              </script>   
          









<?php
require('./footer.php');
?>