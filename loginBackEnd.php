<!-- =======================================================
    20-MAR-19   A-01-01     aadake     ##1     Created.
    ======================================================= -->
<?php
    if (isset($_POST["login"])){
    	$userName = $_POST["userName"];
		$userPassword =$_POST["userPassword"];
		if(isset($_POST["remember-me"])){
			setcookie("userName",$userName,time()+(60*60*24*30));
			setcookie("userPassword",$userPassword,time()+(60*60*24*30));
		}
		else{
			if(isset($_COOKIE["userName"])){
				unset($_COOKIE["userName"]);
				setcookie("userName", "", time()-3600);
			}
			if(isset($_COOKIE["userPassword"])){
				unset($_COOKIE["userPassword"]);
				setcookie("userPassword", "", time()-3600);
			}
		}
    
    	require 'db.php';
    	$sql = "SELECT * FROM users WHERE userName = '$userName' AND userPassword = '$userPassword'";
    	$login_result = mysqli_query($connection,$sql);
    	
    	$count = mysqli_num_rows($login_result);
    	
    	if ($count == 1) {
    	
    		// Successfully verified login information
    	
    		session_start();		
    	
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
    		header("Location: http://localhost/college/login.php?err=1");
    	}
    	
    }
    ?>