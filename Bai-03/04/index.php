<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Tinh toan day so</title>
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
	color: #993300;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<?php 

	function Tong($bd, $kt)
	{
		$tong =0;
		for($i = $bd; $i <= $kt; $i++)
			{
				$tong += $i;
			}
		return $tong;
	}
	
	function Tich($bd, $kt)
	{
		$tich = 1;
		for($i= $bd; $i<= $kt; $i++)
		{
			$tich *= $i;
		}
		return $tich;
	}
	
	function TongChan($bd, $kt)
	{
		$tongChan = 0;
		for($i= $bd; $i<= $kt; $i++)
		{
			if($i % 2== 0)
			{
				$tongChan += $i;
			}
		}
		return $tongChan;
	}
	
	function TongLe($bd, $kt)
	{
		$tongLe = 0;
		for($i= $bd; $i<= $kt; $i++)
		{
			if($i % 2 == 1)
			{
				$tongLe += $i;
			}
				
		}
		return $tongLe;
	}
	
	if(isset($_POST['bd'], $_POST['kt']))
	{
		if(is_numeric($_POST['bd'])&&is_numeric($_POST['kt']))
		{
			$bd = $_POST['bd'];
			$kt = $_POST['kt'];
			$tich = 1;

			$tong = Tong($bd, $kt);
			$tich = Tich($bd, $kt);
			$tongChan = TongChan($bd, $kt);
			$tongLe = TongLe($bd, $kt);
		}
		else 
			die('Not found');

	}
?>
<form id="form1" name="form1" method="post" action="index.php">
  <table width="480" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#FFEBCA">
    <tr align="center">
      <td colspan="2" bgcolor="#FFCC66"><span class="style7">TÍNH TOÁN TRÊN DÃY SỐ</span></td>
    </tr>
    <tr>
      <td width="151"><p><span class="style5">&nbsp;Giới hạn của dãy số: </span></p></td>
      <td width="315" bgcolor="#FFFFFF"><span class="style5">
        <label>
        Số bắt đầu: 
        <input name="bd" type="text" id="bd" value="<?php echo @$bd;?>" size="3"/>
        </label>
      Số kết thúc: 
      <input name="kt" type="text" id="kt" value="<?php echo @$kt;?>" size="3"/>
      </span></td>
    </tr>
    <tr>
      <td><p><span class="style5">&nbsp;<span class="style8">Kết quả: </span></span></p></td>
      <td><span class="style5">
        <label></label>
      </span></td>
    </tr>
    <tr>
      <td><p><span class="style5">&nbsp;Tổng các số: </span></p></td>
      <td><span class="style5">
        <label>
        <input name="ch" type="text" id="ch" readonly="true" value="<?php echo @$tong;?>" style="background-color:#FFCCCC"/>
        </label>
        <label></label>
      </span></td>
    </tr>
    <tr>
      <td><p><span class="style5">&nbsp;Tích các số: </span></p></td>
      <td><span class="style5">
        <label>
        <input name="ch1" type="text" id="ch1" readonly="true" value="<?php echo @$tich;?>" style="background-color:#FFCCCC"/>
        </label>
      </span></td>
    </tr>
    <tr>
      <td><p><span class="style5">&nbsp;Tổng các số chẵn: </span></p></td>
      <td><span class="style5">
        <label>
        <input name="ch2" type="text" id="ch2" readonly="true" value="<?php echo @$tongChan;?>" style="background-color:#FFCCCC"/>
        </label>
      </span></td>
    </tr>
    <tr>
      <td><p><span class="style5">&nbsp;Tổng các số lẻ: </span></p></td>
      <td><span class="style5">
        <label>
        <input name="ch4" type="text" id="ch4" readonly="true" value="<?php echo @$tongLe;?>" style="background-color:#FFCCCC"/>
        </label>
      </span></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><label>
        <input type="submit" name="Submit" value="Tính toán" style="background:#FFCC66" border="1"/>
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>
