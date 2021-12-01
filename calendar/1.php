<?php
$today = $_POST['today'];
$date = $_POST['date'];
$move = $_POST['move'];


$arr = array('move'=>$move);


if ($move=='by') {
$arr['move'] = 'by';
echo json_encode($arr);
exit;

} else if ($move=='ny') {
$arr['move'] = 'ny';
echo json_encode($arr);
exit;

} else if ($move=='bm') {
$arr['move'] = 'bm';
echo json_encode($arr);
exit;

} else if ($move=='nm') {
$arr['move'] = 'nm';
echo json_encode($arr);
exit;
}

// if($move=='by'){
// $arr['move'] = date("Y-m-d",strtotime("-1 years"));
// echo json_encode($arr);
// exit;

// }else if($move=='ny'){
// $arr['move'] = date("Y-m-d",strtotime("+1 years"));
// echo json_encode($arr);
// exit;

// }else if ($move=='bm') {
// $arr['move'] = date("Y-m-d",strtotime("-1 months"));
// echo json_encode($arr);
// exit;

// } else if ($move=='nm') {
// $arr['move'] = date("Y-m-d",strtotime("+1 months"));
// echo json_encode($arr);
// exit;
// }








?>
