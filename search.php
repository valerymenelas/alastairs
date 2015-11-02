<?php include ("includes/header.php"); ?>
	
	<div id="products_box">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">

					<h3>Search Results</h3>
					
					<?php 
	
								if(isset($_GET['search'])){
								$search_query = $_GET['user_query'];
								$get_product = "select * from alastairsgroup_account where productKeywords like '%$search_query%'";
								$run_product = mysql_query( $get_product); 
								while($row_product=mysql_fetch_array($run_product)){
									$product_id = $row_product['productID'];
									$product_name = $row_product['productName'];
									$product_image = $row_product['image'];
									$product_price = $row_product['price'];
									
								
									echo "
										<div class='col-sm-4'>
											<div id='single_product'>											
												<img src='$product_image' alt='search-image'  />
												<h2><b> $ $product_price </b></h2>
												<p><a href='product-details.php?view= $product_id'> $product_name</a></p>
												<a href='cart.php?prod=$product_id' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to Cart</a>

											</div>
											</div>
									
									";
								
								}
								}
					?>
				</div>	
				</div>
			</div>
		</div>

<?php include ("includes/footer.php"); ?>