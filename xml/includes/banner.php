<?php
$list = 'data/loaisanpham.xml';
$listproduct_type = simplexml_load_file( $list );
$list = 'data/loaisanpham1.xml';
$listproduct_type1 = simplexml_load_file( $list );
?>
<!-- banner -->
<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
					<li class="active menu__item menu__item--current"><a class="menu__link" href="index.php">Trang chủ <span class="sr-only">(Trang chủ)</span></a></li>
					<li class=" menu__item"><a class="menu__link" href="template/about.html">Giới thiệu</a></li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Thời trang Nam <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-6 multi-gd-img1 multi-gd-text ">
										<a href="template/mens.html"><img src="template/images/top2.jpg" alt=" "/></a>
									</div>
									<div class="col-sm-3 multi-gd-img">
									<?php 
							  		if($listproduct_type&&$listproduct_type->loaisanpham)
									{
										foreach($listproduct_type->loaisanpham as $value)
										{					
							 		 ?>
										<ul class="multi-column-dropdown">
											<li><a href="?p=shop&s=men"><?php echo $value->ten; ?></a></li>
										</ul>
									<?php 
										}
									}
									?>
									</div>
									<div class="col-sm-3 multi-gd-img">
										
									<?php 
							  		if($listproduct_type1&&$listproduct_type1->loaisanpham)
									{
										foreach($listproduct_type1->loaisanpham as $value)
										{					
							 		 ?>
							 		 <ul class="multi-column-dropdown">
										<li><a href="?p=shop&s=men"><?php echo $value->ten?></a></li>
									</ul>
									<?php 
										}
									}
									?>
										
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Thời trang Nữ <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
									<?php 
							  		if($listproduct_type&&$listproduct_type->loaisanpham)
									{
										foreach($listproduct_type->loaisanpham as $value)
										{					
							 		 ?>
										<ul class="multi-column-dropdown">
											<li><a href="?p=shop&s=women"><?php echo $value->ten; ?></a></li>
										</ul>
									<?php 
										}
									}
									?>
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
								<?php 
						  		if($listproduct_type1&&$listproduct_type1->loaisanpham)
								{
									foreach($listproduct_type1->loaisanpham as $value)
									{					
						 		 ?>
											<li><a href="?p=shop&s=women"><?php echo $value->ten?></a></li>
								<?php 
									}
								}
								?>
										</ul>
									</div>
									<div class="col-sm-6 multi-gd-img multi-gd-text ">
										<a href="womens.html"><img src="template/images/top1.jpg" alt=" "/></a>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					<li class=" menu__item"><a class="menu__link" href="template/contact.html">Liên hệ</a></li>
				  </ul>
				</div>
			  </div>
			</nav>	
		</div>
		<div class="top_nav_right">
			<div class="wthreecartaits wthreecartaits2 cart cart box_1"> 
						<form action="#" method="post" class="last"> 
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="display" value="1">
						<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
					</form>  
  
						</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //banner-top -->