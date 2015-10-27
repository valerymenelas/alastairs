<?php include ("includes/header.php"); ?>	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
                    <?php
                    // if login
                    if(isset($_POST['loginf'])){
                        //var_dump($_POST);
                        if (!empty($_POST['txtEmailL'])){
                            $email   = addslashes($_POST['txtEmailL']);
                        }else{
                            echo "<p>Please enter an email</p>";
                        }
                        if (!empty($_POST['txtPasswordL'])){
                            $password   = addslashes($_POST['txtPasswordL']);
                            $password = md5($password);
                        }else{
                            echo "<p>Please enter a password</p>";
                        }
                        if(!empty($_POST['remember'])){
                            $remember = $_POST['remember'];    
                        }
                        if(!empty($password) && !empty($email)){
                            //check if user existed
                            $query = mysql_query("SELECT email, password FROM member WHERE email='$email'");
                            if (mysql_num_rows($query) == 0) {
                                echo "<p>Your email or password is not correct, please check again.</p>";
                            }
                            //get pass in db
                            $row = mysql_fetch_array($query);
                            //compare two pass
                            if (mysql_num_rows($query) > 0 && $password != $row['password']) {
                                echo "<p>Your email or password is not correct, please check again.</p>";
                            }
                            //save session
                            if(mysql_num_rows($query) > 0 && $password == $row['password']){
                                $_SESSION['email'] = $email;
                                if(isset($remember)){
                                    if($remember==="on"){
                                        if(!empty($_SESSION['remember'])){
                                            $_SESSION['remember'] = $remember;    
                                        }
                                    }    
                                }
                                echo "You are now logged in!";
                                ?>
                                <script>window.location.href = "/~va634778/home.php";</script>
                                <?php
                            }
                        }    
                    }
                    ?>
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form action="" method="post">
							<input name="txtEmailL" type="email" placeholder="Email Address" />
                            <input name="txtPasswordL" type="password" placeholder="Password" />
							<span>
								<input type="checkbox" class="checkbox" name="remember"> 
								Keep me signed in
							</span>
							<button name="loginf" type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
                <?php
                    // if register
                    if(isset($_POST['registerf'])){
                        if (!empty($_POST['txtUsername'])){
                            $username   = addslashes($_POST['txtUsername']);
                        }else{
                            echo "<p>Please enter a name</p>";
                        }
                        if (!empty($_POST['txtPassword'])){
                            $password   = addslashes($_POST['txtPassword']);
                        }else{
                            echo "<p>Please enter your password</p>";
                        }
                        if (!empty($_POST['txtEmail'])){
                            $email   = addslashes($_POST['txtEmail']);
                        }else{
                            echo "<p>Please enter an email address</p>";
                        }
                        //check if email existed.
                        if (mysql_num_rows(mysql_query("SELECT email FROM member WHERE email='$email'")) > 0)
                        {
                            echo "Email is existed, please use another one!";
                        }
                        if(!empty($username) && !empty($password) && !empty($email)){
                            $password = md5($password);
                            @$addmember = mysql_query("
                            INSERT INTO member (
                                username,
                                email,
                                password
                            )
                            VALUE (
                                '{$username}',
                                '{$email}',
                                '{$password}'
                            )
                        ");
                                              
                        //notify
                        if ($addmember)
                            echo "Registration successfully, please login.";
                        else
                            echo "There was an error, please try again.";
                        }
                    }
                    ?>
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="" method="post">
							<input name="txtUsername" type="text" placeholder="Name"/>
							<input name="txtEmail" type="email" placeholder="Email Address"/>
							<input name="txtPassword" type="password" placeholder="Password"/>
							<button name="registerf" type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
 <?php include ("includes/footer.php"); ?>