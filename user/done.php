		<?php
		include("db.php");
		
		$t_id = $_GET['h_id'];
		
		$db->query("UPDATE healthdata SET a_remark = 'Done' WHERE h_id = '$t_id'") or die(mysqli_error());
								
		header("location: appointment.php");	
		
		?>