<?php
	$connection =mysqli_connect("localhost:3306","root","");
	$db= mysqli_select_db($connection,'login') ;
	
	if(!$connection){
		die("Error: Failed to connect to database!");
	}
?>