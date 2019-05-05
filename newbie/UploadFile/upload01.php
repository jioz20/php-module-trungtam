<?php
	require_once'function.php';
	$fileUpload = $_FILES['file-upload'];	
	$flagSize = checkSize($fileUpload['size'], 100*1024, 5*1024*1024);
	$flagExtension = checkExtension($fileUpload['name'], array('jpg','png', 'mp3', 'docx', 'rar', 'zip'));

	$fileName = randomString($fileUpload['name'],7);
 
	if($flagSize == true && $flagExtension == true)
	{
		move_uploaded_file($fileUpload['tmp_name'], './files/'. $fileName);
		echo 'Upload thành công, mời kiểm tra file có tên là: '. $fileName;
	}
	else
		echo 'Upload không thành công';
?>