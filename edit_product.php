<?php include ("includes/header.php");
//session_start();
if($_SESSION['login'] != 'Admin') { header('location:admin_login.php'); } 
?>
<a href="admin_logout.php">Logout</a>
  
    <div class="container">
    <div class="bs-example">
    <?php
$main =	$_GET['id'];
$da = mysql_query("Select * from alastairsgroup_account where productID=".$main);
	$data = mysql_fetch_assoc($da);
	
	if(isset($_POST['edit']))
	{
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
						$uploads_dir1 =$data['image']; 
					}
			
		mysql_query("UPDATE alastairsgroup_account SET
		productName ='".$_POST['name']."',
		description = '".$_POST['description']."',
		category = '".$_POST['category']."',
		sku = '".$_POST['sku']."',
		stock = '".$_POST['stock']."',
		cost = '".$_POST['cost']."',
		price= '".$_POST['price']."',
		image = '".$uploads_dir1."',
		productKeywords = '".$_POST['productKeywords']."',
		weight = '".$_POST['weight']."'
		where productID= '".$main."'
		");
		
		
		header('Location:view_product.php');
		
	}
	
	
	?>
    
   <form class="form-horizontal" method="post" enctype="multipart/form-data">
     
            <div class="form-group">
                <label for="inputEmail" class="control-label col-xs-2">Product Name:</label>
                <div class="col-xs-10">
                    <input type="text" class="form-control" id="inputEmail" placeholder="Product Name" name="name" value="<?php echo $data['productName']; ?>" required>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="control-label col-xs-2">Category:</label>
                <div class="col-xs-10">
                      <select name="category" class="form-control" required>
                <option>Select</option>
                <option value="art&walldecor" <?php if($data['category']=='art&walldecor') { echo 'selected'; } ?>>Art & Wall Décor</option>
                <option value="lighting"<?php if($data['category']=='lighting') { echo 'selected'; } ?>>Lighting</option>
                <option value="rugs_curtains"<?php if($data['category']=='rugs_curtains') { echo 'selected'; } ?>>Rugs & Curtains</option>
                <option value="kitchen"<?php if($data['category']=='kitchen') { echo 'selected'; } ?>>Kitchen</option>
                <option value="gifts" <?php if($data['category']=='gifts') { echo 'selected'; } ?>>Gifts</option>
                <option value="clocks" <?php if($data['category']=='clocks') { echo 'selected'; } ?>>Clocks</option>
            </select>
                </div>
            </div>
            
            
            <div class="form-group">
                <label for="inputPassword" class="control-label col-xs-2">Product Price:</label>
                <div class="col-xs-10">
                    <input type="text" class="form-control" id="inputPassword" name="price" placeholder="Product Price" value="<?php echo $data['price']; ?>" required>
                </div>
            </div>
            
             <div class="form-group">
                <label for="inputPassword" class="control-label col-xs-2">Product SKU:</label>
                <div class="col-xs-10">
                    <input type="text" class="form-control" id="inputPassword" name="sku" placeholder="Product SKU" value="<?php echo $data['sku']; ?>" required>
                </div>
            </div>
            
             <div class="form-group">
                <label for="inputPassword" class="control-label col-xs-2">Product Stock:</label>
                <div class="col-xs-10">
                    <input type="text" class="form-control" id="inputPassword" name="stock" placeholder="Product stock" value="<?php echo $data['stock']; ?>" required>
                </div>
            </div>
            
             <div class="form-group">
                <label for="inputPassword" class="control-label col-xs-2">Product Cost:</label>
                <div class="col-xs-10">
                    <input type="text" class="form-control" id="inputPassword" name="cost" placeholder="Product Cost" value="<?php echo $data['cost']; ?>" required>
                </div>
            </div>
            
              <div class="form-group">
                <label for="inputPassword" class="control-label col-xs-2">Product Weight:</label>
                <div class="col-xs-10">
                    <input type="text" class="form-control" id="inputPassword" name="weight" placeholder="Product Weight" value="<?php echo $data['weight']; ?>" required>
                </div>
            </div>
            
            
            <div class="form-group">
                <label for="inputPassword" class="control-label col-xs-2">Product Description:</label>
                <div class="col-xs-10">
                   
                    <textarea name="description" cols="1" rows="4" placeholder="Product Description" class="form-control" id="inputPassword" required><?php echo $data['description']; ?></textarea>
                </div>
            </div>
            
            
            <div class="form-group">
                <label for="inputPassword" class="control-label col-xs-2">Product Image:</label>
                <div class="col-xs-10">
                   
  			<input type="file" class="form-control" id="inputPassword" name="image">                </div>
            </div>
             <div class="form-group">
                <img src="<?php echo $data['image']; ?>" height="100" width="100"/>
            </div>
            
             <div class="form-group">
             <label for="inputPassword" class="control-label col-xs-2"> </label>
                <label for="inputPassword" class="control-label col-xs-2">Product Keywords:</label>
                <div class="col-xs-10">
                   
                    <textarea name="productKeywords" cols="1" rows="4" placeholder="Product Keywords" class="form-control" id="inputPassword" required><?php echo $data['productKeywords']; ?></textarea>
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-xs-offset-2 col-xs-10">
                    <button type="submit" class="btn btn-primary" name="edit">Edit product</button>
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
<?php include ("includes/footer.php");?>
