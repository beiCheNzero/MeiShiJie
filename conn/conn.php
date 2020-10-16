<?php
  // 链接数据库源
  $conn = mysqli_connect('localhost','root','')or die("连接失败");//建立连接数据源
  mysqli_select_db($conn,'food');
  // mysqli_set_charset($conn,'utf8');
  $program_char = "utf8" ;
  mysqli_set_charset($conn,$program_char);
?>