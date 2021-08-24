<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>수정</title>
</head>
<body>
      <?php
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
			    <input type="hidden" name="number" value="<?=$row['number']?>"> 
				<p>글쓴이 : <?=$row['name']?></p> 
				<p><label for="title">제목 : </label><input type="text" name="title" id="title" value="<?=$row['title']?>"></p>
        		<p><label for="message">내용 : </label><textarea name="message" id="message" cols="30" rows="10"><?=$row['message']?></textarea></p>
        		<input type="submit" value="수정하기">
		</form>

		<?php
		}
		mysqli_close($conn); 
		?>
</body>
</html>