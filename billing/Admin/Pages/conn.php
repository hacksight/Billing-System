<?php
	$connection =mysqli_connect("localhost","root","");
	$db= mysqli_select_db($connection,'login') ;
	
	if(!$connection){
		die("Error: Failed to connect to database!");
	}
?>