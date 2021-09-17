<?php

$conn = new mysqli('us-cdbr-east-04.cleardb.com', 'bfe52e478df8c5', '1a4710b4' , 'heroku_781dc40839e5c9e');
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

	// $conn = new mysqli('localhost', 'root', '' , 'votesystem');
	// if ($conn->connect_error) {
	//     die("Connection failed: " . $conn->connect_error);
	// }
?>