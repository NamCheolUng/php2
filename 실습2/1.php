<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="/js/jquery-3.6.0.min.js"></script>
	<title></title>
</head>
<body>
<table id="del" border="1" style="text-align:center; margin-top: 50px; margin-right: auto; margin-left: auto;">
	<tr>
		<th>비목</th>
		<th>세목</th>
		<th>지원금</th>
		<th>자부담</th>
		<th>합계</th>
	</tr>
	<tr>
		<td>
			<select id="" onchange="category(this)">
               <option value="">비목선택</option>
               <option value="1">직접비</option>
               <option value="2">간접비</option>
         </select>
        </td>
		<td>
		   <select name="cM" id="cateM" class="" disabled>	
		    	  <option value="">세목선택</option>
		</td>
      <td><input type="text" id="sm" onkeyup="check()"></td>
		<td><input type="text" id="self" onkeyup="check()"></td>
		<td><input type="text" id="sum"></td>
	</tr>
	<tr>
		<td>
			<select onchange="category2(this)">
               <option value="">비목선택</option>
               <option value="1">직접비</option>
               <option value="2">간접비</option>
         </select>
        </td>
		<td>
		   <select name="cM2" id="cateM2" class="" disabled>	
		    	   <option value="">세목선택</option>
		</td>
        <td><input type="text" id="sm2" onkeyup="check()"></td>
		  <td><input type="text" id="self2" onkeyup="check()"></td>
		  <td><input type="text" id="sum2"></td>
	</tr>
	<tr>
		<td>
			<select onchange="category3(this)">
               <option value="">비목선택</option>
               <option value="1">직접비</option>
               <option value="2">간접비</option>
         </select>
        </td>
		<td>
		   <select name="cM3" id="cateM3" class="" disabled>	
		    	   <option value="">세목선택</option>
		</td>
        <td><input type="text" id="sm3" onkeyup="check()"></td>
		  <td><input type="text" id="self3" onkeyup="check()"></td>
		  <td><input type="text" id="sum3"></td>
	</tr>
	<tr>
		<td colspan="2">합계</td>
		<td><input type="text" id="sm4"></td>
		<td><input type="text" id="self4"></td>
		<td><input type="text" id="sum4"></td>
	</tr>
</table>
<div id="div" style="text-align: center; margin-top: 50px;"> 
<button type="button" class="save">저장</button>
<dvi>


<script type="text/javascript">
  var arrA = [];
  var arrA1= [];
  var a = "";
  var a1 = "";

  var arrB = [];
  var arrB1= [];
  var b = "";
  var b1 = "";

  var arrC = [];
  var arrC1= [];
  var c = "";
  var c1 = "";

  var sM = "";
  var sM1 = "";
  var sM2 = "";
  var sMS = "";

  var sF = "";
  var sF1 = "";
  var sF2 = "";
  var sFS = "";

  var sum = "";
  var sum1 = "";
  var sum2 = "";
  var sum3 = "";
 
		function category(e){
			var cateA = ['인건비(직접비)','연구활동비(직접비)'];
			var cateB = ['인건비(간접비)','연구활동비(간접비)'];
		     var cateC = ['세목선택'];
			var target = document.getElementById("cateM");
         
			if (e.value == 1) {
              $("select[name='cM']").attr('disabled',false);  
              var result = cateA;  
              var result0 = cateA[0];
              var result0 = cateA[1];

              a += '직접비';
              arrA.push(result0);


         }else if (e.value == 2) {
         	 $("select[name='cM']").attr('disabled',false);  
         	    var result = cateB;  
              var result0 = cateB[0];
              var result0 = cateB[1];
                a1 += '간접비';
                 arrA1.push(result0);
                 
			}else{   
				 $("select[name='cM']").attr('disabled',true); 
				  var result = cateC;
			}

			target.options.length = 0;

			for (var i in result){
				var opt = document.createElement("option");
				opt.innerHTML = result[i];
		          target.appendChild(opt);
			}


		}

	   function category2(e){
			var cateA = ['인건비(직접비)','연구활동비(직접비)'];
			var cateB = ['인건비(간접비)','연구활동비(간접비)'];
		     var cateC = ['세목선택'];
			var target = document.getElementById("cateM2");
         
			if (e.value == 1) {
              $("select[name='cM2']").attr('disabled',false);    
              var result = cateA;
              var result0 = cateA[0];
              var result0 = cateA[1];

               b += '직접비';
              arrB.push(result0);
         }else if (e.value == 2) {
         	 $("select[name='cM2']").attr('disabled',false);    
              var result = cateB;
              var result0 = cateB[0];
              var result0 = cateB[1];
               b1 += '간접비';
               arrB1.push(result0);
			}else{   
				 $("select[name='cM2']").attr('disabled',true); 
				  var result = cateC;
			}

			target.options.length = 0;

			for (var i in result){
				var opt = document.createElement("option");
				opt.innerHTML = result[i];
		      target.appendChild(opt);
			}


		}

		function category3(e){
			var cateA = ['인건비(직접비)','연구활동비(직접비)'];
			var cateB = ['인건비(간접비)','연구활동비(간접비)'];
		     var cateC = ['세목선택'];
			var target = document.getElementById("cateM3");
         
			if (e.value == 1) {
              $("select[name='cM3']").attr('disabled',false);    
              var result = cateA;
              var result0 = cateA[0];
              var result0 = cateA[1];
               c += '직접비';
              arrC.push(result0);
         }else if (e.value == 2) {
         	 $("select[name='cM3']").attr('disabled',false);    
              var result = cateB;
              var result0 = cateB[0];
              var result0 = cateB[1];
                c += '간접비';
              arrC1.push(result0);
			}else{   
				 $("select[name='cM3']").attr('disabled',true); 
				  var result = cateC;
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
           	sM = a;     
           	var b = $('#self').val(); 
           	sF = b; 	    
           	var c = parseInt(a) + parseInt(b);
               sum = c;
           	$('#sum').val(c);
          

           	var a2 = $('#sm2').val();
           	  sM1 = a2;   	
           	var b2 = $('#self2').val();
           	 sF1 = b2; 
           	var c2 = parseInt(a2) + parseInt(b2);
           	sum1 = c2;
           	$('#sum2').val(c2);
           	

           	var a3 = $('#sm3').val();
           	 sM2 = a3;    	
           	var b3 = $('#self3').val();
           	 sF2 = b3;	
           	var c3 = parseInt(a3) + parseInt(b3);
           	sum2 = c3;
           	$('#sum3').val(c3);
           	
            
            var c4 = parseInt(a) + parseInt(a2) + parseInt(a3);
            $('#sm4').val(c4);
            sMS = c4;
               	

            var c5 = parseInt(b) + parseInt(b2) + parseInt(b3);
            $('#self4').val(c5);
            sFS = c5;

            var c6 = c + c2 + c3;
            sum3 = c6;
            $('#sum4').val(c6);
          
         }

         $(document).on("click",'.save',function(){

              var conf = confirm('저장하시겟습니까?');
              if(conf){
              	 
              	 var action = "2.php";
            $.ajax({
               type:'POST',
               url:action,
               dataType:'json',
               data:'arrA='+arrA+'&a='+a+'&arrA1='+arrA1+'&a1='+a1+'&arrB='+arrB+'&b='+b+'&arrB1='+arrB1+'&b1='+b1+'&arrC='+arrC+'&c='+c+'&arrC1='+arrC1+'&c1='+c1+'&sM='+sM+'&sM1='+sM1+'&sM2='+sM2+'&sMS='+sMS+'&sF='+sF+'&sF1='+sF1+'&sF2='+sF2+'&sFS='+sFS+'&sum='+sum+'&sum1='+sum1+'&sum2='+sum2+'&sum3='+sum3,
                success:function(data){

                 $('#del').remove();
                 $("#div").before(
                      '<table border="1" style="text-align:center; margin-top: 50px; margin-right: auto; margin-left: auto;">' +
										'<tr>' +
											'<th>비목</th>' +
											'<th>세목</th>' +
											'<th>지원금</th>' +
											'<th>자부담</th>' +
											'<th>합계</th>' +
										'</tr>' +
										'<tr>' +
											'<td>' +
										      data['a'] +
										      data['aa'] +
									          '</td>' +
											'<td>' +
											   data['A'] +
											   data['AA'] +
											'</td>' +
									      '<td>' +
									       data['sM'] +
									      '</td>' +
											'<td>' +
											data['sF'] +
											'</td>' +
											'<td>' +
											data['sum'] +
											'</td>' +
										'</tr>' +
										'<tr>' +
											'<td>' +
											 data['b'] +
										      data['bb'] +
									        '</td>' +
											'<td>' +
											   data['B'] +
											   data['BB'] +
											'</td>' +
									        '<td>' +
									          data['sM1'] +
									        '</td>' +
											  '<td>' +
											  	data['sF1'] +
											  '</td>' +
											  '<td>' +
											  data['sum1'] +
											  '</td>' +
										'</tr>' +
										'<tr>' +
											'<td>' +
											  data['c'] +
										       data['cc'] +
									        '</td>' +
											'<td>' +
											  data['C'] +
											  data['CC'] +
											'</td>' +
									        '<td>' +
									          data['sM2'] +
									        '</td>' +
											  '<td>' +
											  	data['sF2'] +
											  '</td>' +
											  '<td>' +
											  data['sum2'] +
											  '</td>' +
										'</tr>' +
										'<tr>' +
											'<td colspan="2">합계</td>' +
											'<td>' +
											data['sMS'] +
											'</td>' +
											'<td>' +
											data['sFS'] +
											'</td>' +
											'<td>' +
											 data['sum3'] +
											'</td>' +
										'</tr>' +
							'</table>'
                 	);


                }
            });
           }
         });





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
