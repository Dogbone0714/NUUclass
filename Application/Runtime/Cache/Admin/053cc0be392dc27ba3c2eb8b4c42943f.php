<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-tw" xml:lang="zh-tw">

<head>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<meta charset="utf-8">

<title><?php echo ($configAll["company_name"]); ?>後台總管理</title>

    <link rel="shortcut icon" type="image/x-icon" href="/Public/backstage//images/icon.ico"/>
<!--網頁初始化設定-->
<link href="/Public/backstage//css/style.css" rel="stylesheet" type="text/css" />
<!--選單設定-->
<link href="/Public/backstage//css/menu.css" rel="stylesheet" type="text/css" />
<!--CSS設定-->
<link href="/Public/backstage//css/reset.css" rel="stylesheet" type="text/css">


</head>

<body>

<!-- wrapper start -->
<div id="wrapper">

  <!-- header start -->
  <div id="header">
    <div id="menuA" class="Logo">
         
				<a href="/index.php/Admin"><?php echo ($company_name); ?>後台管理</a>
    </div>
    <!--會員狀態-->
    <div class="status">
      <!-- 多語言用 start -->
      <!--<div class="languageBtn">
        <ul>
                <li id="cn"><a href="/Admin/">中</a></li>
                <li id="en"><a href="/Admin_en/">英</a></li>
                <li id="jp"><a href="/Admin_jp/">日</a></li>
                <li id="ko"><a href="/Admin_ko/">韓</a></li>
        </ul>
      </div>-->
      <!-- 多語言用 end -->
      <!--登出-->
      <div class="logout"><a href="<?php echo U('Public/logout');?>"><img src="/Public/backstage//images/logout.png" title="登出" alt="登出" width="30" height="30"></a></div>
      <!--帳戶名稱-->
      <div class="account"><strong><?php echo ($company_name); ?> 歡迎你！<?php echo ($username); ?></strong></div>
      <!--會員照-->
    </div>
  </div>
  <!-- header end -->
<!-- Menu start -->
<div id="Menu">
	<ul>
	<!--
		<li>
			<?php if($_SESSION['roleId']== 1): ?><div class="iteMenu">
					<a href="/index.php/Admin/Indexpic/index"><img src='/Public/backstage//images/menu_icon/home.png' />首頁管理</a>
					
					<div class="iteNav" id="Indexpic">         
						<ul>
							<li><a class="grayA" href="<?php echo U('Indexpic/index','id=250');?>" >大圖輪播</a></li>
							
						</ul>
						
					</div>
					
				</div><?php endif; ?>
		</li>-->
		<li>
			<div class="iteMenu" >
				<a href="/index.php/Admin/About/title"><img src='/Public/backstage//images/menu_icon/about.png' />關於系統</a>
				<div class="iteNav" id="About">
					<ul><li><a class="grayA" href="<?php echo U('About/title');?>">首頁介紹</a></li>
					</ul>
					<!--
					<ul><li><a class="grayA" href="<?php echo U('About/boss');?>">計畫負責人</a></li>
					</ul>
					
					<ul><li><a class="grayA" href="<?php echo U('About/content');?>">計畫內容</a></li>
					</ul>
					-->
				</div>
			</div>
		</li>
		<li>
		<li>
			
			<div class="iteMenu">
				<a href="/index.php/Admin/Relate/index"><img src='/Public/backstage//images/menu_icon/shaking.png' />資料管理</a>    <div class="iteNav" id="Relate">
					<ul>
					<li><a class="grayA" href="<?php echo U('Relate/index');?>">資料更新</a></li>
					<li><a class="grayA" href="<?php echo U('Relate/teach');?>">更新教學</a></li>
					<li><a class="grayA" href="<?php echo U('Relate/myclass');?>">班級資料</a></li>
					<li><a class="grayA" href="<?php echo U('Relate/user');?>">使用者資料</a></li>
					<li><a class="grayA" href="<?php echo U('Relate/oldindex');?>">資料更新(舊)</a></li>
					<li><a class="grayA" href="<?php echo U('Relate/oldteach');?>">更新教學(舊)</a></li>

					</ul>
					
				</div>
				
			</div>
			
		</li>
		<li>
				<div class="iteMenu isSys">
					<a href="/index.php/Admin/Config/index"><img src='/Public/backstage//images/menu_icon/about.png' />系統管理</a>
					<div class="iteNav" id="Config">
						<ul><li><a class="grayA" href="<?php echo U('Config/index');?>">名稱管理</a></li>
						
						</ul>
						
					</div>
				</div>
		</li>
		
		<li>
			<?php if($_SESSION['roleId']== 1): ?><div class="iteMenu isSys">
					<a href="/index.php/Admin/Admin/index"><img src='/Public/backstage//images/menu_icon/account.png' />帳號管理</a>
					<div class="iteNav" id="Admin">

						
						<ul><li><a class="grayA" href="<?php echo U('Admin/index');?>">管理帳號</a></li>
						</ul>
						
						
					</div>
				</div><?php endif; ?>
		</li>
		
		<li>
			<div class="iteMenu isSys">
				<a href="/" target="_blank"><img src='/Public/backstage//images/menu_icon/monitor.png' />查看前台</a>
			</div>
		</li>
		
	</ul>
	
	
</div>
<!-- Menu end -->
<!---------main_menu end------------->
<!-----主內容------>
<div class="container">
    <div class="tabTitle"><?php echo ($parent["title"]); ?> > <span class="conTitle">更新教學</span></div>
    <div class="Main">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/Fhn-MtBMhL0" frameborder="0" allowfullscreen></iframe>
        <ul class="telist">
            <li>1.安裝 <a href="//Public/backstage//download/dopdf.exe">dopdf</a> 軟體</li>
            <li>2.將dopdf設為預設印表機</li>
            <li>3.調整喜好設定為
                <font color="red"> A1 </font>跟
                <font color="red"> 橫式</font>
            </li>
            <li>4.進學生入口 選課管理系統/課程索引/</li>
            <li>5.選擇現在學期資料 送出</li>
            <li>6.調整欄位寬度 資料越多開越大
                <font color="red"> (重要 沒調整正確 會失敗)</font>
            </li>
            <li>7.按列印</li>
            <li>8.選擇下載位置 之後按ok 稍等一下即可下載成功</li>
            <li>9.選擇下載位置 之後按ok</li>
            <li>10.檢查重疊資料 如下圖就會失敗:</li>
            <li><img src="/Public/backstage//images/sample.png" /></li>
            <li>11.上傳 稍等一下即可完成更新課程資料</li>
        </ul>
    </div>
    <!-----主內容 end------>
    <!-- wrapper start -->
</div>

<div class="loading">
		<img src="/Public/backstage//images/rolling.svg" />
		</div>
</body>
<script src="/Public/backstage//js/jquery-1.10.2.min.js"></script>
<!--<script src="/Public/backstage//js/jquery-menu.js"></script>-->
<script type="text/javascript" charset="utf-8" src="/Public/backstage//js/image_common.js"></script>
<script type="text/javascript" src="/Public/backstage//js/Jquery/JQuery-ui.js"></script>
<script type="text/javascript" src="/Public/backstage//js/Jquery/JQuery.MenuTree.js"></script>

    <script src="/Public/backstage//js/Jquery/jquery.form.js"></script>
<script language="javascript" type="text/javascript">
function dele(id)
{
	if(window.confirm('本操作不可恢復，確定繼續？')){
		self.location.href=URL+"/doCommand/id/"+id+"/operate/delete";
	}
}
</script>
<script type="text/javascript">

$(window).load(function(){
        $('.loading').css('display','none');
        });
$('.nav').height($('.iteNav').height()+100);
$('#<?php echo (CONTROLLER_NAME); ?>').css("display","block");
</script>

<script type="text/javascript">
var animateOC = "<?php echo ($animateOC); ?>";
// menu 動畫用
if(animateOC)
$('.grayA').each(function(index, element) {
    $(this).click(function(evt){
		if( $(this).parent().find('.submenu').is(":visible")==true ){
			// close self
			//$(this).parent().find('.submenu').slideUp(500);
			$('.menuB').slideUp(100);
			$(this).parent().find('.submenu').hide(500).animate(
			{heigth:"0"},
			{duration:0,
			 complete:function(){
				 $('.nav').height($('.iteNav').height()+100);
				 $('.menuB').slideDown(100);
			 }
			});
		}else{
		    var $hasUp = false; 
			// close all
			$('.grayA').each( function(){
				if( $(this).parent().find('.submenu').is(":visible") && $(this).text()!=self ){
				  $(this).parent().find('.submenu').slideUp(500);
				  $hasUp = ($hasUp?$hasUp:true);
				}
			} );
			// open target
			if( ($(this).parent().find('.submenu').length!=0)||($hasUp) ){ $('.menuB').slideUp(100); }
			isMenubShow = false;
			$(this).parent().find('.submenu').show(1000).animate(
			{heigth:"100%"},
			{duration:0,
			 complete:function(){
				 $('.nav').height($('.iteNav').height()+100);
				 $('.menuB').slideDown(100);
			 }
			});
			if( ($(this).parent().find('.submenu').length==0)&&($hasUp) ){
			     window.setTimeout(function(){
				      $('.nav').height($('.iteNav').height()+100);
			          $('.menuB').slideDown(100); 
				 }, 500);
			}
		}
		//
		//$('.nav').height($('.iteNav').height()+100);
	});
});

$(document).ready(function(){
	// 子項自動開啟
	var $cid = "<?php echo ($parent["id"]); ?>";
	$('input[name^=id]').each(function(index, element){
        if( ($(this).val()==$cid)&&($(this).parent().parent().hasClass('submenu')) ){
			$('.menuB').slideUp(100);
			$(this).parent().parent().parent().find('.submenu').show(1000).animate(
			{heigth:"100%"},
			{duration:0,
			 complete:function(){
				 $('.nav').height($('.iteNav').height()+100);
				 $('.menuB').slideDown(100);
			 }
			});
		}
    });//end each
});
</script>

<script type="text/javascript">
////////////////////////////////////// check box ///////////////////////////////////////
// single check box
$('.checkOpt').click(function(evt){
	if($(evt.target).hasClass('isChecked')){
		$(evt.target).removeClass('isChecked');
	}else{
		$(evt.target).addClass('isChecked');
	}
});

// all box checked
$('.allChecked').click(function(evt){
	//alert($(evt.target).is(':checked'));
	if($(evt.target).is(':checked') == true){
		$('.checkOpt').each(function(index, element){
			
			if(!$(element).hasClass('isChecked')){
				$(element).addClass('isChecked');
			}
		});
	}else{
		$('.checkOpt').each(function(index, element){
			if($(element).hasClass('isChecked')){
				$(element).removeClass('isChecked');
			}
		});
	}
});

// menu use
$('.checkOptMenu').click(function(evt){
	if($(evt.target).hasClass('isCheckedMenu')){
		$(evt.target).removeClass('isCheckedMenu');
	}else{
		$(evt.target).addClass('isCheckedMenu');
	}
});

// all box checked
$('.allCheckedMenu').click(function(evt){
	$('.checkOptMenu').each(function(index, element){
		if(!$(element).hasClass('isCheckedMenu')){
			$(element).addClass('isCheckedMenu');
		}
	});
});

</script>

</html>
    <script src="http://malsup.github.io/jquery.form.js"></script>
    <script>
    </script>
    </body>

    </html>