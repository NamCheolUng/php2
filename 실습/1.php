<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="/js/jquery-3.6.0.min.js"></script>
	<title></title>
</head>
<body>
<form>
<table border="1" style="text-align:center; margin-top: 50px; margin-right: auto; margin-left: auto;">
	<tr>
		<th>비목</th>
		<th>세목</th>
		<th>지원금</th>
		<th>자부담</th>
		<th>합계</th>
	</tr>
	<tr>
		<td>
			<select onchange="category(this)">
               <option value="">비목선택</option>
               <option value="1">직접비</option>
               <option value="2">간접비</option>
             </select>
        </td>
		<td>
		    <select name="" id="cateM" class="">	
		    	<option value="">세목선택</option>
		</td>
        <td><input type="text" id="sm" onkeyup="check()"></td>
		<td><input type="text" id="self" onkeyup="check()"></td>
		<td><input type="text" id="sum"></td>
	</tr>
	<tr>
		<td colspan="2">합계</td>
		<td><input type="text" id="sm2"></td>
		<td><input type="text" id="self2"></td>
		<td><input type="text" id="sum2"></td>
	</tr>
</table>
<div style="text-align: center; margin-top: 50px;"> 
<button type="button">저장</button>
<dvi>
</form>

<script type="text/javascript">

	
 
		function category(e){
			var cateA = ['인건비(직접비)', '연구활동비(직접비)'];
			var cateB= ['인건비(간접비)', '연구활동비(간접비)'];
			var target = document.getElementById("cateM");

			if (e.value == 1) {
                 var result = cateA;
              }else if (e.value == 2) {
                 var result = cateB;
			}
			target.options.length = 0;

			for (var i in result){
				var opt = document.createElement("option");
				opt.innerHTML = result[i];
		        target.appendChild(opt);
			}


		}
           
           function check(){
           	var a = $('#sm').val();
           	var b = $('#self').val();
           	var c = parseInt(a) + parseInt(b);
           	if()

                 $('#sm2').val(a);
                 $('#self2').val(b);
            
              $('#sum').val(c);

           }

		 //  $('#sm').keyup(function(){
   //              a = $(this).val();
   //              $('#sm2').val(a);
              
		 // });

		 //    $('#self').keyup(function(){
   //               b = $(this).val();
   //              $('#self2').val(b);
              
		 // });
	      
	     

</script>

</body>
</html>