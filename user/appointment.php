<?php 
   include 'session.php';
    date_default_timezone_set("Asia/Kuala_Lumpur");
?>
<?php
include('db.php');

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
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Light Bootstrap Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
   


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <script src="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
</head>
<body>

<div class="wrapper">
    <!--- sidenav start here --->
<?php
			include 'sidenav.php'
			
			?>

<!-- sidenav end here--->
    	


    <div class="main-panel">
		
		<!--topnav-->
		<?php
			include 'topnav.php'
			
			?>
		<!---topnav end here--->


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Appointment and Reminder List</h4>
                               
                            </div>
                            <div class='content table-responsive table-full-width'>
							<table class='table table-hover table-striped'>
<?php
								
include 'db.php';

$rows=$db->query("SELECT `h_id`,`clinic`, `imune_t`, `dos`, `date`,  `d_name`, `height`, `weight`, `head_c`, `comment`, `a_vaccine`, `a_date`, `a_duration`, `a_remark` FROM `healthdata` WHERE id = $loggedin_id");



                                  echo"  <thead>
                                        <th>No</th>
                                    	<th>Next Vaccine</th>
										<th>Appoiment's Date</th>
										<th>Remark</th>
										
                                    </thead>";
									echo  " <tbody>";
									 $counter = 1; 
while(list($h_id, $clinic, $imune_t, $dos, $date, $d_name, $height, $weight, $head_c, $comment, $a_vaccine, $a_date, $a_duration, $a_remark )=$rows->fetch_row())
{									
                                 
                                       
  
  
  echo "<tr>";
  
  echo "<td>";
  echo "$counter";
  echo "</td>";
  
   echo "<td>";
  echo "$a_vaccine";
  echo "</td>";
  
  
   echo "<td>";
  echo "$a_date";
  echo "</td>";
  
   echo "<td>";
  echo "$a_remark";
  echo "</td>";
  
  
  
   echo "<td>";

				if($a_remark == 'Not meet yet'){
echo ' <a class="btn btn-mini btn-info" href="done.php?h_id='.$h_id.'">Done</a> ';
					}
					elseif($a_remark == 'Done'){

					}
					else{
					}					
				
    echo "</td>";
  
  
  
}
echo "</tr>";
                                   echo" </tbody>";
								    $counter++;
									?>
                                </table>
								  </div>
                        </div>
                    </div>

                   
                </div>



               
            </div>
        </div>


        <?php 
include 'footer.php'
?>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
	<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    
	

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	

	

</html>
