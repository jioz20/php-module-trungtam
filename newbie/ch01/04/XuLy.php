<?php 
    $UserName = $_REQUEST["UserName"];
    $Password = $_REQUEST["Password"];
   $temp = ($UserName == "admin" && $Password == "123456")? "Đăng nhập thành công" : "Đăng nhập thất bại";
    echo $temp;
?>