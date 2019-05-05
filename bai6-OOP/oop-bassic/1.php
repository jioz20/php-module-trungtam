<?php
class phanso
{
	var $tu;
	var $mau;
	
	function __construct($t, $m)
	{		
		$this->tu = $t;
		$this->mau = $m;
	}
	function __destruct()
	{
	}
	
	function cong(phanso &$ps)
	{
		$t = $this->tu * $ps->mau + $this->mau*$ps->tu;
		$m = $this->mau*$ps->mau;
		$ps->tu = $t;
		$ps->mau = $m;
		return $ps;
	}
	
	function tru(phanso &$ps)
	{
		$t = $this->tu * $ps->mau - $this->mau*$ps->tu;
		$m = $this->mau*$ps->mau;
		$ps->tu = $t;
		$ps->mau = $m;
		return $ps;
	}
	
	function nhan(phanso &$ps)
	{
		$t = $this->tu * $ps->tu;
		$m = $this->mau * $ps->mau;
		$ps->tu = $t;
		$ps->mau = $m;
		return $ps;
	}
	function chia(phanso &$ps)
	{
		$t = $this->tu * $ps->mau;
		$m = $this->mau * $ps->tu;
		$ps->tu = $t;
		$ps->mau = $m;
		return $ps;
	}
	function kq()
	{
		echo $this->tu. '/'. $this->mau;
	}
}
	$ps  = new phanso(1,2);
	$ps2 = new phanso(3,4);
	
	// $kq = $ps->nhan($ps2);
	
	$kq = $ps->cong($ps2);
	$kq->kq();
?>