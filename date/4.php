<?php
$dateString = date("Y-m-d H:i:s");
echo strtotime($dateString);  #1636424779  strtotime 함수는 문자열을 Unix 형태의 시간으로 변환해주는 함수
// echo strtotime("now");  #1636425390

?>