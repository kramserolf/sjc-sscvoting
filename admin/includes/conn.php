<?php

// $conn = new mysqli('nnsgluut5mye50or.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/q4css3k6a0n2jdgi', 'h8a7blgumbf6rcjw', 'w20lpe49k7n6js1v' , 'q4css3k6a0n2jdgi');
// if ($conn->connect_error) {
// 	die("Connection failed: " . $conn->connect_error);
// }

	$conn = new mysqli('localhost', 'root', '' , 'jhs-votingsystem');
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
?>