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

$full_name = $_POST['full_name'];
$email_id = $_POST['email_id'];
$phone_no = $_POST['phone_no'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$stmt = $conn->prepare("insert into form_contact(full_name, email_id, phone_no, subject, message) values(?,?,?,?,?)");
	$stmt->bind_param("sssss", $full_name, $email_id, $phone_no, $subject, $message);

	if($stmt->execute()) {
		echo "data inserted successfully";
	}
	else {
		echo "error inserting : " . $conn->error;
	}

	$conn->close();
?>