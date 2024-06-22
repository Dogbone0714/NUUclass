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
  <div class="tabTitle">管理帳號 > <span class="conTitle">帳號列表</span></div>                           
    <div class="Main">
      <form method="post" id="form2" action="<?php echo u('Admin/doCommand');?>" onsubmit="return checkForm();">
      <!-- 按鈕 start -->
      <div class="buttonA">
        <input type="hidden" name="operate" id="operate2" />
        <input name="jumpUri" type="hidden" id="jumpUri" value="/index.php/Admin/Admin/index" />
        <li class="btnB"><a name="add" onclick="javascript:document.location='/index.php/Admin/Admin/insert';" >新增</a></li>
        
        <div class="selectLable">
          <?php echo ($page); ?>
        </div>
      </div>
      <!-- 按鈕 end -->
      
      <!--表格區-->
      <div class="tableListA">
        <table>
          <tr>
            <td width="2%" align="center" valign="middle">&nbsp;</td>
            <td width="3%" align="center"><input type="checkbox" class="allChecked" ></td>
            <td width="20%" align="center">帳號</td>
            <td width="25%" align="center">姓名</td>
            <td width="10%" align="center">狀態</td>
            <td width="10%" align="center">操作</td>
          </tr>
          
          <!-- db 項目 start -->
          <?php if(isset($dataList)): if(is_array($dataList)): $k = 0; $__LIST__ = $dataList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><tr>
                   <td align="center" valign="middle"><?php echo ($k); ?></td>
                   <td align="center">
                        <input id="killId" name="id[]" type="hidden" value="<?php echo ($vo["id"]); ?>">
                        <input name="UpdateId[]" type="hidden" value="<?php echo ($vo["id"]); ?>" />
                        <input name="typeId[]" type="hidden" value="<?php echo ($vo["id"]); ?>" />
                        <input name="orders[]" class="checkOpt" style="width:20px;" type="text" maxlength="2" AutoComplete="Off" placeholder="<?php echo ($vo["orders"]); ?>" readonly="readonly" value="">
                   </td>
                   <td align="center"><?php echo (htmlspecialchars($vo["username"])); ?></td>
                   <td align="center"><?php echo (htmlspecialchars($vo["realname"])); ?></td>
                   <td align="center">
                        <?php if(($vo["status"]) == "1"): ?>開啟<?php endif; ?>
                        <?php if(($vo["status"]) == "0"): ?><font color="#FF0000">暫停</font><?php endif; ?>
                   </td>
                   <td align="center"><a href="/index.php/Admin/Admin/modify/id/<?php echo ($vo["id"]); ?>">編輯</a></td>
              </tr><?php endforeach; endif; else: echo "" ;endif; ?>
          <?php else: ?>
            <tr><td colspan="9" style="color:#F00; font-weight:bold">暫無數據</td></tr><?php endif; ?>
          <!-- db 項目 end -->
          
        </table>
      </div>
      
      <div class="buttonA">
      <li class="btnB">
           <a name="delete" onclick="javascript:
                $('#operate2').val('delete');
                $('.checkOpt').each(function(index, element){
                     if(!$(element).hasClass('isChecked')){
                          $(element).parent().find('#killId').remove();
                     }
                });
                document.getElementById('form2').submit();
           " >刪除</a>
       </li>
       <!--<li class="btnB"> 
            <a name="update" onclick="javascript:
                $('#operate2').val('update');
                document.getElementById('form2').submit();
           " >更新</a>
       </li>-->
      </div>
      
      <!-- 頁碼 start -->
      <div id="light-pagination" class="pagination light-theme simple-pagination">
      </div>
      <!-- 頁碼 end -->
      
    </div>
    </form>
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

</body>
</html>