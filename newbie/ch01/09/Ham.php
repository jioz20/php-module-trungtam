<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Hàm</title>
	<link type = "text/css" href = "stylee.css" rel = "stylesheet" media = "screen">
</head>
<body>
	<div class= "content">
	<?php 
	   function create($name, $width = 110, $height = 110)
	   {
	       $result = '<div style = "width:' .$width. 'px; height: ' . $height . 'px">';
	       $result.= '<p>' .$name. '<span>('.$width. "x".$height .")".'</p>';
           $result.= '</div>';
           return $result;
	   }	   
	   echo create("Box A",300, 50);
	   echo create("Box B");
	?>
	</div>
</body>
</html>