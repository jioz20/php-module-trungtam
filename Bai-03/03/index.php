<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>uscln va bscnn</title>
<style type="text/css">
<!--
.style5 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: smaller; }
.style7 {
	font-family: LucidaHandwriting, LucidaCalligraphy;
	font-size: 20px;
	font-weight: bold;
	color: #993300;
}
-->
</style>
</head>

<body>
	<?php
		function UocChung($a, $b)
		{
			while($b != 0)
			{
				$temp = $a % $b;
				$a = $b;
				$b = $temp;
			}
			return $a;
		}
	
	if(isset($_POST['a'], $_POST['b']))
	{
		if(is_numeric($_POST['a'])&& is_numeric($_POST['b']))
		{
			$a = $_POST['a'];
			$b = $_POST['b'];
			$UocSoLonNhat = UocChung($a, $b);
			$BoiSoNhoNhat = ($a*$b)/$UocSoLonNhat;
		}
	}
	?>
<form id="form1" name="form1" method="post" action="index.php">
  <table width="380" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#FFEBCA">
    <tr align="center">
      <td colspan="2" bgcolor="#FFCC66"><span class="style7">ƯỚC SỐ CHUNG LỚN NHẤT<br />
        và BỘI SỐ CHUNG NHỎ NHẤT
</span></td>
    </tr>
    <tr>
      <td width="104"><p><span class="style5">&nbsp;Số A: </span></p></td>
      <td width="232"><span class="style5">
        <label>
        <input name="a" type="text" id="a" value="<?php echo @$a;?>"/>
        </label>
      </span></td>
    </tr>
    <tr>
      <td><p><span class="style5">&nbsp;Số B: </span></p></td>
      <td><span class="style5">
        <label>
        <input name="b" type="text" id="b" value="<?php echo @$b;?>" />
        </label>
      </span></td>
    </tr>
    <tr>
      <td><p><span class="style5">&nbsp;USCLN: </span></p></td>
      <td><span class="style5">
        <label>
        <input name="kq" type="text" id="kq" readonly="true" value="<?php echo @$UocSoLonNhat;?>" style="background-color:#FFCCCC"/>
        </label>
      </span></td>
    </tr>
    <tr>
      <td><p><span class="style5">&nbsp;BSCNN: </span></p></td>
      <td><span class="style5">
        <label>
        <input name="bscnn" type="text" id="bscnn" readonly="true" value="<?php echo @$BoiSoNhoNhat;?>" style="background-color:#FFCCCC"/>
        </label>
      </span></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><label>
        <input type="submit" name="Submit" value="Tìm USCLN và BSCNN"  style="background:#FFFF99" border="1"/>
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>
