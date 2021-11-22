<?php

$num = $_POST['num'];


 if($num != "=" && $num != "clear"){
  	echo $num;
 } else if($num == 'clear'){
   echo $num;
 } else if($num == '='){
 	echo $num;
 }



?>