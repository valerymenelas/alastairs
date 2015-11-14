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
?>

  
    <div class="container">
    <nav role="navigation" class="navbar navbar-default">
    <!-- Brand and toggle get grouped for better mobile display -->
    
    <!-- Collection of nav links and other content for toggling -->
    <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="view_user.php">View User</a></li>
            <li><a href="view_product.php">View Product</a></li>
            <li><a href="add_product.php">Add Product</a></li>
            <li><a href="member_tasks.php">Member Tasks Breakdown</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="admin_logout.php">Logout</a></li>
        </ul>
    </div>
</nav>
    
    
    <div class="bs-example">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Row</th>
                <th>Name</th>
                <th>Email</th>
                
            </tr>
        </thead>
        <tbody>
        <?php 
		$data = mysql_query("select * from member");
		$i=1;
		while($row = mysql_fetch_assoc($data))
		{
		?>
            <tr>
                <td><?php echo $i;?></td>
                <td><?php echo $row['username'];?></td>
                <td><?php echo $row['email'];?></td>
              
            </tr>
         <?php $i++; } ?>   
        </tbody>
    </table>
</div>
      
    </div>
<?php include ("includes/footer.php");?>



	<!--/Footer-->
	
<?php 
function deletedata($id)
{
	

	mysql_query("DELETE FROM alastairsgroup_account where productID=".$id);	
	
}
?>
