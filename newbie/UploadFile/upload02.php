<?php
	require_once'function.php';
	$config = parse_ini_file('config.ini');
	$fileUpload = $_FILES['file-upload'];	
	$flagSize = checkSize($fileUpload['size'], $config['min_size'], $config['max_size']);
	$flagExtension = checkExtension($fileUpload['name'], explode('|', $config['extension']));
	$fileName = randomString($fileUpload['name'],7);
 
	if($flagSize == true && $flagExtension == true)
	{
		move_uploaded_file($fileUpload['tmp_name'], './files/'. $fileName);
		echo 'Upload thành công, mời kiểm tra file có tên là: '. $fileName;
	}
	else
		echo 'Upload không thành công';
?>