<?php
$mysql_hostname  =  "hostname"; // host name
$mysql_user  =  "usernmae"; // username
$mysql_password  =  "password"; // password
$mysql_database  =  "dbname"; //database name
$db  =  mysqli_connect($mysql_hostname,$mysql_user,$mysql_password,$mysql_database);
if($db){
}else{
	echo mysqli_error($db);
}
?>