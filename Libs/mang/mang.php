<?php 
function viewar($ar)
{
  echo '<pre>';
  print_r($ar);
  echo '</pre>';
}
//mảng mặc định
$mang_truoc='';
$mang = array(
  'sp001' => array('ten' => 'Canon MTL-24323',    'don_gia' => 10000000,  'so_luong' => 1, 'thanh_tien' => 10000000),
  'sp002' => array('ten' => 'SamSung ML-1640',    'don_gia' => 15000000,  'so_luong' => 2, 'thanh_tien' => 30000000),
  'sp003' => array('ten' => 'HP ATE Lide 100',    'don_gia' => 17000000,  'so_luong' => 1, 'thanh_tien' => 17000000),
  'sp004' => array('ten' => 'Canon Scanner A',    'don_gia' => 20000000,  'so_luong' => 1, 'thanh_tien' => 20000000), 
  'sp014' => array('ten' => 'Canon Scanner Lide 100', 'don_gia' => 234234,  'so_luong' => 1, 'thanh_tien' => 20000000)  
);
//viewar($_POST);




// if(isset($_POST['hanhdong']))
// {
//   switch($_POST['hanhdong'])
//   {
//     case 'Thêm':
//       //tao du lieu ban dau tu chuoimang
//       $str =  $_POST['mang_an'];
//       //tach san pham truoc
//       $sps  = explode('\*',$str);
//       $mangtam = array();
//       foreach($sps as $v)
//       {
//         $sp  = explode('|',$v);
//         $mangtam[$sp[0]] = array('ten' => $sp[1],     'don_gia' => $sp[2],  'so_luong' => $sp[3], 'thanh_tien' => $sp[4]);
//       }
//               viewar($mangtam);
//       $mangtam[$_POST['ma']] = array('ten' =>$_POST['ten'], 'don_gia' => $_POST['don_gia'],   'so_luong' => $_POST['so_luong'], 'thanh_tien' => $_POST['so_luong']*$_POST['don_gia']);
//       $mang = $mangtam;
//       break;
//   }
// }

//tao chuoimang truoc khi lam gi do
function taochuoi($mang)
{
  $kq = '';
  foreach($mang as $k=>$item){
    $kq.=$k.'|'.implode('|',$item)."\r\n";
  }
  return trim($kq,"\r\n");
}

function them(&$mang,$data)
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
    return true;
  }
}

function xoa(&$mang,$ma)
{
  //check du lieu trc khi them
  if(!isset($mang[$ma]))
  {
    return false;
  }else
  {
    unset($mang[$ma]);
    $noidung = taochuoi($mang);
    return true;
  }
}

function sua(&$mang,$data)
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
    return true;
  }
}


if(isset($_POST['hanhdong']))
{
  switch($_POST['hanhdong'])
  {
    case 'Thêm':  
      if(them($mang,$_POST))
        echo 'Them thanh cong';
      else
        echo 'Ma da ton tai';
      break;
    case 'Sửa': 
      if(sua($mang,$_POST))
        echo 'Cap nhat thanh cong';
      else
        echo 'Ma khong ton tai';
      break;
    case 'Xóa': 
      if(xoa($mang,$_POST['ma']))
        echo 'Xóa thanh cong';
      else
        echo 'Ma khong ton tai';
      break;
  }
}
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
foreach($mang as $ma=>$sp)
{
  $tong+=$sp['thanh_tien'];
?>
  <tr align="center">
    <td><?php echo $ma ?></td>
    <td align="left"><?php echo $sp['ten'] ?></td>
    <td align="right"><?php echo number_format($sp['don_gia']) ?></td>
    <td><?php echo $sp['so_luong'] ?></td>
    <td align="right"><?php echo number_format($sp['thanh_tien']) ?></td>
  </tr>
<?php 
}
?>   
      <tr align="right">
    <td colspan="5">Tổng cộng: <?php echo number_format($tong) ?></td>
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