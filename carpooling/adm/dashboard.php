
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
            <div class="row">
                <div class="col-md-3 p-4 shadow ms-4 bg-success">
                
                    <h3 class="text-center text-white">Total Users <br><span class="badge badge-sm bg-danger">0</span>
                    </h3>
                </div>
                <div class="col-md-3 p-4 shadow ms-4 bg-info">
                    <h3 class="text-center text-white">Total Products <br><span
                            class="badge badge-sm bg-danger">0</span></h3>
                </div>
                <div class="col-md-3 p-4 shadow ms-4 bg-warning">
                    <h3 class="text-center text-white">Total Contacts <br> <a href="managecontact.php"><span
                            class="badge badge-sm bg-danger">
                            <?php echo $fetch["total"];?>
                        </span></a></h3>
                </div>
                <div class="col-md-12 p-0 shadow ms-4 mt-5">
            </div>
        </div>
    </div>
</div>
</div>
</div>

