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
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <script src="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
	<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
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
		
                                <h4 class="title">Growth Chart</h4>
                                
                          

                   	  <div class="panel panel-Primary">
                    <div class="panel-heading " style="background-color:#CD5C5C;">Growth Chart Model (Weight)
					
					
					</div>
                   
                    <div class="panel-body">
					
 <div class="col-md-12">
								 
							<?php	 
								 
								 if($gender == "Male")
    {
        echo "<div id='wfg' style='width: 570px; height: 400px; margin: 0 auto'></div>";



    }
    else if($gender == "Female")
    {
 echo "<div class='responsive-image' id='wgg' style='width: 570px; height: 400px; margin: 0 auto'></div>";

    }
	?>
							
							</div>
							</div>
					
					
                       <!--- letak sini--->
                    </div>
					<hr>
					<div class='content table-responsive table-full-width'>
							<table class='table table-hover table-striped'>
<?php
								
include '../db.php';

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
								  <br>
								  <br>
								  <br>
								  <br>
								  
								  <div class="panel panel-Primary">
                    <div class="panel-heading " style="background-color:#CD5C5C;">Growth Chart Model (Head Circumference)
					
					
					</div>
                   
                    <div class="panel-body">
					
 <div class="col-md-12">
								 
							<?php	 								 
								 if($gender == "Male")
    {
        echo "<div id='hfg' style='width: 570px; height: 400px; margin: 0 auto'></div>";

    }
    else if($gender == "Female")
    {
 echo "<div class='responsive-image' id='hgg' style='width: 570px; height: 400px; margin: 0 auto'></div>";

    }
	?>
							
							</div>
							</div>
					
					
                       <!--- letak sini--->
                    </div>
						
<div class='content table-responsive table-full-width'>
							<table class='table table-hover table-striped'>
<?php
								
include '../db.php';

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
								  <br>
								  <br>
								  <br>
								  <br>
								  <br>
								  <br>
								  <br>
								  <br>
								  
								  
								  <div class="panel panel-Primary">
                    <div class="panel-heading " style="background-color:#CD5C5C;">Growth Chart Model (Height)
					
					<?php
					$a="php";
					$a= $a+1;
					echo $a;
					?>
					</div>
                   
                    <div class="panel-body">
					
 <div class="col-md-12">
								 
							<?php	 
								 
								 if($gender == "Male")
    {
        echo "<div id='hwfg' style='width: 570px; height: 400px; margin: 0 auto'></div>";



    }
    else if($gender == "Female")
    {
 echo "<div class='responsive-image' id='hwgg' style='width: 570px; height: 400px; margin: 0 auto'></div>";

    }
	?>
							
							</div>
							</div>
					
					
                       <!--- letak sini--->
                    </div>
								  
						
 <div class='content table-responsive table-full-width'>
							<table class='table table-hover table-striped'>
<?php
								
include '../db.php';

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
						
								  
								<input class="hide-from-printer btn btn-outline-primary" type="button" value="Print" onclick="myFunction()">
								  
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
include '../db.php';

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
include '../db.php';

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
Highcharts.chart('hfg', {
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
include '../db.php';

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
Highcharts.chart('hgg', {
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
include '../db.php';

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
Highcharts.chart('hwfg', {
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
include '../db.php';

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
Highcharts.chart('hwgg', {
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
include '../db.php';

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
</html>