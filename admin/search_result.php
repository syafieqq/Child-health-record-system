<?php 
 date_default_timezone_set("Asia/Kuala_Lumpur");
   include 'session.php';
?>
<?php
include('db.php');

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
    <link href="assets/css/demo.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="assets/style.css">

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>
<svg xmlns="http://www.w3.org/2000/svg" style="display:none">
  <symbol xmlns="http://www.w3.org/2000/svg" id="sbx-icon-search-13" viewBox="0 0 40 40">
    <path d="M26.804 29.01c-2.832 2.34-6.465 3.746-10.426 3.746C7.333 32.756 0 25.424 0 16.378 0 7.333 7.333 0 16.378 0c9.046 0 16.378 7.333 16.378 16.378 0 3.96-1.406 7.594-3.746 10.426l10.534 10.534c.607.607.61 1.59-.004 2.202-.61.61-1.597.61-2.202.004L26.804 29.01zm-10.426.627c7.323 0 13.26-5.936 13.26-13.26 0-7.32-5.937-13.257-13.26-13.257C9.056 3.12 3.12 9.056 3.12 16.378c0 7.323 5.936 13.26 13.258 13.26z"
    fill-rule="evenodd" />
  </symbol>
  <symbol xmlns="http://www.w3.org/2000/svg" id="sbx-icon-clear-3" viewBox="0 0 20 20">
    <path d="M8.114 10L.944 2.83 0 1.885 1.886 0l.943.943L10 8.113l7.17-7.17.944-.943L20 1.886l-.943.943-7.17 7.17 7.17 7.17.943.944L18.114 20l-.943-.943-7.17-7.17-7.17 7.17-.944.943L0 18.114l.943-.943L8.113 10z" fill-rule="evenodd" />
  </symbol>
</svg>

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
						<div class="row">
						
                            <div class="header">
							<div class="col-md-8">
                                <h4 class="title">Kids List</h4>
                                <p class="category">Here is a subtitle for this table</p>
								</div>
								
								<div class="col-md-4 text-right  ">
								
								<form method="GET" action="search_result.php"  class="searchbox sbx-custom">
  <div role="search" class="sbx-google__wrapper">
    <input type="search" name="search" id="search" onkeyup="myFunction()" placeholder="Search mykid number" autocomplete="off" required="required" class="sbx-custom__input">
    <button type="submit" title="Submit your search query." class="sbx-custom__submit" value="search">
      <svg role="img" aria-label="Search">
        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#sbx-icon-search-13"></use>
      </svg>
    </button>
    <button type="reset" title="Clear the search query." class="sbx-custom__reset">
      <svg role="img" aria-label="Reset">
        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#sbx-icon-clear-3"></use>
      </svg>
    </button>
  </div>
</form>
								
							</div>
                            </div>
							</div>
                            
							
							

                                
								<?php
								echo"<div class='content table-responsive table-full-width'>";
include 'db.php';
$search=$_GET['search'];
$rows=$db->query("SELECT * FROM users WHERE role != 'admin' AND (username like '%$search%' OR bname like '%$search%')");


echo"<table class='table table-hover table-striped' id='myTable'>";
                                  echo"  <thead>
                                        <th>ID</th>
                                    	<th>Name</th>
                                    	<th>Date of birthday</th>
                                    	<th>Gender</th>
                                    	<th>Religion</th>
										<th>Race</th>
										<th>Mykid Num</th>
										<th>Data</th>
                                    </thead>";
									 echo  " <tbody>";
while(list($id, $bname, $dob, $bgender, $breligion, $brace, $username)=$rows->fetch_row())
{									
                                
                                       
  
  
  echo "<tr>";
  
  
  echo "<td>";
  echo "<input type='hidden'value='$id' />";
  echo "$id";
  echo "</td>";

    echo "<td>";
  echo "<input type='hidden'value='$bname' />";
  echo "$bname";
  echo "</td>";
 
  echo "<td>";
  echo "<input type='hidden'value='$dob' />";
  echo "$dob";
  echo "</td>";
  
  echo "<td>";
  echo "<input type='hidden'value='$bgender' />";
  echo "$bgender";
  echo "</td>";
 
  echo "<td>";
  echo "<input type='hidden'value='$breligion' />";
  echo "$breligion";
  echo "</td>";

  echo "<td>";
  echo "<input type='hidden' value='$brace' />";
  echo "$brace";
  echo "</td>";

  echo "<td>";

  echo "$username";
  echo "</td>";
  

    echo "<td>";
 echo'<a href="viewrecord.php?id='.$id.'" target="_blank">View Data</a>';
  echo "</td>";
  
 
  
  
  
}
 echo "</tr>";
                                   echo" </tbody>";
								   echo"</table>";
								   
								  
								  echo"</div>";
									?>
                                

                            
                        </div>
						
						
			<div class='row'>
<div class='col-md-12 text-right'>
<a href='listboard.php' class='btn btn-info' role='button'>Display all</a>
&nbsp; &nbsp; &nbsp;
</div>		
           </div>			
						
						<br>
                    </div>
					
			
				
                </div>   


        </div>


        <?php 
include 'footer.php'
?>

    </div>
</div>


</body>
<script type="text/javascript">
  document.querySelector('.searchbox [type="reset"]').addEventListener('click', function() {  this.parentNode.querySelector('input').focus();});
</script></body>
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

   <script type="text/javascript">
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("search");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[6];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

	

</html>
