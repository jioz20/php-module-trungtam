<?php 
$ma = $_GET['ma'];
if(!isset($ma) || !$ma)
	chuyentrang('?p=listproduct');

$path = '../data/sanpham.xml';

		del_xml($path, $_GET['ma']);

	chuyentrang('?p=listproduct');
?>