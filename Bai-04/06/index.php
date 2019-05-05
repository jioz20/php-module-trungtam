<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ngay trong thang</title>
<style type="text/css">
<!--
.style1 {
	font-family: LucidaHandwriting, LucidaCalligraphy;
	font-size: 20px;
	font-weight: bold;
	color: #000000;
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
			if(($nam%4==0)&&($nam%100!=0))
				return 1;
			else 
				return 0;
		}
		function soNgay($thang, $nam)
		{
			$ngay = 0;
			$flag = 0;
			if(($thang>0 && $thang <= 12) && ($nam > 0 && strlen($nam)==4))
			{
				if($thang == 1 || $thang == 3 || $thang == 5 || $thang == 7 
				  || $thang ==8 || $thang == 10 || $thang == 12)
				{
					$flag = 1;
				}
				else if($thang == 4 || $thang == 6 || $thang == 9 || $thang == 11)
				{
					$flag = 2;
				}
				else if($thang == 2)
				{
					if(namNhuan($nam)== 1)
						$flag = 3;
					else
						$flag = 4;
				}
			}
			return $flag;
		}
			
		if(isset($_POST['thang'], $_POST['nam']))
		{
			if(is_numeric($_POST['thang'])&& is_numeric($_POST['nam']))
			{
				$thang = $_POST['thang'];
				$nam = $_POST['nam'];
				$p = '';
				$d = '';
				$temp = soNgay($thang, $nam);
				$d = 'Tháng '. $thang .' năm '. $nam;
				
				switch($temp)
				{ 
					case 1: $p = $d. ' có 31 ngày'; break;
					case 2: $p = $d. ' có 30 ngày'; break;
					case 3: $p = 'Năm '. $nam .' là năm nhuận và '. $d . ' có 29 ngày';break;
					case 4: $p = 'Năm '. $nam .' là năm không nhuận và '. $d . ' có 28 ngày';break;
					default: $p = 'Dữ liệu không hợp lệ';		
				 }
			}
		}
	?>
<form id="form1" name="form1" method="post" action="#">
  <table width="400" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#FFCCCC">
    <tr bgcolor="#BDBAE7">
      <td colspan="2" bgcolor="#FF5E5E"> <div align="center"><span class="style1">TÍNH NGÀY TRONG THÁNG</span></div></td>
    </tr>
    <tr>
      <td width="111"><span class="style6">&nbsp;Tháng/năm: </span></td>
      <td width="275"><input name="thang" type="text" id="thang" size="4" value="<?php echo @$thang;?>"/>
      /
      <label>
      <input name="nam" type="text" id="nam" value="<?php echo @$nam; ?>" size="4" />
      </label></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><label>
        <input name="Submit" type="submit" class="style6" value="Tính số ngày" style="background:#FFFFFF" border="1" />
      </label></td>
    </tr>
    <tr>
      <td colspan="2" align="center">
        <input name="thu" type="text" class="style7" id="thu" style="background:#FFFFCC; text-align: center;" value="<?php echo @$p;?>" size="57" readonly="true"/></td>
    </tr>
  </table>
</form>
</body>
</html>
