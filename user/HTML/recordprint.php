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
		
                                <h4 class="title">Curent Record</h4>
                                
                          

                   	  <div class='content table-responsive table-full-width'>
							<table class='table table-hover table-striped'>
<?php
								
include '../db.php';

$rows=$db->query("SELECT `clinic`, `imune_t`, `dos`, `date`,  `d_name`, `comment` FROM `healthdata` WHERE id = $loggedin_id");



                                  echo"  <thead>
                                        <th>Clinic</th>
                                    	<th>Vaccine</th>
                                    	<th>Dose</th>
                                    	<th>Date</th>                                    											
										<th>Comments</th>
										<th>Doc Name</th>
                                    </thead>";
									echo  " <tbody>";
									
while(list($clinic, $imune_t, $dos, $date, $d_name,  $comment )=$rows->fetch_row())
{									
                                 
                                       
  
  
  echo "<tr>";
  
  
  echo "<td>";
  echo "<input type='hidden'value='$clinic' />";
  echo "$clinic";
  echo "</td>";

    echo "<td>";
  echo "<input type='hidden'value='$imune_t' />";
  echo "$imune_t";
  echo "</td>";
 
  echo "<td>";
  echo "<input type='hidden'value='$dos' />";
  echo "$dos";
  echo "</td>";
  
  echo "<td>";
  echo "<input type='hidden'value='$date' />";
  echo "$date";
  echo "</td>";
 
 
  
echo "<td>";

  echo "$comment";
  echo "</td>";
  
  echo "<td>";

  echo "$d_name";
  echo "</td>";
    
  
  
  
  
  
}
echo "</tr>";
                                   echo" </tbody>";
								   
									?>
                                </table>
								<input class="hide-from-printer btn btn-outline-primary" type="button" value="Print" onclick="myFunction()">
								  </div>
                </div>
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