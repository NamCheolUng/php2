<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>게시판</title>
	<style type="text/css">
	</style>
</head>
<body>
	<?php
    $conn = mysqli_connect("localhost", "root", "111111", "bo_table");

    $sql = "SELECT * FROM board";
    $result = mysqli_query($conn, $sql);

   ?>
   <h1>자유게시판</h1>
<table border="1">
    	<thead>
    		<tr>
    			<th>No</th>
    			<th>제목</th>
    			<th>글쓴이</th>
    			<th>작성일</th>
    		</tr>
    	</thead>
    	<?php
    while ($row=mysqli_fetch_array($result)) {
    ?>
    <tbody>
       		<tr>
    			<td><?=$row['number']?></td>
    			<td><a href="view.php?number=<?=$row['number']?>"><?=$row['title']?></a></td>
    			<td><?=$row['name']?></td>
    			<td><?=$row['created']?></td>
    		</tr>
    	</tbody>  
 <?php
	}
	  mysqli_close($conn);
?>
</table>
 <button type = "button" onclick="location.href='write.html'">글쓰기</button>
</body>
</html>