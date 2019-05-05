<?php 

function viewar($p)
{
	echo '<pre>';
	print_r($p);
	echo '</pre>';
}

	$a = 'C/5igt/file/adas/d/f/g/file_15235890510.jpg';

	$p = explode('/', $a); //Tách chuỗi thành mảng theo dấu '/'
	$e = explode('.', $p[count($p) - 1]); // Tách chuỗi thành mảng theo dấu '.'
	$e[0] = 'text'; // Thay thế tên

	$f = implode('.', $e); // ghép đuôi và tên mới

	$p[count($p) -1] = $f; // Thay giá trị ở tên mới vào mảng

	echo $fd = implode('/', $p); // Ghép lại thành fullpath

?>