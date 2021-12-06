<?php
$move = $_POST['move'];
$todayY = $_POST['todayY'];
$todaym = $_POST['todaym'];
$todayd = $_POST['todayd'];
$dateY = $_POST['dateY'];
$dateM = $_POST['dateM'];
$dateDate = $_POST['dateDate'];

$arr = array();

$today = date("Y-m-d");
$date = date("Y-m-d");



//조건 아닐시 
$first = date("Y-m-d",mktime (0, 0, 0, date("m"), 1, date('Y'))); //현재달 첫째 날짜
$firstW = date("w", strtotime($first)); //현재달 첫째 요일
$last = date("Y-m-t",strtotime($today)); //현재달 마지막 날짜
$lastN = date("t", strtotime($today));   // 현재달 마지막 일수



if($move=="start"){
$todayY = date("Y",strtotime($today));
$todaym = date("m",strtotime($today));
$todayd = date('d',strtotime($today));
$dateY = date("Y",strtotime($date));
$dateM = date("m",strtotime($date));
$dateDate = date("d",strtotime($date));
$arr['move'] = 'start';
$arr['today'] = $today;
$arr['todayY'] = $todayY;
$arr['todayM'] = $todaym;
$arr['todayD'] = $todayd;
$arr['dateY'] = $dateY;
$arr['dateM'] = $dateM;
$arr['dateDate'] = $dateDate;
$arr['nMonth'] = $first;
$arr['nMonthMW'] = $firstW;
$arr['lastDate'] = $last;
$arr['lastDateN'] = $lastN;
echo json_encode($arr);
exit;
}

else if ($move=='by') {
// $today = date("Y-m-d",mktime(0,0,0,date('m'),date('d'),date('Y')-1));
$today = date("Y-m-d",mktime(0,0,0,$todaym,$todayd,$todayY-1));
$todayY = date("Y",strtotime($today));
$todaym = date("m",strtotime($today));
$todaynM = date("Y-m-d",mktime(0, 0, 0, $todaym, 1, $todayY)); 
$todaynMW = date("w",strtotime($todaynM));
$todayDate = date("Y-m-t",strtotime($today)); 
$todayDateN = date("t",strtotime($today));
$arr['move'] = 'by';
$arr['today'] = $today;
$arr['todayY'] = $todayY;
$arr['todayM'] = $todaym;
$arr['todayD'] = $todayd;
$arr['dateY'] = $dateY;
$arr['dateM'] = $dateM;
$arr['dateDate'] = $dateDate;
$arr['nMonth'] = $todaynM;
$arr['nMonthMW'] = $todaynMW;
$arr['lastDate'] = $todayDate;
$arr['lastDateN'] = $todayDateN;
echo json_encode($arr);
exit;

} else if ($move=='ny') {
// $today = date("Y-m-d",mktime(0,0,0,date('m'),date('d'),date('Y')+1));
$today = date("Y-m-d",mktime(0,0,0,$todaym,$todayd,$todayY+1));
$todayY = date("Y",strtotime($today));
$todaym = date("m",strtotime($today));
$todaynM = date("Y-m-d",mktime(0, 0, 0, $todaym, 1, $todayY)); 
$todaynMW = date("w",strtotime($todaynM)); 
$todayDate = date("Y-m-t",strtotime($today)); 
$todayDateN = date("t",strtotime($today));
$arr['move'] = 'ny';
$arr['today'] = $today;
$arr['todayY'] = $todayY;
$arr['todayM'] = $todaym;
$arr['todayD'] = $todayd;
$arr['dateY'] = $dateY;
$arr['dateM'] = $dateM;
$arr['dateDate'] = $dateDate;
$arr['nMonth'] = $todaynM;
$arr['nMonthMW'] = $todaynMW;
$arr['lastDate'] = $todayDate;
$arr['lastDateN'] = $todayDateN;
echo json_encode($arr);
exit;

} else if ($move=='bm') {
// $today = date("Y-m-d",mktime(0,0,0,date('m')-1,date('d'),date('Y')));
$today = date("Y-m-d",mktime(0,0,0,$todaym-1,$todayd,$todayY));
$todayY = date("Y",strtotime($today));
$todaym = date("m",strtotime($today));
$todaynM = date("Y-m-d",mktime(0, 0, 0, $todaym, 1, $todayY)); 
$todaynMW = date("w",strtotime($todaynM)); 
$todayDate = date("Y-m-t",strtotime($today)); 
$todayDateN = date("t",strtotime($today));
$arr['move'] = 'bm';
$arr['today'] = $today;
$arr['todayY'] = $todayY;
$arr['todayM'] = $todaym;
$arr['todayD'] = $todayd;
$arr['dateY'] = $dateY;
$arr['dateM'] = $dateM;
$arr['dateDate'] = $dateDate;
$arr['nMonth'] = $todaynM;
$arr['nMonthMW'] = $todaynMW;
$arr['lastDate'] = $todayDate;
$arr['lastDateN'] = $todayDateN;
echo json_encode($arr);
exit;

} else if ($move=='nm') {
// $today = date("Y-m-d",mktime(0,0,0,date('m')+1,date('d'),date('Y')));
$today = date("Y-m-d",mktime(0,0,0,$todaym+1,$todayd,$todayY));
$todayY = date("Y",strtotime($today));
$todaym = date("m",strtotime($today));
$todaynM = date("Y-m-d",mktime(0, 0, 0, $todaym, 1, $todayY)); 
$todaynMW = date("w",strtotime($todaynM));
$todayDate = date("Y-m-t",strtotime($today)); 
$todayDateN = date("t",strtotime($today));
$arr['move'] = 'nm';
$arr['today'] = $today;
$arr['todayY'] = $todayY;
$arr['todayM'] = $todaym;
$arr['todayD'] = $todayd;
$arr['dateY'] = $dateY;
$arr['dateM'] = $dateM;
$arr['dateDate'] = $dateDate;
$arr['nMonth'] = $todaynM;
$arr['nMonthMW'] = $todaynMW;
$arr['lastDate'] = $todayDate;
$arr['lastDateN'] = $todayDateN;
echo json_encode($arr);
exit;

}

?>
