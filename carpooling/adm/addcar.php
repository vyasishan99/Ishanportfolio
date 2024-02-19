<?php
     
      require_once("config.php");
      require_once("header.php");
      require_once("sidebar.php");


      // add car 
      if(isset($_POST["addcar"]))
      {
        $catname=$_POST["catname"];
        // upload photo
       $tmp_name=$_FILES["photo"]["tmp_name"];
       $path="uploads/car/".$_FILES["photo"]["name"];
       move_uploaded_file($tmp_name,$path);
       $carnm=$_POST["carname"];
       $pr=$_POST["price"];
       $av=$_POST["available"];
       $man=$_POST["manufacture_year"];
       $runn=$_POST["running"];
       $var=$_POST["varients"];
       $addate=$_POST["addeddate"];
       
       
       $insert="insert into tbl_addcar(catid,car_photo,carname,price,availability,manufacture_year,running,varients,date) values('$catname','$path','$carnm','$pr','$av','$man','$runn','$var','$addate')";
       $query=mysqli_query($con,$insert);
       if($query)
       {
        echo "<script>
        alert('Car  successfully added')
        window.location='addcar.php';
        </script>";
       }
       

      }

      
      

?>

<!-- admin content panel -->
<div class="col-md-9 ms-5 p-2 mt-4">

    <div class="row">
        <div class="col-md-12 p-5 bg-white shadow">
            <h1 class="fs-4 p-2 m-0 bg-dark text-white col-md-6">Add Your Car</h1>
            <form method="post" enctype="multipart/form-data">
             <div class="form-group mt-3 col-md-6">   
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
                <input type="file" name="photo" placeholder="Category photo *" class="form-control" required>
            </div>

            <div class="form-group mt-3 col-md-6">
    <input type="text" name="carname" placeholder="Car Name *" class="form-control" style="display: block !important;" required>
</div>

            
            <div class="form-group mt-3  col-md-6">
                <input type="text" name="price" placeholder="Price *" class="form-control" required>
            </div>

            
            <div class="form-group mt-3  col-md-6">
             <select name="available" placeholder="Availability *" class="form-control" required>
             <option value="">-select car availability-</option>
             <option value="available">Available</option>
             <option value="notavailable">Not Available</option>
        </select>
            </div>
            



             
           

            <div class="form-group mt-3  col-md-6">
                <input type="text" name="manufacture_year" placeholder="manufacture_year *" class="form-control" required>
            </div>

            <div class="form-group mt-3  col-md-6">
                <input type="text" name="running" placeholder="km Running *" class="form-control" required>
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
                    <input type="date" name="addeddate"  class="form-control" required>
                </div>

               

                <div class="form-group mt-3 col-md-6">
                    <input type="submit" name="addcar" class="btn btn-lg btn-primary" value="AddCar">
                        
                </div>
    </form>
    </div>
    </div>
    </div>








               
                

               
