<?php

	$conn = new mysqli('us-cdbr-east-04.cleardb.com', 'bfe52e478df8c5', '06ecd7f4' , 'heroku_8a52fffa867f0cdxx`');
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	// $conn = new mysqli('localhost', 'root', '' , 'votesystem');
	// if ($conn->connect_error) {
	//     die("Connection failed: " . $conn->connect_error);
	// }
?>