
<?php include ("includes/header.php"); ?>

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


					<div class="breadcrumbs">
						<ol class="breadcrumb">
							<li><a href="#">Home</a></li>
							<li><a href="#">Furniture</a></li>
							<li class="breadcrumbs-active"><a href="#">Sofa & Loveseat</a></li>
						</ol>
					</div>
			        
                    <?php
                    $proId = $_GET["view"];
                    $proId = htmlspecialchars($proId);
                    $query=mysql_query("select * from alastairsgroup_account where productID='".mysql_real_escape_string($proId)."'");
                    
                    while($results=mysql_fetch_array($query))                        
					{
                    ?> 

					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
                                <img src="<?php echo $results['image'];?>" alt="<?php echo $results['productName'];?>" />
							</div>
						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<h2><?php echo $results['productName'];?></h2>
								<p>SKU: <?php echo $results['sku'];?></p>
								<img src="img/product-details/rating.png" alt="Rating" /> <br />
								<span>
									<span>$<?php echo $results['price'];?></span>
									<a href="cart.php?prod=<?php echo $results['productID']; ?>" class="btn btn-fefault cart"><i class="fa fa-shopping-cart"> </i> Add to cart</a>
								</span>
								<p><b>Availability:</b> In Stock</p>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li><a href="#details" data-toggle="tab">Details</a></li>
							</ul>

							<p class="descr"><?php echo $results['description'];?></p>
						</div>
					</div><!--/category-tab-->
					<?php } ?>
					<hr />

					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title">Similar Products</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<?php
									$query=mysql_query("select * from alastairsgroup_account order by rand() limit 3");
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
								</div>
							</div>		
						</div>
					</div><!--/recommended_items-->
					
				</div>
			</div>
		</div>
	
<?php include ("includes/footer.php"); ?>