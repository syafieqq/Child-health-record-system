<?php 
   include '../session.php';
    date_default_timezone_set("Asia/Kuala_Lumpur");
?>
<?php
include('../db.php');

$loggedin_id='1'; //$session id
?>
<?php

//getting id from url
$loggedin_id=$row['id'];



//selecting data associated with this particular id
$sql = "SELECT * FROM users WHERE id = $loggedin_id" ;

$result=mysqli_query($db,$sql);
if (!$result) {
    printf("Error: %s\n", mysqli_error($db));
    exit();
}
?>
<?php
while($rows=mysqli_fetch_array($result)){
	$name= 	$rows['bname'];
	$nickname= 	$rows['nickname'];
	$dob= 	$rows['dob'];
	$pob= 	$rows['pob'];
	$gender= 	$rows['bgender'];
	$religion= 	$rows['breligion'];
	$race= 	$rows['brace'];
	$email= 	$rows['email'];
	$phone= 	$rows['phone'];
	$username= 	$rows['username'];
	$address= 	$rows['address'];
	$postcode= 	$rows['postcode'];
	$town= 	$rows['town'];
	$state= 	$rows['state'];
	$id= 	$rows['id'];
	
	$status= $rows ['status'];
	$n_img= $rows ['profile_image'];
}
	
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Profile Print</title>

    <!-- favicon -->
    <link href="favicon.png" rel=icon>

    <!-- web-fonts -->
    <link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">

    <!-- font-awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar">
<div id="main-wrapper">
<!-- Page Preloader -->


<div class="columns-block container">

<!-- .left-col-block -->


<div class="right-col-block blocks">
<div class="theiaStickySidebar">

<!-- .expertise-wrapper -->

<!-- .skills-wrapper -->
<!-- .section-experience -->

<!-- .section-education -->


<!-- .section-publications -->


<!-- .portfolio -->

          
        

<section class="section-contact section-wrapper gray-bg">
    <div class="container-fluid">
       
        <!--.row-->
        <div class="row">
            <div class="col-md-12">
			<h4>Profile</h4>
			  <?php	echo "<img src='../uploads/$n_img' width='150' height='150' alt=\"...\">" ?>
			 
               
                    <hr>

                    <form id="contactForm" action="sendemail.php" method="POST">
                        <div class="form-group">
                            <label for="InputName">Name</label>
                            <input style="font-size: 16px; " type="text" name="name" disabled  value="<?php  echo  $name;  ?>" class="form-control" 
                                   placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <label for="InputName">Date Of Birthday</label>
                            <input style="font-size: 16px;" type="text" name="name" disabled  value="<?php  echo  $dob;  ?>" class="form-control" 
                                   placeholder="Full Name">
                        </div>
						<div class="row">
						<div class="col-md-4">
						<div class="form-group">
                            <label for="InputName">Gender</label>
                            <input style="font-size: 16px;" type="text" name="name" disabled  value="<?php  echo  $gender;  ?>" class="form-control" 
                                   placeholder="Full Name">
                        </div>
						</div>
						<div class="col-md-4">
						<div class="form-group">
                            <label for="InputName">Religion</label>
                            <input style="font-size: 16px;" type="text" name="name" disabled  value="<?php  echo  $religion;  ?>" class="form-control" 
                                   placeholder="Full Name">
                        </div>
						</div>
						<div class="col-md-4">
						<div class="form-group">
                            <label for="InputName">Race</label>
                            <input style="font-size: 16px;" type="text" name="name" disabled  value="<?php  echo  $race;  ?>" class="form-control" 
                                   placeholder="Full Name">
                        </div>
						
						</div>
						</div>
						<div class="form-group">
                            <label for="InputName">Email</label>
                            <input style="font-size: 16px;" type="text" name="name" disabled  value="<?php  echo  $email;  ?>" class="form-control" 
                                   placeholder="-">
                        </div>
						<div class="form-group">
                            <label for="InputName">Phone Number</label>
                            <input style="font-size: 16px;" type="text" name="name" disabled  value="<?php  echo  $phone;  ?>" class="form-control" 
                                   placeholder="-">
                        </div>
						<div class="form-group">
                            <label for="InputName">Place Of Birthday</label>
                            <input style="font-size: 16px;" type="text" name="name" disabled  value="<?php  echo  $pob;  ?>" class="form-control" 
                                   placeholder="-">
                        </div>
						
                       
                      
                        <div class="form-group">
                            <label for="message-text" class="control-label">Address</label>
                            <textarea style="font-size: 18px;" disabled class="form-control" rows="1" required="" name="message" id="message-text"
                                      placeholder="-"><?php  echo  $address;?> <?php  echo  $postcode;?> <?php  echo  $town;?> <?php  echo  $state;?></textarea>
                        </div>

                        <input class="hide-from-printer btn btn-outline-primary" type="button" value="Print" onclick="myFunction()">
                    </form>
               
                <!-- .feedback-form -->


            
        </div>
    </div>
    <!--.container-fluid-->
</section>
<!--.section-contact-->


<!-- .footer -->
</div>
<!-- Sticky -->
</div>
<!-- .right-col-block -->
</div>
<!-- .columns-block -->
</div>
<!-- #main-wrapper -->
<script>function myFunction() {
    window.print();
}</script>
	<style>
	@media print {
  /* style sheet for print goes here */
  .hide-from-printer{  display:none; }
}
	</style>
<!-- jquery -->
<script src="js/jquery-2.1.4.min.js"></script>

<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<script src="js/theia-sticky-sidebar.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>