<?php
$today = $_POST['today'];
$date = $_POST['date'];
$bfy = $_POST['bfy'];
// $nty = $_POST['nty'];
// $bfm = $_POST['bfm'];
// $ntm = $_POST['ntm'];

$arr = array('by'=>$bfy);


if($bfy == "by"){

$today =  date("Y-m-d",strtotime("-1 years"));
     
echo json_encode($arr);
}



?>