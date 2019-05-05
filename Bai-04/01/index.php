<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cạnh Huyền</title>
</head>

<body>
</body>
</html><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Tinh dien tich hinh chu nhat</title>
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
	function CanhHuyen($a, $b)
	{
		$c = sqrt($a*$a + $b*$b);
		return $c;
	}
	if(isset($_POST['A'], $_POST['B']))
    {
    	if(is_numeric($_POST['A'])&& is_numeric($_POST['B'])&&is_numeric($_POST['A']))
        {
        	$a = $_POST['A'];
            $b = $_POST['B'];
			if($a > 0 && $b > 0)
			{
			 	$c = CanhHuyen($a, $b);
			}
			else
				$c = 'Dữ liệu không hợp lệ';
     	}
        }
		
?>
<form id="form1" name="form1" method="post" action="#">
  <table width="392" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#FFEBCA">
    <tr align="center">
      <td colspan="2" bgcolor="#FFCC66"><span class="style7">CẠNH HUYỀN TAM GIÁC VUÔNG
</span></td>
    </tr>
    <tr>
      <td width="119"><p><span class="style5">&nbsp;Cạnh A</span></p></td>
      <td width="259"><span class="style5">
        <label>
        <input name="A" type="text" id="A" value="<?php echo @$a;?>"/>
        </label>
      </span></td>
    </tr>
    <tr>
      <td><p><span class="style5">&nbsp;Cạnh B</span></p></td>
      <td><span class="style5">
        <label>
        <input name="B" type="text" id="B"  value="<?php echo @$b;?>"  />
        </label>
      </span></td>
    </tr>
    <tr>
      <td><p><span class="style5">&nbsp;Cạnh huyền</span></p></td>
      <td><span class="style5">
        <label>
        <input name="Canh_huyen" type="text" id="Canh_huyen" readonly="true" value="<?php echo @$c;?>" style="background-color:#FFCCCC"/>
        </label>
      </span></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><label>
        <input type="submit" name="Submit" value="Tính" />
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>