<?php 
	session_start();	
	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>'; 

	if(isset($_SESSION['ac']))
		$_SESSION['ac'] = '130'; //Tồn tại rồi thì gán age=20;
	else
		$_SESSION['ac'] = '220'; // Chưa tồn tại thì age =10;

	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>'; 
	
	session_destroy(); //Xoá session
		echo '<pre>';
	print_r($_SESSION);
		echo '</pre>'; 
?>	