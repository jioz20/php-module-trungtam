<?php
$list = 'data/sanpham.xml';
$listproduct = simplexml_load_file( $list );
?>
<!-- /new_arrivals --> 
<div class="new_arrivals_agile_w3ls_info"> 
	<div class="container">
		<h3 class="wthree_text_info">New <span>Arrivals</span></h3>		
		<div id="horizontalTab">
			<ul class="resp-tabs-list">
				<li> Men's</li>
				<li> Women's</li>
				<li> Bags</li>
				<li> Footwear</li>
			</ul>
			<div class="resp-tabs-container">



				<!--/tab_one-->
				<h2 class="resp-accordion" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span> Men's</h2>
				<div class="tab1 resp-tab-content" aria-labelledby="tab_item-0">
				<?php 
		  		if($listproduct&&$listproduct->sanpham)
				{
					foreach($listproduct->sanpham as $value)
					{					
		 		?>	
					<div class="col-md-3 product-men">
						<div class="men-pro-item simpleCart_shelfItem">
							<div class="men-thumb-item">
								<img src="template/images/m1.jpg" alt="" class="pro-image-front">
								<img src="template/images/m1.jpg" alt="" class="pro-image-back">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href="?p=single&ma=<?php echo $value->ma?>" class="link-product-add-cart">Mua sản phẩm</a>
									</div>
								</div>
								<span class="product-new-top">New</span>

							</div>
							<div class="item-info-product ">
								<h4><a href="?p=single&ma=<?php echo $value->ma?>"><?php echo $value->ten;?></a></h4>
								<div class="info-product-price">
									<span class="item_price"><?php echo $value->gia.'$';?></span>
									<del>$69.71</del>
								</div>
								<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
									<form action="#" method="post">
										<fieldset>
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="business" value=" ">
											<input type="hidden" name="item_name" value="Formal Blue Shirt">
											<input type="hidden" name="amount" value="30.99">
											<input type="hidden" name="discount_amount" value="1.00">
											<input type="hidden" name="currency_code" value="USD">
											<input type="hidden" name="return" value=" ">
											<input type="hidden" name="cancel_return" value=" ">
											<input type="submit" name="submit" value="Thêm vào giỏ hàng" class="button">
										</fieldset>
									</form>
								</div>

							</div>
						</div>
					</div>
				<?php
					}
				} 
				?>		
					<div class="clearfix"></div>
				</div>
				<!--//tab_one-->



				<!--/=tab_two-->				
				<h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span> Women's</h2>
				<div class="tab2 resp-tab-content" aria-labelledby="tab_item-1">
				<?php 
	  		if($listproduct&&$listproduct->sanpham)
			{
				foreach($listproduct->sanpham as $value)
				{					
	 		?>					
					<div class="col-md-3 product-men">
						<div class="men-pro-item simpleCart_shelfItem">
							<div class="men-thumb-item">
								<img src="template/images/w8.jpg" alt="" class="pro-image-front">
								<img src="template/images/w8.jpg" alt="" class="pro-image-back">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href="?p=single&ma=<?php echo $value->ma?>" class="link-product-add-cart">Mua sản phẩm</a>
									</div>
								</div>
								<span class="product-new-top">New</span>

							</div>
							<div class="item-info-product ">
								<h4><a href="?p=single&ma=<?php echo $value->ma?>"><?php echo $value->ten ;?></a></h4>
								<div class="info-product-price">
									<span class="item_price"><?php echo $value->gia.'$';?></span>
									<del>$169.71</del>
								</div>
								<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
									<form action="#" method="post">
										<fieldset>
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="business" value=" ">
											<input type="hidden" name="item_name" value="Reebok Women's Tights">
											<input type="hidden" name="amount" value="30.99">
											<input type="hidden" name="discount_amount" value="1.00">
											<input type="hidden" name="currency_code" value="USD">
											<input type="hidden" name="return" value=" ">
											<input type="hidden" name="cancel_return" value=" ">
											<input type="submit" name="submit" value="Thêm vào giỏ hàng" class="button">
										</fieldset>
									</form>
								</div>

							</div>
						</div>
					</div>
			<?php
				}
			} 
			?>						
					<div class="clearfix"></div>
				</div>

				<!--//tab_two-->


				<!-- tab-3 -->
				<h2 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span> Bags</h2>
				<div class="tab3 resp-tab-content " aria-labelledby="tab_item-2">
			<?php 
	  		if($listproduct&&$listproduct->sanpham)
			{
				foreach($listproduct->sanpham as $value)
				{					
	 		?>	
					<div class="col-md-3 product-men">
						<div class="men-pro-item simpleCart_shelfItem">
							<div class="men-thumb-item">
								<img src="template/images/b1.jpg" alt="" class="pro-image-front">
								<img src="template/images/b1.jpg" alt="" class="pro-image-back">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href="?p=single&ma=<?php echo $value->ma?>" class="link-product-add-cart">Mua sản phẩm</a>
									</div>
								</div>
								<span class="product-new-top">New</span>

							</div>
							<div class="item-info-product ">
								<h4><a href="?p=single&ma=<?php echo $value->ma?>"><?php echo $value->ten ;?></a></h4>
								<div class="info-product-price">
									<span class="item_price"><?php echo $value->gia.'$';?></span>
									<del>$169.71</del>
								</div>
								<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
									<form action="#" method="post">
										<fieldset>
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="business" value=" ">
											<input type="hidden" name="item_name" value=" Laptop Messenger Bag">
											<input type="hidden" name="amount" value="30.99">
											<input type="hidden" name="discount_amount" value="1.00">
											<input type="hidden" name="currency_code" value="USD">
											<input type="hidden" name="return" value=" ">
											<input type="hidden" name="cancel_return" value=" ">
											<input type="submit" name="submit" value="Thêm vào giỏ hàng" class="button">
										</fieldset>
									</form>
								</div>

							</div>
						</div>
					</div>
			<?php
				}
			} 
			?>						
					<div class="clearfix"></div>
				</div>


<!-- tab4 -->

				<h2 class="resp-accordion" role="tab" aria-controls="tab_item-3"><span class="resp-arrow"></span> Footwear</h2>
				<div class="tab4 resp-tab-content" aria-labelledby="tab_item-3">
		<?php 
	  		if($listproduct&&$listproduct->sanpham)
			{
				foreach($listproduct->sanpham as $value)
				{					
	 		?>	
					<div class="col-md-3 product-men">
						<div class="men-pro-item simpleCart_shelfItem">
							<div class="men-thumb-item">
								<img src="template/images/s1.jpg" alt="" class="pro-image-front">
								<img src="template/images/s1.jpg" alt="" class="pro-image-back">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href="?p=single&ma=<?php echo $value->ma?>" class="link-product-add-cart">Mua sản phẩm</a>
									</div>
								</div>
								<span class="product-new-top">New</span>

							</div>
							<div class="item-info-product ">
								<h4><a href="?p=single&ma=<?php echo $value->ma?>"><?php echo $value->ten ;?></a></h4>
								<div class="info-product-price">
									<span class="item_price"><?php echo $value->gia.'$';?></span>
									<del>$89.71</del>
								</div>
								<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
									<form action="#" method="post">
										<fieldset>
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="business" value=" ">
											<input type="hidden" name="item_name" value="Running Shoes">
											<input type="hidden" name="amount" value="30.99">
											<input type="hidden" name="discount_amount" value="1.00">
											<input type="hidden" name="currency_code" value="USD">
											<input type="hidden" name="return" value=" ">
											<input type="hidden" name="cancel_return" value=" ">
											<input type="submit" name="submit" value="Thêm vào giỏ hàng" class="button">
										</fieldset>
									</form>
								</div>

							</div>
						</div>
					</div>
			<?php
				}
			} 
			?>	

					<div class="clearfix"></div>
				</div>
			</div>
			</div>
		</div>	
</div>
<!-- //new_arrivals --> 