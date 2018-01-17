<?php 
 date_default_timezone_set("Asia/Kuala_Lumpur");
   include 'session.php';
?>
<?php
include('db.php');


?>
<?php

//getting id from url
$id=$_GET['id'];



//selecting data associated with this particular id
$sql = "SELECT * FROM users WHERE id = $id" ;

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


	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

	
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
			<div class="card card-user">
               
                    
                  <div class='row'>
<div class='col-md-12'  style="margin-top: 20px; margin-left: 20px;">
<a href='viewrecord.php?id=<?php echo $id ?>' class='btn btn-info' role='button'>Back</a>
&nbsp; &nbsp; &nbsp;

</div>		
           </div> 
				   
					 <div class="row">
                    <div class="col-md-12">
                        
						<style>
hr.style2 {
	border-top: 3px double #8c8b8b;
}

						</style>
						<hr class="style2">
						<p></p>
						
							<div class="row row-centered">  
					 <div class="col-md-2 col-centered">
					 </div>
					
                    <div class="col-md-8 col-centered">
					 <div class="panel panel-primary">
					 
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Profile</h3>
                            </div>
                            <div class="panel-body">
							
							<form>
<table width="100%"  height="180" >
  <tr id="column_539_" >
    <td width="180" class="inputLabel"><div id="input_label_539_">&nbsp;
		<b>Name</b></div></td>
    <td nowrap="nowrap" class="inputArea"><?php  echo  $name;  ?>&nbsp;</td>
  </tr>

    <tr id="column_539_" >
    <td width="150" class="inputLabel"><div id="input_label_539_">&nbsp;
		<b>Date of Birthday</b></div></td>
    <td nowrap="nowrap" class="inputArea"><?php  echo  $dob;  ?>&nbsp;</td>
  </tr>
  
    <tr id="column_539_" >
    <td width="150" class="inputLabel"><div id="input_label_539_">&nbsp;
		<b>Gender</b></div></td>
    <td nowrap="nowrap" class="inputArea"><?php  echo  $gender;  ?>&nbsp;</td>
  </tr>

    <tr id="column_539_" >
    <td width="150" class="inputLabel"><div id="input_label_539_">&nbsp;
		<b>Religion</b></div></td>
    <td nowrap="nowrap" class="inputArea"><?php  echo  $religion;  ?></td>
  </tr>
 
    <tr id="column_539_" >
    <td width="150" class="inputLabel"><div id="input_label_539_">&nbsp;
		<b>Race</b></div></td>
    <td nowrap="nowrap" class="inputArea"><?php  echo  $race;  ?>&nbsp;</td>
  </tr>

    
 
      </table>
</form>
</div>
</div>
</div>

 <div class="col-md-2 col-centered">
					 </div>
					
</div>

<hr class="style2">
<p></p>

<div class="row row-centered"> 
 <div class="col-md-2 col-centered">
					 </div>
					
<div class="col-md-8 col-centered">
 <div class="panel panel-primary">
	
                            <div class="panel-heading"> <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i>Details</h3>
                            </div>
                            <div class="panel-body">
                                


<form>
<table width="100%" height="180" >
  <tr id="column_539_" >
    <td width="180" class="inputLabel"><div id="input_label_539_">&nbsp;
		<b>Nickname</b></div></td>
    <td nowrap="nowrap" class="inputArea"><?php  echo  $nickname;  ?></td>
  </tr>

    <tr id="column_539_" >
    <td width="150" class="inputLabel"><div id="input_label_539_">&nbsp;
		<b>Place of Birthday</b></div></td>
    <td nowrap="nowrap" class="inputArea"><?php  echo  $pob;  ?></td>
  </tr>
  
    <tr id="column_539_" >
    <td width="150" class="inputLabel"><div id="input_label_539_">&nbsp;
		<b>Address</b></div></td>
    <td nowrap="nowrap" class="inputArea"><?php  echo  $address;  ?></td>
  </tr>

    <tr id="column_539_" >
    <td width="150" class="inputLabel"><div id="input_label_539_">&nbsp;
		<b>Postcode</b></div></td>
    <td nowrap="nowrap" class="inputArea"><?php  echo  $postcode;  ?></td>
  </tr>
 
    <tr id="column_539_" >
    <td width="150" class="inputLabel"><div id="input_label_539_">&nbsp;
		<b>Town</b></div></td>
    <td nowrap="nowrap" class="inputArea"><?php  echo  $town;  ?></td>
  </tr>

    
 
      </table>
</form>
								
                                <div class="text-right">
                                    <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                   
          </div>          

</div>
 <div class="col-md-2 col-centered">
					 </div>
					
				</div>			
							
                            <hr class="style2">
                            <div class="text-center">
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                            </div>
                        </div>
                    </div>
</div>
                </div>
            </div>
        </div>

	<?php
//  close  connection;
mysqli_close($db);

?>	
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
	<script src="assets/js/demo.js"></script>

</html>