<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$voter = $_POST['votersid'];
		$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
		$fullname = $_POST['fullname'];
		$course = $_POST['course'];
		$year = $_POST['year'];
		//generate voters id
		// $set = '123456789abcdefghijklmnopqrstuvwxyz';
		// $voter = substr(str_shuffle($set), 0, 6);

		$sql = "INSERT INTO voters (voters_id, password, fullname, course, year) VALUES ('$voter', '$password', '$fullname', '$course', '$year')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Voter added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: voters.php');
?>