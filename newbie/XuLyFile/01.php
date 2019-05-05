<?php 
	$filename = 'file/text.txt';
	$size = filesize($filename); //size file;
	$read = require($filename); //đọc file
	echo $read;
	function Bx($size)
	{
		$uits = array('B', 'KB', 'MB', 'GB', 'TB');
		$lenght = count($uits);
		for($i =0; $i< $lenght ;$i++)
		{
			if($size > 1024) //nếu size > 1024 lặp mấy lần thì $uits sẽ tăng mảng lên mấy lần
				$size/= 1024;	
			else
			{
				$uit = $uits[$i];
				break;
			}
		}
		return round($size,2) . ' ' . $uit; 
	}
	echo Bx(10280004);
?>
<?php	
	$path = 'file/text.txt';
	echo '</br>' . ' '. basename($path); //Xuất tên file;
	echo '</br>' . ' '. basename($path, '.txt'); //Xuất tên file và không có phần mở rộng

	$get = file_get_contents($path);
	echo '</br>'. 'Nội dung file là: '.$get;

	$data = " kIS";
	$put = file_put_contents($path, $data, FILE_APPEND ); //FILE_APPEND: Giữ lại nội dung cũ.
//file_put_contents($filename, null): Tạo ra tập tin
//unlink: xóa tập tin
//Glob
?>