<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>So sanh chuoi</title>
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
	color: #FF3300;
}
.style8 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; }
.style9 {font-size: 14px}
.style14 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: smaller; }
.style16 {color: #FF0000; font-weight: bold; }
.style17 {color: #FFFFFF}
-->
</style>
</head>

<body>
<?php
	function SoSanh($chuoi1, $chuoi2)
	{
		$temp = strcasecmp($chuoi1, $chuoi2);
			return $temp;
	}
	
	if(isset($_POST['chuoi1'], $_POST['chuoi2']))
	{
		$chuoi1 = $_POST['chuoi1'];
		$chuoi2 = $_POST['chuoi2'];
		$temp = '';
		if(SoSanh($chuoi1, $chuoi2) == 0)
			$temp = 'Hai chuỗi giống nhau';
		else
			
			$temp = 'Hai chuỗi không giống nhau';
	}

	
?>

<form name="form1" method="post" action="#">
  <table width="500" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#D1DED4">
    <tr bgcolor="#FFCCCC">
      <td colspan="2" bgcolor="#339999"><div align="center" class="style1 style3 style17">SO SÁNH CHUỖI</div></td>
    </tr>
    <tr>
      <td><span class="style14">&nbsp;Chuỗi thứ nhất: </span></td>
      <td><span class="style9">
        <label>
        <input name="chuoi1" style="margin-left: 5px; text-align: center;" type="text" id="chuoi1" size="50" value="<?php echo @$chuoi1;?>">
        </label>
      </span></td>
    </tr>
    <tr>
      <td width="121"><span class="style14">&nbsp;Chuỗi thứ hai:</span></td>
      <td width="315">
      <input name="chuoi2" style="margin-left: 5px; text-align: center;" type="text" id="chuoi2" value="<?php echo @$chuoi2;?>" size="50">      </td>
    </tr>
    <tr>
      <td colspan="2" align="center">
        <input type="submit" name="Submit" value="So sánh" style="background:#339999; margin-left: 100px;">      </td>
    </tr>
    <tr>
      <td class="style16"></td>
      <td class="style8">
	  <input name="chuoi_kq" style="margin-right: 15px; text-align: center;"type="text" class="style16" id="chuoi_kq" style="background:#FFFFCC" value="<?php echo @$temp;?>" size="45" readonly>	  </td>
    </tr>
  </table>
</form>

</body>
</html>
