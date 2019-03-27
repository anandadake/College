<?php

include "db.php";

$field = $_POST['field'];
$value = $_POST['value'];
$editid = $_POST['id'];

//$query = "UPDATE `users` SET `Name` = 'Andy Adake' WHERE `users`.`ID` = 6";

$query = "UPDATE users SET ".$field." = '".$value."' WHERE users.id='".$editid."'";

$login_result = mysqli_query($connection,$query);
if($login_result){
 echo 1;
}
else{
	echo 0;
}

?>