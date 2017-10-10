


<!--loops: 循环 => 让项目制作的更高效
      根据某个条件,重复执行某段代码
      for, while, do..while,foreach

 -->
<?php 
 //for 循环
 //@params - init,condition,inc
for ($i=0; $i <10 ; $i++) { 
    echo $i."<br>";
}
 
 ?>
<hr>
 <?php 
 //while 循环
 //@params - condition
 $i = 0;
 while ($i < 10) {
 	echo $i."<br>";
 	$i++;
 }
  ?>
<!-- for循环在知道循环次数的时候使用-->
<hr>


<?php 
//do while
 //  @params - condition
 $i=0;
 do{
 	echo $i."<br>";
    $i++;
 }while($i<10);

 ?>

 <hr>

 <?php 
 //foreach 循环 下标数组
   $people=array("Herry","Bucky","Emily");
   foreach ($people as $person) {
    echo $person."<br>";
   }

 //foreach  关联数组
   $people = array(
   	"Hery" => "Hery@gmail.com",
   	"Buck" => "Buck@gmail.com",
   	"Emily" => "emily@gmail.com"
   	);
  foreach ($people as $key => $value) {
   echo $key.":".$value;
   echo "<br>";
  }
  ?>

<!-- 1.打印1到100之间7的倍数;打印1到100之间各位为7的数,打印..十位为7的数
     打印个位不为7,十位不为7以及不是7的倍数

     2.打印九九乘法表
     
   -->












