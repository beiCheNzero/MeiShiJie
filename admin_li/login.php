<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="../style/css/login.css" rel='stylesheet' type='text/css' />
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
 <h1>美食杰，为您的健康保驾护航！</h1>
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
			<form method="POST" action="login_cg.php">
			<!-- onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}"  -->
					<input type="text" class="text" name="Username" placeholder="Username" autocomplete="off" required="required" autofocus="autofocus">
					<div class="key">
					<!-- onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" -->
						<input type="password" name="Password" placeholder="Password" required="required">
					</div>
					<!-- <div class="signin"> -->
					<input type="submit" value="Login" name="Login">
					<!-- </div> -->
					<div class="res_div">
						<a href="./register.php" class="res_h">注册</a>
						<a href="./xiugaimima.php" class="res_h1 res_h">修改密码</a>
					</div>
			</form>
			
</div>
 <div class="copy-rights">
					<!-- <p>Copyright &copy; 2015.Company name All rights reserved.More Templates <a href="" target="_blank" title=""></a></p> -->
			</div>
</body>
</html>