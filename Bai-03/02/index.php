<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Tim so nguyen to</title>
<style type="text/css">
<!--
.style5 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: smaller; }
.style7 {
	font-family: LucidaHandwriting, LucidaCalligraphy;
	font-size: 20px;
	font-weight: bold;
	color: #993300;
}
.style8 {
	color: #FF0000;
	font-weight: bold;
}
-->
</style>
</head>

<body>
	<?php
	function soNguyenTo($n)
	{
		if($n < 2)
			return 0;
		for($i = 2; $i <= sqrt($n); $i++)
		{
			if($n%$i==0)
				return 0;
		}
		return 1;	
	}
		if(isset($_POST['n']))
		{
			if(is_numeric($_POST['n']))
			{
				$n = $_POST['n'];
				if($n > 0)
				{
					$kq = '';
					for($i = 2; $i<= $n; $i++)
					{
						if(soNguyenTo($i)==true)
						{
							$kq .= $i . ' ';
						}
					}
					$kq .= ' Là các số nguyên tố';
				}
				else 
					$kq = 'Dữ liệu không hợp lệ';
			}
		}
	?>
<form id="form1" name="form1" method="post" action="index.php">
  <table width="340" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#FFEBCA">
    <tr align="center">
      <td colspan="2" bgcolor="#FFCC66"><span class="style7">TÌM SỐ NGUYÊN TỐ</span></td>
    </tr>
    <tr>
      <td width="157" align="center" class="style5">&nbsp;Nhập N:</td>
      <td width="169" class="style5">
        <input name="n" type="text" id="n" value="<?php echo @$n; ?>" size="10"/>
      </td>
    </tr>
    <tr>
      <td colspan="2" align="center">
          <input type="submit" name="Submit" value="Các số nguyên tố <= N"  style="background:#FFFF99" border="1"/>      </td>
    </tr>
    <tr>
      <td colspan="2" class="style5" align="center">
        <input name="snt" type="text" class="style8" id="snt" style="background-color:#FFCCCC" value="<?php echo @$kq; ?>" size="40" readonly="true"/>
      </td>
    </tr>
  </table>
</form>
</body>
</html>
