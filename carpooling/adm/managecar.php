<?php
     
      require_once("config.php");
      require_once("header.php");
      require_once("sidebar.php");
      // delete category
      if(isset($_GET["delcarid"]))
      {
        $delcarid=$_GET["delcarid"];
        $delete="delete from tbl_addcar where carid='$delcarid'";
        $query=mysqli_query($con,$delete);
        echo "<script>
         alert('Car Deleted successfully')
         window.location='managecar.php';
         
        </script>";
      }

     


      
      

?>

<!-- admin content panel -->
<div class="col-md-9 ms-5 p-2 mt-4">

    <div class="row">
        <div class="col-md-12 p-5 bg-white shadow">
            <h1 class="fs-4 p-3 m-0 bg-dark text-white col-md-12">Manage Your all Car</h1>
           <table class="table table-responsive mt-4">
           <tr>
           <th>Id</th>
           <th>Category</th>
           <th>CategoryPhoto</th>
           <th>CarName</th>
           <th>Price</th>
           <th>Availability</th>
           <th>Manufacture_year</th>
           <th>RunningKM</th>
           <th>Varients</th>
           
           <th>Date</th>
           <th>Action</th>
           </tr>

           <?php
              // manage all category here
                 $select="select tbl_addcar.*,categoryname from tbl_addcar join tbl_addcarcategory on tbl_addcar.catid=tbl_addcarcategory.catid";
                 $query=mysqli_query($con,$select);
                 while($fetch=mysqli_fetch_array($query))
                 {
           ?>

           <tr>
             <td><?php echo $fetch["carid"];?></td>
             <td><?php echo $fetch["categoryname"];?></td>
             <td><img src="<?php echo $fetch["car_photo"];?>" style="width:85px; height:85px"></td>
             
            <td><?php echo $fetch["carname"];?></td>

            <td><?php echo $fetch["price"];?></td>

            <td><?php echo $fetch["availability"];?></td>

            <td><?php echo $fetch["manufacture_year"];?></td>

            <td><?php echo $fetch["running"];?></td>

            <td><?php echo $fetch["varients"];?></td>

            <td><?php echo $fetch["date"];?></td>
             <td colspan="2">
              <div style="min-width:100px !important">
                <a href="#" data-bs-toggle="modal" data-bs-target="#del"><span class="bi bi-trash text-danger"></span></a>
             | 
             <a href="editcar.php?editcarid=<?php echo $fetch["carid"];?>" onclick="return confirm('Are you sure to edit data ?')"><span class="bi bi-pencil text-primary fs-2"></span></a></td>
                 </div>
           </tr>
           <?php
                 }
                 ?>
        </table>
        </div>
    </div>
</div>
</div>
                </div>

                <!-- for delete generate a popup -->
                <div class="modal fade" role="dialog" id="del">
                    <div class="modal-dialog w-25">
                        <div class="modal-content p-5">
                            <center>
                            <h4>Are you sure to delete Car</h4>
                            <?php
                            $select="select * from tbl_addcar";
                            $query=mysqli_query($con,$select);
                            $fetch=mysqli_fetch_array($query);
                            ?>
                            <a href="managecar.php?delcarid=<?php echo $fetch["carid"];?>"><button type="button" class="btn btn-sm btn-success">Ok</button></a>
                            <button type="button" class="btn btn-sm btn-danger ms-2" data-bs-dismiss="modal">Cancel</button>
                            </center>
                        </div>
                    </div>
                </div>

