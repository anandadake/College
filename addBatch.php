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
            <form class="login-form" >
                <div class="login-wrap">
                    <p class="login-img"><i class="icon_profile"></i><br/>Add Batch</p>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="icon_profile"></i></span>
                        <input type="text" name="batchName" class="form-control" placeholder="batchname" required autofocus>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                        <input type="date" name="date" class="form-control"  required>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                        <input type="date" name="date" class="form-control"  required>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                        <input type="number" name="fees" class="form-control"  required>
                    </div>
                    <button type="submit" style="" class="btn btn-primary btn-lg btn-block" >Add</button>
                </div>
            </form>
        </div>
    </body>
</html>