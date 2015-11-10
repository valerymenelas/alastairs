
<?php include ("includes/header.php"); ?>

		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title category-title">Shop By Category</h4>
								</div>
							</div>
							
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
					
					<hr />
                    <!--Rating-->
                    <div class="row category-tab">
                   <ul class="nav nav-tabs">
								<li><a href="#areys" data-toggle="tab">Rating And Review</a></li>
							</ul>
                    <form method="post">
                        <div class="col-sm-4" id="areys">
                            <p class="descr"> 
                            <input type="hidden" id="rates" name="rating"/>
                            <p><label>Rate:</label></p>
                            <div class='product'>
       								
                                <div id="rating_1" class="ratings">
                                    <div class="star_1 ratings_stars" id="1"></div>
                                    <div class="star_2 ratings_stars" id="2"></div>
                                    <div class="star_3 ratings_stars" id="3"></div>
                                    <div class="star_4 ratings_stars" id="4"></div>
                                    <div class="star_5 ratings_stars" id="5"></div>
                                </div>
                            </div>
       					 </p>
                            </div>
                            <div class="col-sm-4">
                                
                        <input type="hidden" value="<?php echo $results['productID']; ?>" name="product_id" />
                         <p><label>Title</label></p>
                         <p><input type="text" name="title" /></p>
                            </div>
                     <div class="col-sm-4">
                         <p><label>Description</label></p>
                         <p><textarea name="product_description"></textarea></p>
                         <p><input type="submit" value="Submit Review" name="btn_review" /></p>
                         	</div>
                          </form> 
                          </div> 
                           <?php 
						   if(isset($_REQUEST["btn_review"]))
								{
									$rating=$_REQUEST["rating"];
									$product_title=$_REQUEST["title"];
									$product_description=$_REQUEST["product_description"];
									$product_id=$_REQUEST["product_id"];
									
									//$query=mysql_query("UPDATE SET ratings title='$product_title',description='$product_description' WHERE ");
									$query=mysql_query("INSERT INTO rating_view (title,description,product_id,rate ) 
									 VALUES ('$product_title','$product_description','$product_id','$rating')") or die(mysql_error());
									
									
								}
								//echo "SELECT * FORM rating_view WHRE product_id=".$results['productID'];
					$daat = mysql_query("SELECT * FROM rating_view WHERE product_id=".$results['productID']);
					?>
                    <table class="table">
    <thead>
      <tr>
        <th>Rating</th>
        <th>Title</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
    <?php
					while($row = mysql_fetch_assoc($daat))
					{ //print_r($row);
						?>
      <tr>
        <td><?php echo $row['rate'];?></td>
        <td><?php echo $row['title'];?></td>
        <td><?php echo $row['description'];?></td>
      </tr>
      
   
                        <?php
					}
						   ?>
                            </tbody>
  </table>
 
                            
						<?php } ?>
                        
                        <!--end rating-->
                    
                    

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