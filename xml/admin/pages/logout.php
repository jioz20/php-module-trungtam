<?php 
	session_destroy();
	setcookie('login',true,time()-1);
	setcookie('ten',$_SESSION['ten'],time()-1);
	setcookie('hinh',$_SESSION['hinh'],time()-1);
	chuyentrang('login.php');
?>