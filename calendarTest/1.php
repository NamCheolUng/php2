<?php
$move = $_POST['move'];


// $todayY = $_POST['todayY'];

$arr = array();

$day= date("Y-m-d");
$day1= date("Y-m-d");

//현재년 기준 -1년씩 계산
$dayY = date("Y",strtotime($day));
$dayM = date("m",strtotime($day));
$dayD = date("d",strtotime($day));

$today = date("Y-m-d",mktime(0,0,0,$dayM,$dayD,$dayY-1)); //2020년-12월-03일
//-1년 기준 +1씩 올려주는 계산
$todayy = date("Y",strtotime($today));
$todaymm = date("M",strtotime($today));
$todayd = date("D",strtotime($today));

//현재년 기준 -1달씩 계산
$day1Y = date("Y",strtotime($day1));
$day1M = date("m",strtotime($day1));
$day1D = date("d",strtotime($day1));

$Mon = date("Y-m-d",mktime(0,0,0,$day1M-1,$day1D,$day1Y));

//-1달 기준 +1씩 올려주는 계산
$Mony = date("Y",strtotime($Mon));
$Monm =  date("m",strtotime($Mon));
$Mond = date("d",strtotime($Mon));




$today1 = date("Y-m-d",strtotime("+1 year"));
$today2 = date("Y-m-d",strtotime("-1 month"));
$today3 = date("Y-m-d",strtotime("+1 month"));

$todayY = date("Y",strtotime($today));
$todaym = date("m",strtotime($today));

$today1Y = date("Y",strtotime($todayY));
$today1m = date("m",strtotime($today1));

$today2Y = date("Y",strtotime($today2));
$today2m = date("m",strtotime($today2));

$today3Y = date("Y",strtotime($today3));
$today3m = date("m",strtotime($today3));




//전년 클릭
$todaynM = date("Y-m-d",mktime(0, 0, 0, $todaym, 1, $todayY));
$todaynMW = date("w",strtotime($todaynM));
$todayDate = date("Y-m-t",strtotime($todaynM));
$todayDateN = date("t",strtotime($todaynM));

//다음년 클릭
$today1nM = date("Y-m-d",mktime(0, 0, 0, $today1m, 1, $today1Y));
$today1nMW = date("w",strtotime($today1nM));
$today1Date = date("Y-m-t",strtotime($today1nM));
$today1DateN = date("t",strtotime($today1nM));

//전달 클릭
$today2nM = date("Y-m-d",mktime(0, 0, 0, $today2m, 1, $today2Y));
$today2nMW = date("w",strtotime($today2nM));
$today2Date = date("Y-m-t",strtotime($today2nM));
$today2DateN = date("t",strtotime($today2nM));

//다음달 클릭
$today3nM = date("Y-m-d",mktime(0, 0, 0, $today3m, 1, $today3Y));
$today3nMW = date("w",strtotime($today3nM));
$today3Date = date("Y-m-t",strtotime($today3nM));
$today3DateN = date("t",strtotime($today3nM));

//조건 아닐시 
$first = date("Y-m-d",mktime (0, 0, 0, date("m"), 1, date('Y'))); //현재달 첫째 날짜
$firstW = date("w", strtotime($first)); //현재달 첫째 요일
$last = date("Y-m-t",strtotime($day)); //현재달 마지막 날짜
$lastN = date("t", strtotime($day));   // 현자달 마지막 일수




if($move=="start"){
$arr['move'] = 'start';
$arr['today'] = date("Y-m-d");
$arr['todayY'] = date("Y");
$arr['todayM'] = date("m");
$arr['dateY'] = $dayY;
$arr['dateM'] = $dayM;
$arr['dateDate'] = $dayD;
$arr['nMonth'] = $first;
$arr['nMonthDay'] = $firstW;
$arr['lastDate'] = $last;
$arr['lastDateN'] = $lastN;
echo json_encode($arr);
exit;
}

// else if ($move=='by') {
// $arr['move'] = 'by';
// $arr['today'] = date("Y-m-d",mktime(0,0,0,$dayM,$dayD,$dayY-1));
// $arr['todayY'] = $;
// $arr['todayM'] = $todaymm;
// $arr['nMonth'] = $todaynM;
// $arr['nMonthW'] = $todaynMW;
// $arr['lastDate'] = $todayDate;
// $arr['lastDateN'] = $todayDateN;
// echo json_encode($arr);
// exit;

// } else if ($move=='ny') {
// $arr['move'] = 'ny';
// $arr['today'] = date("Y-m-d",mktime(0,0,0,$todaymm,$todayd,$todayy+1));
// $arr['todayY'] = $;
// $arr['todayM'] = $todaymm;
// $arr['nMonth'] = $todaynM;
// $arr['nMonthW'] = $todaynMW;
// $arr['lastDate'] = $todayDate;
// $arr['lastDateN'] = $todayDateN;
// echo json_encode($arr);
// exit;

// } else if ($move=='bm') {
// $arr['move'] = 'bm';
// $arr['today'] = date("Y-m-d",mktime(0,0,0,$day1M-1,$day1D,$day1Y));
// $arr['todayY'] = $;
// $arr['todayM'] = $todaym;
// $arr['nMonth'] = $todaynM;
// $arr['nMonthW'] = $todaynMW;
// $arr['lastDate'] = $todayDate;
// $arr['lastDateN'] = $todayDateN;
// echo json_encode($arr);
// exit;

// } else if ($move=='nm') {
// $arr['move'] = 'nm';
// $arr['today'] = date("Y-m-d",mktime(0,0,0,$Monm+1,$Mond,$Mony));
// $arr['todayY'] = $;
// $arr['todayM'] = $todaym;
// $arr['nMonth'] = $todaynM;
// $arr['nMonthW'] = $todaynMW;
// $arr['lastDate'] = $todayDate;
// $arr['lastDateN'] = $todayDateN;
// echo json_encode($arr);
// exit;

// }

?>
