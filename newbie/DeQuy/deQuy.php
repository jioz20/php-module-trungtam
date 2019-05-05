<?php
	function GiaiThua($n)
	{
		if($n <= 1)
			return 1;
		else 
			return GiaiThua($n-1)*$n;
	}
	echo 'Giai thừa:' .''.GiaiThua(4). '</br>';

	function Tong($n)
	{
		if($n <=0)
			return 0;
		else 
			return $n + Tong($n - 1);
	}
	echo 'Tổng là: '. '' .Tong(4);
?>