<?php
session_start();
include '../libs/functions.php';
if (islogin() )
	chuyentrang();
if ( isset( $_POST[ 'tendangnhap' ], $_POST[ 'matkhau' ] ) ) 
{
	if ( trim( $_POST['tendangnhap'] ) && trim($_POST['matkhau'] ) ) 
	{
		$path = '../data/nguoidung.xml';
		$listuser = simplexml_load_file( $path );
		if ( $listuser && $listuser->nguoidung ) {
			$flag = false;
			foreach ( $listuser->nguoidung as $value ) 
			{
				if ( $value->tendangnhap == trim( $_POST['tendangnhap'] ) && $value->matkhau == md5(trim( $_POST['matkhau'] )) ) 
				{
					echo $value->matkhau;
					$flag = true;
					break;
				}
			}
			if ( $flag == true ) 
			{
				$_SESSION[ 'login' ] = true;
				$_SESSION[ 'ten' ] = ( string )$value->ten;
				$_SESSION[ 'ma' ] = ( string )$value->ma;
				$_SESSION['avatar'] = ( string )$value->avatar;
				//Ghi thêm cookie
				
					if(isset($_POST['check'])&& $_POST['check'])
					{
						$time = time()+86400;
						setcookie('login',true,$time);
						setcookie('ten',$_SESSION['ten'],$time);
						setcookie('avatar',$_SESSION['avatar'],$time);	
					}
				chuyentrang();
			}
		}
	}
}
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>LOGIN</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="keywords" content="Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design"/>
	<script type="application/x-javascript">
		addEventListener( "load", function () {
			setTimeout( hideURLbar, 0 );
		}, false );

		function hideURLbar() {
			window.scrollTo( 0, 1 );
		}
	</script>
	<!-- Bootstrap Core CSS -->
	<link href="template/css/bootstrap.min.css" rel='stylesheet' type='text/css'/>
	<!-- Custom CSS -->
	<link href="template/css/style.css" rel='stylesheet' type='text/css'/>
	<link href="template/css/font-awesome.css" rel="stylesheet">
	<!-- jQuery -->
	<script src="template/js/jquery.min.js"></script>
	<!----webfonts--->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
	<!---//webfonts--->
	<!-- Bootstrap Core JavaScript -->
	<script src="template/js/bootstrap.min.js"></script>
</head>

<body id="login">
	<div class="login-logo">
		<a href="../index.php"><img src="template/images/logo.png" alt=""/></a>
	</div>

	<h2 class="form-heading">login</h2>
	<div class="app-cam">
		<form action="" method="post">
			<input type="text" class="text" name="tendangnhap" placeholder="Tên tài khoản">
			<div class="clearfix"></div>
			<input type="password" name="matkhau" placeholder="Mật khẩu">
			<div class="clearfix"></div>
			<div class="submit">
				<input type="submit" value="Login"/>
				<input type="checkbox" value="1" name="check" class="check"> Nhớ mật khẩu
			</div>
			<div class="login-social-link">
				<a href="index.php" class="facebook">
              Facebook
          </a>
			
				<a href="index.php" class="twitter">
              Twitter
          </a>
			
			</div>
		</form>
	</div>
	<div class="copy_layout login">
		Design by <a href="https://www.facebook.com/beotube20" target="_blank">@Béo từ bé</a>
		</p>
	</div>
</body>

</html>