<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Giai phuong trinh bac nhat</title>
<style type="text/css">
<!--
.style5 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: smaller; }
.style7 {
	font-family: LucidaHandwriting, LucidaCalligraphy;
	font-size: 20px;
	font-weight: bold;
	color: #6F2400;
}
.style8 {
	color: #000099;
	font-weight: bold;
}
.style9 {
	color: #FF0000;
	font-weight: bold;
}
-->
</style>
</head>

<body>
	<?php
	function GiaiPT($a, $b)
	{
		$flag = '';
		if($a == 0)
		{
			if($b==0)
				$flag = 1;
			else 
				$flag = 2;
		}
		else
			$flag = 3;
		return $flag;
	}
	
		if(isset($_POST['a'],$_POST['b'])==true)
			if(is_numeric($_POST['a'])&& is_numeric($_POST['b']))
			{
				$a = $_POST['a'];
				$b = $_POST['b'];
				$flag = GiaiPT($a, $b);
				if($flag == 1)
						$c = 'Phương trình vô số nghiệm';
				else if($flag == 2)
						$c = 'Phương trình vô nghiệm';
				else
					$c = -$b / $a;
				
			}
	?>
<form id="form1" name="form1" method="post" action="#">
  <table width="400" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#FFEBCA">
    <tr align="center">
      <td colspan="2" bgcolor="#FFCC66"><span class="style7">GIẢI PHƯƠNG TRÌNH BẬC NHẤT </span></td>
    </tr>
    <tr>
      <td width="136"><p><span class="style5">&nbsp;Phương trình: </span></p></td>
      <td width="200"><span class="style5">
        <label>
        <input name="a" type="text" class="style9" id="a" value="<?php echo @$a; ?>" size="3"/>
        </label>
        <strong>
        x +</strong> 
        <input name="b" type="text" class="style9" id="b" value="<?php echo @$b; ?>" size="3"/>
        <strong>= 0 </strong></span></td>
    </tr>
    <tr>
      <td><p><span class="style5">&nbsp;Nghiệm:</span></p></td>
      <td><span class="style5">
        <label>
        <input name="nghiem" type="text" class="style9" id="nghiem" value="<?php echo @$c; ?>" size="30"  style="background:#FFFFCC"/>
        </label>
      </span></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><label>
        <input type="submit" name="Submit" value="Giải phương trình" />
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>
