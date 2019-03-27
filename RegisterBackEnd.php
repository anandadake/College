<?php
    require 'db.php';
    
      $Name = $_POST["Name"];
      $email = $_POST["email"];
      $PhoneNo1 = $_POST["PhoneNo1"];
      $PhoneNo2 = $_POST["PhoneNo2"];
      $Address = $_POST["Address"];
      $userName = $_POST["userName"];
      $userPassword =$_POST["userPassword"];
    
      $sql = "INSERT INTO `users` (`Name`, `Email`, `PhoneNo1`, `PhoneNo2`, `Address`, `userName`, `userPassword`)
      VALUES ('$Name', '$email', '$PhoneNo1', '$PhoneNo2', '$Address', '$userName', '$userPassword')";
      $login_result = mysqli_query($connection,$sql);
      if(!$login_result){
        //headder(location:);
      }
    
    ?>