<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once("config.php");
if(isset($_POST["reg"]))
{
    date_default_timezone_set("Asia/Calcutta");
    $tmp_name=$_FILES["img"]["tmp_name"];
    $path="uploads/customers/".$_FILES["img"]["name"];
    move_uploaded_file($tmp_name,$path);
    $fnm=$_POST["fname"];
    $lnm=$_POST["lname"];
    $em=$_POST["email"];
    $pass=$_POST["pass"];
    $cpass=$_POST["cpass"];
    $gender=$_POST["gender"];
    $hobby=implode(",",$_POST["chk"]);
    $phone=$_POST["phone"];
    $add=$_POST["address"];
    $st=$_POST["state"];
    $ct=$_POST["city"];
    $date=date("d/m/Y H:i:s a");
    if($pass==$cpass){
    // insert a data
      $insert="insert into tbl_customer (photo,firstname,lastname,email,password,gender,hobby,phone,address,stateid,ctid,added_date_time)
      values ('$path','$fnm','$lnm','$em','$pass','$gender','$hobby','$phone','$add','$st','$ct','$date')";
      $query=mysqli_query($con,$insert);
      if($query){
      
        echo "<script>
            alert('Thanks for successfully Created your Account')
            window.location='index.php';

        </script>";
      }
    }
      
    else
    {
        echo "<script>
        alert('Sorry your password and confirmed password does not matched try again')
        window.location='register.php';

    </script>";
    }
}
?>
    
    
    

    





