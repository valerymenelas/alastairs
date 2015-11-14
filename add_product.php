<?php include ("includes/header.php");
//session_start();
if($_SESSION['login'] != 'Admin') { header('location:admin_login.php'); } 
?>

  
    <div class="container">
    <nav role="navigation" class="navbar navbar-default">
    <!-- Brand and toggle get grouped for better mobile display -->
    
    <!-- Collection of nav links and other content for toggling -->
    <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li><a href="view_user.php">View User</a></li>
            <li><a href="view_product.php">View Product</a></li>
            <li class="active"><a href="add_product.php">Add Product</a></li>
            <li><a href="member_tasks.php">Member Tasks Breakdown</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="admin_logout.php">Logout</a></li>
        </ul>
    </div>
</nav>
    
    <div class="bs-example">
    <?php
	if(isset($_POST['add']))
	{
		//echo '<pre>'; print_r($_POST);
		if($_FILES['image']['name'])
					{
						$imagename = $_FILES['image']['name'];
						$rand = rand(1,1000);
						$tmpname = $_FILES['image']['tmp_name'];
						$realname =$rand.$imagename; 
					 	$uploads_dir =  'img/'.$_POST['category'];
						$uploads_dir1 ='img/'.$_POST['category'].'/'.$realname;
						move_uploaded_file($tmpname, "$uploads_dir/$realname");
						
					}
					else
					{
						$uploads_dir1 =''; 
					}
		
		
		mysql_query("INSERT into alastairsgroup_account(productName,description,category,sku,stock,cost,price,image,productKeywords,weight) values('".$_POST['name']."','".$_POST['description']."','".$_POST['category']."','".$_POST['sku']."',
		'".$_POST['stock']."','".$_POST['cost']."','".$_POST['price']."','".$uploads_dir1."','".$_POST['productKeywords']."','".$_POST['weight']."')");
		$msg =  'Product Added Sucussfully';
		
	}
	?>
    
   <form class="form-horizontal" method="post" enctype="multipart/form-data">
     
            <div class="form-group">
                <label for="inputEmail" class="control-label col-xs-2">Product Name:</label>
                <div class="col-xs-10">
                    <input type="text" class="form-control" id="inputEmail" placeholder="Product Name" name="name" required>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="control-label col-xs-2">Category:</label>
                <div class="col-xs-10">
                      <select name="category" class="form-control" required>
                <option>Select</option>
                <option value="art&walldecor">Art & Wall Décor</option>
                <option value="lighting">Lighting</option>
                <option value="rugs_curtains">Rugs & Curtains</option>
                <option value="kitchen">Kitchen</option>
                <option value="gifts">Gifts</option>
                <option value="clocks">Clocks</option>
            </select>
                </div>
            </div>
            
            
            <div class="form-group">
                <label for="inputPassword" class="control-label col-xs-2">Product Price:</label>
                <div class="col-xs-10">
                    <input type="text" class="form-control" id="inputPassword" name="price" placeholder="Product Price" required>
                </div>
            </div>
            
             <div class="form-group">
                <label for="inputPassword" class="control-label col-xs-2">Product SKU:</label>
                <div class="col-xs-10">
                    <input type="text" class="form-control" id="inputPassword" name="sku" placeholder="Product SKU" required>
                </div>
            </div>
            
             <div class="form-group">
                <label for="inputPassword" class="control-label col-xs-2">Product Stock:</label>
                <div class="col-xs-10">
                    <input type="text" class="form-control" id="inputPassword" name="stock" placeholder="Product stock" required>
                </div>
            </div>
            
             <div class="form-group">
                <label for="inputPassword" class="control-label col-xs-2">Product Cost:</label>
                <div class="col-xs-10">
                    <input type="text" class="form-control" id="inputPassword" name="cost" placeholder="Product Cost" required>
                </div>
            </div>
            
              <div class="form-group">
                <label for="inputPassword" class="control-label col-xs-2">Product Weight:</label>
                <div class="col-xs-10">
                    <input type="text" class="form-control" id="inputPassword" name="weight" placeholder="Product Weight" required>
                </div>
            </div>
            
            
            <div class="form-group">
                <label for="inputPassword" class="control-label col-xs-2">Product Description:</label>
                <div class="col-xs-10">
                   
                    <textarea name="description" cols="1" rows="4" placeholder="Product Description" class="form-control" id="inputPassword" required></textarea>
                </div>
            </div>
            
            
            <div class="form-group">
                <label for="inputPassword" class="control-label col-xs-2">Product Image:</label>
                <div class="col-xs-10">
                   
  			<input type="file" class="form-control" id="inputPassword" name="image">                </div>
            </div>
            
             <div class="form-group">
                <label for="inputPassword" class="control-label col-xs-2">Product Keywords:</label>
                <div class="col-xs-10">
                   
                    <textarea name="productKeywords" cols="1" rows="4" placeholder="Product Keywords" class="form-control" id="inputPassword" required></textarea>
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-xs-offset-2 col-xs-10">
                    <button type="submit" class="btn btn-primary" name="add">Add product</button>
                </div>
            </div>
            <?php if(isset($_POST['add']))
			{
				echo ' <div class="form-group">
                <div class="col-xs-offset-2 col-xs-10">
                    '.$msg.'
                </div>
            </div>';
				
			} ?>
            
        
    </form>
</div>
      
    </div>

	
		
 <?php include ("includes/footer.php"); ?>