<!-- =======================================================
    20-MAR-19   A-01-01     aadake     ##1     Created.
    ======================================================= -->
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="shortcut icon" href="img/favicon.png">
            <title>Login Page  | College Admin</title>
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
                <form class="login-form" METHOD="POST" action="loginBackEnd.php">
                    <div id="myerr" class="container" style="display: none;">
                        <div class="errorbox">
                            <h4 style="text-align:center;">Login error:</h4>
                            Incorrect username or password Please try again.
                        </div>
                    </div>
                    <div class="login-wrap">
                        <p class="login-img"><i class="icon_lock_alt"></i></p>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icon_profile"></i></span>
                            <input type="text" name="userName" class="form-control" placeholder="Username" required autofocus value=<?php if(isset($_COOKIE["userName"])){echo $_COOKIE["userName"];} ?> >
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                            <input type="password" id="pass" name="userPassword" class="form-control" placeholder="Password" required value=<?php if(isset($_COOKIE["userPassword"])){echo $_COOKIE["userPassword"];} ?> >
                            <span class="input-group-addon"><i onclick="showPassword()">show</i></span>
                        </div>
                        <label class="checkbox">
                        <input type="checkbox" name="remember-me" value="remember-me"/> Remember me
                        <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
                        </label>
                        <button type="submit" name="login" style="border-radius: 60px 60px;" class="btn btn-primary btn-lg btn-block" >Login</button>
                        <button onclick="window.location.href = 'registration.php';" style="border-radius: 60px 60px;" class="btn btn-info btn-lg btn-block" >Signup</button>
                    </div>
                </form>
            </div>
            <script>
                var url_string = window.location.href;
                var url = new URL(url_string);
                var c = url.searchParams.get("err");
                if(c){var res = "block";}
                var tag =document.getElementById("myerr").style.display =  res;
                function showPassword(){
                var x = document.getElementById("pass");
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
            }
            </script>
        </body>
    </html>