

<?php 


// echo date();  //至少给一个参数
echo date('d');   //day
echo date('m');   //month
echo date('Y');   //Year 2017    year 17
echo date('l');   //day of week
echo date('Y/m/d');  //年月日
echo date('d-m-Y');  //日月年

echo "<br>";
//时分秒
echo date('h');  //hour
echo date('i');  //minutes
echo date('s');  //seconds
echo date('a');   //AM or PM

//设置时区
 echo "<hr>";
 date_default_timezone_set("Asia/Shanghai");
 echo date('h:i:sa');

 echo "<br>";
 //maketime
 $timestamp = mktime(07,00,12,1,24,1995);
 echo $timestamp;  //从1970年到设置的时间的秒数

 //完整的时间
 echo "<br>";
 echo date("m/d/Y h:i:sa",$timestamp);
 

 //字符串转时间
 echo "<br>";
 $timestamp2 = strtotime("7:00pm March 22 2016");
 echo $timestamp2;
 echo date("m/d/Y h:i:sa",$timestamp2);

 echo "<br>";
 $timestamp3 = strtotime("tomorrow");
 $timestamp4 = strtotime("next sunday");
 $timestamp5 = strtotime("+2 Days");//加两天的时间

 echo date("m/d/Y h:i:sa",$timestamp5);
 
 ?>


















