<?php
 // localhost connection
   session_start();
  $ser="localhost";
   $user="root";
   $pass="";
 $dbname="carpoolingapp";
    $con=new mysqli($ser,$user,$pass,$dbname);

//byethost server connections

// $ser="sql111.byethost32.com";
// $user="b32_35864022";
// $pass="i123456";
// $dbname="b32_35864022_carpoolingapp";
//   $con=new mysqli($ser,$user,$pass,$dbname);
  






//   if($con)
//    {
//     echo "successfully connected";
//   }
//   else
//    {
//     die(mysqli_error($con));
//   }
  



?>
