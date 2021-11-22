<?php

$num = $_POST['num'];

$sum = $_POST['sum'];


 if($num != "=" && $num != "clear"){
  	echo $num;
 } else if($num == 'clear'){
   echo $num;
 } else if($num == '='){
    
     $oper = substr($sum,strlen($sum)-1,strlen($sum));

    if($oper == "+" || $oper == "-" || $oper == "/" || $oper == "*"){
        $z = $sum.substr(0,strlen($sum)-1);
        $q = eval($z);
        echo $q;

 }

 }



?>