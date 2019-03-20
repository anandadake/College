<?php
if (($_SERVER["REQUEST_METHOD"]) == "POST"){
	$userName = $_POST["userName"];
	$userPassword =$_POST["userPassword"];

	require 'db.php';
	$sql = "SELECT * FROM users WHERE userName = '$userName' AND userPassword = '$userPassword'";
	$login_result = mysqli_query($connection,$sql);
	
	$count = mysqli_num_rows($login_result);
	
	if ($count == 1) {
	
		// Successfully verified login information
	
		session_start();
	
		if (!isset($_SESSION['is_logged_in'])) {
			$_SESSION['is_logged_in'] = 1;
		}		
	
		// Register user's name and ID
		if ((!isset($_SESSION['userName'])) && (!isset($_SESSION['ID'])) && (!isset($_SESSION['userType'])))  {
			$row = mysqli_fetch_assoc($login_result);
			$_SESSION['userName'] = $row['userName'];
			$_SESSION['ID'] = $row['ID'];
			$_SESSION['userType'] = $row['userType'];
		}
	
		header("Location: http://localhost/college");
	
	}
	else {
		// Not logged in. Redirect back to login page
		header("Location: http://localhost/college/login.html?err=1");
	}
	
}
?>