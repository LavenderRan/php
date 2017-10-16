

<?php 
// 取消对应session

 session_start();
 #删除服务器指定存储
 // unset($_SESSION['name']);

 // 会把所有的session都删除
  session_destroy();

 ?>