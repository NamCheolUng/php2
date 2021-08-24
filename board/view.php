<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>상세보기</title>
</head>
<body>
	<?php
    $conn = mysqli_connect("localhost", "root", "111111", "bo_table");

 	$view_num = $_GET['number'];

 	$sql = "SELECT * FROM board WHERE number = '$view_num'";
 	$result = mysqli_query($conn, $sql);
 	?>
 <h1>상세보기</h1>
    <?php
    if ($row=mysqli_fetch_array($result)) {
  
     ?>
   <div>
   	 <span><?=$row['title']?></span>
   	 <span><?=$row['name']?></span>
   	 <span><?=$row['created']?></span>
   </div>
   <div>
   	<span><?=$row['message']?></span>
   	</div>
      <div>
       <button type = "button" onclick="location.href='update.php?number=<?=$row['number']?>">수정</button>
       <button type = "button" onclick="location.href='delete.php?number=<?=$row['number']?>'">삭제</button>
      </div>
   	<?php 
   	} 
   	mysqli_close($conn);
   	?>
      <div>
       <button type = "button" onclick="location.href='list.php'">게시판으로이동하기</button>
      </div>
      
</body>
</html>
