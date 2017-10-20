<?php 


 //连接数据库 面向过程写法
  $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
  //判断是否成功  mysqli_connect_errno()为0是代表成功
  if (mysqli_connect_errno()) {
      echo "数据库连接失败".mysqli_connect_errno();
  }




 ?>