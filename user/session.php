<?php 
include('db.php');
    session_start();
	$user_check=$_SESSION['sess_username'];
	$ses_sql=mysqli_query($db,"select username,id from users where username='$user_check' ");
	$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
	$loggedin_session=$row['username'];
	$loggedin_id=$row['id'];
    $role = $_SESSION['sess_userrole'];
    if(!isset($loggedin_session) && $role!="user"){
      header('Location: ../index.php?err=2');
    }
?>
	


<title>Child Health Record System</title>