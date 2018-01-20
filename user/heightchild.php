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
                                <h4 class="title">Height History</h4>
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
										<th>Height</th>
										
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
  echo "$height";
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
        text: 'Height-for-age BOYS' 
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
            text: 'Height (cm)'
        },
        min: 45,
        max: 95,
        tickInterval: 5
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
          [0,	45.5684091],
[0.5,	48.55809206],
[1.5,	52.72610659],
[2.5,	55.7734505],
[3.5,	58.23744339],
[4.5,	60.33646905],
[5.5,	62.18260807],
[6.5,	63.84166131],
[7.5,	65.35583849],
[8.5,	66.75397985],
[9.5,	68.05674555],
[10.5,	69.27949219],
[11.5,	70.43397431],
[12.5,	71.52941204],
[13.5,	72.57318381],
[14.5,	73.57129631],
[15.5,	74.5287119],
[16.5,	75.44958259],
[17.5,	76.3374214],
[18.5,	77.19523002],
[19.5,	78.02559584],
[20.5,	78.83076661],
[21.5,	79.61270882],
[22.5,	80.37315285],
[23.5,	81.11363482],
[24.5,	81.83551818]


        ]
    }, {
         name: '25 Percentile',
         color: '#0000FF', //blue
       data: [
            [0,	48.18937381],
[0.5,	50.97918889],
[1.5,	54.97910441],
[2.5,	57.97439882],
[3.5,	60.43433439],
[4.5,	62.55408849],
[5.5,	64.43546338],
[6.5,	66.13895735],
[7.5,	67.70375],
[8.5,	69.15681718],
[9.5,	70.51760636],
[10.5,	71.80064815],
[11.5,	73.01711846],
[12.5,	74.17581483],
[13.5,	75.28380189],
[14.5,	76.34684777],
[15.5,	77.36973004],
[16.5,	78.35645533],
[17.5,	79.31042062],
[18.5,	80.23453383],
[19.5,	81.13130578],
[20.5,	82.00292107],
[21.5,	82.85129371],
[22.5,	83.67811296],
[23.5,	84.48487091],
[24.5,	85.27290404]


        ]
    }, {
         name: '50 Percentile',
         color: '#00FF00', //green
     data: [
[0,	49.98888408],
[0.5,	52.6959753],
[1.5,	56.62842855],
[2.5,	59.60895343],
[3.5,	62.07700027],
[4.5,	64.2168641],
[5.5,	66.1253149],
[6.5,	67.8601799],
[7.5,	69.45908458],
[8.5,	70.94803912],
[9.5,	72.34586111],
[10.5,	73.6666541],
[11.5,	74.92129717],
[12.5,	76.11837536],
[13.5,	77.26479911],
[14.5,	78.36622309],
[15.5,	79.4273405],
[16.5,	80.45209492],
[17.5,	81.44383603],
[18.5,	82.40543643],
[19.5,	83.33938063],
[20.5,	84.24783394],
[21.5,	85.13269658],
[22.5,	85.9956488],
[23.5,	86.8381751],
[24.5,	87.66160934]

					


        ]
        }
        ,
    {
         name: '75 Percentile',
         color:'#000',//black
        data: [
          [0,	51.77125749],
[0.5,	54.44054313],
[1.5,	58.35059408],
[2.5,	61.33788093],
[3.5,	63.82542604],
[4.5,	65.99130663],
[5.5,	67.92934759],
[6.5,	69.6957947],
[7.5,	71.32735362],
[8.5,	72.84947001],
[9.5,	74.2806019],
[10.5,	75.63461845],
[11.5,	76.92224328],
[12.5,	78.15195849],
[13.5,	79.33060669],
[14.5,	80.46379892],
[15.5,	81.55620169],
[16.5,	82.61174387],
[17.5,	83.633769],
[18.5,	84.62514968],
[19.5,	85.58837479],
[20.5,	86.5256172],
[21.5,	87.43878685],
[22.5,	88.32957471],
[23.5,	89.19947894],
[24.5,	90.04984549]

        ]
        },
        {
         name: '97 Percentile',
         color: '#FFFF00',//yellow
       data: [
           [0,	54.91900445],
[0.5,	57.62984323],
[1.5,	61.62591488],
[2.5,	64.69240909],
[3.5,	67.25189597],
[4.5,	69.48353966],
[5.5,	71.48218225],
[6.5,	73.30488349],
[7.5,	74.98899282],
[8.5,	76.56047112],
[9.5,	78.03819367],
[10.5,	79.43637498],
[11.5,	80.76602067],
[12.5,	82.03585474],
[13.5,	83.25292428],
[14.5,	84.4230157],
[15.5,	85.55094704],
[16.5,	86.64077902],
[17.5,	87.69597052],
[18.5,	88.71949558],
[19.5,	89.71393273],
[20.5,	90.68153436],
[21.5,	91.62428129],
[22.5,	92.54392389],
[23.5,	93.44202663],
[24.5,	94.31998042]


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

$rows=$db->query("SELECT `duration`, `height`FROM `healthdata`  WHERE id = $loggedin_id ");
									
while(list($duration, $height)=$rows->fetch_row())
{									                       
echo "[ $duration ,$height ],";

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
        text: 'Height-for-age GIRLS' 
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
            text: 'Height (cm)'
        },
        min: 40,
        max: 100,
        tickInterval: 5
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
         [0,	45.5756074],
[0.5,	47.96323977],
[1.5,	51.4799569],
[2.5,	54.17907364],
[3.5,	56.43334947],
[4.5,	58.40032437],
[5.5,	60.16323075],
[6.5,	61.77208015],
[7.5,	63.25957954],
[8.5,	64.64844828],
[9.5,	65.95519757],
[10.5,	67.19225646],
[11.5,	68.36924855],
[12.5,	69.49379917],
[13.5,	70.57206791],
[14.5,	71.60911222],
[15.5,	72.60914323],
[16.5,	73.57571021],
[17.5,	74.51183666],
[18.5,	75.42012252],
[19.5,	76.30282224],
[20.5,	77.16190547],
[21.5,	77.9991046],
[22.5,	78.81595272],
[23.5,	79.61381456],
[24.5,	80.39390918]
]

    }, {
         name: '25 Percentile',
         color: '#0000FF', //blue
       data: [
            [0,	47.68345469],
[0.5,	50.09685513],
[1.5,	53.69078138],
[2.5,	56.47125217],
[3.5,	58.80346208],
[4.5,	60.84386229],
[5.5,	62.67589709],
[6.5,	64.35005344],
[7.5,	65.89952096],
[8.5,	67.34744593],
[9.5,	68.71070188],
[10.5,	70.00202169],
[11.5,	71.23128342],
[12.5,	72.40632639],
[13.5,	73.5334912],
[14.5,	74.61798935],
[15.5,	75.66416403],
[16.5,	76.67567844],
[17.5,	77.65565499],
[18.5,	78.60677999],
[19.5,	79.53138379],
[20.5,	80.43150301],
[21.5,	81.30892951],
[22.5,	82.16524937],
[23.5,	83.00187362],
[24.5,	83.82006698]


        ]
    }, {
         name: '50 Percentile',
         color: '#00FF00', //green
     data: [
[0,	49.28639612],
[0.5,	51.68358057],
[1.5,	55.28612813],
[2.5,	58.09381906],
[3.5,	60.45980763],
[4.5,	62.53669656],
[5.5,	64.40632762],
[6.5,	66.11841553],
[7.5,	67.70574419],
[8.5,	69.19123614],
[9.5,	70.59163924],
[10.5,	71.91961673],
[11.5,	73.1850104],
[12.5,	74.39564379],
[13.5,	75.5578544],
[14.5,	76.67685871],
[15.5,	77.75700986],
[16.5,	78.80198406],
[17.5,	79.81491852],
[18.5,	80.79851532],
[19.5,	81.75512092],
[20.5,	82.6867881],
[21.5,	83.59532461],
[22.5,	84.48233206],
[23.5,	85.34923624],
[24.5,	86.1973169]

					


        ]
        }
        ,
    {
         name: '75 Percentile',
         color:'#000',//black
        data: [

          [0,	51.01869574],
[0.5,	53.36362339],
[1.5,	56.93136077],
[2.5,	59.74044694],
[3.5,	62.12329513],
[4.5,	64.22507127],
[5.5,	66.12417852],
[6.5,	67.86849937],
[7.5,	69.4897495],
[8.5,	71.01018905],
[9.5,	72.44613669],
[10.5,	73.80996848],
[11.5,	75.11132946],
[12.5,	76.35790617],
[13.5,	77.55593964],
[14.5,	78.71057805],
[15.5,	79.82612621],
[16.5,	80.90622641],
[17.5,	81.95399237],
[18.5,	82.9721104],
[19.5,	83.96291696],
[20.5,	84.92845908],
[21.5,	85.87054197],
[22.5,	86.79076712],
[23.5,	87.69056226],
[24.5,	88.57120953]


        ]
        },
        {
         name: '97 Percentile',
         color: '#FFFF00',//yellow
       data: [
[0,	54.49527364],
[0.5,	56.62728063],
[1.5,	60.00337771],
[2.5,	62.74546997],
[3.5,	65.115773],
[4.5,	67.23397741],
[5.5,	69.16667619],
[6.5,	70.95545459],
[7.5,	72.6283475],
[8.5,	74.20531837],
[9.5,	75.70118113],
[10.5,	77.12728799],
[11.5,	78.49256622],
[12.5,	79.80418693],
[13.5,	81.06801366],
[14.5,	82.28891385],
[15.5,	83.47098066],
[16.5,	84.61769529],
[17.5,	85.73204785],
[18.5,	86.81662924],
[19.5,	87.87370201],
[20.5,	88.90525584],
[21.5,	89.91305149],
[22.5,	90.89865612],
[23.5,	91.86347264],
[24.5,	92.80875921]


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

$rows=$db->query("SELECT `duration`, `height`FROM `healthdata`  WHERE id = $loggedin_id ");
									
while(list($duration, $height)=$rows->fetch_row())
{									                       
echo "[ $duration ,$height ],";

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
