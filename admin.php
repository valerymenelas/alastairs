<?php
include ("includes/header.php");
if($_SESSION['login'] != 'Admin') { header('location:admin_login.php'); } 
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
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="admin_logout.php">Logout</a></li>
        </ul>
    </div>
</nav>
    
    </div>
<?php include ("includes/footer.php");?>
