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
    // if(!$_GET['page']) $page = 1;
    // $page = $_GET['page'];

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
     <div>
        <button type = "button" onclick="location.href='write.html'">글쓰기</button>
     </div>
     <!--
     <ul>
        <li><a href="#">prev</a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">next</a></li>
    </ul>
    -->
        <div>
        <form action="search.php" method="get">
            <select name="sKey">
                <option value="0" selected>선택</option>
                <option value="title">제목</option>
                <option value="name">글쓴이</option>
            </select>
            <input type="text" name="sText">
            <input type="submit" value="검색">
         </form>
        </div>
</body>
</html>
