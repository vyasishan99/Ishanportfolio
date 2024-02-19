<?php
     
      require_once("config.php");
      require_once("header.php");
      require_once("sidebar.php");
      // edit car category
      if(isset($_GET["editcarid"]))
      {
        $editcarid=$_GET["editcarid"];
        $select="select tbl_addcar.*,categoryname from tbl_addcar join tbl_addcarcategory on tbl_addcar.catid=tbl_addcarcategory.catid where carid='$editcarid'";
        $query=mysqli_query($con,$select);
        $fetch=mysqli_fetch_array($query);

      }


      // update car 
      if(isset($_POST["updcar"]))
      {
        $editcarid=$_GET["editcarid"];
        $catname=$_POST["catname"];
      
      {
        // upload photo
       
       $tmp_name=$_FILES["photo"]["tmp_name"];
       $path="uploads/car_category/".$_FILES["photo"]["name"];
       move_uploaded_file($tmp_name,$path);
      
       $carnm=$_POST["carname"];
       $pr=$_POST["price"];
       $av=$_POST["available"];
       $man=$_POST["manufacture_year"];
       $runn=$_POST["running"];
       $var=$_POST["varients"];
       $addate=$_POST["addeddate"];
       
       $addate=$_POST["addeddate"];
       $upd="update tbl_addcar set catid='$catname',car_photo='$path',carname='$carnm',price='$pr',availability='$av',manufacture_year='$man',running='$runn',varients='$var',date='$addate' where carid='$editcarid'";
       $query=mysqli_query($con,$upd);
       if($query)
       {
        echo "<script>
        alert('Car Updated successfully')
        window.location='managecar.php';
        </script>";
       }
       
    }
      }

      
      

?>

<!-- admin content panel -->
<div class="col-md-9 ms-5 p-2 mt-4">

    <div class="row">
    <h1 class="fs-4 p-2 m-0 bg-dark text-white col-md-6">Edit Your Car</h1>
        <form method="post" enctype="multipart/form-data">

    <select name="catname" placeholder="Category Name *" class="form-control" required>
            <option value="">-select car category-</option>
           <?php
           // manage all category here
           $select="select * from tbl_addcarcategory";
           $query=mysqli_query($con,$select);
           while($fetch1=mysqli_fetch_array($query))
           {
           ?>
           <option value="<?php echo $fetch1["catid"];?>"><?php echo $fetch1["categoryname"];?></option>
           <?php
           }
           ?>

           
    </select>
    </div>
       



            <div class="form-group mt-3  col-md-6">
             <label class="text-success">Edit photo</label>
             <img src="<?php echo $fetch["car_photo"];?>" class="img-fluid w-50">
                    <input type="file" name="photo"  placeholder="Category photo *" class="form-control" required>
                </div>

                <div class="form-group mt-3 col-md-6">
                
                    <input type="text" name="carname" value="<?php echo $fetch["carname"];?>" placeholder="Car Name *" class="form-control" required>
                </div>

                <div class="form-group mt-3 col-md-6">
                
                <input type="text" name="price" value="<?php echo $fetch["price"];?>" placeholder="Price *" class="form-control" required>
            </div>

            <div class="form-group mt-3  col-md-6">
             <select name="available" placeholder="Availability *" class="form-control" required>
             <option value="">-select car availability-</option>
             <option value="available">Available</option>
             <option value="notavailable">Not Available</option>
        </select>
            </div>

            <div class="form-group mt-3  col-md-6">
                <input type="text" name="manufacture_year" value="<?php echo $fetch["manufacture_year"];?>" placeholder="manufacture_year" class="form-control" required> 
        </div>

        <div class="form-group mt-3  col-md-6">
                <input type="text" name="running" value="<?php echo $fetch["running"];?>" placeholder="km Running" class="form-control" required> 
        </div>

        
        <div class="form-group mt-3  col-md-6">
                <select name="varients" placeholder="Varients *" class="form-control" required>
                <option value="">-select car varients-</option>
                <option value="petrol">Petrol</option>
                <option value="diesel">Diesel</option>
                <option value="cng">CNG</option>


            
    </select>
    </div>


            




               

                <div class="form-group mt-3 col-md-6">
                <label class="text-success">Edit date</label>
                <input type="date" name="addeddate" value="<?php echo $fetch["date"];?>" placeholder="Added Date" class="form-control" required>
 
                </div>

               

                <div class="form-group mt-3 col-md-6">
                    <input type="submit" name="updcar" class="btn btn-lg btn-primary" value="UpdateCar">
                        
                </div>
            </form>


        </div>
    </div>
</div>

