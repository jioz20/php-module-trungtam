<?php 
	class lol
	{
		protected $a;
		protected $b;
		protected $c;
		public function lol($a, $b, $c)
		{
			$this->a = $a;
			$this->b = $b;
			$this->c = $c;
		}
		public function __construct($arrInfo)
		{
			$this->a = $arrInfo['a'];
			$this->b = $arrInfo['b'];
			$this->c = $arrInfo['c'];
		}
		public function geta()
		{
			return $this->a;		
		}
		public function getb()
		{
			return $this->b;		
		}
		public function getc()
		{
			return $this->c;
		}
		public function ShowAll()
		{
			echo $this->geta() . " - ";
			echo $this->getb(). " - ";
			echo $this->getc();
		}		

	}
?>