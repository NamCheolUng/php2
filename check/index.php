<?php


	$conn = mysqli_connect("localhost", "root", "111111", "ex");
    $no = 14;
    $chked1 = '';
    $chked2 = '';
    $chked3 = '';
    $sql = "SELECT * FROM checkbox WHERE idx = '$no'";

    $result = mysqli_query($conn,$sql);

    $row = mysqli_fetch_array($result);

    $chk = explode(',',$row['size']);

    for ($i=0; $i < count($chk); $i++) { 
        
        switch ($chk[$i]) {
        case 1:
        $chked1 = "checked";
        break;
        case 2:
        $chked2 = "checked";
        break;
        case 3:
        $chked3 = "checked";
        break;
        }

        // $chk[$i] == 1 ? $chked1 = 'checked': '';
        // $chk[$i] == 2 ? $chked2 = 'checked': '';
        // $chk[$i] == 3 ? $chked3 = 'checked': '';


    }

  


?>

   <!DOCTYPE html>
   <html>
   <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <title></title>
   </head>
   <body>
   
    <input type="checkbox" name="size[]" value="1" <?=$chked1?>> 산
    <input type="checkbox" name="size[]" value="2" <?=$chked2?>> 바다
    <input type="checkbox" name="size[]" value="3" <?=$chked3?>> 하늘


   </body>
   </html>
