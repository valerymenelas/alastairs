<?php include ("includes/header.php"); ?>
	
	<div id="products_box">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					
					<?php 
	
								if(isset($_POST['search'])){
								
								$search_query = $_POST['user_query'];
								
								$get_product = "select * from alastairsgroup_account where productKeywords like '%$search_query%'";

								$run_product = mysql_query( $get_product); 
								
								while($row_product=mysql_fetch_array($run_product)){
								
									$product_id = $row_product['productID'];
									$product_name = $row_product['productName'];
									$product_image = $row_product['image'];
									$product_price = $row_product['price'];
									
								
									echo "
											<div id='single_product'>
											
												
												
												<img src='$product_image'  width='180' height='180' />

												<h2><b> $ $product_price </b></h2>

												<p class='imgName'><a href='product-details.php?view' >$product_name</a></p>
												
												
												
												<a href='index.php?product_id=$product_id' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i><button>Add to Cart</button></a>
												
											</div>
									
									
									";
								
								}
								}
					?>
				</div>	
				</div>
			</div>
		</div>
	
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">

						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="art-wall-decor.php">Art & Wall Décor</a></h4>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="lighting.php">Lighting</a>
									</h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="rugs-curtains.php">Rugs & Curtains</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="kitchen.php">Kitchen</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="gifts.php">Gifts</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="clocks.php">Clocks</a></h4>
								</div>
							</div>
						</div><!--/category-products-->
					</div>
				</div>
				
				<div class="col-sm-9">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Featured Items</h2>
						<?php
						$query=mysql_query("select * from alastairsgroup_account order by rand() limit 6");
						while($results=mysql_fetch_array($query))
						{
						?>

						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
                                    <a href="product-details.php?view=<?php echo $results['productID']; ?>"><img src="<?php echo $results['image'];?>" alt="Product" /></a>

                                    <h2>$<?php echo $results['price'];?></h2>
									<p><a href="product-details.php?view=<?php echo $results['productID']; ?>"><?php echo $results['productName'];?></a></p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
								</div>
							</div>
						</div>

						<?php } ?>
					</div><!--features_items-->
					
					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">recommended items</h2>

						<?php
						$query=mysql_query("select * from alastairsgroup_account where category='lighting'");
                        while($results=mysql_fetch_array($query))
						{
						?>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	

									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
                                    				<a href="product-details.php?view=<?php echo $results['productID']; ?>"><img src="<?php echo $results['image'];?>" alt="Product" /></a>

                                    				<h2>$<?php echo $results['price'];?></h2>
													<p><a href="product-details.php?view=<?php echo $results['productID']; ?>"><?php echo $results['productName'];?></a></p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
											</div>
										</div>
									</div>

									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
                                    				<a href="product-details.php?view=<?php echo $results['productID']; ?>"><img src="<?php echo $results['image'];?>" alt="Product" /></a>

                                    				<h2>$<?php echo $results['price'];?></h2>
													<p><a href="product-details.php?view=<?php echo $results['productID']; ?>"><?php echo $results['productName'];?></a></p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
											</div>
										</div>
									</div>

									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
                                    				<a href="product-details.php?view=<?php echo $results['productID']; ?>"><img src="<?php echo $results['image'];?>" alt="Product" /></a>

                                    				<h2>$<?php echo $results['price'];?></h2>
													<p><a href="product-details.php?view=<?php echo $results['productID']; ?>"><?php echo $results['productName'];?></a></p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
											</div>
										</div>
									</div>
									
								</div>
								<div class="item">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
                                    				<img src="<?php echo $results['image'];?>" alt="Product" />
                                    				<h2>$<?php echo $results['price'];?></h2>
													<p><?php echo $results['productName'];?></p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												<?php } ?>

											</div>
										</div>
									</div>
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>

<?php include ("includes/footer.php"); ?>