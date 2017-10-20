<?php 
    
    require("config/config.php");
    //调用
    require("config/db.php");

    //设置utf8
    mysqli_query($conn,"set names utf8");

    //设置sq语句  按创作时间排序,最新的在最上面
    $query = "SELECT * FROM posts ORDER BY created_at DESC";

    //执行语句
    $result = mysqli_query($conn,$query);

    //获取数据
    $posts = mysqli_fetch_all($result,MYSQLI_ASSOC);
    // var_dump($posts);

    //释放数据
    mysqli_free_result($result);

    //断开连接
    mysqli_close($conn);
 ?>

<?php include("include/header.php") ?>
	<div class="container">
		<h1>博客总览</h1>
		<?php foreach ($posts as $post): ?>
			<div class="well">
				<h3><?php echo $post['title']; ?></h3>
				<p>
					<strong>作者</strong>
					<?php echo $post['author']; ?>
				</p>
				<p>
					<strong>时间</strong>
					<?php echo $post['created_at']; ?>
				</p>
				<p>
					<?php echo $post['body']; ?>
				</p>
				<!-- 实现跳转 根据id-->
				<a class="btn btn-info" href="post.php?id=<?php echo $post['id']; ?>">博客详情</a>
			</div>
	    <?php endforeach; ?>
	</div>
<?php include("include/footer.php") ?>
































