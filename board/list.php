<?php
   if(isset($_GET['page'])){
     $page = $_GET['page']; //1,2,3,4,5
   }else{
        $page = 1;
   }
    include 'header.php';

    // $search_option = " where 1";

    // if(isset($_POST['searchType']=="title")) {
    //     $search_option = "and title = a "
    // }
    // if(isset($_POST['searchType']=="writer")) {
    //     $search_option = "and writer = a "
    // }

    $conn = mysqli_connect("localhost", "root", "111111", "bo_table");

    $sql = "SELECT * FROM board";
    $data = mysqli_query($conn, $sql);
    $row_num = mysqli_num_rows($data); //모든 레코드 수, 데이터의 총 개수를 숫자로 반환
    
 // $sql = "SELECT count(*) FROM board";
 // $data = mysqli_query($conn, $sql);
 // $row = mysqli_fetch_array($data); 
 // $total = $row[0];
 // echo $total;
 

 $list = 5; //한 페이지에 보여줄 개수를 저장
 $block_cnt = 5; //블록당 보여줄 페이지의 개수를 저장 , 블록은 페이지를 일정 개수로 묶어 놓은 ex)1 2 3 4 5 > 1블록
 $block_num = ceil($page / $block_cnt); // 현재 페이지 블록을 구하기 위한것. ceil() 함수는 인자값을 무조건 올림처리 (입력값에 소수부분이 존재할 때 값을 올려서 리턴 9.2 > 10) 
 $block_start = (($block_num - 1) * $block_cnt) + 1; //블록의 시작번호 ex)1,6,11 ...
 $block_end = $block_start + $block_cnt -1; //블록의 마지막 번호 ex)5,10,15 ...
 
 $total_page = ceil($row_num / $list);//페이징한 페이지 수 ex)게시글 26개면 페이징 되는 페이지는 6
 if ($block_end > $total_page) {
     $block_end = $total_page; // 블록의 마지막 번호가 페이지 수 보다 많다면 페이징한 페이지의 수를 마지막 번호로 설정
 }
 
 $total_block = ceil($total_page / $block_cnt); //블록의 총 개수
 $page_start = ($page -1) * $list; //페이지의 시작 $page_start변수는 sql문에서 limit 조건을 걸때 사용

 $sql2 = "SELECT ROW_NUMBER() OVER(ORDER BY number) AS row, number, title, name, created FROM board ORDER BY number DESC LIMIT $page_start, $list"; //(offset,row카운트)
 $result = mysqli_query($conn, $sql2);



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
                <!-- <td><?=$row['number']?></td> -->
    			<td><?=$row['row']?></td>
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
    <?php
    if ($page <= 1) {
        echo "<a href=\"#\">처음</a>";
    } else {
        echo "<a href=\"list.php?page=1\">처음</a>";
    }

    if ($page <= 1) {
    //
    } else {
        $pre = $page - 1;
        echo "<a href=\"list.php?page=$pre\">◀ 이전</a>";
    }

    for ($i = $block_start; $i <= $block_end; $i++) { 
        if ($page == $i) {
            echo "<strong>[$i]</strong>";
        }else{
            echo "<a href=\"list.php?page={$i}\">[$i]</a>";
        }
    }

    if ($page >= $total_page) {
        // 
    }else{
        $next = $page + 1;
        echo "<a href=\"list.php?page=$next\">다음 ▶</a>";

    }

    if ($page >= $total_page) {
         echo "<a href=\"#\">마지막</a>";
    }else{
        echo "<a href=\"list.php?page=$total_page\">마지막</a>";

    }

?>
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
