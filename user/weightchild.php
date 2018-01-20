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
                                <h4 class="title">Weight History</h4>
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
										<th>Weight (KG)</th>
										
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
  echo "$weight";
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
        text: 'Weight-for-age BOYS' 
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
            text: 'Weight (kg)'
        },
        min: 2,
        max: 17,
        tickInterval: 1
       
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
           [	0	,	2.526904	],
[	0.5	,	2.964656	],
[	1.5	,	3.774849	],
[	2.5	,	4.503255	],
[	3.5	,	5.157412	],
[	4.5	,	5.744752	],
[	5.5	,	6.272175	],
[	6.5	,	6.745993	],
[	7.5	,	7.171952	],
[	8.5	,	7.555287	],
[	9.5	,	7.900755	],
[	10.5	,	8.212684	],
[	11.5	,	8.495	],
[	12.5	,	8.751264	],
[	13.5	,	8.984701	],
[	14.5	,	9.198222	],
[	15.5	,	9.394454	],
[	16.5	,	9.575757	],
[	17.5	,	9.744251	],
[	18.5	,	9.90183	],
[	19.5	,	10.05019	],
[	20.5	,	10.19082	],
[	21.5	,	10.32507	],
[	22.5	,	10.4541	],
[23.5   , 10.57895],
[24.5   , 10.70051]

        ]
    }, {
         name: '25 Percentile',
         color: '#0000FF', //blue
       data: [
            [	0	,	3.150611	],
[	0.5	,	3.597396	],
[	1.5	,	4.428873	],
[	2.5	,	5.183378	],
[	3.5	,	5.866806	],
[	4.5	,	6.484969	],
[	5.5	,	7.043627	],
[	6.5	,	7.548346	],
[	7.5	,	8.004399	],
[	8.5	,	8.416719	],
[	9.5	,	8.789882	],
[	10.5	,	9.12811	],
[	11.5	,	9.435279	],
[	12.5	,	9.714942	],
[	13.5	,	9.970338	],
[	14.5	,	10.20442	],
[	15.5	,	10.41986	],
[	16.5	,	10.6191	],
[	17.5	,	10.80433	],
[	18.5	,	10.97753	],
[	19.5	,	11.14047	],
[	20.5	,	11.29477	],
[	21.5	,	11.44185	],
[	22.5	,	11.58298	],
[23.5   , 11.7193],
[24.5   , 11.85182]

        ]
    }, {
         name: '50 Percentile',
         color: '#00FF00', //green
     data: [
[0, 3.530203],
[0.5, 4.003106],
 [1.5, 4.879525],
[2.5, 5.672889],
[3.5, 6.391392],
[4.5, 7.041836],
 [5.5, 7.630425],
[6.5, 8.162951],
 [7.5, 8.644832],
[8.5, 9.08112],
[9.5, 9.4765],
[10.5, 9.835308],
[11.5, 10.16154],
 [12.5, 10.45885],
[13.5, 10.73063],
[14.5, 10.97992],
[15.5, 11.20956],
 [16.5, 11.42207],
[17.5, 11.61978],
[18.5, 11.80478],
[19.5, 11.97897],
[20.5, 12.14404],
[21.5, 12.30154],
 [22.5, 12.45283],
 [23.5   , 12.59913],
[24.5   , 12.74154]
					


        ]
        }
        ,
    {
         name: '75 Percentile',
         color:'#000',//black
        data: [
           [	0	,	3.879077	],
[	0.5	,	4.387423	],
[	1.5	,	5.327328	],
[	2.5	,	6.175598	],
[	3.5	,	6.942217	],
[	4.5	,	7.635323	],
[	5.5	,	8.262033	],
[	6.5	,	8.828786	],
[	7.5	,	9.34149	],
[	8.5	,	9.805593	],
[	9.5	,	10.22612	],
[	10.5	,	10.60772	],
[	11.5	,	10.95466	],
[	12.5	,	11.27087	],
[	13.5	,	11.55996	],
[	14.5	,	11.82524	],
[	15.5	,	12.06973	],
[	16.5	,	12.29617	],
[	17.5	,	12.50708	],
[	18.5	,	12.70473	],
[	19.5	,	12.89117	],
[	20.5	,	13.06825	],
[	21.5	,	13.23765	],
[	22.5	,	13.40086	],
[23.5   , 13.5592],
[24.5   , 13.71386]

        ]
        },
        {
         name: '97 Percentile',
         color: '#FFFF00',//yellow
       data: [
            [	0	,	4.446488	],
[	0.5	,	5.032625	],
[	1.5	,	6.121929	],
[	2.5	,	7.10625	],
[	3.5	,	7.993878	],
[	4.5	,	8.793444	],
[	5.5	,	9.513307	],
[	6.5	,	10.16135	],
[	7.5	,	10.74492	],
[	8.5	,	11.27084	],
[	9.5	,	11.74538	],
[	10.5	,	12.17436	],
[	11.5	,	12.56308	],
[	12.5	,	12.91645	],
[	13.5	,	13.23893	],
[	14.5	,	13.53462	],
[	15.5	,	13.80724	],
[	16.5	,	14.06019	],
[	17.5	,	14.29655	],
[	18.5	,	14.51909	],
[	19.5	,	14.73034	],
[	20.5	,	14.93256	],
[	21.5	,	15.12777	],
[	22.5	,	15.31777	],
[23.5   , 15.50418],
[24.5   , 15.68841]

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

$rows=$db->query("SELECT `duration`, `weight`FROM `healthdata`  WHERE id = $loggedin_id ");
									
while(list($duration, $weight)=$rows->fetch_row())
{									                       
echo "[ $duration ,$weight ],";

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
        text: 'Weight-for-age GIRLS' 
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
            text: 'Weight (kg)'
        },
        min: 2,
        max: 17,
        tickInterval: 1
       
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
          [0,	2.54790518],
[0.5,	2.894442278],
[1.5,	3.547610305],
[2.5,	4.150638506],
[3.5,	4.70712251],
[4.5,	5.220487543],
[5.5,	5.693974176],
[6.5,	6.130641295],
[7.5,	6.533372908],
[8.5,	6.904885578],
[9.5,	7.247735767],
[10.5,	7.564326904],
[11.5,	7.856916169],
[12.5,	8.127621012],
[13.5,	8.378425424],
[14.5,	8.611186014],
[15.5,	8.827637666],
[16.5,	9.029399482],
[17.5,	9.217979979],
[18.5,	9.394782429],
[19.5,	9.561109949],
[20.5,	9.718170424],
[21.5,	9.867081272],
[22.5,	10.00887405],
[23.5,	10.14449891],
[24.5,	10.27482891]
        ]
    }, {
         name: '25 Percentile',
         color: '#0000FF', //blue
       data: [
            [0,	3.06486465],
[0.5,	3.437628263],
[1.5,	4.13899376],
[2.5,	4.784820426],
[3.5,	5.379141034],
[4.5,	5.92588831],
[5.5,	6.428828208],
[6.5,	6.891533095],
[7.5,	7.317373091],
[8.5,	7.709516114],
[9.5,	8.070932165],
[10.5,	8.404399764],
[11.5,	8.712513432],
[12.5,	8.997691667],
[13.5,	9.262185089],
[14.5,	9.508084539],
[15.5,	9.737329319],
[16.5,	9.951714686],
[17.5,	10.15289979],
[18.5,	10.34241498],
[19.5,	10.52166904],
[20.5,	10.69195601],
[21.5,	10.85446195],
[22.5,	11.01027128],
[23.5,	11.16037297],
[24.5,	11.30566645]


        ]
    }, {
         name: '50 Percentile',
         color: '#00FF00', //green
     data: [
[0,	3.39918645],
[0.5,	3.79752846],
[1.5,	4.544776513],
[2.5,	5.230584214],
[3.5,	5.859960798],
[4.5,	6.437587751],
[5.5,	6.967850457],
[6.5,	7.454854109],
[7.5,	7.902436186],
[8.5,	8.314178377],
[9.5,	8.693418423],
[10.5,	9.043261854],
[11.5,	9.366593571],
[12.5,	9.666089185],
[13.5,	9.944226063],
[14.5,	10.20329397],
[15.5,	10.4454058],
[16.5,	10.67250698],
[17.5,	10.88638558],
[18.5,	11.08868151],
[19.5,	11.28089537],
[20.5,	11.46439708],
[21.5,	11.64043402],
[22.5,	11.81013895],
[23.5,	11.97453748],
[24.5,	12.13455528]



        ]
        }
        ,
    {
         name: '75 Percentile',
         color:'#000',//black
        data: [
          [0,	3.717519384],
[0.5,	4.145593668],
[1.5,	4.946765504],
[2.5,	5.680083196],
[3.5,	6.351511983],
[4.5,	6.966523789],
[5.5,	7.53018045],
[6.5,	8.047178246],
[7.5,	8.52187726],
[8.5,	8.958324062],
[9.5,	9.360270982],
[10.5,	9.7311934],
[11.5,	10.07430572],
[12.5,	10.39257636],
[13.5,	10.68874201],
[14.5,	10.96532105],
[15.5,	11.2246268],
[16.5,	11.46877937],
[17.5,	11.69971783],
[18.5,	11.91921144],
[19.5,	12.1288704],
[20.5,	12.3301562],
[21.5,	12.52439148],
[22.5,	12.71276942],
[23.5,	12.89636272],
[24.5,	13.07613212]


        ]
        },
        {
         name: '97 Percentile',
         color: '#FFFF00',//yellow
       data: [
           [0,	4.254922004],
[0.5,	4.743581789],
[1.5,	5.657379108],
[2.5,	6.492574414],
[3.5,	7.256165568],
[4.5,	7.954730061],
[5.5,	8.59441348],
[6.5,	9.180938407],
[7.5,	9.719620693],
[8.5,	10.2153883],
[9.5,	10.67280092],
[10.5,	11.0960696],
[11.5,	11.48907597],
[12.5,	11.85539095],
[13.5,	12.19829279],
[14.5,	12.52078451],
[15.5,	12.82561033],
[16.5,	13.11527219],
[17.5,	13.39204468],
[18.5,	13.65798985],
[19.5,	13.91497124],
[20.5,	14.1646673],
[21.5,	14.40858419],
[22.5,	14.64806798],
[23.5,	14.88431632],
[24.5,	15.11838945]


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

$rows=$db->query("SELECT `duration`, `weight`FROM `healthdata`  WHERE id = $loggedin_id ");
									
while(list($duration, $weight)=$rows->fetch_row())
{									                       
echo "[ $duration ,$weight ],";

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
    
	<script src="graph.js" type="text/javascript"></script>

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
