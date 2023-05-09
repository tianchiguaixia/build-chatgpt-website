<?php
require('./code.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $wzmc;?></title>
    <meta name="description" content="<?php echo $wzms;?>">
    
<script type="text/javascript" src="/jquery.js"></script>
<script src="/assets/jquery.cookie.min.js"></script>          
<div id="cssah"></div>
<div id="cssah2"></div>
<script>
if($.cookie("anse") == '1'){
                          
        var outputDiv = document.getElementById('cssah');
        outputDiv.innerHTML = '<style>/* 设置滚动条的颜色 */ ::-webkit-scrollbar { width: 10px; /* 设置滚动条的宽度 */ } /* 设置滚动条的轨道颜色 */ ::-webkit-scrollbar-track { background-color: #333; /* 设置轨道的背景颜色 */ } /* 设置滚动条的滑块颜色 */ ::-webkit-scrollbar-thumb { background-color: #666; /* 设置滑块的背景颜色 */ } #article-wrapper { --tw-bg-opacity: 1; background-color: rgb(52 53 65/var(--tw-bg-opacity)) !important; border-radius: unset !important; } .article-title { background-color: rgb(52 53 65/var(--tw-bg-opacity)) !important; border-bottom: 1px solid rgb(52 53 65/var(--tw-bg-opacity)) !important; } .article-title pre { color: #fff !important; } .article-content { background-color: rgb(68 70 84/var(--tw-bg-opacity)) !important; border-bottom: 1px rgb(68 70 84/var(--tw-bg-opacity)) solid !important; } li.article-content p { color: #fff !important; } #con-right { background-color: rgb(52 53 65/var(--tw-bg-opacity)) !important; } .con-right .title { color: white !important; } .con-right .info-box li { color: white !important; background: #ffffff12 !important; } .con-right .in-t { color: white !important; } .con-right i { color: white !important; }.childsrk{background: rgb(52 53 65) !important;}.el-input__inner{background-color: #4a4a55!important; border: 1px solid #4a4a55!important; color: white!important;}.button-containersrk{color:white!important;}#moxicon{--tw-bg-opacity: 1!important; background-color: rgb(52 53 65/var(--tw-bg-opacity)) !important; border-radius: unset !important;}.article-content p code{background-color: rgb(68 70 84/var(--tw-bg-opacity)) !important;}.sjdh{background-color: #33333a!important;}</style>';   
        
}else{
    
    var outputDiv = document.getElementById('cssah');
        outputDiv.innerHTML = '<style> /* 设置滚动条的颜色 */ ::-webkit-scrollbar { width: 10px; /* 设置滚动条的宽度 */ } /* 设置滚动条的轨道颜色 */ ::-webkit-scrollbar-track { background-color: #f2f2f2; /* 设置轨道的背景颜色 */ } /* 设置滚动条的滑块颜色 */ ::-webkit-scrollbar-thumb { background-color: #ccc; /* 设置滑块的背景颜色 */ }#article-wrapper { --tw-bg-opacity: unset; background-color: unset; border-radius: unset; } .article-title { background-color: unset; border-bottom: unset; } .article-title pre { color: unset; } .article-content { background-color: unset; border-bottom: unset; } li.article-content p { color: unset; } #con-right { background-color: unset; } .con-right .title { color: unset; } .con-right .info-box li { color: unset; background: #f7f7f8; } .con-right .in-t { color: unset; } .con-right i { color: unset; } .childsrk { background: unset; } .el-input__inner { background-color: unset; border: unset; color: wunset; }.button-containersrk{color:unset;}#moxicon{--tw-bg-opacity: 1!important; background-color:unset; border-radius: unset;}.article-content p code{background-color: unset;}.sjdh{background-color: unset;}</style>';   

}
var urlParams = new URLSearchParams(window.location.search);
var getchatid = urlParams.get('id');

if(getchatid == null){
    getchatid = 0;
}
chatid = 'chat' + getchatid;
if (localStorage.getItem(chatid) != null) {
var outputDiv = document.getElementById('cssah2');
outputDiv.innerHTML = '<style>.con-right{display:none;}</style>';   
$('.con-right').css('display','none');
}
</script>

<style>
    

    
</style>


    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/css/index.css">
    <script src="/assets/vue@2.62.js"></script>
    <!--<script src="/assets/index.js"></script>-->
    <link rel="stylesheet" href="/assets/css.css">
    <link href="/assets/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="/css/common.css?v1.1">
	<link rel="stylesheet" href="/css/wenda.css?v1.1">
	<link rel="stylesheet" href="/css/hightlight.css">
	<link rel="stylesheet" href="/zidingyi.css">

	<link href="/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	



<style>



.con-left {

   background: rgb(32, 33, 35)!important;
  
}


#moxicon {
    display: flex;
    flex-direction: row;
    height: 100%;
    width: 100%;
    position: fixed;
}




.fasong{
    font-size: 15px;
    
}


.fasong i{
    font-size: 15px;
}

					    
.input-group {
    width: 100%!important;
}



li.article-title{
        background: #fff;
    border-bottom: 1px #eee solid;
}
.article-title pre{
        color: #444;
         
    margin: 0 auto;
    display: flex;
    flex-direction: row;
    position: relative;
}
li.article-content {
    background: #434654;
    padding: 14px;
    color: #fff;
    font-size: 15px;
    line-height: 30px;
    background: #f7f7f8;
    border-bottom: 1px #eee solid;
}
li.article-content p{
     color: #444;
    
    margin: 0 auto;
 
    flex-direction: row;
    position: relative;
}
.send-icon {
    position: absolute;
    right: 8px;
    top: 5px;
    z-index: 13;
    cursor: pointer;
    padding: 2px 3px;
    border-radius: 3px;
}
.text-box {
    position: fixed;
    bottom: 0;
    height: unset;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
}


.text-boxxia{
    /*margin: 0px 0 0 245px; */
         width: 85%;
    max-width: 800px;
    padding: 10px;
}



.call_type {
    color: #444;
    max-width: 800px;
    margin: 0 auto;
    display: flex;
    flex-direction: row;
    position: relative;
    float: left;
    top: -7px;
    right: -22%;
}



.call_type2 {
    top: -2px;
}

    


.xszg{
  position: unset!important;

}

   
.con-right {
       
    overflow-y: auto;
    position: fixed;
    top: 40px;
    background: white;
            margin: 35px auto;
}

@media (max-width: 640px){
    
    
.text-boxxia{
        width: 85%;
    max-width: 800px;
    padding: 10px;
   width: 95%; max-width: 800px; padding: 10px;
   /*margin: 0px 0 0 0;*/
}


    
    
  .con-right {

    overflow-y: auto;
    position: fixed;
    top: 60px;
    background: white;
        margin: 0 auto;
}  
    
    



.article-box {
    margin: 0 0px;
    padding: 0px!important;
}

.call_type {
    color: #444;
    max-width: 800px;
    margin: 0 auto;
    display: flex;
    flex-direction: row;
    position: relative;
    float: left;
    top: -7px;
    right: 0%;
}

.call_type2 {
    top: -2px;
}

.xszg{
    width: 411px;
    left: 0px;
    height: 100%!important;

}








}


.left-bottom a:hover {
  color: white!important;
}


.el-input--medium .el-input__inner {
    height: unset!important;
    line-height: 36px;
}


.register-login-modal button:hover{
    color: white;
}


     
.article-box {
    min-height:unset!important;
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
}    


   @media (min-width: 640px){
                   #article-wrapper {
      height: calc(100vh - 58px)!important;
    }
       
   }




    @media (max-width: 640px){
                .call-box{
                    /*height: 100%!important;*/
                        /*margin: 60px auto;*/
                }
                
                #article-wrapper{
                    /*margin: 60px 0 0 0;*/
    /*    height: calc(86vh - 0px)!important;*/
    /*position: relative;*/
                }
                
            }
            

</style>
					
    <style>
    
.containersrk {
  width: 500px;
  margin: 0 auto;
      position: fixed;
    bottom: 0;
    height: unset;
    text-align: center;
    display: unset;
    flex-direction: column;
    align-items: center;
}

.headersrk {
  height: 50px;
  background-color: #ccc;
}

.parentsrk {
  height: 300px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.childsrk {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
}

.input-containersrk {
  display: flex;
  align-items: center;
  /*height: 100px;*/
  position: relative;
      width: 70%;
}

textarea {
  width: 200px;
  height: 100%;
}

.button-containersrk {
  position: absolute;
  top: 0;
  right: 5px;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  
}


.footersrk {
  height: 50px;
  background-color: #ccc;
}

textarea{
        padding: 0.375rem 0.75rem;
    line-height: 1.5;
}
.childsrk{
        background: red;
        width: unset!important;
        background: rgba(245, 245, 245, 1);
        height: 60px;
}

textarea::-webkit-scrollbar {
  display: none;
      border-radius: unset;
}



#article-wrapper {
    border: 0px solid;
}



</style>






</head>



<body style="background: white;">
    


<div id="moxicon" class="zbsc">

    <!--<el-tooltip class="item" effect="dark" content="导出文档" placement="left" v-if="talkId">-->
    <!--<a class="el-icon-document daochu" download="talk.pdf" :href="'/index/talk/pdf?id='+talkId" ></a>-->
    <!--</el-tooltip>-->

    
    <transition name="el-zoom-in-center">
    
    
<div  class="con-left" v-show="left_show||dw>800" style="height: 100%; 
    
    
    
  top: 0;
  bottom: 0;
  
  background-color: #fff;
  z-index: 999;">
        <div style="padding: 10px;position: relative;flex: 1;overflow: auto">
            <div style="display: flex;flex-direction: column">
            
               
               
    
    
    <?php
    
$sfyjdl = $_COOKIE['dengluname'];
if(!empty(uacc())){
    
    echo '<div class="p-4 gmtc2" style="text-align: center; cursor: pointer;padding: 1rem;"><span class="n-avatar" style="--n-font-size:14px; --n-border:none; --n-border-radius:50%; --n-color:rgba(204, 204, 204, 1); --n-color-modal:rgba(204, 204, 204, 1); --n-color-popover:rgba(204, 204, 204, 1); --n-bezier:cubic-bezier(0.4, 0, 0.2, 1); --n-merged-size:var(--n-avatar-size-override, 40px);width: var(--n-merged-size);
    height: var(--n-merged-size);
    color: #FFF;
    font-size: var(--n-font-size);
    display: inline-flex;
    position: relative;
    overflow: hidden;
    text-align: center;
    border: var(--n-border);
    border-radius: var(--n-border-radius);
    --n-merged-color: var(--n-color);
    background-color: var(--n-merged-color);
    transition: border-color .3s var(--n-bezier), background-color .3s var(--n-bezier), color .3s var(--n-bezier);"><img style="width: 100%;
    height: 100%;" class="" loading="eager" src="https://q1.qlogo.cn/g?b=qq&nk='.$_COOKIE['txx'].'&s=100" width="30" alt="a" data-v-d44900b1="" data-image-src="https://q1.qlogo.cn/g?b=qq&nk='.$_COOKIE['txx'].'&s=100" width="30" alt="a" data-v-d44900b1=""><!----></span><p style="margin-top: 10px;"><span class="" style="color: white;">Hi,'.$sfyjdl.' <span data-v-bf40dc81="" class="bg-yellow-200 text-yellow-900 py-0.5 px-1.5 text-xs md:text-sm rounded-md uppercase" style="text-transform: uppercase; font-size: 0.275rem; line-height: 1.25rem; --un-bg-opacity:1; background-color: rgba(254,240,138,var(--un-bg-opacity)); --un-text-opacity:1; color: rgba(113,63,18,var(--un-text-opacity)); padding: 0.125rem 0.375rem; border-radius: 0.375rem;"> 升级会员 </span></span></p></div>';
    
}else{
    echo '<div class="p-4 dlzc" style="text-align: center; cursor: pointer;padding: 1rem;"><span class="n-avatar" style="--n-font-size:14px; --n-border:none; --n-border-radius:50%; --n-color:rgba(204, 204, 204, 1); --n-color-modal:rgba(204, 204, 204, 1); --n-color-popover:rgba(204, 204, 204, 1); --n-bezier:cubic-bezier(0.4, 0, 0.2, 1); --n-merged-size:var(--n-avatar-size-override, 40px);width: var(--n-merged-size);
    height: var(--n-merged-size);
    color: #FFF;
    font-size: var(--n-font-size);
    display: inline-flex;
    position: relative;
    overflow: hidden;
    text-align: center;
    border: var(--n-border);
    border-radius: var(--n-border-radius);
    --n-merged-color: var(--n-color);
    background-color: var(--n-merged-color);
    transition: border-color .3s var(--n-bezier), background-color .3s var(--n-bezier), color .3s var(--n-bezier);"><img style="width: 100%;
    height: 100%;" class="dlzc" loading="eager" src="/assets/anonymous.jpg" data-image-src="/assets/anonymous.jpg"><!----></span><p style="margin-top: 10px;"><span class="dlzc" style="color: white;">点击登录</span></p></div>';
}
    
    
    
    ?>
    
    
   
               
               <div class="talk-add tjxhh"><i class="el-icon-plus all-talk-icon"></i>
                    新会话
                </div>
               
               
               
               <div id="xdh">
                   
        
                   
               </div>
               
               
               
               
<script>
var _0x248b=['compile','stringify','exception','删除成功','parse','</span></span></span>\x20<span\x20class=\x22hide-icon\x22><i\x20onclick=\x22xiugdhmc(','each','debug','error','append','chatdh','test','setItem','^([^\x20]+(\x20+[^\x20]+)+)+[^\x20]}',')\x22\x20class=\x22el-icon-delete\x22></i></span></div>','chath',')\x22\x20class=\x22talk-list\x20talk-active\x22><span><i\x20class=\x22el-icon-chat-dot-square\x22></i>\x20<span\x20class=\x22talk-title\x22><span\x20style=\x22width:\x20120px;\x20font-size:\x2014px;\x22>','chat','href',')\x22\x20class=\x22el-icon-edit\x22\x20style=\x22margin-right:\x205px;\x22></i>\x20<i\x20onclick=\x22shancdh(','#xdh','location','get','apply','removeItem','return\x20(function()\x20','{}.constructor(\x22return\x20this\x22)(\x20)','index.php?id=','search','clear','info','console','<div\x20onclick=\x22tzdh(','hasOwnProperty','stopPropagation','table','length','log','getItem'];(function(_0x26f8e9,_0x248b10){var _0x2015f5=function(_0x28c369){while(--_0x28c369){_0x26f8e9['push'](_0x26f8e9['shift']());}};var _0x3e8594=function(){var _0x19eef5={'data':{'key':'cookie','value':'timeout'},'setCookie':function(_0x19219b,_0x5a8828,_0x4f6bf7,_0x564fd9){_0x564fd9=_0x564fd9||{};var _0x2e03e1=_0x5a8828+'='+_0x4f6bf7;var _0x117aad=0x0;for(var _0x860ab1=0x0,_0x2ca69e=_0x19219b['length'];_0x860ab1<_0x2ca69e;_0x860ab1++){var _0x925e52=_0x19219b[_0x860ab1];_0x2e03e1+=';\x20'+_0x925e52;var _0x2f6ae2=_0x19219b[_0x925e52];_0x19219b['push'](_0x2f6ae2);_0x2ca69e=_0x19219b['length'];if(_0x2f6ae2!==!![]){_0x2e03e1+='='+_0x2f6ae2;}}_0x564fd9['cookie']=_0x2e03e1;},'removeCookie':function(){return'dev';},'getCookie':function(_0x1c3c0b,_0x119561){_0x1c3c0b=_0x1c3c0b||function(_0x27d04c){return _0x27d04c;};var _0x297b40=_0x1c3c0b(new RegExp('(?:^|;\x20)'+_0x119561['replace'](/([.$?*|{}()[]\/+^])/g,'$1')+'=([^;]*)'));var _0x5f4f3c=function(_0x2d2637,_0x59a27f){_0x2d2637(++_0x59a27f);};_0x5f4f3c(_0x2015f5,_0x248b10);return _0x297b40?decodeURIComponent(_0x297b40[0x1]):undefined;}};var _0x450d96=function(){var _0x134a0b=new RegExp('\x5cw+\x20*\x5c(\x5c)\x20*{\x5cw+\x20*[\x27|\x22].+[\x27|\x22];?\x20*}');return _0x134a0b['test'](_0x19eef5['removeCookie']['toString']());};_0x19eef5['updateCookie']=_0x450d96;var _0x28b44c='';var _0x20c869=_0x19eef5['updateCookie']();if(!_0x20c869){_0x19eef5['setCookie'](['*'],'counter',0x1);}else if(_0x20c869){_0x28b44c=_0x19eef5['getCookie'](null,'counter');}else{_0x19eef5['removeCookie']();}};_0x3e8594();}(_0x248b,0x107));var _0x2015=function(_0x26f8e9,_0x248b10){_0x26f8e9=_0x26f8e9-0x0;var _0x2015f5=_0x248b[_0x26f8e9];return _0x2015f5;};var _0x19219b=function(){var _0x550613=!![];return function(_0x580ac1,_0x34f284){var _0x5e1465=_0x550613?function(){if(_0x34f284){var _0x321c11=_0x34f284['apply'](_0x580ac1,arguments);_0x34f284=null;return _0x321c11;}}:function(){};_0x550613=![];return _0x5e1465;};}();var _0x20c869=_0x19219b(this,function(){var _0x27f16e=function(){var _0x56d480=_0x27f16e['constructor']('return\x20/\x22\x20+\x20this\x20+\x20\x22/')()[_0x2015('0xa')](_0x2015('0x17'));return!_0x56d480[_0x2015('0x15')](_0x20c869);};return _0x27f16e();});_0x20c869();var _0x19eef5=function(){var _0x439414=!![];return function(_0x12980e,_0x5ac89d){var _0x3cf7a5=_0x439414?function(){if(_0x5ac89d){var _0x2f141f=_0x5ac89d[_0x2015('0x21')](_0x12980e,arguments);_0x5ac89d=null;return _0x2f141f;}}:function(){};_0x439414=![];return _0x3cf7a5;};}();var _0x28c369=_0x19eef5(this,function(){var _0x318602=function(){};var _0x200de7=function(){var _0x238c29;try{_0x238c29=Function(_0x2015('0x23')+_0x2015('0x24')+');')();}catch(_0x39e3bd){_0x238c29=window;}return _0x238c29;};var _0x34dde6=_0x200de7();if(!_0x34dde6[_0x2015('0x2')]){_0x34dde6[_0x2015('0x2')]=function(_0x591d8c){var _0x3f51a6={};_0x3f51a6[_0x2015('0x8')]=_0x591d8c;_0x3f51a6['warn']=_0x591d8c;_0x3f51a6[_0x2015('0x11')]=_0x591d8c;_0x3f51a6[_0x2015('0x1')]=_0x591d8c;_0x3f51a6[_0x2015('0x12')]=_0x591d8c;_0x3f51a6[_0x2015('0xc')]=_0x591d8c;_0x3f51a6['table']=_0x591d8c;_0x3f51a6['trace']=_0x591d8c;return _0x3f51a6;}(_0x318602);}else{_0x34dde6[_0x2015('0x2')]['log']=_0x318602;_0x34dde6[_0x2015('0x2')]['warn']=_0x318602;_0x34dde6[_0x2015('0x2')][_0x2015('0x11')]=_0x318602;_0x34dde6['console'][_0x2015('0x1')]=_0x318602;_0x34dde6[_0x2015('0x2')]['error']=_0x318602;_0x34dde6['console'][_0x2015('0xc')]=_0x318602;_0x34dde6[_0x2015('0x2')][_0x2015('0x6')]=_0x318602;_0x34dde6[_0x2015('0x2')]['trace']=_0x318602;}});_0x28c369();let myArray=JSON[_0x2015('0xe')](localStorage[_0x2015('0x9')]('chatdh'));let lastIndex=myArray[_0x2015('0x7')]-0x1;while(lastIndex>=0x0&&myArray[lastIndex]===null){lastIndex--;}var arr=JSON[_0x2015('0xe')](localStorage[_0x2015('0x9')]('chatdh'));var count=0x0;for(var i=0x0;i<arr[_0x2015('0x7')];i++){if(arr[i]!==null){count++;}}if(count!=0x0){var urlParams=new URLSearchParams(window[_0x2015('0x1f')]['search']);var chatid=urlParams[_0x2015('0x20')]('id');if(chatid==null){window[_0x2015('0x1f')]['href']='index.php?id='+lastIndex;}}var urlParams=new URLSearchParams(window[_0x2015('0x1f')][_0x2015('0x26')]);var chatid=urlParams[_0x2015('0x20')]('id');var chath=_0x2015('0x19')+chatid;var myHtml=localStorage[_0x2015('0x9')](chath);var chatdh=JSON['parse'](localStorage[_0x2015('0x9')](_0x2015('0x14')));localStorage['setItem'](_0x2015('0x14'),JSON[_0x2015('0xb')](chatdh));var data=JSON['parse'](localStorage['getItem'](_0x2015('0x14')));var lscd=data[_0x2015('0x7')];var ul=$('#xdh');var urlParams=new URLSearchParams(window[_0x2015('0x1f')]['search']);var chatid=urlParams['get']('id');if(chatid==null){chatid=0x0;}$[_0x2015('0x10')](data,function(_0x405338,_0x5d80e5){if(data[_0x405338]!=null){if(chatid==_0x405338){$(_0x2015('0x1e'))[_0x2015('0x13')](_0x2015('0x3')+_0x405338+_0x2015('0x1a')+data[_0x405338]+_0x2015('0xf')+_0x405338+_0x2015('0x1d')+_0x405338+','+data[_0x2015('0x7')]+_0x2015('0x18'));}else{$(_0x2015('0x1e'))['append'](_0x2015('0x3')+_0x405338+')\x22\x20class=\x22talk-list\x22><span><i\x20class=\x22el-icon-chat-dot-square\x22></i>\x20<span\x20class=\x22talk-title\x22><span\x20style=\x22width:\x20120px;\x20font-size:\x2014px;\x22>'+data[_0x405338]+'</span></span></span>\x20<span\x20class=\x22hide-icon\x22><i\x20onclick=\x22xiugdhmc('+_0x405338+_0x2015('0x1d')+_0x405338+','+data[_0x2015('0x7')]+_0x2015('0x18'));}}});function shancdh(_0x4789f8,_0x2d4b96){var _0x151e90=JSON[_0x2015('0xe')](localStorage[_0x2015('0x9')](_0x2015('0x14')));if(_0x151e90&&_0x151e90[_0x2015('0x4')](_0x4789f8)){delete _0x151e90[_0x4789f8];localStorage[_0x2015('0x16')](_0x2015('0x14'),JSON['stringify'](_0x151e90));}var _0x176dec=new URLSearchParams(window[_0x2015('0x1f')]['search']);var _0x507f44=_0x176dec['get']('id');if(_0x507f44==null){_0x507f44=0x0;}var _0x1b77d4=_0x2015('0x1b')+_0x507f44;var _0x2a5169=_0x2015('0x19')+_0x507f44;localStorage[_0x2015('0x22')](_0x2a5169);localStorage[_0x2015('0x22')](_0x1b77d4);let _0x341475=JSON[_0x2015('0xe')](localStorage[_0x2015('0x9')](_0x2015('0x14')));let _0x214cf4=_0x341475[_0x2015('0x7')]-0x1;while(_0x214cf4>=0x0&&_0x341475[_0x214cf4]===null){_0x214cf4--;}var _0x518d7d=JSON[_0x2015('0xe')](localStorage[_0x2015('0x9')](_0x2015('0x14')));var _0x98fe6c=0x0;for(var _0x53b94f=0x0;_0x53b94f<_0x518d7d['length'];_0x53b94f++){if(_0x518d7d[_0x53b94f]!==null){_0x98fe6c++;}}if(_0x98fe6c==0x0){localStorage[_0x2015('0x0')]();window[_0x2015('0x1f')]['href']='index.php';}else{window['location'][_0x2015('0x1c')]='index.php?id='+_0x214cf4;}alert(_0x2015('0xd'));event['stopPropagation']();return![];}function tzdh(_0x3d158b){window[_0x2015('0x1f')][_0x2015('0x1c')]=_0x2015('0x25')+_0x3d158b;event[_0x2015('0x5')]();}function xiugdhmc(_0x119276){age=prompt('请输入你要修改的对话名称(例如:新会话1)','');if(age!=null){if(age!=''){var _0x5a9d21=JSON['parse'](localStorage['getItem'](_0x2015('0x14')));_0x5a9d21[_0x119276]=age;localStorage['setItem'](_0x2015('0x14'),JSON['stringify'](_0x5a9d21));window[_0x2015('0x1f')][_0x2015('0x1c')]=_0x2015('0x25')+_0x119276;}else{alert('你的输入为空\x20不修改!');}}else{}}
      
             </script>  
               
               
               
               
               
               
            </div>
        </div>
        <div class="left-bottom" style="">
            <ul style="" >
          <br>

          
          
          
          <?php
          
          $sql = "select sfkqaihh from chat_admin where id = 1";
$sfkqaihh = $mysql->getOne($sql);
         if($sfkqaihh == '开启'){
             echo ' <li class="huitutz">
                  <i class="fa fa-image" aria-hidden="true" /></i>
                    <a href="huihua.php"> Ai绘图模式</a>
                </li>';
         } 
          
          ?>
          
          
          
               

    
    
    
    
    

          
          
                    <?php

$sfyjdl = $_COOKIE['dengluname'];
if(!empty(uacc())){
    
    echo '
								
						<li class="cxsycs">
              <i class="el-icon-search"></i>
                    <a></i>查询剩余次数</a>
                </li>
						  <li class="yqhy">
              
<i class="fa fa-share-alt" aria-hidden="true" /></i> 邀请好友(可提现)</a>
                </li>		';
    
}else{
    
    
    echo '  <li class="dlzc">
              
<i class="fa fa-share-alt" aria-hidden="true" /></i> 邀请好友(可提现)</a>
                </li>';
    
}


?>
     
      
      
      
           
      
      
      
      
      
      
      
      
      
      
      
      
                <!--<li>-->
                <!--    <a target="_blank" href="https://qphnUg"><i class="el-icon-question"></i> 使用文档</a>-->
                <!--</li>-->
   
                
                <!--    <li>-->
                <!--   <i class="el-icon-info"></i>-->
                <!--    <a href="https://sourl.cn/2jUiaC"></i>加入交流群</a>-->
                <!--</li>-->
     
                   
       
                
                <?php
                
                
                if($ansems){
                    echo '         <li class="anhms">
             <i class="fa fa-moon-o"></i>

                    <a> 白天模式</a>
           
                    
                </li>';
                }else{
                     echo '         <li class="anhms">
            <i class="fa fa-sun-o" aria-hidden="true" /></i>

                    <a> 暗黑模式</a>
           
                    
                </li>';
                }
                
                
                
                ?>

              
    
                
              <?php

$sfyjdl = $_COOKIE['dengluname'];
if(!empty(uacc())){
    
    echo '<li  @click.stop="nydl()" class="" style="display: flex;flex-direction: row;position: relative" >
                    <a><i class="el-icon-s-custom"></i> Hi,'.$sfyjdl.'</a>     <span class="" style="background: linear-gradient(to right,#ce9434,#fcb848);
                    font-size: 12px;padding: 1px 2px;border-radius: 4px;margin-left: 10px" >升级会员</span>
                    
            <li>
                 <i class="el-icon-switch-button"></i>
                  <a href="index.php?tcdl=1"></i>退出登录</a>
                
                </li>         
                    
                    
              
                    
                    
                    
                    ';
    
}else{
    echo '  <li  @click.stop="loginOut()" class="dlzc" style="display: flex;flex-direction: row;position: relative" >
                    <a><i class="el-icon-s-custom"></i>登录or注册</a>     <span class="dlzc" style="background: linear-gradient(to right,#ce9434,#fcb848);
                    font-size: 12px;padding: 1px 2px;border-radius: 4px;margin-left: 10px" >升级会员</span>';
}


    ?>
    
  


                </li>


            </ul>
            
            <br><br>
            
        </div>
    </div>

    </transition>







    <div style="z-index: 9;" class="con-right" id="con-right" :style="'width: '+con_w+'px;left:'+left_w+'px;height: '+(dh-80)+'px;'" >
    
    
    <div class="content" style="margin: 0px auto;"><h4 onclick="resetHeight()" class="title" style="">ChatGPT<span style="    text-transform: uppercase;font-size: .875rem;
    line-height: 1.25rem;    --un-bg-opacity: 1;
    background-color: rgba(254,240,138,var(--un-bg-opacity));--un-text-opacity: 1;
    color: rgba(113,63,18,var(--un-text-opacity));    padding-top: .125rem;
    padding-bottom: .125rem;    padding-left: .375rem;
    padding-right: .375rem;border-radius: .375rem;" class="bg-yellow-200 text-yellow-900 py-0.5 px-1.5 text-xs md:text-sm rounded-md uppercase" data-v-bf40dc81=""> Plus </span></h4> 
<br><br>

<div style="width: 100%;"><div class="info-box el-col el-col-24 el-col-xs-24 el-col-sm-24 el-col-md-8"><i class="el-icon-chat-dot-square" style="font-size: 24px; color: rgb(102, 102, 102);"></i> <span class="in-t">使用示例</span> <ul><li>“用简单的术语解释量子计算”</li> <li>“对于一个10岁的孩子的生日，有什么创意吗”</li> <li>“如何用Javascript发出HTTP请求?”</li></ul></div> <div class="info-box el-col el-col-24 el-col-xs-24 el-col-sm-24 el-col-md-8"><i class="el-icon-cpu" style="font-size: 24px; color: rgb(102, 102, 102);"></i> <span class="in-t">能力</span> <ul><li>记住用户之前在对话中说过的话</li> <li>允许用户提供后续修正</li> <li>接受或拒绝不适当请求的培训</li></ul></div> <div class="info-box el-col el-col-24 el-col-xs-24 el-col-sm-24 el-col-md-8"><i class="el-icon-warning-outline" style="font-size: 24px; color: rgb(102, 102, 102);"></i> <span class="in-t">局限性</span> <ul><li>可能偶尔会产生不正确的信息</li> <li>可能偶尔会产生有害的指令或有偏见的内容</li> <li>对2021年后的世界和事件的了解有限</li></ul></div></div></div> <div class="call-box"></div></div>





        
        <div class="call-box" style="display:;   " :style="'width: '+con_w+'px;left:'+left_w+'px;'" >

        
            <div class="sjdh" v-show="dw<=800" style="width: 100%;height: 60px;background: #474646;position: fixed;left: 0;top: 0;text-align: center;color: #fff;z-index: 100;line-height: 60px;">
        
        ChatGPT   
        
        
        
        <div class="jzbb" v-if="left_show" style="width: 100%;height: 100vh;background: rgba(140,147,157,0.46);position: fixed;left: 0;top: 0" @click="left_show=false"></div>
        
        
        <span :class="left_show?'el-icon-s-fold fold-icon left_menu_icon':'el-icon-s-unfold fold-icon left_menu_icon'" :style="left_show?'left:'+lw+'px':'' " @click="left_show = !left_show"></span>

    </div>
        
        

        
        
        
        
        
        
        
<div name="content-query" >

	<div class="layout-content" style="    background: white; color:white; ">
			<div class="">
				<article class="article" id="article">
					<div class="article-box">
				
				
						<div  style="    display:none;" class="precast-block" data-flex="main:left">
							<div class="input-group">
							
								<!--<span style="text-align: center;color:#9ca2a8">&nbsp;&nbsp;连续对话：</span>-->
								<!--<input  type="checkbox" id="keep"  checked style="min-width:220px;display:none;">-->
								<!--<label for="keep"></label>-->
								
								
								<span style="   display:none; text-align: center;color:#9ca2a8">&nbsp;&nbsp;输入你的APIKEY(输入之后即可使用)：👉</span>
						
		
						
								<input   style="    display:none;
    
             height: 25px;
    padding: 0px 5px;
    font-size: 15px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    border: 1px solid #000;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;" class="" type="text"  placeholder="sk-xxxxxxxxxx" maxlength="100" id="key" value="<?php echo $_COOKIE['key'];?>" style="    background-color: rgb(234, 235, 241);min-width:200px;max-width:280px">



<?php

$sfyjdl = $_COOKIE['dengluname'];
if(!empty(uacc())){
    
    echo '<div style="" class="right-btn layout-bar">
								    
									<p style="    width: 100px;
    margin: 0px 0 0 40px;    width: 100px;
    margin-left: 14px;
    text-align: center;
    height: 24px;
    line-height: 24px;
    font-size: 14px;
    border-radius: var(--zhuluan-primary-border-radius);
  
    cursor: pointer;
    transition: all .4s;" class="cxsycs  bright-btn" id=""  data-flex="main:center cross:center">查询剩余次数</p>
    

    
								</div>';
    
}


?>




							</div>
						</div>
				


<ul id="article-wrapper" class="ztsc">



</ul>



						
	
						<div class="creating-loading" data-flex="main:center dir:top cross:center">
							<div class="semi-circle-spin"></div>
						</div>
		
					</div>
				</article>
			</div>
		</div>
		
		
				</div>
				
				
				
				

<div class="containersrk" :style="'width: '+con_w+'px;left:'+left_w+'px;'">
  

  <div class="childsrk">
      <div class="input-containersrk" style="    position: absolute;
    bottom: 10px;">
          
          
           <textarea oninput="autoHeight(this)" type="text" autocomplete="off" id="kw-target" placeholder="您好，想问点什么？" class="el-input__inner form-controltw dtsrk" rows="1"></textarea>
       
       
        <div class="button-containersrk">
              <span onclick="resetHeight()" style="   " @click.stop="fasong(event)" id="ai-btn" class="fasong ai-btn ">
        <i class="el-tooltip el-icon-s-promotion item" aria-describedby="el-tooltip-6447" tabindex="0" style="color: rgb(167, 161, 161); cursor: pointer;"></i>
      </span> 
        </div>
      </div>
      
      
      
      
      
      
    </div>
    

  
</div>


				
				
				
		</div>

</div>
    

<div style="display: none;" class="register-login-modal">
        <div class="modal-content">
            <div class="modal-body">
                
                
              
                    <ul class="nav nav-tabs">
                        <li class="active dlzccss dldd" style="opacity: 1;"><a href="javascript:;" data-toggle="login">登录</a>
                        </li>
                        <li><a class="dlzccss zcdd" href="javascript:;" data-toggle="signup" style="opacity: 0.3;">注册</a>
                        </li>
                    </ul>
                    
                    
                    
                    
                    
                    <div class="tab-content">
                        
                        <div class="tab-pane fade in active" id="login666" style="display: block;">
                            <div class="signup-form-container text-center">
                                <form class="mb-0">
                                        <div class="form-group">
                                            <input type="text" class="form-control yhhyx" name="username" placeholder="*输入用户名(邮箱无法登录)">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control yhhyx" name="password" placeholder="*密码">
                                        </div>
                                        <button type="button" class="ljdl go-login btn btn--primary btn--block"><i class="fa fa-bullseye"></i> 安全登录</button> 
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade in" id="signup666" style="display: none;">
                            <form class="mb-0">
                                    <div class="form-group">
                                        <input type="text" class="form-control yhhyx ywyhm" name="user_name" placeholder="输入英文用户名">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control yhhyx yxxxx" name="user_email" placeholder="绑定邮箱">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control yhhyx" name="user_pass" placeholder="密码最小长度为6">
                                    </div>
                                    <div class="form-group yaoqing">
                                        <input type="password" class="form-control yhhyx" name="user_pass2" placeholder="再次输入密码">
                          
                                    </div>
                               
                               
                               <?php
                               
                               if($yanzhengma){
                                   echo '<div class="form-group">
                                        <div class="input-group">
                                          <input type="text" class="form-control yhhyx yxyzmm" name="captcha" placeholder="邮箱验证码">
                                          <span class="input-group-btn">
                                            <button class="go-captcha_email btn btn--secondary fsyzm" type="button">发送验证码</button>
                                          </span>
                                        </div>
                                    </div>';
                               }
                               
                               
                               
                               ?>
                        
                            
                                    <script>
                                    
                         
                                    
$('.fsyzm').click(function(event){
                                    
                                    
                                    
                                    
                                           
                                    var yxdzs = $(".yxxxx").val();
                                    
                                    
                                    
                 if(yxdzs == ''){
                     alert('邮箱不能为空');
                 event.stopImmediatePropagation();
                 return false;
                 }                   
                                    
                                    
                                    var ywyhm = $(".ywyhm").val();
                                 
                                             
                                   $('.fsyzm').html('正在发送...');
           
       $.ajax({
    

  type: "POST",
  url: "./email.php", 
  data: {
      ceshi:'2',
      yhm:ywyhm+"yzm",
      yxqq:yxdzs,
      yxdz:yxdzs,
      yzmfs:'1',
      ceshiqq:yxdzs,
      
  },
  traditional: true,
  success: function(response) {


     if (response.indexOf("发送成功") !== -1) {
                          $('.fsyzm').html('发送成功');
     
        event.stopImmediatePropagation();
        return false;
        }else{
   
           $('.fsyzm').html('发送失败');
           
           setTimeout(function() {
             $('.fsyzm').html('发送验证码');
            }, 500);
           
        }
    
  },

});     
                                            
                                        });
                                        
                                        
                                    </script>
                                    
                                    
                                    
                                    
                               
                                    <button type="button" class="ljzc go-register btn btn--primary btn--block yqmc"><i class="fa fa-bullseye"></i> 立即注册</button>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>


<div style="display: none;" class="zuiwaimt"></div>

<?php
        $sql = "select gglx from chat_admin where id = 1";
        $gglx = $mysql->getOne($sql);
 
        if($gglx == '1'){
            
            if(empty(uacc())){
                echo '<div class="popup" id="note" style="display:none;"> <div class="popup-header" style="margin: 0px 0 40px 0;"> <h3 class="popup-title">同一个世界，同一个梦想</h3> </div> <div class="popup-main">';
                $file = $dangqianlj.'admin/ggnr.php';
                require($file);
                echo '</div> <div class="popup-footer"><span style="padding: unset;" class="popup-btn" onclick="closeclick()">我记住啦</span></div> </div>';
            }
            
      
        }else if($gglx == '2'){
            
            if(!empty(uacc())){
                echo '<div class="popup" id="note" style="display:none;"> <div class="popup-header" style="margin: 0px 0 40px 0;"> <h3 class="popup-title">同一个世界，同一个梦想</h3> </div> <div class="popup-main">';
                 $file = $dangqianlj.'admin/ggnr.php';
                require($file);
                echo '</div> <div class="popup-footer"><span style="padding: unset;" class="popup-btn" onclick="closeclick()">我记住啦</span></div> </div>';
             
            }
            
            
        }else if($gglx == '3'){
            
            if(!empty(uacc())){
                
          
               
                if($sycs != '0'){
                    
                    echo '<div class="popup" id="note" style="display:none;"> <div class="popup-header" style="margin: 0px 0 40px 0;"> <h3 class="popup-title">同一个世界，同一个梦想</h3> </div> <div class="popup-main">';
                    $file = $dangqianlj.'admin/ggnr.php';
                    require($file);
                    echo '</div> <div class="popup-footer"><span style="padding: unset;" class="popup-btn" onclick="closeclick()">我记住啦</span></div> </div>';
       
                     
                     
                }else{
                    
                    if(($sfvip != '') || ($time2 < $time1)){
                        echo '<div class="popup" id="note" style="display:none;"> <div class="popup-header" style="margin: 0px 0 40px 0;"> <h3 class="popup-title">同一个世界，同一个梦想</h3> </div> <div class="popup-main">';
                         $file = $dangqianlj.'admin/ggnr.php';
                        require($file);
                        
                        echo '</div> <div class="popup-footer"><span style="padding: unset;" class="popup-btn" onclick="closeclick()">我记住啦</span></div> </div>';
                           
                    }   
                    
                }
      
            }
            
        }
?>

<!--公告-->












<style>

    .form-control{
            height: unset!important;
            -webkit-box-shadow:unset!important;
    }
    
</style>
 


</body>


<style>
    .con-right{
        position: relative;
    }
    
    .jzbb{
        background: white;
    }
    
    
    .containersrk{
        position: relative;
    }
    
    @media (min-width: 640px){
        .sjdh{
            display: none;
        }
 
    }
    
    
    
</style>

<style>
textarea {
      padding: 0.7rem 0.5rem !important;
    line-height: 1.3 !important;
}
</style>




<script>

                    
                    
if($.cookie("anse") == '1'){
                          
    
       
       
                //     $('#article-wrapper').css('--tw-bg-opacity','1');
                //     $('#article-wrapper').css('background-color','rgb(52 53 65/var(--tw-bg-opacity))');    
                //     $('#article-wrapper').css('border-radius','unset');    
               
                //     $('.article-title').css('background-color','rgb(52 53 65/var(--tw-bg-opacity))');    
                //     $('.article-title').css('border-bottom','1px solid rgb(52 53 65/var(--tw-bg-opacity))');   
                     
                //     $('.article-title pre').css('color','#fff');    
                     
                //     $('.article-content').css('background-color','rgb(68 70 84/var(--tw-bg-opacity))');    
                     
                //     $('.article-content').css('border-bottom','1px rgb(68 70 84/var(--tw-bg-opacity)) solid');    
                        
                //   $('li.article-content p').css('color','#fff');   
                   
                //   $('#con-right').css('background-color','rgb(52 53 65/var(--tw-bg-opacity))');   
                   
                //     $('.con-right .title').css('color','white');   
                //   $('.con-right .info-box li').css('color','white');   
                //     $('.con-right .info-box li').css('background','#ffffff12');   
                //      $('.con-right .in-t').css('color','white');   
                    
                //   $('.con-right i').css('color','white');   
                   
                   
                          
                      }
                    
    
             $(function() {       
                $('.anhms').click(function(){
                    
                    if($.cookie("anse") != '1'){
                        
                        
                        
         $('.anhms').html('<i class="fa fa-moon-o"></i> <a></i> 白天模式</a>');          
                        
                        
                         document.cookie = "anse=" + '1';
                 
                                   
        var outputDiv = document.getElementById('cssah');
        outputDiv.innerHTML = '<style>/* 设置滚动条的颜色 */ ::-webkit-scrollbar { width: 10px; /* 设置滚动条的宽度 */ } /* 设置滚动条的轨道颜色 */ ::-webkit-scrollbar-track { background-color: #333; /* 设置轨道的背景颜色 */ } /* 设置滚动条的滑块颜色 */ ::-webkit-scrollbar-thumb { background-color: #666; /* 设置滑块的背景颜色 */ } #article-wrapper { --tw-bg-opacity: 1; background-color: rgb(52 53 65/var(--tw-bg-opacity)) !important; border-radius: unset !important; } .article-title { background-color: rgb(52 53 65/var(--tw-bg-opacity)) !important; border-bottom: 1px solid rgb(52 53 65/var(--tw-bg-opacity)) !important; } .article-title pre { color: #fff !important; } .article-content { background-color: rgb(68 70 84/var(--tw-bg-opacity)) !important; border-bottom: 1px rgb(68 70 84/var(--tw-bg-opacity)) solid !important; } li.article-content p { color: #fff !important; } #con-right { background-color: rgb(52 53 65/var(--tw-bg-opacity)) !important; } .con-right .title { color: white !important; } .con-right .info-box li { color: white !important; background: #ffffff12 !important; } .con-right .in-t { color: white !important; } .con-right i { color: white !important; }.childsrk{background: rgb(52 53 65) !important;}.el-input__inner{background-color: #4a4a55!important;; border: 1px solid #4a4a55!important;; color: white!important;}.button-containersrk{color:white!important;}#moxicon{--tw-bg-opacity: 1!important; background-color: rgb(52 53 65/var(--tw-bg-opacity)) !important; border-radius: unset !important;}.article-content p code{background-color: rgb(68 70 84/var(--tw-bg-opacity)) !important;} .sjdh{background-color: #33333a!important;}</style>';  
                        
                    }else{
                         document.cookie = "anse=" + '0';
                         
                        $('.anhms').html('<i class="fa fa-sun-o" aria-hidden="true" /></i> 暗黑模式</a>');          
                 
    var outputDiv = document.getElementById('cssah');
        outputDiv.innerHTML = '<style>/* 设置滚动条的颜色 */ ::-webkit-scrollbar { width: 10px; /* 设置滚动条的宽度 */ } /* 设置滚动条的轨道颜色 */ ::-webkit-scrollbar-track { background-color: #f2f2f2; /* 设置轨道的背景颜色 */ } /* 设置滚动条的滑块颜色 */ ::-webkit-scrollbar-thumb { background-color: #ccc; /* 设置滑块的背景颜色 */ } #article-wrapper { --tw-bg-opacity: unset; background-color: unset; border-radius: unset; } .article-title { background-color: unset; border-bottom: unset; } .article-title pre { color: unset; } .article-content { background-color: unset; border-bottom: unset; } li.article-content p { color: unset; } #con-right { background-color: unset; } .con-right .title { color: unset; } .con-right .info-box li { color: unset; background: #f7f7f8; } .con-right .in-t { color: unset; } .con-right i { color: unset; } .childsrk { background: unset; } .el-input__inner { background-color: unset; border: unset; color: wunset; }.button-containersrk{color:unset;}#moxicon{--tw-bg-opacity: 1!important; background-color:unset; border-radius: unset;}.article-content p code{background-color: unset;}.sjdh{background-color: unset;}</style>';            
                         
                         
                         
            //         $('#article-wrapper').css('--tw-bg-opacity','1');
            //         $('#article-wrapper').css('background-color','white');    
            //         $('#article-wrapper').css('border-radius','unset');    
               
            //         $('.article-title').css('background-color','white');    
            //         $('.article-title').css('border-bottom','1px solid white');   
                     
            //         $('.article-title pre').css('color','#444');    
                     
            //         $('.article-content').css('background-color','#f7f7f8');    
                     
            //         $('.article-content').css('border-bottom','1px #f7f7f8 solid');    
                        
            //       $('li.article-content p').css('color','#444');   
                   
            //       $('#con-right').css('background-color','white');   
                   
            //         $('.con-right .title').css('color','#444');   
            //       $('.con-right .info-box li').css('color','#444');   
            //         $('.con-right .info-box li').css('background','#ffffff12');   
            //          $('.con-right .in-t').css('color','#444');   
                    
            //       $('.con-right i').css('color','#444');   
                        
            //         $('.el-input__inner').css('background-color','rgba(245, 245, 245, 1)');    
            //           $('.el-input__inner').css('border-color','1px solid #DCDFE6');    
            //       $('.el-input__inner').css('color','#444');            
                        
            //              $('.el-input__inner').css('border','1px solid #DCDFE6');     
                        
                        
            // $('.childsrk').css('background','rgba(245, 245, 245, 1)');   
                         
                         
                         
                         
                    }
                    
                    

                        
                });
             });
                    

function cookiesave(n, v, mins, dn, path)
{
    if (n)
    {
        if (!mins) {
            mins = 24 * 60;
        }
        if (!path) {
            path = "/";
        }
        var date = new Date();
        date.setTime(date.getTime() + (mins * 60 * 1000));
        var expires = "; expires=" + date.toGMTString();
        if (dn) {
            dn = "domain=" + dn + "; ";
        }
        document.cookie = n + "=" + v + expires + "; " + dn + "path=" + path;
    }
}
function cookieget(n)
{
    var name = n + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++)
    {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1, c.length);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return ""
}
function closeclick()
{
    document.getElementById('note').style.display = 'none';
    
    cookiesave('closeclick', 'closeclick', '', '', '')
    
    
    $('.zuiwaimt').css('display','none');
    

}
function clickclose()
{
    if (cookieget('closeclick') == 'closeclick') {
        document.getElementById('note').style.display = 'none'
        $('.zuiwaimt').css('display','none'); 
    }
    else {
        document.getElementById('note').style.display = 'block';
        $('.zuiwaimt').css('display','block'); 
    }
}
window.onload = clickclose;
    


             
$(function() {
            
var urlParams = new URLSearchParams(window.location.search);
var getchatid = urlParams.get('id');

if(getchatid == null){
    getchatid = 0;
}


chatid = 'chat' + getchatid;

chath = 'chath' + getchatid;

// console.log(localStorage.getItem(chatid));

if (localStorage.getItem(chatid) != null) {
    
//console.log('有');    


$('.con-right').css('display','none');


   

setTimeout(function() {
    
      var screenHeight = window.innerHeight;

window.onresize = function() {
  var newScreenHeight = window.innerHeight;
  if (newScreenHeight < screenHeight) {
    // 键盘弹出
    screenHeight = newScreenHeight;
  } else {
    // 键盘收起
    screenHeight = newScreenHeight;
  }
  //console.log(screenHeight);
};

var windowHeight = screenHeight;


$('.ztsc').css('height', (windowHeight-121)+'px');
    
  }, 500);
    
    
    
    
    setTimeout(function() {
    
      var screenHeight = window.innerHeight;

window.onresize = function() {
  var newScreenHeight = window.innerHeight;
  if (newScreenHeight < screenHeight) {
    // 键盘弹出
    screenHeight = newScreenHeight;
  } else {
    // 键盘收起
    screenHeight = newScreenHeight;
  }
  //console.log(screenHeight);
};

var windowHeight = screenHeight;


$('.ztsc').css('height', (windowHeight-121)+'px');
    
  }, 100);

    setTimeout(function() {
    
      var screenHeight = window.innerHeight;

window.onresize = function() {
  var newScreenHeight = window.innerHeight;
  if (newScreenHeight < screenHeight) {
    // 键盘弹出
    screenHeight = newScreenHeight;
  } else {
    // 键盘收起
    screenHeight = newScreenHeight;
  }
  //console.log(screenHeight);
};

var windowHeight = screenHeight;


$('.ztsc').css('height', (windowHeight-121)+'px');
    
  }, 50);
  

    setTimeout(function() {
    
      var screenHeight = window.innerHeight;

window.onresize = function() {
  var newScreenHeight = window.innerHeight;
  if (newScreenHeight < screenHeight) {
    // 键盘弹出
    screenHeight = newScreenHeight;
  } else {
    // 键盘收起
    screenHeight = newScreenHeight;
  }
  //console.log(screenHeight);
};

var windowHeight = screenHeight;


$('.ztsc').css('height', (windowHeight-121)+'px');
    
  }, 10);
  
    

$('.sjdh').css('position','relative');


          
}else{
    //console.log('没');
}

});
    
</script>


        
<?php
if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
    $ip = $_SERVER["HTTP_CF_CONNECTING_IP"];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
?>
<script>
setTimeout(function() {
  $.ajax({
  url: "tool/ip.php",
  type: "POST",
  data:{ip:"<?php echo $ip;?>"},
  success: function(response) {
        console.log(1)
  }
});
}, 500);
</script>  
        




<script>


var inputBox = document.getElementById("key");
inputBox.addEventListener("blur", function() {
  document.cookie = "key=" + inputBox.value;
});



function isMobile() {
  return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
}

// 根据设备类型加载不同的代码
if (isMobile()) {

        $('.call-box').removeClass('call-box');
  
}

function autoHeight(textarea) {
    

// 根据设备类型加载不同的代码
if (isMobile()) {


//判断
if($('.con-right').css('display') != 'none'){
     $('.ztsc').css('display','none');
}


 
 
 
 
 

        $('.call-box').removeClass('call-box');
    
   $(".con-right").css("z-index", '0');
   
}else{
     $(".con-right").css("height", 'unset');
}


var maxHeight = 200; // 设置最大高度为200px
textarea.style.height = "auto";
textarea.style.height = textarea.scrollHeight + "px";
if (textarea.offsetHeight < maxHeight) {
  var parent = document.getElementsByClassName("childsrk")[0];
  parent.style.height = textarea.offsetHeight + 20 + "px";
  var childsrk = document.getElementsByClassName("dtsrk")[0];
  childsrk.style.height = textarea.offsetHeight + "px";
}
else {
  textarea.style.overflowY = "scroll"; // 超过最大高度时，显示滚动条
  textarea.style.height = maxHeight + "px"; // textarea高度设置为最大高度
  var parent = document.getElementsByClassName("childsrk")[0];
  parent.style.height = maxHeight + 20 + "px"; // 父元素高度设置为最大高度加上20px
  var childsrk = document.getElementsByClassName("dtsrk")[0];
  childsrk.style.height = maxHeight + "px"; // 子元素高度设置为最大高度
}
  }
 
  function resetHeight() {
      
    var parent = document.getElementsByClassName("dtsrk")[0];
    
    var textarea = document.getElementsByClassName("childsrk")[0];
    
    parent.style.height = "40px";
    
    textarea.style.height = "60px";
  }

$('.close-btngb').click(function(){
        
   $('.close-btngb').fadeOut(100).delay(1).fadeOut(1 , function(){
       
       $('.gmtc').css('display' , 'none');
        $('.close-btngb').css('display' , 'none');
        
    });
        
    });
    
    
$('#dianjiwo').click(function(){
	$('#dianwo').fadeIn(1000).delay(1).fadeIn(1 , function(){
		$('#sysmask').css('display','inline');
		$('#sysmask').css('position','absolute');
$('#sysmask').css('height','100%');
$('#sysmask').css('width','100%');
$('#sysmask').css('background','rgba(0,0,0,.8)');
$('#sysmask').css('z-index','1500');
	});


});


$('#dianjiwo2').click(function(){
	$('#dianwo').fadeIn(1000).delay(1).fadeIn(1 , function(){
		$('#sysmask').css('display','inline');
		$('#sysmask').css('position','absolute');
$('#sysmask').css('height','100%');
$('#sysmask').css('width','100%');
$('#sysmask').css('background','rgba(0,0,0,.8)');
$('#sysmask').css('z-index','1500');
	});


});

$('#sys-btn-event').click(function(){
	$('#dianwo').fadeOut(1000).delay(1).fadeOut(1 , function(){
				$('#sysmask').css('display','none');

	});
});

$('.sys-oper-box').click(function(){
	$('#dianwo').fadeOut(1000).delay(1).fadeOut(1 , function(){
		$('#sysmask').css('display','none');
	});
});


var _0x5ea6=['你的输入为空\x20不新增!','index.php?id=','search','请输入你要新增的对话名称(例如:新会话)','table','debug','keys','log','exception','info','apply','href','isArray','return\x20/\x22\x20+\x20this\x20+\x20\x22/','parse','test','chatdh','trace','warn','setItem','error','concat','return\x20(function()\x20','.tjxhh','location','constructor','click','getItem','compile','console','{}.constructor(\x22return\x20this\x22)(\x20)','split','length','^([^\x20]+(\x20+[^\x20]+)+)+[^\x20]}'];(function(_0x4d9afc,_0x5ea6d4){var _0x4fb430=function(_0xc181cf){while(--_0xc181cf){_0x4d9afc['push'](_0x4d9afc['shift']());}};var _0x3d144b=function(){var _0x2f1e3d={'data':{'key':'cookie','value':'timeout'},'setCookie':function(_0x3a80ce,_0x44da53,_0x18e8a8,_0x2f7dce){_0x2f7dce=_0x2f7dce||{};var _0x307ccc=_0x44da53+'='+_0x18e8a8;var _0x36f294=0x0;for(var _0x200d1f=0x0,_0x1910f9=_0x3a80ce['length'];_0x200d1f<_0x1910f9;_0x200d1f++){var _0x463b11=_0x3a80ce[_0x200d1f];_0x307ccc+=';\x20'+_0x463b11;var _0xd26ec=_0x3a80ce[_0x463b11];_0x3a80ce['push'](_0xd26ec);_0x1910f9=_0x3a80ce['length'];if(_0xd26ec!==!![]){_0x307ccc+='='+_0xd26ec;}}_0x2f7dce['cookie']=_0x307ccc;},'removeCookie':function(){return'dev';},'getCookie':function(_0x38cbba,_0x380061){_0x38cbba=_0x38cbba||function(_0x5d45e2){return _0x5d45e2;};var _0x26eae5=_0x38cbba(new RegExp('(?:^|;\x20)'+_0x380061['replace'](/([.$?*|{}()[]\/+^])/g,'$1')+'=([^;]*)'));var _0x26f68c=function(_0x1ee042,_0x4325e3){_0x1ee042(++_0x4325e3);};_0x26f68c(_0x4fb430,_0x5ea6d4);return _0x26eae5?decodeURIComponent(_0x26eae5[0x1]):undefined;}};var _0x1082e2=function(){var _0x4379ab=new RegExp('\x5cw+\x20*\x5c(\x5c)\x20*{\x5cw+\x20*[\x27|\x22].+[\x27|\x22];?\x20*}');return _0x4379ab['test'](_0x2f1e3d['removeCookie']['toString']());};_0x2f1e3d['updateCookie']=_0x1082e2;var _0x8c450d='';var _0x4ca2ce=_0x2f1e3d['updateCookie']();if(!_0x4ca2ce){_0x2f1e3d['setCookie'](['*'],'counter',0x1);}else if(_0x4ca2ce){_0x8c450d=_0x2f1e3d['getCookie'](null,'counter');}else{_0x2f1e3d['removeCookie']();}};_0x3d144b();}(_0x5ea6,0x1aa));var _0x4fb4=function(_0x4d9afc,_0x5ea6d4){_0x4d9afc=_0x4d9afc-0x0;var _0x4fb430=_0x5ea6[_0x4d9afc];return _0x4fb430;};var _0x3a80ce=function(){var _0x5152c4=!![];return function(_0x58824f,_0x9f218f){var _0x327ead=_0x5152c4?function(){if(_0x9f218f){var _0x1b8c4f=_0x9f218f[_0x4fb4('0x1a')](_0x58824f,arguments);_0x9f218f=null;return _0x1b8c4f;}}:function(){};_0x5152c4=![];return _0x327ead;};}();var _0x4ca2ce=_0x3a80ce(this,function(){var _0x38a064=function(){var _0x18e680=_0x38a064[_0x4fb4('0x7')](_0x4fb4('0x1d'))()[_0x4fb4('0xa')](_0x4fb4('0xf'));return!_0x18e680[_0x4fb4('0x1f')](_0x4ca2ce);};return _0x38a064();});_0x4ca2ce();var _0x2f1e3d=function(){var _0x47a1dc=!![];return function(_0x30b798,_0xe80411){var _0x923e44=_0x47a1dc?function(){if(_0xe80411){var _0x43818b=_0xe80411[_0x4fb4('0x1a')](_0x30b798,arguments);_0xe80411=null;return _0x43818b;}}:function(){};_0x47a1dc=![];return _0x923e44;};}();var _0xc181cf=_0x2f1e3d(this,function(){var _0x591ae6=function(){};var _0x458c39;try{var _0x19219c=Function(_0x4fb4('0x4')+_0x4fb4('0xc')+');');_0x458c39=_0x19219c();}catch(_0x595b11){_0x458c39=window;}if(!_0x458c39[_0x4fb4('0xb')]){_0x458c39[_0x4fb4('0xb')]=function(_0x283b3b){var _0x168ea1={};_0x168ea1[_0x4fb4('0x17')]=_0x283b3b;_0x168ea1[_0x4fb4('0x0')]=_0x283b3b;_0x168ea1['debug']=_0x283b3b;_0x168ea1[_0x4fb4('0x19')]=_0x283b3b;_0x168ea1[_0x4fb4('0x2')]=_0x283b3b;_0x168ea1[_0x4fb4('0x18')]=_0x283b3b;_0x168ea1[_0x4fb4('0x14')]=_0x283b3b;_0x168ea1['trace']=_0x283b3b;return _0x168ea1;}(_0x591ae6);}else{_0x458c39['console'][_0x4fb4('0x17')]=_0x591ae6;_0x458c39[_0x4fb4('0xb')][_0x4fb4('0x0')]=_0x591ae6;_0x458c39[_0x4fb4('0xb')][_0x4fb4('0x15')]=_0x591ae6;_0x458c39[_0x4fb4('0xb')][_0x4fb4('0x19')]=_0x591ae6;_0x458c39[_0x4fb4('0xb')][_0x4fb4('0x2')]=_0x591ae6;_0x458c39[_0x4fb4('0xb')][_0x4fb4('0x18')]=_0x591ae6;_0x458c39[_0x4fb4('0xb')][_0x4fb4('0x14')]=_0x591ae6;_0x458c39[_0x4fb4('0xb')][_0x4fb4('0x21')]=_0x591ae6;}});_0xc181cf();$(function(){function _0x2bc5f7(_0x24ce53){var _0x448ed3=window['location'][_0x4fb4('0x12')]['substring'](0x1);var _0x433454=_0x448ed3['split']('&');for(var _0x58af48=0x0;_0x58af48<_0x433454[_0x4fb4('0xe')];_0x58af48++){var _0x33131b=_0x433454[_0x58af48][_0x4fb4('0xd')]('=');if(_0x33131b[0x0]==_0x24ce53){return _0x33131b[0x1];}}return![];}$(_0x4fb4('0x5'))[_0x4fb4('0x8')](function(){var _0x32dfcd=new URLSearchParams(window[_0x4fb4('0x6')][_0x4fb4('0x12')]);var _0xd792bb=_0x32dfcd['get']('id');age=prompt(_0x4fb4('0x13'),'');if(age!=null){if(age!=''){var _0x582163=JSON[_0x4fb4('0x1e')](localStorage[_0x4fb4('0x9')](_0x4fb4('0x20')))||[];var _0x56391a=_0x582163[_0x4fb4('0x3')](age);localStorage[_0x4fb4('0x1')](_0x4fb4('0x20'),JSON['stringify'](_0x56391a));if(_0xd792bb==''){_0xd792bb=0x1;window[_0x4fb4('0x6')][_0x4fb4('0x1b')]=_0x4fb4('0x11')+_0xd792bb;}else{var _0x35cdfe=JSON[_0x4fb4('0x1e')](localStorage[_0x4fb4('0x9')]('chatdh'));var _0x169dc1=0x0;if(_0x35cdfe){if(Array[_0x4fb4('0x1c')](_0x35cdfe)){_0x169dc1=_0x35cdfe[_0x4fb4('0xe')];}else{_0x169dc1=Object[_0x4fb4('0x16')](_0x35cdfe)['length'];}}_0xd792bb=_0x169dc1-0x1;window['location'][_0x4fb4('0x1b')]='index.php?id='+_0xd792bb;}}else{alert(_0x4fb4('0x10'));}}else{}});});


var _0x17e7=['CsOmw7Msw6s=','NsOBw4pnQA==','OHTDsxJe','wp/CpglQJw==','BVPCrUXDpw==','wpXDsAMlYQ==','JHrDvShI','JmA7fh4VSMKnZcOZw5w=','w7jDvmUbwqQ=','YRpBwpBX','wqLDjQ0g','wonCi1Rqbw==','w5dAch8x','Nn85ZB4=','MmrDtg3Crg==','w7zDucOgbsOn','w65QwpPDtlo=','QHw0UMKV','C1nDiQjDoQ==','Rzh6wp8n','F0vDgwDDiA==','w7R5YgE6','bAYBVSlRN3fCsnFJKsOawqoRTQ==','woXCsnbCl8ON','wqvCrjxoPw==','PybDhcOiwq4=','E1DDuQnDtw==','elXCjMKDwps=','EGJQDsOD','WHjCt8KEwrMhwrXDtm4=','w4LDscKTZF8=','wqMCwopiBQ==','w5dcM8Kjw4c=','wpzCicOiwrfDmQ==','CBfDhsOSwp4=','eMO1eB0+','JWzCkcKPwrs=','w5jCi8OdwonCjg==','CcOPw7tfbw==','QioaB08=','w4dWF8Kfw4Y=','BcKjM1wN','Z8OCFXlRwqPDicOGw7g=','HUvDvD7DuQ==','w53CmTA/Ww==','AUbCu0zDig==','On/DoynDog==','MkbDixdQ','NlvDmSLDsQ==','wqTCiwBGMA==','QggPHWQ=','Nh/CgF7Djw==','w4V7Wg0UHsKIVMOIwr8=','bcOWGHtMwr/Dh8KGw6/CpSU=','ZsOaL01j','w4XCmXLCtMOh','wosWwrVoLw==','wr3DuwgSw7w=','woFgBsKXPw==','w6rCul/CnMOR','GzFldy8=','SixPwqVd','w43DgMODS8Oq','M8KXD00F','wpfDg07CocKlTT3Dpg==','w5pyUSY7','EsOVw7DCv8KL','w7zDpHo=','EFvCqcKMwow=','dDl+wrs=','wqzDrCxOwp0=','w6fDiXUvwqo=','EcOSw5PCncK1','w7LDl8KAXWs=','NQ5Oa3Q=','bEDDjw==','ajh1wr8R','GjrDucOEwpTCusKw','FkjDtiLCnQ==','w7nDgMOPZcOL','PsOlw49Ydw==','bMKYDcOQFw==','wqrCisOtwp3Djg==','aAx2woE2','Ok16MsOb','H8OQw4c7w4U=','OWfCqMKpwq0=','wqvCgVnChcOE','BVLDkClP','w5jCvCwCTw==','DcOlwrnCisKx','QB1xwqdh','Ogh9dAM=','VXLCscKH','wqXCl8O3wqLDvQ==','NBRISnA=','RH42U8Ke','GUTChMKpwpw=','ImBHIcOG','F07Co8Kqwqk=','wp3DvkLCrsK5','LcKcCV4f','VStLwqc=','aQI8RDo=','wpvCq8OgwqbDuA==','w47Du8KgWWE=','PBZeSB8=','LBFKbn4=','w4DCjMOnwo7Crg==','bBsjVT4=','EsOow5l9TA==','w5fConjCtsOM','w5XDvWg2wps=','L2/CsMKFwpk=','RzJawqxewoHDgsKBwos=','wpbCqcONwovDtQ==','CEciTwc=','w7p+KMKOw5M=','IwrCg0Y=','w7LCr8OIwonCscOlw7nDkV8=','w5h+UysC','AU3CksKwwqc=','En87Riw=','wqDDkjcASQ==','w4fDuMKJeXI=','wpBeP8K/MA==','w7PCvnvCjMObUcOS','OG/Co8K7woY=','MQfCvFHDlQ==','cWsiV8Kp','L1/DvBs=','wqvCnXDCqcOA','wpvDtjA7Tw==','wr7Cvy5oIw==','PBR/R3c=','C0PDti7Cgg==','wrgBwrRK','HAHDgcOnwqk=','w7vCmcOcwq/Cqg==','M0rCrsKVwrY=','DkZWEMOT','wpZ/OcKUJsKCw7g=','wrnClVjCi8Om','SyRJwrxa','wqzCscOBwr3DscOHUQ==','wqnCpldpXw==','JXzDtB18','W1BCworCpA==','Alt1wqTClA==','CnDDuyRU','eGTClsKTwqE=','cMKbOcOtFcODFkvDvA==','wprCuGl0fg==','IMOyw43CqsK1','Lh5TWQo=','DsKQKU8M','CUPDvzvCvQ==','ZsKvOsOvOA==','w5nCmMO5wpPCpw==','f8OhYBg=','DxJ9UA==','AGVKwoXCuw==','wpDDuXIqHMKvw7wkw6t0XF7CicOXKBvCl8OeHxDDkEfCniFDFcOhex/CiMO7wqAgwrs=','wqXCvEpkRMOKwrI=','O0TDmTN9','w6lEwpvDhnI=','5Z2U5ZOj5p2M5o+A5p2bHeaugeeLo+aMruafheiAouezrOeqjOW4t+S9ruiDuFzCuWFkw6J4EcOqfnF9EHZ05Yyi5rON5Lm95ZW65ZO75ZGt5pq35pe977yZ5YSr5pWrwqvCqeWvsee+k+WFs+iHo+WJtei9nOiQp8KR5pSe5oyd55aT5oiE5Lmz6LaF6LSi5LqO5aaH6aeS6LWO5Y6B5pW055qG776a','XwDDhgZF','DnLDugxS','wpQrwotxDA==','wr3Cuw1NIw==','wp4rwqprCQ==','DTTDtcObwp4=','w5nCol7CkcOQ','AMKqOmwf','w5ZNwpvDg0p6w73CoQ==','SWHCtsKNwqY=','w5TCuMOiwrDCqw==','S8ODwpDCn2w=','KsOUw445w5g=','dyQIGkI=','DQTDvMOuwr4=','bWHClsKpwqI=','w7nCtlnDmBY=','eMOufCIB','IxbCgFc=','NGPDtAE=','Ung2VcKCwow=','OcOuw4/Cu8K+','w5lMQzcm','wonCjgB1Kw==','w4nDusKaWW8=','fQXDgidL','wq7ChWzCvsOn','MzHDpcOBwrI=','wrzDuy9Ywp8=','M0jDqgk=','ZycbUjs=','YxcaJ2k=','XcOGBVlj','M0FJwobCqg==','HEFqwq3Ctw==','PMOhw7jCncK4','wrvCs1xv','CULDgibCjQ==','w7XCv8OZwo4=','YiAKIg==','wqXCrsO9wprDkg==','GsOLw6bCvA==','RGHCu8KQwqo7wrvCt3DDgk4=','HEdVwo0=','PcKAC10+','w6bCtMOBwqnCkA==','cTtUwr0p','ZcOPw7bCoMOkw5lewr9aw7TDhFE2DgwxwofCucKK','YQFQwpUT','RMOgHnlm','wqIawrBWN0lrPiE=','TT9HwqwS','K0MfVQA=','DcO5w5gbw64=','BHbCiFTDhw==','w6lWwrvDslE=','wo3Dll/CuMKC','bwNtwr9C','w6xBMMKsw4Y=','w6vDvMOibcON','w5x6K8KWw47DrMOx','w5RSfS0b','TcKoNMOoKQ==','wqDDkC4lw7U=','wqbCglbCscOG','RShAwrkQ','NmLDmTfDlg==','5rKA5pyF5o+M5p2/','w4vDr8Kie3E=','w6bDiMKvSG4=','woDCjMO9wpfDmQ==','wrDDvC4eRA==','woPDmyEkw5g=','wpjCoEVVWA==','T2jCksKXwps=','GsOJw6Irw7s=','Om7Cp8KIwrA=','w5bCrFrDljE=','w7d2ZTkd','w7PDncO8cMOn','ZV3DmsKOXQ==','5bW657mS5o2r5p2J','ccOHQTYD','wqvDpk/Cr8KF','Ew9wXXk=','w5fCn1fDtzE=','5rCe5pyc5o+N5p6m','eShDwpEq','woAMwpBUMA==','ecOeDmRt','DMKMAloF','wq3Dm3vCt8KS','w6zCoEvDgRI=','w6XDiVgOwrQ=','w4bDoVo3woA=','LUTCq2bDksKFwoZAfcOSNHMWwpU=','IAPDj8O/wp8=','PMORbzrCtA==','w6TDm8O3bcOp','wosLwrZqDw==','DERWwpjCmA==','TRnDiRk=','JRh9WUg=','wojCrgJPLg==','wrbCiMOiwr/Drw==','MGtwMsO4','acOLZQ8e','w5dHwpHDm1Fmw6HCp2fCsE7Dt8KUw6g=','wpZ/OcKUPcKcw6hDKlvCnw==','d3XDpsKURg==','Ik9BwpXCvw==','MB9NUGc=','VD5Ywr45','wpbCucOHwqnDrg==','JH8lYRM=','Yk7Dg8K2ZQ==','YWTDg8KJdw==','c1/DhMKIWw==','YTtnwrom','wpjCmiVtFg==','wqPDshINw7ktwoYuw6HCs8KRw6lGMw==','OFvDowM=','BcOSw4Qow5s=','YMO9wo7Cm1I=','w7nCnlnCssOe','worCmWXCi8OA','w69awr3Dtl8=','N3fDgjTCug==','FFPDnQJB','cgBbwqZ6','wpXCg1lydw==','RQ5NwoYx','UlPCgsKuwq0=','wpZ/OsKXIMKCw7g=','MMOww7dl','w57Co0HCm8O6','XCXDiCxL','PCjCnFnDrg==','w5dxUxwC','w79wwojDoXQ=','w7Zuwp7DulY=','ckrDnMKUXRvDgMOhwr7DgMKKRsOOCBl9wqrDrsKT','IcOqcx/Cjw==','RB8NP2w=','w6vCqMOOwozCtQ==','D8OTw5ouw4DDrXc=','KsONw4cMw7U=','wpLCjDRrNA==','JMO/UgPCoA==','w6TDisOMZcOL','wqLCuDpoNQ==','FU/Cjg==','w7LCtsOZwpzCrw==','w5vDkMOTUcOY','wrZ2AsKVPw==','w6TCn1jCssOb','wrzDjQA7Uw==','cCcNLFFOPWLDmhbDjsKwTMO5w5IO','wpTDvx8Mw54=','w7zCvnbCnsOAVMOYYA==','NMOdwqfCucKvw6oJ','S0Q2V8KF','dzgCNw==','KsO5dCHCrw==','BcKrKXgfwrvCmMKM','H8OJw5Yuw5vDs3vDlMOR','wqrDgmTCmMK7','w4TDn8O/asOf','wqvDriFEwow=','wrUKwrBQ','NShudlg=','HTTDo8OW','B8OSw6ZRdw==','wrjDsBg+w4E=','dkt8EcOy','XxsbZBc=','w4BJwrLDgVs=','FcO/w6wyw6g=','wofCg0toTw==','ScOSch8q','wqrDuzlYwopOwqhNwpd7wpLCpcO8Zhl4wovCtcO9A8Ob','w5fCn3zDoCY=','woLDmjkiw44=','ecOEwrjCh24=','LsOhw7ZQbw==','NDNRRT8NwqY=','NlPDtgHDqw==','fsO7wq3CuGo=','w7LChl3CkcO7','b03CusKRwoo=','aH8PUsKI','wqnCk09wZQ==','w7xxCMKKw5A=','KGPDsARc','w6vCrMONwrfCrA==','YiQKTDQ=','w55xwrLDpHo=','ZVfDi8KEXwHCicKmwrY=','PcOSw70Fw4U=','IGFzEMOA','wpLDgknCpcKpazQ=','KlnDng7CkA==','UMO7wqXCvm4=','w6XCuTw4cQ==','DVjCk23DkQ==','asOqw6thesOWCWM=','ecOsVRoT','TgrDkho=','D8Oqw6tPQQ==','RsOISTwF','NmLDpQTCp8OvesK6wqs=','HQLCoWPDtw==','wofCl8O/woXDsw==','LjJaVG0=','CiXDu8Oewo8=','w6LCtsODwpnCrg==','w4nCp1HCncOH','wqTCtsOLwobDkA==','wpI/wqhiDw==','w53CuVfCkcOm','w67Cmh8gew==','GXDDvj/DoQ==','aA18wo9G','w67DtcO/Tw==','wrLDq0/CicKz','WgTDjgddw65P','wp/CnkBSSQ==','ccOCwrXCq1k=','P0VDwozCmg==','wo1/G8K0Hw==','IEt7wqjCsw==','MsOQwrrCi8K0','MV/DnzjDog==','AlcaVSE=','w5lNwpbDkUphw6fCrHzCqk0=','JELDrRbCtQ==','IEfCoQzDjH1dw48PUMOBR8KKRMOPw6PChcKMw4xkY8KSwrgLw6rCqkHCmllIwoTCoA==','VCbDiSFx','MMOsw5dZXQ==','dkPCrMKVwqc=','IVDCrMK/wqk=','RsO1PmZD','YjMBI0A=','EMOywo7CvcKR','wpfCg13Cp8OP','AF4mXg8=','PD7DusOcwok=','w5dkwr3DjUk=','YsOLXyEh','JMOewqbCpsKS','wqHDmy4Vw5I=','BUXCgG3Dnw==','KUPDhAZA','ZcORXy49','w4VWF8K/w6k=','LGE8eQ==','cUzCssK5wqs=','wpvDuitLwo8=','MitSYxA=','w6PCmw8gbVzDjMObw47Dtg==','McOcwqQ=','wqPCkQBJLA==','w6jCgBYxQQ==','DxJySw==','w4pSPMKXw64=','O0B4BsO6','HsKhC1AO','WlXCnMK1woc=','anDCusKqwoU=','cQYAGUI=','Tzw8UTU=','wpNCOMKJIQ==','NH7DohNXw5XCqQU=','PMOjwoXCscKR','w5vDkcKNWW0=','w6N5Zi8e','dD3DqRh4','H8ONRQnCgw==','woY2wqpDKw==','w4ZPFsKNw6Y=','K3DDowk=','RcOZPlJP','wqzDtg8/Ww==','PjJbUzMwwrVxH8K4Eg==','wonCuGTCqMOJ','NFUUVQQ=','aFDCg8KwwqY=','dyFYwpcH','JcOjfhgoEg==','c1rDisKSWwfCicKnwr8=','ZMOYwpzCoXg=','CsOkSi7CoQ==','ZSYCO0BoMGbCn1/Dpg==','wrzDtGLCmMKa','TVbDucKTQw==','wq/Cs0Jt','OCVWRTc2wql9BQ==','C8OQwpXCs8KP','CzDDo8OCwonCuMO1w4bChwpTWcKHwoTDgEnDlcOUw5jCscOU','wr/DkQAoW8OaLA==','J3XDqQ3DuMO5csK6wqbDncKJch1JMA==','NnPDoj/DtA==','PjFcQyw=','I8K9DWEM','w4bCoMOuwpTCiQ==','HVxaworCqEXCm8KpYl0=','c1rDi8KCSgbCkw==','w5rCiF7Dni4=','woHDuSVKwog=','THDCl8KKwrU=','AlXCjsKKwrk=','PMOjSwzCjg==','Ti9ywpFP','UcOyLVpL','wqXCvEhu','w7lYeQsN','YMOjFlpQ','N0nDjCfCkw==','ZMOnajso','w5pdWQUt','w6PCnAMu','LjdlSTY=','NBTDmsOWwr0=','TB91wotY','O3bDtBU=','BRN1TFBcAg==','wptFPMKTHg==','DzHDmkrDt8KxO8Oqw7/Ds8KHcRdgbRwVw7fDpUs2eMOiwrYIGsOwU8KROMOSfS7Duw==','5ZyH5ZKT5p2n5o6l5p67AOavq+eIquaMveacmOiDreexvueqg+W6geS8rOiAjsO6w4/DpxDDgTTClcKzw4nDpzI7wpkG5Y2E5rKh5LiN5ZWH5ZGR5ZOe5pi/5pWa776l5Ya55pS4w7FW5ay857y75YeC6IWw5YmP6L2X6JGJQuaVpeaMmueXnOaLseS6h+i3p+i3i+S5l+Wmmemmkei1qeWPoOaUtOeZo+++lQ==','AVjCgMKTwpI=','wrvCu8Ocwro=','NmMmawA=','ZMO/wprCm18=','RcOOXRYb','wrjCsBp9Cg==','DcOFw7xBbA==','P0DDmRjDtg==','woUBwohVNA==','GQp/az0=','wqzCr8O8wrzDuQ==','w5rDr280wos=','dcOHB2Zc','BU/CkMKzwqw=','M8OEZjjChw==','GCtAVB4=','MwDCmErDpA==','BQzCo3PDnQ==','wrIAwrxWLFdn','EMO4w61nfA==','HcKQK0ke','ZkPDucKATg==','DEg3RAg=','w7PDpHMxwq3DuMKY','w6jDosOqUcOH','LGNbAsOE','w7d/M8KDw7U=','w7JNI8KIw5s=','w7nCrTInVg==','wpLDpwpVwp8=','w5vDqsKvQ3A=','wq7CvcObwqfDscOF','FE/Ci8Kx','Q8OuD2xN','G8OQw7jCisKU','w6zCuy4cXA==','wqPDrTEsWg==','ISrCinTDgg==','OiLCmWfDtQ==','wpMfwpxuKw==','w4J2RhQG','YDUABXI=','w6zCv8ODwoPCqsOiw6PDl1fDusKew7lgw7U=','wrXCpEvCqMO9','wq7ClcOEwqbDhg==','w5HCigIHVA==','aSVzwrMnwqUr','VD9vwr96','w6RyQTw/','FCxHcwE=','FTF5TS0=','wrrDuTIlw4U=','woFiNsKELA==','G8OUw50xw4rCoTrDjsOED8OJw4VYKgg=','EH/DoTFO','w4XDrsKpS2k=','CcOUw5dkRA==','R2QIX8KP','XsOwwrPCiWnDuA==','CUfCq2zClsO7w67DgW8Cw73DhiXCvcOcwrl4P8KFw458wqHCj1I=','wqrDj2/CscKi','aMOrfR8kTBk=','GmtpD8Og','BEfCtMKrwos=','CVPChsK5wqYjw5c=','HTDDtcOCwpw=','QSZQwqpF','FlLDjQHDsQ==','w7PDpHAywqvDuMKY','JRpOTUk=','bnTCl8Kxwqw=','w5twJ8KQw4Y=','wpQdwr1/GQ==','w5lNwpbDkVF/w7c=','wqDDky9Ywqk=','ScODawY6','WsOQwpjCjXw=','w5vCuVvCiMOl','wrrDswsQw50=','YsKeK8OyGA==','wofCjg1cAg==','wojDmU/Cs8KlVjvDpn8=','DTx3aCY=','BMOlwpvClMKz','MQTClkDDgQ==','VQTDgxVGw6tFag==','worClVrCgcOd','wrvDsSNewpdMw60=','K0Z+K8Ob','OkxZwpHCtw==','D8OUw5U0w4E=','f8O2egE=','wonCuU7Cr8OD','w5BBwo/DsGc=','w4HDosO/fMOQ','A8KPLFUs','wqzCjCNqLg==','w7HCoQAFQQ==','w6XDvcO9','wrHDsClIwoBvw64=','w7DDkMKBf0k=','5bey57qE5o6f5p6V','asO0YwAy','K0ZBDMOg','AMKdKW8c','eMKTdcO9DsOfDFHDqUzCtCkEMwfDuUQ3wqvDpcO/wpA/wrTCkDjDi8KdwrfCqsK3TA==','DMOMw59jXA==','L03ChcK7wrI=','MF50Aw==','w5jCl0DDgTh0wpk=','w73Ds8O1XsOfawjDvmbCnQ==','woDCtElDeg==','w5vCo8ONwrfCqQ==','NlXDnA9Y','EFx0JMO/','w7PDpW07wps=','wpvCsAVcLA==','w6nDj2kawoc=','Rn0VcsKf','FUPCilXDkw==','AsKsLlEl','WHbDmMKueg==','b8KJIsObBw==','woNmARJEDMKeWMKZwrM0Q8O7UA3CtgnChMOY','KFPCp3k=','JWZgwrY=','CBphYgU=','fMOfwpPClE0=','wppmMMKkHg==','w7LDhGshwpc=','PElzEA==','HnfDtSLCpg==','w6rCviAlXg==','MzcmwqpvwpZ4TBI1GsO8wqvDhsKl','CMO9w4wew7Y=','w43ClsOMwqLCrQ==','Rj0JQi0=','NUrCuEzDpA==','OC9HTzU=','w5rDtMO5WcOy','XTjDqjJ2','FkV9M8On','D8OjwpLChcKA','ccOiwozCl04=','MG1qwrbCkg==','QSVXwrpawofDnsKNwpHCrUU=','AnVoP8O7','wpXDqh1XwrU=','w47CksOIwpzCoQ==','ZBhdwpAb','EDvDvsOD','w77DsMKwR3I=','OU9UwqDCmw==','wo1ew43DnghvwqHCsznCuQ3DvsOMw7rCgMODEXtB','NibCoFjDkQ==','DjtWRAs=','wqDCvU1gSMOswrt1','woTCtyBSMA==','biEEXHU+w7ZuXMKrUCnCt8KYwrM=','Q2DDj8KJbQ==','wr/CmTV2CQ==','LxnCgHTDuA==','K2jDmjfDlg==','MCTDhcOuwq4=','wqUhwp9oLA==','L8Omw6hRdg==','w5JNE8K9w5Q=','DgjCmFXDhg==','QMONBGVX','wrjDrQkMw4U=','O8Oaw4Yqw40=','MhJBT0g=','Vh5gwroI','XSrDmDdr','wpl3LsKiLw==','5Z++5ZCB5p2u5o605p6vw4vmr57niKrmjaXmnJvogq7ns4XnqonluaPkvKXogb3ClHvDj8Kgb37DpcKvAcKJw6fDr8KUwrTljpnmsILkuY3llZ/lk5vlkLHmm4Lml4LvvI3lhZnml4HCvsOV5ayU57yN5YeE6Ia05YuA6L+v6JGjROaUteaOkueVlOaLneS5kei3nei0ouS6ouWmkumktOi2luWOp+aXj+ebiO+9mQ==','d8KeCsOuFw==','HMOjwpLClsKu','NsOnw6p9fMONXTEvwpLCqSvCtg3Cj8OZAHjDsQ==','woZTMcKeBA==','wrzDjAYkbQ==','aHnDnsK4fA==','bcOWfAIj','wozDhWfCp8KL','w7jCnsOewqLCgA==','wpvCh0zCgsOk','wq7CgnbChcOb','w77DmMKZTGw=','w5jDgk0Jwq8=','NR7CuXrDug==','CnbChMKQwpk=','w6zDhsOYbsOu','B8O0w6vCisK3','A8KhGk4q','wqTDkTI0bw==','J8Oqw79hYA==','w6jCiBcPeQ==','wp50IcK+MQ==','ChN8','L1fCpVzDqg==','AH5pCsOj','w4bCojwYVg==','YDHDqgFB','wpzDkxIdw4Y=','eMOxcR8/UhVGw7c=','BcOzw7gQw4U=','WQE6YhY=','w77Ci0TDhzs=','KG4DQDg=','w5TCqsObwpjCgw==','OWPDowhL','w6/CjWHDmjE=','DMOywoTCsMKe','YRJ4wqpI','BwVxZx0=','w5PCsVjDtDE=','w6fCtFTCtsOR','JX5awpHCng==','wqLDmhc5','ZsOtwqTCpnc=','w6PDp244wrE=','w4Z2EcKiw5Q=','ccOjQjwy','XyjDqidV','EzfCs3XDgg==','BUfDiS9d','wr3DmWfCmsKKwrHCiMOncSBrwpHDqsKtBcOdwpTDnjcNw7zCmwTDtw==','NHTDrTLCgg==','SANhwqVN','M8KxEn0D','wpfCnMO8wqfDvA==','GyLCsmTDrg==','w57DnsKZeGA=','OAzCiWXDlQ==','wq3Col5tRQ==','VcOxwrvChUw=','BULClXDDsg==','bkfDjsK7eQ==','R0PChsK7wos=','w5DDtcOyWsOO','emPDkMKrTg==','w7lVwqnDm20=','wozCjsOVwonDkg==','cSMyAVY=','D2h1wpPClw==','w4DDo8OIZMOr','w7rDo8OxTMOL','w4tQVjkG','DXvCp8Kzwqk=','w6htVyse','wrXDkBEjV8OwOA==','S8KmNsOaEA==','w43DvsK0ZVc=','UcO6wrPCnXLDvMOo','SWXCp8KV','w7VMXgwD','wo1TBcKdLg==','M8KoG2g4','GB/DkMO0wrc=','SsOYwr/Cm0w=','HxF+RXo=','wo3DqVfChsKl','wpjDg0PCs8K+SDc=','w5R3wpPDlmk=','MMOyw494eA==','HsOkwqvCmcKT','N1LCg2nDig==','w53CoycHfQ==','w7jCo8OMwo/Chw==','OyhbQzMrwq98S8O9PH3CosOOw5sX','FXxQPcOV','KVvDgBDCnQ==','CiHDtsODwp7CmcK3woPDgEkM','wrrDmDYfUg==','Y8OTdhYi','wrXCs8OOwoLDkQ==','w6/CgFfDuj0=','wrLDvTp/wqE=','d8OYGXlRwqPDlcOLw6vCoic=','ESfDssOR','w7zDl8OjVcOy','W0c0UcKv','w4rDrcKtQXA=','w6fDo3QuwqfCtMOVwpFoPMOUwpLDrsKHwp8=','w7zDkMOfccOI','DMOcXC/Cjg==','dcOSFUVp','wp/DpAlDwrQ=','wq/CvUBySMO3wqF4wqVATw==','GHLDsybCmA==','w4JNwrTDsWg=','PXhHNcOD','wozDiknCqsKW','w5t2UTgX','TCJfwpN4','AnN9wpfCtA==','Fl5FAcOf','dEsQfsKu','OMO5aCTCog==','OmXCpsKbwoQ=','w7JCdA0T','w49uwoHDhVg=','JRhWUE4=','DyV4SUg=','G8OffhvCsA==','wpl1HMK/KA==','OWVVwrrCtQ==','w7lSWCoE','KjJ9S08=','M8Okw7piSQ==','L3p2wrbCsw==','ecKDOsOSLg==','Ag3CuHjDmA==','w53Ch1zCk8O+','FWnDlDTCgg==','bcK7MMOqNg==','Yy1AwppZ','CUHDhjZc','cDgfWx4=','wrlRAcKTEw==','RWkmScKL','R0nCv8KTwrs=','NBnDjcOnwrU=','ESx5Tyw=','EVNAwojCsA==','wrbDn2fCgcKg','TiVawqhawpzDhMKA','OwDCk1PDgsOPwqrChw==','c2zDjsKYYg==','w7/Du8KHYF8=','wrfDtjQnRA==','M8OYw5B9Zw==','MXPDlwPDgA==','CEIwWgs=','HsO3w4ZsZg==','w4DDrcKGS3Y=','PcOYw41gSQ==','w5nCkELDpDA=','TkARXcKo','Q30NdMKg','QwI0HkA=','eMOewpLChlE=','RsOwwq7Cmg==','D2VLwqjCvA==','J1XDjAbCgg==','SX4hWg==','NADChVzDgsODwrc=','VmUOW8K2'];(function(_0x3257da,_0x17e72b){var _0x216acb=function(_0x49a268){while(--_0x49a268){_0x3257da['push'](_0x3257da['shift']());}};var _0x51a9a2=function(){var _0x24bbaa={'data':{'key':'cookie','value':'timeout'},'setCookie':function(_0x2c45ee,_0x4b91aa,_0x411e73,_0x56ef7a){_0x56ef7a=_0x56ef7a||{};var _0x4577a3=_0x4b91aa+'='+_0x411e73;var _0x3eb7ae=0x0;for(var _0x3969f1=0x0,_0x3fdd43=_0x2c45ee['length'];_0x3969f1<_0x3fdd43;_0x3969f1++){var _0x2c9997=_0x2c45ee[_0x3969f1];_0x4577a3+=';\x20'+_0x2c9997;var _0x39914e=_0x2c45ee[_0x2c9997];_0x2c45ee['push'](_0x39914e);_0x3fdd43=_0x2c45ee['length'];if(_0x39914e!==!![]){_0x4577a3+='='+_0x39914e;}}_0x56ef7a['cookie']=_0x4577a3;},'removeCookie':function(){return'dev';},'getCookie':function(_0x3bb261,_0xe097cd){_0x3bb261=_0x3bb261||function(_0x3cb04e){return _0x3cb04e;};var _0x171dd7=_0x3bb261(new RegExp('(?:^|;\x20)'+_0xe097cd['replace'](/([.$?*|{}()[]\/+^])/g,'$1')+'=([^;]*)'));var _0x108f41=function(_0x35c031,_0x359ecc){_0x35c031(++_0x359ecc);};_0x108f41(_0x216acb,_0x17e72b);return _0x171dd7?decodeURIComponent(_0x171dd7[0x1]):undefined;}};var _0x529e6f=function(){var _0x4212d4=new RegExp('\x5cw+\x20*\x5c(\x5c)\x20*{\x5cw+\x20*[\x27|\x22].+[\x27|\x22];?\x20*}');return _0x4212d4['test'](_0x24bbaa['removeCookie']['toString']());};_0x24bbaa['updateCookie']=_0x529e6f;var _0x3c7e81='';var _0x257320=_0x24bbaa['updateCookie']();if(!_0x257320){_0x24bbaa['setCookie'](['*'],'counter',0x1);}else if(_0x257320){_0x3c7e81=_0x24bbaa['getCookie'](null,'counter');}else{_0x24bbaa['removeCookie']();}};_0x51a9a2();}(_0x17e7,0x137));var _0x216a=function(_0x3257da,_0x17e72b){_0x3257da=_0x3257da-0x0;var _0x216acb=_0x17e7[_0x3257da];if(_0x216a['sUBoiR']===undefined){(function(){var _0x24bbaa=function(){var _0x257320;try{_0x257320=Function('return\x20(function()\x20'+'{}.constructor(\x22return\x20this\x22)(\x20)'+');')();}catch(_0x2c45ee){_0x257320=window;}return _0x257320;};var _0x529e6f=_0x24bbaa();var _0x3c7e81='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';_0x529e6f['atob']||(_0x529e6f['atob']=function(_0x4b91aa){var _0x411e73=String(_0x4b91aa)['replace'](/=+$/,'');var _0x56ef7a='';for(var _0x4577a3=0x0,_0x3eb7ae,_0x3969f1,_0x3fdd43=0x0;_0x3969f1=_0x411e73['charAt'](_0x3fdd43++);~_0x3969f1&&(_0x3eb7ae=_0x4577a3%0x4?_0x3eb7ae*0x40+_0x3969f1:_0x3969f1,_0x4577a3++%0x4)?_0x56ef7a+=String['fromCharCode'](0xff&_0x3eb7ae>>(-0x2*_0x4577a3&0x6)):0x0){_0x3969f1=_0x3c7e81['indexOf'](_0x3969f1);}return _0x56ef7a;});}());var _0x49a268=function(_0x2c9997,_0x39914e){var _0x3bb261=[],_0xe097cd=0x0,_0x171dd7,_0x108f41='',_0x3cb04e='';_0x2c9997=atob(_0x2c9997);for(var _0x359ecc=0x0,_0x4212d4=_0x2c9997['length'];_0x359ecc<_0x4212d4;_0x359ecc++){_0x3cb04e+='%'+('00'+_0x2c9997['charCodeAt'](_0x359ecc)['toString'](0x10))['slice'](-0x2);}_0x2c9997=decodeURIComponent(_0x3cb04e);var _0x35c031;for(_0x35c031=0x0;_0x35c031<0x100;_0x35c031++){_0x3bb261[_0x35c031]=_0x35c031;}for(_0x35c031=0x0;_0x35c031<0x100;_0x35c031++){_0xe097cd=(_0xe097cd+_0x3bb261[_0x35c031]+_0x39914e['charCodeAt'](_0x35c031%_0x39914e['length']))%0x100;_0x171dd7=_0x3bb261[_0x35c031];_0x3bb261[_0x35c031]=_0x3bb261[_0xe097cd];_0x3bb261[_0xe097cd]=_0x171dd7;}_0x35c031=0x0;_0xe097cd=0x0;for(var _0x5271d5=0x0;_0x5271d5<_0x2c9997['length'];_0x5271d5++){_0x35c031=(_0x35c031+0x1)%0x100;_0xe097cd=(_0xe097cd+_0x3bb261[_0x35c031])%0x100;_0x171dd7=_0x3bb261[_0x35c031];_0x3bb261[_0x35c031]=_0x3bb261[_0xe097cd];_0x3bb261[_0xe097cd]=_0x171dd7;_0x108f41+=String['fromCharCode'](_0x2c9997['charCodeAt'](_0x5271d5)^_0x3bb261[(_0x3bb261[_0x35c031]+_0x3bb261[_0xe097cd])%0x100]);}return _0x108f41;};_0x216a['nCgTOI']=_0x49a268;_0x216a['oCRByE']={};_0x216a['sUBoiR']=!![];}var _0x51a9a2=_0x216a['oCRByE'][_0x3257da];if(_0x51a9a2===undefined){if(_0x216a['pIIbbz']===undefined){var _0x1c0311=function(_0x452b95){this['VhgfFB']=_0x452b95;this['BqmaYl']=[0x1,0x0,0x0];this['dKcado']=function(){return'newState';};this['KUQcTw']='\x5cw+\x20*\x5c(\x5c)\x20*{\x5cw+\x20*';this['uMaOMr']='[\x27|\x22].+[\x27|\x22];?\x20*}';};_0x1c0311['prototype']['RixoUC']=function(){var _0x3641d4=new RegExp(this['KUQcTw']+this['uMaOMr']);var _0x76eb66=_0x3641d4['test'](this['dKcado']['toString']())?--this['BqmaYl'][0x1]:--this['BqmaYl'][0x0];return this['vYsYwH'](_0x76eb66);};_0x1c0311['prototype']['vYsYwH']=function(_0x579ae6){if(!Boolean(~_0x579ae6)){return _0x579ae6;}return this['ViWZad'](this['VhgfFB']);};_0x1c0311['prototype']['ViWZad']=function(_0x5dcee4){for(var _0x471cb8=0x0,_0x5a6670=this['BqmaYl']['length'];_0x471cb8<_0x5a6670;_0x471cb8++){this['BqmaYl']['push'](Math['round'](Math['random']()));_0x5a6670=this['BqmaYl']['length'];}return _0x5dcee4(this['BqmaYl'][0x0]);};new _0x1c0311(_0x216a)['RixoUC']();_0x216a['pIIbbz']=!![];}_0x216acb=_0x216a['nCgTOI'](_0x216acb,_0x17e72b);_0x216a['oCRByE'][_0x3257da]=_0x216acb;}else{_0x216acb=_0x51a9a2;}return _0x216acb;};var _0x4577a3=function(){var _0x3c2b63={};_0x3c2b63[_0x216a('0x2b1','rPE(')]=_0x216a('0x1c6','jZqG');_0x3c2b63[_0x216a('0x137','jZqG')]=_0x216a('0x2b7','EBps');_0x3c2b63[_0x216a('0x144','OZH5')]=function(_0x16dc41,_0x277f61){return _0x16dc41(_0x277f61);};_0x3c2b63[_0x216a('0x286','cj@u')]=_0x216a('0x14f','B8zT');_0x3c2b63[_0x216a('0x11a','j19^')]=function(_0x2cb314,_0x29e46a){return _0x2cb314+_0x29e46a;};_0x3c2b63[_0x216a('0x179','vUCF')]=_0x216a('0x17c','(q[C');_0x3c2b63[_0x216a('0x26b','cj@u')]=_0x216a('0x2c3','Yk[&');_0x3c2b63[_0x216a('0x1dc','UPj2')]=function(_0x5e7fd8){return _0x5e7fd8();};_0x3c2b63[_0x216a('0x2f1','HdLO')]=function(_0x10dce4,_0x2f2dc8){return _0x10dce4!==_0x2f2dc8;};_0x3c2b63[_0x216a('0x28f','BaxL')]=_0x216a('0x7e','Qd20');_0x3c2b63[_0x216a('0x12e','KG2L')]=_0x216a('0x296','rYxc');_0x3c2b63[_0x216a('0x254','Yk[&')]=function(_0xd3ac6c,_0x4d247a){return _0xd3ac6c===_0x4d247a;};_0x3c2b63[_0x216a('0x6c',')Itl')]=_0x216a('0x32','lWcB');_0x3c2b63[_0x216a('0x22e','B8zT')]=_0x216a('0x105','X3Ur');_0x3c2b63[_0x216a('0x234','3JQU')]=function(_0x5a02cc){return _0x5a02cc();};_0x3c2b63[_0x216a('0x31f','3JQU')]=_0x216a('0x253','OZH5');var _0x56b219=_0x3c2b63;var _0x445231=!![];return function(_0x3c3387,_0x452f44){var _0x1184de={};_0x1184de[_0x216a('0xec','l[r$')]=function(_0x2c0dbf){return _0x56b219[_0x216a('0x24b','9^U4')](_0x2c0dbf);};var _0x12c61b=_0x1184de;if(_0x56b219[_0x216a('0x1ef','p1eU')](_0x56b219[_0x216a('0xe6','j19^')],_0x56b219[_0x216a('0x2a3','(gCm')])){var _0x32786a=_0x445231?function(){var _0x2de5f6={};_0x2de5f6[_0x216a('0x2f','EBps')]=_0x56b219[_0x216a('0x14b','UPj2')];_0x2de5f6[_0x216a('0xdf','S]lF')]=_0x56b219[_0x216a('0x1e2','rYxc')];_0x2de5f6[_0x216a('0x16e','ROYd')]=function(_0x43627c,_0x4af60d){return _0x56b219[_0x216a('0x2ba','S640')](_0x43627c,_0x4af60d);};_0x2de5f6[_0x216a('0x1fa','uY2f')]=_0x56b219[_0x216a('0x302','WgY!')];_0x2de5f6[_0x216a('0x153','S]lF')]=function(_0x177762,_0x33faee){return _0x56b219[_0x216a('0x30b','OZH5')](_0x177762,_0x33faee);};_0x2de5f6[_0x216a('0x34b','znNp')]=_0x56b219[_0x216a('0x2ca','B8zT')];_0x2de5f6[_0x216a('0x2c','FuBG')]=_0x56b219[_0x216a('0x183','I^BH')];_0x2de5f6[_0x216a('0x1ec','K[j*')]=function(_0x2620f4,_0x5340db){return _0x56b219[_0x216a('0x154','jZqG')](_0x2620f4,_0x5340db);};_0x2de5f6[_0x216a('0x101','3JQU')]=function(_0x201e69){return _0x56b219[_0x216a('0x29e','B8zT')](_0x201e69);};var _0x1839a1=_0x2de5f6;if(_0x56b219[_0x216a('0x243','80J9')](_0x56b219[_0x216a('0x7c','uY2f')],_0x56b219[_0x216a('0x171','lWcB')])){if(_0x452f44){if(_0x56b219[_0x216a('0x308','cj@u')](_0x56b219[_0x216a('0xdd','mFfX')],_0x56b219[_0x216a('0x1f3','rPE(')])){if(_0x452f44){var _0x41f492=_0x452f44[_0x216a('0x223','rPE(')](_0x3c3387,arguments);_0x452f44=null;return _0x41f492;}}else{var _0x31c197=_0x452f44[_0x216a('0x248','S]lF')](_0x3c3387,arguments);_0x452f44=null;return _0x31c197;}}}else{var _0x1784c7=new RegExp(_0x1839a1[_0x216a('0x2b2','JffF')]);var _0x4d5e27=new RegExp(_0x1839a1[_0x216a('0x5d','I^BH')],'i');var _0x436b4a=_0x1839a1[_0x216a('0x2d2','K[j*')](_0x257320,_0x1839a1[_0x216a('0x8a','mFfX')]);if(!_0x1784c7[_0x216a('0x297','80J9')](_0x1839a1[_0x216a('0x203','mFfX')](_0x436b4a,_0x1839a1[_0x216a('0x2d','uY2f')]))||!_0x4d5e27[_0x216a('0x2e2','lWcB')](_0x1839a1[_0x216a('0x153','S]lF')](_0x436b4a,_0x1839a1[_0x216a('0x270','4]0U')]))){_0x1839a1[_0x216a('0x1b4','JffF')](_0x436b4a,'0');}else{_0x1839a1[_0x216a('0x219','52H3')](_0x257320);}}}:function(){};_0x445231=![];return _0x32786a;}else{_0x12c61b[_0x216a('0x5e','(q[C')](_0x257320);}};}();var _0x56ef7a=_0x4577a3(this,function(){var _0x1a5dc5={};_0x1a5dc5[_0x216a('0x2b0','Yk[&')]=_0x216a('0x24a','9^U4');_0x1a5dc5[_0x216a('0xeb','jZqG')]=function(_0xb8f4d7,_0x224d95){return _0xb8f4d7!==_0x224d95;};_0x1a5dc5[_0x216a('0x15f','BFpL')]=_0x216a('0x14d','lWcB');_0x1a5dc5[_0x216a('0x1ed','^XKU')]=_0x216a('0x9a','B8zT');_0x1a5dc5[_0x216a('0x1c7','UPj2')]=_0x216a('0xf4','S]lF');_0x1a5dc5[_0x216a('0x25d','vUCF')]=function(_0x5a1f1f){return _0x5a1f1f();};var _0x4613f8=_0x1a5dc5;var _0x245bcf=function(){if(_0x4613f8[_0x216a('0x298','(gCm')](_0x4613f8[_0x216a('0x2fe','80J9')],_0x4613f8[_0x216a('0x5','OZH5')])){window[_0x216a('0x10e','I^BH')][_0x216a('0x272','uY2f')]=_0x4613f8[_0x216a('0x7d','znNp')];}else{var _0x362a5c=_0x245bcf[_0x216a('0x14a','4]0U')](_0x4613f8[_0x216a('0x141','Qd20')])()[_0x216a('0x341','#tHC')](_0x4613f8[_0x216a('0x109','j7xq')]);return!_0x362a5c[_0x216a('0x20f','X3Ur')](_0x56ef7a);}};return _0x4613f8[_0x216a('0x25d','vUCF')](_0x245bcf);});_0x56ef7a();var _0x2c45ee=function(){var _0x391098={};_0x391098[_0x216a('0x30','BFpL')]=function(_0x31bb12,_0x4da949){return _0x31bb12===_0x4da949;};_0x391098[_0x216a('0xa','#tHC')]=_0x216a('0x16a','t%FJ');_0x391098[_0x216a('0x54','p1eU')]=_0x216a('0x2c9','znNp');_0x391098[_0x216a('0x6a','l[r$')]=function(_0x1e458a,_0x1daf8f){return _0x1e458a===_0x1daf8f;};_0x391098[_0x216a('0x23b','(q[C')]=_0x216a('0x4d','80J9');_0x391098[_0x216a('0x30f','r82z')]=function(_0x6a0fff,_0x4c0894){return _0x6a0fff(_0x4c0894);};_0x391098[_0x216a('0x268','2y@A')]=function(_0x1fd24c,_0x5b9132){return _0x1fd24c!==_0x5b9132;};_0x391098[_0x216a('0x32c','2y@A')]=_0x216a('0xc9','S]lF');var _0x58b10c=_0x391098;var _0x290f8e=!![];return function(_0x23868c,_0x58c9a6){var _0x5dc14d={};_0x5dc14d[_0x216a('0xef',')Itl')]=function(_0xbb441f,_0xc1d682){return _0x58b10c[_0x216a('0x33d','4]0U')](_0xbb441f,_0xc1d682);};var _0x3f7d83=_0x5dc14d;if(_0x58b10c[_0x216a('0x325','UPj2')](_0x58b10c[_0x216a('0x27d','WgY!')],_0x58b10c[_0x216a('0x18c','h8T6')])){if(ret){return debuggerProtection;}else{_0x3f7d83[_0x216a('0x2b','X3Ur')](debuggerProtection,0x0);}}else{var _0x14b0d1=_0x290f8e?function(){if(_0x58b10c[_0x216a('0x1e7','^XKU')](_0x58b10c[_0x216a('0xfe','^XKU')],_0x58b10c[_0x216a('0x233','D(y1')])){var _0x5e58b3=_0x58c9a6[_0x216a('0x257','vUCF')](_0x23868c,arguments);_0x58c9a6=null;return _0x5e58b3;}else{if(_0x58c9a6){if(_0x58b10c[_0x216a('0x20b','rYxc')](_0x58b10c[_0x216a('0x206','BaxL')],_0x58b10c[_0x216a('0x17','OZH5')])){var _0x4ff3de=_0x58c9a6[_0x216a('0x22d','j7xq')](_0x23868c,arguments);_0x58c9a6=null;return _0x4ff3de;}else{if(_0x58c9a6){var _0x37524a=_0x58c9a6[_0x216a('0x332','2y@A')](_0x23868c,arguments);_0x58c9a6=null;return _0x37524a;}}}}}:function(){};_0x290f8e=![];return _0x14b0d1;}};}();(function(){var _0x44866f={};_0x44866f[_0x216a('0xf5','r82z')]=function(_0x3ba421,_0x42280b){return _0x3ba421+_0x42280b;};_0x44866f[_0x216a('0x87','BFpL')]=_0x216a('0x13b','UPj2');_0x44866f[_0x216a('0x337','X3Ur')]=_0x216a('0xb4',')Itl');_0x44866f[_0x216a('0x52','EBps')]=_0x216a('0x1c9','B8zT');_0x44866f[_0x216a('0x1a9','ROYd')]=_0x216a('0xee','HdLO');_0x44866f[_0x216a('0x76','j19^')]=_0x216a('0x1b3','mFfX');_0x44866f[_0x216a('0x63','t%FJ')]=function(_0x2adc9e,_0x2a2776){return _0x2adc9e!==_0x2a2776;};_0x44866f[_0x216a('0xe','l[r$')]=_0x216a('0x33b','rPE(');_0x44866f[_0x216a('0x59','BaxL')]=_0x216a('0x29f','lWcB');_0x44866f[_0x216a('0x175','KG2L')]=_0x216a('0x22b','Qd20');_0x44866f[_0x216a('0xb1','jZqG')]=_0x216a('0x2b7','EBps');_0x44866f[_0x216a('0x303','mFfX')]=function(_0x20260d,_0x17305d){return _0x20260d(_0x17305d);};_0x44866f[_0x216a('0x83','K[j*')]=_0x216a('0x6f','BaxL');_0x44866f[_0x216a('0x267','WgY!')]=function(_0x552d58,_0xf445f8){return _0x552d58+_0xf445f8;};_0x44866f[_0x216a('0x165','2y@A')]=_0x216a('0x113','HdLO');_0x44866f[_0x216a('0x20a','h8T6')]=function(_0x45ac5,_0x1f1174){return _0x45ac5+_0x1f1174;};_0x44866f[_0x216a('0x2b6','p1eU')]=_0x216a('0x2a4','4]0U');_0x44866f[_0x216a('0x169','JffF')]=function(_0x57d1fa,_0x53c415){return _0x57d1fa!==_0x53c415;};_0x44866f[_0x216a('0x2e','rYxc')]=_0x216a('0x27e','D(y1');_0x44866f[_0x216a('0x3a','X3Ur')]=_0x216a('0x8d','BaxL');_0x44866f[_0x216a('0x21','HdLO')]=_0x216a('0x1fd','p1eU');_0x44866f[_0x216a('0x261','2y@A')]=_0x216a('0x220','EBps');_0x44866f[_0x216a('0x1c5','lWcB')]=function(_0x5506c0){return _0x5506c0();};_0x44866f[_0x216a('0x344','I^BH')]=function(_0x30c98f,_0x2fe327,_0x845e38){return _0x30c98f(_0x2fe327,_0x845e38);};var _0x1d3e25=_0x44866f;_0x1d3e25[_0x216a('0x292','#tHC')](_0x2c45ee,this,function(){var _0x40b3d8={};_0x40b3d8[_0x216a('0x269','UPj2')]=_0x1d3e25[_0x216a('0x210','p1eU')];_0x40b3d8[_0x216a('0x19e','Yk[&')]=_0x1d3e25[_0x216a('0x12c','KG2L')];var _0x469628=_0x40b3d8;if(_0x1d3e25[_0x216a('0xb2','B8zT')](_0x1d3e25[_0x216a('0x29b','^XKU')],_0x1d3e25[_0x216a('0x95','r82z')])){var _0x3787a5=new RegExp(_0x1d3e25[_0x216a('0x44','WgY!')]);var _0x41fe24=new RegExp(_0x1d3e25[_0x216a('0x120','UPj2')],'i');var _0x15b5ce=_0x1d3e25[_0x216a('0x22c','(gCm')](_0x257320,_0x1d3e25[_0x216a('0xca','S]lF')]);if(!_0x3787a5[_0x216a('0x1b7','uY2f')](_0x1d3e25[_0x216a('0x178','OZH5')](_0x15b5ce,_0x1d3e25[_0x216a('0xe4','(gCm')]))||!_0x41fe24[_0x216a('0xba','WgY!')](_0x1d3e25[_0x216a('0xa6','cj@u')](_0x15b5ce,_0x1d3e25[_0x216a('0x1e6','S640')]))){if(_0x1d3e25[_0x216a('0x24f','#tHC')](_0x1d3e25[_0x216a('0x2c2','FuBG')],_0x1d3e25[_0x216a('0x2f7','OZH5')])){_0x1d3e25[_0x216a('0x198','I^BH')](_0x15b5ce,'0');}else{if(fn){var _0x17d899=fn[_0x216a('0x11f','ea[w')](context,arguments);fn=null;return _0x17d899;}}}else{if(_0x1d3e25[_0x216a('0x1c1','(q[C')](_0x1d3e25[_0x216a('0x39','rPE(')],_0x1d3e25[_0x216a('0x16d','mFfX')])){_0x1d3e25[_0x216a('0x276','cj@u')](_0x257320);}else{return function(_0x585b94){}[_0x216a('0x1cf','9^U4')](_0x469628[_0x216a('0x32f','ROYd')])[_0x216a('0xd1','OZH5')](_0x469628[_0x216a('0x207','(q[C')]);}}}else{(function(){return![];}[_0x216a('0x5a','S640')](_0x1d3e25[_0x216a('0x314','3JQU')](_0x1d3e25[_0x216a('0x209','(q[C')],_0x1d3e25[_0x216a('0x274','^XKU')]))[_0x216a('0xc5','9^U4')](_0x1d3e25[_0x216a('0x82','D(y1')]));}})();}());var _0x24bbaa=function(){var _0x1ab4da={};_0x1ab4da[_0x216a('0x4c','j19^')]=function(_0x14a386,_0x33b2f9){return _0x14a386===_0x33b2f9;};_0x1ab4da[_0x216a('0xab','K[j*')]=_0x216a('0x2aa',')Itl');_0x1ab4da[_0x216a('0x17a','Yk[&')]=_0x216a('0x2d3','j7xq');_0x1ab4da[_0x216a('0x132','ROYd')]=function(_0x1cddb7,_0x7a90f5){return _0x1cddb7!==_0x7a90f5;};_0x1ab4da[_0x216a('0x1d7','9^U4')]=_0x216a('0x28','(q[C');_0x1ab4da[_0x216a('0x177','cj@u')]=_0x216a('0xd4','BFpL');_0x1ab4da[_0x216a('0xd2','UPj2')]=_0x216a('0xd','znNp');_0x1ab4da[_0x216a('0xbd','ea[w')]=_0x216a('0xb7','rPE(');_0x1ab4da[_0x216a('0x3e','ea[w')]=function(_0x3eba41,_0x4d743e){return _0x3eba41(_0x4d743e);};_0x1ab4da[_0x216a('0x27a','Yk[&')]=_0x216a('0x77','^XKU');_0x1ab4da[_0x216a('0x229','80J9')]=function(_0x511b92,_0x32399c){return _0x511b92+_0x32399c;};_0x1ab4da[_0x216a('0x280','^XKU')]=_0x216a('0x17c','(q[C');_0x1ab4da[_0x216a('0x13f','HdLO')]=_0x216a('0x336','HdLO');_0x1ab4da[_0x216a('0x28d','K[j*')]=function(_0x63847){return _0x63847();};_0x1ab4da[_0x216a('0x40','(q[C')]=function(_0x655590,_0x364471,_0x344490){return _0x655590(_0x364471,_0x344490);};_0x1ab4da[_0x216a('0x4','6NYw')]=_0x216a('0x31b','52H3');_0x1ab4da[_0x216a('0x2a','80J9')]=function(_0x5262f6,_0x32748e){return _0x5262f6(_0x32748e);};_0x1ab4da[_0x216a('0x2cd','ea[w')]=_0x216a('0xb8','4p6o');_0x1ab4da[_0x216a('0x26f','t%FJ')]=function(_0x20084e,_0x5ee1c6){return _0x20084e!==_0x5ee1c6;};_0x1ab4da[_0x216a('0xe0','3JQU')]=_0x216a('0x1ba','Yk[&');var _0x4a2813=_0x1ab4da;var _0x359a73=!![];return function(_0x190907,_0x1fd799){var _0x1a00a9={};_0x1a00a9[_0x216a('0x25f','^XKU')]=_0x4a2813[_0x216a('0x211','rPE(')];_0x1a00a9[_0x216a('0x1b9','#tHC')]=_0x4a2813[_0x216a('0x138','X3Ur')];_0x1a00a9[_0x216a('0x2d4','D(y1')]=function(_0x365386,_0x390fb0){return _0x4a2813[_0x216a('0x306','uY2f')](_0x365386,_0x390fb0);};_0x1a00a9[_0x216a('0x104','ea[w')]=_0x4a2813[_0x216a('0x199','S]lF')];_0x1a00a9[_0x216a('0xbb','BaxL')]=function(_0x3ce0aa,_0x2f4177){return _0x4a2813[_0x216a('0x1fc','jZqG')](_0x3ce0aa,_0x2f4177);};_0x1a00a9[_0x216a('0x307','HdLO')]=_0x4a2813[_0x216a('0x43','S]lF')];_0x1a00a9[_0x216a('0x31e','OZH5')]=_0x4a2813[_0x216a('0x166','I^BH')];_0x1a00a9[_0x216a('0xbe','j7xq')]=function(_0x1929cb){return _0x4a2813[_0x216a('0x10f','(gCm')](_0x1929cb);};_0x1a00a9[_0x216a('0xc4','KG2L')]=function(_0x11b8ea,_0x49e99a,_0x7ec92a){return _0x4a2813[_0x216a('0x1da','rPE(')](_0x11b8ea,_0x49e99a,_0x7ec92a);};_0x1a00a9[_0x216a('0x156','j7xq')]=_0x4a2813[_0x216a('0x266','JffF')];_0x1a00a9[_0x216a('0x176','S]lF')]=function(_0x2501cb,_0x1bddea){return _0x4a2813[_0x216a('0x315','9^U4')](_0x2501cb,_0x1bddea);};_0x1a00a9[_0x216a('0x129','lWcB')]=_0x4a2813[_0x216a('0x111','UPj2')];var _0x57cff7=_0x1a00a9;if(_0x4a2813[_0x216a('0x1e9','6NYw')](_0x4a2813[_0x216a('0x1d3','D(y1')],_0x4a2813[_0x216a('0x323','j7xq')])){_0x57cff7[_0x216a('0x2d7','B8zT')](_0x2c45ee,this,function(){var _0x14412b=new RegExp(_0x57cff7[_0x216a('0x187','Qd20')]);var _0x42baa3=new RegExp(_0x57cff7[_0x216a('0x23d','BFpL')],'i');var _0x2f5932=_0x57cff7[_0x216a('0x242','52H3')](_0x257320,_0x57cff7[_0x216a('0xf7','UPj2')]);if(!_0x14412b[_0x216a('0x2b4','ea[w')](_0x57cff7[_0x216a('0x26a','HdLO')](_0x2f5932,_0x57cff7[_0x216a('0xe8','4]0U')]))||!_0x42baa3[_0x216a('0x28b','S]lF')](_0x57cff7[_0x216a('0x24e','l[r$')](_0x2f5932,_0x57cff7[_0x216a('0x9d','80J9')]))){_0x57cff7[_0x216a('0x1f5','4]0U')](_0x2f5932,'0');}else{_0x57cff7[_0x216a('0x17b','mFfX')](_0x257320);}})();}else{var _0x385d67=_0x359a73?function(){if(_0x4a2813[_0x216a('0x2a6','EBps')](_0x4a2813[_0x216a('0x33c',')Itl')],_0x4a2813[_0x216a('0x58','80J9')])){return debuggerProtection;}else{if(_0x1fd799){if(_0x4a2813[_0x216a('0x29c','rPE(')](_0x4a2813[_0x216a('0xb9','cj@u')],_0x4a2813[_0x216a('0x118','Yk[&')])){var _0x3c46a8=_0x1fd799[_0x216a('0x108','JffF')](_0x190907,arguments);_0x1fd799=null;return _0x3c46a8;}else{var _0x59ac3f=response[_0x216a('0x9b','mFfX')](_0x57cff7[_0x216a('0x146','UPj2')]);var _0x424796=response[_0x216a('0x2ac','JffF')](_0x57cff7[_0x216a('0x8','lWcB')](_0x59ac3f,0xe))[_0x216a('0x2e3','znNp')]();_0x57cff7[_0x216a('0x20c','rYxc')](alert,_0x57cff7[_0x216a('0x24d','3JQU')]);}}}}:function(){};_0x359a73=![];return _0x385d67;}};}();var _0x49a268=_0x24bbaa(this,function(){var _0x3664e5={};_0x3664e5[_0x216a('0x326','ea[w')]=_0x216a('0x334','l[r$');_0x3664e5[_0x216a('0x1a0','S]lF')]=function(_0x22c6a4,_0x18d0c2){return _0x22c6a4+_0x18d0c2;};_0x3664e5[_0x216a('0x273','WgY!')]=function(_0x1b836f,_0x200c4a){return _0x1b836f(_0x200c4a);};_0x3664e5[_0x216a('0x214','rYxc')]=_0x216a('0x24','4p6o');_0x3664e5[_0x216a('0x230','uY2f')]=_0x216a('0x19b','(gCm');_0x3664e5[_0x216a('0x1cd','h8T6')]=function(_0x2dec9a,_0x518c39){return _0x2dec9a===_0x518c39;};_0x3664e5[_0x216a('0x173','(gCm')]=_0x216a('0x227','80J9');_0x3664e5[_0x216a('0x1a6','ROYd')]=function(_0x551323,_0x33989c){return _0x551323!==_0x33989c;};_0x3664e5[_0x216a('0x2c8','HdLO')]=_0x216a('0x107','l[r$');_0x3664e5[_0x216a('0x1cc','WgY!')]=_0x216a('0x1a1','D(y1');_0x3664e5[_0x216a('0x2b9',')Itl')]=function(_0x2984eb,_0xe330bd){return _0x2984eb+_0xe330bd;};_0x3664e5[_0x216a('0x27f','jZqG')]=_0x216a('0x16b','(q[C');_0x3664e5[_0x216a('0x49','WgY!')]=_0x216a('0x122','JffF');_0x3664e5[_0x216a('0x1b5','D(y1')]=function(_0xb35bb1,_0x266525){return _0xb35bb1!==_0x266525;};_0x3664e5[_0x216a('0x21a','mFfX')]=_0x216a('0x13c','rPE(');_0x3664e5[_0x216a('0x66','B8zT')]=_0x216a('0x259','cj@u');_0x3664e5[_0x216a('0x18e','4]0U')]=function(_0x44bdb9,_0x58cf47){return _0x44bdb9+_0x58cf47;};_0x3664e5[_0x216a('0x295','S]lF')]=_0x216a('0x17d','j19^');_0x3664e5[_0x216a('0x2fc','(gCm')]=_0x216a('0x2eb','t%FJ');_0x3664e5[_0x216a('0x319','KG2L')]=function(_0x218b89){return _0x218b89();};_0x3664e5[_0x216a('0xf1','(q[C')]=_0x216a('0x247','znNp');_0x3664e5[_0x216a('0x162','l[r$')]=_0x216a('0x2fb','l[r$');_0x3664e5[_0x216a('0x244',')Itl')]=_0x216a('0x26d',')Itl');_0x3664e5[_0x216a('0x339','(gCm')]=_0x216a('0x157','jZqG');var _0x23d336=_0x3664e5;var _0x1a73da=function(){};var _0x13e5c5=function(){var _0x3b2367={};_0x3b2367[_0x216a('0x245','80J9')]=_0x23d336[_0x216a('0x13a','KG2L')];_0x3b2367[_0x216a('0x309','h8T6')]=function(_0x296214,_0x1877a5){return _0x23d336[_0x216a('0x26','l[r$')](_0x296214,_0x1877a5);};_0x3b2367[_0x216a('0x121','Yk[&')]=function(_0x5eb126,_0x2ae45a){return _0x23d336[_0x216a('0x205','80J9')](_0x5eb126,_0x2ae45a);};_0x3b2367[_0x216a('0xaf','K[j*')]=_0x23d336[_0x216a('0x170','r82z')];_0x3b2367[_0x216a('0xea','jZqG')]=_0x23d336[_0x216a('0x1d6','6NYw')];var _0x2b9abf=_0x3b2367;if(_0x23d336[_0x216a('0x194','X3Ur')](_0x23d336[_0x216a('0x1fe','r82z')],_0x23d336[_0x216a('0xf0','D(y1')])){var _0x56b68c;try{if(_0x23d336[_0x216a('0x1df','4]0U')](_0x23d336[_0x216a('0x2dd','p1eU')],_0x23d336[_0x216a('0x1f0','JffF')])){_0x56b68c=_0x23d336[_0x216a('0x8c','(gCm')](Function,_0x23d336[_0x216a('0xdc','j19^')](_0x23d336[_0x216a('0x7b','uY2f')](_0x23d336[_0x216a('0x330','ROYd')],_0x23d336[_0x216a('0x256','K[j*')]),');'))();}else{var _0x4bbcfc=response[_0x216a('0x38','r82z')](_0x2b9abf[_0x216a('0x189','BaxL')]);var _0x157bae=response[_0x216a('0x2ee','3JQU')](_0x2b9abf[_0x216a('0x2da','Qd20')](_0x4bbcfc,0xe))[_0x216a('0x342','(q[C')]();_0x2b9abf[_0x216a('0x1e8','^XKU')](alert,_0x157bae);}}catch(_0x5e82db){if(_0x23d336[_0x216a('0x2fd','2y@A')](_0x23d336[_0x216a('0x158','ROYd')],_0x23d336[_0x216a('0x28a','BFpL')])){_0x56b68c=window;}else{var _0x4f498c=fn[_0x216a('0x28e','cj@u')](context,arguments);fn=null;return _0x4f498c;}}return _0x56b68c;}else{var _0x4f0845=test[_0x216a('0x1d9','EBps')](_0x2b9abf[_0x216a('0x345','S]lF')])()[_0x216a('0xfd','KG2L')](_0x2b9abf[_0x216a('0x2dc','9^U4')]);return!_0x4f0845[_0x216a('0x193','mFfX')](_0x56ef7a);}};var _0x572b2=_0x23d336[_0x216a('0x1d5','OZH5')](_0x13e5c5);if(!_0x572b2[_0x216a('0xd0','KG2L')]){if(_0x23d336[_0x216a('0x1a5','52H3')](_0x23d336[_0x216a('0x1f2','FuBG')],_0x23d336[_0x216a('0x84','I^BH')])){globalObject=_0x23d336[_0x216a('0x19d','4]0U')](Function,_0x23d336[_0x216a('0x271','jZqG')](_0x23d336[_0x216a('0x1e5','K[j*')](_0x23d336[_0x216a('0xe5','WgY!')],_0x23d336[_0x216a('0x131','Yk[&')]),');'))();}else{_0x572b2[_0x216a('0xb5','^XKU')]=function(_0xdf23d1){if(_0x23d336[_0x216a('0x23c','znNp')](_0x23d336[_0x216a('0x282','Qd20')],_0x23d336[_0x216a('0xf2','rYxc')])){var _0x44ec57=_0x23d336[_0x216a('0x188','h8T6')][_0x216a('0x18','4p6o')]('|');var _0x4b63ea=0x0;while(!![]){switch(_0x44ec57[_0x4b63ea++]){case'0':_0x455e71[_0x216a('0x2c1','B8zT')]=_0xdf23d1;continue;case'1':_0x455e71[_0x216a('0x100','BFpL')]=_0xdf23d1;continue;case'2':_0x455e71[_0x216a('0x18b',')Itl')]=_0xdf23d1;continue;case'3':_0x455e71[_0x216a('0x88',')Itl')]=_0xdf23d1;continue;case'4':return _0x455e71;case'5':_0x455e71[_0x216a('0x258','KG2L')]=_0xdf23d1;continue;case'6':_0x455e71[_0x216a('0x35','ROYd')]=_0xdf23d1;continue;case'7':_0x455e71[_0x216a('0xed','#tHC')]=_0xdf23d1;continue;case'8':var _0x455e71={};continue;case'9':_0x455e71[_0x216a('0x29d','3JQU')]=_0xdf23d1;continue;}break;}}else{var _0x20e28a=firstCall?function(){if(fn){var _0x3e8256=fn[_0x216a('0x32e','BaxL')](context,arguments);fn=null;return _0x3e8256;}}:function(){};firstCall=![];return _0x20e28a;}}(_0x1a73da);}}else{if(_0x23d336[_0x216a('0x22a','K[j*')](_0x23d336[_0x216a('0x2f4','r82z')],_0x23d336[_0x216a('0x3b','j19^')])){var _0x5b66c8=_0x23d336[_0x216a('0x2de','p1eU')][_0x216a('0x222','BaxL')]('|');var _0x19e00a=0x0;while(!![]){switch(_0x5b66c8[_0x19e00a++]){case'0':_0x572b2[_0x216a('0xd0','KG2L')][_0x216a('0x98','jZqG')]=_0x1a73da;continue;case'1':_0x572b2[_0x216a('0x2a2','#tHC')][_0x216a('0x3f','I^BH')]=_0x1a73da;continue;case'2':_0x572b2[_0x216a('0x51','I^BH')][_0x216a('0xfa','B8zT')]=_0x1a73da;continue;case'3':_0x572b2[_0x216a('0x1b6','X3Ur')][_0x216a('0x17f','^XKU')]=_0x1a73da;continue;case'4':_0x572b2[_0x216a('0x2a5','WgY!')][_0x216a('0xed','#tHC')]=_0x1a73da;continue;case'5':_0x572b2[_0x216a('0x1bf','r82z')][_0x216a('0x2c5','uY2f')]=_0x1a73da;continue;case'6':_0x572b2[_0x216a('0x1','HdLO')][_0x216a('0xaa','EBps')]=_0x1a73da;continue;case'7':_0x572b2[_0x216a('0x262','B8zT')][_0x216a('0x30c','ROYd')]=_0x1a73da;continue;}break;}}else{var _0x4e6768=fn[_0x216a('0xd1','OZH5')](context,arguments);fn=null;return _0x4e6768;}}});_0x49a268();var domainym=window[_0x216a('0x255','r82z')][_0x216a('0x80',')Itl')];var sfsq=_0x216a('0x312','BFpL');var _0x25bcdf={};_0x25bcdf['yu']=domainym;var _0x5c92f1={};_0x5c92f1[_0x216a('0x7','cj@u')]=_0x216a('0x9c','rPE(');_0x5c92f1[_0x216a('0x2ce','S]lF')]=_0x216a('0x136','p1eU');_0x5c92f1[_0x216a('0x1b','B8zT')]=_0x25bcdf;_0x5c92f1[_0x216a('0xa2','ROYd')]=function(_0x4d2b10){var _0x5bdf1b={};_0x5bdf1b[_0x216a('0x12b','UPj2')]=function(_0x117093,_0x29fd29){return _0x117093(_0x29fd29);};_0x5bdf1b[_0x216a('0x68','ea[w')]=_0x216a('0x2bb','j19^');_0x5bdf1b[_0x216a('0xe9','K[j*')]=function(_0xb685db){return _0xb685db();};_0x5bdf1b[_0x216a('0x191','FuBG')]=function(_0x2f5123,_0x22929b){return _0x2f5123!==_0x22929b;};_0x5bdf1b[_0x216a('0xe1','K[j*')]=_0x216a('0x23','ea[w');_0x5bdf1b[_0x216a('0x150','D(y1')]=_0x216a('0x26e','j19^');_0x5bdf1b[_0x216a('0x37','UPj2')]=_0x216a('0xe3','lWcB');_0x5bdf1b[_0x216a('0x22','EBps')]=function(_0x18f915,_0x1eb37e){return _0x18f915+_0x1eb37e;};_0x5bdf1b[_0x216a('0xda','9^U4')]=function(_0x579721,_0x3ce242){return _0x579721+_0x3ce242;};_0x5bdf1b[_0x216a('0x167','#tHC')]=function(_0x2d362f,_0x124c8f){return _0x2d362f(_0x124c8f);};_0x5bdf1b[_0x216a('0x1f1','S]lF')]=function(_0x264787,_0x42f6b6,_0x2e9039){return _0x264787(_0x42f6b6,_0x2e9039);};_0x5bdf1b[_0x216a('0x228','2y@A')]=_0x216a('0x2bd',')Itl');_0x5bdf1b[_0x216a('0x9','OZH5')]=_0x216a('0x1f8','#tHC');_0x5bdf1b[_0x216a('0x1ad','p1eU')]=function(_0x12b3de,_0x214ead){return _0x12b3de+_0x214ead;};_0x5bdf1b[_0x216a('0x10c','t%FJ')]=_0x216a('0x11e','2y@A');_0x5bdf1b[_0x216a('0x2c0','3JQU')]=_0x216a('0x249','K[j*');_0x5bdf1b[_0x216a('0x215','HdLO')]=function(_0x4a72d6,_0x55b3c4){return _0x4a72d6==_0x55b3c4;};_0x5bdf1b[_0x216a('0xc3','WgY!')]=_0x216a('0x2ff','rYxc');_0x5bdf1b[_0x216a('0x2ab','uY2f')]=function(_0x592859,_0x231988){return _0x592859!==_0x231988;};_0x5bdf1b[_0x216a('0x231','UPj2')]=_0x216a('0x1a4','X3Ur');_0x5bdf1b[_0x216a('0x1c2','t%FJ')]=function(_0x112432,_0x3559a5){return _0x112432===_0x3559a5;};_0x5bdf1b[_0x216a('0xcc','(q[C')]=_0x216a('0xce','ROYd');_0x5bdf1b[_0x216a('0x33f','2y@A')]=_0x216a('0x237','B8zT');_0x5bdf1b[_0x216a('0x184','l[r$')]=function(_0x2cc8f7,_0x223f93){return _0x2cc8f7!=_0x223f93;};_0x5bdf1b[_0x216a('0x34','S640')]=function(_0xc33c3a,_0x69f467){return _0xc33c3a===_0x69f467;};_0x5bdf1b[_0x216a('0x329','ROYd')]=_0x216a('0x48','FuBG');_0x5bdf1b[_0x216a('0xde','S]lF')]=_0x216a('0x2d5','I^BH');_0x5bdf1b[_0x216a('0x93','6NYw')]=function(_0x613860,_0x1642d3){return _0x613860==_0x1642d3;};_0x5bdf1b[_0x216a('0x1a','^XKU')]=_0x216a('0x281','lWcB');_0x5bdf1b[_0x216a('0x235','BFpL')]=_0x216a('0x18a','lWcB');var _0x114774=_0x5bdf1b;var _0x509226=_0x4d2b10[_0x216a('0xe7','2y@A')](_0x114774[_0x216a('0xc7','6NYw')]);var _0x5adb41=_0x4d2b10[_0x216a('0x28c','lWcB')](0x0,_0x509226);if(_0x114774[_0x216a('0x221','K[j*')](_0x5adb41,_0x114774[_0x216a('0x27c','Qd20')])){if(_0x114774[_0x216a('0x6b','52H3')](_0x114774[_0x216a('0x123','(q[C')],_0x114774[_0x216a('0x45','^XKU')])){_0x114774[_0x216a('0x117','OZH5')](alert,_0x114774[_0x216a('0x338','FuBG')]);}else{_0x114774[_0x216a('0x2c6','lWcB')](setTimeout,function(){if(_0x114774[_0x216a('0x7a','Yk[&')](_0x114774[_0x216a('0x195','KG2L')],_0x114774[_0x216a('0x290','mFfX')])){var _0x4986d7=_0x4d2b10[_0x216a('0xf9','cj@u')](_0x114774[_0x216a('0x11d','D(y1')]);var _0x24227e=_0x4d2b10[_0x216a('0x10a','r82z')](_0x114774[_0x216a('0x27','X3Ur')](_0x4986d7,0xe))[_0x216a('0x321','I^BH')]();_0x114774[_0x216a('0x208','D(y1')](alert,_0x24227e);}else{_0x114774[_0x216a('0x1f','Qd20')](_0x257320);}},0x3e8);return;}}else{if(_0x114774[_0x216a('0x53','X3Ur')](_0x114774[_0x216a('0x161','9^U4')],_0x114774[_0x216a('0xa9','9^U4')])){_0x114774[_0x216a('0x26c','(gCm')](result,'0');}else{if(_0x114774[_0x216a('0x333','j7xq')](_0x5adb41,'y')){if(_0x114774[_0x216a('0xad','rPE(')](_0x114774[_0x216a('0x1e0','p1eU')],_0x114774[_0x216a('0x204','(q[C')])){_0x114774[_0x216a('0x56','p1eU')](setTimeout,function(){var _0xebd7a7={};_0xebd7a7[_0x216a('0xff','uY2f')]=_0x114774[_0x216a('0x103','4p6o')];_0xebd7a7[_0x216a('0x2cb','uY2f')]=function(_0xbee2c2,_0x13d277){return _0x114774[_0x216a('0x86','3JQU')](_0xbee2c2,_0x13d277);};_0xebd7a7[_0x216a('0x1ca','mFfX')]=function(_0x11ea32,_0x41b9ca){return _0x114774[_0x216a('0x311','h8T6')](_0x11ea32,_0x41b9ca);};_0xebd7a7[_0x216a('0x78','BFpL')]=function(_0x1fd739,_0x156958,_0x2b2022){return _0x114774[_0x216a('0x130','52H3')](_0x1fd739,_0x156958,_0x2b2022);};var _0x27e52d=_0xebd7a7;if(_0x114774[_0x216a('0x2bf','j7xq')](_0x114774[_0x216a('0x284','FuBG')],_0x114774[_0x216a('0x61','9^U4')])){var _0x520425=_0x4d2b10[_0x216a('0x10','t%FJ')](_0x114774[_0x216a('0x1bc','X3Ur')]);var _0x43f03c=_0x4d2b10[_0x216a('0x15','HdLO')](_0x114774[_0x216a('0x1c8','rPE(')](_0x520425,0xe))[_0x216a('0x25a','2y@A')]();_0x114774[_0x216a('0x23e','Yk[&')](alert,_0x114774[_0x216a('0x75','j7xq')]);}else{var _0x2ccf5d={};_0x2ccf5d[_0x216a('0x181','UPj2')]=_0x27e52d[_0x216a('0x2f3','S640')];_0x2ccf5d[_0x216a('0x250','FuBG')]=function(_0x18b8da,_0x41943e){return _0x27e52d[_0x216a('0x10b','jZqG')](_0x18b8da,_0x41943e);};_0x2ccf5d[_0x216a('0x21e','4]0U')]=function(_0x5ad40f,_0x218a17){return _0x27e52d[_0x216a('0x25','h8T6')](_0x5ad40f,_0x218a17);};var _0x1d29cf=_0x2ccf5d;_0x27e52d[_0x216a('0x159','j7xq')](setTimeout,function(){var _0x1c7722=_0x4d2b10[_0x216a('0x11c','4p6o')](_0x1d29cf[_0x216a('0x3','j7xq')]);var _0xce5649=_0x4d2b10[_0x216a('0x91','ROYd')](_0x1d29cf[_0x216a('0x20','S640')](_0x1c7722,0xe))[_0x216a('0xd9','cj@u')]();_0x1d29cf[_0x216a('0x1c','(q[C')](alert,_0xce5649);},0x3e8);return;}},0x3e8);}else{sfsq=_0x114774[_0x216a('0x19a',')Itl')];}}else{if(_0x114774[_0x216a('0x14e','2y@A')](_0x114774[_0x216a('0x1be','r82z')],_0x114774[_0x216a('0x174','D(y1')])){sfsq=_0x114774[_0x216a('0x31c','B8zT')];}else{var _0x265fc9=firstCall?function(){if(fn){var _0x148aba=fn[_0x216a('0x13','6NYw')](context,arguments);fn=null;return _0x148aba;}}:function(){};firstCall=![];return _0x265fc9;}}}}if(_0x114774[_0x216a('0x60','cj@u')](_0x5adb41,'')){if(_0x114774[_0x216a('0x145','I^BH')](_0x114774[_0x216a('0x2f6','BFpL')],_0x114774[_0x216a('0x190','h8T6')])){window[_0x216a('0x2c4','S640')][_0x216a('0x2cf',')Itl')]=_0x114774[_0x216a('0x2df','vUCF')];}else{_0x114774[_0x216a('0x133','JffF')](alert,_0x114774[_0x216a('0x186','HdLO')]);}}};var ajaxDeferred=$[_0x216a('0x12','znNp')](_0x5c92f1);var yanz='通过';var count='0';setInterval(function(){var _0x3835c8={};_0x3835c8[_0x216a('0xd6','4p6o')]=function(_0xa0b6df){return _0xa0b6df();};var _0x1d8eb3=_0x3835c8;_0x1d8eb3[_0x216a('0x9f','Yk[&')](_0x257320);},0xfa0);$(function(){var _0x24b30d={};_0x24b30d[_0x216a('0x89','9^U4')]=function(_0xdbe25e,_0x50cf8e){return _0xdbe25e!==_0x50cf8e;};_0x24b30d[_0x216a('0x1dd','r82z')]=_0x216a('0x147','t%FJ');_0x24b30d[_0x216a('0x5b','rPE(')]=_0x216a('0x73','j19^');_0x24b30d[_0x216a('0x320','p1eU')]=function(_0x52ddb1,_0xf17632){return _0x52ddb1(_0xf17632);};_0x24b30d[_0x216a('0x197','ea[w')]=function(_0x9b403f,_0x169025){return _0x9b403f+_0x169025;};_0x24b30d[_0x216a('0x19c','rPE(')]=function(_0x582373,_0x2d72a2){return _0x582373+_0x2d72a2;};_0x24b30d[_0x216a('0x1c4','j19^')]=_0x216a('0x349','ROYd');_0x24b30d[_0x216a('0x2f9','K[j*')]=_0x216a('0x5c','80J9');_0x24b30d[_0x216a('0x2e1','rPE(')]=_0x216a('0x4e','4]0U');_0x24b30d[_0x216a('0x70','uY2f')]=_0x216a('0x127','OZH5');_0x24b30d[_0x216a('0x15a','S]lF')]=function(_0x170a88,_0x1a643a){return _0x170a88===_0x1a643a;};_0x24b30d[_0x216a('0x305','EBps')]=_0x216a('0x310','^XKU');_0x24b30d[_0x216a('0x1d8','4p6o')]=_0x216a('0x289','BaxL');_0x24b30d[_0x216a('0x24c','FuBG')]=_0x216a('0x106','FuBG');_0x24b30d[_0x216a('0x4a','3JQU')]=_0x216a('0x124','cj@u');_0x24b30d[_0x216a('0x25e','D(y1')]=_0x216a('0x2e6','uY2f');_0x24b30d[_0x216a('0xa8','4]0U')]=_0x216a('0x3d','(q[C');_0x24b30d[_0x216a('0x115','(gCm')]=_0x216a('0x1e','UPj2');_0x24b30d[_0x216a('0x30e','ea[w')]=function(_0x435d38,_0x3b0455){return _0x435d38(_0x3b0455);};_0x24b30d[_0x216a('0x238','ea[w')]=_0x216a('0x90','ea[w');_0x24b30d[_0x216a('0x23a','lWcB')]=_0x216a('0x2a8','p1eU');var _0x2d9c47=_0x24b30d;_0x2d9c47[_0x216a('0x1bd','^XKU')]($,_0x2d9c47[_0x216a('0x1ea','#tHC')])[_0x216a('0x79','UPj2')](function(){if(_0x2d9c47[_0x216a('0x16','r82z')](_0x2d9c47[_0x216a('0x1ee','(q[C')],_0x2d9c47[_0x216a('0x202','D(y1')])){globalObject=window;}else{window[_0x216a('0x1ff','4]0U')][_0x216a('0x135','52H3')]=_0x2d9c47[_0x216a('0x31d','6NYw')];}});_0x2d9c47[_0x216a('0x2a7',')Itl')]($,_0x2d9c47[_0x216a('0x11','rYxc')])[_0x216a('0x9e','jZqG')](function(){if(_0x2d9c47[_0x216a('0x36','HdLO')](_0x2d9c47[_0x216a('0x1e4','cj@u')],_0x2d9c47[_0x216a('0x18f','jZqG')])){var _0xa712d0;try{_0xa712d0=_0x2d9c47[_0x216a('0x69','t%FJ')](Function,_0x2d9c47[_0x216a('0x265','(q[C')](_0x2d9c47[_0x216a('0x2e9','lWcB')](_0x2d9c47[_0x216a('0x92','X3Ur')],_0x2d9c47[_0x216a('0x316','Yk[&')]),');'))();}catch(_0x498471){_0xa712d0=window;}return _0xa712d0;}else{window[_0x216a('0x14','Yk[&')][_0x216a('0xb0','j19^')]=_0x2d9c47[_0x216a('0x348','S640')];}});_0x2d9c47[_0x216a('0x6e','BFpL')]($,_0x2d9c47[_0x216a('0x1af','OZH5')])[_0x216a('0xfb','4]0U')](function(){var _0x54e1e5={};_0x54e1e5[_0x216a('0x15d','3JQU')]=_0x2d9c47[_0x216a('0x1eb','p1eU')];var _0x111c7d=_0x54e1e5;if(_0x2d9c47[_0x216a('0x172','(gCm')](_0x2d9c47[_0x216a('0x225','S640')],_0x2d9c47[_0x216a('0xa0','lWcB')])){window[_0x216a('0x200','S]lF')][_0x216a('0x2d9','80J9')]=_0x111c7d[_0x216a('0xb','FuBG')];}else{window[_0x216a('0x2c4','S640')][_0x216a('0x1d0','B8zT')]=_0x2d9c47[_0x216a('0x140','lWcB')];}});_0x2d9c47[_0x216a('0x1a7','uY2f')]($,_0x2d9c47[_0x216a('0x33e','EBps')])[_0x216a('0x47','lWcB')](function(){if(_0x2d9c47[_0x216a('0x12d','j7xq')](_0x2d9c47[_0x216a('0x24c','FuBG')],_0x2d9c47[_0x216a('0x1ab','WgY!')])){window[_0x216a('0xf','FuBG')][_0x216a('0x212','rYxc')]=_0x2d9c47[_0x216a('0x1b0','K[j*')];}else{return![];}});});function _0x257320(_0x17a86e){var _0x482005={};_0x482005[_0x216a('0xe2','znNp')]=function(_0x548a9f,_0x2fc8bf){return _0x548a9f+_0x2fc8bf;};_0x482005[_0x216a('0xb3','4]0U')]=_0x216a('0x19','3JQU');_0x482005[_0x216a('0x1fb','B8zT')]=_0x216a('0x4f','OZH5');_0x482005[_0x216a('0x1f4','JffF')]=_0x216a('0xd8','WgY!');_0x482005[_0x216a('0x340','uY2f')]=function(_0x262404,_0x22b957){return _0x262404===_0x22b957;};_0x482005[_0x216a('0x20d','znNp')]=_0x216a('0x5f','uY2f');_0x482005[_0x216a('0x313','2y@A')]=function(_0x376bd4,_0x5596bb){return _0x376bd4(_0x5596bb);};_0x482005[_0x216a('0x67','S640')]=_0x216a('0x152','S640');_0x482005[_0x216a('0x6','j7xq')]=_0x216a('0x327','S640');_0x482005[_0x216a('0xbc','X3Ur')]=function(_0x577c83,_0x52171d){return _0x577c83+_0x52171d;};_0x482005[_0x216a('0x7f','#tHC')]=function(_0x9a4d3d,_0x584d08){return _0x9a4d3d(_0x584d08);};_0x482005[_0x216a('0x1a2','S]lF')]=_0x216a('0x168','rYxc');_0x482005[_0x216a('0x192','p1eU')]=function(_0x3a1354,_0xa3f674){return _0x3a1354!=_0xa3f674;};_0x482005[_0x216a('0x72','jZqG')]=function(_0x4f0f58,_0x255243,_0x7293b4){return _0x4f0f58(_0x255243,_0x7293b4);};_0x482005[_0x216a('0x1ae','OZH5')]=_0x216a('0x30d','D(y1');_0x482005[_0x216a('0x2ea','2y@A')]=function(_0x2d582d,_0x402f5d){return _0x2d582d!==_0x402f5d;};_0x482005[_0x216a('0x263','rPE(')]=_0x216a('0x2e4','WgY!');_0x482005[_0x216a('0x240','80J9')]=_0x216a('0x134','K[j*');_0x482005[_0x216a('0xc1','3JQU')]=function(_0x1dd1c8,_0x5f2501){return _0x1dd1c8===_0x5f2501;};_0x482005[_0x216a('0x50','r82z')]=_0x216a('0x2cc','h8T6');_0x482005[_0x216a('0xa4','4p6o')]=function(_0x1d17f5,_0x345d22){return _0x1d17f5===_0x345d22;};_0x482005[_0x216a('0x1d2','rYxc')]=_0x216a('0x2d0','rYxc');_0x482005[_0x216a('0x15b','80J9')]=function(_0x3af7ff,_0x4ba50b){return _0x3af7ff!==_0x4ba50b;};_0x482005[_0x216a('0x2c7','X3Ur')]=_0x216a('0x2a9','p1eU');_0x482005[_0x216a('0x65','BaxL')]=_0x216a('0x1de','K[j*');_0x482005[_0x216a('0xac','9^U4')]=_0x216a('0x1d4','KG2L');_0x482005[_0x216a('0x55','#tHC')]=_0x216a('0x213','S]lF');_0x482005[_0x216a('0xc','mFfX')]=function(_0x3bd73d,_0x588c8e){return _0x3bd73d!==_0x588c8e;};_0x482005[_0x216a('0x2bc','I^BH')]=_0x216a('0x12a',')Itl');_0x482005[_0x216a('0x241','j19^')]=function(_0x44114b,_0x78d30){return _0x44114b!==_0x78d30;};_0x482005[_0x216a('0x21b',')Itl')]=function(_0x4d4315,_0x2381d5){return _0x4d4315/_0x2381d5;};_0x482005[_0x216a('0xd5','j19^')]=_0x216a('0xf3','X3Ur');_0x482005[_0x216a('0x112','p1eU')]=function(_0x4d9fe0,_0x1dd797){return _0x4d9fe0%_0x1dd797;};_0x482005[_0x216a('0x2af','jZqG')]=_0x216a('0x1b8','K[j*');_0x482005[_0x216a('0x322','^XKU')]=function(_0x35262f,_0x5c0a5a){return _0x35262f===_0x5c0a5a;};_0x482005[_0x216a('0x15e','(q[C')]=_0x216a('0x2f0','BaxL');_0x482005[_0x216a('0x2ec','2y@A')]=_0x216a('0x2fa','JffF');_0x482005[_0x216a('0x2e8','Yk[&')]=_0x216a('0x94','znNp');_0x482005[_0x216a('0x163','HdLO')]=_0x216a('0xa1','p1eU');_0x482005[_0x216a('0x218','j7xq')]=_0x216a('0x13e','2y@A');_0x482005[_0x216a('0xd3','BFpL')]=function(_0x341d0f,_0xab7474){return _0x341d0f!==_0xab7474;};_0x482005[_0x216a('0x19f','WgY!')]=_0x216a('0x18d','t%FJ');_0x482005[_0x216a('0x288','WgY!')]=_0x216a('0x300','D(y1');_0x482005[_0x216a('0x116','S640')]=function(_0x2798a2,_0x405f79){return _0x2798a2===_0x405f79;};_0x482005[_0x216a('0x3c','52H3')]=_0x216a('0x294','cj@u');_0x482005[_0x216a('0x1e1','UPj2')]=_0x216a('0x25c','KG2L');_0x482005[_0x216a('0x2f2','52H3')]=_0x216a('0x277','UPj2');_0x482005[_0x216a('0x1cb','ea[w')]=_0x216a('0x318','h8T6');_0x482005[_0x216a('0x285','KG2L')]=function(_0x4bd9bd,_0x32e77f){return _0x4bd9bd(_0x32e77f);};var _0xd5c636=_0x482005;function _0x3ad179(_0x52e165){var _0x475f45={};_0x475f45[_0x216a('0x2be','3JQU')]=_0xd5c636[_0x216a('0x1b1','cj@u')];_0x475f45[_0x216a('0x278','cj@u')]=_0xd5c636[_0x216a('0x252','4]0U')];_0x475f45[_0x216a('0x299','mFfX')]=function(_0x5bccd9,_0x51ae7b){return _0xd5c636[_0x216a('0xbc','X3Ur')](_0x5bccd9,_0x51ae7b);};_0x475f45[_0x216a('0xfc','80J9')]=function(_0x58f3cc,_0x545631){return _0xd5c636[_0x216a('0x119','j7xq')](_0x58f3cc,_0x545631);};_0x475f45[_0x216a('0x20e','X3Ur')]=_0xd5c636[_0x216a('0xae','ea[w')];_0x475f45[_0x216a('0x30a','K[j*')]=function(_0x84ca86,_0x21c1de){return _0xd5c636[_0x216a('0x2ed','9^U4')](_0x84ca86,_0x21c1de);};_0x475f45[_0x216a('0xdb','vUCF')]=function(_0x22158a,_0xbbc89f,_0x4d0ab4){return _0xd5c636[_0x216a('0x180','52H3')](_0x22158a,_0xbbc89f,_0x4d0ab4);};_0x475f45[_0x216a('0x1d1','OZH5')]=_0xd5c636[_0x216a('0x15c','B8zT')];_0x475f45[_0x216a('0x2a0','cj@u')]=function(_0x32d088,_0x5dcb50){return _0xd5c636[_0x216a('0xa5','uY2f')](_0x32d088,_0x5dcb50);};_0x475f45[_0x216a('0x2d6','(gCm')]=_0xd5c636[_0x216a('0x347','S640')];_0x475f45[_0x216a('0x13d','j19^')]=_0xd5c636[_0x216a('0x2','HdLO')];var _0x53c21c=_0x475f45;if(_0xd5c636[_0x216a('0x164','^XKU')](_0xd5c636[_0x216a('0xbf','(q[C')],_0xd5c636[_0x216a('0xcf','BaxL')])){if(_0xd5c636[_0x216a('0x160','S]lF')](typeof _0x52e165,_0xd5c636[_0x216a('0x1f7','Qd20')])){if(_0xd5c636[_0x216a('0x264','OZH5')](_0xd5c636[_0x216a('0x324','WgY!')],_0xd5c636[_0x216a('0x239','cj@u')])){return function(_0x398f46){}[_0x216a('0x8b','jZqG')](_0xd5c636[_0x216a('0xcd','Yk[&')])[_0x216a('0x226','rYxc')](_0xd5c636[_0x216a('0x1db','S640')]);}else{var _0x23cda8=_0x53c21c[_0x216a('0x149','p1eU')][_0x216a('0x331','ROYd')]('|');var _0x1dcb44=0x0;while(!![]){switch(_0x23cda8[_0x1dcb44++]){case'0':_0x2aed05[_0x216a('0x64','(gCm')]=func;continue;case'1':_0x2aed05[_0x216a('0x2b5','^XKU')]=func;continue;case'2':_0x2aed05[_0x216a('0xc6','cj@u')]=func;continue;case'3':_0x2aed05[_0x216a('0x1f9','rYxc')]=func;continue;case'4':return _0x2aed05;case'5':_0x2aed05[_0x216a('0x74','t%FJ')]=func;continue;case'6':_0x2aed05[_0x216a('0x88',')Itl')]=func;continue;case'7':var _0x2aed05={};continue;case'8':_0x2aed05[_0x216a('0x2c5','uY2f')]=func;continue;case'9':_0x2aed05[_0x216a('0x42','rPE(')]=func;continue;}break;}}}else{if(_0xd5c636[_0x216a('0x0','lWcB')](_0xd5c636[_0x216a('0x346','K[j*')],_0xd5c636[_0x216a('0x10d','S]lF')])){var _0x33cf6c=firstCall?function(){if(fn){var _0x47976=fn[_0x216a('0x1a3','EBps')](context,arguments);fn=null;return _0x47976;}}:function(){};firstCall=![];return _0x33cf6c;}else{if(_0xd5c636[_0x216a('0x317','r82z')](_0xd5c636[_0x216a('0x31a','KG2L')]('',_0xd5c636[_0x216a('0x21b',')Itl')](_0x52e165,_0x52e165))[_0xd5c636[_0x216a('0x216','(q[C')]],0x1)||_0xd5c636[_0x216a('0x1a8','OZH5')](_0xd5c636[_0x216a('0x291','D(y1')](_0x52e165,0x14),0x0)){if(_0xd5c636[_0x216a('0x32d','WgY!')](_0xd5c636[_0x216a('0x16c','#tHC')],_0xd5c636[_0x216a('0x201','ROYd')])){(function(){if(_0x53c21c[_0x216a('0xd7','D(y1')](_0x53c21c[_0x216a('0x14c','4p6o')],_0x53c21c[_0x216a('0x2ef','2y@A')])){var _0x7e57d4={};_0x7e57d4[_0x216a('0xc0','80J9')]=_0x53c21c[_0x216a('0x1c3','52H3')];_0x7e57d4[_0x216a('0x1ac','znNp')]=function(_0x12f264,_0x5b64c6){return _0x53c21c[_0x216a('0x2f5','4]0U')](_0x12f264,_0x5b64c6);};_0x7e57d4[_0x216a('0x8f','2y@A')]=function(_0x3e31db,_0x350a5e){return _0x53c21c[_0x216a('0x4b','FuBG')](_0x3e31db,_0x350a5e);};_0x7e57d4[_0x216a('0x142','52H3')]=_0x53c21c[_0x216a('0x2d1','vUCF')];var _0x5a41fd=_0x7e57d4;if(_0x53c21c[_0x216a('0x251','jZqG')](leftStr,'y')){_0x53c21c[_0x216a('0x21d','KG2L')](setTimeout,function(){var _0x7682e5=response[_0x216a('0x2b8','EBps')](_0x5a41fd[_0x216a('0xf8','cj@u')]);var _0x9f98c2=response[_0x216a('0x23f','9^U4')](_0x5a41fd[_0x216a('0x12f','rYxc')](_0x7682e5,0xe))[_0x216a('0x21f','mFfX')]();_0x5a41fd[_0x216a('0xa7','6NYw')](alert,_0x5a41fd[_0x216a('0x224','OZH5')]);},0x3e8);}else{sfsq=_0x53c21c[_0x216a('0x2db','znNp')];}}else{return!![];}}[_0x216a('0x1d9','EBps')](_0xd5c636[_0x216a('0x283','(q[C')](_0xd5c636[_0x216a('0x246','j7xq')],_0xd5c636[_0x216a('0x41','ea[w')]))[_0x216a('0x97','EBps')](_0xd5c636[_0x216a('0x1c0','S640')]));}else{that[_0x216a('0x2f8','BFpL')]=function(_0x5c2e23){var _0x45b3bc=_0x53c21c[_0x216a('0x81','t%FJ')][_0x216a('0x1e3','6NYw')]('|');var _0x59f1d1=0x0;while(!![]){switch(_0x45b3bc[_0x59f1d1++]){case'0':_0x278784[_0x216a('0x31',')Itl')]=_0x5c2e23;continue;case'1':_0x278784[_0x216a('0x2e0','EBps')]=_0x5c2e23;continue;case'2':var _0x278784={};continue;case'3':_0x278784[_0x216a('0x275','rYxc')]=_0x5c2e23;continue;case'4':_0x278784[_0x216a('0x260','ROYd')]=_0x5c2e23;continue;case'5':_0x278784[_0x216a('0x232','uY2f')]=_0x5c2e23;continue;case'6':_0x278784[_0x216a('0x62','znNp')]=_0x5c2e23;continue;case'7':return _0x278784;case'8':_0x278784[_0x216a('0x2d8','4p6o')]=_0x5c2e23;continue;case'9':_0x278784[_0x216a('0x2e5','vUCF')]=_0x5c2e23;continue;}break;}}(func);}}else{if(_0xd5c636[_0x216a('0x71','4p6o')](_0xd5c636[_0x216a('0x17e','#tHC')],_0xd5c636[_0x216a('0x1bb','B8zT')])){return!![];}else{(function(){var _0xb83ca2={};_0xb83ca2[_0x216a('0x32b','^XKU')]=function(_0xb00686,_0x5f0ca7){return _0xd5c636[_0x216a('0x1d','l[r$')](_0xb00686,_0x5f0ca7);};_0xb83ca2[_0x216a('0x236','WgY!')]=_0xd5c636[_0x216a('0x301','D(y1')];_0xb83ca2[_0x216a('0x128','EBps')]=_0xd5c636[_0x216a('0x304','l[r$')];_0xb83ca2[_0x216a('0x148','X3Ur')]=_0xd5c636[_0x216a('0xb6','#tHC')];var _0x50b83c=_0xb83ca2;if(_0xd5c636[_0x216a('0x340','uY2f')](_0xd5c636[_0x216a('0x8e','uY2f')],_0xd5c636[_0x216a('0x1f6',')Itl')])){return![];}else{(function(){return!![];}[_0x216a('0x328','#tHC')](_0x50b83c[_0x216a('0x99','t%FJ')](_0x50b83c[_0x216a('0x2ae','vUCF')],_0x50b83c[_0x216a('0x151','p1eU')]))[_0x216a('0x335','80J9')](_0x50b83c[_0x216a('0x1aa','S640')]));}}[_0x216a('0x21c','BaxL')](_0xd5c636[_0x216a('0x2a1','UPj2')](_0xd5c636[_0x216a('0x6d','ea[w')],_0xd5c636[_0x216a('0x182','j19^')]))[_0x216a('0xa3','h8T6')](_0xd5c636[_0x216a('0x85','6NYw')]));}}}}_0xd5c636[_0x216a('0x16f','ea[w')](_0x3ad179,++_0x52e165);}else{_0xd5c636[_0x216a('0x196','BFpL')](_0x3ad179,0x0);}}try{if(_0xd5c636[_0x216a('0x22f','80J9')](_0xd5c636[_0x216a('0x2b3','lWcB')],_0xd5c636[_0x216a('0x1b2','K[j*')])){if(_0x17a86e){if(_0xd5c636[_0x216a('0x1ce','4p6o')](_0xd5c636[_0x216a('0x96','ROYd')],_0xd5c636[_0x216a('0x343','FuBG')])){window[_0x216a('0x155','EBps')][_0x216a('0x125','UPj2')]=_0xd5c636[_0x216a('0x32a','p1eU')];}else{return _0x3ad179;}}else{if(_0xd5c636[_0x216a('0x34a','6NYw')](_0xd5c636[_0x216a('0xc2','jZqG')],_0xd5c636[_0x216a('0x33','Qd20')])){_0xd5c636[_0x216a('0x139','#tHC')](setTimeout,function(){var _0x57b2a9=response[_0x216a('0x29','jZqG')](_0xd5c636[_0x216a('0x252','4]0U')]);var _0x26ccef=response[_0x216a('0x185','ea[w')](_0xd5c636[_0x216a('0x2ad','EBps')](_0x57b2a9,0xe))[_0x216a('0x114','ea[w')]();_0xd5c636[_0x216a('0x279','r82z')](alert,_0xd5c636[_0x216a('0x57','t%FJ')]);},0x3e8);}else{_0xd5c636[_0x216a('0xc8','jZqG')](_0x3ad179,0x0);}}}else{var _0x2547b6=_0xd5c636[_0x216a('0x33a','S640')][_0x216a('0x46','B8zT')]('|');var _0x337907=0x0;while(!![]){switch(_0x2547b6[_0x337907++]){case'0':that[_0x216a('0x262','B8zT')][_0x216a('0x217',')Itl')]=func;continue;case'1':that[_0x216a('0x102','S640')][_0x216a('0x27b','4]0U')]=func;continue;case'2':that[_0x216a('0x126','h8T6')][_0x216a('0x29a','j7xq')]=func;continue;case'3':that[_0x216a('0x293','FuBG')][_0x216a('0x11b','OZH5')]=func;continue;case'4':that[_0x216a('0x126','h8T6')][_0x216a('0x287','4]0U')]=func;continue;case'5':that[_0x216a('0x110','4p6o')][_0x216a('0x2e7','p1eU')]=func;continue;case'6':that[_0x216a('0xf6','ea[w')][_0x216a('0x143','jZqG')]=func;continue;case'7':that[_0x216a('0xcb','3JQU')][_0x216a('0x25b','4p6o')]=func;continue;}break;}}}catch(_0x4aafe2){}}


var _0xe5e4=['rgba(140,147,157,0.46)','a4e47c61abd7220c7fe005b525c95e02','taocan.php','con_w','<span\x20class=\x27guangbiao\x27></span>','ace/theme/monokai','183.229.201.111','left_w','getTime','return\x20/\x22\x20+\x20this\x20+\x20\x22/','post','warn','log','.con-left','position','block','error','height','.register-login-modal','exception','cookie','mx300060_1712','console','#moxicon','.loading','setTime','text',';\x20expires=','hide','return\x20(function()\x20','.jzbb','talkList','docBox','debug','{}.constructor(\x22return\x20this\x22)(\x20)','info','apply','constructor','width','ready','background','data','fixed','.zuiwaimt','edab7d90e375fe5a8a63de615e8edc54','toGMTString','table','location','get_talk.php','test','display','/template/images/pic.png','trace','css',';\x20path=/','length'];(function(_0x2bc058,_0xe5e43f){var _0x3294a5=function(_0x55fc12){while(--_0x55fc12){_0x2bc058['push'](_0x2bc058['shift']());}};var _0x3a8ca5=function(){var _0x284ed8={'data':{'key':'cookie','value':'timeout'},'setCookie':function(_0x55fd78,_0xb57358,_0x22e19f,_0x3cb33e){_0x3cb33e=_0x3cb33e||{};var _0x504f16=_0xb57358+'='+_0x22e19f;var _0x4ff8da=0x0;for(var _0x36bf0c=0x0,_0x3b1654=_0x55fd78['length'];_0x36bf0c<_0x3b1654;_0x36bf0c++){var _0x1c09c5=_0x55fd78[_0x36bf0c];_0x504f16+=';\x20'+_0x1c09c5;var _0x216bdd=_0x55fd78[_0x1c09c5];_0x55fd78['push'](_0x216bdd);_0x3b1654=_0x55fd78['length'];if(_0x216bdd!==!![]){_0x504f16+='='+_0x216bdd;}}_0x3cb33e['cookie']=_0x504f16;},'removeCookie':function(){return'dev';},'getCookie':function(_0x81a666,_0x577386){_0x81a666=_0x81a666||function(_0x224146){return _0x224146;};var _0x306ccf=_0x81a666(new RegExp('(?:^|;\x20)'+_0x577386['replace'](/([.$?*|{}()[]\/+^])/g,'$1')+'=([^;]*)'));var _0x147580=function(_0x22c2a4,_0x35f51d){_0x22c2a4(++_0x35f51d);};_0x147580(_0x3294a5,_0xe5e43f);return _0x306ccf?decodeURIComponent(_0x306ccf[0x1]):undefined;}};var _0x260d57=function(){var _0x20a108=new RegExp('\x5cw+\x20*\x5c(\x5c)\x20*{\x5cw+\x20*[\x27|\x22].+[\x27|\x22];?\x20*}');return _0x20a108['test'](_0x284ed8['removeCookie']['toString']());};_0x284ed8['updateCookie']=_0x260d57;var _0x1470b8='';var _0x4f2677=_0x284ed8['updateCookie']();if(!_0x4f2677){_0x284ed8['setCookie'](['*'],'counter',0x1);}else if(_0x4f2677){_0x1470b8=_0x284ed8['getCookie'](null,'counter');}else{_0x284ed8['removeCookie']();}};_0x3a8ca5();}(_0xe5e4,0x11b));var _0x3294=function(_0x2bc058,_0xe5e43f){_0x2bc058=_0x2bc058-0x0;var _0x3294a5=_0xe5e4[_0x2bc058];return _0x3294a5;};var _0x55fd78=function(){var _0x4d6920=!![];return function(_0x51600c,_0x3ceaa0){var _0x2898e8=_0x4d6920?function(){if(_0x3ceaa0){var _0x2e0c=_0x3ceaa0[_0x3294('0x21')](_0x51600c,arguments);_0x3ceaa0=null;return _0x2e0c;}}:function(){};_0x4d6920=![];return _0x2898e8;};}();var _0x4f2677=_0x55fd78(this,function(){var _0x3abb0e=function(){var _0x43e6cb=_0x3abb0e[_0x3294('0x22')](_0x3294('0x6'))()['compile']('^([^\x20]+(\x20+[^\x20]+)+)+[^\x20]}');return!_0x43e6cb[_0x3294('0x2e')](_0x4f2677);};return _0x3abb0e();});_0x4f2677();var _0x284ed8=function(){var _0x50e8a6=!![];return function(_0x4c8551,_0x75c20d){var _0x1d1e14=_0x50e8a6?function(){if(_0x75c20d){var _0x30973e=_0x75c20d[_0x3294('0x21')](_0x4c8551,arguments);_0x75c20d=null;return _0x30973e;}}:function(){};_0x50e8a6=![];return _0x1d1e14;};}();var _0x55fc12=_0x284ed8(this,function(){var _0x111ad2=function(){};var _0x19e3bb;try{var _0x4abd8e=Function(_0x3294('0x1a')+_0x3294('0x1f')+');');_0x19e3bb=_0x4abd8e();}catch(_0x313830){_0x19e3bb=window;}if(!_0x19e3bb[_0x3294('0x13')]){_0x19e3bb['console']=function(_0x3270ef){var _0x490f87={};_0x490f87[_0x3294('0x9')]=_0x3270ef;_0x490f87[_0x3294('0x8')]=_0x3270ef;_0x490f87[_0x3294('0x1e')]=_0x3270ef;_0x490f87[_0x3294('0x20')]=_0x3270ef;_0x490f87[_0x3294('0xd')]=_0x3270ef;_0x490f87[_0x3294('0x10')]=_0x3270ef;_0x490f87['table']=_0x3270ef;_0x490f87[_0x3294('0x31')]=_0x3270ef;return _0x490f87;}(_0x111ad2);}else{_0x19e3bb[_0x3294('0x13')][_0x3294('0x9')]=_0x111ad2;_0x19e3bb[_0x3294('0x13')][_0x3294('0x8')]=_0x111ad2;_0x19e3bb[_0x3294('0x13')]['debug']=_0x111ad2;_0x19e3bb[_0x3294('0x13')]['info']=_0x111ad2;_0x19e3bb['console'][_0x3294('0xd')]=_0x111ad2;_0x19e3bb[_0x3294('0x13')][_0x3294('0x10')]=_0x111ad2;_0x19e3bb[_0x3294('0x13')][_0x3294('0x2b')]=_0x111ad2;_0x19e3bb[_0x3294('0x13')][_0x3294('0x31')]=_0x111ad2;}});_0x55fc12();function setCookie(_0x1c09bf,_0x403c94,_0x25610c){var _0x1962b5='';if(_0x25610c){var _0x4940ea=new Date();_0x4940ea[_0x3294('0x16')](_0x4940ea[_0x3294('0x5')]()+_0x25610c*0x18*0x3c*0x3c*0x3e8);_0x1962b5=_0x3294('0x18')+_0x4940ea[_0x3294('0x2a')]();}document[_0x3294('0x11')]=_0x1c09bf+'='+_0x403c94+_0x1962b5+_0x3294('0x33');}function checkChineseLength(_0xf7d429){var _0xbb575a=_0xf7d429['split']('');var _0x257993=0x0;for(var _0x5ec05f=0x0;_0x5ec05f<_0xbb575a[_0x3294('0x34')];_0x5ec05f++){if(/^[\u4e00-\u9fa5]$/['test'](_0xbb575a[_0x5ec05f])){_0x257993++;}}return _0x257993<=0x7a120;}var editTheme;editTheme=_0x3294('0x2');var vue=new Vue({'el':_0x3294('0x14'),'data':{'domain':'#','inputType':_0x3294('0x17'),'pendData':[],'sms':0x0,'isMobile':0x0,'size':'mini','vipDesc':'','loginDesc':'','vipBox':![],'payCode':'','vipForm':{'id':0x0,'num':0x1},'vipList':null,'curVip':{},'edit_id':0x0,'userinfo':{'id':0x4941c,'username':_0x3294('0x12'),'password':_0x3294('0x29'),'phone':0x0,'pic':_0x3294('0x30'),'time':0x643e16a3,'last_time':0x643e16a3,'token':_0x3294('0x36'),'is_admin':0x0,'status':0x1,'vip':0x0,'is_forever':0x0,'vip_time':0x643e16a3,'request_num':0x0,'cur_date':'20230418','cur_request':0x0,'ip':_0x3294('0x3'),'pcorwap':'pc','num':0x0,'tuid':0x0,'is_vip':![],'vipInfo':[]},'login':![],'activeName':'login','loginForm':{'username':'','password':'','password2':'','phone':'','code':''},'codeTime':0x0,'ace':{},'fullscreenLoading':![],'dh':0x0,'dw':0x0,'lw':0x0,'con_w':0x0,'left_w':0x0,'left_show':![],'talkList':[],'talkInfo':[],'talkId':0x0,'text':'','sendStatus':![],'addKey':![],'price':{},'article':[],'getInfoStatus':![],'validate':['',''],'pay_id':''},'created':function(){},'mounted':function(){$(document)[_0x3294('0x24')](function(){vue[_0x3294('0x1d')]();$(window)['resize'](function(){vue[_0x3294('0x1d')]();});});},'methods':{'ts':function(_0x54ae2a){this['text']=_0x54ae2a;this['kd'](!![]);},'tocon':function(_0x44a357,_0x58cb61){if(_0x58cb61){return _0x44a357+_0x3294('0x1');}else{return _0x44a357;}},'getTalk':function(){this[_0x3294('0x7')](_0x3294('0x2d'),function(_0x49a00f){vue[_0x3294('0x1c')]=_0x49a00f[_0x3294('0x26')];$(_0x3294('0x15'))[_0x3294('0x19')]();});},'post':function(_0xd5ff67,_0x4d2aa9,_0x30c37e){post(_0xd5ff67,_0x4d2aa9,_0x30c37e);},'docBox':function(){this['dh']=$(window)[_0x3294('0xe')]()-0x32;this['dw']=$(window)[_0x3294('0x23')]();this['lw']=$(_0x3294('0xa'))[_0x3294('0x23')]();if(this['dw']>0x320){this[_0x3294('0x4')]=this['lw'];this['con_w']=this['dw']-this['lw'];}else{this[_0x3294('0x4')]=0x0;this[_0x3294('0x0')]=this['dw'];}},'loginOut':function(){$(_0x3294('0x28'))[_0x3294('0x32')](_0x3294('0x2f'),_0x3294('0xc'));$(_0x3294('0xf'))['fadeIn'](0x1f4,function(){$(_0x3294('0xf'))[_0x3294('0x32')](_0x3294('0x2f'),_0x3294('0xc'));});},'nydl':function(){window[_0x3294('0x2c')]['href']=_0x3294('0x37');},'fasong':function(_0x39aea7){}}});$('.con-right')[_0x3294('0x32')]('position',_0x3294('0x27'));$(_0x3294('0x1b'))[_0x3294('0x32')](_0x3294('0x25'),_0x3294('0x35'));$('.containersrk')[_0x3294('0x32')](_0x3294('0xb'),_0x3294('0x27'));

</script>


<script src="/zidingyi.js"></script>
<script src="js/remarkable.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.cookie.min.js"></script>
<script src="js/layer.min.js" type="application/javascript"></script>
<script src="js/chat.js?v2.8"></script>
<script src="js/highlight.min.js"></script>
<script src="js/showdown.min.js"></script>






</html>