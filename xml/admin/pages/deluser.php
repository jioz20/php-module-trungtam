<?php 
$ma = $_GET['ma'];
if(!isset($ma) || !$ma)
	chuyentrang('?p=listuser');
//doc thong tin nguoi muon sua truoc

$path = '../data/nguoidung.xml';
//tao moi 1 doi tuong quan ly xml
del_xml($path, $ma);
	chuyentrang('?p=listuser');
?>