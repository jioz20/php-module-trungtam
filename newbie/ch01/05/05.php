<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Máy Tính</title>
	<link type = "text/css" href = "style.css" rel = "stylesheet" media = "screen">
</head>
<body>
	<?php
	$n1       = "";
	$n2       = "";
	$caculate = "";
	$temp = " ";
	if(isset($_REQUEST["number1"])==true && (isset($_REQUEST["number2"]) == true)&& (isset($_REQUEST["caculate"]) == true))
	{
    	     $n1       = $_REQUEST["number1"];
    	     $n2       = $_REQUEST["number2"];
    	     $caculate = $_REQUEST["caculate"];
    	     if(is_numeric($n1) == true &&(is_numeric($n2)) == true)
    	     {
    	         switch ($caculate)
    	         {
    	             case "+":
    	                 $temp = $n1 + $n2;
    	                 break;
    	             case "-":
    	                 $temp = $n1 - $n2;
    	                 break;
    	             case "/":
    	             case ":":
    	                 $temp = $n1 / $n2;
    	                 break;
    	             case "*";
    	             case "x";
    	                 $temp = $n1 * $n2;
    	                 break;
    	             case "%":
    	                 $temp = $n1 % $n2;
    	                 break;
    	             default:
    	                 $temp = "Không thực hiện được";
    	                 break;
    	         }
    	   }
    	   else 
    	   {
    	       $temp = "Không thực hiện được";  
	       }   
	}
	?>
	<div class = "content">
	<h1> Máy tính điện tử</h1>
	<form action = "#" method = "post" name = "main-form">
		<div class = "row">
			<span> Số thứ nhất</span>
			<input type = "text" name = "number1" value = "<?php echo $n1;?>"/>
		</div>
		<div class = "row">
			<span> Phép toán</span>
			<input type = "text" name = "caculate" value = "<?php echo $caculate;?>"/>
		</div>
		<div class = "row">
			<span> Số thứ hai</span>
			<input type = "text" name = "number2" value = "<?php echo $n2;?>"/>
		</div>
		<div class = "row">
			<input type = "submit" value = "Xem kết quả"/>
		</div>
		<div class = "row">
			<p> <?php  
			         echo "Kết quả " . $n1 . " " . $caculate . " " . $n2 . " = " . $temp;
			     ?>
			</p>
		</div>
	</form>
	</div>
</body>
</html>