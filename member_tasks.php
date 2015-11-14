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
            <li><a href="add_product.php">Add Product</a></li>
            <li class="active"><a href="member_tasks.php">Member Tasks Breakdown</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="admin_logout.php">Logout</a></li>
        </ul>
    </div>
</nav>


<div class="col-sm-6">
	<h3>Valery</h3>
    <ul>
    	<li> <strong> Original creater of site </strong> </li>
        <li> PHP back end </li>
        <li> Interaction with database </li>
        <li> Guest, Unprivilided, Privileged and Admin access </li>
        <li> Rating system </li>
        <li> Site validation </li>
        <li> CRUD operations </li>
        <li> Integration of a mobile view </li>
        <li> General presentation </li>
        </ul>
  
    </div>
    
    <div class="col-sm-6">
	<h3>Tim</h3>
    <ul>
    	<li> <strong> Team leader </strong> </li>
    	<li> PHP back end </li>
        <li> Integration of site search </li>
        <li> Interaction with database </li>
        <li> Guest, Unprivilided, Privileged and Admin access </li>
        <li> Rating system </li>
        <li> Site validation </li>
    	<li> CRUD operations </li>
        <li> Integration of a mobile view </li>
        <li> General presentation </li>
        </ul>
    
    </div>
    
    <br/>
    <div class="col-sm-6">
	<h3>Logan</h3>
    <ul> 
    	<li> PHP back end </li>
    	<li> Interaction with database </li>
        <li> Site validation </li>
        <li> CRUD operations </li>
        <li> Integration of a mobile view </li>
        <li> General presentation </li>
        </ul>
 
    </div>
    
    <div class="col-sm-6">
	<h3>Jackie</h3>
    <ul>
    	<li> PHP back end </li>
    	<li> Business policies </li>
        <li> Security Statement </li>
        <li> Site validation </li>
        <li> CRUD operations </li>
        <li> Integration of a mobile view </li>
        <li> General presentation </li>
    	</ul>
  
    </div>
    <br/>
    
    <div class="col-sm-6">
    
	<h3>Joseph</h3>
    <ul> 
    	<li> PHP back end </li>
    	<li> Business policies </li>
    	<li> Site validation </li>
        <li> General presentation </li>
    </li>
    </div>
    <div class="col-sm-6">
    <h3>Shayla</h3>
    <ul>
    	<li> PHP back end </li>
    	<li> Integration of SEO</li>
        <li> Integration of Google Analytics </li>
        <li> Testing requirements </li>
        <li> Rating system </li>
        <li> Integration of a mobile view </li>
        <li> General presentation </li>
        </ul>
    
</ul>
</div>
</div>




















 <?php include ("includes/footer.php"); ?>