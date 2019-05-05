<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Phương trình bậc 2</title>
</head>

<body>
</body>
</html><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
	
	function GiaiPT($a, $b, $c, $delta)
	{
		if($a == 0)
		{
			$flag = 1; 		
		}
		else if($a!=0)
		{			
			if($delta < 0)
			{
				$flag = 2;			
			}
			else if($delta == 0)
				{		
					$flag = 3;								
				}
			else 
				{
					$flag = 4;		
				}
          }
		  return $flag;
	}
	if(isset($_POST['a'],$_POST['b'], $_POST['c']))
    {
    	if(is_numeric($_POST['a'])&& is_numeric($_POST['b'])&& is_numeric($_POST['c']))
        {
        	$a = $_POST['a'];
            $b = $_POST['b'];
            $c = $_POST['c'];
			$temp = '';
			$delta = pow($b,2) - 4*$a*$c;
			$flag = GiaiPT($a, $b, $c, $delta);
			if($flag == 1)
            	{
                	$temp = 'Có một nghiệm là: '. -$c/$b;
                }
            else if($flag == 2)
            	{
                	$temp = 'Phuong trình vô nghiệm';
                }
            else if($flag == 3)
            	{
                	$temp = 'Có nghiệm kép là: '. -$b/(2*$a);
            	}
            else if($flag == 4)
            	{
                	$temp = 'Có 2 nghiệm là: x1 = '. (-$b + sqrt($delta))/(2*$a) . ', x2 = ' . (-$b - sqrt($delta))/(2*$a); 
                }	
        }
		else 
			$temp = 'Không tồn tại';
    }
	
?>
<form id="form1" name="form1" method="post" action="#">
  <table width="400" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#FFEBCA">
    <tr align="center">
      <td colspan="2" bgcolor="#FFCC66"><span class="style7">Giải phương trình bậc 2 </span></td>
    </tr>
    <tr>
      <td width="109"><p><span class="style5">&nbsp;Phương trình: </span></p></td>
      <td width="277"><span class="style5">
        <label>
        <input name="a" type="text" class="style9" id="a" value="<?php echo @$a; ?>" size="3"/>
        </label>
        <strong>
        x&sup2; +
        <input name="b" type="text" class="style9" id="b" value="<?php echo @$b; ?>" size="3"/>
        X +  
        <input name="c" type="text" class="style9" id="c" value="<?php echo @$c; ?>" size="3"/>
        = 0 </strong></span></td>
    </tr>
    <tr>
      <td><p><span class="style5">&nbsp;Nghiệm:</span></p></td>
      <td><span class="style5">
        <label>
        <input name="nghiem" type="text" class="style9" id="nghiem" value="<?php echo @$temp;?>" size="35"  style="background:#FFFFCC"/>
        </label>
      </span></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><label>
        <input type="submit" name="Submit" value="Giải phương trình" style="background:#CCFF99" border="1" />
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>
