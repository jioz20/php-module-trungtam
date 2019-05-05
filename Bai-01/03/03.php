<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css" media="screen">
<link href="https://fonts.googleapis.com/css?family=Baumans|Open+Sans" rel="stylesheet">
<title>Tính diện tích HCN</title>
</head>
<body>
	<?php
		if(isset($_POST['chieuDai'])== true && isset($_POST['chieuRong'])== true)
		{			
			$x1 = $_POST['chieuDai'];
			$x2 = $_POST['chieuRong'];
			$x3 = $_POST['ketQua'];
			if(is_numeric($x1)==true && is_numeric($x2)==true)
				$x3 = $x1 * $x2;
			else
				$x3 = 'Không thực hiện được';
		}
	?>
	<div class="content">
		<div class="ban">
			<h2>DIỆN TÍCH HÌNH CHỮ NHẬT</h2>
		</div>
		
		<form action="#" method="post">
		<div class="row">
			<span>Chiều dài: </span> 
			<input type='text' name='chieuDai' value="<?php if(isset($x1)) echo $x1; ?>"/>
		</div>
		
		<div class="row">
			<span>Chiều rộng: </span> 
			<input type='text' name='chieuRong' value="<?php if(isset($x2)) echo $x2; ?>"/>
		</div>
		
		<div class="row">
			<span>Diện tích: </span> 	
			<input type='text' name='ketQua' value="<?php if(isset($x3)) echo $x3; ?>" readonly/>
		</div>
			<p><button type= 'submit'>Tính</button></p>
		</form>
	</div>

</body>
</html>