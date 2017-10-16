
<?php 

   $msg = "";  //提示用户的信息内容
   $msgClass = "";  //弹窗效果


// 验证用户有无触发submit按钮事件
if (filter_has_var(INPUT_POST, 'submit')) {
       echo "123";

       // 拿到需要的内容
       $name = $_POST['name'];
       $email = $_POST['email'];
       $message = $_POST['message'];

       // 验证用户输入的内容是否为空
       if (!empty($name) && !empty($email) && !empty($message)) {
       
          //验证邮箱是否合法
        	if (filter_var($email,FILTER_VALIDATE_EMAIL) == false) {
       		 $msg = "请输入合法的邮箱";
             $msgClass = "alert-danger";
       	}else{
            // 合法
            $toEmail = '1565461180@qq.com';
            $subject = "本周bjh170705外出拓展";
            $body = "<h2>
                     每周五都出去拓展
            		 </h2>".
					  "<h4>姓名:" .$name ."</h4>";
					  "<h4>邮箱:" .$email ."</h4>";
					  "<h4>信息:" .$message ."</h4>" ;
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .="Content-type:text/html;charset=UTF-8" ."\r\n";
            $headers .="发自:".$name ."<" .$email.">"."\r\n";

            // 判断邮件发送是否成功
            if (mail($toEmail, $subject, $body, $headers)) {
                 $msg = "邮件发送成功";
        		 $msgClass = "alert-success";
            }else{
            	 $msg = "邮件发送失败";
                 $msgClass = "alert-danger";
            }

       	  }
       }else{
         $msg = "请输入对应的内容";
         $msgClass = "alert-danger";

       }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Mail Sender</title>
	<link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
</head>
<body>
<!-- 导航 -->
<!-- navbar-default /navbar-inverse /navbar-light   导航条颜色 -->
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">邮件发送</a>
			</div>
		</div>
	</nav>

	<!-- form -->
	<div class="container">
	  <!-- 友情提示 不能输入为空-->
	  <?php if ($msg != ''): ?>
	    <div class="alert <?php echo $msgClass;?>"><?php echo $msg;?></div>
      <?php endif; ?>

		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<div class="form-group">
				<label>姓名</label>
				<input type="text" 
				      name="name"
				      class="form-control"
				      value="<?php echo isset($_POST['name']) ? $name :''?>" 
				 >
				 <!-- 添加value作用:输入错误时提交,依旧保留输入的正确信息 -->
			</div>
			<div class="form-group">
				<label>邮箱</label>
				<!-- type为email时会自动验证 -->
				<input type="text" 
				     name="email" 
				     value="<?php echo isset($_POST['email']) ? $name :''?>"
				     class="form-control">
			</div>
			<div class="form-group">
				<label>信息</label>
				<textarea class="form-control" name="message">
			<?php echo isset($_POST['message'])? $message :'';?></textarea> 

			</div>
		<button name="submit" class="btn btn-info btn-block" type="submit">发送
		</button>
		</form>
	</div>


</body>
</html>













