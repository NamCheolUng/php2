<?php
    include 'header.php';

    $conn = mysqli_connect("localhost", "root", "111111", "bo_table");
    	
    	if (!$conn) {
    		echo 'db에 연결하지 못했습니다.'.mysqli_connect_error();
	}else {
    		echo 'db에 접속했습니다.';
	}	

	 $u_name = $_POST['name'];
	 $u_title = $_POST['title'];
	 $u_message = $_POST['message'];

	 $sql = "INSERT INTO board(name, title, message, created, hit) VALUES('$u_name', '$u_title', '$u_message', now(), 0)";
	 $result = mysqli_query($conn, $sql);



	 if (!$result) {
    		echo '저장하지 못했습니다.';
    		error.log(mysqli_error($conn));
	}else {
    		echo '저장 성공입니다.';
    	}

 	mysqli_close($conn);
     echo "<hr><a href=\"list.php\">게시판으로이동하기</a>";
     include 'footer.php'; 
    ?>

 	
