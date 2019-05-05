<?php
	require_once 'openid.php';
	$openid = new LightOpenID('localhost');
	
	if(!$openid->mode)
	{
		$openid->identity = 'https://accounts.google.com/AddSession/signinchooser?hl=vi&flowName=GlifWebSignIn&flowEntry=AddSession&cid=0&navigationDirection=forward';
		$openid->required  = array('namePerson/friendly', 'contact/email');
		echo '<a href ="">Login with Gmail</a>';
	}
	else if($openid->mode == "cancel")
		echo 'Thất bại';
	else 
	{
		if($openid->validate() == true)
		{
			
		}
	}
?>