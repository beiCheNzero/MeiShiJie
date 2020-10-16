<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>recharge</title>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="../style/css/res.css" rel='stylesheet' type='text/css' />
	<link rel="shortcut icon" type="images/x-icon" href="../../img/header/logo.jpg">
	<script src="../style/js/jquery.min.js"></script>
</head>
<body>
<script>$(document).ready(function(c) {
	$('.close').on('click', function(c){
		$('.login-form').fadeOut('slow', function(c){
	  		$('.login-form').remove();
		});
	});	  
});
</script>
 <!--SIGN UP-->
 <h1>食客您好！请修改您的账户密码。</h1>
<div class="login-form">
	<div class="close"> </div>
		<div class="head-info">
			<label class="lbl-1"> </label>
			<label class="lbl-2"> </label>
			<label class="lbl-3"> </label>
		</div>
			<div class="clear"> </div>
	<div class="avtar">
		<img src="../img/header/logo.jpg" />
	</div>
			<form method="POST" action="xiugai_cg.php">
					<input type="text" class="text" name="Username" placeholder="请输入修改的用户名" autocomplete="off" required="required" autofocus="autofocus">
					<div class="key">
						<input type="password" name="Password" placeholder="请输入原密码" autocomplete="off" required="required">
					</div>
					<div class="key">
						<input type="password" name="NPassword" placeholder="请输入新密码" autocomplete="off" required="required">
					</div>
					<input type="submit" value="提交" name="xiugai">
					<!-- </div> -->
					<div class="res_div">
						<a href="./login.php" class="res_h">登陆</a>
						<a href="./register.php" class="res_h1 res_h">注册</a>
					</div>
			</form>
			
</div>
 <div class="copy-rights">
					<!-- <p>Copyright &copy; 2015.Company name All rights reserved.More Templates <a href="" target="_blank" title=""></a></p> -->
			</div>
</body>
</html>