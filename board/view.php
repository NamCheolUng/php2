<?php
  $title = "상세보기";

    include 'header.php';

    $conn = mysqli_connect("localhost", "root", "111111", "bo_table");

 	 $view_num = $_GET['number'];
    
    $sql1 = "UPDATE board SET hit = hit + 1 WHERE number = '$view_num'";
    mysqli_query($conn, $sql1);

    $sql = "SELECT * FROM board WHERE number = '$view_num'";
    $result = mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($result);
?>
  <h1>상세보기</h1>

   <div>
   	 <span>제목 : <?=$row['title']?></span>
   	 <span>글쓴이 : <?=$row['name']?></span>
     <span>조회수  : <?=$row['hit']?></span>
     <span>작성일  : <?=$row['created']?></span>
   </div>
   <div>
   	  <span><?=$row['message']?></span>
   </div>
   <div>
       <button type = "button" onclick="location.href='update.php?number=<?=$row['number']?>'">수정</button>
       <button type = "button" onclick="location.href='delete.php?number=<?=$row['number']?>'">삭제</button>
   </div>

   <div>
       <button type = "button" onclick="location.href='list.php'">게시판으로이동하기</button>
   </div>

   <h3>댓글목록</h3>

    <?php
    $sql2 = "SELECT * FROM reply WHERE b_num = ' $view_num' ORDER BY idx DESC"; 
    $result = mysqli_query($conn, $sql2);
    while ($reply=mysqli_fetch_array($result)) {
    ?>

    <div>
        <div><span><?=$reply['name']?></span></div>
        <div><span><?=$reply['content']?></span></div>
        <div><span><?=$reply['date']?></span></div>
       <button type = "button" onclick="location.href='reply_up.php?b_num=<?=$row['number']?>'">수정</button>
       <form action="reply_del.php?b_num=<?=$row['number']?>" method="post">
         <input type="hidden" name="idx" value="<?=$reply['idx']?>">
         <input type="submit" value="삭제">
       </form>
    </div>

<?php
}
?>

    <div>
        <form action="reply_ok.php?b_num=<?=$row['number']?>" method="post">
            <fieldset>
                <legend>댓글</legend>
                    <p><input type="text" name="name" placeholder="작성자 입력"></p>
                    <p><textarea name="content" cols="50" rows="5" placeholder="댓글 작성란"></textarea> <input type="submit" value="등록"></p>
            </fieldset>
        </form>
    </div>

<?php
    mysqli_close($conn);
    include 'footer.php'; 
?>
