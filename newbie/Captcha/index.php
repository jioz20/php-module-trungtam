<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel = "stylesheet" type = "text/css" href = "style.css">
<title>Captcha</title>
</head>
<body>
	<div class = "content">
		<div id = "wrapper">
			<div id = "form">
				<form action = "process.php" method = "post" name = "add-form">

					<div class = "row">
						<img src = "securimage/securimage_show.php" id = "captcha"/>					
					</div>
					
					<div class = "row">
						<input type = "text" name = "captcha_code"/>
						<a href="#" onclick="document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random(); return false">[ Different Image ]</a>
					</div>
					
					<div class = "row">
						<input type = "submit" value = "Submit" name = "submit">
					</div>
				</form>
			</div>
		</div>		
	</div>
</body>
</html>
