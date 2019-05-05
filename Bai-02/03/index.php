<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kết quả học tập</title>
<link rel="stylesheet" href="style.css" media='screen'>
<link href="https://fonts.googleapis.com/css?family=Baumans|Open+Sans" rel="stylesheet">
</head>
<body>
	<?php
		$a = '';
		$b = '';
		$c = '';
		$d = '';
		if(isset($_POST['hk1'], $_POST['hk2'])==true)
		{
			$a = $_POST['hk1'];
			$b = $_POST['hk2'];
			$c = $_POST['diemTB'];
			$d = $_POST['hluc'];
			if(is_numeric($a)&& is_numeric($b))
			{
				if(($a >0 && $a <= 10)&&($b >0 && $b <= 10))
				{
					$c = ($a + $b *2)/3;
					if($c >= 5)
					{
						$_POST['ketQua'] = 'Được lên lớp';
						if($c >= 8)
							$d = 'Giỏi';
						else if($c <8 && $c >= 6.5)
							$d = 'Khá';
						else if($c < 6.5 && $c >= 5)
							$d = 'Trung Bình';
					}
					else
					{
						$_POST['ketQua'] = 'Ở lại lớp';
						if($c < 5)
							$d = 'Yếu';
					}
				}
				else 
				{
					$a ='Không thực hiện được';
					$b ='Không thực hiện được';
				}
			}
		}
	?>
	<div class="content">
		<h3>Kết quả học tập</h3>
		<form action="#" method="post">
			<div class="row">
				<span>Điểm HK1: </span> 
				<input type='text' name='hk1' value='<?php if(isset($a)) echo $a; ?>'/>
			</div>
			
			<div class="row">
				<span>Điểm HK2: </span> 
				<input type='text' name='hk2' value='<?php if(isset($b)) echo $b; ?>'/>
			</div>

			<div class="row">
				<span>Điểm trung bình: </span> 
				<input name='diemTB' value='<?php echo $c; ?>'readonly>
			</div>

			<div class="row">
				<span>Kết quả: </span> 	
				<input name='ketQua' value='<?php if(isset($_POST['ketQua'])) echo $_POST['ketQua']; ?>' readonly>
			</div>
			
			<div class="row">
				<span>Xếp loại học lực: </span> 	
				<input name='hluc' value='<?php echo $d;?>' readonly>
			</div>	
					
			<button type= 'submit'>Tính</button>
		</form>
	</div>
</body>
</html>
