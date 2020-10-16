<?php
session_start();

if($_GET['login'] == "out"){
  // unset($_SESSION['userid']);
  unset($_SESSION['User_name']);
  header('location: ../index.php');
  // echo '注销登录成功！点击此处 <a href="login.html">登录</a>';
  exit;
}
?>