<?php
 $arrA = $_POST['arrA'];
 $arrA1 = $_POST['arrA1'];
 $a = $_POST['a'];
 $a1 = $_POST['a1'];

 $arrB = $_POST['arrB'];
 $arrB1 = $_POST['arrB1'];
 $b = $_POST['b'];
 $b1 = $_POST['b1'];

 $arrC = $_POST['arrC'];
 $arrC1 = $_POST['arrC1'];
 $c = $_POST['c'];
 $c1 = $_POST['c1'];

$sM = $_POST['sM'];
$sM1 = $_POST['sM1'];
$sM2 = $_POST['sM2'];
$sMS = $_POST['sMS'];

$sF = $_POST['sF'];
$sF1 = $_POST['sF1'];
$sF2 = $_POST['sF2'];
$sFS = $_POST['sFS'];

$sum = $_POST['sum'];
$sum1 = $_POST['sum1'];
$sum2 = $_POST['sum2'];
$sum3 = $_POST['sum3'];

$arry = array(
    'A' => $arrA,
    'a' => $a,
    'AA' => $arrA1,
    'aa' => $a1,
    'B' => $arrB,
    'b' => $b,
    'BB' => $arrB1,
    'bb' => $b1,
     'C' => $arrC,
     'c' => $c,
     'CC' => $arrC1,
     'cc' => $c1,
     'sM' => $sM,
     'sM1' => $sM1,
     'sM2' => $sM2,
     'sMS' => $sMS,
     'sF' => $sF,
     'sF1' => $sF1,
     'sF2' => $sF2,
     'sFS' => $sFS,
     'sum' => $sum,
     'sum1' => $sum1,
     'sum2' => $sum2,
     'sum3' => $sum3
);

echo json_encode($arry);


?>