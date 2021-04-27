<?php
header('Content-Type: application/json');

$conn = mysqli_connect("localhost:3308","root","","login");

$sqlQuery = "SELECT Month,Readings FROM meter_reading";

$result = mysqli_query($conn,$sqlQuery);
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>