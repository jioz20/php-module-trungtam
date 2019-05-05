<?php
	function checkSize($size, $min, $max)
	{
		$flag = false;
		if($size >= $min && $size <= $max)
			$flag = true;
		return $flag;
	}
	function checkExtension($fileName, $arrExtension)
	{
		$ext = pathinfo($fileName, PATHINFO_EXTENSION);
		$flag = false;
		if(in_array($ext, $arrExtension)== true)
			$flag = true;
		return $flag;
	}
	function randomString($fileName, $length)
	{
		$ext = pathinfo($fileName, PATHINFO_EXTENSION);
		$arrCharacter = array_merge(range('A', 'Z'), range('a', 'z'), range(0,9)); // array_meger: nối mảng
		$arrCharacter = implode($arrCharacter, '');//implode: nối các phân tử của mảng thành một chuỗi
		$arrCharacter = str_shuffle($arrCharacter); //Tạo ra chuỗi ngẫu nhiên	
		$res = substr($arrCharacter, 0, $length) . '.'. $ext;
		return $res;	
	}
?>