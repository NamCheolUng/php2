<?php

$num = $_POST['num'];

$sum = $_POST['sum'];



$ar = array('num'=>$num,
            'sum'=>$sum
           
            );


 if($num != "=" && $num != "clear"){
  	echo json_encode($ar);
    exit;
 } else if($num == 'clear'){
        echo json_encode($ar);
         exit;
 } else if($num == '='){
 
  
   $oper = substr($sum,strlen($sum)-1,strlen($sum));
   
   if($oper == "+" || $oper == "-" || $oper == "/" || $oper == "*"){
        $z = $sum.substr($sum,0,strlen($sum)-1);
        $q = eval("echo $z;"); // undefined
        // $q = json_encode(eval("echo $z;")); //null


        $ar['q'] = $q;
        
     
         
            echo json_encode($ar);
            exit;

     } else{
             echo json_encode($ar);
              exit;
     }


 }



?>
