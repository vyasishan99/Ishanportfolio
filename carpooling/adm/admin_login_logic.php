

<?php
require_once("config.php");
// login as admin
if(isset($_POST["login"]))
{
    
    $em=$_POST["email"];
    $pass=$_POST["pass"];
    $select="select * from tbl_admin where email='$em' and password='$pass'";
    $query=mysqli_query($con,$select);

    $num_rows=mysqli_num_rows($query);
    $fetch=mysqli_fetch_array($query);
    if($num_rows==1)
    {
       $_SESSION["adminid"]=$fetch["adminid"];
       $_SESSION["email"]=$fetch["email"];
       
       echo "<script>
         alert('You are Logged in as Admin successfully')
         window.location='dashboard.php';
       </script>";
       

    }
    else
    {
        echo "<script>
        alert('Your email and password are wrong try again.')
        window.location='index.php';
      </script>";
      
    }
  }

?>