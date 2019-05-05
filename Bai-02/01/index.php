<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Định màu chữ - màu nền</title>
<link rel="stylesheet" href="style.css" media="screen">
</head>

<body>
	<?php 
		$a = '';
		$b = '';
		$c = '';
		if(isset($_POST['NoiDung'],$_POST['MauNen'],$_POST['MauChu'])==true)
		{
			$a = $_POST['NoiDung'];
			$b = $_POST['MauNen'];
			$c = $_POST['MauChu'];
		}
	?>
	<div class="content">
		<h3>Định màu chữ - màu nền</h3>
		<form action="#" method="post">
			<div class="row">
				<span>Nội dung: </span> 
				<input type='text' name='NoiDung' value='<?php if(isset($a)) echo $a; ?>'/>
			</div>

			<div class="row">
				<span>Màu nền: </span> 
				<input type='color' name='MauNen' value='<?php if(isset($b)) echo $b; ?>'/>
			</div>

			<div class="row">
				<span>Màu chữ: </span> 	
				<input type='color' name='MauChu' value='<?php if(isset($c)) echo $c; ?>'/>
			</div>		
			<button type= 'submit'>Xem kết quả</button>
			
				<?php
					if(isset($_POST['NoiDung'],$_POST['MauNen'],$_POST['MauChu'])==true)
				{
				?>
					<div style='background: <?php echo $b;?>; color: <?php echo $c; ?>;'><?php echo $a;?></div>
				<?php
				}
				?>
		</form>
	</div>
	
</body>
</html>
