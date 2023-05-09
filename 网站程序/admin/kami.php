<?php

require('../lib/init.php');

if(!acc()){
    $dangqianlj = $_SERVER['DOCUMENT_ROOT'] . '/';
    exit();
}


$kami = 'active';

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
                卡密生成页面
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
                   
                        <h4 class="card-title"><a href="javascript:void(0)">卡密生成页面</a></h4>
                    
                    
                    
                    
                    <div class="col-md-6 col-xl-12">
                        
                        
                        
                        
                      
                            
                            <br>
                            
                        <div class="mb-3">
                            <div class="form-label">请选择生成卡密类型：</div>
                            <div>
                              <label class="form-check form-check-inline">
                                  
                                <input value="hytc" class="form-check-input xztc" type="radio" name="radios-inline" checked="">
                                
                                
                                <span class="form-check-label">会员套餐</span>
                              </label>
                              
                              
                              
                              <label class="form-check form-check-inline">
                                  
                                  
                                <input value="cstc" class="form-check-input xztc" type="radio" name="radios-inline">
                                
                                
                                
                                <span class="form-check-label">次数套餐</span>
                              </label>
                           
                           
                           
                              
                              <label class="form-check form-check-inline">
                                  
                                  
                                <input value="huitutc" class="form-check-input xztc" type="radio" name="radios-inline">
                                
                                
                                
                                <span class="form-check-label">绘图套餐</span>
                              </label>
                           
                           
                            </div>
                          </div>
                            
              
   
                            
                            <div class="mb-3">
                              
                              <label class="form-label">选择会员套餐输入"1":就是一个月的卡密，选择次数套餐输入"1":就是Chatgpt提问1次的卡密，选择绘图套餐输入"1"就是绘图1次的卡密，绘图没有会员套餐！</label>
                              
                              <input type="text" value="" class="form-control kamisycs" name="example-text-input" placeholder="请输入...">
                            </div>
                          
                          
                            <div class="mb-3">
                              
                              <label class="form-label">生成卡密数量 例如:1</label>
                              
                              <input type="text" value="" class="form-control kmsl" name="example-text-input" placeholder="请输入...">
                            </div>
                          
                          
                          
                          
                          
                            
         
          
                        </div>
                    
                    
                    
                    
                    
                    
                     
                        <div class="mt-5 d-flex align-items-center">
                    
                          <div class="ml-auto sckm">
                            <a href="javascript:void(0)" class="btn btn-primary">点我生成卡密</a>
                          </div>
                        </div>
                        
                     
            
            
            
            
                        
                      </div>

                      
                    </div>
          
         
     
         
</div>
                  </div>
                </div>
             </div>


              
                 
              <script>
                  
   
  $('.sckm').click(function(event){


//判断选择了什么 卡密类型
var xztc = $('input[name="radios-inline"]:checked').val();
//卡密数量
var kmsl = $('.kmsl').val();   
//卡密有多少
var kamisycs = $('.kamisycs').val();  


// alert(kmsl);

if(kmsl == ''){
    alert('表单不完整');
    event.stopImmediatePropagation();
    return false;
}

if(kamisycs == ''){
    alert('表单不完整');
    event.stopImmediatePropagation();
    return false;
}




      
$('.sckm').html('<a href="javascript:void(0)" class="btn btn-primary">正在生成...</a>');
                  
                  
                  
                  
    
            
            
                  


$.ajax({
    


    
  type: "POST",
  url: "../tool/ajax.php", //需要写云端连接
     dataType: "json",
  data: {
      xztc:xztc,
      kmsl:kmsl,
      biaoshi:'卡密生成',
      kamisycs:kamisycs,
      
  },
  traditional: true,
  success: function(response) {



        var list = document.getElementById('kmlist');
        if(response.sccg == '1'){
            alert(response.ts);
            
            // alert(response.nr);
            // for(var i=0;v<(response.nr).)
            
            for (var i = 0; i < response.nr.length; i++) {
                var item = response.nr[i];
                var li = document.createElement('p');
                li.innerHTML = item;
                list.appendChild(li);
            }
            
            $('.scc').css('display','block');
            
            console.log();
            
        }
        
        
        $('.sckm').html('<a href="javascript:void(0)" class="btn btn-primary">点我生成卡密</a>');
                  
          

        //  alert(response.nr);
     
        //   $('.jcgx').html('<a href="javascript:void(0)" class="btn btn-primary">点我更新用户信息</a>');



        // location.reload();
  
     
     
        event.stopImmediatePropagation();
        return false;
      
    
  },

});
         
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
  });                 
                  
            
            
            
            
            
            
                  
      
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