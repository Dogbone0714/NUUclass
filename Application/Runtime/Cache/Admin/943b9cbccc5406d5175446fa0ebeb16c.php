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
    <div class="tabTitle"><?php echo ($parent["title"]); ?> > <span class="conTitle">更新資料(此為舊系統更新方式)</span></div>
    <div class="Main">
        <form id="loadupdata" action="<?php echo u('Relate/onupdate');?>" method="post" enctype="multipart/form-data">
            <font color="red">清單有使用教學，請勿亂上傳檔案</font>
            <br>
            <input type="file" name="pdf" />
            <input type="text" name="title" value="" placeholder="紀錄文字" />
            <input type="button" class="sub" value="更新" />
        </form>
        <br>
        <div class="tableListA">
            <table>
                <tr>
                    <td align="center">代號</td>
                    <td align="center">上傳日期</td>
                    <td align="center">使用日期</td>
                    <td align="center">紀錄</td>
                    <td width="58%" align="center">資料筆數</td>
                    <td align="center">還原</td>
                </tr>
                <?php if(is_array($relate)): $k = 0; $__LIST__ = $relate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$post): $mod = ($k % 2 );++$k;?><tr>
                        <td align="center"><?php echo ($k); ?></td>
                        <td align="center"><?php echo (date("Y/m/d",$post['start_time'])); ?></td>
                        <td align="center"><?php echo (date("Y/m/d",$post['end_time'])); ?></td>
                        <td align="center"><?php echo ($post['content']); ?></td>
                        <td align="center"><?php echo ($post['scroll']); ?></td>
                        <td align="center">
                            <form id="backdata" method="post" enctype="multipart/form-data">
                                <input type="hidden" value="<?php echo ($post['id']); ?>" name="id" />
                                <input type="button" class="back_b" value="還原" />
                            </form>
                        </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </table>
        </div>
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
    <script>
    $('.sub').click(function() {

        $("#loadupdata").ajaxSubmit({
            //dataType:'script',
            type: 'post',
            url: "<?php echo u('Relate/onupdate');?>",
            beforeSubmit: function() {
                $('.loading').css('display', 'block');
            },
            success: function(data) {console.log(JSON.stringify(data));
console.log(data);
                alert("更新成功");
                window.location.reload();

            },
            error: function(data) {console.log(JSON.stringify(data));
console.log(data);
                alert("更新失敗");
//console.log(JSON.stringify(data));
                window.location.reload();

            },
            resetForm: false,
            clearForm: false
        });
    });

    $('.back_b').click(function() {



        $("#backdata").ajaxSubmit({
            //dataType:'script',
            type: 'get',
            url: "<?php echo u('Relate/onback');?>",
            beforeSubmit: function() {
                $('.loading').css('display', 'block');
            },
            success: function(data) {
                console.log(JSON.stringify(data));
                console.log((data));
                alert("還原成功");
                window.location.reload();

            },
            error: function(data) {console.log(JSON.stringify(data));
                console.log((data));
                alert("還原失敗");
                window.location.reload();

            },
            resetForm: false,
            clearForm: false
        });
    });
    </script>
    </body>

    </html>