<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tính năm âm lịch</title>
<link rel="stylesheet" href="style.css" media='screen'>
<link href="https://fonts.googleapis.com/css?family=Baumans|Open+Sans" rel="stylesheet">
</head>

<body>
	<?php
		$nam = '';
		$c = '';
		$i = '';
		$canChi ='';
	
		if(isset($_POST['nam'])==true)
		{
			$nam = $_POST['nam'];
			$canChi = $_POST['ci'];
			if(is_numeric($nam))
			{
				if($nam > 0)
				{ 
					switch($c = $nam%10)
					{
						case 0:
							{
								$c = 'Canh';
								break;
							}
						case 1:
							{
								$c = 'Tân';
								break;
							}
						case 2:
							{
								$c = 'Nhâm';
								break;
							}
						case 3:
							{
								$c = 'Quí';
								break;
							}
						case 4:
							{
								$c = 'Giáp';
								break;
							}
						case 5:
							{
								$c = 'Ất';
								break;
							}
						case 6:
							{
								$c = 'Bính';
								break;
							}
						case 7:
							{
								$c = 'Đinh';
							}
						case 8:
							{
								$c = 'Mậu';
								break;
							}
						case 9:
							{
								$c = 'Kỷ';
								break;
							}
					}
					switch($i= $nam%12)
					{
						case 0:
							{
								$i = 'Thân';
								break;
							}
						case 1:
							{
								$i = 'Dậu';
								break;
							}
						case 2:
							{
								$i = 'Tuất';
								break;
							}
						case 3:
							{
								$i = 'Hợi';
								break;
							}
						case 4:
							{
								$i = 'Tí';
								break;
							}
						case 5:
							{
								$i = 'Sửu';
								break;
							}
						case 6:
							{
								$i = 'Dần';
								break;
							}
						case 7:
							{
								$i = 'Mão';
								break;
							}
						case 8:
							{
								$i = 'Thìn';
								break;
							}
						case 9:
							{
								$i = 'Tỵ';
								break;
							}
						case 10:
							{
								$i = 'Ngọ';
								break;
							}
						case 11:
							{
								$i = 'Mùi';
								break;
							}
					}
					
					$canChi = $c.' '. $i;
				}
			}
		}
	?>
	<div class="content">
		<h3>Tính năm âm lịch</h3>
		<form action="#" method="post">
			<div class="row">
				<span style='text-align: left; margin-left: 9px;'>Năm dương lịch</span> 
				<span style='text-align: right'>Năm âm lịch</span> 
			</div>
			
		
			<div class="row">	
				<input size='15' style='margin-right: 34px' type='text' name='nam' value='<?php if(isset($nam)) echo $nam;?>'/>
				<button type='submit';>=></button>
				<input size='15' style='margin-left: 37px' name='ci' value='<?php echo $canChi;?>'readonly>
			</div>					
		</form>
	</div>
</body>
</html>