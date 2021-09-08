<?php 	
	include 'header.php';

 	$conn = mysqli_connect("localhost", "root", "111111", "bo_table");

 	$re_b_num = $_GET['b_num'];
 	$re_name = $_POST['name'];
	$re_content = $_POST['content'];

    $sql = "INSERT INTO reply(b_num, name, content) VALUES('$re_num', '$re_name', '$re_content')";
	
	
	$result = mysqli_query($conn, $sql);

	if (!$result) {
?>
		<script type="text/javascript">
			alert("댓글 작성에 실패햇습니다.");
			location.href="list.php";
		</script> 
<?php
	}else {
?>
    <script type="text/javascript">
    	alert("댓글이 작성되엇습니다.");
    	location.href="view.php?number=<?php echo $re_b_num?>";
    </script>
<?php
}
mysqli_close($conn);
     include 'footer.php'; 
?>


