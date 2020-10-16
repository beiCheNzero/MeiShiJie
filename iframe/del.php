<?php
  session_start();
  include("../conn/conn.php");
  include("../conn/error.php");

  $food_name = $_GET['food_name'];
  mysqli_query($conn,"DELETE FROM food_product WHERE food_name = '$food_name'"); 
  if($conn){
    echo '<html>
              <head>
              <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
              <title>提示</title>
              <script>alert("菜单已下架，请返回查看！");history.back();</script>
              </head>
            </html>';
            // if($conn){
            //   // header("Location:kucun.php");  
            // }

  }
  
?>