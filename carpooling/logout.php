<?php
session_start();
unset($_SESSION["custid"]);
unset($_SESSION["email"]);
unset($_SESSION["fname"]);
session_destroy();

  echo "<script>

       alert('You are Logout successfully')
       window.location='./';

       </script>";
       

   

?>