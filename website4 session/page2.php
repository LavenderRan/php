


<?php 

      session_start();
      // // 改变session存储的值
      // $_SESSION['name'] = "Hemal";

      // //获取session存储的值
      // $name = $_SESSION['name'];
      // $email = $_SESSION['email'];
      $name = isset($_SESSION['name']) ? $_SESSION['name']:'name属性不存在';
      print_r($_SESSION);

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Page2</title>
 </head>
 <body>
 	<h2>你的名字是:<?php echo $name; ?></h2>
 	<a href="page3.php">Go To Page3</a>
 </body>
 </html>