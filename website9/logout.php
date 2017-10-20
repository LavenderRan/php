
<?php 
  //unset 释放给定的变量   unset() 销毁指定的变量
  session_start();
  unset($_SESSION['username']);
  unset($_SESSION['success']);
  header("location:login.php");

 ?>