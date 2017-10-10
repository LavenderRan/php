

<!-- array 数组 - 存储一堆数据的集合
           分类: 1.下标数组,下标以0开始
                2.关联数组,关联以第一个名字开头
 -->


<?php 
    //下标数组  不能用echo打印, echo只能打印单个字符
   $people = array("Kevin", "henry","Hemiah");
   echo $people[1];
   // echo $people[4];  //报错 数组越界

   $ids = [34,345,65,6];
   echo $ids[2]."<br>";

   $cars=["Honda","Toyota","BYD"];
   $cars[3] = "OOM";
   $cars[] = "BenCH";  //直接加到最后
   echo $cars[3];
   echo count($cars);  //count() 数组个数 4

   //打印数组的方法
   print_r($cars);
   //万能打印方法
   var_dump($cars);


 ?>
<hr>

 <?php 
   //关联数组
   $people = array("henry"=>35,"Buck"=>24,"Look"=>19);
   echo $people["Buck"];//24
   
   $ids = [22 => "henry",45 => "Mark"];
   echo $ids[22]; //henry

   $ids[35] = "Emily";
   echo $ids[35]; //Emily

   print_r($ids);

   $ids[] = "Join";  //加到数组最后
   print_r($ids);
 
    $peoples[] = 55;
    print_r($peoples);

  ?>
<hr>

<?php 
  //多维数组
  $cars = array(
    array("Honda",20,10),
    array("dz",20,20),
    array("Ford",15,10)
  	);
  
    
    echo $cars[2][1];  //15


  //  $cars=[[],[],[]];
 ?>





























