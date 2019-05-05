<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Thay the tu trong chuoi</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
<!--
.style1 {
	color: #990000;
	font-size: x-large;
	font-weight: bold;
	font-family: "Courier New", Courier, mono;
}
.style3 {
	font-size: 20px;
	font-family: LucidaHandwriting, LucidaCalligraphy;
	color: #FFFFFF;
}
.style8 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; }
.style9 {font-size: 14px}
.style14 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: smaller; }
-->
</style>
</head>

<body>
<?php
	function Thay($goc, $thay, $chuoi)
	{
		$temp = str_replace($goc, $thay, $chuoi);
		return $temp;
	}
	if(isset($_POST['chuoi'], $_POST['tu_goc'], $_POST['tu_thay']))
	{
		$d = '';
		$chuoi = $_POST['chuoi'];
		$tuGoc = $_POST['tu_goc'];
		$tuThay = $_POST['tu_thay'];
		
		$d = Thay($tuGoc, $tuThay, $chuoi);
	}
?>

<form name="form1" method="post" action="#">
  <table width="450" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#FFCCCC">
    <tr bgcolor="#880000">
      <td colspan="2" bgcolor="#DD4800"><div align="center" class="style1 style3">THAY THẾ TỪ TRONG CHUỖI</div></td>
    </tr>
    <tr>
      <td><span class="style14">&nbsp;Chuỗi: </span></td>
      <td><span class="style9">
        <label>
        <input name="chuoi" type="text" id="chuoi" size="45" value="<?php echo @$chuoi;?>">
        </label>
      </span></td>
    </tr>
    <tr>
      <td width="107"><span class="style14">&nbsp;Từ gốc:</span></td>
      <td width="279">
        <input name="tu_goc" type="text" id="tu_goc" value="<?php echo @$tuGoc;?>" size="20">      </td>
    </tr>
    <tr>
      <td><span class="style14">&nbsp;Từ thay thế:</span></td>
      <td>
        <input name="tu_thay" type="text" id="tu_thay" value="<?php echo @$tuThay;?>" size="20">      </td>
    </tr>
    <tr>
      <td colspan="2" align="center">
        <input type="submit" name="Submit" value="Thay thế" style="background:#FF9966"> </td>
    </tr>
    <tr>
      <td></td>
      <td class="style8">
	  <input name="chuoi_kq" type="text" id="chuoi_kq" style="background:#FFFFCC" value="<?php echo @$d;?>" size="45" readonly="true"></td>
    </tr>
  </table>
</form>

</body>
</html>
