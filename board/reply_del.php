<?php
 include 'header.php';

  $conn = mysqli_connect("localhost", "root", "111111", "bo_table");

    $re_del_b_num = $_GET['b_num'];
	$re_idx = $_POST['idx'];
    $sql = "DELETE FROM reply WHERE idx = '$re_idx'";
    $result = mysqli_query($conn,$sql);

    if($result){
?>
 <script type="text/javascript">
 	alert("삭제성공!");
 	location.href="view.php?number=<?php echo $re_del_b_num?>";
 </script>
<?php
} else { 
?>
<script type="text/javascript">
 	alert("삭제실패!");
 	location.href="list.php";
</script>
<?php
   }
    mysqli_close($conn);
    include 'footer.php'; 
?>