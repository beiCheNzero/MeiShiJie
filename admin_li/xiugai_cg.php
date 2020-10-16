<?php
  mysqli_query($conn,"set names 'utf8'");//设置字符编码
  include("../conn/conn.php");
  include("../conn/error.php");
  // 接收
  $Username=$_POST['Username'];
  $Password=$_POST['Password'];
  $NPassword=$_POST['NPassword'];

  if($conn){
		$sql = "SELECT Pass_word FROM admin WHERE User_name = '$Username'";//sql语句
		$query=mysqli_query($conn,$sql);//执行sql语句
    $result=mysqli_fetch_array($query);//存入数组
		if($Password==$result[0]){//判断输入密码和数据库的密码是否匹配
      mysqli_query($conn,"UPDATE admin SET Pass_word=$NPassword WHERE User_name='$Username'");
      echo "<script>alert('密码修改成功！请登录');</script>";
      header('location: login.php');//修改密码成功则跳转登陆界面
      exit;
		}else{
			echo "<script>alert('密码修改失败！');
							history.back();</script>";//验证失败,再次登陆
		}
	}else{
		echo "数据库连接失败！";
	}
?>