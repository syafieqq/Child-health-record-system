
				<?php
include('db.php');
?>

<?php

//getting id from url
$loggedin_id=$row['id'];



//selecting data associated with this particular id
$sql2 = "SELECT * FROM healthdata WHERE a_duration = 8" ;

$result2=mysqli_query($db,$sql2);
if (!$result2) {
    printf("Error: %s\n", mysqli_error($db));
    exit();
}
?>
<?php
while($rows=mysqli_fetch_array($result2)){
	
	$a_vaccine= 	$rows['a_vaccine'];
	$clinic= 	$rows['clinic'];
	$a_dos= 	$rows['a_dos'];
	$email2= 	$rows['a_email'];
	$phone2= 	$rows['a_phone'];
	$a_date= 	$rows['a_date'];
	$a_date= 	$rows['a_date'];
	

}
	
?>

		<?php
		include("db.php");
													
		$sql = "UPDATE healthdata SET a_duration = a_duration-1 " ;

$result=mysqli_query($db,$sql);

if (!$result) {
    printf("Error: %s\n", mysqli_error($db));
    exit();
}
	else{
		
require 'phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
//$mail->SMTPDebug = 3;                               // Enable verbose debug output
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';              // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'example@gmail.com';                 // SMTP username email host
$mail->Password = 'yourpassword';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->From = 'example@gmail.com';
$mail->FromName = 'CHILD HEALTH RECORD SYSTEM';
$mail->addAddress(''.$email2.'', 'Mr/Ms');     // Add a recipient
            // Name is optional
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = 'no-reply@CHRS';
$mail->Body    = '<p><b>Dear mr/ms,</b></p>
<p>Dont forget your appoinment with me on '.$a_date.'<p>
<p>Type of Vaccine: '.$a_vaccine.'<p>
<p>Dos: '.$a_dos.'<p>
<p>Venue: '.$clinic.'<p>
<br>
					<p>Tq for using our service,</p>
					<p>Cheers!!,</p>
					';
					
$mail->AltBody = '';
if(!$mail->send()) {
    header("location: testfunction.php");
} else {
	
	
  $username = "example95@gmail.com"; //your email
  $hash = "hashkey";
  $test = "0";
  $sender = "Child Health Record System"; 
  $numbers = "$phone2"; 
  $message = "Dont forget your appoinment with me on $a_date
  Type of Vaccine: $a_vaccine,
  Dos: $a_dos,
  Venue: $clinic ";
  $message = urlencode($message);
  $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
  $ch = curl_init('http://api.txtlocal.com/send/?');
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $result = curl_exec($ch); 
  curl_close($ch);
  


	
	
    header("location: testfunction.php");
}		
		
		
	}
		
		
		
		
		?>