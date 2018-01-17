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
	<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
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
                                <h4 class="title">Growth Measurement</h4>
                                <p class="category">Last Campaign Performance</p>
                            </div>
							<hr>
  <div class="content">
    	<div class="row">
        	<div class="col-md-3">
            	<div class="panel panel-primary">
            	<div class="panel-heading" style="background-color:#CD5C5C;">Child Growth Standard</div>
                
                    <div class="panel-body">
						
                    	<a href="weightchild.php"><button class="btn btn-block btn-default ">WEIGHT</button></a>
                        <a href="heightchild.php"><button class="btn btn-block btn-default">HEIGHT</button></a>
                        <a href="headchild.php"><button class="btn btn-block btn-default">HEAD CIRCUMFERENCE</button></a>
                       
                    </div>
            	</div>
				
            </div>
            
            <div class="col-md-9">
                <div class="panel panel-Primary">
                    <div class="panel-heading " style="background-color:#CD5C5C;">Growth Chart Model 
					
					
					</div>
                   
                    <div class="panel-body">
					
 <div class="col-md-8">
								 
							<?php	 								 
								 if($gender == "Male")
    {
        echo "<div id='wfg' style='width: 670px; height: 500px; margin: 0 auto'></div>";

    }
    else if($gender == "Female")
    {
 echo "<div class='responsive-image' id='wgg' style='width: 670px; height: 500px; margin: 0 auto'></div>";

    }
	?>
							
							</div>
							</div>
					
					
                       <!--- letak sini--->
                    </div>
                </div>
				
            </div>
        </div>
        
       
    </div>
                        </div>
						
						<div class="col-md-12">
                       	    <div class="card">
                            <div class="header">
                                <h4 class="title">Height Circumference History</h4>
                                <p class="category">Created using Roboto Font Family</p>
                            </div>
							<hr>
								  <div class='content table-responsive table-full-width'>
							<table class='table table-hover table-striped'>
<?php
								
include 'db.php';

$rows=$db->query("SELECT `clinic`, `imune_t`, `dos`, `date`,  `d_name`, `height`, `weight`, `head_c`, `comment` FROM `healthdata` WHERE id = $loggedin_id");



                                  echo"  <thead>
                                        <th>No</th>
                                    	<th>Date</th>
										<th>Head Circumference</th>
										
                                    </thead>";
									echo  " <tbody>";
									 $counter = 1; 
while(list($clinic, $imune_t, $dos, $date, $d_name, $height, $weight, $head_c, $comment )=$rows->fetch_row())
{									
                                 
                                       
  
  
  echo "<tr>";
  
  echo "<td>";
  echo "$counter";
  echo "</td>";
  
   echo "<td>";
  echo "$date";
  echo "</td>";
  
  
   echo "<td>";
  echo "$head_c";
  echo "</td>";
  $counter++;
}
echo "</tr>";
                                   echo" </tbody>";
								    
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
</div>


</body>

<script>
Highcharts.chart('wfg', {
    chart: {
        type: 'spline'
    },
    title: {
        text: 'Head circumference-for-age BOYS' 
    },
    
        xAxis: {
       
    
        title: {
            text: 'Age by Month'
        },
        min: 0,
        tickInterval: 1
    },
    
 
    yAxis: {
        title: {
            text: 'Height circumference (cm)'
        },
        min: 30,
        max: 52,
        tickInterval: 0.5
        },
    
    tooltip: { headerFormat: '<b>{series.name}</b><br>', pointFormat: '{point.x:.2f} month, {point.y:.2f} kg' },

    plotOptions: {
        spline: {
            marker: {
                enabled: false
            }
            
        }
        
       
        
       
    },

    series: [{
        name: '5 Percentile',
        color: '#FF0000', //red
        
        data: [
         [0,	32.14881105],
[0.5,	33.83391575],
[1.5,	36.26427603],
[2.5,	37.97958783],
[3.5,	39.27893049],
[4.5,	40.30765556],
[5.5,	41.14714268],
[6.5,	41.84741554],
[7.5,	42.44134027],
[8.5,	42.95162383],
[9.5,	43.39457866],
[10.5,	43.78229887],
[11.5,	44.12398596],
[12.5,	44.42679395],
[13.5,	44.69638826],
[14.5,	44.93732702],
[15.5,	45.1533284],
[16.5,	45.34746216],
[17.5,	45.52229008],
[18.5,	45.67997038],
[19.5,	45.82233697],
[20.5,	45.95096016],
[21.5,	46.06719402],
[22.5,	46.17221358],
[23.5,	46.26704456],
[24.5,	46.35258644]



        ]
    }, {
         name: '25 Percentile',
         color: '#0000FF', //blue
       data: [
            [0,	34.46951803],
[0.5,	35.93986771],
[1.5,	38.07877607],
[2.5,	39.60636994],
[3.5,	40.77712846],
[4.5,	41.71483367],
[5.5,	42.48888872],
[6.5,	43.14204136],
[7.5,	43.70245428],
[8.5,	44.18963565],
[9.5,	44.61764431],
[10.5,	44.99693519],
[11.5,	45.33548679],
[12.5,	45.6395204],
[13.5,	45.91397652],
[14.5,	46.16284044],
[15.5,	46.38937093],
[16.5,	46.5962646],
[17.5,	46.78577645],
[18.5,	46.95980996],
[19.5,	47.1199854],
[20.5,	47.2676925],
[21.5,	47.4041314],
[22.5,	47.53034509],
[23.5,	47.64724492],
[24.5,	47.75563267]



        ]
    }, {
         name: '50 Percentile',
         color: '#00FF00', //green
     data: [
[0,	35.81366835],
[0.5,	37.19361054],
[1.5,	39.20742929],
[2.5,	40.65233195],
[3.5,	41.76516959],
[4.5,	42.66116148],
[5.5,	43.40488731],
[6.5,	44.03609923],
[7.5,	44.58096912],
[8.5,	45.05761215],
[9.5,	45.4790756],
[10.5,	45.85505706],
[11.5,	46.19295427],
[12.5,	46.49853438],
[13.5,	46.77637684],
[14.5,	47.03017599],
[15.5,	47.2629533],
[16.5,	47.47720989],
[17.5,	47.67503833],
[18.5,	47.85820606],
[19.5,	48.02821867],
[20.5,	48.18636864],
[21.5,	48.3337732],
[22.5,	48.47140432],
[23.5,	48.60011223],
[24.5,	48.72064621]

					


        ]
        }
        ,
    {
         name: '75 Percentile',
         color:'#000',//black
        data: [
        [0,	37.00426196],
[0.5,	38.3212548],
[1.5,	40.2498675],
[2.5,	41.63967944],
[3.5,	42.71454952],
[4.5,	43.58358267],
[5.5,	44.30801],
[6.5,	44.92554888],
[7.5,	45.46103549],
[8.5,	45.93165855],
[9.5,	46.34979269],
[10.5,	46.72463077],
[11.5,	47.06318161],
[12.5,	47.37090639],
[13.5,	47.65213989],
[14.5,	47.9103782],
[15.5,	48.14848042],
[16.5,	48.36881356],
[17.5,	48.57335854],
[18.5,	48.76378933],
[19.5,	48.94153284],
[20.5,	49.10781495],
[21.5,	49.26369641],
[22.5,	49.41010098],
[23.5,	49.54783776],
[24.5,	49.67762038],


        ]
        },
        {
         name: '97 Percentile',
         color: '#FFFF00',//yellow
       data: [
          [0,	38.85417217],
[0.5,	40.10028445],
[1.5,	41.94137873],
[2.5,	43.28180775],
[3.5,	44.3273323],
[4.5,	45.17876946],
[5.5,	45.89299742],
[6.5,	46.50523827],
[7.5,	47.03879825],
[8.5,	47.50989695],
[9.5,	47.93026746],
[10.5,	48.30866909],
[11.5,	48.65181107],
[12.5,	48.96494367],
[13.5,	49.25225076],
[14.5,	49.51711865],
[15.5,	49.76232529],
[16.5,	49.99017661],
[17.5,	50.20260675],
[18.5,	50.40125302],
[19.5,	50.58751304],
[20.5,	50.76258871],
[21.5,	50.92752068],
[22.5,	51.0832155],
[23.5,	51.23046767],
[24.5,	51.36997568]


        ]
        },
		   {
   
    name: 'My percentile',
   
      marker: {
            symbol: 'square',
            enabled: true,
        },
    color: '#FF69B4', //pink
        data: [
		   		 <?php								
include 'db.php';

$rows=$db->query("SELECT `duration`, `head_c`FROM `healthdata`  WHERE id = $loggedin_id ");
									
while(list($duration, $head_c)=$rows->fetch_row())
{									                       
echo "[ $duration ,$head_c ],";

}							   
?>
    
	
	
        ]
    
   
  }
        
       
  
   
    
    
    ]
});




</script>
<script>
Highcharts.chart('wgg', {
    chart: {
        type: 'spline'
    },
    title: {
        text: 'Height circumference-for-age GIRLS' 
    },
    
        xAxis: {
       
    
        title: {
            text: 'Age by Month'
        },
        min: 0,
        tickInterval: 1
    },
    
 
     
    yAxis: {
        title: {
            text: 'Height circumference (cm)'
        },
        min: 32,
        max: 52,
        tickInterval: 0.5
        },
     tooltip: { headerFormat: '<b>{series.name}</b><br>', pointFormat: '{point.x:.2f} month, {point.y:.2f} kg' },

    plotOptions: {
        spline: {
            marker: {
                enabled: false
            }
            
        }
        
       
        
       
    },

    series: [{
        name: '5 Percentile',
        color: '#FF0000', //red
        
        data: [
        [0,	32.25089861],
[0.5,	33.68743507],
[1.5,	35.77560367],
[2.5,	37.26521982],
[3.5,	38.40560987],
[4.5,	39.31813786],
[5.5,	40.07085921],
[6.5,	40.70567458],
[7.5,	41.25016088],
[8.5,	41.72340175],
[9.5,	42.1391311],
[10.5,	42.50754798],
[11.5,	42.83642568],
[12.5,	43.13181766],
[13.5,	43.39852553],
[14.5,	43.64041855],
[15.5,	43.86065785],
[16.5,	44.06185727],
[17.5,	44.24620133],
[18.5,	44.4155332],
[19.5,	44.57142131],
[20.5,	44.71521065],
[21.5,	44.84806267],
[22.5,	44.9709867],
[23.5,	45.08486501],
[24.5,	45.19047292]

]

    }, {
         name: '25 Percentile',
         color: '#0000FF', //blue
       data: [
            [0,	33.65186554],
[0.5,	35.02508397],
[1.5,	37.03281566],
[2.5,	38.47603153],
[3.5,	39.58904997],
[4.5,	40.4861083],
[5.5,	41.23135738],
[6.5,	41.86434514],
[7.5,	42.41113299],
[8.5,	42.88977797],
[9.5,	43.31329057],
[10.5,	43.69134604],
[11.5,	44.03132658],
[12.5,	44.33898883],
[13.5,	44.61890505],
[14.5,	44.87476468],
[15.5,	45.10958609],
[16.5,	45.32586864],
[17.5,	45.52570414],
[18.5,	45.71086007],
[19.5,	45.88284266],
[20.5,	46.04294544],
[21.5,	46.19228703],
[22.5,	46.33184096],
[23.5,	46.46245944],
[24.5,	46.58489242]



        ]
    }, {
         name: '50 Percentile',
         color: '#00FF00', //green
     data: [
[0,	34.7115617],
[0.5,	36.03453876],
[1.5,	37.97671987],
[2.5,	39.3801263],
[3.5,	40.46773733],
[4.5,	41.34841008],
[5.5,	42.0833507],
[6.5,	42.71033603],
[7.5,	43.25428882],
[8.5,	43.73249646],
[9.5,	44.15742837],
[10.5,	44.53836794],
[11.5,	44.88240562],
[12.5,	45.19507651],
[13.5,	45.48078147],
[14.5,	45.74307527],
[15.5,	45.98486901],
[16.5,	46.20857558],
[17.5,	46.41621635],
[18.5,	46.60950084],
[19.5,	46.78988722],
[20.5,	46.95862881],
[21.5,	47.11681039],
[22.5,	47.26537682],
[23.5,	47.40515585],
[24.5,	47.53687649]


					


        ]
        }
        ,
    {
         name: '75 Percentile',
         color:'#000',//black
        data: [

         [0,	35.85124044],
[0.5,	37.11806755],
[1.5,	38.9853304],
[2.5,	40.34145495],
[3.5,	41.39732095],
[4.5,	42.2560375],
[5.5,	42.97566066],
[6.5,	43.59207071],
[7.5,	44.1289691],
[8.5,	44.60281599],
[9.5,	45.025498],
[10.5,	45.40587424],
[11.5,	45.75071845],
[12.5,	46.06532374],
[13.5,	46.3539026],
[14.5,	46.61986076],
[15.5,	46.86598965],
[16.5,	47.09460485],
[17.5,	47.30764771],
[18.5,	47.50676129],
[19.5,	47.69334806],
[20.5,	47.86861428],
[21.5,	48.03360465],
[22.5,	48.18922971],
[23.5,	48.3362876],
[24.5,	48.47548169]


        ]
        },
        {
         name: '97 Percentile',
         color: '#FFFF00',//yellow
       data: [
[0,	38.12110271],
[0.5,	39.27005698],
[1.5,	40.97482424],
[2.5,	42.22321458],
[3.5,	43.20260356],
[4.5,	44.00485959],
[5.5,	44.68183088],
[6.5,	45.26562921],
[7.5,	45.77750554],
[8.5,	46.23224218],
[9.5,	46.64053024],
[10.5,	47.01034581],
[11.5,	47.34779597],
[12.5,	47.65765724],
[13.5,	47.9437344],
[14.5,	48.20910612],
[15.5,	48.45629769],
[16.5,	48.68740549],
[17.5,	48.90418837],
[18.5,	49.10813597],
[19.5,	49.30052069],
[20.5,	49.48243771],
[21.5,	49.65483625],
[22.5,	49.81854421],
[23.5,	49.97428788],
[24.5,	50.12270782]



        ]
        },
			   {
   
    name: 'My percentile',
   
      marker: {
            symbol: 'square',
            enabled: true,
        },
    color: '#FF69B4', //pink
        data: [
		   		 <?php								
include 'db.php';

$rows=$db->query("SELECT `duration`, `head_c`FROM `healthdata`  WHERE id = $loggedin_id ");
									
while(list($duration, $head_c)=$rows->fetch_row())
{									                       
echo "[ $duration ,$head_c ],";

}							   
?>
    
	
	
        ]
    
   
  }
        
       
  
   
    
    
    ]
});




</script>

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
