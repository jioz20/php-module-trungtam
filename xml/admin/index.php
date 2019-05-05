<?php
ob_start();
session_start();
include '../libs/functions.php';
if(isset($_COOKIE['login']) && $_COOKIE['login'])
{
	$_SESSION['login'] = true;
	$_SESSION['ten'] = $_COOKIE['ten'];
	$_SESSION['avatar'] = $_COOKIE['avatar'];
}
if ( islogin() == false ) 
	chuyentrang('login.php');
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Welcome to admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design"/>
	<script type="application/x-javascript">
		addEventListener( "load", function () {
			setTimeout( hideURLbar, 0 );
		}, false );

		function hideURLbar() {
			window.scrollTo( 0, 1 );
		}

		function show_confirm22()
		{
			var r=confirm("The entry will be parmanently deleted!");
			if (r==true)
				{return true;
				}
				else
				{
					return false;
				}
			}

			
		</script>
		<!-- Bootstrap Core CSS -->
		<link href="template/css/bootstrap.min.css" rel='stylesheet' type='text/css'/>
		<!-- Custom CSS -->
		<link href="template/css/style.css" rel='stylesheet' type='text/css'/>
		<!-- Graph CSS -->
		<link href="template/css/lines.css" rel='stylesheet' type='text/css'/>
		<link href="template/css/hvr.css" rel='stylesheet' type='text/css'/>
		<link href="template/css/button.css" rel='stylesheet' type='text/css'/>
		<link href="template/css/font-awesome.css" rel="stylesheet">
		<!-- jQuery -->
		<script src="template/js/jquery.min.js"></script>
		<!----webfonts--->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
		<!---//webfonts--->
		<!-- Nav CSS -->
		<link href="template/css/custom.css" rel="stylesheet">
		<!-- Metis Menu Plugin JavaScript -->
		<script src="template/js/metisMenu.min.js"></script>
		<script src="template/js/custom.js"></script>
		<!-- Graph JavaScript -->
		<script src="template/js/d3.v3.js"></script>
		<script src="template/js/rickshaw.js"></script>
	</head>

	<body>
		<div id="wrapper">
			<!-- Navigation -->
			<nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
				<?php include 'includes/header.php';?>
				<?php include "includes/sidebar.php"; ?>
			</nav>
			<div id="page-wrapper">
				<?php 
	          $page = isset($_GET['p']) && $_GET['p']? $_GET['p']:'home'; //Kiểm tra sự tồn tại của tham số vừa truyền vào

			  $path  =  'pages/'.$page.'.php'; //Dùng $bien để tạo đường dẫn tới cái page(tham số) vừa truyền vào đó

			  if(file_exists($path)) //Kiểm tra cái file trong đường dẫn đó có tồn tại hay không.
				  include  $path; //Nếu có thì gọi cái đường dẫn đó vào
				  else
			  	include 'pages/404.php'; //Không thì trả về là not found
			  ?>
			</div>
		</div>
		<!-- /#wrapper -->
		<!-- Bootstrap Core JavaScript -->
		<script src="template/js/bootstrap.min.js"></script>
	</body>
</script>
<script language="javascript">
	$(function(){
    // add multiple select / deselect functionality
    $("#selectall").click(function () {
    	$('.case').attr('checked', this.checked);
    });
    // if all checkbox are selected, check the selectall checkbox
    // and viceversa
    $(".case").click(function(){

    	if($(".case").length == $(".case:checked").length) {
    		$("#selectall").attr("checked", "checked");
    	} else {
    		$("#selectall").removeAttr("checked");
    	}

    });
});
</script>
</html>
<?php
ob_end_flush();
?>