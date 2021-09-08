<?php
   include 'header.php';

    $conn = mysqli_connect("localhost", "root", "111111", "bo_table");
    $re_up_num = $_GET['b_num'];
    $sql = "SELECT * FROM reply WHERE b_num = '$re_up_num'";

    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
?>

   <div>
        <form action="reply_up_process.php" method="post">
            <fieldset>
                <legend>댓글</legend>
                    <input type="hidden" name="idx" value="<?=$row['idx']?>">
                    <input type="hidden" name="b_num" value="<?=$row['b_num']?>">
                    <p><?=$row['name']?></p>
                    <p><textarea name="content" cols="50" rows="5"><?=$row['content']?></textarea> <input type="submit" value="수정하기"></p>
            </fieldset>
        </form>
    </div>

<?php
    mysqli_close($conn); 
    include 'footer.php'; 
?>
   