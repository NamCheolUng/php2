<?php
$timestamp = strtotime("+1 week"); 
echo date("Y-m-d", "+1 week").'<br>';  # 2021-11-16
$timestamp = strtotime("2017-12-20 +1 week"); 
echo date("Y-m-d", $timestamp);  # 2017-12-27
?>