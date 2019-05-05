<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Doc thu trong tuan</title>
<style type="text/css">
<!--
.style1 {
	font-family: LucidaHandwriting, LucidaCalligraphy;
	font-size: 20px;
	font-weight: bold;
	color: #FFFFFF;
}
.style6 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: smaller; }
.style7 {
	color: #FF0000;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<?php
	
	function namNhuan($nam)
	{		
		if ($nam % 4 != 0) return false;
            if ($nam % 100 != 0) return true;
            if ($nam % 400 != 0) return false;
            return true;
	}
	function SoNgayTrongNam($nam)
	{
		if(namNhuan($nam))
			return 366;
		return 365;
	}
	function SoNgayTruocNam($nam)
	{
		$tongSoNgayTruocNam = 0;
		for($i = 1; $i < $nam; $i++)
			$tongSoNgayTruocNam += SoNgayTrongNam($i);
		return $tongSoNgayTruocNam;
	}
	
	function soNgayTrongThang($nam, $thang)
	{
		switch($thang)
		{
			case 4: 
			case 6:
			case 9:
			case 11:
				return 30;
			case 2:
				{
					if(namNhuan($nam) == 1)
						return 29;
					return 28;
				}
			default:
				return 31;
		}
	}
	function soNgayTruocThang($nam, $thang)
	{
		$ngay = 0;
		for($i =0; $i < $thang; $i++)
		{
			$ngay += soNgayTrongThang($nam, $i);
		}
		return $ngay;
	}
	
	function TongSoNgay($nam, $thang, $ngay)
	{
		return soNgayTruocNam($nam) + soNgayTruocThang($nam, $thang) + $ngay;
	}
	
	function NgayTrongTuan($nam, $thang, $ngay)
	{
		switch(TongSoNgay($nam, $thang, $ngay)%7)
		{
			case 0:
				{
					$flag = 0;
					break;
				}
			case 1:
				{
					$flag = 1;
					break;
				}
			case 2: 
				{
					$flag = 2;
					break;
				}
			case 3: 
				{
					$flag = 3;
					break;
				}	
			case 4: 
				{
					$flag = 4;
					break;
				}		
			case 5: 
				{
					$flag = 5;
					break;
				}
			case 6: 
				{
					$flag = 6;
					break;
				}
		}
		return $flag;
	}
	if(isset($_POST['ngay'], $_POST['thang'], $_POST['nam']))
	{
		if(is_numeric($_POST['ngay'])&&is_numeric($_POST['thang'])&&is_numeric($_POST['nam']))
		{
			$ngay = $_POST['ngay'];
			$thang = $_POST['thang'];
			$nam = $_POST['nam'];
			$p = '';
			$d = '';
			if(($ngay >0 && $ngay <=31)&&($thang > 0 && $thang <= 12))
			{
				$temp = NgayTrongTuan($nam, $thang, $ngay);
					{
						switch($temp)
						{
							case 0: $d = ' là ngày thứ năm'; break;
							case 1: $d = ' là ngày thứ sáu'; break;
							case 2: $d = ' là ngày thứ bảy'; break;
							case 3: $d = ' là ngày chủ nhật'; break;
							case 4: $d = ' là ngày thứ hai'; break;
							case 5: $d = ' là ngày thứ ba'; break;
							case 6: $d = ' là ngày thứ tư'; break;				
						}
					}
					$p = 'Ngày '. $ngay . ' Tháng ' . $thang . ' Năm '. $nam . $d;
			}
			else 
				$p = 'Dữ liệu không hợp lệ';
		}
	}
	?>
<form id="form1" name="form1" method="post" action="#">
  <table width="510" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#DB95B8">
    <tr bgcolor="#BDBAE7">
      <td colspan="3" bgcolor="#CC3366"> <div align="center"><span class="style1">TÌM THỨ TRONG TUẦN</span></div></td>
    </tr>
    <tr>
      <td width="130"><span class="style6">&nbsp;Ngày/tháng/năm: </span></td>
      <td width="232"><input name="ngay" type="text" id="ngay" size="2" value="<?php echo @$ngay;?>"/>
      /
      <input name="thang" type="text" id="thang" size="2" value="<?php echo @$thang;?>"/>
      /
      <label>
      <input name="nam" type="text" id="nam" value="<?php echo @$nam;?>" size="3" />
      </label></td>
      <td width="128"><input type="submit" name="Submit" value="Tìm thứ trong tuần" 
	  style="background:#f2ccd9" border="1" class="style6"/></td>
    </tr>
    <tr>
      <td colspan="3" align="center" bgcolor="#F2CCD9">
        <input name="thu" type="text" class="style7" id="thu" style="background:#FFFFCC" value="<?php echo @$p;?>" size="45" readonly="true" />
      </td>
    </tr>
  </table>
</form>
</body>
</html>
