<?php





	$check = $_POST['check'];
    // POST로 넘어온 값들을 $check에 저장
         $result = implode(",",$check);         //  explode() 함수가 문자열을 나누는 함수 였다면, implode() 함수는 배열에 속한 문자열을 만드는 함수입니다.

         var_dump($result);
         exit;
  

     $array = array($check);
    // check의 값들을 새로운 배열에 저장

     
 
    foreach ($array as $value){


         $result = implode(",",$value);         //  explode() 함수가 문자열을 나누는 함수 였다면, implode() 함수는 배열에 속한 문자열을 만드는 함수입니다.
        // 배열 값들을 "|" 로 나누어서 한 문자열로 저장
 
         echo "<pre>";
         var_dump($result);
         echo "</pre>";
    }

     $sql = "INSERT INTO checkbox (size) VALUES('$result')";

	 $result = mysqli_query($conn, $sql);

	 if ($result) {
	   echo "성공";
	 }else{
	 	echo "실패";
	 }
 



    // 결과값 문자열에 "딸기" 라는 문자가 포함되어 있으면 true 없으면 false
    if(strpos($result,'딸기') !== false){ // strpos()문자열에 특정 문자열이 포함되어 있는지 확인하는 함수 입니다.
         echo "딸기가 있다!!<br>";
     }else{
         echo "딸기가 없다...<br>";
   }
 
 ?>
