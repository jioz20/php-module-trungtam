<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css" media="screen">
<title>Form Chào</title>

</head>
<body>
	<div class="content">
		<h3>IN LỜI CHÀO</h3>
		<form action="#" method="post">
		<div class="row">
			<span>Họ và tên của bạn</span>
			<span><input type='text' name='text' value='<?php if(isset($_POST['text'])) echo $_POST['text'];?>'/></span>
				<?php
					echo '<p>Chào bạn, '. @$_POST['text'] .'</p>';
				?>
		</div>
			<button type= 'submit'>Chào</button>
		</form>
	</div>

</body>
</html>