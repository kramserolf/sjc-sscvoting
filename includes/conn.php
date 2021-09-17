<?php

$conn = new mysqli('nnsgluut5mye50or.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/pdcb8aysp4yt2um9', 'fps2lnq7860cwnbz', 'pynpwqj6lc9g5usl' , 'pdcb8aysp4yt2um9');
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

	// $conn = new mysqli('localhost', 'root', '' , 'votesystem');
	// if ($conn->connect_error) {
	//     die("Connection failed: " . $conn->connect_error);
	// }
?>