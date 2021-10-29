<?php

	$conn = mysqli_connect("localhost", "root", "111111", "ex");

	$box = $_POST['size'];

	


    $box = implode(',',$box);

     $sql = "INSERT INTO checkbox(size) VALUES('$box')";

    $result = mysqli_query($conn,$sql);

    if($result){
    	header("location:index.php");
    }else{
    	echo "등록 실패입니다.";
    }

mysqli_close($conn);


?> 
