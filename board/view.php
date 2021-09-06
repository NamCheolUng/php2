<?php
    include 'header.php';

    $conn = mysqli_connect("localhost", "root", "111111", "bo_table");

 	 $view_num = $_GET['number'];
    
    $sql1 = "UPDATE board SET hit = hit + 1 WHERE number = '$view_num'";
    mysqli_query($conn, $sql1);

    $sql = "SELECT * FROM board WHERE number = '$view_num'";


 	$result = mysqli_query($conn, $sql);
?>
  <h1>상세보기</h1>
<?php
    if ($row=mysqli_fetch_array($result)) {
  ?>
   <div>
   	 <span>제목 : <?=$row['title']?></span>
   	 <span>글쓴이 : <?=$row['name']?></span>
     <span>조회수  : <?=$row['hit']?></span>
   </div>
   <div>
   	  <span>내용 : <?=$row['message']?></span>
   </div>
   <div>
       <button type = "button" onclick="location.href='update.php?number=<?=$row['number']?>'">수정</button>
       <button type = "button" onclick="location.href='delete.php?number=<?=$row['number']?>'">삭제</button>
   </div>
<?php 
   	} 
   	mysqli_close($conn);
?>
   <div>
       <button type = "button" onclick="location.href='list.php'">게시판으로이동하기</button>
   </div>

<?php
    include 'footer.php'; 
 
?>
