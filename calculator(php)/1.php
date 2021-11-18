<?php
    
    $t1 = $_POST['t1'];
    $cal = $_POST['cal'];
    $t2 = $_POST['t2'];

    $plus = $t1 + $t2;
    $minus = $t1 - $t2;
    $multip = $t1 * $t2;
    $half = $t1 / $t2;

    if($cal == "+"){
        echo $t1."+".$t2."=".$plus;
    }else if($cal == "-"){
       echo $t1."-".$t2."=".$minus;
    }else if ($cal == "*") {
       // echo $t1."*".$t2."=".$multip;
       echo $t1*$t2."입니다."; 	
    }else if ($cal == "/") {
       echo $t1."/".$t2."=".$half;
    }else{
    	echo "잘못된 입력 값 입니다.";
    }
    
?>