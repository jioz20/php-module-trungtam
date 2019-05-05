<?php
	session_start();
	require_once "User.class.php";
	$user = new User();

	if(isset($_SESSION['user']))
	{
		$user = unserialize($_SESSION['user']);
			echo '<pre>';
			print_r($user);
			echo '</pre>';
	}

?>