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
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <link href="css/tableStylesheet.css" rel="stylesheet" type="text/css">
      <style>
         
      </style>
      <title>Blank | Institute Admin </title>
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
      <!--main content start-->
      <!-- page start--><br/><br/><br/><br/>
      <div style="width:1400px;float: right">
      <div style="width:1400px;right:100px;" class="container">
         <div class="table-wrapper">
            <div class="table-title">
               <div class="row">
                  <div class="col-sm-6">
                     <h2>Manage <b>Staff</b></h2>
                  </div>
                  <div class="col-sm-6">
                     <a href="" class="btn btn-success" >
                     <i class="material-icons">&#xE147;</i>
                     <span>Add New Form</span>
                     </a>
                  </div>
               </div>
            </div>
            <table class="table table-striped table-hover">
               <thead>
                  <tr>
                     <th style="width:2%">ID</th>
                     <th style="width:15%">Full Name</th>
                     <th style="width:13%">Email</th>
                     <th style="width:10%">Phone No 1</th>
                     <th style="width:8%">Phone No 2</th>
                     <th style="width:25%">Address</th>
                     <th style="width:10%">UserName</th>
                     <th style="width:10%">Password</th>
                     <th style="width:7%">userType</th>
                  </tr>
               </thead>
               <?php 
                  require 'db.php';
                  $query = "select * from users order by ID";
                  $result = mysqli_query($connection,$query);
                  while($row = mysqli_fetch_array($result) ){
                   $id = $row['ID'];
                   $name = $row['Name'];
                   $Email = $row['Email'];
                   $PhoneNo1 = $row['PhoneNo1'];
                   $PhoneNo2 = $row['PhoneNo2'];
                   $Address = $row['Address'];
                   $username = $row['userName'];
                   $userPassword = $row['userPassword'];
                   $userType = $row['userType'];
                   
                  ?>
               <tr>
                  <td>
                     <div contentEditable='true'  class="edit" id='ID_<?php echo $id; ?>'><?php echo $id; ?></div>
                  </td>
                  <td>
                     <div contentEditable='true'  class="edit" id='Name_<?php echo $id; ?>'><?php echo $name; ?></div>
                  </td>
                  <td>
                     <div contentEditable='true'  class="edit" id='Email_<?php echo $id; ?>'><?php echo $Email; ?> </div>
                  </td>
                  <td>
                     <div contentEditable='true'  class="edit" id='PhoneNo1_<?php echo $id; ?>'><?php echo $PhoneNo1; ?> </div>
                  </td>
                  <td>
                     <div contentEditable='true'  class="edit" id='PhoneNo2_<?php echo $id; ?>'><?php echo $PhoneNo2; ?> </div>
                  </td>
                  <td>
                     <div contentEditable='true'  class="edit" id='Address_<?php echo $id; ?>'><?php echo $Address; ?> </div>
                  </td>
                  <td>
                     <div contentEditable='true'  class="edit" id='userName_<?php echo $id; ?>'><?php echo $username; ?> </div>
                  </td>
                  <td>
                     <div contentEditable='true'  class="edit" id='userPassword_<?php echo $id; ?>'><?php echo $userPassword; ?> </div>
                  </td>
                  <td>
                     <div> <?php echo $userType; ?> </div>
                  </td>
               </tr>
               <?php } ?> 
            </table>
         </div>
      </div>
      </div>
      <!-- page end-->
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
      <script>
         $(document).ready(function(){
         // Add Class
         $('.edit').click(function(){
         $(this).addClass('editMode');
         });
         
         // Save data
         $(".edit").focusout(function(){
          $(this).removeClass("editMode");
          var id = this.id;
          var split_id = id.split("_");
          var field_name = split_id[0];
          var edit_id = split_id[1];
          var value = $(this).text();
         
          $.ajax({
           url: 'update.php',
           type: 'post',
           data: { field:field_name, value:value, id:edit_id },
           success:function(response){
            alert('Upated successfully'); 
           }
           
          });
         
         });
         
         });
         
      </script>
   </body>
</html>