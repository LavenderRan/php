


<?php 
$loggedIn = true;
$values = ["apple","orange","lemon"];

if ($loggedIn) {
 echo "you are loggedIn";
}else{
	echo "you are not loggedIn";
}
echo "<br>";
// 三目运算符
echo ($loggedIn) ? "you are loggedIn" : "you are not loggedIn";

$mm = ($loggedIn == true) ? true:false;
echo $mm; 


//三目嵌套
$age = 18;
$score = 88;
echo "Your score is".($score > 70? ($age <20 ?"优秀":"一般"):($age <20? "一般":"差等"));
?>
<hr>

<!-- html 和 php 嵌套语法糖 -->
<div>
	<?php if ($loggedIn) { ?>
        <p>welcome to beijing</p>
        <?php }else{ ?>
        <p>welcome to zhengzhou</p>

	 <?php } ?>
</div>

<!-- 优化 -->
<div>
	<?php if ($loggedIn) : ?>
        <p>welcome to beijing</p>
    <?php else: ?>

	 <?php endif; ?>
</div>


<!-- 遍历数组 -->
<div>
	<?php foreach($values as $val): ?>
		<?php echo $val; ?>
		<?php  endforeach; ?>
</div>

<!-- for循环 -->
<div>
	<?php for ($i=0; $i < count($values); $i++) :?>
	<?php echo $values[$i]; ?>
	<?php endfor; ?>
</div>



















