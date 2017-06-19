
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Sportswear
										</a>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="">Nike </a></li>
											<li><a href="">Under Armour </a></li>
											<li><a href="">Adidas </a></li>
											<li><a href="">Puma</a></li>
											<li><a href="">ASICS </a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Mens
										</a>
									</h4>
								</div>
								<div id="mens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="">Fendi</a></li>
											<li><a href="">Guess</a></li>
											<li><a href="">Valentino</a></li>
											<li><a href="">Dior</a></li>
											<li><a href="">Versace</a></li>
											<li><a href="">Armani</a></li>
											<li><a href="">Prada</a></li>
											<li><a href="">Dolce and Gabbana</a></li>
											<li><a href="">Chanel</a></li>
											<li><a href="">Gucci</a></li>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#womens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Womens
										</a>
									</h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="">Fendi</a></li>
											<li><a href="">Guess</a></li>
											<li><a href="">Valentino</a></li>
											<li><a href="">Dior</a></li>
											<li><a href="">Versace</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Kids</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Fashion</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Households</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Interiors</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Clothing</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Bags</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Shoes</a></h4>
								</div>
							</div>
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href=""> <span class="pull-right">(50)</span>Acne</a></li>
									<li><a href=""> <span class="pull-right">(56)</span>Grüne Erde</a></li>
									<li><a href=""> <span class="pull-right">(27)</span>Albiro</a></li>
									<li><a href=""> <span class="pull-right">(32)</span>Ronhill</a></li>
									<li><a href=""> <span class="pull-right">(5)</span>Oddmolly</a></li>
									<li><a href=""> <span class="pull-right">(9)</span>Boudestijn</a></li>
									<li><a href=""> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->
						
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
							<a href="javascript:void(0)">
								<img id="img_<?= $data->product_id; ?>" style="width: 266px;height: 381px;" src="<?php echo Yii::$app->request->baseUrl; ?>/images/product-details/<?php echo $data->image_product; ?>" />
								</a>
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
										<div class="item active">
										  <a href=""><img src="<?php echo Yii::$app->request->baseUrl; ?>/images/product-details/similar1.jpg" alt=""></a>
										  <a href=""><img src="<?php echo Yii::$app->request->baseUrl; ?>/images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="<?php echo Yii::$app->request->baseUrl; ?>/images/product-details/similar3.jpg" alt=""></a>
										</div>
										<div class="item">
										  <a href=""><img src="<?php echo Yii::$app->request->baseUrl; ?>/images/product-details/similar1.jpg" alt=""></a>
										  <a href=""><img src="<?php echo Yii::$app->request->baseUrl; ?>/images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="<?php echo Yii::$app->request->baseUrl; ?>/images/product-details/similar3.jpg" alt=""></a>
										</div>
										<div class="item">
										  <a href=""><img src="<?php echo Yii::$app->request->baseUrl; ?>/images/product-details/similar1.jpg" alt=""></a>
										  <a href=""><img src="<?php echo Yii::$app->request->baseUrl; ?>/images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="<?php echo Yii::$app->request->baseUrl; ?>/images/product-details/similar3.jpg" alt=""></a>
										</div>
										
									</div>

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>
						</div>
						<form action="<?= Yii::$app->request->baseUrl.'/cart/addcart/'.$data->product_id ?>" method="" id="form-detail">
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<a href="javascript:void(0)">
									<img src="<?php echo Yii::$app->request->baseUrl; ?>/images/product-details/new.jpg" class="newarrival" alt="" />
								</a>
								<h2><a href="#"><?php echo $data->name_product; ?></a></h2>
								<p>Web ID: <a href="#" id="txtProPrice_<?= $data->product_id ?>"><?php echo $data->product_id; ?></a></p>
								<img src="<?php echo Yii::$app->request->baseUrl; ?>/images/product-details/rating.png" alt="" />
								<span>
									<span>US $<?php echo $data->price_product; ?></span>
									<label>Quantity:</label>
									<input type="number" name="quantity_<?= $data->product_id; ?>" id="quantity_<?= $data->product_id; ?>" value="3" />
									<a href="#"  onclick="addcartsub(<?= $data->product_id ?>)" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i> Buy now
									</a>
									</form>
								</span>
								<p><b>Availability:</b> In Stock</p>
								<p><b>Condition:</b> New</p>
								<p><b>Brand:</b> E-SHOPPER</p>
								<a href=""><img src="<?php echo Yii::$app->request->baseUrl; ?>/images/product-details/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
				</div>
			</div>
		</div>
	</section>
	<script type="text/javascript">
		function addcartsub(id){
			quantity = $("#quantity_"+id).val();
			if(quantity<1){
				alert("Số lượng phải lớn hơn hoặc bằng 1");
			}
			else{
				$("#form-detail").submit();
			}
			

		}
		/*$( "#target" ).submit(function( event ) {
		  alert( "Handler for .submit() called." );
		  event.preventDefault();
		});*/

	</script>