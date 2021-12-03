<?php

$day =  date("Y-m-d");
$first = date("Y-m-d", mktime(0, 0, 0, date("m"), 1, date('Y')));
$firstW= date("w", strtotime($first));

$last= date("Y-m-t",strtotime($day));
$lastN= date("t", strtotime($day));     //해당하는 달의 일 수를 표시

$preY = date("Y-m-d",mktime(0,0,0,date('m'),date('d'),date('Y')-1));

$prey = date("Y",strtotime($preY));
$prem = date('m',strtotime($preY));
$pred = date('d',strtotime($preY));

 $preyF = date("Y-m-d",mktime(0, 0, 0, $prem, 1, $prey));
 $preyW = date("w",strtotime($preyF));
 $preD = date("Y-m-t",strtotime($preyF));
 $preDN = date("t",strtotime($preD));

$ex = date($preY,mktime(0,0,0,date('m'),0,date('Y')+1));

$ee = getdate();
$nextY = date("Y-m-d",mktime(0,0,0,$prem,$pred,$prey+1));


echo '현재달 첫째 날짜 : '.$first.'<br>';   //현재달 첫째 날짜
echo '현재달 첫째 요일 : '.$firstW.'<br>'; //3
echo '현재달 마지막 날짜 : '.$last.'<br>';
echo '현재달 마지막 일수 : '.$lastN.'<br>';
echo '2020년 나오니? : '.$preY.'<br>';
echo '2020년 12월 첫째 날짜 : '.$preyF.'<br>';
echo '2020년 12월 첫째 요일 : '.$preyW.'<br>'; 
echo '2020년 12월 마지막 날짜 : '.$preD.'<br>'; 
echo '2020년 12월 마지막 일수 : '.$preDN.'<br>'; 
echo '2020 : '.$ex.'<br>'; 
echo '2021 나오니? : '.$nextY.'<br>'; 





// echo date("w", mktime(0, 0, 0, date('m'), 1, date('Y'))).'<br>';
// echo  date('Y-m-d',mktime (0, 0, 0, date("m"),date('d'),date('Y')));
// echo date("Y-m-d",strtotime("-1 months")).'<br>';
// echo date("Y-m-d", strtotime("+1 month"));

?>