<?php 

$path = '../data/sanpham.xml';
if(isset($_POST['delis']))
{
	$checkbox = $_POST['delis'];
	for($i=0; $i < count($checkbox) ;$i++)
	{
		$did = $checkbox[$i];
		del_xml($path, $did);		
		chuyentrang('?p=listproduct');
	}
}
?>