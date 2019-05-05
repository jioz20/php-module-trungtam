<?php 
	// Lam tron chuoi
	function CatTronChuoi($text, $len)
	{
		$ketThuc = array(',', '.', ' ', '!', '?');
		for($i= $len; $i > 0; $i--)
		{
			$m = substr($text, $i, 1);
			if(in_array(@$m, $ketThuc)) // Tim kiem gia tri trong mot mang
			{
				$pos = $i;
				$i = 0;	
			}
		}
		$temp = trim (substr($text, 0, @$pos + 1));
		return $temp . ' ...';
	}


// Hoten

// function TachHoTen($hoten, &$temp)
// {
// 	$hoten = $_POST['hoten'];
// 	$ho = substr($hoten, 0, strpos($hoten, ' '));
// 	$ten = strrev(substr(strrev($hoten),0, strpos(strrev($hoten), ' ')));
// 	$tenlot = trim(substr($hoten, strlen($ho),strlen($hoten)-(strlen($ten)+strlen($ho))));
// }
// Sinh Nhat
 function SinhNhat($a, $b)
	{
		$timesn = strtotime($a);
		$ngaysn = date('d', $timesn);
		$thangsn = date('m', $timesn);
		$snm = mktime(0,0,0,$thangsn, $ngaysn, 0);
		
		$timeht = strtotime($b);
		$ngayht = date('d', $timeht);
		$thanght = date('m', $timeht);
		$htm = mktime(0,0,0,$thanght, $ngayht, 0);
		$kt = ($htm - $snm)/86400;
		if($kt == 0)
			echo '<br> Chúc mừng sinh nhật';
		else if($kt > 0)
			echo '<br>Sinh nhật đã qua '. $kt . ' ngày';
		else 
			echo '<br> Còn '. abs($kt). ' ngày nữa là tới sinh nhật';
	}


// Hien thi cac so theo thu tu xuat hien
	function posall($s,$find)
	{
		$kq = '';
		//xu ly
		$dk = strpos($s,$find,0);
		while($dk!== false)
		{
			if($dk!== false){
				$kq .= $dk.'-';
				$dk = strpos($s,$find,$dk+1);
			}else
				break;
	
			}
		return $kq?rtrim($kq,'-'):false;
	}

?>