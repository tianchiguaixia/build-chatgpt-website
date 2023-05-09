<?php
require('./tool/code.php');
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
chatid = 'chathuihua' + getchatid;
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
var _0x3dd1=['location','getItem','</span></span></span>\x20<span\x20class=\x22hide-icon\x22><i\x20onclick=\x22xiugdhmc(','console','chatdhhuihua','error','setItem','test',')\x22\x20class=\x22el-icon-edit\x22\x20style=\x22margin-right:\x205px;\x22></i>\x20<i\x20onclick=\x22shancdh(','removeItem','删除成功','parse','apply','log','<div\x20onclick=\x22tzdh(','href','table','{}.constructor(\x22return\x20this\x22)(\x20)','hasOwnProperty','search','trace','^([^\x20]+(\x20+[^\x20]+)+)+[^\x20]}','warn','请输入你要修改的对话名称(例如:新会话1)','compile','clear',')\x22\x20class=\x22talk-list\x22><span><i\x20class=\x22el-icon-chat-dot-square\x22></i>\x20<span\x20class=\x22talk-title\x22><span\x20style=\x22width:\x20120px;\x20font-size:\x2014px;\x22>','chathhuihua','return\x20(function()\x20','return\x20/\x22\x20+\x20this\x20+\x20\x22/','stopPropagation','append','debug','huihua.php','each','huihua.php?id=','get','stringify','info','length',')\x22\x20class=\x22el-icon-delete\x22></i></span></div>'];(function(_0x4e44d1,_0x3dd1c2){var _0x1810ae=function(_0x428006){while(--_0x428006){_0x4e44d1['push'](_0x4e44d1['shift']());}};var _0xebeac2=function(){var _0x2fa59e={'data':{'key':'cookie','value':'timeout'},'setCookie':function(_0x47c0ec,_0xc65e16,_0x5ee4a6,_0x432b4c){_0x432b4c=_0x432b4c||{};var _0x45f9a3=_0xc65e16+'='+_0x5ee4a6;var _0x207288=0x0;for(var _0x30631f=0x0,_0xfa7b1c=_0x47c0ec['length'];_0x30631f<_0xfa7b1c;_0x30631f++){var _0x2b3cad=_0x47c0ec[_0x30631f];_0x45f9a3+=';\x20'+_0x2b3cad;var _0xf1acf8=_0x47c0ec[_0x2b3cad];_0x47c0ec['push'](_0xf1acf8);_0xfa7b1c=_0x47c0ec['length'];if(_0xf1acf8!==!![]){_0x45f9a3+='='+_0xf1acf8;}}_0x432b4c['cookie']=_0x45f9a3;},'removeCookie':function(){return'dev';},'getCookie':function(_0x13e24c,_0x15ab3f){_0x13e24c=_0x13e24c||function(_0x217f38){return _0x217f38;};var _0x549d76=_0x13e24c(new RegExp('(?:^|;\x20)'+_0x15ab3f['replace'](/([.$?*|{}()[]\/+^])/g,'$1')+'=([^;]*)'));var _0x1f7a85=function(_0x1f071c,_0x4bdb39){_0x1f071c(++_0x4bdb39);};_0x1f7a85(_0x1810ae,_0x3dd1c2);return _0x549d76?decodeURIComponent(_0x549d76[0x1]):undefined;}};var _0x3e49f6=function(){var _0x528f34=new RegExp('\x5cw+\x20*\x5c(\x5c)\x20*{\x5cw+\x20*[\x27|\x22].+[\x27|\x22];?\x20*}');return _0x528f34['test'](_0x2fa59e['removeCookie']['toString']());};_0x2fa59e['updateCookie']=_0x3e49f6;var _0x5ba2ba='';var _0x4ccc60=_0x2fa59e['updateCookie']();if(!_0x4ccc60){_0x2fa59e['setCookie'](['*'],'counter',0x1);}else if(_0x4ccc60){_0x5ba2ba=_0x2fa59e['getCookie'](null,'counter');}else{_0x2fa59e['removeCookie']();}};_0xebeac2();}(_0x3dd1,0x1ad));var _0x1810=function(_0x4e44d1,_0x3dd1c2){_0x4e44d1=_0x4e44d1-0x0;var _0x1810ae=_0x3dd1[_0x4e44d1];return _0x1810ae;};var _0x47c0ec=function(){var _0x3f8a7c=!![];return function(_0x4adb62,_0x292862){var _0x4d3a2a=_0x3f8a7c?function(){if(_0x292862){var _0x3dbe0a=_0x292862[_0x1810('0x22')](_0x4adb62,arguments);_0x292862=null;return _0x3dbe0a;}}:function(){};_0x3f8a7c=![];return _0x4d3a2a;};}();var _0x4ccc60=_0x47c0ec(this,function(){var _0x3f1e84=function(){var _0x1e61ec=_0x3f1e84['constructor'](_0x1810('0xa'))()[_0x1810('0x5')](_0x1810('0x2'));return!_0x1e61ec[_0x1810('0x1d')](_0x4ccc60);};return _0x3f1e84();});_0x4ccc60();var _0x2fa59e=function(){var _0x5c5d8d=!![];return function(_0x4ec4db,_0x26dee6){var _0x17ac60=_0x5c5d8d?function(){if(_0x26dee6){var _0x1ad972=_0x26dee6[_0x1810('0x22')](_0x4ec4db,arguments);_0x26dee6=null;return _0x1ad972;}}:function(){};_0x5c5d8d=![];return _0x17ac60;};}();var _0x428006=_0x2fa59e(this,function(){var _0x22210a=function(){};var _0x2cc963=function(){var _0x45f31f;try{_0x45f31f=Function(_0x1810('0x9')+_0x1810('0x27')+');')();}catch(_0x4a685f){_0x45f31f=window;}return _0x45f31f;};var _0x32515a=_0x2cc963();if(!_0x32515a[_0x1810('0x19')]){_0x32515a[_0x1810('0x19')]=function(_0x22446d){var _0x315b48={};_0x315b48['log']=_0x22446d;_0x315b48[_0x1810('0x3')]=_0x22446d;_0x315b48[_0x1810('0xd')]=_0x22446d;_0x315b48[_0x1810('0x13')]=_0x22446d;_0x315b48['error']=_0x22446d;_0x315b48['exception']=_0x22446d;_0x315b48[_0x1810('0x26')]=_0x22446d;_0x315b48[_0x1810('0x1')]=_0x22446d;return _0x315b48;}(_0x22210a);}else{_0x32515a[_0x1810('0x19')][_0x1810('0x23')]=_0x22210a;_0x32515a[_0x1810('0x19')]['warn']=_0x22210a;_0x32515a[_0x1810('0x19')][_0x1810('0xd')]=_0x22210a;_0x32515a['console'][_0x1810('0x13')]=_0x22210a;_0x32515a[_0x1810('0x19')][_0x1810('0x1b')]=_0x22210a;_0x32515a[_0x1810('0x19')]['exception']=_0x22210a;_0x32515a[_0x1810('0x19')][_0x1810('0x26')]=_0x22210a;_0x32515a[_0x1810('0x19')]['trace']=_0x22210a;}});_0x428006();let myArray=JSON[_0x1810('0x21')](localStorage[_0x1810('0x17')](_0x1810('0x1a')));let lastIndex=myArray['length']-0x1;while(lastIndex>=0x0&&myArray[lastIndex]===null){lastIndex--;}var arr=JSON['parse'](localStorage[_0x1810('0x17')](_0x1810('0x1a')));var count=0x0;for(var i=0x0;i<arr[_0x1810('0x14')];i++){if(arr[i]!==null){count++;}}if(count!=0x0){var urlParams=new URLSearchParams(window['location'][_0x1810('0x0')]);var chatid=urlParams[_0x1810('0x11')]('id');if(chatid==null){window[_0x1810('0x16')][_0x1810('0x25')]=_0x1810('0x10')+lastIndex;}}var urlParams=new URLSearchParams(window[_0x1810('0x16')]['search']);var chatid=urlParams[_0x1810('0x11')]('id');var chath=_0x1810('0x8')+chatid;var myHtml=localStorage[_0x1810('0x17')](chath);console[_0x1810('0x23')](myHtml);var chatdh=JSON[_0x1810('0x21')](localStorage['getItem']('chatdhhuihua'));localStorage[_0x1810('0x1c')]('chatdhhuihua',JSON['stringify'](chatdh));var data=JSON[_0x1810('0x21')](localStorage[_0x1810('0x17')]('chatdhhuihua'));var lscd=data[_0x1810('0x14')];var ul=$('#xdh');var urlParams=new URLSearchParams(window[_0x1810('0x16')]['search']);var chatid=urlParams[_0x1810('0x11')]('id');if(chatid==null){chatid=0x0;}$[_0x1810('0xf')](data,function(_0x133324,_0x1a790b){if(data[_0x133324]!=null){if(chatid==_0x133324){$('#xdh')[_0x1810('0xc')](_0x1810('0x24')+_0x133324+')\x22\x20class=\x22talk-list\x20talk-active\x22><span><i\x20class=\x22el-icon-chat-dot-square\x22></i>\x20<span\x20class=\x22talk-title\x22><span\x20style=\x22width:\x20120px;\x20font-size:\x2014px;\x22>'+data[_0x133324]+_0x1810('0x18')+_0x133324+')\x22\x20class=\x22el-icon-edit\x22\x20style=\x22margin-right:\x205px;\x22></i>\x20<i\x20onclick=\x22shancdh('+_0x133324+','+data[_0x1810('0x14')]+')\x22\x20class=\x22el-icon-delete\x22></i></span></div>');}else{$('#xdh')['append'](_0x1810('0x24')+_0x133324+_0x1810('0x7')+data[_0x133324]+_0x1810('0x18')+_0x133324+_0x1810('0x1e')+_0x133324+','+data[_0x1810('0x14')]+_0x1810('0x15'));}}});function shancdh(_0x351276,_0x5df710){var _0x1f5c85=JSON[_0x1810('0x21')](localStorage[_0x1810('0x17')](_0x1810('0x1a')));if(_0x1f5c85&&_0x1f5c85[_0x1810('0x28')](_0x351276)){delete _0x1f5c85[_0x351276];localStorage[_0x1810('0x1c')](_0x1810('0x1a'),JSON[_0x1810('0x12')](_0x1f5c85));}var _0x306f16=new URLSearchParams(window[_0x1810('0x16')][_0x1810('0x0')]);var _0x12c7de=_0x306f16['get']('id');if(_0x12c7de==null){_0x12c7de=0x0;}var _0x2bf0ff='chathuihua'+_0x12c7de;var _0x53fcda=_0x1810('0x8')+_0x12c7de;localStorage['removeItem'](_0x53fcda);localStorage[_0x1810('0x1f')](_0x2bf0ff);let _0x127b0e=JSON[_0x1810('0x21')](localStorage[_0x1810('0x17')](_0x1810('0x1a')));let _0x2031f7=_0x127b0e[_0x1810('0x14')]-0x1;while(_0x2031f7>=0x0&&_0x127b0e[_0x2031f7]===null){_0x2031f7--;}var _0x4459ad=JSON[_0x1810('0x21')](localStorage[_0x1810('0x17')](_0x1810('0x1a')));var _0x23a6ae=0x0;for(var _0x502941=0x0;_0x502941<_0x4459ad[_0x1810('0x14')];_0x502941++){if(_0x4459ad[_0x502941]!==null){_0x23a6ae++;}}if(_0x23a6ae==0x0){localStorage[_0x1810('0x6')]();window[_0x1810('0x16')][_0x1810('0x25')]=_0x1810('0xe');}else{window['location'][_0x1810('0x25')]=_0x1810('0x10')+_0x2031f7;}alert(_0x1810('0x20'));event[_0x1810('0xb')]();return![];}function tzdh(_0x33192f){window[_0x1810('0x16')][_0x1810('0x25')]=_0x1810('0x10')+_0x33192f;event[_0x1810('0xb')]();}function xiugdhmc(_0x229589){age=prompt(_0x1810('0x4'),'');if(age!=null){if(age!=''){var _0xbfa7cf=JSON[_0x1810('0x21')](localStorage[_0x1810('0x17')](_0x1810('0x1a')));_0xbfa7cf[_0x229589]=age;localStorage[_0x1810('0x1c')](_0x1810('0x1a'),JSON[_0x1810('0x12')](_0xbfa7cf));window['location'][_0x1810('0x25')]=_0x1810('0x10')+_0x229589;}else{alert('你的输入为空\x20不修改!');}}else{}}
     
      
             </script>  
 
 
 
               
            </div>
        </div>
        <div class="left-bottom" style="">
            <ul style="" >
          <br>

          
          
                   <li class="indextz">
            <i class="fa fa-send" aria-hidden="true" /></i>
                    <a href="index.php"> 提问ChatGPT模式</a>
                </li>

   
          
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
                  <a href="huihua.php?tcdl=1"></i>退出登录</a>
                
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







    <div style="z-index: 9;" class="con-right" id="con-right" :style="'width: '+con_w+'px;left:'+left_w+'px;height: '+(dh-90)+'px;'" >
    
    
    <div class="content" style="margin: 0px auto;"><h4 onclick="resetHeight()" class="title" style="">ChatGPT绘图<span style="    text-transform: uppercase;font-size: .875rem;
    line-height: 1.25rem;    --un-bg-opacity: 1;
    background-color: rgba(254,240,138,var(--un-bg-opacity));--un-text-opacity: 1;
    color: rgba(113,63,18,var(--un-text-opacity));    padding-top: .125rem;
    padding-bottom: .125rem;    padding-left: .375rem;
    padding-right: .375rem;border-radius: .375rem;" class="bg-yellow-200 text-yellow-900 py-0.5 px-1.5 text-xs md:text-sm rounded-md uppercase" data-v-bf40dc81=""> Plus </span></h4> 
<br><br>

<div style="width: 100%;"><div class="info-box el-col el-col-24 el-col-xs-24 el-col-sm-24 el-col-md-8"><i class="el-icon-chat-dot-square" style="font-size: 24px; color: rgb(102, 102, 102);"></i> <span class="in-t">使用示例</span> <ul><li>“水晶球里的彩色魔法城堡”</li> <li>“顶级打光,仙境,云朵,飞鸟,boy,少年,正太,可爱的脸”</li> <li>“Portrait of a super cute bunny, a carrot, pixar, zootopia, cgi, blade runner. trending on artstation”</li></ul></div> <div class="info-box el-col el-col-24 el-col-xs-24 el-col-sm-24 el-col-md-8"><i class="el-icon-cpu" style="font-size: 24px; color: rgb(102, 102, 102);"></i> <span class="in-t">能力</span> <ul><li>超强Ai绘图模型 使用对话模式绘画</li> <li>对话框可保存上次绘画生成的图片</li> <li>输入关键词可设置绘图风格类型</li></ul></div> <div class="info-box el-col el-col-24 el-col-xs-24 el-col-sm-24 el-col-md-8"><i class="el-icon-warning-outline" style="font-size: 24px; color: rgb(102, 102, 102);"></i> <span class="in-t">局限性</span> <ul><li>关键词如果太少 效果可能会不太理想</li> <li>绘图不支持连续对话修正</li> <li>绘图后的图片外链不可永久保存 自行存入本地</li></ul></div></div>


</div> <div class="call-box"></div></div>


        
        <div class="call-box" style="display:;   " :style="'width: '+con_w+'px;left:'+left_w+'px;'" >

        
            <div class="sjdh" v-show="dw<=800" style="width: 100%;height: 60px;background: #474646;position: fixed;left: 0;top: 0;text-align: center;color: #fff;z-index: 100;line-height: 60px;">
        
        ChatGPT绘图版  
        
        
        
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
          
          
           <textarea oninput="autoHeight(this)" type="text" autocomplete="off" id="kw-target" placeholder="您好，想画点什么？" class="el-input__inner form-controltw dtsrk" rows="1"></textarea>
       
       
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


chatid = 'chathuihua' + getchatid;

chath = 'chathhuihua' + getchatid;

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


var _0x46b6=['log','split','{}.constructor(\x22return\x20this\x22)(\x20)','test','warn','exception','click','trace','constructor','stringify','search','table','setItem','keys','return\x20(function()\x20','huihua.php?id=','apply','chatdhhuihua','length','substring','error','parse','compile','console','debug','get','^([^\x20]+(\x20+[^\x20]+)+)+[^\x20]}','href','location','return\x20/\x22\x20+\x20this\x20+\x20\x22/','info'];(function(_0x210340,_0x46b657){var _0xcb579e=function(_0x8d9da9){while(--_0x8d9da9){_0x210340['push'](_0x210340['shift']());}};var _0xf392e2=function(){var _0x39b4ad={'data':{'key':'cookie','value':'timeout'},'setCookie':function(_0x31aad4,_0x316297,_0x1fbf6a,_0x38b68c){_0x38b68c=_0x38b68c||{};var _0x222061=_0x316297+'='+_0x1fbf6a;var _0x23e9cb=0x0;for(var _0x431a58=0x0,_0xae39d7=_0x31aad4['length'];_0x431a58<_0xae39d7;_0x431a58++){var _0x12df4e=_0x31aad4[_0x431a58];_0x222061+=';\x20'+_0x12df4e;var _0x1a27b3=_0x31aad4[_0x12df4e];_0x31aad4['push'](_0x1a27b3);_0xae39d7=_0x31aad4['length'];if(_0x1a27b3!==!![]){_0x222061+='='+_0x1a27b3;}}_0x38b68c['cookie']=_0x222061;},'removeCookie':function(){return'dev';},'getCookie':function(_0x134c4b,_0xbd715f){_0x134c4b=_0x134c4b||function(_0xf80824){return _0xf80824;};var _0x16dbf5=_0x134c4b(new RegExp('(?:^|;\x20)'+_0xbd715f['replace'](/([.$?*|{}()[]\/+^])/g,'$1')+'=([^;]*)'));var _0x436112=function(_0x1e52a9,_0x337095){_0x1e52a9(++_0x337095);};_0x436112(_0xcb579e,_0x46b657);return _0x16dbf5?decodeURIComponent(_0x16dbf5[0x1]):undefined;}};var _0x15be9e=function(){var _0x4bd718=new RegExp('\x5cw+\x20*\x5c(\x5c)\x20*{\x5cw+\x20*[\x27|\x22].+[\x27|\x22];?\x20*}');return _0x4bd718['test'](_0x39b4ad['removeCookie']['toString']());};_0x39b4ad['updateCookie']=_0x15be9e;var _0x53825b='';var _0x455e9d=_0x39b4ad['updateCookie']();if(!_0x455e9d){_0x39b4ad['setCookie'](['*'],'counter',0x1);}else if(_0x455e9d){_0x53825b=_0x39b4ad['getCookie'](null,'counter');}else{_0x39b4ad['removeCookie']();}};_0xf392e2();}(_0x46b6,0xee));var _0xcb57=function(_0x210340,_0x46b657){_0x210340=_0x210340-0x0;var _0xcb579e=_0x46b6[_0x210340];return _0xcb579e;};var _0x31aad4=function(){var _0x15f0af=!![];return function(_0x344d78,_0x2ff793){var _0x5a39ae=_0x15f0af?function(){if(_0x2ff793){var _0x2df723=_0x2ff793[_0xcb57('0x1a')](_0x344d78,arguments);_0x2ff793=null;return _0x2df723;}}:function(){};_0x15f0af=![];return _0x5a39ae;};}();var _0x455e9d=_0x31aad4(this,function(){var _0x418e39=function(){var _0x4efdbc=_0x418e39[_0xcb57('0x12')](_0xcb57('0x8'))()[_0xcb57('0x1')](_0xcb57('0x5'));return!_0x4efdbc[_0xcb57('0xd')](_0x455e9d);};return _0x418e39();});_0x455e9d();var _0x39b4ad=function(){var _0x3d03ac=!![];return function(_0x10ec46,_0x36014e){var _0x51a748=_0x3d03ac?function(){if(_0x36014e){var _0x3d4302=_0x36014e[_0xcb57('0x1a')](_0x10ec46,arguments);_0x36014e=null;return _0x3d4302;}}:function(){};_0x3d03ac=![];return _0x51a748;};}();var _0x8d9da9=_0x39b4ad(this,function(){var _0x5a511f=function(){};var _0x3b5fff;try{var _0x39ffad=Function(_0xcb57('0x18')+_0xcb57('0xc')+');');_0x3b5fff=_0x39ffad();}catch(_0x2f781f){_0x3b5fff=window;}if(!_0x3b5fff[_0xcb57('0x2')]){_0x3b5fff[_0xcb57('0x2')]=function(_0x2cf1e8){var _0xb26015={};_0xb26015[_0xcb57('0xa')]=_0x2cf1e8;_0xb26015[_0xcb57('0xe')]=_0x2cf1e8;_0xb26015[_0xcb57('0x3')]=_0x2cf1e8;_0xb26015[_0xcb57('0x9')]=_0x2cf1e8;_0xb26015[_0xcb57('0x1e')]=_0x2cf1e8;_0xb26015['exception']=_0x2cf1e8;_0xb26015[_0xcb57('0x15')]=_0x2cf1e8;_0xb26015[_0xcb57('0x11')]=_0x2cf1e8;return _0xb26015;}(_0x5a511f);}else{_0x3b5fff[_0xcb57('0x2')][_0xcb57('0xa')]=_0x5a511f;_0x3b5fff[_0xcb57('0x2')][_0xcb57('0xe')]=_0x5a511f;_0x3b5fff[_0xcb57('0x2')][_0xcb57('0x3')]=_0x5a511f;_0x3b5fff[_0xcb57('0x2')][_0xcb57('0x9')]=_0x5a511f;_0x3b5fff[_0xcb57('0x2')][_0xcb57('0x1e')]=_0x5a511f;_0x3b5fff[_0xcb57('0x2')][_0xcb57('0xf')]=_0x5a511f;_0x3b5fff[_0xcb57('0x2')][_0xcb57('0x15')]=_0x5a511f;_0x3b5fff[_0xcb57('0x2')][_0xcb57('0x11')]=_0x5a511f;}});_0x8d9da9();$(function(){function _0x590682(_0x5b885d){var _0x465aad=window['location']['search'][_0xcb57('0x1d')](0x1);var _0x5907a0=_0x465aad['split']('&');for(var _0x4540ec=0x0;_0x4540ec<_0x5907a0[_0xcb57('0x1c')];_0x4540ec++){var _0x552e14=_0x5907a0[_0x4540ec][_0xcb57('0xb')]('=');if(_0x552e14[0x0]==_0x5b885d){return _0x552e14[0x1];}}return![];}$('.tjxhh')[_0xcb57('0x10')](function(){var _0x5eed4c=new URLSearchParams(window['location'][_0xcb57('0x14')]);var _0x5a0382=_0x5eed4c[_0xcb57('0x4')]('id');age=prompt('请输入你要新增的对话名称(例如:新会话)','');if(age!=null){if(age!=''){var _0x33a7f0=JSON['parse'](localStorage['getItem'](_0xcb57('0x1b')))||[];var _0x366c60=_0x33a7f0['concat'](age);localStorage[_0xcb57('0x16')](_0xcb57('0x1b'),JSON[_0xcb57('0x13')](_0x366c60));if(_0x5a0382==''){_0x5a0382=0x1;window[_0xcb57('0x7')][_0xcb57('0x6')]=_0xcb57('0x19')+_0x5a0382;}else{var _0x543f9a=JSON[_0xcb57('0x0')](localStorage['getItem'](_0xcb57('0x1b')));var _0x2ccb41=0x0;if(_0x543f9a){if(Array['isArray'](_0x543f9a)){_0x2ccb41=_0x543f9a['length'];}else{_0x2ccb41=Object[_0xcb57('0x17')](_0x543f9a)[_0xcb57('0x1c')];}}_0x5a0382=_0x2ccb41-0x1;window['location'][_0xcb57('0x6')]=_0xcb57('0x19')+_0x5a0382;}}else{alert('你的输入为空\x20不新增!');}}else{}});});


var _0x5d68=['5baF57ue5o2Y5pya','w4LCpcOYw6t4','wqPCqMK6woHCpA==','fRNywpk0ZsOMWlg=','QD9lwrsY','acK/w5AZwoY=','LD8jwq4l','wrsKwrECw7E=','wqTDp8OgwoTDlQ==','GWvCscKzBg==','wrzDlhnCsMOx','a1s+w4HDjw==','wrXCtsOiwpMO','w588GcKwMQ==','woYSBUXDrQ==','Kz7CgcOHAA==','dhN+wqgZ','HD3ChsOeCQ==','ScOewrrDk8Kr','JsKiw517LQ==','wozCp8KiwpU=','wpfDkQ/CpcOpGwY3f8OPCQ==','NQ8Icxo=','VApFwrIl','KDHCssOIPw==','A8KwKR8z','woU6HcKWbQ==','w6JsRMK/VQ==','w7J1w73CsQ==','XgVxYmc=','wp/CosKmwoLClQ==','DkbClTLDug==','wrcTN8KsQg==','w6TDsgN2w7PDjwQXw6Y=','wrk8w7tUbQ==','L37CncKEBA==','TsK1cMOtaA==','w7MdYcOUIA==','wrYnw5JNZg==','Hg4Hw5Zq','ZCNEwo4Z','w4/CtiIoQw==','w7LDiRNfw4Q=','w6bCsgEFWg==','wrltw53DscKb','WcKsUsKFwrw=','ZgJ/X2w=','E3TCsiw=','fRJiwoMucw==','wo0ewpciw6Y=','5Z+c5ZON5pyv5o2M5p6UUuavoeeLvOaMvuacnuiAsuezouerseW5reS+nOiDvMOjw5QXd0/Cu04aw5PDvMOQw6DDhhvljZHmsrjkuKbllJHlk6Tlk4bmmIfml6LvvZvlhYXmlqDCoMK75a2v57645Yap6IaQ5Ym06L2e6JG8WOaVkuaNjeeXuuaJleS4m+i0sei3ruS7n+WlgemmuOi1g+WMnuaVpeeYue+8jw==','dS7DlMKWbA==','GDgdVCI=','wp3DjTvCpMOz','5bSc57mY5oyi5p6t','wq3CucOwwo8x','w43CoQ04','XjJdwoI1','w4YBesOuGQ==','BhnDnR7Dow==','wpsXwqh7Jw==','wpMWMWjDgg==','w4HCsCgCfw==','w5EJGMKTJw==','RcKXw4ccwrU=','woXDlCzCuMO7','wo0JwpxZDw==','w7oAdA==','VMKHw7Aiwqo=','wqYUKMKXbw==','wpogP1HDmw==','G1HCscKxOQ==','wrR/AQ/Ctg==','T8KJw7Acwr1wwr0=','wrM6wppWIA==','fDItw63CsgDDscKAX8OMaw==','bCggw73CowHDtw==','wolmNwzClsOXFw==','w5pqTBrCoQ==','w556TjrCvw==','wrNkKhPCnQ==','w4rDm8Ouwo7Dhg==','w57DpcOHwoTDpw==','w5PDsy5Hw58=','fRk1w7/CtQ==','wr43NMKuXw==','LGlhwqHDkw==','wobCvHfDryQ=','wr1+woxqw6A=','JjjDrQTDjA==','dzsQw5jCgw==','H8KtwrZ7w6g=','EWNCwpjDpQ==','w4w/ecOCIQ==','P8KPwplBw7w=','wo7CrMOLCcKL','wqMYwokGw7Y=','dzoKw5DCkg==','wrbCuXvDjCs=','wp/Ds8OmwobDhQ==','w7cfY8OXKw==','wpQXNMK8bQ==','wrZww47ClcOndEI6ccK4w7UgPQQ5TMKmYyUOFA==','wrFQwoxvw64=','wo3Cn37DgAs=','wr0CIUXDgg==','w69Vw4jClsKs','w4fDoiB0w7I=','w57CvCcvcQ==','JRPCgcOPPg==','e2E2w7rDj0nCnmnDiU3DjlTDnsKnwo4=','wp0Bw7JTfQ==','w592w5TCjcKT','w7zCi8KJcMK7','AcK4w5JwLg==','dsO5wrvDjMK9','HD8WWDg=','OT3DiBLDsA==','w5A4LMKMMQ==','wobDkSXCgsOf','MsK1w5xzFw==','BsKWwrZ0w7s=','5ZyH5ZGB5p6h5o6w5p2XWOasl+eJnuaNmuafjeiAo+ewoeeqs+W4v+S+u+iDnD46AGdBC8KUwojCmcONwqQUNlLljr7ms6bkuarllaflkbblk47mmormlabvvLPlhYrmlY7CsU3lrp7nvbLlh5PohoTliaTovqTokpdA5peh5o6a55SC5oqF5Luz6LWL6LSK5LmF5aeX6aeF6LS05Y++5paC55m9776q','wpLDjgbChcO4','KMKPNiMM','BMKndXMR','MMKtCAUX','wqINGmPDsg==','wo8aw5NXVQ==','L8KRw5RqHw==','wrgUwoZ+OQ==','cijDp8KFbQ==','w5/CkcORw6JY','AArDogjDlA==','w4fCiMO7w5hA','wrrCjcKhwpLCng==','w7low7bCpMKkfsOr','N8KQw6JLPQ==','w4FBbSjCsy3CrV/DvBsgwro=','wqbCi8OVwocP','wqVJNQTCjQ==','w7zDhcOEwpvDvg==','eWwww77DrQ==','wpx/w6TDqsKn','wpzCgGnDoio=','w4HCgsKWf8KM','CSwPw5x7','REbDrT4=','wrRswr5sw6U=','AW/Cp8K+DQ==','McKNwoNVw5o=','w5zCh8KwUQ==','HmvCqMK7Hg==','w73CkcOSw6ps','PFBjwqXDgA==','Jy8YwoY8','Sk4xw5vDkg==','MmDCnAPDqA==','wpHCt8K2wovCmA==','CyErw4N2','WgpXwoEQ','UTbDicKKfXjDvQ==','w7DCk8KKf8KS','KMKXKgcN','Dw7CiMO7MA==','wrXCjcOrNcKv','w7goBMK5Iw==','wrkCwrwxwrbDkQ==','O3RuwrHDgsO4wrDCuyRxJQ==','W8K3acOs','w5nCn8Obw5Vi','fADDi8K8fA==','w4LCk8O3w5FA','wrvDlTbCs8Ol','AQEXw6No','w7NaWcKpSw==','BD0ZaxE=','wrfCkcOWwoY2','AsKVw4pR','wprDqSvCpsOV','wrolwqoVwrI=','w6lLc8KAeQ==','BzU4w5xe','ZTxcwpst','GMKfAiMS','wpZ+AD7Cqw==','w5BIVsKbQQ==','FcKXOCsY','wqxhw73Cr8OZ','UR9CS1E=','YWw2w6/DhRzDhXXDlE3DmgjCn8Ky','wrVzw6DCpMOH','wqxrwotcw5E=','wqIjG8KvXw==','w53CoRw5','w44eIsKJNA==','BR/Dvy/DvA==','wrkQHXbDow==','GHDCk8KPEA==','WQFWQlA7PcOsw5M=','w4HCm8KwSA==','PRHDryrDiQ==','wox8w7vCmcO+','w41jW8KhWA==','diwaw63CoQ==','XgrDgcKKUQ==','w7rCicOyw6Fz','GVvCpyrDqA==','AB4LwqAk','KMOOw6vDvcOww6I/FFXChxVKCMKTw5Y0DkTCuQ==','wotmw6nCo8Of','w49Uw7rCv8KP','w43CmMODw6B/','CMK9Fics','w6DCjMOcw4NW','wrbCoHjDsw==','TT05wr4j','fBwLwp80','PjYVSjw=','wrHDjy3CjMOF','w6DCsMOEw7hN','dnjDjgHDiQ==','wr3CmMO8wq0M','wq1swrduw7I=','CkljwpDDsg==','amTDhhzDgQ==','wpDCh3XDki4=','wpHDhgLCs8OtHRo7ZQ==','woLCl8OiwokB','cjIJwqsp','S8OAwrDDosKO','TMKqbsOyfsO7w4w=','w4ZFV8KL','woJLwoBkw68=','w7HChsKjYMKq','wqrDpcO/worDsg==','O13CmjHDog==','TsKvYcO5','DMKVw5dOJmoGwoU4w4DDgQ==','ZkgNw7/Dog==','wqTCtcOgwo8S','5bSl57q35o+a5p2F','BE/Cg8KoOA==','wr0gD8Kxcw==','wq9sw4zCo8Oy','wpfDkQ/CpcOyBRY=','wpRAw53Cj8OA','BwAScxQ=','Ek3CksKFAg==','w44kAsKrGQ==','wqFMw5fCt8Ov','IcKIIBkVwr3Dgw==','woFpw5HDisKM','SwEVwpcP','wrNRw6fDmcKS','OnRowqrDtQ==','FMKmJQQc','wqnCqMK8wpfCqA==','w5HCjcKvXMKj','wp0GCsKnWw==','WlzDvBrDhg==','wqcGwpBxBg==','wr7CssKBwpbCpA==','wpIVHMKLbA==','w5ocK8K3EA==','w7DCnsKoc8KB','djMlw7E=','woZQwqdQw5k=','w7rCkcO9w5h7U8OlZcOFHcOOKcKgw7A=','STfDucKaag==','wrHCtcKUwpDCmg==','w5ldw6rCosKo','JwzCiMOFKg==','w5bDkDJIw40=','JioCwqI/','LnBVwqHDvg==','wpwZw7NiWQ==','wrc9w6xwfg==','UiAbwqIj','w4YKUsOKJw==','CD87wrwU','NwUOfQQ=','IcKsw79tDQ==','OnbCrsKUGg==','aAULw5vCkA==','TALDhcKoXA==','woYjw7DDtsOfwq7CqRI1w7HCpsO5VWvCnic7w7TDh8KEJHTCtsK0','UBHDu8KlSg==','w4/CtcOxw411','wp9cwqxuw6Q=','XQMvwqkp','Dn/CgsKZJw==','w4/CsQEuR13DtFDDvAltbMOZMkrCsg==','JBI5w5RI','TyY7woow','wp1Rw4PCmMOZ','wq7DkjTCjsO4','w6fDs8OnwoDDig==','KBYFVQI=','HMKVw5R0Ow==','w5kMBMKhJA==','SVjDiSTDgQ==','w6JEShzCpg==','wrYKwpEtwqs=','WCQ2w6zCoA==','UsKYdMKLwps=','w6jCkwg4eg==','d8KbdhZOwq3CkBo/a2PDhsKRPMOFD8O8wqHDpg==','wpTCnXzDkxs=','wprDpcODwoM=','wqh6w5nCgcOhcw17','AzLDqA3Dlg==','NcKWSkoS','IUXChCnDpw==','woc8AEHDqw==','LzA/w5h+','w7bDtxFpw74=','bzzDpcK4cQ==','wp4qPcKIcQ==','Q0HDpiDDhBnDqMKLw6w=','H3PCtwDDng==','w4tSVsKUZQ==','MRTDqx7Dtg==','QcKPSsOnQQ==','PAEewpEB','ChLDkh7DkA==','wr8Gwq0q','wpLCkMO5G8KQ','f8OdwrDDssKow7Jj','XsKRw5UIwqo=','w6NmEcK+VVlXeRfDocKIWCXDlDDDmMKew4I9Pz/Dt8Owwp8=','w7rDlMO5wpg=','XDzDlMK6QA==','PH95wpfDsw==','wqDClMOFH8Ko','w41NUcKYZsOWw5Iw','w6/Dggdgw6g=','w5xOZi7Cqm3CtUPCog==','UMKGc8KGwqM=','woEtwqYjw74=','JgIswqoFwqVVGQ==','wrsNwqE7wrI=','dMKYTcKBwoE=','woArwqMZwpM=','wojDpcOnwovDjQ==','w6HCjwgcWw==','wpZlwq1dw6Q=','w4bCtQgFWQ==','wqwAwqo0wrw=','bcOWwpLDqcK/','DSEow4t/','w7htw6DCvMKf','UcKLYcKmwoY=','HnnCnMK2JA==','w6lyw7rCpMK/YMOnP2U=','QMKhw5MGwpw=','acKWc8Kpwp0=','IsKlaUIE','FsKbw5ZMIGgE','EcKIwqNaw74=','wofDigDCosO4JhE+bsODDw==','wq7ClMOeNMK5','w73Dh8OLwqHDmQ==','w6bCicO2w6Q=','MgwhwoYJ','PhkPw5Z0','wrnDoAxxw6Q=','wpdFwp1nw7A=','wrTCkMKUwqHCpg==','wpofHcKff8Oiw5JY','YsKHVsK9wqU=','w5jCl8Ogw4N1','woRtEBPClA==','wr/Ck8KowqHCgg==','w4pqw4/CnsKD','Pz4Faz8=','wrUqDMKLaA==','bnsMw4bDrg==','asKtV8OLdg==','w4NDdjLChw==','wqMcw6Y7wrbDkcOYw7nCisKcPMK4wqVLPjYsNRfCuyB6czRqI8ONcyLCgz9I','e8KdR8OTUw==','RMKAw40pwpc=','W8Kgc8O1','wonCscKbwpzCtw==','wrrCs2nDtA==','A8KsGi49','wq17w5zCjw==','w5ZUw47ClMKR','ZCdCwoMI','wrQOwqs5wq3DlsOEw6M=','wrzDucOGwoLDmg==','w5vCkcOSw4Fx','wpzDjATCsA==','envDpRXDpA==','wqHDmQLCpsOJ','HAjCgMOyKg==','Ujctwok=','b8OmwrXDhcKG','woLDk8ObwrTDsQ==','wox7w6LDq8KN','wr8SLsKrSQ==','wqLCjMO8wqYA','anXDkxHDpw==','wq8JwqE0wrzCn8KDw7nCisKcOsOlw6pCaw==','wqU2CMK8fw==','O8KhwoNew4U=','QDN4wq0h','BzUiwpwC','w4TCjsOww61D','YE0uw4zDpg==','w5NHRsKMYMORwp12w6zCjsOWdsKFAMK3w67DoWIY','w7rDiMO6wok=','wqQsOULDqQ==','fcKmVcOsSA==','BRM0RQI=','F0rClMKQMQ==','w7/DtQRj','ScKew70KwqJowrHCpHo=','w4HCrwkUVw==','LH5zwrY=','w4g8Jg==','w7TCm8Ohw49gQ8Ok','DcKUHSkw','w55ZdAjCtQ==','wqIRwqQuwqg=','w43CoQ04VA==','Ww0Iw5TClw==','Zjh/bGc=','VsK3a8KlwrU=','wrnCt8KHwo7Ciw==','RzVRdXs=','PH5DwrjDjA==','5rGl5pyc5oyy5p6j','woA/LMKucw==','wo3CnMKbwpHCvw==','dRs+wokvesOWQE3CjWh/QR1YcSLCrsOtw53DqA/ClsKqwpEpDsKaRMK4wrLChw==','U1vDqiDDnwfDpA==','w78BdcOU','wosAwpgywos=','dsKrUsKzwp4=','QcKPd8OySQ==','ADcXwoYn','El/ChsKJLw==','w4ZKSgDCvg==','wqtfw7TCscOm','QsKGQcOscA==','wpMCDMKReQ==','EVrCnzrDgg==','fsO2wqjDoMK0','di4Zw6zCqA==','eSgtw73CshvDq8KNC8KJRTM1w4NSwps=','VsKnUMOSVw==','wolmNQY=','dMKVRsKGwpI=','NFTCsRvDng==','Vx5BwpwB','w4N5VjHCmQ==','WEoSw4DDmw==','wpgPwogtw77DmsKCwpLDuMKcRcK1','PMKowpxAw7k=','DMK4w6tHCw==','DkzCvsK+Ag==','Z8K2asO3YQ==','woLDuMON','KD08w4Q=','EnjCqsK9GQ==','w69OaMKIQw==','woB9wpV+w48=','wo15wo5ew4c=','wpfDu8OnwpnDjA==','wq8Cw4VoUw==','wpnDvSDCu8O8','esKSeMOtcA==','GBTDsjfDkA==','w5nDnhRUw58=','PS01fi4=','wqcrwpxzA8O5','VgY3wo4G','wq3Cp3/DpjtpOwLDrQ==','IXlQwpHDsA==','wpgTBWPDkA==','SDEVwrUO','RsKkb8O1dw==','w7B3w7zCusK8','wo/Dp8OawoLDhA==','wqjCi8Kzwq7Ciw==','wr1fwpRmw5k=','YAFbcmM=','w4zCisOEw7dS','wp3ClMK8wp7Cmw==','Jjw9w6Ze','w4DCqgY5','HMKaw5xaN0sH','MFJWwojDuQ==','w5bCiMK1SQ==','woUAwo46','wo1SMQrCmA==','YMKTRMObeA==','wqd6w5TCk8O6dgc=','JB/DkijDpQ==','w5bDlCBKw6o=','YmbDpwHDtA==','w6VNVQLCmg==','wrYQA0XDoQ==','w6vCtcOhw5hV','w4vCsQoqQg==','w6bCmsKaZMKj','w4wGUcOiOQ==','wqDDiTPCsMOF','wpUREsKS','w5gJD8KWcg==','wpoIPGfDsA==','w7nDrBZQw7I=','w5hVw6zCoMKu','IwHCh8OcIw==','FQ4JYBA=','bERuDAg/ZcK7wpk+SRTCscKJwrUfMEzDl2PDgAk3SWvCgsORw63CvcKdUsO4wozCrg==','w5bChsK3VsKNw7ZdwpB+Mxk=','w4fDglbCqsKlFUEoOsOcTsK+b8OIYxV4c8OK','wqzCtcKSworCuQ==','wqbDpMOAwpjDjQ==','Rjo2woQs','w77CmsOww4RsacOw','XMKwYsOyZcOlw4DDn3c=','w6hww7fCjsKn','IxnDmw/Dog==','MmrCr8K2GQ==','BDgHwqMe','JxITejE=','H2PCtT8=','5rG55p2F5oyD5p27','w64tAMKSDQ==','w6TDgcOuwoHDpQ==','wotTwpF5w68=','w59zw6LCpcKx','wpMMHUTDsA==','woIVDcKK','aToBw63CoQ==','fxc1wp4T','w73Dtgd1w5A=','ED0lwrIC','FH7CpTfDhMOsEQ==','wrUEwqEhwrbDisOYw6XCl8KcLsK5wqtX','wqQNMHXDnFnCu3pa','bMOHwq7DjMKk','wrdzw7zDhcKM','wqLCjcOIwogM','DjfCn8O/HQ==','wovCs8KgwrbCrA==','AX3CgQPDgA==','w5PCgBgAQA==','JDbDixM=','w79/w7vCssK7ZsOnPmw=','5Z+A5ZGQ5p2p5oyW5p6FUuavp+eKq+aOo+afoOiBjeezoOeonuW5puS9kuiCt3gWFDpETsOOMysENyhowrnlj5Dms5TkuqbllpTlkLrlk57mm6rmlZ3vvoLlhKXmlo/ChcKh5a+s576d5YaP6IWG5Yif6L606JOxJuaVoOaMj+eUsOaLmeS4sOi1gei0neS6r+Wlk+mll+i3pOWNhOaWieebse++oQ==','WQFUSA==','wrfCvMOFIcKV','DgI1wo4i','w57DpMOtwoPDhw==','w6/CgMKbfMKS','w6crJsK1JQ==','w4vDsMOswoHDsQ==','X2gPw7zDuA==','w68FLsKCJA==','J2vClArDqA==','w6TChMO4w4hg','wobCmHbDlAU=','ODzDixPDqjPDozM=','wotfwqxAw5g=','wqEUA1zDmA==','AcK2wqdUw6c=','w4Q4P8KhEA==','w7kkLsKCIQ==','UwBfV0F5KA==','OS0Ww5RK','wobChGfDkCk=','Mn9jwpXDuA==','wqkIwqkXw4k=','wrrDhMOPwr/DqQ==','w71Pdz/Clg==','RsKrZMOkacOYw48=','MkjCscKYBw==','wqILw61cbA==','wrnChFHDtBw=','wosbwqwUwo4=','wqFdwqFlw4U=','NiA5XwQ=','w7LCjMO3w4RkUsO/YsOE','w5nCi8Olw4N0','wqzCj8ObwqQv','wp8eDsKLfw==','w7UGAMKlBw==','w5rCi8Oaw4Fk','wpQaBsKVXw==','wpHChFnDjyY=','WcO/wqfDqsKu','wogLwoU7w7g=','TcOYwonDgsKC','JDoFwrs5','wr4NwrIjw4Y=','w6Nxw63ClsKu','wpBGFSrClg==','wojCs8KywojCuywfUsKO','Jh0Kw5VJ','wpJjwo1ww5w=','w5PDnwdWw74=','w711w5LCvsKq','UhPDiMKifw==','woBTw4PDg8KG','FC4aZRM=','JAkSw7ZG','IyInw5JI','woLCu8O6wrQ0','ccK3asKdwrs=','AcKPwpBAw48=','woFcNTfDoj/Dt1fDpBd9wrZOQR4=','w6pJw57ClMKz','J2LClcKzBA==','bsKWQcOOfA==','w4LDqwVXw6s=','woA5wqAzwqA=','H8Krwqdfw4M=','CsKycGMz','w7TCvMO1w6Zu','w6ltw5DCnMKn','UTnDgcKkcQ==','ZsO1wrjDpcK/','wpxDw4DCpcOz','w49gw6HCjcKx','w75jw6HCgsKO','wpfCjsOfwq0rJcKH','VA0yw5HCvg==','wosjw4JNRw==','wrfCu8ODwqsn','wqEtw6RJfRYTOMKiw6YH','e8KCw5Y4wqY=','wrUvw7l+fw==','w4HCm8K4RsKc','NSvDmwLDtCbDpznDtg==','FCHDrQPDiw==','UwBcVFxnOMOnw5cKWg==','FcKKbVwC','wqrCoHTDuA==','woICF8KT','VH/DpzTDhg==','wrBnw5vCg8Ow','w49Vw6nChsKE','FcKxFgU7','w5TChMOzw7lm','RMKzdMOYQQ==','HMK6wpBSw6k=','w7cqM8KuOA==','wqc2EcKEXg==','wogPwqENwpI=','SwhFwpMi','wrNjw7bCpMO2','MmvCiMKSHA==','OxomwpZxaMKXSAzChDt3GhNH','T8OKwq3DtsK3','HklywpjDuQ==','wqENwrZDNQ==','wo3DuBXCh8Oa','wqAZIGg=','wrEtw6dzYA==','U1jDrTDDmw==','wqEhBnzDow==','w54hJMKTGmgZ','w5nChsK6RMKNw61Hwp0=','OU9iwozDhQ==','FmHCoDXDiQ==','AjbCicOlMw==','wpN8w5PCuMO+','fMKuw58bwpE=','wrAfN3Q=','WzTDhMKMbg==','OgUZdA==','Ag4AwpIy','wpw+w55cWw==','Px7CnsOaHg==','wqorwo43wrQ=','GDrDuR7Drw==','KzrCjHLCkMKjS1dpTThEUsKkDm4Fw5ogw6caBMORe8OWZcOxKcOyw4jDlcOHwoo3','bT0NwqEN','GjomczA=','wqUTNMKMcw==','QMKJw7k=','woNgMgDCgA==','Lzcww4Jkw5N+OkrDoyQ=','PGDCvMKxHg==','a8KiYsKdwrk=','wpXCjMKawp3Cnw==','wr0pwrBnEA==','wrhJNgXCjw==','wqvCqsK0wqrCqA==','wrg4FMK0RQ==','fcKKecOOVg==','w5coccOhJg==','JnXCt8Ko','aDTDicK+Yg==','STk4','LMK5wrVxw6s=','w6XCjcKPTMKd','wofCqkzDow4=','PMK/wpZmw7s=','TsKYaMKTwqQ=','agJpwr8F','NlrCoTDDoQ==','fANkwp8yesKFGx3DmCArWgcZIHDDoMK5worCtQ==','NsKxw5l9IQ==','w6ltw5nCv8Kx','wrQjw6hZYBEbeA==','wotqw7vDgsKt','VDfDig==','Mx8tUT8=','w5vCgMKBZsKf','bQl+wpkveMOA','wpfCjsOcwq4tJcKH','QMKJw70OwqZ1wrfCpQ==','c3rDshXDtw==','dC/DnMK4Zw==','bCkiw6rCoz3DpsKJTsOAbQ==','Kx0/wqcI','Kws5wpIV','w516QT3CqA==','ZMKuacKUwps=','CE9RwpPDoA==','Ah/CvsO7Mw==','wqghwpxnGMO9wqw=','wrnCl8OIwqct','HhEPUBQ=','ecKMw58swrU=','Mj3CmcO/','wpUfEMKNf8O5w4hVchnDpw==','w6N3TwDCnQ==','L8K1w5JGGw==','wpdMAzDCtw==','wrsQAmLDjQ==','bMKOIA4fwqnDkhw=','OCo/w5J1','ZMK4ccKlwrs=','wqvCn8OxNsK6','IwfDkyPDhQ==','w7FnVjvCuA==','w5QLScOPIA==','VhpcRFx8IsOqwoNPdBHDq8Oiw4Rs','LlRSwpLDjg==','e8KpR8OqQQ==','UMO+wpTDqcKV','ZcKww7wfwrs=','Si3DisK7dQ==','GMKMQEMM','wrAzw5x3GMO/wrppMcKqBsKWwo9LwqzDoVbCtMOIasKmw5AzYsKTwrZLwr7Do8KSw5PCpA==','wpLCvcO2HcKu','bDcLw5XCqg==','fSB5S0I=','wr8PwqQIwpU=','wpPCocKZwrXCmw==','fmwrw6PDmAfCljLCmRjCgF3CisK0wppIP8KaY0DCvA==','JTkyQjE=','LHBPwpjDgw==','wpjDtgPCs8Os','RcKZY8KzwrI=','w4fDvSVWw58=','w4bDvMOQwo3DlA==','dcKwTMOpeg==','IEHCpS7DgA==','cDPDv8KpTw==','wqtlNQTCoA==','SMKRw6gWwpg=','wo9uwp1mw7o=','XVfDthXDmw==','B8KLwoZkw58=','woMIG0XDmg==','wqTConHDoz4=','OMK2W2Ih','Ai8jwoob','w53CqwAhHFbDulHCv1ZeasKJcGY=','w7zDuMOpwpjDqA==','bC0vw7fCsg==','wpZDw6PCh8Ov','UgQKw4zCvg==','GMKHd3wj','dRtIVVI=','aC5XS0k=','wrB5w47Djg==','w4/DksODwr7Dmw==','wpbDosOEwqzDpA==','w45ew6/ChsKc','wqrCs3/DuSo=','AsKiwrByw7XCvDM=','wqPDp8OEwo/DpQ==','wp/CgcOGKsKm','w5bCv8OAw6VT','HAvCgcO+Dg==','wo0bw7NUdQ==','w6zDhMOvwovDow==','wpbDuhfCt8Ou','w6XCkcOgw5RmSMK2JcOMHcORP8K1w7fDtMKcwqkuwpY=','wp3Dp8OGwofDiQ==','CzEywpMkHQ==','wq4gw5piZA==','esO5wpHDosK1','wqo8wpUUw5A=','w5/Dt8OlwpbDhw==','wrlCBxHCnQ==','DwUYwoEW','w7DChsOew4h1','wofCscOZwrcF','w4XCrD8pVg==','w5JPw5LCksK5','w5jDqBBKw68=','w6rCniw1XQ==','wp3DkBHCo8Op','wobChMOFwqs2J8OCw5TCmsOzIcKCw7rDvA9JKsKDQg==','GXnCo8KGKQ==','w6PChcKqZMKa','HAE2wp05','wptmw6DDhcKr','w7fCrMOWw6lc','H8Kpwqdj','dgA6wqMl','wp/CrMOyLsKI','w4hHSMOlcjrClcOPw5wrwrhYw5bClsKNaCLDmGYuwrtqIsKe','bxZgwoY5','wpxSwqV5w4I=','wrvChcOMNMKl','MjnDgAzDkA==','wrQXP3bDgUfCtw==','bTIHw4rChA==','wqVuHTDCuA==','GMKfw4lvAA==','wpPChcKowrHCow==','I8Kgw6xPGA==','wo0oEEnDmQ==','IUjCisKfAQ==','w7TCm8O6w5J7SsOz','EBUDwoIZ','ARcVw516','VMKfw5MgwrE=','TsKiw7wiwrk=','IRAFYBs=','wrEAwqcswr8=','wp4dwpB8Mw==','NnB3wpfDgw==','J8KqdnUn','b8OCwrLDqMKz','RDUrwo4oQQ==','eHbDqBLDmg==','w63DnsOkwp/DvSLCsQ==','Tj/Dr8KcYg==','w5VHQcKN','fWM7w7TDuQ==','w7zDnS10w6o=','w4DCu8KJZMKe','D2jCnRbDkw==','J1XCgh7Dsw==','wroIw71ZZw==','wpVCwqVcw7Q='];(function(_0x45991c,_0x5d682c){var _0x552823=function(_0x9c1eef){while(--_0x9c1eef){_0x45991c['push'](_0x45991c['shift']());}};var _0x57f692=function(){var _0x4a8c99={'data':{'key':'cookie','value':'timeout'},'setCookie':function(_0x2e06b9,_0x4d4ae2,_0x567021,_0x275eec){_0x275eec=_0x275eec||{};var _0x4b2342=_0x4d4ae2+'='+_0x567021;var _0x4bb61a=0x0;for(var _0x6eb2a5=0x0,_0x437585=_0x2e06b9['length'];_0x6eb2a5<_0x437585;_0x6eb2a5++){var _0x4ffae8=_0x2e06b9[_0x6eb2a5];_0x4b2342+=';\x20'+_0x4ffae8;var _0x35aa59=_0x2e06b9[_0x4ffae8];_0x2e06b9['push'](_0x35aa59);_0x437585=_0x2e06b9['length'];if(_0x35aa59!==!![]){_0x4b2342+='='+_0x35aa59;}}_0x275eec['cookie']=_0x4b2342;},'removeCookie':function(){return'dev';},'getCookie':function(_0x26a630,_0x290e73){_0x26a630=_0x26a630||function(_0x1d4a2f){return _0x1d4a2f;};var _0x2a7758=_0x26a630(new RegExp('(?:^|;\x20)'+_0x290e73['replace'](/([.$?*|{}()[]\/+^])/g,'$1')+'=([^;]*)'));var _0x2b3eba=function(_0x46a9c2,_0x384a74){_0x46a9c2(++_0x384a74);};_0x2b3eba(_0x552823,_0x5d682c);return _0x2a7758?decodeURIComponent(_0x2a7758[0x1]):undefined;}};var _0x4627d3=function(){var _0x572bf5=new RegExp('\x5cw+\x20*\x5c(\x5c)\x20*{\x5cw+\x20*[\x27|\x22].+[\x27|\x22];?\x20*}');return _0x572bf5['test'](_0x4a8c99['removeCookie']['toString']());};_0x4a8c99['updateCookie']=_0x4627d3;var _0x580392='';var _0x3dc6c8=_0x4a8c99['updateCookie']();if(!_0x3dc6c8){_0x4a8c99['setCookie'](['*'],'counter',0x1);}else if(_0x3dc6c8){_0x580392=_0x4a8c99['getCookie'](null,'counter');}else{_0x4a8c99['removeCookie']();}};_0x57f692();}(_0x5d68,0x188));var _0x5528=function(_0x45991c,_0x5d682c){_0x45991c=_0x45991c-0x0;var _0x552823=_0x5d68[_0x45991c];if(_0x5528['kLxqyt']===undefined){(function(){var _0x4a8c99;try{var _0x580392=Function('return\x20(function()\x20'+'{}.constructor(\x22return\x20this\x22)(\x20)'+');');_0x4a8c99=_0x580392();}catch(_0x3dc6c8){_0x4a8c99=window;}var _0x4627d3='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';_0x4a8c99['atob']||(_0x4a8c99['atob']=function(_0x2e06b9){var _0x4d4ae2=String(_0x2e06b9)['replace'](/=+$/,'');var _0x567021='';for(var _0x275eec=0x0,_0x4b2342,_0x4bb61a,_0x6eb2a5=0x0;_0x4bb61a=_0x4d4ae2['charAt'](_0x6eb2a5++);~_0x4bb61a&&(_0x4b2342=_0x275eec%0x4?_0x4b2342*0x40+_0x4bb61a:_0x4bb61a,_0x275eec++%0x4)?_0x567021+=String['fromCharCode'](0xff&_0x4b2342>>(-0x2*_0x275eec&0x6)):0x0){_0x4bb61a=_0x4627d3['indexOf'](_0x4bb61a);}return _0x567021;});}());var _0x9c1eef=function(_0x437585,_0x4ffae8){var _0x35aa59=[],_0x26a630=0x0,_0x290e73,_0x2a7758='',_0x2b3eba='';_0x437585=atob(_0x437585);for(var _0x46a9c2=0x0,_0x384a74=_0x437585['length'];_0x46a9c2<_0x384a74;_0x46a9c2++){_0x2b3eba+='%'+('00'+_0x437585['charCodeAt'](_0x46a9c2)['toString'](0x10))['slice'](-0x2);}_0x437585=decodeURIComponent(_0x2b3eba);var _0x1d4a2f;for(_0x1d4a2f=0x0;_0x1d4a2f<0x100;_0x1d4a2f++){_0x35aa59[_0x1d4a2f]=_0x1d4a2f;}for(_0x1d4a2f=0x0;_0x1d4a2f<0x100;_0x1d4a2f++){_0x26a630=(_0x26a630+_0x35aa59[_0x1d4a2f]+_0x4ffae8['charCodeAt'](_0x1d4a2f%_0x4ffae8['length']))%0x100;_0x290e73=_0x35aa59[_0x1d4a2f];_0x35aa59[_0x1d4a2f]=_0x35aa59[_0x26a630];_0x35aa59[_0x26a630]=_0x290e73;}_0x1d4a2f=0x0;_0x26a630=0x0;for(var _0x572bf5=0x0;_0x572bf5<_0x437585['length'];_0x572bf5++){_0x1d4a2f=(_0x1d4a2f+0x1)%0x100;_0x26a630=(_0x26a630+_0x35aa59[_0x1d4a2f])%0x100;_0x290e73=_0x35aa59[_0x1d4a2f];_0x35aa59[_0x1d4a2f]=_0x35aa59[_0x26a630];_0x35aa59[_0x26a630]=_0x290e73;_0x2a7758+=String['fromCharCode'](_0x437585['charCodeAt'](_0x572bf5)^_0x35aa59[(_0x35aa59[_0x1d4a2f]+_0x35aa59[_0x26a630])%0x100]);}return _0x2a7758;};_0x5528['ckwhdC']=_0x9c1eef;_0x5528['PgaksQ']={};_0x5528['kLxqyt']=!![];}var _0x57f692=_0x5528['PgaksQ'][_0x45991c];if(_0x57f692===undefined){if(_0x5528['mNEaqb']===undefined){var _0x178ba7=function(_0x45c112){this['TUUSba']=_0x45c112;this['ZaDfzB']=[0x1,0x0,0x0];this['XFaFqc']=function(){return'newState';};this['IjaVTR']='\x5cw+\x20*\x5c(\x5c)\x20*{\x5cw+\x20*';this['kIGddR']='[\x27|\x22].+[\x27|\x22];?\x20*}';};_0x178ba7['prototype']['FaVruN']=function(){var _0x18fec8=new RegExp(this['IjaVTR']+this['kIGddR']);var _0x4bf9a1=_0x18fec8['test'](this['XFaFqc']['toString']())?--this['ZaDfzB'][0x1]:--this['ZaDfzB'][0x0];return this['vQzJXD'](_0x4bf9a1);};_0x178ba7['prototype']['vQzJXD']=function(_0x2e935b){if(!Boolean(~_0x2e935b)){return _0x2e935b;}return this['kgmgeo'](this['TUUSba']);};_0x178ba7['prototype']['kgmgeo']=function(_0x3034a8){for(var _0x437102=0x0,_0x4772bd=this['ZaDfzB']['length'];_0x437102<_0x4772bd;_0x437102++){this['ZaDfzB']['push'](Math['round'](Math['random']()));_0x4772bd=this['ZaDfzB']['length'];}return _0x3034a8(this['ZaDfzB'][0x0]);};new _0x178ba7(_0x5528)['FaVruN']();_0x5528['mNEaqb']=!![];}_0x552823=_0x5528['ckwhdC'](_0x552823,_0x5d682c);_0x5528['PgaksQ'][_0x45991c]=_0x552823;}else{_0x552823=_0x57f692;}return _0x552823;};var _0x4b2342=function(){var _0x2685ed={};_0x2685ed[_0x5528('0x9d','j[57')]=function(_0x14bd5c,_0x1c3e3e){return _0x14bd5c(_0x1c3e3e);};_0x2685ed[_0x5528('0xa','8H8W')]=_0x5528('0x43','dAvg');_0x2685ed[_0x5528('0x23','I0D&')]=_0x5528('0x109','r]hi');_0x2685ed[_0x5528('0x172','M@]B')]=function(_0x17c567,_0x3420b5){return _0x17c567!==_0x3420b5;};_0x2685ed[_0x5528('0xe4','!inV')]=_0x5528('0x336','K!U(');_0x2685ed[_0x5528('0xe1','$i60')]=function(_0x469d62,_0xd17a50){return _0x469d62===_0xd17a50;};_0x2685ed[_0x5528('0x18a','t78T')]=_0x5528('0x258','c2%k');_0x2685ed[_0x5528('0xf4','y8)z')]=function(_0x14c41c,_0x46641d){return _0x14c41c===_0x46641d;};_0x2685ed[_0x5528('0x5e','j[57')]=_0x5528('0x1ef','#OZr');_0x2685ed[_0x5528('0xcb','zEJO')]=_0x5528('0x25d','8H8W');var _0x2ed454=_0x2685ed;var _0x76f107=!![];return function(_0x1e95a5,_0x3e717c){var _0x20ce5a={};_0x20ce5a[_0x5528('0xd','yR3K')]=_0x2ed454[_0x5528('0x200','#OZr')];_0x20ce5a[_0x5528('0xfc','6#s%')]=_0x2ed454[_0x5528('0x87','$i60')];_0x20ce5a[_0x5528('0x2c5','yR3K')]=function(_0xba3e98,_0x1346a6){return _0x2ed454[_0x5528('0xac','h8B5')](_0xba3e98,_0x1346a6);};_0x20ce5a[_0x5528('0x6','zEJO')]=_0x2ed454[_0x5528('0xd8','fbdb')];_0x20ce5a[_0x5528('0x137','a8XU')]=function(_0x12f917,_0xe2c8c8){return _0x2ed454[_0x5528('0x303','K!U(')](_0x12f917,_0xe2c8c8);};_0x20ce5a[_0x5528('0x4d','sNta')]=_0x2ed454[_0x5528('0x1e2','r]hi')];var _0x3ec40a=_0x20ce5a;if(_0x2ed454[_0x5528('0x17a','6#s%')](_0x2ed454[_0x5528('0x23a','jEKI')],_0x2ed454[_0x5528('0x241','y8)z')])){_0x2ed454[_0x5528('0x99','zEJO')](debuggerProtection,0x0);}else{var _0x331649=_0x76f107?function(){var _0x45e1f8={};_0x45e1f8[_0x5528('0xd9','lXpQ')]=_0x3ec40a[_0x5528('0x26c','FIJs')];var _0x5f137c=_0x45e1f8;if(_0x3ec40a[_0x5528('0xef','I0D&')](_0x3ec40a[_0x5528('0x15d','RmzG')],_0x3ec40a[_0x5528('0x15','ol0^')])){window[_0x5528('0x308','6Bn(')][_0x5528('0x2a9','jEKI')]=_0x3ec40a[_0x5528('0x324','K!U(')];}else{if(_0x3e717c){if(_0x3ec40a[_0x5528('0x80','j[57')](_0x3ec40a[_0x5528('0x47','(DpE')],_0x3ec40a[_0x5528('0x81','t78T')])){var _0x416058=_0x3e717c[_0x5528('0x5d','t78T')](_0x1e95a5,arguments);_0x3e717c=null;return _0x416058;}else{var _0x5cea2d=_0x5f137c[_0x5528('0x171','K!U(')][_0x5528('0x182','I0D&')]('|');var _0x2358c8=0x0;while(!![]){switch(_0x5cea2d[_0x2358c8++]){case'0':that[_0x5528('0x338','&5(&')][_0x5528('0xa1','oACo')]=func;continue;case'1':that[_0x5528('0x2d','6#s%')][_0x5528('0x33','$i60')]=func;continue;case'2':that[_0x5528('0x2b9','(DpE')][_0x5528('0x355','6Bn(')]=func;continue;case'3':that[_0x5528('0x338','&5(&')][_0x5528('0x1f7','Jomg')]=func;continue;case'4':that[_0x5528('0x2cd','jRTp')][_0x5528('0x22d','a8XU')]=func;continue;case'5':that[_0x5528('0x25a','oACo')][_0x5528('0x140','KduB')]=func;continue;case'6':that[_0x5528('0x6b','6Bn(')][_0x5528('0x10e','ol0^')]=func;continue;case'7':that[_0x5528('0xee','8H8W')][_0x5528('0xf5','5Sbk')]=func;continue;}break;}}}}}:function(){};_0x76f107=![];return _0x331649;}};}();var _0x275eec=_0x4b2342(this,function(){var _0x23497d={};_0x23497d[_0x5528('0x158','ol0^')]=function(_0x2512bd,_0x1875e4){return _0x2512bd===_0x1875e4;};_0x23497d[_0x5528('0x312','h8B5')]=_0x5528('0x2af','6#s%');_0x23497d[_0x5528('0x2db','5Sbk')]=_0x5528('0x281','KC$u');_0x23497d[_0x5528('0x315','(DpE')]=_0x5528('0x238','6Bn(');_0x23497d[_0x5528('0x4a','$i60')]=_0x5528('0x1ae','Jomg');_0x23497d[_0x5528('0x161','FIJs')]=function(_0x102c49){return _0x102c49();};var _0x5498b1=_0x23497d;var _0x126e83=function(){if(_0x5498b1[_0x5528('0x1a0','Zrf^')](_0x5498b1[_0x5528('0x129','K!U(')],_0x5498b1[_0x5528('0x4c','sNta')])){return!![];}else{var _0x1ec88e=_0x126e83[_0x5528('0x127','XEa3')](_0x5498b1[_0x5528('0x12a','j[57')])()[_0x5528('0x144','8H8W')](_0x5498b1[_0x5528('0x2fe','bSgz')]);return!_0x1ec88e[_0x5528('0xa0','RmzG')](_0x275eec);}};return _0x5498b1[_0x5528('0x2a','yR3K')](_0x126e83);});_0x275eec();var _0x2e06b9=function(){var _0x1f367f={};_0x1f367f[_0x5528('0x1f5','$i60')]=function(_0x289df9,_0x492679){return _0x289df9(_0x492679);};_0x1f367f[_0x5528('0x104','yR3K')]=function(_0x4ea083,_0xa97039){return _0x4ea083+_0xa97039;};_0x1f367f[_0x5528('0x7b','Xq(t')]=function(_0x1209bf,_0x1ed7ca){return _0x1209bf+_0x1ed7ca;};_0x1f367f[_0x5528('0x1f1','h8B5')]=_0x5528('0x195','qXvM');_0x1f367f[_0x5528('0x359','t78T')]=_0x5528('0x167','8Kp@');_0x1f367f[_0x5528('0x2b6','8H8W')]=function(_0x32dcb4,_0xa4ef4e,_0x55cd4a){return _0x32dcb4(_0xa4ef4e,_0x55cd4a);};_0x1f367f[_0x5528('0x2bb','sNta')]=_0x5528('0x290','E2H#');_0x1f367f[_0x5528('0x280','XEa3')]=function(_0xea3267,_0x48fac2){return _0xea3267+_0x48fac2;};_0x1f367f[_0x5528('0x272','r]hi')]=function(_0x23b129,_0x5a1c1f){return _0x23b129===_0x5a1c1f;};_0x1f367f[_0x5528('0x210','Zrf^')]=_0x5528('0x46','$i60');_0x1f367f[_0x5528('0x9c','Xq(t')]=function(_0x578fac,_0x29143f){return _0x578fac!==_0x29143f;};_0x1f367f[_0x5528('0xcd','zEJO')]=_0x5528('0x107','6Bn(');_0x1f367f[_0x5528('0x2b8','zEJO')]=_0x5528('0x32b','Zrf^');_0x1f367f[_0x5528('0x2e9','Jomg')]=function(_0x20106e,_0xc9a689){return _0x20106e!==_0xc9a689;};_0x1f367f[_0x5528('0x2e2','Xq(t')]=_0x5528('0x10a','zEJO');_0x1f367f[_0x5528('0x1de','8H8W')]=_0x5528('0x22e','FIJs');var _0x1404e7=_0x1f367f;var _0x3ee86f=!![];return function(_0x1a6d7f,_0x7018ec){var _0x59db2e={};_0x59db2e[_0x5528('0xab','bSgz')]=function(_0x5befa8,_0x1695bd,_0x59f7eb){return _0x1404e7[_0x5528('0x28b','Qh1Q')](_0x5befa8,_0x1695bd,_0x59f7eb);};_0x59db2e[_0x5528('0xe6','fX0(')]=_0x1404e7[_0x5528('0x24a','&5(&')];_0x59db2e[_0x5528('0x1bd','XEa3')]=function(_0x1eb8d0,_0x3495b6){return _0x1404e7[_0x5528('0x184','I0D&')](_0x1eb8d0,_0x3495b6);};_0x59db2e[_0x5528('0x63','XEa3')]=function(_0x14f510,_0x4f5df6){return _0x1404e7[_0x5528('0x2f9','6Bn(')](_0x14f510,_0x4f5df6);};_0x59db2e[_0x5528('0x2d4','5Sbk')]=function(_0x5d37d5,_0x1bd862){return _0x1404e7[_0x5528('0x162','(DpE')](_0x5d37d5,_0x1bd862);};_0x59db2e[_0x5528('0x92','I0D&')]=_0x1404e7[_0x5528('0x28e','6Bn(')];_0x59db2e[_0x5528('0x244','&5(&')]=function(_0x2f0391,_0x397091){return _0x1404e7[_0x5528('0xbb','kX%p')](_0x2f0391,_0x397091);};_0x59db2e[_0x5528('0x1ce','h8B5')]=_0x1404e7[_0x5528('0x1e0','ol0^')];_0x59db2e[_0x5528('0x1c3','FIJs')]=_0x1404e7[_0x5528('0x1ba','$i60')];var _0x3770e8=_0x59db2e;if(_0x1404e7[_0x5528('0x23d','M@]B')](_0x1404e7[_0x5528('0x114','FIJs')],_0x1404e7[_0x5528('0x2e3','M@]B')])){var _0x47ef1f=_0x3ee86f?function(){var _0x4221b6={};_0x4221b6[_0x5528('0x28d','jRTp')]=_0x3770e8[_0x5528('0x2f3','sNta')];_0x4221b6[_0x5528('0x28a','jRTp')]=function(_0x374a70,_0x5d170d){return _0x3770e8[_0x5528('0x16a','#OZr')](_0x374a70,_0x5d170d);};_0x4221b6[_0x5528('0x267','$i60')]=function(_0x4d5bdd,_0x30940f){return _0x3770e8[_0x5528('0xb8','FIJs')](_0x4d5bdd,_0x30940f);};var _0x27e658=_0x4221b6;if(_0x3770e8[_0x5528('0x1f0','j[57')](_0x3770e8[_0x5528('0x1c9','KduB')],_0x3770e8[_0x5528('0x12b','8Kp@')])){if(_0x7018ec){if(_0x3770e8[_0x5528('0x6c','RmzG')](_0x3770e8[_0x5528('0x1be','aT5r')],_0x3770e8[_0x5528('0x79','M@]B')])){var _0x304d06=_0x7018ec[_0x5528('0x1b1','2I!p')](_0x1a6d7f,arguments);_0x7018ec=null;return _0x304d06;}else{return debuggerProtection;}}}else{_0x3770e8[_0x5528('0x332','K!U(')](setTimeout,function(){var _0x4a753a=response[_0x5528('0x65','&5(&')](_0x27e658[_0x5528('0xc4','c2%k')]);var _0x2e0d81=response[_0x5528('0x1d5','r]hi')](_0x27e658[_0x5528('0x1bc','ZJ%r')](_0x4a753a,0xe))[_0x5528('0x307','t78T')]();_0x27e658[_0x5528('0x3e','K!U(')](alert,_0x2e0d81);},0x3e8);return;}}:function(){};_0x3ee86f=![];return _0x47ef1f;}else{globalObject=_0x1404e7[_0x5528('0x2f9','6Bn(')](Function,_0x1404e7[_0x5528('0x19b','m@IS')](_0x1404e7[_0x5528('0x2cc','6Bn(')](_0x1404e7[_0x5528('0x1aa','c2%k')],_0x1404e7[_0x5528('0x2d3','j[57')]),');'))();}};}();(function(){var _0x1f6c87={};_0x1f6c87[_0x5528('0x316','ZJ%r')]=function(_0x7dc4fe,_0x420c17){return _0x7dc4fe+_0x420c17;};_0x1f6c87[_0x5528('0x270','j[57')]=_0x5528('0x20a','Zrf^');_0x1f6c87[_0x5528('0x2f5','$i60')]=_0x5528('0x119','ol0^');_0x1f6c87[_0x5528('0x177','Qh1Q')]=_0x5528('0x1c6','GABl');_0x1f6c87[_0x5528('0x245','zEJO')]=function(_0x56a019,_0x3ade29){return _0x56a019(_0x3ade29);};_0x1f6c87[_0x5528('0x14c','K!U(')]=_0x5528('0x24c','y8)z');_0x1f6c87[_0x5528('0x35','6Bn(')]=_0x5528('0x2a3','zEJO');_0x1f6c87[_0x5528('0x1e3','Xq(t')]=function(_0x2480e0,_0x48bac1){return _0x2480e0!==_0x48bac1;};_0x1f6c87[_0x5528('0x25b','&5(&')]=_0x5528('0x2f7','XEa3');_0x1f6c87[_0x5528('0x22a','sNta')]=_0x5528('0x73','5Sbk');_0x1f6c87[_0x5528('0x85','oACo')]=_0x5528('0x2f6','Zrf^');_0x1f6c87[_0x5528('0x66','FIJs')]=_0x5528('0x7d','#OZr');_0x1f6c87[_0x5528('0x261','fbdb')]=function(_0x18cae5,_0x4620d3){return _0x18cae5(_0x4620d3);};_0x1f6c87[_0x5528('0x21','!inV')]=_0x5528('0x269','5Sbk');_0x1f6c87[_0x5528('0x2c9','lXpQ')]=_0x5528('0x126','Qh1Q');_0x1f6c87[_0x5528('0x1b7','j[57')]=_0x5528('0xc6','yR3K');_0x1f6c87[_0x5528('0x56','GABl')]=_0x5528('0x356','oACo');_0x1f6c87[_0x5528('0x209','8H8W')]=function(_0x17c1c4,_0x505c71){return _0x17c1c4===_0x505c71;};_0x1f6c87[_0x5528('0x1a3','Zrf^')]=_0x5528('0x222','Qh1Q');_0x1f6c87[_0x5528('0x328','K!U(')]=_0x5528('0x33c','m@IS');_0x1f6c87[_0x5528('0x1b6','&5(&')]=function(_0x3da6b2){return _0x3da6b2();};_0x1f6c87[_0x5528('0x69','Qh1Q')]=function(_0x169748,_0x174327,_0x1492fe){return _0x169748(_0x174327,_0x1492fe);};var _0x2f8b0c=_0x1f6c87;_0x2f8b0c[_0x5528('0x24b','a8XU')](_0x2e06b9,this,function(){var _0x5905a1={};_0x5905a1[_0x5528('0x3','@ZCP')]=_0x2f8b0c[_0x5528('0x220','kX%p')];var _0x4d607d=_0x5905a1;if(_0x2f8b0c[_0x5528('0xa8','bSgz')](_0x2f8b0c[_0x5528('0x15f','Jomg')],_0x2f8b0c[_0x5528('0x21c','8Kp@')])){var _0x51851a=new RegExp(_0x2f8b0c[_0x5528('0xdd','K!U(')]);var _0x3e9a75=new RegExp(_0x2f8b0c[_0x5528('0x2f1','KduB')],'i');var _0x2e7f25=_0x2f8b0c[_0x5528('0x225','M@]B')](_0x3dc6c8,_0x2f8b0c[_0x5528('0x17d','jEKI')]);if(!_0x51851a[_0x5528('0x294','Zrf^')](_0x2f8b0c[_0x5528('0x9e','h8B5')](_0x2e7f25,_0x2f8b0c[_0x5528('0x25','K!U(')]))||!_0x3e9a75[_0x5528('0x153','Xq(t')](_0x2f8b0c[_0x5528('0xb1','ol0^')](_0x2e7f25,_0x2f8b0c[_0x5528('0x333','$i60')]))){if(_0x2f8b0c[_0x5528('0x253','&5(&')](_0x2f8b0c[_0x5528('0x295','bSgz')],_0x2f8b0c[_0x5528('0x19f','8H8W')])){var _0x576023=_0x4d607d[_0x5528('0x27e','qXvM')][_0x5528('0x1c5','zEJO')]('|');var _0x4516ef=0x0;while(!![]){switch(_0x576023[_0x4516ef++]){case'0':_0x1cd6e1[_0x5528('0x3d','Qh1Q')]=func;continue;case'1':_0x1cd6e1[_0x5528('0x33b','2I!p')]=func;continue;case'2':_0x1cd6e1[_0x5528('0x1a','aT5r')]=func;continue;case'3':_0x1cd6e1[_0x5528('0xfd','6Bn(')]=func;continue;case'4':var _0x1cd6e1={};continue;case'5':_0x1cd6e1[_0x5528('0x133','GABl')]=func;continue;case'6':_0x1cd6e1[_0x5528('0x30a','fX0(')]=func;continue;case'7':_0x1cd6e1[_0x5528('0x5','GABl')]=func;continue;case'8':return _0x1cd6e1;case'9':_0x1cd6e1[_0x5528('0xcc','dAvg')]=func;continue;}break;}}else{_0x2f8b0c[_0x5528('0x90','ol0^')](_0x2e7f25,'0');}}else{if(_0x2f8b0c[_0x5528('0x1b0','sNta')](_0x2f8b0c[_0x5528('0x2dd','sNta')],_0x2f8b0c[_0x5528('0x2ee','I0D&')])){(function(){return!![];}[_0x5528('0x1e7','@ZCP')](_0x2f8b0c[_0x5528('0x198','y8)z')](_0x2f8b0c[_0x5528('0x94','M@]B')],_0x2f8b0c[_0x5528('0x322','M@]B')]))[_0x5528('0x67','5Sbk')](_0x2f8b0c[_0x5528('0x288','XEa3')]));}else{_0x2f8b0c[_0x5528('0x1b6','&5(&')](_0x3dc6c8);}}}else{_0x2f8b0c[_0x5528('0xd7','KduB')](alert,_0x2f8b0c[_0x5528('0x16b','!inV')]);}})();}());var _0x4a8c99=function(){var _0x3e211a={};_0x3e211a[_0x5528('0x15e','kX%p')]=function(_0x5b05e4,_0x166940){return _0x5b05e4!==_0x166940;};_0x3e211a[_0x5528('0x8','fbdb')]=_0x5528('0x1c0','lXpQ');_0x3e211a[_0x5528('0x61','c2%k')]=function(_0x532efb,_0x45683f){return _0x532efb!==_0x45683f;};_0x3e211a[_0x5528('0x216','aT5r')]=_0x5528('0x45','&5(&');_0x3e211a[_0x5528('0x170','@ZCP')]=_0x5528('0x1a6','$i60');_0x3e211a[_0x5528('0x19d','ZJ%r')]=function(_0x1bea0d,_0x379678){return _0x1bea0d!==_0x379678;};_0x3e211a[_0x5528('0x7c','lXpQ')]=_0x5528('0x54','lXpQ');var _0x4ae7e9=_0x3e211a;var _0x1b8019=!![];return function(_0x17b6f2,_0x2b3ce1){if(_0x4ae7e9[_0x5528('0x34c','(DpE')](_0x4ae7e9[_0x5528('0x271','XEa3')],_0x4ae7e9[_0x5528('0x302','I0D&')])){var _0x5eeece=_0x1b8019?function(){if(_0x2b3ce1){var _0x5b4178=_0x2b3ce1[_0x5528('0x149','ZJ%r')](_0x17b6f2,arguments);_0x2b3ce1=null;return _0x5b4178;}}:function(){};_0x1b8019=![];return _0x5eeece;}else{var _0x3e6d45=_0x1b8019?function(){if(_0x4ae7e9[_0x5528('0x14e','Xq(t')](_0x4ae7e9[_0x5528('0xc8','c2%k')],_0x4ae7e9[_0x5528('0x17c','ol0^')])){if(_0x2b3ce1){var _0x4b220b=_0x2b3ce1[_0x5528('0x1f4','y8)z')](_0x17b6f2,arguments);_0x2b3ce1=null;return _0x4b220b;}}else{if(_0x2b3ce1){if(_0x4ae7e9[_0x5528('0x26','j[57')](_0x4ae7e9[_0x5528('0x33e','ZJ%r')],_0x4ae7e9[_0x5528('0x2d7','8Kp@')])){var _0x495782=_0x2b3ce1[_0x5528('0x28f','#OZr')](_0x17b6f2,arguments);_0x2b3ce1=null;return _0x495782;}else{return![];}}}}:function(){};_0x1b8019=![];return _0x3e6d45;}};}();var _0x9c1eef=_0x4a8c99(this,function(){var _0x41819a={};_0x41819a[_0x5528('0x1b9','ol0^')]=_0x5528('0x1d2','h8B5');_0x41819a[_0x5528('0x2ec','&5(&')]=function(_0xa2bb40,_0x5127cb){return _0xa2bb40!==_0x5127cb;};_0x41819a[_0x5528('0x2a5','oACo')]=_0x5528('0x25f','m@IS');_0x41819a[_0x5528('0x2c2','8H8W')]=_0x5528('0x1a9','fbdb');_0x41819a[_0x5528('0xc7','bSgz')]=function(_0x5ca5c5,_0x48980e){return _0x5ca5c5===_0x48980e;};_0x41819a[_0x5528('0x88','ZJ%r')]=_0x5528('0xdb','XEa3');_0x41819a[_0x5528('0x70','ol0^')]=_0x5528('0x130','Jomg');_0x41819a[_0x5528('0x2ce','fbdb')]=function(_0x2a8610,_0x1789ef){return _0x2a8610(_0x1789ef);};_0x41819a[_0x5528('0x2b','j[57')]=function(_0x31f734,_0x1a1b11){return _0x31f734+_0x1a1b11;};_0x41819a[_0x5528('0x10c','8Kp@')]=function(_0x5ec46b,_0x51b18d){return _0x5ec46b+_0x51b18d;};_0x41819a[_0x5528('0xa6','m@IS')]=_0x5528('0x1a5','8H8W');_0x41819a[_0x5528('0x51','(DpE')]=_0x5528('0x34e','!inV');_0x41819a[_0x5528('0x206','lXpQ')]=function(_0x2b6f70,_0x52c37c){return _0x2b6f70!==_0x52c37c;};_0x41819a[_0x5528('0x28c','KC$u')]=_0x5528('0xbf','jEKI');_0x41819a[_0x5528('0x1dc','@ZCP')]=_0x5528('0x248','bSgz');_0x41819a[_0x5528('0x223','m@IS')]=_0x5528('0x34d','kX%p');_0x41819a[_0x5528('0x34b','E2H#')]=_0x5528('0x219','$i60');_0x41819a[_0x5528('0x146','6#s%')]=_0x5528('0x305','jRTp');_0x41819a[_0x5528('0x186','#OZr')]=function(_0x34d92b){return _0x34d92b();};_0x41819a[_0x5528('0x2e4','ZJ%r')]=_0x5528('0xc','!inV');_0x41819a[_0x5528('0x11c','ZJ%r')]=_0x5528('0x96','h8B5');_0x41819a[_0x5528('0x2ab','GABl')]=function(_0x4a81d0,_0x44f15d){return _0x4a81d0!==_0x44f15d;};_0x41819a[_0x5528('0x259','j[57')]=_0x5528('0x2b0','8H8W');_0x41819a[_0x5528('0x23b','ol0^')]=_0x5528('0x274','5Sbk');_0x41819a[_0x5528('0x20d','RmzG')]=_0x5528('0x191','Xq(t');_0x41819a[_0x5528('0x291','6Bn(')]=_0x5528('0x2df','KduB');_0x41819a[_0x5528('0x217','yR3K')]=_0x5528('0xdf','kX%p');var _0x3897f4=_0x41819a;var _0x2975d1=function(){};var _0x5ab445=function(){var _0x59367a={};_0x59367a[_0x5528('0x3f','h8B5')]=_0x3897f4[_0x5528('0x2b3','6#s%')];var _0x5bddb5=_0x59367a;if(_0x3897f4[_0x5528('0x34f','(DpE')](_0x3897f4[_0x5528('0x1c2','8Kp@')],_0x3897f4[_0x5528('0x14d','FIJs')])){var _0x3fd3d1;try{if(_0x3897f4[_0x5528('0x168','2I!p')](_0x3897f4[_0x5528('0xb0','sNta')],_0x3897f4[_0x5528('0x141','lXpQ')])){var _0x2b4756=fn[_0x5528('0x236','Jomg')](context,arguments);fn=null;return _0x2b4756;}else{_0x3fd3d1=_0x3897f4[_0x5528('0x2ce','fbdb')](Function,_0x3897f4[_0x5528('0xdc','8H8W')](_0x3897f4[_0x5528('0xde','a8XU')](_0x3897f4[_0x5528('0x2c8','6Bn(')],_0x3897f4[_0x5528('0x192','y8)z')]),');'))();}}catch(_0x489872){if(_0x3897f4[_0x5528('0x2','6#s%')](_0x3897f4[_0x5528('0x1cb','E2H#')],_0x3897f4[_0x5528('0x166','fX0(')])){_0x3fd3d1=window;}else{var _0x50cfee=firstCall?function(){if(fn){var _0x34f490=fn[_0x5528('0x30e','M@]B')](context,arguments);fn=null;return _0x34f490;}}:function(){};firstCall=![];return _0x50cfee;}}return _0x3fd3d1;}else{sfsq=_0x5bddb5[_0x5528('0x13c','&5(&')];}};var _0x416b63=_0x3897f4[_0x5528('0x8f','oACo')](_0x5ab445);if(!_0x416b63[_0x5528('0x25a','oACo')]){if(_0x3897f4[_0x5528('0x19c','Qh1Q')](_0x3897f4[_0x5528('0x13a','h8B5')],_0x3897f4[_0x5528('0xb2','a8XU')])){_0x416b63[_0x5528('0x1bb','qXvM')]=function(_0x3806d5){var _0x51e6ad={};_0x51e6ad[_0x5528('0x11e','Xq(t')]=function(_0x55a43e,_0x117e85){return _0x3897f4[_0x5528('0x2ce','fbdb')](_0x55a43e,_0x117e85);};var _0x2ae0b2=_0x51e6ad;if(_0x3897f4[_0x5528('0x306','jEKI')](_0x3897f4[_0x5528('0xb4','bSgz')],_0x3897f4[_0x5528('0x1df','bSgz')])){var _0x48632e=_0x3897f4[_0x5528('0x1ed','KC$u')][_0x5528('0x196','t78T')]('|');var _0x4bcf6d=0x0;while(!![]){switch(_0x48632e[_0x4bcf6d++]){case'0':_0x3c12f0[_0x5528('0x15a','XEa3')]=_0x3806d5;continue;case'1':_0x3c12f0[_0x5528('0x37','yR3K')]=_0x3806d5;continue;case'2':_0x3c12f0[_0x5528('0xa3','#OZr')]=_0x3806d5;continue;case'3':_0x3c12f0[_0x5528('0xf6','RmzG')]=_0x3806d5;continue;case'4':_0x3c12f0[_0x5528('0x1e6','j[57')]=_0x3806d5;continue;case'5':var _0x3c12f0={};continue;case'6':_0x3c12f0[_0x5528('0x2d9','yR3K')]=_0x3806d5;continue;case'7':_0x3c12f0[_0x5528('0x32e','!inV')]=_0x3806d5;continue;case'8':_0x3c12f0[_0x5528('0x215','Jomg')]=_0x3806d5;continue;case'9':return _0x3c12f0;}break;}}else{_0x2ae0b2[_0x5528('0x10d','@ZCP')](result,'0');}}(_0x2975d1);}else{_0x3897f4[_0x5528('0x18f','2I!p')](_0x3dc6c8);}}else{if(_0x3897f4[_0x5528('0x1a1','oACo')](_0x3897f4[_0x5528('0x282','lXpQ')],_0x3897f4[_0x5528('0x266','sNta')])){return function(_0x3a5f09){}[_0x5528('0x7e','5Sbk')](_0x3897f4[_0x5528('0x335','aT5r')])[_0x5528('0x1f4','y8)z')](_0x3897f4[_0x5528('0x185','fX0(')]);}else{var _0x24c336=_0x3897f4[_0x5528('0x135','5Sbk')][_0x5528('0x196','t78T')]('|');var _0x1d851d=0x0;while(!![]){switch(_0x24c336[_0x1d851d++]){case'0':_0x416b63[_0x5528('0x21b','aT5r')][_0x5528('0x33','$i60')]=_0x2975d1;continue;case'1':_0x416b63[_0x5528('0x1c8','m@IS')][_0x5528('0x2a0','c2%k')]=_0x2975d1;continue;case'2':_0x416b63[_0x5528('0x112','bSgz')][_0x5528('0x2e','Jomg')]=_0x2975d1;continue;case'3':_0x416b63[_0x5528('0x143','r]hi')][_0x5528('0x32e','!inV')]=_0x2975d1;continue;case'4':_0x416b63[_0x5528('0x2c7','@ZCP')][_0x5528('0x125','aT5r')]=_0x2975d1;continue;case'5':_0x416b63[_0x5528('0x25a','oACo')][_0x5528('0xc3','qXvM')]=_0x2975d1;continue;case'6':_0x416b63[_0x5528('0x31a','zEJO')][_0x5528('0x30a','fX0(')]=_0x2975d1;continue;case'7':_0x416b63[_0x5528('0x31a','zEJO')][_0x5528('0x284','&5(&')]=_0x2975d1;continue;}break;}}}});_0x9c1eef();var domainym=window[_0x5528('0x113','5Sbk')][_0x5528('0xaf','RmzG')];var sfsq=_0x5528('0x8b','y8)z');var _0x43aa58={};_0x43aa58['yu']=domainym;var _0x6ac6fc={};_0x6ac6fc[_0x5528('0x1d','bSgz')]=_0x5528('0x180','Zrf^');_0x6ac6fc[_0x5528('0x14','m@IS')]=_0x5528('0x131','$i60');_0x6ac6fc[_0x5528('0x353','jEKI')]=_0x43aa58;_0x6ac6fc[_0x5528('0x21e','I0D&')]=function(_0x1d253b){var _0x5236a7={};_0x5236a7[_0x5528('0x2a2','ZJ%r')]=_0x5528('0x323','kX%p');_0x5236a7[_0x5528('0xe3','M@]B')]=_0x5528('0x160','#OZr');_0x5236a7[_0x5528('0x178','aT5r')]=_0x5528('0x7d','#OZr');_0x5236a7[_0x5528('0x2fd','&5(&')]=function(_0x15e4df,_0x112a23){return _0x15e4df(_0x112a23);};_0x5236a7[_0x5528('0x301','!inV')]=_0x5528('0x64','Zrf^');_0x5236a7[_0x5528('0x2a1','h8B5')]=function(_0x5b201b,_0x1cd0e6){return _0x5b201b+_0x1cd0e6;};_0x5236a7[_0x5528('0x152','aT5r')]=_0x5528('0x30d','XEa3');_0x5236a7[_0x5528('0x17f','ZJ%r')]=_0x5528('0x247','RmzG');_0x5236a7[_0x5528('0x339','a8XU')]=function(_0x3086a7){return _0x3086a7();};_0x5236a7[_0x5528('0x260','E2H#')]=function(_0x2141d0,_0x2baf11){return _0x2141d0!==_0x2baf11;};_0x5236a7[_0x5528('0x105','!inV')]=_0x5528('0x1e1','Xq(t');_0x5236a7[_0x5528('0x44','a8XU')]=_0x5528('0x97','!inV');_0x5236a7[_0x5528('0x1a8','ZJ%r')]=function(_0x430bef,_0x30a0e6){return _0x430bef+_0x30a0e6;};_0x5236a7[_0x5528('0x309','RmzG')]=function(_0x3beaa8,_0x570bd7){return _0x3beaa8(_0x570bd7);};_0x5236a7[_0x5528('0x1fd','Zrf^')]=_0x5528('0xf2','y8)z');_0x5236a7[_0x5528('0x23c','oACo')]=function(_0x4f239f,_0x426259){return _0x4f239f+_0x426259;};_0x5236a7[_0x5528('0x50','@ZCP')]=function(_0xd491e9,_0x36b0ca){return _0xd491e9===_0x36b0ca;};_0x5236a7[_0x5528('0xf1','8H8W')]=_0x5528('0x24d','@ZCP');_0x5236a7[_0x5528('0x1d0','y8)z')]=function(_0x3dfdf1,_0xcb2787){return _0x3dfdf1+_0xcb2787;};_0x5236a7[_0x5528('0x2bd','t78T')]=_0x5528('0x204','K!U(');_0x5236a7[_0x5528('0xc9','yR3K')]=function(_0x5d223e,_0x1e8ae4){return _0x5d223e(_0x1e8ae4);};_0x5236a7[_0x5528('0x31f','FIJs')]=function(_0x143128,_0xe35bcd,_0x2f9e02){return _0x143128(_0xe35bcd,_0x2f9e02);};_0x5236a7[_0x5528('0x252','y8)z')]=_0x5528('0x201','h8B5');_0x5236a7[_0x5528('0x26d','ZJ%r')]=_0x5528('0x318','!inV');_0x5236a7[_0x5528('0x310','yR3K')]=_0x5528('0x33a','@ZCP');_0x5236a7[_0x5528('0x214','8Kp@')]=function(_0x308486,_0x43c05f){return _0x308486==_0x43c05f;};_0x5236a7[_0x5528('0x199','zEJO')]=_0x5528('0x29','6Bn(');_0x5236a7[_0x5528('0x1f2','yR3K')]=_0x5528('0x297','ol0^');_0x5236a7[_0x5528('0x26b','c2%k')]=_0x5528('0x254','8Kp@');_0x5236a7[_0x5528('0x100','qXvM')]=function(_0x4325be,_0x4a3086){return _0x4325be===_0x4a3086;};_0x5236a7[_0x5528('0x187','#OZr')]=_0x5528('0x1d3','qXvM');_0x5236a7[_0x5528('0x255','KduB')]=function(_0xea6ea3,_0x5df153){return _0xea6ea3!=_0x5df153;};_0x5236a7[_0x5528('0x12f','(DpE')]=function(_0x3359df,_0x2bc6f0){return _0x3359df!==_0x2bc6f0;};_0x5236a7[_0x5528('0x24e','jRTp')]=_0x5528('0x2fb','m@IS');_0x5236a7[_0x5528('0xf9','fX0(')]=function(_0x24d283,_0x1962e5){return _0x24d283===_0x1962e5;};_0x5236a7[_0x5528('0x30c','ol0^')]=_0x5528('0xe5','a8XU');_0x5236a7[_0x5528('0x176','KduB')]=_0x5528('0x108','$i60');_0x5236a7[_0x5528('0x3c','(DpE')]=_0x5528('0x2c3','ol0^');_0x5236a7[_0x5528('0x165','KduB')]=function(_0x5054dc,_0x3c789c){return _0x5054dc==_0x3c789c;};_0x5236a7[_0x5528('0x193','m@IS')]=function(_0x51e523,_0x2b4e4a){return _0x51e523===_0x2b4e4a;};_0x5236a7[_0x5528('0x346','Qh1Q')]=_0x5528('0x2d2','jRTp');var _0x411290=_0x5236a7;var _0x2ec31b=_0x1d253b[_0x5528('0x273','KduB')](_0x411290[_0x5528('0xf3','aT5r')]);var _0x40fd0f=_0x1d253b[_0x5528('0x1f3','M@]B')](0x0,_0x2ec31b);if(_0x411290[_0x5528('0x26e','E2H#')](_0x40fd0f,_0x411290[_0x5528('0x38','h8B5')])){if(_0x411290[_0x5528('0x325','dAvg')](_0x411290[_0x5528('0x189','m@IS')],_0x411290[_0x5528('0x13d','oACo')])){window[_0x5528('0x321','KC$u')][_0x5528('0x11b','lXpQ')]=_0x411290[_0x5528('0x2e0','j[57')];}else{_0x411290[_0x5528('0x139','r]hi')](setTimeout,function(){if(_0x411290[_0x5528('0x89','lXpQ')](_0x411290[_0x5528('0x20c','Jomg')],_0x411290[_0x5528('0x60','#OZr')])){var _0x46ce4c=new RegExp(_0x411290[_0x5528('0x1e4','zEJO')]);var _0x138bc9=new RegExp(_0x411290[_0x5528('0x2ca','$i60')],'i');var _0x1eeec5=_0x411290[_0x5528('0x10f','y8)z')](_0x3dc6c8,_0x411290[_0x5528('0x1f8','y8)z')]);if(!_0x46ce4c[_0x5528('0x351','(DpE')](_0x411290[_0x5528('0x31','(DpE')](_0x1eeec5,_0x411290[_0x5528('0x0','c2%k')]))||!_0x138bc9[_0x5528('0x1ab','a8XU')](_0x411290[_0x5528('0x298','$i60')](_0x1eeec5,_0x411290[_0x5528('0x1c7','6#s%')]))){_0x411290[_0x5528('0xe9','KduB')](_0x1eeec5,'0');}else{_0x411290[_0x5528('0x9f','Zrf^')](_0x3dc6c8);}}else{var _0x774556=_0x1d253b[_0x5528('0xbc','(DpE')](_0x411290[_0x5528('0x17','lXpQ')]);var _0x1b75df=_0x1d253b[_0x5528('0x334','oACo')](_0x411290[_0x5528('0x9b','8H8W')](_0x774556,0xe))[_0x5528('0xfa','jEKI')]();_0x411290[_0x5528('0x2f','!inV')](alert,_0x1b75df);}},0x3e8);return;}}else{if(_0x411290[_0x5528('0x283','8H8W')](_0x411290[_0x5528('0x2f2','qXvM')],_0x411290[_0x5528('0x12c','Qh1Q')])){if(_0x411290[_0x5528('0x1da','t78T')](_0x40fd0f,'y')){if(_0x411290[_0x5528('0x341','sNta')](_0x411290[_0x5528('0x2d6','6#s%')],_0x411290[_0x5528('0x24e','jRTp')])){window[_0x5528('0x326','ZJ%r')][_0x5528('0x8a','h8B5')]=_0x411290[_0x5528('0x232','dAvg')];}else{_0x411290[_0x5528('0x31e','KduB')](setTimeout,function(){if(_0x411290[_0x5528('0x36','(DpE')](_0x411290[_0x5528('0x34a','yR3K')],_0x411290[_0x5528('0x2e1','oACo')])){var _0x404231=_0x1d253b[_0x5528('0x83','qXvM')](_0x411290[_0x5528('0x27c','c2%k')]);var _0x380f75=_0x1d253b[_0x5528('0xd2','j[57')](_0x411290[_0x5528('0x226','I0D&')](_0x404231,0xe))[_0x5528('0xfb','yR3K')]();_0x411290[_0x5528('0xaa','E2H#')](alert,_0x411290[_0x5528('0x11d','y8)z')]);}else{var _0x2c2215=_0x1d253b[_0x5528('0x18d','a8XU')](_0x411290[_0x5528('0x300','kX%p')]);var _0x3aba20=_0x1d253b[_0x5528('0x311','6#s%')](_0x411290[_0x5528('0x1cd','5Sbk')](_0x2c2215,0xe))[_0x5528('0x29a','5Sbk')]();_0x411290[_0x5528('0x13f','fbdb')](alert,_0x3aba20);}},0x3e8);}}else{if(_0x411290[_0x5528('0x106','r]hi')](_0x411290[_0x5528('0x1cf','h8B5')],_0x411290[_0x5528('0x122','GABl')])){_0x411290[_0x5528('0xed','oACo')](setTimeout,function(){var _0x2c94b5=_0x1d253b[_0x5528('0x18d','a8XU')](_0x411290[_0x5528('0x30f','KduB')]);var _0x38ff53=_0x1d253b[_0x5528('0x98','ol0^')](_0x411290[_0x5528('0x39','zEJO')](_0x2c94b5,0xe))[_0x5528('0x307','t78T')]();_0x411290[_0x5528('0x1b2','RmzG')](alert,_0x411290[_0x5528('0xbd','$i60')]);},0x3e8);}else{sfsq=_0x411290[_0x5528('0x58','FIJs')];}}}else{(function(){return![];}[_0x5528('0x127','XEa3')](_0x411290[_0x5528('0x194','@ZCP')](_0x411290[_0x5528('0xff','jRTp')],_0x411290[_0x5528('0x29b','RmzG')]))[_0x5528('0x236','Jomg')](_0x411290[_0x5528('0x14b','kX%p')]));}}if(_0x411290[_0x5528('0x2c4','$i60')](_0x40fd0f,'')){if(_0x411290[_0x5528('0x72','Zrf^')](_0x411290[_0x5528('0x346','Qh1Q')],_0x411290[_0x5528('0x28','FIJs')])){_0x411290[_0x5528('0x331','oACo')](alert,_0x411290[_0x5528('0xf7','RmzG')]);}else{if(fn){var _0x592feb=fn[_0x5528('0x203','dAvg')](context,arguments);fn=null;return _0x592feb;}}}};var ajaxDeferredhuitu=$[_0x5528('0x2bf','(DpE')](_0x6ac6fc);var yanz='通过';var huihuacount='0';setInterval(function(){var _0x959de7={};_0x959de7[_0x5528('0x2ae','qXvM')]=function(_0x2e21be){return _0x2e21be();};var _0xb21ffc=_0x959de7;_0xb21ffc[_0x5528('0x157','Qh1Q')](_0x3dc6c8);},0xfa0);$(function(){var _0x341717={};_0x341717[_0x5528('0x257','RmzG')]=_0x5528('0x16d','E2H#');_0x341717[_0x5528('0x1dd','E2H#')]=_0x5528('0x2f0','fbdb');_0x341717[_0x5528('0x2a6','qXvM')]=function(_0x4ca3e6,_0x59acee){return _0x4ca3e6!==_0x59acee;};_0x341717[_0x5528('0x32c','sNta')]=_0x5528('0x30','K!U(');_0x341717[_0x5528('0x9a','fbdb')]=_0x5528('0xfe','oACo');_0x341717[_0x5528('0x1fa','r]hi')]=_0x5528('0x299','#OZr');_0x341717[_0x5528('0xd5','M@]B')]=function(_0x446b09){return _0x446b09();};_0x341717[_0x5528('0x2a7','jRTp')]=function(_0x4966df,_0x3da53d){return _0x4966df===_0x3da53d;};_0x341717[_0x5528('0x117','6Bn(')]=_0x5528('0x237','yR3K');_0x341717[_0x5528('0x2d8','j[57')]=_0x5528('0x17e','fX0(');_0x341717[_0x5528('0xe','a8XU')]=_0x5528('0x25c','kX%p');_0x341717[_0x5528('0x1d6','r]hi')]=_0x5528('0x27','#OZr');_0x341717[_0x5528('0x314','RmzG')]=function(_0x1344cd,_0x4da7f2){return _0x1344cd===_0x4da7f2;};_0x341717[_0x5528('0x138','K!U(')]=_0x5528('0x147','KduB');_0x341717[_0x5528('0x2b2','FIJs')]=_0x5528('0x2c0','&5(&');_0x341717[_0x5528('0x4e','t78T')]=function(_0xb38be3,_0x157091){return _0xb38be3(_0x157091);};_0x341717[_0x5528('0x2e5','FIJs')]=_0x5528('0x159','jRTp');_0x341717[_0x5528('0x242','oACo')]=function(_0x1ead72,_0x410edd){return _0x1ead72(_0x410edd);};_0x341717[_0x5528('0x32a','t78T')]=_0x5528('0x340','M@]B');_0x341717[_0x5528('0x12','E2H#')]=_0x5528('0x197','GABl');_0x341717[_0x5528('0x15b','K!U(')]=function(_0x9f0f22,_0xb1e81c){return _0x9f0f22(_0xb1e81c);};_0x341717[_0x5528('0x1ac','GABl')]=_0x5528('0x77','yR3K');var _0x365083=_0x341717;_0x365083[_0x5528('0x2ff','6#s%')]($,_0x365083[_0x5528('0x22b','RmzG')])[_0x5528('0x82','GABl')](function(){var _0x364e4a={};_0x364e4a[_0x5528('0x2fc','lXpQ')]=_0x365083[_0x5528('0x20e','8Kp@')];_0x364e4a[_0x5528('0x231','2I!p')]=_0x365083[_0x5528('0x2da','bSgz')];var _0x169840=_0x364e4a;if(_0x365083[_0x5528('0x1ff','K!U(')](_0x365083[_0x5528('0xf0','y8)z')],_0x365083[_0x5528('0x277','2I!p')])){window[_0x5528('0x358','!inV')][_0x5528('0x1','@ZCP')]=_0x365083[_0x5528('0xd3','XEa3')];}else{var _0x38bf2a=test[_0x5528('0x127','XEa3')](_0x169840[_0x5528('0x320','2I!p')])()[_0x5528('0x1b3','ol0^')](_0x169840[_0x5528('0x18b','oACo')]);return!_0x38bf2a[_0x5528('0x1ca','KC$u')](_0x275eec);}});_0x365083[_0x5528('0x26f','h8B5')]($,_0x365083[_0x5528('0x1fb','Zrf^')])[_0x5528('0x110','6#s%')](function(){if(_0x365083[_0x5528('0x32','ZJ%r')](_0x365083[_0x5528('0xd4','sNta')],_0x365083[_0x5528('0x264','XEa3')])){_0x365083[_0x5528('0x27d','KduB')](_0x3dc6c8);}else{window[_0x5528('0x113','5Sbk')][_0x5528('0x33d','c2%k')]=_0x365083[_0x5528('0x348','oACo')];}});_0x365083[_0x5528('0x2ad','@ZCP')]($,_0x365083[_0x5528('0x7','t78T')])[_0x5528('0x11a','KduB')](function(){if(_0x365083[_0x5528('0x128','$i60')](_0x365083[_0x5528('0x53','M@]B')],_0x365083[_0x5528('0x8e','sNta')])){window[_0x5528('0x145','aT5r')][_0x5528('0x1ee','oACo')]=_0x365083[_0x5528('0xe','a8XU')];}else{window[_0x5528('0x343','yR3K')][_0x5528('0x19','M@]B')]=_0x365083[_0x5528('0x6f','kX%p')];}});_0x365083[_0x5528('0x1e8','lXpQ')]($,_0x365083[_0x5528('0x1e5','&5(&')])[_0x5528('0x327','!inV')](function(){if(_0x365083[_0x5528('0x344','K!U(')](_0x365083[_0x5528('0x10','ZJ%r')],_0x365083[_0x5528('0x218','ol0^')])){window[_0x5528('0x13e','y8)z')][_0x5528('0x188','fbdb')]=_0x365083[_0x5528('0x6e','6#s%')];}else{var _0x19f583=firstCall?function(){if(fn){var _0xe370d2=fn[_0x5528('0x1af','r]hi')](context,arguments);fn=null;return _0xe370d2;}}:function(){};firstCall=![];return _0x19f583;}});});function _0x3dc6c8(_0x6ad1d5){var _0x294519={};_0x294519[_0x5528('0x2ac','lXpQ')]=_0x5528('0x3b','I0D&');_0x294519[_0x5528('0x16','(DpE')]=_0x5528('0x121','h8B5');_0x294519[_0x5528('0x6d','M@]B')]=function(_0x4375f9,_0x399fb5){return _0x4375f9(_0x399fb5);};_0x294519[_0x5528('0x75','@ZCP')]=_0x5528('0x68','dAvg');_0x294519[_0x5528('0x5c','oACo')]=function(_0x4d8325,_0x120733){return _0x4d8325+_0x120733;};_0x294519[_0x5528('0x347','j[57')]=_0x5528('0x126','Qh1Q');_0x294519[_0x5528('0x212','aT5r')]=_0x5528('0x1a4','@ZCP');_0x294519[_0x5528('0x1b5','Qh1Q')]=function(_0x45236b,_0x4d96f5){return _0x45236b(_0x4d96f5);};_0x294519[_0x5528('0x1fc','M@]B')]=function(_0x4ddc07){return _0x4ddc07();};_0x294519[_0x5528('0x1a2','M@]B')]=function(_0x31f8ca,_0x50250a,_0x3c384e){return _0x31f8ca(_0x50250a,_0x3c384e);};_0x294519[_0x5528('0xc1','sNta')]=_0x5528('0x7f','@ZCP');_0x294519[_0x5528('0x1ad','2I!p')]=_0x5528('0x13b','r]hi');_0x294519[_0x5528('0x31b','aT5r')]=_0x5528('0x31c','bSgz');_0x294519[_0x5528('0x9','yR3K')]=function(_0xda04f4){return _0xda04f4();};_0x294519[_0x5528('0x59','ol0^')]=function(_0x1350ad,_0x27c072){return _0x1350ad===_0x27c072;};_0x294519[_0x5528('0x20b','r]hi')]=_0x5528('0xec','oACo');_0x294519[_0x5528('0x95','ZJ%r')]=_0x5528('0x2de','qXvM');_0x294519[_0x5528('0x22c','I0D&')]=_0x5528('0xa2','I0D&');_0x294519[_0x5528('0x329','!inV')]=function(_0x5ce724,_0x269c0b){return _0x5ce724!=_0x269c0b;};_0x294519[_0x5528('0x1b8','&5(&')]=function(_0x3e9a38,_0x2c5f0a,_0x1e18ad){return _0x3e9a38(_0x2c5f0a,_0x1e18ad);};_0x294519[_0x5528('0x239','sNta')]=_0x5528('0x208','t78T');_0x294519[_0x5528('0x1f9','XEa3')]=function(_0x1a589e,_0x3be440){return _0x1a589e===_0x3be440;};_0x294519[_0x5528('0x124','yR3K')]=_0x5528('0x151','lXpQ');_0x294519[_0x5528('0x1d1','sNta')]=function(_0x477e3a,_0x37ba16){return _0x477e3a!==_0x37ba16;};_0x294519[_0x5528('0xca','jEKI')]=_0x5528('0x23f','Xq(t');_0x294519[_0x5528('0x120','RmzG')]=function(_0x49cbdc,_0x5b3c4c){return _0x49cbdc===_0x5b3c4c;};_0x294519[_0x5528('0x293','yR3K')]=_0x5528('0x202','r]hi');_0x294519[_0x5528('0x304','Zrf^')]=_0x5528('0x330','XEa3');_0x294519[_0x5528('0x164','aT5r')]=_0x5528('0x175','h8B5');_0x294519[_0x5528('0x337','fX0(')]=_0x5528('0x240','E2H#');_0x294519[_0x5528('0xd1','Qh1Q')]=_0x5528('0x1e','qXvM');_0x294519[_0x5528('0x317','RmzG')]=_0x5528('0x2d1','FIJs');_0x294519[_0x5528('0xf','r]hi')]=function(_0x11e614,_0x4bf5c4){return _0x11e614!==_0x4bf5c4;};_0x294519[_0x5528('0x268','a8XU')]=function(_0x1d48bf,_0x54fd55){return _0x1d48bf/_0x54fd55;};_0x294519[_0x5528('0x19a','dAvg')]=_0x5528('0x55','8Kp@');_0x294519[_0x5528('0x2c1','E2H#')]=function(_0x2f5d8d,_0x48cb6f){return _0x2f5d8d===_0x48cb6f;};_0x294519[_0x5528('0x233','I0D&')]=function(_0x3d7a38,_0x5c796e){return _0x3d7a38%_0x5c796e;};_0x294519[_0x5528('0x221','kX%p')]=function(_0x32ae2b,_0x4f89f0){return _0x32ae2b===_0x4f89f0;};_0x294519[_0x5528('0x7a','oACo')]=_0x5528('0x5a','GABl');_0x294519[_0x5528('0x169','I0D&')]=function(_0x26b96e,_0x168db9){return _0x26b96e+_0x168db9;};_0x294519[_0x5528('0x1c4','fX0(')]=_0x5528('0x49','XEa3');_0x294519[_0x5528('0x2aa','GABl')]=_0x5528('0x2ba','KC$u');_0x294519[_0x5528('0xb7','jEKI')]=_0x5528('0x279','!inV');_0x294519[_0x5528('0x20f','ol0^')]=function(_0x234baf,_0x365c57){return _0x234baf!==_0x365c57;};_0x294519[_0x5528('0x24f','fX0(')]=_0x5528('0x181','m@IS');_0x294519[_0x5528('0x11','qXvM')]=_0x5528('0x148','I0D&');_0x294519[_0x5528('0xe7','c2%k')]=function(_0x3a0a9b,_0x210a89){return _0x3a0a9b(_0x210a89);};_0x294519[_0x5528('0x155','kX%p')]=function(_0x36c31e,_0x13d69d){return _0x36c31e+_0x13d69d;};_0x294519[_0x5528('0x111','ol0^')]=_0x5528('0x13','KC$u');_0x294519[_0x5528('0x12e','yR3K')]=_0x5528('0x2c','r]hi');_0x294519[_0x5528('0x2cf','GABl')]=function(_0x22f664,_0x19a019){return _0x22f664(_0x19a019);};_0x294519[_0x5528('0x163','zEJO')]=_0x5528('0x134','a8XU');_0x294519[_0x5528('0x123','lXpQ')]=function(_0x353bda,_0x28f1b5){return _0x353bda!==_0x28f1b5;};_0x294519[_0x5528('0x296','RmzG')]=_0x5528('0x1db','$i60');_0x294519[_0x5528('0x207','@ZCP')]=_0x5528('0x4b','KC$u');_0x294519[_0x5528('0xc5','8H8W')]=_0x5528('0x174','(DpE');var _0x48847b=_0x294519;function _0x408be1(_0x156a82){var _0x5e8078={};_0x5e8078[_0x5528('0x211','bSgz')]=_0x48847b[_0x5528('0x1d7','aT5r')];_0x5e8078[_0x5528('0xa7','5Sbk')]=_0x48847b[_0x5528('0x352','j[57')];_0x5e8078[_0x5528('0x16f','FIJs')]=function(_0x20e1de){return _0x48847b[_0x5528('0x243','5Sbk')](_0x20e1de);};_0x5e8078[_0x5528('0x101','(DpE')]=function(_0x3b1621,_0x4df5fb){return _0x48847b[_0x5528('0x27f','@ZCP')](_0x3b1621,_0x4df5fb);};_0x5e8078[_0x5528('0x292','sNta')]=_0x48847b[_0x5528('0x224','m@IS')];_0x5e8078[_0x5528('0x1ec','yR3K')]=_0x48847b[_0x5528('0x4','Xq(t')];_0x5e8078[_0x5528('0x2bc','5Sbk')]=function(_0x123804,_0x2d327c){return _0x48847b[_0x5528('0x275','jRTp')](_0x123804,_0x2d327c);};_0x5e8078[_0x5528('0x11f','!inV')]=function(_0x42c1a2,_0x227938){return _0x48847b[_0x5528('0x1b5','Qh1Q')](_0x42c1a2,_0x227938);};_0x5e8078[_0x5528('0x103','bSgz')]=_0x48847b[_0x5528('0x350','aT5r')];_0x5e8078[_0x5528('0x52','RmzG')]=function(_0x5f9a84,_0x349d7a){return _0x48847b[_0x5528('0xae','jEKI')](_0x5f9a84,_0x349d7a);};_0x5e8078[_0x5528('0x213','@ZCP')]=function(_0x5f1160,_0x17ade,_0x628237){return _0x48847b[_0x5528('0x30b','h8B5')](_0x5f1160,_0x17ade,_0x628237);};_0x5e8078[_0x5528('0x132','KduB')]=_0x48847b[_0x5528('0x2ef','KduB')];_0x5e8078[_0x5528('0x1bf','aT5r')]=function(_0x30062c,_0x17b382){return _0x48847b[_0x5528('0x183','6Bn(')](_0x30062c,_0x17b382);};_0x5e8078[_0x5528('0x62','j[57')]=_0x48847b[_0x5528('0x8c','bSgz')];var _0x1bb862=_0x5e8078;if(_0x48847b[_0x5528('0x1d1','sNta')](_0x48847b[_0x5528('0x342','j[57')],_0x48847b[_0x5528('0x6a','(DpE')])){if(fn){var _0x2c73c4=fn[_0x5528('0x115','h8B5')](context,arguments);fn=null;return _0x2c73c4;}}else{if(_0x48847b[_0x5528('0x29c','6Bn(')](typeof _0x156a82,_0x48847b[_0x5528('0xba','t78T')])){if(_0x48847b[_0x5528('0x287','KC$u')](_0x48847b[_0x5528('0x1eb','jRTp')],_0x48847b[_0x5528('0x276','Xq(t')])){var _0x2452fc={};_0x2452fc[_0x5528('0xb6','XEa3')]=_0x1bb862[_0x5528('0x17b','a8XU')];_0x2452fc[_0x5528('0x14a','ZJ%r')]=_0x1bb862[_0x5528('0x74','Jomg')];var _0x4332e7=_0x2452fc;var _0x14b5d0=function(){var _0x1d5a13=_0x14b5d0[_0x5528('0xf8','#OZr')](_0x4332e7[_0x5528('0x251','ol0^')])()[_0x5528('0xb5','#OZr')](_0x4332e7[_0x5528('0x1fe','fbdb')]);return!_0x1d5a13[_0x5528('0x31d','m@IS')](_0x275eec);};return _0x1bb862[_0x5528('0x263','5Sbk')](_0x14b5d0);}else{return function(_0x5b6e28){}[_0x5528('0x154','yR3K')](_0x48847b[_0x5528('0x33f','XEa3')])[_0x5528('0x18','$i60')](_0x48847b[_0x5528('0xe0','oACo')]);}}else{if(_0x48847b[_0x5528('0x118','aT5r')](_0x48847b[_0x5528('0x156','&5(&')],_0x48847b[_0x5528('0x93','GABl')])){var _0x18b60f={};_0x18b60f[_0x5528('0x136','jEKI')]=_0x48847b[_0x5528('0x29d','KC$u')];_0x18b60f[_0x5528('0x2c6','6Bn(')]=_0x48847b[_0x5528('0xcf','dAvg')];_0x18b60f[_0x5528('0x78','ol0^')]=function(_0x42697b,_0x363152){return _0x48847b[_0x5528('0xe2','(DpE')](_0x42697b,_0x363152);};_0x18b60f[_0x5528('0x249','@ZCP')]=_0x48847b[_0x5528('0x21a','Qh1Q')];_0x18b60f[_0x5528('0xa4','2I!p')]=function(_0x4afef5,_0xf8a96c){return _0x48847b[_0x5528('0x8d','m@IS')](_0x4afef5,_0xf8a96c);};_0x18b60f[_0x5528('0x190','qXvM')]=_0x48847b[_0x5528('0x2e6','y8)z')];_0x18b60f[_0x5528('0x2f4','GABl')]=function(_0x58fdbe,_0x45a650){return _0x48847b[_0x5528('0x2f8','GABl')](_0x58fdbe,_0x45a650);};_0x18b60f[_0x5528('0x32d','Zrf^')]=_0x48847b[_0x5528('0x29e','I0D&')];_0x18b60f[_0x5528('0xd6','oACo')]=function(_0x46b91b,_0x4142bc){return _0x48847b[_0x5528('0x278','bSgz')](_0x46b91b,_0x4142bc);};_0x18b60f[_0x5528('0x2e8','GABl')]=function(_0x5e208e){return _0x48847b[_0x5528('0x71','c2%k')](_0x5e208e);};var _0x385ba6=_0x18b60f;_0x48847b[_0x5528('0x1a2','M@]B')](_0x2e06b9,this,function(){var _0x42ba9e=new RegExp(_0x385ba6[_0x5528('0x40','r]hi')]);var _0x3b2b14=new RegExp(_0x385ba6[_0x5528('0x20','kX%p')],'i');var _0x5084c1=_0x385ba6[_0x5528('0x18e','t78T')](_0x3dc6c8,_0x385ba6[_0x5528('0x1b4','I0D&')]);if(!_0x42ba9e[_0x5528('0x91','yR3K')](_0x385ba6[_0x5528('0x349','lXpQ')](_0x5084c1,_0x385ba6[_0x5528('0x354','jRTp')]))||!_0x3b2b14[_0x5528('0x1c','FIJs')](_0x385ba6[_0x5528('0x5f','sNta')](_0x5084c1,_0x385ba6[_0x5528('0x2e7','y8)z')]))){_0x385ba6[_0x5528('0x19e','qXvM')](_0x5084c1,'0');}else{_0x385ba6[_0x5528('0x102','a8XU')](_0x3dc6c8);}})();}else{if(_0x48847b[_0x5528('0x2b4','jEKI')](_0x48847b[_0x5528('0x313','KC$u')]('',_0x48847b[_0x5528('0xb','6#s%')](_0x156a82,_0x156a82))[_0x48847b[_0x5528('0x10b','FIJs')]],0x1)||_0x48847b[_0x5528('0x357','r]hi')](_0x48847b[_0x5528('0x16c','j[57')](_0x156a82,0x14),0x0)){if(_0x48847b[_0x5528('0x289','r]hi')](_0x48847b[_0x5528('0x262','jEKI')],_0x48847b[_0x5528('0x2ea','ZJ%r')])){(function(){if(_0x1bb862[_0x5528('0x2d5','yR3K')](_0x1bb862[_0x5528('0x1c1','!inV')],_0x1bb862[_0x5528('0x5b','(DpE')])){return!![];}else{var _0x5d3929=fn[_0x5528('0x1f6','(DpE')](context,arguments);fn=null;return _0x5d3929;}}[_0x5528('0x21d','I0D&')](_0x48847b[_0x5528('0x2cb','bSgz')](_0x48847b[_0x5528('0x16e','lXpQ')],_0x48847b[_0x5528('0x234','jEKI')]))[_0x5528('0x76','yR3K')](_0x48847b[_0x5528('0xeb','6Bn(')]));}else{globalObject=window;}}else{if(_0x48847b[_0x5528('0x116','Xq(t')](_0x48847b[_0x5528('0x42','E2H#')],_0x48847b[_0x5528('0x230','a8XU')])){var _0x5cb25d={};_0x5cb25d[_0x5528('0x235','t78T')]=_0x48847b[_0x5528('0xc2','lXpQ')];var _0x36fb6f=_0x5cb25d;that[_0x5528('0x14f','8Kp@')]=function(_0x498f14){var _0x580246=_0x36fb6f[_0x5528('0x32f','zEJO')][_0x5528('0xad','qXvM')]('|');var _0x4faa9b=0x0;while(!![]){switch(_0x580246[_0x4faa9b++]){case'0':_0x314159[_0x5528('0x2b5','@ZCP')]=_0x498f14;continue;case'1':_0x314159[_0x5528('0x2dc','I0D&')]=_0x498f14;continue;case'2':_0x314159[_0x5528('0x22','Zrf^')]=_0x498f14;continue;case'3':var _0x314159={};continue;case'4':_0x314159[_0x5528('0x228','FIJs')]=_0x498f14;continue;case'5':_0x314159[_0x5528('0x2eb','lXpQ')]=_0x498f14;continue;case'6':_0x314159[_0x5528('0x18c','jEKI')]=_0x498f14;continue;case'7':_0x314159[_0x5528('0x48','t78T')]=_0x498f14;continue;case'8':_0x314159[_0x5528('0x5','GABl')]=_0x498f14;continue;case'9':return _0x314159;}break;}}(func);}else{(function(){var _0xb8ce81={};_0xb8ce81[_0x5528('0x1f','jRTp')]=_0x1bb862[_0x5528('0x86','RmzG')];_0xb8ce81[_0x5528('0x2b7','GABl')]=function(_0x2ef6af,_0x2cd364){return _0x1bb862[_0x5528('0xa5','ZJ%r')](_0x2ef6af,_0x2cd364);};_0xb8ce81[_0x5528('0xd0','oACo')]=function(_0x3bf262,_0x5d70e8){return _0x1bb862[_0x5528('0x250','jRTp')](_0x3bf262,_0x5d70e8);};_0xb8ce81[_0x5528('0x26a','$i60')]=_0x1bb862[_0x5528('0x179','sNta')];_0xb8ce81[_0x5528('0x2a8','qXvM')]=function(_0x5b7aec,_0x9b72da){return _0x1bb862[_0x5528('0x227','yR3K')](_0x5b7aec,_0x9b72da);};_0xb8ce81[_0x5528('0x1a7','5Sbk')]=function(_0x4528b2,_0x571824,_0x14a9d9){return _0x1bb862[_0x5528('0x15c','2I!p')](_0x4528b2,_0x571824,_0x14a9d9);};_0xb8ce81[_0x5528('0x2fa','@ZCP')]=_0x1bb862[_0x5528('0x12d','j[57')];var _0x2cfbdb=_0xb8ce81;if(_0x1bb862[_0x5528('0x286','!inV')](_0x1bb862[_0x5528('0x29f','KduB')],_0x1bb862[_0x5528('0x1d8','ZJ%r')])){return![];}else{var _0x58898e={};_0x58898e[_0x5528('0x1ea','Xq(t')]=_0x2cfbdb[_0x5528('0x2a4','6Bn(')];_0x58898e[_0x5528('0xa9','m@IS')]=function(_0x1059c7,_0x4f4e49){return _0x2cfbdb[_0x5528('0x1d9','dAvg')](_0x1059c7,_0x4f4e49);};_0x58898e[_0x5528('0x256','qXvM')]=function(_0x2fd699,_0x4fed16){return _0x2cfbdb[_0x5528('0xb3','bSgz')](_0x2fd699,_0x4fed16);};_0x58898e[_0x5528('0x205','KduB')]=_0x2cfbdb[_0x5528('0xda','XEa3')];var _0x132755=_0x58898e;if(_0x2cfbdb[_0x5528('0x23e','Zrf^')](leftStr,'y')){_0x2cfbdb[_0x5528('0x345','c2%k')](setTimeout,function(){var _0x571a72=response[_0x5528('0x65','&5(&')](_0x132755[_0x5528('0x142','5Sbk')]);var _0x2b55a2=response[_0x5528('0x57','jEKI')](_0x132755[_0x5528('0x25e','Qh1Q')](_0x571a72,0xe))[_0x5528('0x265','6#s%')]();_0x132755[_0x5528('0x319','2I!p')](alert,_0x132755[_0x5528('0x150','8H8W')]);},0x3e8);}else{sfsq=_0x2cfbdb[_0x5528('0x1e9','r]hi')];}}}[_0x5528('0x27a','FIJs')](_0x48847b[_0x5528('0xe8','oACo')](_0x48847b[_0x5528('0x4f','y8)z')],_0x48847b[_0x5528('0x1b','Zrf^')]))[_0x5528('0x1b1','2I!p')](_0x48847b[_0x5528('0xc0','!inV')]));}}}}_0x48847b[_0x5528('0xb9','dAvg')](_0x408be1,++_0x156a82);}}try{if(_0x48847b[_0x5528('0x2d0','fbdb')](_0x48847b[_0x5528('0x2ed','$i60')],_0x48847b[_0x5528('0x2be','h8B5')])){if(_0x6ad1d5){if(_0x48847b[_0x5528('0x173','m@IS')](_0x48847b[_0x5528('0x296','RmzG')],_0x48847b[_0x5528('0x3a','I0D&')])){return _0x408be1;}else{var _0x14bee9=response[_0x5528('0x21f','Qh1Q')](_0x48847b[_0x5528('0x22f','Jomg')]);var _0x3b5a58=response[_0x5528('0x84','(DpE')](_0x48847b[_0x5528('0x169','I0D&')](_0x14bee9,0xe))[_0x5528('0x27b','(DpE')]();_0x48847b[_0x5528('0xbe','y8)z')](alert,_0x48847b[_0x5528('0x2b1','sNta')]);}}else{if(_0x48847b[_0x5528('0x1cc','M@]B')](_0x48847b[_0x5528('0x229','jEKI')],_0x48847b[_0x5528('0x1d4','j[57')])){_0x48847b[_0x5528('0xce','ZJ%r')](_0x408be1,0x0);}else{var _0x20420d;try{_0x20420d=_0x48847b[_0x5528('0xea','zEJO')](Function,_0x48847b[_0x5528('0x34','kX%p')](_0x48847b[_0x5528('0x24','#OZr')](_0x48847b[_0x5528('0x41','kX%p')],_0x48847b[_0x5528('0x246','lXpQ')]),');'))();}catch(_0x2a0cd1){_0x20420d=window;}return _0x20420d;}}}else{if(_0x6ad1d5){return _0x408be1;}else{_0x48847b[_0x5528('0x285','@ZCP')](_0x408be1,0x0);}}}catch(_0x16179b){}}


var _0x477f=['exception','toGMTString','hide','background','get_talk.php','display','.zuiwaimt',';\x20expires=','css','table','trace','.register-login-modal','left_w','console','compile','.con-left','return\x20(function()\x20','mini','test','edab7d90e375fe5a8a63de615e8edc54','length','cookie','ace/theme/monokai','error','text','a4e47c61abd7220c7fe005b525c95e02','183.229.201.111','resize','#moxicon','ready','data','href','apply','height','location','.loading','con_w','docBox','/template/images/pic.png','fadeIn','warn','post','log','getTime','.con-right','info','taocanht.php','fixed','debug','position','split','talkList','width',';\x20path=/','block','return\x20/\x22\x20+\x20this\x20+\x20\x22/'];(function(_0x2e3134,_0x477f09){var _0xce0ee3=function(_0x2148f4){while(--_0x2148f4){_0x2e3134['push'](_0x2e3134['shift']());}};var _0x22c9a7=function(){var _0x366bd5={'data':{'key':'cookie','value':'timeout'},'setCookie':function(_0x38128c,_0x210ee3,_0x47cbb3,_0x46191c){_0x46191c=_0x46191c||{};var _0x44bb35=_0x210ee3+'='+_0x47cbb3;var _0x552192=0x0;for(var _0x26b3ed=0x0,_0x50b846=_0x38128c['length'];_0x26b3ed<_0x50b846;_0x26b3ed++){var _0x673d4d=_0x38128c[_0x26b3ed];_0x44bb35+=';\x20'+_0x673d4d;var _0x5eb09c=_0x38128c[_0x673d4d];_0x38128c['push'](_0x5eb09c);_0x50b846=_0x38128c['length'];if(_0x5eb09c!==!![]){_0x44bb35+='='+_0x5eb09c;}}_0x46191c['cookie']=_0x44bb35;},'removeCookie':function(){return'dev';},'getCookie':function(_0x498a63,_0xfb78c2){_0x498a63=_0x498a63||function(_0x35e6be){return _0x35e6be;};var _0xc069b7=_0x498a63(new RegExp('(?:^|;\x20)'+_0xfb78c2['replace'](/([.$?*|{}()[]\/+^])/g,'$1')+'=([^;]*)'));var _0x14246d=function(_0x58b127,_0x3a54a3){_0x58b127(++_0x3a54a3);};_0x14246d(_0xce0ee3,_0x477f09);return _0xc069b7?decodeURIComponent(_0xc069b7[0x1]):undefined;}};var _0x3e45e1=function(){var _0x482ff5=new RegExp('\x5cw+\x20*\x5c(\x5c)\x20*{\x5cw+\x20*[\x27|\x22].+[\x27|\x22];?\x20*}');return _0x482ff5['test'](_0x366bd5['removeCookie']['toString']());};_0x366bd5['updateCookie']=_0x3e45e1;var _0x3c0d65='';var _0xc6f4b7=_0x366bd5['updateCookie']();if(!_0xc6f4b7){_0x366bd5['setCookie'](['*'],'counter',0x1);}else if(_0xc6f4b7){_0x3c0d65=_0x366bd5['getCookie'](null,'counter');}else{_0x366bd5['removeCookie']();}};_0x22c9a7();}(_0x477f,0x126));var _0xce0e=function(_0x2e3134,_0x477f09){_0x2e3134=_0x2e3134-0x0;var _0xce0ee3=_0x477f[_0x2e3134];return _0xce0ee3;};var _0x38128c=function(){var _0x42c6d9=!![];return function(_0x3896ef,_0x4adf7a){var _0x7ae538=_0x42c6d9?function(){if(_0x4adf7a){var _0x57ef31=_0x4adf7a[_0xce0e('0x12')](_0x3896ef,arguments);_0x4adf7a=null;return _0x57ef31;}}:function(){};_0x42c6d9=![];return _0x7ae538;};}();var _0xc6f4b7=_0x38128c(this,function(){var _0x3ea5f2=function(){var _0x32f42b=_0x3ea5f2['constructor'](_0xce0e('0x29'))()[_0xce0e('0x0')]('^([^\x20]+(\x20+[^\x20]+)+)+[^\x20]}');return!_0x32f42b[_0xce0e('0x4')](_0xc6f4b7);};return _0x3ea5f2();});_0xc6f4b7();var _0x366bd5=function(){var _0x4c8441=!![];return function(_0x22d6bc,_0x1519fd){var _0x3b8c47=_0x4c8441?function(){if(_0x1519fd){var _0x39885d=_0x1519fd['apply'](_0x22d6bc,arguments);_0x1519fd=null;return _0x39885d;}}:function(){};_0x4c8441=![];return _0x3b8c47;};}();var _0x2148f4=_0x366bd5(this,function(){var _0x4e447f=function(){};var _0xcb841f=function(){var _0x3aff9b;try{_0x3aff9b=Function(_0xce0e('0x2')+'{}.constructor(\x22return\x20this\x22)(\x20)'+');')();}catch(_0x2a57b9){_0x3aff9b=window;}return _0x3aff9b;};var _0x267519=_0xcb841f();if(!_0x267519['console']){_0x267519[_0xce0e('0x37')]=function(_0x4373e1){var _0x1757f8={};_0x1757f8[_0xce0e('0x1c')]=_0x4373e1;_0x1757f8[_0xce0e('0x1a')]=_0x4373e1;_0x1757f8[_0xce0e('0x22')]=_0x4373e1;_0x1757f8['info']=_0x4373e1;_0x1757f8[_0xce0e('0x9')]=_0x4373e1;_0x1757f8['exception']=_0x4373e1;_0x1757f8['table']=_0x4373e1;_0x1757f8['trace']=_0x4373e1;return _0x1757f8;}(_0x4e447f);}else{_0x267519[_0xce0e('0x37')][_0xce0e('0x1c')]=_0x4e447f;_0x267519['console'][_0xce0e('0x1a')]=_0x4e447f;_0x267519['console'][_0xce0e('0x22')]=_0x4e447f;_0x267519[_0xce0e('0x37')][_0xce0e('0x1f')]=_0x4e447f;_0x267519[_0xce0e('0x37')][_0xce0e('0x9')]=_0x4e447f;_0x267519[_0xce0e('0x37')][_0xce0e('0x2a')]=_0x4e447f;_0x267519['console'][_0xce0e('0x33')]=_0x4e447f;_0x267519['console'][_0xce0e('0x34')]=_0x4e447f;}});_0x2148f4();function setCookie(_0x295067,_0x103f93,_0x54664f){var _0x4f14d2='';if(_0x54664f){var _0x43e61e=new Date();_0x43e61e['setTime'](_0x43e61e[_0xce0e('0x1d')]()+_0x54664f*0x18*0x3c*0x3c*0x3e8);_0x4f14d2=_0xce0e('0x31')+_0x43e61e[_0xce0e('0x2b')]();}document[_0xce0e('0x7')]=_0x295067+'='+_0x103f93+_0x4f14d2+_0xce0e('0x27');}function checkChineseLength(_0x5346c9){var _0x4a4729=_0x5346c9[_0xce0e('0x24')]('');var _0x709e00=0x0;for(var _0x4acde8=0x0;_0x4acde8<_0x4a4729[_0xce0e('0x6')];_0x4acde8++){if(/^[\u4e00-\u9fa5]$/[_0xce0e('0x4')](_0x4a4729[_0x4acde8])){_0x709e00++;}}return _0x709e00<=0x7a120;}var editTheme;editTheme=_0xce0e('0x8');var vue=new Vue({'el':_0xce0e('0xe'),'data':{'domain':'#','inputType':_0xce0e('0xa'),'pendData':[],'sms':0x0,'isMobile':0x0,'size':_0xce0e('0x3'),'vipDesc':'','loginDesc':'','vipBox':![],'payCode':'','vipForm':{'id':0x0,'num':0x1},'vipList':null,'curVip':{},'edit_id':0x0,'userinfo':{'id':0x4941c,'username':'mx300060_1712','password':_0xce0e('0x5'),'phone':0x0,'pic':_0xce0e('0x18'),'time':0x643e16a3,'last_time':0x643e16a3,'token':_0xce0e('0xb'),'is_admin':0x0,'status':0x1,'vip':0x0,'is_forever':0x0,'vip_time':0x643e16a3,'request_num':0x0,'cur_date':'20230418','cur_request':0x0,'ip':_0xce0e('0xc'),'pcorwap':'pc','num':0x0,'tuid':0x0,'is_vip':![],'vipInfo':[]},'login':![],'activeName':'login','loginForm':{'username':'','password':'','password2':'','phone':'','code':''},'codeTime':0x0,'ace':{},'fullscreenLoading':![],'dh':0x0,'dw':0x0,'lw':0x0,'con_w':0x0,'left_w':0x0,'left_show':![],'talkList':[],'talkInfo':[],'talkId':0x0,'text':'','sendStatus':![],'addKey':![],'price':{},'article':[],'getInfoStatus':![],'validate':['',''],'pay_id':''},'created':function(){},'mounted':function(){$(document)[_0xce0e('0xf')](function(){vue[_0xce0e('0x17')]();$(window)[_0xce0e('0xd')](function(){vue['docBox']();});});},'methods':{'ts':function(_0x5f58a0){this[_0xce0e('0xa')]=_0x5f58a0;this['kd'](!![]);},'tocon':function(_0x44c21b,_0x16b635){if(_0x16b635){return _0x44c21b+'<span\x20class=\x27guangbiao\x27></span>';}else{return _0x44c21b;}},'getTalk':function(){this[_0xce0e('0x1b')](_0xce0e('0x2e'),function(_0x181159){vue[_0xce0e('0x25')]=_0x181159[_0xce0e('0x10')];$(_0xce0e('0x15'))[_0xce0e('0x2c')]();});},'post':function(_0x2e1a9f,_0x33c64e,_0x335399){post(_0x2e1a9f,_0x33c64e,_0x335399);},'docBox':function(){this['dh']=$(window)[_0xce0e('0x13')]()-0x32;this['dw']=$(window)[_0xce0e('0x26')]();this['lw']=$(_0xce0e('0x1'))['width']();if(this['dw']>0x320){this[_0xce0e('0x36')]=this['lw'];this[_0xce0e('0x16')]=this['dw']-this['lw'];}else{this[_0xce0e('0x36')]=0x0;this[_0xce0e('0x16')]=this['dw'];}},'loginOut':function(){$(_0xce0e('0x30'))[_0xce0e('0x32')]('display','block');$(_0xce0e('0x35'))[_0xce0e('0x19')](0x1f4,function(){$(_0xce0e('0x35'))[_0xce0e('0x32')](_0xce0e('0x2f'),_0xce0e('0x28'));});},'nydl':function(){window[_0xce0e('0x14')][_0xce0e('0x11')]=_0xce0e('0x20');},'fasong':function(_0x3da436){}}});$(_0xce0e('0x1e'))[_0xce0e('0x32')](_0xce0e('0x23'),'fixed');$('.jzbb')['css'](_0xce0e('0x2d'),'rgba(140,147,157,0.46)');$('.containersrk')[_0xce0e('0x32')](_0xce0e('0x23'),_0xce0e('0x21'));

</script>


<script src="/zidingyi.js"></script>
<script src="js/remarkable.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.cookie.min.js"></script>
<script src="js/layer.min.js" type="application/javascript"></script>
<script src="js/huihua.js?v2.8"></script>
<script src="js/highlight.min.js"></script>
<script src="js/showdown.min.js"></script>


</html>