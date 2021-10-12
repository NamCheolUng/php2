<?php
    
     $title = "수정하기";
    include 'header.php';


    $conn = mysqli_connect("localhost", "root", "111111", "bo_table");

    $up_num = $_GET['number'];
    $sql = "SELECT * FROM board WHERE number = '$up_num'";


    $result = mysqli_query($conn, $sql);



?>
	<h1>수정화면</h1>
<?php
	if($row = mysqli_fetch_array($result)){
?>

	<form action="update_process.php" method="post">
		<fieldset>
    		<legend>입력사항</legend>
			<input type="hidden" name="number" value="<?=$row['number']?>"> 
			<p>글쓴이 <?=$row['name']?></p> 
			<p><label for="title">제목</label><input type="text" name="title" id="title" value="<?=$row['title']?>"></p>
        	<p><textarea id="summernote" name="message"><?=$row['message']?></textarea></p>
        	<input type="submit" value="수정하기">
		</fieldset>
	</form>

<?php
		}
	mysqli_close($conn); 
    include 'footer.php'; 

?>
	