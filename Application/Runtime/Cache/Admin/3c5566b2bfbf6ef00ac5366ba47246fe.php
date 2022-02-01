<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?php echo ($company_name); ?>後台總管理登入</title>
		<link rel="stylesheet" href = "/Public/backstage//css/login.css" type="text/css"/>
		
		<script type="text/javascript" >
			$(function(){   
				$("#submit").click(function(){
					var jumpUri = $("#jumpUri").val();
					$.ajax({   
						type:"POST",   
						url:"<?php echo U('Public/doLogin');?>",
						data:{
							username: $('#username').val(), password: $('#password').val()
						},   
						beforeSend:function(){
							$("#result").show();
							$("#result").html('<span style="color:#FF0000"><img src="/Public/backstage//Admin/loading.gif" align="absmiddle">正在提交登錄...</span>'); 
						},                
						success:function(data){
							switch(data){
								case 'errorVerifyCode':
								//$("#verifyImage").attr('src', "<?php echo U('Public/verify',0,0,0);?>?"+ Math.random());
								resetVerifyCode();
								$("#result").html('<span style="color:#FF0000">驗證碼錯誤</span>'); 
								break;
								case 'emptyInfo':
								$("#result").html('<span style="color:#FF0000">用戶名密碼必須填寫</span>'); 
								break;
								case 'usernameFalse':
								$("#result").html('<span style="color:#FF0000">用戶信息不存在，登錄失敗</span>'); 
								break;
								case 'passwordFalse':
								$("#result").html('<span style="color:#FF0000">密碼錯誤</span>'); 
								break;
								case 'roleFalse':
								$("#result").html('<span style="color:#FF0000">當前用戶被限制登錄，請聯系管理員</span>');
								break;
								case 'roleLost':
								$("#result").html('<span style="color:#FF0000">不存在的用戶組，請聯系管理員</span>');
								break;
								case 'loginSuccess':
								$("#result").html('<span style="color:#FF0000">登錄成功</span>');
								if(jumpUri == ''){
									window.location.href = '<?php echo U("Index/index");?>';
									}else{
									window.location.href = jumpUri;
								}
								//window.location.href = '<?php echo U("Index/index");?>';
								return true;
								break;
								default:
								$("#result").html('<span style="color:#FF0000">'+data+'</span>');
								alert('未知錯誤，請聯系管理員');
							}
							return false;			
						}               
					});   
					return false;
				});  
			}); 
		</script>
	</head>
	
	<body onLoad="document.login.username.focus()">

		
		<h1><?php echo ($company_name); ?>後台管理</h1>
		<div id ="main">
			<form method ="post" name="login" action="<?php echo U('Public/doLogin');?>">
				<div id="inmain">
					<p>
					帳號：<input class="block" type="text" name="username" value="" size="20" maxlength="20" autofocus/></p>
					<p>密碼：<input class="block" type="password" name="password" value="" size="20" maxlength="20" autofocus/></p>
					<input name="jumpUri" type="hidden" id="jumpUri" value="<?php echo ($jumpUri); ?>" />
				<input id="submit" class="b" type="submit"   value="登入" name="submit" />
				<br>
				<a href="/index.php" style="margin:20px">回網站</a>
			</form>
			
		</div>
	</div>
	<div id="footer">
		
		<div class="line" id="a"></div>
		<div class="line" id="c"></div>
		<div class="line" id="d"></div>
		<div class="line" id="e"></div>
		<div class="line" id="f"></div>
	</div>
	
</body>
</html>