
<?php
include("../conn/conn.php");
include("../conn/error.php");
  // 接收
  $User_name=htmlentities(trim($_POST["Username"]));
  $Pass_word=htmlentities(trim($_POST["Password"]));
  $RPass_word=htmlentities(trim($_POST["RPassword"]));
  $User_age=htmlentities(trim($_POST["age"]));
  $User_phone=htmlentities(trim($_POST["phone"]));

  //执行sql语句
	$result=mysqli_query($conn,"SELECT User_name FROM admin WHERE User_name = '$User_name'");
	//存入数组
	$myrow=mysqli_fetch_array($result);

  // 和数据库里面的数据进行对比
  if($myrow[0]==$User_name){
		echo "<script>alert('账号已存在');
				history.back();</script>";
	}else{//否则连接数据库执行添加语句
		if($conn){
			echo "连接数据库成功！";
			
			$sql="INSERT INTO admin (User_name,Pass_word,User_age,User_phone) VALUES('$User_name','$Pass_word','$User_age','$User_phone')";//sql语句
			$result1 = mysqli_query($conn,$sql);//执行sql语句
			if($result1){
				echo "<script>sql语句执行成功！</script>";
				if($Pass_word==$RPass_word){//判断两次密码是否一致
					echo "确认密码正确！";
					$_SESSION["User_name"] = $User_name;
					header('Location: login.php');//成功则跳转登陆界面
					exit;
				}else{
					echo "false";
					echo "确认密码错误！";
				}
				
			}else{
				echo "false";
				echo "用户名或密码错误";
			}
		}else{
			echo "连接数据库失败！";
		}
	}

?>