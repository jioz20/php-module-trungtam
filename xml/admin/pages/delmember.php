<?php 
$ma = $_GET['ma'];
if(!isset($ma) || !$ma)
	chuyentrang('?p=listmember');
	$path = '../data/thanhvien.xml';
	del_xml($path, $ma);
	chuyentrang('?p=listmember');
?>