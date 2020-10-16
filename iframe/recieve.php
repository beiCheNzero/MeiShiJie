<!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> -->
<?php
  // header("Content-type:text/html;charset=utf-8");

  include("../conn/conn.php");
  include("../conn/error.php");

  if($conn){
		$username = $_POST['username'];
		$email = $_POST['email'];
		$proposal = $_POST['proposal'];
		$sql = mysqli_query($conn,"INSERT INTO userback (username,email,proposal) VALUES('$username','$email','$proposal')");
		if($username != '' && $proposal != ''){
      echo '<html>
              <head>
              <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
              <title>提示</title>
              <script>alert("感谢您宝贵的意见，已提交至管理员邮箱！");history.back();</script>
              </head>
            </html>';
		}else{
			echo "<script>alert('发送失败！');history.back();</script>";
		}
	}else{
		echo "连接数据库失败";
	}
?>