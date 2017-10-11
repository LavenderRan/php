
<!-- 函数  具有某一功能的代码块 -->

<!-- 驼峰命名 Camel Case  -myFunction()
             Lower Case  -my_function()
             Pascal Case -MyFunction()
 -->
  
 <!-- 定义函数  函数一定是有返回值的,只不过是分为有值和undefined
              ** 在php中函数的名字大小写不敏感
 -->

<?php 
       //1.无参数无返回值
      function SimpleFunction(){
	      echo "hello world";
       }

      SIMpleFunction();  //调用函数
      echo "<hr>";

      //2.有参数无返回值
       function buy($money="20块钱"){
         echo $money."给了,但没买东西";
       }
       buy();  //默认值为20,传参的级别比默认值高
       buy("400块钱");
       echo "<hr>";

       //3.多参数有返回值
       function sumValue($num1,$num2){
          $sum = $num1 + $num2;
          return $sum;
       }
       echo sumValue(3,8);
       echo "<hr>";

       //4.无参数有返回值
       function  buyDrink(){
       	  return "饭后饮料";
       }
       echo buyDrink();
       echo "<hr>";

       //函数传引用
       $myNum = 10;
       function addFive(&$num){
           $num += 5;

       }
       addFive($myNum); 
       echo $myNum; //15 拿到了myNum的引用,改变了内存中的数据,所以是15

       echo "<hr>";

 ?>


















