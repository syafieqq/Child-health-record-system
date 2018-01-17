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
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Light Bootstrap Table Heading</h4>
                                <p class="category">Created using Roboto Font Family</p>
                            </div>
                            <div class="content">

                                <div class="typo-line">
                                    <h1><p class="category">Header 1</p>Light Bootstrap Table Heading </h1>
                                </div>

                                    <div class="typo-line">
                                    <h2><p class="category">Header 2</p>Light Bootstrap Table Heading</h2>
                                </div>
                                <div class="typo-line">
                                    <h3><p class="category">Header 3</p>Light Bootstrap Table Heading</h3>
                                </div>
                                <div class="typo-line">
                                    <h4><p class="category">Header 4</p>Light Bootstrap Table Heading</h4>
                                </div>
                                <div class="typo-line">
                                    <h5><p class="category">Header 5</p>Light Bootstrap Table Heading</h5>
                                </div>
                                 <div class="typo-line">
                                    <h6><p class="category">Header 6</p>Light Bootstrap Table Heading</h6>
                                </div>
                                <div class="typo-line">
                                    <p><span class="category">Paragraph</span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</p>
                                </div>
                                <div class="typo-line">
                                    <p class="category">Quote</p>
                                    <blockquote>
                                     <p>
                                     Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.
                                     </p>
                                     <small>
                                     Steve Jobs, CEO Apple
                                     </small>
                                    </blockquote>
                                </div>

                                <div class="typo-line">
                                    <p class="category">Muted Text</p>
                                    <p class="text-muted">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.
                                    </p>
                                </div>
                                <div class="typo-line">
                                    <!--
                                     there are also "text-info", "text-success", "text-warning", "text-danger" clases for the text
                                     -->
                                    <p class="category">Coloured Text</p>
                                    <p class="text-primary">
                                        Text Primary - Light Bootstrap Table Heading and complex bootstrap dashboard you've ever seen on the internet.
                                    </p>
                                    <p class="text-info">
                                        Text Info - Light Bootstrap Table Heading and complex bootstrap dashboard you've ever seen on the internet.
                                    </p>
                                    <p class="text-success">
                                        Text Success - Light Bootstrap Table Heading and complex bootstrap dashboard you've ever seen on the internet.
                                    </p>
                                    <p class="text-warning">
                                        Text Warning - Light Bootstrap Table Heading and complex bootstrap dashboard you've ever seen on the internet.
                                    </p>
                                    <p class="text-danger">
                                        Text Danger - Light Bootstrap Table Heading and complex bootstrap dashboard you've ever seen on the internet.
                                    </p>
                                </div>

                                <div class="typo-line">
                                    <h2><p class="category">Small Tag</p>Header with small subtitle <br><small>".small" is a tag for the headers</small> </h2>
                                </div>


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
	<script src="assets/js/demo.js"></script>

</html>