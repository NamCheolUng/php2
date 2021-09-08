<?php
    include 'header.php';

	$conn = mysqli_connect("localhost", "root", "111111", "bo_table");

	$u_number = $_POST['number'];
	$u_title = $_POST['title'];
	$u_message = $_POST['message'];

	 $sql = "UPDATE board SET title = '$u_title', message = '$u_message', created = now() WHERE number = '$u_number'";
	 $result = mysqli_query($conn, $sql);

	 	if (!$result) {
	 		echo '수정하지 못했습니다.';
	 	}else{
?>
	<script type="text/javascript">
		alert("수정완료되었습니다.");
		location.href="list.php";
	</script>

<?php
	}
	 mysqli_close($conn); 
	 include 'footer.php'; 
?>

