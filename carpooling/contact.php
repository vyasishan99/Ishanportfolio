<?php
require_once("config.php");
require_once("page_header.php");

// insert contact us data in tbl_contact
if(isset($_POST["send"]))
{
    date_default_timezone_set("Asia/Calcutta");
    $fnm=$_POST["fname"];
    $lnm=$_POST["lname"];
    $em=$_POST["email"];
    $phone=$_POST["phone"];
    $sub=$_POST["subject"];
    $add=$_POST["address"];
    $date_time=date("d/m/Y H:i:s a");
    $insert="insert into tbl_contact(firstname,lastname,email,phone,subjectid,address,contact_date_time) values('$fnm','$lnm','$email','$phone','$sub','$add','$date_time')";
    $query=mysqli_query($con,$insert);
    echo "<script>
    alert('Thanks for contact with us our one of Admin contact with you Soon')
    window.location='contact.php';
    </script>";
    
}
?>
<!-- ishan content start here -->
<section id="content" class="p-3">
<div class="container mt-5 register-form">
    <div class="row">
    <div class="col-md-4 mt-5">
        <img src="https://cdn.dribbble.com/users/1917942/screenshots/7139971/media/d802dc4eadb049f5a9684759cfdfbffa.gif" alt="reg" class="img-fluid">
    </div>    
    <div class="col-md-6 ms-5">    
    <h2 class="text-center">Contact Us form</h2>
    <hr class="w-25 mx-auto border border-1 border-dark">
    <form method="post">
        
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
            <input type="text" name="phone" placeholder="Phone *" required class="form-control">
        </div>

        <div class="input-group mt-3">
        <select name="subject" placeholder="Subject *" required class="form-control">
            <option value="">-select subject-</option>
            <?php
            $select="select * from tbl_subject";
            $query=mysqli_query($con,$select);
            while($fetch=mysqli_fetch_array($query))
            {
            ?>
           <option value="<?php echo $fetch["subjectid"];?>"><?php echo $fetch["title"];?></option>
             

            <?php
            }
            ?>


</select>
</div>
        
        
        <div class="input-group mt-3">
            <textarea  name="address" placeholder="Address *" required class="form-control"></textarea>
        </div>
        
        <div class="input-group mt-3">
            <input type="submit" name="send" value="Send"  required class="btn btn-lg btn-dark text-white">
            <input type="reset" name="reset" value="Reset"  required class="btn btn-lg ms-3 btn-danger text-white">
          
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
  
  
 





