		<div class="single-pro">
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
								<a href="?p=single&ma=<?php echo $value->ma; ?>" class="link-product-add-cart">Mua sản phẩm</a>
							</div>
						</div>
						<span class="product-new-top">Mới</span>
					</div>

					<div class="item-info-product ">
						<h4><a href="?p=single&ma=<?php echo $value->ma; ?>"><?php echo $value->ten;?></a></h4>
						<div class="info-product-price">
							<span class="item_price"><?php echo $value->gia.'$';?></span>
							<del>1000$</del>
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
									<input type="submit" name="submit" value="Add to cart" class="button">
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
		</div>