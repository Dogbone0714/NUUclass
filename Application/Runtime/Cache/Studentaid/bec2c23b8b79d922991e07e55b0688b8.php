<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE>
<html>

<head>
	<meta charset="utf-8">
	<title><?php echo ($con['contactname']); ?></title>
	<meta property="og:title" content="聯合大學選課輔助系統" />
	<meta property="og:type"  content="article" />
	<meta property="og:description" content="最方便的選課輔助系統歐~~~" />
	<meta property="og:url" content="https://studentaid.nuucloud.com/" />
	<meta property="og:image" content="https://studentaid.nuucloud.com/Public/Studentaid/images/studentaid.png" />
	<meta property="fb:app_id" content="431779660362216"/>
	<link rel="shortcut icon" type="image/x-icon" href="/Public/Studentaid/images/title_icon.ico" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">

	<!--RWD設定-->
	<!--電腦螢幕寬度1920px-1280px-->
	<link href="/Public/Studentaid//css/style.css" rel="stylesheet" type="text/css" />

	<!--1280以下-->
	<!--ipad 橫放/電腦螢幕-->
	<link href="/Public/Studentaid//css/style-large.css" rel="stylesheet" type="text/css" media="only screen and (min-width: 770px) and (max-width: 1280px)"
	/>

	<!--手機直立/手機橫放/ipad直立-->
	<link href="/Public/Studentaid//css/style-small.css" rel="stylesheet" type="text/css" media="only screen and (min-width: 0px) and (max-width: 769px)"
	/>

</head>

<body>

	<div class="first_box">
		<div class="top_index"><a>
				<?php echo ($con['contactname']); ?>
			</a><br>
			<div class="fb-like" data-href="https://studentaid.nuucloud.com/" data-layout="standard" data-action="recommend" data-show-faces="true"
			    data-share="true" style="color:#fff"></div>
		</div>
		<div id="tabs">
			<ul>
				<li><a href="#tabs-1">選單</a></li>
				<li><a href="#tabs-2">登入</a></li>
			</ul>
			<div id="tabs-1">
				<form action="<?php echo u('Work/index');?>" method="post">
					<br>
					<a>請選系</a>
					<select class="department" name="department">
							<?php if(is_array($lastdata)): $i = 0; $__LIST__ = $lastdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option><?php echo ($vo['lastclass']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
							
						</select>
					<br><br>

					<a>請選班</a>
					<select class="class" name="class">
							<option>無班級</option>
						</select><br><br>
					<input type=submit class=gobu value=輸入>
				</form>

			</div>
			<div id="tabs-2">
				<form action="<?php echo u('Index/dologin');?>" method="post">
					<br>
					<font color="#ff0000">*請在選單選完系別綁定後才可登入歐!!</font><br> 帳號
					<input type="text" name="account" /><br><br> 密碼
					<input type="password" name="password" /><br><br>
					<input type="submit" class="gobu" value="登入" />
				</form>
			</div>
		</div>

		<div class="right_tabs">
			<div style="margin:20px;border:2px #ccc solid;border-radius:10px;text-align: center;font-size: 30px;color:#ff0000">瀏覽量:<?php echo ($con['recommendnum']); ?> 綁定帳號:<?php echo ($user); ?>  更新日期:<?php echo (date("Y/m/d",$con['update_time'])); ?> </div>
			<?php echo ($content['status_description']); ?>
		</div>
	</div>

	<div class="first_box">

		<div class="pagetitle" style="color:#fff"><a>顯示說明&nbsp;&nbsp;&nbsp;</a></div>
		<img src="/Public/Studentaid/images/teach.png" class="teach" />
	</div>
	<div id="fb"></div>

	<!-- footer start -->
<footer _height="none">
</footer>
<!--主背景框END-->
</body>
<link rel="stylesheet" href="/Public/Studentaid/css/jquery-ui.css">

<script src="/Public/Studentaid/js/jquery-1.7.2.min.js" type="text/javascript"></script>
<script src="/Public/Studentaid/js/jquery-ui.js"></script>
<script src="/Public/Studentaid/js/facebook.js"></script>
<!-- 輪播圖片控制設定 -->
<script type="text/javascript" src="/Public/Studentaid/js/script.js"></script>
<!-- 頁面高度滿版  --> 
<!-- 回到頁頂  -->
<script>
	
	var styles = 'background: #f00; color: #fff; padding: 0 100px; font-size: 30px;';  
	
	console.log("%c" +"放下你萬惡的右手(´;ω;`)", styles);
	(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.5&appId=431779660362216";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));		
</script><script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-91663402-3', 'auto');
  ga('send', 'pageview');
   if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) { 
   	alert("因為課表數據多，所以沒有設計手機版的介面，請同學還是用電腦來瀏覽體驗會最佳")
   }
</script>
</html>

	<script>
</script>
<script async defer src="https://connect.facebook.net/en_US/sdk.js"></script>
	<script>
		$("#tabs").tabs();
		var myhtml = $.ajax({
			type: "POST", //傳值方式有分 post & get 
			url: '<?php echo U("Index/class_post");?>',
			data: {
				name: $('.department').val()
			}, //將表單的值設定好
			async: false
		}).responseText;

		$('.class').html(myhtml);
		$('.department').change(function () {
			var myhtml = $.ajax({
				type: "POST", //傳值方式有分 post & get 
				url: '<?php echo U("Index/class_post");?>',
				data: {
					name: $(this).val()
				}, //將表單的值設定好
				async: false
			}).responseText;
			$('.class').html(myhtml);


		});
		show_fb_talks('fb', $(window).width(), 10, 'https://studentaid.nuucloud.com/');
	</script>