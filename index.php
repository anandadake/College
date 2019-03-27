<!-- =======================================================
   20-MAR-19   A-01-01     aadake     ##1     Created.
   ======================================================= -->
   <!DOCTYPE html>
<?php 
   session_start();
   if (!isset($_SESSION['userName'])) { 
     header("Location: http://localhost/college/login.php");
   }
   ?>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="img/favicon.png">
      <title>Institute Admin</title>
      <!-- Bootstrap CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <!-- bootstrap theme -->
      <link href="css/bootstrap-theme.css" rel="stylesheet">
      <!--external css-->
      <!-- font icon -->
      <link href="css/elegant-icons-style.css" rel="stylesheet" />
      <link href="css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles -->
      <link href="css/style.css" rel="stylesheet">
      <link href="css/style-responsive.css" rel="stylesheet" />
   </head>
   <body>
      <!-- container section start -->
      <section id="container" class="">
      <!--header start-->
      <header class="header dark-bg">
         <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
         </div>
         <!--logo start-->
         <a href="index.php" class="logo">Institute <span class="lite"><?php if(isset($_SESSION['userType'])){echo $_SESSION['userType'] ;}?></span></a>
         <!--logo end-->
         <div class="nav search-row" id="top_menu">
            <!--  search form start -->
            <ul class="nav top-menu">
               <li>
                  <form class="navbar-form">
                     <input class="form-control" placeholder="Search" type="text">
                  </form>
               </li>
            </ul>
            <!--  search form end -->
         </div>
         <div class="top-nav notification-row">
            <!-- notificatoin dropdown start-->
            <ul class="nav pull-right top-menu">
               <!-- task notificatoin start -->
               <li id="task_notificatoin_bar" class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                  <i class="icon-task-l"></i>
                  <span class="badge bg-important">6</span>
                  </a>
               </li>
               <!-- task notificatoin end -->
               <!-- inbox notificatoin start-->
               <li id="mail_notificatoin_bar" class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                  <i class="icon-envelope-l"></i>
                  <span class="badge bg-important">5</span>
                  </a>
               </li>
               <!-- inbox notificatoin end -->
               <!-- alert notification start-->
               <li id="alert_notificatoin_bar" class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                  <i class="icon-bell-l"></i>
                  <span class="badge bg-important">7</span>
                  </a>
               </li>
               <!-- alert notification end-->
               <!-- user login dropdown start-->
               <li class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                  <span class="profile-ava"> <img alt="" src="img/avatar1_small.jpg"> </span>
                  <span class="username"><?php if(isset($_SESSION['userName'])){echo $_SESSION['userName'] ;}?></span>
                  <b class="caret"></b>
                  </a>
                  <ul class="dropdown-menu extended logout">
                     <div class="log-arrow-up"></div>
                     <li class="eborder-top">
                        <a href="#"><i class="icon_profile"></i> My Profile</a>
                     </li>
                     <li>
                        <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
                     </li>
                     <li>
                        <a href="#"><i class="icon_clock_alt"></i> Timeline</a>
                     </li>
                     <li>
                        <a href="logout.php"><i class="icon_key_alt"></i> Log Out</a>
                     </li>
                  </ul>
               </li>
               <!-- user login dropdown end -->
            </ul>
            <!-- notificatoin dropdown end-->
         </div>
      </header>
      <!--header end-->
      <!--sidebar start-->
      <aside>
         <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">
               <li class="sub-menu">
                  <a class="" href="index.php">
                  <i class="icon_house_alt"></i>
                  <span>Dashboard</span>
                  </a>
               </li>
               <li class="sub-menu">
                  <a href="javascript:;" class="">
                  <i class="fa fa-user-md"></i>
                  <span>REVENUE </span>
                  <span class="menu-arrow arrow_carrot-right"></span>
                  </a>
                  <ul class="sub">
                     <li><a class="" href="">REVENUE</a></li>
                     <li><a class="" href="">ALL REVENUE</a></li>
                  </ul>
               </li>
               <li class="sub-menu">
                  <a href="javascript:;" class="">
                  <i class="fa fa-user-md"></i>
                  <span>EMPLOYEE'S</span>
                  <span class="menu-arrow arrow_carrot-right"></span>
                  </a>
                  <ul class="sub">
                     <li><a class="" href="RegistrationStaff.php">Add Staff</a></li>
                     <li><a class="" href="">All Staff</a></li>
                  </ul>
               </li>
               <li class="sub-menu">
                  <a href="javascript:;" class="">
                  <i class="icon_document_alt"></i>
                  <span>Forms</span>
                  <span class="menu-arrow arrow_carrot-right"></span>
                  </a>
                  <ul class="sub">
                     <li><a class="" href="form_component.html">Form Elements</a></li>
                     <li><a class="" href="form_validation.html">Form Validation</a></li>
                  </ul>
               </li>
               <li class="sub-menu">
                  <a href="javascript:;" class="">
                  <i class="icon_desktop"></i>
                  <span>UI Fitures</span>
                  <span class="menu-arrow arrow_carrot-right"></span>
                  </a>
                  <ul class="sub">
                     <li><a class="" href="general.html">Elements</a></li>
                     <li><a class="" href="buttons.html">Buttons</a></li>
                     <li><a class="" href="grids.html">Grids</a></li>
                  </ul>
               </li>
               <li>
                  <a class="" href="widgets.html">
                  <i class="icon_genius"></i>
                  <span>Widgets</span>
                  </a>
               </li>
               <li>
                  <a class="" href="chart-chartjs.html">
                  <i class="icon_piechart"></i>
                  <span>Charts</span>
                  </a>
               </li>
               <li class="sub-menu">
                  <a href="javascript:;" class="">
                  <i class="icon_table"></i>
                  <span>Tables</span>
                  <span class="menu-arrow arrow_carrot-right"></span>
                  </a>
                  <ul class="sub">
                     <li><a class="" href="basic_table.html">Sub Table</a></li>
                  </ul>
               </li>
               <li class="sub-menu">
                  <a href="javascript:;" class="">
                  <i class="icon_table"></i>
                  <span>Batches</span>
                  <span class="menu-arrow arrow_carrot-right"></span>
                  </a>
                  <ul class="sub">
                     <li><a class="" href="addBatch.php">Add Batch</a></li>
                     <li><a class="" href="basic_table.html">All Batch</a></li>
                  </ul>
               </li>
               <li class="sub-menu">
                  <a href="javascript:;" class="">
                  <i class="icon_documents_alt"></i>
                  <span>Pages</span>
                  <span class="menu-arrow arrow_carrot-right"></span>
                  </a>
                  <ul class="sub">
                     <li><a class="" href="profile.html">Profile</a></li>
                     <li><a class="" href="login.php"><span>Login Page</span></a></li>
                     <li><a class="" href="contact.html"><span>Contact Page</span></a></li>
                     <li><a class="" href="blank.php">Blank Page</a></li>
                     <li><a class="" href="404.html">404 Error</a></li>
                  </ul>
               </li>
            </ul>
            <!-- sidebar menu end-->
         </div>
      </aside>
      <!--sidebar end-->
      <!--main content end-->
      <!-- javascripts -->
      <script src="js/jquery.js"></script>
      <!-- bootstrap -->
      <script src="js/bootstrap.min.js"></script>
      <!-- nice scroll -->
      <script src="js/jquery.scrollTo.min.js"></script>
      <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
      <!-- charts scripts -->
      <!--custome script for all page-->
      <script src="js/scripts.js"></script>
   </body>
</html>