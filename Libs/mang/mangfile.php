<?php 
require_once 'doc.php';
function viewar($ar)
{
	echo '<pre>';
	print_r($ar);
	echo '</pre>';
}
//mảng mặc định
$path = 'dulieu.txt';
$mang = array();
load($path,$mang);
	//viewar($_POST);

function load($path,&$mang,$mode = 'r'){
	//mở file ra truc tien	
	//r: đọc
	//w: ghi
	//a: vừa đọc vừa ghi
	$f =  fopen($path,$mode);//trả về 1 resource
	//xu ly tuy y thich
	//kiem tra contro đa cuoi file chua feof($resource)
	//lam xong dong lien
	//ap dung while vao nhu nao?
	
	while(!feof($f))
	{
		//doc theo dong
		$s = fgets($f);
		$sp  = explode('|',$s);
		if(count($sp)==5)
			$mang[$sp[0]] = array('ten' => $sp[1], 		'don_gia' => $sp[2], 	'so_luong' => $sp[3], 'thanh_tien' => $sp[4]);
	}
	fclose($f);
	//viewar($mang);
}
function taochuoi($mang)
{
	$kq = '';
	foreach($mang as $k=>$item){
		$kq.=$k.'|'.implode('|',$item)."\r\n";
	}
	return trim($kq,"\r\n");
}
function save($path,$noidung,$mode = 'w'){
	$f = fopen($path,$mode);
	fwrite($f,$noidung);
	fclose($f);
}
function them($path,&$mang,$data)
{
	//check du lieu trc khi them
	if(isset($mang[$data['ma']]))
	{
		return false;
	}else
	{
		$mang[$data['ma']] = array('ten' => $data['ten'], 'don_gia' => $data['don_gia'], 	
			'so_luong' =>$data['so_luong'], 'thanh_tien' => $data['don_gia']*$data['so_luong']);
			//luu file
		//viewar($mang);
		$noidung = taochuoi($mang);
		save($path,$noidung);
		load($path,$mang);
		return true;
	}
}
function sua($path,&$mang,$data)
{
	//check du lieu trc khi them
	if(!isset($mang[$data['ma']]))
	{
		return false;
	}else
	{
		$mang[$data['ma']] = array('ten' => $data['ten'], 'don_gia' => $data['don_gia'], 	
			'so_luong' =>$data['so_luong'], 'thanh_tien' => $data['don_gia']*$data['so_luong']);
			//luu file
		//viewar($mang);
		$noidung = taochuoi($mang);
		save($path,$noidung);
		load($path,$mang);
		return true;
	}
}
function xoa($path,&$mang,$ma)
{
	//check du lieu trc khi them
	if(!isset($mang[$ma]))
	{
		return false;
	}else
	{
		unset($mang[$ma]);
		$noidung = taochuoi($mang);
		save($path,$noidung);
		load($path,$mang);
		return true;
	}
}

if(isset($_POST['hanhdong']))
{
	switch($_POST['hanhdong'])
	{
		case 'Thêm':	
			if(them($path,$mang,$_POST))
				echo 'Them thanh cong';
			else
				echo 'Ma da ton tai';
			break;
		case 'Sửa':	
			if(sua($path,$mang,$_POST))
				echo 'Cap nhat thanh cong';
			else
				echo 'Ma khong ton tai';
			break;
		case 'Xóa':	
			if(xoa($path,$mang,$_POST['ma']))
				echo 'Xóa thanh cong';
			else
				echo 'Ma khong ton tai';
			break;
	}
}


//echo '<input value="'.taochuoi($mang).'"/>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bài tập</title>
<style type="text/css">
table.bang {
	width:700px;
	border-collapse:collapse;
}
table.bang td{
	padding:3px;
}
table.bang tr.header{
	background-color:#69F;
	color:#F00;
}
</style>

</head>

<body>
<table class="bang" align="center" border="1" cellspacing="0" cellpadding="2">
<tr class="header" align="center">
  <td>Mã</td>
  <td>Tên</td>
  <td>Đơn Giá(VNĐ)</td>
  <td>Số Lượng</td>
  <td>Thành Tiền(VNĐ)</td>
</tr>
<?php
$tong = 0;
foreach($mang as $ma => $sp)
{
	@$tong += @$sp['thanh_tien'];
?>
  <tr align="center">
    <td><?php echo $ma ?></td>
    <td align="left"><?php echo $sp['ten'] ?></td>
    <td align="right"><?php echo number_format((int)$sp['don_gia']) ?></td>
    <td><?php echo $sp['so_luong'] ?></td>
    <td align="right"><?php echo (int)$sp['thanh_tien'] ?></td>
  </tr>
<?php 
}
?>	 
<tr align="right">
    <td colspan="5">Tổng cộng: <?php echo number_format($tong) ?></td>
  </tr>
  <tr align="center">
    <td colspan="5">Tổng cộng: <?php echo docso($tong) ;?></td>
  </tr>
</table>
<div style="margin-top:10px">
	<form action="" method="post" >
		<table class="bang" align="center" border="1" cellspacing="0" cellpadding="2">
			<tr>
				<td>Mã SP</td>
				<td>Tên sản phẩm</td>
				<td>Đơn giá</td>
				<td>Số Lượng</td>
			</tr>
			<tr>
				<td><input type="text" name="ma" /></td>
				<td><input type="text" name="ten" /></td>
				<td><input type="text" name="don_gia" /></td>
				<td><input type="text" name="so_luong" />
                
                </td>
			</tr>
			<tr>
				<td colspan="4" align="center">              
				<input type="submit" name="hanhdong"  value="Thêm"/>
				<input type="submit" name="hanhdong"  value="Sửa"/>
				<input type="submit" name="hanhdong" value="Xóa" />
			</td>
			</tr>
		</table>
	</form>

</div> 
</body>
</html>