



<?php include("server.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册 and 登录系统</title>
     <link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<h2 class="text-muted text-center">登录</h2>
	<form action="login.php" method="post">
	<!-- 提示报错信息 引入文件-->
	   <?php include("errors.php"); ?>
		<div class="form-group">
		   <label>账号</label>
		   <input type="text" name="username" class="form-control">
		</div>
		
		<div class="form-group">
			<label>密码</label>
			<input type="password" name="password1" class="form-control">
		</div>
		<input type="submit" name="login_user" class="btn btn-success" value="登录">
		<a class="btn btn-success pull-right" href="register(注册).php">没有账号,请注册</a>
	</form>
	</div>
</body>
</html>
















