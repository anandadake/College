
<html lang="en">

    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="img/favicon.png">
    
      <title>Registration Page  | College Admin</title>
    
      <!-- Bootstrap CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <!-- bootstrap theme -->
      <link href="css/bootstrap-theme.css" rel="stylesheet">
      <!-- font icon -->
      <link href="css/elegant-icons-style.css" rel="stylesheet" />
      <link href="css/font-awesome.css" rel="stylesheet" />
      <!-- Custom styles -->
      <link href="css/style.css" rel="stylesheet">
      <link href="css/style-responsive.css" rel="stylesheet" />
    </head>
    
    <body class="login-img3-body">
    
      <div class="container">
    
        <form class="login-form" METHOD="POST" action="">
          <div class="login-wrap">
            <p class="login-img"><i class="icon_profile"></i></p>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_profile"></i></span>
                <input type="text" name="Name" class="form-control" placeholder="Name" required autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_profile"></i></span>
                <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_profile"></i></span>
                <input type="tel" name="PhoneNo1" class="form-control" placeholder="Phone No1" maxLength="10" required>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_profile"></i></span>
                <input type="tel" name="PhoneNo2" class="form-control" placeholder="Phone No2" maxLength="10" required>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_profile"></i></span>
                <textarea rows="4" cols="35" name="Address" placeholder="Address" required></textarea>
            </div>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" name="userName" class="form-control" placeholder="Username" required>
            </div>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_key_alt"></i></span>
              <input type="password" name="userPassword" class="form-control" placeholder="Password" required>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" name="ReuserPassword" class="form-control" placeholder="Re-Password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block" >Signup</button>
            <button type="reset"  class="btn btn-primary btn-lg btn-block" >reset</button>
          </div>
        </form>
        
      </div>
    
    
    </body>
    
    </html>
    <?php
      require 'db.php';
      if (($_SERVER["REQUEST_METHOD"]) == "POST"){
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
        if($login_result){
          header("Location: http://localhost/college/login.html");
        }
      }
    ?>