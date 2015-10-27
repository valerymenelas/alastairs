<?php include ("includes/header.php"); ?>

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div><!--/breadcrums-->

			<div class="alastair-informations">
				<div class="row">
					<div class="col-sm-6 clearfix">
						<div class="bill-to">
							<p>Bill To</p>
							<div class="form-one">
								<form>
									<input type="text" placeholder="Company Name">
									<input type="text" placeholder="* Email">
									<input type="text" placeholder="* First Name">
									<input type="text" placeholder="* Last Name">
									<input type="text" placeholder="* Address 1">
									<input type="text" placeholder="Address 2">
								</form>
							</div>
							<div class="form-two">
								<form>
									<input type="text" placeholder="* Zip Code">
									<select>
										<option>-- Country --</option>
										<option>United States</option>
									</select>
									<select>
										<option>-- State --</option>
										<option value="AL">Alabama</option>
										<option value="AK">Alaska</option>
										<option value="AZ">Arizona</option>
										<option value="AR">Arkansas</option>
										<option value="CA">California</option>
										<option value="CO">Colorado</option>
										<option value="CT">Connecticut</option>
										<option value="DE">Delaware</option>
										<option value="DC">District Of Columbia</option>
										<option value="FL">Florida</option>
										<option value="GA">Georgia</option>
										<option value="HI">Hawaii</option>
										<option value="ID">Idaho</option>
										<option value="IL">Illinois</option>
										<option value="IN">Indiana</option>
										<option value="IA">Iowa</option>
										<option value="KS">Kansas</option>
										<option value="KY">Kentucky</option>
										<option value="LA">Louisiana</option>
										<option value="ME">Maine</option>
										<option value="MD">Maryland</option>
										<option value="MA">Massachusetts</option>
										<option value="MI">Michigan</option>
										<option value="MN">Minnesota</option>
										<option value="MS">Mississippi</option>
										<option value="MO">Missouri</option>
										<option value="MT">Montana</option>
										<option value="NE">Nebraska</option>
										<option value="NV">Nevada</option>
										<option value="NH">New Hampshire</option>
										<option value="NJ">New Jersey</option>
										<option value="NM">New Mexico</option>
										<option value="NY">New York</option>
										<option value="NC">North Carolina</option>
										<option value="ND">North Dakota</option>
										<option value="OH">Ohio</option>
										<option value="OK">Oklahoma</option>
										<option value="OR">Oregon</option>
										<option value="PA">Pennsylvania</option>
										<option value="RI">Rhode Island</option>
										<option value="SC">South Carolina</option>
										<option value="SD">South Dakota</option>
										<option value="TN">Tennessee</option>
										<option value="TX">Texas</option>
										<option value="UT">Utah</option>
										<option value="VT">Vermont</option>
										<option value="VA">Virginia</option>
										<option value="WA">Washington</option>
										<option value="WV">West Virginia</option>
										<option value="WI">Wisconsin</option>
										<option value="WY">Wyoming</option>
									</select>				
													
									<input type="text" placeholder="* Phone">
									<input type="text" placeholder="Mobile Phone">
									<input type="text" placeholder="Fax">
								</form>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="order-message">
							<p>Shipping Order</p>
							<textarea name="message"  placeholder="Notes about your order, Special Notes for Delivery" rows="16"></textarea>
							<label><input type="checkbox"> Shipping to bill address</label>
						</div>	
					</div>					
				</div>
			</div>
			<div class="review-payment">
				<h2>Review & Payment</h2>
			</div>
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
			<div class="payment-options">
					<span>
						<label><input type="checkbox"> Paypal</label>
					</span>
				</div>
		</div>
	</section> <!--/#cart_items-->

	
 <?php include ("includes/footer.php"); ?>