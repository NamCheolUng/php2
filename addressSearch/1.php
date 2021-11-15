<?php
   include 'header.html';
   $conn = mysqli_connect("localhost", "root", "111111", "address");

   $postNum = $_POST['postNum'];
   $addr = $_POST['addr'];
   $dtaddr = $_POST['dtaddr'];
   $extraAddr = $_POST['extraAddr'];

   $sql = "INSERT INTO address_search(postNum, addr, dtaddr, extraAddr) VALUES('$postNum', '$addr', '$dtaddr', '$extraAddr')";

   $result = mysqli_query($conn,$sql);

   if($result){
   	?>
   	<script type="text/javascript">
   		alert("등록되었습니다.");
   		location.href="1.html";
   	</script>
   	<?php 
   }else{
   	echo "등록실패";
   }


	mysqli_close($conn);  
    include 'footer.html'; 
?>
