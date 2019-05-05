<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Vẽ Tam Giác</title>
	<link type = "text/css" href = "style1.css" rel = "stylesheet" media = "screen">
</head>
<body>
	<div class = "result">
	<?php 
	$re ='';
	if(isset($_POST["submit"]))
	{
	$n = $_POST['n'];
	$kyTu = $_POST['KyTu'];
	
	$type = $_REQUEST["type"];
	   if($type!='')
	   {
	      
	       switch($type)
	       {
	           case 1:
	               $i = 0;
                   while($i < $n)
                   {
                       $i++;
                       $re = $re ." ".str_repeat($kyTu, $i) . "<br/>";
                   }
                   break;
	           case 2:
    	              while($n > 0)
                       {
                           $re = $re ." ".str_repeat($kyTu, $n) . "<br/>";
                           $n--;    
                       }
                   break;
	           case 3:             
	               $i = 0;
	               while ($i < $n)
	               {
	                   /*
	                            *        i = 1, space = 5, * = 1 
	                           * *       (space = n - i)
	                          * * *      (* = i * 2 - 1) 
	                         * * * *
	                    */
	                   $i++;
	                   $Sao = str_repeat($kyTu, $i * 2 - 1);
	                   $space = str_repeat("&nbsp;&nbsp", $n - $i);
	                   $re = $re . $space . $Sao . "<br/>";
	                   
	               }
	               break;
	       }

	   }
	}
	?>
	</div>
	<div class = "content">
		<form action = "" method = "post" name = "main-form">
		<h1>Tam giác</h1>
	<ul>
		<li><a href="While.php?type=1"><img src ="image/01.png"></a></li>
		<li><a href="While.php?type=2"><img src ="image/02.png"></a></li>
		<li><a href="While.php?type=3"><img src ="image/03.png"></a></li>
	</ul>
    	<div class = "row">
    	<input placeholder = "Nhập ký tự lặp" type = "text" name = "KyTu" value = "<?php echo $p = (empty($kyTu))? "" : $kyTu; ?>"/>
    	</div>
    	<div class = "row">
    	<input placeholder = "Nhập số lần lặp" type = "text" name = "n" value = "<?php echo $a = (empty($n))? "": $n; ?>"/>
	</div>
    	<div class = "row">
    	<input name="submit" type = "submit" value = "Chạy chương trình"/>
    </div>
	</form>
	<?php 
	    echo $re;
	?>
	</div>
</body>
</html>