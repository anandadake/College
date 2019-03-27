<!DOCTYPE html>
<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link href="stylesheet.css" rel="stylesheet" type="text/css">
      <script>
         $(document).ready(function(){
         
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
   </head>
   <body>
      <div class="container">
         <div class="table-wrapper">
            <div class="table-title">
               <div class="row">
                  <div class="col-sm-6">
                     <h2>Manage <b>Staff</b></h2>
                  </div>
                  <div class="col-sm-6">
                     <a href="flatregister.php?" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Form</span></a>
                  </div>
               </div>
            </div>
            <table class="table table-striped table-hover">
               <thead>
                  <tr>
                     <th style="width:100px">ID</th>
                     <th style="width:100px">UserName</th>
                     <th style="width:100px">Password</th>
                     <th style="width:100px">Full Name</th>
                  </tr>
               </thead>
               <?php 
                  require 'config.php';
                  $query = "select * from users order by name";
                  $result = mysqli_query($con,$query);
                  while($row = mysqli_fetch_array($result) ){
                   $id = $row['ID'];
                   $username = $row['userName'];
                   $userPassword = $row['userPassword'];
                   $name = $row['Name'];
                  ?>
               <tr>
                  <td contentEditable='true'  class="edit" id='ID_<?php echo $id; ?>'><?php echo $id; ?> </td>
                  <td contentEditable='true'  class="edit" id='userName_<?php echo $id; ?>'><?php echo $username; ?> </td>
                  <td contentEditable='true'  class="edit" id='userPassword_<?php echo $id; ?>'><?php echo $userPassword; ?> </td>
                  <td contentEditable='true'  class="edit" id='Name_<?php echo $id; ?>'><?php echo $name; ?></td>
               </tr>
               <?php } ?> 
            </table>
         </div>
      </div>
   </body>
</html>