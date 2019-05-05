<?php 
abstract class nhanvien//(chung , ảo , khong co that, nen khong xai dc, cau truc trong suy nghi cho may thang con notrien khai chi ra  (truu tuong))
{
	var $ten,$ma,$gioitinh;
	function __construct($ten,$ma,$gioitinh)
	{
		$this->ma= $ma;
		$this->ten= $ten;
		$this->gioitinh= $gioitinh;	
	}
	abstract function luong();
	abstract function trocap();
	abstract function phat();
	
}

class nhanvienvanphong extends nhanvien
{
	var $ngayvang,$socon,$hsl;
	private $lcb = 450000, $dinhmucvang =3;
	
	function __construct($ten,$ma,$gioitinh,$ngayvang,$socon,$hsl)
	{
		parent::__construct($ten,$ma,$gioitinh);
		$this->ngayvang= $ngayvang;
		$this->socon= $socon;
		$this->hsl= $hsl;
	}

	function luong()
	{
		return $this->hsl*$this->lcb;
	}
	function trocap()
	{
		return $this->gioitinh == 0 && $this->socon>2 ?  ($this->socon-2) *100000:0;
	}
	function phat()
	{
		return $this->ngayvang>$this->dinhmucvang? abs($this->ngayvang-$this->dinhmucvang) * 100000:0;
	}
}
class nhanviensx extends nhanvien
{
	var $soluong;
	private $dinhmucsp = 100, $dongia = 12000;

	
	function __construct($ten,$ma,$gioitinh,$soluong)
	{
		parent::__construct($ten,$ma,$gioitinh);
		$this->soluong= $soluong;
	}
	function luong()
	{
		return $this->dongia * $this->soluong;
	}
	function trocap()
	{
		return  0;
	}
	function phat()
	{
		if($this->soluong < $this->dinhmucsp)
			return abs($this->soluong-$this->dinhmucsp) * 10000;
		else 
			return 0;
	}
	
}
if(isset($_POST['r_loainhanvien']))
{
	if($_POST['r_loainhanvien'] == 'Văn phòng')
	{
		$nv = new nhanvienvanphong($_POST['txt_ten'],'1',$_POST['r_gioitinh'],$_POST['txt_songayvang'],$_POST['txt_socon'],$_POST['txt_hesoluong']);
		$luong = $nv->luong();
		$trocap = $nv->trocap();
		$phat = $nv->phat();
	}
	else
	{
		$nv =new nhanviensx($_POST['txt_ten'], 1, $_POST['r_gioitinh'], $_POST['txt_sosanpham']);
		$luong = $nv->luong();
		$trocap = $nv->trocap();
		$phat = $nv->phat();
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>QUẢN LÝ NHÂN VIÊN</title>
</head>
<body>
<form name="frm_Nhan_vien" method="post">
<table width="600" align="center" style="background-color:#D9E4F1; margin: 40px auto;">
  <caption style="background-color:#5F7393; color:#FFF; font-size:24px; font-weight:bold; padding:3px">
    QUẢN LÝ NHÂN VIÊN
  </caption>
  <tr>
    <td>Họ và tên:</td>
    <td><input type="text" name="txt_ten" value="<?php echo @$_POST['txt_ten']?>" /></td>
    <td>Số con:</td>
    <td><input type="text" name="txt_socon" value="<?php echo @$_POST['txt_socon']?>" /></td>
  </tr>
  <tr>
    <td>Ngày sinh:</td>
    <td><input type="text" name="txt_ngaysinh" value="<?php echo @$_POST['txt_ngaysinh']?>" /></td>
    <td>Ngày vào làm:</td>
    <td><input type="text" name="txt_ngayvaolam" value="<?php echo @$_POST['txt_ngayvaolam']?>" readonly/></td>
  </tr>
  <tr>
    <td>Giới tính:</td>
    <td>
        <label for="r_gioitinh0">
    <input type="radio" name="r_gioitinh" <?php echo @$_POST['r_gioitinh']==1?'checked':'' ?> id="r_gioitinh0" value="1" />Nam    </label>
	    <label for="r_gioitinh1">
    <input type="radio" name="r_gioitinh" <?php echo @$_POST['r_gioitinh']==0?'checked':'' ?> id="r_gioitinh1" value="0" />Nữ    </label>
	    </td>
    <td>Hệ số lương:</td>
    <td><input type="text" name="txt_hesoluong" value="<?php echo @$_POST['txt_hesoluong']?>" /></td>
  </tr>
  <tr style="background-color:#F4F9FC">
    <td>Loại nhân viên:</td>
    <!--td colspan="2"-->
        <td>
    <label for="r_loainhanvien0">
    <input name="r_loainhanvien" type="radio" id="r_loainhanvien0" checked="checked" value="Văn phòng" />Văn phòng    </label>
    </td>
	    <td>
    <label for="r_loainhanvien1">
    <input name="r_loainhanvien" type="radio" id="r_loainhanvien1" value="Sản Xuất" />Sản Xuất    </label>
    </td>
	    </td>
    <td>&nbsp;</td>
  </tr>
  <tr style="background-color:#F4F9FC">
    <td>&nbsp;</td>
    <td>Số ngày vắng:<input type="text" name="txt_songayvang" value="<?php echo @$_POST['txt_songayvang']?>" size="5" /></td>
    <td>Số sản phẩm:<input type="text" name="txt_sosanpham" value="<?php echo @$_POST['txt_sosanpham']?>" size="5" /></td>
    <td>Tăng ca:
         <label for="r_tangca0">
    <input type="radio" name="r_tangca" id="r_tangca0" value="Có" />Có    </label>
	    <label for="r_tangca1">
    <input type="radio" name="r_tangca" id="r_tangca1" value="Không" />Không    </label>
	   
    </td>
  </tr>
  <tr>
    <td>Tiền lương:</td>
    <td><input type="text" name="txt_tienluong" value="<?php echo @$luong ?>" readonly="readonly" /></td>
    <td>Trợ cấp:</td>
    <td><input type="text" name="txt_trocap" value="<?php echo @$trocap ?>" readonly="readonly" /></td>
  </tr>
  <tr align="center">
    <td colspan="4">Thực lãnh:<input type="text" name="txt_thuclanh" value="<?php echo @$luong + @$trocap - @$phat ?>" readonly="readonly" /></td>
  </tr>
  <tr align="center" style="background-color:#5F7393">
    <td colspan="4"><input type="submit" name="btn" value="Tính lương" /></td>
  </tr>
</table>
</form>
</body>
</html>