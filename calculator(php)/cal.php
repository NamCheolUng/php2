<?php

$inputValue = $_POST['inputValue'];   
$result = $_POST['result'];
$clsBtn = $_POST['clsBtn'];
$resultBtn = $_POST['resultBtn'];

 
$data = array('num'=>$inputValue, 'res'=>$resultBtn, 'cls'=>$clsBtn);
// var_dump($data);
// exit;

if($inputValue != '=' && $inputValue != 'clear') {
   echo json_encode($data);

  }





 


?>