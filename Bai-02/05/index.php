<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cuu chuong</title>
<style type="text/css">
<!--
.style5 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: smaller; }
.style6 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 20px;
	font-weight: bold;
	color: #FFFFFF;
}
.style7 {color: #FFFFFF}
.style9 {color: #FFFFFF; font-weight: bold; }
-->
</style>
</head>

<body>
<?php
		$bang = '';
		$temp = '';
		$bcc = '';
		if(isset($_POST['a'])==true)
		{
			if(is_numeric($_POST['a']))
			{
				$bang =$_POST['a'];
				for($i = 1; $i <= 10; $i++)
				{
					$temp = $bang * $i;
					$bcc .= '<p>'.$bang. ' x ' . $i .' = '. $temp.'</p>';
				}
			}
			else 
				echo $_POST['a'] = 'Không thực hiện được';
		}
	?>
<form id="form1" name="form1" method="post" action="#">
  <table width="420" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#C6ECEC">

    <tr bgcolor="#009F9F">
      <td height="30" colspan="2"><div align="center" class="style6">BẢNG CỬU CHƯƠNG </div></td>
    </tr>
    <tr>
      <td width="122"><span class="style5">&nbsp;Cửu chương:</span></td>
      <td width="228" height="30"><span class="style5">
        <label>
        <input name="a" type="text" id="a" value="<?php echo $bang?>" size="5" />&nbsp;&nbsp;
        </label>
        <input name="Submit" type="submit" value="Thực hiện" style="background:#E1F0FF" border="1"/>
      </span></td>
    </tr>
    <tr>
      <td height="30" colspan="2" align="center"><label><table width="416" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#009999" bgcolor="#FFFFFF">
  <tr bgcolor="#009999">
    <td class="style6" align="center">KẾT QUẢ</td>
    <td class='style7'><?php echo $bcc; ?></td>

  </tr>
  <tr>
    <td bgcolor="#E1F0FF"></td>
  </tr>
</table></label></td>
    </tr>
  </table>
</form>

<p align="center">&nbsp;</p>
 
</body>
</html>
