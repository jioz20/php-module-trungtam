<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Hình ảnh</title>
</head>
<body>

<?php
   //mở thư mục hình ảnh
   $dir = opendir("./Module1/img");
   while (($file = readdir($dir)) !== false)
   {
      echo "Tên file: " . $file . "<br />";
   }
   closedir($dir);
?> 
</body>
</html>