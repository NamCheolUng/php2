<?php
    include 'header.php';

    $conn = mysqli_connect("localhost", "root", "111111", "bo_table");

    $sql = "SELECT * FROM board";
    
    $result = mysqli_query($conn, $sql);
?>
   <h1>자유게시판!</h1>
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
<?php
    include 'footer.php'; 
?>
