<?php include ("includes/header.php"); ?>

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Cart</li>
				</ol>
			</div>
            <?php
                if(!empty($_GET['prod'])){
                    $proid = $_GET['prod'];
                } 
                if(!empty($_GET['iprod'])){
                    $iproid = $_GET['iprod'];
                }
                if(!empty($_GET['rprod'])){
                    $rproid = $_GET['rprod'];
                } 
                
                //add to cart
                if(!empty($proid)){
                   if(isset($_SESSION['cart'][$proid]))
                    {
                     $qty = $_SESSION['cart'][$proid] + 1;
                    }
                    else
                    {
                     $qty=1;
                    }
                    $_SESSION['cart'][$proid]=$qty; 
                }
                
                //increase quatity
                if(!empty($iproid)){
                   if(isset($_SESSION['cart'][$iproid]))
                    {
                     $qty = $_SESSION['cart'][$iproid] - 1;
                     $_SESSION['cart'][$iproid]=$qty; 
                    }
                    if($_SESSION['cart'][$iproid]<=0){
                        unset($_SESSION['cart'][$iproid]); 
                    }
                }
                
                //remove item
                if(!empty($rproid)){
                   if(isset($_SESSION['cart'][$rproid]))
                    {
                     unset($_SESSION['cart'][$rproid]);
                    }
                }
                if(!empty($proid)){
                    $proid = htmlspecialchars($proid);
                    $query = mysql_query("SELECT * FROM alastairsgroup_account WHERE productID='".mysql_real_escape_string($proid)."'");
                    if (mysql_num_rows($query) > 0) {
                        while($results=mysql_fetch_array($query)){
                            echo '<p class="atc-message">Product "'.$results['productName'].'" has just beend added to cart.</p>';
                        }
                    }   
                }
            ?>
			<div class="table-responsive cart_info">
                <?php 
                    if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])): 
                ?>
                <table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
                        <?php
                            $total = 0;
                            foreach($_SESSION['cart'] as $k=>$v):
                                $proid = htmlspecialchars($k);
                                $query = mysql_query("SELECT * FROM alastairsgroup_account WHERE productID='".mysql_real_escape_string($proid)."'");
                                while($results=mysql_fetch_array($query)):
                        ?>
						<tr>
							<td class="cart_product">
								<a href="product-details.php?view=<?php echo $results['productID']; ?>"><img src="<?php echo $results['image'];?>" alt="<?php echo $results['productName'];?>"></a>
							</td>
							<td class="cart_description">
								<h4><a href="product-details.php?view=<?php echo $results['productID']; ?>"><?php echo $results['productName']; ?></a></h4>
								<p>SKU: <?php echo $results['sku']; ?></p>
							</td>
							<td class="cart_price">
								<p>$<?php echo $results['price']; ?></p>
                                <?php $total += $results['price']*$v; ?>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href="cart.php?prod=<?php echo $results['productID']; ?>"> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="<?php echo $v; ?>" autocomplete="off" size="2">
									<a class="cart_quantity_down" href="cart.php?iprod=<?php echo $results['productID']; ?>"> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$<?php echo $results['price']*$v;?></p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="cart.php?rprod=<?php echo $results['productID']; ?>"><i class="fa fa-times"></i></a>
							</td>
						</tr>
                        <?php endwhile;endforeach; ?>
						<tr>
							<td colspan="4">&nbsp;</td>
							<td colspan="2">
								<table class="table table-condensed total-result">
									<tr>
										<td>Cart Sub Total</td>
										<td>$<?php echo $total; ?></td>
									</tr>
									<tr class="shipping-cost">
										<td>Shipping Cost</td>
										<td>Free</td>										
									</tr>
									<tr>
										<td>Total</td>
										<td><span>$<?php echo $total; ?></span></td>
									</tr>
								</table>
							</td>
						</tr>
					</tbody>
				</table>            
                <?php else: ?>
                    <p>The cart is empty</p>
                <?php endif; ?>
			</div>
		</div>
	</section> <!--/#cart_items-->
    <?php if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])): ?>
	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>What would you like to do next?</h3>
				<p>Update Cart or Checkout.</p>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span>$<?php echo $total; ?></span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span>$<?php echo $total; ?></span></li>
						</ul>
							<a class="btn btn-default update" href="cart.php">Update</a>
							<a class="btn btn-default check_out" href="checkout.php">Check Out</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->
    <?php endif; ?>

<<<<<<< Updated upstream
=======
<<<<<<< HEAD
 <?php include ("includes/footer.php"); ?>
=======
>>>>>>> Stashed changes
	<?php include ("includes/footer.php"); ?>


    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
>>>>>>> origin/master
