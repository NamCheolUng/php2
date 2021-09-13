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
	<!--  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet"> 
	 <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script> -->   
	<!-- <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>  -->


    <link rel="stylesheet" type="text/css" href="/css/summernote-lite.min.css"> 
    <script type="text/javascript" src="/js/summernote-lite.min.js"></script>
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
		$(document).ready(function() {
 	       $('#summernote').summernote({
        	 placeholder: "내용입력란",
             tabsize: 2,
             height: 200,
             width : 1000,
             lang : "ko-KR"
          });
      });
		</script>
