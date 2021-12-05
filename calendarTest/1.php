<?php
$move = $_POST['move'];

$arr = array();

$today = date("Y-m-d");
$date = date("Y-m-d");
//전년 클릭
// $todaynM = date("Y-m-d",mktime(0, 0, 0, $todaym, 1, $todayY));
// $todaynMW = date("w",strtotime($todaynM));
// $todayDate = date("Y-m-t",strtotime($todaynM));
// $todayDateN = date("t",strtotime($todaynM));

//다음년 클릭
// $today1nM = date("Y-m-d",mktime(0, 0, 0, $today1m, 1, $today1Y));
// $today1nMW = date("w",strtotime($today1nM));
// $today1Date = date("Y-m-t",strtotime($today1nM));
// $today1DateN = date("t",strtotime($today1nM));

//전달 클릭
// $today2nM = date("Y-m-d",mktime(0, 0, 0, $today2m, 1, $today2Y));
// $today2nMW = date("w",strtotime($today2nM));
// $today2Date = date("Y-m-t",strtotime($today2nM));
// $today2DateN = date("t",strtotime($today2nM));

//다음달 클릭
// $today3nM = date("Y-m-d",mktime(0, 0, 0, $today3m, 1, $today3Y));
// $today3nMW = date("w",strtotime($today3nM));
// $today3Date = date("Y-m-t",strtotime($today3nM));
// $today3DateN = date("t",strtotime($today3nM));

//조건 아닐시 
$first = date("Y-m-d",mktime (0, 0, 0, date("m"), 1, date('Y'))); //현재달 첫째 날짜
$firstW = date("w", strtotime($first)); //현재달 첫째 요일
$last = date("Y-m-t",strtotime($today)); //현재달 마지막 날짜
$lastN = date("t", strtotime($today));   // 현재달 마지막 일수




if($move=="start"){
$todayY = date("Y",strtotime($today));
$todaym = date("m",strtotime($today));
$dateY = date("Y",strtotime($today));;
$datem = date("m",strtotime($today));;
$dated = date("d",strtotime($today));;
$arr['move'] = 'start';
$arr['today'] = $today;
$arr['todayY'] = $todayY;
$arr['todayM'] = $todaym;
$arr['dateY'] = $dateY;
$arr['dateM'] = $datem;
$arr['dateDate'] = $dated;
$arr['nMonth'] = $first;
$arr['nMonthMW'] = $firstW;
$arr['lastDate'] = $last;
$arr['lastDateN'] = $lastN;
echo json_encode($arr);
exit;
}

else if ($move=='by') {
$today = date("Y-m-d",mktime(0,0,0,date('m'),date('d'),date('Y')-1));
$todayY = date("Y",strtotime($today));
$todaym = date("m",strtotime($today));
$todaynM = date("Y-m-d",mktime(0, 0, 0, $todaym, 1, $todayY)); //현재달 첫째 날짜
$todaynMW = date("w",strtotime($todaynM)); //현재달 첫째 요일
$todayDate = date("Y-m-t",strtotime($today)); 
$todayDateN = date("t",strtotime($today));
$arr['move'] = 'by';
$arr['today'] = $today;
$arr['todayY'] = $todayY;
$arr['todayM'] = $todaym;
$arr['nMonth'] = $todaynM;
$arr['nMonthMW'] = $todaynMW;
$arr['lastDate'] = $todayDate;
$arr['lastDateN'] = $todayDateN;
echo json_encode($arr);
exit;

} else if ($move=='ny') {
$today = date("Y-m-d",mktime(0,0,0,date('m'),date('d'),date('Y')+1));
$todayY = date("Y",strtotime($today));
$todaym = date("m",strtotime($today));
$todaynM = date("Y-m-d",mktime(0, 0, 0, $todaym, 1, $todayY)); //현재달 첫째 날짜
$todaynMW = date("w",strtotime($todaynM)); //현재달 첫째 요일
$todayDate = date("Y-m-t",strtotime($today)); 
$todayDateN = date("t",strtotime($today));
$arr['move'] = 'ny';
$arr['today'] = $today;
$arr['todayY'] = $todayY;
$arr['todayM'] = $todaym;
$arr['nMonth'] = $todaynM;
$arr['nMonthMW'] = $todaynMW;
$arr['lastDate'] = $todayDate;
$arr['lastDateN'] = $todayDateN;
echo json_encode($arr);
exit;

} else if ($move=='bm') {
$today = date("Y-m-d",mktime(0,0,0,date('m')-1,date('d'),date('Y')));
$todayY = date("Y",strtotime($today));
$todaym = date("m",strtotime($today));
$todaynM = date("Y-m-d",mktime(0, 0, 0, $todaym, 1, $todayY)); //현재달 첫째 날짜
$todaynMW = date("w",strtotime($todaynM)); //현재달 첫째 요일
$todayDate = date("Y-m-t",strtotime($today)); 
$todayDateN = date("t",strtotime($today));
$arr['move'] = 'bm';
$arr['today'] = $today;
$arr['todayY'] = $todayY;
$arr['todayM'] = $todaym;
$arr['nMonth'] = $todaynM;
$arr['nMonthMW'] = $todaynMW;
$arr['lastDate'] = $todayDate;
$arr['lastDateN'] = $todayDateN;
echo json_encode($arr);
exit;

} else if ($move=='nm') {
$today = date("Y-m-d",mktime(0,0,0,date('m')+1,date('d'),date('Y')));
$todayY = date("Y",strtotime($today));
$todaym = date("m",strtotime($today));
$todaynM = date("Y-m-d",mktime(0, 0, 0, $todaym, 1, $todayY)); //현재달 첫째 날짜
$todaynMW = date("w",strtotime($todaynM)); //현재달 첫째 요일
$todayDate = date("Y-m-t",strtotime($today)); 
$todayDateN = date("t",strtotime($today));
$arr['move'] = 'nm';
$arr['today'] = $today;
$arr['todayY'] = $todayY;
$arr['todayM'] = $todaym;
$arr['nMonth'] = $todaynM;
$arr['nMonthMW'] = $todaynMW;
$arr['lastDate'] = $todayDate;
$arr['lastDateN'] = $todayDateN;
echo json_encode($arr);
exit;

}

?>
