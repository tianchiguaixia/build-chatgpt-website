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
                IP封禁
              </h1>
            </div>
         

                    <div class="card">
                      <div class="card-body">
                   
                        <h4 class="card-title"><a href="javascript:void(0)">IP封禁 IP封了之后这个IP的用户就不得访问网站 防止白嫖党 或者一些其他特殊情况</a></h4>
                    
                    
                    
                    
                    <div class="col-md-6 col-xl-12">
                        
   
         
                  
         <div class="mb-3">
                        <label class="form-label">IP封禁(使用"|"隔开)，例如:(127.0.0.1|127.0.0.2):</label>
                        
                        <textarea style="height: 300px;" class="form-control wzgghtml" rows="5"><?php require('./ip.php');?></textarea>
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


var wzgghtml = $('.wzgghtml').val();   

       

$.ajax({
    

  type: "POST",
  url: "../tool/xg.php", //需要写云端连接
  data: {
      biaoshi:'IP封禁',
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