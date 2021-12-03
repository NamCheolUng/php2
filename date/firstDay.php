<?php
$now_y = date('Y');
$now_m = date('m');

// echo $now_y.$now_m;   //mktime(시,분,초,월,일,년)

// echo date("t", mktime(0, 0, 0, date('m'), 0, date('Y')));

echo date('d')+1-1;   //02일 이면 0제거 

?> 
 <!-- 0  1  2  3  4  5  6 
     일 월 화 수 목 금 토 -->