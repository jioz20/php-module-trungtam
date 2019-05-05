<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Diện tích - Chu vi</title>
<link rel="stylesheet" href="style.css" media='screen'>
</head>
<body>
	<?php
		$a = '';
		$b= '';
		$c = '';
		define('PI', 3.14);
		if(isset($_POST['banKinh'])==true)
		{
			$a = $_POST['banKinh'];
			$b = $_POST['dienTich'];
			$c = $_POST['chuVi'];
			if(is_numeric($a))
			{
				$b = PI*$a*$a;
				$c = PI*$a*2;
			}
		}
	?>
	<div class="content">
		<h3>Diện tích - Chu vi</h3>
		<form action="#" method="post">
			<div class="row">
				<span>Bán kính: </span> 
				<input type='text' name='banKinh' value='<?php if(isset($a)) echo $a; ?>'/>
			</div>

			<div class="row">
				<span>Diện tích: </span> 
				<input name='dienTich' value='<?php echo $b; ?>' readonly>
			</div>

			<div class="row">
				<span>Chu vi: </span> 	
				<input name='chuVi' value='<?php echo $c; ?>' readonly>
			</div>		
			<button type= 'submit'>Tính</button>
		</form>
	</div>
</body>
</html>
