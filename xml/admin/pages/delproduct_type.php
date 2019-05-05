<?php 
$ma = $_GET['ma'];
if(!isset($ma) || !$ma)
	chuyentrang('?p=listproduct_type');
$path = '../data/loaisanpham.xml';
del_xml($path, $ma);
	chuyentrang('?p=listproduct_type');
?>