<?php 

 $title = "글등록";
  include 'header.php';

?>

		<h1>글쓰기</h1>
	<form action="insert.php" method="post">
		<fieldset>
    		<legend>입력사항</legend>
				<p><label for="name">글쓴이</label><input type="text" name="name" id="name" placeholder="작성자입력란"></p>
				<p><label for="title">제목</label><input type="text" name="title" id="title" placeholder="제목입력란"></p>
        		<p><textarea  id="summernote" name="message"></textarea></p>
        		<input type="submit" value="글쓰기">
    	</fieldset>
	</form>

<?php 
    include 'footer.php'; 
	
?>





