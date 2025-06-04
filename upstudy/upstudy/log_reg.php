<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "upstudydb";
 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else {
echo "Connected successfully";
}

$email_id = $_POST['email_id'];
$username = $_POST['username'];
$user_pass = $_POST['user_pass'];

$stmt = $conn->prepare("insert into form_register(email_id, username, user_pass) values(?,?,?)");
	$stmt->bind_param("sss", $email_id, $username, $user_pass);

	if($stmt->execute()) {
		echo "data inserted successfully";
	}
	else {
		echo "error inserting : " . $conn->error;
	}

	$conn->close();
?>