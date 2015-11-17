<?php 
include ("includes/header.php");
if($_SESSION['login'] == 'Admin') { header('location:admin.php'); } 
 ?>	
	
    <section><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
                    <?php if(isset($_POST['loginf']))
					{
						
						$r = mysql_query("select * from login where username ='".$_POST['username']."' && password = '".$_POST['password']."'");
						$row = mysql_num_rows($r);
					if($row==1)
					{
						
						$_SESSION['login'] = 'Admin'; 
						header('location:admin.php');
					}
					
					}
					
					?>
                    
                    
					<div class="login-form"><!--login form-->
						<h2>Login to your Admin account</h2>
						<form method="post">
							<input name="username" type="username" placeholder="Username"/>
                            <input name="password" type="password" placeholder="Password"/>
							<span>
								<input type="checkbox" class="checkbox" name="remember"> 
								Keep me signed in
							</span>
							<button name="loginf" type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				
			</div>
		</div>
	</section><!--/form-->
	
 <?php include ("includes/footer.php"); ?>