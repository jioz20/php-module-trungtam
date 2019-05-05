<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Tim kiem chuoi</title>
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
.style14 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: smaller;}
.style15 {
	color: #006600;
	font-weight: bold;
}
.style16 {color: #FF0000; font-weight: bold; }
-->
</style>
</head>

<body>
 <?php
	function Search($a, $b)
	{
		$flag = 0;
		if(strstr($a,$b)==true)
			$flag = 1;
		return $flag;
	}
	
		if(isset($_POST['chuoi'], $_POST['tu_tim']))
		{
			$a = $_POST['chuoi'];
			$b = $_POST['tu_tim'];
			$c = '';
			$d = '';
			if(Search($a, $b) == 1)
			{
				
				$c = strpos($a,$b);
				$d = "Tìm thấy từ '". $b.  "' trong chuỗi tại vị trí số " . $c;
			}
			else 
				$d = "Không tìm thấy chuỗi";
		}
	?>

<form name="form1" method="post" action="#">

  <table width="450" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#D7FFEC">
    <tr bgcolor="#FFCCCC">
      <td colspan="2" bgcolor="#FFE1E1"><div align="center" class="style1 style3">TÌM TỪ TRONG CHUỖI</div></td>
    </tr>
    <tr>
      <td><span class="style14">&nbsp;Chuỗi: </span></td>
      <td><span class="style9">
        <label>
        <input name="chuoi" type="text" id="chuoi" size="45" value="<?php echo @$a; ?>">
        </label>
      </span></td>
    </tr>
    <tr>
      <td width="107"><span class="style14">&nbsp;Từ cần tìm: </span></td>
      <td width="279">
        <input name="tu_tim" type="text" style="margin-left: 2px;" id="tu_tim" value="<?php echo @$b;?>" size="20">      </td>
    </tr>
    <tr>
      <td colspan="2" align="center">
        <input type="submit" name="Submit" value="Tìm kiếm" style="background:#339999">      </td>
    </tr>
    <tr>
      <td class="style16"></td>
      <td class="style8">
	  <input name="chuoi_kq" type="text" class="style16" id="chuoi_kq" style="background:#FFFFCC" value="<?php echo @$d;?>" size="45" readonly></td>
    </tr>
  </table>
</form>

</body>
</html>
