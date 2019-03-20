<?php

	$connection = mysqli_connect("localhost","root","","college");
	$sqll = "SELECT * FROM users";
	$sql = "SELECT * FROM `users` WHERE `userName` = 'aadake' AND `userPassword` = 'Andy@143';";
	$result = mysqli_query($connection,$sql);

if (mysqli_num_rows($result) > 0) {
	header("Location: http://localhost/college");
}
else{
	echo "sdfd".mysqli_error($connection);
	
}
?>