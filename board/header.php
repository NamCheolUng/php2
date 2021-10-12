<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<title><?=$title?></title>

	<!-- include libraries(jQuery, bootstrap) -->
	<!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">     -->

	<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>  -->
	<script type="text/javascript" src="/js/jquery-3.6.0.min.js"></script>
	<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>   -->



	<!-- include summernote css/js -->
	 <!-- <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">  -->
	 <!-- <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>    -->
	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script> 

<!-- 
    <link rel="stylesheet" type="text/css" href="/css/summernote-lite.min.css"> 
    <script type="text/javascript" src="/js/summernote-lite.min.js"></script> -->
    <script type="text/javascript" src="/js/summernote-ko-KR.js"></script>


	<style type="text/css">

	a:link{
		color: black;
	}

	a:visited{
		color: black;
	}

	a { 
		text-decoration:none;
	}

	.ta {
		text-align:center;

	}

	table {
    margin-left:auto; 
    margin-right:auto;


	}

	.re_ct{
		color:blue;
		/*font-weight:bold;*/
	}

	form {
	display: inline;
  }
	
	</style>
</head>
<body>
		<script type="text/javascript">
			// $(document).ready(function() {
  				// $('#summernote').summernote();
						// });
		$(document).ready(function() {
 	       $('#summernote').summernote({
        	 placeholder: "내용입력란",
             tabsize: 1,
             height: 200,
             width : 1000,
             lang : "ko-KR",
             toolbar: [
		    // 글꼴 설정
		    ['fontname', ['fontname']],
		    // 글자 크기 설정
		    ['fontsize', ['fontsize']],
		    // 굵기, 기울임꼴, 밑줄,취소 선, 서식지우기
		    ['style', ['bold', 'italic', 'underline','strikethrough', 'clear']],
		    // 글자색
		    ['color', ['forecolor','color']],
		    // 표만들기
		    ['table', ['table']],
		    // 글머리 기호, 번호매기기, 문단정렬
		    ['para', ['ul', 'ol', 'paragraph']],
		    // 줄간격
		    ['height', ['height']],
		    // 그림첨부, 링크만들기, 동영상첨부
		    ['insert',['picture','link','video']],
		    // 코드보기, 확대해서보기, 도움말
		    ['view', ['codeview','fullscreen', 'help']]
		  ],
		  // 추가한 글꼴
		fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New','맑은 고딕','궁서','굴림체','굴림','돋음체','바탕체'],
		 // 추가한 폰트사이즈
		fontSizes: ['8','9','10','11','12','14','16','18','20','22','24','28','30','36','50','72']
          });
      });
		</script>