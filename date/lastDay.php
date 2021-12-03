<?php
$now_y = date('Y');
$now_m = date('m');

// echo $final_day=date("t",mktime(0,0,0,date('m'),1,date('Y')));   //mktime(시,분,초,월,일,년) 
// echo $final_day=date("t",mktime(0,0,0,11,1,date('Y')));  

echo date("t", strtotime(date('Y-m-d')))

?>