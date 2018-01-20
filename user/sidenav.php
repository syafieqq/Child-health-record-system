
<div class="sidebar" data-color="red" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->
<div class="sidebar-wrapper">
<?php $activePage = basename($_SERVER['PHP_SELF'], ".php");?> 
            <div class="logo">
			
                <a href="#" class="simple-text">
                    E-REDBOOK
                </a>
				<style>
				#clock {
   text-align: center;

   font-size: 13px;

}
				</style>
				
				
				<div id="para1" class="text-center" >	
				</div>
				
				
				<div id="clock">

</div>	


				<script>
				
				
document.getElementById("para1").innerHTML = formatAMPM();

function formatAMPM() {
var d = new Date(),
    minutes = d.getMinutes().toString().length == 1 ? '0'+d.getMinutes() : d.getMinutes(),
    hours = d.getHours().toString().length == 1 ? '0'+d.getHours() : d.getHours(),
    ampm = d.getHours() >= 12 ? 'pm' : 'am',
    months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
    days = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
return days[d.getDay()]+'  '+d.getDate()+' '+months[d.getMonth()]+' '+d.getFullYear()+' ' ;
}
</script>
<script>
function clock(){

//Save the times in variables

var today = new Date();

var hours = today.getHours();
var minutes = today.getMinutes();
var seconds = today.getSeconds();


//Set the AM or PM time

if (hours >= 12){
  meridiem = " PM";
}
else {
  meridiem = " AM";
}


//convert hours to 12 hour format and put 0 in front
if (hours>12){
	hours = hours - 12;
}
else if (hours===0){
	hours = 12;	
}

//Put 0 in front of single digit minutes and seconds

if (minutes<10){
	minutes = "0" + minutes;
}
else {
	minutes = minutes;
}

if (seconds<10){
	seconds = "0" + seconds;
}
else {
	seconds = seconds;
}


document.getElementById("clock").innerHTML = (hours + ":" + minutes + ":" + seconds + meridiem);
}
setInterval('clock()', 1000);
</script>
            </div>
			
			

            <ul class="nav">
			
                
				
				<li class="<?= ($activePage == 'profile') ? 'active':''; ?>">
                    <a href="profile.php">
                        <i class="pe-7s-user"></i>
                        <p>My Profile</p>
                    </a>
                </li>
				
				 <li class="<?= ($activePage == 'userupdate') ? 'active':''; ?>">
                    <a href="userupdate.php">
                        <i class="pe-7s-home"></i>
                        <p>Update Profile</p>
                    </a>
                </li>
				
				 <li class="<?= ($activePage == 'viewrecorduser') ? 'active':''; ?>">
                    <a href="viewrecorduser.php">
                        <i class="pe-7s-note2"></i>
                        <p>My Record</p>
                    </a>
                </li>
				
				 <li class="<?= ($activePage == 'growthchild') ? 'active':''; ?>">
                    <a href="weightchild.php">
                        <i class="pe-7s-graph2"></i>
                        <p>Growth Measurement</p>
                    </a>
                </li>
				
				 <li class="<?= ($activePage == 'appoinment') ? 'active':''; ?>">
                    <a href="appointment.php">
                        <i class="pe-7s-chat"></i>
                        <p>Appointment List</p>
                    </a>
                </li>
				
				 <li class="<?= ($activePage == 'Print') ? 'active':''; ?>">
                    <a href="print.php">
                        <i class="pe-7s-print"></i>
                        <p>Document printing</p>
                    </a>
                </li>
			
					
				
					
             
				
            </ul>
    	</div>
		</div>