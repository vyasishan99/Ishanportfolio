<?php
     
      require_once("config.php");
      require_once("header.php");
      require_once("sidebar.php");


      // add car 
      if(isset($_POST["addcarcat"]))
      {
        // upload photo
       $tmp_name=$_FILES["photo"]["tmp_name"];
       $path="uploads/car_category/".$_FILES["photo"]["tmp_name"];
       move_uploaded_file($tmp_name,$path);
       $catname=$_POST["catname"];
       $addate=$_POST["addeddate"];
       $insert="insert into tbl_addcarcategory(photo,categoryname,added_date) values('$path','$catname','$addate')";
       $query=mysqli_query($con,$insert);
       if($query)
       {
        echo "<script>
        alert('Car category successfully added')
        window.location='addcategory.php';
        </script>";
       }
       

      }

      
      

?>

<!-- admin content panel -->
<div class="col-md-9 ms-5 p-2 mt-4">

    <div class="row">
        <div class="col-md-12 p-5 bg-white shadow">
            <h1 class="fs-4 p-2 m-0 bg-dark text-white col-md-6">Add Your Category</h1>
            <form method="post" enctype="multipart/form-data">


            <div class="form-group mt-3  col-md-6">
                    <input type="file" name="photo" placeholder="Category photo *" class="form-control" required>
                </div>

                <div class="form-group mt-3  col-md-6">
                    <input type="text" name="catname" placeholder="Category Name *" class="form-control" required>
                </div>

                <div class="form-group mt-3 col-md-6">
                    <input type="date" name="addeddate"  class="form-control" required>
                </div>

               

                <div class="form-group mt-3 col-md-6">
                    <input type="submit" name="addcarcat" class="btn btn-lg btn-primary" value="AddCategory">
                        
                </div>
            </form>


        </div>
    </div>
</div>

</div>
</div>
