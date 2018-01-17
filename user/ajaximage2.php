<?php

include('session.php');
$path = "uploads/";
	$valid_formats = array("jpeg","jpg", "png", "gif", "bmp", "JPG", "PNG", "GIF", "JPEG");
	if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
		{
			$name = $_FILES['photoimg']['name'];
			$size = $_FILES['photoimg']['size'];			
			if(strlen($name))
				{
					list($txt, $ext) = explode(".", $name);
					if(in_array($ext,$valid_formats))
					{
					if($size<(1024*1024))
						{
							$actual_image_name = time().substr(str_replace(" ", "_", $txt), 5).".".$ext;
							$tmp = $_FILES['photoimg']['tmp_name'];
							if(move_uploaded_file($tmp, $path.$actual_image_name))
								{
								mysqli_query($db,"UPDATE users SET profile_image='$actual_image_name' WHERE id='$loggedin_id'");
									
										echo "<script>
									alert('Image Successfully  uploaded');
									window.location.href='userupdate.php';
									</script>";
									
								}
							else
								echo "failed";
						}
						else
				
	echo "<script>
									alert('Image file size max 1 MB');
									window.location.href='userupdate.php';
									</script>";					
						}
						else
							
						
									echo "<script>
									alert('Photos should be saved as JPG, JPEG, PNG, GIF or BMP files.');
									window.location.href='userupdate.php';
									</script>";	
							
				}
				
			else
					echo "<script>
									alert('Please select an image');
									window.location.href='userupdate.php';
									</script>";
				
				
			exit;
		}
?>