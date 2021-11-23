<?php

$num = rawurldecode($_POST['num']);

$sum = rawurldecode($_POST['sum']);

      

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

   $oper1 = substr($sum,0,strlen($sum)-1);




   switch ($oper) {
      case '+':  
           $ar['q'] = (int)$sum + (int)$oper1;
         break;
      case '-':
          $ar['q'] = (int)$sum - (int)$oper1;
         break;
      case '*':
          $ar['q'] = $sum * $oper1;
         break;
      case '/':
          $ar['q'] = (int)$sum / (int)$oper1;
         break;

       
        
}     
         
            echo json_encode($ar);
            exit;

     
   }


 



?>
