<?php
$uploadfile = $_FILES['upload']['name']; // POST 방식으로 전송

if (move_uploaded_file($_FILES['upload']['tmp_name'], $uploadfile)) { 
// 클라이언트 파일은 서버의 임시 디렉토리에 임시 파일명으로 전송. 그렇기 때문에 임시 디렉토리 파일을 원하는 장소로 가져가기 위해서는 move_uploaded_file() 사용.
// 이때 생성된 임시파일은 자동으로 삭제되고 업로드 대상 파일은 프로그램 파일이 들어있는 폴더에 복사됩니다.
	echo "파일 업로드 성공<br>";
	echo "<img src={$_FILES['upload']['name']}><br>";
	echo "1. 파일 이름 : {$_FILES['upload']['name']}<br>";
	echo "2. 파일 타입 : {$_FILES['upload']['type']}<br>";
	echo "3. 파일크기 : {$_FILES['upload']['size']}<br>";
	echo "4. 임시파일명 : {$_FILES['upload']['tmp_name']}";
	
} else{
	echo "파일 업로드 실패";
}


//move_uploaded_file($_FILES['test']['tmp_name'],'./abcd'.$_FILES['test']['name']); //abcd 폴더에 파일원래이름 그대로 저장


?>
