<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "upstudydb";

// Create connection
$con = mysqli_connect($servername, $username, $password,$dbname) or dis("error " . mysql_error($con));




//fetch records
$sql = "select full_name, email_id, phone_no, subject, message from form_contact";
$result = mysqli_query($con, $sql);

while($row = mysqli_fetch_assoc($result)) {
	$array[] = $row;
}

$dataset = array (
	"echo" => 1,
	"totalrecords" => count($array),
	"totaldisplayrecords" => count($array),
	"data" => $array
);

echo json_encode($dataset);

?>