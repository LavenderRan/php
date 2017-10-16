<?php 

 //监听用户是否触发了submit方法
  if (isset($_POST['submit'])) {
	$username = $_POST['username'];

	setcookie('username',$username,time() + 86400*30);
    header("location: web-page2.php");  //跳转页面
}

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Page 1</title>
 </head>
 <body>
 	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
 		
 		<input type="text" name="username" placeholder="enter your name">
 		
 		<input type="submit" value="Submit" name="submit">

 	</form>
 </body>
 </html>