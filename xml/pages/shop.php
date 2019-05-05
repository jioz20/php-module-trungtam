<script type="text/javascript" src="template/js/jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="template/css/jquery-ui.css">
<?php
$list = 'data/sanpham.xml';
$listproduct = simplexml_load_file( $list );

	$a = '';
	if ( isset( $_GET[ 's' ] ) && $_GET[ 's' ] )
	{
		if($_GET[ 's' ] == 'men')
			$a = "Men's";
		else
			$a = "Women's";
?>
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3><?php echo $a;?><span> Wear  </span></h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="?p=home">Home</a><i>|</i></li>
								<li><?php echo $a;?> Wear</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>
<?php 
	}
?>
<div class="banner-bootom-w3-agileits">
	<div class="container">
		<!-- mens -->
		<?php include 'sidebar_shop.php' ;?>
		<div class="clearfix"></div>

		<?php include 'sanpham.php' ;?>
		<div class="clearfix"></div>		
		</div>	
</div>
<!---->
	<script type='text/javascript'>//<![CDATA[ 
	$(window).load(function(){
	 $( "#slider-range" ).slider({
				range: true,
				min: 0,
				max: 9000,
				values: [ 1000, 7000 ],
				slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
				}
	 });
	$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

	});//]]>  

	</script>



<!---->