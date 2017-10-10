<?php 

  $num = 2;
  //单个if
  // if ($num <= 4) {
  // echo "num的值一定小于或等于4";
  // }
   
   //if else
  // if ($num >= 4) {
  // 	echo "true";
  // }else{
  // 	echo "false";
  // }

  //nesting if   if嵌套
  if ($num >= 4) {
  	if ($num<=10) {
  	echo "num在4和10之间";
  	}else{
  		echo "num大于10";
  	}
  }else{
  	echo "num小于4";
  }

  //逻辑运算符
  // 逻辑与 &&/AND   逻辑或 ||/OR     逻辑非 !   逻辑异或 XOR

   $num1=3;
   // AND 一假即假;  OR 一真即真;   XOR 有一个真则真,皆真为假
   if ($num1 > 2 XOR $num1 <10) {
   	echo "num1大于3并且小于10";
   }
 ?>
<!-- switch -->
<?php 
  
  $favColor = "green";
  switch ($favColor) {
  	case 'red':
  		echo "angry";
  		break;
  	case 'yellow':
  		echo "happy";
  		break;
  	case 'blue':
  		echo "silence";
  		break;
  	case 'green':
  		echo "forgive";
  		break;
  	default:
  	    echo "gun";
  		break;
  }

 ?>



















