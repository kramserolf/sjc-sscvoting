<?php
	$conn = new mysqli('us-cdbr-east-04.cleardb.com', 'b501b1e5bb2001', 'ab3c9ed0', 'heroku_2f068a3bde88a68');
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
?>
