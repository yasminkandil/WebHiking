<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hikingpr";

$conn = new mysqli($servername, $username, $password, $dbname);

	$createdAt = date("Y-m-d h:i:sa");
	$sent_by = $_REQUEST['sent_by'];
	$receiver = $_REQUEST['received_by'];
	$message = $_REQUEST['message'];
	$sendMessage = "INSERT INTO messages(sent_by,received_by,message,createdAt) VALUES('$sent_by','$receiver','$message','$createdAt')";
	mysqli_query($conn,$sendMessage) or die(mysqli_error($conn));
	

?>