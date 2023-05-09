
<?php

require('./lib/init.php');


$dqyh = $_COOKIE['dengluname'];

$letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$rand_letters = substr(str_shuffle($letters), 0, 10);

$sql = "select * from chat_yonghu where shangjiyaoqingma = '$rand_letters'";
$sfczzz = $mysql->getAll($sql);

while(count($sfczzz) == 1){
    $letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $rand_letters = substr(str_shuffle($letters), 0, 10);
    $sql = "select * from chat_yonghu where shangjiyaoqingma = '$rand_letters'";
    $sfczzz = $mysql->getAll($sql);
}



$current_url = "http://" . $_SERVER['HTTP_HOST'] . '/?code=';

//判断是否有跳板域名
$sql = "select tiaobanurl from chat_admin where id = 1";
if($mysql->getOne($sql)){
    $tbym = $mysql->getOne($sql);
    $current_url = "http://" . $tbym . '/?code=';
}


$sql = "select shangjiyaoqingma from chat_yonghu where yhmc = '$dqyh'";
if(!($mysql->getOne($sql))){
    $sql = "update chat_yonghu set shangjiyaoqingma='$rand_letters' where yhmc = '$dqyh'";
    $mysql->query($sql);
    $current_url = $current_url . $rand_letters;
    $yqm = $rand_letters;
}else{
    $yqm = $mysql->getOne($sql);
    $current_url = $current_url . $yqm;
}











// print_r($current_url);
// print_r($rand_letters);


?>




<!DOCTYPE html>
<html>
<head>
    <title>邀请</title>
    
    
    




	<style cssr-id="n-base-close">
			.n-base-close { display: flex; align-items: center; justify-content: center;
			cursor: pointer; background-color: transparent; color: var(--n-close-icon-color);
			border-radius: var(--n-close-border-radius); height: var(--n-close-size);
			width: var(--n-close-size); font-size: var(--n-close-icon-size); outline:
			none; border: none; position: relative; padding: 0; } .n-base-close.n-base-close--absolute
			{ height: var(--n-close-icon-size); width: var(--n-close-icon-size); }
			.n-base-close::before { content: ""; position: absolute; width: var(--n-close-size);
			height: var(--n-close-size); left: 50%; top: 50%; transform: translateY(-50%)
			translateX(-50%); transition: inherit; border-radius: inherit; } .n-base-close:not(.n-base-close--disabled):hover
			{ color: var(--n-close-icon-color-hover); } .n-base-close:not(.n-base-close--disabled):hover::before
			{ background-color: var(--n-close-color-hover); } .n-base-close:not(.n-base-close--disabled):focus::before
			{ background-color: var(--n-close-color-hover); } .n-base-close:not(.n-base-close--disabled):active
			{ color: var(--n-close-icon-color-pressed); } .n-base-close:not(.n-base-close--disabled):active::before
			{ background-color: var(--n-close-color-pressed); } .n-base-close.n-base-close--disabled
			{ cursor: not-allowed; color: var(--n-close-icon-color-disabled); background-color:
			transparent; } .n-base-close.n-base-close--round::before { border-radius:
			50%; }
		</style>
		<style cssr-id="n-base-loading">
			@keyframes loading-container-rotate { to { -webkit-transform: rotate(360deg);
			transform: rotate(360deg); } } @keyframes loading-layer-rotate { 12.5%
			{ -webkit-transform: rotate(135deg); transform: rotate(135deg); } 25% {
			-webkit-transform: rotate(270deg); transform: rotate(270deg); } 37.5% {
			-webkit-transform: rotate(405deg); transform: rotate(405deg); } 50% { -webkit-transform:
			rotate(540deg); transform: rotate(540deg); } 62.5% { -webkit-transform:
			rotate(675deg); transform: rotate(675deg); } 75% { -webkit-transform: rotate(810deg);
			transform: rotate(810deg); } 87.5% { -webkit-transform: rotate(945deg);
			transform: rotate(945deg); } 100% { -webkit-transform: rotate(1080deg);
			transform: rotate(1080deg); } } @keyframes loading-left-spin { from { -webkit-transform:
			rotate(265deg); transform: rotate(265deg); } 50% { -webkit-transform: rotate(130deg);
			transform: rotate(130deg); } to { -webkit-transform: rotate(265deg); transform:
			rotate(265deg); } } @keyframes loading-right-spin { from { -webkit-transform:
			rotate(-265deg); transform: rotate(-265deg); } 50% { -webkit-transform:
			rotate(-130deg); transform: rotate(-130deg); } to { -webkit-transform:
			rotate(-265deg); transform: rotate(-265deg); } } .n-base-loading { position:
			relative; line-height: 0; width: 1em; height: 1em; } .n-base-loading .n-base-loading__transition-wrapper
			{ position: absolute; width: 100%; height: 100%; } .n-base-loading .n-base-loading__transition-wrapper.icon-switch-transition-enter-from,
			.n-base-loading .n-base-loading__transition-wrapper.icon-switch-transition-leave-to
			{ transform: scale(0.75); left: 0; top: 0; opacity: 0; } .n-base-loading
			.n-base-loading__transition-wrapper.icon-switch-transition-enter-to, .n-base-loading
			.n-base-loading__transition-wrapper.icon-switch-transition-leave-from {
			transform: scale(1) ; left: 0; top: 0; opacity: 1; } .n-base-loading .n-base-loading__transition-wrapper.icon-switch-transition-enter-active,
			.n-base-loading .n-base-loading__transition-wrapper.icon-switch-transition-leave-active
			{ transform-origin: center; position: absolute; left: 0; top: 0; transition:
			all .3s cubic-bezier(.4, 0, .2, 1) !important; } .n-base-loading .n-base-loading__container
			{ display: inline-flex; position: relative; direction: ltr; line-height:
			0; animation: loading-container-rotate 1568.2352941176ms linear infinite;
			font-size: 0; letter-spacing: 0; white-space: nowrap; opacity: 1; width:
			100%; height: 100%; } .n-base-loading .n-base-loading__container .n-base-loading__svg
			{ stroke: var(--n-text-color); fill: transparent; position: absolute; height:
			100%; overflow: hidden; } .n-base-loading .n-base-loading__container .n-base-loading__container-layer
			{ position: absolute; width: 100%; height: 100%; animation: loading-layer-rotate
			5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both; } .n-base-loading .n-base-loading__container
			.n-base-loading__container-layer .n-base-loading__container-layer-left
			{ display: inline-flex; position: relative; width: 50%; height: 100%; overflow:
			hidden; } .n-base-loading .n-base-loading__container .n-base-loading__container-layer
			.n-base-loading__container-layer-left .n-base-loading__svg { animation:
			loading-left-spin 1333ms cubic-bezier(0.4, 0, 0.2, 1) infinite both; width:
			200%; } .n-base-loading .n-base-loading__container .n-base-loading__container-layer
			.n-base-loading__container-layer-patch { position: absolute; top: 0; left:
			47.5%; box-sizing: border-box; width: 5%; height: 100%; overflow: hidden;
			} .n-base-loading .n-base-loading__container .n-base-loading__container-layer
			.n-base-loading__container-layer-patch .n-base-loading__svg { left: -900%;
			width: 2000%; transform: rotate(180deg); } .n-base-loading .n-base-loading__container
			.n-base-loading__container-layer .n-base-loading__container-layer-right
			{ display: inline-flex; position: relative; width: 50%; height: 100%; overflow:
			hidden; } .n-base-loading .n-base-loading__container .n-base-loading__container-layer
			.n-base-loading__container-layer-right .n-base-loading__svg { animation:
			loading-right-spin 1333ms cubic-bezier(0.4, 0, 0.2, 1) infinite both; left:
			-100%; width: 200%; } .n-base-loading .n-base-loading__placeholder { position:
			absolute; left: 50%; top: 50%; transform: translateX(-50%) translateY(-50%);
			} .n-base-loading .n-base-loading__placeholder.icon-switch-transition-enter-from,
			.n-base-loading .n-base-loading__placeholder.icon-switch-transition-leave-to
			{ transform: translateX(-50%) translateY(-50%) scale(0.75); left: 50%;
			top: 50%; opacity: 0; } .n-base-loading .n-base-loading__placeholder.icon-switch-transition-enter-to,
			.n-base-loading .n-base-loading__placeholder.icon-switch-transition-leave-from
			{ transform: scale(1) translateX(-50%) translateY(-50%); left: 50%; top:
			50%; opacity: 1; } .n-base-loading .n-base-loading__placeholder.icon-switch-transition-enter-active,
			.n-base-loading .n-base-loading__placeholder.icon-switch-transition-leave-active
			{ transform-origin: center; position: absolute; left: 50%; top: 50%; transition:
			all .3s cubic-bezier(.4, 0, .2, 1) !important; }
		</style>
		<style cssr-id="n-base-icon">
			.n-base-icon { height: 1em; width: 1em; line-height: 1em; text-align:
			center; display: inline-block; position: relative; fill: currentColor;
			transform: translateZ(0); } .n-base-icon svg { height: 1em; width: 1em;
			}
		</style>
		<style cssr-id="n-empty">
			.n-empty { display: flex; flex-direction: column; align-items: center;
			font-size: var(--n-font-size); } .n-empty .n-empty__icon { width: var(--n-icon-size);
			height: var(--n-icon-size); font-size: var(--n-icon-size); line-height:
			var(--n-icon-size); color: var(--n-icon-color); transition: color .3s var(--n-bezier);
			} .n-empty .n-empty__icon + .n-empty__description { margin-top: 8px; }
			.n-empty .n-empty__description { transition: color .3s var(--n-bezier);
			color: var(--n-text-color); } .n-empty .n-empty__extra { text-align: center;
			transition: color .3s var(--n-bezier); margin-top: 12px; color: var(--n-extra-text-color);
			}
		</style>
		<style cssr-id="n-data-table">
			.n-data-table { width: 100%; font-size: var(--n-font-size); display: flex;
			flex-direction: column; position: relative; --n-merged-th-color: var(--n-th-color);
			--n-merged-td-color: var(--n-td-color); --n-merged-border-color: var(--n-border-color);
			--n-merged-th-color-hover: var(--n-th-color-hover); --n-merged-td-color-hover:
			var(--n-td-color-hover); --n-merged-td-color-striped: var(--n-td-color-striped);
			} .n-data-table .n-data-table-wrapper { flex-grow: 1; display: flex; flex-direction:
			column; } .n-data-table.n-data-table--flex-height > .n-data-table-wrapper
			> .n-data-table-base-table { display: flex; flex-direction: column; flex-grow:
			1; } .n-data-table.n-data-table--flex-height > .n-data-table-wrapper >
			.n-data-table-base-table > .n-data-table-base-table-body { flex-basis:
			0; } .n-data-table.n-data-table--flex-height > .n-data-table-wrapper >
			.n-data-table-base-table > .n-data-table-base-table-body:last-child { flex-grow:
			1; } .n-data-table > .n-data-table-loading-wrapper { color: var(--n-loading-color);
			font-size: var(--n-loading-size); position: absolute; left: 50%; top: 50%;
			transform: translateX(-50%) translateY(-50%); transition: color .3s var(--n-bezier);
			display: flex; align-items: center; justify-content: center; } .n-data-table
			> .n-data-table-loading-wrapper.fade-in-scale-up-transition-leave-active
			{ transform-origin: inherit; transition: opacity .2s cubic-bezier(.4, 0,
			1, 1), transform .2s cubic-bezier(.4, 0, 1, 1) ; } .n-data-table > .n-data-table-loading-wrapper.fade-in-scale-up-transition-enter-active
			{ transform-origin: inherit; transition: opacity .2s cubic-bezier(0, 0,
			.2, 1), transform .2s cubic-bezier(0, 0, .2, 1) ; } .n-data-table > .n-data-table-loading-wrapper.fade-in-scale-up-transition-enter-from,
			.n-data-table > .n-data-table-loading-wrapper.fade-in-scale-up-transition-leave-to
			{ opacity: 0; transform: translateX(-50%) translateY(-50%) scale(.9); }
			.n-data-table > .n-data-table-loading-wrapper.fade-in-scale-up-transition-leave-from,
			.n-data-table > .n-data-table-loading-wrapper.fade-in-scale-up-transition-enter-to
			{ opacity: 1; transform: translateX(-50%) translateY(-50%) scale(1); }
			.n-data-table .n-data-table-expand-placeholder { margin-right: 8px; display:
			inline-block; width: 16px; height: 1px; } .n-data-table .n-data-table-indent
			{ display: inline-block; height: 1px; } .n-data-table .n-data-table-expand-trigger
			{ display: inline-flex; margin-right: 8px; cursor: pointer; font-size:
			16px; vertical-align: -0.2em; position: relative; width: 16px; height:
			16px; color: var(--n-td-text-color); transition: color .3s var(--n-bezier);
			} .n-data-table .n-data-table-expand-trigger.n-data-table-expand-trigger--expanded
			.n-icon { transform: rotate(90deg); } .n-data-table .n-data-table-expand-trigger.n-data-table-expand-trigger--expanded
			.n-icon.icon-switch-transition-enter-from, .n-data-table .n-data-table-expand-trigger.n-data-table-expand-trigger--expanded
			.n-icon.icon-switch-transition-leave-to { transform: rotate(90deg) scale(0.75);
			left: 0; top: 0; opacity: 0; } .n-data-table .n-data-table-expand-trigger.n-data-table-expand-trigger--expanded
			.n-icon.icon-switch-transition-enter-to, .n-data-table .n-data-table-expand-trigger.n-data-table-expand-trigger--expanded
			.n-icon.icon-switch-transition-leave-from { transform: scale(1) rotate(90deg);
			left: 0; top: 0; opacity: 1; } .n-data-table .n-data-table-expand-trigger.n-data-table-expand-trigger--expanded
			.n-icon.icon-switch-transition-enter-active, .n-data-table .n-data-table-expand-trigger.n-data-table-expand-trigger--expanded
			.n-icon.icon-switch-transition-leave-active { transform-origin: center;
			position: absolute; left: 0; top: 0; transition: all .3s cubic-bezier(.4,
			0, .2, 1) !important; } .n-data-table .n-data-table-expand-trigger.n-data-table-expand-trigger--expanded
			.n-base-icon { transform: rotate(90deg); } .n-data-table .n-data-table-expand-trigger.n-data-table-expand-trigger--expanded
			.n-base-icon.icon-switch-transition-enter-from, .n-data-table .n-data-table-expand-trigger.n-data-table-expand-trigger--expanded
			.n-base-icon.icon-switch-transition-leave-to { transform: rotate(90deg)
			scale(0.75); left: 0; top: 0; opacity: 0; } .n-data-table .n-data-table-expand-trigger.n-data-table-expand-trigger--expanded
			.n-base-icon.icon-switch-transition-enter-to, .n-data-table .n-data-table-expand-trigger.n-data-table-expand-trigger--expanded
			.n-base-icon.icon-switch-transition-leave-from { transform: scale(1) rotate(90deg);
			left: 0; top: 0; opacity: 1; } .n-data-table .n-data-table-expand-trigger.n-data-table-expand-trigger--expanded
			.n-base-icon.icon-switch-transition-enter-active, .n-data-table .n-data-table-expand-trigger.n-data-table-expand-trigger--expanded
			.n-base-icon.icon-switch-transition-leave-active { transform-origin: center;
			position: absolute; left: 0; top: 0; transition: all .3s cubic-bezier(.4,
			0, .2, 1) !important; } .n-data-table .n-data-table-expand-trigger .n-base-loading
			{ color: var(--n-loading-color); transition: color .3s var(--n-bezier);
			position: absolute; left: 0; right: 0; top: 0; bottom: 0; } .n-data-table
			.n-data-table-expand-trigger .n-base-loading.icon-switch-transition-enter-from,
			.n-data-table .n-data-table-expand-trigger .n-base-loading.icon-switch-transition-leave-to
			{ transform: scale(0.75); left: 0; top: 0; opacity: 0; } .n-data-table
			.n-data-table-expand-trigger .n-base-loading.icon-switch-transition-enter-to,
			.n-data-table .n-data-table-expand-trigger .n-base-loading.icon-switch-transition-leave-from
			{ transform: scale(1) ; left: 0; top: 0; opacity: 1; } .n-data-table .n-data-table-expand-trigger
			.n-base-loading.icon-switch-transition-enter-active, .n-data-table .n-data-table-expand-trigger
			.n-base-loading.icon-switch-transition-leave-active { transform-origin:
			center; position: absolute; left: 0; top: 0; transition: all .3s cubic-bezier(.4,
			0, .2, 1) !important; } .n-data-table .n-data-table-expand-trigger .n-icon
			{ position: absolute; left: 0; right: 0; top: 0; bottom: 0; } .n-data-table
			.n-data-table-expand-trigger .n-icon.icon-switch-transition-enter-from,
			.n-data-table .n-data-table-expand-trigger .n-icon.icon-switch-transition-leave-to
			{ transform: scale(0.75); left: 0; top: 0; opacity: 0; } .n-data-table
			.n-data-table-expand-trigger .n-icon.icon-switch-transition-enter-to, .n-data-table
			.n-data-table-expand-trigger .n-icon.icon-switch-transition-leave-from
			{ transform: scale(1) ; left: 0; top: 0; opacity: 1; } .n-data-table .n-data-table-expand-trigger
			.n-icon.icon-switch-transition-enter-active, .n-data-table .n-data-table-expand-trigger
			.n-icon.icon-switch-transition-leave-active { transform-origin: center;
			position: absolute; left: 0; top: 0; transition: all .3s cubic-bezier(.4,
			0, .2, 1) !important; } .n-data-table .n-data-table-expand-trigger .n-base-icon
			{ position: absolute; left: 0; right: 0; top: 0; bottom: 0; } .n-data-table
			.n-data-table-expand-trigger .n-base-icon.icon-switch-transition-enter-from,
			.n-data-table .n-data-table-expand-trigger .n-base-icon.icon-switch-transition-leave-to
			{ transform: scale(0.75); left: 0; top: 0; opacity: 0; } .n-data-table
			.n-data-table-expand-trigger .n-base-icon.icon-switch-transition-enter-to,
			.n-data-table .n-data-table-expand-trigger .n-base-icon.icon-switch-transition-leave-from
			{ transform: scale(1) ; left: 0; top: 0; opacity: 1; } .n-data-table .n-data-table-expand-trigger
			.n-base-icon.icon-switch-transition-enter-active, .n-data-table .n-data-table-expand-trigger
			.n-base-icon.icon-switch-transition-leave-active { transform-origin: center;
			position: absolute; left: 0; top: 0; transition: all .3s cubic-bezier(.4,
			0, .2, 1) !important; } .n-data-table .n-data-table-thead { transition:
			background-color .3s var(--n-bezier); background-color: var(--n-merged-th-color);
			} .n-data-table .n-data-table-tr { box-sizing: border-box; background-clip:
			padding-box; transition: background-color .3s var(--n-bezier); } .n-data-table
			.n-data-table-tr .n-data-table-expand { position: sticky; left: 0; overflow:
			hidden; margin: calc(var(--n-th-padding) * -1); padding: var(--n-th-padding);
			box-sizing: border-box; } .n-data-table .n-data-table-tr.n-data-table-tr--striped
			{ background-color: var(--n-merged-td-color-striped); } .n-data-table .n-data-table-tr.n-data-table-tr--striped
			.n-data-table-td { background-color: var(--n-merged-td-color-striped);
			} .n-data-table .n-data-table-tr:not(.n-data-table-tr--summary):hover {
			background-color: var(--n-merged-td-color-hover); } .n-data-table .n-data-table-tr:not(.n-data-table-tr--summary):hover
			> .n-data-table-td { background-color: var(--n-merged-td-color-hover);
			} .n-data-table .n-data-table-th { padding: var(--n-th-padding); position:
			relative; text-align: start; box-sizing: border-box; background-color:
			var(--n-merged-th-color); border-color: var(--n-merged-border-color); border-bottom:
			1px solid var(--n-merged-border-color); color: var(--n-th-text-color);
			transition: border-color .3s var(--n-bezier), color .3s var(--n-bezier),
			background-color .3s var(--n-bezier); font-weight: var(--n-th-font-weight);
			} .n-data-table .n-data-table-th.n-data-table-th--filterable { padding-right:
			36px; } .n-data-table .n-data-table-th.n-data-table-th--filterable.n-data-table-th--sortable
			{ padding-right: calc(var(--n-th-padding) + 36px); } .n-data-table .n-data-table-th.n-data-table-th--fixed-left
			{ left: 0; position: sticky; z-index: 2; } .n-data-table .n-data-table-th.n-data-table-th--fixed-left::after
			{ pointer-events: none; content: ""; width: 36px; display: inline-block;
			position: absolute; top: 0; bottom: -1px; transition: box-shadow .2s var(--n-bezier);
			right: -36px; } .n-data-table .n-data-table-th.n-data-table-th--fixed-right
			{ right: 0; position: sticky; z-index: 1; } .n-data-table .n-data-table-th.n-data-table-th--fixed-right::before
			{ pointer-events: none; content: ""; width: 36px; display: inline-block;
			position: absolute; top: 0; bottom: -1px; transition: box-shadow .2s var(--n-bezier);
			left: -36px; } .n-data-table .n-data-table-th.n-data-table-th--selection
			{ padding: 0; text-align: center; line-height: 0; z-index: 3; } .n-data-table
			.n-data-table-th .n-data-table-th__title-wrapper { display: flex; align-items:
			center; flex-wrap: nowrap; max-width: 100%; } .n-data-table .n-data-table-th
			.n-data-table-th__title-wrapper .n-data-table-th__title { flex: 1; min-width:
			0; } .n-data-table .n-data-table-th .n-data-table-th__ellipsis { display:
			inline-block; vertical-align: bottom; text-overflow: ellipsis; overflow:
			hidden; white-space: nowrap; max-width: 100%; } .n-data-table .n-data-table-th.n-data-table-th--hover
			{ background-color: var(--n-merged-th-color-hover); } .n-data-table .n-data-table-th.n-data-table-th--sortable
			{ cursor: pointer; } .n-data-table .n-data-table-th.n-data-table-th--sortable
			.n-data-table-th__ellipsis { max-width: calc(100% - 18px); } .n-data-table
			.n-data-table-th.n-data-table-th--sortable:hover { background-color: var(--n-merged-th-color-hover);
			} .n-data-table .n-data-table-th .n-data-table-sorter { height: var(--n-sorter-size);
			width: var(--n-sorter-size); margin-left: 4px; position: relative; display:
			inline-flex; align-items: center; justify-content: center; vertical-align:
			-0.2em; color: var(--n-th-icon-color); transition: color .3s var(--n-bezier);
			} .n-data-table .n-data-table-th .n-data-table-sorter .n-base-icon { transition:
			transform .3s var(--n-bezier) } .n-data-table .n-data-table-th .n-data-table-sorter.n-data-table-sorter--desc
			.n-base-icon { transform: rotate(0deg); } .n-data-table .n-data-table-th
			.n-data-table-sorter.n-data-table-sorter--asc .n-base-icon { transform:
			rotate(-180deg); } .n-data-table .n-data-table-th .n-data-table-sorter.n-data-table-sorter--asc,
			.n-data-table .n-data-table-th .n-data-table-sorter.n-data-table-sorter--desc
			{ color: var(--n-th-icon-color-active); } .n-data-table .n-data-table-th
			.n-data-table-resize-button { width: var(--n-resizable-container-size);
			position: absolute; top: 0; right: calc(var(--n-resizable-container-size)
			/ 2); bottom: 0; cursor: col-resize; user-select: none; } .n-data-table
			.n-data-table-th .n-data-table-resize-button::after { width: var(--n-resizable-size);
			height: 50%; position: absolute; top: 50%; left: calc(var(--n-resizable-container-size)
			/ 2); bottom: 0; background-color: var(--n-merged-border-color); transform:
			translateY(-50%); transition: background-color .3s var(--n-bezier); z-index:
			1; content: ''; } .n-data-table .n-data-table-th .n-data-table-resize-button.n-data-table-resize-button--active::after
			{ background-color: var(--n-th-icon-color-active); } .n-data-table .n-data-table-th
			.n-data-table-resize-button:hover::after { background-color: var(--n-th-icon-color-active);
			} .n-data-table .n-data-table-th .n-data-table-filter { position: absolute;
			z-index: auto; right: 0; width: 36px; top: 0; bottom: 0; cursor: pointer;
			display: flex; justify-content: center; align-items: center; transition:
			background-color .3s var(--n-bezier), color .3s var(--n-bezier); font-size:
			var(--n-filter-size); color: var(--n-th-icon-color); } .n-data-table .n-data-table-th
			.n-data-table-filter:hover { background-color: var(--n-th-button-color-hover);
			} .n-data-table .n-data-table-th .n-data-table-filter.n-data-table-filter--show
			{ background-color: var(--n-th-button-color-hover); } .n-data-table .n-data-table-th
			.n-data-table-filter.n-data-table-filter--active { background-color: var(--n-th-button-color-hover);
			color: var(--n-th-icon-color-active); } .n-data-table .n-data-table-td
			{ padding: var(--n-td-padding); text-align: start; box-sizing: border-box;
			border: none; background-color: var(--n-merged-td-color); color: var(--n-td-text-color);
			border-bottom: 1px solid var(--n-merged-border-color); transition: box-shadow
			.3s var(--n-bezier), background-color .3s var(--n-bezier), border-color
			.3s var(--n-bezier), color .3s var(--n-bezier); } .n-data-table .n-data-table-td.n-data-table-td--expand
			.n-data-table-expand-trigger { margin-right: 0; } .n-data-table .n-data-table-td.n-data-table-td--last-row
			{ border-bottom: 0 solid var(--n-merged-border-color); } .n-data-table
			.n-data-table-td.n-data-table-td--last-row::after { bottom: 0 !important;
			} .n-data-table .n-data-table-td.n-data-table-td--last-row::before { bottom:
			0 !important; } .n-data-table .n-data-table-td.n-data-table-td--summary
			{ background-color: var(--n-merged-th-color); } .n-data-table .n-data-table-td.n-data-table-td--hover
			{ background-color: var(--n-merged-td-color-hover); } .n-data-table .n-data-table-td
			.n-data-table-td__ellipsis { display: inline-block; text-overflow: ellipsis;
			overflow: hidden; white-space: nowrap; max-width: 100%; vertical-align:
			bottom; } .n-data-table .n-data-table-td.n-data-table-td--selection, .n-data-table
			.n-data-table-td.n-data-table-td--expand { text-align: center; padding:
			0; line-height: 0; } .n-data-table .n-data-table-td.n-data-table-td--fixed-left
			{ left: 0; position: sticky; z-index: 2; } .n-data-table .n-data-table-td.n-data-table-td--fixed-left::after
			{ pointer-events: none; content: ""; width: 36px; display: inline-block;
			position: absolute; top: 0; bottom: -1px; transition: box-shadow .2s var(--n-bezier);
			right: -36px; } .n-data-table .n-data-table-td.n-data-table-td--fixed-right
			{ right: 0; position: sticky; z-index: 1; } .n-data-table .n-data-table-td.n-data-table-td--fixed-right::before
			{ pointer-events: none; content: ""; width: 36px; display: inline-block;
			position: absolute; top: 0; bottom: -1px; transition: box-shadow .2s var(--n-bezier);
			left: -36px; } .n-data-table .n-data-table-empty { box-sizing: border-box;
			padding: var(--n-empty-padding); flex-grow: 1; flex-shrink: 0; opacity:
			1; display: flex; align-items: center; justify-content: center; transition:
			opacity .3s var(--n-bezier); } .n-data-table .n-data-table-empty.n-data-table-empty--hide
			{ opacity: 0; } .n-data-table .n-data-table__pagination { margin: var(--n-pagination-margin);
			display: flex; justify-content: flex-end; } .n-data-table .n-data-table-wrapper
			{ position: relative; opacity: 1; transition: opacity .3s var(--n-bezier),
			border-color .3s var(--n-bezier); border-top-left-radius: var(--n-border-radius);
			border-top-right-radius: var(--n-border-radius); line-height: var(--n-line-height);
			} .n-data-table.n-data-table--loading .n-data-table-wrapper { opacity:
			var(--n-opacity-loading); pointer-events: none; } .n-data-table.n-data-table--single-column
			.n-data-table-td { border-bottom: 0 solid var(--n-merged-border-color);
			} .n-data-table.n-data-table--single-column .n-data-table-td::after, .n-data-table.n-data-table--single-column
			.n-data-table-td::before { bottom: 0 !important; } .n-data-table:not(.n-data-table--single-line)
			.n-data-table-th { border-right: 1px solid var(--n-merged-border-color);
			} .n-data-table:not(.n-data-table--single-line) .n-data-table-th.n-data-table-th--last
			{ border-right: 0 solid var(--n-merged-border-color); } .n-data-table:not(.n-data-table--single-line)
			.n-data-table-td { border-right: 1px solid var(--n-merged-border-color);
			} .n-data-table:not(.n-data-table--single-line) .n-data-table-td.n-data-table-td--last-col
			{ border-right: 0 solid var(--n-merged-border-color); } .n-data-table.n-data-table--bordered
			.n-data-table-wrapper { border: 1px solid var(--n-merged-border-color);
			border-bottom-left-radius: var(--n-border-radius); border-bottom-right-radius:
			var(--n-border-radius); overflow: hidden; } .n-data-table .n-data-table-base-table.n-data-table-base-table--transition-disabled
			.n-data-table-th::after, .n-data-table .n-data-table-base-table.n-data-table-base-table--transition-disabled
			.n-data-table-th::before { transition: none; } .n-data-table .n-data-table-base-table.n-data-table-base-table--transition-disabled
			.n-data-table-td::after, .n-data-table .n-data-table-base-table.n-data-table-base-table--transition-disabled
			.n-data-table-td::before { transition: none; } .n-data-table.n-data-table--bottom-bordered
			.n-data-table-td.n-data-table-td--last-row { border-bottom: 1px solid var(--n-merged-border-color);
			} .n-data-table .n-data-table-table { font-variant-numeric: tabular-nums;
			width: 100%; word-break: break-word; transition: background-color .3s var(--n-bezier);
			border-collapse: separate; border-spacing: 0; background-color: var(--n-merged-td-color);
			} .n-data-table .n-data-table-base-table-header { border-top-left-radius:
			calc(var(--n-border-radius) - 1px); border-top-right-radius: calc(var(--n-border-radius)
			- 1px); z-index: 3; overflow: scroll; flex-shrink: 0; transition: border-color
			.3s var(--n-bezier); scrollbar-width: none; } .n-data-table .n-data-table-base-table-header::-webkit-scrollbar
			{ width: 0; height: 0; } .n-data-table .n-data-table-check-extra { transition:
			color .3s var(--n-bezier); color: var(--n-th-icon-color); position: absolute;
			font-size: 14px; right: -4px; top: 50%; transform: translateY(-50%); z-index:
			1; } .n-data-table-filter-menu .n-scrollbar { max-height: 240px; } .n-data-table-filter-menu
			.n-data-table-filter-menu__group { display: flex; flex-direction: column;
			padding: 12px 12px 0 12px; } .n-data-table-filter-menu .n-data-table-filter-menu__group
			.n-checkbox { margin-bottom: 12px; margin-right: 0; } .n-data-table-filter-menu
			.n-data-table-filter-menu__group .n-radio { margin-bottom: 12px; margin-right:
			0; } .n-data-table-filter-menu .n-data-table-filter-menu__action { padding:
			var(--n-action-padding); display: flex; flex-wrap: nowrap; justify-content:
			space-evenly; border-top: 1px solid var(--n-action-divider-color); } .n-data-table-filter-menu
			.n-data-table-filter-menu__action .n-button:not(:last-child) { margin:
			var(--n-action-button-margin); } .n-data-table-filter-menu .n-data-table-filter-menu__action
			.n-button:last-child { margin-right: 0; } .n-data-table-filter-menu .n-divider
			{ margin: 0 !important; } .n-modal .n-data-table, .n-drawer .n-data-table
			{ --n-merged-th-color: var(--n-th-color-modal); --n-merged-td-color: var(--n-td-color-modal);
			--n-merged-border-color: var(--n-border-color-modal); --n-merged-th-color-hover:
			var(--n-th-color-hover-modal); --n-merged-td-color-hover: var(--n-td-color-hover-modal);
			--n-merged-td-color-striped: var(--n-td-color-striped-modal); } .n-popover
			.n-data-table { --n-merged-th-color: var(--n-th-color-popover); --n-merged-td-color:
			var(--n-td-color-popover); --n-merged-border-color: var(--n-border-color-popover);
			--n-merged-th-color-hover: var(--n-th-color-hover-popover); --n-merged-td-color-hover:
			var(--n-td-color-hover-popover); --n-merged-td-color-striped: var(--n-td-color-striped-popover);
			}
		</style>
		<style cssr-id="n-statistic">
			.n-statistic .n-statistic__label { font-weight: var(--n-label-font-weight);
			transition: .3s color var(--n-bezier); font-size: var(--n-label-font-size);
			color: var(--n-label-text-color); } .n-statistic .n-statistic-value { margin-top:
			4px; font-weight: var(--n-value-font-weight); } .n-statistic .n-statistic-value
			.n-statistic-value__prefix { margin: 0 4px 0 0; font-size: var(--n-value-font-size);
			transition: .3s color var(--n-bezier); color: var(--n-value-prefix-text-color);
			} .n-statistic .n-statistic-value .n-statistic-value__prefix .n-icon {
			vertical-align: -0.125em; } .n-statistic .n-statistic-value .n-statistic-value__content
			{ font-size: var(--n-value-font-size); transition: .3s color var(--n-bezier);
			color: var(--n-value-text-color); } .n-statistic .n-statistic-value .n-statistic-value__suffix
			{ margin: 0 0 0 4px; font-size: var(--n-value-font-size); transition: .3s
			color var(--n-bezier); color: var(--n-value-suffix-text-color); } .n-statistic
			.n-statistic-value .n-statistic-value__suffix .n-icon { vertical-align:
			-0.125em; }
		</style>
		<style cssr-id="n-input">
			.n-input { max-width: 100%; cursor: text; line-height: 1.5; z-index: auto;
			outline: none; box-sizing: border-box; position: relative; display: inline-flex;
			border-radius: var(--n-border-radius); background-color: var(--n-color);
			transition: background-color .3s var(--n-bezier); font-size: var(--n-font-size);
			--n-padding-vertical: calc((var(--n-height) - 1.5 * var(--n-font-size))
			/ 2); } .n-input .n-input__input, .n-input .n-input__textarea { overflow:
			hidden; flex-grow: 1; position: relative; } .n-input .n-input__input-el,
			.n-input .n-input__textarea-el, .n-input .n-input__input-mirror, .n-input
			.n-input__textarea-mirror, .n-input .n-input__separator, .n-input .n-input__placeholder
			{ box-sizing: border-box; font-size: inherit; line-height: 1.5; font-family:
			inherit; border: none; outline: none; background-color: #0000; text-align:
			inherit; transition: -webkit-text-fill-color .3s var(--n-bezier), caret-color
			.3s var(--n-bezier), color .3s var(--n-bezier), text-decoration-color .3s
			var(--n-bezier); } .n-input .n-input__input-el, .n-input .n-input__textarea-el
			{ -webkit-appearance: none; scrollbar-width: none; width: 100%; min-width:
			0; text-decoration-color: var(--n-text-decoration-color); color: var(--n-text-color);
			caret-color: var(--n-caret-color); background-color: transparent; } .n-input
			.n-input__input-el::-webkit-scrollbar, .n-input .n-input__textarea-el::-webkit-scrollbar,
			.n-input .n-input__input-el::-webkit-scrollbar-track-piece, .n-input .n-input__textarea-el::-webkit-scrollbar-track-piece,
			.n-input .n-input__input-el::-webkit-scrollbar-thumb, .n-input .n-input__textarea-el::-webkit-scrollbar-thumb
			{ width: 0; height: 0; display: none; } .n-input .n-input__input-el::placeholder,
			.n-input .n-input__textarea-el::placeholder { color: #0000; -webkit-text-fill-color:
			transparent !important; } .n-input .n-input__input-el:-webkit-autofill
			~ .n-input__placeholder, .n-input .n-input__textarea-el:-webkit-autofill
			~ .n-input__placeholder { display: none; } .n-input.n-input--round:not(.n-input--textarea)
			{ border-radius: calc(var(--n-height) / 2); } .n-input .n-input__placeholder
			{ pointer-events: none; position: absolute; left: 0; right: 0; top: 0;
			bottom: 0; overflow: hidden; color: var(--n-placeholder-color); } .n-input
			.n-input__placeholder span { width: 100%; display: inline-block; } .n-input.n-input--textarea
			.n-input__placeholder { overflow: visible; } .n-input:not(.n-input--autosize)
			{ width: 100%; } .n-input.n-input--autosize .n-input__textarea-el, .n-input.n-input--autosize
			.n-input__input-el { position: absolute; top: 0; left: 0; height: 100%;
			} .n-input .n-input-wrapper { overflow: hidden; display: inline-flex; flex-grow:
			1; position: relative; padding-left: var(--n-padding-left); padding-right:
			var(--n-padding-right); } .n-input .n-input__input-mirror { padding: 0;
			height: var(--n-height); overflow: hidden; visibility: hidden; position:
			static; white-space: pre; pointer-events: none; } .n-input .n-input__input-el
			{ padding: 0; height: var(--n-height); line-height: var(--n-height); }
			.n-input .n-input__input-el + .n-input__placeholder { display: flex; align-items:
			center; } .n-input:not(.n-input--textarea) .n-input__placeholder { white-space:
			nowrap; } .n-input .n-input__eye { transition: color .3s var(--n-bezier);
			} .n-input.n-input--textarea { width: 100%; } .n-input.n-input--textarea
			.n-input-word-count { position: absolute; right: var(--n-padding-right);
			bottom: var(--n-padding-vertical); } .n-input.n-input--textarea.n-input--resizable
			.n-input-wrapper { resize: vertical; min-height: var(--n-height); } .n-input.n-input--textarea
			.n-input__textarea-el, .n-input.n-input--textarea .n-input__textarea-mirror,
			.n-input.n-input--textarea .n-input__placeholder { height: 100%; padding-left:
			0; padding-right: 0; padding-top: var(--n-padding-vertical); padding-bottom:
			var(--n-padding-vertical); word-break: break-word; display: inline-block;
			vertical-align: bottom; box-sizing: border-box; line-height: var(--n-line-height-textarea);
			margin: 0; resize: none; white-space: pre-wrap; } .n-input.n-input--textarea
			.n-input__textarea-mirror { width: 100%; pointer-events: none; overflow:
			hidden; visibility: hidden; position: static; white-space: pre-wrap; overflow-wrap:
			break-word; } .n-input.n-input--pair .n-input__input-el, .n-input.n-input--pair
			.n-input__placeholder { text-align: center; } .n-input.n-input--pair .n-input__separator
			{ display: flex; align-items: center; transition: color .3s var(--n-bezier);
			color: var(--n-text-color); white-space: nowrap; } .n-input.n-input--pair
			.n-input__separator .n-icon { color: var(--n-icon-color); } .n-input.n-input--pair
			.n-input__separator .n-base-icon { color: var(--n-icon-color); } .n-input.n-input--disabled
			{ cursor: not-allowed; background-color: var(--n-color-disabled); } .n-input.n-input--disabled
			.n-input__border { border: var(--n-border-disabled); } .n-input.n-input--disabled
			.n-input__input-el, .n-input.n-input--disabled .n-input__textarea-el {
			cursor: not-allowed; color: var(--n-text-color-disabled); text-decoration-color:
			var(--n-text-color-disabled); } .n-input.n-input--disabled .n-input__placeholder
			{ color: var(--n-placeholder-color-disabled); } .n-input.n-input--disabled
			.n-input__separator { color: var(--n-text-color-disabled); } .n-input.n-input--disabled
			.n-input__separator .n-icon { color: var(--n-icon-color-disabled); } .n-input.n-input--disabled
			.n-input__separator .n-base-icon { color: var(--n-icon-color-disabled);
			} .n-input.n-input--disabled .n-input-word-count { color: var(--n-count-text-color-disabled);
			} .n-input.n-input--disabled .n-input__suffix, .n-input.n-input--disabled
			.n-input__prefix { color: var(--n-text-color-disabled); } .n-input.n-input--disabled
			.n-input__suffix .n-icon, .n-input.n-input--disabled .n-input__prefix .n-icon
			{ color: var(--n-icon-color-disabled); } .n-input.n-input--disabled .n-input__suffix
			.n-internal-icon, .n-input.n-input--disabled .n-input__prefix .n-internal-icon
			{ color: var(--n-icon-color-disabled); } .n-input:not(.n-input--disabled)
			.n-input__eye { display: flex; align-items: center; justify-content: center;
			color: var(--n-icon-color); cursor: pointer; } .n-input:not(.n-input--disabled)
			.n-input__eye:hover { color: var(--n-icon-color-hover); } .n-input:not(.n-input--disabled)
			.n-input__eye:active { color: var(--n-icon-color-pressed); } .n-input:not(.n-input--disabled):hover
			.n-input__state-border { border: var(--n-border-hover); } .n-input:not(.n-input--disabled).n-input--focus
			{ background-color: var(--n-color-focus); } .n-input:not(.n-input--disabled).n-input--focus
			.n-input__state-border { border: var(--n-border-focus); box-shadow: var(--n-box-shadow-focus);
			} .n-input .n-input__border, .n-input .n-input__state-border { box-sizing:
			border-box; position: absolute; left: 0; right: 0; top: 0; bottom: 0; pointer-events:
			none; border-radius: inherit; border: var(--n-border); transition: box-shadow
			.3s var(--n-bezier), border-color .3s var(--n-bezier); } .n-input .n-input__state-border
			{ border-color: #0000; z-index: 1; } .n-input .n-input__prefix { margin-right:
			4px; } .n-input .n-input__suffix { margin-left: 4px; } .n-input .n-input__suffix,
			.n-input .n-input__prefix { transition: color .3s var(--n-bezier); flex-wrap:
			nowrap; flex-shrink: 0; line-height: var(--n-height); white-space: nowrap;
			display: inline-flex; align-items: center; justify-content: center; color:
			var(--n-suffix-text-color); } .n-input .n-input__suffix .n-base-loading,
			.n-input .n-input__prefix .n-base-loading { font-size: var(--n-icon-size);
			margin: 0 2px; color: var(--n-loading-color); } .n-input .n-input__suffix
			.n-base-clear, .n-input .n-input__prefix .n-base-clear { font-size: var(--n-icon-size);
			} .n-input .n-input__suffix .n-base-clear .n-base-clear__placeholder .n-base-icon,
			.n-input .n-input__prefix .n-base-clear .n-base-clear__placeholder .n-base-icon
			{ transition: color .3s var(--n-bezier); color: var(--n-icon-color); font-size:
			var(--n-icon-size); } .n-input .n-input__suffix > .n-icon, .n-input .n-input__prefix
			> .n-icon { transition: color .3s var(--n-bezier); color: var(--n-icon-color);
			font-size: var(--n-icon-size); } .n-input .n-input__suffix .n-base-icon,
			.n-input .n-input__prefix .n-base-icon { font-size: var(--n-icon-size);
			} .n-input .n-input-word-count { pointer-events: none; line-height: 1.5;
			font-size: .85em; color: var(--n-count-text-color); transition: color .3s
			var(--n-bezier); margin-left: 4px; font-variant: tabular-nums; } .n-input.n-input--warning-status:not(.n-input--disabled)
			.n-base-loading { color: var(--n-loading-color-warning) } .n-input.n-input--warning-status:not(.n-input--disabled)
			.n-input__input-el, .n-input.n-input--warning-status:not(.n-input--disabled)
			.n-input__textarea-el { caret-color: var(--n-caret-color-warning); } .n-input.n-input--warning-status:not(.n-input--disabled)
			.n-input__state-border { border: var(--n-border-warning); } .n-input.n-input--warning-status:not(.n-input--disabled):hover
			.n-input__state-border { border: var(--n-border-hover-warning); } .n-input.n-input--warning-status:not(.n-input--disabled):focus
			{ background-color: var(--n-color-focus-warning); } .n-input.n-input--warning-status:not(.n-input--disabled):focus
			.n-input__state-border { box-shadow: var(--n-box-shadow-focus-warning);
			border: var(--n-border-focus-warning); } .n-input.n-input--warning-status:not(.n-input--disabled).n-input--focus
			{ background-color: var(--n-color-focus-warning); } .n-input.n-input--warning-status:not(.n-input--disabled).n-input--focus
			.n-input__state-border { box-shadow: var(--n-box-shadow-focus-warning);
			border: var(--n-border-focus-warning); } .n-input.n-input--error-status:not(.n-input--disabled)
			.n-base-loading { color: var(--n-loading-color-error) } .n-input.n-input--error-status:not(.n-input--disabled)
			.n-input__input-el, .n-input.n-input--error-status:not(.n-input--disabled)
			.n-input__textarea-el { caret-color: var(--n-caret-color-error); } .n-input.n-input--error-status:not(.n-input--disabled)
			.n-input__state-border { border: var(--n-border-error); } .n-input.n-input--error-status:not(.n-input--disabled):hover
			.n-input__state-border { border: var(--n-border-hover-error); } .n-input.n-input--error-status:not(.n-input--disabled):focus
			{ background-color: var(--n-color-focus-error); } .n-input.n-input--error-status:not(.n-input--disabled):focus
			.n-input__state-border { box-shadow: var(--n-box-shadow-focus-error); border:
			var(--n-border-focus-error); } .n-input.n-input--error-status:not(.n-input--disabled).n-input--focus
			{ background-color: var(--n-color-focus-error); } .n-input.n-input--error-status:not(.n-input--disabled).n-input--focus
			.n-input__state-border { box-shadow: var(--n-box-shadow-focus-error); border:
			var(--n-border-focus-error); }
		</style>
		<style cssr-id="n-input-group">
			.n-input-group { display: inline-flex; width: 100%; flex-wrap: nowrap;
			vertical-align: bottom; } .n-input-group > .n-input:not(:last-child) {
			border-top-right-radius: 0!important; border-bottom-right-radius: 0!important;
			} .n-input-group > .n-input:not(:first-child) { border-top-left-radius:
			0!important; border-bottom-left-radius: 0!important; margin-left: -1px!important;
			} .n-input-group > .n-button:not(:last-child) { border-top-right-radius:
			0!important; border-bottom-right-radius: 0!important; } .n-input-group
			> .n-button:not(:last-child) .n-button__state-border, .n-input-group >
			.n-button:not(:last-child) .n-button__border { border-top-right-radius:
			0!important; border-bottom-right-radius: 0!important; } .n-input-group
			> .n-button:not(:first-child) { border-top-left-radius: 0!important; border-bottom-left-radius:
			0!important; } .n-input-group > .n-button:not(:first-child) .n-button__state-border,
			.n-input-group > .n-button:not(:first-child) .n-button__border { border-top-left-radius:
			0!important; border-bottom-left-radius: 0!important; } .n-input-group >
			*:not(:last-child) { border-top-right-radius: 0!important; border-bottom-right-radius:
			0!important; } .n-input-group > *:not(:last-child) > .n-input { border-top-right-radius:
			0!important; border-bottom-right-radius: 0!important; } .n-input-group
			> *:not(:last-child) > .n-base-selection .n-base-selection-label { border-top-right-radius:
			0!important; border-bottom-right-radius: 0!important; } .n-input-group
			> *:not(:last-child) > .n-base-selection .n-base-selection-tags { border-top-right-radius:
			0!important; border-bottom-right-radius: 0!important; } .n-input-group
			> *:not(:last-child) > .n-base-selection .n-base-selection__box-shadow,
			.n-input-group > *:not(:last-child) > .n-base-selection .n-base-selection__border,
			.n-input-group > *:not(:last-child) > .n-base-selection .n-base-selection__state-border
			{ border-top-right-radius: 0!important; border-bottom-right-radius: 0!important;
			} .n-input-group > *:not(:first-child) { margin-left: -1px!important; border-top-left-radius:
			0!important; border-bottom-left-radius: 0!important; } .n-input-group >
			*:not(:first-child) > .n-input { border-top-left-radius: 0!important; border-bottom-left-radius:
			0!important; } .n-input-group > *:not(:first-child) > .n-base-selection
			.n-base-selection-label { border-top-left-radius: 0!important; border-bottom-left-radius:
			0!important; } .n-input-group > *:not(:first-child) > .n-base-selection
			.n-base-selection-tags { border-top-left-radius: 0!important; border-bottom-left-radius:
			0!important; } .n-input-group > *:not(:first-child) > .n-base-selection
			.n-base-selection__box-shadow, .n-input-group > *:not(:first-child) > .n-base-selection
			.n-base-selection__border, .n-input-group > *:not(:first-child) > .n-base-selection
			.n-base-selection__state-border { border-top-left-radius: 0!important;
			border-bottom-left-radius: 0!important; }
		</style>
		<style cssr-id="n-card">
			.n-card { font-size: var(--n-font-size); line-height: var(--n-line-height);
			display: flex; flex-direction: column; width: 100%; box-sizing: border-box;
			position: relative; border-radius: var(--n-border-radius); background-color:
			var(--n-color); color: var(--n-text-color); word-break: break-word; transition:
			color .3s var(--n-bezier), background-color .3s var(--n-bezier), box-shadow
			.3s var(--n-bezier), border-color .3s var(--n-bezier); } .n-card.n-modal
			{ background: var(--n-color-modal); } .n-card.n-card--hoverable:hover {
			box-shadow: var(--n-box-shadow); } .n-card.n-card--content-segmented >
			.n-card__content { padding-top: var(--n-padding-bottom); } .n-card.n-card--content-soft-segmented
			> .n-card__content { margin: 0 var(--n-padding-left); padding: var(--n-padding-bottom)
			0; } .n-card.n-card--footer-segmented > .n-card__footer { padding-top:
			var(--n-padding-bottom); } .n-card.n-card--footer-soft-segmented > .n-card__footer
			{ padding: var(--n-padding-bottom) 0; margin: 0 var(--n-padding-left);
			} .n-card > .n-card-header { box-sizing: border-box; display: flex; align-items:
			center; font-size: var(--n-title-font-size); padding: var(--n-padding-top)
			var(--n-padding-left) var(--n-padding-bottom) var(--n-padding-left); }
			.n-card > .n-card-header .n-card-header__main { font-weight: var(--n-title-font-weight);
			transition: color .3s var(--n-bezier); flex: 1; min-width: 0; color: var(--n-title-text-color);
			} .n-card > .n-card-header .n-card-header__extra { display: flex; align-items:
			center; font-size: var(--n-font-size); font-weight: 400; transition: color
			.3s var(--n-bezier); color: var(--n-text-color); } .n-card > .n-card-header
			.n-card-header__close { margin: 0 0 0 8px; transition: background-color
			.3s var(--n-bezier), color .3s var(--n-bezier); } .n-card > .n-card__action
			{ box-sizing: border-box; transition: background-color .3s var(--n-bezier),
			border-color .3s var(--n-bezier); background-clip: padding-box; background-color:
			var(--n-action-color); } .n-card > .n-card__content { flex: 1; min-width:
			0; } .n-card > .n-card__content, .n-card > .n-card__footer { box-sizing:
			border-box; padding: 0 var(--n-padding-left) var(--n-padding-bottom) var(--n-padding-left);
			font-size: var(--n-font-size); } .n-card > .n-card__content:first-child,
			.n-card > .n-card__footer:first-child { padding-top: var(--n-padding-bottom);
			} .n-card > .n-card__action { background-color: var(--n-action-color);
			padding: var(--n-padding-bottom) var(--n-padding-left); border-bottom-left-radius:
			var(--n-border-radius); border-bottom-right-radius: var(--n-border-radius);
			} .n-card .n-card-cover { overflow: hidden; width: 100%; border-radius:
			var(--n-border-radius) var(--n-border-radius) 0 0; } .n-card .n-card-cover
			img { display: block; width: 100%; } .n-card.n-card--bordered { border:
			1px solid var(--n-border-color); } .n-card.n-card--bordered:target { border-color:
			var(--n-color-target); } .n-card.n-card--action-segmented > .n-card__action:not(:first-child)
			{ border-top: 1px solid var(--n-border-color); } .n-card.n-card--content-segmented
			> .n-card__content, .n-card.n-card--content-soft-segmented > .n-card__content
			{ transition: border-color 0.3s var(--n-bezier); } .n-card.n-card--content-segmented
			> .n-card__content:not(:first-child), .n-card.n-card--content-soft-segmented
			> .n-card__content:not(:first-child) { border-top: 1px solid var(--n-border-color);
			} .n-card.n-card--footer-segmented > .n-card__footer, .n-card.n-card--footer-soft-segmented
			> .n-card__footer { transition: border-color 0.3s var(--n-bezier); } .n-card.n-card--footer-segmented
			> .n-card__footer:not(:first-child), .n-card.n-card--footer-soft-segmented
			> .n-card__footer:not(:first-child) { border-top: 1px solid var(--n-border-color);
			} .n-card.n-card--embedded { background-color: var(--n-color-embedded);
			} .n-modal .n-card, .n-drawer .n-card { background: var(--n-color-modal);
			} .n-modal .n-card.n-card--embedded, .n-drawer .n-card.n-card--embedded
			{ background-color: var(--n-color-embedded-modal); } .n-popover .n-card
			{ background: var(--n-color-popover); } .n-popover .n-card.n-card--embedded
			{ background-color: var(--n-color-embedded-popover); }
		</style>
		<style cssr-id="n-scrollbar">
			.n-scrollbar { overflow: hidden; position: relative; z-index: auto; height:
			100%; width: 100%; } .n-scrollbar > .n-scrollbar-container { width: 100%;
			overflow: scroll; height: 100%; max-height: inherit; scrollbar-width: none;
			} .n-scrollbar > .n-scrollbar-container::-webkit-scrollbar, .n-scrollbar
			> .n-scrollbar-container::-webkit-scrollbar-track-piece, .n-scrollbar >
			.n-scrollbar-container::-webkit-scrollbar-thumb { width: 0; height: 0;
			display: none; } .n-scrollbar > .n-scrollbar-container > .n-scrollbar-content
			{ box-sizing: border-box; min-width: 100%; } .n-scrollbar > .n-scrollbar-rail,
			.n-scrollbar + .n-scrollbar-rail { position: absolute; pointer-events:
			none; user-select: none; -webkit-user-select: none; } .n-scrollbar > .n-scrollbar-rail.n-scrollbar-rail--horizontal,
			.n-scrollbar + .n-scrollbar-rail.n-scrollbar-rail--horizontal { left: 2px;
			right: 2px; bottom: 4px; height: var(--n-scrollbar-height); } .n-scrollbar
			> .n-scrollbar-rail.n-scrollbar-rail--horizontal > .n-scrollbar-rail__scrollbar,
			.n-scrollbar + .n-scrollbar-rail.n-scrollbar-rail--horizontal > .n-scrollbar-rail__scrollbar
			{ height: var(--n-scrollbar-height); border-radius: var(--n-scrollbar-border-radius);
			right: 0; } .n-scrollbar > .n-scrollbar-rail.n-scrollbar-rail--vertical,
			.n-scrollbar + .n-scrollbar-rail.n-scrollbar-rail--vertical { right: 4px;
			top: 2px; bottom: 2px; width: var(--n-scrollbar-width); } .n-scrollbar
			> .n-scrollbar-rail.n-scrollbar-rail--vertical > .n-scrollbar-rail__scrollbar,
			.n-scrollbar + .n-scrollbar-rail.n-scrollbar-rail--vertical > .n-scrollbar-rail__scrollbar
			{ width: var(--n-scrollbar-width); border-radius: var(--n-scrollbar-border-radius);
			bottom: 0; } .n-scrollbar > .n-scrollbar-rail.n-scrollbar-rail--disabled
			> .n-scrollbar-rail__scrollbar, .n-scrollbar + .n-scrollbar-rail.n-scrollbar-rail--disabled
			> .n-scrollbar-rail__scrollbar { pointer-events: none; } .n-scrollbar >
			.n-scrollbar-rail > .n-scrollbar-rail__scrollbar, .n-scrollbar + .n-scrollbar-rail
			> .n-scrollbar-rail__scrollbar { position: absolute; cursor: pointer; pointer-events:
			all; background-color: var(--n-scrollbar-color); transition: background-color
			.2s var(--n-scrollbar-bezier); } .n-scrollbar > .n-scrollbar-rail > .n-scrollbar-rail__scrollbar.fade-in-transition-enter-active,
			.n-scrollbar + .n-scrollbar-rail > .n-scrollbar-rail__scrollbar.fade-in-transition-enter-active
			{ transition: all 0.2s cubic-bezier(.4, 0, .2, 1)!important; } .n-scrollbar
			> .n-scrollbar-rail > .n-scrollbar-rail__scrollbar.fade-in-transition-leave-active,
			.n-scrollbar + .n-scrollbar-rail > .n-scrollbar-rail__scrollbar.fade-in-transition-leave-active
			{ transition: all 0.2s cubic-bezier(.4, 0, .2, 1)!important; } .n-scrollbar
			> .n-scrollbar-rail > .n-scrollbar-rail__scrollbar.fade-in-transition-enter-from,
			.n-scrollbar + .n-scrollbar-rail > .n-scrollbar-rail__scrollbar.fade-in-transition-enter-from,
			.n-scrollbar > .n-scrollbar-rail > .n-scrollbar-rail__scrollbar.fade-in-transition-leave-to,
			.n-scrollbar + .n-scrollbar-rail > .n-scrollbar-rail__scrollbar.fade-in-transition-leave-to
			{ opacity: 0; } .n-scrollbar > .n-scrollbar-rail > .n-scrollbar-rail__scrollbar.fade-in-transition-leave-from,
			.n-scrollbar + .n-scrollbar-rail > .n-scrollbar-rail__scrollbar.fade-in-transition-leave-from,
			.n-scrollbar > .n-scrollbar-rail > .n-scrollbar-rail__scrollbar.fade-in-transition-enter-to,
			.n-scrollbar + .n-scrollbar-rail > .n-scrollbar-rail__scrollbar.fade-in-transition-enter-to
			{ opacity: 1; } .n-scrollbar > .n-scrollbar-rail > .n-scrollbar-rail__scrollbar:hover,
			.n-scrollbar + .n-scrollbar-rail > .n-scrollbar-rail__scrollbar:hover {
			background-color: var(--n-scrollbar-color-hover); }
		</style>
		<style cssr-id="n-base-wave">
			.n-base-wave { position: absolute; left: 0; right: 0; top: 0; bottom:
			0; border-radius: inherit; }
		</style>
		<style cssr-id="n-button">
			.n-button { margin: 0; font-weight: var(--n-font-weight); line-height:
			1; font-family: inherit; padding: var(--n-padding); height: var(--n-height);
			font-size: var(--n-font-size); border-radius: var(--n-border-radius); color:
			var(--n-text-color); background-color: var(--n-color); width: var(--n-width);
			white-space: nowrap; outline: none; position: relative; z-index: auto;
			border: none; display: inline-flex; flex-wrap: nowrap; flex-shrink: 0;
			align-items: center; justify-content: center; user-select: none; -webkit-user-select:
			none; text-align: center; cursor: pointer; text-decoration: none; transition:
			color .3s var(--n-bezier), background-color .3s var(--n-bezier), opacity
			.3s var(--n-bezier), border-color .3s var(--n-bezier); } .n-button.n-button--color
			.n-button__border { border-color: var(--n-border-color); } .n-button.n-button--color.n-button--disabled
			.n-button__border { border-color: var(--n-border-color-disabled); } .n-button.n-button--color:not(.n-button--disabled):focus
			.n-button__state-border { border-color: var(--n-border-color-focus); }
			.n-button.n-button--color:not(.n-button--disabled):hover .n-button__state-border
			{ border-color: var(--n-border-color-hover); } .n-button.n-button--color:not(.n-button--disabled):active
			.n-button__state-border { border-color: var(--n-border-color-pressed);
			} .n-button.n-button--color:not(.n-button--disabled).n-button--pressed
			.n-button__state-border { border-color: var(--n-border-color-pressed);
			} .n-button.n-button--disabled { background-color: var(--n-color-disabled);
			color: var(--n-text-color-disabled); } .n-button.n-button--disabled .n-button__border
			{ border: var(--n-border-disabled); } .n-button:not(.n-button--disabled):focus
			{ background-color: var(--n-color-focus); color: var(--n-text-color-focus);
			} .n-button:not(.n-button--disabled):focus .n-button__state-border { border:
			var(--n-border-focus); } .n-button:not(.n-button--disabled):hover { background-color:
			var(--n-color-hover); color: var(--n-text-color-hover); } .n-button:not(.n-button--disabled):hover
			.n-button__state-border { border: var(--n-border-hover); } .n-button:not(.n-button--disabled):active
			{ background-color: var(--n-color-pressed); color: var(--n-text-color-pressed);
			} .n-button:not(.n-button--disabled):active .n-button__state-border { border:
			var(--n-border-pressed); } .n-button:not(.n-button--disabled).n-button--pressed
			{ background-color: var(--n-color-pressed); color: var(--n-text-color-pressed);
			} .n-button:not(.n-button--disabled).n-button--pressed .n-button__state-border
			{ border: var(--n-border-pressed); } .n-button.n-button--loading { cursor:
			wait; } .n-button .n-base-wave { pointer-events: none; top: 0; right: 0;
			bottom: 0; left: 0; animation-iteration-count: 1; animation-duration: var(--n-ripple-duration);
			animation-timing-function: var(--n-bezier-ease-out), var(--n-bezier-ease-out);
			} .n-button .n-base-wave.n-base-wave--active { z-index: 1; animation-name:
			button-wave-spread, button-wave-opacity; } .n-button .n-button__border,
			.n-button .n-button__state-border { position: absolute; left: 0; top: 0;
			right: 0; bottom: 0; border-radius: inherit; transition: border-color .3s
			var(--n-bezier); pointer-events: none; } .n-button .n-button__border {
			border: var(--n-border); } .n-button .n-button__state-border { border:
			var(--n-border); border-color: #0000; z-index: 1; } .n-button .n-button__icon
			{ margin: var(--n-icon-margin); margin-left: 0; height: var(--n-icon-size);
			width: var(--n-icon-size); max-width: var(--n-icon-size); font-size: var(--n-icon-size);
			position: relative; flex-shrink: 0; } .n-button .n-button__icon .n-icon-slot
			{ height: var(--n-icon-size); width: var(--n-icon-size); position: absolute;
			left: 0; top: 50%; transform: translateY(-50%); display: flex; align-items:
			center; justify-content: center; } .n-button .n-button__icon .n-icon-slot.icon-switch-transition-enter-from,
			.n-button .n-button__icon .n-icon-slot.icon-switch-transition-leave-to
			{ transform: translateY(-50%) scale(0.75); left: 0; top: 50%; opacity:
			0; } .n-button .n-button__icon .n-icon-slot.icon-switch-transition-enter-to,
			.n-button .n-button__icon .n-icon-slot.icon-switch-transition-leave-from
			{ transform: scale(1) translateY(-50%); left: 0; top: 50%; opacity: 1;
			} .n-button .n-button__icon .n-icon-slot.icon-switch-transition-enter-active,
			.n-button .n-button__icon .n-icon-slot.icon-switch-transition-leave-active
			{ transform-origin: center; position: absolute; left: 0; top: 50%; transition:
			all .3s cubic-bezier(.4, 0, .2, 1) !important; } .n-button .n-button__icon.fade-in-width-expand-transition-leave-from,
			.n-button .n-button__icon.fade-in-width-expand-transition-enter-to { opacity:
			1; } .n-button .n-button__icon.fade-in-width-expand-transition-leave-to,
			.n-button .n-button__icon.fade-in-width-expand-transition-enter-from {
			opacity: 0!important; margin-left: 0!important; margin-right: 0!important;
			} .n-button .n-button__icon.fade-in-width-expand-transition-leave-active
			{ overflow: hidden; transition: opacity .2s cubic-bezier(.4, 0, .2, 1),
			max-width .2s cubic-bezier(.4, 0, .2, 1) .1s, margin-left .2s cubic-bezier(.4,
			0, .2, 1) .1s, margin-right .2s cubic-bezier(.4, 0, .2, 1) .1s; } .n-button
			.n-button__icon.fade-in-width-expand-transition-enter-active { overflow:
			hidden; transition: opacity .2s cubic-bezier(.4, 0, .2, 1) .1s, max-width
			.2s cubic-bezier(.4, 0, .2, 1), margin-left .2s cubic-bezier(.4, 0, .2,
			1), margin-right .2s cubic-bezier(.4, 0, .2, 1); } .n-button .n-button__content
			{ display: flex; align-items: center; flex-wrap: nowrap; min-width: 0;
			} .n-button .n-button__content ~ .n-button__icon { margin: var(--n-icon-margin);
			margin-right: 0; } .n-button.n-button--block { display: flex; width: 100%;
			} .n-button.n-button--dashed .n-button__border, .n-button.n-button--dashed
			.n-button__state-border { border-style: dashed !important; } .n-button.n-button--disabled
			{ cursor: not-allowed; opacity: var(--n-opacity-disabled); } @keyframes
			button-wave-spread { from { box-shadow: 0 0 0.5px 0 var(--n-ripple-color);
			} to { box-shadow: 0 0 0.5px 4.5px var(--n-ripple-color); } } @keyframes
			button-wave-opacity { from { opacity: var(--n-wave-opacity); } to { opacity:
			0; } }
		</style>
		<style cssr-id="n-layout-sider">
			.n-layout-sider { flex-shrink: 0; box-sizing: border-box; position: relative;
			z-index: 1; color: var(--n-text-color); transition: color .3s var(--n-bezier),
			border-color .3s var(--n-bezier), min-width .3s var(--n-bezier), max-width
			.3s var(--n-bezier), transform .3s var(--n-bezier), background-color .3s
			var(--n-bezier); background-color: var(--n-color); display: flex; justify-content:
			flex-end; } .n-layout-sider.n-layout-sider--bordered .n-layout-sider__border
			{ content: ""; position: absolute; top: 0; bottom: 0; width: 1px; background-color:
			var(--n-border-color); transition: background-color .3s var(--n-bezier);
			} .n-layout-sider .n-layout-sider__left-placement.n-layout-sider__left-placement--bordered
			.n-layout-sider__border { right: 0; } .n-layout-sider.n-layout-sider--right-placement
			{ justify-content: flex-start; } .n-layout-sider.n-layout-sider--right-placement.n-layout-sider--bordered
			.n-layout-sider__border { left: 0; } .n-layout-sider.n-layout-sider--right-placement.n-layout-sider--collapsed
			.n-layout-toggle-button .n-base-icon { transform: rotate(180deg); } .n-layout-sider.n-layout-sider--right-placement.n-layout-sider--collapsed
			.n-layout-toggle-bar:hover .n-layout-toggle-bar__top { transform: rotate(-12deg)
			scale(1.15) translateY(-2px); } .n-layout-sider.n-layout-sider--right-placement.n-layout-sider--collapsed
			.n-layout-toggle-bar:hover .n-layout-toggle-bar__bottom { transform: rotate(12deg)
			scale(1.15) translateY(2px); } .n-layout-sider.n-layout-sider--right-placement
			.n-layout-toggle-button { left: 0; transform: translateX(-50%) translateY(-50%);
			} .n-layout-sider.n-layout-sider--right-placement .n-layout-toggle-button
			.n-base-icon { transform: rotate(0); } .n-layout-sider.n-layout-sider--right-placement
			.n-layout-toggle-bar { left: -28px; transform: rotate(180deg); } .n-layout-sider.n-layout-sider--right-placement
			.n-layout-toggle-bar:hover .n-layout-toggle-bar__top { transform: rotate(12deg)
			scale(1.15) translateY(-2px); } .n-layout-sider.n-layout-sider--right-placement
			.n-layout-toggle-bar:hover .n-layout-toggle-bar__bottom { transform: rotate(-12deg)
			scale(1.15) translateY(2px); } .n-layout-sider.n-layout-sider--collapsed
			.n-layout-toggle-bar:hover .n-layout-toggle-bar__top { transform: rotate(-12deg)
			scale(1.15) translateY(-2px); } .n-layout-sider.n-layout-sider--collapsed
			.n-layout-toggle-bar:hover .n-layout-toggle-bar__bottom { transform: rotate(12deg)
			scale(1.15) translateY(2px); } .n-layout-sider.n-layout-sider--collapsed
			.n-layout-toggle-button .n-base-icon { transform: rotate(0); } .n-layout-sider
			.n-layout-toggle-button { transition: color .3s var(--n-bezier), right
			.3s var(--n-bezier), left .3s var(--n-bezier), border-color .3s var(--n-bezier),
			background-color .3s var(--n-bezier); cursor: pointer; width: 24px; height:
			24px; position: absolute; top: 50%; right: 0; border-radius: 50%; display:
			flex; align-items: center; justify-content: center; font-size: 18px; color:
			var(--n-toggle-button-icon-color); border: var(--n-toggle-button-border);
			background-color: var(--n-toggle-button-color); box-shadow: 0 2px 4px 0px
			rgba(0, 0, 0, .06); transform: translateX(50%) translateY(-50%); z-index:
			1; } .n-layout-sider .n-layout-toggle-button .n-base-icon { transition:
			transform .3s var(--n-bezier); transform: rotate(180deg); } .n-layout-sider
			.n-layout-toggle-bar { cursor: pointer; height: 72px; width: 32px; position:
			absolute; top: calc(50% - 36px); right: -28px; } .n-layout-sider .n-layout-toggle-bar
			.n-layout-toggle-bar__top, .n-layout-sider .n-layout-toggle-bar .n-layout-toggle-bar__bottom
			{ position: absolute; width: 4px; border-radius: 2px; height: 38px; left:
			14px; transition: background-color .3s var(--n-bezier), transform .3s var(--n-bezier);
			} .n-layout-sider .n-layout-toggle-bar .n-layout-toggle-bar__bottom { position:
			absolute; top: 34px; } .n-layout-sider .n-layout-toggle-bar:hover .n-layout-toggle-bar__top
			{ transform: rotate(12deg) scale(1.15) translateY(-2px); } .n-layout-sider
			.n-layout-toggle-bar:hover .n-layout-toggle-bar__bottom { transform: rotate(-12deg)
			scale(1.15) translateY(2px); } .n-layout-sider .n-layout-toggle-bar .n-layout-toggle-bar__top,
			.n-layout-sider .n-layout-toggle-bar .n-layout-toggle-bar__bottom { background-color:
			var(--n-toggle-bar-color); } .n-layout-sider .n-layout-toggle-bar:hover
			.n-layout-toggle-bar__top, .n-layout-sider .n-layout-toggle-bar:hover .n-layout-toggle-bar__bottom
			{ background-color: var(--n-toggle-bar-color-hover); } .n-layout-sider
			.n-layout-sider__border { position: absolute; top: 0; right: 0; bottom:
			0; width: 1px; transition: background-color .3s var(--n-bezier); } .n-layout-sider
			.n-layout-sider-scroll-container { flex-grow: 1; flex-shrink: 0; box-sizing:
			border-box; height: 100%; opacity: 0; transition: opacity .3s var(--n-bezier);
			max-width: 100%; } .n-layout-sider.n-layout-sider--show-content .n-layout-sider-scroll-container
			{ opacity: 1; } .n-layout-sider.n-layout-sider--absolute-positioned { position:
			absolute; left: 0; top: 0; bottom: 0; }
		</style>
		<style cssr-id="n-layout">
			.n-layout { color: var(--n-text-color); background-color: var(--n-color);
			box-sizing: border-box; position: relative; z-index: auto; flex: auto;
			overflow: hidden; transition: box-shadow .3s var(--n-bezier), background-color
			.3s var(--n-bezier), color .3s var(--n-bezier); } .n-layout .n-layout-scroll-container
			{ overflow-x: hidden; box-sizing: border-box; height: 100%; } .n-layout.n-layout--absolute-positioned
			{ position: absolute; left: 0; right: 0; top: 0; bottom: 0; }
		</style>
		<style cssr-id="n-notification">
			.n-notification-container { z-index: 4000; position: fixed; overflow:
			visible; display: flex; flex-direction: column; align-items: flex-end;
			} .n-notification-container > .n-scrollbar { width: initial; overflow:
			visible; height: -moz-fit-content !important; height: fit-content !important;
			max-height: 100vh !important; } .n-notification-container > .n-scrollbar
			> .n-scrollbar-container { height: -moz-fit-content !important; height:
			fit-content !important; max-height: 100vh !important; } .n-notification-container
			> .n-scrollbar > .n-scrollbar-container .n-scrollbar-content { padding-top:
			12px; padding-bottom: 33px; } .n-notification-container.n-notification-container--top,
			.n-notification-container.n-notification-container--top-right, .n-notification-container.n-notification-container--top-left
			{ top: 12px; } .n-notification-container.n-notification-container--top.transitioning
			> .n-scrollbar > .n-scrollbar-container, .n-notification-container.n-notification-container--top-right.transitioning
			> .n-scrollbar > .n-scrollbar-container, .n-notification-container.n-notification-container--top-left.transitioning
			> .n-scrollbar > .n-scrollbar-container { min-height: 100vh !important;
			} .n-notification-container.n-notification-container--bottom, .n-notification-container.n-notification-container--bottom-right,
			.n-notification-container.n-notification-container--bottom-left { bottom:
			12px; } .n-notification-container.n-notification-container--bottom > .n-scrollbar
			> .n-scrollbar-container .n-scrollbar-content, .n-notification-container.n-notification-container--bottom-right
			> .n-scrollbar > .n-scrollbar-container .n-scrollbar-content, .n-notification-container.n-notification-container--bottom-left
			> .n-scrollbar > .n-scrollbar-container .n-scrollbar-content { padding-bottom:
			12px; } .n-notification-container.n-notification-container--bottom .n-notification-wrapper,
			.n-notification-container.n-notification-container--bottom-right .n-notification-wrapper,
			.n-notification-container.n-notification-container--bottom-left .n-notification-wrapper
			{ display: flex; align-items: flex-end; margin-bottom: 0; margin-top: 12px;
			} .n-notification-container.n-notification-container--top, .n-notification-container.n-notification-container--bottom
			{ left: 50%; transform: translateX(-50%); } .n-notification-container.n-notification-container--top
			.n-notification-wrapper.notification-transition-enter-from, .n-notification-container.n-notification-container--bottom
			.n-notification-wrapper.notification-transition-enter-from, .n-notification-container.n-notification-container--top
			.n-notification-wrapper.notification-transition-leave-to, .n-notification-container.n-notification-container--bottom
			.n-notification-wrapper.notification-transition-leave-to { transform: scale(0.85);
			} .n-notification-container.n-notification-container--top .n-notification-wrapper.notification-transition-leave-from,
			.n-notification-container.n-notification-container--bottom .n-notification-wrapper.notification-transition-leave-from,
			.n-notification-container.n-notification-container--top .n-notification-wrapper.notification-transition-enter-to,
			.n-notification-container.n-notification-container--bottom .n-notification-wrapper.notification-transition-enter-to
			{ transform: scale(1); } .n-notification-container.n-notification-container--top
			.n-notification-wrapper { transform-origin: top center; } .n-notification-container.n-notification-container--bottom
			.n-notification-wrapper { transform-origin: bottom center; } .n-notification-container.n-notification-container--top-right
			.n-notification, .n-notification-container.n-notification-container--bottom-right
			.n-notification { margin-left: 28px; margin-right: 16px; } .n-notification-container.n-notification-container--top-left
			.n-notification, .n-notification-container.n-notification-container--bottom-left
			.n-notification { margin-left: 16px; margin-right: 28px; } .n-notification-container.n-notification-container--top-right
			{ right: 0; } .n-notification-container.n-notification-container--top-right
			.n-notification-wrapper.notification-transition-enter-from, .n-notification-container.n-notification-container--top-right
			.n-notification-wrapper.notification-transition-leave-to { transform: translate(calc(100%),
			0); } .n-notification-container.n-notification-container--top-right .n-notification-wrapper.notification-transition-leave-from,
			.n-notification-container.n-notification-container--top-right .n-notification-wrapper.notification-transition-enter-to
			{ transform: translate(0, 0); } .n-notification-container.n-notification-container--top-left
			{ left: 0; } .n-notification-container.n-notification-container--top-left
			.n-notification-wrapper.notification-transition-enter-from, .n-notification-container.n-notification-container--top-left
			.n-notification-wrapper.notification-transition-leave-to { transform: translate(calc(-100%),
			0); } .n-notification-container.n-notification-container--top-left .n-notification-wrapper.notification-transition-leave-from,
			.n-notification-container.n-notification-container--top-left .n-notification-wrapper.notification-transition-enter-to
			{ transform: translate(0, 0); } .n-notification-container.n-notification-container--bottom-right
			{ right: 0; } .n-notification-container.n-notification-container--bottom-right
			.n-notification-wrapper.notification-transition-enter-from, .n-notification-container.n-notification-container--bottom-right
			.n-notification-wrapper.notification-transition-leave-to { transform: translate(calc(100%),
			0); } .n-notification-container.n-notification-container--bottom-right
			.n-notification-wrapper.notification-transition-leave-from, .n-notification-container.n-notification-container--bottom-right
			.n-notification-wrapper.notification-transition-enter-to { transform: translate(0,
			0); } .n-notification-container.n-notification-container--bottom-left {
			left: 0; } .n-notification-container.n-notification-container--bottom-left
			.n-notification-wrapper.notification-transition-enter-from, .n-notification-container.n-notification-container--bottom-left
			.n-notification-wrapper.notification-transition-leave-to { transform: translate(calc(-100%),
			0); } .n-notification-container.n-notification-container--bottom-left .n-notification-wrapper.notification-transition-leave-from,
			.n-notification-container.n-notification-container--bottom-left .n-notification-wrapper.notification-transition-enter-to
			{ transform: translate(0, 0); } .n-notification-container.n-notification-container--scrollable.n-notification-container--top-right
			{ top: 0; } .n-notification-container.n-notification-container--scrollable.n-notification-container--top-left
			{ top: 0; } .n-notification-container.n-notification-container--scrollable.n-notification-container--bottom-right
			{ bottom: 0; } .n-notification-container.n-notification-container--scrollable.n-notification-container--bottom-left
			{ bottom: 0; } .n-notification-container .n-notification-wrapper { margin-bottom:
			12px; } .n-notification-container .n-notification-wrapper.notification-transition-enter-from,
			.n-notification-container .n-notification-wrapper.notification-transition-leave-to
			{ opacity: 0; margin-top: 0 !important; margin-bottom: 0 !important; }
			.n-notification-container .n-notification-wrapper.notification-transition-leave-from,
			.n-notification-container .n-notification-wrapper.notification-transition-enter-to
			{ opacity: 1; } .n-notification-container .n-notification-wrapper.notification-transition-leave-active
			{ transition: background-color .3s var(--n-bezier), color .3s var(--n-bezier),
			opacity .3s var(--n-bezier), transform .3s var(--n-bezier-ease-in), max-height
			.3s var(--n-bezier), margin-top .3s linear, margin-bottom .3s linear, box-shadow
			.3s var(--n-bezier); } .n-notification-container .n-notification-wrapper.notification-transition-enter-active
			{ transition: background-color .3s var(--n-bezier), color .3s var(--n-bezier),
			opacity .3s var(--n-bezier), transform .3s var(--n-bezier-ease-out), max-height
			.3s var(--n-bezier), margin-top .3s linear, margin-bottom .3s linear, box-shadow
			.3s var(--n-bezier); } .n-notification-container .n-notification { background-color:
			var(--n-color); color: var(--n-text-color); transition: background-color
			.3s var(--n-bezier), color .3s var(--n-bezier), opacity .3s var(--n-bezier),
			box-shadow .3s var(--n-bezier); font-family: inherit; font-size: var(--n-font-size);
			font-weight: 400; position: relative; display: flex; overflow: hidden;
			flex-shrink: 0; padding-left: var(--n-padding-left); padding-right: var(--n-padding-right);
			width: var(--n-width); border-radius: var(--n-border-radius); box-shadow:
			var(--n-box-shadow); box-sizing: border-box; opacity: 1; } .n-notification-container
			.n-notification .n-notification__avatar .n-icon { color: var(--n-icon-color);
			} .n-notification-container .n-notification .n-notification__avatar .n-base-icon
			{ color: var(--n-icon-color); } .n-notification-container .n-notification.n-notification--show-avatar
			.n-notification-main { margin-left: 40px; width: calc(100% - 40px); } .n-notification-container
			.n-notification.n-notification--closable .n-notification-main > *:first-child
			{ padding-right: 20px; } .n-notification-container .n-notification.n-notification--closable
			.n-notification__close { position: absolute; top: 0; right: 0; margin:
			var(--n-close-margin); transition: background-color .3s var(--n-bezier),
			color .3s var(--n-bezier); } .n-notification-container .n-notification
			.n-notification__avatar { position: absolute; top: var(--n-padding-top);
			left: var(--n-padding-left); width: 28px; height: 28px; font-size: 28px;
			display: flex; align-items: center; justify-content: center; } .n-notification-container
			.n-notification .n-notification__avatar .n-icon { transition: color .3s
			var(--n-bezier); } .n-notification-container .n-notification .n-notification-main
			{ padding-top: var(--n-padding-top); padding-bottom: var(--n-padding-bottom);
			box-sizing: border-box; display: flex; flex-direction: column; margin-left:
			8px; width: calc(100% - 8px); } .n-notification-container .n-notification
			.n-notification-main .n-notification-main-footer { display: flex; align-items:
			center; justify-content: space-between; margin-top: 12px; } .n-notification-container
			.n-notification .n-notification-main .n-notification-main-footer .n-notification-main-footer__meta
			{ font-size: var(--n-meta-font-size); transition: color .3s var(--n-bezier-ease-out);
			color: var(--n-description-text-color); } .n-notification-container .n-notification
			.n-notification-main .n-notification-main-footer .n-notification-main-footer__action
			{ cursor: pointer; transition: color .3s var(--n-bezier-ease-out); color:
			var(--n-action-text-color); } .n-notification-container .n-notification
			.n-notification-main .n-notification-main__header { font-weight: var(--n-title-font-weight);
			font-size: var(--n-title-font-size); transition: color .3s var(--n-bezier-ease-out);
			color: var(--n-title-text-color); } .n-notification-container .n-notification
			.n-notification-main .n-notification-main__description { margin-top: 8px;
			font-size: var(--n-description-font-size); transition: color .3s var(--n-bezier-ease-out);
			color: var(--n-description-text-color); } .n-notification-container .n-notification
			.n-notification-main .n-notification-main__content { line-height: var(--n-line-height);
			margin: 12px 0 0 0; font-family: inherit; white-space: pre-wrap; word-wrap:
			break-word; transition: color .3s var(--n-bezier-ease-out); color: var(--n-text-color);
			} .n-notification-container .n-notification .n-notification-main .n-notification-main__content:first-child
			{ margin: 0; }
		</style>
		<style cssr-id="n-loading-bar">
			.n-loading-bar-container { z-index: 5999; position: fixed; top: 0; left:
			0; right: 0; height: 2px; } .n-loading-bar-container.fade-in-transition-enter-active
			{ transition: all 0.3s cubic-bezier(.4, 0, .2, 1)!important; } .n-loading-bar-container.fade-in-transition-leave-active
			{ transition: all 0.8s cubic-bezier(.4, 0, .2, 1)!important; } .n-loading-bar-container.fade-in-transition-enter-from,
			.n-loading-bar-container.fade-in-transition-leave-to { opacity: 0; } .n-loading-bar-container.fade-in-transition-leave-from,
			.n-loading-bar-container.fade-in-transition-enter-to { opacity: 1; } .n-loading-bar-container
			.n-loading-bar { width: 100%; transition: max-width 4s linear, background
			.2s linear; height: var(--n-height); } .n-loading-bar-container .n-loading-bar.n-loading-bar--starting
			{ background: var(--n-color-loading); } .n-loading-bar-container .n-loading-bar.n-loading-bar--finishing
			{ background: var(--n-color-loading); transition: max-width .2s linear,
			background .2s linear; } .n-loading-bar-container .n-loading-bar.n-loading-bar--error
			{ background: var(--n-color-error); transition: max-width .2s linear, background
			.2s linear; }
		</style>
		<style cssr-id="n-global">
			body { margin: 0; font-size: 14px; font-family: v-sans, system-ui, -apple-system,
			BlinkMacSystemFont, "Segoe UI", sans-serif, "Apple Color Emoji", "Segoe
			UI Emoji", "Segoe UI Symbol"; line-height: 1.6; -webkit-text-size-adjust:
			100%; -webkit-tap-highlight-color: transparent; } body input { font-family:
			inherit; font-size: inherit; }
		</style>
		<style cssr-id="n-image">
			body > .n-image-container { position: fixed; } .n-image-preview-container
			{ position: fixed; left: 0; right: 0; top: 0; bottom: 0; display: flex;
			} .n-image-preview-overlay { z-index: -1; position: absolute; left: 0;
			right: 0; top: 0; bottom: 0; background: rgba(0, 0, 0, .3); } .n-image-preview-overlay.fade-in-transition-enter-active
			{ transition: all 0.2s cubic-bezier(.4, 0, .2, 1)!important; } .n-image-preview-overlay.fade-in-transition-leave-active
			{ transition: all 0.2s cubic-bezier(.4, 0, .2, 1)!important; } .n-image-preview-overlay.fade-in-transition-enter-from,
			.n-image-preview-overlay.fade-in-transition-leave-to { opacity: 0; } .n-image-preview-overlay.fade-in-transition-leave-from,
			.n-image-preview-overlay.fade-in-transition-enter-to { opacity: 1; } .n-image-preview-toolbar
			{ z-index: 1; position: absolute; left: 50%; transform: translateX(-50%);
			border-radius: var(--n-toolbar-border-radius); height: 48px; bottom: 40px;
			padding: 0 12px; background: var(--n-toolbar-color); box-shadow: var(--n-toolbar-box-shadow);
			color: var(--n-toolbar-icon-color); transition: color .3s var(--n-bezier);
			display: flex; align-items: center; } .n-image-preview-toolbar .n-base-icon
			{ padding: 0 8px; font-size: 28px; cursor: pointer; } .n-image-preview-toolbar.fade-in-transition-enter-active
			{ transition: all 0.2s cubic-bezier(.4, 0, .2, 1)!important; } .n-image-preview-toolbar.fade-in-transition-leave-active
			{ transition: all 0.2s cubic-bezier(.4, 0, .2, 1)!important; } .n-image-preview-toolbar.fade-in-transition-enter-from,
			.n-image-preview-toolbar.fade-in-transition-leave-to { opacity: 0; } .n-image-preview-toolbar.fade-in-transition-leave-from,
			.n-image-preview-toolbar.fade-in-transition-enter-to { opacity: 1; } .n-image-preview-wrapper
			{ position: absolute; left: 0; right: 0; top: 0; bottom: 0; display: flex;
			pointer-events: none; } .n-image-preview-wrapper.fade-in-scale-up-transition-leave-active
			{ transform-origin: inherit; transition: opacity .2s cubic-bezier(.4, 0,
			1, 1), transform .2s cubic-bezier(.4, 0, 1, 1) ; } .n-image-preview-wrapper.fade-in-scale-up-transition-enter-active
			{ transform-origin: inherit; transition: opacity .2s cubic-bezier(0, 0,
			.2, 1), transform .2s cubic-bezier(0, 0, .2, 1) ; } .n-image-preview-wrapper.fade-in-scale-up-transition-enter-from,
			.n-image-preview-wrapper.fade-in-scale-up-transition-leave-to { opacity:
			0; transform: scale(.9); } .n-image-preview-wrapper.fade-in-scale-up-transition-leave-from,
			.n-image-preview-wrapper.fade-in-scale-up-transition-enter-to { opacity:
			1; transform: scale(1); } .n-image-preview { user-select: none; -webkit-user-select:
			none; pointer-events: all; margin: auto; max-height: calc(100vh - 32px);
			max-width: calc(100vw - 32px); transition: transform .3s var(--n-bezier);
			} .n-image { display: inline-flex; max-height: 100%; max-width: 100%; }
			.n-image:not(.n-image--preview-disabled) { cursor: pointer; } .n-image
			img { border-radius: inherit; }
		</style>
    
    
    
    
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 引入Bootstrap CSS框架 -->
  	<link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap.min2.css">
    		<link rel="stylesheet" href="/css/index.css">
    
    	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
    
    
    
    

<style>

a {
  text-decoration: none!important;
}


.dha a:active {
    background-color: unset!important; 
  /*background: unset!important;*/
  color:unset!important;
}


.page-title {
    
        width: 850px;
    margin: 0 auto;
    
  display: flex;
  justify-content: space-between;
  align-items: center;
  height: 80px;
  background-color: black!important;
  color: #fff;
  padding: 0 20px;
}

.user-info {
  display: flex;
  align-items: center;
}

.avatar {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  overflow: hidden;
  margin-right: 10px;
}

.avatar img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}


.dropdown-toggle {
  display: flex;
  align-items: center;
  cursor: pointer;
}

.ftth{
    background:black!important;    
    background: black!important;
    left: 0;
    bottom: 0;
    width: 100%;
}

@media (max-width: 768px) {
  .page-title {
    width: 100%;
  }
  
  .ftth{
    background:black!important;    
    background: black!important;
    position: unset;
    left: 0;
    bottom: 0;
    width: 100%;
}
  
}


html, body {
  height: 100%!important;
}

body {
  display: flex!important;
  flex-direction: column!important;
}

.content {
  flex-grow: 1!important;
}




</style>
	
        
    
    
    <div style="    background-color: black!important;">



<div class="page-title">
  <h4><a style="color: white;    font-size: 20px;" href="/" class="el-tooltip el-icon-s-home item" aria-describedby="el-tooltip-9813" tabindex="0"></a> <span style="    font-size: 15px;"><a style="color:white;" href="index.php">返回首页</a></span></h4>
  <div class="user-info">
    <div class="dropdown">
      <a  style="color:white;" class="dropdown-toggle" href="#" role="button" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img style="width:50px;height:50px;left: -5px;
    position: relative;" src="/assets/pic.png" alt="avatar" class="rounded-circle">
        <span style="color:white;"><?php echo $_COOKIE['dengluname'];?></span>
      </a>
      <div style="min-width: 8rem;" class="dropdown-menu dha" aria-labelledby="userDropdown">
          
          <a class="dropdown-item" href="/xiugaimima.php">修改密码</a>
        <a class="dropdown-item" href="/taocan.php">购买套餐</a>
        <a class="dropdown-item" href="/index.php?tcdl=1">退出登录</a>
      </div>
  
      
    </div>
    
    
    
  </div>
</div>


    
    </div>
    
    
        
        
        
	<div class="container content">
	    



		<div id="app" data-v-app="">
			<div class="n-config-provider h-full background">
				<div class="n-layout n-layout--static-positioned" style="--n-bezier:cubic-bezier(0.4, 0, 0.2, 1); --n-color:rgb(16, 16, 20); --n-text-color:rgba(255, 255, 255, 0.82); ">
					<div class="n-layout-scroll-container" style="display: flex; flex-flow: row nowrap; width: 100%;">
			
			
						<div class="n-layout n-layout--static-positioned" style="--n-bezier:cubic-bezier(0.4, 0, 0.2, 1); --n-color:rgb(16, 16, 20); --n-text-color:rgba(255, 255, 255, 0.82); min-width: 300px;">
							<div class="n-layout-scroll-container">
								<!---->
								<div class="n-layout-content n-layout n-layout--static-positioned" style="--n-bezier:cubic-bezier(0.4, 0, 0.2, 1); --n-color:rgb(16, 16, 20); --n-text-color:rgba(255, 255, 255, 0.82); ">
									<div class="n-layout-scroll-container" style="background:white;">
										<div class="p-16px h-full bg-[#f6f9f8] dark:bg-[#101014] transition duration-300 ease-in-out"
										style="background:white;">
											<div class="n-grid" style="width: 100%; display: grid; grid-template-columns: repeat(1, minmax(0px, 1fr)); gap: 10px 0px; margin-top: 1rem;">
												<div style="grid-column: span 1 / span 1;">
													<div class="n-card n-card--bordered" style="--n-bezier:cubic-bezier(0.4, 0, 0.2, 1); --n-border-radius:3px; --n-color:rgb(24, 24, 28); --n-color-modal:rgb(44, 44, 50); --n-color-popover:rgb(72, 72, 78); --n-color-embedded:rgb(24, 24, 28); --n-color-embedded-modal:rgb(44, 44, 50); --n-color-embedded-popover:rgb(72, 72, 78); --n-color-target:#1890ff; --n-text-color:rgba(255, 255, 255, 0.82); --n-line-height:1.6; --n-action-color:rgba(255, 255, 255, 0.06); --n-title-text-color:rgba(255, 255, 255, 0.9); --n-title-font-weight:500; --n-close-icon-color:rgba(255, 255, 255, 0.52); --n-close-icon-color-hover:rgba(255, 255, 255, 0.52); --n-close-icon-color-pressed:rgba(255, 255, 255, 0.52); --n-close-color-hover:rgba(255, 255, 255, 0.12); --n-close-color-pressed:rgba(255, 255, 255, 0.08); --n-border-color:rgba(255, 255, 255, 0.09); --n-box-shadow:0 1px 2px -2px rgba(0, 0, 0, 0.24), 0 3px 6px 0 rgba(0, 0, 0, 0.18), 0 5px 12px 4px rgba(0, 0, 0, 0.12); --n-padding-top:19px; --n-padding-bottom:20px; --n-padding-left:24px; --n-font-size:14px; --n-title-font-size:18px; --n-close-size:22px; --n-close-icon-size:18px; --n-close-border-radius:3px;">
														<!---->
														<div class="n-card-header">
															<div class="n-card-header__main" role="heading">
																邀请好友
															</div>
															<!---->
															<!---->
														</div>
														<div class="n-card__content" role="none">
															<div style="text-align: center;">
																<div class="n-card n-card--bordered" style="--n-bezier:cubic-bezier(0.4, 0, 0.2, 1); --n-border-radius:3px; --n-color:rgb(24, 24, 28); --n-color-modal:rgb(44, 44, 50); --n-color-popover:rgb(72, 72, 78); --n-color-embedded:rgb(24, 24, 28); --n-color-embedded-modal:rgb(44, 44, 50); --n-color-embedded-popover:rgb(72, 72, 78); --n-color-target:#1890ff; --n-text-color:rgba(255, 255, 255, 0.82); --n-line-height:1.6; --n-action-color:rgba(255, 255, 255, 0.06); --n-title-text-color:rgba(255, 255, 255, 0.9); --n-title-font-weight:500; --n-close-icon-color:rgba(255, 255, 255, 0.52); --n-close-icon-color-hover:rgba(255, 255, 255, 0.52); --n-close-icon-color-pressed:rgba(255, 255, 255, 0.52); --n-close-color-hover:rgba(255, 255, 255, 0.12); --n-close-color-pressed:rgba(255, 255, 255, 0.08); --n-border-color:rgba(255, 255, 255, 0.09); --n-box-shadow:0 1px 2px -2px rgba(0, 0, 0, 0.24), 0 3px 6px 0 rgba(0, 0, 0, 0.18), 0 5px 12px 4px rgba(0, 0, 0, 0.12); --n-padding-top:19px; --n-padding-bottom:20px; --n-padding-left:24px; --n-font-size:14px; --n-title-font-size:18px; --n-close-size:22px; --n-close-icon-size:18px; --n-close-border-radius:3px;">
																	<!---->
																	<div class="n-card-header">
																		<div class="n-card-header__main" role="heading">
																			邀请链接
																		</div>
																		<!---->
																		<!---->
																	</div>
																	<div class="n-card__content" role="none">
																		<div class="n-input-group">
<div class="n-input n-input--resizable n-input--stateful" style="--n-bezier:cubic-bezier(0.4, 0, 0.2, 1); --n-count-text-color:rgba(255, 255, 255, 0.52); --n-count-text-color-disabled:rgba(255, 255, 255, 0.38); --n-color:rgba(255, 255, 255, 0.1); --n-font-size:14px; --n-border-radius:3px; --n-height:34px; --n-padding-left:12px; --n-padding-right:12px; --n-text-color:rgba(255, 255, 255, 0.82); --n-caret-color:#1890ff; --n-text-decoration-color:rgba(255, 255, 255, 0.82); --n-border:1px solid #0000; --n-border-disabled:1px solid #0000; --n-border-hover:1px solid #40a9ff; --n-border-focus:1px solid #40a9ff; --n-placeholder-color:rgba(255, 255, 255, 0.38); --n-placeholder-color-disabled:rgba(255, 255, 255, 0.28); --n-icon-size:16px; --n-line-height-textarea:1.6; --n-color-disabled:rgba(255, 255, 255, 0.06); --n-color-focus:rgba(24, 144, 255, 0.1); --n-text-color-disabled:rgba(255, 255, 255, 0.38); --n-box-shadow-focus:0 0 8px 0 rgba(24, 144, 255, 0.3); --n-loading-color:#1890ff; --n-caret-color-warning:#faad14; --n-color-focus-warning:rgba(250, 173, 20, 0.1); --n-box-shadow-focus-warning:0 0 8px 0 rgba(250, 173, 20, 0.3); --n-border-warning:1px solid #faad14; --n-border-focus-warning:1px solid #ffc53d; --n-border-hover-warning:1px solid #ffc53d; --n-loading-color-warning:#faad14; --n-caret-color-error:#f5222d; --n-color-focus-error:rgba(245, 34, 45, 0.1); --n-box-shadow-focus-error:0 0 8px 0 rgba(245, 34, 45, 0.3); --n-border-error:1px solid #f5222d; --n-border-focus-error:1px solid #ff4d4f; --n-border-hover-error:1px solid #ff4d4f; --n-loading-color-error:#f5222d; --n-clear-color:rgba(255, 255, 255, 0.38); --n-clear-size:16px; --n-clear-color-hover:rgba(255, 255, 255, 0.48); --n-clear-color-pressed:rgba(255, 255, 255, 0.3); --n-icon-color:rgba(255, 255, 255, 0.38); --n-icon-color-hover:rgba(255, 255, 255, 0.475); --n-icon-color-pressed:rgba(255, 255, 255, 0.304); --n-icon-color-disabled:rgba(255, 255, 255, 0.28); --n-suffix-text-color:rgba(255, 255, 255, 0.82);">
																				<div class="n-input-wrapper">
																					<!---->
																					<div class="n-input__input">
																					    
																					    
																					    
	<input id="yqlj" value="<?php echo $current_url;?>" type="text" class="n-input__input-el" placeholder="邀请链接" readonly="" size="20">
	
	
												
												
												
																				
																						<!---->
																					</div>
																					<!---->
																				</div>
																				<!---->
																				<!---->
																				<div class="n-input__border">
																				</div>
																				<div class="n-input__state-border">
																				</div>
																				<!---->
																			</div>
																			<button id="copyBtn" class="n-button n-button--primary-type n-button--medium-type n-button--ghost goodCard flex1right"
																			tabindex="0" type="button" style="--n-bezier:cubic-bezier(0.4, 0, 0.2, 1); --n-bezier-ease-out:cubic-bezier(0, 0, 0.2, 1); --n-ripple-duration:0.6s; --n-opacity-disabled:0.38; --n-wave-opacity:0.8; font-weight: 400; --n-color:#0000; --n-color-hover:#0000; --n-color-pressed:#0000; --n-color-focus:#0000; --n-color-disabled:#0000; --n-ripple-color:#1890ff; --n-text-color:#1890ff; --n-text-color-hover:#40a9ff; --n-text-color-pressed:#096dd9; --n-text-color-focus:#40a9ff; --n-text-color-disabled:#1890ff; --n-border:1px solid #1890ff; --n-border-hover:1px solid #40a9ff; --n-border-pressed:1px solid #096dd9; --n-border-focus:1px solid #40a9ff; --n-border-disabled:1px solid #1890ff; --n-width: initial; --n-height:34px; --n-font-size:14px; --n-padding:0 14px; --n-icon-size:18px; --n-icon-margin:6px; --n-border-radius:3px;">
																				<!---->
																				<!---->
																				<span  class="n-button__content fzlj">
																					复制链接
																				</span>
																				
											
											
											
				<script>
				    
				    $(document).ready(function(){
  $('#copyBtn').click(function(){
    var copyText = $('#yqlj');
    copyText.select();
    document.execCommand("copy");
    alert("已复制到剪贴板！");
  });
});
				    
				    
				    
				</script>							
											
											
											
											
											
											
																				
																				<div aria-hidden="true" class="n-base-wave">
																				</div>
																				<div aria-hidden="true" class="n-button__border">
																				</div>
																				<div aria-hidden="true" class="n-button__state-border">
																				</div>
																			</button>
																		</div>
																	</div>
																	<!---->
																	<!---->
																</div>
																<div class="n-card n-card--bordered" style="--n-bezier:cubic-bezier(0.4, 0, 0.2, 1); --n-border-radius:3px; --n-color:rgb(24, 24, 28); --n-color-modal:rgb(44, 44, 50); --n-color-popover:rgb(72, 72, 78); --n-color-embedded:rgb(24, 24, 28); --n-color-embedded-modal:rgb(44, 44, 50); --n-color-embedded-popover:rgb(72, 72, 78); --n-color-target:#1890ff; --n-text-color:rgba(255, 255, 255, 0.82); --n-line-height:1.6; --n-action-color:rgba(255, 255, 255, 0.06); --n-title-text-color:rgba(255, 255, 255, 0.9); --n-title-font-weight:500; --n-close-icon-color:rgba(255, 255, 255, 0.52); --n-close-icon-color-hover:rgba(255, 255, 255, 0.52); --n-close-icon-color-pressed:rgba(255, 255, 255, 0.52); --n-close-color-hover:rgba(255, 255, 255, 0.12); --n-close-color-pressed:rgba(255, 255, 255, 0.08); --n-border-color:rgba(255, 255, 255, 0.09); --n-box-shadow:0 1px 2px -2px rgba(0, 0, 0, 0.24), 0 3px 6px 0 rgba(0, 0, 0, 0.18), 0 5px 12px 4px rgba(0, 0, 0, 0.12); --n-padding-top:19px; --n-padding-bottom:20px; --n-padding-left:24px; --n-font-size:14px; --n-title-font-size:18px; --n-close-size:22px; --n-close-icon-size:18px; --n-close-border-radius:3px;">
																	<!---->
																	<!--<div class="n-card-header">-->
																	<!--	<div class="n-card-header__main" role="heading">-->
																	<!--		邀请码-->
																	<!--	</div>-->
																		<!---->
																		<!---->
																	<!--</div>-->
																	
																	
																	
																	
																	
																	
																	
																	<!--<div class="n-card__content" role="none">-->
																	<!--	<canvas width="300" height="300" style="width: 200px; height: 200px; display: inline;">-->
																	<!--	</canvas>-->
																	<!--	<div>-->
																	<!--		<small>-->
																	<!--			邀请好友扫码注册，或长按保存图片-->
																	<!--		</small>-->
																	<!--	</div>-->
																	<!--</div>-->
																	
																	
																	
																	<!---->
																	<!---->
																</div>
															</div>
														</div>
														
														
														
														
														
														
														
														
														
														
														
														
														
<div class="n-card__content" role="none">
															<div style="text-align: center;">
																<div class="n-card n-card--bordered" style="--n-bezier:cubic-bezier(0.4, 0, 0.2, 1); --n-border-radius:3px; --n-color:rgb(24, 24, 28); --n-color-modal:rgb(44, 44, 50); --n-color-popover:rgb(72, 72, 78); --n-color-embedded:rgb(24, 24, 28); --n-color-embedded-modal:rgb(44, 44, 50); --n-color-embedded-popover:rgb(72, 72, 78); --n-color-target:#1890ff; --n-text-color:rgba(255, 255, 255, 0.82); --n-line-height:1.6; --n-action-color:rgba(255, 255, 255, 0.06); --n-title-text-color:rgba(255, 255, 255, 0.9); --n-title-font-weight:500; --n-close-icon-color:rgba(255, 255, 255, 0.52); --n-close-icon-color-hover:rgba(255, 255, 255, 0.52); --n-close-icon-color-pressed:rgba(255, 255, 255, 0.52); --n-close-color-hover:rgba(255, 255, 255, 0.12); --n-close-color-pressed:rgba(255, 255, 255, 0.08); --n-border-color:rgba(255, 255, 255, 0.09); --n-box-shadow:0 1px 2px -2px rgba(0, 0, 0, 0.24), 0 3px 6px 0 rgba(0, 0, 0, 0.18), 0 5px 12px 4px rgba(0, 0, 0, 0.12); --n-padding-top:19px; --n-padding-bottom:20px; --n-padding-left:24px; --n-font-size:14px; --n-title-font-size:18px; --n-close-size:22px; --n-close-icon-size:18px; --n-close-border-radius:3px;">
																	<!---->
																	<div class="n-card-header">
																		<div class="n-card-header__main" role="heading">
																		    
																		    <?php
																		    
																		    $sql = "select dsktxye from chat_admin where id = 1";
																		    $kexyee = $mysql->getOne($sql);
																		$dqyhss = $_COOKIE['dengluname'];						    
																		 		$sql = "select ketixian from chat_yonghu where yhmc='$dqyhss'";
							
						$hqsyyq = $mysql->getOne($sql);	
						  							    ?>
																		    
																		    
																			可提现(满<?php echo $kexyee;?>可提现)！
																		</div>
																		
																		
																		
																		
																		
																		
																		
																		<!---->
																		<!---->
																	</div>
																	
																	
																	
																	<div class="n-card__content" role="none">
																	    
																	    
																	    
																		<div class="n-input-group">
<div class="n-input n-input--resizable n-input--stateful" style="--n-bezier:cubic-bezier(0.4, 0, 0.2, 1); --n-count-text-color:rgba(255, 255, 255, 0.52); --n-count-text-color-disabled:rgba(255, 255, 255, 0.38); --n-color:rgba(255, 255, 255, 0.1); --n-font-size:14px; --n-border-radius:3px; --n-height:34px; --n-padding-left:12px; --n-padding-right:12px; --n-text-color:rgba(255, 255, 255, 0.82); --n-caret-color:#1890ff; --n-text-decoration-color:rgba(255, 255, 255, 0.82); --n-border:1px solid #0000; --n-border-disabled:1px solid #0000; --n-border-hover:1px solid #40a9ff; --n-border-focus:1px solid #40a9ff; --n-placeholder-color:rgba(255, 255, 255, 0.38); --n-placeholder-color-disabled:rgba(255, 255, 255, 0.28); --n-icon-size:16px; --n-line-height-textarea:1.6; --n-color-disabled:rgba(255, 255, 255, 0.06); --n-color-focus:rgba(24, 144, 255, 0.1); --n-text-color-disabled:rgba(255, 255, 255, 0.38); --n-box-shadow-focus:0 0 8px 0 rgba(24, 144, 255, 0.3); --n-loading-color:#1890ff; --n-caret-color-warning:#faad14; --n-color-focus-warning:rgba(250, 173, 20, 0.1); --n-box-shadow-focus-warning:0 0 8px 0 rgba(250, 173, 20, 0.3); --n-border-warning:1px solid #faad14; --n-border-focus-warning:1px solid #ffc53d; --n-border-hover-warning:1px solid #ffc53d; --n-loading-color-warning:#faad14; --n-caret-color-error:#f5222d; --n-color-focus-error:rgba(245, 34, 45, 0.1); --n-box-shadow-focus-error:0 0 8px 0 rgba(245, 34, 45, 0.3); --n-border-error:1px solid #f5222d; --n-border-focus-error:1px solid #ff4d4f; --n-border-hover-error:1px solid #ff4d4f; --n-loading-color-error:#f5222d; --n-clear-color:rgba(255, 255, 255, 0.38); --n-clear-size:16px; --n-clear-color-hover:rgba(255, 255, 255, 0.48); --n-clear-color-pressed:rgba(255, 255, 255, 0.3); --n-icon-color:rgba(255, 255, 255, 0.38); --n-icon-color-hover:rgba(255, 255, 255, 0.475); --n-icon-color-pressed:rgba(255, 255, 255, 0.304); --n-icon-color-disabled:rgba(255, 255, 255, 0.28); --n-suffix-text-color:rgba(255, 255, 255, 0.82);">
													
													
	
												
															
																				<div class="n-input-wrapper">
																	
	<input id="yqljzfb" value="支付宝" type="text" class="n-input__input-el zfbhm" placeholder="可提现"  size="20">
																		    
																				    
																				    
																					<!---->
																					<div class="n-input__input">
																					    
																					    
																					    
	<input id="yqlj" value="你当前有<?php echo $hqsyyq;?>元" type="text" class="n-input__input-el" placeholder="可提现" readonly="" size="20">
	
	
																				
																						<!---->
																					</div>
																					<!---->
																				</div>
																				<!---->
																				<!---->
																				<div class="n-input__border">
																				</div>
																				<div class="n-input__state-border">
																				</div>
																				<!---->
																			</div>
																			<button id="txyx" class="n-button n-button--primary-type n-button--medium-type n-button--ghost goodCard flex1right" tabindex="0" type="button" style="--n-bezier:cubic-bezier(0.4, 0, 0.2, 1); --n-bezier-ease-out:cubic-bezier(0, 0, 0.2, 1); --n-ripple-duration:0.6s; --n-opacity-disabled:0.38; --n-wave-opacity:0.8; font-weight: 400; --n-color:#0000; --n-color-hover:#0000; --n-color-pressed:#0000; --n-color-focus:#0000; --n-color-disabled:#0000; --n-ripple-color:#1890ff; --n-text-color:#1890ff; --n-text-color-hover:#40a9ff; --n-text-color-pressed:#096dd9; --n-text-color-focus:#40a9ff; --n-text-color-disabled:#1890ff; --n-border:1px solid #1890ff; --n-border-hover:1px solid #40a9ff; --n-border-pressed:1px solid #096dd9; --n-border-focus:1px solid #40a9ff; --n-border-disabled:1px solid #1890ff; --n-width: initial; --n-height:34px; --n-font-size:14px; --n-padding:0 14px; --n-icon-size:18px; --n-icon-margin:6px; --n-border-radius:3px;">
																				<!---->
																				<!---->
																				<span   class="n-button__content txyx txhtml">
																					提现
																				</span>
																				
											
											
											
				<script>


$(document).ready(function(){
    
var inputBox = document.getElementById("yqljzfb"); // 获取输入框元素
inputBox.onclick = function() { // 监听输入框点击事件
  inputBox.value = ""; // 将输入框内容清空
};


  var sfyjdj = true;
    
      
  $('#txyx').click(function(event){
      
      
function isPhoneNumber(phoneNumber) {
  var reg = /^1[3456789]\d{9}$/; // 手机号正则表达式
  return reg.test(phoneNumber); // 返回手机号是否匹配正则表达式
}

var zfbhm = $('.zfbhm').val();




if (!(isPhoneNumber(zfbhm))) {
  
  alert('必须输入手机号的支付宝');
  
   event.stopImmediatePropagation();
  return false;
  
}
      
      
      
      
      
$('.txhtml').html('等待...');

      if(sfyjdj){
          
          
             $.ajax({
  url: "tool.php", // 提交的地址
  type: "POST", // 提交的方式
  data: { // 提交的数据
    txje: "<?php echo $hqsyyq;?>",
    yhss: "<?php echo $dqyhss;?>",
    zfbhm:zfbhm,
    'biaoshi':"提现余额",
  },
  dataType: "json", // 返回的数据类型
  success: function(response) { // 成功回调函数
  
  
  
  
  if(response == 0){
      alert('提现金额小于最低提现额度');
      $('.txhtml').html('提现');
      event.stopImmediatePropagation();
         return false;
  }else if(response == 2){
      
      
      alert('未知错误 请联系管理员处理！');
      
      $('.txhtml').html('提现');
       event.stopImmediatePropagation();
         return false;
      
  }else{
      
      sfyjdj = false;
      
      alert('提现成功');
         $('.txhtml').html('提现');
         
         location.reload();
         
      
  }
  
  
    console.log(response);
    
    
    
    
  },
  error: function(xhr, status, error) { // 失败回调函数
    console.log(error);
  }
});
      }else{
          alert('无法重复提现');
            $('.txhtml').html('提现');
                 event.stopImmediatePropagation();
         return false;
      }
      
      
    // var copyText = $('#yqlj');
    // copyText.select();
    // document.execCommand("copy");
    // alert("已复制到剪贴板！");
    
  });
});
				    
				    
				    
				</script>							
											
											
											
											
											
											
																				
																				<div aria-hidden="true" class="n-base-wave">
																				</div>
																				<div aria-hidden="true" class="n-button__border">
																				</div>
																				<div aria-hidden="true" class="n-button__state-border">
																				</div>
																			</button>
																		</div>
																	</div>
																	<!---->
																	<!---->
																</div>
																
																
																
																
																
																
																
																
																
																
																
																
																
																
																
																
																
																
																
																
																
																
																
																
																
																
																
																
																
																
																
																
																<div class="n-card n-card--bordered" style="--n-bezier:cubic-bezier(0.4, 0, 0.2, 1); --n-border-radius:3px; --n-color:rgb(24, 24, 28); --n-color-modal:rgb(44, 44, 50); --n-color-popover:rgb(72, 72, 78); --n-color-embedded:rgb(24, 24, 28); --n-color-embedded-modal:rgb(44, 44, 50); --n-color-embedded-popover:rgb(72, 72, 78); --n-color-target:#1890ff; --n-text-color:rgba(255, 255, 255, 0.82); --n-line-height:1.6; --n-action-color:rgba(255, 255, 255, 0.06); --n-title-text-color:rgba(255, 255, 255, 0.9); --n-title-font-weight:500; --n-close-icon-color:rgba(255, 255, 255, 0.52); --n-close-icon-color-hover:rgba(255, 255, 255, 0.52); --n-close-icon-color-pressed:rgba(255, 255, 255, 0.52); --n-close-color-hover:rgba(255, 255, 255, 0.12); --n-close-color-pressed:rgba(255, 255, 255, 0.08); --n-border-color:rgba(255, 255, 255, 0.09); --n-box-shadow:0 1px 2px -2px rgba(0, 0, 0, 0.24), 0 3px 6px 0 rgba(0, 0, 0, 0.18), 0 5px 12px 4px rgba(0, 0, 0, 0.12); --n-padding-top:19px; --n-padding-bottom:20px; --n-padding-left:24px; --n-font-size:14px; --n-title-font-size:18px; --n-close-size:22px; --n-close-icon-size:18px; --n-close-border-radius:3px;">
																	<!---->
																	<!--<div class="n-card-header">-->
																	<!--	<div class="n-card-header__main" role="heading">-->
																	<!--		邀请码-->
																	<!--	</div>-->
																		<!---->
																		<!---->
																	<!--</div>-->
																	
																	
																	
																	
																	
																	
																	
																	<!--<div class="n-card__content" role="none">-->
																	<!--	<canvas width="300" height="300" style="width: 200px; height: 200px; display: inline;">-->
																	<!--	</canvas>-->
																	<!--	<div>-->
																	<!--		<small>-->
																	<!--			邀请好友扫码注册，或长按保存图片-->
																	<!--		</small>-->
																	<!--	</div>-->
																	<!--</div>-->
																	
																	
																	
																	<!---->
																	<!---->
																</div>
															</div>
														</div>							
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														<!---->
														<!---->
													</div>
												</div>
												<div style="grid-column: span 1 / span 1;">
													<div class="n-card n-card--bordered" style="--n-bezier:cubic-bezier(0.4, 0, 0.2, 1); --n-border-radius:3px; --n-color:rgb(24, 24, 28); --n-color-modal:rgb(44, 44, 50); --n-color-popover:rgb(72, 72, 78); --n-color-embedded:rgb(24, 24, 28); --n-color-embedded-modal:rgb(44, 44, 50); --n-color-embedded-popover:rgb(72, 72, 78); --n-color-target:#1890ff; --n-text-color:rgba(255, 255, 255, 0.82); --n-line-height:1.6; --n-action-color:rgba(255, 255, 255, 0.06); --n-title-text-color:rgba(255, 255, 255, 0.9); --n-title-font-weight:500; --n-close-icon-color:rgba(255, 255, 255, 0.52); --n-close-icon-color-hover:rgba(255, 255, 255, 0.52); --n-close-icon-color-pressed:rgba(255, 255, 255, 0.52); --n-close-color-hover:rgba(255, 255, 255, 0.12); --n-close-color-pressed:rgba(255, 255, 255, 0.08); --n-border-color:rgba(255, 255, 255, 0.09); --n-box-shadow:0 1px 2px -2px rgba(0, 0, 0, 0.24), 0 3px 6px 0 rgba(0, 0, 0, 0.18), 0 5px 12px 4px rgba(0, 0, 0, 0.12); --n-padding-top:19px; --n-padding-bottom:20px; --n-padding-left:24px; --n-font-size:14px; --n-title-font-size:18px; --n-close-size:22px; --n-close-icon-size:18px; --n-close-border-radius:3px;">
														<!---->
														<div class="n-card-header">
															<div class="n-card-header__main" role="heading">
																活动介绍
															</div>
															<!---->
															<!---->
														</div>
														<div class="n-card__content" role="none">
															<div>
															    
															    
				<p>  
				
				<?php
					//获取佣金比例
						$sql = "select fanli from chat_admin where id = '1'";
						$yjbl = $mysql->getOne($sql);
				
				?>
				
				
				邀请用户下单返利高达百分之<?php echo $yjbl;?>的奖励，例如你邀请一个人充值10元，你就获得<?php echo round(10*$yjbl/100) ?>元，充值100你就获得<?php echo round(100*$yjbl/100) ?>元，下级关系永久绑定，下级回购依然有奖励，余额你可以自己购买提问次数或者提现！
				
				
	</p>
																
																
														
															</div>
														</div>
														<!---->
														<!---->
													</div>
												</div>
												<div style="grid-column: span 1 / span 1;">
													<div class="n-card n-card--bordered" style="--n-bezier:cubic-bezier(0.4, 0, 0.2, 1); --n-border-radius:3px; --n-color:rgb(24, 24, 28); --n-color-modal:rgb(44, 44, 50); --n-color-popover:rgb(72, 72, 78); --n-color-embedded:rgb(24, 24, 28); --n-color-embedded-modal:rgb(44, 44, 50); --n-color-embedded-popover:rgb(72, 72, 78); --n-color-target:#1890ff; --n-text-color:rgba(255, 255, 255, 0.82); --n-line-height:1.6; --n-action-color:rgba(255, 255, 255, 0.06); --n-title-text-color:rgba(255, 255, 255, 0.9); --n-title-font-weight:500; --n-close-icon-color:rgba(255, 255, 255, 0.52); --n-close-icon-color-hover:rgba(255, 255, 255, 0.52); --n-close-icon-color-pressed:rgba(255, 255, 255, 0.52); --n-close-color-hover:rgba(255, 255, 255, 0.12); --n-close-color-pressed:rgba(255, 255, 255, 0.08); --n-border-color:rgba(255, 255, 255, 0.09); --n-box-shadow:0 1px 2px -2px rgba(0, 0, 0, 0.24), 0 3px 6px 0 rgba(0, 0, 0, 0.18), 0 5px 12px 4px rgba(0, 0, 0, 0.12); --n-padding-top:19px; --n-padding-bottom:20px; --n-padding-left:24px; --n-font-size:14px; --n-title-font-size:18px; --n-close-size:22px; --n-close-icon-size:18px; --n-close-border-radius:3px;">
														<!---->
														<div class="n-card-header">
															<div class="n-card-header__main" role="heading">
																邀请的用户数据
															</div>
															<!---->
															<!---->
														</div>
														
														
														<div class="n-card__content" role="none">
															<div class="n-grid" style="width: 100%; display: grid; grid-template-columns: repeat(3, minmax(0px, 1fr)); gap: 0px; text-align: center; margin-bottom: 1rem;">
																<div style="grid-column: span 1 / span 1;">
																	<div class="n-statistic" style="--n-bezier:cubic-bezier(0.4, 0, 0.2, 1); --n-label-font-size:14px; --n-label-font-weight:400; --n-label-text-color:rgba(255, 255, 255, 0.52); --n-value-font-weight:400; --n-value-font-size:24px; --n-value-prefix-text-color:rgba(255, 255, 255, 0.82); --n-value-suffix-text-color:rgba(255, 255, 255, 0.82); --n-value-text-color:rgba(255, 255, 255, 0.82);">
																		<div class="n-statistic__label">
																			已邀请
																		</div>
																		<div class="n-statistic-value">
																			<!---->
																			<span class="n-statistic-value__content">
																				
																				
																				
																	<?php
																	
																						
						$sql = "select * from chat_yonghu where orshangji='$yqm'";
							
						$hqsyyq = $mysql->getAll($sql);	
							
											$hqsyyq = count($hqsyyq);						
																	echo $hqsyyq;
																	?>			
																				
																				
																				
																			</span>
																			<!---->
																		</div>
																	</div>
																</div>
																<div style="grid-column: span 1 / span 1;">
																	<div class="n-statistic" style="--n-bezier:cubic-bezier(0.4, 0, 0.2, 1); --n-label-font-size:14px; --n-label-font-weight:400; --n-label-text-color:rgba(255, 255, 255, 0.52); --n-value-font-weight:400; --n-value-font-size:24px; --n-value-prefix-text-color:rgba(255, 255, 255, 0.82); --n-value-suffix-text-color:rgba(255, 255, 255, 0.82); --n-value-text-color:rgba(255, 255, 255, 0.82);">
																		<div class="n-statistic__label">
																			邀请总消费
																		</div>
																		<div class="n-statistic-value">
																			<!---->
																			<span class="n-statistic-value__content">
																			
																							<?php
												
																						
						$sql = "select SUM(zongxiaofei) from chat_yonghu where orshangji='$yqm'";
							
						$hqsyyq = $mysql->getOne($sql);	
							
													
																	echo $hqsyyq;
																	?>	
																				
																				
																				
																				¥
																			</span>
																			<!---->
																		</div>
																	</div>
																</div>
																<div style="grid-column: span 1 / span 1;">
																	<div class="n-statistic" style="--n-bezier:cubic-bezier(0.4, 0, 0.2, 1); --n-label-font-size:14px; --n-label-font-weight:400; --n-label-text-color:rgba(255, 255, 255, 0.52); --n-value-font-weight:400; --n-value-font-size:24px; --n-value-prefix-text-color:rgba(255, 255, 255, 0.82); --n-value-suffix-text-color:rgba(255, 255, 255, 0.82); --n-value-text-color:rgba(255, 255, 255, 0.82);">
																	    
																	    
																	    
																	    
				
							
							
						
						<?php
						
							$sql = "select cishuoryongjin from chat_admin where id = '1'";
							
							$cishsyj = $mysql->getOne($sql);	
							
					
					        if($cishsyj == 1){ ?>
					            
					       
					       					<div class="n-statistic__label">
																			返利积分(1积分=1元) 可提现也可购买本站套餐
																		</div>
																		<div class="n-statistic-value">
																			<!---->
																			<span class="n-statistic-value__content">
																		
											
																	<?php
							
							$dqyhss = $_COOKIE['dengluname'];					
						//获取佣金比例
						$sql = "select fanli from chat_admin where id = '1'";
						$yjbl = $mysql->getOne($sql);	
						
						
																						
						$sql = "select ketixian from chat_yonghu where yhmc='$dqyhss'";
							
						$hqsyyq = $mysql->getOne($sql);	
						
						
					print_r($hqsyyq." 积分");
																	?>	
																									
																		
																				
																				
																				
																			
																			</span>
																			<!---->
																		</div>
					       
					       
					       <?php  }else{ ?>
					
					
					
						
						<!--废弃-->
						
							<div class="n-statistic__label">
																			返利总次数
																		</div>
																		<div class="n-statistic-value">
																			<!---->
																			<span class="n-statistic-value__content">
																		
											
																	<?php
							
							$dqyhss = $_COOKIE['dengluname'];					
						//获取佣金比例
						$sql = "select fanli from chat_admin where id = '1'";
						$yjbl = $mysql->getOne($sql);	
						
						
																						
						$sql = "select yqzscs from chat_yonghu where yhmc='$dqyhss'";
							
						$hqsyyq = $mysql->getOne($sql);	
						
						
					print_r($hqsyyq." 次");
																	?>	
																									
																		
																		
																		
																				
																				
																				
																				
																			</span>
																			<!---->
																		</div>
					       
						
												    
																	    
													
																		
											   <?php  } ?>							
																		
																		
																		
																		
																		
																	</div>
																</div>
															</div>
															<div class="n-data-table n-data-table--bottom-bordered n-data-table--single-line"
															style="--n-font-size:14px; --n-th-padding:12px; --n-td-padding:12px; --n-bezier:cubic-bezier(0.4, 0, 0.2, 1); --n-border-radius:3px; --n-line-height:1.6; --n-border-color:rgba(45, 45, 48, 1); --n-border-color-modal:rgba(63, 63, 68, 1); --n-border-color-popover:rgba(88, 88, 94, 1); --n-th-color:rgba(38, 38, 42, 1); --n-th-color-hover:rgba(51, 51, 55, 1); --n-th-color-modal:rgba(57, 57, 62, 1); --n-th-color-hover-modal:rgba(69, 69, 74, 1); --n-th-color-popover:rgba(83, 83, 89, 1); --n-th-color-hover-popover:rgba(93, 93, 99, 1); --n-td-color:rgb(24, 24, 28); --n-td-color-hover:rgba(38, 38, 42, 1); --n-td-color-modal:rgb(44, 44, 50); --n-td-color-hover-modal:rgba(57, 57, 62, 1); --n-td-color-popover:rgb(72, 72, 78); --n-td-color-hover-popover:rgba(83, 83, 89, 1); --n-th-text-color:rgba(255, 255, 255, 0.9); --n-td-text-color:rgba(255, 255, 255, 0.82); --n-th-font-weight:500; --n-th-button-color-hover:rgba(255, 255, 255, 0.06); --n-th-icon-color:rgba(255, 255, 255, 0.38); --n-th-icon-color-active:#1890ff; --n-filter-size:15px; --n-pagination-margin:12px 0 0 0; --n-empty-padding:48px 0; --n-box-shadow-before:inset -12px 0 8px -12px rgba(0, 0, 0, 0.36); --n-box-shadow-after:inset 12px 0 8px -12px rgba(0, 0, 0, 0.36); --n-sorter-size:15px; --n-resizable-container-size:8px; --n-resizable-size:2px; --n-loading-size:28px; --n-loading-color:#1890ff; --n-opacity-loading:0.38; --n-td-color-striped:rgba(36, 36, 39, 1); --n-td-color-striped-modal:rgba(55, 55, 60, 1); --n-td-color-striped-popover:rgba(81, 81, 87, 1);">
																<div class="n-data-table-wrapper">
																	<div class="n-data-table-base-table">
																		<!---->
																		<div class="n-data-table-base-table-body n-scrollbar" role="none" style="--n-scrollbar-bezier:cubic-bezier(0.4, 0, 0.2, 1); --n-scrollbar-color:rgba(255, 255, 255, 0.2); --n-scrollbar-color-hover:rgba(255, 255, 255, 0.3); --n-scrollbar-border-radius:5px; --n-scrollbar-width:5px; --n-scrollbar-height:5px;">
																			<div role="none" class="n-scrollbar-container">
																				<div role="none" class="n-scrollbar-content" style="width: fit-content; min-width: 100%;">
																					<table class="n-data-table-table" style="table-layout: auto;">
																						<colgroup>
																							<col>
																								<col>
																									<col>
																										<col>
																						</colgroup>
																						<thead class="n-data-table-thead" data-n-id="f10adb48">
																							<tr class="n-data-table-tr">
																								<th colspan="1" rowspan="1" data-col-key="username" class="n-data-table-th">
																									<div class="n-data-table-th__title-wrapper">
																										<div class="n-data-table-th__title">
																											用户名
																										</div>
																										<!---->
																									</div>
																									<!---->
																									<!---->
																								</th>
																								<th colspan="1" rowspan="1" data-col-key="registerTime" class="n-data-table-th">
																									<div class="n-data-table-th__title-wrapper">
																										<div class="n-data-table-th__title">
																											注册时间
																										</div>
																										<!---->
																									</div>
																									<!---->
																									<!---->
																								</th>
																								<th colspan="1" rowspan="1" data-col-key="consumeMoney" class="n-data-table-th">
																									<div class="n-data-table-th__title-wrapper">
																										<div class="n-data-table-th__title">
																											Ta总消费
																										</div>
																										<!---->
																									</div>
																									<!---->
																									<!---->
																								</th>
																								<th colspan="1" rowspan="1" data-col-key="rebateMoney" class="n-data-table-th n-data-table-th--last">
																									<div class="n-data-table-th__title-wrapper">
																										<div class="n-data-table-th__title">
																											返利积分
																										</div>
																										<!---->
																									</div>
																									<!---->
																									<!---->
																								</th>
																							</tr>
																						</thead>
																						
																						
																	
							<?php
							
							
							
// 获取总记录数
$sql = "SELECT COUNT(*) FROM chat_yonghu where orshangji='$yqm' order by id desc";
$zsss = $mysql->getOne($sql);



// 计算总页数
$pageSize = 10;
$totalPage = ceil($zsss / $pageSize);


// 获取当前页码
$page = isset($_GET["page"]) ? intval($_GET["page"]) : 1;
if ($page < 1) {
    $page = 1;
} elseif ($page > $totalPage) {
    $page = $totalPage;
}


if($zsss != 0){
    // 获取当前页的数据
$offset = ($page - 1) * $pageSize;
$sql = "SELECT * FROM chat_yonghu where orshangji='$yqm' order by id desc LIMIT $offset, $pageSize";
$result = $mysql->getAll($sql);
}







if($result != ''){
    foreach ($result as $value) {
							   echo '									
														<tbody data-n-id="854e8265" class="n-data-table-tbody"><tr class="n-data-table-tr"><td colspan="1" rowspan="1" data-col-key="username" class="n-data-table-td n-data-table-td--last-row"><!---->
														
														'.$value['yhmc'].'
														
														</td><td colspan="1" rowspan="1" data-col-key="registerTime" class="n-data-table-td n-data-table-td--last-row"><!---->
														
													'.$value['time'].'
														
														</td><td colspan="1" rowspan="1" data-col-key="consumeMoney" class="n-data-table-td n-data-table-td--last-row">
														
														
												'.$value['zongxiaofei'].'
														
														
														</td>
														
														
														
														<td colspan="1" rowspan="1" data-col-key="rebateMoney" class="n-data-table-td n-data-table-td--last-col n-data-table-td--last-row"><!---->
														
									
									'.round($value['zongxiaofei']*$yjbl/100).'					
													
														
														
														
														</td>
														
														</tr></tbody>';
							}
							
}
							

			
					
							
							?>										
											
											
											
											
											
																	
																						
																						
																						
																		
																		
																		
																		
																		
																						
																						
																						
																						
																						<!---->
																					</table>
																				</div>
																				
																			</div>
																			
																	
																	
																	
																	
																	
					   <style>
   /* 按钮样式 */
        .button {
            display: inline-block;
            padding: 5px 10px;
            background-color: black;
            color: white;
            border: 1px solid gray;
            border-radius: 5px;
            cursor: pointer;
        }
        /* 左箭头样式 */
        .left-arrow {
            display: inline-block;
            width: 0;
            height: 0;
            border-top: 5px solid transparent;
            border-bottom: 5px solid transparent;
            border-right: 5px solid white;
            margin-right: 5px;
        }
        /* 右箭头样式 */
        .right-arrow {
            display: inline-block;
            width: 0;
            height: 0;
            border-top: 5px solid transparent;
            border-bottom: 5px solid transparent;
            border-left: 5px solid white;
            margin-left: 5px;
        }
        /* 按钮容器样式 */
        .button-container {
            text-align: center;
        }
        .button-container a:hover{
            color: white;
        }
        
    </style>		
    
    
    
    <br>    <br>
    
    
    
    <?php
    
    
    

// 显示分页按钮
echo "<div class='button-container'>";
if ($page > 1) {
    echo "<a href='?page=".($page-1)."' class='button'><span class='left-arrow'></span>上一页</a>";
}
if ($page < $totalPage) {
    echo "<a href='?page=".($page+1)."' class='button'>下一页<span class='right-arrow'></span></a>";
}
echo "</div>";
    
    
    ?>
    
    
		 <!--<div class="button-container">-->
        <!-- 上一页按钮 -->
   <!--     <a href="#" class="button">-->
   <!--         <span class="left-arrow"></span>-->
   <!--         上一页-->
   <!--     </a>-->
        <!-- 下一页按钮 -->
   <!--     <a href="#" class="button">-->
   <!--         下一页-->
   <!--         <span class="right-arrow"></span>-->
   <!--     </a>-->
   <!-- </div>										-->
																	
																	
																	
																	
																	
																<?php
																
																if($zsss == 0){
																    echo '	<div class="n-scrollbar-rail n-scrollbar-rail--vertical n-scrollbar-rail--disabled"
																			data-scrollbar-rail="true" aria-hidden="true" style="z-index: 3;">
																				<!---->
																			</div>
																			<div class="n-scrollbar-rail n-scrollbar-rail--horizontal n-scrollbar-rail--disabled"
																			data-scrollbar-rail="true" aria-hidden="true" style="z-index: 3;">
																				<!---->
																			</div>
																		</div>
																		<div class="n-data-table-empty">
																			<div class="n-empty" style="--n-icon-size:40px; --n-font-size:14px; --n-bezier:cubic-bezier(0.4, 0, 0.2, 1); --n-text-color:rgba(255, 255, 255, 0.38); --n-icon-color:rgba(255, 255, 255, 0.38); --n-extra-text-color:rgba(255, 255, 255, 0.82);">
																				<div class="n-empty__icon">
																					<i class="n-base-icon">
																						<svg viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
																							<path d="M26 7.5C26 11.0899 23.0899 14 19.5 14C15.9101 14 13 11.0899 13 7.5C13 3.91015 15.9101 1 19.5 1C23.0899 1 26 3.91015 26 7.5ZM16.8536 4.14645C16.6583 3.95118 16.3417 3.95118 16.1464 4.14645C15.9512 4.34171 15.9512 4.65829 16.1464 4.85355L18.7929 7.5L16.1464 10.1464C15.9512 10.3417 15.9512 10.6583 16.1464 10.8536C16.3417 11.0488 16.6583 11.0488 16.8536 10.8536L19.5 8.20711L22.1464 10.8536C22.3417 11.0488 22.6583 11.0488 22.8536 10.8536C23.0488 10.6583 23.0488 10.3417 22.8536 10.1464L20.2071 7.5L22.8536 4.85355C23.0488 4.65829 23.0488 4.34171 22.8536 4.14645C22.6583 3.95118 22.3417 3.95118 22.1464 4.14645L19.5 6.79289L16.8536 4.14645Z"
																							fill="currentColor">
																							</path>
																							<path d="M25 22.75V12.5991C24.5572 13.0765 24.053 13.4961 23.5 13.8454V16H17.5L17.3982 16.0068C17.0322 16.0565 16.75 16.3703 16.75 16.75C16.75 18.2688 15.5188 19.5 14 19.5C12.4812 19.5 11.25 18.2688 11.25 16.75L11.2432 16.6482C11.1935 16.2822 10.8797 16 10.5 16H4.5V7.25C4.5 6.2835 5.2835 5.5 6.25 5.5H12.2696C12.4146 4.97463 12.6153 4.47237 12.865 4H6.25C4.45507 4 3 5.45507 3 7.25V22.75C3 24.5449 4.45507 26 6.25 26H21.75C23.5449 26 25 24.5449 25 22.75ZM4.5 22.75V17.5H9.81597L9.85751 17.7041C10.2905 19.5919 11.9808 21 14 21L14.215 20.9947C16.2095 20.8953 17.842 19.4209 18.184 17.5H23.5V22.75C23.5 23.7165 22.7165 24.5 21.75 24.5H6.25C5.2835 24.5 4.5 23.7165 4.5 22.75Z"
																							fill="currentColor">
																							</path>
																						</svg>
																					</i>
																				</div>
														
													
																				<div class="n-empty__description">
																
																	
																					暂无更多数据
																				</div>
															
																			</div>';
																}
																
																
																?>			
																			
																		
																			
																			
																			
																			
																			
																			
																			
																			
																			
																			
																			
																			
																		</div>
																	</div>
																</div>
																<!---->
																<!---->
															</div>
														</div>
														<!---->
														<!---->
													</div>
												</div>
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
		
																
																
																<div class="n-card n-card--bordered" style="--n-bezier:cubic-bezier(0.4, 0, 0.2, 1); --n-border-radius:3px; --n-color:rgb(24, 24, 28); --n-color-modal:rgb(44, 44, 50); --n-color-popover:rgb(72, 72, 78); --n-color-embedded:rgb(24, 24, 28); --n-color-embedded-modal:rgb(44, 44, 50); --n-color-embedded-popover:rgb(72, 72, 78); --n-color-target:#1890ff; --n-text-color:rgba(255, 255, 255, 0.82); --n-line-height:1.6; --n-action-color:rgba(255, 255, 255, 0.06); --n-title-text-color:rgba(255, 255, 255, 0.9); --n-title-font-weight:500; --n-close-icon-color:rgba(255, 255, 255, 0.52); --n-close-icon-color-hover:rgba(255, 255, 255, 0.52); --n-close-icon-color-pressed:rgba(255, 255, 255, 0.52); --n-close-color-hover:rgba(255, 255, 255, 0.12); --n-close-color-pressed:rgba(255, 255, 255, 0.08); --n-border-color:rgba(255, 255, 255, 0.09); --n-box-shadow:0 1px 2px -2px rgba(0, 0, 0, 0.24), 0 3px 6px 0 rgba(0, 0, 0, 0.18), 0 5px 12px 4px rgba(0, 0, 0, 0.12); --n-padding-top:19px; --n-padding-bottom:20px; --n-padding-left:24px; --n-font-size:14px; --n-title-font-size:18px; --n-close-size:22px; --n-close-icon-size:18px; --n-close-border-radius:3px;">
																	<!---->
																	<!--<div class="n-card-header">-->
																	<!--	<div class="n-card-header__main" role="heading">-->
																	<!--		邀请码-->
																	<!--	</div>-->
																		<!---->
																		<!---->
																	<!--</div>-->
																	
																	
																	
																	
																	
																	
																	
																	<!--<div class="n-card__content" role="none">-->
																	<!--	<canvas width="300" height="300" style="width: 200px; height: 200px; display: inline;">-->
																	<!--	</canvas>-->
																	<!--	<div>-->
																	<!--		<small>-->
																	<!--			邀请好友扫码注册，或长按保存图片-->
																	<!--		</small>-->
																	<!--	</div>-->
																	<!--</div>-->
																	
																	
																	
																	<!---->
																	<!---->
																</div>
															</div>
														</div>							
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														<!---->
														<!---->
													</div>
												</div>
												<div style="grid-column: span 1 / span 1;">
													<div class="n-card n-card--bordered" style="--n-bezier:cubic-bezier(0.4, 0, 0.2, 1); --n-border-radius:3px; --n-color:rgb(24, 24, 28); --n-color-modal:rgb(44, 44, 50); --n-color-popover:rgb(72, 72, 78); --n-color-embedded:rgb(24, 24, 28); --n-color-embedded-modal:rgb(44, 44, 50); --n-color-embedded-popover:rgb(72, 72, 78); --n-color-target:#1890ff; --n-text-color:rgba(255, 255, 255, 0.82); --n-line-height:1.6; --n-action-color:rgba(255, 255, 255, 0.06); --n-title-text-color:rgba(255, 255, 255, 0.9); --n-title-font-weight:500; --n-close-icon-color:rgba(255, 255, 255, 0.52); --n-close-icon-color-hover:rgba(255, 255, 255, 0.52); --n-close-icon-color-pressed:rgba(255, 255, 255, 0.52); --n-close-color-hover:rgba(255, 255, 255, 0.12); --n-close-color-pressed:rgba(255, 255, 255, 0.08); --n-border-color:rgba(255, 255, 255, 0.09); --n-box-shadow:0 1px 2px -2px rgba(0, 0, 0, 0.24), 0 3px 6px 0 rgba(0, 0, 0, 0.18), 0 5px 12px 4px rgba(0, 0, 0, 0.12); --n-padding-top:19px; --n-padding-bottom:20px; --n-padding-left:24px; --n-font-size:14px; --n-title-font-size:18px; --n-close-size:22px; --n-close-icon-size:18px; --n-close-border-radius:3px;">
														<!---->
											
									
														<!---->
														<!---->
													</div>
												</div>
												<div style="grid-column: span 1 / span 1;">
													<div class="n-card n-card--bordered" style="--n-bezier:cubic-bezier(0.4, 0, 0.2, 1); --n-border-radius:3px; --n-color:rgb(24, 24, 28); --n-color-modal:rgb(44, 44, 50); --n-color-popover:rgb(72, 72, 78); --n-color-embedded:rgb(24, 24, 28); --n-color-embedded-modal:rgb(44, 44, 50); --n-color-embedded-popover:rgb(72, 72, 78); --n-color-target:#1890ff; --n-text-color:rgba(255, 255, 255, 0.82); --n-line-height:1.6; --n-action-color:rgba(255, 255, 255, 0.06); --n-title-text-color:rgba(255, 255, 255, 0.9); --n-title-font-weight:500; --n-close-icon-color:rgba(255, 255, 255, 0.52); --n-close-icon-color-hover:rgba(255, 255, 255, 0.52); --n-close-icon-color-pressed:rgba(255, 255, 255, 0.52); --n-close-color-hover:rgba(255, 255, 255, 0.12); --n-close-color-pressed:rgba(255, 255, 255, 0.08); --n-border-color:rgba(255, 255, 255, 0.09); --n-box-shadow:0 1px 2px -2px rgba(0, 0, 0, 0.24), 0 3px 6px 0 rgba(0, 0, 0, 0.18), 0 5px 12px 4px rgba(0, 0, 0, 0.12); --n-padding-top:19px; --n-padding-bottom:20px; --n-padding-left:24px; --n-font-size:14px; --n-title-font-size:18px; --n-close-size:22px; --n-close-icon-size:18px; --n-close-border-radius:3px;">
														<!---->
														<div class="n-card-header">
															<div class="n-card-header__main" role="heading">
																提现记录
															</div>
															<!---->
															<!---->
														</div>
														
														
														<div class="n-card__content" role="none">
													
															
															
															<div class="n-data-table n-data-table--bottom-bordered n-data-table--single-line"
															style="--n-font-size:14px; --n-th-padding:12px; --n-td-padding:12px; --n-bezier:cubic-bezier(0.4, 0, 0.2, 1); --n-border-radius:3px; --n-line-height:1.6; --n-border-color:rgba(45, 45, 48, 1); --n-border-color-modal:rgba(63, 63, 68, 1); --n-border-color-popover:rgba(88, 88, 94, 1); --n-th-color:rgba(38, 38, 42, 1); --n-th-color-hover:rgba(51, 51, 55, 1); --n-th-color-modal:rgba(57, 57, 62, 1); --n-th-color-hover-modal:rgba(69, 69, 74, 1); --n-th-color-popover:rgba(83, 83, 89, 1); --n-th-color-hover-popover:rgba(93, 93, 99, 1); --n-td-color:rgb(24, 24, 28); --n-td-color-hover:rgba(38, 38, 42, 1); --n-td-color-modal:rgb(44, 44, 50); --n-td-color-hover-modal:rgba(57, 57, 62, 1); --n-td-color-popover:rgb(72, 72, 78); --n-td-color-hover-popover:rgba(83, 83, 89, 1); --n-th-text-color:rgba(255, 255, 255, 0.9); --n-td-text-color:rgba(255, 255, 255, 0.82); --n-th-font-weight:500; --n-th-button-color-hover:rgba(255, 255, 255, 0.06); --n-th-icon-color:rgba(255, 255, 255, 0.38); --n-th-icon-color-active:#1890ff; --n-filter-size:15px; --n-pagination-margin:12px 0 0 0; --n-empty-padding:48px 0; --n-box-shadow-before:inset -12px 0 8px -12px rgba(0, 0, 0, 0.36); --n-box-shadow-after:inset 12px 0 8px -12px rgba(0, 0, 0, 0.36); --n-sorter-size:15px; --n-resizable-container-size:8px; --n-resizable-size:2px; --n-loading-size:28px; --n-loading-color:#1890ff; --n-opacity-loading:0.38; --n-td-color-striped:rgba(36, 36, 39, 1); --n-td-color-striped-modal:rgba(55, 55, 60, 1); --n-td-color-striped-popover:rgba(81, 81, 87, 1);">
																<div class="n-data-table-wrapper">
																	<div class="n-data-table-base-table">
																		<!---->
																		<div class="n-data-table-base-table-body n-scrollbar" role="none" style="--n-scrollbar-bezier:cubic-bezier(0.4, 0, 0.2, 1); --n-scrollbar-color:rgba(255, 255, 255, 0.2); --n-scrollbar-color-hover:rgba(255, 255, 255, 0.3); --n-scrollbar-border-radius:5px; --n-scrollbar-width:5px; --n-scrollbar-height:5px;">
																			<div role="none" class="n-scrollbar-container">
																				<div role="none" class="n-scrollbar-content" style="width: fit-content; min-width: 100%;">
																					<table class="n-data-table-table" style="table-layout: auto;">
																						<colgroup>
																							<col>
																								<col>
																									<col>
																										<col>
																						</colgroup>
																						<thead class="n-data-table-thead" data-n-id="f10adb48">
																							<tr class="n-data-table-tr">
																								<th colspan="1" rowspan="1" data-col-key="username" class="n-data-table-th">
																									<div class="n-data-table-th__title-wrapper">
																										<div class="n-data-table-th__title">
																											提现支付宝
																										</div>
																										<!---->
																									</div>
																									<!---->
																									<!---->
																								</th>
																								<th colspan="1" rowspan="1" data-col-key="registerTime" class="n-data-table-th">
																									<div class="n-data-table-th__title-wrapper">
																										<div class="n-data-table-th__title">
																											提现时间
																										</div>
																										<!---->
																									</div>
																									<!---->
																									<!---->
																								</th>
																								<th colspan="1" rowspan="1" data-col-key="consumeMoney" class="n-data-table-th">
																									<div class="n-data-table-th__title-wrapper">
																										<div class="n-data-table-th__title">
																											提现金额
																										</div>
																										<!---->
																									</div>
																									<!---->
																									<!---->
																								</th>
																								<th colspan="1" rowspan="1" data-col-key="rebateMoney" class="n-data-table-th n-data-table-th--last">
																									<div class="n-data-table-th__title-wrapper">
																										<div class="n-data-table-th__title">
																											是否成功
																										</div>
																										<!---->
																									</div>
																									<!---->
																									<!---->
																								</th>
																							</tr>
																						</thead>
																						
																						
																	
							<?php
							
							
							
// 获取总记录数
$sql = "SELECT COUNT(*) FROM chat_tixian where txyh='$dqyhss' order by id desc";
$zsss = $mysql->getOne($sql);



// 计算总页数
$pageSize = 10;
$totalPage = ceil($zsss / $pageSize);


// 获取当前页码
$page = isset($_GET["pagetx"]) ? intval($_GET["pagetx"]) : 1;
if ($page < 1) {
    $page = 1;
} elseif ($page > $totalPage) {
    $page = $totalPage;
}


if($zsss != 0){
    // 获取当前页的数据
$offset = ($page - 1) * $pageSize;
$sql = "SELECT * FROM chat_tixian where txyh='$dqyhss' order by id desc LIMIT $offset, $pageSize";
$result2 = $mysql->getAll($sql);
}







if($result2 != ''){
    foreach ($result2 as $value) {
        
        
        if($value['sfcl'] == '0'){
            $txxx = '待处理';
        }else if($value['sfcl'] == '1'){
            $txxx = '提现成功';
        }else if($value['sfcl'] == '2'){
            $txxx = '驳回';
        }
        
        
        
							   echo '									
														<tbody data-n-id="854e8265" class="n-data-table-tbody"><tr class="n-data-table-tr"><td colspan="1" rowspan="1" data-col-key="username" class="n-data-table-td n-data-table-td--last-row"><!---->
														
														'.$value['txsjh'].'
														
														</td><td colspan="1" rowspan="1" data-col-key="registerTime" class="n-data-table-td n-data-table-td--last-row"><!---->
														
													'.$value['time'].'
														
														</td><td colspan="1" rowspan="1" data-col-key="consumeMoney" class="n-data-table-td n-data-table-td--last-row">
														
														
												'.$value['txje'].'
														
														
														</td>
														
														
														
														<td colspan="1" rowspan="1" data-col-key="rebateMoney" class="n-data-table-td n-data-table-td--last-col n-data-table-td--last-row"><!---->
														
									
									'.$txxx.'				
													
														
														
														
														</td>
														
														</tr></tbody>';
							}
							
}
							

			
					
							
							?>										
											
											
											
											
											
																	
																						
																						
																						
																		
																		
																		
																		
																		
																						
																						
																						
																						
																						<!---->
																					</table>
																				</div>
																				
																			</div>
																			
																	
																	
																	
																	
																	
					   <style>
   /* 按钮样式 */
        .button {
            display: inline-block;
            padding: 5px 10px;
            background-color: black;
            color: white;
            border: 1px solid gray;
            border-radius: 5px;
            cursor: pointer;
        }
        /* 左箭头样式 */
        .left-arrow {
            display: inline-block;
            width: 0;
            height: 0;
            border-top: 5px solid transparent;
            border-bottom: 5px solid transparent;
            border-right: 5px solid white;
            margin-right: 5px;
        }
        /* 右箭头样式 */
        .right-arrow {
            display: inline-block;
            width: 0;
            height: 0;
            border-top: 5px solid transparent;
            border-bottom: 5px solid transparent;
            border-left: 5px solid white;
            margin-left: 5px;
        }
        /* 按钮容器样式 */
        .button-container {
            text-align: center;
        }
        .button-container a:hover{
            color: white;
        }
        
    </style>		
    
    
    
    <br>    <br>
    
    
    
    <?php
    
    
    

// 显示分页按钮
echo "<div class='button-container'>";
if ($page > 1) {
    echo "<a href='?pagetx=".($page-1)."' class='button'><span class='left-arrow'></span>上一页</a>";
}
if ($page < $totalPage) {
    echo "<a href='?pagetx=".($page+1)."' class='button'>下一页<span class='right-arrow'></span></a>";
}
echo "</div>";
    
    
    ?>
    
    
		 <!--<div class="button-container">-->
        <!-- 上一页按钮 -->
   <!--     <a href="#" class="button">-->
   <!--         <span class="left-arrow"></span>-->
   <!--         上一页-->
   <!--     </a>-->
        <!-- 下一页按钮 -->
   <!--     <a href="#" class="button">-->
   <!--         下一页-->
   <!--         <span class="right-arrow"></span>-->
   <!--     </a>-->
   <!-- </div>										-->
																	
																	
																	
																	
																	
																<?php
																
																if($zsss == 0){
																    echo '	<div class="n-scrollbar-rail n-scrollbar-rail--vertical n-scrollbar-rail--disabled"
																			data-scrollbar-rail="true" aria-hidden="true" style="z-index: 3;">
																				<!---->
																			</div>
																			<div class="n-scrollbar-rail n-scrollbar-rail--horizontal n-scrollbar-rail--disabled"
																			data-scrollbar-rail="true" aria-hidden="true" style="z-index: 3;">
																				<!---->
																			</div>
																		</div>
																		<div class="n-data-table-empty">
																			<div class="n-empty" style="--n-icon-size:40px; --n-font-size:14px; --n-bezier:cubic-bezier(0.4, 0, 0.2, 1); --n-text-color:rgba(255, 255, 255, 0.38); --n-icon-color:rgba(255, 255, 255, 0.38); --n-extra-text-color:rgba(255, 255, 255, 0.82);">
																				<div class="n-empty__icon">
																					<i class="n-base-icon">
																						<svg viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
																							<path d="M26 7.5C26 11.0899 23.0899 14 19.5 14C15.9101 14 13 11.0899 13 7.5C13 3.91015 15.9101 1 19.5 1C23.0899 1 26 3.91015 26 7.5ZM16.8536 4.14645C16.6583 3.95118 16.3417 3.95118 16.1464 4.14645C15.9512 4.34171 15.9512 4.65829 16.1464 4.85355L18.7929 7.5L16.1464 10.1464C15.9512 10.3417 15.9512 10.6583 16.1464 10.8536C16.3417 11.0488 16.6583 11.0488 16.8536 10.8536L19.5 8.20711L22.1464 10.8536C22.3417 11.0488 22.6583 11.0488 22.8536 10.8536C23.0488 10.6583 23.0488 10.3417 22.8536 10.1464L20.2071 7.5L22.8536 4.85355C23.0488 4.65829 23.0488 4.34171 22.8536 4.14645C22.6583 3.95118 22.3417 3.95118 22.1464 4.14645L19.5 6.79289L16.8536 4.14645Z"
																							fill="currentColor">
																							</path>
																							<path d="M25 22.75V12.5991C24.5572 13.0765 24.053 13.4961 23.5 13.8454V16H17.5L17.3982 16.0068C17.0322 16.0565 16.75 16.3703 16.75 16.75C16.75 18.2688 15.5188 19.5 14 19.5C12.4812 19.5 11.25 18.2688 11.25 16.75L11.2432 16.6482C11.1935 16.2822 10.8797 16 10.5 16H4.5V7.25C4.5 6.2835 5.2835 5.5 6.25 5.5H12.2696C12.4146 4.97463 12.6153 4.47237 12.865 4H6.25C4.45507 4 3 5.45507 3 7.25V22.75C3 24.5449 4.45507 26 6.25 26H21.75C23.5449 26 25 24.5449 25 22.75ZM4.5 22.75V17.5H9.81597L9.85751 17.7041C10.2905 19.5919 11.9808 21 14 21L14.215 20.9947C16.2095 20.8953 17.842 19.4209 18.184 17.5H23.5V22.75C23.5 23.7165 22.7165 24.5 21.75 24.5H6.25C5.2835 24.5 4.5 23.7165 4.5 22.75Z"
																							fill="currentColor">
																							</path>
																						</svg>
																					</i>
																				</div>
														
													
																				<div class="n-empty__description">
																
																	
																					暂无更多数据
																				</div>
															
																			</div>';
																}
																
																
																?>			
																			
																		
																			
																			
																			
																			
																			
																			
																			
																			
																			
																			
																			
																			
																		</div>
																	</div>
																</div>
																<!---->
																<!---->
															</div>
														</div>
														<!---->
														<!---->
													</div>
												</div>
													
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div>
				</div>
				<!---->
				<!---->
			</div>
		</div>




  </div>
      </div>
    
    
    	<br>			<br>			<br>
    	
	<footer class="bg-dark text-light py-3 ftth" style="">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h5>Chatgpt用户中心</h5>
        <p>这是你的用户中心页面，你可以再次页面购买套餐和修改密码等操作！</p>
      </div>
      <div class="col-md-3">

      </div>
      <div class="col-md-3">
        <h5>联系方式</h5>
        <ul class="list-unstyled">
          <li><i class="fas fa-map-marker-alt"></i>有问题联系网站客服！</li>
        </ul>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-md-6">
        <p>&copy; 2023 ChatGPT中文版. All rights reserved.</p>
      </div>
      <div class="col-md-6 text-md-end">
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>




<script src="/assets/popper.min.js"></script>
<script src="/assets/bootstrap.min.js"></script>
<script src="/js/bootstrap.min.js"></script>










</body>
</html>


