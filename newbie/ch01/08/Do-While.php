<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Ảnh gái</title>
	<link type = "text/css" href = "style.css" rel = "stylesheet" media = "screen">
</head>
<body>
	<div class = "content">
	<h1>Giáng sinh</h1>
		<div class ="image"> 
		<?php 
		  $i = 1;
		  do
		  {
		      echo '<img src="imaging/0'.$i.'.png"/>';
		      $flag = 0;
		      if(isset($_GET["show"]))
		      {
                  $flag = $_GET["show"];
                  $i++;
		      }
		  }while($i <= 4 && $flag == 1);
		?>
		<a href = "Do-While.php?show=1"> Show All</a>
		<a href = "Do-While.php?show=0"> Show Demo</a> 
		 
		</div>
	</div>
</body>
</html>