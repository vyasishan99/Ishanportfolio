
<?php
      
      require_once("config.php");
      require_once("header.php");
      require_once("sidebar.php");

      // subtotal count of total contact in admin dashboard

      $select="select count(contactid) as total from tbl_contact";
      $query=mysqli_query($con,$select);
      $fetch=mysqli_fetch_array($query);

      
      

?>

<!-- admin content panel -->
<div class="col-md-9 ms-5 p-2 mt-4">
    <div class="row">
        <div class="col-md-12 p-5 bg-white shadow">
       <h1 class="fs-4 p-3 m-0 bg-dark text-white col-md-6">Change Your admin Password here</h1>
       <form method="post">
        <div class="form-group mt-3 col-md-6">
            <input type="password" name="opass" placeholder="Old Password *" class="form-control">
        </div>

        <div class="form-group mt-3 col-md-6">
            <input type="password" name="npass" placeholder="New Password *" class="form-control" required>
        </div>

        <div class="form-group mt-3 col-md-6">
            <input type="password" name="cpass" placeholder="Confirmed Password *" class="form-control" required>
        </div>

        <div class="form-group mt-3 col-md-6">
            <input type="submit" name="changepass" placeholder="Confirmed Password *" class="btn btn-lg btn-primary" value="Submit">
        </div>
       </form>
            
    </div>
</div>
</div>
</div>
</div>

