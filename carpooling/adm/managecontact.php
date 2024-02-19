<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Ecommerce Admin Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>

</head>
<body>
<?php
      require_once("config.php");
      require_once("header.php");
      require_once("sidebar.php");

      //  manage all contact in manage contact tables

      $select="select * from tbl_contact";
      $query=mysqli_query($con,$select);
     

      
      

?>

<!-- admin content panel -->
<div class="col-md-9 ms-5 p-2 mt-4">
    <h2>Manage All contact in Admin</h2>
    <hr>
    <!-- manage contact here --> 

    <table class="table table-responsive">
        <tr>
            <th>Id</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Subject</th>
            <th>Address</th>
            <th>Date_Time</th>
            <th>Action</th>
        </tr>
         <?php
          
         while($fetch=mysqli_fetch_array($query))
         {

        ?>

         
        <tr>
          <td><?php echo $fetch["contactid"];?></td>
          <td><?php echo $fetch["firstname"];?></td>
          <td><?php echo $fetch["lastname"];?></td>
          <td><?php echo $fetch["email"];?></td>
          <td><?php echo $fetch["phone"];?></td>
          <td><?php echo $fetch["subjectid"];?></td>
          <td><?php echo $fetch["address"];?></td>
          <td><?php echo $fetch["contact_date_time"];?></td>
          <td><a href="" class="btn btn-sm btn-danger text-white"><span class="bi bi-trash"></span></a></td>

        </tr>
        <?php
         }
         ?>




    
    
</div>


