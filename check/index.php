<?php


	$conn = mysqli_connect("localhost", "root", "111111", "ex");
    $no = 1;
    $sql = "SELECT * FROM checkbox WHERE idx = '$no'";

    $result = mysqli_query($conn,$sql);

   
?>