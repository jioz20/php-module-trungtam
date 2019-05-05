<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type ="text/css" href="style.css">
<title>Login</title>
</head>
<body>
	<div id = "wrapper">
		<div class ="tittle">LOGIN</div>
		<div id ="form">
			<form action ="process.php" method ="post" name ="add-form">
				<div class = "row">
					<p>Username</p>
					<input type ="text" name = "username">
				</div>
				
				<div class ="row">
					<p>Password</p>
					<input type="password" name="password">
				</div>
				
				<div class = "row"> 
					<input type ="submit" value="Login" name="submit">
				</div>
			</form>
		</div>
	</div>
</body>
</html>
