<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Test</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="content">
		<h1>PHP Upload</h1>
<!--		<form action ="upload.php" method ="post" id="main-form" enctype="multipart/form-data">-->
		<form action = "upload02.php" method ="post" id="main-form" enctype="multipart/form-data">
			<input type ="file" name="file-upload" multiple/>
			<input type ="submit" value="Submit" name="submit"/>
		</form>
	</div>
</body>
</html>