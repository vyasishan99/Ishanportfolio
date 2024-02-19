<?php
     
      require_once("config.php");
      require_once("header.php");
      require_once("sidebar.php");
      // edit car category
      if(isset($_GET["editid"]))
      {
        $editid=$_GET["editid"];
        $select="select * from tbl_addcarcategory where catid='$editid'";
        $query=mysqli_query($con,$select);
        $fetch=mysqli_fetch_array($query);

      }


      // update car 
      if(isset($_POST["updcarcat"]))
      {
        $editid=$_GET["editid"];
      
      {
        // upload photo
       $tmp_name=$_FILES["photo"]["tmp_name"];
       $path="uploads/car_category/".$_FILES["photo"]["name"];
       move_uploaded_file($tmp_name,$path);
       $catname=$_POST["catname"];
       $addate=$_POST["addeddate"];
       $upd="update tbl_addcarcategory set photo='$path',categoryname='$catname',added_date='$addate' where catid='$editid'";
       $query=mysqli_query($con,$upd);
       if($query)
       {
        echo "<script>
        alert('Car category Updated successfully')
        window.location='managecategory.php';
        </script>";
       }
       
    }
      }

      
      

?>

<!-- admin content panel -->
<div class="col-md-9 ms-5 p-2 mt-4">

    <div class="row">
        <div class="col-md-12 p-5 bg-white shadow">
            <h1 class="fs-4 p-2 m-0 bg-dark text-white col-md-6">Edit Your Category</h1>
            <form method="post" enctype="multipart/form-data">


            <div class="form-group mt-3  col-md-6">
             <label class="text-success">Edit photo</label>
             <img src="<?php echo $fetch["photo"];?>" class="img-fluid w-50">
                    <input type="file" name="photo"  placeholder="Category photo *" class="form-control" required>
                </div>

                <div class="form-group mt-3  col-md-6">
                <label class="text-success">Edit Catname</label>  
                    <input type="text" name="catname" value="<?php echo $fetch["categoryname"];?>" placeholder="Category Name *" class="form-control" required>
                </div>

                <div class="form-group mt-3 col-md-6">
                <label class="text-success">Edit date</label>
                    <input type="date" name="addeddate" value="<?php echo $fetch["added_date"];?>"  class="form-control" required>
                </div>

               

                <div class="form-group mt-3 col-md-6">
                    <input type="submit" name="updcarcat" class="btn btn-lg btn-primary" value="UpdateCategory">
                        
                </div>
            </form>


        </div>
    </div>
</div>

