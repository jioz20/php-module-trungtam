<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Chòm Sao</title>
	<link type = "text/css" href = "styles.css" rel = "stylesheet" media = "screen">
</head>
<body>
	<?php
	$day = " ";
	$month = " ";
	$image = " ";
	$name = " ";
	$time = " ";
	$result = " ";
	$flag = true;
	if(isset($_REQUEST["Day"]) && isset($_REQUEST["Month"]))
	{
	   $day = $_REQUEST["Day"];
	   $month = $_REQUEST["Month"];
	   $flag = true;
	   if(is_numeric($day) && is_numeric($month))
	   {
	       switch ($month) 
	       {
	           case 1: 
	               if($day <= 19)
	               {
	                   $name = "Ma Kết";    $image = "Capricorn";   $time = "23/12 - 19/01";
	                   if($day < 1 || $day > 31)
	                       $flag = false;
	               }
	               else if($day > 19)
	               {
	                   $name = "Bảo Bình";  $image = "Aquarius";	$time = "20/01 - 19/02";
	               }
	               if($day < 1 || $day > 31)
	                   $flag = false;
	               break;
	           case 2:
	               if($day <= 19)
	               {
	                   $name = "Bảo Bình";  $image = "Aquarius";	$time = "20/01 - 19/02";
	               }
	               else if($day > 19)
	               {
	                   $name = "Song Ngư";  $image = "Pisces";	$time = "20/02 - 20/03";
	               }
	               if($day < 1 || $day > 29)
	                   $flag = false;
	               break;
	           case 3:
	               if($day <= 20)
	               {
	                   $name = "Song Ngư";  $image = "Pisces";	$time = "20/02 - 20/03";
	               }
	               else if($day > 20)
	               {
	                   $name = "Bạch Dương";  $image = "Aries";	$time = "21/03 - 20/04";
	               }
	               if($day < 1 || $day > 31)
	                   $flag = false;
	               break;
	           case 4:
	               if($day <= 20)
	               {
	                  $name = "Bạch Dương";  $image = "Aries";	$time = "21/03 - 20/04";
	               }
	               else if($day > 20)
	               {
	                   $name = "Kim Ngưu";  $image = "Aries";	$time = "21/04 - 20/05";
	               }
	               if($day < 1 || $day > 30)
	                   $flag = false;
	               break;
	           case 5:
	               if($day <= 20)
	               {
	                     $name = "Kim Ngưu";  $image = "Aries";	$time = "21/04 - 20/05";
	               }
	               else if($day > 20)
	               {
	                   $name = "Song Tử";  $image = "Gemini";	$time = "21/05 - 21/06";
	               }
	               if($day < 1 || $day > 31)
	                   $flag = false;
	               break;
	           case 6:
	               if($day <= 21)
	               {
	                    $name = "Song Tử";  $image = "Gemini";	$time = "21/05 - 21/06";
	               }
	               else if($day > 21)
	               {
	                   $name = "Cự Giải";  $image = "Cancer";	$time = "22/06 - 22/07";
	               }
	               if($day < 1 || $day > 30)
	                   $flag = false;
	               break;
	           case 7:
	               if($day <= 22)
	               {
	                    $name = "Cự Giải";  $image = "Cancer";	$time = "22/06 - 22/07";
	               }
	               else if($day > 22)
	               {
	                   $name = "Sư Tử";  $image = "Leo";	$time = "23/07 - 22/08";
	               }
	               if($day < 1 || $day > 31)
	                   $flag = false;
	               break;
	           case 8:
	               if($day <= 22)
	               {
	                   $name = "Sư Tử";  $image = "Leo";	$time = "23/07 - 22/08";
	               }
	               else if($day > 22)
	               {
	                   $name = "Xử Nữ";  $image = "Virgo";	$time = "23/08 - 22/09";
	               }
	               if($day < 1 || $day > 31)
	                   $flag = false;
	               break;
	           case 9:
	               if($day <= 22)
	               {
	                   $name = "Xử Nữ";  $image = "Virgo";	$time = "23/08 - 22/09";
	               }
	               else if($day > 22)
	               {
	                   $name = "Thiên Bình";  $image = "Libra";	$time = "23/09 - 22/10";
	               }
	               if($day < 1 || $day > 30)
	                   $flag = false;
	               break;
	           case 10:
	               if($day <= 22)
	               {
	                   $name = "Thiên Bình";  $image = "Libra";	$time = "23/09 - 22/10";
	               }
	               else if($day > 22)
	               {
	                   $name = "Thiên Yết";  $image = "Scorpio"; $time = "23/10 - 21/11";
	               }
	               if($day < 1 || $day > 31)
	                   $flag = false;
	               break;
	           case 11:
	               if($day <= 21)
	               {
	                  $name = "Thiên Yết";  $image = "Scorpio"; $time = "23/10 - 21/11";
	               }
	               else if($day > 21)
	               {
	                   $name = "Nhân Mã";  $image = "Sagittarius"; $time = "22/11 - 21/12";
	               }
	               if($day < 1 || $day > 30)
	                   $flag = false;
	               break;
	           case 12:
	               if($day <= 21)
	               {
	                   $name = "Nhân Mã";  $image = "Sagittarius"; $time = "22/11 - 21/12";
	               }
	               else if($day > 21)
	               {
	                   $name = "Ma Kết";  $image = "Capricorn"; $time = "22/12 - 19/01";
	               }
	               if($day < 1 || $day > 31)
	                   $flag = false;
	               break;
	           default:
	                   $flag = false;
	               break;
	       }
	   }
	   else 
	       $flag = false;
	   if($flag == true)
	        {
        	   $result = '<div class ="result">
            		<img src = "image/' .$image . '.png"   alt="'. $image .'" />
            		<p><span> ' . $name . ' ('. $image.' : ' . $time . ')</span></p>
        	   </div>';
	        }
	   else
        	   {
        	        $flag = false;
        	        $result = "Không thực hiện được";
        	   }
	}
	?>
	<div class = "content">
	<h1> Chòm Sao Của Bạn Là Gì?</h1>
	<form action = "#" method = "post" name = "main-form">
		<div class = "row">
			<span>Ngày Sinh </span>
			<input type = "text" name = "Day" value = "<?php echo $day;?>"/>
		</div>
		<div class = "row">
			<span>Tháng Sinh </span>
			<input type = "text" name = "Month" value = "<?php echo $month;?>"/>
		</div>
		<div class = "row">
			<input type = "submit" value = "Lấy chòm sao!"/>
		</div>
	</form>
	<?php 
	    echo $result;
	?>
	</div>
</body>
</html>