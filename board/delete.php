<?php
    include 'header.php';

	$conn = mysqli_connect("localhost", "root", "111111", "bo_table");

	$del_num = $_GET['number'];
	$sql = "DELETE FROM board WHERE number = '$del_num'";
	$result = mysqli_query($conn, $sql);
		
	if (!$result) {
			echo '삭제되지 않았습니다.';
	}else{
?>
	<script type="text/javascript">
		alert("삭제가 완료 되었습니다.");
		location.href = "list.php";
	</script>
<?php
 }
	mysqli_close($conn); 
    include 'footer.php'; 
	
?>
 		