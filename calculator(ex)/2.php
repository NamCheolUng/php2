<?php

 $su1 = $_POST['su1'];
 $su2 = $_POST['su2'];
 $oper = $_POST['oper'];

    $plus = $su1 + $su2;
    $minus = $su1 - $su2;
    $multip = $su1 * $su2;
    $half = $su1 / $su2;

   if($oper == "plus"){
        echo $plus;
    }else if($oper == "minus"){
       echo $minus;
    }else if ($oper == "multip") {
       echo $multip;     
    }else if ($oper == "half") {
       echo $half;
    }else{
    	echo "잘못된 입력 값 입니다.";
    }
    







?>