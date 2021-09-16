<?php

	// $conn = new mysqli('us-cdbr-east-04.cleardb.com', 'bff5878dc5fd72', '1a4710b4' , 'heroku_781dc40839e5c9e');
	// if ($conn->connect_error) {
	//     die("Connection failed: " . $conn->connect_error);
	// }

	$conn = new mysqli('localhost', 'root', '' , 'votesystem');
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
?>