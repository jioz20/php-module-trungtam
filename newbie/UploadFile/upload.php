<?php 

	function randomString($length)
	{
		$arrCharacter = array_merge(range('A', 'Z'), range('a', 'z'), range(0,9)); // array_meger: nối mảng
		$arrCharacter = implode($arrCharacter, '');//implode: nối các phân tử của mảng thành một chuỗi
		$arrCharacter = str_shuffle($arrCharacter); //Tạo ra chuỗi ngẫu nhiên	
		$res = substr($arrCharacter, 0, $length);
		return $res;	
	}
	$file = $_FILES['file-upload'];
	if($file['name']!= null)
	{
		$filename   = $file['tmp_name'];
		$des = './Files/'. randomString(3). $file['name'];
		//move_uploaded_file($filename , $des); // upload fileName vào đường dẫn des 
			if(copy($filename,$des))
					echo "Thành công";
	}
?>	