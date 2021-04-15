<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['update'])){
		$ID = $_POST['ID'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$address = $_POST['address'];
		$mail = $_POST['mail'];
		$phone = $_POST['phone'];
		
		mysqli_query($connection, "UPDATE `owner_details` SET `fname` = '$fname', `lname` = '$lname', `address` = '$address', `phone` = '$phone' WHERE `ID` = '$ID'") or die(mysqli_error());

		header("location: getdetails.php");
	}
?>