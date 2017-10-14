
<!-- # string functin: 处理字符串的函数
	# 返回字符串的一部分 substr
	
	# 返回给定的字符串 string 的长度  strlen

	# 查找字符串首次出现的位置 strpos
	
	# 计算指定字符串在目标字符串中最后一次出现的位置 strrpos
	
	# 去除首尾空格trim
	
	# 将字符串转为大写 strtoupper
	
	# 将字符串转为小写 strtolower
	
	# 将每个单词首字母大写 ucwords
	
	# 替换所有匹配的内容  str_replace
	
	# 判断是否是字符串  is_string
	
	# 过滤掉数组中非字符串的值
	
	# 压缩字符串  gzcompress
	
	# 解压字符串 -->
<?php 

 $out = "helloworld";
 $out = substr($out,1,5); //从一开始打印5个 
 echo $out;  //ellow
 echo strlen($out);  //5
 echo "<hr>";

 $output=345665454;
 $output1 = strpos($output, "6");
 echo $output1;  //3

 $output2 =  strrpos($output,"5");
 echo $output2;  //7

 $mmm = "  sweet candy   ";
 echo strlen($mmm);  //16
 $new = trim($mmm); 
 echo strlen($new);  //11

 $str = "Hello World";
 $newstr = strtoupper($str);  
 echo $newstr;  //HELLO WORLD

 $ucword = ucwords($str);
 echo $ucword;  //Hello World


 $output=str_replace("World", "everyone",$str);
 echo $output;  //Hello everyone


 //压缩
	$string="点击事件点击点击大口大口";
	$compressed= gzcompress($string);
	echo $compressed; 
//解压
	$unCompressed = gzuncompress($compressed);
	echo $unCompressed;

echo "<hr>";
//过滤数组中非字符串的值
  $values=array(true,false,"hello",55,"54",' ','0',0,"34.3");
  foreach ($values as $value) {
  	 // 判断value是否是字符串,如果是那么输出
  	if (is_string($value)) {
  		echo $value."is a string!<br>";
  	}
  }
 ?>
















