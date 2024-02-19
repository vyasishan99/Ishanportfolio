<?php
error_reporting(0);
require_once("config.php");
require_once("page_header.php");
?>

<!--what is ajax : ajax stands for asynchronous javascript and xml
                   ajax is used to load server data without page refresh there we used ajax
                   We load ajax through jquery
-->
<!-- ishan content start here -->

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    function str(val)
    {
        $.ajax({
           
          type:"POST",
          url:"getdata.php",
          data:"st="+val,

          success:function(data)
          {
            $("#ct").html(data);
          }

         });
    }
</script>
<section id="content" class="p-3">
<div class="container mt-5 register-form">
    <div class="row">
    <div class="col-md-4 mt-5">
        <img src="https://cdn.dribbble.com/users/1917942/screenshots/7139971/media/d802dc4eadb049f5a9684759cfdfbffa.gif" alt="reg" class="img-fluid">
    </div>    
    <div class="col-md-6 ms-5">    
    <h2 class="text-center">Register Form</h2>
    <hr class="w-25 mx-auto border border-1 border-dark">
    <form method="post" action="insert_data.php" enctype="multipart/form-data">
        <div class="input-group mt-3">
            <input type="file" name="img" placeholder="Email *" required class="form-control">
        </div>

        <div class="row">
        <div class="form-group mt-3 col-md-6">
            <input type="text" name="fname" placeholder="FirstName *" required class="form-control">
        </div>    
        <div class="form-group mt-3 col-md-6">
            <input type="text" name="lname" placeholder="LastName *" required class="form-control">
        </div>

        </form>
        <div class="input-group mt-3">
            <input type="text" name="email" placeholder="Email *" required class="form-control">
        </div>

        
        <div class="input-group mt-3">
            <input type="password" name="pass" placeholder="Password *" required class="form-control">
        </div>

        
        <div class="input-group mt-3">
            <input type="password" name="cpass" placeholder="Confirmed Password *" required class="form-control">
        </div>

        <div class="input-group mt-3">
           Male : <input type="radio" name="gender" value="male" placeholder="Confirmed Password *" class="w-0 h-0">
        
        Female : <input type="radio" name="gender" value="female" placeholder="Confirmed Password *" class="w-0 h-0">
        </div>

        
        <div class="input-group mt-3">
           Reading : <input type="checkbox" name="chk[]" value="reading" placeholder="Password *" class="w-0 h-0">
        

        
        
           Playing : <input type="checkbox" name="chk[]" value="playing" placeholder= "Password *" class="w-0 h-0">
        

        
        
           Surfing : <input type="checkbox" name="chk[]" value="surfing" placeholder="Confirmed Password *" required class="w-0 h-0">
        

        
        
           Cooking : <input type="checkbox" name="chk[]" value="cooking" placeholder="Confirmed Password *" required class="w-0 h-0">
</div>
        
        
        
        
        <div class="input-group mt-3">
            <input type="text" name="phone" placeholder="Phone *" required class="form-control">
        </div>
        
        <div class="input-group mt-3">
            <textarea type="text" name="address" placeholder="Address *" required class="form-control"></textarea>
        </div>

         
        <div class="input-group mt-3">
            <select name="state" id="st" required class="form-control" onchange="return str(this.value)"> 

            <option value="">-select state-</option>
            <?php 
            $select="select * from tbl_state";
            $query=mysqli_query($con,$select);
            while($fetch=mysqli_fetch_array($query))
            {
            ?>
            <option value="<?php echo $fetch["stateid"];?>"><?php echo $fetch["statename"];?></option>
            
            <?php
            }
            ?>
            </select>
        </div>

        <div class="input-group mt-3">
            <select name="city" id="ct" required class="form-control"> 
            <option value="">-select city-</option>
            <option value=""></option>
            </select>
        </div>
        
        <div class="input-group mt-3">
            <input type="submit" name="reg" value="Register"  required class="btn btn-lg btn-dark text-white">
            <input type="reset" name="reset" value="Reset"  required class="btn btn-lg ms-3 btn-danger text-white">
          
        </div>

        <div class="input-group mt-3">
        <b class="ms-3">Already have an account ? <a href="" data-bs-toggle="modal" data-bs-target="#log">Login here</a></b>
        </div>
    </form>
</div>
</div>



</div>
</section>

<!-- login modal load here -->
<div class="modal fade" id="log" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content p-5">
            <h2 class="text-center">Login Form</h2>
            <hr class="w-25 mx-auto border border-1 border-dark">
            <form method="post">
                <div class="input-group mt-3">
                    <input type="text" name="email" placeholder="Email *" required class="form-control">
                </div>

                
                <div class="input-group mt-3">
                    <input type="password" name="pass" placeholder="Password *" required class="form-control">
                </div>
                
                <div class="input-group mt-3">
                    <input type="submit" name="login" value="Login"  required class="btn btn-sm btn-dark text-white">
                    <b class="ms-3"><a href="forgetpassword.html">Forget password ??</a></b>
                </div>

                <div class="input-group mt-3">
                <b class="ms-3">Don't have an account ? <a href="register.html">Create an Account</a></b>
                </div>
            </form>
        </div>
    </div>
</div>


<?php 

require_once("footer.php");

?>


</body>
</html>
  
   
 


