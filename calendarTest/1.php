<?php

$move = $_POST['move'];
// $todayY = $_POST['todayY'];



$arr = array();


if ($move=='by') {
$arr['move'] = 'by';
$arr['today'] = date("Y-m-d",strtotime("-1 year"));
$arr['todayY'] = date("Y");
$arr['todayM'] = date("m");
$arr['dateY'] = date("Y");
$arr['dateM'] = date("m");
$arr['dateDate'] = date("d");
$arr['nMonth'] = date("w", mktime(0, 0, 0, date('m'), 1, date('Y')));
$arr['lastDate'] = date("t", strtotime(date('Y-m-d')));
echo json_encode($arr);
exit;

} else if ($move=='ny') {
$arr['move'] = 'ny';
$arr['today'] = date("Y-m-d",strtotime("+1 year"));
$arr['todayY'] = date("Y");
$arr['todayM'] = date("m");
$arr['dateY'] = date("Y");
$arr['dateM'] = date("m");
$arr['dateDate'] = date("d");
$arr['nMonth'] = date("w", mktime(0, 0, 0, date('m'), 1, date('Y')));
$arr['lastDate'] = date("t", strtotime(date('Y-m-d')));
echo json_encode($arr);
exit;

} else if ($move=='bm') {
$arr['move'] = 'bm';
 // $arr['today'] = date("Y-m-d",strtotime("-1 month"));
$arr['today'] = date("Y-m-d",mktime (0, 0, 0, date("m")-1, date('d'), date('Y')));
 $arr['todayY'] = date("Y");
 $arr['todayM'] = date("m");
 $arr['dateY'] = date("Y");
$arr['dateM'] = date("m");
$arr['dateDate'] = date("d");
 $arr['nMonth'] = date("w", mktime(0, 0, 0, date('m'), 1, date('Y')));
 $arr['lastDate'] =date("t", strtotime(date('Y-m-d')));
echo json_encode($arr);
exit;

} else if ($move=='nm') {
$arr['move'] = 'nm';
 // $arr['today'] = date("Y-m-d",strtotime("+1 month"));
$arr['today'] = date("Y-m-d", strtotime("+1 month"));
 $arr['todayY'] = date("Y");
 $arr['todayM'] = date("m");
 $arr['dateY'] = date("Y");
 $arr['dateM'] = date("m");
 $arr['dateDate'] = date("d");
 $arr['nMonth'] = date("w", mktime(0, 0, 0, date('m'), 1, date('Y')));
 $arr['lastDate'] = date("t", strtotime(date('Y-m-d')));
echo json_encode($arr);
exit;
} else{
$arr['todayY'] = date("Y");
 $arr['todayM'] = date("m");
 $arr['dateY'] = date("Y");
 $arr['dateM'] = date("m");
 $arr['dateDate'] = date("d");
 $arr['nMonth'] = date("w", mktime(0, 0, 0, date('m'), 1, date('Y')));
 $arr['lastDate'] = date("t", strtotime(date('Y-m-d')));
 echo json_encode($arr);
exit;
}












?>