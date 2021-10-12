<?php

 include 'header.php';

	$conn = mysqli_connect("localhost", "root", "111111", "bo_table");

   $r_idx = $_POST['idx'];
   $r_b_num = $_POST['b_num'];
   $r_content = $_POST['content'];

   $sql = "UPDATE reply SET content = '$r_content', date = now() WHERE idx = '$r_idx'";


   $result = mysqli_query($conn,$sql);

   if($result){
?>
<script type="text/javascript">
	alert("수정성공입니다.");
	location.href="view.php?number=<?php echo $r_b_num?>";
</script>
<?php 
	}else{
?>
<script type="text/javascript">
	alert("수정실패입니다.");
	location.href="list.php";
</script>
<?php
}
mysqli_close($conn);
 include 'footer.php'; 
?>