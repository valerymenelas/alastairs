<?php 
ob_start();
include ("includes/header.php");
//session_start();
if($_SESSION['login'] != 'Admin') { header('location:admin_login.php'); } 
if(isset($_GET['action']) && $_GET['action']== 'delete')
{
	
	deletedata($_GET['id']);
	header('Location:view_product.php');
}
?><style>
@media only screen and (max-width: 800px) {
	#unseen table td:nth-child(2), 
	#unseen table th:nth-child(2) {display: none;}
}
 
@media only screen and (max-width: 640px) {
	#unseen table td:nth-child(4),
	#unseen table th:nth-child(4),
	#unseen table td:nth-child(7),
	#unseen table th:nth-child(7),
	#unseen table td:nth-child(8),
	#unseen table th:nth-child(8){display: none;}
}

</style>
  
    <div class="container">
    <nav role="navigation" class="navbar navbar-default">
    <!-- Brand and toggle get grouped for better mobile display -->
    
    <!-- Collection of nav links and other content for toggling -->
    <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li><a href="view_user.php">View User</a></li>
            <li class="active"><a href="view_product.php">View Product</a></li>
            <li><a href="add_product.php">Add Product</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <li>Hello,Admin</li>
            <li><a href="admin_logout.php">Logout</a></li>
        </ul>
    </div>
</nav>


<div class="table-responsive">
  <table class="table table-condensed table-striped table-bordered table-hover no-margin">
    <thead>
      <tr>
      
    
        
        		 <th style="width:10%">S.No</th> 
                <th style="width:10%">Product Name</th>
               <th style="width:10%">Description</th>
                <th style="width:10%">Category</th>
               <th style="width:10%">Sku</th>
                  <th style="width:10%">Stock</th>
                   <th style="width:10%">Cost</th>
                    <th style="width:10%">Price</th>
                   <!--<th style="width:10%">Image</th>-->
                    <th style="width:10%">ProductKeywords</th>
                    <th style="width:10%">Weight</th>
                    <th style="width:10%">Action</th>
        
        
      </tr>
    </thead>
    <tbody>
      <?php 
		$data = mysql_query("select * from alastairsgroup_account");
		$i=1;
		while($row = mysql_fetch_assoc($data))
		{
		?>
            <tr>
                <td><?php echo $i;?></td>
                <td><?php echo $row['productName'];?></td>
                <td><?php echo $row['description'];?></td>
               <td><?php echo $row['category'];?></td>
               <td><?php echo $row['sku'];?></td>
                <td><?php echo $row['stock'];?></td>
                   <td><?php echo $row['cost'];?></td>
                   <td><?php echo $row['price'];?></td>
                  <!-- <td><?php echo $row['image'];?></td>-->
                    <td><?php echo $row['productKeywords'];?></td>
                     <td><?php echo $row['weight'];?></td>
                     <td><a href="edit_product.php?action-edit&id=<?php echo $row['productID'];?>">Edit</a> || 
                     <a href="?action=delete&id=<?php echo $row['productID'];?>" onClick="return confirm('Are you sure?');">Delete</a></td>
            </tr>
         <?php $i++; } ?>   
    </tbody>
  </table>
</div>



    <!--<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Row</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>Category</th>
                 <th>Sku</th>
                  <th>Stock</th>
                   <th>Cost</th>
                    <th>Price</th>
                    <th>image</th>
                    <th>productKeywords</th>
                    <th>weight</th>
                    <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php 
		$data = mysql_query("select * from alastairsgroup_account");
		$i=1;
		while($row = mysql_fetch_assoc($data))
		{
		?>
            <tr>
                <td><?php echo $i;?></td>
                <td><?php echo $row['productName'];?></td>
                <td><?php echo $row['description'];?></td>
               <td><?php echo $row['category'];?></td>
               <td><?php echo $row['sku'];?></td>
                <td><?php echo $row['stock'];?></td>
                   <td><?php echo $row['cost'];?></td>
                   <td><?php echo $row['price'];?></td>
                   <td><?php echo $row['image'];?></td>
                    <td><?php echo $row['productKeywords'];?></td>
                     <td><?php echo $row['weight'];?></td>
                     <td><a href="edit_product.php?action-edit&id=<?php echo $row['productID'];?>">Edit</a> || 
                     <a href="?action=delete&id=<?php echo $row['productID'];?>" onClick="return confirm('Are you sure?');">Delete</a></td>
            </tr>
         <?php $i++; } ?>   
        </tbody>
    </table>
</div>-->
      
    </div>
<?php 
function deletedata($id)
{
	

	mysql_query("DELETE FROM alastairsgroup_account where productID=".$id);	
	
}
?>
<?php include ("includes/footer.php");?>
<!--
	<footer id="footer">
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="contact-us.php">Contact Us</a></li>
								<li><a href="#">FAQ</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="single-widget">
							<h2>Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Art & Wall Décor</a></li>
								<li><a href="#">Lighting</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privecy Policy</a></li>
								<li><a href="#">Refund Policy</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="single-widget">
							<h2>About Us</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">About Us</a></li>
							</ul>
						</div>
					</div>					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2015 Alastair's Inc. All rights reserved.</p>
					<p class="pull-right">This site is not official and is an assignment for a UCF Digital Media course, designed by Valery Menelas</p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	


    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>-->