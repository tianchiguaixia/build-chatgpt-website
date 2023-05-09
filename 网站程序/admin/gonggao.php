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
                网站公告设置
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
                   
                        <h4 class="card-title"><a href="javascript:void(0)">网站公告设置</a></h4>
                    
                    
                    
                    
                    <div class="col-md-6 col-xl-12">
                        
                        
                        
                        
                      
                            
                            <br>
                            
                        <div class="mb-3">
                            <div class="form-label">请选择公告显示类型：</div>
                            <div>
                                
                                
                                
                   <?php
                   $sql = "select gglx from chat_admin where id = 1";
                   $gglx = $mysql->getOne($sql);
                   
                   if($gglx == '1'){
                       $one = 'checked';
                   }else if($gglx == '2'){
                       $tow = 'checked';
                   }else if($gglx == '3'){
                       $three = 'checked';
                   }else{
                       $for = 'checked';
                   }
                   
                   
                   
                   ?>
                                
                                
                                
                              <label class="form-check form-check-inline">
                                 
                                <input <?php echo $one;?> value="1" class="form-check-input xztc" type="radio" name="radios-inline">
                                
                                
                                <span class="form-check-label">首次访问显示</span>
                              </label>
                              
                              
                              
                              
                              
                              <!--<label class="form-check form-check-inline">-->
                           
                              <!--  <input <?php // echo $tow;?> value="2" class="form-check-input xztc" type="radio" name="radios-inline">-->
                           
                              <!--  <span class="form-check-label">用户注册后显示</span>-->
                              <!--</label>-->
                           
                           
                           
                           
                           
                           
                               <label class="form-check form-check-inline">
                                   
                                <input <?php echo $three;?> value="3" class="form-check-input xztc" type="radio" name="radios-inline">
                                
                                
                                
                                <span class="form-check-label">购买套餐后显示</span>
                              </label>
                           
                           
                           
                           
                           
                                  <label class="form-check form-check-inline">
                                   
                                <input <?php echo $for;?> value="4" class="form-check-input xztc" type="radio" name="radios-inline">
                                
                                
                                
                                <span class="form-check-label">关闭公告</span>
                              </label>
                           
                           
                        
                           
                            </div>
                          </div>
                            
              
   
          
         
         
                  
         <div class="mb-3">
                        <label class="form-label">网站公告:</label>
                        
                        <textarea style="height: 300px;" class="form-control wzgghtml" rows="5"><?php require('./ggnr.php');?></textarea>
                      </div>
                      
                      
                                 
         
       
                        <div class="mt-5 d-flex align-items-center">
                    
                          <div class="ml-auto wzggxg">
                            <a href="javascript:void(0)" class="btn btn-primary">点我修改</a>
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
                  
   
  $('.wzggxg').click(function(event){

    $('.wzggxg').html('<a href="javascript:void(0)" class="btn btn-primary">正在修改...</a>');
           



//判断选择了什么
var xztc = $('input[name="radios-inline"]:checked').val();

var wzgghtml = $('.wzgghtml').val();   



// alert(wzgghtml)



// alert(kmsl);

if(wzgghtml == ''){
    alert('表单不完整');
    event.stopImmediatePropagation();
    return false;
}

if(xztc == ''){
    alert('表单不完整');
    event.stopImmediatePropagation();
    return false;
}


             

$.ajax({
    

  type: "POST",
  url: "../tool/ajax.php", //需要写云端连接
  data: {
      xztc:xztc,
      biaoshi:'公告修改',
      wzgghtml:wzgghtml,
      
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