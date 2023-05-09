   
<?php
require('../lib/init.php');


$usersy = 'active';

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
                用户信息修改
              </h1>
            </div>
         
        

                    <div class="card">
                      <div class="card-body">
                   
                        <h4 class="card-title"><a href="javascript:void(0)">用户信息修改</a></h4>
                    
                    
                    
                    
                    <div class="col-md-6 col-xl-12">
                        
                        
                        
                        
                            <div class="mb-3">
                              <label class="form-label">这个页面你可以修改用户的次数什么的，修改其中一个就可以了，另外一个就不用管！</label>
            
                            </div>
                            
                            
                            
                            <div class="mb-3">
                              <label class="form-label">用户</label>
                              <input type="text" class="form-control" name="example-disabled-input" placeholder="Disabled..." value="<?php echo $_GET['id'];?>" disabled="">
                            </div>
                            
              
                            
                            
                            <?php
                            
                            $yhm = $_GET['id'];
                            
                            $sql = "select sycs from chat_yonghu where yhmc='$yhm'";
                            $sycs = $mysql->getOne($sql);
                                                    
                            
                             $sql = "select vip from chat_yonghu where yhmc='$yhm'";
                            $vip = $mysql->getOne($sql);
                                                    
                            
                            // if($vip == ''){
                            //     $vip = '无会员';
                            // }
                            
                            
                            ?>
                            
                            
                            <div class="mb-3">
                              <label class="form-label">剩余提问次数_例如:1</label>
                              <input type="text" value="<?php echo $sycs;?>" class="form-control sycs" name="example-text-input" placeholder="<?php echo $sycs;?>">
                            </div>
                            <div class="mb-3">
                              <label class="form-label">会员到期时间_例如:2023-04-15</label>
                              <input value="<?php echo $vip;?>"  type="text" class="form-control hydq" name="example-password-input" placeholder="<?php echo $vip;?>">
                            </div>
                            
         
          
                        </div>
                    
                    
                    
                    
                    
                    
                     
                        <div class="mt-5 d-flex align-items-center">
                    
                          <div class="ml-auto jcgx">
                            <a href="javascript:void(0)" class="btn btn-primary">点我更新用户信息</a>
                          </div>
                        </div>
                        
                     
            
            
            
            
                        
                      </div>

                      
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