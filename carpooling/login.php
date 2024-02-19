<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <?php
  session_start();
  require_once("config.php");
  
  
  if(isset($_POST["login"]))
  {
    $email=$_POST["email"];
    $pass=$_POST["pass"];

    $select="select * from tbl_customer where email='$email' and password='$pass'";
    $query=mysqli_query($con,$select);
    $num_rows=mysqli_num_rows($query);
    $fetch=mysqli_fetch_array($query);
    if($num_rows>0)
    {
       $_SESSION["custid"]=$fetch["custid"];
       $_SESSION["email"]=$fetch["email"];
       $_SESSION["fname"]=$fetch["firstname"];

    //    echo "<script>

    //     alert('You are Logged In successfully')
    //     window.location='./';

    //    </script>";

    echo '<script type="text/javascript">sweetAlert("Congratulations !","You are Logged In Successfully","success")
 </script>';
 header("refresh:1,index.php");

    

           

        
       

    }
    else
    {
        // echo "<script>

        // alert('Your email and password are Incorrect try again')
        // window.location='./';
 
        // </script>";
       
   
    echo '<script type="text/javascript">sweetAlert("Oh !","Your Email and password are Incorrect try again","error")
  
  </script>';



        
    }
}
  



?>
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
                    <b class="ms-3"><a href="forgetpassword.php">Forget password ??</a></b>
                </div>

                <div class="input-group mt-3">
                <b class="ms-3">Don't have an account ? <a href="register.php">Create an Account</a></b>
                </div>
            </form>
        </div>
    </div>
</div>

