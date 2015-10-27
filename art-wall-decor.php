<?php include ("includes/header.php"); ?>
	
	
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
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Art Wall & Décor</h2>
						<?php
						$query=mysql_query("select * from alastairsgroup_account where category='art&walldecor'");
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
                                        <a href="cart.php?prod=<?php echo $results['productID']; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
								</div>
							</div>
						</div>
						<?php } ?>

						
					</div><!--features_items-->
				</div>
			</div>
	</section>
	
<?php include ('includes/footer.php'); ?>