<?php
  // mysqli_query($conn,"set names 'utf8'");//设置字符编码
  include("../conn/conn.php");
  include("../conn/error.php");
  // 接收
  $food_name=$_GET['food_name'];
  $food_introduction=$_POST['food_introduction'];
  $food_material=$_POST['food_material'];
  $food_url=$_POST['food_url'];

  // echo '<script>alert("hello");</script>';
  mysqli_query($conn,"UPDATE food_product SET food_introduction='$food_introduction',food_material='$food_material',food_url='$food_url' WHERE food_name='$food_name'");

  header("location: kucun.php");
?>