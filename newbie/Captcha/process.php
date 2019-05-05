<?php
	require 'securimage/securimage.php';
	$securimage = new Securimage();
	if ($securimage->check($_POST['captcha_code']) == false)
		{
			echo "Đăng nhập không thành công. ";
			echo "Mời nhấn vào <a href='javascript:history.go(-1)'>đây</a> để trở lại.";
			exit;
		}
	else 
		echo "Đăng nhập thành công";
?>