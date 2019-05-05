<?php 
	class User
	{
		private $user;
		private $pass;
		private $fullName;
		
		public function __construct()
		{
			$this->user 	= "Kis";
			$this->pass 	= '2010';
			$this->fullName = "Kis Nguyen";
		}
		public function __destruct()
		{
			$_SESSION['user'] = serialize($this);
		}
		
	}
?>