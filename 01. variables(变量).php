
<!-- 可以有多个php同时存在;php也可以包在标签里面,例如p标签 -->
<!-- 多行注释: 快捷键:option+command+/ -->

<!-- variable 变量:在程序运行过程中可以被改变的量,用来存储内容 
              定义规则:前缀:$;  以字母/数字/下划线组成;
              数字不能开头;  大小写敏感;  驼峰命名;
-->
<!-- 数据类型: String  Integer(int)  Float  Boolean  Array   Object
              Resource(函数) 7种-->


<!-- 常量   define("NAME","value");
            echo NAMR;
            name也可以不大写,需要在括号最后面加true,代表不区分大小写
-->
<?php 
    // echo "hello world";
    $num =22;
    $float=33.33;
    $bool1=true;
    $bool2=false;

    // echo $bool;//1
    // echo $bool2; //没有任何输出

    //运算符
    $num1 = 10;
    $num2 = 20;
    $sum = $num1 + $num2;
    echo $sum;

    //字符串拼接
    $string1 = "hello";
    $string2 = "world";
    // $string = $string1 + $string2;  错误
    $string = $string1." ".$string2."!";
    echo $string;
    // 在PHP中 + 就是加号,没有拼接功能,应用.来拼接

    //php中引号的区别
    $greeting = '$string1 $string2';//$string1 $string2
    $greeting = "$string1 $string2";
    echo $greeting."<br>";
    //' '中的内容是单纯的字符串, " "中的字符串可以正常解析

    
    // 转义字符  两种方式
    $string3 = 'they\'re here';
    $string4 = "they're here";
    printf($string3);  //速度慢但也可以输出
    echo $string4."<hr>"; 


    //常量
    define("SUNNY","阳光");
    echo SUNNY;
    define("rainy","大雨",true);
    echo rainy;
    // echo Sunny,rainy; 逗号可以同时打印出来多个变量
 ?>


<!-- <?php 
   // echo "hello everybody";
 ?> -->














