


<?php 
  session_start(); //如果没有session_start下面的将会无法执行
  
    #改变session存储的值
	$_SESSION['name']="Hemiah";
	#获取session存储的值
	$name=$_SESSION['name'];
	$email=$_SESSION['email'];
  

?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Page3</title>
 </head>
 <body>
 	<h2> <?php echo $name; ?> </h2>
 </body>
 </html>