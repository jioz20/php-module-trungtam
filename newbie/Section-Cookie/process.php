<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel ="stylesheet" type ="text/css" href ="css/style.css">
<title>Process</title>
</head>
<body>
	<div id="wrapper">
		<div class="tittle">PROCESS</div>
		<div id="form">
			<?php
				require_once'functions.php';
			if(!checkEmpty($_POST['username'])&& !checkEmpty($_POST['password']))			
			{
				$username = $_POST['username'];
				$password = md5($_POST['password']);
				
				$data = parse_ini_file('user.ini');
				$userInfo = explode("|", $data[$username]);
				if($userInfo[0] == $username && $userInfo[1] == $password)
				{
					session_start();
					$_SESSION['fullname'] = $userInfo[2];	
					$_SESSION['flagPermission'] = true;
					echo '<h3>Hello:  '.$_SESSION['fullname'].' </h3>';
					echo '<a href="logout.php">Logout</a>';
				}
				else
				{
					header('location: login.php');
				}
			}
			else 
				header('location: login.php');
			?>
		</div>
	</div>
</body>
</html>
