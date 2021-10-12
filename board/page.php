<?php 
// select count(*) as totalCount from board

// 한 페이지에 출력될 게시물 수 (countList)
// 한 화면에 출력될 페이지 수 (countPage)
// 현재 페이지 번호 (이하 page)

int page = 1;
int countList = 10;
int countPage = 10;

int totalCount = 25; // 물론 실제론 여긴 DBMS 에서 조회해서 들어가야 합니다.

int totalPage = totalCount / countList;


if (totalCount % countList > 0) {

    totalPage++;

}

if (totalPage < page) {

    page = totalPage;

}

int startPage = ((page - 1) / 10) * 10 + 1;
int endPage = startPage + countPage - 1;

if (endPage > totalPage) {

    endPage = totalPage;

}


if (startPage > 1) {

    System.out.print("<a href=\"?page=1\">처음</a>");

}

if (page > 1) {

    System.out.println("<a href=\"?page=" + (page - 1)  + "\">이전</a>");

}

for (int iCount = startPage; iCount <= endPage; iCount++) {

    System.out.print(" " + iCount + " ");

}



if (page < totalPage) {
    
    System.out.println("<a href=\"?page=" + (page + 1)  + "\">다음</a>");

}



if (endPage < totalPage) {

    System.out.print("<a href=\"?page=" + totalPage + "\">끝</a>");

}

?>