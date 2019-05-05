<?php 
$ma = $_GET['ma'];
if(!isset($ma) || !$ma)
	chuyentrang('?p=listinvoice');

	$path = '../data/hoadon.xml';
	del_xml($path, $ma);
	chuyentrang('?p=listinvoice');
?>