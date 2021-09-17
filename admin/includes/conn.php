<?php

$conn = new mysqli('us-cdbr-east-04.cleardb.com', 'be82286f1e90e3', '1849bdc1' , 'heroku_64dfc19570a5c36');
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

	// $conn = new mysqli('localhost', 'root', '' , 'votesystem');
	// if ($conn->connect_error) {
	//     die("Connection failed: " . $conn->connect_error);
	// }
?>