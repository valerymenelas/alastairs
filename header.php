<?php ob_start(); session_start(); //session ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Alastair's Home Décor</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="img/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="img/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
		<?php
			include("includes/connection.php");
			$query=mysql_query("select * from alastairsgroup_account");
		?>
	<header id="header"><!--header-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="home.php"><img src="img/home/logo.png" alt="Alastair's" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
                                <?php
                                    if(!empty($_SESSION['email'])){
                                        $uemail = $_SESSION['email'];
                                        $query=mysql_query("select * from member where email='$uemail'");
                    
                                        while($results=mysql_fetch_array($query))                        
                    					{
                    					   $uname = $results['username'];
                    					}
                                        echo "<li><a>Hello, ".$uname." </a></li>";
                                        echo "<li><a href='logout.php'>Logout</a></li>";
                                    }else{
                                        echo '<li><a href="login.php"><i class="fa fa-lock"></i> Login</a></li>';
                                    }
                                ?>
								<li><a href="checkout.php"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="home.php" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="art-wall-decor.php">Art & Wall Décor</a></li>
										<li><a href="lighting.php">Lighting</a></li> 
										<li><a href="rugs-curtains.php">Rugs & Curtains</a></li> 
										<li><a href="kitchen.php">Kitchen</a></li> 
										<li><a href="gifts.php">Gifts</a></li> 
										<li><a href="clocks.php">Clocks</a></li> 

                                    </ul>
                                </li> 
								<li><a href="contact-us.php">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="search_box pull-right">
							<form method="post" action="search.php" enctype="multipart/form-data">
								<input type="text" name="user_query" placeholder="Search a Product"/ > 
								<input type="submit" name="search" value="Search" />
							</form>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->