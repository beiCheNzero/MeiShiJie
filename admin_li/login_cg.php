<?php
// header("Content-type: text/html; charset=utf-8");
	session_start();
  include("../conn/conn.php");
  include("../conn/error.php");
  // 接收
  // $User_name=htmlentities(trim($_POST["Username"]));
  // $Pass_word=htmlentities(trim($_POST["Password"]));

  // // 判断数据为空时，跳转到Login.php
  // if ($User_name=="" && $Pass_word==""){
  //   header("location:login.php");
  // }

  // // 和数据库里面的数据进行对比
  // $sql="select * from admin";
  // $query=mysqli_query($conn,$sql);
  // $rs=mysqli_fetch_array($query);
  // if($User_name==$rs["User_name"] && $Pass_word==$rs["Pass_word"]){
  //   header("location:main.php");
  // }else{
  //   header("location:login.php");
  // }

  // mysqli_query($conn,"set names 'utf8'");//设置字符编码
  $User_name = $_POST["Username"];
	// $_SESSION['username'] = $username;
	$Pass_word = $_POST["Password"];
	//if判断
	if($conn){
    // $strict = false;
		// echo "数据库连接成功！";//验证
    $sql = "SELECT Pass_word FROM admin WHERE User_name = '$User_name'";//sql语句
    $query=mysqli_query($conn,$sql);//执行sql语句
    $result=mysqli_fetch_array($query);//存入数组
    $sql1 = "select User_type from admin where User_name = '$User_name'";
		$query1=mysqli_query($conn,$sql1);//执行sql语句
    $res=mysqli_fetch_array($query1);//存入数组
    // echo $result[0];
		if($Pass_word==$result[0]){//判断输入密码和数据库的密码是否匹配
      echo "匹配成功";//再次验证
      $_SESSION["User_name"] = $User_name;
      $_SESSION["User_type"] = $res[0];
      header('location: ../index.php');//登陆成功跳转主界面index
      exit;
		}else{
      echo '<html>
              <head>
              <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
              <title>提示</title>
              <script>alert("用户名或密码错误，请重新登陆！");history.back();</script>
              </head>
            </html>';
			
		}
		
	}else{
		echo "数据库连接失败！";
	}

?>

