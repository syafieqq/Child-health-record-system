
								<?php 
                                $errors = array(
                                    1=>"<h4>Invalid user name or password, Try again</h4>",
                                    2=>"<h4>Please login to access this area</h4>");                                  
                                $error_id = isset($_GET['err']) ? (int)$_GET['err'] : 0;
                                if ($error_id == 1) {
                                        echo '<p class="text-danger">'.$errors[$error_id].'</p>';
                                    }elseif ($error_id == 2) {
                                        echo '<p class="text-danger">'.$errors[$error_id].'</p>';} ?>
                              
                                   
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Child Health Record System</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
					<div id="logiin">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Child Health</strong> Record System</h1>
                           
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Login</h3>
                            		<p>Enter Mykid Numbers and password to log on:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
							 
                            <div class="form-bottom">
							
			                    <form role="form" action="authenticate.php" method="post" class="login-form">
								
							   
			                    	<div class="form-group">
			                    		<label for="username" class="uname"> MyKid Number </label>
			                        	<input type="text" name="username" required="required" placeholder="Username..." class="form-username form-control" id="username">
			                        </div>
			                        <div class="form-group">
			                        	<label for="password" class="youpasswd"> Password </label>
			                        	<input type="password" name="password" required="required" placeholder="Password..." class="form-password form-control" id="password">
			                        </div>
									
			                        <button type="submit" class="btn" value="login">Sign in!</button>
			                    </form>
								
		                    </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 social-login">
                        	
                        	<div class="social-login-buttons">
	                        	<a class="btn btn-link-2" href="register.php">
	                        		<i class="fa fa-key"></i> New Registeration
	                        	</a>
								<a>or</a>
	                        	<a class="btn btn-link-2" href="#">
	                        		<i class="fa fa-unlock-alt"></i> Forgot Password
	                        	</a>
	                        	
                        	</div>
                        </div>
                    </div>
					 <div class="row">
                        <div class="col-sm-12">
                        	
                        	<div class="social-login-buttons">
	                        	<a class="btn btn-link-2" href="adminpanel/admin_login.php">
	                        		<i class="fa fa-key"></i> Admin Login
	                        	</a>								
	                        	
                        	</div>
                        </div>
                    </div>
					
					</div>
					
					
					
					
                </div>
				
			</div>
</div>			
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>