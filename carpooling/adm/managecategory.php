<?php
     
      require_once("config.php");
      require_once("header.php");
      require_once("sidebar.php");
      // delete category
      if(isset($_GET["delcatid"]))
      {
        $delcatid=$_GET["delcatid"];
        $delete="delete from tbl_addcarcategory where catid='$delcatid'";
        $query=mysqli_query($con,$delete);
        echo "<script>
         alert('Car category Deleted successfully')
         window.location='managecategory.php';
         
        </script>";
      }

     


      
      

?>

<!-- admin content panel -->
<div class="col-md-9 ms-5 p-2 mt-4">

    <div class="row">
        <div class="col-md-12 p-5 bg-white shadow">
            <h1 class="fs-4 p-3 m-0 bg-dark text-white col-md-12">Manage Your all Category</h1>
           <table class="table table-responsive mt-4">
           <tr>
           <th>Id</th>
           <th>CategoryPhoto</th>
           <th>CategoryName</th>
           <th>Added Date</th>
           <th>Action</th>
           </tr>

           <?php
              // manage all category here
                 $select="select * from tbl_addcarcategory";
                 $query=mysqli_query($con,$select);
                 while($fetch=mysqli_fetch_array($query))
                 {
           ?>

           <tr>
             <td><?php echo $fetch["catid"];?></td>
             <td><img src="<?php echo $fetch["photo"];?>" style="width:85px; height:85px"></td>
             <td><?php echo $fetch["categoryname"];?></td>
            <td><?php echo $fetch["added_date"];?></td>
             <td><a href="#" data-bs-toggle="modal" data-bs-target="#del"><span class="bi bi-trash text-danger"></span></a>
             | 
             <a href="editcategory.php?editid=<?php echo $fetch["catid"];?>" onclick="return confirm('Are you sure to edit data ?')"><span class="bi bi-pencil text-primary fs-2"></span></a></td>
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
                            <h4>Are you sure to delete Category</h4>
                            <?php
                            $select="select * from tbl_addcarcategory";
                            $query=mysqli_query($con,$select);
                            $fetch=mysqli_fetch_array($query);
                            ?>
                            <a href="managecategory.php?delcatid=<?php echo $fetch["catid"];?>"><button type="button" class="btn btn-sm btn-success">Ok</button></a>
                            <button type="button" class="btn btn-sm btn-danger ms-2" data-bs-dismiss="modal">Cancel</button>
                            </center>
                        </div>
                    </div>
                </div>

