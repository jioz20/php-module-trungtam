<?php
if ( !isset( $_GET[ 'ma' ] ) || !$_GET[ 'ma' ] )
	chuyentrang( '?p=home' );
$ma = $_GET[ 'ma' ];
$path = 'data/sanpham.xml';
$doc = new DOMDocument();
$nodecantim = edit_xml( $path, $ma, $doc );
?>
<div class="banner-bootom-w3-agileits">
	<div class="container">
<div class="col-md-4 single-right-left ">
			<div class="grid images_3_of_2">
				<div class="flexslider">
					
					
					<div class="clearfix"></div>
				<div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 1000%; transition-duration: 0s; transform: translate3d(-680.042px, 0px, 0px);"><li data-thumb="template/images/d3.jpg" class="clone" aria-hidden="true" style="width: 340.021px; float: left; display: block;">
							<div class="thumb-image"> <img src="template/images/d3.jpg" data-imagezoom="true" class="img-responsive" draggable="false"> </div>
						</li>
						<li data-thumb="template/images/d2.jpg" style="width: 340.021px; float: left; display: block;" class="">
							<div class="thumb-image"> <img src="template/images/d2.jpg" data-imagezoom="true" class="img-responsive" draggable="false"> </div>
						</li>
						<li data-thumb="template/images/d1.jpg" class="flex-active-slide" style="width: 340.021px; float: left; display: block;">
							<div class="thumb-image"> <img src="template/images/d1.jpg" data-imagezoom="true" class="img-responsive" draggable="false"> </div>
						</li>	
						<li data-thumb="template/images/d3.jpg" style="width: 340.021px; float: left; display: block;" class="">
							<div class="thumb-image"> <img src="template/images/d3.jpg" data-imagezoom="true" class="img-responsive" draggable="false"> </div>
						</li>
					<li data-thumb="template/images/d2.jpg" style="width: 340.021px; float: left; display: block;" class="clone" aria-hidden="true">
							<div class="thumb-image"> <img src="template/images/d2.jpg" data-imagezoom="true" class="img-responsive" draggable="false"> </div>
						</li></ul></div><ol class="flex-control-nav flex-control-thumbs"><li><img src="template/images/d2.jpg" class="" draggable="false"></li><li><img src="template/images/d1.jpg" draggable="false" class="flex-active"></li><li><img src="template/images/d3.jpg" draggable="false" class=""></li></ol><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev" href="#">Previous</a></li><li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li></ul></div>	
			</div>
		</div>
			<div class="col-md-8 single-right-left simpleCart_shelfItem">
				<h3><?php echo $nodecantim->getElementsByTagName('ten')->item(0)->nodeValue; ?>  (<?php echo $nodecantim->getElementsByTagName('ma')->item(0)->nodeValue; ?>)</h3>
				<p><span class="item_price"><?php echo $nodecantim->getElementsByTagName('gia')->item(0)->nodeValue.'$'; ?></span> <del>- $900</del></p>
				<div class="rating1">
					<span class="starRating">
						<input id="rating5" type="radio" name="rating" value="5">
						<label for="rating5">5</label>
						<input id="rating4" type="radio" name="rating" value="4">
						<label for="rating4">4</label>
						<input id="rating3" type="radio" name="rating" value="3" checked="">
						<label for="rating3">3</label>
						<input id="rating2" type="radio" name="rating" value="2">
						<label for="rating2">2</label>
						<input id="rating1" type="radio" name="rating" value="1">
						<label for="rating1">1</label>
					</span>
				</div>
				<div class="description">
					<h5>Check delivery, payment options and charges at your location</h5>
					<form action="#" method="post">
						<input type="text" value="Enter pincode" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter pincode';}" required="">
						<input type="submit" value="Check">
					</form>
				</div>
				<div class="color-quality">
					<div class="color-quality-right">
						<h5>Quality :</h5>
						<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
							<option value="null">5 Qty</option>
							<option value="null">6 Qty</option> 
							<option value="null">7 Qty</option>					
							<option value="null">10 Qty</option>								
						</select>
					</div>
				</div>
				<div class="occasional">
					<h5>Types :</h5>
					<div class="colr ert">
						<label class="radio"><input type="radio" name="radio" checked=""><i></i>Casual Shoes</label>
					</div>
					<div class="colr">
						<label class="radio"><input type="radio" name="radio"><i></i>Sneakers </label>
					</div>
					<div class="colr">
						<label class="radio"><input type="radio" name="radio"><i></i>Formal Shoes</label>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="occasion-cart">
					<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
						<form action="#" method="post">
							<fieldset>
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1">
								<input type="hidden" name="business" value=" ">
								<input type="hidden" name="item_name" value="Wing Sneakers">
								<input type="hidden" name="amount" value="650.00">
								<input type="hidden" name="discount_amount" value="1.00">
								<input type="hidden" name="currency_code" value="USD">
								<input type="hidden" name="return" value=" ">
								<input type="hidden" name="cancel_return" value=" ">
								<input type="submit" name="submit" value="Add to cart" class="button">
							</fieldset>
						</form>
					</div>

				</div>
				<ul class="social-nav model-3d-0 footer-social w3_agile_social single_page_w3ls">
					<li class="share">Share On : </li>
					<li><a href="#" class="facebook">
						<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
						<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
						<li><a href="#" class="twitter"> 
							<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
							<li><a href="#" class="instagram">
								<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
								<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
								<li><a href="#" class="pinterest">
									<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
									<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
								</ul>

							</div>
							<div class="clearfix"> </div>
							<!-- /new_arrivals --> 
							<div class="responsive_tabs_agileits"> 
								<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
									<ul class="resp-tabs-list">
										<li class="resp-tab-item resp-tab-active" aria-controls="tab_item-0" role="tab">Description</li>
										<li class="resp-tab-item" aria-controls="tab_item-1" role="tab">Reviews</li>
										<li class="resp-tab-item" aria-controls="tab_item-2" role="tab">Information</li>
									</ul>
									<div class="resp-tabs-container">
										<!--/tab_one-->
										<h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>Description</h2><div class="tab1 resp-tab-content resp-tab-content-active" style="display:block" aria-labelledby="tab_item-0">

											<div class="single_page_agile_its_w3ls">
												<h6>Lorem ipsum dolor sit amet</h6>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>
												<p class="w3ls_para">Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>
											</div>
										</div>
										<!--//tab_one-->
										<h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>Reviews</h2><div class="tab2 resp-tab-content" aria-labelledby="tab_item-1">

											<div class="single_page_agile_its_w3ls">
												<div class="bootstrap-tab-text-grids">
													<div class="bootstrap-tab-text-grid">
														<div class="bootstrap-tab-text-grid-left">
															<img src="template/images/t1.jpg" alt=" " class="img-responsive">
														</div>
														<div class="bootstrap-tab-text-grid-right">
															<ul>
																<li><a href="#">Admin</a></li>
																<li><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i> Reply</a></li>
															</ul>
															<p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget.Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis 
																suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem 
															vel eum iure reprehenderit.</p>
														</div>
														<div class="clearfix"> </div>
													</div>
													<div class="add-review">
														<h4>add a review</h4>
														<form action="#" method="post">
															<input type="text" name="Name" required="Name">
															<input type="email" name="Email" required="Email"> 
															<textarea name="Message" required=""></textarea>
															<input type="submit" value="SEND">
														</form>
													</div>
												</div>

											</div>
										</div>
										<h2 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span>Information</h2><div class="tab3 resp-tab-content" aria-labelledby="tab_item-2">

											<div class="single_page_agile_its_w3ls">
												<h6>Big Wing Sneakers (Navy)</h6>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>
												<p class="w3ls_para">Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>
											</div>
										</div>
									</div>
								</div>	
							</div>
							<!-- //new_arrivals --> 
							<!--/slider_owl-->

				<?php include 'feature_arrivals.php';?>
						</div>
					</div>
<link rel="stylesheet" href="template/css/flexslider.css" type="text/css" media="screen" />
					<!-- single -->
<script src="template/js/imagezoom.js"></script>
<!-- single -->
<script src="template/js/jquery.flexslider.js"></script>
						<script>
						// Can also be used with $(document).ready()
							$(window).load(function() {
								$('.flexslider').flexslider({
								animation: "slide",
								controlNav: "thumbnails"
								});
							});
						</script>
					<!-- //FlexSlider-->
<!-- //script for responsive tabs -->	
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>